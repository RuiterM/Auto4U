-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 09 jan 2023 om 12:55
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

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `accounts`
--

CREATE TABLE `accounts` (
  `id` int(9) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `accounts`
--

INSERT INTO `accounts` (`id`, `email`, `password`, `firstName`, `lastName`) VALUES
(5, 'janpiet@gmail.com', 'janpiet', 'jan', 'piet');

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
-- Tabelstructuur voor tabel `catogorieen`
--

CREATE TABLE `catogorieen` (
  `id` int(9) NOT NULL,
  `merk` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `prijs` decimal(12,0) NOT NULL,
  `beschrijving` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Indexen voor tabel `catogorieen`
--
ALTER TABLE `catogorieen`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT voor een tabel `cards`
--
ALTER TABLE `cards`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT voor een tabel `catogorieen`
--
ALTER TABLE `catogorieen`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
