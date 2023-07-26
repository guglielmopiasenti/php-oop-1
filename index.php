<?php
include __DIR__ . '/oop_movies/Models/Person.php';
include __DIR__ . '/oop_movies/Models/Movie.php';

$actor1 = new Actor(1, 'Jhon', 'Doe');
$actor2 = new Actor(2, 'Saruman', 'Evil');

$movie1 = new Movie(1, 'Il Signore degli Anelli', 'Fantasy', '2001' );
$movie2 = new Movie(2, 'The Truman Show', 'Comedy', '1998');

$movie1->addActor($actor2);
$movie2->addActor($actor2);

$movies = [$movie1, $movie2];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section>
        <h2>Movies</h2>
        <div class="card">
            <?php foreach($movies as $movie) :?>
                <li>
                    <h2><?=$movie->title?></h2>
                    <small><em><?=$movie->genre?></em></small>
                    <small><em><?=$movie->release_date?></em></small>
                </li>
            <?php endforeach;?>
        </div>
    </section>
</body>
</html>