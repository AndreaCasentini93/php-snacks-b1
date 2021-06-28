<?php 

    /*
    Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
    */

    $randomNumbers = [];
    $n = 0;
    $min = 1;
    $max = 15;

    while ($n < 15) {
        $randomNumber = rand($min, $max);
        if (!in_array($randomNumber, $randomNumbers)) {
            array_push($randomNumbers, $randomNumber);
            $n++;
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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