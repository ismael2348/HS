<?php
/* @var $this InventIpController */
/* @var $model InventIp */

$this->breadcrumbs=array(
	'Invent Ips'=>array('index'),
	'Administrador de IPs',
);

$this->menu=array(
	array('label'=>'Lista de IPs', 'url'=>array('index')),
	array('label'=>'Nueva IP ', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#invent-ip-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrador de IPs</h1>



<?php echo CHtml::link('Busqueda Avanzada',':D',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'invent-ip-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'ip',
		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
