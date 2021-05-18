<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="icon" href="img/fav_icon_gbaf.png" />
    </head>

    <body>
        <header>
            <a href="index.php"><img id="logo" src="img/Logo GBAF.png" alt="logo de GBAF" /></a>
            <p>Le Groupement Banque Assurance Français</p>
        </header>

        <header>
            <a href="index.php"><img id="logo" src="img/Logo GBAF.png" alt="logo de GBAF" /></a>
            <div id="user">
                <div class="fas fa-user-tie fa-2x"></div>
                <div id="userLink">
                    <p><a href="index.php?action=account"><?= $_SESSION['firstname']; ?> <?= $_SESSION['lastname']; ?></a></p>
                    <p id="deco"><a href="index.php?action=logout">Se déconnecter</a></p>
                </div>
            </div>
        </header>

        <!--<?= ($header == 'noconnect') ? $headerOut : '' ?>
        <?= ($header == 'connect') ? $headerIn : '' ?>

        <?= $pageContent ?>-->

        <div>test</div>

        <footer>
            <p><a href="#">Mentions légales</a> | <a href="#">Contact</a></p>
        </footer>
    </body>
</html>
