 <?php
    // On démarre la session
    session_start ();
        
    $servername = 'localhost';
    $username = 'root';
    $password = 'root';
    
    //On essaie de se connecter
    try{
        $db = new PDO("mysql:host=$servername;dbname=gbaf", $username, $password);
        //On définit le mode d'erreur de PDO sur Exception
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo 'Connexion réussie';
    }
    
    /*On capture les exceptions si une exception est lancée et on affiche
     *les informations relatives à celle-ci*/
    catch(PDOException $e){
      echo "Erreur : " . $e->getMessage();
    }

    // on va chercher la réponse enregistrée dans la bdd
    $sql = "UPDATE account SET password = :new_password WHERE id_user = :id_user";

    $query = $db->prepare($sql);
    $query->bindValue(":id_user", $_SESSION['id_user']);
    $query->bindValue(":new_password", $_POST['new_password']);
    $query->execute();

    $_SESSION['id_user'] = "";
    header ('location: index.php');
?>