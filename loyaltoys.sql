-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-12-2024 a las 06:16:09
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `loyaltoys`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `figuras`
--

CREATE TABLE `figuras` (
  `id` varchar(10) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `precio` float NOT NULL,
  `unidades` int(10) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `figuras`
--

INSERT INTO `figuras` (`id`, `nombre`, `precio`, `unidades`, `imagen`) VALUES
('F1', 'Figura Mi Primera Barbie con Accesorios', 8.99, 20, 'https://titan.vtexassets.com/arquivos/ids/353669-800-auto?v=638272071641330000&width=800&height=auto&aspect=true'),
('F2', 'Dragon Ball Z - Super Saiyan 4 Goku 12\"', 20, 4, 'https://titan.vtexassets.com/arquivos/ids/336989-800-auto?v=637951487165970000&width=800&height=auto&aspect=true'),
('F3', 'DC Multiverse - Batman vs. Superman', 75, 3, 'https://uvstore-pa.com/cdn/shop/files/BatmanvsSuperman_opened_packaged__77035.jpg?v=1731600512&width=400'),
('F4', 'Mini Princesas Disney 9cm', 6.99, 14, 'https://titan.vtexassets.com/arquivos/ids/358119-800-auto?v=638365338074370000&width=800&height=auto&aspect=true'),
('F5', 'Transformers - Optimus Prime', 29.99, 10, 'https://stevens.com.pa/media/catalog/product/1/0/1000944257_no_color_1_1i6vkbpyj5fplira.jpg?optimize=medium&bg-color=255,255,255&fit=bounds&height=700&width=700&canvas=700:700'),
('F6', 'Set de Coche con Muñeca y accesorios', 44.99, 20, 'https://titan.vtexassets.com/arquivos/ids/159561-800-auto?v=637318119959500000&width=800&height=auto&aspect=true');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juegosdemesa`
--

CREATE TABLE `juegosdemesa` (
  `id` varchar(10) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `precio` float NOT NULL,
  `unidades` int(10) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `juegosdemesa`
--

INSERT INTO `juegosdemesa` (`id`, `nombre`, `precio`, `unidades`, `imagen`) VALUES
('M1', 'Hasbro Twister', 24.99, 10, 'https://titan.vtexassets.com/arquivos/ids/344588-800-auto?v=638072308491070000&width=800&height=auto&aspect=true'),
('M2', 'Jumanji - El juego', 19.99, 10, 'https://stevens.com.pa/media/catalog/product/1/0/1000876619_no_color_2_p9q2gvjyembazzsi.jpg?optimize=medium&bg-color=255,255,255&fit=bounds&height=700&width=700&canvas=700:700'),
('M3', 'Juego de Cartas UNO Clásico', 5.99, 25, 'https://titan.vtexassets.com/arquivos/ids/158384-800-auto?v=637318066403130000&width=800&height=auto&aspect=true'),
('M4', 'Domino Blanco', 5, 10, 'https://stevens.com.pa/media/catalog/product/1/0/1000927320_no_color_1_mjvfyctpof7fqkua.jpg?optimize=medium&bg-color=255,255,255&fit=bounds&height=700&width=700&canvas=700:700'),
('M5', 'Hasbro Monopoly Clásico', 14.99, 15, 'https://titan.vtexassets.com/arquivos/ids/158384-800-auto?v=637318066403130000&width=800&height=auto&aspect=true'),
('M6', 'Pokémon Trading Card Game Deluxe Battle Deck', 24.99, 10, 'https://stevens.com.pa/media/catalog/product/1/0/1000929042_no_color_1_bq0mfzgjujhtyx69.jpg?optimize=medium&bg-color=255,255,255&fit=bounds&height=700&width=700&canvas=700:700');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `cedula` varchar(20) NOT NULL,
  `celular` varchar(15) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `contraseña` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `cedula`, `celular`, `correo`, `contraseña`) VALUES
(18, 'Edgard', 'Cardenas', '8-1014-481', '8888', 'edgard@gmail.com', '$2y$10$x2JE6WVsaYZ1XRNlAGvpqOCIV8Ys9gzCezRQWFchObgAY8V4gKwEG');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videojuegos`
--

CREATE TABLE `videojuegos` (
  `id` varchar(10) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `precio` float NOT NULL,
  `unidades` int(10) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `videojuegos`
--

INSERT INTO `videojuegos` (`id`, `nombre`, `precio`, `unidades`, `imagen`) VALUES
('V1', 'WWE 2K24 40 Years of WrestleMania Edition', 59.99, 3, 'https://m.media-amazon.com/images/I/81ipTf2eQNL._AC_UF1000,1000_QL80_.jpg'),
('V2', 'Consola PlayStation 5 - Edición Limitada de Marvel\'s Spider-Man 2', 699.99, 1, 'https://m.media-amazon.com/images/I/7124MgitakL._SX522_.jpg'),
('V3', 'Consola Nintendo Switch OLED + Mario Kart 8 Deluxe', 369.99, 2, 'https://i5.walmartimages.com.mx/samsmx/images/product-images/img_large/981001556l.jpg?odnHeight=612&odnWidth=612&odnBg=FFFFFF'),
('V4', 'Marvel vs Capcom Fighting Collection: Arcade Classics Nintendo Switch', 41.99, 5, 'https://juegosdigitalespanama.com/files/images/productos/1718746981-marvel-vs-capcom-fighting-collection-arcade-classics-nintendo-switch-pre-orden-0.webp'),
('V5', 'Consola XBox Series S 512 GB Color Blanco', 399.99, 10, 'https://unicapanama.com/cdn/shop/files/ConsolaXboxSeriesS512GBBlanco_2000x.png?v=1718376946'),
('V6', 'Pack Joycon Nintendo Switch Rojo/Azul', 85.99, 6, 'https://back.panafoto.com/media/catalog/product/cache/22adb41f3f66ba957b3b3b7b0df44fe6/1/3/134240-009.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `figuras`
--
ALTER TABLE `figuras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `juegosdemesa`
--
ALTER TABLE `juegosdemesa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cedula` (`cedula`),
  ADD UNIQUE KEY `correo` (`correo`);

--
-- Indices de la tabla `videojuegos`
--
ALTER TABLE `videojuegos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
