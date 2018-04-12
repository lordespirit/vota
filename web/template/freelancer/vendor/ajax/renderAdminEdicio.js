/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function(){
	
	var id_enquesta =  parseInt($(".info_enquesta").attr("id"));
	console.log("Esta es la encuesta: "+id_enquesta);
	
	/*
    $.ajax({
		url: '/enquestaAdmin',
		dataType: 'json',
		type: 'POST',
		data: id_enquesta ,
		success: function(data) {
			console.log("Hem sortit, tornada de la resposta de EnquestaAdmin, ara després tenim JSON??");
			console.log(data);
			mostrarInfo(data);
			render(data);
		}
	});
	*/	
});

/**
 * Funció que genera el llistat d'enquestes per a l'administrador
 * @param {type} data (json/array amb les dades obtingudes de la base de dades (AJAX)
 * @returns Res, ho pinta per pantalla
 */
/*
function mostrarInfo(data){
		
		var html = "";
		

			var pregunta = data.pregunta;
			var activa = parseInt(data.activa);
			var SI = parseInt(data.SI);
			var NO = parseInt(data.NO);
			var destacada = parseInt(data.destacada);
			var id_enquesta = parseInt(data.id);
			var data_inici = data.data_inici;
			var data_final = data.data_final;;
			var html = "";
			 
			html = "<div class='llistat_admin'>";	

				html = html + "<div id='pregunta' class='pregunta'>";
					html = html + "<p class='llistat'><a href='editarEnquesta?id="+id_enquesta+"' class='llistat_link'>"+pregunta+"</a></p>";
				html = html + "</div>";

				html = html + "<div class='activa'>";
					html = html + "<p class='activa_style'>";
					if(activa===1){
						html = html + "Activa";
					}else{
						html = html + "<span style='color:red;'>Inactiva</span>";
					}
					html = html + "</p>";
				html = html + "</div>";

				html = html + "<div class='vots'>";
					html = html + "<p class='vots_style'>";
						html = html + "SI: "+SI+" | NO: "+NO;
					html = html + "</p>";
				html = html + "</div>";

				html = html + "<div class='destacada'>";
				html = html + "<p class='destacada_style'>";
					if(destacada===1){
						html = html + "<span style='color:goldenrod;'>Destacada</span>";
					}else{
						html = html + "<span style='color:white;'>No destacada</span>";
					}
					html = html + "</p>";
				html = html + "</div>";

			 
			html = html + "</div>";

			$(".info_enquesta").html(html);

}

function render(data){
	
	var pregunta = data.pregunta;
	var SI = parseInt(data.SI);
	var NO = parseInt(data.NO);
	
	var chart1 = new CanvasJS.Chart(".render_enquesta",{
					animationEnabled: true,
					theme: "light1", // "light1", "light2", "dark1", "dark2",
					title :{
						text: pregunta
					},
					data: [{
					type: "column",
						dataPoints : [
						{ label: "SI",  y: SI  },
						{ label: "NO", y: NO  }
					]
					}]
				});

				chart1.render();
	
}

*/