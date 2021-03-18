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

<nav>
<h2>Poster une annonce:</h2>
<a href="./insert_infoform.php"><button>Rayons Informatique</button></a>
<a href="./insert_jvform.php"><button>Rayons Jeux-Vidéos</button></a>
</nav>