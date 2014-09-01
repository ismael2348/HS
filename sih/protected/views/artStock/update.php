<?php
/* @var $this ArtStockController */
/* @var $model ArtStock */

$this->breadcrumbs=array(
	'Art Stocks'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ArtStock', 'url'=>array('index')),
	array('label'=>'Create ArtStock', 'url'=>array('create')),
	array('label'=>'View ArtStock', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ArtStock', 'url'=>array('admin')),
);
?>

<h1>Actualización de  ArtStock <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>