<?php

class Movie extends Production{

        public function __construct($title,$lang,$vote,$genre,public int $profits, public int $duration) {
            
            parent::__construct($title,$lang,$vote,$genre);
        }
}