use univille;
DROP TABLE IF EXISTS `aluno`;
CREATE TABLE `aluno` (
  `matricula` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `cpf` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`matricula`)
);


GRANT ALL PRIVILEGES ON univille.* TO 'bob'@'%' WITH GRANT OPTION; 
FLUSH PRIVILEGES;

