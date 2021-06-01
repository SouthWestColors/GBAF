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
    $sql = "SELECT reponse FROM account WHERE id_user = :id_user";

    $query = $db->prepare($sql);
    $query->bindValue(":id_user", $_SESSION['id_user']);
    $query->execute();

    $reponse_donnee = $query->fetch();
    print_r($reponse_donnee);
    print_r($_POST['question_secrete']);

    // on regarde si la réponse renseignée correspond bien
    if($reponse_donnee[0] == $_POST['question_secrete']) {
        echo ("bonne réponse !");
        header ('location: changepassword.php');
    } else {
        echo ("mauvaise réponse !");
        header ('location: secretquestion.php');
    }

?>