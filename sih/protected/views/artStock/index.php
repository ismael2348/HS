<?php
/* @var $this ArtStockController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Art Stocks',
);

$this->menu=array(
	array('label'=>'Create ArtStock', 'url'=>array('create')),
	array('label'=>'Manage ArtStock', 'url'=>array('admin')),
);
?>

<h1>Art Stocks</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
