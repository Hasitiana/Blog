-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 20, 2021 at 09:54 AM
-- Server version: 5.7.31
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `auteur_id` int(11) NOT NULL,
  `texte` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_23A0E6660BB6FE6` (`auteur_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `titre`, `auteur_id`, `texte`) VALUES
(1, 'L’Amérique au bord de l’abîme', 2, 'Quand Donald Trump s’est tenu devant ses partisans et les a encouragés à marcher sur le Capitole américain, le 6 janvier, il faisait ce qu’il a toujours fait. Il n’a jamais pris la démocratie électorale au sérieux ni accepté la légitimité de sa version américaine.\r\n\r\nMême lors de sa victore en 2016, il martelait que l’élection était frauduleuse — que des millions de bulletins de votes frauduleux avaient été attribuées à son adversaire. En 2020, apprenant qu’il traînait Joseph Biden dans les urnes, il a passé des mois à prédire que l’élection présidentielle serait truquée et prévenir qu’il n’accepterait pas les résultats s’ils ne lui étaient pas favorables. Le jour du vote, il a déclaré à tort avoir gagné puis n’a cessé de durcir sa rhétorique : avec le temps, sa victoire s’est muée en victoire écrasante et les diverses conspirations à son encontre sont devenues de plus en plus alambiquées et invraisemblables.'),
(2, 'La haute cuisine américaine, encore fermée aux femmes Noires', 1, 'Il y a huit ans, Auzerais Bellamy a cru à la chance de sa vie : elle avait décroché un stage à la French Laundry, le restaurant de Thomas Keller mondialement connu de la Napa Valley, en Californie. Elle n’était pas rémunérée pour les deux jours qu’elle allait passer sous la supervision de l’équipe de pâtissiers, mais elle y voyait un lieu d’apprentissage idéal où, si elle était retenue, elle pourrait se former auprès de certains des meilleurs cuisiniers du secteur et affiner ses compétences.'),
(3, 'Moi les hommes, je les déteste’ met le doigt là où ça fait mal', 4, 'PARIS — Si un homme ne s’en était pas mêlé, “Moi les hommes, je les déteste”, le premier livre de Pauline Harmange, serait peut-être passé inaperçu.\r\n\r\nÀ l’origine, la maison d’édition associative Monstrograph n’avait tiré qu’à 400 exemplaires cet essai féministe qui défend l’idée que le rejet des hommes est un mécanisme de défense légitime contre la misogynie systémique. Mais le jour de sa sortie, en août dernier, un chargé de mission au ministère de l’Égalité femmes-hommes, Ralph Zurmély, adressa un mail à Monstrograph depuis son adresse gouvernementale.'),
(4, 'En Afrique, il est souvent difficile de compter les morts', 2, 'LAGOS, Nigeria — Christopher Johnson était connu pour deux choses. Ses démonstrations enthousiastes de danse dans les rues, qui faisaient beaucoup rire les passants. Et sa manie de lancer des insultes aux inconnus, qui lui attirait constamment des ennuis.\r\n\r\nAlors, quand M. Johnson est mort fin septembre, vraisemblablement d’une septicémie suite à une blessure à la jambe, d’après des amis, tout le monde était au courant à Oluti , un quartier animé de la plus grande ville du Nigeria, où il vivait.\r\n\r\nTout le monde — sauf l’officier d’état civil chargé d’enregistrer les décès.'),
(5, 'Le Jeu de la dame’ encourage les femmes à se mettre aux échecs', 5, 'La comédienne Beth Behrs a une nouvelle obsession — les échecs —  et c’est la faute de la série “Le Jeu de la dame”, sur Netflix.  Elle lui a même attiré des ennuis sur le plateau de la série CBS “The Neighborhood” dans laquelle elle joue le rôle de Gemma Johnson.\r\n“Ils m’ont crié dessus hier au boulot parce que je cachais mon téléphone sous mon scénario”, raconte-t-elle. “Au lieu de faire mon métier d’actrice, je jouais à Chess.com.”'),
(6, 'Un an de scandales et de réflexion pour l’édition française', 3, 'PARIS —D’habitude, on retrouve plutôt les maisons d’édition françaises dans les élégantes rubriques ‘Livres’ de la presse, ou évoquées avec révérence dans les émissions télévisées littéraires. Mais voilà que depuis douze mois elles sont sur la sellette, scrutées par des sites d’investigation révélateurs de scandales et cités dans les registres de policie.\r\n\r\nÀ Paris, le siège de la maison qui a publié Proust et Céline a subi une descente de la police à la recherche de documents incriminant un écrivain pédophile, Gabriel Matzneff. Un éditeur influent s’est révélé partie prenante d’une manoeuvre qui a permis à ce même écrivain d’obtenir un prix littéraire prestigieux remis par un jury comprenant le prix Nobel de littérature de 2008, une “immortelle” de l’Académie française et plusieurs auteurs français à succès.'),
(7, 'Pourquoi la grande mobilisation des supporters de Trump n’a pas (encore) eu lieu', 3, 'Voilà ce à quoi a ressemblé le dernier week-end de la présidence de Donald Trump, note le New York Times : “Dans tout le pays, les Capitoles des différents États étaient barricadés et surveillés par des véhicules blindés, tandis que la capitale fédérale, Washington, n’était plus qu’une immense zone sécurisée”.\r\n\r\nAu final, “seule une poignée de manifestants se sont rassemblés, pour la plupart des militants d’extrême droite et quelques rares contre-manifestants de gauche, mais rien de comparable avec la meute de supporters de Trump qui a pris d’assaut le Congrès le 6 janvier dernier”, poursuit le quotidien.'),
(8, 'La fin du mythe de l’innocence américaine', 5, 'Les États-Unis ont connu un grand nombre d’épisodes de violence politique beaucoup plus sanglants et destructeurs que ce qui s’est passé au Capitole à l’incitation de Donald Trump le 6 janvier.\r\n\r\nOr ce sinistre passé, sur lequel ont travaillé tant d’historiens, est manifestement oublié si l’on en juge par les commentaires au lendemain de l’invasion du Congrès par des émeutiers. Les spécialistes se sont succédé pour répéter que ce carnage était une aberration, qu’il ne représentait “pas ce que nous sommes” en tant que peuple.');

-- --------------------------------------------------------

--
-- Table structure for table `auteur`
--

DROP TABLE IF EXISTS `auteur`;
CREATE TABLE IF NOT EXISTS `auteur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `auteur`
--

INSERT INTO `auteur` (`id`, `nom`) VALUES
(1, 'Paul'),
(2, 'Rakoto'),
(3, 'Dupond'),
(4, 'Elisa'),
(5, 'Bakoly');

-- --------------------------------------------------------

--
-- Table structure for table `doctrine_migration_versions`
--

DROP TABLE IF EXISTS `doctrine_migration_versions`;
CREATE TABLE IF NOT EXISTS `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20210119130551', '2021-01-19 13:06:10', 42),
('DoctrineMigrations\\Version20210119130651', '2021-01-19 13:07:06', 42),
('DoctrineMigrations\\Version20210119130900', '2021-01-19 13:09:18', 115),
('DoctrineMigrations\\Version20210119133423', '2021-01-19 13:34:36', 62);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `FK_23A0E6660BB6FE6` FOREIGN KEY (`auteur_id`) REFERENCES `auteur` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
