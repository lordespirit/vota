
$(document).ready(function(){
	
	// Al perdre el focus de les variables del form, si està buit fem un text i avís visual (únic camp text que tenim)
	$("#appbundle_enquesta_pregunta").focusout(function(){
		var pregunta = $(this).val();
		if(!pregunta){
			preguntaFocus();
		}else{
			$("#appbundle_enquesta_pregunta").css({"border-color": "", 
													"border-width":"0", 
													"border-style":""});
			$("#warningFormPregunta").remove();		
										
		}
	});
	
	// En el momentl del submit per registrar l'enquesta, creem un event per fer un check de les variables del form
	$(document).on("click","#appbundle_enquesta_registrar", function (event) {	
				
		if(!checkDades()){
			alert("Error validació, comprova pregunta i dates");
			event.preventDefault();	
		}

	});

		
});

function preguntaFocus(){
	
	$("#appbundle_enquesta_pregunta").css({"border-color": "red", 
													"border-width":"3px", 
													"border-style":"solid"});
												
		// Si hi és el warning, l'esborrem, no el volem repetit
		$("#warningFormPregunta").remove();		
		// Afegim després d'aquesta validació un missatge d'error en cas d'estar buit
		$("#appbundle_enquesta_pregunta").after("<p id='warningFormPregunta' style='color:red;margin-bottom:5px;'>La pregunta no pot estar buida!</p>");
	
}

/*
function datesFocus(){

	$("#appbundle_enquesta_dataFinal_year").css({"border-color": "red", 
													"border-width":"3px", 
													"border-style":"solid"});
												
		// Si hi és el warning, l'esborrem, no el volem repetit
		$("#warningFormData").remove();		
		// Afegim després d'aquesta validació un missatge d'error en cas d'estar buit
		$("#appbundle_enquesta_dataFinal_year").after("<p id='warningFormData' style='color:red;margin-bottom:5px;'>Comprova que la data inici sigui anterior a la final<br/>I que no finalitza el mateix dia que comença</p>");
}
*/

function checkDades(){
	
	// Agafem les variables del input
		$pregunta = $("#appbundle_enquesta_pregunta").val();

		$finalMes = $( "select#appbundle_enquesta_dataFinal_month option:checked" ).val();
		$finalAny = $( "select#appbundle_enquesta_dataFinal_year option:checked" ).val();
		$finalDia = $( "select#appbundle_enquesta_dataFinal_day option:checked" ).val();
		
		$iniciMes = $( "select#appbundle_enquesta_dataInici_month option:checked" ).val();
		$iniciAny = $( "select#appbundle_enquesta_dataInici_year option:checked" ).val();
		$iniciDia = $( "select#appbundle_enquesta_dataInici_day option:checked" ).val();

		console.log($pregunta);
		console.log($finalDia);
		console.log($finalMes);
		console.log($finalAny);
		console.log($iniciDia);
		console.log($iniciMes);
		console.log($iniciAny);

		
		// Per defecte, donem per fet que no hi ha error a les dates
		$dataError = false;
		
		// I ara introduim la lògica de comprovació de dates
		// Symfony form ja té la lògica de no deixar introduir una data rara (exemple: 30 de febrer)
		// Però no valida en cap cas si s'inicia més tard que la data final
		if(
			($iniciAny >	$finalAny)	||
			($iniciAny ===	$finalAny	&&	$iniciMes	>	$finalMes)	||
			($iniciAny ===	$finalAny	&&	$iniciMes	=== $finalMes	&&	$iniciDia >= $finalDia)
		)
	{
			$dataError = true;
		}
		
		// Si alguna de les dades no cumpleix, escalem l'error al usuari de la manera descrita
		if (
			( !$pregunta ) ||										// Check de pregunta, no necessari, form ja valida tot això
			( !$finalDia ) || ( !$finalMes ) || ( !$finalAny ) ||	// Check de datas (no necessari, el form no dóna la possibilitat de buit
			( !$iniciMes ) || ( !$iniciAny ) || ( !$iniciDia ) ||
			( $dataError === true )	
			)
		{
			return false;
		}else{
			return true;
		}
	
}