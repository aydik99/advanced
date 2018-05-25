<?php
namespace console\controllers;

use yii\console\Controller;

class TelegramController extends Controller
{
    private $offset = 0;

    public function actionIndex()
    {
        $this->getOffset();

        $bot = \Yii::$app->bot;
        $updates = $bot->getUpdates($this->offset + 1);
        if(count($updates) > 0)
        {
            echo count($updates).PHP_EOL;
            foreach ($updates as $update) {
                $this->updateOffset($update);
                $this->processCommand($update->getMessage());
            }
        }
        else
        {
            echo "No";
        }
    }

    protected function getOffset()
    {
        $max = TelegramOffset::find()->select('id_offset')->max('id_offset');
        if($max > 0)
        {
            $this->offset = $max;
        }
    }

    protected function updateOffset(Update $update)
    {
        $model = new TelegramOffset([
            'id_offset' => $update->getUpdateId(),
            'timestamp_offset' => date("Y-m-d H:i:s")
        ]);
        $model->save();
    }


 protected function processCommand(Message $message)
    {
        $bot = \Yii::$app->bot;
        $text = $message->getText();
        if(strlen($text)<1)
        {
            return;
        }

        $params = explode(" ", $text);

        $command = $params[0];

        switch($command)
        {
        case '/help':
            $response = "commands: \n"
            $response .= "/sp_create ##login##";
            $bot->sendMessage($message->getFrom()->getId(), $response);
            break;
        case '/sp_create':
            $response = "user subscribed";
            $bot->sendMessage($message->getFrom()->getId(), $response);
            break;
        }
    }