<?php
use \yii\helpers\Html;
	$response = 'success';	
	$options = ['class' => 'btn btn-default'];
	if($response == 'success')
	{
		Html::removeCssClass($options, "btn-default");
		Html::addCssClass($options, "btn-success");
	}
	echo Html::tag("button", "Me", $options);