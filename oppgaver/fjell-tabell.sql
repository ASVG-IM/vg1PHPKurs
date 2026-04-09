-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 09, 2026 at 12:50 PM
-- Server version: 12.2.2-MariaDB
-- PHP Version: 8.5.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fjell`
--

-- --------------------------------------------------------

--
-- Table structure for table `fjell`
--

CREATE TABLE `fjell` (
  `id` int(10) NOT NULL,
  `navn` varchar(45) NOT NULL,
  `hoyde` int(10) NOT NULL,
  `beskrivelse` varchar(250) NOT NULL,
  `region` int(16) NOT NULL,
  `fotografi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fjell`
--

INSERT INTO `fjell` (`id`, `navn`, `hoyde`, `beskrivelse`, `region`, `fotografi`) VALUES
(1, 'Ulriken', 643, 'Det høyeste av de 7 byfjellene. Ulriken har ekstremt mye aura og aura farmer over hele Bergen.', 1, 'ulriken.jpg'),
(2, 'Lyderhorn', 396, 'Lyderhorn er et av de syv byfjellene i Bergen, og ligger rundt 5km vest for sentrum i Loddefjord.', 1, 'lyderhorn.jpg'),
(6, 'Vidden', 550, 'Vidden i Bergen er \'hjertet\' av Bergens fjellstrekninger, og binder sammen mange fjell som bl.a Ulriken og Fløyen. Selve vidde platået strekker seg fra sør med Sædalen til nord med Hjorteland og Flaktveit.', 1, 'vidden.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fjell`
--
ALTER TABLE `fjell`
  ADD PRIMARY KEY (`id`),
  ADD KEY `region` (`region`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fjell`
--
ALTER TABLE `fjell`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `fjell`
--
ALTER TABLE `fjell`
  ADD CONSTRAINT `region` FOREIGN KEY (`region`) REFERENCES `omrade` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
