<?php
$host='localhost';
$user='root';
$pass='';
$dbname='chat';

	try{
		$con = new PDO("mysql:host={$host};dbname={$dbname}",$user,$pass);
		$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	}catch(PDOException $e){
		echo $e->getMessage();
	}
?>