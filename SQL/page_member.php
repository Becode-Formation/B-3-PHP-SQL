<?php
session_start();

if(isset($_SESSION['login']) && isset($_SESSION["pwd"])){

	echo '<html>';
	echo '<head>';
	echo '<title>Page de membre</title>';
	echo '</head>';

	echo '<body>';
	echo 'Votre login est '.$_SESSION['login'].' et votre mot de passe est '.$_SESSION['pwd'].'.';
	echo '<br />';

	echo '<a href="./logout.php">Déconnection</a>';
} else {
    echo " Variable pas déclarées";
}
?>