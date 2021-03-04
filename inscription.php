<?php
    include './Include/header.php';
?>
<!-- <div style="display: flex; justify-content: center;padding: 40px 0px 0px; "> -->
<div class="formulaire">
    <h1>
        Inscription
    </h1>
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



<label for="user_kind">Administrateur</label>
<input type="radio" name="user_kind" id="ad" value="1">

<label for="user_kind">Membre</label>
<input type="radio" name="user_kind" id="mem" value="2" checked>

<button type="submit" class="deposer" style="padding: 15px 33px; color:white;">Inscription</button>

</form>


</fieldset>
</div>
</div>













<?php
    include './Include/footer.php';
?>