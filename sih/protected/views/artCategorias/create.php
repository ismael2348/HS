<?php
/* @var $this ArtCategoriasController */
/* @var $model ArtCategorias */

$this->breadcrumbs=array(
	'Art Categoriases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ArtCategorias', 'url'=>array('index')),
	array('label'=>'Manage ArtCategorias', 'url'=>array('admin')),
);
?>

<h1>Registro de  ArtCategorias</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>