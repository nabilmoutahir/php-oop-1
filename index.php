<?php
// INCLUDE






// CLASS

    class Production {

        public $title_name;
        public $language_movie;
        public $vote_rate;

        public function __construct($title_name, $language_movie, $vote_rate) {
            $this->title_name = $title_name;
            $this->language_movie = $language_movie;
            $this->vote_rate = $vote_rate;
        }
    };


    // class Title {
    //     public $title;
    // };

    // class Language {
    //     public $language;
    // };


    // class Vote{
    //     public $title;
    // };
    
    $Production_1 = new Production ('test', "test", "test");

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
    
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <th scope="row">
            1
        </th>
            <td>
                <?= $Production_1->title_name ?>
            </td>
            <td>
                <?= $Production_1->language_movie ?>
            </td>
            <td>
                <?= $Production_1->vote_rate ?>
            </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td colspan="2"></td>
      <td></td>
    </tr>
  </tbody>

</table>







</body>
</html>