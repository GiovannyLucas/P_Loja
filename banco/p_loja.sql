-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 12-Out-2018 às 00:03
-- Versão do servidor: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `p_loja`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `id_cat` int(11) NOT NULL,
  `nome_cat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id_cat`, `nome_cat`) VALUES
(1, 'Masculino'),
(2, 'Feminino'),
(3, 'Infantil'),
(4, 'Moda-praia'),
(5, 'Inverno'),
(6, 'Infanto-juvenil');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cor`
--

CREATE TABLE `cor` (
  `id_cor` int(11) NOT NULL,
  `nome_cor` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cor`
--

INSERT INTO `cor` (`id_cor`, `nome_cor`) VALUES
(1, 'Azul Claro'),
(2, 'Azul Escuro'),
(3, 'Laranja'),
(4, 'Vermelho'),
(5, 'Marrom'),
(6, 'Preto'),
(7, 'Cinza'),
(8, 'Branco');

-- --------------------------------------------------------

--
-- Estrutura da tabela `enderecos`
--

CREATE TABLE `enderecos` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `nome_user` varchar(50) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `pais` varchar(50) NOT NULL,
  `cep` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `enderecos`
--

INSERT INTO `enderecos` (`id`, `id_usuario`, `nome_user`, `endereco`, `cidade`, `estado`, `pais`, `cep`) VALUES
(1, 12, 'Giova', 'Rua Dr. JosÃ© Torquato', 'Pereiro', 'CearÃ¡', 'Brasil', '63460-000'),
(2, 0, 'peluka', '', '', '', '', '0');

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagens`
--

CREATE TABLE `imagens` (
  `id` int(11) NOT NULL,
  `id_Produto` int(11) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `imagens`
--

INSERT INTO `imagens` (`id`, `id_Produto`, `img`) VALUES
(51, 99, 'D70-2581-188_zoom1.jpg'),
(52, 99, 'D70-2581-188_zoom2.jpg'),
(53, 99, 'D70-2581-188_zoom3.jpg'),
(54, 99, 'D70-2581-188_zoom4.jpg'),
(55, 100, 'E79-0801-188_zoom1.jpg'),
(56, 100, 'E79-0801-188_zoom2.jpg'),
(57, 100, 'E79-0801-188_zoom3.jpg'),
(58, 100, 'E79-0801-188_zoom4.jpg'),
(59, 101, 'COL-0122-014_zoom1.jpg'),
(60, 101, 'COL-0122-014_zoom2.jpg'),
(61, 101, 'COL-0122-014_zoom3.jpg'),
(62, 102, 'F46-0285-018_zoom1.jpg'),
(63, 102, 'F46-0285-018_zoom2.jpg'),
(64, 103, 'F62-0673-006_zoom1.jpg'),
(65, 103, 'F62-0673-006_zoom2.jpg'),
(66, 103, 'F62-0673-006_zoom3.jpg'),
(67, 103, 'F62-0673-006_zoom4.jpg'),
(68, 104, 'E79-0886-014_zoom1.jpg'),
(69, 104, 'E79-0886-014_zoom2.jpg'),
(70, 104, 'E79-0886-014_zoom3.jpg'),
(71, 104, 'E79-0886-014_zoom4.jpg'),
(72, 105, 'H21-0443-008_zoom1.jpg'),
(73, 105, 'H21-0443-008_zoom2.jpg'),
(74, 105, 'H21-0443-008_zoom3.jpg'),
(75, 105, 'H21-0443-008_zoom4.jpg'),
(76, 106, 'ETS-0104-008_zoom1.jpg'),
(77, 106, 'ETS-0104-008_zoom2.jpg'),
(78, 106, 'ETS-0104-008_zoom3.jpg'),
(79, 106, 'ETS-0104-008_zoom4.jpg'),
(80, 107, 'E60-0477-375_zoom1.jpg'),
(81, 107, 'E60-0477-375_zoom2.jpg'),
(82, 107, 'E60-0477-375_zoom3.jpg'),
(83, 107, 'E60-0477-375_zoom4.jpg'),
(84, 108, 'F46-0211-008_zoom1.jpg'),
(85, 108, 'F46-0211-008_zoom2.jpg'),
(86, 108, 'F46-0211-008_zoom3.jpg'),
(87, 109, 'F46-0347-006_zoom1.jpg'),
(88, 109, 'F46-0347-006_zoom2.jpg'),
(89, 109, 'F46-0347-006_zoom3.jpg'),
(90, 109, 'F46-0347-006_zoom4.jpg'),
(91, 110, 'V54-1210-006_zoom1.jpg'),
(92, 110, 'V54-1210-006_zoom2.jpg'),
(93, 110, 'V54-1210-006_zoom3.jpg'),
(94, 110, 'V54-1210-006_zoom4.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `notificacoes`
--

CREATE TABLE `notificacoes` (
  `id` int(11) NOT NULL,
  `nome` varchar(70) NOT NULL,
  `tel` varchar(16) NOT NULL,
  `email` varchar(100) NOT NULL,
  `assunto` varchar(50) NOT NULL,
  `msg` text NOT NULL,
  `status` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `notificacoes`
--

INSERT INTO `notificacoes` (`id`, `nome`, `tel`, `email`, `assunto`, `msg`, `status`) VALUES
(14, 'ew4erfd', 'sdfsd', 'sdfsdf', 'sefsdfsd', 'dfhfthwrhthr', '1'),
(15, 'David', '99999999', 'sdlkmf@sdjnds.com', 'Compra', 'asÃ§ihdviushdlvskjhdvlskjefh', '1'),
(16, 'Giovanny Lucas', '981590574', 'geovannylucas2013@outlook.com', 'NotificaÃ§Ãµes', 'A pÃ¡gina nÃ£o para de me notificar!!', '1'),
(17, 'Manuel', '99999999', 'peduelsinho@gmail.com', 'Compras', 'Comprei vÃ¡rias coisas e nÃ£o recebi!!', '1'),
(18, 'Giova', '999999999', '@gmail.com', 'Compra', 'dvlfjahnzi oudrsjkwasijxlckm r', '1'),
(19, 'aeesrdhbrvssgd', '99999999', 'fcajueiro94@gmail.com', 'Comprea', 'Ã§doefiuaopmaivutpoivwej', '1'),
(20, 'Nicole', '+55(99)99999-999', 'geovannylucas2013@hotmail.com', 'Testando', 'Vendo se ainda presta', '1'),
(21, 'Nicole', '+55(99)99999-999', 'geovannylucas2013@hotmail.com', 'Testando', 'Vendo se ainda presta', '1'),
(22, 'Nicole', '+55(99)99999-999', 'geovannylucas2013@hotmail.com', 'Testando', 'Vendo se ainda presta', '0'),
(23, 'Nicole', '+55(99)99999-999', 'geovannylucas2013@hotmail.com', 'Testando', 'Vendo se ainda presta', '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL,
  `preco` varchar(10) NOT NULL,
  `comprador` varchar(50) NOT NULL,
  `data` date NOT NULL,
  `prazo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pedidos`
--

INSERT INTO `pedidos` (`id`, `preco`, `comprador`, `data`, `prazo`) VALUES
(3, '299.99', 'Keds', '2018-10-08', 0),
(4, '180.99', 'Lucas', '2018-10-11', 0),
(5, '158', 'Lucas', '2018-10-11', 0),
(6, '299.99', 'Lucas', '2018-10-11', 0),
(7, '480.98', 'Giova_ADM', '2018-10-11', 0),
(8, '79.9', 'peluka', '2018-10-11', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `cod` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `preco` double NOT NULL,
  `cat` varchar(20) NOT NULL,
  `descricao` text NOT NULL,
  `info_add` text NOT NULL,
  `cor` varchar(20) NOT NULL,
  `tamanho` varchar(20) NOT NULL,
  `qnt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`cod`, `nome`, `preco`, `cat`, `descricao`, `info_add`, `cor`, `tamanho`, `qnt`) VALUES
