<?php
// Configuración de conexión a la base de datos
$servidor = "localhost"; // Cambia si es necesario
$usuario = "root"; // Usuario de phpMyAdmin
$clave = ""; // Contraseña, dejar vacío si no se configuró
$base_datos = "loyaltoys"; // Nombre de la base de datos

// Crear la conexión
$conn = new mysqli($servidor, $usuario, $clave, $base_datos);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
