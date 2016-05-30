--
-- MySQL 5.6.26
-- Fri, 06 Nov 2015 15:21:54 +0000
--

CREATE TABLE `login` (
   `id` int(20) not null auto_increment,
   `usuario` varchar(20),
   `senha` varchar(10),
   PRIMARY KEY (`id`),
   UNIQUE KEY (`usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=5;

INSERT INTO `login` (`id`, `usuario`, `senha`) VALUES 
('1', 'bruno diniz', 'quero entr'),
('2', 'joao silva ', 'entrei'),
('3', 'bruno arcoverde', 'let me in '),
('4', 'aaa', '123');