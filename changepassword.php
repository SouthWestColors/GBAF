<?php

session_start ();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">

<title>S'enregistrer - Dashboard</title>
<!-- -->
<style>

</style>
<!-- -->
<link rel="stylesheet" href="css/fw-.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="fa4/css/font-awesome.min.css">
<style>
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
    font-family: "Montserrat", sans-serif
    }

    .fw-row-padding img {
    margin-bottom: 12px
    }
    /* Set the width of the sidebar to 120px */

    .fw-sidebar {
    width: 120px;
    background: #222;
    }
    /* Add a left margin to the "page content" that matches the width of the sidebar (120px) */

    #main {
    margin-left: 120px
    }

    .boutton {
    width: 300px;
    }
    /* Supprimer la marge de "Page Content" sur les petits écrans */

    @media only screen and (max-width: 600px) {
    #main {
    margin-left: 0
    }
    }
</style>
</head>

<body>
<section>

<div class="fw-row">
    <div class="fw-coll" style="width:60%">
        <div class="fw-center">
            <header class="fw-container fw-red fw-center">
                <h1>Changer le mot de passe</h1> 
            </header>

            <div class="fw-row-padding">
                <div class="fw-coll m12">
                    <div class="fw-card fw-round fw-white">
                        <div class="fw-container fw-padding">

                            <form  name="form" method="POST" action='changepassword-action.php' class="fw-container fw-card-4" style="margin-top: 20%;">
                                <div>
                                    <p>
                                        <label for="new_password">Entrez un nouveau mot de passe :</label>
                                        <br>
                                        <input class="fw-input" name="new_password" type="text" style="width:90%" required>

                                    </p>
                                </div>

                                <div class="fw-center">
                                    <p>
                                        <button type="submit" name="submit" class="fw-button fw-section fw-red fw-ripple"> OK </button>
                                    </p>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    <div>
    <div class="fw-container fw-half fw-margin-top">

</div>
<div class="fw-coll" style="width:20%">
    <p></p>
</div>
</section>
</body>

</html>