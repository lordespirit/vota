/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function(){
	
	var id_enquesta =  parseInt($(".infoEnquesta").attr("id"));
	var pregunta =  $(".infoPregunta").text();
	var si =  $(".valueSI").text();
	var no =  $(".valueNO").text();

	html = "<div id='render' class='render'></div>"
	$(".contenidor").append(html);

	render(pregunta,si,no);

});

/**
 * 
 * @param {type} pregunta
 * @param {type} si
 * @param {type} no
 * @returns {undefined}
 */
function render(pregunta,si,no){
	
		var SI = parseInt(si);
		var NO = parseInt(no);
	
		var chart1 = new CanvasJS.Chart("render",{
			animationEnabled: true,
			theme: "light2", // "light1", "light2", "dark1", "dark2",
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