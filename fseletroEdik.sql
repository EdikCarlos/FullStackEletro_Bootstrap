-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 
-- Versão do Servidor: 5.5.24-log
-- Versão do PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `fseletro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

CREATE TABLE IF NOT EXISTS `pedidos` (
  `idCliente` int(11) NOT NULL AUTO_INCREMENT,
  `nomeCliente` varchar(155) COLLATE utf8mb4_unicode_ci NOT NULL,
  `endereco` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `produto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valorUnitario` float NOT NULL,
  `quantidade` int(11) NOT NULL,
  `valorTotal` float NOT NULL,
  PRIMARY KEY (`idCliente`),
  UNIQUE KEY `nomeCliente` (`nomeCliente`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=12 ;

--
-- Extraindo dados da tabela `pedidos`
--

INSERT INTO `pedidos` (`idCliente`, `nomeCliente`, `endereco`, `telefone`, `produto`, `valorUnitario`, `quantidade`, `valorTotal`) VALUES
(1, 'Pedro José Santos Cruz', 'Rua Das Oliveiras 33', '(11)93540-3327', 'Micro-ondas Consul 32 Litros Inox 220v', 1719.9, 1, 1719.9),
(2, 'Marcia Pereira da Costa', 'Rua Jeronimo Abreu 453', '(11)98867-4533', 'Lava-Louça Eletrolux Inox com 10 Serviços, 06 Programas de Lavagem e Painel Blue Touch', 2799, 1, 2799),
(3, 'Edik Carlos Gomes Ferreira', 'Rua Cachoeira Paulista 34', '(11)97312-8870', 'Geladeira Frost Free Consul Prata 340 litros', 2510, 2, 5020),
(4, 'Helena de Jesus Ferreira', 'Rua Ubirajara Viana 150', '(11)99112-5656', 'Micro-ondas 25 Litros Espelhado Philco 220v', 1000, 1, 1000),
(5, 'José Alison', 'Avenida BD.do Sul 454', '(11)98878-0021', 'Micro-ondas Eletrolux 20L Branco', 510, 3, 1530),
(6, 'Simone de SOuza', 'Rua Mamão Preto 35', '(11)96673-1121', 'Lava-Louça Eletrolux Inox com 10 Serviços, 06 Programas de Lavagem e Painel Blue Touch', 2799, 1, 2799),
(7, 'Claudio Fico', 'Rua Caxias 21', '(21)98623-6756', 'Lava-Louças Compacta 8 Serviços Branca 127v Brastemp', 1040, 2, 2080),
(8, 'Jacqueline Jesus', 'Rua Rio Pardo 333', '(11)98767-4432', 'Lavadora de Roupas Brastemp 11Kg com Turbo Perfomance Branca', 1250, 1, 1250),
(9, 'Tomas da Silva', 'Avenida São Tomé', '(11)98788-2231', 'Fogão 4 Bocas Consul Inox com Mesa de Vidro', 1099, 1, 1099),
(10, 'Marcelo Oliveira', 'Rua Mar Vermelho 32', '(12)98788-1754', 'Fogão de Piso 4 Bocas Monaco com Acendimento Automatico', 519, 1, 519),
(11, 'Bianca Rondon', 'Rua Rio Feio 627', '(11)98344-1989', 'Lavadora de Roupas Philco Inverter 12Kg', 1999, 1, 1999);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE IF NOT EXISTS `produtos` (
  `idproduto` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagem` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `precoinicial` float NOT NULL,
  `precofinal` float NOT NULL,
  PRIMARY KEY (`idproduto`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=15 ;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`idproduto`, `categoria`, `descricao`, `imagem`, `precoinicial`, `precofinal`) VALUES
(1, 'geladeira', 'Geladeira Frost Free Brastemp Side Inverse 540 litros', 'imagens/produtos/gel_brastemp_side.jpeg', 6389, 5019),
(4, 'geladeira', 'Geladeira Frost Free Brastemp Branca 375 litros', 'imagens/produtos/gel_brastemp_frost.jpeg', 2867, 1919),
(5, 'geladeira', 'Geladeira Frost Free Consul Prata 340 litros', 'imagens/produtos/gel_consul_prata.jpeg', 3329, 2510),
(6, 'fogao', 'Fogão 4 Bocas Consul Inox com Mesa de Vidro', 'imagens/produtos/fog_consul_inox.jpeg', 1399, 1099),
(7, 'fogao', 'Fogão de Piso 4 Bocas Monaco com Acendimento Automatico', 'imagens/produtos/fog_atlas_monaco.jpeg', 789, 519),
(8, 'microondas', 'Micro-ondas Consul 32 Litros Inox 220v', 'imagens/produtos/micro_consul_inox.jpeg', 2400.2, 1719.9),
(9, 'microondas', 'Micro-ondas 25 Litros Espelhado Philco 220v', 'imagens/produtos/micro_philco_espelhado.jpeg', 1500, 1000),
(10, 'microondas', 'Micro-ondas Eletrolux 20L Branco', 'imagens/produtos/micro_eletrolux_bco.jpeg', 689, 510),
(11, 'lavaroupas', 'Lavadora de Roupas Brastemp 11Kg com Turbo Perfomance Branca', 'imagens/produtos/lavadora_brastemp.jpeg', 1800, 1250),
(12, 'lavaroupas', 'Lavadora de Roupas Philco Inverter 12Kg', 'imagens/produtos/lavadora_philco_inverter.jpeg', 2350, 1999),
(13, 'lavaloucas', 'Lava-Louça Eletrolux Inox com 10 Serviços, 06 Programas de Lavagem e Painel Blue Touch', 'imagens/produtos/lava_louca_eletrolux.jpeg', 3489, 2799),
(14, 'lavaloucas', 'Lava-Louças Compacta 8 Serviços Branca 127v Brastemp', 'imagens/produtos/lava_louca_brastemp.jpeg', 1689, 1040);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
