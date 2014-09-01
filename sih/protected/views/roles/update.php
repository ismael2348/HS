<?php
/* @var $this RolesController */
/* @var $model Roles */

$this->breadcrumbs=array(
	'Roles'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Registrar Rol', 'url'=>array('create')),
	array('label'=>'Gestión de Roles', 'url'=>array('admin')),
);
?>

<h1>Actualización de Rol</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>