<?php
/* @var $this ArtCategoriasController */
/* @var $model ArtCategorias */

$this->breadcrumbs=array(
	'Art Categoriases'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ArtCategorias', 'url'=>array('index')),
	array('label'=>'Create ArtCategorias', 'url'=>array('create')),
	array('label'=>'Update ArtCategorias', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ArtCategorias', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ArtCategorias', 'url'=>array('admin')),
);
?>

<h1>View ArtCategorias #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'activo',
	),
)); ?>
