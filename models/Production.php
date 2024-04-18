<?php

class Production{

    public $year;
    public $userVote;
    public $genre;

    public function __construct(public string $title, public string $lang,public $vote, Genre $genre) {     
        
        $this->genre=$genre;
    }

    public function setNewVote($newVote) {
        $this->userVote = $newVote;
    }
    public function setYear($year) {
        $this->year = $year;
    }
    public function getYear() {
        return "The film '$this->title' was released in $this->year";
    }
}
