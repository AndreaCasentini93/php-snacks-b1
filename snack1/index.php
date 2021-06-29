<?php 

    /*
    Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema: Olimpia Milano - Cantù | 55-60
    */

    $basketballMatches = [
        [
            "homeTeam" => "Los Angeles Lakers",
            "awayTeam" => "Phoenix Suns",
            "score" => [
                "homeTeamPoints" => "80",
                "awayTeamPoints" => "84"
            ]
        ],
        [
            "homeTeam" => "Orlando Magic",
            "awayTeam" => "Golden State Warriors",
            "score" => [
                "homeTeamPoints" => "95",
                "awayTeamPoints" => "110"
            ]
        ],
        [
            "homeTeam" => "Brooklin Nets",
            "awayTeam" => "Milwaukee Bucks",
            "score" => [
                "homeTeamPoints" => "78",
                "awayTeamPoints" => "75"
            ]
        ],
        [
            "homeTeam" => "New York Knicks",
            "awayTeam" => "Washington Wizards",
            "score" => [
                "homeTeamPoints" => "105",
                "awayTeamPoints" => "109"
            ]
        ],
        [
            "homeTeam" => "Chicago Bulls",
            "awayTeam" => "Dallas Mavericks",
            "score" => [
                "homeTeamPoints" => "110",
                "awayTeamPoints" => "106"
            ]
        ]
    ];

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- FAVICON -->
        <link rel="shortcut icon" href="img/basket-logo.png" type="image/x-icon">
        <!-- FONT GOOGLE -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@400;700&display=swap" rel="stylesheet">
        <!-- STYLE CSS -->
        <link rel="stylesheet" href="css/style.css">
        <!-- TITLE -->
        <title>Snack 1</title>
    </head>

    <body>
        <h1>Risultati Basket Live</h1>
        <ul>
            <?php 
                for ($i = 0; $i < count($basketballMatches); $i++) {
                    $match = $basketballMatches[$i];
                    $score = $match["score"];
            ?>

            <li>
                <?php echo $match["homeTeam"] . " - " . $match["awayTeam"] . " | " . $score["homeTeamPoints"] . " - " . $score["awayTeamPoints"]; ?>
            </li>

            <?php
                } 
            ?>
            
        </ul>
    </body>
</html>