
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
    $race = $_GET['race'];
    $image = NULL;
    $unicorn = "https://media.giphy.com/media/l2JhLTAOByHloa2ru/giphy.gif";
    $human =  "https://media.giphy.com/media/WmtfHnpq45MKkMI5zU/giphy.gif";
    $cat = "https://media.giphy.com/media/12bjQ7uASAaCKk/giphy.gif'";

    $race = 'human' ? $image = 'https://media.giphy.com/media/WmtfHnpq45MKkMI5zU/giphy.gif' : $race = 'cat' ? $image = "https://media.giphy.com/media/12bjQ7uASAaCKk/giphy.gif'" : $image = "https://media.giphy.com/media/WmtfHnpq45MKkMI5zU/giphy.gif";
    
    // Nam form
    $name = $_GET['name'];

    if( empty($name)) {
        echo "Hey ! You forgot your name ! ";
    } else {
        echo "Hello $name";
    }
?>
<form method="get" action=""> 
    <p> Are you : </p>
    <label for="race">Human</label>
    <input type="radio" name="race" value="human"><br />

    <label for="race">Cat</label>
    <input type="radio" name="race" value="cat"><br />

    <label for="race">Unicorn</label>
    <input type="radio" name="race" value="unicorn"><br />

    <input type="submit" name="submit" value="Let's see !">
</form>

<form method="get" action ="">
<label for="name">Enter your name :</label>
<input type="text" name="name">

<input type="submit" name="submit" value="Let's see !">
</form>

<img src="<?php echo $image;?>">


</body>
</html>