-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 24, 2017 at 08:53 PM
-- Server version: 5.7.15
-- PHP Version: 7.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `checkpoint-1-26/09/2017`
--
CREATE DATABASE IF NOT EXISTS `checkpoint-1-26/09/2017` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `checkpoint-1-26/09/2017`;

-- --------------------------------------------------------

--
-- Table structure for table `citation`
--

CREATE TABLE `citation` (
  `id` int(11) NOT NULL,
  `author` varchar(100) NOT NULL,
  `chapter` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `date` datetime DEFAULT NULL,
  `image` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `citation`
--

INSERT INTO `citation` (`id`, `author`, `chapter`, `content`, `date`, `image`) VALUES
(1, 'Perceval', 'Livre I', 'Faut arrêter ces conneries de nord et de sud ! Une fois pour toutes, le nord, suivant comment on est tourné, ça change tout !', '2017-09-29 10:40:06', 'img/livre-1-ambidextrie.jpg'),
(2, 'Karadoc', 'Livre II', 'La politique de l\'autruche, c\'est une politique qui court vite, une politique qui fait des gros œufs, c\'est tout.', '2017-10-29 10:40:06', 'img/livre-2-la-cassette.png'),
(3, 'Perceval', 'Livre IV', 'En plus, je connais une technique pour tuer trois hommes en un coup rien qu’avec des feuilles mortes ! Alors là, vous êtes deux, vous avez bien de la chance.', '2017-08-29 10:40:06', 'img/livre-4-les-chaperons.jpg'),
(4, 'Karadoc', 'Livre II', 'Par exemple, vous prenez aujourd’hui. Vous comptez sept jours. Ça vous emmène dans une semaine. Et bien on sera exactement le même jour qu’aujourd’hui… À une vache près, hein… C’est pas une science exacte.', '2017-11-29 10:40:06', 'img/livre-2-sept-cent-quarante-quatre.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `citation`
--
ALTER TABLE `citation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `citation`
--
ALTER TABLE `citation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
