<?php
// confirmar_compra.php

include 'conexion.php'; // tu archivo de conexión a la BD

header('Content-Type: application/json');

// Recibir los datos en formato JSON
$data = json_decode(file_get_contents("php://input"), true);

// Verificar si se recibieron datos
if (!$data) {
    echo json_encode(["success" => false, "message" => "No se recibieron datos."]);
    exit;
}

$origen = trim($data['origen'] ?? '');
$destino = trim($data['destino'] ?? '');
$fecha_partida = trim($data['fecha_partida'] ?? '');
$fecha_regreso = trim($data['fecha_regreso'] ?? '');
$pasajeros = intval($data['pasajeros'] ?? 0);
$precio = intval($data['precio'] ?? 0);

// Validar que los campos no estén vacíos
if ($origen === '' || $destino === '' || $fecha_partida === '' || $pasajeros <= 0) {
    echo json_encode(["success" => false, "message" => "Por favor, complete todos los campos antes de confirmar."]);
    exit;
}

// Insertar en la tabla "compras"
$sql = "INSERT INTO compras (origen, destino, fecha_partida, fecha_regreso, pasajeros, precio)
        VALUES (?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssii", $origen, $destino, $fecha_partida, $fecha_regreso, $pasajeros, $precio);

if ($stmt->execute()) {
    echo json_encode(["success" => true, "message" => "Compra registrada correctamente."]);
} else {
    echo json_encode(["success" => false, "message" => "Error al registrar la compra."]);
}

$stmt->close();
$conn->close();
?>
