<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">
    <script src="asset/js/main.js"></script>
    <link rel="stylesheet" href="asset/css/style.css">
    <title>Paris Normandie New</title>

</head>
<body>

<header>

    <?php if (!is_logged()) { ?>

    <div id="mySidepanel" class="sidepanel">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#"><img src="asset/img/ticket.png" alt="">Les avantages</a>
        <div class="barre"></div>
        <a href="register.php"><img src="asset/img/user.png" alt="">Inscription</a>
        <div class="barre"></div>
        <a href="login.php"><img src="asset/img/switch.png" alt="">Connexion</a>
    </div>

        <button class="openbtn" onclick="openNav()">&#9776;</button>
    <a href="index.php"><section id="logo">
            <img src="asset/img/PN.png" alt="Logo PN">
        </section></a>

    <?php } else { ?>

    <div id="mySidepanel" class="sidepanel">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="article.php"><img src="asset/img/article.png" alt="">Mes articles</a>
        <div class="barre"></div>
        <a href="podcast.php"><img src="asset/img/podcast.png" alt="">Podcasts</a>
        <div class="barre"></div>
        <a href="#"><img src="asset/img/ticket.png" alt="">Mes avantages</a>
        <div class="barre"></div>
        <a href="#"><img src="asset/img/user.png" alt="">Mon compte</a>
        <div class="barre"></div>
        <a href="deconnexion.php"><img src="asset/img/croix.png" alt="">Déconnexion</a>
    </div>

        <button class="openbtn" onclick="openNav()">&#9776;</button>
    <a href="index.php">
        <section id="logo">
            <img src="asset/img/PN.png" alt="Logo PN">
        </section></a>
    <?php }?>



</header>

