<?php
require_once __DIR__.'/models/Production.php';

$parasite = new Movie('Parasite','Korean',8, new Genre('Comedy thriller','Descrizione'),267,132);
$gladiator = new Movie('The Gladiator','English (USA)',10,new Genre('History','Descrizione'),458,155);
$itaJeegRobot = new Movie('Lo chiamavano Jeeg Robot','Italian',8,new Genre('Action','Descrizione'),7,118);
$breakingBad =  new TvSerie('Breaking Bad','English (USA)',10,new Genre('Drama','Descrizione'),5);
$got = new TvSerie('Games of Thrones','English (USA)',10,new Genre('Fantasy','Descrizione'),8);
$strangerThings = new TvSerie('Stranger Things','English (USA)',8,new Genre('Fantasy','Descrizione'),4);


$productions=[
    'movies'=>[
        $parasite,
        $gladiator,
        $itaJeegRobot
    ],
    'tv-shows'=>[
        $breakingBad,
        $got,
        $strangerThings
    ]
];