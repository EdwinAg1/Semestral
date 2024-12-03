<?php
// Incluir archivo de conexión
require 'conexion.php'; // Asegúrate de que el archivo `conexion.php` tenga la conexión a la base de datos

// Iniciar sesión en el servidor
session_start();

// Obtener datos del formulario
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];

// Buscar el usuario en la base de datos
$sql = "SELECT * FROM usuarios WHERE correo = '$correo'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    
    // Verificar contraseña
    if (password_verify($contraseña, $user['contraseña'])) {
        // Guardar información del usuario en la sesión
        $_SESSION['usuario_id'] = $user['id']; // Cambia 'id' según el nombre de la columna
        $_SESSION['usuario_nombre'] = $user['nombre'];
        echo "<script>
                alert('Inicio de sesión exitoso');
                window.location.href = 'Carrito.php'; // Cambia a tu página principal
              </script>";
    } else {
        echo "<script>
                alert('Contraseña incorrecta');
                window.history.back();
              </script>";
    }
} else {
    echo "<script>
            alert('Usuario no encontrado');
            window.history.back();
          </script>";
}

// Cerrar conexión
$conn->close();
?>
