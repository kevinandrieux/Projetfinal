
<form action="./insertjv.php" method="POST">
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
<option value="4">Accessoires</option>
<option value="6">jeux</option>
<option value="5">console</option>
</select>
<button type="submit">envoyer l'annonce</button>


</form>