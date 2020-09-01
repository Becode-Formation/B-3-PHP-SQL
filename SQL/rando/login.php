<?php 
require 'connect.php';

if(isset($_POST['Connexion'])){
    if(isset($_POST['login']) && isset($_POST['pwd'])){
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