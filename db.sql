-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generato il: 5 dic, 2017 at 08:57 AM
-- Versione MySQL: 5.1.54
-- Versione PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `essentia`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `domandeshow`
--

CREATE TABLE IF NOT EXISTS `domandeshow` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `domanda` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dump dei dati per la tabella `domandeshow`
--

INSERT INTO `domandeshow` (`id`, `domanda`) VALUES
(1, 'chi e il piu simpy della scuola'),
(2, 'chi e il piu simpy della scuola'),
(3, 'chi e il piu swag della scuola'),
(4, 'chi e il piu figo della scuola'),
(5, 'chi e il piu intelligente della scuola'),
(6, 'chi e il piu bravo della scuola'),
(7, 'chi e il piu brutto della scuola');

-- --------------------------------------------------------

--
-- Struttura della tabella `scuola`
--

CREATE TABLE IF NOT EXISTS `scuola` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `indirizzo` varchar(75) DEFAULT NULL,
  `nome` varchar(70) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dump dei dati per la tabella `scuola`
--


-- --------------------------------------------------------

--
-- Struttura della tabella `utente`
--

CREATE TABLE IF NOT EXISTS `utente` (
  `username` varchar(90) NOT NULL,
  `scuola_id` int(10) unsigned NOT NULL,
  `nome` varchar(60) DEFAULT NULL,
  `email` varchar(75) DEFAULT NULL,
  `ip` varchar(100) DEFAULT NULL,
  `genere` char(1) DEFAULT NULL,
  `scuola` varchar(100) DEFAULT NULL,
  `classe` varchar(100) DEFAULT NULL,
  `punteggiototale` int(10) DEFAULT NULL,
  `nascita` date DEFAULT NULL,
  `cognome` varchar(60) DEFAULT NULL,
  `password_2` varchar(120) DEFAULT NULL,
  PRIMARY KEY (`username`),
  KEY `utente_FKIndex1` (`scuola_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `utente`
--

INSERT INTO `utente` (`username`, `scuola_id`, `nome`, `email`, `ip`, `genere`, `scuola`, `classe`, `punteggiototale`, `nascita`, `cognome`, `password_2`) VALUES
('jenny', 0, 'Jenny', 'admin@gmail.com', '127.0.0.1', 'F', 'Salvemini', '3P', 4, '1998-09-01', 'Bettini', '5f4dcc3b5aa765d61d8327deb882cf99'),
('lagra', 0, 'Akram', 'lagrazna@outlook.it', '127.0.0.1', 'M', 'Salvemini', '5P', 8, '1999-08-04', 'Lagrazna', '5f4dcc3b5aa765d61d8327deb882cf99');
