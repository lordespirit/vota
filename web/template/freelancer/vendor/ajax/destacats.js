/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function(){
    $.ajax({
		url: '/destacats',
		dataType: 'json',
		success: function(data) {

		  
		  
			$.each(data, function (index, value) {

				var SI = data[index].SI;
				var NO = data[index].NO;
				
				// Creem primer el div, l'afegim dins del div principal
				html = "<div class='destacats' id='destacat"+index+"'></div>";			
				$(".destacats-block").append(html);

				// I processem el gràfic amb CanvasJS directament dins d'aquell div creat just abans
				var chart1 = new CanvasJS.Chart("destacat"+index,{
					animationEnabled: true,
					theme: "light1", // "light1", "light2", "dark1", "dark2",
					title :{
						text: data[index].pregunta
					},
					data: [{
					type: "column",
						dataPoints : [
						{ label: "SI",  y: parseInt(SI)  },
						{ label: "NO", y: parseInt(NO)  }
					]
					}]
				});

				chart1.render();	
			});


		}
	});
});

