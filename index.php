<?php

class Production{

    public function __construct(public string $title, public string $lang,public int $vote) {       
}

}
$parasite = new Production('Parasite','Korean',8);
$gladiator = new Production('The Gladiator','English (USA)',10);
$itaJeegRobot = new Production('Lo chiamavano Jeeg Robot','Italian',8);


$films=[
    $parasite,
    $gladiator,
    $itaJeegRobot
];

//var_dump($films);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP-1</title>
</head>
<body>
    <ul>
        <?php foreach ($films as $key => $film) :?>
            <li>Title: <strong><?=$film->title?></strong></li>
            <li>Language: <?=$film->lang?></li>
            <li>Vote: <?=$film->vote?></li>
            <hr>
        <?php endforeach?>
    </ul>
</body>
</html>