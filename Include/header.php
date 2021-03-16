<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/nav.css">
    <link rel="stylesheet" href="./CSS/carrousel.css">
    <script src="https://kit.fontawesome.com/f03e221f59.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" type="image/x-icon" href="./img/OccazLogo.png" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <title>Occa'z</title>
</head>
<body id='head'>

<header class="respon" id="navcolor">
  <a href="./index.php">
    <div>
  <img class="logo" src="./img/OccazLogo.png" >
  </div>
  </a>
  <div class="nav-title">
    <h1 style="color: white;">Bienvenue sur Occa'z</h1>
    <p style="color: white; padding-bottom: 12px;" >le meilleur site Occa'z</p>
 
    <ul class="hList">
       
        <li>
          <li class="menu">
            <a href="./indexinfo.php" class="menu-title menu-title_2nd"><h2>Informatique</h2></a>
            <ul class="menu-dropdown">
              <li><a href="./indexinfo_port.php">Ordinateurs Portables</a></li>
              <li><a href="./indexinfo_fix.php">Ordinateurs Fixes</a></li>
              <li><a href="./indexinfo_periph.php">Périphériques & Accessoires</a></li>
            </ul>
          </a>
        </li>
        <li>
          <li class="menu">
            <a href="./Sport.php"><h2 class="menu-title menu-title_3rd">Sport</h2></a>
            <ul class="menu-dropdown">
              <li><a href="./sports_collectifs.php">Sports collectifs</a></li>
              <li> <a href="./sports_individuels.php">Sports individuels</a></li>
              <li><a href="./sport_raquette.php">Sports de raquette</a></li>
            </ul>
          </li>
        </li>
        <li>
          <li class="menu">
            <a href="./indexjv.php"><h2 class="menu-title menu-title_4th">Jeux Video</h2></a>
            <ul class="menu-dropdown">
              <li><a href="./indexjv_console.php">Console</a></li>
              <li><a href="./indexjv_jeux.php">Jeux</a></li>
              <li><a href="./indexjv_access.php">Accessoires</a></li>
              </ul>
          </a>
        </li>
      </ul>
      </div>
      <div style="display: grid;">
        <?php
        session_start();
        if(isset($_SESSION['username'])){
        echo '<button class="deposer"><a class="annonce" href="./Include/deco_exe.php">Déconnexion</a></button>';
        }
        else{
          echo '<button class="deposer"><a class="annonce" href="./connexion.php">Connexion</a></button>';
        }
        ?>
      </div>
      </header>
      <nav class="resp">
    <div class="conteneur-nav">
        <label for="mobile"><i class="fas fa-bars"></i></label>
        <input type="checkbox" id="mobile" role='button'>
        
        <ul>
            <li><a href="#">Accueil</a></li>
            <li class='deroulant'><a href="#">Liste Annonce</a>
                <ul class="sous">
                    <li><a href="#">Berck</a></li>
                    <li><a href="#">Etaples</a></li>
                    <li><a href="#">Touquet</a></li>
                </ul>
            </li>
            <li><button class="deposer"><a class="annonce"href="#">Deposer une annonce</a></button></li>
        </ul>
    </div>
</nav>