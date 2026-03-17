<?php
// Conectamos a la base de datos
include 'conexion.php';

// Obtenemos los comentarios ordenados del más nuevo al más viejo
$sql = "SELECT id, nombre, mensaje, fecha FROM comentarios ORDER BY id DESC";
$resultado = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Sombras | Admin Pimienta Blanca</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,600;1,600&family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        .admin-header { background-color: var(--p-dark); padding: 3rem 0; text-align: center; border-bottom: 2px solid var(--p-accent); }
        .admin-title { font-size: 2.5rem; color: #fff; }
        .dashboard { padding: 4rem 20px; max-width: 900px; margin: 0 auto; min-height: 60vh; }
        .comentario-tarjeta { background-color: var(--bg-alt); border-left: 4px solid var(--p-accent); padding: 20px; margin-bottom: 20px; border-radius: 4px; box-shadow: 0 5px 15px rgba(0,0,0,0.5); }
        .comentario-header { display: flex; justify-content: space-between; margin-bottom: 10px; font-size: 0.9rem; color: var(--text-muted); }
        .comentario-nombre { color: #fff; font-weight: bold; font-size: 1.1rem; }
    </style>
</head>
<body>

    <div class="admin-header">
        <h1 class="admin-title">Panel Gestor - Pimienta Blanca</h1>
        <p>Acceso exclusivo a la base de datos MySQL.</p>
        <a href="index.html" style="color: var(--p-accent); text-decoration: none; font-size: 0.9rem;">&larr; Volver a la tienda</a>
    </div>

    <main class="dashboard">
        <h2>Mensajes Recibidos</h2>
        
        <div id="contenedor-comentarios">
            <?php
            if ($resultado->num_rows > 0) {
                // Generar el HTML para cada fila (comentario) de la base de datos
                while($fila = $resultado->fetch_assoc()) {
                    echo "<div class='comentario-tarjeta'>";
                    echo "  <div class='comentario-header'>";
                    echo "      <span class='comentario-nombre'>" . htmlspecialchars($fila["nombre"]) . "</span>";
                    echo "      <span>" . $fila["fecha"] . "</span>";
                    echo "  </div>";
                    echo "  <p>" . nl2br(htmlspecialchars($fila["mensaje"])) . "</p>";
                    echo "</div>";
                }
            } else {
                echo "<p style='color: var(--text-muted); text-align: center; padding: 2rem;'>El buzón está vacío por ahora.</p>";
            }
            $conn->close();
            ?>
        </div>
    </main>
</body>
</html>
