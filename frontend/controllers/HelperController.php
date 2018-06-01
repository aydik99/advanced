<?php

namespace frontend\controllers;

use Yii;
use common\models\Message;
use yii\helpers\ArrayHelper;
use  yii\web\Controller;


class HelperController extends Controller
{
	public function actionIndex()
	{
	// 	$arr = [
	// 		'one' => [
	// 			'two' => [
	// 				'val' => 5
	// 			]
	// 		]
	// 	];

	// 	$val = isset($arr['one']['two']['val']) ?: null ;

	// 	var_dump(ArrayHelper::getValue($arr, 'one.two.val'));

	$arr = [
		'title' => 'Lesson 7',
		'content' => 'yii',
		'date' => date("Y-m-d")
	];

	// var_dump(ArrayHelper::remove($arr, 'content'));
	// ArrayHelper::setValue($arr, 'one.two', ['val2' => 'test']);
	// var_dump($arr);
	// var_dump(ArrayHelper::keyExists('content', $arr));
	$arr3 = [
		['id' => 1,
		'title' => 'task1',
		'content' => 'adeewqwsqwdwe'],
		['id' => 2,
		'title' => 'task2',
		'content' => 'wdeewdwqwe'],
		['id' => 3,
		'title' => 'task3',
		'content' => 'wdeewqwsdwe'],
		['id' => 4,
		'title' => 'task4',
		'content' => 'wdeqqqqewdwe']
	];

	// var_dump(ArrayHelper::map($arr3, 'id', 'title','content'));
	ArrayHelper::multisort($arr3, ['content', 'id'], [SORT_ASC, SORT_DESC]);
	// var_dump($arr3);
	// var_dump(ArrayHelper::getColumn($arr3, 'id'));
	// var_dump(ArrayHelper::index($arr3, 'title'));
	// $model = Message::findOne(1);
	// var_dump(ArrayHelper::toArray($model, [
	// 	Message::class => [
	// 		'id',
	// 		'test' => 'title'
	// 	]
	// ]));

	return $this->render('index', ['response' => 'success']);
	
		
	}
}