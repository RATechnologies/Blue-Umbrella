<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta charset="utf-8" />
		  <link rel="stylesheet" href="pretty.css">
		<title>Preston & Ashley's Wine Database</title>
	</head>
	<body>
		<h2>Choose your dinner.</h2>
		<form action="foodreport.php" method="post">
		<?php
			//login info  		
	  		$servername = "localhost";
			$username = "dave";
			$password = "KARA";
			$dbname = "Wine";
			
			//Create connection
			$conn = new PDO('mysql:host=localhost;dbname=Wine;charset=utf8mb4', $username, $password);
			echo "<label for = 'dinner'>What's for Dinner?  </label>";
			echo "<select name='dinner' id='dinner'>";
			foreach($conn->query('SELECT * FROM food') as $row) {
				 echo "<option value=$row[fid]>$row[pairing]</option>";}
			echo "</select>";
		?>
		<input type="submit" value="Submit">
		</form>
	</body>
	</html>