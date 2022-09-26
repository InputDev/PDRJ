-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21-Set-2022 às 16:31
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
-- Banco de dados: `pdrj`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `desaparecidos`
--

CREATE TABLE `desaparecidos` (
  `Id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cordapele` varchar(30) NOT NULL,
  `desaparecimento` varchar(100) NOT NULL,
  `vestimenta` varchar(50) NOT NULL,
  `foto` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `desaparecidos`
--

INSERT INTO `desaparecidos` (`Id`, `nome`, `cordapele`, `desaparecimento`, `vestimenta`, `foto`) VALUES
(1, 'MURLIO HILÁRIO SANTOS', 'MORENO ESCURO', 'RICARDO DE ALBUQUERQUE/RJ', 'BERMUDA JEANS E CASACO VERMELHO', 'fotos/semfoto.pngMurilo.jpg'),
(2, 'ERICK DA SILVA LIMA', 'BRANCO', 'RIO COMPRIDO/RJ', 'BERMUDA JEANS BRANCA E CAMISA', 'fotos/semfoto.pngErik.jpeg'),
(4, 'ANDRÉ LUIZ PEREIRA', 'MORENO ESCURO', 'CAMPINHO/RJ', 'CALÇA TACTEL COM CASACO PRETO', 'fotos/semfoto.pngandre.jpg'),
(5, 'CRISTIANE TELLES GOMES', 'BRANCA', 'RECREIO DOS BANDEIRANTES/RJ', 'CALÇA JEANS CLARA E BLUSA PRETA', 'fotos/semfoto.pngCristiane.jpg'),
(6, 'JOÃO VICTOR OLIVEIRA', 'MORENO CLARO', 'MADUREIRA/RJ', 'BERMUDA TACTEL LISTRADA E CAMISETA BRANCA', 'fotos/semfoto.pngsla.png'),
(7, 'GABRIEL GONÇALVES DA SILVA', 'BRANCO', 'PADRE MIGUEL/RJ', 'BERMUDA JEANS E CAMISA DE ANIME', 'fotos/semfoto.pngGb.jpg'),
(8, 'GUSTAVO LIMA SILVIO', 'BRANCO DE PELE ESCURA', 'NOVA IGUAÇU/RJ', 'CAMISETA DE BASQUETE E BERMUDA JEANS', 'fotos/semfoto.pngSilvio.png'),
(10, 'POLÁRIS ALMEIDA SILVA', 'NEGRA', 'NILÓPOLIS', 'LEGGIN PRETA E CASACO CINZA', 'fotos/semfoto.pngpol.jpg'),
(11, 'MARCUS SIQUEIRA CAMPOS', 'NEGRO', 'VOLTA REDONDA/RJ', 'SHORT TACTEL E CAMISETA AZUL', 'fotos/semfoto.pngMarcus.jpg'),
(12, 'KARINA MAGALHÃES SOUZA', 'BRANCA', 'ACÁRI/RJ', 'KIMONO AZUL E FAIXA BRANCA', 'fotos/semfoto.pngKarina.jpg'),
(13, 'VANESSA RIBEIRO CORREIA', 'MORENA CLARA', 'GARDENIA AZUL/RJ', 'VESTIDO FLORIDO E TÊNIS BRANCO', 'fotos/semfoto.pngvaenss.PNG'),
(14, 'YAGO RAZUI DACUEBA', 'ALBINO', 'COMPLEXO DO ALEMÃO/RJ', 'CAMISA DA GUCCI E CAÇA DA VERSACE', 'fotos/semfoto.pngrazui.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `login` varchar(20) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `nivel` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`login`, `nome`, `senha`, `nivel`) VALUES
('erick', 'erick', '1234567', 'adm');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `desaparecidos`
--
ALTER TABLE `desaparecidos`
  ADD PRIMARY KEY (`Id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`login`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `desaparecidos`
--
ALTER TABLE `desaparecidos`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
