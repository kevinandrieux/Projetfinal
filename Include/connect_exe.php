<?php

require './database.php';

if(isset($_POST["submit"]))
{
    if(empty($_POST['username']) || empty($_POST['user_pass']))
    {
echo 'remplissage absent';
}
else{
    $query = "SELECT * FROM users WHERE username = :username LIMIT 1";
    $statement = $pdo->prepare($query);
    $statement-> execute(
        array(
            'username' => $_POST['username']
        )
        );
        $count = $statement->rowCount();
        if($count > 0)
        {
            $result = $statement->fetch(PDO::FETCH_ASSOC);

            if(password_verify($_POST['user_pass'], $result['user_pass'])) {
                session_start();
                $_SESSION['username'] = $_POST['username'];
                exit(header('location: ../confirm_connect.php'));
            } else{
                echo 'echec';
                header('location: ../connexion.php');
            }
        }
        else {
            echo 'echec critique';
        }
}
}
?>