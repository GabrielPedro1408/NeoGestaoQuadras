-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23/10/2024 às 21:50
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
-- Banco de dados: `imobiliaria`
--
CREATE DATABASE IF NOT EXISTS `imobiliaria` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `imobiliaria`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `imagens`
--

CREATE TABLE `imagens` (
  `id_imagem` int(11) NOT NULL,
  `id_imovel` int(11) DEFAULT NULL,
  `imagem` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `imovel`
--

CREATE TABLE `imovel` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `descricao` longtext DEFAULT NULL,
  `metragem` decimal(10,0) DEFAULT NULL,
  `quartos` int(11) DEFAULT NULL,
  `suites` int(11) DEFAULT NULL,
  `banheiros` int(11) DEFAULT NULL,
  `vagas` int(11) DEFAULT NULL,
  `id_tipo_imovel_subcategorias` int(11) DEFAULT NULL,
  `tipo_negocio` varchar(50) DEFAULT NULL,
  `valor` decimal(10,0) DEFAULT NULL,
  `IPTU` decimal(10,0) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `bairro` varchar(50) DEFAULT NULL,
  `endereco` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tipo_imovel_categoria`
--

CREATE TABLE `tipo_imovel_categoria` (
  `id` int(11) NOT NULL,
  `categoria` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tipo_imovel_categoria`
--

INSERT INTO `tipo_imovel_categoria` (`id`, `categoria`) VALUES
(1, 'casa'),
(2, 'apartamento'),
(3, 'Terreno');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tipo_imovel_subcategoria`
--

CREATE TABLE `tipo_imovel_subcategoria` (
  `id` int(11) NOT NULL,
  `id_tipo_imovel_categoria` int(11) DEFAULT NULL,
  `subcategoria` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tipo_imovel_subcategoria`
--

INSERT INTO `tipo_imovel_subcategoria` (`id`, `id_tipo_imovel_categoria`, `subcategoria`) VALUES
(1, 1, 'Sobrado'),
(2, 1, 'Condominio'),
(3, 2, 'Duplex'),
(4, 2, 'Flat'),
(7, 1, 'Terrea'),
(8, 2, 'Cobertura'),
(9, 2, 'Kitnet'),
(10, 3, 'Terreno-condominio'),
(11, 3, 'Terreno-represa');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `imagens`
--
ALTER TABLE `imagens`
  ADD PRIMARY KEY (`id_imagem`),
  ADD KEY `id_imovel` (`id_imovel`);

--
-- Índices de tabela `imovel`
--
ALTER TABLE `imovel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tipo_imovel_subcategorias` (`id_tipo_imovel_subcategorias`);

--
-- Índices de tabela `tipo_imovel_categoria`
--
ALTER TABLE `tipo_imovel_categoria`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tipo_imovel_subcategoria`
--
ALTER TABLE `tipo_imovel_subcategoria`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tipo_imovel_categoria` (`id_tipo_imovel_categoria`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `imagens`
--
ALTER TABLE `imagens`
  MODIFY `id_imagem` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `imovel`
--
ALTER TABLE `imovel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tipo_imovel_categoria`
--
ALTER TABLE `tipo_imovel_categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tipo_imovel_subcategoria`
--
ALTER TABLE `tipo_imovel_subcategoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `imagens`
--
ALTER TABLE `imagens`
  ADD CONSTRAINT `imagens_ibfk_1` FOREIGN KEY (`id_imovel`) REFERENCES `imovel` (`id`);

--
-- Restrições para tabelas `imovel`
--
ALTER TABLE `imovel`
  ADD CONSTRAINT `imovel_ibfk_1` FOREIGN KEY (`id_tipo_imovel_subcategorias`) REFERENCES `tipo_imovel_subcategoria` (`id`);

--
-- Restrições para tabelas `tipo_imovel_subcategoria`
--
ALTER TABLE `tipo_imovel_subcategoria`
  ADD CONSTRAINT `tipo_imovel_subcategoria_ibfk_1` FOREIGN KEY (`id_tipo_imovel_categoria`) REFERENCES `tipo_imovel_categoria` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
