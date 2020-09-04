<?php
    require('main.php');
    $html = new Html();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php
    $html->css("test.css");
    $html->meta();
?>
    <title>Document</title>
</head>
<body>
<!--  Image de chat-->
    <?php $html->img("https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse2.mm.bing.net%2Fth%3Fid%3DOIP.s3kVtQRCMajM5sB7j-PpiAHaEK%26pid%3DApi&f=1", "Cat");
        $html->link("www.google.be", "Google est ton ami", "Clique MOIIIII");
    ?>
</body>
<?php  $html->scriptJs("./text.js");?>
</html>