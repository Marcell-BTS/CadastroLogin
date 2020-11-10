
CREATE DATABASE IF NOT EXISTS `bts` /*!40100 DEFAULT CHARACTER SET latin1 COLLATE latin1_general_ci */;
USE `bts`;


CREATE TABLE IF NOT EXISTS `usuario` (
  `NOME` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `SENHA` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`NOME`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;


