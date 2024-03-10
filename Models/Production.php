<?php

include_once __DIR__ . "/Language.php";
include_once __DIR__ . "/Title.php";
include_once __DIR__ . "/Vote.php";

include_once __DIR__ . "/Movie.php";
include_once __DIR__ . "/TVSerie.php";

class Production
{

    public $title_name;
    public $language_movie;
    public $vote_rate;

    public function __construct(Title $title_name, Language $language_movie, Vote $vote_rate)
    {
        $this->title_name = $title_name;
        $this->language_movie = $language_movie;
        $this->vote_rate = $vote_rate;
    }
}
;