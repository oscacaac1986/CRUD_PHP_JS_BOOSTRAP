-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.20-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para prueba
CREATE DATABASE IF NOT EXISTS `prueba` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `prueba`;

-- Volcando estructura para tabla prueba.articulos
CREATE TABLE IF NOT EXISTS `articulos` (
  `idarticulo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_articulo` char(255) DEFAULT NULL,
  `precio` int(11) DEFAULT NULL,
  PRIMARY KEY (`idarticulo`),
  UNIQUE KEY `idarticulo` (`idarticulo`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla prueba.articulos: ~9 rows (aproximadamente)
/*!40000 ALTER TABLE `articulos` DISABLE KEYS */;
INSERT INTO `articulos` (`idarticulo`, `nombre_articulo`, `precio`) VALUES
	(1, 'papa', 4000),
	(2, 'carne', 3000),
	(3, 'pollo', 3000),
	(4, 'pavo', 3000),
	(5, 'cerdo', 3000),
	(6, 'arroz', 3000);
/*!40000 ALTER TABLE `articulos` ENABLE KEYS */;

-- Volcando estructura para función prueba.insert_articulos
DELIMITER //
CREATE FUNCTION `insert_articulos`(`nombre` CHAR(255),
	`precio` INT,
	`idarticulo` INT
) RETURNS int(11)
BEGIN
INSERT INTO articulos (nombre_articulo, precio) VALUES (nombre,precio);
RETURN idarticulo;
END//
DELIMITER ;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
