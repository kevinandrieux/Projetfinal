<?php
include "./Include/header.php";
$id = $_GET['id'];


require './database.php';

$req = $pdo->query('SELECT * FROM annonces WHERE id = ' .$id. '');

    while($data = $req->fetch()){

echo '
      
        
              <h4>'.$data->nom.'</h4>
              <br>
              <p>'.$data->prix.'€</p>
              <div>
              <img class="imagerecent"  src="./Include/gestionannonce/copyimage/'.$data->photo.'" alt="">
              </div>
              ';
    }
  

    
    

include "./Include/footer.php";   
?>

	
