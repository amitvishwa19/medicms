
$(document).ready(function(){	

	//Patient page quick search
	$("#quicksearch").on("keyup", function() {
		var value = $(this).val().toLowerCase();
		

		$("#patienttable tr").filter(function() {
			$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
		});		  
	});
	
	//Patient page clear filter 
	$('#cancelsearch').click(function(){	
		$('#quicksearch').val('');
		var value = $('#quicksearch').val().toLowerCase();	

		$("#patienttable tr").filter(function() {
			$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
		});	
	});
	
	
	//Patient page clear filter 
	$('#clearall').click(function(){		
		$('#quicksearch').val('');
		var value = $('#quicksearch').val().toLowerCase();	

		$("#patienttable tr").filter(function() {
			$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
		});	
	});

});