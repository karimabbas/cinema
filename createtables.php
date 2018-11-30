<?php 
	include('database.php');
	$create_tbl = "CREATE TABLE IF NOT EXISTS movie(
	movie_id int(22) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	movie_name varchar(100) NOT NULL);";

	$db->myExec($create_tbl);

    $create_tbl2 =" CREATE TABLE IF NOT EXISTS hall(

hall_nom varchar(22) NOT NULL PRIMARY KEY,
movie_id int(22) NOT NULL,
movie_name varchar(100) NOT Null,
set_nom int(22) NOT NULL,
Date varchar(13) NOT NULL,
Str_time varchar(13) NOT NULL,
End_time varchar(13) Not NULL, 
price varchar(13) NOT NULL);";

$db->myExec($create_tbl2);


?>