(99, 'Camisa Bacana', 299.99, 'Masculino', 'Camisa toper', 'Bacana mesmo', 'Cinza', 'G', 10),
(100, 'Camisa Tope', 180.99, 'Masculino', 'Camisa show de bola', 'nece\r\nessevve', 'Azul Claro', 'M', 15),
(101, 'Camisa Milan', 158, 'Infantil', 'Camisa do Milan para crianÃ§as a partir de 3 anos.', 'Disponibilizamos de 30cm x 50cm atÃ© 60cm x 90cm.', 'Vermelho', 'PP', 12),
(102, 'Blusa Infantil', 79.9, 'Infantil', 'aÃ§lmedmlÃ§', 'ewÃ§lemewmol', 'Cinza', 'PP', 25),
(103, 'Camisa Regata', 35.9, 'Moda-praia', 'Camisa regata para pessoas acima de 14 anos.', 'Tope, ela\r\n', 'Preto', 'M', 40),
(104, 'Short Praia', 47.8, 'Moda-praia', 'Short para pessoas a partir de 10 anos', 'Muuito bom.', 'Branco', 'P', 17),
(105, 'MacacÃ£o Willard', 130.1, 'Infanto-juvenil', 'MacacÃ£o Infanto-Juvenil.', 'Pessoas a partir de 10 anos.', 'Azul Claro', 'P', 5),
(106, 'Vestido Florido', 99.99, 'Feminino', 'zpdÃ§mjswÃ§kl', 'rlgkmmlerkgn', 'Azul Escuro', 'M', 10),
(107, 'Bermuda Bacana', 29.9, 'Masculino', 'doijeklekmn', 'sdeoijeolkijeolkmmrf', 'Azul Claro', 'M', 23),
(108, 'Blusa de Frio', 59.9, 'Inverno', 'ejnawdljn top', 'awkjcbawkjcbawjkbk grand', 'Branco', 'PP', 13),
(109, 'Blusa de Frio GM Modas', 400, 'Masculino', 'Pense num frii', 'Mesmo que uma lona, pra esquentar', 'Azul Escuro', 'PP', 63),
(110, 'MacacÃ£o Whindervan', 80, 'Infanto-juvenil', 'asawq45trjngf vcfds', 'ascvsbst4esd sdxs', 'Azul Escuro', 'P', 30);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tamanho`
--

CREATE TABLE `tamanho` (
  `id_tam` int(11) NOT NULL,
  `cod_tam` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tamanho`
