<?php
session_start();
 if(isset($_SESSION['username'])){
?>
<fieldset>
<legend>Poster une annonce sport:</legend>
<form action="./insertinfo_exe.php" method="POST">
<label for="nom">Nom du Produit</label>
<input type="text" name="nom">
<label for="description"> Description du Produit</label>
<textarea name="description" id="" cols="30" rows="10"></textarea>
<label for="photo">photo</label>
<input type="file" name="photo" id="">
<label for="prix">Prix</label>
<input type="text" name="prix" id="">
<label for="role_sscat">Categorie</label>
<select name="role_sscat" id="">
<option value="3">Sports de raquette</option>
<option value="2">Sports individuel</option>
<option value="1">Sports collectifs</option>
</select>
<input type="datetime-local" name="datatime" id="">
<button type="submit">envoyer l'annonce</button>
</form>
</fieldset>
<?php
 }
?>