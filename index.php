<?php

require_once __DIR__ . '/Models/Movie.php';
require_once __DIR__ .'/Models/db.php';



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php 
        foreach ($movies as $movie) {
            echo "<li>" .
            $movie->getMovieInfo() .
            "</li>";
        }
        ?>
    </ul>

    
</body>
</html>