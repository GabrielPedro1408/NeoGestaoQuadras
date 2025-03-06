-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01/03/2025 às 15:37
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
-- Banco de dados: `nopelogestao`
--
CREATE DATABASE IF NOT EXISTS `nopelogestao` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `nopelogestao`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `agendamento`
--

CREATE TABLE `agendamento` (
  `id` int(11) NOT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  `id_quadras` int(11) DEFAULT NULL,
  `id_tipoAgendamento` int(11) DEFAULT NULL,
  `id_venda` int(11) DEFAULT NULL,
  `id_fmPagamento` int(11) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `horario_inicio` time DEFAULT NULL,
  `horario_fim` time DEFAULT NULL,
  `valor` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `sobrenome` varchar(50) NOT NULL,
  `dataNasc` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `cpf` char(11) NOT NULL,
  `rg` char(9) NOT NULL,
  `celular` char(11) NOT NULL,
  `estado` varchar(30) DEFAULT NULL,
  `cep` char(9) NOT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `rua` varchar(50) DEFAULT NULL,
  `nCasa` int(10) NOT NULL,
  `complemento` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `forma_pagemento`
--

CREATE TABLE `forma_pagemento` (
  `id` int(11) NOT NULL,
  `fm_pagamento` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `ganhos`
--

CREATE TABLE `ganhos` (
  `id` int(11) NOT NULL,
  `valor` decimal(10,2) DEFAULT NULL,
  `descr` varchar(60) DEFAULT NULL,
  `id_venda` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `gastos`
--

CREATE TABLE `gastos` (
  `id` int(11) NOT NULL,
  `id_tpGasto` int(11) DEFAULT NULL,
  `valor` decimal(10,2) DEFAULT NULL,
  `descr` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `quadras`
--

CREATE TABLE `quadras` (
  `id` int(11) NOT NULL,
  `id_modalidade` int(11) DEFAULT NULL,
  `disponibilidade` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tipoquadra_modalidade`
--

CREATE TABLE `tipoquadra_modalidade` (
  `id` int(11) NOT NULL,
  `modalidade` varchar(50) NOT NULL,
  `valor` decimal(10,2) NOT NULL,
  `descr` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tipo_agendamento`
--

CREATE TABLE `tipo_agendamento` (
  `id` int(11) NOT NULL,
  `descr` varchar(70) DEFAULT NULL,
  `valor` decimal(10,2) DEFAULT NULL,
  `quant_tempo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tipo_gasto`
--

CREATE TABLE `tipo_gasto` (
  `id` int(11) NOT NULL,
  `tipo_gasto` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `razSocial` varchar(100) NOT NULL,
  `nomeUsuario` varchar(100) NOT NULL,
  `senha` varchar(15) DEFAULT NULL,
  `telefone` char(11) DEFAULT NULL,
  `cnpj` char(14) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `cep` char(8) DEFAULT NULL,
  `cidade` varchar(100) DEFAULT NULL,
  `rua` varchar(100) DEFAULT NULL,
  `numero` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `vendas`
--

CREATE TABLE `vendas` (
  `id` int(11) NOT NULL,
  `data` date DEFAULT NULL,
  `horario` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `vendas_extotal`
--

CREATE TABLE `vendas_extotal` (
  `id` int(11) NOT NULL,
  `soma_Valor` decimal(10,2) DEFAULT NULL,
  `id_venda` int(11) DEFAULT NULL,
  `id_agendamento` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `agendamento`
--
ALTER TABLE `agendamento`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `id_quadras` (`id_quadras`),
  ADD KEY `id_tipoAgendamento` (`id_tipoAgendamento`),
  ADD KEY `id_venda` (`id_venda`),
  ADD KEY `id_fmPagamento` (`id_fmPagamento`);

--
-- Índices de tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `forma_pagemento`
--
ALTER TABLE `forma_pagemento`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `ganhos`
--
ALTER TABLE `ganhos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_venda` (`id_venda`);

--
-- Índices de tabela `gastos`
--
ALTER TABLE `gastos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tpGasto` (`id_tpGasto`);

--
-- Índices de tabela `quadras`
--
ALTER TABLE `quadras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_modalidade` (`id_modalidade`);

--
-- Índices de tabela `tipoquadra_modalidade`
--
ALTER TABLE `tipoquadra_modalidade`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tipo_agendamento`
--
ALTER TABLE `tipo_agendamento`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tipo_gasto`
--
ALTER TABLE `tipo_gasto`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `vendas`
--
ALTER TABLE `vendas`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `vendas_extotal`
--
ALTER TABLE `vendas_extotal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_venda` (`id_venda`),
  ADD KEY `id_agendamento` (`id_agendamento`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `agendamento`
--
ALTER TABLE `agendamento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `forma_pagemento`
--
ALTER TABLE `forma_pagemento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `ganhos`
--
ALTER TABLE `ganhos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `gastos`
--
ALTER TABLE `gastos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `quadras`
--
ALTER TABLE `quadras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tipoquadra_modalidade`
--
ALTER TABLE `tipoquadra_modalidade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tipo_agendamento`
--
ALTER TABLE `tipo_agendamento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tipo_gasto`
--
ALTER TABLE `tipo_gasto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `vendas`
--
ALTER TABLE `vendas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `vendas_extotal`
--
ALTER TABLE `vendas_extotal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `agendamento`
--
ALTER TABLE `agendamento`
  ADD CONSTRAINT `agendamento_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id`),
  ADD CONSTRAINT `agendamento_ibfk_2` FOREIGN KEY (`id_quadras`) REFERENCES `quadras` (`id`),
  ADD CONSTRAINT `agendamento_ibfk_3` FOREIGN KEY (`id_tipoAgendamento`) REFERENCES `tipo_agendamento` (`id`),
  ADD CONSTRAINT `agendamento_ibfk_4` FOREIGN KEY (`id_venda`) REFERENCES `vendas` (`id`),
  ADD CONSTRAINT `agendamento_ibfk_5` FOREIGN KEY (`id_fmPagamento`) REFERENCES `forma_pagemento` (`id`);

--
-- Restrições para tabelas `ganhos`
--
ALTER TABLE `ganhos`
  ADD CONSTRAINT `ganhos_ibfk_1` FOREIGN KEY (`id_venda`) REFERENCES `vendas` (`id`);

--
-- Restrições para tabelas `gastos`
--
ALTER TABLE `gastos`
  ADD CONSTRAINT `gastos_ibfk_1` FOREIGN KEY (`id_tpGasto`) REFERENCES `tipo_gasto` (`id`);

--
-- Restrições para tabelas `quadras`
--
ALTER TABLE `quadras`
  ADD CONSTRAINT `quadras_ibfk_1` FOREIGN KEY (`id_modalidade`) REFERENCES `tipoquadra_modalidade` (`id`);

--
-- Restrições para tabelas `vendas_extotal`
--
ALTER TABLE `vendas_extotal`
  ADD CONSTRAINT `vendas_extotal_ibfk_1` FOREIGN KEY (`id_venda`) REFERENCES `vendas` (`id`),
  ADD CONSTRAINT `vendas_extotal_ibfk_2` FOREIGN KEY (`id_agendamento`) REFERENCES `agendamento` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
