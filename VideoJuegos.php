

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videojuegos</title>
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
        <div> <img class="img-derecha" src="https://images.vexels.com/media/users/3/215363/isolated/preview/9b4258c31eeb2c4c5f4ea0a7119c73fb-joystick-para-juegos-joystick-negro.png" height="150" width="150"></div>
        <div class="comics-container">
            <div class="comic">
                <img class="comic-image"  src="https://m.media-amazon.com/images/I/81ipTf2eQNL._AC_UF1000,1000_QL80_.jpg" height="300" width="200" alt="WWE2K24">
                <h3>WWE 2K24 40 Years of WrestleMania Edition</h3>
                <p>3 unidades disponibles</p>
                <span>Precio: $59.99</span>
                <br><br>
                <button class="add-to-cart" <?php if (!isset($_SESSION['usuario_id'])) echo 'disabled'; ?>  data-name="WWE 2K24" data-price="59.99" data-stock="3">Añadir a carrito</button>

            </div>
            <div class="comic">
                <img class="comic-image"  src="https://m.media-amazon.com/images/I/7124MgitakL._SX522_.jpg" height="300" width="200" alt="PS5Spider-Man">
                <h3>Consola PlayStation 5 - Edición Limitada de Marvel's Spider-Man 2</h3>
                <p>1 unidad disponible</p>
                <span>Precio: $699.99</span>
                <br><br>
                <button class="add-to-cart" <?php if (!isset($_SESSION['usuario_id'])) echo 'disabled'; ?>  data-name="PlayStation 5 Marvel's Spider-Man Edition" data-price="699.99" data-stock="1">Añadir a Carrito</button>
            </div>
            <div class="comic">
                <img class="comic-image"  src="https://i5.walmartimages.com.mx/samsmx/images/product-images/img_large/981001556l.jpg?odnHeight=612&odnWidth=612&odnBg=FFFFFF" height="300" width="200" alt="DepTruth">
                <h3>Consola Nintendo Switch OLED + Mario Kart 8 Deluxe</h3>
                <p>2 unidades disponibles</p>
                <span>Precio: $369.99</span>
                <br><br>
                <button class="add-to-cart" <?php if (!isset($_SESSION['usuario_id'])) echo 'disabled'; ?>  data-name="Nintendo Switch + Mario Kart 8 Deluxe" data-price="369.99" data-stock="2">Añadir a carrito</button>
            </div>
            <div class="comic">
                <img class="comic-image"  src="https://juegosdigitalespanama.com/files/images/productos/1718746981-marvel-vs-capcom-fighting-collection-arcade-classics-nintendo-switch-pre-orden-0.webp" height="300" width="200" alt="MarvelCapcom">
                <h3>Marvel vs Capcom Fighting Collection: Arcade Classics Nintendo Switch</h3>
                <p>5 unidades disponible</p>
                <span>Precio: $41.99</span>
                <br><br>
                <button class="add-to-cart" <?php if (!isset($_SESSION['usuario_id'])) echo 'disabled'; ?>  data-name="Marvel vs Capcom Fighting Collection Switch" data-price="41.99" data-stock="5">Añadir a carrito</button>
            </div>
            <div class="comic">
                <img class="comic-image"  src="https://unicapanama.com/cdn/shop/files/ConsolaXboxSeriesS512GBBlanco_2000x.png?v=1718376946" height="300" width="200" alt="Transformers">
                <h3>Consola XBox Series S 512 GB Color Blanco</h3>
                <p>10 unidades disponibles</p>
                <span>Precio: $399.99</span>
                <br><br>
                <button class="add-to-cart" <?php if (!isset($_SESSION['usuario_id'])) echo 'disabled'; ?>  data-name="Xbox Series S Blanco" data-price="399.99" data-stock="10">Añadir a carrito</button>
            </div>
            <div class="comic">
                <img class="comic-image"  src="https://back.panafoto.com/media/catalog/product/cache/22adb41f3f66ba957b3b3b7b0df44fe6/1/3/134240-009.jpg" height="300" width="200" alt="Scorched">
                <h3>Pack Joycon Nintendo Switch Rojo/Azul</h3>
                <p>6 unidades disponibles</p>
                <span>Precio: $85.99</span>
                <br><br>
                <button class="add-to-cart" <?php if (!isset($_SESSION['usuario_id'])) echo 'disabled'; ?>  data-name="Joycons Switch" data-price="85.99" data-stock="6">Añadir a carrito</button>
            </div>
        </div>
    </section>

    <footer>
        <p>Contacto: @LoyalToys | Teléfono: 62870905</p>
        <p></p>
    </footer>
    <script src="Carrito.js"></script>
</body>

</html>