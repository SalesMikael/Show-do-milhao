-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 07-Maio-2023 às 14:54
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `showdb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `partidas`
--

DROP TABLE IF EXISTS `partidas`;
CREATE TABLE IF NOT EXISTS `partidas` (
  `idPartida` int NOT NULL AUTO_INCREMENT,
  `idJogador` int NOT NULL,
  `premiacao` decimal(10,2) NOT NULL,
  `eliminacoesUsadas` int NOT NULL DEFAULT '0',
  `numErros` int NOT NULL DEFAULT '0',
  `numAcertos` int NOT NULL DEFAULT '0',
  `numPerguntasRespondidas` int NOT NULL DEFAULT '0',
  `idPerguntaAtual` int NOT NULL,
  `motivoEncerramento` varchar(255) NOT NULL,
  PRIMARY KEY (`idPartida`),
  KEY `idJogador` (`idJogador`),
  KEY `idPerguntaAtual` (`idPerguntaAtual`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `perguntas`
--

DROP TABLE IF EXISTS `perguntas`;
CREATE TABLE IF NOT EXISTS `perguntas` (
  `idPerguntas` int NOT NULL AUTO_INCREMENT,
  `enunciado` varchar(255) NOT NULL,
  `alternativa1` varchar(255) NOT NULL,
  `alternativa2` varchar(255) NOT NULL,
  `alternativa3` varchar(255) NOT NULL,
  `alternativa4` varchar(255) NOT NULL,
  `resposta` varchar(255) NOT NULL,
  `revisao` int NOT NULL,
  `criador_id` int NOT NULL,
  PRIMARY KEY (`idPerguntas`),
  KEY `criador_id` (`criador_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `perguntas`
--

INSERT INTO `perguntas` (`idPerguntas`, `enunciado`, `alternativa1`, `alternativa2`, `alternativa3`, `alternativa4`, `resposta`, `revisao`, `criador_id`) VALUES
(1, 'sdasdasdas', 'dasdas', 'dasdaa', 'dasd', 'das', 'dasd', 0, 1),
(2, 'Normalmente, quantos litros de sangue uma pessoa tem? Em média, quantos são retirados numa doação de sangue?', 'Entre 4 a 6 litros. São retirados 450 mililitros.', 'Tem 7 litros. São retirados 1,5 litros', 'Tem 0,5 litros. São retirados 0,5 litros', 'Tem entre 2 a 4 litros. São retirados 450 mililitros', 'Entre 4 a 6 litros. São retirados 450 mililitros.', 1, 1),
(3, 'Quanto e 2+2?', '4', '6', '8', '10', '4', 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `revisoes`
--

DROP TABLE IF EXISTS `revisoes`;
CREATE TABLE IF NOT EXISTS `revisoes` (
  `idRevisao` int NOT NULL AUTO_INCREMENT,
  `idPergunta` int NOT NULL,
  `aprovada` tinyint(1) NOT NULL DEFAULT '0',
  `idUsuario` int NOT NULL,
  PRIMARY KEY (`idRevisao`),
  KEY `idUsuario` (`idUsuario`),
  KEY `idPergunta` (`idPergunta`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `reset_token` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nickname` varchar(255) NOT NULL,
  `avatar` blob NOT NULL,
  `perguntas_aceitas` int NOT NULL DEFAULT '0',
  `perguntas_nao_aceitas` int NOT NULL DEFAULT '0',
  `premiacao_total` decimal(10,2) NOT NULL DEFAULT '0.00',
  `quat_eliminacoes_usadas` int NOT NULL DEFAULT '0',
  `numero_derrotas_erro` int NOT NULL DEFAULT '0',
  `derrotas_numeros_paradas` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `password`, `reset_token`, `email`, `nickname`, `avatar`, `perguntas_aceitas`, `perguntas_nao_aceitas`, `premiacao_total`, `quat_eliminacoes_usadas`, `numero_derrotas_erro`, `derrotas_numeros_paradas`) VALUES
(1, 'Vicente Neto', '25f9e794323b453885f5181f1b624d0b', 'cd50693d240201e71fdea7fe766ae595', 'vneto500@gmail.com', 'Fallen', '', 0, 0, '0.00', 0, 0, 0),
(2, 'Lucio', 'e10adc3949ba59abbe56e057f20f883e', '', 'vn@gmail.com', 'luc', '', 0, 0, '0.00', 0, 0, 0),
(3, 'sEIIIIII', '81dc9bdb52d04dc20036dbd8313ed055', '', 'meuemail@gmail.com', 'thainin', '', 0, 0, '0.00', 0, 0, 0),
(4, '', 'e7d80ffeefa212b7c5c55700e4f7193e', '', 'luciofranca2014@gmail.com', 'lusciusinho', '', 0, 0, '0.00', 0, 0, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
