<?php
require 'conexion.php';
session_start();
header('Content-Type: application/json');

$paqueteId = $_POST['paqueteId'] ?? '';
$nombre = $_POST['nombre'] ?? '';
$precio = $_POST['precio'] ?? '';

if(empty($paqueteId) || empty($nombre) || empty($precio)){
    echo json_encode(['success'=>false,'message'=>'⚠️ Faltan datos del paquete.']);
    exit;
}

// Aquí puedes guardar la reserva en la base de datos
$stmt = $conn->prepare("INSERT INTO reservas_paquetes (paquete_id, nombre, precio) VALUES (?, ?, ?)");
$stmt->bind_param("isi", $paqueteId, $nombre, $precio);

if($stmt->execute()){
    $_SESSION['reserva_paquete'] = ['id'=>$paqueteId,'nombre'=>$nombre,'precio'=>$precio];
    echo json_encode(['success'=>true,'message'=>"✅ Paquete $nombre reservado por ARS $precio"]);
}else{
    echo json_encode(['success'=>false,'message'=>"❌ Error: ".$stmt->error]);
}

$stmt->close();
$conn->close();
?>
