<?php
/* @var $this ArtLocalizacionController */
/* @var $model ArtLocalizacion */

$this->breadcrumbs=array(
	'Art Localizacions'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ArtLocalizacion', 'url'=>array('index')),
	array('label'=>'Create ArtLocalizacion', 'url'=>array('create')),
	array('label'=>'View ArtLocalizacion', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ArtLocalizacion', 'url'=>array('admin')),
);
?>

<h1>Actualización de  ArtLocalizacion <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>