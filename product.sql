-- Adminer 4.8.1 MySQL 10.11.2-MariaDB-1:10.11.2+maria~ubu2204 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

CREATE TABLE `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `visible` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `product` (`id`, `uuid`, `name`, `url`, `price`, `visible`) VALUES
(1,	'dsadnad',	'Traktor',	'https://seznam.cz',	1223.32,	0),
(3,	'asda',	'dsa',	'https://sezdasnam.cz',	12232.32,	0),
(7,	'asda',	'dsa',	'https://sezdasnam.cz',	2,	1),
(15,	'sdaas344334',	'3dsad3',	'adosadiasjdias',	23.4,	1),
(16,	'sdaas344334',	'3dsad3',	'adosadiasjdias',	23.4,	1);

-- 2023-03-07 15:00:23
