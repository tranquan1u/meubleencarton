-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 05 Mars 2015 à 20:28
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `hackaton`
--

-- --------------------------------------------------------

--
-- Structure de la table `access`
--

CREATE TABLE IF NOT EXISTS `access` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `access` varchar(16) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `access`
--

INSERT INTO `access` (`id`, `access`) VALUES
(1, 'user'),
(2, 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `description` text NOT NULL,
  `price` float NOT NULL,
  `media_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `media_id` (`media_id`),
  KEY `color_id` (`color_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id`, `name`, `description`, `price`, `media_id`, `color_id`) VALUES
(1, 'canard_gonflable', 'canard gonflable idéal pour les personnes solitaire.', 20, 1, 2),
(2, 'fauteuil', 'bon fauteuil testé sur les personnes obèses...', 100, 2, 3),
(3, 'fauteuil_gonflable', 'fauteuil gonflable, des cow-boys se sont assis dessus', 100, 3, 5),
(4, 'meuble_palette', 'meuble palette spécialement conçu pour supporter les poids lourds', 100, 4, 3),
(5, 'sofa gonflable', 'sofa gonflable, jetable, idéal pour les plans d''un soir', 150, 5, 3),
(6, 'tortue_brun', 'tortue brune, bouge encore plus lentement qu''une vrai tortue.', 25, 6, 3),
(7, 'tortue_rouge', 'tortue rouge, comme la brune mais plus cher pour la peinture.', 50, 7, 1),
(8, 'vache_blanche', 'vache blanche, qui vous dira qu''il y a toujours plus gros que vous.', 200, 8, 4);

-- --------------------------------------------------------

--
-- Structure de la table `colors`
--

CREATE TABLE IF NOT EXISTS `colors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `color` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `colors`
--

INSERT INTO `colors` (`id`, `color`) VALUES
(1, 'rouge'),
(2, 'jaune'),
(3, 'brun'),
(4, 'blanc'),
(5, 'violet');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `text` text NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `highlights`
--

CREATE TABLE IF NOT EXISTS `highlights` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `description` text NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `highlights`
--

INSERT INTO `highlights` (`id`, `name`, `description`, `created`, `updated`) VALUES
(1, 'TOP VENTE', 'une de nos meilleurs vente!', '2015-03-25 00:00:00', '2015-03-28 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `isin`
--

CREATE TABLE IF NOT EXISTS `isin` (
  `article_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  PRIMARY KEY (`article_id`,`room_id`),
  KEY `room_id` (`room_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `is_highlighteds`
--

CREATE TABLE IF NOT EXISTS `is_highlighteds` (
  `article_id` int(11) NOT NULL,
  `highlight_id` int(11) NOT NULL,
  PRIMARY KEY (`article_id`,`highlight_id`),
  KEY `highlight_id` (`highlight_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `is_highlighteds`
--

INSERT INTO `is_highlighteds` (`article_id`, `highlight_id`) VALUES
(1, 1),
(2, 1),
(3, 1);

-- --------------------------------------------------------

--
-- Structure de la table `madeof`
--

CREATE TABLE IF NOT EXISTS `madeof` (
  `article_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  PRIMARY KEY (`article_id`),
  KEY `type_id` (`type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `media`
--

CREATE TABLE IF NOT EXISTS `media` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `path` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `media`
--

INSERT INTO `media` (`id`, `name`, `path`) VALUES
(1, 'canard_gonflable', 'canard_gonflable.jpg'),
(2, 'fauteuil', 'fauteuil.jpg'),
(3, 'fauteuil_gonflable', 'fauteuil_gonflable.jpg'),
(4, 'meuble_palette', 'meuble_palette.jpg'),
(5, 'sofa_gonflable', 'sofa_gonflable.jpg'),
(6, 'tortue_brun', 'tortue_brun.jpg'),
(7, 'tortue_rouge', 'tortu_rouge.jpg'),
(8, 'vache_blanche', 'vache_blanche.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `note`
--

CREATE TABLE IF NOT EXISTS `note` (
  `user_id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `mark` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`article_id`),
  KEY `article_id` (`article_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ordered`
--

CREATE TABLE IF NOT EXISTS `ordered` (
  `article_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `qte` int(11) NOT NULL,
  PRIMARY KEY (`article_id`,`order_id`),
  KEY `order_id` (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `orderedby`
--

CREATE TABLE IF NOT EXISTS `orderedby` (
  `user_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`order_id`),
  KEY `order_id` (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `rooms`
--

CREATE TABLE IF NOT EXISTS `rooms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `types`
--

CREATE TABLE IF NOT EXISTS `types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `firstName` varchar(256) NOT NULL,
  `lastName` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `access` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `access` (`access`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `firstName`, `lastName`, `email`, `access`) VALUES
(2, 'root', '385868bc03106226a5cacd906e8b1fde384000d0', '', '', '', 1);

-- --------------------------------------------------------

--
-- Structure de la table `vote`
--

CREATE TABLE IF NOT EXISTS `vote` (
  `user_id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `vote` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`article_id`),
  KEY `article_id` (`article_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `votes`
--

CREATE TABLE IF NOT EXISTS `votes` (
  `user_id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `vote` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`article_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_2` FOREIGN KEY (`color_id`) REFERENCES `colors` (`id`),
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`media_id`) REFERENCES `media` (`id`);

--
-- Contraintes pour la table `isin`
--
ALTER TABLE `isin`
  ADD CONSTRAINT `isIn_ibfk_2` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`),
  ADD CONSTRAINT `isIn_ibfk_1` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`);

--
-- Contraintes pour la table `is_highlighteds`
--
ALTER TABLE `is_highlighteds`
  ADD CONSTRAINT `is_highlighteds_ibfk_2` FOREIGN KEY (`highlight_id`) REFERENCES `highlights` (`id`),
  ADD CONSTRAINT `is_highlighteds_ibfk_1` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`);

--
-- Contraintes pour la table `madeof`
--
ALTER TABLE `madeof`
  ADD CONSTRAINT `madeOf_ibfk_2` FOREIGN KEY (`type_id`) REFERENCES `types` (`id`),
  ADD CONSTRAINT `madeOf_ibfk_1` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`);

--
-- Contraintes pour la table `note`
--
ALTER TABLE `note`
  ADD CONSTRAINT `note_ibfk_2` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`),
  ADD CONSTRAINT `note_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `ordered`
--
ALTER TABLE `ordered`
  ADD CONSTRAINT `ordered_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `ordered_ibfk_1` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`);

--
-- Contraintes pour la table `orderedby`
--
ALTER TABLE `orderedby`
  ADD CONSTRAINT `orderedBy_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `orderedBy_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`access`) REFERENCES `access` (`id`);

--
-- Contraintes pour la table `vote`
--
ALTER TABLE `vote`
  ADD CONSTRAINT `vote_ibfk_2` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`),
  ADD CONSTRAINT `vote_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
