
$(document).ready(function(){
	
	// En el momentl del submit per registrar l'enquesta, creem un event per fer un check de les variables del form
	$(document).on("click","#appbundle_enquesta_registrar", function (event) {	
				
		if(!checkDades()){
			datesFocus();
			//alert("Error de validació, la data no pot ser anterior a la d'avui");
			event.preventDefault();	
		}

	});

		
});



function datesFocus(){

	$("#appbundle_enquesta_dataFinal_year").css({"border-color": "red", 
													"border-width":"3px", 
													"border-style":"solid"});
												
		// Si hi és el warning, l'esborrem, no el volem repetit
		$("#warningFormData").remove();		
		// Afegim després d'aquesta validació un missatge d'error en cas d'estar buit
		$("#appbundle_enquesta_dataFinal_year").after("<p id='warningFormData' style='color:red;margin-bottom:5px;'>Error de validació, la data no pot ser anterior a la d'avui</p>");
}


function checkDades(){
	
		const monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "Jun",
		  "Jul", "Aug", "Sept", "Oct", "Nov", "Dec"
		];

		const d = new Date();
		var mes = monthNames[d.getMonth()]);
		var any = d.getFullYear();
		var dia = d.getDay();
		
		$finalMes = $( "select#appbundle_enquesta_dataFinal_month option:checked" ).val();
		$finalAny = $( "select#appbundle_enquesta_dataFinal_year option:checked" ).val();
		$finalDia = $( "select#appbundle_enquesta_dataFinal_day option:checked" ).val();

		// Per defecte, donem per fet que no hi ha error a les dates
		$dataError = false;
		
		// I ara introduim la lògica de comprovació de dates
		// Symfony form ja té la lògica de no deixar introduir una data rara (exemple: 30 de febrer)
		// Però no valida en cap cas si s'inicia més tard que la data final
		if(
			($any >	$finalAny)	||
			($any ===	$finalAny	&&	$mes	>	$finalMes)	||
			($any ===	$finalAny	&&	$mes	=== $finalMes	&&	$dia > $finalDia)
		)
	{
			$dataError = true;
		}
		
		// Si alguna de les dades no cumpleix, escalem l'error al usuari de la manera descrita
		if (
			( !$finalDia ) || ( !$finalMes ) || ( !$finalAny ) ||	// Check de datas (no necessari, el form no dóna la possibilitat de buit
			( $dataError === true )	
			)
		{
			return false;
		}else{
			return true;
		}
	
}