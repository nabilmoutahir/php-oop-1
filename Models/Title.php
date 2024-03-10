<?php
class Title
{
    public $title;

    public function get_title()
    {

        include __DIR__ . "/../data/titles.php";

        $movie = $movies[array_rand($movies)];

        $this->title = $movie;

        return $this->title;

    }
}
;