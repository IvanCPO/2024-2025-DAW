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
    <link rel="stylesheet" href="css/ticketStyle.css">
    <title>The mussel Description</title>
</head>
<body>
    <header>
        <h1>THE MUSSEL ROUTE description</h1>
        <img src="img/catamaran.png" alt="catamaran" id="catamaran">
    </header>

    <div id="body_content">
        <?php 
            include 'fragments/menu.php';
        ?>
        <div id="contents">
            <h1>TAKE YOUR TICKETS</h1>
            <form method="get">
                <table id="info_user">
                    <tr>
                        <td>
                            <label >Session:</label>
                        </td>
                        <td>
                            <input type="text" name="username" id="username" value ="<?php echo $_SESSION["nameuser"]; ?>" readonly>
                        </td>
                        <td rowspan="3">
                            <label>DAY to the board trip:</label> <br>
                            <input type="date" name="day" id="day">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label >Number Adults (20€):</label>
                        </td>
                        <td>
                            <input type="number" name="adult" id="adult" min="1">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label >Number Children (10€):</label>
                        </td>
                        <td>
                            <input type="number" name="child" id="child" min="0">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label >Number Babys (-€):</label>
                        </td>
                        <td>
                            <input type="number" name="baby" id="baby" min="0">
                        </td>
                        <td rowspan="3">
                            <label>HOUR of the trip:</label> <br>
                            <select name="hour" id="hour">
                                <option value="a">A</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label >Total Price:</label>
                        </td>
                        <td>
                            <input type="text" name="price" id="price" readonly value="0,00€">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label >Telephone/Contact:</label>
                        </td>
                        <td>
                            <input type="text" name="phone" id="phone" placeholder="666-66-66-66">
                        </td>
                    </tr>
                </table>
                <p>Toma la responsabilidad como comprador de acudir al barco a la hora propuesta e informará en caso de no poder llegar con media hora de antelación.</p>
                <input type="button" value="BUY" id="button">
            </form>
        </div>
    </div>
    
    <footer>
        <div id="contact">
            <h2>Contact:</h2>
            <ul>
                <li>Email: contact@musselroute.com</li>
                <li>Telephone: +34 666 77 88 99</li>
            </ul>
        </div>
        <div id="legacy">
            <p>Avisos legales</p>
        </div>
    </footer>
</body>
</html>