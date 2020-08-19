<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>excuses Générator</title>
</head>
<body>
<header>    
    <h1>Générez une excuse pour votre enfant ! </h1>
    <p>Entrez-les données dans le formulaire et on s'occupe du reste.</p>
</header>
<!-- PHP -->
<?php 
    $text = NULL;
    $cName = $_POST["cName"];
    $gender = $_POST["gender"];
    $pName = $_POST["pName"];
    $reason = $_POST["reason"];

    if(isset($_POST["cName"]) && isset($_POST["gender"]) && isset($_POST["pName"]) && isset($_POST["reason"])){
        if ($gender == "boy"){
            $abs = "absent";
        } else {
            $abs = "absente";
        }
            $text =
                    "
                    Bonjour $pName, <br />

                    Notre enfant, $cName, sera $abs et n’assistera donc pas aux cours de la journée du $date.
                    Notre $gender sera $abset n’ira pas au lycée pour cause. <br />

                    Si vous souhaitez avoir des précisions sur le motif de cette absence scolaire vous pouvez me contacter sur mon téléphone portable. <br />

                    Cordialement
                        ";
    }
    ?>
    <form method="post" class="form__all">
        <!--Name-->
        <label for="cName">Nom de l'enfant : </label>
        <input type="texte" name="cName"><br />
        <!--Gender-->
        <label for="gender">Garçon</label>
        <input type="radio" name="gender" value="fils">
        <label for="gender">Fille</label>
        <input type="radio" name="gender" value="fille"><br />
        <!--Teacher name-->
        <label for="pName">Nom du prof :</label>
        <input type="texte" name="pName"><br />
        <!--Reason-->
        <p>Quels sont les raisons ? </p>
        <label for="reason">Maladie</label>
        <input type="radio" name="reason" value="illness"><br />
        <label for="reason">Mort d'une animal</label>
        <input type="radio" name="reason" value="death"><br />
        <label for="reason">Activité extra-scolaire importante</label>
        <input type="radio" name="reason" value="activity"><br />
        <label for="reason">Gagner au lotto</label>
        <input type="radio" name="reason" value="lotto"><br />
        <input type="submit" value="Envoyer">
    </form>

    <div><?php echo $text; ?></div>
 
</body>
</html>