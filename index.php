<?php
session_start();
include ('inc/function.php');
include ('inc/pdo.php');



include('inc/header.php'); ?>


<section id="couleurFond">


<section id="img1">

    <a href="#"><section id="contenu">
        <h2>Baby Boom, l’émission de TF1, tourne sa 8e saison à la maternité du CHU de Rouen</h2>
        <p>C’est un coup de projecteur qui ravit la direction du CHU de Rouen. Et pour cause, des centaines de milliers de téléspectateurs découvriront bientôt les atouts de l’établissement de santé, et plus particulièrement de sa maternité.</p>
    </section></a>
    <div class="controller">
        <img src="asset/img/error.png" onclick="slideC()" alt="">
        <img src="asset/img/return.png" alt="" class="return">
        <img src="asset/img/accept.png" onclick="slideV()" alt="">
    </div>
        <div class="clear"></div>
</section>


<section id="img2">

    <a href="#"><section id="contenu">
        <h2>Football - N3 : le joli coup de Grand-Quevilly à Dieppe</h2>
        <p>Face à une équipe incapable de trouver la faille, Grand-Quevilly a profité de l’occasion pour s’imposer 1 à 0 hier soir sur le terrain de Dieppe.</p>
    </section></a>
    <div class="controller">
        <img src="asset/img/error.png" onclick="slide2C()" alt="">
        <img src="asset/img/return.png" alt="" class="return" onclick="backturn()">
        <img src="asset/img/accept.png" onclick="slide2V()" alt="">
    </div>
    <div class="clear"></div>
</section>

    <section id="img3">

        <a href="#"><section id="contenu">
            <h2>Le centre de marques d’Honfleur, leader français des outlets</h2>
            <p>Commerce. Deux ans après son ouverture, le centre de marques d’Honfleur est classé premier outlet français et huitième au classement européen.</p>
        </section></a>
        <div class="controller">
            <img src="asset/img/error.png" alt="">
            <img src="asset/img/return.png" alt="" class="return" onclick="backturn2()">
            <img src="asset/img/accept.png" alt="">
        </div>
        <div class="clear"></div>
    </section>




<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="asset/js/main.js"></script>

</section>

<?php include('inc/footer.php');
