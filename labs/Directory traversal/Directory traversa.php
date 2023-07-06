<!DOCTYPE html>
<html>
<head>
	<title>Page Title</title>
	<style>
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
	if(isset($_GET["page"])) {
	    echo "<div class='output'>";
	    include($_GET["page"]);
	    echo "</div>";
	    $page_name = $_GET["page"];
	}
	?>
</body>
</html>
