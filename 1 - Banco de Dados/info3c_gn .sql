-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 11-Dez-2017 às 04:38
-- Versão do servidor: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `info3c_gn`
--
CREATE DATABASE IF NOT EXISTS `info3c_gn` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `info3c_gn`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_usuario`
--

DROP TABLE IF EXISTS `cad_usuario`;
CREATE TABLE `cad_usuario` (
  `ID` int(11) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `palavra_chave` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cad_usuario`
--

INSERT INTO `cad_usuario` (`ID`, `usuario`, `senha`, `email`, `palavra_chave`) VALUES
(1, 'gabriel80n', 'Estelar@10', 'gabrielnpmoraess@hotmail.com', 'Uberabinha');

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentario_site`
--

DROP TABLE IF EXISTS `comentario_site`;
CREATE TABLE `comentario_site` (
  `ID` int(11) NOT NULL,
  `comentario` varchar(255) NOT NULL,
  `identificacao` varchar(500) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `data` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cad_usuario`
--
ALTER TABLE `cad_usuario`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `usuario` (`usuario`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `comentario_site`
--
ALTER TABLE `comentario_site`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cad_usuario`
--
ALTER TABLE `cad_usuario`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comentario_site`
--
ALTER TABLE `comentario_site`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
