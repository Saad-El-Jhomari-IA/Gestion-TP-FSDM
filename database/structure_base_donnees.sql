-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  Dim 30 avr. 2023 à 00:45
-- Version du serveur :  5.7.17
-- Version de PHP :  7.1.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `tp`
--

-- --------------------------------------------------------

--
-- Structure de la table `enseignant`
--

CREATE TABLE `enseignant` (
  `cneens` varchar(20) NOT NULL,
  `nomen` varchar(20) NOT NULL,
  `passworden` int(20) NOT NULL,
  `web_dynamique` tinyint(1) NOT NULL,
  `reseaux` tinyint(1) NOT NULL,
  `projet_tutore` tinyint(1) NOT NULL,
  `projet_tutore2` tinyint(1) NOT NULL,
  `base_de_donnee` tinyint(1) NOT NULL,
  `ro` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `enseignant`
--

INSERT INTO `enseignant` (`cneens`, `nomen`, `passworden`, `web_dynamique`, `reseaux`, `projet_tutore`, `projet_tutore2`, `base_de_donnee`, `ro`) VALUES
('N2345678098', 'Hamdi Hamid', 12345678, 1, 1, 0, 1, 0, 0),
('N53678', 'hamza janati', 12345677, 0, 0, 1, 0, 0, 1),
('N5489595', 'saida fathi', 123456789, 0, 0, 1, 1, 0, 0),
('N76846870400', 'ayoub moujid', 123456, 1, 1, 0, 0, 1, 0),
('N084874', 'salwa akasbi', 234567, 1, 0, 0, 0, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `nometu` varchar(50) DEFAULT NULL,
  `passwordetu` int(11) DEFAULT NULL,
  `web_dynamique` tinyint(1) NOT NULL DEFAULT '1',
  `reseaux` tinyint(1) NOT NULL DEFAULT '1',
  `projet_tutore` tinyint(1) NOT NULL DEFAULT '1',
  `projet_tutore2` tinyint(1) NOT NULL DEFAULT '1',
  `base_de_donnee` tinyint(1) NOT NULL DEFAULT '1',
  `ro` tinyint(1) NOT NULL DEFAULT '1',
  `cneetud` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`nometu`, `passwordetu`, `web_dynamique`, `reseaux`, `projet_tutore`, `projet_tutore2`, `base_de_donnee`, `ro`, `cneetud`) VALUES
('saad lhawat', 1234576789, 1, 1, 1, 1, 1, 1, 'N123089765456'),
('salah lwahid', 34567867, 1, 1, 1, 1, 1, 1, 'N1235467456'),
('ablhamiiiiiiid', 24567, 0, 1, 0, 1, 0, 1, 'N1254673456'),
('SOUAD LHIMR', 1234567, 0, 1, 0, 1, 0, 1, 'N123445678456'),
('FAYCAL MAJDOB', 1324567, 1, 1, 0, 1, 1, 1, 'N1209753456'),
('IMRAN MATBOA', 98765, 1, 0, 0, 1, 0, 0, 'N12324536456'),
('TARIK FARISS', 34567, 0, 1, 0, 0, 0, 0, 'N1234908756'),
('IZLAN SIHAM', 97656453, 0, 1, 0, 1, 0, 1, 'N12897653456'),
('SAFA KERAZ', 3576898, 1, 1, 1, 1, 1, 1, 'N123434547656'),
('ACHRAF ABIDI', 8734678, 0, 0, 0, 1, 1, 1, 'N2435123456'),
('MONSSIF KAWATCHO', 8784668, 1, 1, 0, 1, 1, 0, 'N5465123456'),
('MOHAMMED HANINI', 4562378, 1, 1, 1, 1, 1, 1, 'N8796857123456'),
('JAMAL HANDISS', 45678976, 1, 1, 1, 1, 0, 1, 'N435647123456'),
('SALIH AYOUB', 8948737, 0, 0, 0, 1, 0, 9, 'N0879123456'),
('ZAKI IMANE', 896668934, 1, 1, 1, 1, 0, 0, 'N154657823456'),
('ZAYD TAZI', 6836280, 1, 1, 0, 1, 1, 1, 'N123446578656'),
('MOSTAFA BRIKI', 3567879, 1, 0, 1, 1, 1, 1, 'N167S7823456'),
('HARASS HAFID', 354678, 0, 1, 1, 1, 1, 1, 'N1234079Q56'),
('BALDI KAYTA', 56783768, 1, 1, 1, 1, 1, 1, 'N123547658F3456'),
('FOFANA ABDLAOUI', 6764930, 1, 1, 1, 1, 1, 1, 'N1234989786D56'),
('SIHAM LBANNA', 685894, 1, 0, 1, 1, 1, 1, 'N12345089DD6'),
('SOUKAINA LKISS', 864093, 1, 0, 1, 1, 1, 0, 'N576879G123456'),
('SAVANISTE ABDO', 352978, 1, 1, 1, 0, 1, 0, 'N1234567689TR'),
('HIGAZI ABOUBAKAR', 6578687, 0, 1, 0, 1, 0, 1, 'N1234567TR6'),
('IKAMBI HAYA', 345678, 1, 1, 1, 1, 1, 1, 'N123YUYT456'),
('BELKABLA OUANASS ', 346789, 1, 1, 1, 1, 1, 1, 'N12RYU3456'),
('ZAFAN FARIIS', 78668, 1, 1, 1, 1, 1, 1, 'N123447658F56'),
('BAMAAMAR LAWLA', 45123, 1, 1, 1, 1, 0, 1, 'N12376S456'),
('HAITAM BAADNI', 45709, 1, 0, 1, 1, 1, 1, 'N123457654YHTR6'),
('KARKACH OSSAMA', 567890, 1, 0, 1, 1, 1, 1, 'N1234RE5456'),
('MOHAMMED OUNAJEM', 9876554, 1, 1, 1, 1, 1, 1, 'N1234543FD56'),
('CHAKIR ADNAN', 98543, 1, 1, 1, 1, 1, 1, 'N1233456TR3456'),
('EL JANATI HAMZA', 987634, 1, 1, 1, 1, 1, 1, 'N12345654UY6'),
('MARMOUK NABIL', 934566, 1, 1, 1, 1, 1, 1, 'N87FD123456'),
('SAMIR ZAKROUMI', 7654789, 1, 1, 0, 1, 1, 1, 'N123458765DS6'),
('JORDI ALBA', 34567844, 0, 1, 1, 1, 1, 1, 'N12349876YTRE56'),
('YOUUSEF FOFANA', 543789, 1, 1, 1, 1, 0, 1, 'N13REZS23456'),
('SAID HAMOUNI', 4389076, 1, 0, 1, 1, 1, 0, 'N1237654TRX456'),
('HARKAS JAMAL', 789543, 1, 0, 1, 1, 1, 1, 'N12654RES3456'),
('RACHID BRIGEL', 9874567, 1, 1, 1, 1, 0, 1, 'N1765YTR23456'),
('MOUSA TIGANA', 438902, 1, 0, 0, 1, 0, 1, 'N1238765IUY456'),
('GUIZA OLALA', 43789022, 1, 1, 1, 1, 1, 1, 'N12334567UYTR456'),
('ahmad hamodat', 1234576789, 1, 1, 1, 1, 1, 1, 'N1230897654FD56'),
('rami alwad', 34567867, 1, 1, 1, 1, 1, 1, 'N12354FS67456'),
('ablhamiiiitfygu iiid', 24567, 0, 1, 0, 1, 0, 1, 'N125467F3456'),
('safwan hanna', 1234567, 0, 1, 0, 1, 0, 1, 'N123445F678456'),
('FAYCAL MalkiB', 1324567, 1, 1, 0, 1, 1, 1, 'N12097FDSQ53456'),
('IMRAN MaloA', 98765, 1, 0, 0, 1, 0, 0, 'N12324536FD456'),
('anoir FARISS', 34567, 0, 1, 0, 0, 0, 0, 'N1234908G756'),
('Ikram SIHAM', 97656453, 0, 1, 0, 1, 0, 1, 'N1289765G3456'),
('sabada safi', 3576898, 1, 1, 1, 1, 1, 1, 'N1234345G47656'),
('ramon diaz', 8734678, 0, 0, 0, 1, 1, 1, 'N2435GF123456'),
('MONS KAmATCHO', 8784668, 1, 1, 0, 1, 1, 0, 'N54651GF23456'),
('MOHAMMED herera', 4562378, 1, 1, 1, 1, 1, 1, 'N879GGF6857123456'),
('JAMAL malISS', 45678976, 1, 1, 1, 1, 0, 1, 'N43UY5647123456'),
('SALIH malakB', 8948737, 0, 0, 0, 1, 0, 9, 'N087JH9123456'),
('ZAKI robane', 896668934, 1, 1, 1, 1, 0, 0, 'N154GH657823456'),
('ZAYD Tzada', 6836280, 1, 1, 0, 1, 1, 1, 'N1234465R78656'),
('MOSTAFA BkawKI', 3567879, 1, 0, 1, 1, 1, 1, 'N167S7HGF823456'),
('HARASS Hanan', 354678, 0, 1, 1, 1, 1, 1, 'N123407KJ9Q56'),
('cvara KAYTA', 56783768, 1, 1, 1, 1, 1, 1, 'N12354765JH8F3456'),
('FOFANA konate', 6764930, 1, 1, 1, 1, 1, 1, 'N123498R9786D56'),
('SIHAM LnanNNA', 685894, 1, 0, 1, 1, 1, 1, 'N12345GF089DD6'),
('SOUKAINA labass', 864093, 1, 0, 1, 1, 1, 0, 'N576879GFG123456'),
('STE ABDO', 352978, 1, 1, 1, 0, 1, 0, 'N123456768549TR'),
('HIGAZI ABKAR', 6578687, 0, 1, 0, 1, 0, 1, 'N12345634TR6');

-- --------------------------------------------------------

--
-- Structure de la table `etudiant_tp`
--

CREATE TABLE `etudiant_tp` (
  `cneetud` varchar(100) NOT NULL,
  `nometudtp` varchar(100) NOT NULL,
  `module` varchar(100) NOT NULL,
  `groupe` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `etudiant_tp`
--

INSERT INTO `etudiant_tp` (`cneetud`, `nometudtp`, `module`, `groupe`) VALUES
('N12345567', 'SOUAD LHIMR', 'web_dynamique', 1),
('N12654RES3456', 'HARKAS JAMAL', 'web_dynamique', 1),
('N2435123456', 'ACHRAF ABIDI', 'web_dynamique', 1),
('N1233456TR3456', 'CHAKIR ADNAN', 'web_dynamique', 1),
('N12RYU3456', 'BELKABLA OUANASS ', 'web_dynamique', 1),
('N1254673456', 'ablhamiiiiiiid', 'web_dynamique', 1),
('N12376S456', 'BAMAAMAR LAWLA', 'web_dynamique', 1),
('N123457654YHTR6', 'HAITAM BAADNI', 'web_dynamique', 2),
('N123447658F56', 'ZAFAN FARIIS', 'web_dynamique', 2),
('N0879123456', 'SALIH AYOUB', 'web_dynamique', 2),
('N123446578656', 'ZAYD TAZI', 'web_dynamique', 2),
('N12334567UYTR456', 'GUIZA OLALA', 'web_dynamique', 2),
('N123547658F3456', 'BALDI KAYTA', 'web_dynamique', 2),
('N154657823456', 'ZAKI IMANE', 'web_dynamique', 2),
('N123089765456', 'saad lhawat', 'web_dynamique', 3),
('N1234543FD56', 'MOHAMMED OUNAJEM', 'web_dynamique', 3),
('N1235467456', 'salah lwahid', 'web_dynamique', 3),
('N1209753456', 'FAYCAL MAJDOB', 'web_dynamique', 3),
('N12324536456', 'IMRAN MATBOA', 'web_dynamique', 3),
('N123434547656', 'SAFA KERAZ', 'web_dynamique', 3),
('N5465123456', 'MONSSIF KAWATCHO', 'web_dynamique', 3),
('N8796857123456', 'MOHAMMED HANINI', 'web_dynamique', 4),
('N435647123456', 'JAMAL HANDISS', 'web_dynamique', 4),
('N167S7823456', 'MOSTAFA BRIKI', 'web_dynamique', 4),
('N1234989786D56', 'FOFANA ABDLAOUI', 'web_dynamique', 4),
('N12345089DD6', 'SIHAM LBANNA', 'web_dynamique', 4),
('N576879G123456', 'SOUKAINA LKISS', 'web_dynamique', 4),
('N1234567689TR', 'SAVANISTE ABDO', 'web_dynamique', 4),
('N123YUYT456', 'IKAMBI HAYA', 'web_dynamique', 5),
('N1234RE5456', 'KARKACH OSSAMA', 'web_dynamique', 5),
('N1230897654FD56', 'ahmad hamodat', 'web_dynamique', 5),
('N12354FS67456', 'rami alwad', 'web_dynamique', 5),
('N12097FDSQ53456', 'FAYCAL MalkiB', 'web_dynamique', 5),
('N12324536FD456', 'IMRAN MaloA', 'web_dynamique', 5),
('N1234345G47656', 'sabada safi', 'web_dynamique', 5),
('N54651GF23456', 'MONS KAmATCHO', 'web_dynamique', 6),
('N879GGF6857123456', 'MOHAMMED herera', 'web_dynamique', 6),
('N43UY5647123456', 'JAMAL malISS', 'web_dynamique', 6),
('N154GH657823456', 'ZAKI robane', 'web_dynamique', 6),
('N1234465R78656', 'ZAYD Tzada', 'web_dynamique', 6),
('N167S7HGF823456', 'MOSTAFA BkawKI', 'web_dynamique', 6),
('N12354765JH8F3456', 'cvara KAYTA', 'web_dynamique', 6),
('N123498R9786D56', 'FOFANA konate', 'web_dynamique', 6),
('N12345GF089DD6', 'SIHAM LnanNNA', 'web_dynamique', 6),
('N576879GFG123456', 'SOUKAINA labass', 'web_dynamique', 6),
('N123456768549TR', 'STE ABDO', 'web_dynamique', 6),
('N87FD123456', 'MARMOUK NABIL', 'reseaux', 1),
('N1234079Q56', 'HARASS HAFID', 'reseaux', 1),
('N12349876YTRE56', 'JORDI ALBA', 'reseaux', 2),
('N12897653456', 'IZLAN SIHAM', 'reseaux', 2),
('N123445678456', 'SOUAD LHIMR', 'reseaux', 3),
('N1234908756', 'TARIK FARISS', 'reseaux', 3),
('N1234567TR6', 'HIGAZI ABOUBAKAR', 'reseaux', 4),
('N125467F3456', 'ablhamiiiitfygu iiid', 'reseaux', 5),
('N123445F678456', 'safwan hanna', 'reseaux', 5),
('N1234908G756', 'anoir FARISS', 'reseaux', 5),
('N1289765G3456', 'Ikram SIHAM', 'reseaux', 5),
('N123407KJ9Q56', 'HARASS Hanan', 'reseaux', 6),
('N12345634TR6', 'HIGAZI ABKAR', 'reseaux', 6),
('N2435GF123456', 'ramon diaz', 'projet_tutore2', 5),
('N087JH9123456', 'SALIH malakB', 'projet_tutore2', 6);

-- --------------------------------------------------------

--
-- Structure de la table `fichier`
--

CREATE TABLE `fichier` (
  `id` int(100) NOT NULL,
  `nom_fichier` varchar(500) NOT NULL,
  `module` varchar(100) NOT NULL,
  `groupe` varchar(100) NOT NULL,
  `tp` int(100) DEFAULT NULL,
  `paragraphe` varchar(50000) NOT NULL,
  `enseignant` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `fichier`
--

INSERT INTO `fichier` (`id`, `nom_fichier`, `module`, `groupe`, `tp`, `paragraphe`, `enseignant`) VALUES
(32, 'img11.jpeg', 'reseaux', '1', 1, 'imge11', 'ayoub moujid'),
(33, 'img10 (2).jpeg', 'reseaux', '1', 2, 'image10', 'ayoub moujid'),
(34, 'img10 (1).jpeg', 'reseaux', '1', 3, 'jjdjjd', 'ayoub moujid'),
(35, 'img10 (2).jpeg', 'reseaux', '1', 4, 'jklelle', 'ayoub moujid'),
(36, 'img6.jpeg', 'reseaux', '1', 2, 'jejkke', 'ayoub moujid'),
(37, 'img10 (1).jpeg', 'reseaux', '1', 7, 'jkekke', 'ayoub moujid'),
(38, 'img10 (1).jpeg', 'reseaux', '1', 7, 'jkekke', ''),
(39, 'img10 (1).jpeg', 'reseaux', '1', 7, 'jkekke', ''),
(41, 'img10 (1).jpeg', 'reseaux', '2', 1, 'jhj', 'Hamdi Hamid');

-- --------------------------------------------------------

--
-- Structure de la table `fichier_etu`
--

CREATE TABLE `fichier_etu` (
  `nom_fichier` varchar(100) NOT NULL,
  `module` varchar(100) NOT NULL,
  `groupe` int(100) NOT NULL,
  `nometud` varchar(100) NOT NULL,
  `nomprof` varchar(100) NOT NULL,
  `tp` int(100) NOT NULL,
  `note` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `fichier_etu`
--

INSERT INTO `fichier_etu` (`nom_fichier`, `module`, `groupe`, `nometud`, `nomprof`, `tp`, `note`) VALUES
('CR_TP4_PROGAMMATION_RESEAU.pdf', 'web_dynamique', 1, 'SOUAD LHIMR', 'Hamdi Hamid', 1, 0);

-- --------------------------------------------------------

--
-- Structure de la table `fichier_etudiant`
--

CREATE TABLE `fichier_etudiant` (
  `id` int(100) NOT NULL,
  `nom_fichier` varchar(100) NOT NULL,
  `module` varchar(100) NOT NULL,
  `groupe` int(100) NOT NULL,
  `nometud` varchar(100) NOT NULL,
  `nomprof` varchar(100) NOT NULL,
  `tp` int(100) NOT NULL,
  `note` float DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `fichier_etudiant`
--

INSERT INTO `fichier_etudiant` (`id`, `nom_fichier`, `module`, `groupe`, `nometud`, `nomprof`, `tp`, `note`) VALUES
(7, 'CR_TP4_PROGAMMATION_RESEAU (1) (1).pdf', 'reseaux', 1, 'CHAKIR ADNAN', 'ayoub moujid', 1, 19),
(2, 'colle22 (1).pdf', 'reseaux', 1, 'MARMOUK NABIL', 'ayoub moujid', 1, 14),
(1, 'CR_TP4_PROGAMMATION_RESEAU (1).pdf', 'reseaux', 1, 'ACHRAF ABIDI', 'ayoub moujid', 1, 19),
(4, 'CR_TP4_PROGAMMATION_RESEAU (1).pdf', 'reseaux', 1, 'CHAKIR ADNAN', 'ayoub moujid', 7, 0),
(5, 'colle22.pdf', 'reseaux', 1, 'CHAKIR ADNAN', 'ayoub moujid', 4, 0),
(6, 'colle22.pdf', 'reseaux', 1, 'CHAKIR ADNAN', 'ayoub moujid', 3, 0),
(8, 'CR_TP4_PROGAMMATION_RESEAU (1) (1).pdf', 'reseaux', 1, 'CHAKIR ADNAN', 'ayoub moujid', 2, 0);

-- --------------------------------------------------------

--
-- Structure de la table `formulaire_inscri`
--

CREATE TABLE `formulaire_inscri` (
  `cneinscri` varchar(100) NOT NULL,
  `nomcomplet` varchar(100) NOT NULL,
  `passwordform` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `formulaire_inscri`
--

INSERT INTO `formulaire_inscri` (`cneinscri`, `nomcomplet`, `passwordform`) VALUES
('N1234567', 'salah hamdon', '12345678'),
('N1235434567', 'AHMAD DGFH', '123446785678'),
('N12897634567', 'salah hARBO', '128976345678'),
('N12324536456', 'IMRAN MATBOA', '98765'),
('N12345678', 'saad', '1234'),
('N12345FG', 'AHMAD HAMODAN', '123456789'),
('N2435123456', 'ACHRAF ABIDI', '8734678'),
('N2435123456', 'ACHRAF ABIDI', '8734678'),
('N2435123456', 'ACHRAF ABIDI', '8734678'),
('N2435123456', 'ACHRAF ABIDI', '8734678'),
('N2435123456', 'ACHRAF ABIDI', '8734678'),
('N2435123456', 'ACHRAF ABIDI', '8734678'),
('N2435123456', 'ACHRAF ABIDI', '8734678'),
('N2435123456', 'ACHRAF ABIDI', '8734678'),
('N112345', 'SALAH SAAD', '1234AZE'),
('N112345', 'SALAH SAAD', '1123455778'),
('N12654RES3456', 'HARKAS JAMAL', '789543'),
('N87FD123456', 'MARMOUK NABIL', '934566'),
('N1233456TR3456', 'CHAKIR ADNAN', '98543'),
('N1233456TR3456', 'CHAKIR ADNAN', '98543'),
('N1233456TR3456', 'CHAKIR ADNAN', '98543'),
('N1234079Q56', 'HARASS HAFID', '354678'),
('N1234079Q56', 'HARASS HAFID', '354678'),
('N12RYU3456', 'BELKABLA OUANASS', '346789'),
('N1254673456', 'ablhamiiiiiiid', '24567'),
('N1254673456', 'ablhamiiiiiiid', '24567'),
('	 N1234908756', 'TARIK FARISS', '34567'),
(' N1234908756', 'TARIK FARISS', '34567'),
('N12376S456', 'BAMAAMAR LAWLA', '45123'),
('N123457654YHTR6', '	 HAITAM BAADNI', '45709'),
('N123457654YHTR6', 'HAITAM BAADNI', '45709'),
('N123447658F56', 'ZAFAN FARIIS', '78668'),
('N1233456TR3456', 'CHAKIR ADNAN', '98543'),
('N1233456TR3456', 'ACHRAF ABIDI', '8734678'),
('N0879123456', 'SALIH AYOUB', '8948737'),
(' N123446578656', 'ZAYD TAZI', '6836280'),
('N123446578656', 'ZAYD TAZI', '6836280'),
('N123446578656', 'ZAYD TAZI', '6836280'),
('N12349876YTRE56', 'JORDI ALBA', '34567844'),
('N12334567UYTR45', 'GUIZA OLALA', '43789022'),
('N12334567UYTR456', 'GUIZA OLALA', '43789022'),
('N123547658F3456', 'BALDI KAYTA', '56783768'),
('N12897653456', 'IZLAN SIHAM', '97656453'),
('N154657823456', 'ZAKI IMANE', '896668934'),
('N123089765456', 'saad lhawat', '1234576789'),
('N1234543FD56', 'MOHAMMED OUNAJEM', '9876554');

-- --------------------------------------------------------

--
-- Structure de la table `groupesen`
--

CREATE TABLE `groupesen` (
  `nomen` varchar(100) NOT NULL,
  `cneens` varchar(100) NOT NULL,
  `module` varchar(100) NOT NULL,
  `gr1` int(20) DEFAULT NULL,
  `gr2` int(20) DEFAULT NULL,
  `gr3` int(20) DEFAULT NULL,
  `gr4` int(20) DEFAULT NULL,
  `gr5` int(20) DEFAULT NULL,
  `gr6` int(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `groupesen`
--

INSERT INTO `groupesen` (`nomen`, `cneens`, `module`, `gr1`, `gr2`, `gr3`, `gr4`, `gr5`, `gr6`) VALUES
('Hamdi Hamid', 'N2345678098', 'web_dynamique', 1, 2, 3, NULL, NULL, NULL),
('	\r\nayoub moujid', '	\r\nN76846870400', 'web_dynamique', NULL, NULL, NULL, 4, 5, 0),
('ayoub moujid', 'N76846870400', 'reseaux', 1, NULL, 3, NULL, NULL, 6),
('Hamdi Hamid', 'N2345678098', 'reseaux', NULL, 2, NULL, 4, 5, NULL),
('hamza janati', 'N53678', 'ro', 1, 2, 3, NULL, NULL, NULL),
('hamza janati', 'N53678', 'projet_tutore', 1, 2, 3, NULL, NULL, NULL),
('saida fathi', 'N5489595', 'projet_tutore', NULL, NULL, NULL, 4, 5, 6),
('saida fathi', 'N5489595', 'projet_tutore2', 1, 2, 3, NULL, NULL, NULL),
('ayoub moujid', 'N76846870400', 'base_de_donnee', 1, 2, 3, NULL, NULL, NULL),
('salwa akasbi', 'N084874', 'base_de_donnee', NULL, NULL, NULL, 4, 5, 6),
('salwa akasbi', 'N084874', 'ro', NULL, NULL, NULL, 4, 5, 6),
('Hamdi Hamid', '12345678', 'projet_tutore2', NULL, NULL, NULL, 4, 5, 6),
('salwa akasbi', 'N084874', 'web_dynamique', NULL, NULL, NULL, NULL, NULL, 6);

-- --------------------------------------------------------

--
-- Structure de la table `liste_etudiant_tp`
--

CREATE TABLE `liste_etudiant_tp` (
  `nometudtp` varchar(20) NOT NULL,
  `web_dynamique` tinyint(1) NOT NULL,
  `reseaux` tinyint(1) NOT NULL,
  `projet_tutore` tinyint(1) NOT NULL,
  `projet_tutore2` tinyint(1) NOT NULL,
  `base_de_donnee` tinyint(1) NOT NULL,
  `ro` tinyint(1) NOT NULL,
  `cneetudtp` varchar(100) NOT NULL,
  `passwordtp` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `liste_etudiant_tp`
--

INSERT INTO `liste_etudiant_tp` (`nometudtp`, `web_dynamique`, `reseaux`, `projet_tutore`, `projet_tutore2`, `base_de_donnee`, `ro`, `cneetudtp`, `passwordtp`) VALUES
('SOUAD LHIMR', 1, 1, 1, 1, 0, 1, 'N12345567', 23456),
('HARKAS JAMAL', 1, 0, 1, 1, 1, 1, 'N12654RES3456', 98765),
('ACHRAF ABIDI', 1, 1, 0, 1, 1, 1, 'N2435123456', 12567),
('MARMOUK NABIL', 0, 1, 1, 1, 1, 1, 'N87FD123456', 1642),
('CHAKIR ADNAN', 1, 1, 1, 1, 0, 1, 'N1233456TR3456', 909980612),
('HARASS HAFID', 0, 1, 1, 1, 1, 1, 'N1234079Q56', 343946901),
('BELKABLA OUANASS ', 1, 1, 1, 0, 1, 1, 'N12RYU3456', 706670276),
('ablhamiiiiiiid', 1, 1, 1, 1, 0, 1, 'N1254673456', 169473686),
('BAMAAMAR LAWLA', 1, 1, 1, 1, 0, 1, 'N12376S456', 497809354),
('HAITAM BAADNI', 1, 0, 1, 1, 1, 1, 'N123457654YHTR6', 691637458),
('ZAFAN FARIIS', 1, 1, 0, 1, 1, 1, 'N123447658F56', 331889752),
('SALIH AYOUB', 1, 1, 1, 1, 1, 0, 'N0879123456', 269807136),
('ZAYD TAZI', 1, 1, 0, 1, 1, 1, 'N123446578656', 942515812),
('JORDI ALBA', 0, 1, 1, 1, 1, 1, 'N12349876YTRE56', 877943735),
('GUIZA OLALA', 1, 1, 1, 1, 1, 1, 'N12334567UYTR456', 274831994),
('BALDI KAYTA', 1, 1, 1, 1, 1, 1, 'N123547658F3456', 159852312),
('IZLAN SIHAM', 0, 1, 0, 1, 0, 1, 'N12897653456', 170505660),
('ZAKI IMANE', 1, 1, 1, 1, 0, 0, 'N154657823456', 674488731),
('saad lhawat', 1, 1, 1, 1, 1, 1, 'N123089765456', 543892279),
('MOHAMMED OUNAJEM', 1, 1, 1, 1, 1, 1, 'N1234543FD56', 627844811),
('salah lwahid', 1, 1, 1, 1, 1, 1, 'N1235467456', 34567867),
('SOUAD LH', 0, 1, 0, 1, 0, 1, 'N123445678456', 1234567),
('FAYCAL MAJDOB', 1, 1, 0, 1, 1, 1, 'N1209753456', 1324567),
('IMRAN MATBOA', 1, 0, 0, 1, 0, 0, 'N12324536456', 98765),
('TARIK FARISS', 0, 1, 0, 0, 0, 0, 'N1234908756', 34567),
('SAFA KERAZ', 1, 1, 1, 1, 1, 1, 'N123434547656', 3576898),
('MONSSIF KAWATCHO', 1, 1, 0, 1, 1, 0, 'N5465123456', 8784668),
('MOHAMMED HANINI', 1, 1, 1, 1, 1, 1, 'N8796857123456', 4562378),
('JAMAL HANDISS', 1, 1, 1, 1, 0, 1, 'N435647123456', 45678976),
('MOSTAFA BRIKI', 1, 0, 1, 1, 1, 1, 'N167S7823456', 3567879),
('FOFANA ABDLAOUI', 1, 1, 1, 1, 1, 1, 'N1234989786D56', 6764930),
('SIHAM LBANNA', 1, 0, 1, 1, 1, 1, 'N12345089DD6', 685894),
('SOUKAINA LKISS', 1, 0, 1, 1, 1, 0, 'N576879G123456', 864093),
('SAVANISTE ABDO', 1, 1, 1, 0, 1, 0, 'N1234567689TR', 352978),
('HIGAZI ABOUBAKAR', 0, 1, 0, 1, 0, 1, 'N1234567TR6', 6578687),
('IKAMBI HAYA', 1, 1, 1, 1, 1, 1, 'N123YUYT456', 345678),
('KARKACH OSSAMA', 1, 0, 1, 1, 1, 1, 'N1234RE5456', 567890),
('ahmad hamodat', 1, 1, 1, 1, 1, 1, 'N1230897654FD56', 1234576789),
('rami alwad', 1, 1, 1, 1, 1, 1, 'N12354FS67456', 34567867),
('ablhamiiiitfygu iiid', 0, 1, 0, 1, 0, 1, 'N125467F3456', 24567),
('safwan hanna', 0, 1, 0, 1, 0, 1, 'N123445F678456', 1234567),
('FAYCAL MalkiB', 1, 1, 0, 1, 1, 1, 'N12097FDSQ53456', 1324567),
('IMRAN MaloA', 1, 0, 0, 1, 0, 0, 'N12324536FD456', 98765),
('anoir FARISS', 0, 1, 0, 0, 0, 0, 'N1234908G756', 34567),
('Ikram SIHAM', 0, 1, 0, 1, 0, 1, 'N1289765G3456', 97656453),
('sabada safi', 1, 1, 1, 1, 1, 1, 'N1234345G47656', 3576898),
('ramon diaz', 0, 0, 0, 1, 1, 1, 'N2435GF123456', 8734678),
('MONS KAmATCHO', 1, 1, 0, 1, 1, 0, 'N54651GF23456', 8784668),
('MOHAMMED herera', 1, 1, 1, 1, 1, 1, 'N879GGF6857123456', 4562378),
('JAMAL malISS', 1, 1, 1, 1, 0, 1, 'N43UY5647123456', 45678976),
('SALIH malakB', 0, 0, 0, 1, 0, 9, 'N087JH9123456', 8948737),
('ZAKI robane', 1, 1, 1, 1, 0, 0, 'N154GH657823456', 896668934),
('ZAYD Tzada', 1, 1, 0, 1, 1, 1, 'N1234465R78656', 6836280),
('MOSTAFA BkawKI', 1, 0, 1, 1, 1, 1, 'N167S7HGF823456', 3567879),
('HARASS Hanan', 0, 1, 1, 1, 1, 1, 'N123407KJ9Q56', 354678),
('cvara KAYTA', 1, 1, 1, 1, 1, 1, 'N12354765JH8F3456', 56783768),
('FOFANA konate', 1, 1, 1, 1, 1, 1, 'N123498R9786D56', 6764930),
('SIHAM LnanNNA', 1, 0, 1, 1, 1, 1, 'N12345GF089DD6', 685894),
('SOUKAINA labass', 1, 0, 1, 1, 1, 0, 'N576879GFG123456', 864093),
('STE ABDO', 1, 1, 1, 0, 1, 0, 'N123456768549TR', 352978),
('HIGAZI ABKAR', 0, 1, 0, 1, 0, 1, 'N12345634TR6', 6578687);

-- --------------------------------------------------------

--
-- Structure de la table `liste_etudiant_tp_base_de_donnee`
--

CREATE TABLE `liste_etudiant_tp_base_de_donnee` (
  `cneetud` varchar(100) NOT NULL,
  `nometudtp` varchar(100) NOT NULL,
  `groupe` int(100) NOT NULL,
  `module` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `liste_etudiant_tp_base_de_donnee`
--

INSERT INTO `liste_etudiant_tp_base_de_donnee` (`cneetud`, `nometudtp`, `groupe`, `module`) VALUES
('N12654RES3456', 'HARKAS JAMAL', 1, 'base_de_donnee'),
('N2435123456', 'ACHRAF ABIDI', 1, 'base_de_donnee'),
('N87FD123456', 'MARMOUK NABIL', 1, 'base_de_donnee'),
('N1234079Q56', 'HARASS HAFID', 1, 'base_de_donnee'),
('N12RYU3456', 'BELKABLA OUANASS ', 1, 'base_de_donnee'),
('N123457654YHTR6', 'HAITAM BAADNI', 1, 'base_de_donnee'),
('N123447658F56', 'ZAFAN FARIIS', 2, 'base_de_donnee'),
('N0879123456', 'SALIH AYOUB', 2, 'base_de_donnee'),
('N123446578656', 'ZAYD TAZI', 2, 'base_de_donnee'),
('N12349876YTRE56', 'JORDI ALBA', 2, 'base_de_donnee'),
('N12334567UYTR456', 'GUIZA OLALA', 2, 'base_de_donnee'),
('N123547658F3456', 'BALDI KAYTA', 2, 'base_de_donnee'),
('N123089765456', 'saad lhawat', 3, 'base_de_donnee'),
('N1234543FD56', 'MOHAMMED OUNAJEM', 3, 'base_de_donnee'),
('N1235467456', 'salah lwahid', 3, 'base_de_donnee'),
('N1209753456', 'FAYCAL MAJDOB', 3, 'base_de_donnee'),
('N123434547656', 'SAFA KERAZ', 3, 'base_de_donnee'),
('N5465123456', 'MONSSIF KAWATCHO', 3, 'base_de_donnee'),
('N8796857123456', 'MOHAMMED HANINI', 4, 'base_de_donnee'),
('N167S7823456', 'MOSTAFA BRIKI', 4, 'base_de_donnee'),
('N1234989786D56', 'FOFANA ABDLAOUI', 4, 'base_de_donnee'),
('N12345089DD6', 'SIHAM LBANNA', 4, 'base_de_donnee'),
('N576879G123456', 'SOUKAINA LKISS', 4, 'base_de_donnee'),
('N1234567689TR', 'SAVANISTE ABDO', 4, 'base_de_donnee'),
('N123YUYT456', 'IKAMBI HAYA', 5, 'base_de_donnee'),
('N1234RE5456', 'KARKACH OSSAMA', 5, 'base_de_donnee'),
('N1230897654FD56', 'ahmad hamodat', 5, 'base_de_donnee'),
('N12354FS67456', 'rami alwad', 5, 'base_de_donnee'),
('N12097FDSQ53456', 'FAYCAL MalkiB', 5, 'base_de_donnee'),
('N1234345G47656', 'sabada safi', 5, 'base_de_donnee'),
('N2435GF123456', 'ramon diaz', 6, 'base_de_donnee'),
('N54651GF23456', 'MONS KAmATCHO', 6, 'base_de_donnee'),
('N879GGF6857123456', 'MOHAMMED herera', 6, 'base_de_donnee'),
('N1234465R78656', 'ZAYD Tzada', 6, 'base_de_donnee'),
('N167S7HGF823456', 'MOSTAFA BkawKI', 6, 'base_de_donnee'),
('N123407KJ9Q56', 'HARASS Hanan', 6, 'base_de_donnee'),
('N12354765JH8F3456', 'cvara KAYTA', 6, 'base_de_donnee'),
('N123498R9786D56', 'FOFANA konate', 6, 'base_de_donnee'),
('N12345GF089DD6', 'SIHAM LnanNNA', 6, 'base_de_donnee'),
('N576879GFG123456', 'SOUKAINA labass', 6, 'base_de_donnee'),
('N123456768549TR', 'STE ABDO', 6, 'base_de_donnee');

-- --------------------------------------------------------

--
-- Structure de la table `liste_etudiant_tp_projet_tutore`
--

CREATE TABLE `liste_etudiant_tp_projet_tutore` (
  `cneetud` varchar(100) NOT NULL,
  `nometudtp` varchar(100) NOT NULL,
  `groupe` int(100) NOT NULL,
  `module` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `liste_etudiant_tp_projet_tutore`
--

INSERT INTO `liste_etudiant_tp_projet_tutore` (`cneetud`, `nometudtp`, `groupe`, `module`) VALUES
('N12345567', 'SOUAD LHIMR', 1, 'projet_tutore'),
('N12654RES3456', 'HARKAS JAMAL', 1, 'projet_tutore'),
('N87FD123456', 'MARMOUK NABIL', 1, 'projet_tutore'),
('N1233456TR3456', 'CHAKIR ADNAN', 1, 'projet_tutore'),
('N1234079Q56', 'HARASS HAFID', 1, 'projet_tutore'),
('N12RYU3456', 'BELKABLA OUANASS ', 1, 'projet_tutore'),
('N1254673456', 'ablhamiiiiiiid', 2, 'projet_tutore'),
('N12376S456', 'BAMAAMAR LAWLA', 2, 'projet_tutore'),
('N123457654YHTR6', 'HAITAM BAADNI', 2, 'projet_tutore'),
('N0879123456', 'SALIH AYOUB', 2, 'projet_tutore'),
('N12349876YTRE56', 'JORDI ALBA', 2, 'projet_tutore'),
('N12334567UYTR456', 'GUIZA OLALA', 2, 'projet_tutore'),
('N123547658F3456', 'BALDI KAYTA', 3, 'projet_tutore'),
('N154657823456', 'ZAKI IMANE', 3, 'projet_tutore'),
('N123089765456', 'saad lhawat', 3, 'projet_tutore'),
('N1234543FD56', 'MOHAMMED OUNAJEM', 3, 'projet_tutore'),
('N1235467456', 'salah lwahid', 3, 'projet_tutore'),
('N123434547656', 'SAFA KERAZ', 3, 'projet_tutore'),
('N8796857123456', 'MOHAMMED HANINI', 4, 'projet_tutore'),
('N435647123456', 'JAMAL HANDISS', 4, 'projet_tutore'),
('N167S7823456', 'MOSTAFA BRIKI', 4, 'projet_tutore'),
('N1234989786D56', 'FOFANA ABDLAOUI', 4, 'projet_tutore'),
('N12345089DD6', 'SIHAM LBANNA', 4, 'projet_tutore'),
('N576879G123456', 'SOUKAINA LKISS', 4, 'projet_tutore'),
('N1234567689TR', 'SAVANISTE ABDO', 5, 'projet_tutore'),
('N123YUYT456', 'IKAMBI HAYA', 5, 'projet_tutore'),
('N1234RE5456', 'KARKACH OSSAMA', 5, 'projet_tutore'),
('N1230897654FD56', 'ahmad hamodat', 5, 'projet_tutore'),
('N12354FS67456', 'rami alwad', 5, 'projet_tutore'),
('N1234345G47656', 'sabada safi', 5, 'projet_tutore'),
('N879GGF6857123456', 'MOHAMMED herera', 6, 'projet_tutore'),
('N43UY5647123456', 'JAMAL malISS', 6, 'projet_tutore'),
('N154GH657823456', 'ZAKI robane', 6, 'projet_tutore'),
('N167S7HGF823456', 'MOSTAFA BkawKI', 6, 'projet_tutore'),
('N123407KJ9Q56', 'HARASS Hanan', 6, 'projet_tutore'),
('N12354765JH8F3456', 'cvara KAYTA', 6, 'projet_tutore'),
('N123498R9786D56', 'FOFANA konate', 6, 'projet_tutore'),
('N12345GF089DD6', 'SIHAM LnanNNA', 6, 'projet_tutore'),
('N576879GFG123456', 'SOUKAINA labass', 6, 'projet_tutore'),
('N123456768549TR', 'STE ABDO', 6, 'projet_tutore');

-- --------------------------------------------------------

--
-- Structure de la table `liste_etudiant_tp_projet_tutore2`
--

CREATE TABLE `liste_etudiant_tp_projet_tutore2` (
  `cneetud` varchar(100) NOT NULL,
  `nometudtp` varchar(100) NOT NULL,
  `groupe` int(100) NOT NULL,
  `module` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `liste_etudiant_tp_projet_tutore2`
--

INSERT INTO `liste_etudiant_tp_projet_tutore2` (`cneetud`, `nometudtp`, `groupe`, `module`) VALUES
('N12345567', 'SOUAD LHIMR', 1, 'projet_tutore2'),
('N12654RES3456', 'HARKAS JAMAL', 1, 'projet_tutore2'),
('N2435123456', 'ACHRAF ABIDI', 1, 'projet_tutore2'),
('N87FD123456', 'MARMOUK NABIL', 1, 'projet_tutore2'),
('N1233456TR3456', 'CHAKIR ADNAN', 1, 'projet_tutore2'),
('N1234079Q56', 'HARASS HAFID', 1, 'projet_tutore2'),
('N1254673456', 'ablhamiiiiiiid', 1, 'projet_tutore2'),
('N12376S456', 'BAMAAMAR LAWLA', 1, 'projet_tutore2'),
('N123457654YHTR6', 'HAITAM BAADNI', 1, 'projet_tutore2'),
('N123447658F56', 'ZAFAN FARIIS', 2, 'projet_tutore2'),
('N0879123456', 'SALIH AYOUB', 2, 'projet_tutore2'),
('N123446578656', 'ZAYD TAZI', 2, 'projet_tutore2'),
('N12349876YTRE56', 'JORDI ALBA', 2, 'projet_tutore2'),
('N12334567UYTR456', 'GUIZA OLALA', 2, 'projet_tutore2'),
('N123547658F3456', 'BALDI KAYTA', 2, 'projet_tutore2'),
('N12897653456', 'IZLAN SIHAM', 2, 'projet_tutore2'),
('N154657823456', 'ZAKI IMANE', 2, 'projet_tutore2'),
('N123089765456', 'saad lhawat', 2, 'projet_tutore2'),
('N1234543FD56', 'MOHAMMED OUNAJEM', 3, 'projet_tutore2'),
('N1235467456', 'salah lwahid', 3, 'projet_tutore2'),
('N123445678456', 'SOUAD LHIMR', 3, 'projet_tutore2'),
('N1209753456', 'FAYCAL MAJDOB', 3, 'projet_tutore2'),
('N12324536456', 'IMRAN MATBOA', 3, 'projet_tutore2'),
('N123434547656', 'SAFA KERAZ', 3, 'projet_tutore2'),
('N5465123456', 'MONSSIF KAWATCHO', 3, 'projet_tutore2'),
('N8796857123456', 'MOHAMMED HANINI', 3, 'projet_tutore2'),
('N435647123456', 'JAMAL HANDISS', 3, 'projet_tutore2'),
('N167S7823456', 'MOSTAFA BRIKI', 4, 'projet_tutore2'),
('N1234989786D56', 'FOFANA ABDLAOUI', 4, 'projet_tutore2'),
('N12345089DD6', 'SIHAM LBANNA', 4, 'projet_tutore2'),
('N576879G123456', 'SOUKAINA LKISS', 4, 'projet_tutore2'),
('N1234567TR6', 'HIGAZI ABOUBAKAR', 4, 'projet_tutore2'),
('N123YUYT456', 'IKAMBI HAYA', 4, 'projet_tutore2'),
('N1234RE5456', 'KARKACH OSSAMA', 4, 'projet_tutore2'),
('N1230897654FD56', 'ahmad hamodat', 4, 'projet_tutore2'),
('N12354FS67456', 'rami alwad', 4, 'projet_tutore2'),
('N125467F3456', 'ablhamiiiitfygu iiid', 5, 'projet_tutore2'),
('N123445F678456', 'safwan hanna', 5, 'projet_tutore2'),
('N12097FDSQ53456', 'FAYCAL MalkiB', 5, 'projet_tutore2'),
('N12324536FD456', 'IMRAN MaloA', 5, 'projet_tutore2'),
('N1289765G3456', 'Ikram SIHAM', 5, 'projet_tutore2'),
('N1234345G47656', 'sabada safi', 5, 'projet_tutore2'),
('N2435GF123456', 'ramon diaz', 5, 'projet_tutore2'),
('N54651GF23456', 'MONS KAmATCHO', 5, 'projet_tutore2'),
('N879GGF6857123456', 'MOHAMMED herera', 5, 'projet_tutore2'),
('N43UY5647123456', 'JAMAL malISS', 6, 'projet_tutore2'),
('N087JH9123456', 'SALIH malakB', 6, 'projet_tutore2'),
('N154GH657823456', 'ZAKI robane', 6, 'projet_tutore2'),
('N1234465R78656', 'ZAYD Tzada', 6, 'projet_tutore2'),
('N167S7HGF823456', 'MOSTAFA BkawKI', 6, 'projet_tutore2'),
('N123407KJ9Q56', 'HARASS Hanan', 6, 'projet_tutore2'),
('N12354765JH8F3456', 'cvara KAYTA', 6, 'projet_tutore2'),
('N123498R9786D56', 'FOFANA konate', 6, 'projet_tutore2'),
('N12345GF089DD6', 'SIHAM LnanNNA', 6, 'projet_tutore2'),
('N576879GFG123456', 'SOUKAINA labass', 6, 'projet_tutore2'),
('N12345634TR6', 'HIGAZI ABKAR', 6, 'projet_tutore2');

-- --------------------------------------------------------

--
-- Structure de la table `liste_etudiant_tp_reseaux`
--

CREATE TABLE `liste_etudiant_tp_reseaux` (
  `cneetud` varchar(100) NOT NULL,
  `nometudtp` varchar(100) NOT NULL,
  `groupe` int(100) NOT NULL,
  `module` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `liste_etudiant_tp_reseaux`
--

INSERT INTO `liste_etudiant_tp_reseaux` (`cneetud`, `nometudtp`, `groupe`, `module`) VALUES
('N12345567', 'SOUAD LHIMR', 1, 'reseaux'),
('N2435123456', 'ACHRAF ABIDI', 1, 'reseaux'),
('N87FD123456', 'MARMOUK NABIL', 1, 'reseaux'),
('N1233456TR3456', 'CHAKIR ADNAN', 1, 'reseaux'),
('N1234079Q56', 'HARASS HAFID', 1, 'reseaux'),
('N12RYU3456', 'BELKABLA OUANASS ', 1, 'reseaux'),
('N1254673456', 'ablhamiiiiiiid', 1, 'reseaux'),
('N12376S456', 'BAMAAMAR LAWLA', 1, 'reseaux'),
('N123447658F56', 'ZAFAN FARIIS', 2, 'reseaux'),
('N0879123456', 'SALIH AYOUB', 2, 'reseaux'),
('N123446578656', 'ZAYD TAZI', 2, 'reseaux'),
('N12349876YTRE56', 'JORDI ALBA', 2, 'reseaux'),
('N12334567UYTR456', 'GUIZA OLALA', 2, 'reseaux'),
('N123547658F3456', 'BALDI KAYTA', 2, 'reseaux'),
('N12897653456', 'IZLAN SIHAM', 2, 'reseaux'),
('N154657823456', 'ZAKI IMANE', 2, 'reseaux'),
('N123089765456', 'saad lhawat', 3, 'reseaux'),
('N1234543FD56', 'MOHAMMED OUNAJEM', 3, 'reseaux'),
('N1235467456', 'salah lwahid', 3, 'reseaux'),
('N123445678456', 'SOUAD LHIMR', 3, 'reseaux'),
('N1209753456', 'FAYCAL MAJDOB', 3, 'reseaux'),
('N1234908756', 'TARIK FARISS', 3, 'reseaux'),
('N123434547656', 'SAFA KERAZ', 3, 'reseaux'),
('N5465123456', 'MONSSIF KAWATCHO', 3, 'reseaux'),
('N8796857123456', 'MOHAMMED HANINI', 4, 'reseaux'),
('N435647123456', 'JAMAL HANDISS', 4, 'reseaux'),
('N1234989786D56', 'FOFANA ABDLAOUI', 4, 'reseaux'),
('N1234567689TR', 'SAVANISTE ABDO', 4, 'reseaux'),
('N1234567TR6', 'HIGAZI ABOUBAKAR', 4, 'reseaux'),
('N123YUYT456', 'IKAMBI HAYA', 4, 'reseaux'),
('N1230897654FD56', 'ahmad hamodat', 4, 'reseaux'),
('N12354FS67456', 'rami alwad', 4, 'reseaux'),
('N125467F3456', 'ablhamiiiitfygu iiid', 5, 'reseaux'),
('N123445F678456', 'safwan hanna', 5, 'reseaux'),
('N12097FDSQ53456', 'FAYCAL MalkiB', 5, 'reseaux'),
('N1234908G756', 'anoir FARISS', 5, 'reseaux'),
('N1289765G3456', 'Ikram SIHAM', 5, 'reseaux'),
('N1234345G47656', 'sabada safi', 5, 'reseaux'),
('N54651GF23456', 'MONS KAmATCHO', 5, 'reseaux'),
('N879GGF6857123456', 'MOHAMMED herera', 5, 'reseaux'),
('N43UY5647123456', 'JAMAL malISS', 6, 'reseaux'),
('N154GH657823456', 'ZAKI robane', 6, 'reseaux'),
('N1234465R78656', 'ZAYD Tzada', 6, 'reseaux'),
('N123407KJ9Q56', 'HARASS Hanan', 6, 'reseaux'),
('N12354765JH8F3456', 'cvara KAYTA', 6, 'reseaux'),
('N123498R9786D56', 'FOFANA konate', 6, 'reseaux'),
('N123456768549TR', 'STE ABDO', 6, 'reseaux'),
('N12345634TR6', 'HIGAZI ABKAR', 6, 'reseaux');

-- --------------------------------------------------------

--
-- Structure de la table `liste_etudiant_tp_ro`
--

CREATE TABLE `liste_etudiant_tp_ro` (
  `cneetud` varchar(100) NOT NULL,
  `nometudtp` varchar(100) NOT NULL,
  `groupe` int(100) NOT NULL,
  `module` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `liste_etudiant_tp_ro`
--

INSERT INTO `liste_etudiant_tp_ro` (`cneetud`, `nometudtp`, `groupe`, `module`) VALUES
('N12345567', 'SOUAD LHIMR', 1, 'ro'),
('N12654RES3456', 'HARKAS JAMAL', 1, 'ro'),
('N2435123456', 'ACHRAF ABIDI', 1, 'ro'),
('N87FD123456', 'MARMOUK NABIL', 1, 'ro'),
('N1233456TR3456', 'CHAKIR ADNAN', 1, 'ro'),
('N1234079Q56', 'HARASS HAFID', 1, 'ro'),
('N12RYU3456', 'BELKABLA OUANASS ', 1, 'ro'),
('N1254673456', 'ablhamiiiiiiid', 2, 'ro'),
('N12376S456', 'BAMAAMAR LAWLA', 2, 'ro'),
('N123457654YHTR6', 'HAITAM BAADNI', 2, 'ro'),
('N123447658F56', 'ZAFAN FARIIS', 2, 'ro'),
('N123446578656', 'ZAYD TAZI', 2, 'ro'),
('N12349876YTRE56', 'JORDI ALBA', 2, 'ro'),
('N12334567UYTR456', 'GUIZA OLALA', 2, 'ro'),
('N123547658F3456', 'BALDI KAYTA', 3, 'ro'),
('N12897653456', 'IZLAN SIHAM', 3, 'ro'),
('N123089765456', 'saad lhawat', 3, 'ro'),
('N1234543FD56', 'MOHAMMED OUNAJEM', 3, 'ro'),
('N1235467456', 'salah lwahid', 3, 'ro'),
('N123445678456', 'SOUAD LH', 3, 'ro'),
('N1209753456', 'FAYCAL MAJDOB', 3, 'ro'),
('N123434547656', 'SAFA KERAZ', 4, 'ro'),
('N8796857123456', 'MOHAMMED HANINI', 4, 'ro'),
('N435647123456', 'JAMAL HANDISS', 4, 'ro'),
('N167S7823456', 'MOSTAFA BRIKI', 4, 'ro'),
('N1234989786D56', 'FOFANA ABDLAOUI', 4, 'ro'),
('N12345089DD6', 'SIHAM LBANNA', 4, 'ro'),
('N1234567TR6', 'HIGAZI ABOUBAKAR', 4, 'ro'),
('N123YUYT456', 'IKAMBI HAYA', 5, 'ro'),
('N1234RE5456', 'KARKACH OSSAMA', 5, 'ro'),
('N1230897654FD56', 'ahmad hamodat', 5, 'ro'),
('N12354FS67456', 'rami alwad', 5, 'ro'),
('N125467F3456', 'ablhamiiiitfygu iiid', 5, 'ro'),
('N123445F678456', 'safwan hanna', 5, 'ro'),
('N12097FDSQ53456', 'FAYCAL MalkiB', 5, 'ro'),
('N1289765G3456', 'Ikram SIHAM', 6, 'ro'),
('N1234345G47656', 'sabada safi', 6, 'ro'),
('N2435GF123456', 'ramon diaz', 6, 'ro'),
('N879GGF6857123456', 'MOHAMMED herera', 6, 'ro'),
('N43UY5647123456', 'JAMAL malISS', 6, 'ro'),
('N1234465R78656', 'ZAYD Tzada', 6, 'ro'),
('N167S7HGF823456', 'MOSTAFA BkawKI', 6, 'ro'),
('N123407KJ9Q56', 'HARASS Hanan', 6, 'ro'),
('N12354765JH8F3456', 'cvara KAYTA', 6, 'ro'),
('N123498R9786D56', 'FOFANA konate', 6, 'ro'),
('N12345GF089DD6', 'SIHAM LnanNNA', 6, 'ro'),
('N12345634TR6', 'HIGAZI ABKAR', 6, 'ro');

-- --------------------------------------------------------

--
-- Structure de la table `liste_etudiant_tp_web_dynamique`
--

CREATE TABLE `liste_etudiant_tp_web_dynamique` (
  `cneetud` varchar(100) NOT NULL,
  `nometudtp` varchar(100) NOT NULL,
  `groupe` int(100) NOT NULL,
  `module` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `liste_etudiant_tp_web_dynamique`
--

INSERT INTO `liste_etudiant_tp_web_dynamique` (`cneetud`, `nometudtp`, `groupe`, `module`) VALUES
('N12345567', 'SOUAD LHIMR', 1, 'web_dynamique'),
('N12654RES3456', 'HARKAS JAMAL', 1, 'web_dynamique'),
('N2435123456', 'ACHRAF ABIDI', 1, 'web_dynamique'),
('N1233456TR3456', 'CHAKIR ADNAN', 1, 'web_dynamique'),
('N12RYU3456', 'BELKABLA OUANASS ', 1, 'web_dynamique'),
('N1254673456', 'ablhamiiiiiiid', 1, 'web_dynamique'),
('N12376S456', 'BAMAAMAR LAWLA', 1, 'web_dynamique'),
('N123457654YHTR6', 'HAITAM BAADNI', 2, 'web_dynamique'),
('N123447658F56', 'ZAFAN FARIIS', 2, 'web_dynamique'),
('N0879123456', 'SALIH AYOUB', 2, 'web_dynamique'),
('N123446578656', 'ZAYD TAZI', 2, 'web_dynamique'),
('N12334567UYTR456', 'GUIZA OLALA', 2, 'web_dynamique'),
('N123547658F3456', 'BALDI KAYTA', 2, 'web_dynamique'),
('N154657823456', 'ZAKI IMANE', 2, 'web_dynamique'),
('N123089765456', 'saad lhawat', 3, 'web_dynamique'),
('N1234543FD56', 'MOHAMMED OUNAJEM', 3, 'web_dynamique'),
('N1235467456', 'salah lwahid', 3, 'web_dynamique'),
('N1209753456', 'FAYCAL MAJDOB', 3, 'web_dynamique'),
('N12324536456', 'IMRAN MATBOA', 3, 'web_dynamique'),
('N123434547656', 'SAFA KERAZ', 3, 'web_dynamique'),
('N5465123456', 'MONSSIF KAWATCHO', 3, 'web_dynamique'),
('N8796857123456', 'MOHAMMED HANINI', 4, 'web_dynamique'),
('N435647123456', 'JAMAL HANDISS', 4, 'web_dynamique'),
('N167S7823456', 'MOSTAFA BRIKI', 4, 'web_dynamique'),
('N1234989786D56', 'FOFANA ABDLAOUI', 4, 'web_dynamique'),
('N12345089DD6', 'SIHAM LBANNA', 4, 'web_dynamique'),
('N576879G123456', 'SOUKAINA LKISS', 4, 'web_dynamique'),
('N1234567689TR', 'SAVANISTE ABDO', 4, 'web_dynamique'),
('N123YUYT456', 'IKAMBI HAYA', 5, 'web_dynamique'),
('N1234RE5456', 'KARKACH OSSAMA', 5, 'web_dynamique'),
('N1230897654FD56', 'ahmad hamodat', 5, 'web_dynamique'),
('N12354FS67456', 'rami alwad', 5, 'web_dynamique'),
('N12097FDSQ53456', 'FAYCAL MalkiB', 5, 'web_dynamique'),
('N12324536FD456', 'IMRAN MaloA', 5, 'web_dynamique'),
('N1234345G47656', 'sabada safi', 5, 'web_dynamique'),
('N54651GF23456', 'MONS KAmATCHO', 6, 'web_dynamique'),
('N879GGF6857123456', 'MOHAMMED herera', 6, 'web_dynamique'),
('N43UY5647123456', 'JAMAL malISS', 6, 'web_dynamique'),
('N154GH657823456', 'ZAKI robane', 6, 'web_dynamique'),
('N1234465R78656', 'ZAYD Tzada', 6, 'web_dynamique'),
('N167S7HGF823456', 'MOSTAFA BkawKI', 6, 'web_dynamique'),
('N12354765JH8F3456', 'cvara KAYTA', 6, 'web_dynamique'),
('N123498R9786D56', 'FOFANA konate', 6, 'web_dynamique'),
('N12345GF089DD6', 'SIHAM LnanNNA', 6, 'web_dynamique'),
('N576879GFG123456', 'SOUKAINA labass', 6, 'web_dynamique'),
('N123456768549TR', 'STE ABDO', 6, 'web_dynamique');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `cneens` varchar(100) NOT NULL,
  `nomen` varchar(100) NOT NULL,
  `module` varchar(100) NOT NULL,
  `creno` varchar(20) NOT NULL,
  `groupe` int(15) NOT NULL,
  `numsalle` int(100) NOT NULL,
  `cr` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`cneens`, `nomen`, `module`, `creno`, `groupe`, `numsalle`, `cr`) VALUES
('N53678', 'hamza janati', 'projet_tutore', 'Lundi 8h:30 à 10h', 1, 115, 'lcr1'),
('N53678', 'hamza janati', 'projet_tutore', 'Lundi 10h à 11h:30h', 2, 115, 'lcr2'),
('N53678', 'hamza janati', 'projet_tutore', 'Lundi 11h:30 à 13h', 3, 115, 'lcr3'),
('N5489595', 'saida fathi', 'projet_tutore', 'Lundi 14h à 15h:30', 4, 115, 'lcr4'),
('N5489595', 'saida fathi', 'projet_tutore', ' Lundi 15h:30h à 17h', 5, 115, 'lcr5'),
('N5489595', 'saida fathi', 'projet_tutore', 'mardi 17h à 18h:30', 6, 115, 'lcr6'),
('N76846870400', 'ayoub moujid', 'reseaux', 'mardi 8h:30 à 10h', 3, 115, 'mcr1'),
('N76846870400', 'ayoub moujid', 'reseaux', 'jeudi 8h:30 à 10h', 6, 114, 'jcr1'),
('N2345678098', 'Hamdi Hamid', 'reseaux', 'samedi 8h:30 à 10h', 2, 115, 'scr1'),
('N2345678098', 'Hamdi Hamid', 'reseaux', 'vendredi 8h:30 à 10h', 5, 116, 'vcr1'),
('N2345678098', 'Hamdi Hamid', 'reseaux', 'jeudi 8h:30 à 10h', 4, 115, 'jcr1'),
('N76846870400', 'ayoub moujid', 'reseaux', 'vendredi 8h:30 à 10h', 1, 112, 'vcr1'),
('N76846870400', 'ayoub moujid', 'base_de_donnee', 'vendredi 8h:30 à 10h', 1, 115, 'vcr1'),
('N76846870400', 'ayoub moujid', 'base_de_donnee', 'Lundi 14h à 15h:30', 3, 114, 'lcr4'),
('N084874', 'salwa akasbi', 'base_de_donnee', 'mercredi 8h:30 à 10h', 4, 114, 'mecr1'),
('N084874', 'salwa akasbi', 'base_de_donnee', 'samedi 8h:30 à 10h', 5, 114, 'scr1'),
('N084874', 'salwa akasbi', 'base_de_donnee', 'samedi 10h à 11h:30h', 6, 115, 'scr2'),
('N084874', 'salwa akasbi', 'ro', 'mardi 10h à 11h:30h', 4, 115, 'mcr2'),
('N084874', 'salwa akasbi', 'ro', 'samedi 8h:30 à 10h', 5, 116, 'scr1'),
('N084874', 'salwa akasbi', 'ro', 'samedi 11h:30 à 13h', 6, 115, 'scr3'),
('N5489595', 'saida fathi', 'projet_tutore2', 'Lundi 8h:30 à 10h', 1, 114, 'lcr1'),
('N5489595', 'saida fathi', 'projet_tutore2', 'mardi 8h:30 à 10h', 2, 115, 'mcr1'),
('N2345678098', 'Hamdi Hamid', 'web_dynamique', 'mardi 11h:30 à 13h', 1, 115, 'mcr3'),
('N12345567', 'SOUAD LHIMR', 'web_dynamique', 'mardi 14h à 15h:30', 1, 115, 'mcr4');

-- --------------------------------------------------------

--
-- Structure de la table `salle`
--

CREATE TABLE `salle` (
  `numsalle` int(11) NOT NULL,
  `capacite` int(11) DEFAULT NULL,
  `lcr1` tinyint(1) DEFAULT '0',
  `lcr2` tinyint(1) DEFAULT '0',
  `lcr3` tinyint(1) DEFAULT '0',
  `lcr4` tinyint(1) DEFAULT '0',
  `lcr5` tinyint(1) DEFAULT '0',
  `lcr6` tinyint(1) DEFAULT '0',
  `mcr1` tinyint(1) DEFAULT '0',
  `mcr2` tinyint(1) DEFAULT '0',
  `mcr3` tinyint(1) DEFAULT '0',
  `mcr4` tinyint(1) DEFAULT '0',
  `mcr5` tinyint(1) DEFAULT '0',
  `mcr6` tinyint(1) DEFAULT '0',
  `mecr1` tinyint(1) DEFAULT '0',
  `mecr2` tinyint(1) DEFAULT '0',
  `mecr3` tinyint(1) DEFAULT '0',
  `mecr4` tinyint(1) DEFAULT '0',
  `mecr5` tinyint(1) DEFAULT '0',
  `mecr6` tinyint(1) DEFAULT '0',
  `jcr1` tinyint(1) DEFAULT '0',
  `jcr2` tinyint(1) DEFAULT '0',
  `jcr3` tinyint(1) DEFAULT '0',
  `jcr4` tinyint(1) DEFAULT '0',
  `jcr5` tinyint(1) DEFAULT '0',
  `jcr6` tinyint(1) DEFAULT '0',
  `vcr1` tinyint(1) DEFAULT '0',
  `vcr2` tinyint(1) DEFAULT '0',
  `vcr3` tinyint(1) DEFAULT '0',
  `vcr4` tinyint(1) DEFAULT '0',
  `vcr5` tinyint(1) DEFAULT '0',
  `vcr6` tinyint(1) DEFAULT NULL,
  `scr1` tinyint(1) DEFAULT '0',
  `scr2` tinyint(1) DEFAULT '0',
  `scr3` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `salle`
--

INSERT INTO `salle` (`numsalle`, `capacite`, `lcr1`, `lcr2`, `lcr3`, `lcr4`, `lcr5`, `lcr6`, `mcr1`, `mcr2`, `mcr3`, `mcr4`, `mcr5`, `mcr6`, `mecr1`, `mecr2`, `mecr3`, `mecr4`, `mecr5`, `mecr6`, `jcr1`, `jcr2`, `jcr3`, `jcr4`, `jcr5`, `jcr6`, `vcr1`, `vcr2`, `vcr3`, `vcr4`, `vcr5`, `vcr6`, `scr1`, `scr2`, `scr3`) VALUES
(112, 20, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0),
(113, 20, 2, 2, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0),
(114, 24, 1, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 4, 0, 0, 0, 0, 0, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 0, 0),
(115, 26, 1, 2, 3, 4, 5, 6, 2, 4, 1, 1, 0, 0, 1, 4, 0, 0, 0, 0, 4, 2, 0, 0, 0, 0, 1, 2, 0, 0, 0, 0, 2, 6, 6),
(116, 18, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 2, 0, 6, 0, 0, 5, 0, 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `enseignant`
--
ALTER TABLE `enseignant`
  ADD PRIMARY KEY (`cneens`);

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`cneetud`);

--
-- Index pour la table `etudiant_tp`
--
ALTER TABLE `etudiant_tp`
  ADD PRIMARY KEY (`cneetud`);

--
-- Index pour la table `fichier`
--
ALTER TABLE `fichier`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `fichier_etu`
--
ALTER TABLE `fichier_etu`
  ADD PRIMARY KEY (`module`,`groupe`,`nometud`,`nomprof`,`tp`);

--
-- Index pour la table `fichier_etudiant`
--
ALTER TABLE `fichier_etudiant`
  ADD PRIMARY KEY (`module`,`groupe`,`nometud`,`nomprof`,`tp`);

--
-- Index pour la table `liste_etudiant_tp`
--
ALTER TABLE `liste_etudiant_tp`
  ADD PRIMARY KEY (`cneetudtp`);

--
-- Index pour la table `liste_etudiant_tp_base_de_donnee`
--
ALTER TABLE `liste_etudiant_tp_base_de_donnee`
  ADD PRIMARY KEY (`cneetud`);

--
-- Index pour la table `liste_etudiant_tp_projet_tutore`
--
ALTER TABLE `liste_etudiant_tp_projet_tutore`
  ADD PRIMARY KEY (`cneetud`);

--
-- Index pour la table `liste_etudiant_tp_projet_tutore2`
--
ALTER TABLE `liste_etudiant_tp_projet_tutore2`
  ADD PRIMARY KEY (`cneetud`);

--
-- Index pour la table `liste_etudiant_tp_reseaux`
--
ALTER TABLE `liste_etudiant_tp_reseaux`
  ADD PRIMARY KEY (`cneetud`);

--
-- Index pour la table `liste_etudiant_tp_ro`
--
ALTER TABLE `liste_etudiant_tp_ro`
  ADD PRIMARY KEY (`cneetud`);

--
-- Index pour la table `liste_etudiant_tp_web_dynamique`
--
ALTER TABLE `liste_etudiant_tp_web_dynamique`
  ADD PRIMARY KEY (`cneetud`);

--
-- Index pour la table `salle`
--
ALTER TABLE `salle`
  ADD PRIMARY KEY (`numsalle`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `fichier`
--
ALTER TABLE `fichier`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
