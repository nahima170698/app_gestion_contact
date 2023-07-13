<?php

class MaConnexion{
    /*
    private $nomBaseDeDonnees = "";
    private $motDepasse = "";
    private $nomUtilisateur = "root";
    private $hote = "localhost";
    */
    private $nomBaseDeDonnees; 
    private $motDepasse; 
    private $nomUtilisateur; 
    private $hote;
    private $connexionPDO;
    
    public function __construct($nomBaseDeDonnees, $motDepasse, $nomUtilisateur, $hote){
    
    $this->nomBaseDeDonnees = $nomBaseDeDonnees;
    $this->motDepasse = $motDepasse; 
    $this->nomUtilisateur = $nomUtilisateur; 
    $this->hote = $hote; 
    
    
    try {
      $dsn = "mysql:host=$this->hote;dbname=$this->nomBaseDeDonnees;charset=utf8mb4"; 
      $this->connexionPDO = new PDO($dsn, $this->nomUtilisateur, $this->motDepasse);
      $this->connexionPDO -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      echo "ui";
    } catch (PDOException $e) {
      echo "Erreur : ".$e->getMessage();
    }

  }
  public function insertionClient($nom, $prix, $description){
    try {
      $requete = "INSERT INTO gestions_contact (nom, utilisateur, mot_de_passe, numero_telephone, email, nom_d'entreprise) VALUES (:nom, :prix, :description)";
      $requete_preparee = $this->connexionPDO->prepare($requete);
      
      $requete_preparee->bindParam(':nom', $nom, PDO::PARAM_STR, 25);
      $requete_preparee->bindParam(':utilisateur', $descr, PDO::PARAM_STR, 25);
      $requete_preparee->bindParam(':mot_de_passe', $description, PDO::PARAM_STR, 25);
      $requete_preparee->bindParam(':numero_telephone', $description, PDO::PARAM_STR, 25);
      $requete_preparee->bindParam(':email', $description, PDO::PARAM_STR, 25);
      $requete_preparee->bindParam(':nom_entreprise', $description, PDO::PARAM_STR, 25);
      
      $requete_preparee->execute(); 
      return "insertion reussie"; 
      } catch (PDOException $e) {
        return $e->getMessage();
      }
  }
  public function miseAJour($table, $column, $newValue, $id) {
  }

  public function miseAJour_Secure($table, $column, $newvalue, $id){
  try {
  $requete = "UPDATE ? set ? = ? WHERE ID_? = ?";  
  $requete_preparee = $this->connexionPDO->prepare($requete); 
  
  $requete_preparee->bindValue(1,$table, PDO::PARAM_STR);
  $requete_preparee->bindValue(2,$column, PDO::PARAM_STR);
  $requete_preparee->bindValue(3,$newvalue, PDO::PARAM_STR);
  $requete_preparee->bindValue(4,$table, PDO::PARAM_STR);
  $requete_preparee->bindValue(5,$id, PDO::PARAM_INT);
  
  $requete_preparee->execute(); 
  return "mise à jour réussie";
  } catch (PDOException $e) {
    return $e->getMessage();
  } 
  }
  
  public function selection_Client ($table,$column){
     try {
        $requete = "SELECT $column from $table";
        $resultat = $this->connexionPDO->query($requete);
        $resultat = $resultat->fetchAll(PDO::FETCH_ASSOC);
        return $resultat;
    } catch (PDOException $e) {
        echo "erreur :";$e->getMessage();
    }
  
  }
  
}