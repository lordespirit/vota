
$(document).ready(function(){
	
   
   	// Senzill mètode, volem que es confirmi si de veritat volem esborrar aquest registre
	$("#delete_button").click(function(){
      if (confirm("Aquesta acció esborrar l'enquesta i totes les seves respotas. Estàs segur?")){
         $('form#delete').submit();
      }
   });
  
		
});