-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-09-2022 a las 19:00:37
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_tienda_natura`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `nombre`) VALUES
(0, 'masculino'),
(1, 'femenino'),
(3, 'perfumeria'),
(4, 'cosmetica capilar'),
(5, 'maquillaje'),
(6, 'cuidados diarios');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `precio` float NOT NULL,
  `descripcion` text NOT NULL,
  `id_categoria_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `nombre`, `precio`, `descripcion`, `id_categoria_fk`) VALUES
(1, 'kaiak aventura', 4500, 'Salída: pimienta rosa, bergamota, mandarina, pomelo,\r\nnotas verdes, notas ozónicas.\r\nCuerpo: jazmín, rosa, peonia, muguet, lírio.\r\nFondo: musk, cedro, sándalo, ámbar.', 3),
(2, 'kaiak aventura-masculino', 6750, 'Intensidad: leve.\r\nClasificación: día a día\r\nIngredientes destacados: notas acuosas, mandarina, musk.', 3),
(3, 'Kit Repuestos Lumina Oleosos', 2336, 'para cabellos oleosos', 4),
(4, 'Esencia perfume para el cabello Lumina - 30 ml', 1751, 'Beneficios\r\n\r\nPerfuma tu cabello.\r\nNeutraliza malos olores.\r\nDa brillo inmediato.\r\nEfecto antifrizz\r\n \r\n\r\nCamino olfativo:\r\n\r\nAmaderado, moderado, cedro, salvia, sándalo.', 4),
(5, 'Lápiz para Ojos Natura Faces', 1500, 'El Lápiz para Ojos Natura Faces posee textura\r\nsuave para un trazo preciso y uniforme. Contá con\r\nun color intenso desde la primera aplicación.', 5),
(6, 'Multi Máscara Tint a Prueba de Agua Natura Faces', 2035, 'Pestañas a prueba de agua, sudor, calor y humedad\r\n\r\nCon efecto de alargamiento instantáneo, súper curvatura\r\nde las pestañas y color ultra negro, la Multi Máscara\r\nTint a Prueba de Agua Natura Faces seca rápido\r\ny garantiza pestañas increíbles por hasta 24 horas.', 5),
(7, 'Natura Homem Cor.agio', 1077, 'Celebra todas las maneras de ser hombre\r\n\r\nNatura Homem Cor.Agio es para hombres que buscan\r\nel valor de actuar con el corazón. Un perfume para seducir\r\ny ser seducido. Inspirado en el escalofrío en la piel de las\r\nnotas metálicas de las especias frías y la calidez\r\nde la madera de copaíba y cumaru, ingredientes\r\nde la biodiversidad brasileña.', 0),
(8, 'Shampoo Anticaspa Natura Homem', 1130, 'Natura Homem es una línea completa de perfumería y cuidados personales para que cada hombre se cuide a su manera. Celebrá todas las maneras de ser hombre.\r\n\r\nEl Shampoo Anticaspa Natura Homem no reseca\r\ny deja el cabello hidratado y saludable.', 0),
(9, 'Bálsamo Post Barba Natura Homem', 1170, 'El Bálsamo Post Barba Natura Homem calma la piel debido\r\nal extracto de manzanilla en su composición. Con rápida\r\nabsorción, ofrece un aspecto de piel suave después de la\r\nafeitada. No posee alcohol en la fórmula.', 6);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_categoria_fk` (`id_categoria_fk`),
  ADD KEY `id_categoria_fk_2` (`id_categoria_fk`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`id_categoria_fk`) REFERENCES `categoria` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
