<?php
    session_start();
    $nameUser = "";
    $pass = "";
    $checkOption = false;
    $error = "";
    $continue = false;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST)) {
            $error="";
            $continue=true;
            $nameUser = $_POST["nameuser"];
            $pass = $_POST["password"];
            $checkOption = (isset($_POST["terms"]))?true:false;
            if (empty($nameUser)) {
                $error=$error."Introduce the user name.<br>";
                $continue = false;
            }
            if (empty($pass)) {
                $error=$error."Introduce the user's password.<br>";
                $continue = false;
            }
            if ($pass!=$_POST["repit"]) {
                $error=$error."The password is incorrect, repeat the password so that they are identical.<br>";
                $continue = false;
            }
            if (!$checkOption) {
                $error=$error."You need to accept the terms.<br>";
                $continue = false;
            }
            if ($continue) {
                $_SESSION["nameuser"] = $nameUser;
                $_SESSION["password"] = $pass;
                header('Location: index.php');
                exit;
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
                        <input type="password" name="repit" placeholder="Repit your password">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Accept terms:</label>
                    </td>
                    <td>
                        <input type="checkbox" name="terms" id="terms"
                        <?php
                        if($checkOption) echo "checked";
                        ?>
                        > Estoy de acuerto con los terminos de uso.
                    </td>
                </tr>
            </table>
            <input type="submit" id="button" value="Login">
            <span>
                <?php 
                    if (!$continue && !empty($error)) {
                        echo "<p>* <br>".$error." *</p>";
                    }
                ?>
            </span>
        </form>
    </div>

    <?php 
        include 'fragments/footer.php';
    ?>
</body>
</html>