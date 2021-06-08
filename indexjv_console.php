<?php
    include './Include/header.php';
?>
<h1 class="title_info" style="text-align:center; padding-top:10px">Consoles de Jeux</h1>

<main class="list_art">


    <link rel="stylesheet" href="./CSS/card.css">


<section class="section">
    <link rel="stylesheet" href="./CSS/card.css">
    <?php
    require './database.php';
    
    $req = $pdo->query('SELECT * FROM annonces WHERE role_sscat = 5 ORDER BY `datatime` DESC LIMIT 0,6 ');
    
        while($data = $req->fetch()){

  echo '
          <a href="./descrijv.php?id='.$data->id.'">
            <div class="card">
              <img src="./Include/gestionannonce/copyimage/' .$data->photo.'" alt=""  class="img">
                <div class="card2">
                  <h4>'.$data->nom.'</h4>
                  <br>
                  <p>'.$data->prix.'€</p>
                  
                </div>
            </div>
          </a>
';
        }

?>

</section>
<aside>
  <div style="padding-bottom: 12px;">
  <input type="search" value="recherche" class="recherche">
</div>
<div class="recent" style="padding-bottom: 12px;">
  <h1>Liste article récent</h1>
</div>
  <div class="article">
    <div>
    <img class='imagerecent' src="./img/BannièreJV.jpg" alt="">
  </div>
    <div class="prix"><h3>nom de l'article</h3>
    <p>prix</p></div> 
  </div>

</aside>
</main>





<?php
    include './Include/footer.php';
?>