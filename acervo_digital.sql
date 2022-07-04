-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04-Jul-2022 às 13:19
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `acervo digital`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `autores`
--

CREATE TABLE `autores` (
  `AutorID` int(11) NOT NULL,
  `AutorNome` varchar(150) NOT NULL,
  `AutorDescricao` longtext NOT NULL,
  `AutorImagem` varchar(150) NOT NULL,
  `AutorFrase` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `autores`
--

INSERT INTO `autores` (`AutorID`, `AutorNome`, `AutorDescricao`, `AutorImagem`, `AutorFrase`) VALUES
(1, 'Cora Coralina', 'Cora Coralina, pseudônimo de Anna Lins dos Guimarães Peixoto Bretas, foi uma poetisa e contista brasileira. Considerada uma das mais importantes escritoras brasileiras, ela teve seu primeiro livro publicado em junho de 1965, quando já tinha quase 76 anos de idade, apesar de escrever seus versos desde a adolescência.', 'cora.jpeg', '“Todos estamos matriculados na escola da vida, onde o mestre é o tempo.” '),
(2, 'Carolina Maria de Jesus', 'Carolina Maria de Jesus foi uma escritora, compositora e poetisa brasileira, mais conhecida por seu livro Quarto de Despejo: Diário de uma Favelada, publicado em 1960. Carolina de Jesus foi uma das primeiras escritoras negras do Brasil e é considerada uma das mais importantes escritoras do país.', 'carolina.jpeg', '\"Eu sou preta, a fome é amarela e dói muito\"'),
(3, 'Clarice Lispector', 'Clarice Lispector, nascida Chaya Pinkhasivna Lispector, foi uma escritora e jornalista brasileira nascida na Ucrânia. Autora de romances, contos, e ensaios, é considerada uma das escritoras brasileiras mais importantes do século XX.', 'clarice.jpeg', '\"Até cortar os próprios defeitos pode ser perigoso. Nunca se sabe qual é o defeito que sustenta nosso edifício inteiro.\"'),
(4, 'Cruz e Sousa', 'João da Cruz e Sousa foi um poeta brasileiro. Com a alcunha de Dante Negro ou Cisne Negro, foi um dos principais representantes do simbolismo no Brasil. Segundo Antonio Candido, Cruz e Sousa foi o \"único escritor eminente de pura raça negra na literatura brasileira, onde são numerosos os mestiços\".', 'cruz.jpeg', '\"Não Basta Existir!\nCada alma tem seu intimo recato uma estrela perdida,\ne cada coração em n\'uma estrela uma vida.\"'),
(5, 'Jorge Amado', 'Jorge Leal Amado de Faria ou apenas Jorge Amado foi um dos mais famosos e traduzidos escritores brasileiros de todos os tempos. Jorge Amado é o autor mais adaptado do cinema, do teatro e da televisão.', 'jorge.jpeg', '\"Mas eu o tentarei, como ele próprio aconselhava, pois o importante é tentar, mesmo o impossível.\"'),
(6, 'Erico Verissimo', 'Érico Veríssimo foi um escritor brasileiro. \"Olhai os Lírio do Campo\", é sua obra-prima. Foi um dos melhores romancistas brasileiros. Fez parte do Segundo Tempo Modernista. Recebeu o \"Prêmio Machado de Assis\" pelo conjunto da obra e o \"Prêmio Graça Aranha\" com \"Caminhos Cruzados\".', 'erico.jpeg', '\"Felicidade é a certeza de que a nossa vida não está se passando inutilmente.\"'),
(7, 'Machado de Assis', 'Joaquim Maria Machado de Assis foi um escritor brasileiro, considerado por muitos críticos, estudiosos, escritores e leitores o maior nome da literatura brasileira.', 'machado.jpeg', '...');

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
(1, 'O Prato Azul-Pombinho', 'Cora Coralina', 'Versos... não... Poesia... não... Um modo diferente de contar velhas histórias. Assim, Cora Coralina, pseudônimo de Ana Lins dos Guimarães Peixoto Brêtas, escreveu sobre sua produção literária. Aos 75 anos, publicou seu primeiro livro Poemas dos Becos de Goiás e Estórias Mais. Nele foi editado o poema \"O Prato Azul-Pombinho\", escrito com rara sensibilidade. Nessa nova edição, as ilustrações de Ângela Lago traduzem o clima do contar e recontar histórias. Nos versos, mescla-se a lenda da princesa Lili – criada e contada pela bisavó da autora, a partir dos desenhos do fundo do prato -, e as lembranças de sua infância em Goiás Velho. Era um prato sozinho,/ último remanescente, sobrevivente, sobra mesmo, de uma coleção,/ de um aparelho antigo/ de 92 peças. Isto contava, com emoção, minha bisavó. Um dia o prato apareceu quebrado. Cora é considerada culpada. A punição? Levar no pescoço, amarrado em um cordão, um caco do prato quebrado.', 'livro_1_cora.jpeg'),
(2, 'Poemas dos Becos de Goiás', 'Cora Coralina', 'Livro de estreia de Cora Coralina, publicado quando a autora tinha 75 anos, \"Poemas dos becos de Goiás e estórias mais\", teve imensa receptividade popular. Suas poesias versam sobre o cotidiano e inquietações humanas. Com simplicidade de expressão, amor pelo semelhante e comunicação humana, a autora se impôs como uma personalidade forte, sabendo dizer as coisas como só ela.', 'livro_2_cora.jpeg'),
(3, 'De medos e assombrações', 'Cora Coralina', 'Quem não gosta de sentir aquele friozinho correndo a espinha quando se ouve uma boa história de assombração? Em De medo e assombrações, Cora Coralina nos faz voltar no tempo para a época em que as almas do outro mundo faziam procissões ou retornavam para dizer onde estava o pote de ouro.', 'livro_3_cora.jpeg'),
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
