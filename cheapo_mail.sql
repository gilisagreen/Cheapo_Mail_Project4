-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 11, 2013 at 03:07 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cheapo_mail`
--

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `body` varchar(4500) NOT NULL,
  `subject` varchar(75) NOT NULL,
  `user_id` varchar(9) NOT NULL,
  `recipient_ids` varchar(9) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=91 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `body`, `subject`, `user_id`, `recipient_ids`) VALUES
(4, 'testing', 'test', '620042465', '620042465'),
(5, 'YEEEEEEASASSSSSSS', 'this should be working now!', '620042465', '620042465'),
(6, 'update there is another user and my name is Marika!', 'another user!', '620010160', '620042465'),
(8, 'fasdfasdfsafa', 'afsasd', '620042465', '620042465'),
(9, 'fasdfasdfsafa', 'afsasd', '620042465', '124005262'),
(10, 'fasdfasdfsafa', 'afsasd', '620042465', '186009509'),
(11, 'fasdfasdfsafa', 'afsasd', '620042465', '248010525'),
(12, 'nothing to say', 'MULTIPEOPLe', '620042465', '620042465'),
(13, 'nothing to say', 'MULTIPEOPLe', '620042465', '620010160'),
(14, 'nothing to say', 'MULTIPEOPLe', '620042465', '620042465'),
(15, 'nothing to say', 'MULTIPEOPLe', '620042465', '620010160'),
(16, 'dsfadfa', 'akdhfalkdjfhadf', '620042465', '620042465'),
(17, 'dsfadfa', 'akdhfalkdjfhadf', '620042465', '620010160'),
(18, 'hi', 'hi', '620042465', '620042465'),
(19, 'hi', 'hi', '620042465', '620010160'),
(20, 'number 1', 'hiiiiii tester', '620042465', '620010160'),
(21, 'hiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii', 'adding subject', '620042465', '620042465'),
(22, 'hiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii', 'adding subject', '620042465', '620010160'),
(23, '<3', 'sending one back to you!', '620010160', '620010160'),
(24, 'ROO many errorsss hahahahahhahahahahahaha', 'ERROR', '620010160', '620010160'),
(25, 'EAT MY SHORTS!!!!!!!!!', 'Bart Simpson', '620042465', '620010160'),
(26, 'Gotta get your attention!', 'NEW THINGS', '620042465', '620010160'),
(27, 'hi', 'SAMSUNG GALAXY NOTE 10.1 TABLET!!!!!!!!!!!!!!!!!!!!!!!!', '620010160', '620010160'),
(28, 'asdasd', 'asdsdad', '620042465', '620010160'),
(29, 'asd', 'whoww', '620042465', '620010160');

-- --------------------------------------------------------

--
-- Table structure for table `message_read`
--

CREATE TABLE IF NOT EXISTS `message_read` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `message_id` varchar(9) NOT NULL,
  `reader_id` varchar(9) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=66 ;

--
-- Dumping data for table `message_read`
--

INSERT INTO `message_read` (`id`, `message_id`, `reader_id`, `date`) VALUES
(56, '73', '620010160', '2013-12-11'),
(57, '77', '620010160', '2013-12-11'),
(58, '74', '620010160', '2013-12-11'),
(59, '80', '620010160', '2013-12-11'),
(60, '65', '620042465', '2013-12-11'),
(61, '58', '620042465', '2013-12-11'),
(62, '60', '620042465', '2013-12-11'),
(63, '63', '620042465', '2013-12-11'),
(64, '86', '620042465', '2013-12-11'),
(65, '10', '620042465', '2013-12-11');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` varchar(9) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `password` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `password`, `username`, `type`) VALUES
('620042465', 'Gilisa', 'Green', 'gilisa', 'gilisa', 'admin'),
('620010160', 'Marika', 'Green', 'junebug', 'munchies', 'user'),
('620042485', 'John', 'Doe', 'Johnd123', 'johnd', 'user');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
