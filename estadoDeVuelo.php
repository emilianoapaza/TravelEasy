<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100&icon_names=favorite,home,search,settings" rel="stylesheet" />
    <title>Document</title>
</head>
<body>
    <header>
        <div class="barra-bg">
            <div class="barra contenedor-nav">
                <div class="barra__div logo">TRAVEL EASY
                        <img src="" alt="">
                </div>
                <nav class="barra__nav">
                    <a href="mi-reserva.php">Mi reserva
                            <div class="barra__before"></div>
                    </a>
                    <a href="mi-reserva.php">Servicio
                        <div class="barra__before"></div>
                    </a>
                    <a href="mi-reserva.php">Aerolineas
                        <div class="barra__before"></div>
                    </a>
                    <a href="mi-reserva.php">Informacion
                        <div class="barra__before"></div>
                    </a>
                </nav>
                <div class="barra__div">
                    <a href="sesion.php">Iniciar Sesion
                        <div class="barra__before"></div>
                    </a>
                </div>
            </div>
        </div>
        <div class="slider-box">
            <div class="capa-black"></div>
            <ul>
                <li class="img1">
                </li>
                <li class="img2">
                </li>
                <li class="img3">
                </li>
                <li class="img4">
                </li>
            </ul>
        </div>
    </header>
    <div class="border-reserva"> 
        <div class="reserva">
            <nav class="reserva__nav">
                <div class="nav-box">
                    <div class="">
                        <img src="flight_24dp_1F1F1F_FILL0_wght400_GRAD0_opsz24.svg">
                        <a href="index.php">Vuelos</a>
                    </div>
                    <div class="barra__before barra__before--black"></div>
                </div>
                    <div class="nav-box">
                    <div>
                        <img src="acute_24dp_1F1F1F_FILL0_wght400_GRAD0_opsz24.svg">
                        <a href="estadoDeVuelo.php">Estado de vuelo</a>
                    </div>
                    <div class="barra__before barra__before--black"></div>
                </div>
                <div class="nav-box">
                    <div class="nav-box__icon">
                        <img src="airplane_ticket_24dp_1F1F1F_FILL0_wght400_GRAD0_opsz24.svg">
                        <a href="">Mi reserva</a>
                    </div>
                    <div class="barra__before barra__before--black"></div>
                </div>
            </nav>
            <div class="grid grid-estadoDeVuelo"> <!-- Inputs para reserva -->
                    
        <section class="mi-reserva contenedor" id="mi-reserva" style="display: block;">
            <h2 class="h2-sesion">Mi Reserva</h2>
            <div class="reserva-detalle">
                <p><strong>Origen:</strong> <span id="reserva-origen"></span></p>
                <p><strong>Destino:</strong> <span id="reserva-destino"></span></p>
                <p><strong>Fecha de Partida:</strong> <span id="reserva-partida"></span></p>
                <p><strong>Fecha de Regreso:</strong> <span id="reserva-regreso"></span></p>
                <p><strong>Pasajeros:</strong> <span id="reserva-pasajeros"></span></p>
            </div>
        </section>

            </div>
                    <div class="grid-button">
                        <button class="grid__button grid-button-estadoDeVuelo">Consultar</button>
                    </div>

        </div>
    </div> <!-- .border__reserva -->
    <main>
        <section class="destinos contenedor">
            <article class="destinos__destino">
                <div class="destino-layout">
                    <div class="overflow">
                        <img class="img" src="img/bariloche.webp">
                    </div>
                    <div class="destino1__tarifa tarifa">
                        <h3>Economy</h3>
                        <div>
                            <p>ARS 50.530 sin impuestos nacionales ni tasas <span>Ida y vuelta</span></p>
                            <p class="precio-final">Trifa final 109.990</p>
                        </div>
                    </div>
                </div>
            </article>
            <article class="destinos__destino">
                <div class="destino-layout">
                    <img class="img" src="img/salta.jpg">
                    <div class="destino2__tarifa tarifa">
                        <h3>Economy</h3>
                        <div>
                            <p>ARS 50.530 sin impuestos nacionales ni tasas <span>Ida y vuelta</span></p>
                            <p class="precio-final">Trifa final 89.150</p>
                        </div>
                    </div>
                </div>
            </article>
            <article class="destinos__destino">
                <div class="destino-layout">
                    <img class="img" src="img/cordoba.jpg">
                    <div class="destino3__tarifa tarifa">
                        <h3>Economy</h3>
                        <div>
                            <p>ARS 50.530 sin impuestos nacionales ni tasas <span>Ida y vuelta</span></p>
                            <p class="precio-final">Trifa final 94.830</p>
                        </div>
                    </div>
                </div>
            </article>
            <article class="destinos__destino">
                <div class="destino-layout">
                    <img class="img" src="img/tierraDelFuego.png">
                    <div class="destino4__tarifa tarifa">
                        <h3>Economy</h3>
                        <div>
                            <p>ARS 50.530 sin impuestos nacionales ni tasas <span>Ida y vuelta</span></p>
                            <p class="precio-final">Trifa final 59.760</p>
                        </div>
                    </div>
                </div>
            </article>
        </section>
    </main>
</body>
</html>