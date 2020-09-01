<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content ="Générateur d'excuses pour l'école. Rentrez vos infos dans le formulaire et sa génère automatiquement. Excuse pour école.">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="../logo.ico" type="image/x-icon">
    <title>excuses Générator</title>
</head>
<body class="bg-gray-500 font-sans">
<div class="container flex items-center flex-col">
    <header class="text-center m-4">   
    <img src="../logo.svg" width="40"/>
        <h1 class="text-4xl font-bold">Générez une excuse pour votre enfant ! </h1>
        <p>Entrez-les données dans le formulaire et on s'occupe du reste.</p>
    </header>
    <!-- PHP -->
    <?php 
        $text = NULL;
        $cName = $_POST["cName"];
        $gender = $_POST["gender"];
        $pName = $_POST["pName"];
        $reason = $_POST["reason"];
        
    $jour = array("Dimanche","Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi");

    $mois = array("","Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre");

    $datefr = $jour[date("w")].", le  ".date("d")." ".$mois[date("n")]." ".date("Y");
        switch ($reason){
            case "illness":
                $excuse = "à une grippe nucléaire papouasienne";
            break;
            case "death" :
                $excuse = "a perdu sa fourmi domestique";
            break;
            case "activity" : 
                $excuse = "préfère aller à Walibi";
            break;
            case "lotto":
                $excuse = "a gagné au lotto et ne veut donc plus venir perdre son temps à l'école.";
            break;
        }

        if(isset($_POST["cName"]) && isset($_POST["gender"]) && isset($_POST["pName"]) && isset($_POST["reason"])){
            if ($gender == "fils"){
                $abs = "absent";
                $denom = "il";
            } else {
                $abs = "absente";
                $denom = "elle";
            }
                $text =
                        "
                        Bonjour $pName, <br />

                        Je vous annonce que notre enfant, $cName, sera $abs et n’assistera donc pas aux cours de la journée du $datefr.
                        En effet, $cName est dans l'incapacité de venir au lycée parce qu'$denom $excuse. <br />

                        Si vous souhaitez avoir des précisions sur le motif de cette absence scolaire vous pouvez me contacter sur mon téléphone portable. <br />

                        Cordialement
                            ";
        }
        ?>

        <form method="post" class="form__all m-4 bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <!--Name-->
            <label for="cName" class=" text-gray-700 text-sm font-bold mb-2" for="username">Nom de l'enfant : </label>
            <input type="texte" name="cName" class="shadow  border-2 rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"><br />
            <!--Gender-->
            <label for="gender" class="text-gray-700 text-sm font-bold mb-2">Garçon</label>
            <input type="radio" name="gender" value="fils" >
            <label for="gender" class="text-gray-700 text-sm font-bold mb-2">Fille</label>
            <input type="radio" name="gender" value="fille"><br />
            <!--Teacher name-->
            <label for="pName" class="text-gray-700 text-sm font-bold mb-2">Nom du prof :</label>
            <input type="texte" name="pName" class=" border-2 shadow  rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"><br />
            <!--Reason-->
            <p class="text-gray-700 text-lg font-medium">Quels sont les raisons ? </p>
            <label for="reason" class="text-gray-700 text-sm font-bold mb-2">Maladie</label>
            <input type="radio" name="reason" value="illness">
            <label for="reason" class="text-gray-700 text-sm font-bold mb-2">Mort d'une animal</label>
            <input type="radio" name="reason" value="death">
            <label for="reason" class="text-gray-700 text-sm font-bold mb-2">Activité extra-scolaire importante</label>
            <input type="radio" name="reason" value="activity">
            <label for="reason" class="text-gray-700 text-sm font-bold mb-2">Gagner au lotto</label>
            <input type="radio" name="reason" value="lotto"><br />
            <input type="submit" value="Envoyer" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
        </form>

        <div class="m-4 bg-white shadow-md rounded px-8 pt-6 pb-8"><?php echo $text; ?></div>
</div>
</body>
</html>