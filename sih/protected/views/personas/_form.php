<?php
/* @var $this PersonasController */
/* @var $model Personas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'personas-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
<div class="divisor">
<!-- forma de personas -->
	<div class="row">
		<?php echo $form->labelEx($model,'nombres'); ?>
		<?php echo $form->textField($model,'nombres',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nombres'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ap_pat'); ?>
		<?php echo $form->textField($model,'ap_pat',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'ap_pat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ap_mat'); ?>
		<?php echo $form->textField($model,'ap_mat',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'ap_mat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_nac'); ?>
		<?php echo $form->textField($model,'fecha_nac',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'fecha_nac'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nss'); ?>
		<?php echo $form->textField($model,'nss',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nss'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rfc'); ?>
		<?php echo $form->textField($model,'rfc',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'rfc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'curp'); ?>
		<?php echo $form->textField($model,'curp',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'curp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sexo'); ?>
		<?php echo $form->textField($model,'sexo',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'sexo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estado_civil'); ?>
		<?php echo $form->textField($model,'estado_civil',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'estado_civil'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'escolaridad'); ?>
		<?php echo $form->textField($model,'escolaridad',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'escolaridad'); ?>
	</div>


	
	<!--
	<div class="row">
		<?php /* echo $form->labelEx($model,'id_personas_info'); ?>
		<?php echo $form->textField($model,'id_personas_info'); ?>
		<?php echo $form->error($model,'id_personas_info'); */ ?>
	</div>
	-->



</div>

<div class="divisor">

<div class="row">
	Calle y número:<br>
	<input size="60" maxlength="100" name="PersonasInfo[calle_num]" id="PersonasInfo_calle_num" type="text">
	</div>

	<div class="row">
	Colonia:<br>
	<input size="60" maxlength="100" name="PersonasInfo[colonia]" id="PersonasInfo_colonia" type="text">
	</div>

	<div class="row">
	Código Postal:<br>
	<input size="10" maxlength="10" name="PersonasInfo[cp]" id="PersonasInfo_cp" type="text">
	</div>

	<div class="row">
	Municipio:<br>
	<input size="60" maxlength="100" name="PersonasInfo[municipio]" id="PersonasInfo_municipio" type="text">
	</div>

	<div class="row">
	Estado:<br>
	<input size="30" maxlength="30" name="PersonasInfo[estado]" id="PersonasInfo_estado" type="text">
	</div>

	<div class="row">
	País:<br>
	<input size="30" maxlength="30" name="PersonasInfo[pais]" id="PersonasInfo_pais" type="text">
	</div>

	<div class="row">
	Correo Electronico:<br>
	<input size="60" maxlength="100" name="PersonasInfo[email]" id="PersonasInfo_email" type="text">
	</div>

	<div class="row">
	Correo Electronico 2:<br>
	<input size="60" maxlength="100" name="PersonasInfo[email2]" id="PersonasInfo_email2" type="text">
	</div>

	<div class="row">
	Télefono:<br>
	<input size="15" maxlength="15" name="PersonasInfo[telefono]" id="PersonasInfo_telefono" type="text">
	</div>

	<div class="row">
	Télefono 2:<br>
	<input size="15" maxlength="15" name="PersonasInfo[telefono2]" id="PersonasInfo_telefono2" type="text">
	</div>

	<div class="row">
	Celular:<br>
	<input size="15" maxlength="15" name="PersonasInfo[celular]" id="PersonasInfo_celular" type="text">
	</div>

	<div class="row">
	Celular 2:<br>
	<input size="15" maxlength="15" name="PersonasInfo[celular2]" id="PersonasInfo_celular2" type="text">
	</div>
</div>


<div class="divisor">


	<div class="row">
		<?php echo $form->labelEx($model,'fecha_ingreso'); ?>
		<?php echo $form->textField($model,'fecha_ingreso'); ?>
		<?php echo $form->error($model,'fecha_ingreso'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'id_area_puesto'); ?>
		<?php echo $form->textField($model,'id_area_puesto'); ?>
		<?php echo $form->error($model,'id_area_puesto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_turno'); ?>
		<?php echo $form->textField($model,'id_turno'); ?>
		<?php echo $form->error($model,'id_turno'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>



</div>


<?php $this->endWidget(); ?>

</div><!-- form -->