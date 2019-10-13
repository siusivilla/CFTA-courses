-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Oct 08, 2019 at 04:21 PM
-- Server version: 5.7.26
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `killerpro`
--

-- --------------------------------------------------------

--
-- Table structure for table `killers`
--

CREATE TABLE `killers` (
  `id` int(10) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `descrizione` varchar(400) NOT NULL,
  `specialita` varchar(255) NOT NULL,
  `zona` varchar(255) NOT NULL,
  `immagine` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `killers`
--

INSERT INTO `killers` (`id`, `nome`, `descrizione`, `specialita`, `zona`, `immagine`) VALUES
(1, 'Lady Elizabeth Bathory', 'La depressione non è solo un disturbo mentale, ma anche la migliore carta di Lady Elizabeth Bathory.<br>\r\nCon le prestazioni di questa donna preparata, il sottile filo che divide l\'omicidio e il suicidio si assottiglia ancor più, rendendo impossibile distinguerli.<br>\r\nChe aspetti? Vieni a dare un\'occhiata ai numerosi incarichi da lei svolti.', 'suicidio', 'australia', 'assets/img/killer-woman-1.png'),
(2, 'Lady Pamela Voorhees', 'Se si è giunti alla conclusione che le donne rappresentano il massimo esponente in questa caterogia, il merito è solo di Lady Pamela Voorhees. Geniale, ammaliatrice e temeraria. Per questa donna affrontare la vittima non è un problema ma, anzi, una sfida.<br />Sei alla ricerca del killer più gettonato della categoria? Clicca su Lady Pamela Voorhees.', 'suicidio', 'europa', 'assets/img/killer-woman-1.png'),
(3, 'Lady Pamela Voorhees', 'Se si è giunti alla conclusione che le donne rappresentano il massimo esponente in questa caterogia, il merito è solo di Lady Pamela Voorhees. Geniale, ammaliatrice e temeraria. Per questa donna affrontare la vittima non è un problema ma, anzi, una sfida.<br />Sei alla ricerca del killer più gettonato della categoria? Clicca su Lady Pamela Voorhees.', 'vip', 'oceania', 'assets/img/killer-woman-1.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) UNSIGNED NOT NULL COMMENT 'User id',
  `email` varchar(250) NOT NULL COMMENT 'Users email address',
  `password` varchar(200) NOT NULL COMMENT 'User password'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'killerpro@gmail.com', '3dca16d27f6c60a9264ba626dec2967a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `killers`
--
ALTER TABLE `killers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `killers`
--
ALTER TABLE `killers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'User id', AUTO_INCREMENT=2;
