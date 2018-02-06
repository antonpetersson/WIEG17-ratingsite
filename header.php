<?php
    define("namn", "PlayerRank.com");
    require "data.php";
    require "function.php";
?>


<!Doctype HTML>
<html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title> 
        <?php 
            //Skickar namn till title
            echo constant("namn");
            //Kollar om titleEnd är satt, och isåfall printar efter namn
            if (isset($titleEnd)){
                echo " - $titleEnd";
            }
        ?> 
    </title>
</head>
<body>  
<h1><?php echo constant("namn"); ?></h1>
<ul>
    <li><a href="./index.php">Start</a></li>
    <li><a href="./listan.php">Listan</a></li>
    <li><a href="./kontakt.php">Kontakt</a></li>
</ul>



</body>



</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
