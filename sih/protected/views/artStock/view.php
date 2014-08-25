<?php
/* @var $this ArtStockController */
/* @var $model ArtStock */

$this->breadcrumbs=array(
	'Art Stocks'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ArtStock', 'url'=>array('index')),
	array('label'=>'Create ArtStock', 'url'=>array('create')),
	array('label'=>'Update ArtStock', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ArtStock', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ArtStock', 'url'=>array('admin')),
);
?>

<h1>View ArtStock #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_art',
		'cantidad',
		'max_stock',
		'min_stock',
		'fecha_ingreso',
	),
)); ?>
