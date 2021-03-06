<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */

$this->breadcrumbs=array(
	'Usuarioses'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Registrar Usuario', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#usuarios-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gestión de Usuarios</h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'usuarios-grid',
	'dataProvider'=>$model->search(),
//	'filter'=>$model,
	'columns'=>array(
		array(
			'class'=>'CButtonColumn', 'template'=>'{delete} {update} {view}','header'=>'<b>Acciones</b>',//'htmlOptions'=>array('width'=>'90px'),
		),
		
		array(
            'header' => '<b>Nombre del empleado</b>',
            'value' => array($this,'nombreEmpleado'),'type'=>'raw'
        ),
		'usuario',
		//'id_rol',
		array(
            'header' => '<b>Rol</b>',
            'value' => array($this,'nombreRol'),'type'=>'raw'
        ),
	//	'id_persona',

	//	'contrasena',
		'fecha_registro',
		'fecha_expiracion',
	),
)); ?>
