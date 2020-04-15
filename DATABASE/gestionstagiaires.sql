-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2018 at 06:17 PM
-- Server version: 5.6.15-log
-- PHP Version: 5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gestionstagiaires`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `log` varchar(20) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `photo` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `log`, `pwd`, `photo`) VALUES
(1, 'Admin', 'Admin', 'Admin.jpg'),
(2, 'Admin2', 'Admin2', 'admin2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `archive`
--

CREATE TABLE IF NOT EXISTS `archive` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idsujet` int(11) NOT NULL,
  `auteur` varchar(30) NOT NULL,
  `designation` varchar(500) NOT NULL,
  `fin` varchar(20) NOT NULL,
  `debut` varchar(20) NOT NULL,
  `idstage` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `archive`
--

INSERT INTO `archive` (`id`, `idsujet`, `auteur`, `designation`, `fin`, `debut`, `idstage`) VALUES
(1, 1, 'wndn', 'blablablabla', '14-15-15', '24-24-25', 2),
(2, 11, 'AA14697', 'Messagerie instantanÃ©', '15-08-2018', '16-06-2018', 0);

-- --------------------------------------------------------

--
-- Table structure for table `departements`
--

CREATE TABLE IF NOT EXISTS `departements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `designation` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `departements`
--

INSERT INTO `departements` (`id`, `designation`) VALUES
(1, 'Informatique'),
(2, 'RH');

-- --------------------------------------------------------

--
-- Table structure for table `encadrants`
--

CREATE TABLE IF NOT EXISTS `encadrants` (
  `idEnc` int(11) NOT NULL AUTO_INCREMENT,
  `cinEnc` varchar(20) NOT NULL,
  `nomEnc` varchar(20) NOT NULL,
  `prenomEnc` varchar(20) NOT NULL,
  `datenEnc` varchar(20) NOT NULL,
  `dept` varchar(30) NOT NULL,
  `photoEnc` varchar(500) DEFAULT NULL,
  `emailEnc` varchar(30) NOT NULL,
  `telEnc` varchar(20) NOT NULL,
  `log` varchar(20) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `questionsecrete` varchar(20) NOT NULL,
  PRIMARY KEY (`idEnc`),
  UNIQUE KEY `cin` (`cinEnc`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

-- --------------------------------------------------------

--
-- Table structure for table `postulants`
--

CREATE TABLE IF NOT EXISTS `postulants` (
  `idPost` int(11) NOT NULL AUTO_INCREMENT,
  `emailPost` varchar(30) NOT NULL,
  `NomPrenomPost` varchar(50) NOT NULL,
  `telPost` varchar(13) NOT NULL,
  `lettreMotivation` varchar(80) NOT NULL,
  `cvPost` varchar(80) NOT NULL,
  `etatPost` tinyint(1) NOT NULL,
  PRIMARY KEY (`idPost`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `stage`
--

CREATE TABLE IF NOT EXISTS `stage` (
  `idstage` int(11) NOT NULL AUTO_INCREMENT,
  `idstagiaire` varchar(20) NOT NULL,
  `idencadrant` varchar(20) NOT NULL,
  `datedebut` varchar(20) NOT NULL,
  `datefin` varchar(20) NOT NULL,
  `idsujet` varchar(80) NOT NULL,
  `note` varchar(20) NOT NULL,
  `remarque` varchar(120) NOT NULL,
  `etat` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idstage`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `stage`
--

INSERT INTO `stage` (`idstage`, `idstagiaire`, `idencadrant`, `datedebut`, `datefin`, `idsujet`, `note`, `remarque`, `etat`) VALUES
(1, 'wa147852', 'AA14697', '16-06-2018', '15-08-2018', '1', '', '', 0),
(2, 'xa103241', 'AA14697', '16-06-2018', '15-08-2018', '11', '', '', 0),
(3, 'ALF44', 'aa693', '19-06-2018', '19-07-2018', '14', '', '', 0),
(4, 'xa103241', 'AA14697', '01-11-2018', '01-12-2018', '18', '', '', 0),
(5, 'qaz147', 'AAAA', '01-11-2018', '30-01-2019', '19', '', '', 0),
(6, 'az741258', 'qwxs123', '01-11-2018', '01-12-2018', '20', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `stagiaires`
--

CREATE TABLE IF NOT EXISTS `stagiaires` (
  `idSta` int(11) NOT NULL AUTO_INCREMENT,
  `cin` varchar(10) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `daten` varchar(20) NOT NULL,
  `sexe` varchar(20) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `email` varchar(30) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `niveau` varchar(20) NOT NULL,
  `ecole` varchar(50) NOT NULL,
  `filiere` varchar(50) NOT NULL,
  PRIMARY KEY (`idSta`),
  UNIQUE KEY `cin` (`cin`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `stagiaires`
--

INSERT INTO `stagiaires` (`idSta`, `cin`, `nom`, `prenom`, `daten`, `sexe`, `photo`, `email`, `tel`, `niveau`, `ecole`, `filiere`) VALUES
(1, 'xa103241', 'ATIF', 'Nabil', '11/04/1993', '', 'IMG_20170530_032733_535.jpg', 'z@tf.jp', '0659503111', '4eme annee', 'ISGA', 'Ingenierie des systemes informatiques'),
(2, 'wa147852', 'AZZANOUTTI', 'Soufiane', '06/06/1997', '', 'spoofian.jpg', 'nmaym@mail.tk', '0606060606', '4eme annee', 'ISGA', 'Ingenierie systemes informatiques'),
(9, 'qaz147', 'test', 'test', '15/15/15', 'H', '44390090_1847354625313865_9100396518896041984_n.jpg', 'a@a.c', '516515165', '558', '545', '554'),
(7, 'ALF44', 'TAHACHOUITE', 'Marouan', '01/01/1994', 'H', 'marouash.jpg', 'tah@tah.tk', '065841712', '4eme annee', 'ISGA / UNIVERSITE LORRAINE', 'MIAGE');

-- --------------------------------------------------------

--
-- Table structure for table `sujet`
--

CREATE TABLE IF NOT EXISTS `sujet` (
  `idSuj` int(11) NOT NULL AUTO_INCREMENT,
  `auteur` varchar(20) NOT NULL,
  `desg` varchar(50) NOT NULL,
  `descr` longtext NOT NULL,
  `duree` varchar(20) NOT NULL,
  PRIMARY KEY (`idSuj`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `sujet`
--

INSERT INTO `sujet` (`idSuj`, `auteur`, `desg`, `descr`, `duree`) VALUES
(1, 'AA14697', 'Gestion de Stock', 'Creation d''une application de gestion de stock informatique en php/mysql.\r\n', '3 mois');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
