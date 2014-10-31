<?php

$db_host = "localhost";
$db_name = "geeknepal";
$db_username = "root";
$db_pass = "";

$site_name = "Kathmandu University";
$site_author ="KU Developers";

$site_basedir = "http://localhost/ku";

/*
try{
$pdo = new PDO('mysql:host=localhost;dbname=geeknepal','root','');
}
catch(PDOException $e){
	exit('Database error');
}
*/

class dataBase{

	public function fetch_data($sql){
		global $pdo;
		$query = $pdo->prepare($sql);
		$query->execute();

		return $query->fetchAll();
	}
}

?>