<?php
namespace frontend\controllers;
use SonkoDmitry\Yii\TelegramBot\Component;
use yii\web\Controller;

class TelegramController extends Controller
{
    public $chatId = '';
    public function actionIndex()
    {
        $bot = \Yii::$app->bot;
        $bot->setCurlOption(CURLOPT_HTTPHEADER, ['Expect:']);
        $bot->setCurlOption(CURLOPT_TIMEOUT, 200);
        $bot->setCurlOption(CURLOPT_CONNECTTIMEOUT, 200);
        $updates = $bot->getUpdates();
        $data = [];
        foreach ($updates as $update) {
            $message = $update->getMessage();
            $data[] = $message->getText();
            $chatId = $message->getChat()->getId();
        }



        return $this->render('index', ['data' => $data]);
    }

    public  function actionSend()
    {
        $bot = \Yii::$app->bot;

        $bot->sendMessage($this->chatId,"yes");
    }
}
