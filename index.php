<?php

class Production{

    public $year;

    public function __construct(public string $title, public string $lang,public int $vote) {       
    }
    public function setNewVote($newVote) {
        $this->vote = $newVote;
    }
    public function setYear($year) {
        $this->year = $year;
    }
    public function getYear() {
        return "The film '$this->title' was released in $this->year";
    }
}

$parasite = new Production('Parasite','Korean',8);
$gladiator = new Production('The Gladiator','English (USA)',10);
$itaJeegRobot = new Production('Lo chiamavano Jeeg Robot','Italian',8);

$parasite->setYear(2019);
$gladiator->setYear(2000);
$itaJeegRobot->setYear(2015);

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
<!--             <li>Year:  //$film->year</li>
 -->            <li>
                <small>Note: <?=$film->getYear()?></small>
            </li>
            <hr>
        <?php endforeach?>
    </ul>

</body>
</html>