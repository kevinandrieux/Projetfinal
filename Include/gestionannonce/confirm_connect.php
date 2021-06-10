<?php
    include('../header_membre.php');
?>

<section id="hello_echo">
<?php
if(isset($_SESSION['username'])){
    echo 'Bonjour ' . $_SESSION['username'] . ', que désirez-vous faire aujourd\'hui?' ;
}
?>
</section>

<table>
<tr>
<th>
nom
</th>
<th>
prix
</th>
<th>
date
</th>
<th>
categorie
</th>
<th>
Modifier/Supprimer
</th>
</tr>
<?php
require '../database.php';
    $username = $_SESSION['username'];
$req = $pdo->query("SELECT * FROM `annonces` WHERE role_user='$username'
");

    while($data = $req->fetch()){
        echo'
        <tr>
        <td>
'.$data->nom.'
</td>
<td>
'.$data->prix.'
</td>
<td>
'.$data->creadate.'
</td>
<td>
'.$data->role_cat.'
</td>
<td>
<a style="color: white;" href="./modifier.php?id='.$data->id.'">Modifier</a>
<a style="color: white;" href="./supprimer.php?id='.$data->id.'">Supprimer</a>
</td>
</tr>';

    }

?>


</table>



</div>

<nav class="memb_nav">
<section class="memb_sect">
<h3>Poster une annonce:</h3>
<a href="./insert_infoform.php"><button class="button_annonce">Rayons Informatique</button></a>
<a href="./insert_jvform.php"><button class="button_annonce">Rayons Jeux-Vidéos</button></a>
<a href="./insert_sportform.php"><button class="button_annonce">Rayons Sports</button></a>
</section>
</nav>