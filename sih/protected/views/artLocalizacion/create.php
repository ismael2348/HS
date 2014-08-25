<?php
/* @var $this ArtLocalizacionController */
/* @var $model ArtLocalizacion */

$this->breadcrumbs=array(
	'Art Localizacions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ArtLocalizacion', 'url'=>array('index')),
	array('label'=>'Manage ArtLocalizacion', 'url'=>array('admin')),
);
?>

<h1>Create ArtLocalizacion</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>