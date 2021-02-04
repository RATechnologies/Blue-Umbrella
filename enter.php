<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta charset="utf-8" />
		  <link rel="stylesheet" href="pretty.css">
		<title>Preston & Ashley's Wine Database</title>
	</head>
	<body>
		<div style="text-align: center;"><b><h1>Preston and Ashley's Wine Database</h1></b></div>
		<p><h2>Enter Wine Information</h2></p>
		<form action="wine_add.php" method="post">
			<label for="year">Vintage:</label>
	  		<input type="text" id="year" name="year" size="4"  maxlength="4"><br>
	  
	  		<label for="varietal">Varietal:</label>
	  		<input type="text" id="varietal" name="varietal"><br>
  
	  		<label for="vineyard">Vineyard:</label>
	  		<input type="text" id="vineyard" name="vineyard"><br>
  
	  		<label for="name">Name:</label>
	  		<input type="text" id="name" name="name"><br>
	  
	  		<label for="bottles">Number of Bottles:</label>
	  		<input type="number" id="bottles" name="bottles" size="2"><br>
  
	  		<input type="radio" id="spark" name="spark" value=true>
	  		<label for="spark">Sparkling	</label>
  
	  		<input type="radio" id="fav" name="fav" value=true>
	  		<label for="fav">Favorite</label><br>
  
	  		<input type="radio" id="dessert" name="dessert" value=true>
	  		<label for="dessert">dessert</label><br>
    
	  		<label for="color">Color:</label>  
	  		<select name="color" id="color">
	  			<option value="Red">Red</option>
	    			<option value="white">White</option>
	    			<option value="Blush">Blush</option>
	  		</select>
	  		<br>
  
  			<label for="dollar">Price: $</label>
  			<input type="number" id="dollar" name="dollar" maxlength="3" placeholder="20">.
  			<input type="number" id="cent" name="cent" maxlength="2" placeholder="00"><br>
	  		<input type="submit" value="Submit">
  	  	</form> 
  	<?php
  		echo "entering php section";
  		//login info  		
  		$servername = "localhost";
		$username = "dave";
		$password = "KARA";
		$dbname = "Wine";
		$foodID[0] = "tasteless";
		
		//Create connection
		$conn = new PDO('mysql:host=localhost;dbname=Wine;charset=utf8mb4', $username, $password);
		
		foreach($conn->query('SELECT * FROM Food') as $row) {
		$foodID[$row['ID']] = $row['pairing'];
 		   echo "<br>";
 		   echo $row['ID'].' '.$row['pairing'];
 		   
 		   echo "<input type='checkbox' name='name[]' value='{$row['pairing']}' {$row['pairing']}>";
		}
		echo "</table>";
		
		print_r($foodID);
		print_r($row);	
	?>
				
	</body>
</html>
