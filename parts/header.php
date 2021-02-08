<?php
$json = file_get_contents("../data/user.json");
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Jane Doe</title>

        <link rel="stylesheet" href="../public/style.css">
    </head>
    <body>
        <header>
            <h1>Jane Doe</h1>
            <?php
            getPart('menu');


            ?>
        </header>