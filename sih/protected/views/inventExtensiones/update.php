<?php
/* @var $this InventExtensionesController */
/* @var $model InventExtensiones */

$this->breadcrumbs=array(
	'Invent Extensiones'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List InventExtensiones', 'url'=>array('index')),
	array('label'=>'Create InventExtensiones', 'url'=>array('create')),
	array('label'=>'View InventExtensiones', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage InventExtensiones', 'url'=>array('admin')),
);
?>

<h1>Update InventExtensiones <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>