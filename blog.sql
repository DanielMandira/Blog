-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29/06/2023 às 00:57
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `blog`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `blog`
--

CREATE TABLE `blog` (
  `blog_codigo` int(11) NOT NULL,
  `blog_blogimgs_codigo` int(11) NOT NULL DEFAULT 0,
  `blog_bloginfo_codigo` int(11) NOT NULL DEFAULT 0,
  `blog_usuarios_codigo` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `blog`
--

INSERT INTO `blog` (`blog_codigo`, `blog_blogimgs_codigo`, `blog_bloginfo_codigo`, `blog_usuarios_codigo`) VALUES
(8, 5, 6, 1),
(9, 6, 7, 1),
(12, 25, 10, 1),
(13, 26, 11, 1),
(14, 27, 12, 1),
(17, 28, 15, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `blogimgs`
--

CREATE TABLE `blogimgs` (
  `blogimgs_codigo` int(11) NOT NULL,
  `blogimgs_nome` varchar(250) NOT NULL DEFAULT '0',
  `nome_cripto` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `blogimgs`
--

INSERT INTO `blogimgs` (`blogimgs_codigo`, `blogimgs_nome`, `nome_cripto`) VALUES
(5, 'rua.jpg', '664b7954e70d2a8496af8d9a53dc27c2a0a78af890240f9e3d15577bbe65c950.jpg'),
(6, 'MicrosoftTeams-image (6).png', '7aabe576748f04b429faaef2e92aadd0.png'),
(7, 'WhatsApp_Image_2022-09-05_at_14.55.56-removebg-preview.png', '21499b562bed03ca53fbdafbc0243986.png'),
(23, 'MicrosoftTeams-image__6_-removebg-preview.png', '11641bfcde90e51c2ae02a5cb6966818.png'),
(24, 'WhatsApp_Image_2022-09-05_at_14.55.56-removebg-preview.png', 'f85070abd87dd16af005e36d62f43de5.png'),
(25, 'pausa.png', 'b483d96820526f8dcdfad8057a75032f.png'),
(26, 'botao-play.png', 'b4c8adf2f8efd60767947864acc0e91f.png'),
(27, 'whatsapp.png', '106a51ca7ed9ba803abe48d8b62ab5e4.png'),
(28, 'entrega-rapida.png', 'fe6588a2ab1a61fe47cc64dd16425a73.png');

-- --------------------------------------------------------

--
-- Estrutura para tabela `bloginfo`
--

CREATE TABLE `bloginfo` (
  `bloginfo_codigo` int(11) NOT NULL,
  `bloginfo_titulo` varchar(250) NOT NULL DEFAULT '0',
  `bloginfo_corpo` longtext NOT NULL,
  `bloginfo_data` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `bloginfo`
--

INSERT INTO `bloginfo` (`bloginfo_codigo`, `bloginfo_titulo`, `bloginfo_corpo`, `bloginfo_data`) VALUES
(1, 'Título exemplo 1', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias eius laboriosam, hic obcaecati voluptate atque. Quis eos dolorum optio dicta earum placeat maiores asperiores, quibusdam, autem consequuntur aperiam! Ratione odio, cum quis quae esse maxime ipsum quibusdam libero nihil id nostrum quaerat repellat facilis repudiandae inventore quas minima asperiores nulla?', '2023-04-11 04:21:01'),
(2, 'Título exemplo 2', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias eius laboriosam, hic obcaecati voluptate atque. Quis eos dolorum optio dicta earum placeat maiores asperiores, quibusdam, autem consequuntur aperiam! Ratione odio, cum quis quae esse maxime ipsum quibusdam libero nihil id nostrum quaerat repellat facilis repudiandae inventore quas minima asperiores nulla?', '2023-04-11 04:21:03'),
(3, 'Título exemplo 3', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias eius laboriosam, hic obcaecati voluptate atque. Quis eos dolorum optio dicta earum placeat maiores asperiores, quibusdam, autem consequuntur aperiam! Ratione odio, cum quis quae esse maxime ipsum quibusdam libero nihil id nostrum quaerat repellat facilis repudiandae inventore quas minima asperiores nulla?', '2023-04-11 04:21:04'),
(4, 'Título exemplo 4', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias eius laboriosam, hic obcaecati voluptate atque. Quis eos dolorum optio dicta earum placeat maiores asperiores, quibusdam, autem consequuntur aperiam! Ratione odio, cum quis quae esse maxime ipsum quibusdam libero nihil id nostrum quaerat repellat facilis repudiandae inventore quas minima asperiores nulla?', '2023-04-18 23:17:47'),
(5, 'Titulo Exemplo 5', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias eius laboriosam, hic obcaecati voluptate atque. Quis eos dolorum optio dicta earum placeat maiores asperiores, quibusdam, autem consequuntur aperiam! Ratione odio, cum quis quae esse maxime ipsum quibusdam libero nihil id nostrum quaerat repellat facilis repudiandae inventore quas minima asperiores nulla?', '2023-04-18 23:18:12'),
(6, 'Teste', '        asdasdasd\r\n\r\n\r\nsdfdsfdsf\r\n\r\n\r\n\r\ndfsfsdfsdf', '2023-06-11 17:56:23'),
(7, 'ESCOLA EXEMPLO', '        sdfsdfsdf\r\nsd\r\nfsdf\r\n\r\nsd\r\nf\r\nsd\r\nf\r\nsdf\r\nsd\r\nf\r\n\r\n\r\n\r\n\r\ns\r\nfd\r\nsd\r\nf\r\nsd\r\nf\r\nsdf\r\n', '2023-06-11 17:56:45'),
(8, '', '        ', '2023-06-11 18:16:42'),
(9, '', '        ', '2023-06-11 18:18:06'),
(10, 'Pausa', '                            \r\n                TESTE', '2023-06-11 19:24:29'),
(11, 'Power Hard teste teste', '                                                asdasdasasd\r\na\r\nsd\r\nasd\r\naasdasd\r\nsd\r\n\r\nas\r\nd\r\n\r\nasd\r\n\r\nasd\r\n\r\nas\r\nd\r\n                \r\n                ', '2023-06-11 19:26:57'),
(12, 'Teste', '                            Whats\r\n                ', '2023-06-11 19:31:03'),
(13, 'Teste', '        asdasd', '2023-06-11 19:32:33'),
(14, 'asdasd', '        asdasd', '2023-06-11 19:32:47'),
(15, 'asdasd', '        asdasd', '2023-06-11 19:33:46');

-- --------------------------------------------------------

--
-- Estrutura stand-in para view `blognoticias`
-- (Veja abaixo para a visão atual)
--
CREATE TABLE `blognoticias` (
`blog_codigo` int(11)
,`nome_cripto` varchar(250)
,`bloginfo_titulo` varchar(250)
,`bloginfo_corpo` longtext
,`usuarios_nome` varchar(250)
);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `usuarios_codigo` int(11) NOT NULL,
  `usuarios_nome` varchar(250) NOT NULL,
  `usuarios_email` varchar(250) NOT NULL,
  `usuarios_senha` varchar(250) NOT NULL,
  `usuarios_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`usuarios_codigo`, `usuarios_nome`, `usuarios_email`, `usuarios_senha`, `usuarios_status`) VALUES
(1, 'João', 'joao@email.com', '202cb962ac59075b964b07152d234b70', 0),
(2, 'Maria', 'maria@email.com', 'caf1a3dfb505ffed0d024130f58c5cfa', 0),
(8, 'Daniel', 'daniel.mandira@hotmail.com', 'd9729feb74992cc3482b350163a1a010', 1);

-- --------------------------------------------------------

--
-- Estrutura para view `blognoticias`
--
DROP TABLE IF EXISTS `blognoticias`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `blognoticias`  AS SELECT `blog_codigo` AS `blog_codigo`, `blogimgs`.`nome_cripto` AS `nome_cripto`, `bloginfo`.`bloginfo_titulo` AS `bloginfo_titulo`, `bloginfo`.`bloginfo_corpo` AS `bloginfo_corpo`, `usuarios`.`usuarios_nome` AS `usuarios_nome` FROM (((`blog` join `blogimgs` on(`blogimgs`.`blogimgs_codigo` = `blog_blogimgs_codigo`)) join `bloginfo` on(`bloginfo`.`bloginfo_codigo` = `blog_bloginfo_codigo`)) join `usuarios` on(`usuarios`.`usuarios_codigo` = `blog_usuarios_codigo`)) ORDER BY `blog_codigo` DESC ;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_codigo`),
  ADD KEY `FK_blog_blogimgs` (`blog_blogimgs_codigo`),
  ADD KEY `FK_blog_bloginfo` (`blog_bloginfo_codigo`),
  ADD KEY `FK_blog_usuarios` (`blog_usuarios_codigo`);

--
-- Índices de tabela `blogimgs`
--
ALTER TABLE `blogimgs`
  ADD PRIMARY KEY (`blogimgs_codigo`);

--
-- Índices de tabela `bloginfo`
--
ALTER TABLE `bloginfo`
  ADD PRIMARY KEY (`bloginfo_codigo`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuarios_codigo`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `blogimgs`
--
ALTER TABLE `blogimgs`
  MODIFY `blogimgs_codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de tabela `bloginfo`
--
ALTER TABLE `bloginfo`
  MODIFY `bloginfo_codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usuarios_codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `FK_blog_blogimgs` FOREIGN KEY (`blog_blogimgs_codigo`) REFERENCES `blogimgs` (`blogimgs_codigo`),
  ADD CONSTRAINT `FK_blog_bloginfo` FOREIGN KEY (`blog_bloginfo_codigo`) REFERENCES `bloginfo` (`bloginfo_codigo`),
  ADD CONSTRAINT `FK_blog_usuarios` FOREIGN KEY (`blog_usuarios_codigo`) REFERENCES `usuarios` (`usuarios_codigo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
