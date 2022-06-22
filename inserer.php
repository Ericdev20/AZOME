<?php 
require('dbase.php');
if($_SESSION["autoriser"]!="oui")
  header("loction:connecter_admin.php");


$matricule=$_GET['matricule'];
$matiere=$_GET['matiere'];
$filliere=$_GET['filliere'];
$note=$_GET['note'];

		$insertNote=$bdd->prepare('INSERT INTO resultat(matricule,codMat,idfilliere,notes) VALUES(?,?,?,?) ');
	$insertNote->execute(array($matricule,$matiere,$filliere,$note));
	header("location:".$_SERVER[HTTP_REFERER]);
	die();



?>