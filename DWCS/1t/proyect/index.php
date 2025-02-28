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

    <title>PHP_Proyect_IVÁN</title>
</head>
<body>
    <header>
        <h1>THE MUSSEL ROUTE <br>HOME</h1>
        <img src="img/catamaran.png" alt="catamaran" id="catamaran">
    </header>

    <div id="body_content">
        <?php 
            include 'fragments/menu.php';
        ?>
        <div id="contents">
            <h2>What is the Mussel Route</h2>
            <p>The <b>Mussel Route</b> is a journey/trip through the famous Ría da Arousa, surrounding O Grove, where we stop at the <b>bateas</b> (mussel farms) to explain the entire process of harvesting and cultivating mussels, oysters, and scallops.</p>

            <img id="map" src="img/map.png" alt="MapTravel">

            <p>The trip lasts <b>1 hour</b> through the Ría de Arousa before returning to the port of O Grove. Throughout the journey, there is a tasting of <b>mussels</b> accompanied by <b>water, soda, or wine</b>.</p>

            <p>The schedules vary depending on the time of year:</p>
            <p>-> In <b>summer</b>, departures are usually from <b>11:00 to 13:30</b> and return from <b>16:30 to 19:30</b>, with trips <b>every half hour</b>.</p>
            <p>-> During the rest of the year, they usually open when there is a holiday, such as Easter, the Seafood Festival, Christmas... and it is typically the same schedule, but departing every <b>hour</b>.</p>

            <h2>Prices</h2>
            <p>Prices vary depending on the age of the customer:</p>
            <table>
                <tr>
                    <td>
                        <h2>Adult [age>12]</h2>
                    </td>
                    <td>
                        <h2>€20.00 per person</h2>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h2>Child [12>age>3]</h2>
                    </td>
                    <td>
                        <h2>€10.00 per person</h2>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h2>Baby [age<3]</h2>
                    </td>
                    <td>
                        <h2>Free of charge</h2>
                    </td>
                </tr>
            </table>
        </div>
    </div>
        <?php 
            include 'fragments/footer.php';
        ?>
    
</body>
</html>