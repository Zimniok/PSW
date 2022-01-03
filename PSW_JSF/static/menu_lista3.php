<?php

include($_SERVER['DOCUMENT_ROOT'] . '/psw/View.php');

use View as View;

$view = new \View\View($_COOKIE);

?>
<!DOCTYPE html>

<html lang="pl">

<head>
    <meta charset="utf-8">
    <title>Menu template</title>

    <meta name="keywords" content="Menu, template">
    <meta name="description" content="Na tej stronie znajduje się
      template rozwijanego menu.">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="styles/menu_lista3.css">
</head>

<body>
<?php $view->render(); ?>

    <div class="dropdown">
        <button class="menu_start_entry">Menu</button>
        <div class="main_dropdown_content dropdown-content">
            <div class="sub-dropdown">
                <p>Owoce</p>
                <div class="dropdown-content sub-dropdown-content">
                    <div class="sub-sub-dropdown">
                        <p>Jabłka</p>
                        <div class="dropdown-content sub-sub-dropdown-content">
                            <p>Czerwone</p>
                            <p>Zielone</p>
                            <p>Antonówka</p>
                        </div>
                    </div>
                    <div class="sub-sub-dropdown">
                        <p>Winogrona</p>
                        <div class="dropdown-content sub-sub-dropdown-content">
                            <p>Ciemne</p>
                            <p>Jasne</p>
                            <p>Winne</p>
                        </div>
                    </div>
                    <div class="sub-sub-dropdown">
                        <p>Gruszki</p>
                        <div class="dropdown-content sub-sub-dropdown-content">
                            <p>Komisówka</p>
                            <p>Konferencja</p>
                            <p>Uta</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sub-dropdown">
                <p>Warzywa</p>
                <div class="dropdown-content sub-dropdown-content">
                    <div class="sub-sub-dropdown">
                        <p>Marchewki</p>
                        <div class="dropdown-content sub-sub-dropdown-content">
                            <p>Anka</p>
                            <p>Fatima</p>
                            <p>Galicja</p>
                        </div>
                    </div>
                    <div class="sub-sub-dropdown">
                        <p>Ziemniaki</p>
                        <div class="dropdown-content sub-sub-dropdown-content">
                            <p>Justa</p>
                            <p>Krasa</p>
                            <p>Lord</p>
                        </div>
                    </div>
                    <div class="sub-sub-dropdown">
                        <p>Papryki</p>
                        <div class="dropdown-content sub-sub-dropdown-content">
                            <p>Bell</p>
                            <p>Cayenne</p>
                            <p>Jalapeno</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sub-dropdown">
                <p>Grzyby</p>
                <div class="dropdown-content sub-dropdown-content">
                    <div class="sub-sub-dropdown">
                        <p>Jadalne</p>
                        <div class="dropdown-content sub-sub-dropdown-content">
                            <p>Rydz</p>
                            <p>Kurka</p>
                            <p>Maślak</p>
                        </div>
                    </div>
                    <div class="sub-sub-dropdown">
                        <p>Niejadalne</p>
                        <div class="dropdown-content sub-sub-dropdown-content">
                            <p>Gąska</p>
                            <p>Gołąbek</p>
                            <p>Łuskwiak</p>
                        </div>
                    </div>
                    <div class="sub-sub-dropdown">
                        <p>Trujące</p>
                        <div class="dropdown-content sub-sub-dropdown-content">
                            <p>Muchomor</p>
                            <p>Helmówka</p>
                            <p>Strzępiak</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <textarea name="board" id="board" cols="30" rows="10"></textarea>
    </div>
    <script src="js/menu.js"></script>
</body>

</html>