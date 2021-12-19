<?php

include($_SERVER['DOCUMENT_ROOT'] . '/psw/View.php');

use DBManager\DBManager;
use View as View;

include($_SERVER['DOCUMENT_ROOT'] . '/psw/DB/DBManager.php');
$DBManager = new DBManager();

if ($_POST) {
	$login = $_POST['login'];
	$password = $_POST['password'];
	if ($DBManager->login($login, $password)) {
		$data = $DBManager->getData($login);
		session_start();
		foreach ($data as $key => $value) {
			$_SESSION[$key] = $value;
		}
	}
}
$DBManager->getData();


$view = new \View\View($_COOKIE);


?>
<!DOCTYPE html>

<html lang="pl">

<head>
	<meta charset="utf-8">
	<title>Formularz</title>

	<meta name="keywords" content="herbata, formularz, ankieta">
	<meta name="description" content="Na tej stronie znajdują się
      formularz.">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
	<?php $view->render(); ?>

	<form class="needs-validation" method="POST">
		<div class="form-row">
			<div class="col-md-4 mb-3">
				<label for="validationTooltip01">Login</label>
				<input type="text" class="form-control" name="login" id="validationTooltip01" placeholder="Login" required>
			</div>
		</div>
		<div class="form-row">
			<div class="col-md-4 mb-3">
				<label for="validationTooltip02">Hasło</label>
				<input type="password" class="form-control" name="password" id="validationTooltip02" placeholder="Hasło" required>
			</div>
		</div>

		<input type="submit" class="btn btn-primary" value="Zaloguj">
	</form>
</body>

</html>