<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */

$this->breadcrumbs=array(
	'Usuarioses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Registrar Usuario', 'url'=>array('create')),
	array('label'=>'Gestión de Usuarios', 'url'=>array('admin')),
);
?>

<h1>Actualización de  Usuarios <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>