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
		$shape = $_GET["shape"];
		$size = $_GET["size"];
		$topping1 = $_GET["topping1"];
		$topping2 = $_GET["topping2"];
		$topping3 = $_GET["topping3"];	
		
<<<<<<< HEAD
		$address = $_GET["address"];
	    $phonenumber = $_GET["phone number"];
		
		echo('<p>crust type:'.$crusttype.'</p>');
		echo('<p>shape:'.$shape.'</p>');
		echo('<p>topping1:'.$toping1.'</p>');
		echo('<p>topping2:'.$topping2.'</p>');
		echo('<p>topping3:'.$topping3.'</p>');
		echo('<p>address:'.$address.'</p>');
		echo('<p>phonenumber:'.$phonenumber.'</p>');

	
		



=======
		echo('<p>crust type:'.$crusttype.'</p>');
>>>>>>> 87530942e435bfc1b14bbe7e712ef28102baaf8a
	 ?>

	</main>

	<footer>
    	<p><small>©Papyruspizza Inc. All rights reserved</small></p>
	</footer>

	</body>
</html>