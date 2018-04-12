DROP DATABASE vota;
CREATE DATABASE IF NOT EXISTS vota;

use vota;

DROP TABLE IF EXISTS `usuari`;
CREATE TABLE IF NOT EXISTS `usuari` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(25) CHARACTER SET latin1 NOT NULL,
  `password` varchar(250) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

ALTER TABLE usuari ADD role LONGTEXT AFTER password;


DROP TABLE IF EXISTS `enquesta`;
CREATE TABLE IF NOT EXISTS `enquesta` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `pregunta` varchar(250) CHARACTER SET latin1 UNIQUE NOT NULL,
  `data_inici` date NOT NULL,
  `data_final` date NOT NULL,
  `destacada` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;


DROP TABLE IF EXISTS `resposta`;
CREATE TABLE IF NOT EXISTS `resposta` (
  `id_usuari` int(10) NOT NULL,
  `id_enquesta` int(10) NOT NULL,
  `valor` tinyint(1) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_usuari`,`id_enquesta`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;