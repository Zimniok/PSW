<?php

include($_SERVER['DOCUMENT_ROOT'] . '/psw/View.php');

use View as View;

$view = new \View\View($_COOKIE);

?>
<!DOCTYPE html>

<html lang="pl">

<head>
    <meta charset="utf-8">
    <title>Formularz dodatkowy</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <meta name="keywords" content="herbata, formularz dodatkowy">
    <meta name="description" content="Na tej stronie znajduje się
      formularz dodatkowy.">
</head>

<body>
    <?php $view->render(); ?>

    <section>
        <h1>Formularz dodatkowy</h1>
        <details>
            <summary>Inforacje</summary>
            Informacje z tej ankiety są wykorzystywane tylko w celach statystycznych.
        </details>
        <p><label>Wyberz kolor strony:&emsp;
                <input id="backgroundColor" type="color">
            </label></p>
        <p><label>Ulubiony kolor fontu:&emsp;
                <input id="fontColor" type="color">
            </label></p>
        <p><label>Rodzaj czionki:&emsp;
                <select name="" id="fontType">
                    <option value="verdana">Verdana</option>
                    <option value="Courier New">Courier New</option>
                </select>
            </label></p>
        <form>
            <p><label>Ulubiony kolor naparu:&emsp;
                    <input name="favInfusionColor" type="color">
                </label></p>

            <p><label>Miesiąc początku zainteresowania herbatą:&emsp;
                    <input name="teaIntrestMonth" type="month">
                </label></p>

            <p><label>Poziom zainteresowania herbatą:&emsp;
                    <input name="reaIntrestLevel" type="range" min="0" max="100" step="10">
                </label></p>

            <p><label>Szukana fraza:&emsp;
                    <input name="searchPhrase" type="search" placeholder="Wprowadź szukaną frazę">
                </label></p>

            <p><label>Link do ulubionej herbaty:&emsp;
                    <input name="favTeaLink" type="url" placeholder="https://example.com">
                </label></p>

            <p><label>Pełna data urodzin:&emsp;
                    <input name="birthDay" type="date" placeholder="https://example.com">
                </label></p>

            <p>
                <input type="submit" value="Wyślij">
                <input type="reset" value="Wyczyść">
            </p>

        </form>

        <footer>
            <p>© 2021 Świat herbaty</p>
        </footer>
    </section>
    <script src="js/forms2.js"></script>
</body>

</html>