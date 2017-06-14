-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Gegenereerd op: 13 jun 2017 om 21:21
-- Serverversie: 5.6.28
-- PHP-versie: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cru_ag_cruise`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `cru_ag_boekingen`
--

CREATE TABLE `cru_ag_boekingen` (
  `id` int(11) NOT NULL,
  `gebruiker_id` int(11) NOT NULL,
  `cruise_id` int(11) NOT NULL,
  `prijs_id` int(11) NOT NULL,
  `aantal_volwassenen` int(11) NOT NULL,
  `aantal_kinderen` int(11) NOT NULL,
  `aantal_babys` int(11) NOT NULL,
  `prijs_cruise` int(11) NOT NULL,
  `prijs_opties` int(11) NOT NULL,
  `totaalprijs` int(11) NOT NULL,
  `datum_boeking` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `cru_ag_boekingen`
--

INSERT INTO `cru_ag_boekingen` (`id`, `gebruiker_id`, `cruise_id`, `prijs_id`, `aantal_volwassenen`, `aantal_kinderen`, `aantal_babys`, `prijs_cruise`, `prijs_opties`, `totaalprijs`, `datum_boeking`) VALUES
(1, 1, 15, 2, 1, 0, 0, 2625, 6000, 8625, '2017-06-11'),
(12, 19, 17, 3, 3, 0, 0, 9000, 0, 9000, '2017-06-10');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `cru_ag_boeking_opties`
--

CREATE TABLE `cru_ag_boeking_opties` (
  `id` int(11) NOT NULL,
  `boeking_id` int(11) NOT NULL,
  `gebruiker_id` int(11) NOT NULL,
  `cruise_id` int(11) NOT NULL,
  `optie_id` int(11) NOT NULL,
  `prijs` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `cru_ag_boeking_opties`
--

INSERT INTO `cru_ag_boeking_opties` (`id`, `boeking_id`, `gebruiker_id`, `cruise_id`, `optie_id`, `prijs`) VALUES
(7, 1, 1, 15, 1, 3500),
(8, 1, 1, 15, 2, 4000);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `cru_ag_cruises`
--

CREATE TABLE `cru_ag_cruises` (
  `id` int(11) NOT NULL,
  `naam` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `beschrijving` text COLLATE utf8_unicode_ci NOT NULL,
  `vertrekplaats` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `aankomstplaats` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `vertrekdatum` datetime NOT NULL,
  `aankomstdatum` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `cru_ag_cruises`
--

INSERT INTO `cru_ag_cruises` (`id`, `naam`, `beschrijving`, `vertrekplaats`, `aankomstplaats`, `vertrekdatum`, `aankomstdatum`) VALUES
(15, 'Cruise Y', 'Cruise Test', 'Oostende', 'Saint Tropez', '2017-07-01 10:00:00', '2017-10-31 20:00:00'),
(17, 'Cruise X', 'Cruise Test', 'Oostende', 'Saint Tropez', '2017-07-01 10:00:00', '2017-10-31 20:00:00');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `cru_ag_gebruikers`
--

CREATE TABLE `cru_ag_gebruikers` (
  `id` int(11) NOT NULL,
  `type_gebruiker` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `naam` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `voornaam` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `wachtwoord` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `straat` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `huisnr` int(11) NOT NULL,
  `bus` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `postcode` int(11) NOT NULL,
  `plaats` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `land` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `telefoon` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `gsm` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `geboortedatum` date NOT NULL,
  `nationaliteit` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `extra_info` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `cru_ag_gebruikers`
--

INSERT INTO `cru_ag_gebruikers` (`id`, `type_gebruiker`, `naam`, `voornaam`, `email`, `wachtwoord`, `straat`, `huisnr`, `bus`, `postcode`, `plaats`, `land`, `telefoon`, `gsm`, `geboortedatum`, `nationaliteit`, `extra_info`) VALUES
(1, 'admin', 'Geli', 'Aaron', 'aaron.geli@student.howest.be', '', 'Hazelaarstraat', 2, '0', 8400, 'Kortrijk', 'België', '', '', '1997-03-25', 'Belg', 'Admin van deze website'),
(15, '', 'geli', 'aaron', 'aarongeli6@gmail.com', '$2y$10$AY1i7mfKbHjdwAIX4wqo5uHKo9NAcktT/5QqpCGaYM0Et9p4lTWGe', 'hazelaarstraat', 2, '0', 8400, 'Kortrijk', 'Belgie', '', '0491919191', '1997-03-25', 'Belg', ''),
(17, 'klant', 'geli', 'miguel', 'miguel@gmail.com', '$2y$10$mSf2jFBmH39WcMfD7Q1EVeiyxuCUvPcpMbIss3Y64ClVjIZHQvBCG', 'EM Parkveedel', 15, '0', 50733, 'Keulen', 'Duitsland', '', '0491919191', '1963-07-19', 'Belg', ''),
(18, 'klant', 'geli', 'aaron', 'aarongeli6@gmail.com', '$2y$10$DM3E0rHsuDm68assiAqTruJOTSJziE5TO1YsIAo2YATn3vZFLwrA.', 'hazelaarstraat', 2, '2.1', 8400, 'Kortrijk', 'Belgie', '0491919191', '', '1997-03-25', 'Belg', 'Blablabla'),
(19, 'klant', 'geli', 'aaron', 'aarongeli6@gmail.com', '$2y$10$3QUSxq7V70Oy38iNcwLZkuqDUzG3W8ZN409zVgOW6BMvQxz/jePxi', 'hazelaarstraat', 2, '', 8400, 'Kortrijk', 'België\r\n', '', '0491919191', '1997-03-25', 'België\r\n', '');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `cru_ag_kortingen`
--

CREATE TABLE `cru_ag_kortingen` (
  `id` int(11) NOT NULL,
  `cruise_id` int(11) NOT NULL,
  `kortingswijze` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `korting` int(11) NOT NULL,
  `korting_op` varchar(45) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `cru_ag_kortingen`
--

INSERT INTO `cru_ag_kortingen` (`id`, `cruise_id`, `kortingswijze`, `korting`, `korting_op`) VALUES
(4, 15, 'Kinderen', 50, 'Cruise'),
(5, 15, 'Vroegboek', 15, 'Cruise'),
(6, 15, 'LastMinute', 25, 'Cruise'),
(7, 15, 'Babys', 100, 'Cruise'),
(8, 15, 'All-in pakket', 20, 'Opties');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `cru_ag_opties`
--

CREATE TABLE `cru_ag_opties` (
  `id` int(11) NOT NULL,
  `tussenstop_id` int(11) NOT NULL,
  `naam` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `beschrijving` text COLLATE utf8_unicode_ci NOT NULL,
  `prijs` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `cru_ag_opties`
--

INSERT INTO `cru_ag_opties` (`id`, `tussenstop_id`, `naam`, `beschrijving`, `prijs`) VALUES
(1, 2, 'Gokken', 'Gokken in Las Vegas!', 3500),
(2, 2, 'Frauderen', 'Michael Malken', 4000);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `cru_ag_prijzen`
--

CREATE TABLE `cru_ag_prijzen` (
  `id` int(11) NOT NULL,
  `type_kamer` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `beschrijving` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `prijs` int(11) NOT NULL,
  `prijsopslag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `cru_ag_prijzen`
