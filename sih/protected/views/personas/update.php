<?php
/* @var $this PersonasController */
/* @var $model Personas */

?>

<h1>Actualización de datos</h1>

<?php $this->renderPartial('_form', array('model'=>$model, 'personasInfo'=>$personasInfo, 'turnos'=>$turnos, 'areas'=>$areas,)); ?>