<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		  <link rel="stylesheet" href="pretty.css">
		<title>Preston & Ashley's Wine Database</title>
	</head>
	<body>
		<h1>Wines</h1>
		<?php
	  		//login info  		
	  		$servername = "localhost";
			$username = "dave";
			$password = "KARA";
			$dbname = "Wine";
			
			//Create connection
			$conn = new PDO('mysql:host=localhost;dbname=Wine;charset=utf8mb4', $username, $password);
			// vintage | varietal           | vinyard     | name | amount | spark | fav  | color | dessert | price | ID 
			echo "<table style='width:100%'>
			<th>Vintage</th>
			<th>Color</th>
			<th>Wine</th>
			<th>Vineyard</th>
			<th>In Stock</th>
			<th>Favorite</th>
			<th>Sparkling</th>
			<th>Dessert</th>";
		
			foreach($conn->query('SELECT * FROM bottles') as $row) {
				if($row['name']!=null) 
					$wident=$row['name'];
						else $wident=$row['varietal'];
				if($row['fav']!=1)
					$best = 'No';
						else $best = 'Yes';
				if($row['spark']!=1)
					$bub = 'No';
						else $bub = 'Yes';
				if($row['dessert']!=1)
					$sweet = 'No';
						else $sweet = 'Yes';
				
				echo "<tr>
	 		   <td>$row[vintage]</td>
	 		   <td>$row[color]</td>
	 		   <td>$wident</td>
	 		   <td>$row[vinyard]</td>
	 		   <td>$row[amount]</td>
	 		   <td>$best</td>
	 		   <td>$bub</td>
	 		   <td>$sweet</td>
	 		
	 		   </tr>";
			}
		?>
		
