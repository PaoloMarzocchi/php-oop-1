<?php

require_once __DIR__.'/models/Production.php';
require_once __DIR__.'/models/Genre.php';
include_once __DIR__.'/models/Movie.php';
include_once __DIR__.'/models/TvSerie.php';


include_once __DIR__.'/db.php';

$parasite->setYear(2019);
$gladiator->setYear(2000);
$itaJeegRobot->setYear(2015);
$breakingBad->setYear(2008);
$got->setYear(2011);
$strangerThings->setYear(2016);

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
        <h3>Movies</h3>
            <?php foreach ($movies as $key => $movie) :?>
                <ul>
                    <li>Title: <strong><?=$movie->title?></strong></li>
                    <li>Language: <?=$movie->lang?></li>
                    <li>Vote: <?=$movie->vote?></li>
                    <li>Genre: <?=$movie->genre->name?></li>
                    <li>Duration: <?=$movie->duration?> min</li>
                    <li>Profits: <?=$movie->profits?> million $</li>
                    <li>
                        <small>Note: <?=$movie->getYear()?></small>
                    </li>
                </ul>
                <hr>
            <?php endforeach?>

            <h3>TV-Shows</h3>
            <?php foreach ($tvSeries as $key => $show) :?>
                <ul>
                    <li>Title: <strong><?=$show->title?></strong></li>
                    <li>Language: <?=$show->lang?></li>
                    <li>Vote: <?=$show->vote?></li>
                    <li>Genre: <?=$show->genre->name?></li>
                    <li>N° of seasons: <?=$show->seasonNumb?></li>
                    <li>
                        <small>Note: <?=$show->getYear()?></small>
                    </li>
                </ul>
                <hr>
            <?php endforeach?>

    </body>
</html>