<?php
/* @var $this ArtCategoriasController */
/* @var $model ArtCategorias */

$this->breadcrumbs=array(
	'Art Categoriases'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ArtCategorias', 'url'=>array('index')),
	array('label'=>'Create ArtCategorias', 'url'=>array('create')),
	array('label'=>'View ArtCategorias', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ArtCategorias', 'url'=>array('admin')),
);
?>

<h1>Actualización de  ArtCategorias <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>