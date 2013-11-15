<?php
	include ('includes/header.php');
?>

	<section class="main_content" role="main">
	
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
				
		
	</section>
    
<?php
	include ('includes/footer.php');
?>
