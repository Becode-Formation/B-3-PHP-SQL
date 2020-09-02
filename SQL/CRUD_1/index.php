<?php
    //Client
    require('connect.php');
    $read = 'SELECT * FROM clients';
    $client = $db->query($read);

    //Spectacle
    $specRead = 'SELECT * FROM shows';
    $shows = $db->query($specRead);

    $tClient = 'SELECT * FROM clients WHERE id <= 20';
    $twennyclient = $db->query($tClient);

    $fClient = 'SELECT * FROM clients WHERE cardNumber != "NULL"';
    $cardClient = $db->query($fClient);

    $mClient = "SELECT * FROM clients WHERE lastName LIKE 'M%' ORDER BY lastName ASC";
    $letterClient= $db->query($mClient);

    $tShow = "SELECT * FROM shows ORDER BY title ASC";
    $titleShow = $db->query($tShow);

    $allClient = 'SELECT * FROM clients';
    $all = $db->query($allClient);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD 1 - Colyseum</title>
</head>
<body>

<?php
echo'
<table>
<tr>
<td>Lastname</td>
<td>Firstname</td>
<td>Birthdate</td>
<td>Card</td>
<td>CardNumber</td>
</tr>
';
    while($row = $client->fetch()){
        echo'
        <tr>
            <td>'.$row["lastName"].'</td>
            <td>'.$row["firstName"].'</td>
            <td>'.$row["birthDate"].'</td>
            <td>'.$row["card"].'</td>
            <td>'.$row["cardNumber"].'</td>
        </tr>';
    }
echo'</table> <br />';

echo'
<table>
<tr>
<td>Title</td>
<td>Performer</td>
<td>Date</td>
<td>ShowTypesid</td>
<td>firstGenresId</td>
<td>secondGenresId</td>
<td>duration</td>
<td>startTime</td>
</tr>
';
    while($row = $shows->fetch()){
        echo'
        <tr>
            <td>'.$row["title"].'</td>
            <td>'.$row["performer"].'</td>
            <td>'.$row["date"].'</td>
            <td>'.$row["showTypeId"].'</td>
            <td>'.$row["firstGenresId"].'</td>
            <td>'.$row["secondGenreId"].'</td>
            <td>'.$row["duration"].'</td>
            <td>'.$row["startTime"].'</td>
        </tr>';
    }
echo'</table> <br />';

echo'
<table>
<tr>
<td>Lastname</td>
<td>Firstname</td>
<td>Birthdate</td>
<td>Card</td>
<td>CardNumber</td>
</tr>
';
    while($row = $twennyclient->fetch()){
        echo'
        <tr>
            <td>'.$row["lastName"].'</td>
            <td>'.$row["firstName"].'</td>
            <td>'.$row["birthDate"].'</td>
            <td>'.$row["card"].'</td>
            <td>'.$row["cardNumber"].'</td>
        </tr>';
    }
echo'</table> <br />';


echo'
<table>
<tr>
<td>Lastname</td>
<td>Firstname</td>
<td>Birthdate</td>
<td>Card</td>
<td>CardNumber</td>
</tr>
';
    while($row = $cardClient->fetch()){
        echo'
        <tr>
            <td>'.$row["lastName"].'</td>
            <td>'.$row["firstName"].'</td>
            <td>'.$row["birthDate"].'</td>
            <td>'.$row["card"].'</td>
            <td>'.$row["cardNumber"].'</td>
        </tr>';
    }
echo'</table> <br />';

while($row = $letterClient->fetch()){
    echo 'Nom : *' .$row["lastName"] . '* ';
    echo 'Prénom : *' .$row["firstName"] . '*<br />';
}

while($row = $titleShow->fetch()){
    echo $row['title'] . ' par ' . $row['perfomer'] . ', le ' . $row['date'] . ' à ' . $row['startTime'] . '. <br/>';
}

while($row = $all->fetch()){
    echo 'Nom : *' .$row["lastName"] . '* <br /> ';
    echo 'Prénom : *' .$row["firstName"] . '*<br />';
    echo 'Date de naissance : *' . $row['birthDate'] . '*<br />';
    echo 'Carte de fidélité : * ' . $row['card'] . '*<br />';
    echo 'Numéro de carte : *' . $row['cardNumber'] . '*<br /><br />';
}
?>
</body>
</html>