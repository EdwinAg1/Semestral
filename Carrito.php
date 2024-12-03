<?php
session_start();
if (!isset($_SESSION['usuario_id'])) {
    echo "<script>
            alert('Debes iniciar sesión para acceder a esta página');
            window.location.href = 'login.html'; // Redirige al inicio de sesión
          </script>";
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras</title>
    <script src="Carrito.js" defer></script>
    <link rel="stylesheet" href="EstiloCarrito.css">
</head>
<body>

        <header id="main-header">
            <a id="logo de header">
                <img src="https://logosnicas.com/wp-content/uploads/2022/08/toys.png" alt="Jugueteria" height="100" width="200">
            </a>
            
            <nav>
            <a href="Principal2.php">Inicio</a>
            <a href="VideoJuegos.php">VideoJuegos</a>
            <a href="Figuras.php">Figuras</a>
            <a href="JuegosdeMesa.php">Juegos de Mesa</a>
            <a href="Carrito.php">Carrito 🛒</a>
        </nav>
        

    </header>
    <br><br><br><br><br><br><br><br><br><br>
    <h1>Tu Carrito de Compras</h1>
    <main>
        <table id="cart-table">
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Total</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
        <h2>Total: $<span id="total-price">0.00</span></h2>
        <button id="checkout-button">Finalizar Compra</button>
    </main>
</body>
</html>
