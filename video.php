<?php
        include ('includes/header.php');
?>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="js/semesterProject.js"></script>

        <section class="main_content" role="main">
        	<div id="m-content" style="text-align:center;">
      			   <div id="input">
		<form method="post" action="find_videos.php">
			<div>
            	<input type="text" class="input_box" name="mood" id="mood" value=""/>

			</div>
            <div>
				<input type="submit" class="input_result" name="submit" id="submit" value="Find mood" />
            </div>
            <div>
                <label for="mood" class="info">Type in any mood! <br/> Examples: (Happy/Sad/Angry/Depressed)
                </label>
            </div>
		</form>
     </div>
        
      <div id="response">
	</div>  
	<section class="main_content" role="main">
	
       
		
	</section>
    
<?php
        include ('includes/footer.php');
?>
