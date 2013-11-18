<?php
	include ('includes/header.php');
?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="js/charJs.js"></script>
<style>
#imagesContainer {
	
}
#imagesContainer img{
max-width: 100%;
height: auto;
display: inline-block;
padding: 1em;
}

select[name='moods']{
margin: auto auto;
display: block;
padding: 5px;
margin-bottom: 25px;
background-color: skyblue;
}

</style>
	<section class="main_content" role="main">
    	<div id="m-content">
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
                <div id="imagesContainer"></div>
                
        </div>
        
				
	</div><!--section-->
				
		
	</section>
    
<?php
	include ('includes/footer.php');
?>
