

<?php
session_start();
if(isset($_SESSION['username'])){
    echo 'bonjour ' . $_SESSION['username'];
}
?>
