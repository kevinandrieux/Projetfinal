<?php
    include './Include/header.php';
?>
<link rel="stylesheet" >

<div style="display: flex; justify-content: center;padding: 40px 0px 0px; ">
<div class="formulaire">
<fieldset>
<legend>Connexion</legend>
<form action="./Include/inscription&login/connect_exe.php" method="POST">

<label for="username">Nom d'Utilisateur</label>
<input type="text" name="username" id="usname">

<label for="user_pass">Mot de Passe</label>
<input type="password" name="user_pass">

<button type="submit" name="submit" class="deposer" style="padding: 15px 33px; color:white;">Connexion</button>

</form>
</fieldset>
</div>
</div>
<?php
    include './Include/footer.php';
?>