<?php

include($_SERVER['DOCUMENT_ROOT'] . '/psw/View.php');

use View as View;

$view = new \View\View($_COOKIE);

?>
<!DOCTYPE html>

<html lang="pl">
  <head>
    <meta charset = "utf-8">
    <title>Lista popularnych sklepów</title>

    <meta name = "keywords" content = "Yerba mate, świat herbaty, sklepy,
    herbata">
    <meta name = "description" content = "Na tej stronie znajduje się lista
    popularnych sklepów">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
      ul {
        list-style-type: square;
      }
      ul ul {
        list-style-type: circle;
      }
    </style>
    <link rel="stylesheet" href="styles/lista_sklepow_lista3.css">
  </head>

  <body>
  <?php $view->render(); ?>

    <section>
      <h1 style="font-style: italic;">Lista popularnych sklepów</h1>
      <p>
        <ul>
          <li>Herbata<ul>
            <li><a href="https://eherbata.pl">Eherbata</a></li>
            <li><a href="https://czasnaherbate.net">Czas na herbatę</a></li>
            <li><a href="https://fiveoclock.eu/">Five o\'clock</a></li>
            <li><a href="https://www.czajnikowy.com.pl">Czajnikowy</a></li>
            <li><a href="https://sklepzherbatami.pl">Sklep z herbatami</a></li>
            <li><a href="https://krainaherbaty.pl">Kraina herbaty</a></li>
          </ul></li>
          <li>Yerba mate<ul>
            <li><a href="https://dobreziele.pl/">Dobre ziele</a></li>
            <li><a href="https://www.yerbamarket.com/">Yerba market</a></li>
            <li><a href="https://www.poyerbani.pl">Poyerbani</a></li>
            <li><a href="https://www.yerbamatestore.pl">Yerba mate store</a></li>
          </ul></li>
        </ul>
      </p>
    </section>
  </body>
</html>
