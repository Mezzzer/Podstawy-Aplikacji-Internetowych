<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <title>PHP</title>
    <meta charset='UTF-8' />
</head>

<body>
    <?php
    require_once("funkcje.php");
    if(isSet($_GET['utworzCookie'])){
        setcookie("ciasteczko", "wartość", time() + $_GET['czas'], "/");
        echo 'Dodano cookie';
    }
    ?>
    <a href="index.php">Powrót</a>
</body>

</html>