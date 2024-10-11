<?php

    $nameUser = "";
    $pass = "";
    $checkOption = false;
    $error = "";
    $continue = false;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST)) {
            $error="";
            $nameUser = $_POST["nameuser"];
            $pass = $_POST["password"];
            $checkOption = (isset($_POST["terms"]))?true:false;
            if (!empty($nameUser)) {
                $error=+"Introduce the user name.";
            }
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
    <link rel="stylesheet" href="css/loginStyle.css">
    <title>PHP_Proyect_IVÁN</title>
</head>
<body>
    <div id="login">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <table>
                <h1>Login</h1>
                <tr>
                    <td>
                        <label>Username:</label>
                    </td>
                    <td>
                        <input  type="text" name="nameuser" placeholder="Introduce your nickname or your Email" value="<?php echo $nameUser; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Password:</label>
                    </td>
                    <td>
                        <input type="password" name="password" placeholder="Introduce your password" value="<?php echo $pass; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Repit Password:</label>
                    </td>
                    <td>
                        <input type="password" placeholder="Repit your password">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Accept terms:</label>
                    </td>
                    <td>
                        <input type="checkbox" name="terms" id="terms"> Estoy de acuerto con los terminos de uso.
                    </td>
                </tr>
            </table>
            <input type="submit" id="button" value="Login">
            <span>
                <?php 
                    if (!$continue && !empty($error)) {
                        echo "<p>* ".$error." *</p>";
                    }
                ?>
            </span>
        </form>
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