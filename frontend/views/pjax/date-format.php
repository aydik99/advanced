<?php 
use yii\helpers\Html;
use yii\widgets\Pjax;
?>

<div>
	<h1>PJAX</h1>
	<?php Pjax::begin() ?>
	<?= \yii\helpers\Html::a("Все", ['/pjax/hours'],['class' => 'btn btn-success'])?>
	<?= \yii\helpers\Html::a("Минуты и секунды", ['/pjax/minutes'],['class' => 'btn btn-warning'])?>
	<h2>Now time  <?= $time?></h2>
	<?php Pjax::end()?>
</div>