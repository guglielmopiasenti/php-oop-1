<?php
class Movie
{
    // instance
    public $title;
    public $release_date;
    // construct
    public function __construct(string $title, string $release_date)
    {
        $this->title = $title;
        $this->release_date = $release_date;
    }
    // methods
    public function presentFilm()
    {
        return 'Movie title:' . $this->title . '' . 'Release Date:' . $this->release_date;
    }
}

$movie1 = new Movie('Il Signore degli Anelli', '2001' );
$movie2 = new Movie('The Truman Show', '1998');
?>