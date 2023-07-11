-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           8.0.30 - MySQL Community Server - GPL
-- SE du serveur:                Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Listage de la structure de la base pour cafaydb
CREATE DATABASE IF NOT EXISTS `cafaydb` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `cafaydb`;

-- Listage de la structure de table cafaydb. coffee
CREATE TABLE IF NOT EXISTS `coffee` (
  `productID` int NOT NULL AUTO_INCREMENT,
  `productImage` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `productName` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `productOrigin` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `productCategoryScore` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `productTorrefactionMethod` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `productWashingMethod` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `productProductionType` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `productScentProfile` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `productBasePrice` float NOT NULL,
  PRIMARY KEY (`productID`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Product name, category, torrefaction method, washing method, production type (déco, bio, coop...), scent profile.';

-- Listage des données de la table cafaydb.coffee : ~4 rows (environ)
INSERT INTO `coffee` (`productID`, `productImage`, `productName`, `productOrigin`, `productCategoryScore`, `productTorrefactionMethod`, `productWashingMethod`, `productProductionType`, `productScentProfile`, `productBasePrice`) VALUES
	(1, 'BlendEspresso_IMG-300x300.jpg', 'Felipe Restrepo', 'Colombie', '88+', 'Filtre ou Espresso', 'Anaérobie Naturelle', 'Producteur', 'Fruité & Floral', 15.9),
	(2, 'Boa_IMG-300x300.jpg', 'Jhoan Vergara', 'Colombie', '88+', 'Filtre', 'Double fermentation, Lavée', 'Producteur', 'Fruité & Floral', 14.9),
	(3, 'Busindelavé_800-300x300.jpg', 'La Primavera', 'Colombie', '87+', 'Espresso', 'Lavée', 'Producteur', 'Fruité & Floral', 13.9),
	(4, '800x800_blend189-300x300.jpg', 'La Roca', 'Colombie', '87+', 'Filtre', 'Naturelle', 'Producteur', 'Fruité & Floral', 14.9);

-- Listage de la structure de table cafaydb. equipment-products
CREATE TABLE IF NOT EXISTS `equipment-products` (
  `productID` int NOT NULL AUTO_INCREMENT,
  `productName` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `productCategory` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `productBrand` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `productBasePrice` float NOT NULL,
  PRIMARY KEY (`productID`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Espresso accessories, filter accessories, coffee machines.';

-- Listage des données de la table cafaydb.equipment-products : ~0 rows (environ)

-- Listage de la structure de table cafaydb. tea-products
CREATE TABLE IF NOT EXISTS `tea-products` (
  `productID` int NOT NULL AUTO_INCREMENT,
  `productName` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `productProducer` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `productBasePrice` float NOT NULL,
  PRIMARY KEY (`productID`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table cafaydb.tea-products : ~0 rows (environ)

-- Listage de la structure de table cafaydb. useraccounts
CREATE TABLE IF NOT EXISTS `useraccounts` (
  `userID` int NOT NULL AUTO_INCREMENT,
  `userNickname` varchar(50) NOT NULL,
  `userSurname` varchar(50) NOT NULL,
  `userName` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `userEmail` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `userPassword` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `userCart` varchar(2000) DEFAULT NULL,
  `userSub` varchar(50) DEFAULT NULL,
  `userHistory` varchar(2000) DEFAULT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Table for users nicknames, email address, password, cart, subscription, purchase history.';

-- Listage des données de la table cafaydb.useraccounts : ~0 rows (environ)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
