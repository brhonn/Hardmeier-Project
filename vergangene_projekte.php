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
				<div class="entries">
					<div id="entry">
						<img src="img/woodfaded.jpg" alt="img">
						<p><a href="vergangene_projekte/Loghome_Pfaffhausen_2010.html" rel="facebox">Loghome Pfaffhausen 2010</a></p>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>