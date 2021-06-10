<?php

include('../header_membre.php');

if(isset($_SESSION['username'])){
?>
<fieldset>
<legend>Poster une annonce sport:</legend>
<form action="./insertsport_exe.php" method="POST" enctype="multipart/form-data">
<label for="nom">Nom du Produit</label>
<input type="text" name="nom">
<label for="description"> Description du Produit</label>
<textarea name="description" id="" cols="30" rows="10"></textarea>
<label for="photo">photo</label>
<input type="file" name="photo" id="">
<label for="prix">Prix</label>
<input type="text" name="prix" id=""><p>€</p>
<label for="role_sscat">Categorie</label>
<select name="role_sscat" id="">
<option value="9">Sports de raquette</option>
<option value="7">Sports individuel</option>
<option value="8">Sports collectifs</option>
</select>
<button type="submit">envoyer l'annonce</button>
</form>
</fieldset>
<?php
 }
?>