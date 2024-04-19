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

            <?php foreach ($productions as $key => $production) :?>
                <h3><?= ($key === 'movies') ? 'Movies': 'TV-Shows'?></h3>
                <ul>
                <?php foreach ($production as $type => $media) :?>
                    <li>Title: <strong><?=$media->title?></strong></li>
                    <li>Language: <?=$media->lang?></li>
                    <li>Vote: <?=$media->vote?></li>
                    <li>Genre: <?=$media->genre->name?></li>

                    <?php if($key === 'movies'):?>
                        <li>Duration: <?=$media->duration?> min</li>
                        <li>Profits: <?=$media->profits?> million $</li>
                    <?php else :?>
                        <li>N° of seasons: <?=$media->seasonNumb?></li>
                    <?php endif ?>

                    <li>
                        <small>Note: <?=$media->getYear()?></small>
                    </li>
                    <hr>
                <?php endforeach?>
                </ul>
            <?php endforeach?>

    </body>
</html>