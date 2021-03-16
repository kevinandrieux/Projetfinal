<?php
 session_start();
 if(isset($_SESSION['username'])){

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
        else {
            require '../database.php';
            $req = $pdo->prepare('INSERT INTO annonces SET nom = ?, description = ?, photo = ?, prix = ?, role_sscat = ?, role_cat = 2');
            $req->execute([$_POST['nom'], $_POST['description'], $_POST['photo'],$_POST['prix'], $_POST['role_sscat'],]);
            header('location: gestion_jv.php');
            exit();
        }

        
        
    }
}else {
    header('location: ../../connexion.php');
}