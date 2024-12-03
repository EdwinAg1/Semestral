<?php
session_start();
session_destroy(); // Cierra la sesión actual
echo "<script>
        alert('Sesión cerrada exitosamente');
        window.location.href = 'login.html'; // Redirige al inicio de sesión
      </script>";
?>
