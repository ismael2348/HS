
<?php

/* @var $this IncidentesController */
/* @var $model Incidentes */

?>


<div id="result" >
</div>



<h1>Incidentes </h1>




<div class="lista">
<?php
	foreach($model as $indice => $valor){
		
     echo CHtml::ajaxLink(' 
		<span class="listaItem" style="color:#333 !important;">
			FOLIO: '.$valor->folio.'&nbsp;&nbsp;&nbsp;&nbsp; ESTATUS: '.$valor->estado.'&nbsp;&nbsp;&nbsp;&nbsp; ENVIADO: '.substr($valor->fecha_creacion,0,16).'<br>
			ÁREA RESPONSABLE: '.$valor->para_id_area.' <br>
			'.substr($valor->asunto, 0, 72).' ...
		</span>',
        array('incidentes/test','id'=>$valor->id),
        
         array('update'=>'#incidentesx')
         

        );

}
?>
</div>


<div class="incidenteWrapper">
	<div class="incidente" id="incidentesx">

	Seleccione un incidente de al lado para ver sus detalles aquí.
	</div>

	<div class="seguimientos">
	<span class="listaItem">
CREACION: 01-03-2014<br>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod ...
	</span>
	<span class="listaItem">
		CREACION: 01-03-2014<br>

		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</span>	
		<span class="listaItem">
		CREACION: 01-03-2014<br>

		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</span>

	</div>
</div>

