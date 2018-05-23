<?php 
use yii\helpers\Html;
use yii\widgets\Pjax;

$script = <<< JS
	setInterval(function() {
		$('#btn-refresh').click()
	}, 1000)
JS;

$this->registerJs($script);
?>

<div>
	<h1>PJAX</h1>
	<?php Pjax::begin() ?>
	<?= \yii\helpers\Html::a("Refresh time", ['/pjax/refresh'],['class' => 'btn btn-success', 'id' => 'btn-refresh'])?>
	<h2>Now time  <?= $time?></h2>
	<?php Pjax::end()?>
</div>