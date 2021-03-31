-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 14-Nov-2020 às 15:34
-- Versão do servidor: 5.7.26
-- versão do PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cervejaria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `ambev`
--

DROP TABLE IF EXISTS `ambev`;
CREATE TABLE IF NOT EXISTS `ambev` (
  `skol600` int(3) DEFAULT NULL,
  `skol1` int(3) NOT NULL,
  `skolromarinho` int(3) NOT NULL,
  `skollatao` int(3) NOT NULL,
  `skollata` int(3) NOT NULL,
  `skolpuromalte` int(3) NOT NULL,
  `skolbeatsazul` int(3) NOT NULL,
  `skolbeatsvermelha` int(3) NOT NULL,
  `skolbeats150` int(3) NOT NULL,
  `skolbeatsgt` int(3) NOT NULL,
  `brahma600` int(3) NOT NULL,
  `brahma1` int(3) NOT NULL,
  `brahmaromarinho` int(3) NOT NULL,
  `brahmalatao` int(3) NOT NULL,
  `brahmalata` int(3) NOT NULL,
  `brahma0` int(3) NOT NULL,
  `brahmamalzbier` int(3) NOT NULL,
  `brahmaduplo` int(3) NOT NULL,
  `sub600` int(3) NOT NULL,
  `sub1` int(3) NOT NULL,
  `sublata` int(11) NOT NULL,
  `boa600` int(11) NOT NULL,
  `boa1` int(11) NOT NULL,
  `boalata` int(11) NOT NULL,
  `boaromarinho` int(11) NOT NULL,
  `original600` int(11) NOT NULL,
  `originallata` int(11) NOT NULL,
  `budweiserlong` int(11) NOT NULL,
  `budweiserlatao` int(11) NOT NULL,
  `budweiserlata` int(11) NOT NULL,
  `caracu` int(11) NOT NULL,
  `stella` int(11) NOT NULL,
  `becks` int(11) NOT NULL,
  `serrana600` int(11) NOT NULL,
  `serranalata` int(11) NOT NULL,
  `guarana1` int(11) NOT NULL,
  `guarana1_ret` int(11) NOT NULL,
  `guarana2` int(11) NOT NULL,
  `guarana2_0` int(11) NOT NULL,
  `guaranalata` int(11) NOT NULL,
  `guaranacaculao` int(11) NOT NULL,
  `pepsi1` int(11) NOT NULL,
  `pepsi1_ret` int(11) NOT NULL,
  `pepsi2` int(11) NOT NULL,
  `pepsicaculao` int(11) NOT NULL,
  `h2olimao500` int(11) NOT NULL,
  `h2olimoneto500` int(11) NOT NULL,
  `h2olimao1` int(11) NOT NULL,
  `h2olimoneto1` int(11) NOT NULL,
  `tonica` int(11) NOT NULL,
  `cxromarinho` int(11) NOT NULL,
  `cx600` int(11) NOT NULL,
  `cx1` int(11) NOT NULL,
  `cxguarana` int(11) NOT NULL,
  `cxpepsi` int(11) NOT NULL,
  `data` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `ambev`
--

INSERT INTO `ambev` (`skol600`, `skol1`, `skolromarinho`, `skollatao`, `skollata`, `skolpuromalte`, `skolbeatsazul`, `skolbeatsvermelha`, `skolbeats150`, `skolbeatsgt`, `brahma600`, `brahma1`, `brahmaromarinho`, `brahmalatao`, `brahmalata`, `brahma0`, `brahmamalzbier`, `brahmaduplo`, `sub600`, `sub1`, `sublata`, `boa600`, `boa1`, `boalata`, `boaromarinho`, `original600`, `originallata`, `budweiserlong`, `budweiserlatao`, `budweiserlata`, `caracu`, `stella`, `becks`, `serrana600`, `serranalata`, `guarana1`, `guarana1_ret`, `guarana2`, `guarana2_0`, `guaranalata`, `guaranacaculao`, `pepsi1`, `pepsi1_ret`, `pepsi2`, `pepsicaculao`, `h2olimao500`, `h2olimoneto500`, `h2olimao1`, `h2olimoneto1`, `tonica`, `cxromarinho`, `cx600`, `cx1`, `cxguarana`, `cxpepsi`, `data`) VALUES
(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, NULL),
(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, NULL),
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL),
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL),
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL),
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL),
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL),
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL),
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL),
(23, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL),
(12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL),
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL),
(6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL),
(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 15, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, NULL),
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2028-08-20'),
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2028-08-20'),
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2028-08-20'),
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2028-08-20'),
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2028-08-20'),
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2028-08-20'),
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2028-08-20'),
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2028-08-20'),
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2028-08-20'),
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2028-08-20'),
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2028-08-20'),
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2028-08-20'),
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2028-08-20'),
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2028-08-20'),
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2028-08-20'),
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2028-08-20'),
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2028-08-20'),
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2028-08-20'),
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2028-08-20'),
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2028-08-20'),
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2028-08-20'),
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2028-08-20'),
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2028-08-20'),
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2028-08-20'),
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2028-08-20'),
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2028-08-20'),
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2028-08-20'),
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2028-08-20'),
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2028-08-20'),
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2028-08-20'),
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2028-08-20'),
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2028-08-20'),
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2028-08-20'),
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 32, 0, 0, 0, '2020-08-28'),
(1, 1, 2, 3, 4, 5, 5, 0, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 15, 5, 5, 5, 5, 5, 5, 55, 5, 2, 3, 4, 33, 44, 33, 33, 22, 22, 44, '2020-09-28');

