<?php

include '../header_membre.php';

$id =$_GET['id'];

require "../database.php";

$req = $pdo->prepare("DELETE FROM annonces WHERE id = ?");

$req->execute(array($id));

exit(header('location: ./confirm_connect.php'));

?>