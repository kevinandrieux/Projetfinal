<?php
session_start();
if(isset($_SESSION['username'])){

}
?>
<h1>SALUT</h1>
<?php
require '../database.php';

$req = $pdo->query('SELECT * FROM annonces');


    while($data = $req->fetch()){
        echo '<tr>
      img src="./'.$data->photo.'."><br>';
    
    
    }
?>