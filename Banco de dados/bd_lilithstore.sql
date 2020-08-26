-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26-Ago-2020 às 16:11
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_lilithstore`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `acessorio`
--

CREATE TABLE `acessorio` (
  `Codigo` int(11) NOT NULL,
  `Nome` varchar(80) NOT NULL,
  `Categoria` varchar(15) NOT NULL,
  `Tipo` varchar(10) NOT NULL,
  `Marca` varchar(20) NOT NULL,
  `Quantidade` int(10) NOT NULL,
  `Cor` varchar(20) NOT NULL,
  `PrecoAntigo` float NOT NULL,
  `PrecoAtual` float NOT NULL,
  `Descricao` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `acessorio`
--

INSERT INTO `acessorio` (`Codigo`, `Nome`, `Categoria`, `Tipo`, `Marca`, `Quantidade`, `Cor`, `PrecoAntigo`, `PrecoAtual`, `Descricao`) VALUES
(4, 'Colar pretoColar preto ALTERADO', 'Choker', 'Feminino', 'RyukJubs', 10, 'PretoDourado', 39.9, 29.9, 'Colar de pérola preto');

-- --------------------------------------------------------

--
-- Estrutura da tabela `calcado`
--

CREATE TABLE `calcado` (
  `Codigo` int(11) NOT NULL,
  `Nome` varchar(80) NOT NULL,
  `Categoria` varchar(15) NOT NULL,
  `Tipo` varchar(10) NOT NULL,
  `Marca` varchar(20) NOT NULL,
  `Quantidade` int(10) NOT NULL,
  `Cor` varchar(20) NOT NULL,
  `Qtd35` int(10) NOT NULL,
  `Qtd36` int(10) NOT NULL,
  `Qtd37` int(10) NOT NULL,
  `Qtd38` int(10) NOT NULL,
  `Qtd39` int(10) NOT NULL,
  `Qtd40` int(10) NOT NULL,
  `Qtd41` int(10) NOT NULL,
  `Qtd42` int(10) NOT NULL,
  `Qtd43` int(10) NOT NULL,
  `Qtd44` int(10) NOT NULL,
  `PrecoAntigo` float NOT NULL,
  `PrecoAtual` float NOT NULL,
  `Descricao` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `calcado`
--

INSERT INTO `calcado` (`Codigo`, `Nome`, `Categoria`, `Tipo`, `Marca`, `Quantidade`, `Cor`, `Qtd35`, `Qtd36`, `Qtd37`, `Qtd38`, `Qtd39`, `Qtd40`, `Qtd41`, `Qtd42`, `Qtd43`, `Qtd44`, `PrecoAntigo`, `PrecoAtual`, `Descricao`) VALUES
(3, 'Bota tratorada', 'Bota e Coturno', 'Feminino', 'Reversa', 5, 'Preto', 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 229.9, 'Bota confortavel teste'),
(4, 'Sandalia salto', 'Sandália', 'Feminino', 'Jubs', 20, 'Preto', 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 0, 149.9, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque blandit, odio et iaculis vehicula, odio ante consequat erat, sed molestie nunc lacus dapibus velit.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `roupa`
--

CREATE TABLE `roupa` (
  `Codigo` int(11) NOT NULL,
  `Nome` varchar(80) NOT NULL,
  `Categoria` varchar(15) NOT NULL,
  `Tipo` varchar(10) NOT NULL,
  `Marca` varchar(20) NOT NULL,
  `Quantidade` int(10) NOT NULL,
  `Cor` varchar(20) NOT NULL,
  `QtdP` int(10) NOT NULL,
  `QtdM` int(10) NOT NULL,
  `QtdG` int(10) NOT NULL,
  `QtdGG` int(10) NOT NULL,
  `PrecoAntigo` float NOT NULL,
  `PrecoAtual` float NOT NULL,
  `Descricao` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `roupa`
--

INSERT INTO `roupa` (`Codigo`, `Nome`, `Categoria`, `Tipo`, `Marca`, `Quantidade`, `Cor`, `QtdP`, `QtdM`, `QtdG`, `QtdGG`, `PrecoAntigo`, `PrecoAtual`, `Descricao`) VALUES
(6, 'vestido teste', 'Vestido', 'Feminino', 'Rosa', 10, 'Branco', 5, 5, 0, 0, 0, 89.9, 'Vestido rodado rosa'),
(7, 'Blusa teste', 'Blusa', 'Feminino', 'TresYU', 10, 'Preta', 3, 3, 2, 2, 0, 129.9, 'Uma blusa bonitinha'),
(8, 'Calça jeans', 'Calça', 'Feminino', 'Jubs', 12, 'Azul', 3, 3, 3, 3, 0, 139.9, 'Calça confortável para o dia a dia'),
(9, 'Calça cargo', 'Calça', 'Masculino', 'Jubs', 5, 'Preto', 0, 0, 2, 3, 0, 149.9, 'Calça cargo com bolsos laterais'),
(10, 'Vestido rosa amarela', 'Vestido', 'Feminino', 'Jubs', 15, 'Amerelo', 5, 5, 5, 0, 0, 99.9, 'Vestido bonito e confortável para o dia a dia'),
(11, 'Camiseta Pink Floyd', 'Camiseta', 'Masculino', 'TresYU', 20, 'Preto', 5, 5, 5, 5, 0, 69.9, 'Camiseta de banda'),
(12, 'Saia longa ', 'Saia', 'Feminino', 'Jubs', 10, 'Preto', 2, 2, 3, 3, 0, 129.9, 'Saia longa com fenda'),
(13, 'Calça jeans', 'Calça', 'Masculino', 'Jubs', 10, 'Azul marinho', 3, 3, 2, 2, 0, 299.9, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque blandit, odio et iaculis vehicula, odio ante consequat erat, sed molestie nunc lacus dapibus velit'),
(14, 'Blusa morcego', 'Blusa', 'Feminino', 'Leon', 20, 'Preto', 5, 5, 5, 5, 0, 139.9, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque blandit, odio et iaculis vehicula, odio ante consequat erat, sed molestie nunc lacus dapibus velit.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `ID_usuario` int(11) NOT NULL,
  `Cpf` varchar(11) NOT NULL,
  `Nome` varchar(80) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Senha` varchar(20) NOT NULL,
  `Cidade` varchar(50) NOT NULL,
  `Estado` varchar(2) NOT NULL,
  `Rua` varchar(80) NOT NULL,
  `Bairro` varchar(80) NOT NULL,
  `Num` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`ID_usuario`, `Cpf`, `Nome`, `Email`, `Senha`, `Cidade`, `Estado`, `Rua`, `Bairro`, `Num`) VALUES
