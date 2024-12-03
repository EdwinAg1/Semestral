
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de Juguetes - Inicio</title>
    <link rel="stylesheet" href="Estilos.css">
</head>
<body>
    <header id="main-header">
        <a id="logo-de-header">
            <img src="https://logosnicas.com/wp-content/uploads/2022/08/toys.png" alt="Juguetería">
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
    

    <main>
        <br><br><br><br>
        <section class="texto">
            <h1>Bienvenidos a LoyalToys!</h1>
            <a href="Principal2.php" class="btn">Inicio</a>
            <a href="VideoJuegos.php" class="btn">VideoJuegos</a>
            <a href="JuegosdeMesa.php" class="btn">Juegos de Mesa</a>
            <a href="Figuras.php" class="btn">Figuras</a>
            <a href="Carrito.php" class="btn">Carrito</a>
        </section>
        

        <section class="destacados">
            <h2>Productos Destacados</h2>
            <div class="producto">
                <img class="comic-image" src="https://juegosdigitalespanama.com/files/images/productos/1718746981-marvel-vs-capcom-fighting-collection-arcade-classics-nintendo-switch-pre-orden-0.webp" alt="VideoJuego" class="producto-img">
                <h3>Marvel vs Capcom Fighting Collection: Arcade Classics</h3>
                <p>¡Recién llegado! ¡Revive los grandes clásicos de la colaboración Marvel y Capcom!</p>
                <a href="VideoJuegos.php" class="btn">Revisa nuestro apartado de videojuegos</a>
            </div>
            <div class="producto">
                <img src="https://stevens.com.pa/media/catalog/product/1/0/1000944257_no_color_1_1i6vkbpyj5fplira.jpg?optimize=medium&bg-color=255,255,255&fit=bounds&height=700&width=700&canvas=700:700" alt="Figura" class="producto-img">
                <h3>Transformers 40th Anniversary - Optimus Prime</h3>
                <p>¡Recién llegado! ¡Celebra los 40 años de la franquicia que definió la infancia de muchos con esta espectacular figura del líder de los Autobots!</p>
                <a href="Figuras.php" class="btn">Revisa nuestro apartado de figuras</a>
            </div>
        </section>


        <section class="promociones">
            <h2>Promociones Especiales</h2>
            <div class="promocion">
                <img src="https://titan.vtexassets.com/arquivos/ids/344588-800-auto?v=638072308491070000&width=800&height=auto&aspect=true" alt="JuegoTwister" class="producto-img">
                <h3>¡Twister a mitad de precio!</h3>
                <p>Descuento: 50% - Precio ahora: $12.50</p>
                <a href="JuegosdeMesa.php" class="btn">Revisa nuestro apartado de juegos de mesa</a>
            </div>
            <div class="promocion">
                <img src="https://m.media-amazon.com/images/I/81ipTf2eQNL._AC_UF1000,1000_QL80_.jpg" alt="WWE" class="producto-img">
                <h3>¡WWE 2K24 - 40 años de WrestleMania con 20% de descuento!</h3>
                <p>Precio ahora: $47.99</p>
                <a href="VideoJuegos.php" class="btn">Revisa nuestro apartado de videojuegos</a>
            </div>
        </section>
    </main>

    <footer>
        <p>Contacto: @LoyalToys | Teléfono: 62870905</p>
    </footer>
</body>
</html>
