<?php

include($_SERVER['DOCUMENT_ROOT'] . '/psw/View.php');

use View as View;

if ($_POST) {
	foreach ($_POST as $key => $value) {
		setcookie($key, $value, time() + 3600, '/');
	}
}
if ($_GET) {
	setcookie('font-type', '', 0, '/');
	setcookie('font-color', '', 0, '/');
	setcookie('page', '', 0, '/');
}

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
		<h4>Dane użytkownika</h4>
		<div class="form-row">
			<div class="col-md-4 mb-3">
				<label for="validationTooltip01">Wyberz kolor strony</label>
				<input type="color" class="form-control" name="page" id="validationTooltip01" placeholder="Imię">
			</div>
		</div>
		<div class="form-row">
			<div class="col-md-4 mb-3">
				<label for="validationTooltip02">Wybierz kolor fontu</label>
				<input type="color" class="form-control" name="font-color" id="validationTooltip02" placeholder="Nazwisko">
			</div>
		</div>


		<div class="form-row">
			<div class="col-md-6 md-3">
				<label for="selectWeight">Wybierz rodzaj fontu</label>
				<select class="form-control" name="font-type" id="selectWeight">
					<option value="verdana">Verdana</option>
					<option value="Courier New">Courier New</option>
				</select>
			</div>
		</div>

		<input type="submit" class="btn btn-primary" value="Wyślij">
	</form>
	<a href="?action=reset"><button class="btn btn-primary">Reset</button></a>
</body>

</html>