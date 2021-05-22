<?php

function getNomFamille($nom_util)
{
    $servername = 'localhost';
    $username = 'root';
    $password = 'root';
    
    //On essaie de se connecter
    try{
        $db = new PDO("mysql:host=$servername;dbname=gbaf", $username, $password);
        //On définit le mode d'erreur de PDO sur Exception
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    
    /*On capture les exceptions si une exception est lancée et on affiche
     *les informations relatives à celle-ci*/
    catch(PDOException $e){
      echo "Erreur : " . $e->getMessage();
    }


    $sql = "SELECT nom, prenom FROM account WHERE username = :username";

    //repasser le GET en POST
    $query = $db->prepare($sql);
    $query->bindValue(":username", $nom_util);
    $query->execute();


    $nomFamille = $query->fetch();

    print_r($nomFamille['prenom']." ".$nomFamille['nom']);
}

?>