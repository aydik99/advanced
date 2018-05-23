<?php 
use yii\helpers\Html;
use yii\widgets\Pjax;
?>

<div>
	<h1>PJAX</h1>
	<?php Pjax::begin() ?>
	<?= Html::beginForm("/index.php?r=pjax/form", "post", ['class' => 'form-inline', 'data-pjax' => ''])?>
	<?= Html::input("text", "string", Yii::$app->request->post('string'), ['class' => 'control'])?>
	<?= Html::submitButton("hash", ['class' => 'btn btn-success', 'name' => 'hash'])?>
	<h2>Now time  <?= $hash?></h2>
	<?php Pjax::end()?>
</div>