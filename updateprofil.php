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

    echo($_POST['nom']);
    echo($_POST['prenom']);
    echo($_POST['username']);
    echo($_POST['password']);
    echo($_POST['question']);
    echo($_POST['reponse']);

    if(!empty($_POST['nom'])) {
        $sql = "UPDATE account SET nom = :new_name WHERE username = :username";

        $query = $db->prepare($sql);
        $query->bindValue(":new_name", $_POST['nom']);
        $query->bindValue(":username", $_SESSION['username']);
        $query->execute();
    }

    if(!empty($_POST['prenom'])) {
        $sql = "UPDATE account SET prenom = :new_prenom WHERE username = :username";

        $query = $db->prepare($sql);
        $query->bindValue(":new_prenom", $_POST['prenom']);
        $query->bindValue(":username", $_SESSION['username']);
        $query->execute();
    }

    if(!empty($_POST['username'])) {
        $sql = "UPDATE account SET username = :new_username WHERE username = :username";

        $query = $db->prepare($sql);
        $query->bindValue(":new_username", $_POST['username']);
        $query->bindValue(":username", $_SESSION['username']);
        $query->execute();

        $_SESSION['username'] = $_POST['username'];
    }

    if(!empty($_POST['password'])) {
        $sql = "UPDATE account SET password = :new_password WHERE username = :username";

        $query = $db->prepare($sql);
        $query->bindValue(":new_password", $_POST['password']);
        $query->bindValue(":username", $_SESSION['username']);
        $query->execute();
    }

    if(!empty($_POST['question'])) {
        $sql = "UPDATE account SET question = :new_question WHERE username = :username";

        $query = $db->prepare($sql);
        $query->bindValue(":new_question", $_POST['question']);
        $query->bindValue(":username", $_SESSION['username']);
        $query->execute();
    }

    if(!empty($_POST['reponse'])) {
        $sql = "UPDATE account SET reponse = :new_reponse WHERE username = :username";

        $query = $db->prepare($sql);
        $query->bindValue(":new_reponse", $_POST['reponse']);
        $query->bindValue(":username", $_SESSION['username']);
        $query->execute();
    }


    header ('location: profil.php');
    
?>