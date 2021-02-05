import sys
import mysql.connector 

if (sys.argv[1]) != None:
	userid = sys.argv[1]
else: 
	userid = "guest"
		
if (sys.argv[2]) != None:
	passwd = sys.argv[2]
else:
	passwd = "password"

mydb = mysql.connector.connect(
  host="localhost",
  user=userid,
  password=passwd,
) 
mycursor = mydb.cursor()

mycursor.execute("CREATE DATABASE Wine")
mycursor.execute("USE Wine")
 
mycursor.execute("CREATE TABLE bottles (ID INT(3) AUTO_INCREMENT PRIMARY KEY, vintage INT(4), varietal VARCHAR(25), vineyard VARCHAR(30), name VARCHAR(25), amount INT(2), spark BOOLEAN, fav BOOLEAN, dessert BOOLEAN, color VARCHAR(5), price FLOAT(5,2))")

mycursor.execute("CREATE TABLE Pairing (ID INT(3), pairing VARCHAR(30))")
mycursor.execute("CREATE TABLE Food (ID INT(3) AUTO_INCREMENT PRIMARY KEY, food VARCHAR(30))")

