<?php

include '../header_membre.php';

if(!empty($_POST)){
    $errors = array();

    if(!empty($_POST['nom'])){
        $errors['nom'] = "Vous n'avez pas renseigné de nom de produit";
    }
    if(!empty($_POST['description'])){
        $errors['description'] = "Vous n'avez pas renseigné de description";
    }
    if(empty($_POST['prix'])){
        $errors['prix'] = "Vous n'avez pas renseigné de prix";
    }
    if(!empty($errors)){
        require "../../database.php";
        $req = $pdo->prepare("UPDATE annonces (nom, description, prix) VALUES (?,?,?)  WHERE id = ?");
        $req->bindParam("ssi", $_POST['nom'], $POST_['description'], $_POST['prix']);
        $req->execute();
        echo 'changement effectué';
    }
}
else{
    echo 'Veuillez renseigner les champs';
}

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