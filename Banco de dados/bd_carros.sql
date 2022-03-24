-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 24-Mar-2022 às 07:54
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
-- Banco de dados: `bd_carros`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_carros`
--

DROP TABLE IF EXISTS `tb_carros`;
CREATE TABLE IF NOT EXISTS `tb_carros` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `montadora` varchar(30) NOT NULL,
  `modelo` varchar(30) NOT NULL,
  `ano` varchar(30) NOT NULL,
  `descricao` varchar(150) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `preco` float NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_carros`
--

INSERT INTO `tb_carros` (`codigo`, `montadora`, `modelo`, `ano`, `descricao`, `foto`, `preco`) VALUES
(4, 'Chevrolet', 'Celta', '2013', 'Manual & Ã  gasolina', 'fotos_carros/0c7877fc1b71a6ef57c8ded425785844.jpg', 50000),
(2, 'Chevrolet', 'S10', '2018', 'Manual & flex', 'fotos_carros/cruze-premier.webp', 25000),
(3, 'Fiat', 'Palio', '2014', 'Manual & flexxx', 'fotos_carros/fiatBravo.png', 30000),
(5, 'VolksWagen', 'Jetta', '2012', 'AutomÃ¡tico & Ã  gasolina', 'fotos_carros/hb-20.png', 40000),
(6, 'Honda', 'Fit', '2018', 'AutomÃ¡tico & Ã  gasolina', 'fotos_carros/kwid.png', 45000),
(7, 'Fiat', 'Onix', '2013', 'AutomÃ¡tico & Ã  gasolina', 'fotos_carros/345e4c899a66a0db6e53427c12166300.jpg', 25000),
(12, 'Chevrolet', 'Renegade', '2020', 'AutomÃ¡tico & Ã  gasolina', 'fotos_carros/f7c4a72decd7075c770d3f21764e1e23.jpg', 99000);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuarios`
--

DROP TABLE IF EXISTS `tb_usuarios`;
CREATE TABLE IF NOT EXISTS `tb_usuarios` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `senha` varchar(60) NOT NULL,
  `foto` varchar(80) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM AUTO_INCREMENT=64 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`codigo`, `nome`, `email`, `senha`, `foto`) VALUES
(17, 'AviÃ£o', 'b@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'fotos_usuarios/04134020afa167dd3c801ff958392379.jpg'),
(61, 'C', 'c@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710', 'fotos_usuarios/05ec3b34408942bf24631a648c9b36f0.jpg'),
(15, 'Pedro', 'pedro@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'fotos_usuarios/672efb0921b7d4844ed3958372fde3fb.jpg'),
(63, 'A', 'a1@a.com', '202cb962ac59075b964b07152d234b70', 'fotos_usuarios/f8b715924cecbfde95d0a1a19110610d.jpg'),
(62, 'A', 'aa@a.com', '202cb962ac59075b964b07152d234b70', 'fotosUsers/409dd85938e174f4a9a2c0242af65783.jpg'),
(60, 'A', 'a@a.com', '202cb962ac59075b964b07152d234b70', 'fotos_usuarios/3f34a3130a213f047dff26df5e4e98ad.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
