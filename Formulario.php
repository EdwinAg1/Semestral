<?php
// Iniciar la sesión para manejar el token CSRF
session_start();
require 'conexion.php';

// Verificar si el token CSRF se ha enviado y si es válido
if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
    die("CSRF token inválido");
}

// Obtener y validar datos del formulario
$nombre = filter_var(trim($_POST['nombre']), FILTER_SANITIZE_STRING);
$apellido = filter_var(trim($_POST['apellido']), FILTER_SANITIZE_STRING);
$cedula = filter_var(trim($_POST['cedula']), FILTER_SANITIZE_STRING);
$celular = filter_var(trim($_POST['celular']), FILTER_SANITIZE_NUMBER_INT);
$correo = filter_var(trim($_POST['correo']), FILTER_SANITIZE_EMAIL);

// Validar si el correo electrónico tiene el formato correcto
if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
    die("Correo electrónico inválido");
}

// Hash de la contraseña
$contraseña = password_hash($_POST['contraseña'], PASSWORD_BCRYPT);

// Insertar datos en la base de datos de forma segura
$stmt = $conn->prepare("INSERT INTO usuarios (nombre, apellido, cedula, celular, correo, contraseña) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $nombre, $apellido, $cedula, $celular, $correo, $contraseña);

// Ejecutar la sentencia y manejar el resultado
if ($stmt->execute()) {
    // Redirigir si el registro es exitoso
    echo "<script>
            alert('Registro exitoso');
            window.location.href = 'Principal2.php'; // Cambia por tu página principal
          </script>";
} else {
    // Mostrar errores en caso de fallo
    echo "<script>
            alert('Error al registrar: {$stmt->error}');
            window.history.back(); // Volver a la página anterior
          </script>";
}

// Cerrar la sentencia y la conexión
$stmt->close();
$conn->close();
?>

