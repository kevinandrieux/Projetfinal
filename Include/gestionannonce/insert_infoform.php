<?php
session_start();
 if(isset($_SESSION['username'])){
?>
<fieldset>
<legend>Poster une annonce Informatique:</legend>
<form action="./insertinfo_exe.php" method="POST" enctype="multipart/form-data">
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
<option value="3">Ordinateurs Fixes</option>
<option value="2">Ordinateurs Portables </option>
<option value="1">Accessoires</option>
</select>
<input type="datetime-local" name="datatime" id="">
<button type="submit">envoyer l'annonce</button>
</form>
</fieldset>
<?php
 }
?>