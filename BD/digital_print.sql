-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05/12/2024 às 12:07
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
-- Banco de dados: `digital_print`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `agenda`
--

CREATE TABLE `agenda` (
  `codAgend` int(5) NOT NULL,
  `cod_func` int(5) NOT NULL,
  `responsavel` varchar(50) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `dataRegistro` date NOT NULL,
  `dataPrazo` date NOT NULL,
  `informacao` varchar(250) NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'pendente'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `agenda`
--

INSERT INTO `agenda` (`codAgend`, `cod_func`, `responsavel`, `titulo`, `dataRegistro`, `dataPrazo`, `informacao`, `status`) VALUES
(5, 2, 'Samuel', 'sla2', '2024-11-23', '2024-11-23', '', 'pendente'),
(6, 1, 'adm', 'sla2', '2024-11-23', '2024-11-23', 'lllllll', 'pendente');

-- --------------------------------------------------------

--
-- Estrutura para tabela `categoria`
--

CREATE TABLE `categoria` (
  `codCat` int(5) NOT NULL,
  `nome` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `categoria`
--

INSERT INTO `categoria` (`codCat`, `nome`) VALUES
(2, 'Banner'),
(3, 'Cartão de Visita 500 unid. - Frente'),
(4, 'Cartão de Visita 500 unid. - Frente x Verso'),
(5, 'Cartão de Visita 1000 unid. - Frente'),
(6, 'Cartão de Visita 1000 unid. - Frente x Verso'),
(9, 'Cartão de Visita Lam. Fosca Arredondado 500 unid.'),
(10, 'Cartão de Visita Lam. Fosca Arredondado 1000 unid'),
(11, 'Panfleto 1000 unid. Frente Couche 70gr'),
(12, 'Panfleto 1000 unid. Frente x Verso Couche 70gr'),
(13, 'Panfleto 1000 unid. Frente Couche 70gr'),
(14, 'Panfleto 1000 unid. Frente x Verso Couche 70gr'),
(15, 'Panfleto 1000 unid. Frente Couche 90gr'),
(16, 'Panfleto 1000 unid. Frente x Verso Couche 90gr'),
(17, 'Panfleto 1000 unid. Frente Couche 90gr'),
(18, 'Panfleto 1000 unid. Frente x Verso Couche 90gr'),
(19, 'Cartão de Visita Lam. Fosca 500 unid.'),
(20, 'Cartão de Visita Lam. Fosca 1000 unid.');

-- --------------------------------------------------------

--
-- Estrutura para tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `cod_func` int(5) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `sobrenome` varchar(50) NOT NULL,
  `funcao` varchar(50) NOT NULL,
  `login` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `funcionarios`
--

INSERT INTO `funcionarios` (`cod_func`, `nome`, `sobrenome`, `funcao`, `login`, `senha`) VALUES
(1, 'adm', 'adm', 'administrador', 'adm', 'admin'),
(2, 'Samuel', 'Carvalho', 'Programador Back-end', 'samu', '12345');

-- --------------------------------------------------------

--
-- Estrutura para tabela `itens_pedido`
--

CREATE TABLE `itens_pedido` (
  `cod_itensPed` int(5) NOT NULL,
  `codPed` int(5) NOT NULL,
  `codPro` varchar(50) NOT NULL,
  `medida` varchar(50) NOT NULL,
  `descr` varchar(255) NOT NULL,
  `quantidade` int(5) NOT NULL,
  `valorUnit` decimal(10,0) NOT NULL,
  `valorTotal` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `pagentg`
--

CREATE TABLE `pagentg` (
  `codPagEnt` int(5) NOT NULL,
  `codPed` int(5) NOT NULL,
  `cod_itensPed` int(5) NOT NULL,
  `entrega` varchar(50) NOT NULL,
  `logradouro` varchar(50) NOT NULL,
  `numero` int(5) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `cidade` varchar(25) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `cep` varchar(13) NOT NULL,
  `entrada` varchar(50) NOT NULL,
  `formaPag` varchar(30) DEFAULT NULL,
  `valorEnt` decimal(10,0) NOT NULL,
  `valorTotal` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `codPed` int(5) NOT NULL,
  `cod_func` varchar(50) NOT NULL,
  `tipoPessoa` varchar(50) NOT NULL,
  `nomeCli` varchar(50) NOT NULL,
  `contato` varchar(50) NOT NULL,
  `dataPed` date NOT NULL,
  `dataPrev` date NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'pendente'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `codPro` int(5) NOT NULL,
  `codCat` int(5) NOT NULL,
  `nomeExib` varchar(50) NOT NULL,
  `nomeCat` varchar(50) NOT NULL,
  `medida` varchar(50) NOT NULL,
  `valor` decimal(10,0) NOT NULL,
  `imagem` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`codPro`, `codCat`, `nomeExib`, `nomeCat`, `medida`, `valor`, `imagem`) VALUES
(10, 3, 'Cartão de Visita', 'Cartão de Visita 500 unid. - Frente', '9x5', 102, ''),
(11, 4, 'Cartão de Visita', 'Cartão de Visita 500 unid. - Frente x Verso', '9x5', 124, ''),
(12, 5, 'Cartão de Visita', 'Cartão de Visita 1000 unid. - Frente', '9x5', 130, ''),
(13, 6, 'Cartão de Visita', 'Cartão de Visita 1000 unid. - Frente x Verso', '9x5', 146, ''),
(16, 9, 'Cartão de Visita', 'Cartão de Visita Lam. Fosca Arredondado 500 unid.', '9x5', 226, ''),
(17, 10, 'Cartão de Visita', 'Cartão de Visita Lam. Fosca Arredondado 1000 unid', '9x5', 264, ''),
(18, 2, 'Banner', 'Banner', '40x60', 35, 'img1/6744c45cc06cd.png'),
(19, 2, 'Banner', 'Banner', '50x50', 35, ''),
(20, 2, 'Banner', 'Banner', '40x70', 40, ''),
(21, 2, 'Banner', 'Banner', '50x70', 40, ''),
(22, 2, 'Banner', 'Banner', '70x70', 50, ''),
(23, 2, 'Banner', 'Banner', '60x90', 55, ''),
(24, 2, 'Banner', 'Banner', '50x100', 55, ''),
(25, 2, 'Banner', 'Banner', '70x100', 70, ''),
(26, 2, 'Banner', 'Banner', '90x90', 75, ''),
(27, 2, 'Banner', 'Banner', '90x100', 85, ''),
(28, 2, 'Banner', 'Banner', '80x120', 90, ''),
(29, 2, 'Banner', 'Banner', '90x120', 100, ''),
(30, 2, 'Banner', 'Banner', '100x120', 115, ''),
(31, 2, 'Banner', 'Banner', '100x150', 135, ''),
(32, 2, 'Banner', 'Banner', '150x200', 270, ''),
(33, 11, 'Panfleto', 'Panfleto 1000 unid. Frente', '10x15', 150, ''),
(34, 12, 'Panfleto', 'Panfleto 1000 unid. Frente x Verso', '10x15', 165, ''),
(35, 13, 'Panfleto', 'Panfleto 1000 unid. Frente Couche 70gr', '15x20', 235, ''),
(36, 14, 'Panfleto', 'Panfleto 1000 unid. Frente x Verso Couche 70gr', '15x20', 270, ''),
(37, 15, 'Panfleto', 'Panfleto 1000 unid. Frente Couche 90gr', '10x15', 202, ''),
(38, 16, 'Panfleto', 'Panfleto 1000 unid. Frente x Verso Couche 90gr', '10x15', 235, ''),
(39, 17, 'Panfleto', 'Panfleto 1000 unid. Frente Couche 90gr', '15x20', 346, ''),
(40, 18, 'Panfleto', 'Panfleto 1000 unid. Frente x Verso Couche 90gr', '15x20', 406, ''),
(41, 19, 'Cartão de Visita', 'Cartão de Visita Lam. Fosca 500 unid.', '9x5', 196, ''),
(42, 20, 'Cartão de Visita', 'Cartão de Visita Lam. Fosca 1000 unid.', '9x5', 234, ''),
(47, 2, 'Banner', 'Banner', '50x50', 35, '');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`codAgend`);

--
-- Índices de tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`codCat`);

--
-- Índices de tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`cod_func`);

--
-- Índices de tabela `itens_pedido`
--
ALTER TABLE `itens_pedido`
  ADD PRIMARY KEY (`cod_itensPed`);

--
-- Índices de tabela `pagentg`
--
ALTER TABLE `pagentg`
  ADD PRIMARY KEY (`codPagEnt`);

--
-- Índices de tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`codPed`);

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`codPro`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `agenda`
--
ALTER TABLE `agenda`
  MODIFY `codAgend` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `codCat` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  MODIFY `cod_func` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `itens_pedido`
--
ALTER TABLE `itens_pedido`
  MODIFY `cod_itensPed` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `pagentg`
--
ALTER TABLE `pagentg`
  MODIFY `codPagEnt` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `codPed` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `codPro` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
