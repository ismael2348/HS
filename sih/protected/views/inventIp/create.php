<?php
/* @var $this InventIpController */
/* @var $model InventIp */

$this->breadcrumbs=array(
	'Invent Ips'=>array('index'),
	'Crear',
);

$this->menu=array(
	//array('label'=>'List InventIp', 'url'=>array('index')),
	array('label'=>'Administrador de IPs', 'url'=>array('admin')),
);
?>

<h1>Nueva Ip</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>