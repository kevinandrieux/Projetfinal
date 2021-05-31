
    <form method="post" enctype="multipart/form-data">
    <input type="file" name="photo">
    <input type="submit">
    </form>
<?php
$destinationFilePath = 'copyImages/';
if (isset($_FILES['photo']['tmp_name'])) {
$retour = copy($_FILES['photo']['tmp_name'], $_FILES['photo']['name'] ,$destinationFilePath );
if($retour) {
    echo '<p>La photo a bien été envoyée.</p>';
    echo '<img src=" ./copyImages/' . $_FILES['photo']['name'] . '">';
}
}