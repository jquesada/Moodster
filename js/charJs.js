// JavaScript Document

$(document).ready(function(){

	$("select[name='moods']").change(function() {
$("#imagesContainer").empty();

		var txt=$("select[name='moods'] option:selected").val();
console.log('the txt value is ' + txt);

		$.ajax({
			url:'./retrieveImages.php', 
			data:  'text=' + txt,
			type: 'POST',
dataType:'json'
			}).done(function(data){
				

				
				for (var i=0; i<data.photos.photo.length; i++)
				{
					var photo = data.photos.photo[i];
					var dateArray = photo.datetaken.split("-",3);
					var year = parseInt(dateArray[0]);
					var month = parseInt(dateArray[1]);
					var day = parseInt(dateArray[2]);
					
				
					$("#imagesContainer").append("<img class='thumbs' src='http://farm" + photo.farm + ".staticflickr.com/" + photo.server + "/" + photo.id + "_" + photo.secret + "_n.jpg' alt='" + photo.id + "' />");

					
				}//end for
		});//end ajax 

	});//end input change

});//end doc ready
