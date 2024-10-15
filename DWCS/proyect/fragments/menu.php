
<div id="menu">
    <ul>
        <li><a href="index.php">HOME</a></li>
        <li><a href="description.php">DESCRIPTION</a></li>
        <li><a href="
        <?php
            echo (isset($_SESSION["nameuser"]))? "ticket.php" : "login.php";
        ?>">TAKE YOUR TICKET</a></li>
        <?php 
        if (isset($_SESSION["nameuser"])) {
            ?>
        <li><a href="fragments/logout.php" id="exit">
            <img src="img/logout.png" alt="icon of logout" width="50px">LOGOUT
        </a></li>
            <?php
        }
        
        ?>
    </ul>
</div>