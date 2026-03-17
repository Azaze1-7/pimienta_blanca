<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escapar caracteres para seguridad básica
    $nombre = $conn->real_escape_string($_POST['nombre']);
    $mensaje = $conn->real_escape_string($_POST['mensaje']);

    $sql = "INSERT INTO comentarios (nombre, mensaje) VALUES ('$nombre', '$mensaje')";

    if ($conn->query($sql) === TRUE) {
        // Si se guarda, lo regresamos a la página con un mensaje de éxito en la URL
        header("Location: index.html?status=exito#comentarios");
        exit();
    } else {
        echo "Error en el ritual: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>
