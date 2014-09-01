<?php
/* @var $this ArticulosController */
/* @var $model Articulos */

$this->breadcrumbs=array(
	'Articuloses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Articulos', 'url'=>array('index')),
	array('label'=>'Manage Articulos', 'url'=>array('admin')),
);
?>

<h1>Registro de  Articulos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>