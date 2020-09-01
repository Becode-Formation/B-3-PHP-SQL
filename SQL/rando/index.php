<?php 
require 'connect.php';

if(isset($_POST['Connexion'])){
    if(!empty($_POST['login']) and !empty($_POST['pwd'])){
        $login = $_POST['login'];
        $pwd = $_POST['pwd'];
        $query = $dt->prepare("SELECT * FROM login_user WHERE User=`$login` AND Pwd=`$pwd`");
        $query->execute();
        $user = $query->fetchAll();

        echo "Hello" .$user['User'];
        session_start();
        $_SESSION['login']= $login;
        $_SESSION['pwd'] = $pwd;

        header('location : index.php');

    } else {
        echo "fail";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
    <form  method="post">
        <label for="login">Login : </label>
        <input type="texte" name="login">
        <label for="pwd">Password : </label>
        <input type="password" name="pwd">
        <br />
        <input type="submit" name="Connexion" value="Connexion">
    </form>
</body>
</html>