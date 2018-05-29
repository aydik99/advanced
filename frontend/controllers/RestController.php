<?php

namespace frontend\controllers;


use common\models\Message;
use yii\data\ActiveDataProvider;
use yii\rest\ActiveController;

class RestController extends ActiveController
{
	public $modelClass = Message::class;

	public function actionIndex()
	{
		return new ActiveDataProvider([
			'query' => Message::find()
		]);
	}

	// public function checkAccess($action, $model=null, $params=[])
	// {
	// 	if(!\Yii::$app->user->id)
	// 		{
	// 			throw new ForbiddenHttpException($action);
	// 		}
	// }

}