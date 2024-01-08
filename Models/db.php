<?php  
//includere movie.php
require_once __DIR__ . '/Movie.php';

//creare array dove conservare movie

 [];

//istanziare ogg movie
$movies = [ 
    new Movie("The Shawshank Redemption", "Frank Darabont", ["Drama"], "1994"),
    new Movie("The Godfather", "Francis Ford Coppola", ["Crime , Drama"], "1972"),
    new Movie("The Shining", "Stanley Kubrick", ["Horror , Thriller"], "1980"),
    new Movie("Adaptation", "Spike Jonze", ["Comedy , Drama"], "2002"),
    new Movie("Guinea Pig - Chiniku no hana ", "Hideshi Hino", ["Horros , Splatter"], "1985"),
    new Movie("Big Fish", "Tim Burton", ["Fantasy , Drama"], "2003"),
    new Movie("Requiem for a Dream", "Darren Aronofsky", ["Drama , Thriller"], "2000"),
    new Movie("The Human Centipede: First Sequence", "Tom Six", ["Horror, Splatter"], "2009"),
    new Movie("The Human Centipede 2 (Full Sequence)", "Tom Six", ["Horror, Splatter"], "2011"),
    new Movie("The Human Centipede 3 (Final Sequence)", "Tom Six", ["Horror, Splatter, Comedy"], "2015")
]



?>