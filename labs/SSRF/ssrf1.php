<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>


         /* here put our website background colour */

		body {
			background-color: navy;
			color: white;
		}
		.output {
			background-color: navy;
			color: white;
			padding: 10px;
			margin: 10px 0;
			border-radius: 5px;
		}
	</style>
</head>
<body>
	<?php 
	error_reporting(0);

	$url=$_GET['url'];
	echo "<div class='output'>";
	echo file_get_contents($url);
	echo "</div>";
	?>
</body>
</html>
