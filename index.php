<?php
    include_once __DIR__ . "/Models/Production.php";

    // ARRAY INSTANCES
    $prod_1 = new Production (new Title, new Language, new Vote);

    $prod_2 = new Production(new Title, new Language, new Vote);

    $prod_3 = new Production(new Title, new Language, new Vote);

    $prods = [
        $prod_1, 
        $prod_2, 
        $prod_3
    ];


    $movie_1 = new Movie(new Title, new Language, new Vote,"100M", "60min");
    $movie_2 = new Movie(new Title, new Language, new Vote, "40M", "90min");
    $movie_3 = new Movie(new Title, new Language, new Vote, "70M", "120min");

    $movies = [
        $movie_1,
        $movie_2,
        $movie_3
    ];


    $tvseries_1 = new TVSerie(new Title, new Language, new Vote, "10");
    $tvseries_2 = new TVSerie(new Title, new Language, new Vote, "5");
    $tvseries_3 = new TVSerie(new Title, new Language, new Vote, "7");

    $tvseries=[
        $tvseries_1,
        $tvseries_2,
        $tvseries_3
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

    <!-- CSS -->
    <link rel="stylesheet" href="./style/style.css">

</head>
<body>

    <div class="px-5">

        <div>

            <h2>Productions</h2>

            <table class="table">

                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Prod Title</th>
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

        <div>

            <h2>Tv Series</h2>

            <table class="table">

                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">TV Serie Title</th>
                        <th scope="col">Language</th>
                        <th scope="col">Vote</th>
                        <th scope="col">Seasons</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($tvseries as $i => $serie): ?>
                        <tr>
                            <th scope="row">
                                <?= ($i + 1) ?>
                            </th>
        
                            <td>
                                <?= $serie->title_name->get_title() ?>
                            </td>
                            <td>
                                <?= $serie->language_movie->get_language() ?>
                            </td>
                            <td>
                                <?= $serie->vote_rate->get_vote() ?>
                            </td>
                            <td>
                                <?= $serie->seasons ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
        
            </table>
        </div>

        <div>

            <h2>Movies</h2>

            <table class="table">

                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Movie Title</th>
                    <th scope="col">Language</th>
                    <th scope="col">Vote</th>
                    <th scope="col">Profits</th>
                    <th scope="col">Duration</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($movies as $i => $movie): ?>
                        <tr>
                            <th scope="row">
                                <?= ($i + 1) ?>
                            </th>
        
                            <td>
                                <?= $movie->title_name->get_title() ?>
                            </td>
                            <td>
                                <?= $movie->language_movie->get_language() ?>
                            </td>
                            <td>
                                <?= $movie->vote_rate->get_vote() ?>
                            </td>
                            <td>
                                <?= $movie->profits ?>
                            </td>
                            <td>
                                <?= $movie->duration ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
        
            </table>
        </div>
    </div>
</body>
</html>