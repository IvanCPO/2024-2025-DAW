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
    <link rel="stylesheet" href="css/descrStyle.css">
    <title>PHP_Proyect_IVÁN</title>
</head>
<body>
    <header>
        <h1>THE MUSSEL ROUTE</h1>
        <img src="img/catamaran.png" alt="catamaran" id="catamaran">
    </header>

    <div id="body_content">
        <?php 
            include 'fragments/menu.php';
        ?>
        <div id="contents">
            <h2>Description</h2>
            <p>Buenas tardes caballeros</p>
            
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