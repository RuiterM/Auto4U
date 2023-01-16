-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 16 jan 2023 om 13:00
-- Serverversie: 10.4.24-MariaDB
-- PHP-versie: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `auto4u`
--
CREATE DATABASE IF NOT EXISTS `auto4u` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `auto4u`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `accounts`
--

CREATE TABLE `accounts` (
  `id` int(9) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `accounts`
--

INSERT INTO `accounts` (`id`, `email`, `password`, `firstName`, `lastName`, `role`) VALUES
(5, 'janpiet@gmail.com', 'janpiet', 'jan', 'piet', ''),
(6, 'ik@rocmondriaan.nl', 'qwerty', 'ik', 'geen', '');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `cards`
--

CREATE TABLE `cards` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `beschrijving` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `cards`
--

INSERT INTO `cards` (`id`, `name`, `beschrijving`, `img`) VALUES
(1, 'Mercedes', 'Nieuwste Mercedes AMG Model! Dit is het nieuwe 2023 Mercedes-AMG C43 sedan model. hij gaat van 0-100 in 4.6 seconden!, met een vermogen van 402PK!', 'img/amg.png'),
(2, 'BMW', 'Dit is de nieuwe 2023 BMW M4, met een vermogen van 473 PK waarmee hij in 3.8 seconden van 0-100 kan gaan! er zit een twin-turbo 3.0 inline-zes in!', 'img/m4.jpg'),
(3, 'Audi', 'Dit is de prachtige nieuwe Audi R8 2023, hij doet 0-100 in 3.4 seconden!, met een 5.2 liter V10 motor erin haalt hij een schokkende 320KM/H', 'img/r8.jpeg');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `category`
--

CREATE TABLE `category` (
  `id` int(9) NOT NULL,
  `name` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='category';

--
-- Gegevens worden geëxporteerd voor tabel `category`
--

INSERT INTO `category` (`id`, `name`, `picture`) VALUES
(1, 'BMW', 'img/bmw_logo.png'),
(2, 'Mercedes', 'img/mercedes_logo.png'),
(3, 'Audi', 'img/audi_logo.png');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `product`
--

CREATE TABLE `product` (
  `id` int(9) NOT NULL,
  `name` varchar(255) NOT NULL,
  `prijs` varchar(255) NOT NULL,
  `beschrijving` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `product`
--

INSERT INTO `product` (`id`, `name`, `prijs`, `beschrijving`, `picture`, `cat_id`) VALUES
(1, '1 serie', '€ 36.253,10', 'De BMW 1 Serie laat zien hoe technische innovaties, een stijlvolle uitstraling en de precieze rijdynamiek van een BMW ook in de compacte klasse volledig tot uiting komen. De BMW combineert een zeer efficiënt design met krachtige maar zuinige motoren. De i', 'bmw_1_serie.png', 1),
(2, '2 serie', '€ 48.869 ', 'Compromisloos, zelfbewust en expressief: in navolging van de BMW 1 Serie Coupé geldt dat concept ook voor de BMW 2 Serie Coupé, Cabrio en Gran Coupé. De BMW 2 Serie biedt keuze uit krachtige, compacte modelvarianten – die tot de beste behoren in hun klass', 'bmw_2_serie.png', 1),
(3, '3 serie sedan', '€ 51.037 ', 'Nieuw, en toch al met geschiedenis. De nieuwe BMW 3 Serie is namelijk schatplichtig aan iedere 3 die voorafging. Ieder model legde de lat hoger en nam geen genoegen met compromissen. Nooit. Dat leidt nu tot de nieuwste BMW 3 Serie die een grote sprong voo', 'bmw_3_serie.png', 1);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT voor een tabel `cards`
--
ALTER TABLE `cards`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT voor een tabel `category`
--
ALTER TABLE `category`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT voor een tabel `product`
--
ALTER TABLE `product`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
