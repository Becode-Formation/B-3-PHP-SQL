<?php
    require('main.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation de formulaire en POO</title>
</head>
<body class="bg-gray-400">
    <?php
    $form = new Form();
    $form->create("start");
    $form->input("text", "lastName", " Your lastname :");
    $form->input("text", "firstName", "Your firstname :");
    $form->input("email", "email", "Enter your email :");
    $form->input("password", "pwd", "Your password :");
    $form->radio("Gender", "Homme", "Femme", "Other");
    $form->select("Favorite Food", "Ramen", "Sushi", "Steack Frites");
    $form->submit();
    $form->create("end");
?>
</body>
</html>