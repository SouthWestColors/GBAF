
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
            
            //gestion des erreurs éventuelles
            catch(PDOException $e){
              echo "Erreur : " . $e->getMessage();
            }


            $sql = "SELECT id_user FROM account WHERE username = :username AND password = :password";

            // on prépare la requete sql sur la base de donnée où l'on s'est connectés juste au dessus
            $query = $db->prepare($sql);
            // on associe la valeur username de la requete sql au contenu du champ username transmis par le formulaire (donc rempli par l'utilisateur)
            $query->bindValue(":username", $_POST['username']);
            $query->bindValue(":password", $_POST['password']);
            // on exécute la requete
            $query->execute();

            // on récupère le resultat de la requete
            $user = $query->fetch();

            // si on a bien une correspondance dans la bd
            if ($user) {
        
            // on la démarre :)
            session_start ();
            // on enregistre les paramètres de notre visiteur comme variables de session
            
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['password'] = $_POST['password'];
            
            
            header ('location: accueil.php');
        } else {
            echo "Erreur";
        }
        ?>