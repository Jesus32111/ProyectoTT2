<?php
require_once __DIR__ . '/../config/database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger y sanitizar los datos del formulario
    $nombre = htmlspecialchars(strip_tags(trim($_POST["nombre"])));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $telefono = htmlspecialchars(strip_tags(trim($_POST["telefono"])));
    $mensaje = htmlspecialchars(strip_tags(trim($_POST["mensaje"])));

    // Validar los datos
    if (empty($nombre) || empty($email) || empty($telefono) || empty($mensaje) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Redirigir con error si los campos obligatorios están vacíos o el email no es válido
        header("Location: index.php?page=contact&status=error");
        exit;
    }

    // Insertar los datos en la base de datos
    $conn = get_db_connection();
    $stmt = $conn->prepare("INSERT INTO citas (nombre, email, telefono, mensaje) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $nombre, $email, $telefono, $mensaje);

    if ($stmt->execute()) {
        // Redirigir con éxito
        header("Location: index.php?page=contact&status=success");
    } else {
        // Redirigir con error de base de datos
        header("Location: index.php?page=contact&status=error");
    }

    $stmt->close();
    $conn->close();
} else {
    // Si no es un método POST, redirigir al inicio
    header("Location: index.php");
}
exit;
?>
