-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 18-Nov-2018 às 21:02
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projeto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `cod` int(5) NOT NULL,
  `nome` varchar(70) NOT NULL,
  `datadenasc` varchar(10) NOT NULL,
  `cidade` varchar(30) NOT NULL,
  `bairro` varchar(30) NOT NULL,
  `rua` varchar(50) NOT NULL,
  `numcasa` int(5) NOT NULL,
  `CPF` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`cod`, `nome`, `datadenasc`, `cidade`, `bairro`, `rua`, `numcasa`, `CPF`, `email`, `senha`) VALUES
(25, 'Alisson Francisco de Paula', '11/03/2001', 'Brazopolis', 'Anhumas', '0', 0, '343.423.423-42', 'Alisson.francisco@live.com', '123456'),
(26, 'Pamela Aparecida Rebelo Damasceno', '11/12/2000', 'Conceição dos Ouros', 'Chácara', 'Rua 1', 660, '123.456.789-10', 'pam2000damasceno@hotmail.com', '123'),
(29, 'Weverton Lucas Aparecido de Moraes', '12/10/2000', 'Conceição dos Ouros', 'Chácara', 'Rua 354', 1541, '658.745.687-43', 'wevertonlucas@gmail.com', '1210'),
(30, 'Marcelo Eduardo Moreira', '12/07/1997', 'Brazopolis', 'Centro', 'Rua 343', 658, '145.544.745-21', 'marceloeduardo@gmail.com', '1207'),
(31, 'Paulo Sergio Ferreira Junior', '13/11/2000', 'Paraisopolis', 'Centro', 'Rua 578', 785, '548.745.663-12', 'paulosergio@gmail.com', '1311'),
(32, 'Welingson Expedito dos Santos', '28/01/1998', 'Brazopolis', 'Centro', 'Rua 2375', 7925, '347.416.955-85', 'welingsonexpedito@gmail.com', '2801'),
(33, 'paulo', '09/08/1975', 'Conceição dos Ouros', 'Chácara', 'Rua 3', 1000, '123.456.789-55', 'profpaulo@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contem`
--

CREATE TABLE `contem` (
  `listadeprod` text NOT NULL,
  `codpedido` int(5) NOT NULL,
  `codproduto` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `cod` int(5) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(8) NOT NULL,
  `status` int(5) NOT NULL,
  `painel` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`cod`, `email`, `senha`, `status`, `painel`) VALUES
(0, 'alefreitas@gmail.com', '123', 1, 'a'),
(5, 'Alisson.francisco@live.com', '123456', 1, 'u'),
(6, 'pam2000damasceno@hotmail.com', '123', 1, 'u'),
(7, 'roselirebelo@gmail.com', '12345', 1, 'u'),
(8, 'felipe99rebelo@gmail.com', '37745488', 1, 'u'),
(9, 'wevertonlucas@gmail.com', '1210', 1, 'u'),
(10, 'marceloeduardo@gmail.com', '1207', 1, 'u'),
(11, 'paulosergio@gmail.com', '1311', 1, 'u'),
(12, 'welingsonexpedito@gmail.com', '2801', 1, 'u'),
(13, 'profpaulo@gmail.com', '123456', 1, 'u');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

CREATE TABLE `pedido` (
  `cod` int(5) NOT NULL,
  `codcliente` int(5) NOT NULL,
  `data` date NOT NULL,
  `status` varchar(50) NOT NULL,
  `frete` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `cod` int(5) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `descricao` text NOT NULL,
  `foto` varchar(200) DEFAULT NULL,
  `preco` varchar(5) NOT NULL,
  `tipo` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`cod`, `nome`, `descricao`, `foto`, `preco`, `tipo`) VALUES
(12, 'Cupcake ', 'Massa de chocolate com recheio de brigadeiro e cobertura de chantilly. Preço por unidade.', 'Img_receita/IMG-20180829-WA0048.jpg', '03,00', 'DOCE'),
(13, 'Bolo de Whey', 'Bolo de whey protein com frutas (morango, kiwi e mirtilo)\r\nDimensÃµes:15 cm\r\nServe:30 pessoas', 'Img_produto/bolohd4.jpg', '60,00', 'BOLO'),
(14, 'Bolo de chocolate Belga', 'Bolo com massa de chocolate, com recheio de chocolate belga e cobertura de ganache de chocolate belga com confeitos.\r\nDimensÃµes: 15 cm\r\nServe: 30 pessoas', 'Img_produto/bolo de chocolate belga.jpg', '75,00', 'BOLO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `receita`
--

CREATE TABLE `receita` (
  `cod` int(5) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `descricao` text NOT NULL,
  `foto` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `receita`
--

INSERT INTO `receita` (`cod`, `nome`, `descricao`, `foto`) VALUES
(2, 'Brigadeiro', 'Ingredientes:\r\n1 caixa de leite condensado\r\n1 colher (sopa) de margarina sem sal\r\n7 colheres (sopa) de achocolatado ou 4 colheres (sopa) de chocolate em pÃ³\r\nchocolate granulado.\r\nModo de preparo:\r\nEm uma panela funda, acrescente o leite condensado, a margarina e o chocolate em pÃ³\r\nCozinhe em fogo mÃ©dio e mexa atÃ© que o brigadeiro comece a desgrudar da panela\r\nDeixe esfriar e faÃ§a pequenas bolas com a mÃ£o passando a massa no chocolate granulado.\r\n', 'Img_receita/brigadeiro.png'),
(4, 'Pudim de Leite Condensado', 'Ingredientes:\r\n1 lata de leite condensado\r\n1 lata de leite (medida da lata de leite condensado)\r\n3 ovos inteiros.\r\nModo de preparo: \r\nPrimeiro, bata bem os ovos no liquidificador.\r\nAcrescente o leite condensado e o leite, e bata novamente.Coloque em uma forma redonda e despeje a massa do pudim por cima.\r\nAsse em forno mÃ©dio por 45 minutos, com a assadeira redonda dentro de uma maior com Ã¡gua.\r\nEspete um garfo para ver se estÃ¡ bem assado.\r\nDeixe esfriar e desenforme.', 'Img_receita/pudim.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`cod`),
  ADD UNIQUE KEY `CPF` (`CPF`);

--
-- Indexes for table `contem`
--
ALTER TABLE `contem`
  ADD PRIMARY KEY (`codpedido`,`codproduto`),
  ADD KEY `codproduto` (`codproduto`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`cod`);

--
-- Indexes for table `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`cod`),
  ADD KEY `codcliente` (`codcliente`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`cod`),
  ADD UNIQUE KEY `foto` (`foto`);

--
-- Indexes for table `receita`
--
ALTER TABLE `receita`
  ADD PRIMARY KEY (`cod`),
  ADD UNIQUE KEY `foto` (`foto`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `cod` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `cod` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pedido`
--
ALTER TABLE `pedido`
  MODIFY `cod` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `cod` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `receita`
--
ALTER TABLE `receita`
  MODIFY `cod` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `contem`
--
ALTER TABLE `contem`
  ADD CONSTRAINT `contem_ibfk_1` FOREIGN KEY (`codpedido`) REFERENCES `pedido` (`cod`),
  ADD CONSTRAINT `contem_ibfk_2` FOREIGN KEY (`codproduto`) REFERENCES `produto` (`cod`);

--
-- Limitadores para a tabela `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`codcliente`) REFERENCES `cliente` (`cod`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
