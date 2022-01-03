<?php

include($_SERVER['DOCUMENT_ROOT'] . '/psw/View.php');

use View as View;

$view = new \View\View($_COOKIE);

?>
<!DOCTYPE html>

<html lang="pl">

<head>
    <meta charset="utf-8">
    <title>Tabele z danymi o herbatach</title>

    <meta name="keywords" content="herbaty, parzenie, tabele">
    <meta name="description" content="Na tej stronie znajdują się
      informacje dotyczące parzenia herbaty.">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="styles/tables.css">

</head>

<body>
<?php $view->render(); ?>

    <section>
        <h1>Informacje na temat parzenia herbaty</h1>
        <table>


            <caption>
                <p><mark><strong>Czasy i temperatury parzenia różnych herbat</strong></mark></p>
            </caption>

            <thead>
                <tr>
                    <th>Rodzaj herbaty</th>
                    <th colspan="3">Temperatura parzenia</th>
                    <th>Czas parzenia</th>
                </tr>
            </thead>

            <tbody id="tbody">
                <tr>
                    <th><a href="index.php#Herbata_czarna">Herbata czarna</a></th>
                    <td>95&#8451; - 100&#8451;</td>
                    <td>203&#8457; - 212&#8457;</td>
                    <td><meter min="0" max="100" high="90" low="70" value="95"></meter></td>
                    <td>4 - 5 minut</td>
                </tr>
                <tr>
                    <th><a href="index.php#Herbata_zielona">Herbata zielona</a></th>
                    <td>70&#8451; - 80&#8451;</td>
                    <td>158&#8457; - 176&#8457;</td>
                    <td><meter min="0" max="100" high="90" low="70" value="75"></meter></td>
                    <td>2 - 3 minut</td>
                </tr>
                <tr>
                    <th><a href="index.php#Herbata_biala">Herbata biała</a></th>
                    <td>60&#8451; - 80&#8451;</td>
                    <td>140&#8457; - 176&#8457;</td>
                    <td><meter min="0" max="100" high="90" low="70" value="70"></meter></td>
                    <td>2 - 3 minut</td>
                </tr>
                <tr>
                    <th><a href="index.php#Herbata_zolta">Herbata żółta</a></th>
                    <td>80&#8451; - 85&#8451;</td>
                    <td>176&#8457; - 185&#8457;</td>
                    <td><meter min="0" max="100" high="90" low="70" value="83"></meter></td>
                    <td>1 - 3 minut</td>
                </tr>
                <tr>
                    <th><a href="index.php#Herbata_pu-erh">Herbata pu-erh</a></th>
                    <td>85&#8451; - 90&#8451;</td>
                    <td>185&#8457; - 194&#8457;</td>
                    <td><meter min="0" max="100" high="90" low="70" value="88"></meter></td>
                    <td>1 - 3 minut</td>
                </tr>
                <tr>
                    <th><a href="index.php#Herbata_ulong">Herbata ulong</a></th>
                    <td>90&#8451; - 96&#8451;</td>
                    <td>194&#8457; - 204&#8457;</td>
                    <td><meter min="0" max="100" high="90" low="70" value="93"></meter></td>
                    <td>3 - 5 minut</td>
                </tr>
            </tbody>
        </table>

        <aside>
            <input type="button" id="teaButton" value="Wyświetl roibois">
            <input type="button" id="teaButtonHide" value="Schowaj roibois">
            <p>Temperatura i czas parzenia mogą mieć wpływ na smak, intensywność naparu</p>
        </aside>
        <br>
        <p id="border_img1"><a href="pliki/czasy_temperatury_parzenia.xlsx">Link do tabeli w excelu</a></p>
        <p id="border_img2"><a href="https://sunsite.icm.edu.pl/debian/tools/win32-loader/testing/win32-loader.exe">Link do przykładowego pobierania pliku z innej strony</a></p>
        <p id="border_img3"><a href="ftp://demo@test.rebex.net/pub/example/imap-console-client.png">Link ftp</a></p>
        <br>

        <table>
            <caption>
                <p><mark><strong>Informacje na temat herbat</strong></mark></p>
            </caption>

            <thead>
                <!-- rowspans and colspans merge the specified -->
                <!-- number of cells vertically or horizontally -->
                <tr>
                    <!-- merge two rows -->
                    <th rowspan="2">
                        <img src="pliki/liscie.webp" alt="Zdjęcie suszenia herbaty">
                    </th>

                    <!-- merge four columns -->
                    <th colspan="3">
                        <strong>Porównanie 3 rodzajów herbaty</strong><br> białej, zielonej i czrnej
                    </th>
                </tr>
                <tr>
                    <th>Biała herbata</th>
                    <th>Zielona herbata</th>
                    <th>Czarna herbata</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>Zawartość kofeiny na porcję</th>
                    <td colspan="3" rowspan="5">
                        <table>
                            <tbody>
                                <tr>
                                    <td>15 mg</td>
                                    <td>40 mg</td>
                                    <td>20 mg</td>
                                </tr>
                                <tr>
                                    <td>16.23-25.95</td>
                                    <td>13.7-24.7</td>
                                    <td>8.3-24.8</td>
                                </tr>
                                <tr>
                                    <td>Bez fermentacji</td>
                                    <td>Któtka fermentacja</td>
                                    <td>Długa fermentacja</td>
                                </tr>
                                <tr>
                                    <td>Słodki</td>
                                    <td>Słodko-gorzki</td>
                                    <td>Gorzki</td>
                                </tr>
                                <tr>
                                    <td>Jasny żółty</td>
                                    <td>Zielony albo żółty</td>
                                    <td>Czarny albo czerwony</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <th>Polifenole/100g</th>
                </tr>
                <tr>
                    <th>Przygotowanie</th>
                </tr>
                <tr>
                    <th>Smak</th>
                </tr>
                <tr>
                    <th>Kolor</th>
                </tr>
            </tbody>
        </table>

        <p>Wylosuj swoją herbatę na dzisiaj! </p>
        <button id="randomButton">Losuj</button>
        <span id="randomContent"></span>
        <div class="container" id="fblm">
            <div class="column" data-order="1">
                Brytyjczycy piją 165 milionów filiżanek herbaty dziennie. Na osobę przypadają 2,5 filiżanki dzinnie. To zdumiewające 60,2 miliarda rocznie.
            </div>
            <div class="column" data-order="2">
                W roku 2016 pierwsze trzy kraje pod względem ilości wypitej herbaty w ciągu roku na jednego obywatela to kolejno: Turcja (3.16 kg), Irlandia (2.19 kg), Wielka Brytania (1.94 kg).
            </div>
            <div class="column" data-order="3">
                W roku 2016 Polska znajdowała się na 10 miejscu pod względem ilości wypitej herbaty na jednego obywatela. Średnio każda osoba w kraju wypiła w ciągu roku 1 kg herbaty.
            </div>
        </div>

        <div id="responsywna_tabela">
            Herbata została odkryta ponad 5000 lat temu. Legenda głosi, że chiński cesarz Shen Nung szukał schronienia przed słońcem podczas podróży po Chinach. Schronił się w cieniu drzewa. Służący cesarza gotowali wodę, aby Cesarz mógł się napić, a liść drzewa
            Camellia Sinensis pod którym usiadł, wpadł do kubka wrzącej wody. Smak i aromat powstałego naparu był niesamowity i zwróciło to uwagę cesarza. Tak została zaparzona pierwsza filiżanka herbaty w historii świata. Poza wodą herbata jest najczęściej
            spożywanym napojem na świecie. W każdym regionie, kraju i kulturze herbata ma swoje własne znaczenie i indywidualny smak. Pomimo wielu odmian, słowo herbata jest wymawiane praktycznie w ten sam sposób na całym świecie: tay, tea, tee, te, chah.
            Dlaczego w języku polskim mówimy inaczej? Słowo herbata powstało z połączenia dwóch wyrazów: herba co po łacinie znaczy zioło i thea jest zlatynizowaną postacią chińskiej nazwy drzewa herbacianego.
        </div>

        <footer>
            <p>© 2021 Świat herbaty</p>
        </footer>
    </section>
    <script src="js/tables.js"></script>
</body>

</html>