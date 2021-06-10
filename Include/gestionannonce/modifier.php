<?php

include '../header_membre.php';

$id =$_GET['id'];

    if(!empty($_POST)){

        
        require "../database.php";
        $req = $pdo->prepare("UPDATE annonces SET nom = ?, description = ?, prix = ? WHERE id = ?");

        $req->execute(array( $_POST['nom'],
        $_POST['description'],
         $_POST['prix'], $id));
        header('location: ./confirm_connect.php');
    };

?>

<form action="#" method="POST" enctype="multipart/form-data">

<label for="nom">Nouveau nom:</label>
<input type="text" name="nom">

<label for="description">Nouvelle description:</label>
<input type="textarea" name="description" cols="30" rows="10"></textarea>

<label for="prix">Prix</label>
<input type="number" name="prix" min="1" max="100000000000000">

<button type="submit">Valider la modification</button>

</form>