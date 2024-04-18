<?php
require_once __DIR__.'/models/Production.php';

$parasite = new Production('Parasite','Korean',8, new Genre('Comedy thriller','lorem lorem'));
$gladiator = new Production('The Gladiator','English (USA)',10,new Genre('History','lorem lorem'));
$itaJeegRobot = new Production('Lo chiamavano Jeeg Robot','Italian',8,new Genre('Action','lorem lorem'));

$films=[
    $parasite,
    $gladiator,
    $itaJeegRobot
];