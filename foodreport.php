<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta charset="utf-8" />
		  <link rel="stylesheet" href="pretty.css">
		<title>Preston & Ashley's Wine Database</title>
	</head>
	<body>
		<h1>Wines that Pair With...</h1>
		<?php
			//login info  		
	  		$servername = "localhost";
			$username = "dave";
			$password = "KARA";
			$dbname = "Wine";
			
			//Create connection
			$conn = new PDO('mysql:host=localhost;dbname=Wine;charset=utf8mb4', $username, $password);
			
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				$meal = ($_POST["dinner"]);
				foreach($conn->query('SELECT * FROM food') as $row) {
					if($row['fid']==$meal) 
						$meat = $row['pairing'];
				}
				echo "<h2>$meat</h2>";
			}
			echo "<table style='width:50%'>
			<th>Vintage</th>
			<th>Color</th>
			<th>Wine</th>
			<th>Vineyard</th>";
		
			foreach($conn->query('SELECT * FROM pairing INNER JOIN bottles WHERE bottles.id = pairing.wine_id') as $row2) {
				if($row2['name']!=null) 
					$wident=$row2['name'];
						else $wident=$row2['varietal'];				
				if ($row2[food_id] == $meal){
					echo "<tr>
						<td>$row2[vintage]</td>
	 			   	<td>$row2[color]</td>
	 		 	  		<td>$wident</td>
	 			   	<td>$row2[vinyard]</td>
	 			   </tr>";	
	 			  }
				
			}
				
		?>
	</body>
	</html>