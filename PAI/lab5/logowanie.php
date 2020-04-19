<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
	<title>PHP</title>
	<meta charset='UTF-8' />
</head>

<body>
	<?php
	require_once('funkcje.php');
	if(isSet($_POST['zaloguj'])){
		// echo "Przesłany login: ".$_POST['login'];
		// echo "<br>";
		// echo "Przesłane hasło: ".$_POST['haslo'];

		if($_POST['login']==$osoba1->login && $_POST['haslo']==$osoba1->haslo){
			$_SESSION['zalogowanyImie']=$osoba1->imieNazwisko;
			$_SESSION['zalogowany']=1;
			header("Location: user.php");
        }
        else{
            header("Location: index.php");
        }

		if($_POST['login']==$osoba2->login && $_POST['haslo']==$osoba2->haslo){
			$_SESSION['zalogowanyImie']=$osoba2->imieNazwisko;
			$_SESSION['zalogowany']=1;
			header("Location: user.php");
        }
        else{
            header("Location: index.php");
        }
	}
    ?>
</body>

</html>