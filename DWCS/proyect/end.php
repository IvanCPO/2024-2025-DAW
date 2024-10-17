<?php
    setcookie("name","",time()-60, "/");
    setcookie("adults","",time()-60, "/");
    setcookie("children","",time()-60, "/");
    setcookie("babys","",time()-60, "/");
    setcookie("day","",time()-60, "/");
    setcookie("hour","",time()-60, "/");
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
    <link rel="stylesheet" href="css/reserveStyle.css">
    <title>PHP_Proyect_IVÁN</title>
</head>
<body>
    
    <div id="login">
        <table>
            <h1>RESERVE</h1>
            <tr>
                <td>
                    <label>Username:</label>
                </td>
                <td>
                    <label>
                        <?php
                        echo $_COOKIE["name"];
                        ?>
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Tickets:</label>
                </td>
                <td>
                    <label>
                        <?php
                        echo "(".$_COOKIE["adults"]." - ".(isset($_COOKIE["children"])?$_COOKIE["children"]:"0")." - ".(isset($_COOKIE["babys"])?$_COOKIE["babys"]:"0").")";
                        ?>
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Reserve:</label>
                </td>
                <td>
                    <label>
                        <?php
                            echo "<b>".$_COOKIE["day"]."</b><br>Hour: ".htmlspecialchars($_COOKIE["hour"]);
                        ?>
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Price:</label>
                </td>
                <td>
                    <label>
                        <?php
                            echo ($_COOKIE["adults"]*20+(isset($_COOKIE["children"])?$_COOKIE["children"]:0)*10).",00 €";
                        ?>
                    </label>
                </td>
            </tr>
        </table>
        <div id="end">
            <p>Gracias por realizar su reserva con nosotros, una pagina de gran renombre y muchos contactos con el pentagono</p>
            <h3><a href="fragments/logout.php">RETURN HOME</a></h3>
        </div>
    </div>
</body>
</html>