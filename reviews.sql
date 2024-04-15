-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: 127.0.0.1:3306
-- Čas generovania: Po 15.Apr 2024, 20:24
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
-- Štruktúra tabuľky pre tabuľku `reviews`
--

DROP TABLE IF EXISTS `reviews`;
CREATE TABLE IF NOT EXISTS `reviews` (
  `rev-id` int(11) NOT NULL AUTO_INCREMENT,
  `mail` varchar(100) NOT NULL,
  `countryid` int(2) NOT NULL,
  `rating` int(11) NOT NULL,
  `review` varchar(100) NOT NULL,
  PRIMARY KEY (`rev-id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Sťahujem dáta pre tabuľku `reviews`
--

INSERT INTO `reviews` (`rev-id`, `mail`, `countryid`, `rating`, `review`) VALUES
(11, 'dasdasd@gmail.com', 3, 5, 'dsadasda'),
(10, 'dasdasd@gmail.com', 3, 5, 'blablabla'),
(9, 'abcd@gmail.com', 2, 5, 'Good job'),
(8, 'abcd@gmail.com', 2, 5, 'Good job'),
(7, 'abcd@gmail.com', 2, 5, 'Good job');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
