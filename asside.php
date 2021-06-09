<aside>
  <div style="padding-bottom: 12px;">
  <input type="search" value="recherche" class="recherche">
</div>
<div class="recent" style="padding-bottom: 12px;">
  <h1>Liste article récent</h1>
</div>
<?php
require './database.php';

$req = $pdo->query('SELECT * FROM annonces ORDER BY `datatime` DESC LIMIT 0,3');

while($data = $req->fetch()){
    echo"
  <div class='article' style='align-items:center'>
    <div>
    <img class='imagerecent' src='./Include/gestionannonce/copyimage/" .$data->photo."' alt=''>
    </div>
    <div class='prix'>
      <h3>".$data->nom."</h3>
      <p>".$data->prix."€</p>
    </div> 
  </div>";

 
};
?>
 

</aside>