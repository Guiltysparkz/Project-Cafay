-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
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


-- Dumping database structure for cafaydb
CREATE DATABASE IF NOT EXISTS `cafaydb` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `cafaydb`;

-- Dumping structure for table cafaydb.coffee
CREATE TABLE IF NOT EXISTS `coffee` (
  `productID` int NOT NULL AUTO_INCREMENT,
  `productImage` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `productAltImage` varchar(50) NOT NULL,
  `productName` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `productOrigin` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `productCategoryScore` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `productTorrefactionMethod` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `productWashingMethod` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `productProductionType` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `productScentProfile` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `productBasePrice` float NOT NULL,
  `productFilter` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `productDescription` varchar(2000) DEFAULT NULL,
  PRIMARY KEY (`productID`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Product name, category, torrefaction method, washing method, production type (déco, bio, coop...), scent profile.';

-- Dumping data for table cafaydb.coffee: ~6 rows (approximately)
INSERT INTO `coffee` (`productID`, `productImage`, `productAltImage`, `productName`, `productOrigin`, `productCategoryScore`, `productTorrefactionMethod`, `productWashingMethod`, `productProductionType`, `productScentProfile`, `productBasePrice`, `productFilter`, `productDescription`) VALUES
	(1, 'BoaEsperanca.jpg', 'BoaEsperanca2.jpg', 'Boa Esperança', 'Brésil', '82+', 'Filtre ou Espresso ou Machine Auto', 'Naturelle', 'Producteur', 'Chocolaté & Corsé', 7.9, 'Filtre Espresso MachineAuto NaturelleEtHoney Producteur ChocolatEtCorse', 'Un café rond et équilibré, typique de son origine.<br> Il vous donnera d’excellents cafés en machine automatique ainsi qu’en espresso.'),
	(2, 'jhoanVergara1.jpg', 'jhoanVergara2.jpg', 'Jhoan Vergara', 'Colombie', '88+', 'Filtre', 'Double fermentation, Lavée', 'Producteur', 'Fruité & Floral', 14.9, 'Filtre Lavee Producteur FruiteEtFloral', 'Le producteur Jhoan Vergara nous surprenant à nouveau avec un café parfait pour l\'\'été, aux notes de piña colada et d\'eucalyptus.<br>On vous recommande de le préparer en café glacé et/ou cold brew.'),
	(3, 'laRoca1.jpg', 'laRoca2.jpg', 'La Roca', 'Colombie', '87+', 'Filtre', 'Naturelle', 'Producteur', 'Fruité & Floral', 14.9, 'Filtre NaturelleEtHoney Producteur FruiteEtFloral', 'Un bourbon rose Colombien aux notes subtiles et élégantes de cassis et d’agrumes, pour une tasse rafraîchissante.'),
	(4, 'Blend189BIO.jpg', 'Blend189BIO2.jpg', 'Blend 189 [Bio]', 'Brésil & Honduras', '82+', 'Filtre ou Espresso', 'Lavée', 'Cooperative', 'Chocolaté & Corsé', 8.9, 'Filtre Espresso Lavee Cooperative Bio Deca ChocolatEtCorse', NULL),
	(5, 'DecaElSueno.jpg', 'DecaElSueno2.jpg', 'Déca [El Sueño]', 'Mexique', '80+', 'Filtre ou Espresso', 'Lavée', 'Cooperative', 'Chocolaté & Corsé', 9.9, 'Filtre Espresso Lavee Cooperative ChocolatEtCorse', NULL),
	(6, 'felipeRestrepo1.jpg', 'felipeRestrepo2.jpg', 'Felipe Restrepo', 'Colombie', '88+', 'Filtre ou Espresso', 'Anaérobie Naturelle', 'Producteur', 'Fruité & Floral', 15.9, 'Filtre Espresso Anaerobie Producteur FruiteEtFloral', NULL);

-- Dumping structure for table cafaydb.equipment
CREATE TABLE IF NOT EXISTS `equipment` (
  `productID` int NOT NULL AUTO_INCREMENT,
  `productName` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `productCategory` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `productBrand` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `productBasePrice` float NOT NULL,
  PRIMARY KEY (`productID`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Espresso accessories, filter accessories, coffee machines.';

-- Dumping data for table cafaydb.equipment: ~0 rows (approximately)

-- Dumping structure for table cafaydb.error_logs
CREATE TABLE IF NOT EXISTS `error_logs` (
  `errorID` int NOT NULL AUTO_INCREMENT,
  `timestamp` datetime DEFAULT NULL,
  `message` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`errorID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table cafaydb.error_logs: ~0 rows (approximately)

-- Dumping structure for table cafaydb.panier
CREATE TABLE IF NOT EXISTS `panier` (
  `panierID` int NOT NULL AUTO_INCREMENT,
  `productID` int NOT NULL DEFAULT '0',
  `productName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'ProductNotFound',
  `price` float NOT NULL DEFAULT '0',
  `quantity` int NOT NULL DEFAULT '0',
  `subtotal` float NOT NULL DEFAULT '0',
  PRIMARY KEY (`panierID`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='id, nom, prix, quantité';

-- Dumping data for table cafaydb.panier: ~0 rows (approximately)

-- Dumping structure for table cafaydb.tea
CREATE TABLE IF NOT EXISTS `tea` (
  `productID` int NOT NULL AUTO_INCREMENT,
  `productName` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `productProducer` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `productBasePrice` float NOT NULL,
  PRIMARY KEY (`productID`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table cafaydb.tea: ~0 rows (approximately)

-- Dumping structure for table cafaydb.useraccounts
CREATE TABLE IF NOT EXISTS `useraccounts` (
  `userID` int NOT NULL AUTO_INCREMENT,
  `userNickname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `userSurname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `userName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `userEmail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `userPassword` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `userCart` varchar(2000) DEFAULT NULL,
  `userSub` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `userHistory` varchar(2000) DEFAULT NULL,
  `conftoken` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `tokenconfirmed` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Table for users nicknames, email address, password, cart, subscription, purchase history.';

-- Dumping data for table cafaydb.useraccounts: ~2 rows (approximately)
INSERT INTO `useraccounts` (`userID`, `userNickname`, `userSurname`, `userName`, `userEmail`, `userPassword`, `userCart`, `userSub`, `userHistory`, `conftoken`, `tokenconfirmed`, `created_at`) VALUES
	(20, 'test', NULL, NULL, 'test@test.com', '$2y$10$62yTspy5.76yeAgJ7cLtJe4Hf1yIY/PYBJzGj0nsxjFcxOkQYfHaK', NULL, NULL, NULL, '0', '2023-07-14 23:16:59', NULL),
	(21, NULL, NULL, NULL, 'test@test.com', '$2y$10$7fc1AY1z5llLb68kfqdMHudmwolsOJ.MxD1adoQLjw6LHbNFoZqoe', NULL, NULL, NULL, '0', '2023-07-15 02:01:55', NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
