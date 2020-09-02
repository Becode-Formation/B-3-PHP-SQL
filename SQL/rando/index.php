<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
<?php echo $msg ?>
    <form  action="login.php" method="post">
        <label for="login">Login : </label>
        <input type="texte" name="login">
        <label for="pwd">Password : </label>
        <input type="password" name="pwd">
        <br />
        <input type="submit" name="Connexion" value="Connexion">
    </form>
</body>
</html>