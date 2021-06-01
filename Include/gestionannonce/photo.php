
    <form method="post" enctype="multipart/form-data">
    <input type="file" name="photo">
    <input type="submit">
    </form>
<?php


if (copy($_FILES['photo']['tmp_name'], __DIR__.'./copyimage/'.$_FILES['photo']['name'] )){
    echo '<p>La photo a bien été envoyée.</p>';
}else{
    echo'la photo a pas etais envoyer';

}
?>
