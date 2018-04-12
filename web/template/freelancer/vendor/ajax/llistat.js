/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function(){
	
    $.ajax({
		url: '/llistat',
		dataType: 'json',
		success: function(data) {
			llistat(data);
		}
	});
	
	// Obtenim al clickar sobre la pregunta el valor ID de l'enquesta i realitzem la crida ajax
	$(document).on("click","#pregunta", function () {

		var id_enquesta = $(this).attr('enquesta');

			$.ajax({
			url: '/enquesta',
			type: 'POST',
			dataType: 'json',
			data: id_enquesta ,
			success: function(data) {
				
			// Cridem a la funció que dibuixa l'enquesta amb canvasJS
			enquesta(data);	
		
			}
		});
		
	});
	
	
	// Si fa click al votar, comprovem abans si ha escollir resposta
	// A més, aquest realitza la crida al controlador sense recarregar la pàqina per inserir el vot
	$(document).on("click",".butoSubmit", function (event) {

		if($('input[name=vot]').is(':checked')){
			// Agafem les variables del form
			
			var id_enquesta =  parseInt($('input[name=id_enquesta]', '#vota').val());
			var vot			=  parseInt($('input[name=vot]:checked', '#vota').val());
			
			var jsonData = {"id_enquesta": id_enquesta, "vot": vot};


			// Fem la crida ajax
			$.ajax({
				url: '/votar',
				type: 'POST',
				dataType: 'json',
				data: jsonData,
				success: function(data) {
				  console.log(data);	

					$.ajax({
						url: '/llistat',
						dataType: 'json',
						success: function(data){
							
							llistat(data);
							
							// Hem recarregat el llistat, però ara necessitem crear el nou gràfic d'aquella votació
							// per tant, simulem aquesta fent click a la pregunta com si ho fes l'usuari.
							$( ".pregunta[enquesta=\""+id_enquesta+"\"]" ).trigger( "click" );
							
						} 
					});

				}
			});
		
		}else{
			alert("No has escollir cap resposta"); 
		}
		
		event.preventDefault(); // cancel default behavior

	});
		
});

/**
 * Funció que genera el llistat d'enquestes
 * @param {type} data (json/array amb les dades obtingudes de la base de dades (AJAX)
 * @returns Res, ho pinta per pantalla
 */
function llistat(data){

		console.log("Entrem a funció llistat per llistar totes les enquestes als usuaris");
		console.log(data);
		var html = "";

		 $.each(data, function (index, value) {


			 var activa = parseInt(data[index].activa);
			 var votat = parseInt(data[index].votat);
			 var lastcall = parseInt(data[index].lastcall);
html = html + "<div class='fons-boto'>";

			 html = html + "<a><div id='pregunta' class='pregunta' enquesta="+data[index].id+">";
				html = html +"<p>"+data[index].pregunta+"</p>";
			html = html + "</div></a>";		
			 html = html + "<a><div id='pregunta' class='pregunta' enquesta="+data[index].id+">";
			if(activa===1){ 
				  html = html + "<img class='icona' src='bundles/app/img/activa.png' alt='activa' title='Activa'/>";
			   }else{
				  html = html + "<img class='icona' src='bundles/app/img/inactiva.png' alt='inactiva' title='Inactiva'/>";						
			   }

			   if(votat===1){
				  html = html + "<img class='icona' src='bundles/app/img/votat.png' alt='votada_vot' title='Votada'/>";
			   }else{
				   if(activa!==1){
					  html = html + "<img class='icona' src='bundles/app/img/vot_disponible_tancada.png' alt='tancada_vot' title='Vot disponible però tancada'/>";
				  }else{
					  html = html + "<img class='icona' src='bundles/app/img/vot_disponible.png' alt='disponible_vot' title='Pots votar'/>";
				  }

			   }
			   if(lastcall===1){
				  html = html + "<img class='icona' src='bundles/app/img/urgeix.png' alt='urgeix' title='Últims 3 dies!'/>";
			   }else{
				  html = html + "<img class='icona' src='bundles/app/img/no_urgeix.png' alt='no_urgeix' title='Sense avís'/>";
			   }

			 html = html + "</div></a>";	
html = html + "</div>";


		 });

		 $(".llista_scroll").html(html);

}

/**
 * Funció que pinta per pantalla l'enquesta escollida per l'usuari
 * @param {type} data Rep els valors en format json des de la base de dades
 * @returns No torna res, ho dibuixa per pantalla
 */
function enquesta(data){

			html = "";
	
				html = html + "<div>";
				
				//Comprovem si ha votat ja
				if(parseInt(data[0].VOTAT)===1){
					
					html = html + "<h4>Enquesta votada!</h4>";
					html = html + "<p>Has respost amb un <span class='destacarResposta'>";
					
					// I comprovem el valor de la votació 1=SI 0=NO
					if(parseInt(data[0].VALOR)===1){
						html = html + "sí";
					}else{
						html = html + "no";
					}
					html = html + "</span></p>";
					
				}else{
					
					// No ha votat, però hem de veure si està activa
					if(parseInt(data[1].activa)===1){
						
						// Mostrem el formulari
					html = html + "<div class='formvota'>";
					html = html + "<h2>Pots votar a l'enquesta</h2>";
						html = html + "<form id='vota' class='navbar-form navbar-center' role='form'>";
								html = html + "SI <input id='vot' type='radio' class='form-control' name='vot' value='1' required/>";                                   
								html = html + "NO <input id='vot' type='radio' class='form-control' name='vot' value='0'/>";  
								html = html + "<input type='hidden' value="+parseInt(data[1].id)+" name='id_enquesta'/>";

							html = html + "<button type='submit' class='butoSubmit btn btn-primary'>Votar!</button>";
						html = html + "</form>";
					html = html + "</div>";

						
						
					}else{
						html = html + "<p>L'enquesta no està activa, no pots votar</p>";
					}
					
				}
				
				html = html + "<form action='/renderEnquesta?id="+parseInt(data[1].id)+"' method='post'>";
					html = html + "<button class='butonAdminEdicioInfo btn btn-primary btn-lg btn-block' type='submit' >Més informació</button>";
			html = html + "</form></div>";
				
				$(".renderText").html(html);
			  
			  var chart1 = new CanvasJS.Chart("render",{
					animationEnabled: true,
					theme: "light1", // "light1", "light2", "dark1", "dark2",
					title :{
						text: data[1].pregunta
					},
					data: [{
					type: "column",
						dataPoints : [
						{ label: "SI",  y: parseInt(data[1].SI)  },
						{ label: "NO", y: parseInt(data[1].NO)  }
					]
					}]
				});

				chart1.render();
	
}
