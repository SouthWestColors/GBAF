<?php

session_start ();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Extranet GBAF</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/fw-.css">

  <link rel="stylesheet" href="css/red-theme-fw.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
  <link rel="stylesheet" href="fa4/css/font-awesome.min.css">
  <style>
    html, body, h1, h2, h3, h4, h5 {font-family: "Open Sans", sans-serif}
  </style>
</head>

<body class="fw-theme-red">

<?php include('barNav.php'); include('fonctions.php'); ?>

<!-- Page Container -->
<div class="fw-container fw-content" style="max-width:1400px;margin-top:80px">    
  <!-- Grid -->
  <div class="fw-row">
    <!-- Colonne de gauche -->
    <div class="fw-coll m3">
      <!-- Profil -->
      <div class="fw-card fw-round fw-white">
        <div class="fw-container">
          <h4 class="fw-center"><?= getNomFamille($_SESSION['username']); ?></h4>
          <p class="fw-center"><img src="img/Profil.png" class="fw-circle" style="height:106px;width:106px" alt="Avatar"></p>
          <hr>
        </div>
      </div>
      
      <div>
        <br>
        <li class="fw-bar fw-margin-bottom" style="list-style : none;">
          <span class="fw-right">
          <button class="fw-button fw-white fw-border fw-border-red fw-round-large" >
          <a href="acteurs.php?access=actor&id=1" style="text-decoration : none;">Voir</a>
          </button>
          </span>
          <img src="img/formation_co_full.png" class="fw-bar-item" width="175px" height="50px">
          <div class="fw-bar-item">
          <br>
          </div>
        </li> 
        
        <li class="fw-bar fw-margin-bottom" style="list-style : none;">
          <span class="fw-right" >
            <button class="fw-button fw-white fw-border fw-border-red fw-round-large" >
              <a href="acteurs.php?access=actor&id=2" style="text-decoration : none;">Voir</a>
            </button>
          </span>
          <img src="img/protectpeople_full.png" class="fw-bar-item" width="175px" height="50px">
          <div class="fw-bar-item">
            <br>
          </div>
        </li> 

        <li class="fw-bar fw-margin-bottom" style="list-style : none;">
          <span class="fw-right" >
            <button class="fw-button fw-white fw-border fw-border-red fw-round-large" >
              <a href="acteurs.php?access=actor&id=3" style="text-decoration : none;">Voir</a>
            </button>
          </span>
          <img src="img/Dsafrance_full.png" class="fw-bar-item" width="175px" height="50px">
          <div class="fw-bar-item">
            <br>
          </div>
        </li> 
        
        <li class="fw-bar fw-margin-bottom" style="list-style : none;">
          <span class="fw-right" >
            <button class="fw-button fw-white fw-border fw-border-red fw-round-large" >
              <a href="acteurs.php?access=actor&id=4" style="text-decoration : none;">Voir</a>
            </button>
          </span>
          <img src="img/CDE_full.png" class="fw-bar-item" width="175px" height="50px">
          <div class="fw-bar-item">
            <br>
          </div>
        </li> 
      </div>
    <!-- Fin colonne de gauche -->
    </div>
    


    <!-- Colonne du milieu -->
    <div class="fw-coll m9">  

      <div class="fw-container fw-card fw-white fw-round fw-margin-left fw-margin-right">
        <br>
        <div class="fw-center">
          <img src="img/Logo GBAF.png" alt="GBAF">
        </div>
        <div class="fw-center">
          <h4><b>Le Groupement Banque Assurance Fran??ais (GBAF) est une f??d??ration
          repr??sentant les 6 grands groupes fran??ais :</b></h4>
          <div><br></div>
          <ul>
            <li>BNP Paribas</li>
            <li>BPCE</li>
            <li>Cr??dit Agricole</li>
            <li>Cr??dit Mutuel - CIC</li>
            <li>Soci??t?? G??n??rale</li>
            <li>La Banque Postale</li>
          </ul>
          <br>
          <p>M??me s???il existe une forte concurrence entre ces entit??s, elles vont toutes travailler
          de la m??me fa??on pour g??rer pr??s de 80 millions de comptes sur le territoire
          national.
          Le GBAF est le repr??sentant de la profession bancaire et des assureurs sur tous
          les axes de la r??glementation financi??re fran??aise. Sa mission est de promouvoir
          l'activit?? bancaire ?? l?????chelle nationale. C???est aussi un interlocuteur privil??gi?? des
          pouvoirs publics.</p>
        </div>
        <div class="fw-row-padding" style="margin:0 -16px">
        </div>
      </div>

    <!-- Fin colonne du milieu -->
    </div>
    
  </div>
  
<!-- Fin Page Container -->
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
