<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */

$this->breadcrumbs=array(
	'Usuarioses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Gestión de Usuarios', 'url'=>array('admin')),
);
?>

<h1>Registro de  Usuarios</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>