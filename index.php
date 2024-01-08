<?php

require_once __DIR__ . '/Models/Movie.php';

$movies = [
    new Movie("The Human Centipede: First Sequence", "Tom Six", ["Horror, Splatter"], "2009"),
    new Movie("The Human Centipede 2 (Full Sequence)", "Tom Six", ["Horror, Splatter"], "2011"),
    new Movie("The Human Centipede 3 (Final Sequence)", "Tom Six", ["Horror, Splatter, Comedy"], "2015")
];



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