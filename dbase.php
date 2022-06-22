<?php 
try {
	
	$bdd= new PDO("mysql:host=localhost;dbname=azome;charset=utf8","root","");
} catch (PDOException $e) {
	$e->getMessage();
}

?>