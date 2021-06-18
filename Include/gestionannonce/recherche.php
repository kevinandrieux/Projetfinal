<meta charset="utf-8" />
<?php
 
 $pdo = new PDO('mysql:localhost;dbname=occaz;charset=utf8','root','');
 
$articles = $pdo->query('SELECT nom FROM annonces ORDER BY id DESC');
if(isset($_GET['nom']) AND !empty($_GET['nom'])) {
   $nom = htmlspecialchars($_GET['nom']);
   $articles = $pdo->query('SELECT nom FROM annonces WHERE nom LIKE "%'.$nom.'%" ORDER BY id DESC');
   if($articles->rowCount() == 0) {
      $articles = $pdo->query('SELECT nom FROM annonces WHERE CONCAT(nom) LIKE "%'.$nom.'%" ORDER BY id DESC');
   }
}
?>
<form method="GET">
   <input type="search" name="nom" placeholder="Recherche..." />
   <input type="submit" value="Valider" />
</form>
<?php if($articles->rowCount() > 0) { ?>
   <ul>
   <?php while($_GET['nom'] = $articles->fetch()) { ?>
      <li><?= $_GET['nom'] ?></li>
   <?php } ?>
   </ul>
<?php } else { ?>
Aucun résultat pour de recherche ...
<?php } ?>