-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16/05/2025 às 18:59
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `neogestão`
--
CREATE DATABASE IF NOT EXISTS `neogestão` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `neogestão`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `agendamentos`
--

CREATE TABLE `agendamentos` (
  `id` int(11) NOT NULL,
  `id_empresa` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_quadra` int(11) NOT NULL,
  `dt` date NOT NULL,
  `horario_agendado` time NOT NULL,
  `tempo_alocado` int(11) NOT NULL,
  `valor` float(10,2) NOT NULL,
  `estado_conta` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `id_empresa` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `sobrenome` varchar(50) NOT NULL,
  `dt_nascimento` date DEFAULT NULL,
  `email` varchar(45) NOT NULL,
  `cpf` char(14) NOT NULL,
  `rg` char(12) NOT NULL,
  `celular` char(11) NOT NULL,
  `cep` char(9) NOT NULL,
  `uf` char(2) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `rua` varchar(50) NOT NULL,
  `nCasa` varchar(7) NOT NULL,
  `complemento` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `empresa`
--

CREATE TABLE `empresa` (
  `id` int(11) NOT NULL,
  `razão_social` varchar(75) NOT NULL,
  `email` varchar(75) NOT NULL,
  `telefone` char(12) DEFAULT NULL,
  `cnpj` char(18) NOT NULL,
  `cep` char(9) NOT NULL,
  `uf` char(2) DEFAULT NULL,
  `cidade` varchar(75) DEFAULT NULL,
  `rua` varchar(75) DEFAULT NULL,
  `numero` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `horarios`
--

CREATE TABLE `horarios` (
  `id` int(11) NOT NULL,
  `id_empresa` int(11) NOT NULL,
  `h_abertura` int(11) NOT NULL,
  `h_fechamento` int(11) NOT NULL,
  `intervalo_tempo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `modalidade_quadra`
--

CREATE TABLE `modalidade_quadra` (
  `id` int(11) NOT NULL,
  `modalidade` varchar(75) NOT NULL,
  `descr` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `modalidade_quadra`
--

INSERT INTO `modalidade_quadra` (`id`, `modalidade`, `descr`) VALUES
(1, 'Futebol Society', 'Quadra de grama sintética para futebol society, jogos de 7x7.'),
(2, 'Futsal', 'Quadra coberta de piso liso para futsal, dimensões oficiais.'),
(3, 'Vôlei de Praia', 'Quadra de areia para vôlei de praia, com rede ajustável.'),
(4, 'Basquete', 'Quadra de piso rígido para basquete, com tabelas oficiais.'),
(5, 'Tênis', 'Quadra de saibro para tênis, com rede e marcações oficiais.'),
(6, 'Beach Tennis', 'Quadra de areia para beach tennis, com rede e dimensões adequadas.'),
(7, 'Handebol', 'Quadra poliesportiva adaptada para jogos de handebol.'),
(8, 'Padel', 'Quadra fechada de vidro e grama sintética para padel.'),
(9, 'Peteca', 'Quadra de piso liso para prática de peteca, com marcações específicas.'),
(10, 'Badminton', 'Quadra coberta para badminton, com rede e marcações oficiais.'),
(11, 'Hóquei Indoor', 'Quadra coberta para hóquei indoor, piso liso e marcações.'),
(12, 'Futebol de Areia', 'Quadra de areia para futebol, ideal para jogos recreativos.'),
(13, 'Vôlei Indoor', 'Quadra coberta de piso liso para vôlei tradicional.'),
(14, 'Basquete 3x3', 'Quadra reduzida para basquete 3x3, com uma tabela.'),
(15, 'Squash', 'Quadra fechada para squash, paredes de rebote.'),
(16, 'Futebol Infantil', 'Quadra menor, adaptada para futebol infantil.'),
(17, 'Tênis de Mesa', 'Espaço coberto para prática de tênis de mesa.'),
(18, 'Pickleball', 'Quadra adaptada para pickleball, esporte de raquete.'),
(19, 'Futebol Americano Flag', 'Quadra adaptada para flag football, sem contato físico.'),
(20, 'Rugby Touch', 'Quadra de grama sintética para rugby touch, sem contato físico.');

-- --------------------------------------------------------

--
-- Estrutura para tabela `quadras`
--

CREATE TABLE `quadras` (
  `id` int(11) NOT NULL,
  `id_empresa` int(11) NOT NULL,
  `id_modalidade` int(11) NOT NULL,
  `descr` varchar(150) DEFAULT NULL,
  `disponibilidade` int(11) NOT NULL,
  `valor_hora` float(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `id_empresa` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `senha` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `agendamentos`
--
ALTER TABLE `agendamentos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_empresa` (`id_empresa`),
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `id_quadra` (`id_quadra`);

--
-- Índices de tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_empresa` (`id_empresa`);

--
-- Índices de tabela `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `horarios`
--
ALTER TABLE `horarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_empresa` (`id_empresa`);

--
-- Índices de tabela `modalidade_quadra`
--
ALTER TABLE `modalidade_quadra`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `quadras`
--
ALTER TABLE `quadras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_empresa` (`id_empresa`),
  ADD KEY `id_modalidade` (`id_modalidade`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_empresa` (`id_empresa`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `agendamentos`
--
ALTER TABLE `agendamentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `horarios`
--
ALTER TABLE `horarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `modalidade_quadra`
--
ALTER TABLE `modalidade_quadra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `quadras`
--
ALTER TABLE `quadras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `agendamentos`
--
ALTER TABLE `agendamentos`
  ADD CONSTRAINT `agendamentos_ibfk_1` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id`),
  ADD CONSTRAINT `agendamentos_ibfk_2` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id`),
  ADD CONSTRAINT `agendamentos_ibfk_3` FOREIGN KEY (`id_quadra`) REFERENCES `quadras` (`id`);

--
-- Restrições para tabelas `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `clientes_ibfk_1` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id`);

--
-- Restrições para tabelas `horarios`
--
ALTER TABLE `horarios`
  ADD CONSTRAINT `horarios_ibfk_1` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id`);

--
-- Restrições para tabelas `quadras`
--
ALTER TABLE `quadras`
  ADD CONSTRAINT `quadras_ibfk_1` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id`),
  ADD CONSTRAINT `quadras_ibfk_2` FOREIGN KEY (`id_modalidade`) REFERENCES `modalidade_quadra` (`id`);

--
-- Restrições para tabelas `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
