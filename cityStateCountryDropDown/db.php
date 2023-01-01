<?php
$mysql_db_hostname = "Host name";
$mysql_db_user = "UserName";
$mysql_db_password = "Password";
$mysql_db_database = "Database Name";
try{
	$con=new PDO("mysql:host=$mysql_db_hostname;dbname=$mysql_db_database","$mysql_db_user","$mysql_db_password");
}catch(PDOExection $e){
	echo $e->getMessage();
}
?>