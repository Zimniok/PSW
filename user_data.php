<?php

include($_SERVER['DOCUMENT_ROOT'] . '/psw/View.php');

use DBManager\DBManager;
use View as View;

include($_SERVER['DOCUMENT_ROOT'] . '/psw/DB/DBManager.php');
$DBManager = new DBManager();


$view = new \View\View($_COOKIE);
if ($_POST) {
	extract($_POST);
	$message = $DBManager->updateData($_SESSION['login'], $password, $name, $surname);
	$data = $DBManager->getData($_SESSION['login']);
	foreach ($data as $key => $value) {
		$_SESSION[$key] = $value;
	}
}
extract($_SESSION);

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
	<span><?= isset($message) ? $message : '' ?></span>
	<form class="needs-validation" method="POST">
		<div class="form-row">
			<div class="col-md-4 mb-3">
				<label for="validationTooltip01">Login</label>
				<input type="text" class="form-control" name="login" id="validationTooltip01" disabled placeholder="Login" value="<?= $login ?>" required>
			</div>
		</div>
		<div class="form-row">
			<div class="col-md-4 mb-3">
				<label for="validationTooltip02">Hasło</label>
				<input type="password" class="form-control" name="password" id="validationTooltip02" placeholder="Hasło" value="<?= $password ?>" required>
			</div>
		</div>
		<div class="form-row">
			<div class="col-md-4 mb-3">
				<label for="validationTooltip02">E-mail</label>
				<input type="text" class="form-control" name="email" disabled id="validationTooltip02" placeholder="Email" required value="<?= $email ?>">
			</div>
		</div>
		<div class="form-row">
			<div class="col-md-4 mb-3">
				<label for="validationTooltip02">Imię</label>
				<input type="text" class="form-control" name="name" id="validationTooltip02" placeholder="Hasło" required value="<?= $name ?>">
			</div>
		</div>
		<div class="form-row">
			<div class="col-md-4 mb-3">
				<label for="validationTooltip02">Nazwisko</label>
				<input type="text" class="form-control" name="surname" id="validationTooltip02" placeholder="Hasło" required value="<?= $surname ?>">
			</div>
		</div>

		<input type="submit" class="btn btn-primary" value="Aktualizuj dane">
	</form>
</body>

</html>