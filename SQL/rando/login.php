<?php 
session_start ();
require 'connect.php';
if(isset($_POST['Connexion'])){
    if(!empty($_POST['login']) and !empty($_POST['pwd'])){
        $login = $_POST['login'];
        $pwd = $_POST['pwd'];
        $query = $dt->prepare('SELECT * FROM login_user WHERE User= :user AND Pwd= :pwd ');
        $query->execute( array ('user' => $login, 'pwd' => sha1($pwd)));
        $user = $query->fetchAll();

        $count = $query->rowCount();  
        if($count > 0)  
        {  
            session_start ();
             $_SESSION["login"] = $login;  
             $_SESSION['pwd'] = sha1($pwd);
             header("location: read.php");  
        }  
        else  
        {  
             echo 'Wrong Data';  
        }  

    } else {
        echo "fail";
    }
}
?>