 <?php
    // On démarre la session
    session_start ();
    if(isset($_GET['id']))
    {
        
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
    }
    else
    {
        header("Location: profil.php");
    }

    //on cherche l'id utilisateur associé au nom
    $sql = "SELECT id_user FROM account WHERE username = :username";

    $query = $db->prepare($sql);
    $query->bindValue(":username", $_SESSION['username']);
    $query->execute();
    $userid = $query->fetch();

    $query->closeCursor();

    //idpost, iduser, idacteur, dateadd, post
    $sql = "INSERT INTO post (id_user, id_acteur, date_add, post) VALUES (:id_user, :id_acteur, :date_add, :post)";

    $query = $db->prepare($sql);
    $query->bindValue(":id_user", $userid[0]);
    $query->bindValue(":id_acteur", $_GET['id']);
    $query->bindValue(":date_add", date("Y-m-d"));
    $query->bindValue(":post", $_POST['post']);
    $query->execute();

    header ('location: acteurs.php?id='.$_GET['id']);

?>