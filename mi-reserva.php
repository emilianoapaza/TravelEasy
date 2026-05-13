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
                    <a href="mi-reserva.php">Destinos
                        <div class="barra__before"></div>
                    </a>
                    <a href="mi-reserva.php">Aerolineas
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
                    <div class="nav-box__icon">
                        <img src="airplane_ticket_24dp_1F1F1F_FILL0_wght400_GRAD0_opsz24.svg">
                        <a href="">Carrito</a>
                    </div>
                    <div class="barra__before barra__before--black"></div>
                </div>
            </nav>
            <div class="grid grid-estadoDeVuelo"> <!-- Inputs para reserva -->
                    
        <section class="mi-reserva contenedor" id="mi-reserva" style="display: block;">
            <h2 class="h2-sesion">Mi Carrito</h2>
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
                        <button class="grid__button grid-button-estadoDeVuelo" styles=".grid__button:hover{color: #000}">Consultar</button>
                        <button id="btn-confirmar" class="grid__button">Confirmar compra</button>
                    </div>
                    <div class="confirmar-compra" style="text-align: center";>
                            <p id="mensaje-confirmacion" style="display:none; color:green; font-weight:bold; margin-top:10px;">
                                ✅ Compra confirmada. ¡Gracias por elegirnos!
                            </p>
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
                        
                        <button class="reservar-paquete grid__button" data-id="1" data-nombre="Bariloche" data-precio="109990">Reservar</button>
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
                         <button class="reservar-paquete grid__button" data-id="2" data-nombre="Peru" data-precio="89150">Reservar</button>
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
                         <button class="reservar-paquete grid__button" data-id="3" data-nombre="Marruecos" data-precio="94830">Reservar</button>
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
                         <button class="reservar-paquete grid__button" data-id="4" data-nombre="Brasil" data-precio="59760">Reservar</button>
                    </div>
                </div>
            </article>
        </section>
    </main>
    <script>
document.querySelector('.grid-button-estadoDeVuelo').addEventListener('click', () => {
    fetch('obtener_reserva.php')
        .then(res => res.json())
        .then(data => {
            if (data.success) {
                const reserva = data.reserva;

                document.getElementById('reserva-origen').textContent = reserva.origen;
                document.getElementById('reserva-destino').textContent = reserva.destino;
                document.getElementById('reserva-partida').textContent = reserva.fecha_partida;
                document.getElementById('reserva-regreso').textContent = reserva.fecha_regreso || 'No aplica';
                document.getElementById('reserva-pasajeros').textContent = reserva.pasajeros;

                document.getElementById('mi-reserva').style.display = 'block';
            } else {
                alert(data.message);
            }
        })
        .catch(err => {
            console.error('Error al obtener la reserva:', err);
            alert('❌ No se pudo cargar la reserva.');
        });
});

// 🔹 CONFIRMAR COMPRA
document.getElementById('btn-confirmar').addEventListener('click', () => {
    const origen = document.getElementById('reserva-origen').textContent.trim();
    const destino = document.getElementById('reserva-destino').textContent.trim();
    const fecha_partida = document.getElementById('reserva-partida').textContent.trim();
    const fecha_regreso = document.getElementById('reserva-regreso').textContent.trim();
    const pasajeros = document.getElementById('reserva-pasajeros').textContent.trim();
    const precio = 0; // Podés vincularlo con la reserva seleccionada

    // 🔸 Validar campos vacíos antes de enviar
    if (!origen || !destino || !fecha_partida || !pasajeros || pasajeros === "0") {
        alert("⚠️ Por favor, completa todos los datos antes de confirmar la compra.");
        return;
    }

    const compra = { origen, destino, fecha_partida, fecha_regreso, pasajeros, precio };

    // Enviar a PHP
    fetch('confirmar_compra.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(compra)
    })
    .then(res => res.json())
    .then(data => {
        const mensaje = document.getElementById('mensaje-confirmacion');
        if (data.success) {
            mensaje.textContent = "✅ Compra confirmada. ¡Gracias por elegirnos!";
            mensaje.style.color = "green";
        } else {
            mensaje.textContent = "❌ " + data.message;
            mensaje.style.color = "red";
        }
        mensaje.style.display = "block";
        setTimeout(() => {
            mensaje.style.display = "none";
        }, 4000);
    })
    .catch(err => {
        console.error("Error al enviar la compra:", err);
        alert("Error al confirmar la compra.");
    });
});
</script>



</body>
</html>
