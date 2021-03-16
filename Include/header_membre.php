<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/memberspace.css">
    <script src="https://kit.fontawesome.com/f03e221f59.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" type="image/x-icon" href="./img/OccazLogo.png" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <title>Occa'z</title>
</head>
<body id='head'>

<header class="respon" id="navcolor">
  <a href="../../index.php">
    <div>
  <img class="logo" src="../../img/OccazLogo.png" >
  </div>
  </a>
  <div class="nav-title">
    <div class="mem-title">
        <h1 style="color: white;">Bienvenue sur votre espace</h1>
    <p style="color: white; padding-bottom: 12px;" >Du meilleur site Occa'z</p>
    </div>
      <div>
        <?php
        session_start();
        if(isset($_SESSION['username'])){
        echo '<button class="deposer"><a class="annonce" href="./Include/deco_exe.php">Déconnexion</a></button>';
        }
        else{
          header('location: ../../connexion.php');
        }
        ?>
      </div>
  </div>
</header>