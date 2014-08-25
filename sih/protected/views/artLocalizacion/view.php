<?php
/* @var $this ArtLocalizacionController */
/* @var $model ArtLocalizacion */

$this->breadcrumbs=array(
	'Art Localizacions'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ArtLocalizacion', 'url'=>array('index')),
	array('label'=>'Create ArtLocalizacion', 'url'=>array('create')),
	array('label'=>'Update ArtLocalizacion', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ArtLocalizacion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ArtLocalizacion', 'url'=>array('admin')),
);
?>

<h1>View ArtLocalizacion #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_art',
		'id_area',
		'id_persona',
		'cantidad',
		'fecha_ingreso',
	),
)); ?>
