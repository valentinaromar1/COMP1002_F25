<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>papyrus pizza™</title>
		<link rel="stylesheet" href="css/styles.css" />
	</head>
	<body>
		<header>
			<h1>©Papyruspizza</h1>
		</header>
	<main>
	   <?php
		
	   $fname = $_GET["fname"];
	   $lname = $_GET["lname"];

	 	echo('<p>thank you for your order' .$fname.''.$lname.'!</p>');
	 	echo('<p>your order is being processed:</p><ul>');

		$crusttype = $_GET["crusttype"];
		
		echo(.crusttype.);
	 ?>

	</main>

	<footer>
    	<p><small>©Papyruspizza Inc. All rights reserved</small></p>
	</footer>

	</body>
</html>