<?php
require 'conexion.php';

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

// Buscar usuario por nombre (solo usuario)
$sql = "SELECT * FROM usuarios WHERE usuario = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $usuario);
$stmt->execute();
$resultado = $stmt->get_result();

if ($resultado->num_rows === 1) {
    $fila = $resultado->fetch_assoc();

    // Verificar la contraseña con password_verify
    if (password_verify($contrasena, $fila['contrasena'])) {
        echo "✅ ¡Bienvenido, $usuario!";
    } else {
        echo "❌ Contraseña incorrecta.";
    }
} else {
    echo "❌ Usuario no encontrado.";
}

?>
