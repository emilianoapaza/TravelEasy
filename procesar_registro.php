<?php
require 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'] ?? '';
    $usuario = $_POST['usuario'] ?? '';
    $contrasenaPlano = $_POST['contrasena'] ?? '';

    if (empty($email) || empty($usuario) || empty($contrasenaPlano)) {
        echo "⚠️ Todos los campos son obligatorios.";
        exit;
    }

    // Verificar duplicados
    $verificar = $conn->prepare("SELECT id FROM usuarios WHERE usuario = ? OR email = ?");
    $verificar->bind_param("ss", $usuario, $email);
    $verificar->execute();
    $verificar->store_result();

    if ($verificar->num_rows > 0) {
        echo "❌ El usuario o el email ya están registrados.";
        $verificar->close();
        $conn->close();
        exit;
    }
    $verificar->close();

    // Encriptar y guardar
    $hash = password_hash($contrasenaPlano, PASSWORD_DEFAULT);
    $stmt = $conn->prepare("INSERT INTO usuarios (email, usuario, contrasena) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $email, $usuario, $hash);

    if ($stmt->execute()) {
        echo "✅ Registro exitoso. <a href='sesion.php'>Iniciar sesión</a>";
    } else {
        echo "❌ Error al registrar: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "❌ Método no permitido.";
}
