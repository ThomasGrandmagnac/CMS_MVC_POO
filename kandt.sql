-- phpMyAdmin SQL Dump
-- version 4.2.7
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jun 06, 2016 at 02:19 PM
-- Server version: 5.5.41-log
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kandt`
--

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE IF NOT EXISTS `page` (
`id` int(11) NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `h1` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `span_text` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `span_class` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=23 ;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `slug`, `h1`, `body`, `title`, `img`, `span_text`, `span_class`) VALUES
(1, 'teletubbies', 'Les téléteubés !!', 'Les Télétubbies sont de petites créatures colorées et acidulées, avec de petites antennes sur la tête et un écran de télévision sur le ventre.', 'Teletubbies', 'img/teletubbies.jpg', 'horreur', 'label-danger'),
(2, 'kittens', 'Le CHATON', 'Bêtes du diable. Ils aiment écorcher vif un poulet et faire des pentacles.', 'Kittens', 'img/three_kittens.jpg', '666', 'label-danger'),
(3, 'ironmaiden', 'L''euro madon', 'C''est gentil et tout mignon.', 'Iron Maiden', 'img/ironmaiden.jpg', 'trokewl', 'label-success'),
(4, 'snorky', 'Les Snorkies !!', 'Axel est télégéniqueLes Snorky1 (Snorks) est une série télévisée d''animation américaine en 65 épisodes de 22 minutes basée sur la bande dessinée créée par le dessinateur belge Nicolas Broca en 1982 (les personnages sont apparus en 1981 sous le nom des Diskies dans un récit inédit de la série Spirou et Fantasio). Produite par Hanna-Barbera Productions (le plus grand succès des Schtroumpfs), elle fut diffusée entre le 15 septembre 1984 et le 14 janvier 1989 sur le réseau NBC.', 'Snorky', 'img/snorkies.jpg', 'Série d''animation', 'label-success'),
(5, 'ronflex', 'Ronflex !', 'Nouveau Pokemon !', 'Pokemon', 'img/ronflex.jpg', 'pokemon', 'label-success');

-- --------------------------------------------------------

--
-- Table structure for table `page2`
--

CREATE TABLE IF NOT EXISTS `page2` (
`id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=1 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `page`
--
ALTER TABLE `page`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page2`
--
ALTER TABLE `page2`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `page2`
--
ALTER TABLE `page2`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
