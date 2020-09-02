<?php
try {
    $dt = new PDO('mysql:host=mysqldb;dbname=becode;charset=utf8', 'root', 'root');
}catch (Exception $e){
    die('Erreur : ' .$e->getMessage());
}

function getLogin(){
    if (isset($_SESSION['login']) && isset($_SESSION['pwd'])) {
		// On teste pour voir si nos variables ont bien été enregistrées
		echo 'Votre login est '.$_SESSION['login'].' et votre mot de passe est '.$_SESSION['pwd'].'.';
		// On affiche un lien pour fermer notre session
        echo '<a href="logout.php">Déconnection</a>';
        return TRUE;
	}
	else {
        echo 'Les variables ne sont pas déclarées.';
        return FALSE;
  }
}
?>