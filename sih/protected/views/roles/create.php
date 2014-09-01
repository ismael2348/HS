<?php
/* @var $this RolesController */
/* @var $model Roles */

$this->breadcrumbs=array(
	'Roles'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Gestión de Roles', 'url'=>array('admin')),
);
?>

<h1>Registro de Roles</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>