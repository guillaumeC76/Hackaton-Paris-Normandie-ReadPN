<?php
session_start();
include ('inc/function.php');
include ('inc/pdo.php');
$title = 'Changer de mot de passe';
$errors = array();
$success = false;

if (!empty($_POST['submitted'])) {

    // Faille XSS
    $email = clean($_POST['email']);

    $sql = "SELECT email, token FROM users where email = :email";
    $query = $pdo->prepare($sql);
    $query->bindValue(':email',$email,PDO::PARAM_STR);
    $query->execute();
    $user = $query->fetch();

    if (!empty($user)) {
        $token = $user['token'];
        $email = urlencode($email);
        $html = '<a href="modif-password.php?token='.$token.'&email='.$email.'">C\'est ici</a>';
        echo $html;

    } else {
        $errors['email'] = 'Veuillez renseigner un mot de passe';
    }



}


include ('inc/header.php'); ?>


<h3>Entrez votre adresse email</h3>

    <form action="" method="post" class="formpage">

        <div class="separation2">
        <label for="email">Email *</label>
        <input type="email" name="email" id="email" value="<?php if (!empty($_POST['email'])) { echo $_POST['email'];}?>">
        <p class="error"><?php if (!empty($errors['email'])) { echo $errors['email']; } ?></p>
        </div>

        <input type="submit" name="submitted" value="Modifier" id="boutonenvoyer">
    </form>



<?php include ('inc/footer.php');
