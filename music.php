<?php
	include ('includes/header.php');
?>

  <script type="text/javascript" src="http://connect.soundcloud.com/sdk.js"></script>
<script type="text/javascript">
function playSomeMusic(myGenre) {  
      SC.initialize({      
        client_id: '37db7420c381c7925480c7af1c8e4c90'
        });

        SC.get('/tracks', { genres: myGenre, bpm: { from: 120 } },
        function(tracks) {
            var random = Math.floor(Math.random() * 49);
            var track_url = tracks[random].permalink_url;

            SC.oEmbed(track_url, {auto_play: true, color: "ff0066"},
              document.getElementById("target"));
            }
        );
      }
</script>

<body onload="playSomeMusic('electronic')">
	<section class="main_content" role="main">
    	<div id="m-content" style="text-align:center">
       
  	<ul>
	  	<li><a href="#" onclick="playSomeMusic('disco')">disco</a></li>
	  	<li><a href="#" onclick="playSomeMusic('country')">country</a></li>
	  	<li><a href="#" onclick="playSomeMusic('rock')">rock</a></li>
	  	<li><a href="#" onclick="playSomeMusic('electronic')">electronic</a></li>
	</ul>
  <div id="target"></div>

</div>
	</section>

    </body>

<?php
	include ('includes/footer.php');
?>
