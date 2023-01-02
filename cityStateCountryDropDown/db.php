<?php
$mysql_db_hostname = "localhost";
$mysql_db_user = "city";
$mysql_db_password = "";
$mysql_db_database = "root";
try{
	$con=new PDO("mysql:host=$mysql_db_hostname;dbname=$mysql_db_database","$mysql_db_user","$mysql_db_password");
}catch(PDOExection $e){
	echo $e->getMessage();
}
