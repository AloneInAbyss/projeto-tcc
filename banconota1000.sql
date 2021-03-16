-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 02-Out-2018 às 19:22
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
-- Database: `nota1000`
CREATE DATABASE nota1000;
USE nota1000;
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `questao`
--

CREATE TABLE `questao` (
  `id` int(11) NOT NULL,
  `resposta` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `questao` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alternativa1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alternativa2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alternativa3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alternativa4` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alternativa5` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `resolucao` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `materia` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `imagem` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `questao`
--

INSERT INTO `questao` (`id`, `resposta`, `questao`, `alternativa1`, `alternativa2`, `alternativa3`, `alternativa4`, `alternativa5`, `resolucao`, `materia`, `imagem`) VALUES
(1, 'Caio', 'Se o trabalho de TCC der ruim de quem é a culpa ?', 'Iago', 'Joel', 'Caio', 'Laura', 'Mariana', 'Blablalba wiska sache', 'matematica', ''),
(2, 'Laura', 'Se o trabalho de TCC der ruim de quem é a culpa ?', 'Iago', 'Joel', 'Caio', 'Laura', 'Mariana', 'Blablalba wiska sache', 'matematica', ''),
(3, 'Iago', 'Se o trabalho de TCC der ruim de quem é a culpa ?', 'Iago', 'Joel', 'Caio', 'Laura', 'Mariana', 'Blablalba wiska sache', 'matematica', ''),
(4, 'Joel', 'Se o trabalho de TCC der ruim de quem é a culpa ?', 'Iago', 'Joel', 'Caio', 'Laura', 'Mariana', 'Blablalba wiska sache', 'matematica', ''),
(5, 'Mariana', 'Se o trabalho de TCC der ruim de quem é a culpa ?', 'Iago', 'Joel', 'Caio', 'Laura', 'Mariana', 'Blablalba wiska sache', 'matematica', ''),
(6, 'Caio', 'Se o trabalho de TCC der ruim de quem é a culpa ?', 'Iago', 'Joel', 'Caio', 'Laura', 'Mariana', 'Blablalba wiska sache', 'matematica', 'biologia.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `resumos`
--

CREATE TABLE `resumos` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `materia` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `submateria` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descricao` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `resumo` longtext COLLATE utf8_unicode_ci,
  `link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `resumos`
--

INSERT INTO `resumos` (`id`, `nome`, `materia`, `submateria`, `descricao`, `resumo`, `link`) VALUES
(1, 'Velocidade da onda', 'Ondulatoria', 'Propagação da onda', 'Blablablablablablabla wiska sache...', 'Velocidade da onda,Ondulatoria,Propagação da onda', '/conteudos'),
(2, 'Velocidade da onda 2', 'Ondulatoria 2', 'Propagação da onda 2', 'Blablablablablablabla wiska sache...', 'Velocidade da onda,Ondulatoria,Propagação da onda 2', '/conteudos'),
(3, 'Segunda Guerra Mundial', 'História', 'Guerras', 'Os acontecimentos entre países nos anos 1939-1945', 'A segunda guerra foi um grande conflito que envolveu todos os países da Europa.', '/segunda-guerra-mundial');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `nome` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `email`, `senha`, `nome`) VALUES
(3, 'thiago@gmail.com', '123456', 'Thiago Assi'),
(4, 'caio@gmail.com', '123456', 'Caio Lemes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questao`
--
ALTER TABLE `questao`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resumos`
--
ALTER TABLE `resumos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questao`
--
ALTER TABLE `questao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `resumos`
--
ALTER TABLE `resumos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
