<?php if (session_status() === PHP_SESSION_NONE && !headers_sent()) { session_start(); } ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/no-flicker.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=BBH+Sans+Bartle&family=BBH+Sans+Bogle&family=Bitcount+Grid+Double:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/gira.css">
</head>
<body>
    <?php require_once 'header.php'; ?>

    <main>
        <section class="tour-section">
            <h2>Gira 2023</h2>
            <table class="tour-table">
                <thead>
                    <tr>
                        <th>Fecha</th>
                        <th>País</th>
                        <th>Ciudad</th>
                        <th>Estadio</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>20.05.2023</td>
                        <td>Litauen</td>
                        <td>Vilnius</td>
                        <td>Vingio Parkas - Probeshow</td>
                    </tr>
                    <tr>
                        <td>22.05.2023</td>
                        <td>Litauen</td>
                        <td>Vilnius</td>
                        <td>Vingio Parkas</td>
                    </tr>
                    <tr>
                        <td>27.05.2023</td>
                        <td>Finnland</td>
                        <td>Helsinki</td>
                        <td>Olympiastadion</td>
                    </tr>
                    <tr>
                        <td>28.05.2023</td>
                        <td>Finnland</td>
                        <td>Helsinki</td>
                        <td>Olympiastadion</td>
                    </tr>
                    <tr>
                        <td>02.06.2023</td>
                        <td>Dänemark</td>
                        <td>Odense</td>
                        <td>Dyrskueplads</td>
                    </tr>
                    <tr>
                        <td>03.06.2023</td>
                        <td>Dänemark</td>
                        <td>Odense</td>
                        <td>Dyrskueplads</td>
                    </tr>
                    <tr>
                        <td>07.06.2023</td>
                        <td>Deutschland</td>
                        <td>München</td>
                        <td>Olympiastadion</td>
                    </tr>
                    <tr>
                        <td>08.06.2023</td>
                        <td>Deutschland</td>
                        <td>München</td>
                        <td>Olympiastadion</td>
                    </tr>
                    <tr>
                        <td>10.06.2023</td>
                        <td>Deutschland</td>
                        <td>München</td>
                        <td>Olympiastadion</td>
                    </tr>
                    <tr>
                        <td>11.06.2023</td>
                        <td>Deutschland</td>
                        <td>München</td>
                        <td>Olympiastadion</td>
                    </tr>
                    <tr>
                        <td>14.06.2023</td>
                        <td>Slowakei</td>
                        <td>Trenčín</td>
                        <td>Trenčín Airport</td>
                    </tr>
                    <tr>
                        <td>17.06.2023</td>
                        <td>Schweiz</td>
                        <td>Bern</td>
                        <td>Stadion Wankdorf</td>
                    </tr>
                    <tr>
                        <td>18.06.2023</td>
                        <td>Schweiz</td>
                        <td>Bern</td>
                        <td>Stadion Wankdorf</td>
                    </tr>
                    <tr>
                        <td>23.06.2023</td>
                        <td>Spanien</td>
                        <td>Madrid</td>
                        <td>Estadio Cívitas Metropolitano</td>
                    </tr>
                    <tr>
                        <td>26.06.2023</td>
                        <td>Portugal</td>
                        <td>Lissabon</td>
                        <td>Estádio Da Luz</td>
                    </tr>
                    <tr>
                        <td>01.07.2023</td>
                        <td>Italien</td>
                        <td>Padova</td>
                        <td>Stadio Euganeo</td>
                    </tr>
                    <tr>
                        <td>06.07.2023</td>
                        <td>Niederlande</td>
                        <td>Groningen</td>
                        <td>Stadspark</td>
                    </tr>
                    <tr>
                        <td>07.07.2023</td>
                        <td>Niederlande</td>
                        <td>Groningen</td>
                        <td>Stadspark</td>
                    </tr>
                    <tr>
                        <td>11.07.2023</td>
                        <td>Ungarn</td>
                        <td>Budapest</td>
                        <td>Puskás Aréna</td>
                    </tr>
                    <tr>
                        <td>12.07.2023</td>
                        <td>Ungarn</td>
                        <td>Budapest</td>
                        <td>Puskás Aréna</td>
                    </tr>
                    <tr>
                        <td>15.07.2023</td>
                        <td>Deutschland</td>
                        <td>Berlin</td>
                        <td>Olympiastadion</td>
                    </tr>
                    <tr>
                        <td>16.07.2023</td>
                        <td>Deutschland</td>
                        <td>Berlin</td>
                        <td>Olympiastadion</td>
                    </tr>
                    <tr>
                        <td>18.07.2023</td>
                        <td>Deutschland</td>
                        <td>Berlin</td>
                        <td>Olympiastadion</td>
                    </tr>
                    <tr>
                        <td>22.07.2023</td>
                        <td>Frankreich</td>
                        <td>Paris</td>
                        <td>Stade de France</td>
                    </tr>
                    <tr>
                        <td>26.07.2023</td>
                        <td>Österreich</td>
                        <td>Wien</td>
                        <td>Ernst-Happel-Stadion</td>
                    </tr>
                    <tr>
                        <td>27.07.2023</td>
                        <td>Österreich</td>
                        <td>Wien</td>
                        <td>Ernst-Happel-Stadion</td>
                    </tr>
                    <tr>
                        <td>30.07.2023</td>
                        <td>Polen</td>
                        <td>Chorzów</td>
                        <td>Stadion Śląski</td>
                    </tr>
                    <tr>
                        <td>31.07.2023</td>
                        <td>Polen</td>
                        <td>Chorzów</td>
                        <td>Stadion Śląski</td>
                    </tr>
                    <tr>
                        <td>03.08.2023</td>
                        <td>Belgien</td>
                        <td>Brüssel</td>
                        <td>King Baudouin Stadium</td>
                    </tr>
                    <tr>
                        <td>04.08.2023</td>
                        <td>Belgien</td>
                        <td>Brüssel</td>
                        <td>King Baudouin Stadium</td>
                    </tr>
                    <tr>
                        <td>05.08.2023</td>
                        <td>Belgien</td>
                        <td>Brüssel</td>
                        <td>King Baudouin Stadium</td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>
</body>
</html>