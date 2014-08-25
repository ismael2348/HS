<?php
/* @var $this InventIpController */
/* @var $model InventIp */

$this->breadcrumbs=array(
	'Invent Ips'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Lista de IPs', 'url'=>array('index')),
	//array('label'=>'Create InventIp', 'url'=>array('create')),
	//array('label'=>'View InventIp', 'url'=>array('view', 'id'=>$model->id)),
	//array('label'=>'Manage InventIp', 'url'=>array('admin')),
);
?>

<h1>Actualizar Ip <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>