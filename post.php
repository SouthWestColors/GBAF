<?php
// On démarre la session
session_start ();
?>
   

   <?php
    if(isset($_GET['id']))
    {
        $servername = 'localhost';
        $username = 'root';
        $password = 'root';

             //On essaie de se connecter
        try{
            $db = new PDO('mysql:host=localhost;dbname=gbaf;charset=utf8', 'root', 'root', $db_options);
            //On définit le mode d'erreur de PDO sur Exception
            $db->setAttribute(            
            // gestion des caractères accentués
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
            // choix de récupération des données (assoc / numérique)
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            // pour afficher toutes les erreurs, à commenter en production
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);
            echo 'Connexion réussie';
        }
        
        $sql = "SELECT * FROM post WHERE id_acteur = :id";
        $query = $db -> prepare($sql);
        $query->execute([":id" => $_GET['id']]);
        $acteur = $query -> fetch();
        if(!$acteur)
        {
          header("Location: profil.php");
        }
    }
    else
    {
        
    }
?>


<!-- Page Container -->
<div class="fw-container fw-content" style="max-width:1400px;margin-top:80px">   
<link rel="stylesheet" href="css/fw-.css"> 

</div>
<br>

 <!-- Template -->

  <img class="logo_acteur_main" src='<?php echo $acteur?>'/>

  <fieldset>
    <?php
      echo $description;
    ?>
  </fieldset>

  <fieldset class="fieldset_gestion_account">
    <form>
      <fieldset>
        <legend>Publier un commentaire</legend>
        <input type="text" name="new_commentaire">
      </fieldset>
    </form>
    <fieldset>
      <?php
        if(isset($post)){
          echo $post;
        }
        else{
          echo $nocomment;
        }
      ?>
    </fieldset>
  </fieldset>
