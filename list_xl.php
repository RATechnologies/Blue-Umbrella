		<?php
	  		echo "entering php section";
	  		//login info  		
	  		$servername = "localhost";
			$username = "dave";
			$password = "KARA";
			$dbname = "Wine";
			
			$conn = new PDO('mysql:host=localhost;dbname=Wine;charset=utf8mb4', $username, $password);
			header('Content-Type: text/csv; charset=utf-8');
			header('Content-Disposition: attachment; filename=/Wine.csv');

			// create a file pointer connected to the output stream
			$output = fopen('php://output', 'w');
			ob_clean();

			// output the column headings
			// vintage | varietal | vinyard  | name | amount | spark | fav  | color | dessert | price | ID 
			fputcsv($output, array('Vintage', 'Varietal', 'Vineyard', 'Name','Bottles','Sparkling','Favorite','color',
											'Dessert','Price'));
			// fetch the data
			foreach($conn->query('SELECT * FROM bottles') as $row){
			$rec = array($row['vintage'],$row['varietal'],$row['vinyard'],$row['name'],$row['amount'],$row['spark'],
			$row['fav'],$row['color'],$row['dessert'],$row['price']); 
				fputcsv($output,$rec);
			}
			//fputcsv($row['vintage'],$row['varietal'],$row['vinyard'],$row['name'],$row['amount'],$row['spark'],$row['fav'],
			//			  $row['color'],$row['dessert'],$row['price']); 
		?>
