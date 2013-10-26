AJAX = {};			

	AJAX.getMood = function() {
    	var ajaxOptions = 
    	{
    		data: {test: '1'},
    		dataType: 'html',
    		error: function(response) {
        		alert('AJAX error');
    		},
    		success: function(response) {
    			$('.player').append(response);
    		},
    		type: 'GET',
    		url: 'includes/findSong.php?mood=' + mood
    	};
    		$.ajax(ajaxOptions);
	};
			
	$(document).ready(function(){
		
			$( "select#mood" ).change(function() {
				$('.player').empty();
				mood = $('select#mood').val();
            	AJAX.getMood(); 
			});
	}); 
	