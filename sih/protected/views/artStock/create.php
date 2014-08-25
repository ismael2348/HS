<?php
/* @var $this ArtStockController */
/* @var $model ArtStock */

$this->breadcrumbs=array(
	'Art Stocks'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ArtStock', 'url'=>array('index')),
	array('label'=>'Manage ArtStock', 'url'=>array('admin')),
);
?>

<h1>Create ArtStock</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>