-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 13-Jun-2018 às 02:15
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `projeto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastros`
--

CREATE TABLE IF NOT EXISTS `cadastros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `permissao` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `cadastros`
--

INSERT INTO `cadastros` (`id`, `nome`, `email`, `senha`, `permissao`) VALUES
(1, 'Ismael', 'ismae@ismael.com', '123', 0),
(2, 'Paulo', 'paulo@paulo.com', '456', 0),
(3, 'Jonathan', 'jonathan@teste.com', '123', 1),
(4, 'Maria', 'secretaria@empresa.com', '123', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `departamento` varchar(100) NOT NULL,
  `ramal` varchar(100) NOT NULL,
  `celular` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=61 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `departamento`, `ramal`, `celular`, `email`) VALUES
(43, 'Paulo Roberto de Jesus', 'TI', '5000', '49 98843-4012', 'paulo@informatica.com'),
(44, 'Ismael Luan Alemão', 'TI', '5000', '49 98888-0000', 'ismael@informatica.com'),
(45, 'Jonathan João Ferreira', 'TI', '5000', '49 98812-1212', 'jonathan@informatica.com'),
(49, 'Bruno Souza', 'Administração', '5008', '49 99944-9999', 'bruno@administracao.com'),
(50, 'Ricardo Fernandes', 'Manutenção Mecânica', '5021', '49 99912-1212', 'ricardo@manutencao.com'),
(51, 'Flávio Ferreira', 'Manutenção Elétrica', '5022', '49 98844-3311', 'flavio@manutencao.com'),
(53, 'Marcio Oliveira', 'RH', '5004', '49 99191-9999', 'marcio@recrutamento.com'),
(55, 'José Maria Silva', 'Portaria', '5020', '49 99191-9191', 'josem@portaria.com'),
(56, 'Maria da Silva', 'Suporte Técnico', '500888', '49 98832-1212', 'maria@suporte.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
