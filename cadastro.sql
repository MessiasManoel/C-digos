-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 14-Mar-2024 às 18:40
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto_php`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--
DROP DATABASE projeto_php;
CREATE DATABASE projeto_php;
USE projeto_php;

DROP TABLE IF EXISTS `cadastro`;
CREATE TABLE IF NOT EXISTS `cadastro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(90) NOT NULL,
  `email` varchar(90) NOT NULL,
  `senha` varchar(90) NOT NULL,
  `sexo` varchar(90) NOT NULL,
  `cidade` varchar(90) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`id`, `nome`, `email`, `senha`, `sexo`, `cidade`) VALUES
(3, 'Judson Martins', 'judson@versatilti.com.br', '123', 'masculino', 'BrasÃ­lia/DF'),
(4, 'Cibele Santana', 'cibele@gmail.com', '123', 'feminino', 'Taguatinga/DF'),
(5, 'Kauan Barros', 'kauan@versatilti.com.br', '123', 'masculino', 'Sobradinho/DF'),
(6, 'Kamila Sales', 'kamila@versatilti.com.br', '123', 'feminino', 'BrasÃ­lia/DF'),
(7, 'Giovanna Santana', 'gi@versatilti.com.br', '123', 'feminino', 'Gama/DF');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