-- --------------------------------------------------------

--
-- Estrutura da tabela `coca`
--

DROP TABLE IF EXISTS `coca`;
CREATE TABLE IF NOT EXISTS `coca` (
  `coca_ret2l` int(11) NOT NULL,
  `coca_ret1l` int(11) NOT NULL,
  `coca_pet2l` int(11) NOT NULL,
  `coca_lata` int(11) NOT NULL,
  `fanta_lret2l` int(11) NOT NULL,
  `fanta_lpet2l` int(11) NOT NULL,
  `fanta_llata` int(11) NOT NULL,
  `fanta_upet2l` int(11) NOT NULL,
  `fanta_ulata` int(11) NOT NULL,
  `sprite_pet2l` int(11) NOT NULL,
  `sprite_lata` int(11) NOT NULL,
  `schweppes_pet1l` int(11) NOT NULL,
  `schweppes_lata` int(11) NOT NULL,
  `data` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `coca`
--

INSERT INTO `coca` (`coca_ret2l`, `coca_ret1l`, `coca_pet2l`, `coca_lata`, `fanta_lret2l`, `fanta_lpet2l`, `fanta_llata`, `fanta_upet2l`, `fanta_ulata`, `sprite_pet2l`, `sprite_lata`, `schweppes_pet1l`, `schweppes_lata`, `data`) VALUES
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-09-29'),
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-09-29'),
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-09-29');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cristal`
--

DROP TABLE IF EXISTS `cristal`;
CREATE TABLE IF NOT EXISTS `cristal` (
  `cri_lata` int(11) NOT NULL,
  `cri_latao` int(11) NOT NULL,
  `cri_600` int(11) NOT NULL,
  `cri_litrao` int(11) NOT NULL,
  `lk_lata` int(11) NOT NULL,
  `lk_latao` int(11) NOT NULL,
  `ita_lata` int(11) NOT NULL,
  `ita_zero` int(11) NOT NULL,
  `petra_lata` int(11) NOT NULL,
  `petra_600` int(11) NOT NULL,
  `tnt_lata` int(11) NOT NULL,
  `tnt_latao` int(11) NOT NULL,
  `data` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `cristal`
--

INSERT INTO `cristal` (`cri_lata`, `cri_latao`, `cri_600`, `cri_litrao`, `lk_lata`, `lk_latao`, `ita_lata`, `ita_zero`, `petra_lata`, `petra_600`, `tnt_lata`, `tnt_latao`, `data`) VALUES
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-09-28');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ferrari`
--

DROP TABLE IF EXISTS `ferrari`;
CREATE TABLE IF NOT EXISTS `ferrari` (
  `ferrari` int(11) NOT NULL,
  `pic_gua` int(11) NOT NULL,
  `pic_cola` int(11) NOT NULL,
  `pic_uva` int(11) NOT NULL,
  `pic_laranja` int(11) NOT NULL,
  `pic_limao` int(11) NOT NULL,
  `data` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `ferrari`
--

INSERT INTO `ferrari` (`ferrari`, `pic_gua`, `pic_cola`, `pic_uva`, `pic_laranja`, `pic_limao`, `data`) VALUES
(0, 0, 0, 0, 0, 0, '2020-09-29');

-- --------------------------------------------------------

--
-- Estrutura da tabela `heineken`
--

DROP TABLE IF EXISTS `heineken`;
CREATE TABLE IF NOT EXISTS `heineken` (
  `hei_lata` int(11) NOT NULL,
  `hei_long` int(11) NOT NULL,
  `hei_600` int(11) NOT NULL,
  `ei_pilsen` int(11) NOT NULL,
  `ei_pale` int(11) NOT NULL,
  `ei_ipa` int(11) NOT NULL,
  `data` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `heineken`
--

INSERT INTO `heineken` (`hei_lata`, `hei_long`, `hei_600`, `ei_pilsen`, `ei_pale`, `ei_ipa`, `data`) VALUES
(0, 0, 0, 0, 0, 0, '2020-09-29'),
(1, 2, -1, 3, 4, 5, '2020-09-29');

-- --------------------------------------------------------

--
-- Estrutura da tabela `imperio`
--

DROP TABLE IF EXISTS `imperio`;
CREATE TABLE IF NOT EXISTS `imperio` (
  `imp_350` int(11) NOT NULL,
  `imp_269` int(11) NOT NULL,
  `imp_473` int(11) NOT NULL,
  `imp_lager` int(11) NOT NULL,
  `imp_gold` int(11) NOT NULL,
  `imp_600` int(11) NOT NULL,
  `imp_romarinho` int(11) NOT NULL,
  `data` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `imperio`
--

INSERT INTO `imperio` (`imp_350`, `imp_269`, `imp_473`, `imp_lager`, `imp_gold`, `imp_600`, `imp_romarinho`, `data`) VALUES
(12, 3, 0, 0, 0, 0, 0, NULL),
(0, 0, 0, 0, 0, 0, 0, '2020-09-28'),
(0, 0, 0, 0, 0, 0, 0, '2020-09-28'),
(0, 0, 0, 0, 0, 0, 0, '2020-09-28'),
(0, 0, 0, 1, 0, 0, 0, '2020-09-28'),
(0, 0, 0, 0, 0, 0, 0, '2020-09-28'),
(0, 0, 0, 0, 0, 0, 0, '2020-09-28'),
(0, 0, 0, 0, 0, 0, 0, '2020-09-28'),
(0, 0, 0, 0, 0, 0, 0, '2020-09-28'),
(0, 0, 0, 0, 0, 0, 0, '2020-09-28'),
(0, 0, 0, 0, 0, 0, 0, '2020-09-28'),
(0, 0, 0, 0, 0, 0, 0, '2020-09-28'),
(0, 0, 0, 0, 0, 0, 0, '2020-09-28');

-- --------------------------------------------------------

--
-- Estrutura da tabela `poty`
--

DROP TABLE IF EXISTS `poty`;
CREATE TABLE IF NOT EXISTS `poty` (
  `poty_gua` int(11) NOT NULL,
  `poty_uva` int(11) NOT NULL,
  `poty_laranja` int(11) NOT NULL,
  `poty_limao` int(11) NOT NULL,
  `poty_citrus` int(11) NOT NULL,
  `roller` int(11) NOT NULL,
  `data` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `poty`
--

INSERT INTO `poty` (`poty_gua`, `poty_uva`, `poty_laranja`, `poty_limao`, `poty_citrus`, `roller`, `data`) VALUES
(0, 0, 0, 0, 0, 0, '2020-09-29'),
(0, 0, 0, 0, 0, 0, '2020-09-29'),
(1, 2, 3, 4, 5, 6, '2020-09-29');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sobebe`
--

DROP TABLE IF EXISTS `sobebe`;
CREATE TABLE IF NOT EXISTS `sobebe` (
  `santo_expedito` int(11) NOT NULL,
  `chapinha` int(11) NOT NULL,
  `vinho_marques` int(11) NOT NULL,
  `del_sole` int(11) NOT NULL,
  `velho_barreiro` int(11) NOT NULL,
  `velho_gold` int(11) NOT NULL,
  `sao_francisco` int(11) NOT NULL,
  `51` int(11) NOT NULL,
  `presidente` int(11) NOT NULL,
  `41` int(11) NOT NULL,
  `21` int(11) NOT NULL,
  `polak` int(11) NOT NULL,
  `paratini` int(11) NOT NULL,
  `paratini_tinto` int(11) NOT NULL,
  `conhaque_mel` int(11) NOT NULL,
  `conhaque_alcatrao` int(11) NOT NULL,
  `paizano` int(11) NOT NULL,
  `diplomata` int(11) NOT NULL,
  `campari` int(11) NOT NULL,
  `ervas amargas` int(11) NOT NULL,
  `jurupinga` int(11) NOT NULL,
  `51_fruitmix` int(11) NOT NULL,
  `51_limao` int(11) NOT NULL,
  `51_tangerina` int(11) NOT NULL,
  `51_balada` int(11) NOT NULL,
  `51_kiwi` int(11) NOT NULL,
  `51_maracuja` int(11) NOT NULL,
  `tulinha` int(11) NOT NULL,
  `corote_tutti` int(11) NOT NULL,
  `corote_morango` int(11) NOT NULL,
  `corote_pessego` int(11) NOT NULL,
  `corote_maracuja` int(11) NOT NULL,
  `corote_limao` int(11) NOT NULL,
  `corote_menta` int(11) NOT NULL,
  `corote_baunilhalimão:` int(11) NOT NULL,
  `corote_bluberry` int(11) NOT NULL,
  `corote_canela` int(11) NOT NULL,
  `corote_acai` int(11) NOT NULL,
  `data` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `sobebe`
--

INSERT INTO `sobebe` (`santo_expedito`, `chapinha`, `vinho_marques`, `del_sole`, `velho_barreiro`, `velho_gold`, `sao_francisco`, `51`, `presidente`, `41`, `21`, `polak`, `paratini`, `paratini_tinto`, `conhaque_mel`, `conhaque_alcatrao`, `paizano`, `diplomata`, `campari`, `ervas amargas`, `jurupinga`, `51_fruitmix`, `51_limao`, `51_tangerina`, `51_balada`, `51_kiwi`, `51_maracuja`, `tulinha`, `corote_tutti`, `corote_morango`, `corote_pessego`, `corote_maracuja`, `corote_limao`, `corote_menta`, `corote_baunilhalimão:`, `corote_bluberry`, `corote_canela`, `corote_acai`, `data`) VALUES
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-09-28'),
(1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-09-28'),
(0, 0, 0, -12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-09-28'),
(0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-09-28'),
(35, 36, 37, 38, 22, 23, 24, 19, 26, 20, 21, 0, 29, 28, 27, 30, 32, 31, 33, 25, 34, 16, 12, 14, 17, 15, 13, 1, 0, 3, 5, 8, 4, 2, 9, 6, 10, 11, '2020-09-28'),
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-09-28'),
(0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 12, 12, 0, 0, '2020-09-28'),
(35, 36, 37, 38, 22, 23, 24, 19, 26, 20, 21, 18, 29, 28, 27, 30, 32, 31, 33, 25, 34, 16, 12, 14, 17, 15, 13, 1, 7, 3, 5, 8, 4, 2, 9, 6, 10, 11, '2020-09-28');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
