

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Figuras</title>
    <link rel="stylesheet" href="Estilos.css">
    <script src="Carrito.js" defer></script>
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
            <a href="Registro.php">Registro</a>
            <?php
    session_start();
    if (isset($_SESSION['usuario_id'])) {
        echo '<a href="logout.php">Cerrar Sesión</a>';
    } else {
        echo '<a href="Login.html">Iniciar Sesión</a>';
    }
    ?>
            <a href="Carrito.php">Carrito 🛒</a>
        </nav>
        
    </header>



    <section>
        <br><br><br><br><br><br><br><br>
        <div><img class="img-derecha" src="https://cdn-icons-png.flaticon.com/512/6967/6967630.png" height="150" width="150"></div>
        
        <div class="comics-container">
            <div class="comic">
                <img class="comic-image"  src="https://titan.vtexassets.com/arquivos/ids/353669-800-auto?v=638272071641330000&width=800&height=auto&aspect=true" height="300" width="200" alt="Barbie">
                <h3>Figura Mi Primera Barbie con Accesorios</h3>
                <p>20 unidades disponibles</p>
                <span>Precio: $8.99</span>
                <br>
                <span><del>Precio anterior: $24.99</del></span>
                <br>
                <button class="add-to-cart" <?php if (!isset($_SESSION['usuario_id'])) echo 'disabled'; ?>  data-name="Mi Primera Barbie con Accesorios" data-price="8.99" data-stock="20">Añadir a carrito</button>
            </div>
            <div class="comic">
                <img class="comic-image"  src="https://titan.vtexassets.com/arquivos/ids/336989-800-auto?v=637951487165970000&width=800&height=auto&aspect=true" height="300" width="200" alt="DragonBall">
                <h3>Dragon Ball Z - Super Saiyan 4 Goku 12"</h3>
                <p>4 unidades disponibles</p>
                <span>Precio: $20.00</span>
                <br>
                <span><del>Precio anterior: $30.00</del></span>
                <br>
                <button class="add-to-cart" <?php if (!isset($_SESSION['usuario_id'])) echo 'disabled'; ?>  data-name="Dragon Ball Z - Goku 4" data-price="20.00" data-stock="4">Añadir a carrito</button>
            </div>
            <div class="comic">
                <img class="comic-image"  src="https://uvstore-pa.com/cdn/shop/files/BatmanvsSuperman_opened_packaged__77035.jpg?v=1731600512&width=400" height="300" width="200" alt="BatmanSuperman">
                <h3>DC Multiverse - Batman vs. Superman</h3>
                <p>3 unidades disponibles</p>
                <span>Precio: $75.00</span>
                <br>
                <span><del>Precio anterior: $100.00</del></span>
                <br>
                <button class="add-to-cart" <?php if (!isset($_SESSION['usuario_id'])) echo 'disabled'; ?>  data-name="DC Multiverse - Batman vs. Superman" data-price="75.00" data-stock="3">Añadir a carrito</button>
            </div>
            <div class="comic">
                <img class="comic-image"  src="https://titan.vtexassets.com/arquivos/ids/358119-800-auto?v=638365338074370000&width=800&height=auto&aspect=true" height="300" width="200" alt="Disneyprincess">
                <h3>Mini Princesas Disney 9cm</h3>
                <p>14 unidades disponible</p>
                <span>Precio: $6.99</span>
                <br>
                <span><del>Precio anterior: $9.99</del></span>
                <br>
                <button class="add-to-cart" <?php if (!isset($_SESSION['usuario_id'])) echo 'disabled'; ?>  data-name="Mini Princesas Disney" data-price="6.99" data-stock="14">Añadir a carrito</button>
            </div>
            <div class="comic">
                <img class="comic-image"  src="https://stevens.com.pa/media/catalog/product/1/0/1000944257_no_color_1_1i6vkbpyj5fplira.jpg?optimize=medium&bg-color=255,255,255&fit=bounds&height=700&width=700&canvas=700:700" height="300" width="200" alt="Transformers">
                <h3>Transformers - Optimus Prime</h3>
                <p>10 unidades disponibles</p>
                <span>Precio: $29.99</span>
                <br>
                <span><del>Precio anterior: $35.99</del></span>
                <br>
                <button button class="add-to-cart" <?php if (!isset($_SESSION['usuario_id'])) echo 'disabled'; ?>  data-name="Transformers Optimus Prime" data-price="29.99" data-stock="10">Añadir a carrito</button>
            </div>
            <div class="comic">
                <img class="comic-image"  src="https://titan.vtexassets.com/arquivos/ids/159561-800-auto?v=637318119959500000&width=800&height=auto&aspect=true" height="300" width="200" alt="Setcarrito">
                <h3>Set de Coche con Muñeca y accesorios</h3>
                <p>20 unidades disponibles</p>
                <span>Precio: $44.99</span>
                <br>
                <span><del>Precio anterior: $49.99</del></span>
                <br>
                <button button class="add-to-cart" <?php if (!isset($_SESSION['usuario_id'])) echo 'disabled'; ?>  data-name="Coche con Muñeca" data-price="44.99" data-stock="20">Añadir a carrito</button>
            </div>
        </div>
    </section>

    <footer>
        <p>Contacto: @LoyalToys | Teléfono: 62870905</p>
        <p></p>
    </footer>
</body>

</html>