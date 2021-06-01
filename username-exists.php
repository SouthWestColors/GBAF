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

    // est-ce que l'utilisateur existe ?
    $sql = "SELECT id_user FROM account WHERE username = :username";

    $query = $db->prepare($sql);
    $query->bindValue(":username", $_POST['username']);
    $query->execute();

    $res = $query->fetch();

    // si l'utilisateur n'existe pas
    if (empty($res[0])) {
        echo ("cet utilisateur n'existe pas !");
        header ('location: forgotpassword.php');
    } else {
        echo ("cet utilisateur existe");
        $_SESSION['id_user'] = $res[0];
        header ('location: secretquestion.php');
    }

?>