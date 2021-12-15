<?php

include($_SERVER['DOCUMENT_ROOT'] . '/psw/View.php');

use View as View;

$view = new \View\View($_COOKIE);

?>
<!DOCTYPE html>

<html lang="pl">
   <head>
      <meta charset = "utf-8">
      <title>Formularz osobowy</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

      <meta name = "keywords" content = "herbata, formularz osobowy">
      <meta name = "description" content = "Na tej stronie znajduje się
      formularz osobowy.">
   </head>

   <body>
     <section>
    <?php $view->render(); ?>

       <h1>Formularz osobowy</h1>
       <aside>
         <p>Administratorem danych osobowy jest firma Świat herbaty</p>
       </aside>

       <form>

          <p><label>Imie:&emsp;
                <input name = "name" type = "text" size = "25"
                   maxlength = "30" autofocus autocomplete="given-name">
          </label></p>

          <p><label>Nazwisko:&emsp;
                <input name = "surname" type = "text" size = "25"
                   maxlength = "30" required autocomplete="family-name">
          </label></p>

          <p><label>Miesiąc urodzin:&emsp;
                <input list="birthmonth" id="birthmonthInput" name="birthmonthInput" autocomplete="bday-month"/>
                <datalist id = "birthmonth">
                  <option value="Styczeń">
                  <option value="Luty">
                  <option value="Marzec">
                  <option value="Kwiecień">
                  <option value="Maj">
                  <option value="Czerwiec">
                  <option value="Lipiec">
                  <option value="Sierpień">
                  <option value="Wrzesień">
                  <option value="Październik">
                  <option value="Listopad">
                  <option value="Grudzień">
                </datalist>
          </label></p>

          <p><label>Adres mailowy:&emsp;
                <input name = "email" type = "email" size = "25"
                  required autocomplete="email">
          </label>Format danych: example@mail.com</p>

          <p><label>Telefon:&emsp;
                <input name = "phonenr" type = "tel" size = "25"
                   pattern="\+[1-9]{1}[0-9]{1,3}[0-9]{9}" autocomplete="tel">
          </label>Format danych: +00000000000</p>

          <p>
             <input type = "submit" value = "Wyślij">
             <input type = "reset" value = "Wyczyść">
          </p>

        </form>

        <footer>
          <p>© 2021 Świat herbaty</p>
        </footer>
      </section>
   </body>
</html>
