<?php
    include './Include/header.php';
?>




<?php
if(isset($_SESSION['username'])){
    echo 'bonjour ' . $_SESSION['username'];
}
?>

<h2>Vous êtes maintenant connecté</h2>


<?php
    include './Include/footer.php';
?>