<?php

class TvSerie extends Production{

    public function __construct($title,$lang,$vote,$genre,public int $seasonNumb) {
        parent::__construct($title,$lang,$vote,$genre);
        
    }
}