<?php
/* @var $this InventExtensionesController */
/* @var $model InventExtensiones */

$this->breadcrumbs=array(
	'Invent Extensiones'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List InventExtensiones', 'url'=>array('index')),
	array('label'=>'Manage InventExtensiones', 'url'=>array('admin')),
);
?>

<h1>Registro de  InventExtensiones</h1>

<?php $this->renderPartial('_form', array('model'=>$model,'InventIp'=>$InventIp)); ?>