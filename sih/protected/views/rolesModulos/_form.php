<?php
/* @var $this RolesModulosController */
/* @var $model RolesModulos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'roles-modulos-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_rol'); ?>
		<?php echo $form->textField($model,'id_rol'); ?>
		<?php echo $form->error($model,'id_rol'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_modulo'); ?>
		<?php echo $form->textField($model,'id_modulo'); ?>
		<?php echo $form->error($model,'id_modulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'activo'); ?>
		<?php echo $form->textField($model,'activo'); ?>
		<?php echo $form->error($model,'activo'); ?>
	</div>

	<div class="row">
	Permisos:<br>
	<label><input type="checkbox" name="ver" id="ver" value="1" /> VER</label><br/> 
	<label><input type="checkbox" name="crear" id="crear" value="1" /> CREAR</label><br/>
	<label><input type="checkbox" name="actualizar" id="actualizar" value="1" /> ACTUALIZAR</label><br/>
	<label><input type="checkbox" name="borrar" id="borrar" value="1" /> BORRAR</label>
		<?php /* echo $form->labelEx($model,'permisos'); ?>
		<?php echo $form->textField($model,'permisos'); ?>
		<?php echo $form->error($model,'permisos'); */ ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->