(6, '10948851694', 'Manu Alterado', 'manuelle@gmail.com', '123456', 'Lavras', 'MG', 'Benjamin', 'Centro', 230),
(22, '123456', 'Manuelle', 'manuelle@teste.com', '827ccb0eea8a706c4c34', 'Lavras', 'MG', 'Benjamin', 'Centro', 50),
(23, '10246521258', 'Maria', 'maria@teste.com', '1553773a09c13add3006', 'Lavras', 'MG', 'Benjamin', 'Centro', 50),
(24, '14051261254', 'Joana', 'joana@teste.com', 'cf79ae6addba60ad0183', 'Lavras', 'MG', 'Benjamin', 'Centro', 50),
(25, '20154102136', 'Paulo', 'paulo@teste.com', 'dbc4d84bfcfe2284ba11', 'Lavras', 'MG', 'Benjamin', 'Centro', 50),
(26, '45698456525', 'Janaia', 'janaia@teste.com', '21218cca77804d2ba192', 'Lavras', 'MG', 'Benjamin', 'Centro', 50),
(27, '20115236252', 'Jujuba', 'juju@teste.com', '123456', 'Lavras', 'SP', 'Amora', 'Centro', 55),
(28, '11111111111', 'eeeeeee', 'eeeeee', '12233232', 'dddd', 'MG', 'dddd', 'ddddd', 2147483647),
(29, '10951294594', 'Emanuelle Teste WebDriver', '', '123456', 'Lavras', 'MG', 'Rua das palmeiras', 'Jardins', 330),
(31, '10148853687', 'Emanuelle Teste 2', 'emanuelleteste@teste.com', '123456', 'Lavras', 'MG', 'Rua das palmeiras', 'Jardins', 330);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `acessorio`
--
ALTER TABLE `acessorio`
  ADD PRIMARY KEY (`Codigo`);

--
-- Índices para tabela `calcado`
--
ALTER TABLE `calcado`
  ADD PRIMARY KEY (`Codigo`);

--
-- Índices para tabela `roupa`
--
ALTER TABLE `roupa`
  ADD PRIMARY KEY (`Codigo`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID_usuario`),
  ADD UNIQUE KEY `Cpf` (`Cpf`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `acessorio`
--
ALTER TABLE `acessorio`
  MODIFY `Codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `calcado`
--
ALTER TABLE `calcado`
  MODIFY `Codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `roupa`
--
ALTER TABLE `roupa`
  MODIFY `Codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
