-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 21 mrt 2025 om 11:42
-- Serverversie: 10.4.32-MariaDB
-- PHP-versie: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reviews`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `worlds`
--

CREATE TABLE `worlds` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `info` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `worlds`
--

INSERT INTO `worlds` (`id`, `name`, `info`, `image`, `price`) VALUES
(1, 'World 1\r\n', 'World 1 is een vrolijk, grasachtig gebied met eenvoudige levels die de basismechanieken van het spel introduceren. Het bevat rustige landschappen en een eerste kastelenindringing, waar je tegen Boom Boom vecht. Het is een perfecte opwarmronde voor nieuwkomers.', 'world1.webp', 0.20),
(2, 'World 2', 'World 2 heeft een woestijnthema, met zandduinen, cactussen en nieuwe vijanden zoals Pokeys. De levels zijn wat uitdagender met quicksand en platformen die je op de proef stellen. De kasteeluitdaging bevat een moeilijkere versie van Boom Boom.', 'world2.webp', 2300.00),
(3, 'World 3', 'In World 3 bevind je je in een ijskoude omgeving met glibberige oppervlakken en bevroren vijanden. Het vereist voorzichtigheid bij het navigeren over gladde platforms en het vermijden van nieuwe gevaren. De kastelen eindigen met een meer uitdagende Boom Boom.', 'world3.webp', 10.00),
(4, 'World 4', 'World 4 heeft een spookhuis-thema, met geesten, verborgen platforms en een griezelige sfeer. De levels bevatten verdwijnende platforms en de Boos zijn overal. De moeilijkheidsgraad stijgt met het vervelende platformen en het kastelengevecht.', 'world4.webp', 1500.00),
(5, 'World 5', 'World 5 heeft een tropisch junglethema, met hangende platformen, lianen en nieuwe vijanden zoals Piranha Plants. De levels bieden verschillende platformuitdagingen, van glibberige grond tot bewegende platforms. De bossfight tegen Boom Boom is iets pittiger.', 'world5.webp', 9999.99),
(6, 'World 6', 'World 6 speelt zich af in bergachtige gebieden met rotsachtige terreinen en steile kliffen. Je komt veel instortende platforms en vijanden als Rocky Wrenches tegen. De levels zijn moeilijker en vereisen nauwkeurige platforming.', 'world6.webp', 600.00);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `worlds`
--
ALTER TABLE `worlds`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `worlds`
--
ALTER TABLE `worlds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
