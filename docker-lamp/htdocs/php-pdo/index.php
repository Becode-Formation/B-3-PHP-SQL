<html>
<body>

<?php
//récupérer le fichier de connexion à la DB
require 'connect.php';

$resultat = 'SELECT * FROM Météo';

$donnees = $bdd->query($resultat);

echo '
<table>
<tr>
    <th>Ville</th>
    <th>Haut</th>
    <th>bas</th>
</tr>';
while($row = $donnees->fetch()) {
    echo  '<tr><td>'.$row["ville"].'</td><td>'.$row["haut"].'</td><td>'.$row["bas"].'</td></tr>';
}
echo '</table>';
$donnees->closeCursor();
?>

<form method="POST">
    <label for="ville">Entrez une ville : <label>
    <input type="text" name="ville"><br />
    <label for="haut">Entrez la température max : <label>
    <input type="number" name="haut"><br/>
    <label for="bas">Entrez la température minimal : <label>
    <input type="number" name="bas"><br/>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
$newVille = $_POST['ville'];
$newHaut = $_POST['haut'];
$newBas= $_POST['bas'];

if(isset($newBas, $newHaut, $newVille)){
    $Insert = 'INSERT INTO Météo (ville,haut,bas) VALUES ("'.$newVille.'", '.$newHaut.','.$newBas.')';
     $bdd->exec($Insert);
        echo "Envoyé !";
        header("Refresh:0");
}
?>

</body>
</html>