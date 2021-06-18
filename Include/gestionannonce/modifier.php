<link rel="stylesheet" href="../../CSS/nav.css">
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
<div style="display: flex; justify-content: center;padding: 40px 0px 0px; ">
<div class="formulaire">
<form action="#" method="POST" enctype="multipart/form-data">

<label for="nom">Nouveau nom:</label>
<input type="text" name="nom">

<label for="description">Nouvelle description:</label>
<textarea style="border-radius: 20px;" type="textarea" name="description" cols="30" rows="10"></textarea>

<label for="prix">Prix</label>
<input type="number" name="prix" min="1" max="100000000000000">

<button type="submit">Valider la modification</button>

</form>
</div>