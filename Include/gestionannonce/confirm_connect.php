<?php
    include('../header_membre.php');
?>
<section id="hello_echo">
<?php
if(isset($_SESSION['username'])){
    echo 'Bonjour ' . $_SESSION['username'];
}
?>
</section>

<nav>
<a href="./insert_jvform.php"><button>go!</button></a>


</nav>