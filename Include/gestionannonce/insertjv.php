<?php
 session_start();
 if(isset($_SESSION['username'])){

    $sessuser = $_SESSION['username'];
    if(!empty($_POST)) {
        $errors = array();
        

        if(empty($_POST['nom'])){
            echo'insert un nom de produit';
        }
        elseif(empty($_POST['description'])){
            echo'Veulliez mettre une description';
        }
        elseif(empty($_POST['photo'])){
            echo'insert un nom de produit';
        }
        elseif(empty($_POST['prix'])){
            echo'Prix du produit a ajouté';
        }
        elseif(empty($_POST['role_sscat'])){
            echo'Une catégorie';
        }
        elseif(empty($_POST['datatime'])){
            echo'Veulliez mettre la date';
        }
        else {
            require '../database.php';
            $req = $pdo->prepare("INSERT INTO annonces SET nom = ?, description = ?, photo = ?, prix = ?, role_sscat = ?, role_cat = 2, role_user = ?, datatime = ?");
            $req->execute([$_POST['nom'], $_POST['description'], $_POST['photo'],$_POST['prix'], $_POST['role_sscat'], $sessuser, $_POST['datatime']]);
            header('location: gestion_jv.php');
            exit();
        }

        
        
    }
}else {
    header('location: ../../connexion.php');
}