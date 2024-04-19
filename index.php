<?php

require_once __DIR__ . '/models/Production.php';
require_once __DIR__ . '/models/Genre.php';
include_once __DIR__ . '/models/Movie.php';
include_once __DIR__ . '/models/TvSerie.php';


include_once __DIR__ . '/db.php';

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/style.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand navbar-dark bg-dark">
            <div class="container">
                <div class="nav navbar-nav">
                    <a class="nav-item nav-link active" href="#" aria-current="page">
                        Home
                    </a>
                </div>
            </div>
        </nav>

    </header>
    <main class="bg-secondary text-light py-4">
        <div class="container">

            <?php foreach ($productions as $key => $production) : ?>


                <h3 class="text-center p-3 border-bottom rounded-3">
                    <?= ($key === 'movies') ? 'Movies' : 'TV-Shows' ?>
                </h3>
                <div class="row justify-content-center g-4 row-cols-2 row-cols-sm-1">
                    <?php foreach ($production as $type => $media) : ?>
                        <div class="col">
                            <div class="card">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item bg-warning">
                                        <h5 class="text-center fw-bold"><?= $media->title ?></h5>
                                    </li>
                                    <li class="list-group-item list-group-item-light">
                                        <strong>Language:</strong> <?= $media->lang ?>
                                    </li>
                                    <li class="list-group-item list-group-item-light">
                                        <strong>Vote:</strong> <?= $media->vote ?>
                                    </li>
                                    <li class="list-group-item list-group-item-light">
                                        <strong>Genre:</strong> <?= $media->genre->name ?>
                                    </li>

                                    <?php if ($key === 'movies') : ?>
                                        <li class="list-group-item list-group-item-light">
                                            <strong>Duration:</strong> <?= $media->duration ?> min
                                        </li>
                                        <li class="list-group-item list-group-item-light">
                                            <strong>Profits:</strong> <?= $media->profits ?> million $
                                        </li>
                                    <?php else : ?>
                                        <li class="list-group-item list-group-item-light">
                                            <strong>N° of seasons:</strong> <?= $media->seasonNumb ?>
                                        </li>
                                    <?php endif ?>

                                    <li class="list-group-item list-group-item-light">
                                        <small>
                                            <strong>Note:</strong> <?= $media->getYear() ?>
                                        </small>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    <?php endforeach ?>


                </div>
            <?php endforeach ?>

        </div>
    </main>

    <footer class="bg-dark text-light py-4">
        <div class="container">
            <div class="row row-cols-4 justify-content-between">
                <div class="col text-center">

                    <ul>
                        <li>
                            <h6>Info</h6>
                        </li>
                        <li>Active item</li>
                        <li>Lorem.</li>
                        <li>Lorem, ipsum. Lorem.</li>
                    </ul>

                </div>
                <div class="col text-center">

                    <ul>
                        <li>
                            <h6>Legal</h6>
                        </li>
                        <li>Lorem, ipsum.</li>
                        <li>Lorem.</li>
                        <li>Lorem, ipsum. Lorem.</li>
                    </ul>

                </div>
                <div class="col text-center">

                    <ul>
                        <li>
                            <h6>Social</h6>
                        </li>
                        <li>Lorem, ipsum.</li>
                        <li>Lorem.</li>
                        <li>Lorem, ipsum. Lorem.</li>
                    </ul>

                </div>
                <div class="col text-center">

                    <ul>
                        <li>
                            <h6>Team</h6>
                        </li>
                        <li>Lorem, ipsum.</li>
                        <li>Lorem.</li>
                        <li>Lorem, ipsum. Lorem.</li>
                    </ul>

                </div>
            </div>
        </div>
    </footer>
</body>

</html>