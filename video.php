<?php
        include ('includes/header.php');
?>

        <section class="main_content" role="main">
        	<div id="m-content" style="text-align:center;">
      			 <form method="post" action="find_videos.php">
                        <div>
                    <select name="moods">
						<option value="select">Select</option>
						<option value="Excited">Excited</option>
						<option value="Happy">Happy</option>
						<option value="Inspired">Inspired</option>
						<option value="Passionate">Passionate</option>
						<option value="Colorful">Colorful</option>
						<option value="Bright">Bright</option>
						<option value="Flowers">Flowers</option>
					</select>
                    
                <!--<input type="text" class="input_box" name="mood" id="mood" value=""/>-->

                        </div>
            <div>
                                <input type="button" class="input_result" name="submit" id="submit" value="Find mood" />
            </div>
            <div>
                <label for="mood" class="info">Type in any mood! <br/> Examples: (Happy/Sad/Angry/Depressed)
                </label>
            </div>
                </form>
                </div>
        </section>
    
<?php
        include ('includes/footer.php');
?>