<?php
require 'conexion.php';
session_start(); // ⬅️ importante para usar $_SESSION

header('Content-Type: application/json');

// Verifica si se enviaron datos por POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tipoViaje = $_POST['trip_type'] ?? '';
    $origen = $_POST['origin'] ?? '';
    $destino = $_POST['destination'] ?? '';
    $partida = $_POST['departure_date'] ?? '';
    $regreso = $_POST['return_date'] ?? NULL;
    $pasajeros = $_POST['passengers'] ?? 1;

    // Validación básica
    if (empty($origen) || empty($destino) || empty($partida) || empty($pasajeros)) {
        echo json_encode([
            'success' => false,
            'message' => '⚠️ Faltan campos obligatorios.'
        ]);
        exit;
    }

    // Preparar la consulta
    $stmt = $conn->prepare("INSERT INTO reservas (origen, destino, fecha_partida, fecha_regreso, pasajeros)
                            VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssi", $origen, $destino, $partida, $regreso, $pasajeros);

    if ($stmt->execute()) {
        // Guardar datos en la sesión
        $_SESSION['reserva'] = [
            'origen' => $origen,
            'destino' => $destino,
            'fecha_partida' => $partida,
            'fecha_regreso' => $regreso,
            'pasajeros' => $pasajeros
        ];

        echo json_encode([
            'success' => true,
            'message' => '✅ Reserva guardada con éxito.'
        ]);
    } else {
        echo json_encode([
            'success' => false,
            'message' => '❌ Error al guardar la reserva: ' . $stmt->error
        ]);
    }

    $stmt->close();
    $conn->close();
} else {
    echo json_encode([
        'success' => false,
        'message' => '❌ Acceso inválido.'
    ]);
}
?>
