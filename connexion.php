<?php
    include './Include/header.php';
?>


<fieldset>
<legend>Connexion</legend>
<form action="./connect_exe.php" method="POST">

<label for="username">Nom d'Utilisateur</label>
<input type="text" name="username" id="usname">

<label for="user_pass">Mot de Passe</label>
<input type="password" name="user_pass">

<button type="submit" name="submit">Connexion</button>

</form>
</fieldset>


<?php
    include './Include/footer.php';
?>