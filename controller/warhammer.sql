DROP DATABASE IF EXISTS `warhammer`;
CREATE DATABASE IF NOT EXISTS `warhammer` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `warhammer`;


DROP TABLE IF EXISTS `chat`;
CREATE TABLE IF NOT EXISTS `chat` (
  `id_chat` int(11) NOT NULL AUTO_INCREMENT,
  `time` time DEFAULT NULL,
  `msg` text COLLATE utf8_unicode_ci,
  `id_salon` int(11) NOT NULL,
  PRIMARY KEY (`id_chat`),
  KEY `FK_chat_id_salon` (`id_salon`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;



DROP TABLE IF EXISTS `game`;
CREATE TABLE IF NOT EXISTS `game` (
  `id_game` int(11) NOT NULL AUTO_INCREMENT,
  `id_p1` int(11) DEFAULT NULL,
  `faction_p1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_p2` int(11) DEFAULT NULL,
  `faction_p2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_p3` int(11) DEFAULT NULL,
  `faction_p3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_p4` int(11) DEFAULT NULL,
  `faction_p4` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `val_flotte` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `winner` int(11) DEFAULT NULL,
  `id_type_game` int(11) NOT NULL,
  PRIMARY KEY (`id_game`),
  KEY `FK_game_id_type_game` (`id_type_game`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;
DROP TABLE IF EXISTS `game_type`;
CREATE TABLE IF NOT EXISTS `game_type` (
  `id_type_game` int(11) NOT NULL AUTO_INCREMENT,
  `label_game` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_type_game`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3;
INSERT INTO `game_type` (`id_type_game`, `label_game`) VALUES
(1, '(MME) Match a Mort par Equipe'),
(2, '(ME) Melee Generale');
DROP TABLE IF EXISTS `histo`;
CREATE TABLE IF NOT EXISTS `histo` (
  `id_histo` int(11) NOT NULL AUTO_INCREMENT,
  `score` int(11) DEFAULT NULL,
  `victory` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `defeat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ratio` int(11) DEFAULT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_histo`),
  KEY `FK_histo_id_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;
DROP TABLE IF EXISTS `salon`;
CREATE TABLE IF NOT EXISTS `salon` (
  `id_salon` int(11) NOT NULL AUTO_INCREMENT,
  `label_salon` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_game` int(11) NOT NULL,
  PRIMARY KEY (`id_salon`),
  KEY `FK_salon_id_game` (`id_game`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;
DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `user_login` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_pass` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_user`)
 ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;
ALTER TABLE `chat`
  ADD CONSTRAINT `FK_chat_id_salon` FOREIGN KEY (`id_salon`) REFERENCES `salon` (`id_salon`);
ALTER TABLE `game`
  ADD CONSTRAINT `FK_game_id_type_game` FOREIGN KEY (`id_type_game`) REFERENCES `game_type` (`id_type_game`);
ALTER TABLE `histo`
  ADD CONSTRAINT `FK_histo_id_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
ALTER TABLE `salon`
  ADD CONSTRAINT `FK_salon_id_game` FOREIGN KEY (`id_game`) REFERENCES `game` (`id_game`);