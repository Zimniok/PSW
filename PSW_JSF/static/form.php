<?php

include($_SERVER['DOCUMENT_ROOT'] . '/psw/View.php');

use View as View;

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

    <link rel="stylesheet" href="styles/form.css">
</head>

<body>
<?php $view->render(); ?>

    <section>
        <h1>Ankieta herbaciana</h1>

        <details>
            <summary>Inforacje</summary>
            Informacje z tej ankiety są wykorzystywane tylko w celach statystycznych.
        </details>

        <br>

        <form id="form">

            <p><label>Imię:&emsp;
               <input name = "name" type = "text" size = "25"
                  maxlength = "30">
         </label></p>

            <p><label>Nazwisko:&emsp;
               <input name = "surname" type = "text" size = "25" id="surname"
                  maxlength = "30" required>
         </label></p>

            <p><label>Zainteresowania:&emsp;
               <input name = "intrests" type = "text" size = "25"
                  maxlength = "50">
         </label></p>

            <p><label>Disabled:&emsp;
                <input name = "disabled" type = "text" size = "25"
                   maxlength = "50" disabled>
          </label></p>

            <p>
                <label>Ulubiony rodzaj herbaty:&emsp;
            <select name="ulubiona_herbata">
              <optgroup label="basic">
                <option value="czarna">Czarna</option>
                <option value="zielona">Zielona</option>
              </optgroup>
              <optgroup label="mniej popularne">
                <option value="biala">Biała</option>
                <option value="zolta">Żółta</option>
                <option value="pu-erh">Pu-erh</option>
                <option value="ulong">Ulong</option>
              </optgroup>
            </select>
          </label>
            </p>

            <fieldset style="display:inline-block;">
                <legend>Ulubiony napar:</legend>
                <label>&ensp;Ziołowy <input type="radio" name="ulubiony_napar" value="ziolowy"></label>
                <label>&ensp;Owocowy <input type="radio" name="ulubiony_napar" value="owocowy"></label>
                <label>&ensp;Yerba Mate <input type="radio" name="ulubiony_napar" value="yerba"></label>
            </fieldset>

            <br>

            <fieldset style="display:inline-block;">
                <legend>Najlepszy czas na herbatę:</legend>
                <label>&ensp;Poranek <input type="checkbox" name="poranek" value="poranek"></label>
                <label>&ensp;Południe <input type="checkbox" name="poludnie" value="poludnie"></label>
                <label>&ensp;Wieczór <input type="checkbox" name="poranek" value="poranek"></label>
                <label>&ensp;Noc <input type="checkbox" name="noc" value="noc"></label>
            </fieldset>

            <p><label>Dodatkowy komentarz:
          <br><textarea name="komentarz" rows="8" cols="80" maxlength="200"></textarea>
        </label></p>

            <p>
                <input type="submit" value="Wyślij" class="guzik" id="guzik">
                <input type="reset" value="Wyczyść" class="guzik">
            </p>
        </form>

        <p><a href="mailto:abc@example.com">Kontakt mailowy</a></p>

        <footer>
            <p>© 2021 Świat herbaty</p>
        </footer>
    </section>
    <script src="js/forms.js"></script>
</body>

</html>