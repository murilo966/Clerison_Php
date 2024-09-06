-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06-Set-2024 às 17:32
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `phpbd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastrocliente`
--

CREATE TABLE `cadastrocliente` (
  `id` int(255) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `nendereco` varchar(10) NOT NULL,
  `complemento` varchar(50) NOT NULL,
  `cidade` varchar(255) NOT NULL,
  `rg` varchar(20) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `cadastrocliente`
--

INSERT INTO `cadastrocliente` (`id`, `nome`, `email`, `senha`, `endereco`, `nendereco`, `complemento`, `cidade`, `rg`, `cpf`, `estado`, `data`) VALUES
(1, 'juninho', 'juninho@gmail.com', 'bbc99e2c92e82e6180c5c2e3ada3c1c8ec5815e0', 'rua do juninho', '12-35', 'casa preta', 'Bauru', '223458096745', '1624761512', 'AP', '0000-00-00'),
(3, 'Henrique Ramos Sales', 'sales@gmail.com', 'f493f2f444ec8f218a125c9f1297eabaf2fb4183', 'rua pqp', '2-97', 'bloco 42', 'bauru', '464698465', '36784562', 'SP', '0000-00-00');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastrocliente`
--
ALTER TABLE `cadastrocliente`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastrocliente`
--
ALTER TABLE `cadastrocliente`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
