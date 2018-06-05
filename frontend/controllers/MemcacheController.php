<?php 

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\caching\MemCache;


class MemcacheController extends Controller
{
	public function actionIndex()
	{
		$keyProjects = 'project_cache';
		$project = null;
		$from = null;
		$cache = \Yii::$app->memCache;
		if($cache->exists($keyProjects))
			{
				$project =$cache->get($keyProjects);
				$from = 'MemCache';
			}
			else
			{
				$project = Project::find()->all();
				$cache->set($keyProjects, $project, 10);
				$from = 'DB';
			}

		return $this->render('index',[
			'project' => $project,
			'from' => $from
		]);
	}
}