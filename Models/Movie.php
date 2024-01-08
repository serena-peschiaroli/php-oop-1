<?php  
// classe Movie

class Movie {
    public $title;
    public $director;
    public $genres;
    public $year;

    //constructor

    public function __construct($title, $director, array $genres, $year)
    {
        $this->title = $title;
        $this->director = $director;
        $this->genres = implode ("," , $genres);
        $this->year = $year;

        
    }

    //metodo per mostrare info film

    public function getMovieInfo() {
        return "{$this->title}, diretto da {$this->director}, Genere: {$this->genres}, Anno: {$this->year}";
    }
}

?>