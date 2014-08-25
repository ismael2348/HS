<?php
/* @var $this InventExtensionesController */
/* @var $model InventExtensiones */

$this->breadcrumbs=array(
	'Invent Extensiones'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List InventExtensiones', 'url'=>array('index')),
	array('label'=>'Create InventExtensiones', 'url'=>array('create')),
	array('label'=>'Update InventExtensiones', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete InventExtensiones', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage InventExtensiones', 'url'=>array('admin')),
);
?>

<h1>View InventExtensiones #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_ip',
		'id_area',
		'tipo_equipo',
		'num_ext',
		'fecha_reg',
		'activo',
	),
)); ?>
