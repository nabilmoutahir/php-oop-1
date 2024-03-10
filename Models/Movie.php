<?php

include_once __DIR__ . "/Production.php";

class Movie extends Production {

    public $profits;

    public $duration;

    public function __construct(Title $title_name, Language $language_movie, Vote $vote_rate, $profits, $duration) {
       
        parent::__construct($title_name, $language_movie, $vote_rate);

        $this->profits = $profits;

        $this->duration = $duration;

    }

}