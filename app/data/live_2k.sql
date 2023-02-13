-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 13, 2023 at 05:46 PM
-- Server version: 5.7.24
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `live_2k`
--

-- --------------------------------------------------------

--
-- Table structure for table `artists`
--

CREATE TABLE `artists` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `stage` int(2) DEFAULT NULL,
  `genre_id` int(4) NOT NULL,
  `image_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `artists`
--

INSERT INTO `artists` (`id`, `name`, `stage`, `genre_id`, `image_url`) VALUES
(1, 'Kanye East', 1, 2, 'kanye-east'),
(2, '60 Cent', 1, 2, '60-cent'),
(3, 'Skeetlez', 1, 2, 'skeetlez'),
(4, 'Inkast', 1, 2, 'inkast'),
(5, 'Monkeyz', 1, 2, 'monkeyz'),
(6, 'Deflated Mommy', 1, 2, 'deflated-mommy'),
(7, 'Cedaland', 1, 2, 'felly-nurtado-cedaland'),
(8, 'My Biological Bromance', 2, 3, 'my-biological-bromance'),
(9, 'LinkedIn Park', 2, 3, 'linkedin-park'),
(10, 'April Ravine', 2, 3, 'april-ravine'),
(11, 'Relax! In The Bath', 2, 3, 'relax-in-the-bath'),
(12, 'Simple Beige-Ts', 2, 3, 'simple-beige-ts'),
(13, 'Evan Essence', 2, 3, 'evan-essence'),
(14, 'B!ack', 2, 3, 'b!ack'),
(15, 'Geezer', 2, 3, 'geezer'),
(16, 'Wink 281', 2, 3, 'wink-281'),
(17, 'Pennyfront', 2, 3, 'pennyfront'),
(18, 'The All-Canadian Acceptance', 2, 3, 'the-all-canadian-acceptance'),
(19, 'The Flay', 2, 3, 'the-flay'),
(20, 'Britney S. Pearce', 2, 1, 'britney-s-pearce'),
(21, 'DESYNC', 2, 1, 'desync'),
(22, 'Cream Day', 2, 3, 'cream-day'),
(23, 'The Alley Guys', 2, 1, 'the-alley-guys'),
(24, 'The Mice Girls', 3, 1, 'the-mice-girls'),
(25, 'Crimson 5', 3, 1, 'crimson-5'),
(26, 'Gwynnes Tafani', 3, 1, 'gwynnes-tafani'),
(27, 'Felly Nurtado', 3, 1, 'felly-nurtado-cedaland'),
(28, 'Water', 3, 1, 'water'),
(29, 'Darks', 3, 1, 'darks'),
(30, 'Leon A Lewis', 3, 1, 'leon-a-lewis'),
(31, 'OneDominion', 3, 1, 'one-dominion'),
(32, 'Justin Derulo', 3, 1, 'justin-derulo'),
(33, 'Dark Spot Legumes', 3, 1, 'dark-spot-legumes'),
(34, 'B*Tweens', 3, 1, 'b-tweens'),
(35, 'Mandy Less', 3, 1, 'mandy-less'),
(36, 'Willa Chevy', 3, 1, 'willa-chevy'),
(37, 'Lillary Buff', 3, 1, 'lillary-buff'),
(38, '97*', 3, 1, '97'),
(39, 'Prosaic', 3, 1, 'prosaic'),
(40, 'Paft Dunk', 2, 4, 'paft-dunk'),
(41, 'will.u.are', 2, 4, 'will-u-are'),
(42, 'The Vegabon Boys', 2, 4, 'the-vegabon-boys'),
(43, 'Fates Parent', 1, 5, 'fates-parent'),
(44, 'Alicia Locks', 1, 5, 'alicia-locks'),
(45, 'Husher', 1, 5, 'husher'),
(46, 'Luigi', 1, 5, 'luigi'),
(47, 'HoHo', 1, 5, 'hoho'),
(48, 'The Puppydog Action Figures', 3, 1, 'the-puppydog-action-figures'),
(49, 'Ke¥ha', 3, 1, 'keyha');

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `id` int(4) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`id`, `name`) VALUES
(1, 'POP'),
(2, 'HIPHOP'),
(3, 'ROCK'),
(4, 'DANCE'),
(5, 'RNB');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `genre_id` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `genre_id`) VALUES
(5, 'Remedios Fernandez', 'nymuqakizo', 'tilogypedy@mailinator.com', '$2y$10$/ll/C3sx/3UgdM9IiXvwp.hfjMjYbyo83omFdby6ha0BiHwkgXFge', 5),
(6, 'Caryn Blake', 'tozyz', 'hifahat@mailinator.com', '$2y$10$8OZZXh9.5zLaShQgTVaMt.46nze.y.a5nSD.5hwgZYJD7IhWyaium', 3),
(7, 'Rikki Soriano', 'rikkilanz', 'rikki@mail.com', '$2y$10$p/jrJQpWMKUq5C40a.xlmupWmrQ4KzR7j0N25x.ohCWw1QoDGfLyi', 2),
(8, 'Connor Harrington', 'fomycuvaci', 'hajynusyq@mailinator.com', '$2y$10$ZN04MVL8pcd.BoLYUnKR9uX6Uw1RTuz0uqq3tooRsNcp9aQSiufue', 5),
(16, 'Josh Licerio', 'jjlicerio', 'jjlicerio@mail.com', '$2y$10$X2Kj5Ji3LS/4O6i6ECU3re90CuYsvBfVqkFUQiPvJijl0TAYQsOGK', 4),
(17, 'John Smith', 'jsmith', 'jsmith@mail.com', '$2y$10$v8j7ntVrwEIbseWdLYZHf.ULOn0c0VWbpk/RPfyMcJ1oAvGQt96dO', NULL),
(18, 'Joy Roy', 'wabiq', 'masu@mailinator.com', '$2y$10$FgDyzP9vU.vZX.7fUEVBYOmnkPzEMHZrO./ioKuO0U.qRsv7StZbm', NULL),
(19, 'Joy Roy', 'wabiq', 'masu@mailinator.com', '$2y$10$aVk51ceijk8wGBb0TZkZvONVWvttHYXJ0vA2KnUZ8/3T.xc687HFG', NULL),
(20, 'Joy Roy', 'wabiq', 'masu@mailinator.com', '$2y$10$pXo7Z8JyvwA3g6noswssie3k7P2iEbuNy3ocDRAFmczKlGP.GW.52', NULL),
(21, 'Joy Roy', 'wabiq', 'masu@mailinator.com', '$2y$10$7qq62oBpRxWaIx8yXi0fAe56MSiM6b5Wsd0Wm1G2GkCVhQ6c6bdUC', 3),
(22, 'Renz Endaya', 'renzendaya', 'renzendaya@mail.com', '$2y$10$e86t6anpYDc2fp/MBU4or.lRamvdF8/D98X8Qva7qiRkxZHKFR6Xy', 5),
(23, 'Dave Koo', 'davekoo', 'davekoo@mail.com', '$2y$10$/LFkIy86kvcMYCiMTqd9ZevFNZjF.YNkuos7KkyW1b8fQXYe6tNU.', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artists`
--
ALTER TABLE `artists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `aritsts_genres_FK` (`genre_id`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_genres_FK` (`genre_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artists`
--
ALTER TABLE `artists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `artists`
--
ALTER TABLE `artists`
  ADD CONSTRAINT `aritsts_genres_FK` FOREIGN KEY (`genre_id`) REFERENCES `genres` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_genres_FK` FOREIGN KEY (`genre_id`) REFERENCES `genres` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
