<!DOCTYPE html>
<html lang="fr">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    
    <title>Login - Dashboard</title>
    
    <style>

    </style>
    
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
        
        
        .fw-sidebar {
            width: 120px;
            background: #222;
        }
                
        #main {
            margin-left: 120px
        }
        
        .button {
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
            <div class="fw-coll" style="width:20%">
                <p></p>
            </div>
            <div class="fw-coll" style="width:60%">
                <div class="fw-center">
                    <header class="fw-container fw-center">
                        <div style="text-align: center">
                            <img src="img/Logo GBAF.png" alt="GBAF">
                        </div>
                    </header>

                    <div class="fw-row-padding">
                        <div class="fw-coll m12">
                            <div class="fw-card fw-round fw-white">
                                <div class="fw-container fw-padding">
                                    <a href="form-register.php">Créer un compte</a>
                                     
                                    <form  method="POST" action="action-connect.php" class="fw-container fw-card-4" style="margin-top: 0%;">
                                        <div>
                                            <p>
                                                <label>Pseudonyme</label>
                                                <input class="fw-input" name="username" type="text" style="width:80%" required>
                                            </p>
                                            <p>
                                                <label>Mot de passe</label>
                                                <input class="fw-input" name="password" type="password" style="width:80%" required>
                                            </p>
                                            <br>
                                        </div>

                                        <div class="fw-center">
                                            <p>
                                                <button type="submit" name="submit" class="fw-button fw-white fw-border fw-border-red fw-round-large" style="color: black"> Se connecter </button>
                                            </p>
                                            <a href="forgotpassword.php">Mot de passe oublié ?</a>
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
                </div>
            </div>
                
        </div>
        <div class="fw-coll" style="width:20%">
            <p></p>
        </div>
    </section>
    <?php include('footer.php'); ?>
</body>

</html>