<?php
include("contact.php"); 

$uneMiseAJour = new MaConnexion("exericesbdd", "", "root", "localhost"); 
//vulnérable 
$uneMiseAJour->miseAJour($_POST['nom'], $_POST['prix'], $_POST['toto'], $_POST['id']); 


header('Location: interface.php');

?>