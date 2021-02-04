<?php
	// define variables and set to empty values
	$year = $varietal = $vineyard = $name = $bottles = $color = $price = null;
	$spark = null;
	$fav = null;
	$dessert = null;
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$year = (int)($_POST["year"]);
		$varietal = (string)($_POST["varietal"]);
		$vineyard = (string)($_POST["vineyard"]);
		$name = (string)($_POST["name"]);
		$bottles = (int)($_POST["bottles"]);
		if (empty($_POST["spark"]))
			$spark = 0;
			else {
				$spark = 1;}
		if (empty($_POST["dessert"]))
			$dessert = 0; 
			else {	
				$dessert = 1;}
		if (empty($_POST["fav"]))
			$fav = 0; 
			else {	
				$fav = 1;}
		
		$color= (string)($_POST["color"]);
		$price = (int)($_POST["dollar"]) + (int)($_POST["cent"])/100;
			}
	//check		
	echo var_dump($year),"<br>";
	echo var_dump($varietal),"<br>";
	echo var_dump($vineyard),"<br>";
	echo var_dump($name),"<br>";
	echo var_dump($bottles),"<br>";
	echo var_dump($spark),"<br>";
	echo var_dump($dessert),"<br>";
	echo var_dump($fav),"<br>";
	echo var_dump($color),"<br>";
	echo var_dump($price),"<br>";
		
		
	//login info  
	//mySQL database: Wine, 
	//			  table: bottles,
	//			vintage: INT (4)
	//		  varietal:	CHAR(25)
	//		  vineyard: CHAR(30)
	//				name: CHAR(25)
	//		    amount: INT(2)
	//			  spark: BOOLEAN
	//				 fav: BOOLEAN
	//			dessert: BOOLEAN
	//			  color: CHAR(5)
	//			  price: FLOAT(5,2)

	$servername = "localhost";
	$username = "XXXX";
	$password = "XXXX";
	$dbname = "Wine";
	
	try{	
		//Create connection
		$conn = new PDO('mysql:host=localhost;dbname=Wine;charset=utf8mb4', $username, $password);
		 // set the PDO error mode to exception
  		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		//insert record
		$sql = "INSERT INTO bottles (vintage, varietal, vineyard, name, amount, spark, fav, dessert, color, price)
		VALUES ($year, '$varietal', '$vineyard', '$name', $bottles, $spark, $fav, $dessert, '$color', $price)";
		
		$conn->exec($sql);
		echo "New record created successfully";
		//Returns primary key of most recent record
		$last_id = $conn->insert_id;
	} catch(PDOException $e) {
 		echo $sql . "<br>" . $e->getMessage();}
 		
 		
	
		
		
		
	$conn = null;
?>			
		
