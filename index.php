<?php
include 'header.php';
?>
			<div class="main">
                <img src="img/logo-main.png" alt="logo"/>
                <div style="text-align:center;">
                	<p id="description">
                    	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget.
                    </p>
                        <div id="dd" class="wrapper-dropdown">Select Mood
                            <ul class="dropdown">
                                <li><a href="#">Happy</a></li>
                                <li><a href="#">Sad</a></li>
                                <li><a href="#">Angry</a></li>
                            </ul>
                        </div> <!--dd-->
                        
                        <p id="quotes"><?php include 'quotes.php'; ?></p>
                        
                        <!--
                        <select id="mood" style="margin-bottom:10px;">
                            <option>Happy</option>
                            <option>Sad</option>
                            <option>Excited</option>
                            <option>Angry</option>
                            <option>Relaxed</option>
                        </select>
                        -->
				<div class="player"></div> 
                </div><!--section-->
			</div><!--main-->
		
<?php
include 'footer.php';
?>