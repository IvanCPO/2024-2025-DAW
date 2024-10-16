<?php
    session_start();

    $hours = [
        "10:30",
        "11:00",
        "11:30",
        "12:00",
        "12:30",
        "13:00",
        "13:30",
        "16:30",
        "17:00",
        "17:30",
        "18:00",
        "18:30",
        "19:00",
        "19:30",
    ];

    $error = $adults = $children = $babys = $phone = $day = $hour = "";
    $continue = $terms = false;
    
    if ($_POST!= null) {
        $error = "";
        $adults =$_POST["adult"]; 
        $children =$_POST["child"]; 
        $babys =$_POST["baby"];
        $phone = $_POST['phone'];
        $day = $_POST['day'];
        $hour = $_POST['hour'];
        $terms = isset($_POST['terms']);
        $continue = true;

        if (empty($adults)) {
            $error = $error."It's required to have a adult for buy the tickets.<br>";
            $continue = false;
        }

        if (empty($day)) {
            $error = $error."It's required to select a day to make a trip for buy the tickets.<br>";
            $continue = false;
        }

        if (!empty($phone) && strlen($phone)!=9) {
            $error = $error."If you want to enter the number you need to enter 9 digits, which are what make up a telephone number.<br>";
            $continue = false;
        }

        if ($hour=="null") {
            $error = $error."It's required to select a hour to make a trip for buy the tickets.<br>";
            $continue = false;
        }
            
        if (!$terms) {
            $error = $error."It's required to accept terms for buy the tickets.<br>";
            $continue = false;
        }
        if ($continue) {
            setcookie("name", $_SESSION["nameuser"], time() + (86400 * 30), "/");
            setcookie("adults", $adults, time() + (86400 * 30), "/");
            setcookie("children", $children, time() + (86400 * 30), "/");
            setcookie("babys", $babys, time() + (86400 * 30), "/");
            setcookie("day", $day, time() + (86400 * 30), "/");
            setcookie("hour", $hour, time() + (86400 * 30), "/");
        }
    }
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
    <link rel="stylesheet" href="css/ticketsStyle.css">
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
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                <table id="info_user">
                    <tr>
                        <td>
                            <label >Session:</label>
                        </td>
                        <td>
                            <input type="text" name="username" id="username" value ="<?php echo $_SESSION["nameuser"]; ?>" readonly>
                        </td>
                        <td rowspan="3">
                            <label>* Day to the board trip:</label> <br>
                            <input type="date" name="day" id="day" value ="<?php echo $day; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label >* Number Adults (20€):</label>
                        </td>
                        <td>
                            <input type="number" name="adult" id="adult" min="1" value ="<?php echo $adults; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label >Number Children (10€):</label>
                        </td>
                        <td>
                            <input type="number" name="child" id="child" min="0" value ="<?php echo $children; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label >Number Babys (-€):</label>
                        </td>
                        <td>
                            <input type="number" name="baby" id="baby" min="0" value ="<?php echo $babys; ?>">
                        </td>
                        <td rowspan="3">
                            <label>* HOUR of the trip:</label> <br>
                            <select name="hour" id="hour">
                                <option value="null">Select HOUR</option>
                                <?php 
                                foreach ($hours as $time) {
                                    echo "<option value=\"".$time."\" ".(($hour==$time)?"selected":"").">".$time."</option>";
                                }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label >Telephone/Contact:</label>
                        </td>
                        <td>
                            <input type="text" name="phone" id="phone" placeholder="666-66-66-66" value ="<?php echo $phone; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label >* Accept terms:</label>
                        </td>
                        <td>
                            <input type="checkbox" name="terms" id="terms" <?php if($terms){ echo "checked"; } ?>> Accept the terms.
                        </td>
                    </tr>
                </table>

                <span class="error">
                    <?php 
                        if (!$continue && !empty($error)) {
                            echo "<p>* <br>".$error." *</p>";
                        }
                    ?>
                </span>

                <p>Toma la responsabilidad como comprador de acudir al barco a la hora propuesta e informará en caso de no poder llegar con media hora de antelación.</p>

                <input type="submit" value="BUY" id="button">
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