<?php

require_once __DIR__.'/models/Production.php';
require_once __DIR__.'/models/Genre.php';
include_once __DIR__.'/models/Movie.php';
include_once __DIR__.'/models/TvSerie.php';


include_once __DIR__.'/db.php';
$movie=new Movie(100,120);
//$tv=new TvSerie(5);
var_dump($movie);
$parasite->setYear(2019);
$gladiator->setYear(2000);
$itaJeegRobot->setYear(2015);

//var_dump($itaJeegRobot->genre);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>OOP-1</title>
    </head>
    <body>
        
            <?php foreach ($films as $key => $film) :?>
                <ul>
                    <li>Title: <strong><?=$film->title?></strong></li>
                    <li>Language: <?=$film->lang?></li>
                    <li>Vote: <?=$film->vote?></li>
                    <li>Genre: <?=$film->genre->name?></li>
                    <li>
                        <small>Note: <?=$film->getYear()?></small>
                    </li>
                </ul>
                <hr>
            <?php endforeach?>
    </body>
</html>