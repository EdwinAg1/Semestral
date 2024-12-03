<?php
session_start();
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="EstiloRegistro.css">
</head>
<body>
    <header id="main-header">
        <a id="logo de header">
            <img src="https://logosnicas.com/wp-content/uploads/2022/08/toys.png" alt="Jugueteria" height="100" width="200">
        </a>
        
        <nav>
            <a href="Principal2.php">Inicio</a>
            <a href="VideoJuegos.php">VideoJuegos</a>
            <a href="Peluches.php">Peluches</a>
            <a href="JuegosdeMesa.php">Juegos de Mesa</a>
            <a href="Registro.php">Registro</a>
            <a href="Carrito.php">Carrito</a>
        </nav>
    
    </header>
    <section>
        <h2 style="text-align: center;">Registro de Cuenta</h2>
        <form class="registro-form" action="Formulario.php" method="POST" style="text-align: center">
            <label for="nombre"></label>
            <input type="text" id="nombre" name="nombre" placeholder="Nombre" required><br><br>

            <label for="apellido"></label>
            <input type="text" id="apellido" name="apellido" placeholder="Apellido" required><br><br>

            <label for="cedula"></label>
            <input type="text" id="cedula" name="cedula" placeholder="Cedula" required><br><br>

            <label for="celular"></label>
            <input type="number" id="celular" name="celular" placeholder="Celular" required><br><br>

            <label for="correo"></label>
            <input type="email" name="correo" id="correo" placeholder="Correo electrónico" required><br><br>

            <label for="contraseña"></label>
            <input type="password" id="contraseña" name="contraseña" 
                   placeholder="Contraseña (mínimo 8 caracteres)" 
                   pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                   title="Debe contener al menos una letra mayúscula, una minúscula, un número y mínimo 8 caracteres" 
                   required><br><br>

            <!-- Token CSRF -->
            <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">

            <input type="submit" value="Enviar">
        </form>
    </section>
</body>
</html>
