<?php

use yii\helpers\Html;

?>

<?php
	$fechaBase = '';
	foreach ($models as $model) {
		$estaFecha = date('Y-m-d', strtotime($model->event_date));
		if ($fechaBase !== $estaFecha) {
			if (!empty($fechaBase)) {
				echo '</div></div>';
			}
			$fechaBase = $estaFecha;
			echo '<div class="timeline-container timeline-style2">';
			echo '<span class="timeline-label" style="width: 100px"><b>' . Yii::$app->formatter->asRelativeTime($fechaBase) . '</b></span>';
			echo '<div class="timeline-items">';
		}

		echo '<div class="timeline-item clearfix">';
		echo '<div class="timeline-info">';
		echo '<span class="timeline-date">' . Yii::$app->formatter->asDate($model->event_date, 'php:H:i a') . '</span>';
		echo '<i class="timeline-indicator btn btn-info no-hover"></i>';
		echo '</div>';

		echo '<div class="widget-box transparent">';
		echo '<div class="widget-body">';
		echo '<div class="widget-main no-padding">';
		echo $model->event_detail;
		echo '</div></div></div></div>';
	}
?>
