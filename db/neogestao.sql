-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07/08/2025 às 05:32
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
  `estado_conta` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `agendamentos`
--

INSERT INTO `agendamentos` (`id`, `id_empresa`, `id_cliente`, `id_quadra`, `dt`, `horario_agendado`, `tempo_alocado`, `valor`, `estado_conta`) VALUES
(168, 28, 68, 92, '2025-08-06', '20:50:00', 21, 200.00, 0),
(170, 28, 68, 92, '2025-08-16', '21:45:00', 21, 45.00, 0);

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
  `cnpj` varchar(18) DEFAULT NULL,
  `rg` char(12) NOT NULL,
  `celular` char(11) NOT NULL,
  `cep` char(9) NOT NULL,
  `uf` char(2) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `rua` varchar(50) NOT NULL,
  `nCasa` varchar(7) NOT NULL,
  `complemento` varchar(50) DEFAULT NULL,
  `data_cadastro` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `clientes`
--

INSERT INTO `clientes` (`id`, `id_empresa`, `nome`, `sobrenome`, `dt_nascimento`, `email`, `cpf`, `cnpj`, `rg`, `celular`, `cep`, `uf`, `cidade`, `rua`, `nCasa`, `complemento`, `data_cadastro`) VALUES
(68, 28, 'Gabriel', 'Pedro', '2008-02-14', 'lgssuera@gmail.com', '449.118.798-31', '39.940.158/0001-87', '', '11987670128', '13219-510', 'SP', 'Jundiaí', 'Rua José Artur Savietto', '101', '', '2025-08-06 18:50:28');

-- --------------------------------------------------------

--
-- Estrutura para tabela `contas`
--

CREATE TABLE `contas` (
  `id` int(11) NOT NULL,
  `id_empresa` int(11) DEFAULT NULL,
  `tipo_conta` tinyint(1) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `recorrencia` int(11) NOT NULL,
  `valor` int(11) NOT NULL,
  `data_vencimento` date NOT NULL,
  `tipo` int(11) NOT NULL,
  `cpf_cnpj` int(18) DEFAULT NULL,
  `observacao` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `contas`
--

INSERT INTO `contas` (`id`, `id_empresa`, `tipo_conta`, `descricao`, `recorrencia`, `valor`, `data_vencimento`, `tipo`, `cpf_cnpj`, `observacao`) VALUES
(37, 28, 0, 'Conta de Luz', 0, 200, '2025-08-31', 1, 0, ''),
(38, 28, 0, 'Conta de Bosta', 0, 180, '2025-08-31', 1, 0, ''),
(39, 28, 0, 'Conta de Luz', 1, 90, '2025-08-29', 4, 0, ''),
(40, 28, 0, 'Conta de Luz', 1, 130, '2025-08-21', 4, 0, '');

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
  `numero` varchar(10) DEFAULT NULL,
  `complemento` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `empresa`
--

INSERT INTO `empresa` (`id`, `razão_social`, `email`, `telefone`, `cnpj`, `cep`, `uf`, `cidade`, `rua`, `numero`, `complemento`) VALUES
(28, 'Neo Gestão', 'neogestao@gmail.com', '(11) 98767-0', '39.940.158/0001-87', '13219-510', 'SP', 'Jundiaí', 'Rua José Artur Savietto', '101', NULL);

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
(1, 'Futebol Society', 'Futebol Society'),
(2, 'Futsal', 'Futsal'),
(3, 'Vôlei de Praia', 'Vôlei de Praia'),
(4, 'Basquete', 'Basquete'),
(5, 'Tênis', 'Tênis'),
(6, 'Beach Tennis', 'Beach Tennis'),
(7, 'Handebol', 'Handebol'),
(8, 'Padel', 'Padel'),
(9, 'Peteca', 'Peteca'),
(10, 'Badminton', 'Badminton'),
(11, 'Hóquei Indoor', 'Hóquei Indoor'),
(12, 'Futebol de Areia', 'Futebol de Areia'),
(13, 'Vôlei Indoor', 'Vôlei Indoor'),
(14, 'Basquete 3x3', 'Basquete 3x3'),
(15, 'Squash', 'Squash'),
(16, 'Futebol Infantil', 'Futebol Infantil'),
(17, 'Tênis de Mesa', 'Tênis de Mesa'),
(18, 'Pickleball', 'Pickleball'),
(19, 'Futebol Americano Flag', 'Futebol Americano Flag'),
(20, 'Rugby Touch', 'Rugby Touch');

-- --------------------------------------------------------

--
-- Estrutura para tabela `quadras`
--

CREATE TABLE `quadras` (
  `id` int(11) NOT NULL,
  `id_empresa` int(11) NOT NULL,
  `id_modalidade` int(11) NOT NULL,
  `descr` varchar(150) DEFAULT NULL,
  `disponibilidade` tinyint(1) NOT NULL,
  `valor_hora` float(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `quadras`
--

INSERT INTO `quadras` (`id`, `id_empresa`, `id_modalidade`, `descr`, `disponibilidade`, `valor_hora`) VALUES
(99, 28, 1, 'Quadra Society', 1, 300.00),
(100, 28, 3, 'Quadra Areia', 0, 200.00),
(101, 28, 18, 'Quadra Society', 0, 900.00);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `id_empresa` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `senha` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`id`, `id_empresa`, `username`, `senha`) VALUES
(20, 28, 'biel', '$2y$10$WiN0A5UUz7mbDxVU6PBuIu1NJ96Kyr6N39B/eRc5Xwc5g5oziwEDu');

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
-- Índices de tabela `contas`
--
ALTER TABLE `contas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_empresa` (`id_empresa`) USING BTREE;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=171;

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT de tabela `contas`
--
ALTER TABLE `contas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de tabela `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

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
-- Restrições para tabelas `contas`
--
ALTER TABLE `contas`
  ADD CONSTRAINT `fk_contas_empresa` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id`);

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
