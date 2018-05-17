-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2018 at 07:59 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `domica`
--

-- --------------------------------------------------------

--
-- Table structure for table `markers`
--

CREATE TABLE `markers` (
  `id` int(11) NOT NULL,
  `naam` varchar(100) NOT NULL,
  `adres` varchar(100) NOT NULL,
  `over_woning` text NOT NULL,
  `latitude` float NOT NULL,
  `longtitude` float NOT NULL,
  `huurstatus` enum('Te Huur','Verhuurd') DEFAULT NULL,
  `huurprijs` varchar(100) DEFAULT NULL,
  `huurperiode` varchar(100) NOT NULL,
  `photo_path` varchar(100) NOT NULL,
  `marker_icon` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `markers`
--

INSERT INTO `markers` (`id`, `naam`, `adres`, `over_woning`, `latitude`, `longtitude`, `huurstatus`, `huurprijs`, `huurperiode`, `photo_path`, `marker_icon`) VALUES
(12, 'Bovenwoning Rotterdam Overschie Huren', 'Rotterdam Airportplein, Rotterdam', 'Prachtig short en long stay appartementen te huur op Rotterdam Airport bij Domica Rotterdam\r\nEen prachtig appartement op een speciale locatie! Domica Rotterdam biedt op Rotterdam The Hague Airport dit mooie volledig gemeubileerde 2-kamer appartement aan. ', 51.948, 4.43448, 'Te Huur', '2.000,00 p/m', '', 'img/markerfoto/166415180957045180.jpg', 'img/green.png'),
(13, 'Portiekflat Rotterdam IJsselmonde Huren', 'Kees Pijlstraat, Rotterdam', 'Schitterend appartement te huur aan de Veranda, Rotterdam Fijenoord\r\n2 slaapkamers, gemeubileerd\r\n\r\nGoed verzorgd, ruim appartement te huur op een geweldige locatie. Appartement wordt gemeubileerd opgeleverd. De Veranda ligt in de wijk Feijenoord direct aan de Maas.\r\nZodra u uit uw appartement stapt bent u direct aan de boulevard waar u fantastisch uitzicht heeft over de Brienenoordburg en de Maas. \r\nZoekt u liever de drukte op? Ook dat is geen probleem. Binnen enkele minuten heeft u de toegang tot de bioscoop, diverse winkels en restaurants.', 51.8973, 4.52411, 'Te Huur', '1.195,00 p/m', '', 'img/markerfoto/166515180957108044.jpg', 'img/green.png'),
(14, 'Portiekflat Rotterdam Kralingen - Crooswijk Huren', 'Boezemsingel, Rotterdam', 'De woning aan de Boezemsingel 396 is een type E met een totaaloppervlakte van 98 mÂ². Bij binnenkomst treft u een L-vormige hal welke toegang tot alle vertrekken biedt. De woonkamer van 35 mÂ² is door de drie grote ramen licht en beschikt over een open keuken in hoekopstelling, vanuit de woonkamer is de serre van 6 mÂ² te betreden. De woning heeft drie slaapkamers van resp. 18,4 mÂ², 11,5 mÂ² en 8,4 mÂ². De badkamer heeft een oppervlakte van 5,5 mÂ² en beschikt over een drempelloze douche (geschikt voor minder validen), wastafel en toilet. In de hal is een berging van 3 mÂ².', 51.9302, 4.4948, 'Te Huur', '850,00 p/m', '', 'img/markerfoto/166815180957336157.jpg', 'img/green.png'),
(15, 'Portiekflat Rotterdam IJsselmonde Huren', 'Jan Pettersonstraat, Rotterdam', 'Waterview!! Ruim appartement te huur aan de Veranda, gestoffeerd, met 2 ruime slaapkamers\r\n\r\nDe Veranda is populairder dan ooit! En dat is best begrijpelijk, dit complex ligt namelijk middenin het nieuw te ontwikkelen Feijenoord City. Maar dat is niet alleen de reden dat dit gebied zo aantrekkelijk is. De ligging is ideaal. Snel bij de snelweg en toch dichtbij het centrum. Geen uren in de file staan voordat je bij de snelweg bent! De veranda heeft eigenlijk het beste van 2 werelden. Dit appartement beschikt over 2 slaapkamers en door de ligging op de 10e etage geniet je ook nog eens van een schitterend uitzicht over het water. In de zomer leent de boulevard zich uitstekend voor een avondwandeling. Geen zin om te koken? Rondom de veranda zijn diverse horeca gelegenheden aanwezig. Diverse openbaar vervoervoorzieningen zijn op loopafstand te bereiken. ', 51.8977, 4.52216, 'Verhuurd', '', '20 Maart tot 30 December', 'img/markerfoto/166815180957336157.jpg', 'img/red.png'),
(16, 'Portiekflat Rotterdam IJsselmonde Huren', 'Wilbertoord, Rotterdam', 'Dit appartement is gelegen in IJsselmonde. IJsselmonde staat bekend als een rustige buurt met veel groen en voorzieningen. Winkels basisscholen en openbaar vervoer, het is allemaal binnen handbereik. ', 51.8798, 4.55241, 'Verhuurd', '', '20 Maart tot 30 December', 'img/markerfoto/167615180957778550.jpg', 'img/red.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(2, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `markers`
--
ALTER TABLE `markers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `markers`
--
ALTER TABLE `markers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
