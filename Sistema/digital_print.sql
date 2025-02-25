-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql200.infinityfree.com
-- Tempo de geração: 04/02/2025 às 07:50
-- Versão do servidor: 10.6.19-MariaDB
-- Versão do PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `if0_37749743_digital_print`
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
(7, 3, 'expo', 'ApresentaÃ§Ã£o', '2024-12-10', '2024-12-11', 'ApresentaÃ§Ã£o do tcc na expo v.', 'pendente'),
(8, 2, 'Samuel', 'ApresentaÃ§Ã£o', '2024-12-10', '2024-12-12', 'oi', 'pendente');

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
(3, 'CartÃ£o de Visita 500 unid. - Frente'),
(4, 'CartÃ£o de Visita 500 unid. - Frente x Verso'),
(5, 'CartÃ£o de Visita 1000 unid. - Frente'),
(6, 'CartÃ£o de Visita 1000 unid. - Frente x Verso'),
(9, 'CartÃ£o de Visita Lam. Fosca Arredondado 500 unid.'),
(10, 'CartÃ£o de Visita Lam. Fosca Arredondado 1000 unid'),
(11, 'Panfleto 1000 unid. Frente Couche 70gr'),
(12, 'Panfleto 1000 unid. Frente x Verso Couche 70gr'),
(13, 'Panfleto 1000 unid. Frente Couche 70gr'),
(14, 'Panfleto 1000 unid. Frente x Verso Couche 70gr'),
(15, 'Panfleto 1000 unid. Frente Couche 90gr'),
(16, 'Panfleto 1000 unid. Frente x Verso Couche 90gr'),
(17, 'Panfleto 1000 unid. Frente Couche 90gr'),
(18, 'Panfleto 1000 unid. Frente x Verso Couche 90gr'),
(19, 'CartÃ£o de Visita Lam. Fosca 500 unid.'),
(20, 'CartÃ£o de Visita Lam. Fosca 1000 unid.'),
(25, 'Batata');

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
(2, 'Samuel', 'Carvalho', 'Programador Back-end', 'samu', '12345'),
(3, 'expo', 'tcc', 'visitante', 'expo', 'expo');

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

--
-- Despejando dados para a tabela `itens_pedido`
--

INSERT INTO `itens_pedido` (`cod_itensPed`, `codPed`, `codPro`, `medida`, `descr`, `quantidade`, `valorUnit`, `valorTotal`) VALUES
(11, 10, 'CartÃ£o de Visita 500 unid. - Frente', '9x5', '', 2, '102', '204'),
(12, 11, 'CartÃ£o de Visita 500 unid. - Frente', '9x5', '', 2, '102', '204');

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

--
-- Despejando dados para a tabela `pagentg`
--

INSERT INTO `pagentg` (`codPagEnt`, `codPed`, `cod_itensPed`, `entrega`, `logradouro`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `entrada`, `formaPag`, `valorEnt`, `valorTotal`) VALUES
(10, 10, 11, 'retirada', '', 0, '', '', '', '', 'sim', 'Dinheiro', '60', '204'),
(11, 11, 12, 'retirada', '', 0, '', '', '', '', 'sim', 'Pix', '120', '204');

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

--
-- Despejando dados para a tabela `pedidos`
--

