/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function(){
	
    $.ajax({
		url: '/llistatAdministracio',
		dataType: 'json',
		success: function(data) {
			llistat(data);
		}
	});
		
});

/**
 * Funció que genera el llistat d'enquestes per a l'administrador
 * @param {type} data (json/array amb les dades obtingudes de la base de dades (AJAX)
 * @returns Res, ho pinta per pantalla
 */
function llistat(data){

		console.log(data);
		
		var html = "";

		 $.each(data, function (index, value) {

			var pregunta = data[index].pregunta;
			var activa = parseInt(data[index].activa);
			var SI = parseInt(data[index].SI);
			var NO = parseInt(data[index].NO);
			var destacada = parseInt(data[index].destacada);
			var id_enquesta = parseInt(data[index].id);
			var html = "";
			 
			html = "<div class='llistat_admin' id='enquesta"+index+"'>";	

				html = html + "<div id='pregunta' class='pregunta' enquesta="+data[index].id+">";
					html = html + "<p class='llistat'><a href='editarEnquesta?id="+id_enquesta+"' class='llistat_link'>#"+id_enquesta+" "+pregunta+"</a></p>";
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

			$(".llista_scroll_admin").append(html);


		 });

}