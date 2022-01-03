<?php
const REGEX = '/[0-9]{2}-[0-9]{3}/';

$fieldNames = array('name', 'surname', 'phone', 'city', 'zip', 'street', 'number', 'building', 'tea');
$messages = [];
$temp;
settype($temp, 'integer');
$temp = 5;
// $int = 5;
if ($_POST) {
	foreach ($fieldNames as $key => $name) {
		if ($name == 'zip') {
			if (preg_match(REGEX, $_POST[$name])) {
				$_POST[$name] = preg_replace(REGEX, 'zip = ' . $_POST[$name], $_POST[$name]);
			} else {
				$_POST[$name] = 'error';
			}
		}
		if ($name == 'phone') {
			$_POST[$name] = intval($_POST[$name]);
		}
		$messages[$name] = $_POST[$name];
	}
	$count = count($messages);
	for ($i = 0; $i < $count; $i++) {
		echo key($messages) . ":\t " . $messages[$fieldNames[$i]] . "<br>";
		next($messages);
		if ($i == $count - 2) {
			reset($messages);
		}
	}
	echo '<pre>';
	var_dump($_SERVER);
	echo '</pre>';
	die();
}
?>

<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<form class="needs-validation" method="POST">
	<h4>Dane użytkownika</h4>
	<div class="form-row">
		<div class="col-md-4 mb-3">
			<label for="validationTooltip01">Imię</label>
			<input type="text" class="form-control" name="name" id="validationTooltip01" placeholder="Imię">
		</div>
		<div class="col-md-4 mb-3">
			<label for="validationTooltip02">Nazwisko</label>
			<input type="text" class="form-control" name="surname" id="validationTooltip02" placeholder="Nazwisko">
		</div>
		<div class="col-md-4 mb-3">
			<label for="validationTooltip02">Numer telefonu</label>
			<input type="number" class="form-control" name="phone" id="validationTooltip02" placeholder="Telefon">
		</div>
	</div>
	<div class="form-row">
		<div class="col-md-9 mb-6">
			<label for="validationTooltip04">Miasto</label>
			<input type="text" class="form-control" name="city" id="validationTooltip04" placeholder="Miasto" required>
		</div>
		<div class="col-md-3 mb-3">
			<label for="validationTooltip05">Kod pocztowy</label>
			<input type="text" class="form-control" name="zip" id="validationTooltip05" placeholder="Zip" required>
		</div>
	</div>
	<div class="form-row">
		<div class="col-md-6 mb-6">
			<label for="validationTooltip03">Ulica</label>
			<input type="text" class="form-control" name="street" id="validationTooltip03" placeholder="Ulica" required>
			<div class="invalid-tooltip">
				Please provide a valid city.
			</div>
		</div>
		<div class="col-md-3 mb-3">
			<label for="validationTooltip03">Numer budynku</label>
			<input type="text" class="form-control" name="building" id="validationTooltip03" placeholder="Ulica" required>
			<div class="invalid-tooltip">
				Please provide a valid city.
			</div>
		</div>
		<div class="col-md-3 mb-3">
			<label for="validationTooltip04">Numer mieszkania</label>
			<input type="text" class="form-control" name="number" id="validationTooltip04" placeholder="Miasto" required>
			<div class="invalid-tooltip">
				Please provide a valid state.
			</div>
		</div>
	</div>
	<div class="form-row">
		<div class="col-md-6 md-3">
			<label for="selectWeight">Ulubiona herbata</label>
			<select class="form-control" name="tea" id="selectWeight">
				<option selected>Wybierz herbatę</option>
				<option value="roibos">Roibos</option>
				<option value="black">Czarna</option>
				<option value="green">Zielona</option>
			</select>
		</div>
	</div>
	<fieldset class="form-row">
		<legend class="col-form-label">Ulubiony napar:</legend>
		<label>&ensp;Ziołowy <input type="radio" name="ulubiony_napar" value="ziolowy"></label>
		<label>&ensp;Owocowy <input type="radio" name="ulubiony_napar" value="owocowy"></label>
		<label>&ensp;Yerba Mate <input type="radio" name="ulubiony_napar" value="yerba"></label>
	</fieldset>
	<fieldset class="form-row">
		<legend class="col-form-label">Najlepszy czas na herbatę:</legend>
		<label>&ensp;Poranek <input type="checkbox" name="poranek" value="poranek"></label>
		<label>&ensp;Południe <input type="checkbox" name="poludnie" value="poludnie"></label>
		<label>&ensp;Wieczór <input type="checkbox" name="poranek" value="poranek"></label>
		<label>&ensp;Noc <input type="checkbox" name="noc" value="noc"></label>
	</fieldset>
	<input type="submit" class="btn btn-primary" value="Wyślij">
</form>