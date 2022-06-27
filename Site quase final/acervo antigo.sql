-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Jun-2022 às 16:14
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `acervodigital`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `autores`
--

CREATE TABLE `autores` (
  `AutorID` int(11) NOT NULL,
  `AutorNome` varchar(150) NOT NULL,
  `AutorDescricao` longtext NOT NULL,
  `AutorImagem` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `autores`
--

INSERT INTO `autores` (`AutorID`, `AutorNome`, `AutorDescricao`, `AutorImagem`) VALUES
(1, 'Cora Coralina', '...', 'cora.jpeg'),
(2, 'Carolina Maria de Jesus', '...', 'carolina.jpeg'),
(3, 'Clarice Lispector', '...', 'clarice.jpeg'),
(4, 'Cruz e Sousa', '...', 'cruz.jpeg'),
(5, 'Jorge Amado', '...', 'jorge.jpeg'),
(6, 'Erico Verissimo', '...', 'erico.jpeg'),
(7, 'Machado de Assis', '...', 'machado.jpeg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `livros`
--

CREATE TABLE `livros` (
  `LivroID` int(11) NOT NULL,
  `LivroTitulo` varchar(150) NOT NULL,
  `LivroAutor` varchar(150) NOT NULL,
  `LivroDescricao` longtext NOT NULL,
  `LivroImagem` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `livros`
--

INSERT INTO `livros` (`LivroID`, `LivroTitulo`, `LivroAutor`, `LivroDescricao`, `LivroImagem`) VALUES
(1, 'O Prato Azul-Pombinho', 'Cora Coralina', '...', 'livro_1_cora.jpeg'),
(2, 'Poemas dos Becos de Goiás', 'Cora Coralina', '...', 'livro_2_cora.jpeg'),
(3, 'De medos e assombrações', 'Cora Coralina', '...', 'livro_3_cora.jpeg'),
(4, 'Quarto de Despejo', 'Carolina Maria de Jesus', '...', 'livro_1_carolina.jpeg'),
(5, 'Diário de Bitita', 'Carolina Maria de Jesus', '...', 'livro_2_carolina.jpeg'),
(6, 'Casa de Alvenaria', 'Carolina Maria de Jesus', '...', 'livro_3_carolina'),
(7, 'As palavras e o tempo', 'Clarice Lispector', '...', 'livro_1_clarice.jpeg'),
(8, 'Água Viva', 'Clarice Lispector', '...', 'livro_2_clarice.jpeg'),
(9, 'Laços de Família ', 'Clarice Lispector', '...', 'livro_3_clarice.jpeg'),
(10, 'Broquéis', 'Cruz e Sousa', '...', 'livro_1_cruz.jpeg'),
(11, 'Evocações', 'Cruz e Sousa', '...', 'livro_2_cruz.jpeg'),
(12, 'Últimos Sonetos', 'Cruz e Sousa', '...', 'livro_3_cruz.jpeg'),
(13, 'Capitães de Areia ', 'Jorge Amado', '...', 'livro_1_jorge.jpeg'),
(14, 'Gabriela, Cravo e Canela', 'Jorge Amado', '...', 'livro_2_jorge.jpeg'),
(15, 'Mar Morto', 'Jorge Amado ', '...', 'livro_3_jorge.jpeg'),
(16, 'Clarissa', 'Erico Verissimo', '...', 'livro_1_erico.jpeg'),
(17, 'Caminhos Cruzados', 'Erico Verissimo', '...', 'livro_2_erico.jpeg'),
(18, 'Incidente em Antares', 'Erico Verissimo', '...', 'livro_3_erico.jpeg'),
(19, 'Dom Casmurro', 'Machado de Assis', '...', 'livro_1_machado.jpeg'),
(20, 'Helena', 'Machado de Assis', '...', 'livro_2_machado.jpeg'),
(21, 'Memórias Póstumas de Brás Cubas', 'Machado de Assis', '...', 'livro_3_machado.jpeg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `usuariosID` int(11) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `senha` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`usuariosID`, `usuario`, `senha`) VALUES
(1, 'Caetano', 'caetano123'),
(2, 'igor', 'igor123'),
(3, 'Arthur', 'arthur123'),
(4, 'Marina', 'marina123'),
(5, 'Pedro', 'pedro123');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `autores`
--
ALTER TABLE `autores`
  ADD PRIMARY KEY (`AutorID`);

--
-- Índices para tabela `livros`
--
ALTER TABLE `livros`
  ADD PRIMARY KEY (`LivroID`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuariosID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `autores`
--
ALTER TABLE `autores`
  MODIFY `AutorID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `livros`
--
ALTER TABLE `livros`
  MODIFY `LivroID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usuariosID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
