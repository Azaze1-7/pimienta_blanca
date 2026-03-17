<?php
$servername = "TU_MYSQL_HOST_NAME"; // Ej: sql108.epizy.com
$username = "TU_MYSQL_USER_NAME";   // Ej: epiz_1234567
$password = "TU_MYSQL_PASSWORD";    // Tu contraseña
$dbname = "TU_MYSQL_DATABASE_NAME"; // Ej: epiz_1234567_pimienta

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Comprobar la conexión
if ($conn->connect_error) {
    die("La conexión a las sombras ha fallado: " . $conn->connect_error);
}
?>
