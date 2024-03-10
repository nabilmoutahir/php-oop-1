<?php

include_once __DIR__ . "/Production.php";

class TVSerie extends Production
{

    public $seasons;

    public function __construct(Title $title_name, Language $language_movie, Vote $vote_rate, $seasons)
    {

        parent::__construct($title_name, $language_movie, $vote_rate);

        $this->seasons = $seasons;

    }

}