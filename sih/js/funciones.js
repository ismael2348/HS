$(document).ready(function(){
	

});


function mostrar(fired,idElemento){
	$("#"+idElemento).show();
	$(fired).hide();
}

function mostrarIncidente(id){

	$.post( "<? echo Yii::app()->createUrl('incidentesController/incoming'); ?>", function( data ) {
		$( ".result" ).html( data );
	});

	alert("mostrar este "+id);


}

