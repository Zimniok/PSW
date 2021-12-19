<?php

use DBManager\DBManager;

include($_SERVER['DOCUMENT_ROOT'] . '/psw/View.php');
include($_SERVER['DOCUMENT_ROOT'] . '/psw/DB/DBManager.php');

$DBManager = new DBManager();
$DBManager->register('user1','password','user1','3','3');

// echo '<pre>';
// var_dump($DBManager->login('user1', 'password'));
// echo '</pre>';

use View as View;

if (isset($_GET['action']) && $_GET['action'] == 'logout') {
    session_start();
    session_destroy();
    session_unset();
    session_write_close();
}

$view = new \View\View($_COOKIE);


?>
<!DOCTYPE html>

<html lang="pl">

<head>
    <meta charset="utf-8">
    <title>Świat herbat</title>

    <meta name="keywords" content="herbata, zielona herbata,
      czarna herbata, biala herbata, rodzaje herbat, informacje">
    <meta name="description" content="Na tej stronie znajdują się
      informacje dotyczące róznych rodzajów herbaty.">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/index.css">
</head>

<body>
    <?php $view->render(); ?>

    <h1 id="tytul">Welcome to Our Website!</h1>


    <span id="greeting"></span>
    <p id="dsc">Ta strona została stworzona aby przybliżyć właściowści i sposoby zaparzania różnych rodzajów <b>herbaty</b>.</p>

    <br>

    <section class="limited_width_section">
        <nav>
            <a href="tables.php"><img src="pliki/zaparzanie.webp" alt="Zaparzanie" height="200" width="300" class="animated_img"></a>
            <ul>
                <li><a href="tables.php">Zaparzanie</a></li>
                <li><a href="form.php">Amkieta herbatowa</a></li>
                <li><a href="form_lista2.php">Formularz osobowy</a></li>
                <li><a href="form_dodatkowy_lista2.php">Formularz dodatkowy</a></li>
                <li><a href="form_php.php">Formularz do PHP</a></li>
                <li>CSS
                    <ul>
                        <li><a href="tables.php">Tabele</a></li>
                        <li><a href="lista_sklepow_lista3.php">Lista sklepów</a></li>
                        <li><a href="akapity_lista3.php">Akapity</a></li>
                        <li><a href="form.php">Formularz</a></li>
                        <li><a href="menu_lista3.php">Menu</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </section>

    <section>
        <h2 id="teat_types_header">Rodzaje herbaty</h2>

        <nav>
            <ul>
                <li><a href="#Herbata_czarna">Herbata czarna</a></li>
                <li><a href="#Herbata_zielona">Herbata zielona</a></li>
                <li><a href="#Herbata_biala">Herbata biała</a></li>
                <li><a href="#Herbata_zolta">Herbata żółta</a></li>
                <li><a href="#Herbata_pu-erh">Herbata pu-erh</a></li>
                <li><a href="#Herbata_ulong">Herbata ulong</a></li>
            </ul>
        </nav>
    </section>

    <section id="Herbata_czarna">
        <h2>Herbata czarna</h2>

        <p>Wykorzystywane procesy: <i>więdnięcie, skręcanie, utleniane i suszenie</i></p>
        <article>
            <h4>Czarną herbatę można podzielić na kategorie:</h4>

            <ol>
                <li>
                    Małe liście pozyskane z górnej części krzewu:
                    <ul>
                        <li>Pekoe</li>
                        <li>Orange Pekoe</li>
                        <li>Flowery Orange Pekoe</li>
                    </ul>
                </li>
                <li>
                    Małe liście pozyskane z górnej części krzewu, łamane mechanicznie podczas produkcji:
                    <ul>
                        <li>Broken Pekoe</li>
                        <li>Broken Orange Pekoe</li>
                    </ul>
                </li>
                <li>
                    Duże liście pozyskane z dolnej części krzewu:
                    <ul>
                        <li>Souchong</li>
                    </ul>
                </li>
                <li>
                    "Surowiec" używany do produkcji herbaty ekspresowej:
                    <ul>
                        <li>Pył herbaciany</li>
                    </ul>
                </li>
            </ol>
        </article>

        <p>Najbardziej popularne gatunki: <i>assam, yunnan, darjeeling, ceylon</i>.</p>
    </section>

    <br>

    <section>
        <section id="Herbata_zielona">
            <h2>Herbata zielona</h2>

            <p>Powstaje z liści nie poddanych fermentacji, od razu przeprowadzany jest proces suszenia</p>

            <p>Najbardziej popularne gatunki: <i>gunpowder, longjing (lung ching), sencha, matcha</i>.</p>
        </section>

        <br>

        <section id="Herbata_biala">
            <h2>Herbata biała</h2>

            <p>Produkawana głównie w Chinach. Powstaje z młodych, nierozwiniętych, zwiędniętych, a natępnie suszonych pączków.</p>
        </section>

        <br>

        <section id="Herbata_zolta">
            <h2>Herbata żółta</h2>

            <p>Podobny proces produckji do wytwarzania białej herbaty, ale poddawana jest dłuższemu schnięciu. Herbaty serwowane na dworze cesarskim nazywano żółtą herbatą.</p>
        </section>

        <br>

        <section id="Herbata_pu-erh">
            <h2>Herbata pu-erh</h2>

            <p>Inaczej herbata czerwona, przechodzi dodatkowy proces fermentacji i leżakowania. Może być przechowywana nawet 50 lat (pozostałych herbat nie powinno się przechowywać dłużej niż rok).</p>
        </section>

        <br>

        <section id="Herbata_ulong">
            <h2>Herbata ulong</h2>

            <p>Nazywana również herbatą niebieską, turkusową, niedofermentowaną lub półfermentowaną. Produkcja polega na zostawieniu zebrancyh liści do zwiędnięcia na słońcu, następnie obciera się brzegi liści za pomocą bambusowych koszy, kolejnym krokiem
                jest fermentacja, a na końcu przechodzą proces palenia.</p>
        </section>
    </section>
    <p id="back_to_top"><a href="#tytul">Wróć do góry ^</a></p>
    <div id="div_border">
        <p>Test pojedynczego dziecka</p>
    </div>
    <div id="img_container">
        <p>Przykład back-ground image w divie</p>
    </div>
    <!-- <script src="js/index.js"></script> -->
</body>

</html>