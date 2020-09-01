<?php
//Connexion a la base
try {
    $bdd = new PDO('mysql:host=mysqldb;dbname=becode;charset=utf8', 'root', 'root');
}catch (Exception $e){
    dir('Erreur : ' .$e->getMessage());
}
//
$res = 'SELECT * FROM hiking';
$data = $bdd->query($res);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Randonnées</title>
    <link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
  </head>
  <body>
    <h1>Liste des randonnées</h1>
    <table>
      <!-- Afficher la liste des randonnées -->
      <tr>
      <th>Name</th>
      <th>Difficulty</th>
      <th>Distance</th>
      <th>Duration</th>
      <th>Height Difference</th>
      </tr>
        <?php
            while($row = $data->fetch()) {
            echo  '
            <tr>
                <td><a href="./update.php?id='.$row['id'].' ">'.htmlentities($row["rando_name"]).'</a></td>
                <td>'.$row["difficulty"].'</td>
                <td>'.$row["distance"].'</td>
                <td>'.$row["duration"].'</td>
                <td>'.$row["height_difference"].'</td>
                <td><a href="./delete.php?id='.$row['id'].' "><input type="button" name="delet" value="X"></a></td>
            </tr>';
        }
        $data->closeCursor();
        ?>  
    </table>
  </body>
</html>