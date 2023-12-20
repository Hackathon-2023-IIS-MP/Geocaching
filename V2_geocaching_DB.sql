-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Dic 20, 2023 alle 21:06
-- Versione del server: 10.4.28-MariaDB
-- Versione PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `geocaching`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `caccie`
--

CREATE TABLE `caccie` (
  `CodiceCaccia` char(8) NOT NULL,
  `Nome` varchar(50) DEFAULT NULL,
  `DataInizio` datetime DEFAULT NULL,
  `DataFine` datetime DEFAULT NULL,
  `MaxGiocatori` smallint(6) DEFAULT NULL,
  `Tipologia` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `caccie`
--

INSERT INTO `caccie` (`CodiceCaccia`, `Nome`, `DataInizio`, `DataFine`, `MaxGiocatori`, `Tipologia`) VALUES
('12345678', 'primaCaccia', '2023-12-20 00:00:00', NULL, 12, 'S'),
('23456789', 'SecondaCaccia', '2023-12-20 00:00:00', NULL, 150, 'T');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `caccie`
--
ALTER TABLE `caccie`
  ADD PRIMARY KEY (`CodiceCaccia`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
