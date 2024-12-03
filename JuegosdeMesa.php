
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juegos de Mesa</title>
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
        <div> <img class="img-derecha" src="https://cdn-icons-png.flaticon.com/512/3430/3430778.png" height="150" width="150"></div>
        
        <div class="comics-container">
            <div class="comic">
                <img class="comic-image" src="https://titan.vtexassets.com/arquivos/ids/344588-800-auto?v=638072308491070000&width=800&height=auto&aspect=true" height="300" width="200" alt="Twister">
                <h3>Hasbro Twister</h3>
                <p>10 unidades disponibles</p>
                <span>Precio: $24.99</span>
                <br>
                <span><del>Precio anterior: $35.99</del></span>
                <br>
                <button button class="add-to-cart" <?php if (!isset($_SESSION['usuario_id'])) echo 'disabled'; ?>  data-name="Hasbro Twister" data-price="24.99" data-stock="10">Añadir al carrito</button>
            </div>
            <div class="comic">
                <img class="comic-image" src="https://stevens.com.pa/media/catalog/product/1/0/1000876619_no_color_2_p9q2gvjyembazzsi.jpg?optimize=medium&bg-color=255,255,255&fit=bounds&height=700&width=700&canvas=700:700" height="300" width="200" alt="Jumanji">
                <h3>Jumanji - El Juego</h3>
                <p>10 unidades disponibles</p>
                <span>Precio: $19.99</span>
                <br>
                <button button class="add-to-cart" <?php if (!isset($_SESSION['usuario_id'])) echo 'disabled'; ?>  data-name="Jumanji Juego" data-price="19.99" data-stock="10">Añadir al carrito</button>
            </div>
            <div class="comic">
                <img class="comic-image"  src="https://titan.vtexassets.com/arquivos/ids/158353-800-auto?v=637318066267270000&width=800&height=auto&aspect=true" height="300" width="200" alt="Uno">
                <h3>Juego de Cartas UNO Clásico</h3>
                <p>25 unidades disponibles</p>
                <span>Precio: $5.99</span>
                <br>
                <button button class="add-to-cart" <?php if (!isset($_SESSION['usuario_id'])) echo 'disabled'; ?>  data-name="Uno Clásico" data-price="5.99" data-stock="25">Añadir al carrito</button>
            </div>
            <div class="comic">
                <img class="comic-image" src="https://stevens.com.pa/media/catalog/product/1/0/1000927320_no_color_1_mjvfyctpof7fqkua.jpg?optimize=medium&bg-color=255,255,255&fit=bounds&height=700&width=700&canvas=700:700" height="300" width="200" alt="Domino">
                <h3>Domino Blanco</h3>
                <p>10 unidades disponibles</p>
                <span>Precio: $5.00</span>
                <br>
                <button button class="add-to-cart" <?php if (!isset($_SESSION['usuario_id'])) echo 'disabled'; ?>  data-name="Habro Twister" data-price="5.00" data-stock="10">Añadir al carrito</button>
            </div>
            <div class="comic">
                <img class="comic-image"  src="https://titan.vtexassets.com/arquivos/ids/158384-800-auto?v=637318066403130000&width=800&height=auto&aspect=true" height="300" width="200" alt="Monopoly">
                <h3>Hasbro Monopoly Clásico</h3>
                <p>15 unidades disponibles</p>
                <span>Precio: $14.99</span>
                <br>
                <span><del>Precio anterior: $29.99</del></span>
                <br>
                <button button class="add-to-cart" <?php if (!isset($_SESSION['usuario_id'])) echo 'disabled'; ?>  data-name="Hasbro Monopoly Clásico" data-price="14.99" data-stock="15">Añadir al carrito</button>
            </div>
            <div class="comic">
                <img class="comic-image"  src="https://stevens.com.pa/media/catalog/product/1/0/1000929042_no_color_1_bq0mfzgjujhtyx69.jpg?optimize=medium&bg-color=255,255,255&fit=bounds&height=700&width=700&canvas=700:700" height="300" width="200" alt="Pokemon">
                <h3>Pokémon Trading Card Game Deluxe Battle Deck</h3>
                <p>10 unidades disponible</p>
                <span>Precio: $24.99</span>
                <br>
                <span><del>Precio anterior: $50.00</del></span>
                <button button class="add-to-cart" <?php if (!isset($_SESSION['usuario_id'])) echo 'disabled'; ?> data-name="Pokémon Trading Card" data-price="24.99" data-stock="10">Añadir al carrito</button>
            </div>
        </div>
    </section>

    <footer>
        <p>Contacto: @LoyalToys | Teléfono: 62870905</p>
        <p>#</p>
    </footer>
</body>

</html>