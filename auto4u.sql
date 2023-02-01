-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 01 feb 2023 om 15:17
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
(5, 'janpiet@gmail.com', 'janpiet', 'jan', 'piet', 'admin'),
(6, 'ik@rocmondriaan.nl', 'qwerty', 'ik', 'geen', ''),
(7, 'hallo@hallo.nl', 'de', 'de', 'de', '');

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
(3, '3 serie sedan', '€ 51.037 ', 'Nieuw, en toch al met geschiedenis. De nieuwe BMW 3 Serie is namelijk schatplichtig aan iedere 3 die voorafging. Ieder model legde de lat hoger en nam geen genoegen met compromissen. Nooit. Dat leidt nu tot de nieuwste BMW 3 Serie die een grote sprong voo', 'bmw_3_serie.png', 1),
(4, 'AMG EQS 53 4MATIC+', '€ 176.608', 'Deze versie van de Mercedes-Benz EQS is in Nederland op de markt sinds januari 2022 en kost rijklaar € 176.608. De vierwielaangedreven auto heeft elektrische aandrijflijn, heeft een actieradius van 563 km en levert een maximum vermogen van 484 kW (658 pk)', 'merc_1.png', 2),
(6, 'AMG GLA 35 4MATIC', '€ 91.032', 'De dynamische proporties zorgen ervoor dat de GLA compact en uiterst functioneel is. Deze compacte SUV past vrijwel overal in. Toch is er meer dan voldoende ruimte voor uw leven.', 'merc_2.png', 2),
(8, 'Mercedes-AMG GT 63 S E Performance 4-Door Coupé', '€ 241.325', 'De Mercedes-AMG GT 4-Door is de eerste AMG-Benz die een plug-in hybride aandrijflijn krijgt. De heren en dames in Affalterbach maken daar geen zuinige spaarpot van. Nee, de Mercedes-AMG GT 63 S E Performance knalt AMG met 843 pk een nieuw tijdperk in.', 'merc_3.png', 2),
(9, 'R8 Coupé V10 performance', '€ 303.181,97', 'De atmosferische V10-motor van de Audi R8 Coupé V10 performance quattro levert 456 kW/620 pk1. Hierdoor neemt de sprint naar 100 km/h maar 3,1 seconden in beslag en is de topsnelheid 331 km/h.', 'audi_1.png', 3),
(10, 'RS 5 Coupé', '€ 143.251,08', 'Het front is in lijn met de andere RS-modellen en wordt gedomineerd door de honingraatgrille zonder nadrukkelijke omlijsting. Deze voorkant geeft het begrip ‘road presence’ nieuwe lading. De breed uitgebouwde spatborden versterken het beeld van een auto d', 'audi_2.png', 3),
(11, 'A3 Sportback TFSI e', '€ 42.825,00', 'De e-motor met de bijbehorende stroom uit de lithium-ionaccu ondersteunt op sportieve manier de 1.4 TFSI-motor. Het systeemvermogen van de 40 TFSI e bedraagt 150 kW/204 pk en dat van de 45 TFSI e 180 kW/245 pk.', 'audi_3.png', 3);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `review`
--

CREATE TABLE `review` (
  `id` int(9) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(255) NOT NULL,
  `stars` int(5) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `review`
--

INSERT INTO `review` (`id`, `name`, `date`, `description`, `stars`, `user_id`, `product_id`) VALUES
(1, 'jan', '2014-02-12', 'De BMW 1-serie is een compacte en sportieve auto met veel vermogen en een uitstekende wegligging. Het interieur is luxe en modern, en de technologie aan boord is uitstekend.', 4, 5, 1),
(3, 'peter', '2014-02-17', 'De BMW 2-serie is een dynamische en sportieve coupé met een krachtige motor en een goede balans tussen prestaties en comfort. Het interieur is elegant en functioneel, en de technologie is van hoge kwaliteit.', 5, 5, 2),
(4, 'karel', '2015-02-11', 'De BMW 3-serie is een iconische en populaire middenklasser met veel vermogen en een uitstekende rijdynamiek. Het interieur is luxueus en comfortabel, en de technologie aan boord is geavanceerd. Het is een zeer goede allround auto.', 3, 5, 3),
(5, 'lauren', '2020-02-04', 'De AMG EQS 53 4MATIC+ is een luxueuze en krachtige elektrische sedan met een indrukwekkende prestatie en een indrukwekkende rijervaring. Het interieur is prachtig afgewerkt met hoogwaardige materialen en de technologie is geavanceerd en gebruiksvriendelij', 5, 5, 4),
(6, 'henk', '2017-02-08', 'De AMG GLA 35 4MATIC is een compacte en sportieve crossover met een krachtige motor en een uitstekende rijdynamiek. Het interieur is comfortabel en stijlvol, en de technologie aan boord is van hoge kwaliteit.', 4, 5, 6),
(7, 'nick', '2018-02-08', 'De Mercedes-AMG GT 63 S E Performance 4-Door Coupé is een indrukwekkende en snelle sportwagen met een krachtige motor en een indrukwekkende wegligging. Het interieur is luxe en comfortabel, en de technologie aan boord is geavanceerd.', 5, 5, 8),
(8, 'sarah', '2021-02-18', 'De R8 Coupé V10 performance is een indrukwekkende en snelle sportwagen met een krachtige motor en een uitstekende wegligging. Het interieur is luxueus en comfortabel, en de technologie aan boord is geavanceerd.', 2, 5, 9),
(9, 'roxanne', '2020-02-13', 'De RS 5 Coupé is een krachtige en sportieve coupé met een indrukwekkende prestatie en een uitstekende rijdynamiek. Het interieur is comfortabel en stijlvol, en de technologie aan boord is van hoge kwaliteit.', 3, 5, 10),
(10, 'geert', '2018-02-26', 'De A3 Sportback TFSI e is een efficiënte en sportieve plug-in hybride met een krachtige motor en een goede balans tussen prestaties en comfort. Het interieur is stijlvol en functioneel, en de technologie aan boord is geavanceerd en gebruiksvriendelijk.', 3, 5, 11),
(11, 'truus', '2018-02-07', 'De BMW 1-serie is een compacte en sportieve auto met een krachtige motor en een uitstekende wegligging. Het interieur is stijlvol en comfortabel, en de technologie aan boord is geavanceerd en gebruiksvriendelijk. Het is een ideale auto voor degenen die op', 4, 5, 1);

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
-- Indexen voor tabel `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT voor een tabel `review`
--
ALTER TABLE `review`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `category` (`id`);

--
-- Beperkingen voor tabel `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `accounts` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
