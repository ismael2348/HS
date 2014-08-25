<?php
/* @var $this AreasPuestosController */
/* @var $model AreasPuestos */

$this->breadcrumbs=array(
	'Areas Puestoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Volver a áreas y puestos', 'url'=>array('index')),
);
?>

<h1>Vinculación de puestos para <?php echo $areaNombre; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model, 'puestos'=>$puestos)); ?>