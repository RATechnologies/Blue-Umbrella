<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta charset="utf-8" />
		 <link rel="stylesheet" href="pretty.css">
		<title>Preston & Ashley's Wine Database</title>
	</head>
	<body>
		<?php
  		echo "entering php section";
  		//login info  		
  		$servername = "localhost";
		$username = "dave";
		$password = "KARA";
		$dbname = "Wine";
		//Create connection
		$conn = new PDO('mysql:host=localhost;dbname=Wine;charset=utf8mb4', $username, $password);
		//SELECT * FROM pairing INNER JOIN bottles WHERE bottles.id = pairing.wine_id;
		foreach($conn->query('SELECT * FROM pairing INNER JOIN bottles WHERE bottles.id = pairing.wine_id') as $meal) {
			 

		
		
		
		?>
	</body>
	</html>

