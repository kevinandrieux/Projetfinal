<?php
    include('../header_membre.php');
?>

<?php
if(isset($_SESSION['username'])){
    echo 'bonjour ' . $_SESSION['username'];
}
?>
