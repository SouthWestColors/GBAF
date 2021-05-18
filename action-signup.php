 <?php


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

    $sql = "INSERT INTO account (nom, prenom, username, password, question, reponse) VALUES (:nom, :prenom, :username, :password, :question, :reponse)";

    $query = $db->prepare($sql);

    $query->bindValue(":nom", $_POST['nom']);
    $query->bindValue(":prenom", $_POST['prenom']);
    $query->bindValue(":username", $_POST['username']);
    $query->bindValue(":password", $_POST['password']);
    $query->bindValue(":question", $_POST['question']);
    $query->bindValue(":reponse", $_POST['reponse']);

    $query->execute();

    // on la démarre :)
	session_start ();
	// on enregistre les paramètres de notre visiteur comme variables de session ($login et $pwd) (notez bien que l'on utilise pas le $ pour enregistrer ces variables)
	$_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];

    header ('location: accueil.php');
    ?>

