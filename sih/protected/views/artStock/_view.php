<?php
/* @var $this ArtStockController */
/* @var $data ArtStock */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_art')); ?>:</b>
	<?php echo CHtml::encode($data->id_art); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cantidad')); ?>:</b>
	<?php echo CHtml::encode($data->cantidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('max_stock')); ?>:</b>
	<?php echo CHtml::encode($data->max_stock); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('min_stock')); ?>:</b>
	<?php echo CHtml::encode($data->min_stock); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_ingreso')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_ingreso); ?>
	<br />


</div>