INSERT INTO `pedidos` (`codPed`, `cod_func`, `tipoPessoa`, `nomeCli`, `contato`, `dataPed`, `dataPrev`, `status`) VALUES
(10, 'Samuel', 'FÃ­sica', 'Johnson', '12992560838', '2024-12-10', '2024-12-21', 'pago'),
(11, 'Samuel', 'FÃ­sica', 'Samuel', '12992560838', '2024-12-10', '2024-12-14', 'pendente');

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
(10, 3, 'CartÃ£o de Visita', 'CartÃ£o de Visita 500 unid. - Frente', '9x5', '102', 'img1/67583f0dbaeff.png'),
(11, 4, 'CartÃ£o de Visita', 'CartÃ£o de Visita 500 unid. - Frente x Verso', '9x5', '124', 'img1/67583f1ce0c57.png'),
(12, 5, 'CartÃ£o de Visita', 'CartÃ£o de Visita 1000 unid. - Frente', '9x5', '130', 'img1/67583f2e4f813.png'),
(13, 6, 'CartÃ£o de Visita', 'CartÃ£o de Visita 1000 unid. - Frente x Verso', '9x5', '146', 'img1/67583f4224777.png'),
(16, 9, 'CartÃ£o de Visita', 'CartÃ£o de Visita Lam. Fosca Arredondado 500 unid.', '9x5', '226', 'img1/67583f706de9b.png'),
(17, 10, 'CartÃ£o de Visita', 'CartÃ£o de Visita Lam. Fosca Arredondado 1000 unid', '9x5', '264', 'img1/67583f769076a.png'),
(18, 2, 'Banner', 'Banner', '40x60', '35', 'img1/67583ff1782c6.png'),
(19, 2, 'Banner', 'Banner', '50x50', '35', 'img1/67583fff0a152.png'),
(20, 2, 'Banner', 'Banner', '40x70', '40', 'img1/6758400fc2a8e.png'),
(21, 2, 'Banner', 'Banner', '50x70', '40', 'img1/6758401c03890.png'),
(22, 2, 'Banner', 'Banner', '70x70', '50', 'img1/67584025967af.png'),
(23, 2, 'Banner', 'Banner', '60x90', '55', 'img1/67584031e8d97.png'),
(24, 2, 'Banner', 'Banner', '50x100', '55', 'img1/675840810e1b1.png'),
(25, 2, 'Banner', 'Banner', '70x100', '70', 'img1/6758408b295d4.png'),
(26, 2, 'Banner', 'Banner', '90x90', '75', 'img1/67584096ca269.png'),
(27, 2, 'Banner', 'Banner', '90x100', '85', 'img1/675840a16386c.png'),
(28, 2, 'Banner', 'Banner', '80x120', '90', 'img1/675840d8351b1.png'),
(29, 2, 'Banner', 'Banner', '90x120', '100', 'img1/675840e97ab72.png'),
(30, 2, 'Banner', 'Banner', '100x120', '115', 'img1/675840f31e723.png'),
(31, 2, 'Banner', 'Banner', '100x150', '135', 'img1/675840fde6814.png'),
(32, 2, 'Banner', 'Banner', '150x200', '270', 'img1/675841249710e.png'),
(33, 11, 'Panfleto', 'Panfleto 1000 unid. Frente Couche 70gr', '10x15', '150', 'img1/6758413798198.png'),
(34, 12, 'Panfleto', 'Panfleto 1000 unid. Frente x Verso Couche 70gr', '10x15', '165', 'img1/675841667e1f5.png'),
(35, 13, 'Panfleto', 'Panfleto 1000 unid. Frente Couche 70gr', '15x20', '235', 'img1/6758417381370.png'),
(36, 14, 'Panfleto', 'Panfleto 1000 unid. Frente x Verso Couche 70gr', '15x20', '270', 'img1/6758417eaa6c4.png'),
(37, 15, 'Panfleto', 'Panfleto 1000 unid. Frente Couche 90gr', '10x15', '202', 'img1/6758418c5c88e.png'),
(38, 16, 'Panfleto', 'Panfleto 1000 unid. Frente x Verso Couche 90gr', '10x15', '235', 'img1/67584197ba5c2.png'),
(39, 17, 'Panfleto', 'Panfleto 1000 unid. Frente Couche 90gr', '15x20', '346', 'img1/675841a966306.png'),
(40, 18, 'Panfleto', 'Panfleto 1000 unid. Frente x Verso Couche 90gr', '15x20', '406', 'img1/675841b51032d.png'),
(41, 19, 'CartÃ£o de Visita', 'CartÃ£o de Visita Lam. Fosca 500 unid.', '9x5', '196', 'img1/675841c8a1cbe.png'),
(42, 20, 'CartÃ£o de Visita', 'CartÃ£o de Visita Lam. Fosca 1000 unid.', '9x5', '234', 'img1/675841cf1ad4f.png');

--
-- Índices de tabelas apagadas
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
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `agenda`
--
ALTER TABLE `agenda`
  MODIFY `codAgend` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `codCat` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  MODIFY `cod_func` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `itens_pedido`
--
ALTER TABLE `itens_pedido`
  MODIFY `cod_itensPed` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `pagentg`
--
ALTER TABLE `pagentg`
  MODIFY `codPagEnt` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `codPed` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `codPro` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
