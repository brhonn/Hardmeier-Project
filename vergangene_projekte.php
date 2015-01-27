<!DOCTYPE HTML>
<html>
	<head>
		<link rel="stylesheet" href="style.css">
		
		<script src="facefiles/jquery-1.2.2.pack.js" type="text/javascript"></script>
		<link href="facefiles/facebox.css" media="screen" rel="stylesheet" type="text/css" />
		<script src="facefiles/facebox.js" type="text/javascript"></script>

		<script type="text/javascript">
			jQuery(document).ready(function($) {
			  $('a[rel*=facebox]').facebox() 
			})
		</script>
	</head>

	<body>
		<div id="wrapper">
			<div id="header">
				<h1>Hardmeier Holzbau</h1>
			</div>
			<?php
				include ("./nav.html");
			?>
			<div id="content">
				<div class="entry">
					<img src="img/woodfaded.jpg" alt="img" style="float: left;">
					<p><a href="#mydiv" rel="facebox">Loghome Pfaffhausen 2010</a></p>
					<div id="mydiv" style="display:none">						
						<img src="img/woodfaded.jpg" alt="img" width="300px;" style="float: left;">
						<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitrLorem ipsum dolor sit amet, consetetur sadipscing elitrLorem ipsum dolor sit amet, consetetur sadipscing elitrLorem ipsum dolor sit amet, consetetur sadipscing elitrLorem ipsum dolor sit amet, consetetur sadipscing elitrLorem ipsum dolor sit amet, consetetur sadipscing elitrLorem ipsum dolor sit amet, consetetur sadipscing elitrLorem ipsum dolor sit amet, consetetur sadipscing elitrLorem ipsum dolor sit amet, consetetur sadipscing elitrLorem ipsum dolor sit amet, consetetur sadipscing elitrLorem ipsum dolor sit amet, consetetur sadipscing elitrLorem ipsum dolor sit amet, consetetur sadipscing elitrLorem ipsum dolor sit amet, consetetur sadipscing elitrLorem ipsum dolor sit amet, consetetur sadipscing elitrLorem ipsum dolor sit amet, consetetur sadipscing elitrLorem ipsum dolor sit amet, consetetur sadipscing elitrLorem ipsum dolor sit amet, consetetur sadipscing elitrLorem ipsum dolor sit amet, consetetur sadipscing elitrLorem ipsum dolor sit amet, consetetur sadipscing elitrLorem ipsum dolor sit amet, consetetur sadipscing elitrLorem ipsum dolor sit amet, consetetur sadipscing elitrLorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>