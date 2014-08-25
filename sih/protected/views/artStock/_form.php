<?php
/* @var $this ArtStockController */
/* @var $model ArtStock */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'art-stock-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_art'); ?>
		<?php echo $form->textField($model,'id_art'); ?>
		<?php echo $form->error($model,'id_art'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cantidad'); ?>
		<?php echo $form->textField($model,'cantidad'); ?>
		<?php echo $form->error($model,'cantidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'max_stock'); ?>
		<?php echo $form->textField($model,'max_stock'); ?>
		<?php echo $form->error($model,'max_stock'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'min_stock'); ?>
		<?php echo $form->textField($model,'min_stock'); ?>
		<?php echo $form->error($model,'min_stock'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_ingreso'); ?>
		<?php echo $form->textField($model,'fecha_ingreso'); ?>
		<?php echo $form->error($model,'fecha_ingreso'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->