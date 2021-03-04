<?php
    include './Include/header.php';
?>

<fieldset>

<legend>Inscrivez-vous dès maintenant!</legend>

<form action="./inscfonction.php" method="POST">

<label for="username">Nom d'Utilisateur:</label>
<input type="text" name="username" id="usname" required>

<label for="nom">Nom:</label>
<input type="text" name="nom" id="name" required>

<label for="prenom">Prénom</label>
<input type="text" name="prenom" id="prename" required>

<label for="mail">Mail:</label>
<input type="text" name="mail" id="mail" required>

<label for="user_pass">Mot de Passe:</label>
<input type="password" name="user_pass" id="uspass" required>

<label for="confirm_pass">Confirmez le Mot de Passe:</label>
<input type="password" name="confirm_pass" id="confpass" required>


<button type="submit">Inscription</button>

</form>

</fieldset>













<?php
    include './Include/footer.php';
?>