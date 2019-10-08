-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Sep 25, 2019 at 09:39 AM
-- Server version: 5.7.21
-- PHP Version: 7.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `viaggi`
--

-- --------------------------------------------------------

--
-- Table structure for table `amministratore`
--

CREATE TABLE `amministratore` (
  `id` int(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `cat` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `amministratore`
--

INSERT INTO `amministratore` (`id`, `email`, `password`, `cat`) VALUES
(6, 'admin@test.it', 'e64b78fc3bc91bcbc7dc232ba8ec59e0', 'cat');

-- --------------------------------------------------------

--
-- Table structure for table `eventi`
--

CREATE TABLE `eventi` (
  `id` int(11) NOT NULL,
  `titolo` varchar(200) NOT NULL,
  `descrizione` varchar(3200) NOT NULL,
  `immagine` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `eventi`
--

INSERT INTO `eventi` (`id`, `titolo`, `descrizione`, `immagine`) VALUES
(24, 'bandiera americana', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce at condimentum magna. Nullam lobortis molestie sem vel blandit. Nulla sit amet justo ut ante placerat elementum. Donec eget magna magna. Nunc tortor justo, rutrum at tellus nec, ultricies tempor dui. Praesent at nibh volutpat, ultrices tellus vel, posuere ex. Ut ultrices blandit venenatis.</p>', 0x62616e64696572615f75732e6a7067),
(26, 'monument valley', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce at condimentum magna. Nullam lobortis molestie sem vel blandit. Nulla sit amet justo ut ante placerat elementum. Donec eget magna magna. Nunc tortor justo, rutrum at tellus nec, ultricies tempor dui. Praesent at nibh volutpat, ultrices tellus vel, posuere ex. Ut ultrices blandit venenatis.</p>', 0x616d65726963612e6a7067),
(31, 'Parco Gazzelle', '<p>Pellentesque sollicitudin varius feugiat. Pellentesque bibendum diam ipsum, eget euismod sem consequat eu. Pellentesque ultricies ut massa at accumsan. In hac habitasse platea dictumst. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut id nulla lacus. Morbi porta nisi quis mi vehicula mollis</p>\r\n', 0x67617a7a656c6c652e6a7067),
(32, 'funivia Ghiacciao', '<p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut id nulla lacus. Morbi porta nisi quis mi vehicula mollis.&nbsp;Pellentesque sollicitudin varius feugiat. Pellentesque bibendum diam ipsum, eget euismod sem consequat eu. Pellentesque ultricies ut massa at accumsan. In hac habitasse platea dictumst.</p>\r\n', 0x66756e697669612e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `prenotazioni`
--

CREATE TABLE `prenotazioni` (
  `id` int(11) NOT NULL,
  `id_utente` varchar(30) NOT NULL,
  `id_evento` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `prenotazioni`
--

INSERT INTO `prenotazioni` (`id`, `id_utente`, `id_evento`) VALUES
(56, '15', '24'),
(57, '15', '26'),
(58, '15', '31'),
(59, '17', '24'),
(60, '17', '26'),
(61, '15', '24'),
(62, '15', '24'),
(63, '15', '24'),
(64, '15', '24'),
(65, '15', '24'),
(66, '15', '24');

-- --------------------------------------------------------

--
-- Table structure for table `registra`
--

CREATE TABLE `registra` (
  `id` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `registra`
--

INSERT INTO `registra` (`id`, `email`, `password`) VALUES
(15, 'admin@test.it', 'e64b78fc3bc91bcbc7dc232ba8ec59e0'),
(17, 'admin2@test.it', 'e64b78fc3bc91bcbc7dc232ba8ec59e0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `amministratore`
--
ALTER TABLE `amministratore`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eventi`
--
ALTER TABLE `eventi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prenotazioni`
--
ALTER TABLE `prenotazioni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registra`
--
ALTER TABLE `registra`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `amministratore`
--
ALTER TABLE `amministratore`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `eventi`
--
ALTER TABLE `eventi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `prenotazioni`
--
ALTER TABLE `prenotazioni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `registra`
--
ALTER TABLE `registra`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
