-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11-Jan-2022 às 16:14
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cadastro_forms`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `dados_candidato`
--

DROP TABLE IF EXISTS `dados_candidato`;
CREATE TABLE IF NOT EXISTS `dados_candidato` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `Data_nascimento` date NOT NULL,
  `nome` varchar(90) NOT NULL,
  `email` varchar(90) NOT NULL,
  `rua` varchar(45) NOT NULL,
  `bairro` varchar(45) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `telefone` int(11) NOT NULL,
  `cargo` varchar(15) NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `numero` varchar(5) NOT NULL,
  `complemento` varchar(15) NOT NULL,
  `formacao_academica` varchar(15) NOT NULL,
  `tempo_servico_area_saude` int(3) NOT NULL,
  `experiencia_profiss_area_hospitalar` int(3) NOT NULL,
  `pontuacao_formacao_academica` int(3) NOT NULL,
  `cep` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `dados_candidato`
--

INSERT INTO `dados_candidato` (`id`, `Data_nascimento`, `nome`, `email`, `rua`, `bairro`, `cpf`, `telefone`, `cargo`, `cidade`, `numero`, `complemento`, `formacao_academica`, `tempo_servico_area_saude`, `experiencia_profiss_area_hospitalar`, `pontuacao_formacao_academica`, `cep`) VALUES
(1, '1997-12-18', 'ericles teste', 'ericles@gmail.com', 'Rua Olegário Muniz', 'José Carlos Vale de Lima', '130.988.126', 0, 'assistente_soci', 'Montes Claros', '58', 'conjunto', 'mestrado', 4, 4, 25, 39402351),
(2, '1997-12-18', 'ericles teste', 'ericles@gmail.com', 'Rua Olegário Muniz', 'José Carlos Vale de Lima', '130.988.126', 0, 'assistente_soci', 'Montes Claros', '58', 'conjunto', 'mestrado', 4, 4, 25, 39402351),
(3, '1997-12-18', 'ericles teste', 'ericles@gmail.com', 'Rua Olegário Muniz', 'José Carlos Vale de Lima', '130.988.126', 0, 'assistente_soci', 'Montes Claros', '58', 'conjunto', 'mestrado', 4, 4, 25, 39402351);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
