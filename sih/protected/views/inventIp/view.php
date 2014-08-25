<?php
/* @var $this InventIpController */
/* @var $model InventIp */

$this->breadcrumbs=array(
	'Invent Ips'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Lista de IPs', 'url'=>array('index')),
	//array('label'=>'Create InventIp', 'url'=>array('create')),
	//array('label'=>'Update InventIp', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar Ip', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	//array('label'=>'Manage InventIp', 'url'=>array('admin')),
);
?>

<h1>Ver Ip #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'ip',
		//'activo',
	),
)); ?>
