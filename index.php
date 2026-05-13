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
                        <a href="index.php">Mi reserva
                            <div class="barra__before"></div>
                        </a>
                    <a href="servicio.php">Destinos
                        <div class="barra__before"></div>
                    </a>
                    <a href="aerolineas.php">Aerolineas Plus
                        <div class="barra__before"></div>
                    </a>
                </nav>
                <div class="barra__div">
                    <a href="sesion.php" name="iniciar">Iniciar Sesion
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
                        <a href="">Vuelos</a>
                    </div>
                    <div class="barra__before barra__before--black"></div>
                </div>
                <div class="nav-box">
                    <div class="nav-box__icon">
                        <img src="airplane_ticket_24dp_1F1F1F_FILL0_wght400_GRAD0_opsz24.svg">
                        <a href="mi-reserva.php">Carrito</a>
                    </div>
                    <div class="barra__before barra__before--black"></div>
                </div>
                
            </nav>

            
            <form id="form-reserva" action="procesar_reserva.php" method="POST">
                <div class="section-option">
                    <div class="container-option">
                        <a href="ida.html" style="color: #000">
                            Ida
                        </a>
                    </div>
                    <div class="container-option">
                        <a href="idayvuelta.html" style="color: #000">
                            Ida y vuelta
                        </a>
                    </div>
                </div>
                <div class="grid"> <div class="grid-1">
                        <div class="grid-1__div grid-1__origen">
                            <label>Origen</label>
                            <div class="flex-reserva">
                                <img src="flight_24dp_1F1F1F_FILL0_wght400_GRAD0_opsz24.svg">
                                <input class="inputs-reserva" type="text" placeholder="Origen" name="origin" list="provinciasArgentinas" required>
                            </div>
                        </div>
                        <div class="flat">
                            <img src="trending_flat_24dp_1F1F1F_FILL0_wght400_GRAD0_opsz24.svg">
                            <img src="trending_flat_24dp_1F1F1F_FILL0_wght400_GRAD0_opsz24.svg">
                        </div>
                        <div class="grid-1__div grid-1__destino">
                            <label>Destino</label>
                            <div class="flex-reserva">
                                <img src="flight_24dp_1F1F1F_FILL0_wght400_GRAD0_opsz24.svg">
                                <input class="inputs-reserva" type="text" placeholder="Destino" name="destination" list="provinciasArgentinas" required>
                            </div>
                        </div>
                    </div>

                    <div class="grid-2">
                        <div class="grid-1__div">
                            <label>Partida</label>
                            <div class="flex-reserva">
                                <img src="calendar_month_24dp_1F1F1F_FILL0_wght400_GRAD0_opsz24.svg" alt="">
                                <input class="inputs-reserva" type="datetime-local" placeholder="dd/mm/aaaa" name="departure_date" required>
                            </div>
                        </div>
                        <div>
                            <label>Regreso</label>
                            <div class="flex-reserva">
                                <img src="calendar_month_24dp_1F1F1F_FILL0_wght400_GRAD0_opsz24.svg">
                                <input class="inputs-reserva" type="datetime-local" placeholder="dd/mm/aaaa" name="return_date">
                            </div>
                        </div>
                    </div>

                    <div>
                        <label>Pasajeros/as</label>
                        <div class="flex-reserva">
                            <input class="inputs-reserva" type="number" placeholder="Pasajeros" name="passengers" min="1" value="1" required>
                        </div>
                    </div>
                </div>

                <div class="grid-button">
                    <button class="grid__button" type="submit" >Agregar al Carrito</button>
                </div>
            </form>
        </div>
    </div>
    <datalist id="provinciasArgentinas">
        <option value="Buenos Aires">
        <option value="Catamarca">
        <option value="Chaco">
        <option value="Córdoba">
        <option value="Corrientes">
        <option value="Entre Ríos">
        <option value="Formosa">
        <option value="Jujuy">
        <option value="La Rioja">
        <option value="Mendoza">
        <option value="Misiones">
        <option value="Salta">
        <option value="San Juan">
        <option value="San Luis">
        <option value="Santa Cruz">
        <option value="Santa Fe">
        <option value="Santiago del Estero">
        <option value="Tucumán">
    </datalist>


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
    <div id="mensaje-reserva" class="modal-reserva">
        <div class="modal-reserva__contenido">
            <p id="mensaje-texto">¡Reserva realizada con éxito!</p>
            <button onclick="cerrarModal()">Cerrar</button>
        </div>
    </div>

    <script>
        document.querySelectorAll('.reservar-paquete').forEach(btn => {
    btn.addEventListener('click', function() {
        const formData = new FormData();
        formData.append('paqueteId', this.dataset.id);
        formData.append('nombre', this.dataset.nombre);
        formData.append('precio', this.dataset.precio);

        fetch('reservar_paquete.php', {
            method: 'POST',
            body: formData
        })
        .then(res => res.json())
        .then(data => {
            alert(data.message);
        })
        .catch(err => {
            console.error(err);
            alert('❌ Error de red al enviar la reserva.');
        });
    });
});


//-----


document.getElementById('form-reserva').addEventListener('submit', function(e) {
    e.preventDefault();

    const form = e.target;
    const formData = new FormData(form);

    fetch(form.action, {
        method: 'POST',
        body: formData
    })
    .then(res => res.json())
    .then(data => {
        // Mostrar mensaje en el modal
        const modal = document.getElementById('mensaje-reserva');
        const texto = document.getElementById('mensaje-texto');
        texto.textContent = data.message;

        modal.style.display = 'flex';

        if (data.success) {
            form.reset();
        }
    })
    .catch(err => {
        const modal = document.getElementById('mensaje-reserva');
        const texto = document.getElementById('mensaje-texto');
        texto.textContent = '❌ Error de red al enviar el formulario.';
        modal.style.display = 'flex';
    });
});

// Cerrar modal con botón
function cerrarModal() {
    document.getElementById('mensaje-reserva').style.display = 'none';
}
</script>

</body>
</html>