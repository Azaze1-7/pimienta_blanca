<?php
$servername = "pimientablanca.infinityfree.me"; // Ej: sql108.epizy.com
$username = "if0_41412494";   // Ej: epiz_1234567
$password = "66pC7C23CeA";    // Tu contraseña
$dbname = "if0_41412494_pimienta"; // Ej: epiz_1234567_pimienta

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Comprobar la conexión
if ($conn->connect_error) {
    die("La conexión a las sombras ha fallado: " . $conn->connect_error);
}
?>
