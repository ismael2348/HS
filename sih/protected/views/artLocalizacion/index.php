<?php
/* @var $this ArtLocalizacionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Art Localizacions',
);

$this->menu=array(
	array('label'=>'Create ArtLocalizacion', 'url'=>array('create')),
	array('label'=>'Manage ArtLocalizacion', 'url'=>array('admin')),
);
?>

<h1>Art Localizacions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
