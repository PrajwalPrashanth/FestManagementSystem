-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2018 at 04:35 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chatdata`
--
CREATE DATABASE IF NOT EXISTS `chatdata` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `chatdata`;

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `sumapple` (OUT `tot_exp` INT, OUT `tot_col` INT, OUT `net` INT)  READS SQL DATA
BEGIN
DECLARE total_col INT;
DECLARE total_first INT;
DECLARE total_second INT;

SELECT SUM(ticket_price * no_of_participants) INTO total_col FROM events;
SELECT SUM(1st_prize) INTO total_first FROM events;
SELECT SUM(2nd_prize) INTO total_second FROM events;


SET tot_exp = total_first + total_second ;
SET tot_col = total_col;
SET net = total_col - tot_exp ;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` varchar(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `designation` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `password`, `designation`) VALUES
('001', 'prajwal', 'prajwal', '123', 'admin'),
('002', 'umashankar', 'umashankar', '123', 'main-teacher-coordinator'),
('003', 'bindhiya', 'bindhiya', '123', 'main-teacher-coordinator');

-- --------------------------------------------------------

--
-- Table structure for table `campaign`
--

CREATE TABLE IF NOT EXISTS `campaign` (
  `id` varchar(11) NOT NULL,
  `college` varchar(30) NOT NULL,
  `total_tickets` int(10) NOT NULL,
  `total_money` int(10) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`date`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `campaign`
--

INSERT INTO `campaign` (`id`, `college`, `total_tickets`, `total_money`, `date`) VALUES
('101', 'jss', 3, 900, '2018-05-01'),
('102', 'global', 5, 1000, '2018-05-02'),
('103', 'rnsit', 3, 600, '2018-05-03'),
('101', 'vkit', 4, 2000, '2018-05-04'),
('106', 'nmit', 10, 3000, '2018-05-05'),
('101', 'kkk', 10, 3000, '2018-09-03');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `user` varchar(20) NOT NULL,
  `designation` varchar(40) NOT NULL,
  `msg` varchar(100) NOT NULL,
  `time` varchar(20) NOT NULL,
  `id` varchar(11) NOT NULL,
  PRIMARY KEY (`time`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`user`, `designation`, `msg`, `time`, `id`) VALUES
('alice', 'cse-coordinator', 'Hello world! its abc\r\n', '2018-10-04 15:06:56', '102'),
('bob', 'cse-coordinator', 'hello world! its bob\r\n', '2018-10-04 15:07:27', '102'),
('alice', 'cse-coordinator', 'how are u alice?\r\n', '2018-10-04 15:07:46', '102'),
('bob', 'cse-coordinator', 'dsadna', '2018-10-04 15:08:28', '102'),
('bob', 'cse-coordinator', '"', '2018-10-04 15:09:00', '102'),
('bob', 'cse-coordinator', '', '2018-10-04 15:09:10', '102'),
('bob', 'cse-coordinator', '\'', '2018-10-04 15:10:14', '102'),
('prajwal', 'admin', 'hello mf\r\n', '2018-10-12 10:56:07', '101'),
('bob', 'cse-coordinator', 'hello \r\n', '2018-10-12 10:56:34', '102');

--
-- Triggers `chat`
--
DELIMITER $$
CREATE TRIGGER `time` BEFORE INSERT ON `chat` FOR EACH ROW SET
new.time = NOW()
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `event_name` varchar(20) NOT NULL,
  `time` varchar(11) NOT NULL,
  `location` varchar(20) NOT NULL,
  `id` varchar(11) NOT NULL,
  `date` varchar(15) NOT NULL,
  `ticket_price` int(11) NOT NULL,
  `no_of_participants` int(11) NOT NULL,
  `1st_prize` int(11) NOT NULL,
  `2nd_prize` int(11) NOT NULL,
  PRIMARY KEY (`event_name`),
  KEY `coordinator_id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_name`, `time`, `location`, `id`, `date`, `ticket_price`, `no_of_participants`, `1st_prize`, `2nd_prize`) VALUES
('cricket', '09:00', 'ground', '103', '12-may-2018', 500, 5, 1000, 500),
('cs', '12:00', 'hrd-101', '101', '13-may-2018', 200, 5, 300, 150),
('lab', '13:30', 'cs201', '106', '2018-05-03', 300, 10, 700, 300),
('mini', '14:00', 'cs301', '107', '2018-05-05', 200, 5, 300, 200),
('mini_militia', '13:30', 'is-201', '106', '2018-05-03', 300, 10, 600, 400),
('most_wanted', '12:00', 'cs-101', '102', '12-may-2018', 200, 5, 300, 150);

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE IF NOT EXISTS `volunteer` (
  `id` varchar(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phone` int(12) NOT NULL,
  `designation` varchar(40) NOT NULL,
  `sup_id` varchar(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sup_id` (`sup_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`id`, `username`, `password`, `name`, `phone`, `designation`, `sup_id`) VALUES
('101', 'alice', '123', 'alice', 7845131, 'cse-coordinator', '001'),
('102', 'bob', '123', 'bob', 789456123, 'cse-coordinator', '001'),
('103', 'abhishek', '123', 'abhishek', 12345679, 'ec-coordinator', '001'),
('106', 'kruskal', '123', 'kruskal', 456789412, 'is-coordinator', '001'),
('107', 'ross', '123', 'ross', 456987321, 'eee-coordinator', '001');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `campaign`
--
ALTER TABLE `campaign`
  ADD CONSTRAINT `campaign_ibfk_1` FOREIGN KEY (`id`) REFERENCES `volunteer` (`id`);

--
-- Constraints for table `chat`
--
ALTER TABLE `chat`
  ADD CONSTRAINT `chat_ibfk_1` FOREIGN KEY (`id`) REFERENCES `volunteer` (`id`);

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`id`) REFERENCES `volunteer` (`id`);

--
-- Constraints for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD CONSTRAINT `volunteer_ibfk_1` FOREIGN KEY (`sup_id`) REFERENCES `admin` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
