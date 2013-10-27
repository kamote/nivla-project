-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2013 at 12:36 PM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `forum_rp`
--
CREATE DATABASE IF NOT EXISTS `forum_rp` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `forum_rp`;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `topic_id` int(11) NOT NULL,
  `username` varchar(11) NOT NULL,
  `comment` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `title` text NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `topic_id`, `username`, `comment`, `date`, `title`) VALUES
(16, 0, 'ederpaolo', 'Type your comment herasdasdase...', '2013-10-15 21:58:38', ''),
(15, 0, 'ederpaolo', 'asdasd asd ASDAS', '2013-10-15 21:54:19', ''),
(14, 0, 'ederpaolo', 'sdasdasdasdasdsadasdasd  asdsad asd', '2013-10-15 21:53:15', ''),
(8, 0, 'asdas asd a', '', '2013-10-15 20:48:22', '');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE IF NOT EXISTS `topics` (
  `username` varchar(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `body` text NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `topic_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`topic_id`),
  KEY `user_id` (`username`),
  KEY `user_id_2` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=100 ;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`username`, `title`, `body`, `created`, `topic_id`) VALUES
('richelle', 'mahal ko si alvin pira garces', 'i love you so much baby ko ', '2013-10-15 17:22:42', 83),
('richelle', 'ano bayan tulog na l', 'asdasdasdasdasdasddasdasdasdasdasdasd', '2013-10-15 17:25:41', 84),
('rabin', 'bobo ba ako??tanung lang', 'please comment', '2013-10-15 17:44:49', 86),
('richelle', 'alvin pira garces', 'is my husband', '2013-10-15 19:13:45', 92),
('richelle', 'majak nga maka comment bad3p!!', 'yot', '2013-10-15 19:56:24', 93),
('ederpaolo', 'el triangulo', 'ako ay el triangulo', '2013-10-15 21:22:27', 96),
('richelle', 'DAPAT LANG!!!', 'asdasczsdf sdf d asd asdf sdf sdf\r\n', '2013-10-16 15:41:05', 97),
('rowell34', 'gwapo ako diba??', 'sdfdsfdsfsdfdsfdsfds', '2013-10-16 15:44:01', 98),
('rowell34', 'PJbaba el triangulo', 'pj babasdf sdf sdfsdf \r\nsdfsd fds\r\nf asd\r\nf sdf\r\n sdf\r\ns f\r\nsdf\r\ndsfdsfdssdf asdf asd\r\nf zsd\r\nfs df\r\n s\r\nDF sdF sDF sdfdsfdsf\r\n \r\ndsf\r\nds\r\nsdf\r\ndsf\r\nsdf\r\nsd\r\nf zsdf\r\nsd\r\nf \r\nsDf\r\n dsf\r\n sdf\r\ns f\r\ndsf\r\n \r\nds ds\r\na ako nasad asd asdf ', '2013-10-16 15:46:00', 99);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `userpass` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `userpass`, `email`, `time`) VALUES
(6, 'alvin', 'richelle', 'garces_alvin28@yahoo.com', '2013-10-07 13:59:09'),
(7, 'rabin', 'rabingwapo', 'rabinsonsipin@yahoo.com', '2013-10-07 13:59:09'),
(8, 'richelle', 'alvinpira', 'richelle_romano@yahoo.com', '2013-10-07 13:59:09'),
(9, 'ederpaolo', 'ederpaolo', 'baba_ako@yahoo.com', '2013-10-07 13:59:09'),
(10, 'rabino', 'alvinpira', 'rabino_aa@yahoo.com', '2013-10-07 13:59:09'),
(11, 'siera', 'harped.21', 'gumasing_siera@yahoo.com', '2013-10-07 13:59:09'),
(12, 'asakan', 'harped.21', '', '2013-10-07 14:19:09'),
(13, 'pjgwapo', 'pjmezario091', 'mezario_pj@yahoo.com', '2013-10-11 04:20:52'),
(14, 'rowell34', 'rowellgarces', 'rowellgarces@yahoo.com', '2013-10-16 15:43:11');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
