<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuarios-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); 





$this->widget('ext.MyAutoComplete', array(
    'model'=>$model,
    'attribute'=>'id_persona',
    'name'=>'persona_autocomplete',
    //'id'=>'Peticiones_para',
    'source'=>$this->createUrl('personas/obtenerPersonas'),  // Controller/Action path for action we created in step 4.
    // additional javascript options for the autocomplete plugin
    'options'=>array(
        'minLength'=>'0',
    ),

	));





	?>





	<div class="row">
		<?php echo $form->labelEx($model,'id_rol'); ?>
		<?php echo $form->textField($model,'id_rol'); ?>
		<?php echo $form->error($model,'id_rol'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_persona'); ?>
		<?php echo $form->textField($model,'id_persona'); ?>
		<?php echo $form->error($model,'id_persona'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usuario'); ?>
		<?php echo $form->textField($model,'usuario',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contrasena'); ?>
		<?php echo $form->textField($model,'contrasena',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'contrasena'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_registro'); ?>
		<?php echo $form->textField($model,'fecha_registro'); ?>
		<?php echo $form->error($model,'fecha_registro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_expiracion'); ?>
		<?php echo $form->textField($model,'fecha_expiracion'); ?>
		<?php echo $form->error($model,'fecha_expiracion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'activo'); ?>
		<?php echo $form->textField($model,'activo'); ?>
		<?php echo $form->error($model,'activo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->