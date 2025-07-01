-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 06-Dez-2022 às 15:27
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bolseiros`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alocacao`
--

CREATE TABLE `alocacao` (
  `id` int(11) NOT NULL,
  `andar` int(3) NOT NULL,
  `quarto` int(4) NOT NULL,
  `id_bolseiro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `bolsa`
--

CREATE TABLE `bolsa` (
  `id` int(11) NOT NULL,
  `tipo` enum('Completa','Parcial') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `bolsa`
--

INSERT INTO `bolsa` (`id`, `tipo`) VALUES
(1, 'Completa'),
(2, 'Parcial');

-- --------------------------------------------------------

--
-- Estrutura da tabela `bolseiro`
--

CREATE TABLE `bolseiro` (
  `id` int(11) NOT NULL,
  `primeiro_nome` varchar(20) NOT NULL,
  `segundo_nome` varchar(20) NOT NULL,
  `apelido` varchar(20) NOT NULL,
  `data_nascimento` date NOT NULL,
  `provincia` varchar(45) NOT NULL,
  `distrito` varchar(45) NOT NULL,
  `bi` varchar(45) NOT NULL,
  `nuit` int(9) NOT NULL,
  `sexo` char(1) NOT NULL,
  `orfao` enum('nao','pai','mae','ambos') NOT NULL,
  `contacto1` int(15) NOT NULL,
  `contacto2` int(15) NOT NULL,
  `ano_ingresso` date NOT NULL,
  `codigo_estudante` int(7) NOT NULL,
  `email` varchar(80) NOT NULL,
  `ano_saida` date NOT NULL,
  `id_bolsa` int(11) NOT NULL,
  `id_curso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `bolseiro`
--

INSERT INTO `bolseiro` (`id`, `primeiro_nome`, `segundo_nome`, `apelido`, `data_nascimento`, `provincia`, `distrito`, `bi`, `nuit`, `sexo`, `orfao`, `contacto1`, `contacto2`, `ano_ingresso`, `codigo_estudante`, `email`, `ano_saida`, `id_bolsa`, `id_curso`) VALUES
(5, 'dsfdsfdsf', 'dfdsfsdfdsf', 'sdfsdfdsfdsf', '2022-10-30', 'Maputo', 'fdsfsfsdfsf', '1232152556A', 45436436, 'F', 'nao', 3544353, 43534534, '2022-10-30', 2424, 'fafasfhahsghjas@gmail.com', '2022-12-01', 2, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadeira`
--

CREATE TABLE `cadeira` (
  `id` int(11) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `id_semestre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadeira`
--

INSERT INTO `cadeira` (`id`, `nome`, `id_semestre`) VALUES
(1, 'Ingles Tecnico', 15),
(2, 'Introducao a logica', 15),
(3, 'Algebra e Geometria Analitica ', 15),
(4, 'Fundamentos de Informatica', 15),
(5, 'Introducao a Informatica', 15),
(6, 'Tecnicas de Expressao ', 15),
(7, 'Analise Matematica I', 16),
(8, 'Programacao I', 16),
(9, 'Arquitectura de Computadores', 16),
(10, 'Metodologia de Pesquisa', 16),
(11, 'Introducao a Gestao de Empresas', 16),
(12, 'Estatistica', 16),
(13, 'Analise Matematica II', 17),
(14, 'Matematica Discreta', 17),
(15, 'Programacao II', 17),
(16, 'Estrutura de Dados e Algoritmos', 17),
(17, 'Sistemas Operativos', 17),
(18, 'Analise de Sistemas', 17),
(19, 'Introdução a Auditoria Informática', 18),
(20, 'Programação WEB', 18),
(21, 'Analise e Desenho Estruturado de Sistemas', 18),
(22, 'Introdução a Redes de Computadores', 18),
(23, 'Introdução a Bases de Dados', 18),
(24, 'Programação em C#', 18),
(25, 'Sistemas Distribuídos', 19),
(26, 'Bases de Dados', 19),
(27, 'Segurança de Sistemas', 19),
(28, 'Direito das TICs', 19),
(29, 'Análise e Desenho Orientado a Objectos', 19),
(30, 'Programação Web Avançada', 19),
(31, 'Engenharia de Software', 20),
(32, 'Administração de sistemas LINUX', 20),
(33, 'Paradigmas de Programação', 20),
(34, 'Programação Orientada a Objectos Avançada', 20),
(35, 'Laboratório de Engenharia de Software', 20),
(36, 'Gestão de Sistemas de Informação', 20),
(37, 'Empreendedorismo ', 21),
(38, 'Projecto Final I', 21),
(39, 'Software e Aplicacoes de Gestao', 21),
(40, 'planeamento e Desenho de Redes', 21),
(41, 'Administracao de Redes', 21),
(42, 'Seguranca de Redes', 21),
(49, 'Software e Aplicativos de Gestao', 21),
(50, 'Engenharia de Software Avancada', 21),
(51, 'Redesenho e Automacao de Processos', 21),
(52, 'Seguranca de Redes ', 21),
(53, 'Empreendendorismo', 21),
(54, 'Projecto Final I', 21),
(55, 'Etica e Deontologia Profissional', 22),
(56, 'Inteligencia Artificial', 22),
(57, 'Projecto Final II', 22),
(58, 'Introducao ao Direito', 8),
(59, 'Introducao a Ciencia Politica ', 8),
(60, 'Introducao a Economia ', 8),
(61, 'Introducao a Administracao Publica ', 8),
(62, 'Ingles I', 8),
(63, 'Introducao a Ciencias Sociais', 8),
(64, 'Matemática ', 8),
(65, 'Cálculo Financeiro', 9),
(66, 'Comunicação em Inglês II', 9),
(67, 'Direito Constitucional', 9),
(68, 'Economia de Moçambique', 9),
(69, 'Fundamentos de Filosofia', 9),
(70, 'Matemática Básica', 9),
(71, 'Teoria Geral de Administração', 9),
(72, 'Antropologia Aplicada à Administração Pública', 10),
(73, 'Espanhol I', 10),
(74, 'Estatística para as Ciências Sociais', 10),
(75, 'Métodos de Pesquisa em Ciências Sociais', 10),
(76, 'Direito Administrativo I', 10),
(77, 'Contabilidade Geral I', 10),
(78, 'Administração de Recursos Humanos', 10),
(79, 'Sociologia Aplicada Á Administração', 11),
(80, 'Sistema Nacional de Gestão de Recursos Humanos', 11),
(81, 'Método de Pesquisa em Administração', 11),
(82, 'Finanças Públicas e Autárquicas', 11),
(83, 'Espanhol II', 11),
(84, 'Direito Administrativo II', 11),
(85, 'Contabilidade Geral II', 11),
(86, 'Contabilidade Pública', 12),
(87, 'Direito Fiscal', 12),
(88, 'Elaboração e Gestão de Projectos', 12),
(89, 'Governação e Políticas Públicas', 12),
(90, 'Organização Sistemas e Métodos', 12),
(91, 'Planificação e Gestão Estratégica', 12),
(92, 'Administração da Justiça', 13),
(93, 'Administração de Recursos Materiais e Patrimoniais', 13),
(94, 'Administração Pública Comparada', 13),
(95, 'Auditoria em Administração Pública', 13),
(96, 'Conflito e Negociação', 13),
(97, 'Desenvolvimento Organizacional', 13),
(98, 'Direito Económico', 14),
(99, 'Ética e Deontologia Profissional', 14),
(100, 'Governação Local e Autárquica', 14),
(101, 'Marketing Institucional', 14),
(102, 'Protocolo em Administração Pública', 14),
(103, 'Psicologia Organizacional', 14),
(104, 'Seminário Metodológico', 14),
(105, 'Filosofia', 23),
(106, 'Micro Economia', 23),
(107, 'História de Relações Internacionais', 23),
(108, ' Ciência Política', 23),
(109, 'Inglês', 23),
(110, 'Introdução às Ciências Sociais', 23),
(111, 'Técnicas de Comunicação e Expressão', 23),
(112, 'Economia II', 24),
(113, 'Estatística', 24),
(114, 'Geopolítica', 24),
(115, 'Inglês II', 24),
(116, 'Introdução ao Direito', 24),
(117, 'Técnica de Comunicação e Expressão II', 24),
(118, 'História de Relações Internacionais II', 24),
(119, 'Comércio Internacional', 25),
(120, 'Direito Constitucional', 25),
(121, 'Psicologia', 25),
(122, 'Teoria de Relações Internacionais', 25),
(123, 'Inglês III', 25),
(124, 'Metodologia de Pesquisa I', 25),
(125, 'Espanhol I', 25),
(126, 'Inglês IV', 26),
(127, 'Teoria de Relações Internacionais', 26),
(128, 'Metodologia de Pesquisa II', 26),
(129, 'Prática Diplomática', 26),
(130, 'Finanças Internacionais', 26),
(131, 'Espanhol II', 26),
(132, 'Direito Internacional Público', 26),
(133, 'Direito Internacional Privado', 27),
(134, 'Economia de Desenvolvimento', 27),
(135, 'Estudos de Política Externa', 27),
(136, 'Espanhol III', 27),
(137, 'Técnicas de Comunicação em Inglês I	', 27),
(138, 'Estudos de Conflito', 27),
(139, 'Investigação Aplicada', 28),
(140, 'Economia de Moçambique', 28),
(141, 'Economia Política Internacional', 28),
(142, 'Estudos de Paz', 28),
(143, 'Política Externa de Moçambique', 28),
(144, 'Técnicas de Comunicação em Inglês II', 28),
(145, 'Espanhol IV', 28),
(146, 'Teoria e Prática de Negociações', 29),
(147, 'Seminários', 29),
(148, 'Relações Internacionais Contemporâneas', 29),
(149, 'Relações Interafricanas', 29),
(150, 'Estudos de Segurança', 29),
(151, 'Estudos da União Europeia', 29),
(152, 'Estudos da SADC', 29),
(153, 'Estudos de Medio Oriente', 29),
(154, 'Frances I', 25),
(155, 'Mandarim I', 25),
(156, 'Frances II', 26),
(157, 'Mandarim II', 26),
(158, 'Frances III', 27),
(159, 'Mandarim III', 27),
(160, 'Frances IV', 28),
(161, 'Mandarim IV', 28);

-- --------------------------------------------------------

--
-- Estrutura da tabela `contacto_emergencia`
--

CREATE TABLE `contacto_emergencia` (
  `id` int(11) NOT NULL,
  `primeiro_nome` varchar(20) NOT NULL,
  `segundo_nome` varchar(20) NOT NULL,
  `apelido` varchar(20) NOT NULL,
  `parentesco` varchar(45) NOT NULL,
  `contacto1` int(15) NOT NULL,
  `contacto2` int(15) NOT NULL,
  `bairro` varchar(45) NOT NULL,
  `avenida` varchar(45) NOT NULL,
  `id_bolseiro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `controle_regulamento`
--

CREATE TABLE `controle_regulamento` (
  `id` int(11) NOT NULL,
  `infraccao` text NOT NULL,
  `descricao` text NOT NULL,
  `estado` enum('resolvido','pago','pendente','anuldo') NOT NULL,
  `id_bolseiro` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE `curso` (
  `id` int(11) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `duracao` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `curso`
--

INSERT INTO `curso` (`id`, `nome`, `duracao`) VALUES
(1, 'Admnistração pública', '4 anos'),
(2, 'Engenharia em Tecnologias e Sistemas de Informação', '4.5 anos '),
(3, 'Relações Internacionais e Diplomacia', '4 anos');

-- --------------------------------------------------------

--
-- Estrutura da tabela `estado_saude`
--

CREATE TABLE `estado_saude` (
  `id` int(11) NOT NULL,
  `id_bolseiro` int(11) NOT NULL,
  `restricao_alimentar` varchar(100) NOT NULL,
  `doenca_cronica` varchar(100) NOT NULL,
  `observacao` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `id` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `apelido` varchar(20) NOT NULL,
  `cargo` varchar(45) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `kit`
--

CREATE TABLE `kit` (
  `id` int(11) NOT NULL,
  `cama` tinyint(1) NOT NULL,
  `lencol` tinyint(1) NOT NULL,
  `almofoda` tinyint(1) NOT NULL,
  `fronha` tinyint(1) NOT NULL,
  `cobertor` tinyint(1) NOT NULL,
  `id_alocacao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `mae`
--

CREATE TABLE `mae` (
  `id` int(11) NOT NULL,
  `primeiro_nome` varchar(20) NOT NULL,
  `segundo_nome` varchar(20) NOT NULL,
  `apelido` varchar(20) NOT NULL,
  `data nascimento` date NOT NULL,
  `provincia` varchar(45) NOT NULL,
  `distrito` varchar(45) NOT NULL,
  `contacto1` int(15) NOT NULL,
  `contacto2` int(15) NOT NULL,
  `profissao` varchar(50) NOT NULL,
  `entidade patrinal` varchar(50) NOT NULL,
  `id_bolseiro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `nota`
--

CREATE TABLE `nota` (
  `id` int(11) NOT NULL,
  `nota_final` int(2) NOT NULL,
  `id_cadeira` int(11) NOT NULL,
  `id_bolseiro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pai`
--

CREATE TABLE `pai` (
  `id` int(11) NOT NULL,
  `primeiro_nome` varchar(20) NOT NULL,
  `segundo_nome` varchar(20) DEFAULT NULL,
  `apelido` varchar(20) DEFAULT NULL,
  `provincia` varchar(45) DEFAULT NULL,
  `distrito` varchar(45) DEFAULT NULL,
  `data nascimento` date DEFAULT NULL,
  `contacto1` int(15) DEFAULT NULL,
  `contacto2` int(15) DEFAULT NULL,
  `profissao` varchar(50) DEFAULT NULL,
  `entidade_patronal` varchar(50) DEFAULT NULL,
  `id_bolseiro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `relatorio_semestral`
--

CREATE TABLE `relatorio_semestral` (
  `id` int(11) NOT NULL,
  `id_bolseiro` int(11) NOT NULL,
  `id_Curso` int(11) NOT NULL,
  `id_Cadeira` int(11) NOT NULL,
  `status` varchar(45) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `semestre`
--

CREATE TABLE `semestre` (
  `id` int(11) NOT NULL,
  `numero` int(11) NOT NULL,
  `id_Curso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `semestre`
--

INSERT INTO `semestre` (`id`, `numero`, `id_Curso`) VALUES
(8, 1, 1),
(9, 2, 1),
(10, 3, 1),
(11, 4, 1),
(12, 5, 1),
(13, 6, 1),
(14, 7, 1),
(15, 1, 2),
(16, 2, 2),
(17, 3, 2),
(18, 4, 2),
(19, 5, 2),
(20, 6, 2),
(21, 7, 2),
(22, 8, 2),
(23, 1, 3),
(24, 2, 3),
(25, 3, 3),
(26, 4, 3),
(27, 5, 3),
(28, 6, 3),
(29, 7, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `situacao_escolar`
--

CREATE TABLE `situacao_escolar` (
  `id` int(11) NOT NULL,
  `ano_conclusao` date NOT NULL,
  `escola_frequentada` varchar(100) NOT NULL,
  `provincia` varchar(80) NOT NULL,
  `distrito` varchar(80) NOT NULL,
  `id_bolseiro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `situacao_escolar`
--

INSERT INTO `situacao_escolar` (`id`, `ano_conclusao`, `escola_frequentada`, `provincia`, `distrito`, `id_bolseiro`) VALUES
(3, '2022-10-30', 'dgdsh', 'Maputo', 'jhgjhhjjj', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `utilizador` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `permissao` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `utilizador`, `senha`, `permissao`) VALUES
(1, 'faizal23', '827ccb0eea8a706c4c34a16891f84e7b', 'Ad');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `alocacao`
--
ALTER TABLE `alocacao`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_Estudante` (`id_bolseiro`);

--
-- Índices para tabela `bolsa`
--
ALTER TABLE `bolsa`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `bolseiro`
--
ALTER TABLE `bolseiro`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_bolsa` (`id_bolsa`),
  ADD KEY `id_curso` (`id_curso`);

--
-- Índices para tabela `cadeira`
--
ALTER TABLE `cadeira`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_semestre` (`id_semestre`);

--
-- Índices para tabela `contacto_emergencia`
--
ALTER TABLE `contacto_emergencia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_estudante` (`id_bolseiro`);

--
-- Índices para tabela `controle_regulamento`
--
ALTER TABLE `controle_regulamento`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_Estudante` (`id_bolseiro`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Índices para tabela `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `estado_saude`
--
ALTER TABLE `estado_saude`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_bolseiro` (`id_bolseiro`);

--
-- Índices para tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Índices para tabela `kit`
--
ALTER TABLE `kit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_alocacao` (`id_alocacao`);

--
-- Índices para tabela `mae`
--
ALTER TABLE `mae`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_bolseiro` (`id_bolseiro`);

--
-- Índices para tabela `nota`
--
ALTER TABLE `nota`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nota_bolseiro` (`id_bolseiro`),
  ADD KEY `nota_cadeira` (`id_cadeira`);

--
-- Índices para tabela `pai`
--
ALTER TABLE `pai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_Estudante` (`id_bolseiro`);

--
-- Índices para tabela `relatorio_semestral`
--
ALTER TABLE `relatorio_semestral`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_Estudante` (`id_bolseiro`),
  ADD KEY `id_Curso` (`id_Curso`),
  ADD KEY `id_Cadeira` (`id_Cadeira`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Índices para tabela `semestre`
--
ALTER TABLE `semestre`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_Curso` (`id_Curso`);

--
-- Índices para tabela `situacao_escolar`
--
ALTER TABLE `situacao_escolar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_bolseiro` (`id_bolseiro`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `alocacao`
--
ALTER TABLE `alocacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `bolsa`
--
ALTER TABLE `bolsa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `bolseiro`
--
ALTER TABLE `bolseiro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `cadeira`
--
ALTER TABLE `cadeira`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=162;

--
-- AUTO_INCREMENT de tabela `contacto_emergencia`
--
ALTER TABLE `contacto_emergencia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `controle_regulamento`
--
ALTER TABLE `controle_regulamento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `curso`
--
ALTER TABLE `curso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `estado_saude`
--
ALTER TABLE `estado_saude`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `kit`
--
ALTER TABLE `kit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `mae`
--
ALTER TABLE `mae`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `nota`
--
ALTER TABLE `nota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pai`
--
ALTER TABLE `pai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `relatorio_semestral`
--
ALTER TABLE `relatorio_semestral`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `semestre`
--
ALTER TABLE `semestre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de tabela `situacao_escolar`
--
ALTER TABLE `situacao_escolar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `bolseiro`
--
ALTER TABLE `bolseiro`
  ADD CONSTRAINT `bolseiro_ibfk_1` FOREIGN KEY (`id_bolsa`) REFERENCES `bolsa` (`id`),
  ADD CONSTRAINT `bolseiro_ibfk_2` FOREIGN KEY (`id_curso`) REFERENCES `curso` (`id`);

--
-- Limitadores para a tabela `cadeira`
--
ALTER TABLE `cadeira`
  ADD CONSTRAINT `cadeira_ibfk_1` FOREIGN KEY (`id_semestre`) REFERENCES `semestre` (`id`);

--
-- Limitadores para a tabela `contacto_emergencia`
--
ALTER TABLE `contacto_emergencia`
  ADD CONSTRAINT `contacto_emergencia_ibfk_1` FOREIGN KEY (`id_bolseiro`) REFERENCES `bolseiro` (`id`);

--
-- Limitadores para a tabela `controle_regulamento`
--
ALTER TABLE `controle_regulamento`
  ADD CONSTRAINT `controle_regulamento_ibfk_1` FOREIGN KEY (`id_bolseiro`) REFERENCES `bolseiro` (`id`),
  ADD CONSTRAINT `controle_regulamento_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`);

--
-- Limitadores para a tabela `estado_saude`
--
ALTER TABLE `estado_saude`
  ADD CONSTRAINT `estado_saude_ibfk_1` FOREIGN KEY (`id_bolseiro`) REFERENCES `bolseiro` (`id`);

--
-- Limitadores para a tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD CONSTRAINT `funcionario_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`);

--
-- Limitadores para a tabela `kit`
--
ALTER TABLE `kit`
  ADD CONSTRAINT `kit_ibfk_1` FOREIGN KEY (`id_alocacao`) REFERENCES `alocacao` (`id`);

--
-- Limitadores para a tabela `mae`
--
ALTER TABLE `mae`
  ADD CONSTRAINT `mae_ibfk_1` FOREIGN KEY (`id_bolseiro`) REFERENCES `bolseiro` (`id`);

--
-- Limitadores para a tabela `nota`
--
ALTER TABLE `nota`
  ADD CONSTRAINT `nota_bolseiro` FOREIGN KEY (`id_bolseiro`) REFERENCES `bolseiro` (`id`),
  ADD CONSTRAINT `nota_cadeira` FOREIGN KEY (`id_cadeira`) REFERENCES `cadeira` (`id`);

--
-- Limitadores para a tabela `pai`
--
ALTER TABLE `pai`
  ADD CONSTRAINT `pai_ibfk_1` FOREIGN KEY (`id_bolseiro`) REFERENCES `bolseiro` (`id`);

--
-- Limitadores para a tabela `relatorio_semestral`
--
ALTER TABLE `relatorio_semestral`
  ADD CONSTRAINT `relatorio_semestral_ibfk_1` FOREIGN KEY (`id_bolseiro`) REFERENCES `bolseiro` (`id`),
  ADD CONSTRAINT `relatorio_semestral_ibfk_2` FOREIGN KEY (`id_Curso`) REFERENCES `curso` (`id`),
  ADD CONSTRAINT `relatorio_semestral_ibfk_3` FOREIGN KEY (`id_Cadeira`) REFERENCES `cadeira` (`id`),
  ADD CONSTRAINT `relatorio_semestral_ibfk_4` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`);

--
-- Limitadores para a tabela `semestre`
--
ALTER TABLE `semestre`
  ADD CONSTRAINT `semestre_ibfk_1` FOREIGN KEY (`id_Curso`) REFERENCES `curso` (`id`);

--
-- Limitadores para a tabela `situacao_escolar`
--
ALTER TABLE `situacao_escolar`
  ADD CONSTRAINT `situacao_escolar_ibfk_1` FOREIGN KEY (`id_bolseiro`) REFERENCES `bolseiro` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
