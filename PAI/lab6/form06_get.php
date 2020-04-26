<?php
session_start(); 
$link = mysqli_connect("localhost", "scott", "tiger", "instytut");
if (!$link) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

if(isSet($_SESSION['success'])){
    if($_SESSION['success']==1){
        printf("Dodano pracownika");
        $_SESSION['success']=0;
    }
}

print <<<KONIEC
 <html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
 </head>
 <body>
 <a href="form06_post.php">Lista pracowników</a><br>
 </form>
KONIEC;
$sql = "SELECT * FROM pracownicy";
$result = $link->query($sql);
foreach ($result as $v) {
    echo $v["ID_PRAC"] . " " . $v["NAZWISKO"] . "<br/>";
}
$result->free();
$link->close();
