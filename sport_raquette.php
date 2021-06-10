<?php
    include './Include/header.php';
?>
<h1 class="title_info" style="text-align:center; padding-top:10px">Sports de Raquette</h1>

<main class="list_art">


    <link rel="stylesheet" href="./CSS/card.css">

<section class="section">
    <link rel="stylesheet" href="./CSS/card.css">
    <?php
    require './database.php';
    
    $req = $pdo->query('SELECT * FROM annonces WHERE role_sscat = 9 ORDER BY `datatime` DESC LIMIT 0,6');
    
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
<?php include './asside.php';?>
</main>





<?php
    include './Include/footer.php';
?>






























<?php
    include './Include/footer.php';
?>