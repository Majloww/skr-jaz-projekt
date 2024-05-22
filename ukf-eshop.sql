-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: 127.0.0.1:3306
-- Čas generovania: St 22.Máj 2024, 17:48
-- Verzia serveru: 5.7.36
-- Verzia PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáza: `ukf-eshop`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL,
  `description` varchar(300) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Sťahujem dáta pre tabuľku `products`
--

INSERT INTO `products` (`product_id`, `title`, `quantity`, `description`, `price`) VALUES
(1, 'Camera', 10, 'Security camera model 2020', '239.99'),
(2, 'Motion sensor', 25, 'Infrared motion sensor', '45.00'),
(3, 'Control panel', 21, 'Control panel that monitors your cameras', '129.99'),
(4, '1st gen. CCTV camera', 40, 'CCTV camera 1st gen', '49.99'),
(5, '2nd gen. CCTV camera', 68, 'CCTV camera, upgraded model', '69.99'),
(6, 'Ball head security camera', 42, 'Security camera with ball head', '59.99'),
(7, 'Button security panel', 15, 'Security panel with buttons', '40.00'),
(8, 'Fingerprint padlock', 166, 'Padlock with fingerprint reader', '26.99'),
(9, 'VPN Service', 10000, 'VPN Service', '25.50');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `reviews`
--

DROP TABLE IF EXISTS `reviews`;
CREATE TABLE IF NOT EXISTS `reviews` (
  `rev-id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `countryid` int(2) NOT NULL,
  `rating` int(11) NOT NULL,
  `review` varchar(100) NOT NULL,
  PRIMARY KEY (`rev-id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Sťahujem dáta pre tabuľku `reviews`
--

INSERT INTO `reviews` (`rev-id`, `user_id`, `countryid`, `rating`, `review`) VALUES
(12, 11, 1, 5, 'gsddsdfggasdrg'),
(13, 11, 1, 5, 'safsgsfhdhd'),
(14, 11, 0, 5, 'dsadasdasd');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `surname` varchar(40) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `admin` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Sťahujem dáta pre tabuľku `users`
--

INSERT INTO `users` (`user_id`, `name`, `surname`, `pass`, `admin`) VALUES
(1, 'Majlo', 'Chmajlo', '111', 0),
(3, 'Jano', 'Nejaky', '123', 1),
(5, 'admin', 'admin', 'admin', 1),
(8, 'test1', 'test1', 'test', NULL),
(7, 'asdad', 'asdsafjsdnk', 'fadfd', 0),
(9, 'test2', 'test2', 'test', NULL),
(12, 'Anton', 'Antonov', '1234', NULL),
(11, '11', '11', '11', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
