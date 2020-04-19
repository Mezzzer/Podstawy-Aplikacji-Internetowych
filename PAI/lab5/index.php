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
	if (isset($_POST['zaloguj'])) {
		// echo "Przesłany login: ".$_POST['login'];
		// echo "<br>";
		// echo "Przesłane hasło: ".$_POST['haslo'];

		if ($_POST['login'] == $osoba1->login && $_POST['haslo'] == $osoba1->haslo) {
			$_SESSION['zalogowanyImie'] = $osoba1->imieNazwisko;
			$_SESSION['zalogowany'] = 1;
			header("Location: user.php");
		}

		if ($_POST['login'] == $osoba2->login && $_POST['haslo'] == $osoba2->haslo) {
			$_SESSION['zalogowanyImie'] = $osoba2->imieNazwisko;
			$_SESSION['zalogowany'] = 1;
			header("Location: user.php");
		}
	}

	if (isset($_POST['wyloguj'])) {
		$_SESSION['zalogowany'] = 0;
	}
	if (isset($_COOKIE['ciasteczko'])) {
		echo $_COOKIE['ciasteczko'];
	}
	?>
	<h1>Nasz system</h1>
	<form action="logowanie.php" method="post">
	<fieldset>
    	<legend>Logowanie:</legend>
		<label>Login:</label> <input type="text" name="login" /> <br>
		<label>Hasło:</label> <input type="password" name="haslo" /> <br>
		<input type="submit" name='zaloguj' value='Zaloguj'>
	</fieldset>
	</form>

	<form action="cookie.php" method="get">
		<fieldset>
		<legend>Utworzenie cookie:</legend>
		<input type="number" name="czas" /> <br>
		<input type="submit" name='utworzCookie' value='Utwórz cookie'>
		</fieldset>
	</form>
</body>

</html>