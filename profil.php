<?php
// On démarre la session
session_start ();
?>

<!DOCTYPE html>
<html>
<title>Profil - Extranet GBAF</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/fw-.css">
<link rel="stylesheet" href="css/red-theme-fw.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="fa4/css/font-awesome.min.css">
<style>
html, body, h1, h2, h3, h4, h5 {font-family: "Open Sans", sans-serif}
</style>
<body class="fw-theme-l5">

<?php include('barNav.php'); include('fonctions.php'); ?>

<!-- Page Container -->
<div class="fw-container fw-content" style="max-width:1400px;margin-top:80px">    
  <!-- The Grid -->
  <div class="fw-row">
    <!-- Left Column -->
    <div class="fw-coll m3">
      <!-- Profile -->
      <div class="fw-card fw-round fw-white">
        <div class="fw-container">
         <h4 class="fw-center"><?= getNomFamille($_SESSION['username']); ?></h4>
         <p class="fw-center"><img src="img/Profil.png" class="fw-circle" style="height:106px;width:106px" alt="Avatar"></p>
        </div>
      </div>

    <!-- End Left Column -->
    </div>

    <?php
      //on va rechercher les infos de l'utilisateur à afficher
      $servername = 'localhost';
      $username = 'root';
      $password = 'root';
      
      //On essaie de se connecter
      try{
          $db = new PDO("mysql:host=$servername;dbname=gbaf", $username, $password);
          //On définit le mode d'erreur de PDO sur Exception
          $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          //echo 'Connexion réussie';
      }
      
      /*On capture les exceptions si une exception est lancée et on affiche
       *les informations relatives à celle-ci*/
      catch(PDOException $e){
        echo "Erreur : " . $e->getMessage();
      }

      $sql = "SELECT * FROM account WHERE username = :username";
      $query = $db->prepare($sql);
      $query->bindValue(":username", $_SESSION['username']);
      $query->execute();

      $userinfo = $query->fetch(PDO::PARAM_STR);
      //print_r($userinfo);

      $query->closeCursor();

    ?>
    
    <!-- Middle Column -->
    <div class="fw-coll m9">  
      <div class="fw-container fw-card fw-white fw-round fw-margin"><br>
        <img src="img/Profil.png" alt="Avatar" class="fw-left fw-circle fw-margin-right" style="width:60px">
        <h4><?php echo $_SESSION['username']; ?></h4><br>
        <hr class="fw-clear">
        <form  name="form" method="POST" action="updateprofil.php" class="fw-container fw-card-4">
          <div>
            <p>
              <label for="nom">Nom <span>*</span></label>
              <input class="input fw-input" name="nom" type="text" style="width:90%" placeholder= <?php echo('"'.$userinfo['nom'].'"'); ?> >
            </p>
            <p>
              <label for="prenom">Prénom <span>*</span></label>
              <input class="input fw-input" name="prenom" type="text" style="width:90%" placeholder= <?php echo('"'.$userinfo['prenom'].'"'); ?> >
            </p>
            <p>
              <label for="username">Pseudo <span>*</span></label>
              <input class="input fw-input" name="username" type="text" style="width:90%" placeholder= <?php echo('"'.$userinfo['username'].'"'); ?> >
            </p>

            <p>
              <label for="password">Mot de passe <span>*</span></label>
              <input class="input fw-input" name="password" type="password" style="width:90%" placeholder= <?php echo('"'.$userinfo['password'].'"'); ?> >
            </p>

            <p>
              <label for="question">Question de sécurité <span>*</span></label>
              <input class="fw-input" name="question" type="text" style="width:90%" placeholder= <?php echo('"'.$userinfo['question'].'"'); ?> >
            </p>
            <p>
              <label for="reponse">Réponse <span>*</span></label>
              <input class="fw-input" name="reponse" type="text" style="width:90%" placeholder= <?php echo('"'.$userinfo['reponse'].'"'); ?> >
            </p>
          </div>

          <div class="fw-center">
            <p>
              <button type="submit" name="submit" class="fw-button fw-section fw-white fw-border fw-border-red fw-round-large"> Enregistrer les modifications </button>
            </p>
          </div>
        </form>

      
      
   

   
    <!-- End Middle Column -->
    </div>
    

    
  <!-- End Grid -->
  </div>
  
<!-- End Page Container -->
</div>
<br>

<?php include('footer.php'); ?>
 
<script>
// Accordion
function myFunction(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("fw-show") == -1) {
    x.className += " fw-show";
    x.previousElementSibling.className += " fw-theme-d1";
  } else { 
    x.className = x.className.replace("fw-show", "");
    x.previousElementSibling.className = 
    x.previousElementSibling.className.replace(" fw-theme-d1", "");
  }
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("fw-show") == -1) {
    x.className += " fw-show";
  } else { 
    x.className = x.className.replace(" fw-show", "");
  }
}
</script>

</body>
</html> 
