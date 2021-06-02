<!-- Navbar -->
<div class="fw-top">
 <div class="fw-bar fw-theme-d2 fw-left-align fw-large">
  <a class="fw-bar-item fw-button fw-hide-medium fw-hide-large fw-right fw-padding-large fw-hover-white fw-large fw-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="accueil.php" class="fw-bar-item fw-button fw-padding-large fw-theme-d4 fw-border fw-border-red fw-round-large"><i class="fa fa-home fw-margin-right"></i>Accueil GBAF</a>
    
  <a href="profil.php" class="fw-bar-item fw-button fw-hide-small fw-right fw-padding-large fw-hover-white fw-theme-d4 fw-border fw-border-red fw-round-large" title="Mon compte">
   
    <?php echo $_SESSION['username']; ?>
  </a>
  <a  class="fw-bar-item fw-button fw-padding-large fw-theme-d4 fw-right fw-border fw-border-red fw-round-large" href="logout.php">Se déconnecter</a>
 </div>
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="fw-bar-block fw-theme-d2 fw-hide fw-hide-large fw-hide-medium fw-large">
  <a href="profil.php" class="fw-bar-item fw-button fw-padding-large">Profil</a>
  <a href="logout.php" >Se déconnecter</a>
</div>