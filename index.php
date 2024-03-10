<?php
// CLASS

    class Production {

        public $title_name;
        public $language_movie;
        public $vote_rate;

        public function __construct(Title $title_name, Language $language_movie, Vote $vote_rate) {
            $this->title_name = $title_name;
            $this->language_movie = $language_movie;
            $this->vote_rate = $vote_rate;
        }
    };


    class Title {
        public $title;

        public function get_title() {

            include __DIR__ . "/data/titles.php";

            $movie = $movies[array_rand($movies)];

            $this->title = $movie;

            return $this->title;

        }
    };

    // GET CLASS LANGUAGE
    class Language {

        public $language;

        public function get_language() {

            include __DIR__ . "/data/languages.php";

            $lang = $langs[array_rand($langs)];

            $this->language = $lang;

            return $this->language;
        
        }

    };

    // GET CLASS VOTE
    class Vote{
        public $vote;

        public function get_vote(){
            $this -> vote = rand(1,10);
            return $this -> vote;
        }
    };
    
    // ARRAY INSTANCES
    $prod_1 = new Production (new Title, new Language, new Vote);

    $prod_2 = new Production(new Title, new Language, new Vote);

    $prod_3 = new Production(new Title, new Language, new Vote);

    $prods = [
        $prod_1, 
        $prod_2, 
        $prod_3
    ];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- BS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <div class="">
        <table class="table">

            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Movie Title</th>
                <th scope="col">Language</th>
                <th scope="col">Vote</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($prods as $i => $prod): ?>
                    <tr>
                        <th scope="row">
                            <?= ( $i + 1) ?>
                        </th>

                        <td>
                            <?= $prod->title_name->get_title() ?>
                        </td>
                        <td>
                            <?= $prod->language_movie->get_language() ?>
                        </td>
                        <td>
                            <?= $prod->vote_rate->get_vote() ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>

        </table>
    </div>






</body>
</html>