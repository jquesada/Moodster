<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<meta charset="UTF-8">
<title>Moodster</title>

<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="js/custom.js"></script>

</head>

<body>

<div class="container">
  
	<div class="menu_container">
		<a id="menu-toggle" class="anchor-link" href="#mobile-nav"><span id="n">&#9776;</span></a>
	</div>
	
	<nav id="#mobile-nav" class="nav clearfix" role="navigation">
		<ul>
			<li><a id="mainlogo" class="logo" href="index.php"><img src="img/moodster.gif" alt="logo" /></a></li>
			<li><a href="music.php"><span><img src="img/icon-music.png" alt="music" /></span>music</a></li>
			<li><a href="video.php"><span><img src="img/icon-video.png" alt="video" /></span>video</a></li>
			<li><a href="image.php"><span><img src="img/icon-image.png" alt="image" /></span>images</a></li>
		</ul>
	</nav>
	

	<section class="main_content" role="main">
	
        <img src="img/logo-main.png" id="logo" alt="logo" />
        <p id="description">
                    	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget.
                    </p>
				
		
		
	</section>
			
			
	<footer class="clearfix footer">
			
		<p id="quotes"><?php include 'quotes.php'; ?></p>
				
	</footer>


</div><!-- END .container -->
        
</body>
</html>