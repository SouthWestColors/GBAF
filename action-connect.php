<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP / MySQL</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Bases de données MySQL</h1>  
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


            $sql = "SELECT id_user FROM account WHERE username = :username AND password = :password";

            //repasser le GET en POST
            $query = $db->prepare($sql);
            $query->bindValue(":username", $_POST['username']);
            $query->bindValue(":password", $_POST['password']);
            $query->execute();


            $user = $query->fetch();

            if ($user) {
        
            // on la démarre :)
            session_start ();
            // on enregistre les paramètres de notre visiteur comme variables de session ($login et $pwd) (notez bien que l'on utilise pas le $ pour enregistrer ces variables)
            
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['password'] = $_POST['password'];
            
            
            header ('location: accueil.php');
        } else {
            echo "Erreur";
        }
        ?>
    </body>
</html>