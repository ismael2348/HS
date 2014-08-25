<?php
/* @var $this ArtCategoriasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Art Categoriases',
);

$this->menu=array(
	array('label'=>'Create ArtCategorias', 'url'=>array('create')),
	array('label'=>'Manage ArtCategorias', 'url'=>array('admin')),
);
?>

<h1>Art Categoriases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
