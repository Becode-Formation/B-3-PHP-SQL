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

</body>
</html>