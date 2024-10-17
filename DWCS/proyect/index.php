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
        <h1>THE MUSSEL ROUTE</h1>
        <img src="img/catamaran.png" alt="catamaran" id="catamaran">
    </header>

    <div id="body_content">
        <?php 
            include 'fragments/menu.php';
        ?>
        <div id="contents">
            <h2>Que es la ruta del mejillón</h2>
            <p>La <b>Ruta del Mejillón</b> es un viaje/travesía por la famosa Ría da Arousa, rodeando O Grove en el cual se para en las <b>bateas</b> para explicar todo el procedimiento de la captura y la cultivación del mejillón, la ostra y la vieira.</p>
            <img src="img/map.png" alt="MapTravel" >
            <p>El viaje tiene <b>1 hora de duración</b> por la Ría de Arousa hasta volver al puerto de O Grove nuevamente. Todo el recorrido va con una degustacion de <b>mejillones</b> con <b>agua, refresco o vino</b>.</p>

            <p>Los horarios van variando dependiendo de la estación del año:</p>
            <p>-> En <b>verano</b> suelen salir desde las <b>11:00 hasta las 13:30</b> y vuelven de <b>16:30 hasta las 19:30</b> todo <b>cada media hora</b>.</p>
            <p>-> El resto de las estaciones suelen abrir cuando hay una festividad como Semana Santa, la fiesta del Marisco, Navidades... y suele ser el mismo horario pero saliendo cada <b>una hora</b>.</p>
            <h2>Precios</h2>
            <p>Los precios varian de la edad que el cliente tenga:</p>
            <table>
                <tr>
                    <td>
                        <h2>Adulto [edad>12]</h2>
                    </td>
                    <td>
                        <h2>20,00€ por persona</h2>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h2>Menor de edad [12>edad>3]</h2>
                    </td>
                    <td>
                        <h2>10,00€ por persona</h2>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h2>Bebe [3>edad]</h2>
                    </td>
                    <td>
                        <h2>Sin Cargo</h2>
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