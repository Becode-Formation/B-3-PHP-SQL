<?php
require('connect.php');

$lName = $_POST['lastName'];
$fName= $_POST['firstName'];
$birthdate = $_POST['birthdate'];
$card = $_POST['card'];
$cardNumber = $_POST['cardNumber'];

    if(isset($lName, $fName, $birthdate)){
        echo "ok";
        if(empty($card)){
            $card = 0;
            $cardNumber = "NULL";
        }
        $queryInto = $db->prepare('INSERT INTO clients (lastName, firstName, birthdate, "card", cardNumber)
                            VALUES (:lastName, :firstName, :birthdate, :"card", :cardNumber)'); 
        $queryInto->excecute(array('lastName' =>$lName, 'firstName'=>$fName, 'birthdate'=>$birthdate, 'card'=>$card, 'cardNumber'=>$cardNumber));
        $msg = "Envoyé !";
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php echo $msg ?>
    <from method="post">
    <label for="lastName">Nom</label>
    <input type="text" id="lastName" name="lastname"/>
    <br />
    <label for="firstName">Prénom</label>
    <input type="text" id="firstName" name="firstname"/>
    <br />
    <label for="birthdate">Date de naissance</label>
    <input type="date" id="birthdate" name="birthdate" />
    <br />
    <label for="card">Carte de fidélité</label>
    <input type="checkbox" id="card" name="card"/>
    <br />
    <label for="cardNumber">Numéro de carte fidélité</label>
    <input type="text" id="cardNumber" name="cardNumber"/>
    <br />
    <input type="submit" id="submit" value="Envoyer"/>
    </form>
</body>
</html>