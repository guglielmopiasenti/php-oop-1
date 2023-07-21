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
}

?>