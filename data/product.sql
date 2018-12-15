-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2018 at 11:33 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` decimal(5,2) NOT NULL,
  `description` varchar(255) NOT NULL,
  `typeID` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `description`, `typeID`, `image`, `quantity`) VALUES
(1, 'Bomboloni ala crema', '20.00', 'Bomboloni sind Krapfen, gefüllt  einer Vanillecreme', 1, 'assets/images/productImg/bomboloni.jpg', 20),
(2, 'Cannoli Siciliani', '20.00', 'Cannolo ist der Name eines gefüllten Gebäcks aus Sizilien. Es besteht aus einer frittierten Teigrolle mit einer süßen cremigen Füllung aus Ricotta, die Vanille, Kakao, Schokoladenstückchen oder kandierte Früchte enthalten kann.', 1, 'assets/images/productImg/cannoliSiciliani.png', 20),
(3, 'Eclairs', '23.00', 'Französisch éclair - Liebesknochen, Hasenpfote oder Kaffeestange bezeichnet, ist ein etwa 10 cm langes, glasiertes und gefülltes Gebäck aus Brandmasse französischen Ursprungs. Die Füllung kann aus Erdbeer-, Himbeer-, Kaffee-, Schokoladen-, Vanillecreme, S', 1, 'assets/images/productImg/eclairs.jpg', 20),
(4, 'Birds-Milk russian torte ', '30.00', 'Die Vogelmilch Torte ist ein russischer Klassiker. Diese Torte besteht aus leichtem, samtweichem Soufflé und einem ungewöhnlichem Biskuit', 2, 'assets/images/productImg/ptichie_moloko.jpg', 1),
(5, 'Solothurner Torte', '30.00', 'Das Rezept der Solothurner Torte wurde vor gut 100 Jahren von Albert Studer erfunden. Damals hiess die Torte noch Solothurner Kuchen. 1928 liess Werner Suter von der Suteria beim Amt für geistiges Eigentum die Solothurner Torte schützen. Deshalb ist die T', 2, 'assets/images/productImg/solothurnerTorte.jpg', 30),
(6, 'Schwarzwalder - kirsch Torte', '30.00', 'Schwarzwälder Kirschtorte ist einer der Klassiker unter den Torten. Marcel Seeger mag die Kombination von dunklem Biskuit, Sahne und Sauerkirschen.', 2, 'assets/images/productImg/schwarzwaelder-kirsch-torte.jpg', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
