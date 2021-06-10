<?php
 session_start();
 if(isset($_SESSION['username'])){
    $photoname = $_FILES['photo']['name'];
    $sessuser = $_SESSION['username'];
    if(!empty($_POST)) {
        $errors = array();
        

        if(empty($_POST['nom'])){
            echo'insert un nom de produit';
        }
        elseif(empty($_POST['description'])){
            echo'Veulliez mettre une description';
        }
        elseif(empty($_FILES['photo'])){
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
          
            if (copy($_FILES['photo']['tmp_name'], __DIR__.'./copyimage/'. $photoname )){
                $req = $pdo->prepare("INSERT INTO annonces SET nom = ?, description = ?, photo = ?, prix = ?, role_sscat = ?, role_cat = 3, role_user = ?, datatime = ?");
                $req->execute([$_POST['nom'], $_POST['description'], $_FILES['photo'] = $photoname,$_POST['prix'], $_POST['role_sscat'], $sessuser, $_POST['datatime']]);
                header('location: confirm_connect.php');
                exit();
            }else{
                echo'la photo a pas etais envoyer';
            }
           
            
        }
    

        
        
    }
}else {
    header('location: ../../connexion.php');
}