--

INSERT INTO `tamanho` (`id_tam`, `cod_tam`) VALUES
(1, 'PP'),
(2, 'P'),
(3, 'M'),
(4, 'G'),
(5, 'GG'),
(6, 'XG'),
(7, 'XL');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users_admin`
--

CREATE TABLE `users_admin` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `img` varchar(36) NOT NULL,
  `nivel` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `users_admin`
--

INSERT INTO `users_admin` (`id`, `nome`, `email`, `senha`, `img`, `nivel`) VALUES
(1, 'Giova_ADM', 'giovanny@gmail.com', '12345', 'giovaADM.png', '0'),
(4, 'Carinha_ADM', 'fcajueiro94@gmail.com', 'qwerty', 'dd06156b06c412dcf8a5309a36936b6e.jpg', '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `tel` varchar(16) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `cpf`, `tel`, `email`, `senha`) VALUES
(12, 'Giova', '888.888.888-22', '99999999', 'giova@gmail.com', 'qwerty'),
(13, 'peluka', '000.000.000-00', '+55(99)99999-999', 'fcajueiro4@gmail.com', 'bel123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_cat`);

--
-- Indexes for table `cor`
--
ALTER TABLE `cor`
  ADD PRIMARY KEY (`id_cor`);

--
-- Indexes for table `enderecos`
--
ALTER TABLE `enderecos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `imagens`
--
ALTER TABLE `imagens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_Produto_idx` (`id_Produto`);

--
-- Indexes for table `notificacoes`
--
ALTER TABLE `notificacoes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`cod`);

--
-- Indexes for table `tamanho`
--
ALTER TABLE `tamanho`
  ADD PRIMARY KEY (`id_tam`);

--
-- Indexes for table `users_admin`
--
ALTER TABLE `users_admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nome` (`nome`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cpf` (`cpf`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cor`
--
ALTER TABLE `cor`
  MODIFY `id_cor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `enderecos`
--
ALTER TABLE `enderecos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `imagens`
--
ALTER TABLE `imagens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `notificacoes`
--
ALTER TABLE `notificacoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `tamanho`
--
ALTER TABLE `tamanho`
  MODIFY `id_tam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users_admin`
--
ALTER TABLE `users_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `imagens`
--
ALTER TABLE `imagens`
  ADD CONSTRAINT `cod` FOREIGN KEY (`id_Produto`) REFERENCES `produtos` (`cod`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
