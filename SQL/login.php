<?php 
$login_ok = "Robin";
$pwd_ok = "test";

if(isset($_POST['login']) && isset($_POST['pwd'])){
    if($_POST['login'] == $login_ok && $_POST['pwd'] == $pwd_ok){
        session_start();
        $_SESSION['login'] = $_POST['login'];
        $_SESSION['pwd'] = $_POST['pwd'];

        header('location: page_member.php');
    } else {
        echo '<body onLoad="alert(\'Membre non reconnu...\')">';
        echo '<meta http-equiv="refresh" content="0;URL=index.php">';
    }
} else {
    echo ' Variable pas déclarées';
}
?>