-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03-Mar-2021 às 07:23
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `helpinfotech`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `acesso_restrito`
--

CREATE TABLE `acesso_restrito` (
  `pk_restrito` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `acesso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE `administrador` (
  `codadm` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `login` varchar(20) NOT NULL,
  `senha` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`codadm`, `nome`, `login`, `senha`) VALUES
(1, 'Beatriz', 'admin', '1234');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `idcad` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `codcliente` int(10) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `senha` varchar(12) NOT NULL,
  `celular` varchar(16) NOT NULL,
  `cpf` varchar(12) NOT NULL,
  `cep` varchar(9) NOT NULL,
  `endereco` varchar(150) NOT NULL,
  `numero` varchar(5) NOT NULL,
  `complemento` varchar(5) NOT NULL,
  `bairro` varchar(25) NOT NULL,
  `cidade` varchar(25) NOT NULL,
  `estado` varchar(25) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fale_conosco`
--

CREATE TABLE `fale_conosco` (
  `cod` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `mensagem` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `fale_conosco`
--

INSERT INTO `fale_conosco` (`cod`, `nome`, `email`, `mensagem`) VALUES
(0, 'sadasdasdasd', 'asdasdasd@asdasdasd', 'asdasdasdasd');

-- --------------------------------------------------------

--
-- Estrutura da tabela `itensservico`
--

CREATE TABLE `itensservico` (
  `coditem` int(10) NOT NULL,
  `codservico` int(10) NOT NULL,
  `informacao` varchar(150) NOT NULL,
  `dicas` varchar(150) NOT NULL,
  `recomendacao` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `orcamento`
--

CREATE TABLE `orcamento` (
  `codorcamento` int(11) NOT NULL,
  `codps` int(11) NOT NULL,
  `codcliente` int(11) NOT NULL,
  `codservico` int(11) NOT NULL,
  `qtd` int(11) NOT NULL,
  `sub` float(10,2) NOT NULL,
  `total` float(10,2) NOT NULL,
  `datacompra` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `prestadordeserviço`
--

CREATE TABLE `prestadordeserviço` (
  `codps` int(10) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `senha` varchar(12) NOT NULL,
  `celular` varchar(16) NOT NULL,
  `cpf` varchar(12) NOT NULL,
  `cep` varchar(9) NOT NULL,
  `endereco` varchar(150) NOT NULL,
  `numero` varchar(5) NOT NULL,
  `complemento` varchar(5) NOT NULL,
  `bairro` varchar(25) NOT NULL,
  `cidade` varchar(25) NOT NULL,
  `estado` varchar(25) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `profissionais`
--

CREATE TABLE `profissionais` (
  `idprofissional` int(11) NOT NULL,
  `nome` varchar(30) COLLATE utf8_bin NOT NULL,
  `cargo` varchar(30) COLLATE utf8_bin NOT NULL,
  `imagem` varchar(40) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `profissionais`
--

INSERT INTO `profissionais` (`idprofissional`, `nome`, `cargo`, `imagem`) VALUES
(1, 'Beatriz', 'CEO', 'beatriz.png'),
(2, 'Renata', 'Diretor Financeiro', 'renata.png'),
(3, 'Hugo', 'Diretor de Operações', 'hugo.png'),
(5, 'Thales', 'Diretor de Tecnologia', 'thales.png'),
(6, 'Wesley', 'Diretor de Marketing', 'wesley.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `profissionaisdesc`
--

CREATE TABLE `profissionaisdesc` (
  `idprof` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `descri` varchar(30) NOT NULL,
  `imagem` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `servico`
--

CREATE TABLE `servico` (
  `codservico` int(11) NOT NULL,
  `descricao` varchar(150) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `manual` varchar(300) NOT NULL,
  `preco` varchar(12) NOT NULL,
  `imagem` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicoexp`
--

CREATE TABLE `servicoexp` (
  `codservico` int(11) NOT NULL,
  `nomedoservico` varchar(50) NOT NULL,
  `tipodeservico` varchar(150) NOT NULL,
  `descricao` varchar(250) NOT NULL,
  `imagem` varchar(200) NOT NULL,
  `codps` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `servicoexp`
--

INSERT INTO `servicoexp` (`codservico`, `nomedoservico`, `tipodeservico`, `descricao`, `imagem`, `codps`) VALUES
(1, 'Manutenção de Máquinas', 'manutenção', 'Realizar a manutenção preventiva de computadores e notebooks.', 'home-3-01-735x394.jpg', 0),
(2, 'Reparo de máquinas', 'Manutenção', 'Reparar placas e peças', 'home-3-02-735x394.jpg', 0),
(3, 'Suporte', 'Atendimento ', 'Prestar serviços de suportes técnicos através de IA', 'home-3-03-735x394.jpg', 0),
(4, 'Orçamento', 'Orçamento de computadores, notebooks e outros', 'Realizar o orçamento através das informações prestadas pelo cliente', 'home-3-04-735x394.jpg', 0),
(6, 'Manutenção', 'Manutenção', 'Busque aqui ajuda profissional, para manutenção de seus equipamentos eletronicos e perifericos.', 'home-3-05-735x460.jpg', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `usuario_id` int(11) NOT NULL,
  `usuario` varchar(200) NOT NULL,
  `senha` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`usuario_id`, `usuario`, `senha`) VALUES
(1, 'canalti', '10f722b5984a49bce67d434464fae37e'),
(2, 'pedrinho', '202cb962ac59075b964b07152d234b70');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `acesso_restrito`
--
ALTER TABLE `acesso_restrito`
  ADD PRIMARY KEY (`pk_restrito`);

--
-- Índices para tabela `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`codadm`);

--
-- Índices para tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`idcad`);

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`codcliente`);

--
-- Índices para tabela `itensservico`
--
ALTER TABLE `itensservico`
  ADD PRIMARY KEY (`coditem`),
  ADD KEY `codservico` (`codservico`);

--
-- Índices para tabela `orcamento`
--
ALTER TABLE `orcamento`
  ADD PRIMARY KEY (`codorcamento`),
  ADD KEY `codcliente` (`codcliente`),
  ADD KEY `codps` (`codps`),
  ADD KEY `codservico` (`codservico`);

--
-- Índices para tabela `prestadordeserviço`
--
ALTER TABLE `prestadordeserviço`
  ADD PRIMARY KEY (`codps`);

--
-- Índices para tabela `profissionais`
--
ALTER TABLE `profissionais`
  ADD PRIMARY KEY (`idprofissional`);

--
-- Índices para tabela `profissionaisdesc`
--
ALTER TABLE `profissionaisdesc`
  ADD PRIMARY KEY (`idprof`);

--
-- Índices para tabela `servico`
--
ALTER TABLE `servico`
  ADD PRIMARY KEY (`codservico`);

--
-- Índices para tabela `servicoexp`
--
ALTER TABLE `servicoexp`
  ADD PRIMARY KEY (`codservico`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuario_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `acesso_restrito`
--
ALTER TABLE `acesso_restrito`
  MODIFY `pk_restrito` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `idcad` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `codcliente` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `orcamento`
--
ALTER TABLE `orcamento`
  MODIFY `codorcamento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `prestadordeserviço`
--
ALTER TABLE `prestadordeserviço`
  MODIFY `codps` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `profissionais`
--
ALTER TABLE `profissionais`
  MODIFY `idprofissional` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `profissionaisdesc`
--
ALTER TABLE `profissionaisdesc`
  MODIFY `idprof` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `servico`
--
ALTER TABLE `servico`
  MODIFY `codservico` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `servicoexp`
--
ALTER TABLE `servicoexp`
  MODIFY `codservico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `orcamento`
--
ALTER TABLE `orcamento`
  ADD CONSTRAINT `orcamento_ibfk_1` FOREIGN KEY (`codcliente`) REFERENCES `cliente` (`codcliente`),
  ADD CONSTRAINT `orcamento_ibfk_2` FOREIGN KEY (`codps`) REFERENCES `prestadordeserviço` (`codps`),
  ADD CONSTRAINT `orcamento_ibfk_3` FOREIGN KEY (`codservico`) REFERENCES `servicoexp` (`codservico`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
