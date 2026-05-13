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
        <h2 class="h2-sesion">Registrarse</h2>
        <form id="form-registro" action="procesar_registro.php" method="POST" class="form-sesion">
    <fieldset class="fieldset">
        <div class="fieldset__div">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Tu Email" required>
        </div>
        <div class="fieldset__div">
            <label for="usuario">Usuario</label>
            <input type="text" name="usuario" id="usuario" placeholder="Nombre de Usuario" required>
        </div>
        <div class="fieldset__div">
            <label for="contrasena">Contraseña</label>
            <input type="password" name="contrasena" id="contrasena" placeholder="Contraseña" required>
        </div>
        <div class="fieldset__div">
            <input type="submit" value="Registrarme">
        </div>
    </fieldset>
</form>
    </main>
    <div id="modal-registro" class="modal-registro" style="display: none;">
    <div class="modal-registro__contenido">
        <p id="modal-registro-texto"></p>
        <button onclick="cerrarModalRegistro()">Cerrar</button>
    </div>
</div>
<script>
document.getElementById('form-registro').addEventListener('submit', function(e) {
  e.preventDefault();

  const form = e.target;
  const formData = new FormData(form);

  fetch('procesar_registro.php', {
    method: 'POST',
    body: formData
  })
  .then(res => res.text())
  .then(data => {
    document.getElementById('modal-registro-texto').innerHTML = data;
    document.getElementById('modal-registro').style.display = 'flex';

    if (data.includes("✅")) {
    form.reset();
    }
    })
    .catch(() => {
    document.getElementById('modal-registro-texto').textContent = '❌ Error al enviar el formulario.';
    document.getElementById('modal-registro').style.display = 'flex';
});
});

function cerrarModalRegistro() {
    document.getElementById('modal-registro').style.display = 'none';
}
</script>

</body>

</html>