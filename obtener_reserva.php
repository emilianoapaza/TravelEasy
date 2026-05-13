<?php
require 'conexion.php';
header('Content-Type: application/json');

// Aquí puedes obtener la reserva de la base de datos, por ejemplo, la última reserva o la del usuario logueado
// Para ejemplo simple: obtener la última reserva insertada

$result = $conn->query("SELECT origen, destino, fecha_partida, fecha_regreso, pasajeros FROM reservas ORDER BY id DESC LIMIT 1");

if ($result && $row = $result->fetch_assoc()) {
    echo json_encode([
        'success' => true,
        'reserva' => $row
    ]);
} else {
    echo json_encode([
        'success' => false,
        'message' => 'No hay reservas registradas.'
    ]);
}

$conn->close();
