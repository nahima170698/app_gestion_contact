<?php
include("contact.php"); 

$MiseAJourClient = new MaConnexion("app_gestions_contacts", "", "root", "localhost"); 
//vulnérable 
$uneMiseAJour->MiseAJour_Secure($_POST['nom'], $_POST['utilisateur'], $_POST['mot_de_passe'], $_POST['numero_telephone'], $_POST['email'], $_POST['nom_entreprise']); 


header('Location: contact.php');

?>