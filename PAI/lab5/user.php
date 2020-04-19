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

    if(isSet($_SESSION['zalogowany'])){
        echo "Zalogowano: ";
        echo $_SESSION['zalogowanyImie'];
    }
    if(isSet($_POST['wyslij'])){
        $currentDir = getcwd();
        $fileName = $_FILES['obrazek']['name'];
        $fileSize = $_FILES['obrazek']['size'];
        $fileTmpName = $_FILES['obrazek']['tmp_name'];
        $fileType = $_FILES['obrazek']['type'];
        if($fileName != "" and
                ($fileType == 'image/png' or $fileType == 'image/jpeg'
                or $fileType == 'image/JPEG' or $fileType == 'image/PNG'))
        {
            $uploadPath = $currentDir."\\".$fileName;
            if(move_uploaded_file($fileTmpName, $currentDir."\\".$fileName))
            echo "Zdjecie zostalo zaladowana na serwer";
        }
    }

    ?>
    <form action="index.php" method = "post">
		<input type="submit" name='wyloguj' value="Wyloguj">
    </form>
    
    <form action='user.php' method='POST' enctype='multipart/form-data'>
        <fieldset>
		<legend>Dodawanie obrazka:</legend>
        <input type="file" id="obrazek" name="obrazek"><br>
        <input type="submit" name='wyslij' value="Wyślij">
        </fieldset>
    </form>
    <img src="php.jpeg" alt="Obraz nie zostal jeszcze wczytany">

</body>

</html>