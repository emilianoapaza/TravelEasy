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
                    <a href="sesion.php">Iniciar Sesion
                        <div class="barra__before"></div>
                    </a>
                </div>
            </div>
        </div>
    </header>
    <main>
        <h2 class="h2-sesion">Inciar Sesion</h2>

        <form id="form-login" action="procesar_login.php" method="POST" class="form-sesion">
        <fieldset class="fieldset">
            <div class="fieldset__div">
                <label for="">Usuario</label>
                <input type="text" name="usuario" placeholder="TheInsano777" required>
            </div>
            <div class="fieldset__div">
                <label for="">Contraseña</label>
                <input type="password" name="contrasena" placeholder="*******" required>
            </div>
            <div class="fieldset__div">
                <input type="submit" value="Iniciar Sesion">
            </div>
        </fieldset>
    </form>
        <p class="registrarse">¡Aun no tienes cuenta? <a href="registrarse.php"> Registrarse</a></p>
    </main>
    <div id="modal-login" class="modal-login">
        <div class="modal-login__contenido">
            <p id="modal-login-texto">Mensaje de login</p>
            <button onclick="cerrarModalLogin()">Cerrar</button>
        </div>
    </div>

</div>
<script>
document.getElementById('form-login').addEventListener('submit', function(e) {
    e.preventDefault();

    const form = e.target;
    const formData = new FormData(form);

    const modal = document.getElementById('modal-login');
    const mensaje = document.getElementById('modal-login-texto');

    fetch(form.action, {
        method: 'POST',
        body: formData
    })
    .then(res => res.json())
    .then(data => {
        mensaje.textContent = data.message;
        modal.style.display = 'flex';

        if (data.success) {
            form.reset();
            // Opcional: redirigir después de unos segundos
            // setTimeout(() => window.location.href = 'dashboard.php', 2000);
        }
    })
    .catch(error => {
        mensaje.textContent = '❌ Error al enviar el formulario.';
        modal.style.display = 'flex';
    });
});

// Cierra el modal al hacer clic en el botón
function cerrarModalLogin() {
    document.getElementById('modal-login').style.display = 'none';
}
</script>

</body>
</html>