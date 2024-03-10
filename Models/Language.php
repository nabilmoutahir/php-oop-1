<?php

class Language
{

    public $language;

    public function get_language()
    {

        include __DIR__ . "/../data/languages.php";

        $lang = $langs[array_rand($langs)];

        $this->language = $lang;

        return $this->language;

    }

}
;