<?php
// insertarcontacto.php
include '../config/database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $mensaje = $_POST['mensaje'];

    // Preparar y ejecutar la inserción de datos
    $stmt = $conn->prepare("INSERT INTO contactos (nombre, telefono, mensaje) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nombre, $telefono, $mensaje);

    if ($stmt->execute()) {
        echo "Datos guardados exitosamente.";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Cerrar la declaración y la conexión
    $stmt->close();
    $conn->close();
}
?>