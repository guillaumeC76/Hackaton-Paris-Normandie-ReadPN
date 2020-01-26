<?php
session_start();
include ('inc/function.php');
include ('inc/pdo.php');



include('inc/header.php'); ?>


<h4>Personnalisez votre fil d'actualité</h4>

<section id="article">

    <div class="check">
    <label class="container">Economie
        <input type="checkbox">
        <span class="checkmark"></span>
    </label>

    <label class="container">Politique
        <input type="checkbox">
        <span class="checkmark"></span>
    </label>

    <label class="container">Société
        <input type="checkbox">
        <span class="checkmark"></span>
    </label>

    <label class="container">Faits divers
        <input type="checkbox">
        <span class="checkmark"></span>
    </label>

    <label class="container">Sports
        <input type="checkbox">
        <span class="checkmark"></span>
    </label>

    <label class="container">Culture / Loisirs
        <input type="checkbox">
        <span class="checkmark"></span>
    </label>

    <label class="container">France / Monde
        <input type="checkbox">
        <span class="checkmark"></span>
    </label>

    <label class="container">PN interacif
        <input type="checkbox">
        <span class="checkmark"></span>
    </label>

    <label class="container">Vidéos
        <input type="checkbox">
        <span class="checkmark"></span>
    </label>
    </div>

    <input type="submit" name="submitted" value="Enregistrer" id="boutonenvoyer2">
</section>




