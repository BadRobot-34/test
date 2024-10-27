
<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link href='https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap' rel='stylesheet'>
    <title>Guía EPG</title>
    <style>
        /* Estilos específicos para esta página */
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f4f4; /* Color de fondo específico */
            color: #333; /* Color de texto específico */
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* Para que el footer esté al final */
            padding-bottom: 80px; /* Espacio para el footer fijo */
        }
        h1 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        footer {
            background-color: #1e1e1e; /* Color del fondo del footer */
            padding: 10px;
            text-align: center;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            color: white;
        }
        .menu-footer {
            display: flex;
            justify-content: space-around;
            align-items: center;
            margin-bottom: 10px;
        }
        .menu-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            flex: 1;
        }
        .menu-item img {
            width: 30px;
            height: 30px;
            margin-bottom: 5px;
        }
        footer p {
            margin: 0;
            font-size: 1rem;
            margin-top: 5px;
            background-color: #2a2a2a;
            padding: 10px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <header>
        <h1>GUÍA DE EVENTOS</h1>
    </header>
    <main id='eventos-container'>
        <table>
            <thead>
                <tr>
                    <th>Deporte</th>
                    <th>Hora</th>
                    <th>Evento</th>
                </tr>
            </thead>
            <tbody><tr>
                            <td>LIGA ENDESA</td>
                            <td>13.55</td>
                            <td>Baskonia - Joventut Badalona</td>
                          </tr><tr>
                            <td>LIGA ENDESA</td>
                            <td>12.25</td>
                            <td>Real Madrid - Baxi Manresa</td>
                          </tr><tr>
                            <td>LIGA ENDESA</td>
                            <td>13.00</td>
                            <td>La Laguna Tenerife - Dreamland Gran Canaria</td>
                          </tr><tr>
                            <td>LIGA ENDESA</td>
                            <td>16.55</td>
                            <td>Surne Bilbao Basket - Valencia Basket</td>
                          </tr><tr>
                            <td>LIGA ENDESA</td>
                            <td>16.55</td>
                            <td>Río Breogán - Hiopos Lleida</td>
                          </tr><tr>
                            <td>LIGA ENDESA</td>
                            <td>18.30</td>
                            <td>Unicaja - Barça</td>
                          </tr><tr>
                            <td>LIGA ENDESA</td>
                            <td>18.30</td>
                            <td>Unicaja - Barça</td>
                          </tr><tr>
                            <td>NBA</td>
                            <td>20.30</td>
                            <td>Indiana Pacers - Philadelphia 76ers</td>
                          </tr><tr>
                            <td>PRIMERA FEB</td>
                            <td>18.25</td>
                            <td>Movistar Estudiantes - CB Zamora</td>
                          </tr><tr>
                            <td>LIGA ASOBAL</td>
                            <td>18.55</td>
                            <td>Cuenca - Atlético Valladolid</td>
                          </tr><tr>
                            <td>CICLOCROS</td>
                            <td>15.05</td>
                            <td>Superprestige : Overijse - Masculino</td>
                          </tr><tr>
                            <td>CICLOCROS</td>
                            <td>13.35</td>
                            <td>Superprestige : Overijse - Femenino</td>
                          </tr><tr>
                            <td>ESQUÍ ALPINO</td>
                            <td>09.30</td>
                            <td>Copa del mundo Eslalon gigante M - 1ª manga</td>
                          </tr><tr>
                            <td>ESQUÍ ALPINO</td>
                            <td>12.45</td>
                            <td>Copa del mundo Eslalon gigante M - 2ª manga</td>
                          </tr><tr>
                            <td>NFL</td>
                            <td>18.00</td>
                            <td>Cincinnati Bengals - Philadelphia Eagles (VO)</td>
                          </tr><tr>
                            <td>NFL</td>
                            <td>21.25</td>
                            <td>Washington Commanders - Chicago Bears</td>
                          </tr><tr>
                            <td>NFL</td>
                            <td>18.00</td>
                            <td>Red Zone. Jornada 8</td>
                          </tr><tr>
                            <td>LIGA EA SPORTS</td>
                            <td>21.00</td>
                            <td>Real Sociedad - Osasuna</td>
                          </tr><tr>
                            <td>LIGA EA SPORTS</td>
                            <td>14.00</td>
                            <td>Leganés - Celta</td>
                          </tr><tr>
                            <td>LIGA EA SPORTS</td>
                            <td>18.30</td>
                            <td>Betis - At. Madrid</td>
                          </tr><tr>
                            <td>LIGA EA SPORTS</td>
                            <td>16.15</td>
                            <td>Getafe - Valencia</td>
                          </tr><tr>
                            <td>LIGA HYPERMOTION</td>
                            <td>18.24</td>
                            <td>Albacete - Sporting</td>
                          </tr><tr>
                            <td>LIGA HYPERMOTION</td>
                            <td>16.09</td>
                            <td>Deportivo - Racing</td>
                          </tr><tr>
                            <td>LIGA HYPERMOTION</td>
                            <td>16.09</td>
                            <td>Elche - Burgos</td>
                          </tr><tr>
                            <td>LIGA HYPERMOTION</td>
                            <td>20.54</td>
                            <td>Granada - Levante</td>
                          </tr><tr>
                            <td>LIGA HYPERMOTION</td>
                            <td>13.54</td>
                            <td>Málaga - Eibar</td>
                          </tr><tr>
                            <td>LIGA HYPERMOTION</td>
                            <td>18.24</td>
                            <td>Huesca - Almería</td>
                          </tr><tr>
                            <td>FÚTBOL SALA</td>
                            <td>16.55</td>
                            <td>Santa Coloma - Barcelona</td>
                          </tr><tr>
                            <td>PREMIER LEAGUE</td>
                            <td>14.50</td>
                            <td>West Ham - Manchester City</td>
                          </tr><tr>
                            <td>PREMIER LEAGUE</td>
                            <td>17.20</td>
                            <td>Arsenal - Liverpool</td>
                          </tr><tr>
                            <td>PREMIER LEAGUE</td>
                            <td>14.50</td>
                            <td>Chelsea - Newcastle</td>
                          </tr><tr>
                            <td>MUNDIAL SUB17 (F)</td>
                            <td>20.30</td>
                            <td>España - Ecuador</td>
                          </tr><tr>
                            <td>HOCKEY HIERBA</td>
                            <td>10.25</td>
                            <td>Sanse Complutense - Atlètic Terrassa</td>
                          </tr><tr>
                            <td>HOCKEY HIERBA</td>
                            <td>12.25</td>
                            <td>Sanse Complutense - RC Polo</td>
                          </tr><tr>
                            <td>HÍPICA ZARZUELA</td>
                            <td>11.15</td>
                            <td>Temporada Otoño. 27/10/</td>
                          </tr><tr>
                            <td>MOTO GP</td>
                            <td>07.00</td>
                            <td>Carrera Moto2</td>
                          </tr><tr>
                            <td>MOTO GP</td>
                            <td>08.30</td>
                            <td>Carrera MotoGP</td>
                          </tr><tr>
                            <td>F1 GP MÉXICO</td>
                            <td>19.00</td>
                            <td>Previo Carrera</td>
                          </tr><tr>
                            <td>F1 GP MÉXICO</td>
                            <td>20.55</td>
                            <td>GP de México: Carrera</td>
                          </tr><tr>
                            <td>F1 GP MÉXICO</td>
                            <td>23.03</td>
                            <td>GP de México: El Post de la Fórmula 1</td>
                          </tr><tr>
                            <td>FIA MOTORSPORT GAME</td>
                            <td>14.50</td>
                            <td>Final GTSPrint</td>
                          </tr><tr>
                            <td>FIA MOTORSPORT GAME</td>
                            <td>09.30</td>
                            <td>Final TCR</td>
                          </tr><tr>
                            <td>PATINAJE ARTÍSTICO</td>
                            <td>16.15</td>
                            <td>Masculino - Programa libre</td>
                          </tr><tr>
                            <td>PATINAJE ARTÍSTICO</td>
                            <td>18.10</td>
                            <td>Parejas - Programa libre</td>
                          </tr><tr>
                            <td>RUGBY</td>
                            <td>21.00</td>
                            <td>Stade Toulousain - Toulon</td>
                          </tr><tr>
                            <td>SNOOKER</td>
                            <td>14.00</td>
                            <td>Abierto de Irlanda Final- Sesión 1</td>
                          </tr><tr>
                            <td>SNOOKER</td>
                            <td>19.45</td>
                            <td>Abierto de Irlanda Final- Sesión 1</td>
                          </tr><tr>
                            <td>TENIS</td>
                            <td>15.35</td>
                            <td>Basilea : B Shelton - G Mpteshi Perricard</td>
                          </tr><tr>
                            <td>TENIS</td>
                            <td>14.05</td>
                            <td>Viena : J. Draper - K. Khachanov</td>
                          </tr><tr>
                            <td>TENIS</td>
                            <td>11.30</td>
                            <td>Final ITF W100 Les Franqueses del Vallès</td>
                          </tr>      </tbody>
        </table>
    </main>

    <!-- Footer -->
    <footer>
        <div class='menu-footer'>
            <div class='menu-item'>
                <a href='index.php'>
                    <img src='img/incio.png' alt='Inicio'>
                    <!-- <p>Inicio</p> -->
                </a>
            </div>
            <div class='menu-item'>
                <a href='epg.php'>
                    <img src='img/programacion.png' alt='Programación'>
                    <!-- <p>Programación</p> -->
                </a>
            </div>
            <div class='menu-item'>
                <a href='live.php'>
                    <img src='img/live.png' alt='Live'>
                    <!-- <p>Live</p> -->
                </a>
            </div>
        </div>
        <p>🇪🇸 CREADO POR FIRULAIS 🇪🇸</p>
    </footer>
</body>
</html>
