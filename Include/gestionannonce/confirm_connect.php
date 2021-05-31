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

<nav class="memb_nav">
<section class="memb_sect">
<h3>Poster une annonce:</h3>
<a href="./insert_infoform.php"><button class="button_annonce">Rayons Informatique</button></a>
<a href="./insert_jvform.php"><button class="button_annonce">Rayons Jeux-Vidéos</button></a>
<a href="./insert_sportform.php"><button class="button_annonce">Rayons Sports</button></a>
</section>
</nav>