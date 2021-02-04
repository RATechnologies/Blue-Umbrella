# Blue Umbrella
Project name for the Preston & Ashley Wine Database.

Yes, we have wine snob alias.

If you want to use this on your machine you need a web server running, and these scripts downloaded to /var/www/html/

You will also need PHP and mySQL or MariaDB server. You will then need to create a database named 'Wine' with two tables:

##### Bottles

- ID: INT(3) AUTOINCREMENT

- vintage: INT (4)

- varietal: VARCHAR(25)		  

- vineyard: VARCHAR(30)				

- name: VARCHAR(25)

- amount: INT(2)

- spark: BOOLEAN

- fav: BOOLEAN

- dessert: BOOLEAN

- color: VARCHAR(5)

- price: FLOAT(5,2)

##### Food

- ID: INT(3) 
- pairing: VARCHAR(30)