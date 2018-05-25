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
	<h1>telegram</h1>
	<?php Pjax::begin() ?>
	<?= Html::a("Refresh", ['/telegram/index/'],['class' => 'btn btn-success', 'id' => 'btn-refresh'])?>
	<div><?= var_dump($data);?></div>
	<?php Pjax::end()?>
</div>