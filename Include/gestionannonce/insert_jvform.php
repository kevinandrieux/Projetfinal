<link rel="stylesheet" href="../../CSS/nav.css">
<?php

include('../header_membre.php');

if(isset($_SESSION['username'])){
?>
 <div style="display: flex; justify-content: center;padding: 40px 0px 0px; ">
<div class="formulaire">  
<form action="./insertjv.php" method="POST" enctype="multipart/form-data" >
<label for="nom">Nom du Produit</label>
<input type="text" name="nom">
<label for="description"> Description du Produit</label>
<textarea style="border-radius: 20px;" name="description" id="" cols="30" rows="10"></textarea>
<label for="photo">photo</label>
<input type="file" name="photo" id="photo" >
<label for="prix">Prix</label>
<input type="number" name="prix" min="1" max="100000000000000" id="">
<label for="role_sscat">Categorie</label>
<select name="role_sscat" id="">
<option value="4">Accessoires</option>
<option value="6">jeux</option>
<option value="5">console</option>
</select>
<button type="submit">envoyer l'annonce</button>


</form>
</div>
 </div>
<?php


 }
?>