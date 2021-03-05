<?php

if(!empty($_POST)){
    $errors = array();

if(empty($_POST['username'])){
    echo 'Identifiant invalide';
}
elseif(empty($_POST['nom'])){
    echo 'Veuillez renseigner votre nom';
} 
elseif(empty($_POST['prenom'])){
    echo 'Veuillez renseigner votre prénom';
}
elseif(empty($_POST['mail'])){
    echo 'Veuillez renseigner votre mail';
}
elseif(strlen($_POST['user_pass']) < 6){
    echo 'Votre mot de passe doit contenir plus de six caractéres';
}
elseif(empty($_POST['user_pass'])){
    echo 'Veuillez renseigner un mot de passe';
}
elseif(($_POST['user_pass']) != ($_POST['confirm_pass'])){
    echo 'Votre mot de passe doit être identique à la confirmation';
}
else {
    require "./database.php";
    $req = $pdo->prepare("INSERT INTO users SET username = ?, nom = ?, prenom = ?, mail = ?, user_pass = ? ");
    $password = password_hash($_POST['user_pass'], PASSWORD_BCRYPT);
$req->execute([$_POST['username'], $_POST['nom'], $_POST['prenom'], $_POST['mail'], $password]);
header('location: ../connexion.php');

exit();
}
}
?>