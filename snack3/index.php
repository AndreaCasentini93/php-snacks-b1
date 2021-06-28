<?php 

    /*
    Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
    */

    $randomNumbers = [];
    $min = 1;
    $max = 15;

    while (count($randomNumbers) < 15) {
        $randomNumber = rand($min, $max);
        if (!in_array($randomNumber, $randomNumbers)) {
            array_push($randomNumbers, $randomNumber);
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- FAVICON -->
        <link rel="shortcut icon" href="img/array-logo.png" type="image/x-icon">
        <!-- FONT GOOGLE -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Akaya+Kanadaka&display=swap" rel="stylesheet">
        <!-- STYLE CSS -->
        <link rel="stylesheet" href="css/style.css">
        <!-- TITLE -->
        <title>Snack 3</title>
    </head>

    <body>
        <h1>Array di numeri casuali da <?php echo $min . " a " . $max; ?>
        </h1>
        <ul>
            <?php
                for ($i = 0; $i < count($randomNumbers); $i++) {
                    echo "<li>" . $randomNumbers[$i] . "</li>";
                }
            ?>
        </ul>
    </body>
</html>