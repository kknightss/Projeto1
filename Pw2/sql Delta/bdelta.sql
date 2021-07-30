-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Jul-2021 às 21:47
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ds2`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `bdelta`
--

CREATE TABLE `bdelta` (
  `id` int(11) NOT NULL,
  `a` int(11) NOT NULL,
  `b` int(11) NOT NULL,
  `c` int(11) NOT NULL,
  `delta` int(11) NOT NULL,
  `x1` int(11) NOT NULL,
  `x2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `bdelta`
--

INSERT INTO `bdelta` (`id`, `a`, `b`, `c`, `delta`, `x1`, `x2`) VALUES
(1, 1, -5, 6, 1, 3, 2),
(2, 1, -5, 6, 1, 3, 2),
(3, 1, -5, 6, 1, 3, 2),
(4, 1, -5, 6, 1, 3, 2),
(5, 1, -5, 6, 1, 3, 2),
(6, 1, -5, 6, 1, 3, 2),
(7, 1, -5, 6, 1, 3, 2),
(8, 1, -5, 6, 1, 3, 2),
(9, 1, -5, 6, 1, 3, 2),
(10, 1, -5, 6, 1, 3, 2),
(11, 1, -5, 6, 1, 3, 2),
(12, 1, -5, 6, 1, 3, 2),
(13, 1, -5, 6, 1, 3, 2),
(14, 1, -5, 6, 1, 3, 2),
(15, 1, -5, 6, 1, 3, 2),
(16, 1, -5, 6, 1, 3, 2),
(17, 1, -5, 6, 1, 3, 2),
(18, 1, -5, 6, 1, 3, 2),
(19, 1, -5, 6, 1, 3, 2),
(20, 1, -5, 6, 1, 3, 2),
(21, 1, -5, 6, 1, 3, 2),
(22, 1, -5, 6, 1, 3, 2),
(23, 1, -5, 6, 1, 3, 2),
(24, 1, -5, 6, 1, 3, 2),
(25, 1, -5, 6, 1, 3, 2),
(26, 1, -5, 6, 1, 3, 2),
(27, 1, -5, 6, 1, 3, 2),
(28, 1, -5, 6, 1, 3, 2),
(29, 1, -5, 6, 1, 3, 2),
(30, 1, -5, 6, 1, 3, 2),
(31, 1, -5, 6, 1, 3, 2),
(32, 1, -5, 6, 1, 3, 2),
(33, 1, -5, 6, 1, 3, 2),
(34, 1, -5, 6, 1, 3, 2),
(35, 1, -5, 6, 1, 3, 2),
(36, 1, -5, 6, 1, 3, 2),
(37, 1, -5, 6, 1, 3, 2),
(38, 1, -5, 6, 1, 3, 2),
(39, 1, -5, 6, 1, 3, 2),
(40, 1, -5, 6, 1, 3, 2),
(41, 1, -5, 6, 1, 3, 2),
(42, 1, -5, 6, 1, 3, 2),
(43, 1, -5, 6, 1, 3, 2),
(44, 1, -5, 6, 1, 3, 2),
(45, 1, -5, 6, 1, 3, 2),
(46, 1, -5, 6, 1, 3, 2),
(47, 1, -5, 6, 1, 3, 2),
(48, 1, -5, 6, 1, 3, 2),
(49, 1, -5, 6, 1, 3, 2),
(50, 1, -5, 6, 1, 3, 2),
(51, 1, -5, 6, 1, 3, 2),
(52, 1, -5, 6, 1, 3, 2),
(53, 1, -5, 6, 1, 3, 2),
(54, 1, -5, 6, 1, 3, 2),
(55, 1, -5, 6, 1, 3, 2),
(56, 1, -5, 6, 1, 3, 2),
(57, 1, -5, 6, 1, 3, 2),
(58, 1, -5, 6, 1, 3, 2),
(59, 1, 2, 3, -8, 0, 0),
(60, 1, -5, 6, 1, 3, 2),
(61, 1, -5, 6, 1, 3, 2);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `bdelta`
--
ALTER TABLE `bdelta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `bdelta`
--
ALTER TABLE `bdelta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
