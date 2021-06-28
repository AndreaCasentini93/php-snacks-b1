<?php 

    /*
    Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
    */

    $string = "";

    if (!empty($_GET["name"])
    && !empty($_GET["mail"])
    && !empty($_GET["age"])
    && strlen($_GET["name"]) > 3
    && strpos($_GET["mail"], "@") !== false
    && strpos($_GET["mail"], ".") !== false
    && is_numeric($_GET["age"]) === true) {
        $string = "Accesso riuscito";
    } else {
        $string = "Accesso negato";
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- FAVICON -->
        <link rel="shortcut icon" href="img/email-logo.png" type="image/x-icon">
        <!-- FONT GOOGLE -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Zilla+Slab:wght@400;700&display=swap" rel="stylesheet">
        <!-- STYLE CSS -->
        <link rel="stylesheet" href="css/style.css">
        <!-- TITLE -->
        <title>Snack 2</title>
    </head>

    <body>
        <h1>
            <?php echo $string; ?>
        </h1>
    </body>
</html>