--

INSERT INTO `cru_ag_prijzen` (`id`, `type_kamer`, `beschrijving`, `prijs`, `prijsopslag`) VALUES
(2, 'Kamer met zeezicht', 'Kamer test2', 3000, 500),
(3, 'Kamer zonder zeezicht', 'Kamer test2', 3000, 500);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `cru_ag_tussenstops`
--

CREATE TABLE `cru_ag_tussenstops` (
  `id` int(11) NOT NULL,
  `cruise_id` int(11) NOT NULL,
  `naam_tussenstop` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `beschrijving_tussenstop` text COLLATE utf8_unicode_ci NOT NULL,
  `aankomstdatum_tussenstop` datetime NOT NULL,
  `vertrekdatum_tussenstop` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `cru_ag_tussenstops`
--

INSERT INTO `cru_ag_tussenstops` (`id`, `cruise_id`, `naam_tussenstop`, `beschrijving_tussenstop`, `aankomstdatum_tussenstop`, `vertrekdatum_tussenstop`) VALUES
(2, 15, 'Las Vegas', 'Gokken', '2017-06-10 10:00:00', '2017-06-10 20:00:00'),
(3, 15, 'Los Angeles', 'Frauderen met M. Malken', '2017-06-10 10:00:00', '2017-06-10 20:00:00');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `cru_ag_boekingen`
--
ALTER TABLE `cru_ag_boekingen`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `cru_ag_boeking_opties`
--
ALTER TABLE `cru_ag_boeking_opties`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `cru_ag_cruises`
--
ALTER TABLE `cru_ag_cruises`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `cru_ag_gebruikers`
--
ALTER TABLE `cru_ag_gebruikers`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `cru_ag_kortingen`
--
ALTER TABLE `cru_ag_kortingen`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `cru_ag_opties`
--
ALTER TABLE `cru_ag_opties`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `cru_ag_prijzen`
--
ALTER TABLE `cru_ag_prijzen`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `cru_ag_tussenstops`
--
ALTER TABLE `cru_ag_tussenstops`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `cru_ag_boekingen`
--
ALTER TABLE `cru_ag_boekingen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT voor een tabel `cru_ag_boeking_opties`
--
ALTER TABLE `cru_ag_boeking_opties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT voor een tabel `cru_ag_cruises`
--
ALTER TABLE `cru_ag_cruises`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT voor een tabel `cru_ag_gebruikers`
--
ALTER TABLE `cru_ag_gebruikers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT voor een tabel `cru_ag_kortingen`
--
ALTER TABLE `cru_ag_kortingen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT voor een tabel `cru_ag_opties`
--
ALTER TABLE `cru_ag_opties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT voor een tabel `cru_ag_prijzen`
--
ALTER TABLE `cru_ag_prijzen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT voor een tabel `cru_ag_tussenstops`
--
ALTER TABLE `cru_ag_tussenstops`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
