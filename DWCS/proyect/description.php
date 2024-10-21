<?php

    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
        </style>
    <link rel="stylesheet" href="css/mainStyle.css">
    <link rel="stylesheet" href="css/descripStyle.css">
    <title>PHP_Proyect_IVÁN</title>
</head>
<body>
    <header>
        <h1>THE MUSSEL ROUTE <br>DESCRIPTION</h1>
        <img src="img/catamaran.png" alt="catamaran" id="catamaran">
    </header>

    <div id="body_content">
        <?php 
            include 'fragments/menu.php';
        ?>
        <div id="contents">
            <h2>Description</h2>
            <p>We have multiple boats, which belong to different companies. We all provide the same service and follow the same route at the same price. By working together, all vessels prepare trips so that a catamaran can depart <b>every half hour</b> within the agreed schedule, always trying to be <b>as punctual as possible</b>. This also helps when organizing the boat's capacity, as we share the customers and distribute them so that all boats leave with the same number of people.</p>

            <p>All these boats depart <b>from the port of O Grove</b>, and the boarding gates are numbered <b>from 1 to 4</b>.</p>

            <h2>Boards:</h2>
            <?php 
                include 'fragments/boards.php';
            ?>
        </div>
    </div>
        <?php 
            include 'fragments/footer.php';
        ?>
</body>
</html>