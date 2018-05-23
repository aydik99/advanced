<?php 
use yii\helpers\Html;
use yii\widgets\Pjax;
?>

<div>
	<h1>PJAX</h1>
	<?php Pjax::begin() ?>
	<?= \yii\helpers\Html::a("Refresh time", ['/pjax/multiple'],['class' => 'btn btn-success'])?>
	<h2>Now time  <?= $time?></h2>
	<?php Pjax::end()?>

	<h1>PJAX</h1>
	<?php Pjax::begin() ?>
	<?= \yii\helpers\Html::a("Refresh time", ['/pjax/multiple'],['class' => 'btn btn-success'])?>
	<h2>Now time  <?= $hash?></h2>
	<?php Pjax::end()?>
</div>