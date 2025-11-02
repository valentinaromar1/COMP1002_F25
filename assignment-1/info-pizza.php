<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>papyrus pizza™</title>
		<link rel="stylesheet" href="styles.css" />
	</head>
	<body>
		<header>
			<h1>©Papyruspizza</h1>
		</header>
	<main>
	   <?php
		
	   $fname = $_GET["fname"];
	   $lname = $_GET["lname"];

	 	echo('<p>thank you for your order ' .$fname.' '.$lname.'!</p>');
	 	echo('<p>your order is being processed:</p><ul>');


		$crusttype = $_GET["crusttype"];
		$nop = $_GET["nop"]
		$shape = $_GET["shape"];
		$size = $_GET["size"];
		$topping1 = $_GET["topping1"];
		$topping2 = $_GET["topping2"];
		$topping3 = $_GET["topping3"];	
			
		$mfa = $_GET["mfa"]
	    $address = $_GET["address"];
	    $phonenumber = $_GET["phonenumber"];
		
		echo('<p>number of pizzas:'.$nop.'</p>');
		echo('<p>crust type:'.$crusttype.'</p>');
		echo('<p>shape:'.$shape.'</p>');
		echo('<p>size:'.$size.'</p>');
		echo('<p>topping 1:'.$topping1.'</p>');
		echo('<p>topping 2:'.$topping2.'</p>');
		echo('<p>topping 3:'.$topping3.'</p>');

		echo('<p>dinning:'.$mfa.'</p>')
		echo('<p>address:'.$address.'</p>');
		echo('<p>phone number:'.$phonenumber.'</p>');


	 ?>

	</main>

	<footer>
    	<p><small>©Papyruspizza Inc. All rights reserved</small></p>
	</footer>

	</body>
</html>