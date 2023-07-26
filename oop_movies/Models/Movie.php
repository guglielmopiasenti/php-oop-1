<?php
include __DIR__ . '/Person.php'; 
class Movie
{
    // instance
    public $id;
    public $title;
    public $genre;
    public $release_date;
    // construct
    public function __construct(int $id, string $title, string $genre, string $release_date)
    {
        $this->id = $id;
        $this->title = $title;
        $this->genre = $genre;
        $this->release_date = $release_date;
    }
    public function addActor(Actor $actor)
    {
        if($actor instanceof Actor){
            $cast[] = $actor;
        }
    }
}