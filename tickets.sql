-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 13, 2013 at 11:27 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tickets`
--

-- --------------------------------------------------------

--
-- Table structure for table `bilete`
--

CREATE TABLE IF NOT EXISTS `bilete` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `concert` int(11) NOT NULL,
  `pret` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `concert` (`concert`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `bilete`
--


-- --------------------------------------------------------

--
-- Table structure for table `comenzi`
--

CREATE TABLE IF NOT EXISTS `comenzi` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `bilet` int(11) NOT NULL,
  `nr_bil` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `data_inreg` int(11) NOT NULL,
  `data_confirm` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user` (`user`),
  UNIQUE KEY `bilet` (`bilet`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comenzi`
--


-- --------------------------------------------------------

--
-- Table structure for table `concerte`
--

CREATE TABLE IF NOT EXISTS `concerte` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nume` varchar(255) NOT NULL,
  `locatie` int(11) NOT NULL,
  `trupa` int(11) NOT NULL,
  `data` date NOT NULL,
  `bil_disp` int(11) NOT NULL,
  `bil_vand` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `locatie` (`locatie`),
  UNIQUE KEY `trupa` (`trupa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `concerte`
--


-- --------------------------------------------------------

--
-- Table structure for table `genuri`
--

CREATE TABLE IF NOT EXISTS `genuri` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nume` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `genuri`
--

INSERT INTO `genuri` (`id`, `nume`) VALUES
(1, 'pop'),
(2, 'rock'),
(3, 'r&b'),
(4, 'jazz'),
(5, 'house'),
(6, 'electronic'),
(7, 'latin'),
(8, 'folclor');

-- --------------------------------------------------------

--
-- Table structure for table `imagini`
--

CREATE TABLE IF NOT EXISTS `imagini` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adresa` text NOT NULL,
  `concert` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `concert` (`concert`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `imagini`
--


-- --------------------------------------------------------

--
-- Table structure for table `locatii`
--

CREATE TABLE IF NOT EXISTS `locatii` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nume` varchar(255) NOT NULL,
  `oras` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `locatii`
--

INSERT INTO `locatii` (`id`, `nume`, `oras`) VALUES
(1, 'Romexpo', 'Bucuresti'),
(2, 'Sala Palatului', 'Bucuresti'),
(3, 'Arenele Romane', 'Bucuresti'),
(4, 'Ateneul  Roman', 'Bucuresti');

-- --------------------------------------------------------

--
-- Table structure for table `rezervari`
--

CREATE TABLE IF NOT EXISTS `rezervari` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` int(11) NOT NULL,
  `bilet` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `data` date NOT NULL,
  `nr_bil` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user` (`user`),
  UNIQUE KEY `bilet` (`bilet`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `rezervari`
--


-- --------------------------------------------------------

--
-- Table structure for table `trupe`
--

CREATE TABLE IF NOT EXISTS `trupe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nume` varchar(255) NOT NULL,
  `gen` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `gen` (`gen`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `trupe`
--

INSERT INTO `trupe` (`id`, `nume`, `gen`) VALUES
(1, 'Joe Cocker', 2),
(4, 'Directia 5', 2),
(9, 'Sunny Summer Nights', 5),
(10, 'Vara Magica', 5),
(11, 'The Mission Weekend Dance', 5);

-- --------------------------------------------------------

--
-- Table structure for table `useri`
--

CREATE TABLE IF NOT EXISTS `useri` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `nume` varchar(25) NOT NULL,
  `prenume` varchar(25) NOT NULL,
  `adresa` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefon` varchar(13) NOT NULL,
  `permissions` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `useri`
--

INSERT INTO `useri` (`id`, `username`, `password`, `nume`, `prenume`, `adresa`, `email`, `telefon`, `permissions`) VALUES
(1, 'criss25', 'cristina', 'popescu', 'cristina', 'str garii bl 1', 'criss25@yahoo.com', '0745675654', 1),
(3, 'ana20', 'anamaria', 'Vasilache', 'Ana', 'str ceahlau nr 24', 'ana_4@yahoo.com', '0745321342', 0),
(4, 'florin253', 'Florin', 'Petrescu', 'Ana', 'str garoafei nr 24', 'petrescuf@yahoo.com', '0735321342', 0),
(5, 'mari_mari', 'marian33', 'Ionescu', 'Marian', 'Tineretului bl 3 ', 'marian_ionescu@gmail.com', '0732432654', 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bilete`
--
ALTER TABLE `bilete`
  ADD CONSTRAINT `bilete_ibfk_1` FOREIGN KEY (`concert`) REFERENCES `concerte` (`id`);

--
-- Constraints for table `comenzi`
--
ALTER TABLE `comenzi`
  ADD CONSTRAINT `comenzi_ibfk_2` FOREIGN KEY (`bilet`) REFERENCES `bilete` (`id`),
  ADD CONSTRAINT `comenzi_ibfk_1` FOREIGN KEY (`user`) REFERENCES `useri` (`id`);

--
-- Constraints for table `concerte`
--
ALTER TABLE `concerte`
  ADD CONSTRAINT `concerte_ibfk_2` FOREIGN KEY (`trupa`) REFERENCES `trupe` (`id`),
  ADD CONSTRAINT `concerte_ibfk_1` FOREIGN KEY (`locatie`) REFERENCES `locatii` (`id`);

--
-- Constraints for table `imagini`
--
ALTER TABLE `imagini`
  ADD CONSTRAINT `imagini_ibfk_1` FOREIGN KEY (`concert`) REFERENCES `concerte` (`id`);

--
-- Constraints for table `rezervari`
--
ALTER TABLE `rezervari`
  ADD CONSTRAINT `rezervari_ibfk_2` FOREIGN KEY (`bilet`) REFERENCES `bilete` (`id`),
  ADD CONSTRAINT `rezervari_ibfk_1` FOREIGN KEY (`user`) REFERENCES `useri` (`id`);
