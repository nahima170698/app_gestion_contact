<?php
include("contact.php"); 

$uneMiseAJour = new MaConnexion("app_gestions_contacts", "", "root", "localhost"); 
//vulnérable 
$uneMiseAJour->miseAJour_Secure($_POST['nom'], $_POST['utilisateurs'], $_POST['mot_de_passe'], $_POST['numero_de_telephone'], $_POST['email'], $_POST['nom_entreprise']); 


header('Location: contact.php');

?>