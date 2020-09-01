<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Word generator</title>
</head>
<body>
    <?php 
    function generate($nbr1, $nbr2){
        $length = rand($nbr1, $nbr2);
        $letters = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];
        $word = "";
        for($i = 0; $i < $length; $i++){
            $word .= $letters[rand(0, $length - 1)];
        }
        return $word;
    }

    if(array_key_exists('submit', $_POST))
    {
        generate(1, 5);
        $word1= generate(1, 5);
        generate(7, 15);
        $word2 = generate(7, 15);
    }
    ?>

    <h1>Generate a new word !</h1>
    <div><?php echo $word1 ?></div>
    <div><?php echo $word2 ?></div>
    <form method="post">
    <input type="submit" name="submit" value="Generate"/>
    </form>
</body>
</html>