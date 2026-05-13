<?php
require 'conexion.php';
header('Content-Type: application/json');

// Aseguramos que los campos estén definidos
$usuario = $_POST['usuario'] ?? '';
$contrasena = $_POST['contrasena'] ?? '';

if (empty($usuario) || empty($contrasena)) {
    echo json_encode([
        'success' => false,
        'message' => '⚠️ Todos los campos son obligatorios.'
    ]);
    exit;
}

// Buscar solo por el nombre de usuario
$sql = "SELECT * FROM usuarios WHERE usuario = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $usuario);
$stmt->execute();
$resultado = $stmt->get_result();

if ($resultado->num_rows === 1) {
    $fila = $resultado->fetch_assoc();
    
    // Verificar contraseña
    if (password_verify($contrasena, $fila['contrasena'])) {
        echo json_encode([
            'success' => true,
            'message' => "✅ ¡Bienvenido, $usuario!"
        ]);
    } else {
        echo json_encode([
            'success' => false,
            'message' => '❌ Contraseña incorrecta.'
        ]);
    }
} else {
    echo json_encode([
        'success' => false,
        'message' => '❌ Usuario no encontrado.'
    ]);
}

$stmt->close();
$conn->close();
?>