-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2023 at 07:53 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tentheme2`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` int(255) NOT NULL,
  `pid` int(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `time` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `pid`, `icon`, `title`, `time`) VALUES
(1, 1, '<i class=\"fa-solid fa-house\"></i>', 'Testing as a developer', 656426456),
(2, 1, '<i class=\"fa-solid fa-house\"></i>', 'Testing as a developer', 656426456),
(3, 0, '<i class=\"fa-solid fa-arrow-right-to-bracket\"></i>', 'You are Logged in Successfull', 1683456128),
(4, 1, '<i class=\"fa-solid fa-arrow-right-to-bracket\"></i>', 'You are Logged in Successfull', 1683456187),
(5, 21, '<i class=\"fa-solid fa-right-to-bracket\"></i>', 'Congratulations! You are Created new Account', 1683456313),
(6, 21, '<i class=\"fa-solid fa-money-bill-transfer\"></i>', 'Deposit requested for $5000', 1683456658),
(7, 21, '<i class=\"fa-solid fa-money-bill-transfer\"></i>', 'withdraw requested for $1000', 1683457001),
(8, 21, '<i class=\"fa-solid fa-user\"></i>', 'Profile Updated Successfully', 1683457215),
(9, 21, '<i class=\"fa-solid fa-shield\"></i>', 'Password Changes Successfully', 1683457339),
(10, 0, '<i class=\"fa-solid fa-person-walking-luggage\"></i>', 'You are logged out', 1683457652),
(11, 21, '<i class=\"fa-solid fa-arrow-right-to-bracket\"></i>', 'You are Logged in Successfull', 1683457663),
(12, 0, '<i class=\"fa-solid fa-person-walking-luggage\"></i>', 'You are logged out', 1683457692),
(13, 21, '<i class=\"fa-solid fa-arrow-right-to-bracket\"></i>', 'You are Logged in Successfull', 1683457703),
(14, 21, '<i class=\"fa-solid fa-box\"></i>', 'Successfully Purchase a new products', 1683458161),
(15, 21, '<i class=\"fa-solid fa-server\"></i>', 'Successfully Purchase a new Service', 1683458442),
(16, 21, '<i class=\"fa-solid fa-server\"></i>', 'Successfully Purchase a new Service', 1683458459),
(17, 21, '<i class=\"fa-solid fa-server\"></i>', 'Successfully Purchase a new Service', 1683458580),
(18, 0, '<i class=\"fa-solid fa-box\"></i>', 'Successfully send a 5 star review. (Product ID #52)', 1683459034),
(19, 0, '<i class=\"fa-solid fa-box\"></i>', 'Successfully send a 4 star review. (Product ID #52)', 1683459084),
(20, 21, '<i class=\"fa-solid fa-user\"></i>', 'Profile Updated Successfully', 1683467750),
(21, 21, '<i class=\"fa-solid fa-user\"></i>', 'Profile Updated Successfully', 1683467755),
(22, 1, '<i class=\"fa-solid fa-arrow-right-to-bracket\"></i>', 'You are Logged in Successfull', 1683476515),
(23, 21, '<i class=\"fa-solid fa-arrow-right-to-bracket\"></i>', 'You are Logged in Successfull', 1683476550),
(24, 1, '<i class=\"fa-solid fa-arrow-right-to-bracket\"></i>', 'You are Logged in Successfull', 1683529816),
(25, 1, '<i class=\"fa-solid fa-money-bill-transfer\"></i>', 'Deposit requested for $10', 1683604387),
(26, 1, '<i class=\"fa-solid fa-money-bill-transfer\"></i>', 'Deposit requested for $999999999', 1683605198),
(27, 1, '<i class=\"fa-solid fa-money-bill-transfer\"></i>', 'Deposit requested for $9999999', 1683605263),
(28, 1, '<i class=\"fa-solid fa-arrow-right-to-bracket\"></i>', 'You are Logged in Successfull', 1683613330),
(29, 1, '<i class=\"fa-solid fa-arrow-right-to-bracket\"></i>', 'You are Logged in Successfull', 1684555316),
(30, 1, '<i class=\"fa-solid fa-user\"></i>', 'Profile Updated Successfully', 1684555336),
(31, 1, '<i class=\"fa-solid fa-arrow-right-to-bracket\"></i>', 'You are Logged in Successfull', 1684830133),
(32, 29, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! You are Created new Account', 1684933166),
(33, 1, '<i class=\"fa-solid fa-arrow-right-to-bracket\"></i>', 'You are Logged in Successfull', 1684933873),
(34, 1, '<i class=\"fa-solid fa-arrow-right-to-bracket\"></i>', 'You are Logged in Successfull', 1684948222),
(35, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! You are Created new Account', 1684948255),
(36, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! You are Created new Account', 1684948849),
(37, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! You are Created new Account', 1685023852),
(38, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! You are Created new Account', 1685024014),
(39, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! You are Created new Account', 1685024161),
(40, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! You are Created new Account', 1685025160),
(41, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! You are Created new Account', 1685026203),
(42, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685091730),
(43, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685091837),
(44, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685091930),
(45, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685092004),
(46, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685092207),
(47, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685092232),
(48, 1, '<i class=\"fa-solid fa-arrow-right-to-bracket\"></i>', 'You are Logged in Successfull', 1685092511),
(49, 1, '<i class=\"fa-solid fa-arrow-right-to-bracket\"></i>', 'You are Logged in Successfull', 1685092671),
(50, 1, '<i class=\"fa-solid fa-arrow-right-to-bracket\"></i>', 'You are Logged in Successfull', 1685094139),
(51, 1, '<i class=\"fa-solid fa-arrow-right-to-bracket\"></i>', 'You are Logged in Successfull', 1685112945),
(52, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685112968),
(53, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685159002),
(54, 1, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! purchuse order successfull', 1685533939),
(55, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685534148),
(56, 1, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! purchuse order successfull', 1685534189),
(57, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685782146),
(58, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685782208),
(59, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685782266),
(60, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685782310),
(61, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685782557),
(62, 30, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! You are Created new Account', 1685782719),
(63, 30, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! You are Created new Account', 1685782719),
(64, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685782737),
(65, 1, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! purchuse order successfull', 1685783925),
(66, 1, '<i class=\"fa-solid fa-arrow-right-to-bracket\"></i>', 'You are Logged in Successfull', 1685794441),
(67, 1, '<i class=\"fa-solid fa-arrow-right-to-bracket\"></i>', 'You are Logged in Successfull', 1685794543),
(68, 31, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! You are Created new Account', 1685794759),
(69, 1, '<i class=\"fa-solid fa-arrow-right-to-bracket\"></i>', 'You are Logged in Successfull', 1685795488),
(70, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685796393),
(71, 1, '<i class=\"fa-solid fa-arrow-right-to-bracket\"></i>', 'You are Logged in Successfull', 1685798249),
(72, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685798259),
(73, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685798441),
(74, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685799026),
(75, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685799201),
(76, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685799243),
(77, 1, '<i class=\"fa-solid fa-arrow-right-to-bracket\"></i>', 'You are Logged in Successfull', 1685799308),
(78, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685799415),
(79, 1, '<i class=\"fa-solid fa-arrow-right-to-bracket\"></i>', 'You are Logged in Successfull', 1685799493),
(80, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685810516),
(81, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685810596),
(82, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685810620),
(83, 1, '<i class=\"fa-solid fa-arrow-right-to-bracket\"></i>', 'You are Logged in Successfull', 1685810759),
(84, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685810785),
(85, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685813434),
(86, 1, '<i class=\"fa-solid fa-arrow-right-to-bracket\"></i>', 'You are Logged in Successfull', 1685814997),
(87, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685815034),
(88, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685870445),
(89, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685870748),
(90, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685870816),
(91, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685870957),
(92, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685872071),
(93, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685872276),
(94, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685872501),
(95, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685874977),
(96, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685875026),
(97, 1, '<i class=\"fa-solid fa-arrow-right-to-bracket\"></i>', 'You are Logged in Successfull', 1685875100),
(98, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685875564),
(99, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685875602),
(100, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685880801),
(101, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685880848),
(102, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685884088),
(103, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685885949),
(104, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685886087),
(105, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685886304),
(106, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685886950),
(107, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685887114),
(108, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685887425),
(109, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685887453),
(110, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685887495),
(111, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685887590),
(112, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685888250),
(113, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685888282),
(114, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685888736),
(115, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685888984),
(116, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685889092),
(117, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685889133),
(118, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685889162),
(119, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685889198),
(120, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685889310),
(121, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685889420),
(122, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685890465),
(123, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685890484),
(124, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685890550),
(125, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685890575),
(126, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685942208),
(127, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685942384),
(128, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685942487),
(129, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685942507),
(130, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685942583),
(131, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685942619),
(132, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685942663),
(133, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685942673),
(134, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685942767),
(135, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685942847),
(136, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685942909),
(137, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685943506),
(138, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685944190),
(139, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685944212),
(140, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Successfullly.', 1685944250),
(141, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Successfullly.', 1685944487),
(142, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685944673),
(143, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685944761),
(144, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685945040),
(145, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685945080),
(146, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Successfullly.', 1685945176),
(147, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685945233),
(148, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685945431),
(149, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Successfullly.', 1685945600),
(150, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685949926),
(151, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685953848),
(152, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Successfullly.', 1685955979),
(153, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685957459),
(154, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685962830),
(155, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685963314),
(156, 1, '<i class=\"fa-solid fa-money-bill-transfer\"></i>', 'Deposit requested for $5000', 1685972611),
(157, 1, '<i class=\"fa-solid fa-money-bill-transfer\"></i>', 'withdraw requested for $5000', 1685972839),
(158, 1, '<i class=\"fa-solid fa-money-bill-transfer\"></i>', 'withdraw requested for $3443', 1685972935),
(159, 1, '<i class=\"fa-solid fa-money-bill-transfer\"></i>', 'withdraw requested for $500', 1685973024),
(160, 1, '<i class=\"fa-solid fa-money-bill-transfer\"></i>', 'withdraw requested for $343', 1685973210),
(161, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Successfullly.', 1685985352),
(162, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685985698),
(163, 1, '<i class=\"fa-solid fa-ticket\"></i>', 'Created a new Ticket', 1685985826),
(164, 1, '<i class=\"fa-solid fa-ticket\"></i>', 'Created a new Ticket', 1685985921),
(165, 1, '<i class=\"fa-solid fa-ticket\"></i>', 'Created a new Ticket', 1685986066),
(166, 1, '<i class=\"fa-solid fa-ticket\"></i>', 'Created a new Ticket', 1685986118),
(167, 1, '<i class=\"fa-solid fa-ticket\"></i>', 'Created a new Ticket', 1685986125),
(168, 1, '<i class=\"fa-solid fa-ticket\"></i>', 'Created a new Ticket', 1685986230),
(169, 1, '<i class=\"fa-solid fa-ticket\"></i>', 'Created a new Ticket', 1685986249),
(170, 1, '<i class=\"fa-solid fa-ticket\"></i>', 'Created a new Ticket', 1685986312),
(171, 0, '<i class=\"fa-solid fa-user-check\"></i>', 'Congratulations! Order are Pending Now.', 1685986667),
(172, 1, '<i class=\"fa-solid fa-ticket\"></i>', 'Created a new Ticket', 1685986677);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(255) NOT NULL,
  `pid` int(255) NOT NULL,
  `order_id` int(255) NOT NULL,
  `cart_id` int(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '0',
  `notify` varchar(255) NOT NULL DEFAULT 'New',
  `time` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `pid`, `order_id`, `cart_id`, `type`, `duration`, `status`, `notify`, `time`) VALUES
(241, 1, 5834304, 30, 'product', '', '2', 'New', 1685985693),
(242, 1, 4243604, 30, 'product', '', '2', 'New', 1685986657);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `time` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`, `type`, `time`) VALUES
(34, 'Avada', 'Products', 1676044150),
(36, 'Flatsome', 'Product', 1676044165),
(37, 'Astra', 'Product', 1676044173),
(38, 'Colormag', 'Product', 1676044178),
(41, 'Live Chat', 'Service', 1676044346),
(42, 'Theme Setup', 'Service', 1676044352),
(43, 'Website Setup', 'Service', 1676044361),
(48, 'Website Setup', 'Post', 1682006554),
(55, 'Html', 'Post', 1683550919);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `post_id` int(255) NOT NULL,
  `id` int(11) NOT NULL,
  `parent_id` int(255) NOT NULL DEFAULT 0,
  `type` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL DEFAULT 'img.png',
  `time` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`post_id`, `id`, `parent_id`, `type`, `name`, `email`, `content`, `img`, `time`) VALUES
(54, 57, 0, '', 'John Doe ', '', 'Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.', 'mobile.jpg', 0),
(54, 89, 57, '', 'munna', 'freelancermunna4@gmail.com', 'something test', 'avatar.jpg', 0),
(54, 113, 89, '', 'munna', 'freelancermunna4@gmail.com', 'something test', 'avatar.jpg', 0),
(54, 114, 57, '', 'admin', 'admin@gmail.com', 'sdffdf', '634af2216fb544.83705756.jpg', 1671021656),
(54, 115, 0, '', 'admin', 'admin@gmail.com', 'aadfdfd', '634af2216fb544.83705756.jpg', 1671021681),
(54, 116, 0, '', 'admin', 'admin@gmail.com', 'fsdfsf', '634af2216fb544.83705756.jpg', 1671021701),
(54, 117, 113, '', 'admin', 'admin@gmail.com', 'sfsdf', '634af2216fb544.83705756.jpg', 1671021722),
(53, 118, 0, '', 'admin', 'admin@gmail.com', 'sdfsf', '634af2216fb544.83705756.jpg', 1671022716),
(53, 119, 0, '', 'admin', 'admin@gmail.com', 'sdfsdf', '634af2216fb544.83705756.jpg', 1671022923),
(1, 120, 0, '', 'Admin', 'admin@gmail.com', 'ddd', '634af2216fb544.83705756.jpg', 1675189915),
(27, 121, 0, 'product', 'munna', 'munna@gmail.com', 'dfsf', 'ingo-tessmann-1b7dedce.jpg', 1676474908),
(27, 122, 0, 'product', 'munna', 'munna@gmail.com', 'good\r\n', 'ingo-tessmann-1b7dedce.jpg', 1676474908),
(25, 123, 0, 'service', 'munna', 'munna@gmail.com', 'supper service', 'ingo-tessmann-1b7dedce.jpg', 1676474934),
(51, 124, 0, 'product', 'Admin', 'admin@gmail.com', 'sfsdf', '17772566435.png', 1683354658),
(51, 125, 0, 'product', 'Admin', 'admin@gmail.com', 'sdfdsfdf', '17772566435.png', 1683354658),
(51, 126, 0, 'product', 'Admin', 'admin@gmail.com', 'etao this ase', '17772566435.png', 1683354658),
(51, 127, 0, 'product', 'Admin', 'admin@gmail.com', 'arekta dilam', '17772566435.png', 1683354658),
(51, 128, 0, 'product', 'Admin', 'admin@gmail.com', 'supper', '17772566435.png', 1683436574),
(51, 129, 0, 'product', 'Admin', 'admin@gmail.com', 'These are new comments.', '17772566435.png', 1683436702),
(39, 130, 0, 'service', 'Admin', 'admin@gmail.com', 'good', '17772566435.png', 1683436748),
(39, 131, 0, 'service', 'Admin', 'admin@gmail.com', 'this another commentthis another commentthis another commentthis another commentthis another commentthis another commentthis another commentthis another commentthis another commentthis another commentthis another commentthis another commentthis another co', '17772566435.png', 1683436748),
(39, 132, 0, 'service', 'Admin', 'admin@gmail.com', 'this is new 2', '17772566435.png', 1683436833),
(39, 133, 0, 'service', 'Admin', 'admin@gmail.com', 'ok good', '17772566435.png', 1683436844),
(52, 134, 0, 'product', 'Admin', 'admin@gmail.com', 'This is for comment', '17772566435.png', 1683438212),
(39, 135, 0, 'service', 'Admin', 'admin@gmail.com', 'is it ok?\r\n', '17772566435.png', 1683436748),
(41, 136, 0, 'product', 'Admin', 'admin@gmail.com', 'nice', '17772566435.png', 1683612105),
(41, 137, 0, 'product', 'Admin', 'admin@gmail.com', 'good website', '17772566435.png', 1683612210);

-- --------------------------------------------------------

--
-- Table structure for table `deposit`
--

CREATE TABLE `deposit` (
  `id` int(255) NOT NULL,
  `pid` int(255) NOT NULL,
  `method` varchar(255) NOT NULL,
  `pmn_address` varchar(255) NOT NULL,
  `tr_id` varchar(255) NOT NULL,
  `amount` int(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Pending',
  `notify` varchar(255) NOT NULL DEFAULT 'New',
  `time` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `deposit`
--

INSERT INTO `deposit` (`id`, `pid`, `method`, `pmn_address`, `tr_id`, `amount`, `status`, `notify`, `time`) VALUES
(38, 1, 'Bkash', '2548', '2555', 203500, 'Success', 'Old', 1682660508),
(39, 1, 'Bkash', '2548', '2555', 203500, 'Success', 'Old', 1682660508),
(46, 1, 'Paypal', 'sdfd', 'sdf', 5000, 'Success', 'Old', 1685972611);

-- --------------------------------------------------------

--
-- Table structure for table `footer_1_2`
--

CREATE TABLE `footer_1_2` (
  `id` int(255) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `facebook_url` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `youtube_url` varchar(255) NOT NULL,
  `textarea` longtext NOT NULL,
  `copy_right` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `footer_1_2`
--

INSERT INTO `footer_1_2` (`id`, `file_name`, `facebook`, `facebook_url`, `youtube`, `youtube_url`, `textarea`, `copy_right`) VALUES
(1, 'logo.png', 'facebook', 'facebook.com', 'youtube', 'youtube.com', '<p><span style=\"font-family: Rubik, sans-serif;\">Bangladeshi Software is the biggest Software Company In Bangladesh. We provide Desktop &amp; Android Software. We Provide 100 Percent Customer Satisfaction</span></p>', '<span style=\"color: rgb(55, 65, 81); font-family: Rubik, sans-serif; font-size: 16px; text-align: right;\">All Rights Reserved © <b>Bangladeshi Software</b> <b>2022 SHAMIMLEM</b>.</span>');

-- --------------------------------------------------------

--
-- Table structure for table `footer_3_4_5`
--

CREATE TABLE `footer_3_4_5` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `footer_3_4_5`
--

INSERT INTO `footer_3_4_5` (`id`, `title`, `url`, `type`, `status`) VALUES
(36, 'Cookies Policy', 'Cookies Policy', 'F3', 'Publish'),
(37, 'Privacy Policy', 'Privacy Policy', 'F3', 'Publish'),
(40, 'shamimlem@yahoo.com', 'shamimlem@yahoo.com', 'F4', 'Publish'),
(42, 'Products', 'Products', 'F5', 'Publish'),
(43, ' Services', ' Services', 'F5', 'Publish'),
(44, 'Investor', 'Investor', 'F5', 'Publish'),
(45, ' Reselle', ' Reselle', 'F5', 'Publish'),
(46, 'sdfd', 'fdsfdsf', 'F4', 'Publish');

-- --------------------------------------------------------

--
-- Table structure for table `general_setting`
--

CREATE TABLE `general_setting` (
  `id` int(255) NOT NULL,
  `header_social_link` varchar(255) NOT NULL,
  `review_product` varchar(255) NOT NULL,
  `share_product` varchar(255) NOT NULL,
  `related_product` varchar(255) NOT NULL,
  `review_service` varchar(255) NOT NULL,
  `share_service` varchar(255) NOT NULL,
  `related_service` varchar(255) NOT NULL,
  `ad_show` varchar(255) NOT NULL,
  `team_social` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `general_setting`
--

INSERT INTO `general_setting` (`id`, `header_social_link`, `review_product`, `share_product`, `related_product`, `review_service`, `share_service`, `related_service`, `ad_show`, `team_social`) VALUES
(1, 'unchecked', 'unchecked', 'unchecked', 'unchecked', 'unchecked', 'unchecked', 'unchecked', 'unchecked', 'unchecked');

-- --------------------------------------------------------

--
-- Table structure for table `investor_docs`
--

CREATE TABLE `investor_docs` (
  `id` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `pices` longtext NOT NULL,
  `unablable` longtext NOT NULL,
  `before_submit` longtext NOT NULL,
  `after_submit` longtext NOT NULL,
  `accept_submit` longtext NOT NULL,
  `reject_submit` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `investor_docs`
--

INSERT INTO `investor_docs` (`id`, `discount`, `pices`, `unablable`, `before_submit`, `after_submit`, `accept_submit`, `reject_submit`) VALUES
(1, 100, '10', 'যদি আপনার বিনিয়োগকারী প্রোগ্রামে একটি নির্দিষ্ট বিনিয়োগের সুযোগ না পাওয়া যায়, তবে এটি বিভিন্ন কারণের কারণে হতে পারে যেমন সীমিত সংখ্যক উপলব্ধ শেয়ার, নিয়ন্ত্রক বিধিনিষেধ বা অন্যান্য নির্দিষ্ট প্রয়োজনীয়তা। আমরা এর ফলে সৃষ্ট অসুবিধার জন্য ক্ষমাপ্রার্থী। যাইহোক, আমরা আপনাকে আমাদের প্রোগ্রামের মাধ্যমে উপলব্ধ অন্যান্য বিনিয়োগের সুযোগগুলি অন্বেষণ করতে উত্সাহিত করি। আমাদের দল আমাদের বিনিয়োগকারীদের লক্ষ্য এবং মূল্যের সাথে সারিবদ্ধ উচ্চ-মানের বিনিয়োগ বিকল্পগুলি সনাক্ত করতে এবং অফার করার জন্য নিবেদিত৷ আমরা বিশ্বাস করি যে আপনার বিনিয়োগের পোর্টফোলিওকে বৈচিত্র্যময় করে আপনি ঝুঁকি কমাতে পারেন এবং সর্বোচ্চ আয় করতে পারেন। আমাদের বিনিয়োগকারী প্রোগ্রাম বা উপলব্ধ বিনিয়োগের সুযোগ সম্পর্কে আপনার কোন প্রশ্ন বা উদ্বেগ থাকলে, অনুগ্রহ করে আমাদের সাথে যোগাযোগ করতে দ্বিধা করবেন না। আমাদের টিম সবসময় আপনাকে তথ্য বিনিয়োগের সিদ্ধান্ত নিতে এবং আপনার আর্থিক লক্ষ্য অর্জনে সহায়তা করার জন্য উপলব্ধ।', '<div style=\"--tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(59 130 246 / 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ;\">আমরা আমাদের বিনিয়োগকারী প্রোগ্রামের মাধ্যমে বিনিয়োগের বিভিন্ন সুযোগ প্রদান করতে পেরে আনন্দিত। আমাদের বিনিয়োগের বিকল্পগুলির যত্ন সহকারে কিউরেট করা নির্বাচন আমাদের বিনিয়োগকারীদের তাদের মূল্যবোধ এবং লক্ষ্যগুলির সাথে সামঞ্জস্য রেখে শক্তিশালী রিটার্নের সম্ভাবনা প্রদান করার জন্য ডিজাইন করা হয়েছে।</div><div style=\"--tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(59 130 246 / 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ;\"><br style=\"--tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(59 130 246 / 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ;\"></div><div style=\"--tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(59 130 246 / 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ;\">আপনি ইক্যুইটি বিনিয়োগ, ক্রাউডফান্ডিং প্রচারাভিযান, বা অন্যান্য বিনিয়োগের বিকল্পগুলিতে আগ্রহী হন না কেন, আমাদের প্রোগ্রামটি আপনার প্রয়োজন অনুসারে বিভিন্ন পছন্দের প্রস্তাব দেয়। আমাদের বিনিয়োগ বিশেষজ্ঞদের দল উচ্চ-মানের সুযোগগুলি চিহ্নিত করার জন্য নিবেদিত যা দীর্ঘমেয়াদে শক্তিশালী রিটার্ন প্রদানের সম্ভাবনা রাখে।</div><div style=\"--tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(59 130 246 / 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ;\"><br style=\"--tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(59 130 246 / 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ;\"></div><div style=\"--tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(59 130 246 / 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ;\">আমাদের প্রোগ্রামে একজন বিনিয়োগকারী হিসাবে, আপনি আর্থিক কর্মক্ষমতা, ঝুঁকি এবং বৃদ্ধির সম্ভাবনা সহ প্রতিটি বিনিয়োগের সুযোগ সম্পর্কে বিস্তারিত তথ্যের অ্যাক্সেস পাবেন। আমরা স্বচ্ছতা এবং উন্মুক্ততায় বিশ্বাস করি এবং আমাদের বিনিয়োগকারীদের তথ্য প্রদানের জন্য প্রতিশ্রুতিবদ্ধ যে তাদের বিনিয়োগের সিদ্ধান্ত নেওয়ার জন্য প্রয়োজন।</div><div style=\"--tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(59 130 246 / 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ;\"><br style=\"--tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(59 130 246 / 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ;\"></div><div style=\"--tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(59 130 246 / 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ;\">আপনি যদি আমাদের প্রোগ্রামের মাধ্যমে উপলব্ধ বিনিয়োগের সুযোগগুলি অন্বেষণ করতে আগ্রহী হন তবে আমরা আপনাকে আজই আমাদের সাথে যোগাযোগ করতে উত্সাহিত করি। আমাদের টিম আপনার যেকোনো প্রশ্নের উত্তর দিতে এবং স্মার্ট, কৌশলগত বিনিয়োগের মাধ্যমে আপনার আর্থিক লক্ষ্য অর্জনে সহায়তা করার জন্য সর্বদা উপলব্ধ।</div>', '<div>আমাদের বিনিয়োগকারী প্রোগ্রামে আপনার আবেদন জমা দেওয়ার জন্য আপনাকে ধন্যবাদ। আমরা আপনার আবেদন পর্যালোচনা করতে এবং সম্ভাব্য বিনিয়োগের সুযোগের জন্য আপনাকে বিবেচনা করতে আগ্রহী।</div><div><br></div><div>আমরা আমাদের বিনিয়োগকারীদের লক্ষ্য এবং মূল্যবোধের সাথে সামঞ্জস্য করছি কিনা তা নিশ্চিত করতে আমাদের দল প্রতিটি আবেদনকে যত্ন সহকারে মূল্যায়ন করে। যদি আপনার আবেদন আমাদের মানদণ্ড পূরণ করে, তাহলে আমরা উপলব্ধ বিনিয়োগের সুযোগ সম্পর্কে আরও তথ্যের সাথে আপনার সাথে যোগাযোগ করব।</div><div><br></div><div>অনুগ্রহ করে মনে রাখবেন যে পর্যালোচনা প্রক্রিয়ায় কিছু সময় লাগতে পারে, কারণ আমরা আগ্রহী বিনিয়োগকারীদের কাছ থেকে অনেক আবেদন পেয়েছি। আমরা আপনার ধৈর্য এবং বোঝার প্রশংসা করি কারণ আমরা প্রতিটি আবেদনকে যত্ন সহকারে মূল্যায়ন করি।</div><div><br></div><div>ইতিমধ্যে, আমরা আপনাকে আমাদের ওয়েবসাইট অন্বেষণ করতে এবং আমাদের বিনিয়োগকারী প্রোগ্রাম এবং আমরা যে বিনিয়োগের সুযোগগুলি অফার করি সে সম্পর্কে আরও জানতে উত্সাহিত করি৷ আপনার আবেদন বা আমাদের প্রোগ্রাম সম্পর্কে আপনার কোন প্রশ্ন বা উদ্বেগ থাকলে, আমাদের সাথে যোগাযোগ করতে দ্বিধা করবেন না। আমাদের টিম সবসময় আপনাকে তথ্য বিনিয়োগের সিদ্ধান্ত নিতে এবং আপনার আর্থিক লক্ষ্য অর্জনে সহায়তা করার জন্য উপলব্ধ।</div>', '<div>অভিনন্দন, আমাদের বিনিয়োগকারী প্রোগ্রামে আপনার আবেদন গৃহীত হয়েছে! আমরা আপনাকে আমাদের বিনিয়োগকারীদের সম্প্রদায়ে স্বাগত জানাতে পেরে রোমাঞ্চিত এবং আপনার আর্থিক লক্ষ্য অর্জনের জন্য আপনার সাথে কাজ করার জন্য উন্মুখ।</div><div><br></div><div>একজন স্বীকৃত বিনিয়োগকারী হিসেবে, আপনি আমাদের বিনিয়োগ বিশেষজ্ঞদের দল দ্বারা যত্ন সহকারে তৈরি করা বিনিয়োগের সুযোগের বিস্তৃত পরিসরে অ্যাক্সেস পাবেন। আমরা আমাদের বিনিয়োগকারীদের বিকল্পগুলি অফার করতে বিশ্বাস করি যা তাদের মূল্যবোধ এবং লক্ষ্যগুলির সাথে সামঞ্জস্যপূর্ণ, পাশাপাশি শক্তিশালী রিটার্নের সম্ভাবনাও প্রদান করে।</div><div><br></div><div>আমরা আপনাকে আমাদের প্রোগ্রামের মাধ্যমে উপলব্ধ সর্বশেষ বিনিয়োগের সুযোগগুলি সম্পর্কে অবগত রাখব, এবং আপনাকে তথ্যযুক্ত বিনিয়োগ সিদ্ধান্ত নিতে সাহায্য করার জন্য প্রতিটি সুযোগ সম্পর্কে বিশদ তথ্য সরবরাহ করব। আমাদের টিম আপনার যেকোন প্রশ্নের উত্তর দিতে এবং আপনার উদ্দেশ্যগুলির সাথে সারিবদ্ধ বিনিয়োগের কৌশলগুলির নির্দেশিকা প্রদান করতে সর্বদা উপলব্ধ।</div><div><br></div><div>আমরা বিশ্বাস করি যে স্বচ্ছতা এবং উন্মুক্ত যোগাযোগ একটি সফল বিনিয়োগ পোর্টফোলিও তৈরির মূল চাবিকাঠি, এবং আমরা আমাদের বিনিয়োগকারীদের তাদের আর্থিক লক্ষ্য অর্জনের জন্য প্রয়োজনীয় তথ্য এবং সহায়তা প্রদান করতে প্রতিশ্রুতিবদ্ধ।</div><div><br></div><div>আমাদের সাথে বিনিয়োগ করার জন্য আপনাকে আবার ধন্যবাদ. আমরা একটি দীর্ঘ এবং সফল অংশীদারিত্বের জন্য উন্মুখ।</div>', '<div>আমাদের বিনিয়োগকারী প্রোগ্রামে আপনার আগ্রহের জন্য আপনাকে ধন্যবাদ। আমরা আপনার আবেদনে আপনি যে সময় এবং প্রচেষ্টার প্রশংসা করি। যাইহোক, সাবধানে বিবেচনা করার পরে, আমরা আপনাকে জানাতে দুঃখিত যে আপনার আবেদন এই সময়ে গৃহীত হয়নি।</div><div><br></div><div>অনুগ্রহ করে মনে রাখবেন যে আমরা সম্ভাব্য বিনিয়োগকারীদের কাছ থেকে প্রচুর সংখ্যক আবেদন পেয়েছি এবং আমাদের কাছে সীমিত সংখ্যক বিনিয়োগের সুযোগ রয়েছে। আমরা আমাদের বিনিয়োগকারীদের লক্ষ্য এবং মূল্যবোধের সাথে সামঞ্জস্য করছি কিনা তা নিশ্চিত করতে আমাদের দল প্রতিটি আবেদনের যত্ন সহকারে মূল্যায়ন করে এবং দুর্ভাগ্যবশত, আমরা সমস্ত আবেদন গ্রহণ করতে সক্ষম নই।</div><div><br></div><div>আমরা আপনাকে আপনার জন্য উপলব্ধ অন্যান্য বিনিয়োগের সুযোগগুলি অন্বেষণ চালিয়ে যেতে এবং ভবিষ্যতের বিনিয়োগের সুযোগগুলির জন্য আমাদের ওয়েবসাইটে নজর রাখতে উত্সাহিত করি যা আপনার লক্ষ্য এবং মূল্যবোধের জন্য আরও উপযুক্ত হতে পারে।</div><div><br></div><div>আপনার আবেদন বা আমাদের বিনিয়োগকারী প্রোগ্রাম সম্পর্কে আপনার কোন প্রশ্ন বা উদ্বেগ থাকলে, অনুগ্রহ করে আমাদের সাথে যোগাযোগ করতে দ্বিধা করবেন না। আপনাকে আপনার আর্থিক লক্ষ্য অর্জনে সহায়তা করার জন্য প্রতিক্রিয়া এবং নির্দেশিকা প্রদান করতে আমরা সর্বদা খুশি।</div><div><br></div><div>আমাদের প্রোগ্রামে আপনার আগ্রহের জন্য আপনাকে আবার ধন্যবাদ, এবং আমরা আপনার ভবিষ্যত বিনিয়োগ প্রচেষ্টার জন্য আপনাকে শুভকামনা জানাই।</div>');

-- --------------------------------------------------------

--
-- Table structure for table `limit_setting`
--

CREATE TABLE `limit_setting` (
  `id` int(255) NOT NULL,
  `min_deposit` int(255) NOT NULL,
  `max_deposit` int(255) NOT NULL,
  `min_withdraw` int(255) NOT NULL,
  `max_withdraw` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `limit_setting`
--

INSERT INTO `limit_setting` (`id`, `min_deposit`, `max_deposit`, `min_withdraw`, `max_withdraw`) VALUES
(1, 100, 100000, 100, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `mail`
--

CREATE TABLE `mail` (
  `id` int(255) NOT NULL,
  `method` varchar(255) NOT NULL,
  `host` varchar(255) NOT NULL,
  `port` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `security` varchar(255) NOT NULL,
  `contact_mail` varchar(255) NOT NULL,
  `reply_mail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `mail`
--

INSERT INTO `mail` (`id`, `method`, `host`, `port`, `username`, `password`, `security`, `contact_mail`, `reply_mail`) VALUES
(1, 'PHP Mail', 'mail.tentheme.com', 465, 'help@tentheme.com', 'c+ZLeV9drwih', 'SSL', 'mail.tentheme.com', 'mail.tentheme.com');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(255) NOT NULL,
  `pid` int(255) NOT NULL,
  `order_id` int(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `pmn_type` varchar(255) NOT NULL,
  `pmn_method` varchar(255) NOT NULL,
  `pmn_address` varchar(255) NOT NULL,
  `pmn_transection` varchar(255) NOT NULL,
  `pmn_amount` int(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Pending',
  `notify` varchar(255) NOT NULL DEFAULT 'New',
  `time` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `pid`, `order_id`, `type`, `pmn_type`, `pmn_method`, `pmn_address`, `pmn_transection`, `pmn_amount`, `status`, `notify`, `time`) VALUES
(104, 1, 5834304, 'product', 'Fund', 'Fund', 'Fund', 'Fund', 5000, 'Success', 'New', 1685985698),
(105, 1, 4243604, 'product', 'Fund', 'Fund', 'Fund', 'Fund', 5000, 'Success', 'New', 1685986667);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(255) NOT NULL,
  `pg_name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `status` varchar(255) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pagination`
--

CREATE TABLE `pagination` (
  `id` int(11) NOT NULL,
  `blog_page` int(11) NOT NULL,
  `blog_category` int(11) NOT NULL,
  `blog_search` int(11) NOT NULL,
  `product_page` int(11) NOT NULL,
  `service_page` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pagination`
--

INSERT INTO `pagination` (`id`, `blog_page`, `blog_category`, `blog_search`, `product_page`, `service_page`) VALUES
(1, 10, 16, 10, 10, 10);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(255) NOT NULL,
  `pmn_method` varchar(255) NOT NULL DEFAULT 'payment.png',
  `description` longtext NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `pmn_method`, `description`, `file_name`, `status`) VALUES
(1, 'Payoneer', 'payoneer@mail.com', 'payoneer.png', 'Enable'),
(2, 'Paypal', 'paypal@mail.com', 'paypal.png', 'Enable'),
(3, 'Bkash', '<div class=\"bg-[#cf2771] text-gray-200 p-5 rounded shadow\">\n    <ul class=\"list-decimal px-5 space-y-3\">\n        <li class=\"border-b pb-3 border-b-[#55555555] text-xs md:text-sm\"><b class=\"text-yellow-500 text-lg\"> *247# </b> ডায়াল করে আপনার Bkash মোবাইল মেনুতে যান অথবা Bkash অ্যাপে যান।</li>\n        <li class=\"border-b pb-3 border-b-[#55555555] text-xs md:text-sm\">\"Send Money\" -এ ক্লিক করুন।</li>\n        <li class=\"border-b pb-3 border-b-[#55555555] text-xs md:text-sm\">\n            <div class=\"flex flex-wrap items-center gap-x-1\"><span>প্রাপক নম্বর হিসেবে এই নম্বরটি লিখুনঃ</span><b>01870844688</b><b class=\"text-yellow-500 text-lg\">01870844688</b><button type=\"button\" class=\"bg-black px-3 py-1 text-blue-100 text-xs rounded focus:ring-2 bg-opacity-50\"><svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"copy\" class=\"svg-inline--fa fa-copy \" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 512\">\n                        <path fill=\"currentColor\" d=\"M224 0c-35.3 0-64 28.7-64 64V288c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64H224zM64 160c-35.3 0-64 28.7-64 64V448c0 35.3 28.7 64 64 64H288c35.3 0 64-28.7 64-64V384H288v64H64V224h64V160H64z\"></path>\n                    </svg><span class=\"ml-1\">Copy</span></button></div>\n        </li>\n        <li class=\"border-b pb-3 border-b-[#55555555] text-xs md:text-sm\">টাকার পরিমাণঃ<b class=\"text-yellow-500 text-lg ml-1\">৳1500</b></li>\n        <li class=\"border-b pb-3 border-b-[#55555555] text-xs md:text-sm\">নিশ্চিত করতে এখন আপনার BKASH মোবাইল মেনু পিন লিখুন।</li>\n        <li class=\"border-b pb-3 border-b-[#55555555] text-xs md:text-sm\">সবকিছু ঠিক থাকলে, আপনি BKASH থেকে একটি নিশ্চিতকরণ বার্তা পাবেন।</li>\n        <li class=\"text-xs md:text-sm\">বক্সে আপনার Transaction ID & Number দিন এবং নিচের Confirm বাটনে ক্লিক করুন।</li>\n    </ul>\n</div>  ', 'bkash.png', 'Enable'),
(4, 'Nogod', '<div class=\"bg-[#cf2771] text-gray-200 p-5 rounded shadow\">     <ul class=\"list-decimal px-5 space-y-3\">         <li class=\"border-b pb-3 border-b-[#55555555] text-xs md:text-sm\"><b class=\"text-yellow-500 text-lg\"> *247# </b> ডায়াল করে আপনার Bkash মোবাইল মেনুতে যান অথবা Bkash অ্যাপে যান।</li>         <li class=\"border-b pb-3 border-b-[#55555555] text-xs md:text-sm\">\"Send Money\" -এ ক্লিক করুন।</li>         <li class=\"border-b pb-3 border-b-[#55555555] text-xs md:text-sm\">             <div class=\"flex flex-wrap items-center gap-x-1\"><span>প্রাপক নম্বর হিসেবে এই নম্বরটি লিখুনঃ</span><b>01870844688</b><b class=\"text-yellow-500 text-lg\">01870844688</b><button type=\"button\" class=\"bg-black px-3 py-1 text-blue-100 text-xs rounded focus:ring-2 bg-opacity-50\"><svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"copy\" class=\"svg-inline--fa fa-copy \" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 512\">                         <path fill=\"currentColor\" d=\"M224 0c-35.3 0-64 28.7-64 64V288c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64H224zM64 160c-35.3 0-64 28.7-64 64V448c0 35.3 28.7 64 64 64H288c35.3 0 64-28.7 64-64V384H288v64H64V224h64V160H64z\"></path>                     </svg><span class=\"ml-1\">Copy</span></button></div>         </li>         <li class=\"border-b pb-3 border-b-[#55555555] text-xs md:text-sm\">টাকার পরিমাণঃ<b class=\"text-yellow-500 text-lg ml-1\">৳1500</b></li>         <li class=\"border-b pb-3 border-b-[#55555555] text-xs md:text-sm\">নিশ্চিত করতে এখন আপনার BKASH মোবাইল মেনু পিন লিখুন।</li>         <li class=\"border-b pb-3 border-b-[#55555555] text-xs md:text-sm\">সবকিছু ঠিক থাকলে, আপনি BKASH থেকে একটি নিশ্চিতকরণ বার্তা পাবেন।</li>         <li class=\"text-xs md:text-sm\">বক্সে আপনার Transaction ID &amp; Number দিন এবং নিচের Confirm বাটনে ক্লিক করুন।</li>     </ul> </div>', 'nogod.png', 'Enable'),
(5, 'Bank', '<div class=\"text-dark\"><h4>পেমেন্ট&nbsp;</h4>\n<p>পেমেন্ট সেবার মাধ্যমে, বিকাশ গ্রহণ করে এমন যেকোনো মার্চেন্টকে আপনি পেমেন্ট করতে পারেন আপনার বিকাশ একাউন্ট থেকে। এখন আপনি দেশজুড়ে ৪৭,০০০-এর বেশি দোকানে কেনাকাটার পেমেন্ট বিকাশ করতে পারবেন।</p>\n<h4>পেমেন্ট বিকাশ করতে নিচের ধাপগুলো অনুসরণ করুন:-</h4>\n<p>১. *২৪৭# ডায়াল করে বিকাশ মোবাইল মেন্যুতে যান</p>\n<p>২. “পেমেন্ট” সিলেক্ট করুন</p>\n<p>৩. আপনি যে মার্চেন্টকে পেমেন্ট করতে চান তার মার্চেন্ট বিকাশ একাউন্ট নাম্বার দিন</p>\n<p>৪. আপনি যে পরিমাণ টাকা পেমেন্ট করতে চান তার পরিমাণ লিখুন</p>\n<p>৫. আপনার কেনাকাটার একটি রেফারেন্স দিন (আপনি আপনার লেনদেনের উদ্দেশ্য একটি শব্দের মধ্যে উল্লেখ করতে পারেন, উদাহরণস্বরূপ, বিল)*</p>\n<p>৬. কাউন্টার নাম্বারটি লিখুন (কাউন্টারে অবস্থানরত বিক্রেতা আপনাকে নাম্বারটি বলে দেবেন)*</p>\n<p>৭. আপনার বিকাশ মোবাইল মেন্যু পিন নাম্বারটি দিয়ে পেমেন্ট সম্পন্ন করুন</p>\n<p>আপনি বিকাশ থেকে একটি কনফার্মেশন মেসেজ পাবেন।</p>\n<p>*যদি রেফারেন্স বা কাউন্টার নাম্বার কিংবা দুটোই প্রযোজ্য না হয়, তাহলে আপনি এই ধাপগুলো “০” প্রবেশ করিয়ে এড়িয়ে যান।</p></div>', 'bank.webp', 'Enable'),
(16, 'sfdsf', '<p>sdff</p>', '', 'Enable');

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(300) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'User',
  `file_name` varchar(255) NOT NULL DEFAULT 'avatar.jpg',
  `balance` int(255) NOT NULL,
  `reseller` varchar(255) NOT NULL,
  `investor` varchar(255) NOT NULL DEFAULT 'unablable',
  `total_order` int(255) NOT NULL,
  `investor_order` int(255) NOT NULL,
  `investor_time` int(255) NOT NULL,
  `notify` varchar(255) NOT NULL DEFAULT 'New',
  `time` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`id`, `name`, `phone`, `address`, `email`, `password`, `role`, `file_name`, `balance`, `reseller`, `investor`, `total_order`, `investor_order`, `investor_time`, `notify`, `time`) VALUES
(1, 'Admin', '1234558', 'Sirajganj, Dhaka, Bangladesh', 'admin@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Admin', 'cort-tie.jpg', 934210, '', '', 15, 0, 0, 'Old', 1670579900),
(31, 'khan', '01236445', '', 'khan@gmail.com', '9e95f6d797987b7da0fb293a760fe57e', 'User', 'avatar.jpg', 0, '', '', 0, 0, 0, 'Old', 1685794759);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(255) NOT NULL,
  `pid` int(255) NOT NULL,
  `file_name` varchar(255) NOT NULL DEFAULT 'image.png',
  `title` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `summery` longtext NOT NULL,
  `content` longtext NOT NULL,
  `status` varchar(255) NOT NULL,
  `time` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `pid`, `file_name`, `title`, `category`, `summery`, `content`, `status`, `time`) VALUES
(15, 1, 'ecommerce-app-and-website-1536x654.webp', 'Ecommerce Website And Apps 10,000 BDT', 'Html', '   <p><span style=\"color: rgb(133, 135, 135); font-family: Rubik, sans-serif; font-size: 16px; background-color: rgb(245, 247, 247);\">আমরা আপনাকে দিচ্ছি রেডিমেড ইকোমার্স ওয়েবসাইট ও অ্যাপলিকেশন। আমাদের ডেলিভারির সময় ৩-৭ দিন । আপনি আপনার , যেকোন দোকানের পন্যকে সারা-বাংলাদেশ ব্যাপি অনলাইনে বেচাকিনার জন্য আপনার ব্যাবসাকে ঘরে থেকেই পরিচালনা করার জন্য আমাদের কাছে এখনি ওয়েবসাইট ও অ্যাপসের জন্য অর্ডার করতে পারেন। এর জন্য একটা ওয়েবসাইট থাকলে আপনি আপনার পরিচিতি বাড়াইতে পারবেন। আমাদের সেবা নিতে পারেন আসা করি কাজে দিবে । আমরা সাধারনত যেকোন ওয়বসাইট মাত্র ৫০০০ হাজার টাকায় তৈরি করে দেই। এবং ইকোমার্স অ্যাপস ৫০০০ হাজার টাকায় তৈরী করে দেই।</span><br></p>', '   <p style=\"font-family: Rubik, sans-serif; font-size: 16px; line-height: 1.52em; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word; margin-top: 0em; margin-bottom: 1.2em; color: rgb(133, 135, 135); background-color: rgb(245, 247, 247);\">আমরা আপনাকে দিচ্ছি রেডিমেড ইকোমার্স ওয়েবসাইট ও অ্যাপলিকেশন। আমাদের ডেলিভারির সময় ৩-৭ দিন । আপনি আপনার , যেকোন দোকানের পন্যকে সারা-বাংলাদেশ ব্যাপি অনলাইনে বেচাকিনার জন্য আপনার ব্যাবসাকে ঘরে থেকেই পরিচালনা করার জন্য আমাদের কাছে এখনি ওয়েবসাইট ও অ্যাপসের জন্য অর্ডার করতে পারেন। এর জন্য একটা ওয়েবসাইট থাকলে আপনি আপনার পরিচিতি বাড়াইতে পারবেন। আমাদের সেবা নিতে পারেন আসা করি কাজে দিবে । আমরা সাধারনত যেকোন ওয়বসাইট মাত্র ৫০০০ হাজার টাকায় তৈরি করে দেই। এবং ইকোমার্স অ্যাপস ৫০০০ হাজার টাকায় তৈরী করে দেই।</p><h4 class=\"wp-block-heading\" style=\"font-family: Rubik, sans-serif; font-size: 1.875em; line-height: 1.333em; font-weight: 400; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word; margin-top: 2.1em; margin-bottom: 1.04em; color: rgb(29, 32, 32); background-color: rgb(245, 247, 247);\">Why Discount Offer</h4><p style=\"font-family: Rubik, sans-serif; font-size: 16px; line-height: 1.52em; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word; margin-top: 0em; margin-bottom: 1.2em; color: rgb(133, 135, 135); background-color: rgb(245, 247, 247);\">এই ধরনের ইকোমার্স সাইট বা অ্যাপ্লিকেশন সিস্টেমের দাম প্রচুর (৪০ হাজার থেকে ৮০ হাজার শুধু ওয়েবসাইট), যা অনেকের সাধ্যের বাইরে তাই সবার আশা পুরনের লক্ষে সবার উপকারের সার্থে আমাদের এই প্রচস্টা । বাংলাদেশি সফটওয়্যার কোম্পানি সবসময় অল্প টাকায় সবচেয়ে ভালো সার্ভিস দিয়ে থাকে। মানুষকে হেলপ করা মানুষের উপকার করা এটাই আমাদের কোম্পানির মুল লক্ষ্য। আমাদের কাছে টাকা বড় নয়, সার্ভিস টাই বড় চোখে দেখি আমরা।</p><h4 class=\"wp-block-heading\" id=\"item-description__tour-operator-wordpress-theme\" style=\"font-family: Rubik, sans-serif; font-size: 1.875em; line-height: 1.333em; font-weight: 400; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word; margin-top: 2.1em; margin-bottom: 1.04em; color: rgb(29, 32, 32); background-color: rgb(245, 247, 247);\">Why need Website?</h4><p style=\"font-family: Rubik, sans-serif; font-size: 16px; line-height: 1.52em; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word; margin-top: 0em; margin-bottom: 1.2em; color: rgb(133, 135, 135); background-color: rgb(245, 247, 247);\">আপনার ওয়েবসাইট-ই আপনার অফিস। ধরুন আপনার অফিস এর লোকেশান ভাল নয় কিংবা অফিসে আপনার সব কাজের নমুনা দেখানোর মতো সুযোগ নেই। সেক্ষেত্রে একটি সাজানো-গোছানো ওয়েবসাইটই কিন্তু হতে পারে আপনার সব নমুনা কাজ দেখানোর উপযুক্ত মাধ্যম। এছাড়া বিশ্বের যেকোন প্রান্ত থেকে আপনার অফিসের কাজের তদারকি করতে একটি ওয়েবসাইটের বিকল্প নেই। গ্রাহক সেবা ব্যবসার উন্নতির আরেকটি গুরুত্বপূর্ণ মাধ্যম। গ্রাহককে দ্রুত ও কার্যকর সমাধান প্রধানের ক্ষেত্রে আপনার ওয়েবসাইটটি হতে পারে আপনার প্রতিষ্ঠানের কাস্টমার ম্যানেজার। সেক্ষেত্রে একটি ভাল মানের ওয়েবসাইট অটোমেটিক পদ্ধতিতে আপনার গ্রাহকের সমস্যার সমাধানে একটি কার্যকরি হাতিয়ার হয়ে উঠতে পারে।</p><h3 class=\"wp-block-heading\" id=\"item-description__-our-travel-agency-wordpress-theme\" style=\"font-family: Rubik, sans-serif; font-size: 2.188em; line-height: 1.286em; font-weight: 400; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word; margin-top: 1.96em; margin-bottom: 1.03em; color: rgb(29, 32, 32); background-color: rgb(245, 247, 247);\">Website Requirements</h3><ol style=\"font-family: Rubik, sans-serif; font-size: 16px; line-height: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word; padding-left: 1.5em; margin-top: 0em; margin-bottom: 1.2em; color: rgb(133, 135, 135); background-color: rgb(245, 247, 247);\"><li style=\"font-family: inherit; line-height: inherit; font-weight: inherit; font-style: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word;\">ডোমেইন লাগবে , আপনার যদি ডোমেইন না ক্রয় করা থাকে আপনি আমাদের সাথে ফোনে যোগাযোগ করে ডোমেইন ক্রয় করে নিতে পারবেন।</li><li style=\"font-family: inherit; line-height: inherit; font-weight: inherit; font-style: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word;\">হোস্টিং লাগবে, আপনার যদি হোস্টিং ক্রয় করা না থাকে তাহলে আমাদের কাছে ক্রয় করে নিতে পারেন।</li><li style=\"font-family: inherit; line-height: inherit; font-weight: inherit; font-style: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word;\">লোগো , অফিস অ্যাড্রেস , ডেসক্রিপশন , এবং প্রয়োজনিয় তথ্য দিতে হবে যেমন এবাউট , কন্টাক্ট , প্রাইভেসি , টার্মস এন্ড কন্ডিশনে কি কি থাকবে ইত্যাদি ।</li></ol><h4 class=\"wp-block-heading\" style=\"font-family: Rubik, sans-serif; font-size: 1.875em; line-height: 1.333em; font-weight: 400; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word; margin-top: 2.1em; margin-bottom: 1.04em; color: rgb(29, 32, 32); background-color: rgb(245, 247, 247);\">Website Features</h4><ul style=\"font-family: Rubik, sans-serif; font-size: 16px; line-height: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word; padding-left: 1.5em; margin-top: 0em; margin-bottom: 1.2em; color: rgb(133, 135, 135); background-color: rgb(245, 247, 247);\"><li style=\"font-family: inherit; line-height: inherit; font-weight: inherit; font-style: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word;\">খুব সুন্দর ডিজাইন (কাস্টমার ফ্রেন্ডলি) ।</li><li style=\"font-family: inherit; line-height: inherit; font-weight: inherit; font-style: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word;\">আপনার ইচ্ছামত আমরা আপনাকে ডিজাইন করে দিবো ।</li><li style=\"font-family: inherit; line-height: inherit; font-weight: inherit; font-style: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word;\">রিসপনসিভ ডিজাইন ।</li><li style=\"font-family: inherit; line-height: inherit; font-weight: inherit; font-style: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word;\">ক্লিন কোডিং ।</li><li style=\"font-family: inherit; line-height: inherit; font-weight: inherit; font-style: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word;\">বিকাশ , নগত, রকেট , ইত্যাদি পেমেন্ট ফ্রি গেটওয়ে ।</li><li style=\"font-family: inherit; line-height: inherit; font-weight: inherit; font-style: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word;\">১০ দিনের প্রিমিয়াম ফ্রি সাপোর্ট । আলাদা ভাবে যেকোন ধরনের সাপোর্টের জন্য আপনাকে আলাদা ভাবে পেমেন্ট করতে হবে।</li><li style=\"font-family: inherit; line-height: inherit; font-weight: inherit; font-style: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word;\">যেকোন ফ্রেমওয়ার্কে আপনাকে আমরা ডিজাইন করে দিতে পারবো ।</li><li style=\"font-family: inherit; line-height: inherit; font-weight: inherit; font-style: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word;\">সুপার লোডিং স্পিড ।</li><li style=\"font-family: inherit; line-height: inherit; font-weight: inherit; font-style: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word;\">আপনি আপনার ওয়েবসাইট যদি নিজেই মেইনটেনেন্স করতে চান , এগুলো আমরা আপনাকে সব কিছু টিম ভিউয়ার বা এনিডেক্সের সাহায্যে শিখিয়ে দিতে পারবো এইজন্য আপনাকে আলাদা চার্জ দিতে হবে ।</li><li style=\"font-family: inherit; line-height: inherit; font-weight: inherit; font-style: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word;\">১ মাসের মধ্যে ওয়েবসাইটে যেকোন প্রকার প্রবলেম বা ইরোর দেখা দিলে আমরা আপনাকে ফ্রিতেই সমাধান করে দিবো ।</li><li style=\"font-family: inherit; line-height: inherit; font-weight: inherit; font-style: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word;\">আপনি যদি সারাবছর আপনার ওয়েবসাইটের জন্য মেইনটেন্স করার জন্য আমাদের সাথে চুক্তিবদ্ধ হতে পারেন। এইজন্য আপনাকে আলাদা চার্জ দিতে হবে।</li></ul><h4 class=\"wp-block-heading\" style=\"font-family: Rubik, sans-serif; font-size: 1.875em; line-height: 1.333em; font-weight: 400; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word; margin-top: 2.1em; margin-bottom: 1.04em; color: rgb(29, 32, 32); background-color: rgb(245, 247, 247);\">Dollar Buy Sell Script Details</h4><figure class=\"wp-block-table alignwide is-style-regular\" style=\"border-style: initial; border-color: initial; border-image: initial; padding: 0px; overflow: auto hidden; position: relative; max-width: 100%; display: flex; flex-direction: column; align-items: center; justify-content: flex-start; color: rgb(133, 135, 135); font-family: Rubik, sans-serif; font-size: 16px; background-color: rgb(245, 247, 247);\"><table class=\"has-background\" style=\"font-family: inherit; line-height: inherit; font-weight: inherit; font-style: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word; width: 681.641px; background-color: rgb(252, 240, 239);\"><tbody style=\"font-family: inherit; line-height: inherit; font-weight: inherit; font-style: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word;\"><tr style=\"font-family: inherit; line-height: inherit; font-weight: inherit; font-style: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word;\"><td style=\"font-family: inherit; line-height: inherit; font-style: inherit; border-color: rgb(229, 232, 232); outline-style: initial; outline-width: 0px; overflow-wrap: break-word; padding: 0.5em; text-align: center; color: rgb(133, 135, 135); background-color: rgba(255, 255, 255, 0.4);\">Files Included</td><td style=\"font-family: inherit; line-height: inherit; font-style: inherit; border-color: rgb(229, 232, 232); outline-style: initial; outline-width: 0px; overflow-wrap: break-word; padding: 0.5em; text-align: center; color: rgb(133, 135, 135); background-color: rgba(255, 255, 255, 0.4);\">JavaScript JS, JavaScript JSON, HTML, CSS, PHP, SQL</td></tr><tr style=\"font-family: inherit; line-height: inherit; font-weight: inherit; font-style: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word;\"><td style=\"font-family: inherit; line-height: inherit; font-style: inherit; border-color: rgb(229, 232, 232); outline-style: initial; outline-width: 0px; overflow-wrap: break-word; padding: 0.5em; text-align: center; color: rgb(133, 135, 135); background-color: rgba(255, 255, 255, 0.2);\">Software Framework</td><td style=\"font-family: inherit; line-height: inherit; font-style: inherit; border-color: rgb(229, 232, 232); outline-style: initial; outline-width: 0px; overflow-wrap: break-word; padding: 0.5em; text-align: center; color: rgb(133, 135, 135); background-color: rgba(255, 255, 255, 0.2);\">Laravel, WordPress</td></tr><tr style=\"font-family: inherit; line-height: inherit; font-weight: inherit; font-style: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word;\"><td style=\"font-family: inherit; line-height: inherit; font-style: inherit; border-color: rgb(229, 232, 232); outline-style: initial; outline-width: 0px; overflow-wrap: break-word; padding: 0.5em; text-align: center; color: rgb(133, 135, 135); background-color: rgba(255, 255, 255, 0.4);\">Software Version</td><td style=\"font-family: inherit; line-height: inherit; font-style: inherit; border-color: rgb(229, 232, 232); outline-style: initial; outline-width: 0px; overflow-wrap: break-word; padding: 0.5em; text-align: center; color: rgb(133, 135, 135); background-color: rgba(255, 255, 255, 0.4);\">PHP 7.x, PHP 5.6, MySQL 5.x</td></tr></tbody></table></figure><h4 class=\"wp-block-heading\" style=\"font-family: Rubik, sans-serif; font-size: 1.875em; line-height: 1.333em; font-weight: 400; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word; margin-top: 2.1em; margin-bottom: 1.04em; color: rgb(29, 32, 32); background-color: rgb(245, 247, 247);\">Buy Ecommerce Website And Apps Details</h4><p style=\"font-family: Rubik, sans-serif; font-size: 16px; line-height: 1.52em; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word; margin-top: 0em; margin-bottom: 1.2em; color: rgb(133, 135, 135); background-color: rgb(245, 247, 247);\"><strong style=\"font-family: inherit; line-height: inherit; font-weight: bold; font-style: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word;\">Format</strong>: WEBSITE, Apk (if you need)<br><a href=\"price:\" style=\"line-height: inherit; font-style: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word; text-decoration: none; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; transition: color 0.3s ease 0s, background-color 0.3s ease 0s, border-color 0.3s ease 0s; color: rgb(247, 83, 137);\"><strong style=\"font-family: inherit; line-height: inherit; font-weight: bold; font-style: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word;\">Price:</strong>&nbsp;</a>10,000 BDT</p><p style=\"font-family: Rubik, sans-serif; font-size: 16px; line-height: 1.52em; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word; margin-top: 0em; margin-bottom: 1.2em; color: rgb(133, 135, 135); background-color: rgb(245, 247, 247);\"><strong style=\"font-family: inherit; line-height: inherit; font-weight: bold; font-style: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word;\">Author:&nbsp;<a href=\"https://www.bangladeshisoftware.com/team/shamim-reza/\" target=\"_blank\" rel=\"noreferrer noopener\" style=\"line-height: inherit; font-style: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word; text-decoration: none; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; transition: color 0.3s ease 0s, background-color 0.3s ease 0s, border-color 0.3s ease 0s; color: rgb(247, 83, 137);\">Shamim Reza</a></strong></p><p style=\"font-family: Rubik, sans-serif; font-size: 16px; line-height: 1.52em; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word; margin-top: 0em; margin-bottom: 1.2em; color: rgb(133, 135, 135); background-color: rgb(245, 247, 247);\">আমাদের সফটওয়্যার কোম্পানি অনেক বিশ্বস্তার সাথে কাজ করে , যেকোন প্রয়োজনে আমাদের কল করুন ০১৭১৯১৮২৫৮৬ নাম্বারে। অনলাইনের মাধ্যমে সমস্ত বাংলাদেশে আমরা সফটওয়্যার ডেলিভারি দিয়ে থাকি ।</p>', 'Publish', 1680305719),
(16, 1, 'Screenshot_3-2-1024x576.png', 'Beat Policing Website Design FREE', 'Website Setup', '    <p><span style=\"color: rgb(133, 135, 135); font-family: Rubik, sans-serif; font-size: 16px; background-color: rgb(245, 247, 247);\">আসসালামুআলাইকুম , বাংলাদেশি সফটওয়্যার এর পক্ষ থেকে শুভেচ্ছা ও অভিনন্দন গ্রহন করবেন । আমাদের প্রতিষ্ঠান টি ২০১৭ সাল থেকে সফটওয়্যার তৈরী , ওয়েবসাইট ডিজাইন, মোবাইল অ্যাপস এবং অনলাইন এপ্লিকেশন তৈরির সেবা প্রদান করে আসছি ।</span><br></p>', '    <p style=\"font-family: Rubik, sans-serif; font-size: 16px; line-height: 1.52em; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word; margin-top: 0em; margin-bottom: 1.2em; color: rgb(133, 135, 135); background-color: rgb(245, 247, 247);\"><span style=\"color: rgb(133, 135, 135); font-family: Rubik, sans-serif;\">আসসালামুআলাইকুম , বাংলাদেশি সফটওয়্যার এর পক্ষ থেকে শুভেচ্ছা ও অভিনন্দন গ্রহন করবেন । আমাদের প্রতিষ্ঠান টি ২০১৭ সাল থেকে সফটওয়্যার তৈরী , ওয়েবসাইট ডিজাইন, মোবাইল অ্যাপস এবং অনলাইন এপ্লিকেশন তৈরির সেবা প্রদান করে আসছি ।</span><br></p><p style=\"font-family: Rubik, sans-serif; font-size: 16px; line-height: 1.52em; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word; margin-top: 0em; margin-bottom: 1.2em; color: rgb(133, 135, 135); background-color: rgb(245, 247, 247);\">উল্লেখ্য যে বিশেষ সূত্রে জানতে পারি যে বাংলাদেশের প্রত্যেকটি জেলাতে জেলার বিট পুলিশিং ওয়েবসাইট তৈরীর বিষয়ে সদর দপ্তর থেকে নির্দেশনা রয়েছে আমরা উল্লেখিত বিষয়ে কাজ করতে আগ্রহি । এমোতাবস্থায়ে , সকল জেলার দায়িত্তপ্রাপ্ত মহোদয়ের দৃষ্টি প্রদানের জন্য এ সংক্রান্ত বিষয়ে বিস্তারিত প্রস্তাবনা ও নমুনা সংযুক্ত করা হলো । অতএব মহোদয়ের আপনার প্রতিষ্ঠানের সাথে সংযুক্ত প্রস্তাবনা পর্যালোচনা করে আমাদের প্রতিষ্ঠানের সেবা গ্রহন করার জন্য বিনীত অনুরোধ করা হলো ।</p><div class=\"wp-block-image\" style=\"font-family: Rubik, sans-serif; font-size: 16px; line-height: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word; border-radius: 4px; margin-bottom: 1.2em; color: rgb(133, 135, 135); background-color: rgb(245, 247, 247);\"><figure class=\"aligncenter size-large\" style=\"margin-right: auto; margin-left: auto; border-style: initial; border-color: initial; border-image: initial; padding: 0px; overflow: hidden; position: relative; max-width: 100%; display: table; flex-direction: column; align-items: center; justify-content: flex-start; clear: both; text-align: center; border-radius: 4px;\"></figure></div><p style=\"font-family: Rubik, sans-serif; font-size: 16px; line-height: 1.52em; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word; margin-top: 0em; margin-bottom: 1.2em; color: rgb(133, 135, 135); background-color: rgb(245, 247, 247);\"></p><blockquote class=\"wp-block-quote\" style=\"font-family: Rubik, sans-serif; font-size: 16px; line-height: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word; position: relative; padding: 2.2em 2.25em 2.3em 6.5em; border-radius: 5px; quotes: \" \"=\"\" \"\";=\"\" margin-top:=\"\" 2em;=\"\" margin-bottom:=\"\" color:=\"\" rgb(29,=\"\" 32,=\"\" 32)=\"\" !important;\"=\"\"><p style=\"font-family: inherit; font-size: 22px; line-height: 1.417em; font-style: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word; margin-bottom: 0px; color: rgb(29, 32, 32) !important;\">যে কোন প্রয়োজনে আমাদের ফোন করুন অথবা নিচে কনটাক ফ্রম ফিলাপ করুন। অথবা কমেন্ট করুন</p><p style=\"font-family: inherit; font-size: 22px; line-height: 1.417em; font-style: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word; margin-bottom: 0px; color: rgb(29, 32, 32) !important;\"></p></blockquote><div aria-hidden=\"true\" class=\"wp-block-spacer\" style=\"font-family: Rubik, sans-serif; font-size: 16px; line-height: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word; clear: both; color: rgb(133, 135, 135); background-color: rgb(245, 247, 247); height: 28px;\"></div><h4 class=\"wp-block-heading\" style=\"font-family: Rubik, sans-serif; font-size: 1.875em; line-height: 1.333em; font-weight: 400; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word; margin-top: 2.1em; margin-bottom: 1.04em; color: rgb(29, 32, 32); background-color: rgb(245, 247, 247);\">Website Requirements</h4><ol style=\"font-family: Rubik, sans-serif; font-size: 16px; line-height: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word; padding-left: 1.5em; margin-top: 0em; margin-bottom: 1.2em; color: rgb(133, 135, 135); background-color: rgb(245, 247, 247);\"><li style=\"font-family: inherit; line-height: inherit; font-weight: inherit; font-style: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word;\">ডোমেইন লাগবে , আপনার যদি ডোমেইন না ক্রয় করা থাকে আপনি আমাদের সাথে ফোনে যোগাযোগ করে ডোমেইন ক্রয় করে নিতে পারবেন।</li><li style=\"font-family: inherit; line-height: inherit; font-weight: inherit; font-style: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word;\">হোস্টিং লাগবে, আপনার যদি হোস্টিং ক্রয় করা না থাকে তাহলে আমাদের কাছে ক্রয় করে নিতে পারেন।</li><li style=\"font-family: inherit; line-height: inherit; font-weight: inherit; font-style: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word;\">লোগো , সকল বীটের তথ্য , ম্যাপ , অফিস্যারের ছবি , অফিস অ্যাড্রেস , ডেসক্রিপশন , এবং প্রয়োজনিয় তথ্য দিতে হবে যেমন এবাউট , কন্টাক্ট , প্রাইভেসি , টার্মস এন্ড কন্ডিশনে কি কি থাকবে ইত্যাদি ।</li></ol><h4 class=\"wp-block-heading\" style=\"font-family: Rubik, sans-serif; font-size: 1.875em; line-height: 1.333em; font-weight: 400; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word; margin-top: 2.1em; margin-bottom: 1.04em; color: rgb(29, 32, 32); background-color: rgb(245, 247, 247);\">Website Features</h4><ol style=\"font-family: Rubik, sans-serif; font-size: 16px; line-height: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word; padding-left: 1.5em; margin-top: 0em; margin-bottom: 1.2em; color: rgb(133, 135, 135); background-color: rgb(245, 247, 247);\"><li style=\"font-family: inherit; line-height: inherit; font-weight: inherit; font-style: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word;\">বীট কি , বীট পরিচিতি</li><li style=\"font-family: inherit; line-height: inherit; font-weight: inherit; font-style: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word;\">বীট কিভাবে কাজ করে গ্যালারি বা নিউসফিড</li><li style=\"font-family: inherit; line-height: inherit; font-weight: inherit; font-style: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word;\">সকল বীটের তথ্য , থানা অনুযায়ি বীট নাম্বার , বীটের ম্যাপ অফিস্যারের মোবাইল নাম্বার ও বীট অফিস্যারের ছবি।</li><li style=\"font-family: inherit; line-height: inherit; font-weight: inherit; font-style: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word;\">সুপার লোডিং স্পিড</li><li style=\"font-family: inherit; line-height: inherit; font-weight: inherit; font-style: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word;\">খুব সুন্দর ডিজাইন ।</li><li style=\"font-family: inherit; line-height: inherit; font-weight: inherit; font-style: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word;\">ক্লিন কোডিং</li><li style=\"font-family: inherit; line-height: inherit; font-weight: inherit; font-style: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word;\">মোবাইল অ্যাপলিকেশন (যদি প্রয়োজন হয়, করে দেওয়া যাবে)</li><li style=\"font-family: inherit; line-height: inherit; font-weight: inherit; font-style: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word;\">খুব সহজেই কাস্টমাইজেশন সুবিধা পাওয়া যাবে । যেকোন কিছু পরিবর্তন করা খুব সহজ ।</li></ol><h4 class=\"wp-block-heading\" style=\"font-family: Rubik, sans-serif; font-size: 1.875em; line-height: 1.333em; font-weight: 400; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word; margin-top: 2.1em; margin-bottom: 1.04em; color: rgb(29, 32, 32); background-color: rgb(245, 247, 247);\">Website Application Price</h4><p style=\"font-family: Rubik, sans-serif; font-size: 16px; line-height: 1.52em; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word; margin-top: 0em; margin-bottom: 1.2em; color: rgb(133, 135, 135); background-color: rgb(245, 247, 247);\"><strong style=\"font-family: inherit; line-height: inherit; font-weight: bold; font-style: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word;\">Format</strong>: WEBSITE, Apk<br><strong style=\"font-family: inherit; line-height: inherit; font-weight: bold; font-style: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word;\">Price:</strong>&nbsp;দেশের জন্য কাজ করি, তাই এটার মুল্য নিতে চাইনা ।</p><p style=\"font-family: Rubik, sans-serif; font-size: 16px; line-height: 1.52em; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word; margin-top: 0em; margin-bottom: 1.2em; color: rgb(133, 135, 135); background-color: rgb(245, 247, 247);\"><strong style=\"font-family: inherit; line-height: inherit; font-weight: bold; font-style: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word;\">Author:&nbsp;<a href=\"https://www.bangladeshisoftware.com/team/shamim-reza/\" target=\"_blank\" rel=\"noreferrer noopener\" style=\"line-height: inherit; font-style: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word; text-decoration: none; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; transition: color 0.3s ease 0s, background-color 0.3s ease 0s, border-color 0.3s ease 0s; color: rgb(247, 83, 137);\">Shamim Reza</a></strong></p><p style=\"font-family: Rubik, sans-serif; font-size: 16px; line-height: 1.52em; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word; margin-top: 0em; margin-bottom: 1.2em; color: rgb(133, 135, 135); background-color: rgb(245, 247, 247);\">আমাদের সফটওয়্যার কোম্পানি অনেক বিশ্বস্তার সাথে কাজ করে , যেকোন প্রয়োজনে আমাদের কল করুন ০১৭১৯১৮২৫৮৬ নাম্বারে। অনলাইনের মাধ্যমে সমস্ত বাংলাদেশে আমরা সফটওয়্যার ডেলিভারি দিয়ে থাকি ।</p>', 'Publish', 1680305741);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(255) NOT NULL,
  `pid` int(255) NOT NULL,
  `item_id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `regular_price` int(255) NOT NULL,
  `sell_price` int(255) NOT NULL,
  `sell` int(255) NOT NULL,
  `review` int(255) NOT NULL,
  `comment` int(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `mini_content` longtext NOT NULL,
  `content` longtext NOT NULL,
  `description` longtext NOT NULL,
  `status` varchar(255) NOT NULL,
  `file_name` varchar(255) NOT NULL DEFAULT 'image.jpg',
  `d_file` varchar(255) NOT NULL,
  `d_link` varchar(255) NOT NULL,
  `theme_preview_link` varchar(255) NOT NULL,
  `video_preview_link` varchar(255) NOT NULL,
  `doc_preview_link` varchar(255) NOT NULL,
  `time` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `pid`, `item_id`, `title`, `regular_price`, `sell_price`, `sell`, `review`, `comment`, `category`, `mini_content`, `content`, `description`, `status`, `file_name`, `d_file`, `d_link`, `theme_preview_link`, `video_preview_link`, `doc_preview_link`, `time`) VALUES
(30, 1, 0, 'YouTube Video Viral System Social Marketing Software', 20000, 5000, 19, 0, 0, 'PHP', '<div class=\"purchase-form__upgrade purchase-form__upgrade--before-after-price\" style=\"font-family: Rubik, sans-serif; font-size: 16px; line-height: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word; color: rgb(133, 135, 135); background-color: rgb(245, 247, 247);\"><div class=\"purchase-form__upgrade-checkbox purchase-form__upgrade-checkbox--before-after-price\" style=\"font-family: inherit; line-height: inherit; font-weight: inherit; font-style: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word;\">Last Update —–15<time class=\"updated\" datetime=\"2022-09-22T13:25:33+10:00\">&nbsp;February 2023</time></div></div><div style=\"font-family: Rubik, sans-serif; font-size: 16px; line-height: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word; color: rgb(133, 135, 135); background-color: rgb(245, 247, 247);\">Published ——24 December 2015</div><div style=\"font-family: Rubik, sans-serif; font-size: 16px; line-height: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word; color: rgb(133, 135, 135); background-color: rgb(245, 247, 247);\">High Resolution——Yes</div>', '<div class=\"purchase-form__upgrade purchase-form__upgrade--before-after-price\" style=\"font-family: Rubik, sans-serif; font-size: 16px; line-height: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word; color: rgb(133, 135, 135); background-color: rgb(245, 247, 247);\"><div class=\"purchase-form__upgrade-checkbox purchase-form__upgrade-checkbox--before-after-price\" style=\"font-family: inherit; line-height: inherit; font-weight: inherit; font-style: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word;\">Last Update —–15<time class=\"updated\" datetime=\"2022-09-22T13:25:33+10:00\">&nbsp;February 2023</time></div></div><div style=\"font-family: Rubik, sans-serif; font-size: 16px; line-height: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word; color: rgb(133, 135, 135); background-color: rgb(245, 247, 247);\">Published ——24 December 2015</div><div style=\"font-family: Rubik, sans-serif; font-size: 16px; line-height: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word; color: rgb(133, 135, 135); background-color: rgb(245, 247, 247);\">High Resolution——Yes</div><div style=\"font-family: Rubik, sans-serif; font-size: 16px; line-height: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word; color: rgb(133, 135, 135); background-color: rgb(245, 247, 247);\">Compatible Browsers ——<a class=\"js-item-sidebar-meta-attributes\" href=\"https://themeforest.net/attributes/compatible-browsers/ie11\" rel=\"nofollow\" style=\"line-height: inherit; font-style: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word; text-decoration: none; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; transition: color 0.3s ease 0s, background-color 0.3s ease 0s, border-color 0.3s ease 0s; color: rgb(247, 83, 137);\">IE11</a>,&nbsp;<a class=\"js-item-sidebar-meta-attributes\" href=\"https://themeforest.net/attributes/compatible-browsers/firefox\" rel=\"nofollow\" style=\"line-height: inherit; font-style: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word; text-decoration: none; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; transition: color 0.3s ease 0s, background-color 0.3s ease 0s, border-color 0.3s ease 0s; color: rgb(247, 83, 137);\">Firefox</a>,&nbsp;<a class=\"js-item-sidebar-meta-attributes\" href=\"https://themeforest.net/attributes/compatible-browsers/safari\" rel=\"nofollow\" style=\"line-height: inherit; font-style: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word; text-decoration: none; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; transition: color 0.3s ease 0s, background-color 0.3s ease 0s, border-color 0.3s ease 0s; color: rgb(247, 83, 137);\">Safari</a>,&nbsp;<a class=\"js-item-sidebar-meta-attributes\" href=\"https://themeforest.net/attributes/compatible-browsers/opera\" rel=\"nofollow\" style=\"line-height: inherit; font-style: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word; text-decoration: none; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; transition: color 0.3s ease 0s, background-color 0.3s ease 0s, border-color 0.3s ease 0s; color: rgb(247, 83, 137);\">Opera</a>,&nbsp;<a class=\"js-item-sidebar-meta-attributes\" href=\"https://themeforest.net/attributes/compatible-browsers/chrome\" rel=\"nofollow\" style=\"line-height: inherit; font-style: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word; text-decoration: none; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; transition: color 0.3s ease 0s, background-color 0.3s ease 0s, border-color 0.3s ease 0s; color: rgb(247, 83, 137);\">Chrome</a>,&nbsp;<a class=\"js-item-sidebar-meta-attributes\" href=\"https://themeforest.net/attributes/compatible-browsers/edge\" rel=\"nofollow\" style=\"line-height: inherit; font-style: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word; text-decoration: none; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; transition: color 0.3s ease 0s, background-color 0.3s ease 0s, border-color 0.3s ease 0s; color: rgb(247, 83, 137);\">Edge</a></div><div style=\"font-family: Rubik, sans-serif; font-size: 16px; line-height: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word; color: rgb(133, 135, 135); background-color: rgb(245, 247, 247);\">Compatible With —–&nbsp;<a class=\"js-item-sidebar-meta-attributes\" href=\"https://themeforest.net/attributes/compatible-with/bootstrap%205.x\" rel=\"nofollow\" style=\"line-height: inherit; font-style: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word; text-decoration: none; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; transition: color 0.3s ease 0s, background-color 0.3s ease 0s, border-color 0.3s ease 0s; color: rgb(247, 83, 137);\">Bootstrap 5.x</a></div><div style=\"font-family: Rubik, sans-serif; font-size: 16px; line-height: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word; color: rgb(133, 135, 135); background-color: rgb(245, 247, 247);\">Software Version —–&nbsp;<a class=\"js-item-sidebar-meta-attributes\" href=\"https://themeforest.net/attributes/compatible-software/shopify%202.0\" rel=\"nofollow\" style=\"line-height: inherit; font-style: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word; text-decoration: none; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; transition: color 0.3s ease 0s, background-color 0.3s ease 0s, border-color 0.3s ease 0s; color: rgb(247, 83, 137);\">Shopify 2.0</a></div><div style=\"font-family: Rubik, sans-serif; font-size: 16px; line-height: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word; color: rgb(133, 135, 135); background-color: rgb(245, 247, 247);\">Files Included ——-<a class=\"js-item-sidebar-meta-attributes\" href=\"https://themeforest.net/attributes/themeforest-files-included/css%20files\" rel=\"nofollow\" style=\"line-height: inherit; font-style: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word; text-decoration: none; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; transition: color 0.3s ease 0s, background-color 0.3s ease 0s, border-color 0.3s ease 0s; color: rgb(247, 83, 137);\">CSS Files</a>,&nbsp;<a class=\"js-item-sidebar-meta-attributes\" href=\"https://themeforest.net/attributes/themeforest-files-included/js%20files\" rel=\"nofollow\" style=\"line-height: inherit; font-style: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word; text-decoration: none; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; transition: color 0.3s ease 0s, background-color 0.3s ease 0s, border-color 0.3s ease 0s; color: rgb(247, 83, 137);\">JS Files</a></div><div style=\"font-family: Rubik, sans-serif; font-size: 16px; line-height: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word; color: rgb(133, 135, 135); background-color: rgb(245, 247, 247);\">Columns —-3</div><div style=\"font-family: Rubik, sans-serif; font-size: 16px; line-height: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word; color: rgb(133, 135, 135); background-color: rgb(245, 247, 247);\">Layout —Responsive</div><div style=\"font-family: Rubik, sans-serif; font-size: 16px; line-height: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word; color: rgb(133, 135, 135); background-color: rgb(245, 247, 247);\">Documentation—–<a class=\"js-item-sidebar-meta-attributes\" href=\"https://themeforest.net/attributes/documentation/well%20documented\" rel=\"nofollow\" style=\"line-height: inherit; font-style: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word; text-decoration: none; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; transition: color 0.3s ease 0s, background-color 0.3s ease 0s, border-color 0.3s ease 0s; color: rgb(247, 83, 137);\">Video Documented</a></div>', '<p style=\"font-family: Rubik, sans-serif; font-size: 16px; line-height: 1.52em; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word; margin-bottom: 0px; color: rgb(133, 135, 135); background-color: rgb(245, 247, 247);\">আমরা আপনাকে দিচ্ছি রেডিমেড টপ আপ ওয়েবসাইট । আমাদের ডেলিভারির সময় ৩-৭ দিন । আপনি আপনার , Business এর জন্য একটা ওয়েবসাইট থাকলে আপনি আপনার পরিচিতি বাড়াইতে পারবেন। আমাদের সেবা নিতে পারেন আসা করি কাজে দিবে ।</p><h3 class=\"wp-block-heading\" style=\"font-family: Rubik, sans-serif; font-size: 30px; line-height: 1.25em; font-weight: 400; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word; margin-top: 1.96em; color: rgb(29, 32, 32); background-color: rgb(245, 247, 247); margin-bottom: 1em !important;\">আপনারা কি ধরনের ওয়েবসাইট বা সফটওয়ায়র বানিয়ে থাকেন ?</h3><p style=\"font-family: Rubik, sans-serif; font-size: 16px; line-height: 1.52em; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word; margin-bottom: 0px; color: rgb(133, 135, 135); background-color: rgb(245, 247, 247);\">ইকোমার্স, দারাজের মত ওয়েবসাইট নিউস পর্টাল, প্রথম আলোর মত ওয়েবসাইট বিভিন্ন ধরনের গেমস ডিজিটাল এজেন্সির ওয়েবসাইট সমিতির ওয়েবসাইট প্রটফলিও ওয়েবসাইট ডায়াগন্সটিক ম্যানেজমেন্ট ওয়েবসাইট আই-এস-পি বিলিং ওয়েবসাইট ইত্যাদি ?</p><h3 class=\"wp-block-heading\" id=\"item-description__-our-travel-agency-wordpress-theme\" style=\"font-family: Rubik, sans-serif; font-size: 30px; line-height: 1.25em; font-weight: 400; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word; margin-top: 1.96em; color: rgb(29, 32, 32); background-color: rgb(245, 247, 247); margin-bottom: 1em !important;\">YouTube Video Viral Website Requirements</h3><ol style=\"font-family: Rubik, sans-serif; font-size: 16px; line-height: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word; padding-left: 1.5em; margin-top: 0em; margin-bottom: 1.2em; color: rgb(133, 135, 135); background-color: rgb(245, 247, 247);\"><li style=\"font-family: inherit; line-height: inherit; font-weight: inherit; font-style: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word;\">ডোমেইন লাগবে , আপনার যদি ডোমেইন না ক্রয় করা থাকে আপনি আমাদের সাথে ফোনে যোগাযোগ করে ডোমেইন ক্রয় করে নিতে পারবেন।</li><li style=\"font-family: inherit; line-height: inherit; font-weight: inherit; font-style: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word;\">হোস্টিং লাগবে, আপনার যদি হোস্টিং ক্রয় করা না থাকে তাহলে আমাদের কাছে ক্রয় করে নিতে পারেন।</li><li style=\"font-family: inherit; line-height: inherit; font-weight: inherit; font-style: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word;\">লোগো , অফিস অ্যাড্রেস , ডেসক্রিপশন , এবং প্রয়োজনিয় তথ্য দিতে হবে যেমন এবাউট , কন্টাক্ট , প্রাইভেসি , টার্মস এন্ড কন্ডিশনে কি কি থাকবে ইত্যাদি ।</li></ol><h3 class=\"wp-block-heading\" id=\"item-description__-our-travel-agency-wordpress-theme\" style=\"font-family: Rubik, sans-serif; font-size: 30px; line-height: 1.25em; font-weight: 400; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word; margin-top: 1.96em; color: rgb(29, 32, 32); background-color: rgb(245, 247, 247); margin-bottom: 1em !important;\">YouTube Video Viral&nbsp;Website Template Features</h3><p class=\"has-bd-color-color has-text-link-background-color has-text-color has-background\" style=\"font-family: Rubik, sans-serif; font-size: 16px; line-height: 1.52em; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word; margin-bottom: 0px; padding: 1.25em 2.375em; color: rgb(229, 232, 232); background-color: rgb(247, 83, 137);\">যারা Youtube Chennel Boost ভাইরাল করতে চান</p><ul style=\"font-family: Rubik, sans-serif; font-size: 16px; line-height: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word; padding-left: 1.5em; margin-top: 0em; margin-bottom: 1.2em; color: rgb(133, 135, 135); background-color: rgb(245, 247, 247);\"><li style=\"font-family: inherit; line-height: inherit; font-weight: inherit; font-style: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word;\">চ্যানেল সাবস্ক্রাইবার অ্যাডের মাধ্যমে আনলিমিটেড সাবস্ক্রাইবার নিতে পারবেন</li><li style=\"font-family: inherit; line-height: inherit; font-weight: inherit; font-style: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word;\">ইউটিউব ভিডিও প্রমোশনের মাধ্যমে ইউটিউব চ্যানেলের ভিডিও ভাইরাল করতে পারবেন</li><li style=\"font-family: inherit; line-height: inherit; font-weight: inherit; font-style: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word;\">ওয়েবসাইটের ভিউ নিতে পারবেন ৪। ভিডিও অথবা আর্টিকেল নিতে পারবেন ।</li></ul><p style=\"font-family: Rubik, sans-serif; font-size: 16px; line-height: 1.52em; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word; margin-bottom: 0px; color: rgb(133, 135, 135); background-color: rgb(245, 247, 247);\">&nbsp;</p><p id=\"item-description__tour-operator-wordpress-theme\" class=\"has-text-light-color has-text-link-2-background-color has-text-color has-background\" style=\"font-family: Rubik, sans-serif; font-size: 16px; line-height: 1.52em; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word; margin-top: 0.5em; margin-bottom: 0px; padding: 1.25em 2.375em; color: rgb(95, 95, 95); background-color: rgb(13, 191, 191);\">যারা Online থেকে উপার্জন করতে চান ?</p><ul style=\"font-family: Rubik, sans-serif; font-size: 16px; line-height: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word; padding-left: 1.5em; margin-top: 0em; margin-bottom: 1.2em; color: rgb(133, 135, 135); background-color: rgb(245, 247, 247);\"><li style=\"font-family: inherit; line-height: inherit; font-weight: inherit; font-style: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word;\">চ্যানেল সাবস্ক্রাইবার করে</li><li style=\"font-family: inherit; line-height: inherit; font-weight: inherit; font-style: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word;\">ভিডিও দেখলেই</li><li style=\"font-family: inherit; line-height: inherit; font-weight: inherit; font-style: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word;\">ওয়েবসাইট ভিজিট করলেই</li><li style=\"font-family: inherit; line-height: inherit; font-weight: inherit; font-style: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word;\">প্রমোশনাল কাজ করলেই টাকা আর্ন করতে পারবেন । যেকোন মুহুর্তেই টাকা উইথড্র করতে পারবেন</li></ul><p style=\"font-family: Rubik, sans-serif; font-size: 16px; line-height: 1.52em; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word; margin-bottom: 0px; color: rgb(133, 135, 135); background-color: rgb(245, 247, 247);\"><iframe title=\"Social Media Marketing Website Review by Bangladeshisoftware.com\" width=\"1280\" height=\"720\" src=\"https://www.youtube.com/embed/xCqwpzS2Xw0?feature=oembed\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen=\"\" class=\"fribbo_resize trx_addons_resize\" data-last-width=\"1100\" style=\"font-family: inherit; line-height: inherit; font-weight: inherit; font-style: inherit; border-style: initial; border-color: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word; max-width: 100%; min-height: 100px; vertical-align: top; width: 1100px; height: 619px;\"></iframe></p><p style=\"font-family: Rubik, sans-serif; font-size: 16px; line-height: 1.52em; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word; margin-top: 0.5em; margin-bottom: 0px; color: rgb(133, 135, 135); background-color: rgb(245, 247, 247);\">&nbsp;</p><p class=\"has-bd-color-color has-text-color has-background\" style=\"font-family: Rubik, sans-serif; font-size: 16px; line-height: 1.52em; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word; margin-top: 0.5em; margin-bottom: 0px; padding: 1.25em 2.375em; color: rgb(229, 232, 232); background-color: rgb(245, 247, 247);\">বিঃ দ্রঃ আশাকরি আমাদের Algorithm 99.99% কাজ করবে । কেউ যদি কাস্টমাইজ করে আরো গেম বা ফাংশন অ্যাড করতে চান তাও করে দেওয়া যাব।</p><h3 id=\"item-description__-our-travel-agency-wordpress-theme\" style=\"font-family: Rubik, sans-serif; font-size: 30px; line-height: 1.25em; font-weight: 400; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word; margin-top: 1.96em; color: rgb(29, 32, 32); background-color: rgb(245, 247, 247); margin-bottom: 1em !important;\">YouTube Video Viral Node js , react Script Website Details :</h3><figure class=\"wp-block-table aligncenter is-style-regular\" style=\"border-style: initial; border-color: initial; border-image: initial; padding: 0px; overflow: auto hidden; position: relative; max-width: 100%; display: table; flex-direction: column; align-items: center; justify-content: flex-start; clear: both; text-align: center; width: auto; color: rgb(133, 135, 135); font-family: Rubik, sans-serif; font-size: 16px; background-color: rgb(245, 247, 247); margin-right: auto !important; margin-bottom: 1em !important; margin-left: auto !important;\"><table class=\"has-text-dark-color has-bd-color-background-color has-text-color has-background\" style=\"font-family: inherit; font-size: 16px; line-height: inherit; font-weight: inherit; font-style: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word; width: 652.516px; color: rgb(29, 32, 32); background-color: rgb(229, 232, 232);\"><tbody style=\"font-family: inherit; line-height: inherit; font-weight: inherit; font-style: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word;\"><tr style=\"font-family: inherit; line-height: inherit; font-weight: inherit; font-style: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word;\"><td style=\"font-family: inherit; line-height: inherit; font-style: inherit; border-width: 0px; border-color: rgb(229, 232, 232); outline-style: initial; outline-width: 0px; overflow-wrap: break-word; padding: 0.5em; text-align: center; color: rgb(133, 135, 135); word-break: break-word; background-color: rgba(255, 255, 255, 0.4);\">Files Included</td><td style=\"font-family: inherit; line-height: inherit; font-style: inherit; border-width: 0px; border-color: rgb(229, 232, 232); outline-style: initial; outline-width: 0px; overflow-wrap: break-word; padding: 0.5em; text-align: center; color: rgb(133, 135, 135); word-break: break-word; background-color: rgba(255, 255, 255, 0.4);\">JavaScript JS, JavaScript JSON, HTML, CSS, Node js , Firebase</td></tr><tr style=\"font-family: inherit; line-height: inherit; font-weight: inherit; font-style: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word;\"><td style=\"font-family: inherit; line-height: inherit; font-style: inherit; border-width: 0px; border-color: rgb(229, 232, 232); outline-style: initial; outline-width: 0px; overflow-wrap: break-word; padding: 0.5em; text-align: center; color: rgb(133, 135, 135); word-break: break-word; background-color: rgba(255, 255, 255, 0.2);\">Software Framework</td><td style=\"font-family: inherit; line-height: inherit; font-style: inherit; border-width: 0px; border-color: rgb(229, 232, 232); outline-style: initial; outline-width: 0px; overflow-wrap: break-word; padding: 0.5em; text-align: center; color: rgb(133, 135, 135); word-break: break-word; background-color: rgba(255, 255, 255, 0.2);\">Node Js</td></tr><tr style=\"font-family: inherit; line-height: inherit; font-weight: inherit; font-style: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word;\"><td style=\"font-family: inherit; line-height: inherit; font-style: inherit; border-width: 0px; border-color: rgb(229, 232, 232); outline-style: initial; outline-width: 0px; overflow-wrap: break-word; padding: 0.5em; text-align: center; color: rgb(133, 135, 135); word-break: break-word; background-color: rgba(255, 255, 255, 0.4);\">Software Version</td><td style=\"font-family: inherit; line-height: inherit; font-style: inherit; border-width: 0px; border-color: rgb(229, 232, 232); outline-style: initial; outline-width: 0px; overflow-wrap: break-word; padding: 0.5em; text-align: center; color: rgb(133, 135, 135); word-break: break-word; background-color: rgba(255, 255, 255, 0.4);\">Updated</td></tr></tbody></table></figure><h4 class=\"wp-block-heading\" style=\"font-family: Rubik, sans-serif; font-size: 1.875em; line-height: 1.333em; font-weight: 400; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word; margin-top: 2.1em; margin-bottom: 1.04em; color: rgb(29, 32, 32); background-color: rgb(245, 247, 247);\">Topup Recharge Website React Script</h4><p style=\"font-family: Rubik, sans-serif; font-size: 16px; line-height: 1.52em; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word; margin-bottom: 0px; color: rgb(133, 135, 135); background-color: rgb(245, 247, 247);\"><strong style=\"font-family: inherit; line-height: inherit; font-weight: bold; font-style: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word;\">Format</strong>: WEBSITE, Apk (if you need)&nbsp;<a style=\"line-height: inherit; font-style: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word; text-decoration: none; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; transition: color 0.3s ease 0s, background-color 0.3s ease 0s, border-color 0.3s ease 0s; color: rgb(247, 83, 137);\"><strong style=\"font-family: inherit; line-height: inherit; font-weight: bold; font-style: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word;\">Price:</strong>&nbsp;</a>25,000 BDT</p><p style=\"font-family: Rubik, sans-serif; font-size: 16px; line-height: 1.52em; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word; margin-top: 0.5em; margin-bottom: 0px; color: rgb(133, 135, 135); background-color: rgb(245, 247, 247);\"><strong style=\"font-family: inherit; line-height: inherit; font-weight: bold; font-style: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word;\">Author:&nbsp;<a href=\"https://www.bangladeshisoftware.com/team/shamim-reza/\" target=\"_blank\" rel=\"noreferrer noopener\" style=\"line-height: inherit; font-style: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word; text-decoration: none; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; transition: color 0.3s ease 0s, background-color 0.3s ease 0s, border-color 0.3s ease 0s; color: rgb(247, 83, 137);\">Shamim Reza</a></strong></p><p style=\"font-family: Rubik, sans-serif; font-size: 16px; line-height: 1.52em; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word; margin-top: 0.5em; margin-bottom: 0px; color: rgb(133, 135, 135); background-color: rgb(245, 247, 247);\">আমাদের সফটওয়্যার কোম্পানি অনেক বিশ্বস্তার সাথে কাজ করে , যেকোন প্রয়োজনে আমাদের কল করুন ০১৭১৯১৮২৫৮৬ নাম্বারে। অনলাইনের মাধ্যমে সমস্ত বাংলাদেশে আমরা সফটওয়্যার ডেলিভারি দিয়ে থাকি ।</p><figure class=\"wp-block-table aligncenter\" style=\"border-style: initial; border-color: initial; border-image: initial; padding: 0px; overflow: auto hidden; position: relative; max-width: 100%; display: table; flex-direction: column; align-items: center; justify-content: flex-start; clear: both; text-align: center; width: auto; color: rgb(133, 135, 135); font-family: Rubik, sans-serif; font-size: 16px; background-color: rgb(245, 247, 247); margin-right: auto !important; margin-bottom: 1em !important; margin-left: auto !important;\"><table class=\"has-background\" style=\"font-family: inherit; font-size: 16px; line-height: inherit; font-weight: inherit; font-style: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word; width: 503.812px;\"><tbody style=\"font-family: inherit; line-height: inherit; font-weight: inherit; font-style: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word;\"><tr style=\"font-family: inherit; line-height: inherit; font-weight: inherit; font-style: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word;\"><td style=\"font-family: inherit; line-height: inherit; font-style: inherit; border-width: 0px; border-color: rgb(229, 232, 232); outline-style: initial; outline-width: 0px; overflow-wrap: break-word; padding: 0.5em; text-align: center; color: rgb(133, 135, 135); word-break: break-word; background-color: rgba(255, 255, 255, 0.4);\">ADMIN LOGIN URL</td><td style=\"font-family: inherit; line-height: inherit; font-style: inherit; border-width: 0px; border-color: rgb(229, 232, 232); outline-style: initial; outline-width: 0px; overflow-wrap: break-word; padding: 0.5em; text-align: center; color: rgb(133, 135, 135); word-break: break-word; background-color: rgba(255, 255, 255, 0.4);\"><a title=\"https://topup-website-admin.xdomainhost.com/\" href=\"https://videoviral.xdomainhost.com/admin\" target=\"_blank\" rel=\"noreferrer noopener\" style=\"line-height: inherit; font-style: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word; text-decoration: none; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; transition: color 0.3s ease 0s, background-color 0.3s ease 0s, border-color 0.3s ease 0s; color: rgb(247, 83, 137);\">https://videoviral.xdomainhost.com/admin</a></td><td style=\"font-family: inherit; line-height: inherit; font-style: inherit; border-width: 0px; border-color: rgb(229, 232, 232); outline-style: initial; outline-width: 0px; overflow-wrap: break-word; padding: 0.5em; text-align: center; color: rgb(133, 135, 135); word-break: break-word; background-color: rgba(255, 255, 255, 0.4);\">&nbsp;</td></tr><tr style=\"font-family: inherit; line-height: inherit; font-weight: inherit; font-style: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word;\"><td style=\"font-family: inherit; line-height: inherit; font-style: inherit; border-width: 0px; border-color: rgb(229, 232, 232); outline-style: initial; outline-width: 0px; overflow-wrap: break-word; padding: 0.5em; text-align: center; color: rgb(133, 135, 135); word-break: break-word; background-color: rgba(255, 255, 255, 0.2);\">Username:</td><td style=\"font-family: inherit; line-height: inherit; font-style: inherit; border-width: 0px; border-color: rgb(229, 232, 232); outline-style: initial; outline-width: 0px; overflow-wrap: break-word; padding: 0.5em; text-align: center; color: rgb(133, 135, 135); word-break: break-word; background-color: rgba(255, 255, 255, 0.2);\">admin@gmail.com</td><td style=\"font-family: inherit; line-height: inherit; font-style: inherit; border-width: 0px; border-color: rgb(229, 232, 232); outline-style: initial; outline-width: 0px; overflow-wrap: break-word; padding: 0.5em; text-align: center; color: rgb(133, 135, 135); word-break: break-word; background-color: rgba(255, 255, 255, 0.2);\">&nbsp;</td></tr><tr style=\"font-family: inherit; line-height: inherit; font-weight: inherit; font-style: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word;\"><td style=\"font-family: inherit; line-height: inherit; font-style: inherit; border-width: 0px; border-color: rgb(229, 232, 232); outline-style: initial; outline-width: 0px; overflow-wrap: break-word; padding: 0.5em; text-align: center; color: rgb(133, 135, 135); word-break: break-word; background-color: rgba(255, 255, 255, 0.4);\">see demo :</td><td style=\"font-family: inherit; line-height: inherit; font-style: inherit; border-width: 0px; border-color: rgb(229, 232, 232); outline-style: initial; outline-width: 0px; overflow-wrap: break-word; padding: 0.5em; text-align: center; color: rgb(133, 135, 135); word-break: break-word; background-color: rgba(255, 255, 255, 0.4);\">1234</td><td style=\"font-family: inherit; line-height: inherit; font-style: inherit; border-width: 0px; border-color: rgb(229, 232, 232); outline-style: initial; outline-width: 0px; overflow-wrap: break-word; padding: 0.5em; text-align: center; color: rgb(133, 135, 135); word-break: break-word; background-color: rgba(255, 255, 255, 0.4);\">&nbsp;</td></tr></tbody></table></figure><figure class=\"wp-block-table aligncenter\" style=\"border-style: initial; border-color: initial; border-image: initial; padding: 0px; overflow: auto hidden; position: relative; max-width: 100%; display: table; flex-direction: column; align-items: center; justify-content: flex-start; clear: both; text-align: center; width: auto; color: rgb(133, 135, 135); font-family: Rubik, sans-serif; font-size: 16px; background-color: rgb(245, 247, 247); margin-right: auto !important; margin-bottom: 1em !important; margin-left: auto !important;\"><table class=\"has-background\" style=\"font-family: inherit; font-size: 16px; line-height: inherit; font-weight: inherit; font-style: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word; width: 449.875px;\"><tbody style=\"font-family: inherit; line-height: inherit; font-weight: inherit; font-style: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word;\"><tr style=\"font-family: inherit; line-height: inherit; font-weight: inherit; font-style: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word;\"><td style=\"font-family: inherit; line-height: inherit; font-style: inherit; border-width: 0px; border-color: rgb(229, 232, 232); outline-style: initial; outline-width: 0px; overflow-wrap: break-word; padding: 0.5em; text-align: center; color: rgb(133, 135, 135); word-break: break-word; background-color: rgba(255, 255, 255, 0.4);\">USER LOGIN URL</td><td style=\"font-family: inherit; line-height: inherit; font-style: inherit; border-width: 0px; border-color: rgb(229, 232, 232); outline-style: initial; outline-width: 0px; overflow-wrap: break-word; padding: 0.5em; text-align: center; color: rgb(133, 135, 135); word-break: break-word; background-color: rgba(255, 255, 255, 0.4);\"><a title=\"https://topup-website.xdomainhost.com/\" href=\"https://videoviral.xdomainhost.com/\" target=\"_blank\" rel=\"noreferrer noopener\" style=\"line-height: inherit; font-style: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word; text-decoration: none; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; transition: color 0.3s ease 0s, background-color 0.3s ease 0s, border-color 0.3s ease 0s; color: rgb(247, 83, 137);\">https://videoviral.xdomainhost.com/</a></td><td style=\"font-family: inherit; line-height: inherit; font-style: inherit; border-width: 0px; border-color: rgb(229, 232, 232); outline-style: initial; outline-width: 0px; overflow-wrap: break-word; padding: 0.5em; text-align: center; color: rgb(133, 135, 135); word-break: break-word; background-color: rgba(255, 255, 255, 0.4);\">&nbsp;</td></tr><tr style=\"font-family: inherit; line-height: inherit; font-weight: inherit; font-style: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word;\"><td style=\"font-family: inherit; line-height: inherit; font-style: inherit; border-width: 0px; border-color: rgb(229, 232, 232); outline-style: initial; outline-width: 0px; overflow-wrap: break-word; padding: 0.5em; text-align: center; color: rgb(133, 135, 135); word-break: break-word; background-color: rgba(255, 255, 255, 0.2);\">Email:</td><td style=\"font-family: inherit; line-height: inherit; font-style: inherit; border-width: 0px; border-color: rgb(229, 232, 232); outline-style: initial; outline-width: 0px; overflow-wrap: break-word; padding: 0.5em; text-align: center; color: rgb(133, 135, 135); word-break: break-word; background-color: rgba(255, 255, 255, 0.2);\">bangladeshisoftware@gmail.com</td><td style=\"font-family: inherit; line-height: inherit; font-style: inherit; border-width: 0px; border-color: rgb(229, 232, 232); outline-style: initial; outline-width: 0px; overflow-wrap: break-word; padding: 0.5em; text-align: center; color: rgb(133, 135, 135); word-break: break-word; background-color: rgba(255, 255, 255, 0.2);\">&nbsp;</td></tr><tr style=\"font-family: inherit; line-height: inherit; font-weight: inherit; font-style: inherit; border-style: initial; border-color: initial; border-image: initial; outline-style: initial; outline-width: 0px; overflow-wrap: break-word;\"><td style=\"font-family: inherit; line-height: inherit; font-style: inherit; border-width: 0px; border-color: rgb(229, 232, 232); outline-style: initial; outline-width: 0px; overflow-wrap: break-word; padding: 0.5em; text-align: center; color: rgb(133, 135, 135); word-break: break-word; background-color: rgba(255, 255, 255, 0.4);\">Password:</td><td style=\"font-family: inherit; line-height: inherit; font-style: inherit; border-width: 0px; border-color: rgb(229, 232, 232); outline-style: initial; outline-width: 0px; overflow-wrap: break-word; padding: 0.5em; text-align: center; color: rgb(133, 135, 135); word-break: break-word; background-color: rgba(255, 255, 255, 0.4);\">bangladeshisoftware@gmail.com</td></tr></tbody></table></figure>', 'Publish', 'Screenshot_4.jpg', '', '', '', '', '', 1680306424);

-- --------------------------------------------------------

--
-- Table structure for table `reseller_docs`
--

CREATE TABLE `reseller_docs` (
  `id` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `before_submit` longtext NOT NULL,
  `after_submit` longtext NOT NULL,
  `accept_submit` longtext NOT NULL,
  `reject_submit` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reseller_docs`
--

INSERT INTO `reseller_docs` (`id`, `discount`, `before_submit`, `after_submit`, `accept_submit`, `reject_submit`) VALUES
(1, 100, '<h2 style=\"text-align: center; \"><b>TenTheme পণ্যের রিসেলার হয়ে উঠুন</b></h2><div><br></div><div>TenTheme-এ, আমরা ব্যবসা এবং ব্যক্তিদের উচ্চ-মানের, কাস্টমাইজযোগ্য ওয়েবসাইট টেমপ্লেট এবং থিম প্রদান করে তাদের ক্ষমতায়নে বিশ্বাস করি। আমরা ওয়ার্ডপ্রেস থিম থেকে শুরু করে এইচটিএমএল টেমপ্লেট পর্যন্ত বিভিন্ন ধরনের পণ্য অফার করি, যেগুলো বিভিন্ন প্রয়োজন এবং পছন্দ অনুসারে ডিজাইন করা হয়েছে।</div><div><br></div><div>TenTheme পণ্যের রিসেলার হিসাবে, আপনি সুন্দর এবং কার্যকরী ওয়েবসাইট ডিজাইন তৈরিতে আমাদের দক্ষতা এবং অভিজ্ঞতা থেকে উপকৃত হতে পারেন। আমাদের সাথে অংশীদারিত্বের মাধ্যমে, আপনি আপনার ক্লায়েন্টদের আমাদের থিমগুলির বিস্তৃত লাইব্রেরিতে অ্যাক্সেস অফার করতে পারেন, যা তাদের অল্প সময়ের মধ্যে একটি পেশাদার চেহারার ওয়েবসাইট তৈরি করতে সহায়তা করতে পারে।</div><div><br></div><div>টেনথিম রিসেলার হওয়ার সুবিধা</div><div><br></div><div>ওয়েবসাইটের থিম এবং টেমপ্লেটের বিস্তৃত পরিসরে অ্যাক্সেস</div><div>প্রতিযোগিতামূলক মূল্য এবং বাল্ক ক্রয়ের উপর ডিসকাউন্ট</div><div>নমনীয় লাইসেন্সিং বিকল্প যা বিভিন্ন ব্যবসার চাহিদা পূরণ করে</div><div>আপনাকে রিসেলার হিসাবে সফল হতে সাহায্য করার জন্য উত্সর্গীকৃত সমর্থন এবং সংস্থান</div><div>আমাদের পণ্যগুলিতে আপনার নিজস্ব ব্র্যান্ড প্রদর্শনের জন্য কাস্টম ব্র্যান্ডিং বিকল্প</div><div>কীভাবে টেনথিম রিসেলার হবেন</div><div><br></div><div>টেনথিম রিসেলার হওয়া সহজ এবং সোজা। কেবলমাত্র আমাদের রিসেলার আবেদন ফর্মটি পূরণ করুন, এবং কীভাবে শুরু করবেন সে সম্পর্কে আরও বিশদ সহ আমরা আপনার কাছে ফিরে আসব। আপনি একজন ব্যক্তি, এজেন্সি বা ব্যবসায়িকই হোন না কেন, আমরা সব ধরনের রিসেলারদের স্বাগত জানাই যারা মানসম্পন্ন ওয়েব ডিজাইনের জন্য আমাদের আবেগ ভাগ করে নেয়।</div><div><br></div><div>আজই আমাদের রিসেলার প্রোগ্রামে যোগ দিন এবং টেনথিম রিসেলার হওয়ার সাথে সাথে আসা অনেক সুবিধার সুবিধা নিন!</div>', '<div>প্রিয় ,</div><div>TenTheme পণ্যের রিসেলার হওয়ার জন্য প্রথম পদক্ষেপ নেওয়ার জন্য অভিনন্দন! আমাদের রিসেলারদের নেটওয়ার্কের অংশ হিসাবে আপনাকে পেয়ে আমরা রোমাঞ্চিত এবং আপনার সাথে কাজ করার জন্য উন্মুখ।</div><div><br></div><div>TenTheme-এ, আমরা উচ্চ-মানের ওয়েবসাইট থিম এবং টেমপ্লেট তৈরি করতে আগ্রহী যা একইভাবে ব্যবসা এবং ব্যক্তিদের চাহিদা পূরণ করে। রিসেলার হিসেবে, আপনি আমাদের পণ্যের সম্পূর্ণ সংগ্রহে অ্যাক্সেস পাবেন, সেইসাথে প্রতিযোগীতামূলক মূল্য এবং বাল্ক কেনাকাটায় ডিসকাউন্ট পাবেন।</div><div><br></div><div>আমরা আমাদের পুনঃবিক্রেতাদের সফল হতে সাহায্য করতে প্রতিশ্রুতিবদ্ধ, এই কারণেই আমরা আপনাকে আপনার ব্যবসা বৃদ্ধিতে সাহায্য করার জন্য উত্সর্গীকৃত সহায়তা এবং সংস্থান সরবরাহ করি৷ আপনি একটি এজেন্সি, ব্যক্তি, বা ব্যবসা যাই হোন না কেন, আমরা বিশ্বাস করি যে আমাদের রিসেলার প্রোগ্রাম আপনাকে উন্নতির জন্য প্রয়োজনীয় সরঞ্জাম এবং সংস্থান সরবরাহ করতে পারে।</div><div><br></div><div>আমাদের সাথে অংশীদারিত্ব বেছে নেওয়ার জন্য আপনাকে ধন্যবাদ, এবং আমরা বিশ্বজুড়ে গ্রাহকদের কাছে সুন্দর এবং কার্যকরী ওয়েবসাইট ডিজাইন আনতে একসাথে কাজ করার জন্য উন্মুখ।</div><div><br></div><div>শুভেচ্ছান্তে,</div><div>টেনথিম</div>', '<p>অভিনন্দন! </p><p>আপনি এখন আমাদের কোম্পানির জন্য রিসেলার হিসেবে অনুমোদিত হয়েছেন। এর মানে হল যে আপনি আমাদের একচেটিয়া পণ্য এবং পরিষেবাগুলিতে অ্যাক্সেস পাবেন এবং আপনি সেগুলি আপনার নিজস্ব গ্রাহকদের কাছে অফার করতে সক্ষম হবেন৷</p><p> একজন রিসেলার হিসেবে, আপনি আমাদের নাগালের বিস্তার এবং আমাদের বিক্রয় বৃদ্ধিতে গুরুত্বপূর্ণ ভূমিকা পালন করবেন। আমরা আপনাকে বোর্ডে পেয়ে উত্তেজিত এবং আমাদের পারস্পরিক লক্ষ্য অর্জনের জন্য আপনার সাথে ঘনিষ্ঠভাবে কাজ করার জন্য উন্মুখ। ব্যবসায় আপনার অংশীদার হিসাবে আমাদের নির্বাচন করার জন্য আপনাকে ধন্যবাদ.</p>', '<div>দুক্ষিত,</div><div>TenTheme পণ্যের রিসেলার হওয়ার আগ্রহের জন্য আপনাকে ধন্যবাদ। আমরা আপনার আবেদন জমা দেওয়ার সময় এবং প্রচেষ্টার প্রশংসা করি।</div><div><br></div><div>আপনার আবেদনের যত্ন সহকারে পর্যালোচনা করার পর, আমরা আপনাকে জানাতে দুঃখিত যে আমরা এই সময়ে আপনাকে একজন রিসেলার হিসাবে গ্রহণ করতে পারছি না। আমাদের দল প্রতিটি আবেদনকে সাবধানে বিবেচনা করে এবং দুর্ভাগ্যবশত, আমরা বিশ্বাস করি না যে আপনার যোগ্যতা বা অভিজ্ঞতা আমাদের রিসেলার প্রোগ্রামের প্রয়োজনীয়তার সাথে সামঞ্জস্যপূর্ণ।</div><div><br></div><div>অনুগ্রহ করে মনে রাখবেন এই সিদ্ধান্ত আপনার পক্ষ থেকে কোন ত্রুটি প্রতিফলিত করে না। আমরা আমাদের রিসেলার প্রোগ্রামের জন্য অনেক আবেদন পেয়েছি এবং আমরা গ্রহণ করতে পারি এমন রিসেলারের সংখ্যা সীমিত।</div><div><br></div><div>আমরা আমাদের পণ্যগুলিতে আপনার আগ্রহের প্রশংসা করি এবং আশা করি আপনি আমাদের সাথে কাজ করার অন্যান্য সুযোগগুলি অন্বেষণ করতে থাকবেন৷ যদি আপনার কোন প্রশ্ন থাকে বা আপনার আবেদনের বিষয়ে প্রতিক্রিয়া চান, তাহলে অনুগ্রহ করে আমাদের সাথে যোগাযোগ করতে দ্বিধা করবেন না।</div><div><br></div><div>TenTheme-এ আপনার আগ্রহের জন্য আপনাকে আবার ধন্যবাদ, এবং আমরা আপনার ভবিষ্যত প্রচেষ্টার জন্য আপনাকে শুভকামনা জানাই।</div><div><br></div><div>শুভেচ্ছান্তে,</div><div><br></div><div>টেনথিম</div>');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(255) NOT NULL,
  `pid` int(255) NOT NULL,
  `product_id` int(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `star` int(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `time` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `pid`, `product_id`, `type`, `star`, `text`, `time`) VALUES
(1, 1, 51, 'product', 4, 'sdfsdfsdff', 1683388974),
(2, 1, 51, 'product', 4, 'sdfsdf', 1683388974),
(3, 1, 51, 'product', 5, 'sdfsdfsdff', 1683389613),
(4, 1, 51, 'product', 5, 'sdfsdf', 1683389614),
(5, 1, 51, 'product', 5, 'this id very good', 1683389614),
(6, 1, 51, 'product', 3, 'gggggg', 1683389634),
(7, 1, 51, 'product', 2, 'sdfdsfdsf', 1683389660),
(8, 1, 0, '', 4, 'sdfdsfdsf', 1683389678),
(9, 1, 0, '', 4, 'aaaaa', 1683389678),
(10, 1, 0, '', 2, 'bbbb', 1683389719),
(11, 1, 0, '', 1, 'sdfsdffd', 1683391072),
(12, 1, 0, '', 4, 'ssssss', 1683391078),
(13, 1, 0, '', 5, 'nice', 1683391180),
(14, 1, 0, '', 4, 'Thats nice', 1683392938),
(15, 1, 0, '', 1, 'supper', 1683435659),
(16, 1, 0, '', 5, 'ok good', 1683435699),
(17, 1, 52, '', 5, 'This no one reviews', 1683438174),
(18, 1, 52, '', 2, 'new 1', 1683439418),
(19, 1, 52, '', 3, 'fgggg', 1683440668),
(20, 1, 52, '', 1, 'nice', 1683440713),
(21, 1, 52, 'product', 1, 'ggg', 1683440905),
(22, 1, 39, 'service', 5, 'ggss', 1683440914),
(23, 1, 39, 'service', 3, 'sdfdsfdsf', 1683441728),
(24, 1, 39, 'service', 2, 'good', 1683441740),
(25, 1, 52, 'product', 3, 'ssss', 1683441769),
(26, 1, 52, 'product', 5, 'next', 1683441846),
(27, 1, 39, 'service', 5, 'nice', 1683441899),
(28, 1, 39, 'service', 4, 'dsfsdfdf', 1683444777),
(29, 1, 39, 'services', 3, 'gg', 1683444844),
(30, 1, 39, 'service', 3, 'sdfdsfdsf', 1683445544),
(31, 1, 52, 'products', 5, 'motu patlu', 1683445568),
(32, 1, 52, 'products', 4, 'sdfdsf', 1683445611),
(33, 1, 52, 'products', 2, 'sfdsdf', 1683445636),
(34, 1, 39, 'service', 3, 'sdfsdf', 1683445650),
(35, 1, 52, 'products', 2, 'ssss', 1683449768),
(36, 1, 39, 'service', 3, 'ssss', 1683449777),
(37, 1, 39, 'service', 5, 'ggg', 1683449978),
(38, 1, 52, 'product', 5, 'ggggg', 1683450006),
(39, 1, 52, 'product', 2, 'ppppp', 1683450026),
(40, 1, 52, 'product', 1, 'aaa', 1683450034),
(41, 1, 52, 'product', 1, 'aaaaddd', 1683450049),
(42, 1, 39, 'service', 4, 'fff', 1683450071),
(43, 1, 52, 'product', 4, 'ssss', 1683450147),
(44, 1, 52, 'product', 3, 'sfdsfdsff', 1683450177),
(45, 1, 39, 'service', 2, 'sdfdsf', 1683450353),
(46, 1, 39, 'service', 2, 'lllll', 1683450374),
(47, 1, 39, 'service', 4, 'lll', 1683450383),
(48, 1, 39, 'service', 1, 'aaaa', 1683450406),
(49, 1, 52, 'product', 1, 'aaa', 1683450422),
(50, 1, 52, 'product', 5, 'bb', 1683450431),
(51, 1, 52, 'product', 3, 'ggs', 1683450458),
(52, 21, 52, 'product', 5, 'This is cool website', 1683459034),
(53, 21, 52, 'product', 4, 'good', 1683459084),
(54, 1, 41, 'product', 3, 'test review', 1683612018),
(55, 1, 41, 'product', 5, '5 star', 1683612145),
(56, 1, 53, 'product', 4, 'good product', 1684074118),
(57, 1, 53, 'product', 5, 'nice product', 1684074152),
(58, 1, 53, 'product', 5, 'Awesome', 1684074177),
(59, 1, 53, 'product', 5, 'Supper', 1684074217);

-- --------------------------------------------------------

--
-- Table structure for table `screenshots`
--

CREATE TABLE `screenshots` (
  `id` int(255) NOT NULL,
  `item_id` int(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `time` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `screenshots`
--

INSERT INTO `screenshots` (`id`, `item_id`, `type`, `title`, `time`) VALUES
(81, 826870, 'product', '05-05-2023Nagad-Logo.wine (1).png', 1683270050),
(84, 2708960, 'product', '05-05-2023Nagad-Logo.wine (1).png', 1683286370),
(88, 45047985, 'product', '05-05-2023331126530_496882992614409_1324266120821729683_n (1).png', 1683287471),
(100, 79568518, 'product', '05-05-2023Nagad-Logo.wine (1).png', 1683288676),
(105, 12497158, 'product', '05-05-2023আপনার পছন্দের সোসাল মিডিয়ার জন্য লাইক,ফলো,ভিউ,সাবস্ক্রাইব বাড়িয়ে নিন (6) (2).png', 1683288793),
(125, 12497158, 'product', '05-05-2023images.png', 1683308474),
(129, 12497158, 'product', '05-05-2023bank_transfer-512.webp', 1683308945),
(130, 9205603, 'product', '07-05-20231 final logos ss_vectorized.png', 1683437779),
(131, 9205603, 'product', '07-05-202305-05-2023bank_transfer-512.webp', 1683437779),
(132, 9205603, 'product', '07-05-202305-05-2023binance.jpg', 1683437779),
(133, 9205603, 'product', '07-05-202305-05-2023bkash-logo-835789094A-seeklogo.com.png', 1683437779),
(134, 9205603, 'product', '07-05-202305-05-2023dutch-bangla-rocket-logo-B4D1CC458D-seeklogo.com.png', 1683437779),
(135, 9205603, 'product', '07-05-202305-05-2023images.png', 1683437779),
(136, 9205603, 'product', '07-05-202305-05-2023Nagad-Logo.wine (1).png', 1683437779),
(137, 9205603, 'product', '07-05-202305-05-2023nogod.png', 1683437779),
(143, 44177251, 'product', '05-06-2023brand-05.png', 1685957411),
(144, 44177251, 'product', '05-06-2023brand-09.png', 1685957411),
(145, 2373091, 'product', '05-06-2023brand-02.png', 1685958977),
(146, 2373091, 'product', '05-06-2023brand-04.png', 1685958977),
(147, 2373091, 'product', '05-06-2023brand-05.png', 1685958977),
(148, 33136528, 'product', '05-06-2023download-icon.png', 1685959110),
(149, 33136528, 'product', '05-06-2023brand-02.png', 1685959110),
(150, 33136528, 'product', '05-06-2023brand-04.png', 1685959110),
(151, 33136528, 'product', '05-06-2023brand-05.png', 1685959110),
(152, 54804562, 'product', '05-06-2023brand-04.png', 1685961914),
(153, 54804562, 'product', '05-06-2023brand-05.png', 1685961914),
(154, 54804562, 'product', '05-06-2023brand-09.png', 1685961914),
(155, 17835569, 'product', '05-06-2023lees logo (1).png', 1685962114),
(156, 17835569, 'product', '05-06-2023attachment_108181310.png', 1685962114),
(157, 17835569, 'product', '05-06-2023awesome-motor-bike-logo-design_95982-439.avif', 1685962114),
(158, 13029844, 'product', '05-06-2023attachment_108181310.png', 1685963289),
(159, 13029844, 'product', '05-06-2023awesome-motor-bike-logo-design_95982-439.avif', 1685963289),
(160, 13029844, 'product', '05-06-2023Www.bellaand.com.png', 1685963289);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(255) NOT NULL,
  `pid` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `regular_price` int(255) NOT NULL,
  `sell_price` int(255) NOT NULL,
  `sell` int(255) NOT NULL,
  `review` int(255) NOT NULL,
  `comment` int(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `mini_content` longtext NOT NULL,
  `content` longtext NOT NULL,
  `description` longtext NOT NULL,
  `status` varchar(255) NOT NULL,
  `file_name` varchar(255) NOT NULL DEFAULT 'image.png',
  `time` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `pid`, `title`, `regular_price`, `sell_price`, `sell`, `review`, `comment`, `category`, `mini_content`, `content`, `description`, `status`, `file_name`, `time`) VALUES
(35, 1, 'Ella - Multipurpose Shopify Theme OS 2.0', 20000, 5000, 6, 0, 0, 'PHP', '<ul class=\"t-icon-list -font-size-s -icon-size-s -offset-flush\" style=\"margin-bottom: 8px; margin-left: 8px; -webkit-font-smoothing: antialiased; font-size: 12px; color: rgb(84, 84, 84); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><li class=\"t-icon-list__item -icon-ok\" style=\"position: relative; padding-left: 16px;\">&nbsp;<span class=\"is-visually-hidden\" style=\"border-style: initial; border-color: initial; border-image: initial; clip: rect(0px, 0px, 0px, 0px); height: 1px; margin: -1px; overflow: hidden; padding: 0px; position: absolute; width: 1px;\">Included:</span>Quality checked by Envato</li><li class=\"t-icon-list__item -icon-ok\" style=\"position: relative; padding-left: 16px;\">&nbsp;<span class=\"is-visually-hidden\" style=\"border-style: initial; border-color: initial; border-image: initial; clip: rect(0px, 0px, 0px, 0px); height: 1px; margin: -1px; overflow: hidden; padding: 0px; position: absolute; width: 1px;\">Included:</span>Future updates</li><li class=\"t-icon-list__item -icon-ok\" style=\"position: relative; padding-left: 16px;\">&nbsp;<span class=\"is-visually-hidden\" style=\"border-style: initial; border-color: initial; border-image: initial; clip: rect(0px, 0px, 0px, 0px); height: 1px; margin: -1px; overflow: hidden; padding: 0px; position: absolute; width: 1px;\">Included:</span>6 months support from&nbsp;<span class=\"purchase-form__author-name\">halothemes</span>&nbsp;</li></ul>', '<p>Last Update<time class=\"updated\" datetime=\"2023-03-20T13:22:11+11:00\">20 March 2023</time>Published8 December 2014High ResolutionYesCompatible Browsers<a rel=\"nofollow\" class=\"js-item-sidebar-meta-attributes\" href=\"https://themeforest.net/attributes/compatible-browsers/firefox\" style=\"color: rgb(0, 132, 180); text-decoration: none;\">Firefox</a>,&nbsp;<a rel=\"nofollow\" class=\"js-item-sidebar-meta-attributes\" href=\"https://themeforest.net/attributes/compatible-browsers/safari\" style=\"color: rgb(0, 132, 180); text-decoration: none;\">Safari</a>,&nbsp;<a rel=\"nofollow\" class=\"js-item-sidebar-meta-attributes\" href=\"https://themeforest.net/attributes/compatible-browsers/opera\" style=\"color: rgb(0, 132, 180); text-decoration: none;\">Opera</a>,&nbsp;<a rel=\"nofollow\" class=\"js-item-sidebar-meta-attributes\" href=\"https://themeforest.net/attributes/compatible-browsers/chrome\" style=\"color: rgb(0, 132, 180); text-decoration: none;\">Chrome</a>,&nbsp;<a rel=\"nofollow\" class=\"js-item-sidebar-meta-attributes\" href=\"https://themeforest.net/attributes/compatible-browsers/edge\" style=\"color: rgb(0, 132, 180); text-decoration: none;\">Edge</a>Compatible With<a rel=\"nofollow\" class=\"js-item-sidebar-meta-attributes\" href=\"https://themeforest.net/attributes/compatible-with/bootstrap%204.x\" style=\"color: rgb(0, 132, 180); text-decoration: none;\">Bootstrap 4.x</a>Software Version<a rel=\"nofollow\" class=\"js-item-sidebar-meta-attributes\" href=\"https://themeforest.net/attributes/compatible-software/shopify%202.0\" style=\"color: rgb(0, 132, 180); text-decoration: none;\">Shopify 2.0</a>ThemeForest Files Included<a rel=\"nofollow\" class=\"js-item-sidebar-meta-attributes\" href=\"https://themeforest.net/attributes/themeforest-files-included/layered%20psd\" style=\"color: rgb(0, 132, 180); text-decoration: none;\">Layered PSD</a>,&nbsp;<a rel=\"nofollow\" class=\"js-item-sidebar-meta-attributes\" href=\"https://themeforest.net/attributes/themeforest-files-included/css%20files\" style=\"color: rgb(0, 132, 180); text-decoration: none;\">CSS Files</a>,&nbsp;<a rel=\"nofollow\" class=\"js-item-sidebar-meta-attributes\" href=\"https://themeforest.net/attributes/themeforest-files-included/js%20files\" style=\"color: rgb(0, 132, 180); text-decoration: none;\">JS Files</a>Columns1Documentation<a rel=\"nofollow\" class=\"js-item-sidebar-meta-attributes\" href=\"https://themeforest.net/attributes/documentation/well%20documented\" style=\"color: rgb(0, 132, 180); text-decoration: none;\">Well Documented</a>LayoutResponsiveTags<span class=\"meta-attributes__attr-tags\" style=\"display: table-cell; position: relative; padding-right: 9px; max-width: 185px; overflow: hidden;\"><a title=\"color swatches\" rel=\"nofollow\" href=\"https://themeforest.net/search/color%20swatches\" style=\"color: rgb(0, 132, 180); text-decoration: none;\">color swatches</a>,&nbsp;<a title=\"dropshipping\" rel=\"nofollow\" href=\"https://themeforest.net/search/dropshipping\" style=\"color: rgb(0, 132, 180); text-decoration: none;\">dropshipping</a>,&nbsp;<a title=\"electronics\" rel=\"nofollow\" href=\"https://themeforest.net/search/electronics\" style=\"color: rgb(0, 132, 180); text-decoration: none;\">electronics</a>,&nbsp;<a title=\"fashion template\" rel=\"nofollow\" href=\"https://themeforest.net/search/fashion%20template\" style=\"color: rgb(0, 132, 180); text-decoration: none;\">fashion template</a>,&nbsp;<a title=\"furniture\" rel=\"nofollow\" href=\"https://themeforest.net/search/furniture\" style=\"color: rgb(0, 132, 180); text-decoration: none;\">furniture</a>,&nbsp;<a title=\"jewelry shopify theme\" rel=\"nofollow\" href=\"https://themeforest.net/search/jewelry%20shopify%20theme\" style=\"color: rgb(0, 132, 180); text-decoration: none;\">jewelry shopify theme</a>,&nbsp;<a title=\"multipurpose\" rel=\"nofollow\" href=\"https://themeforest.net/search/multipurpose\" style=\"color: rgb(0, 132, 180); text-decoration: none;\">multipurpose</a>,&nbsp;<a title=\"online fashion store\" rel=\"nofollow\" href=\"https://themeforest.net/search/online%20fashion%20store\" style=\"color: rgb(0, 132, 180); text-decoration: none;\">online fashion store</a>,&nbsp;<a title=\"responisve shopify theme\" rel=\"nofollow\" href=\"https://themeforest.net/search/responisve%20shopify%20theme\" style=\"color: rgb(0, 132, 180); text-decoration: none;\">responisve shopify theme</a>,&nbsp;<a title=\"right to left\" rel=\"nofollow\" href=\"https://themeforest.net/search/right%20to%20left\" style=\"color: rgb(0, 132, 180); text-decoration: none;\">right to left</a>,&nbsp;<a title=\"RTL Arabic\" rel=\"nofollow\" href=\"https://themeforest.net/search/RTL%20Arabic\" style=\"color: rgb(0, 132, 180); text-decoration: none;\">RTL Arabic</a>,&nbsp;<a title=\"shopify os 2.0\" rel=\"nofollow\" href=\"https://themeforest.net/search/shopify%20os%202.0\" style=\"color: rgb(0, 132, 180); text-decoration: none;\">shopify os 2.0</a>,&nbsp;<a title=\"shopify section\" rel=\"nofollow\" href=\"https://themeforest.net/search/shopify%20section\" style=\"color: rgb(0, 132, 180); text-decoration: none;\">shopify section</a>,&nbsp;<a title=\"single product\" rel=\"nofollow\" href=\"https://themeforest.net/search/single%20product\" style=\"color: rgb(0, 132, 180); text-decoration: none;\">single product</a>,&nbsp;<a title=\"the best shopify theme\" rel=\"nofollow\" href=\"https://themeforest.net/search/the%20best%20shopify%20theme\" style=\"color: rgb(0, 132, 180); text-decoration: none;\">the best shopify theme</a></span></p>', '<p><img src=\"https://camo.envatousercontent.com/d4b368b205a397eaf671b1aea1239b48e2af259d/687474703a2f2f7468656d65732e68616c6f7468656d65732e636f6d2f6d61726b6574706c6163652f6e65772d656c6c612d73686f706966792f30372d656c6c612d6c6f676f2e706e67\" alt=\"ELLA Responsive Shopify Template\" style=\"font-size: 16px; border-style: none; width: 1661.67px; height: 310.718px;\"></p><div data-view=\"toggleItemDescription\" style=\"color: rgb(84, 84, 84); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 16px;\"><div class=\"js-item-togglable-content has-toggle\" style=\"max-height: none; overflow: visible; position: relative; margin-bottom: 20px;\"><div class=\"js-item-description item-description\" style=\"padding: 15px 0px 20px;\"><div class=\"user-html user-html__with-lazy-load\" style=\"-webkit-font-smoothing: antialiased; line-height: 1.5; overflow: visible;\"><p style=\"margin-bottom: 20px; padding: 0px;\">ELLA is an&nbsp;<strong style=\"font-weight: bold;\">All-in-one Shopify Template</strong>&nbsp;with multiple layouts and styles allows you to create different structures and satisfies any specific requirements for different kinds of business. With Ella 6.0, we focus on key factors to build your successful store:</p><ul style=\"list-style-type: disc; margin-bottom: 20px; padding-left: 35px;\"><li><strong style=\"font-weight: bold;\">Optimized Code</strong></li><li><strong style=\"font-weight: bold;\">Good Performance</strong></li><li><strong style=\"font-weight: bold;\">Maximum Customizability &amp; Speed</strong></li><li><strong style=\"font-weight: bold;\">UI UX</strong></li><li><strong style=\"font-weight: bold;\">New Designs</strong></li><li><strong style=\"font-weight: bold;\">New Functionalities</strong></li><li><strong style=\"font-weight: bold;\">“Feature-rich” for Mobile</strong></li></ul><p style=\"margin-bottom: 20px; padding: 0px;\">and many enhancements including amending Ellas design to bring a smooth shopping experience. Let discover tons of professional and creative design options as well as advanced features in our theme spotlight + full theme features below. Grab Ella now to quickly create a modern and professional e-commerce website store.</p><p style=\"margin-bottom: 20px; padding: 0px;\"><br></p><br><p style=\"margin-bottom: 20px; padding: 0px;\"><img src=\"https://camo.envatousercontent.com/1b9cd1e79bb67fdb9820a9857f41122d03597017/687474703a2f2f7468656d65732e68616c6f7468656d65732e636f6d2f6d61726b6574706c6163652f6e65772d656c6c612d73686f706966792f32302d6368696c642d7468656d65732d7469746c652e706e67\" alt=\"ELLA Responsive Shopify Template\" style=\"border-style: none;\"></p><p style=\"margin-bottom: 20px; padding: 0px;\">Want to use our theme for other businesses without Fashion? We create a truly specific design for a specific business with Child Themes.</p><p style=\"margin-bottom: 20px; padding: 0px;\"><a href=\"http://themes.halothemes.com/marketplace/shopify-ella-ldp/child-themes/index.html\" rel=\"nofollow\" style=\"color: rgb(0, 132, 180); text-decoration: none;\"><img src=\"https://camo.envatousercontent.com/dce1bac7cf844d12197faab05e39a9dd6671fc6c/687474703a2f2f7468656d65732e68616c6f7468656d65732e636f6d2f6d61726b6574706c6163652f6e65772d656c6c612d73686f706966792f32302d6368696c642d7468656d65732d62746e2e706e67\" alt=\"ELLA Responsive Shopify Template\" style=\"border-style: none;\"></a></p><p style=\"margin-bottom: 20px; padding: 0px;\"><br></p><p style=\"margin-bottom: 20px; padding: 0px;\"><img src=\"https://camo.envatousercontent.com/e35862a62310b66e88510f546546040fc7d0b786/687474703a2f2f7468656d65732e68616c6f7468656d65732e636f6d2f6d61726b6574706c6163652f6e65772d656c6c612d73686f706966792f31302d6170702d706172746e6572732e706e67\" alt=\"App Partners / HaloThemes.com\" style=\"border-style: none;\"></p><p style=\"margin-bottom: 20px; padding: 0px;\"><a href=\"https://boostcommerce.net/\" rel=\"nofollow\" style=\"color: rgb(0, 132, 180); text-decoration: none;\"></a></p><p style=\"margin-bottom: 20px; padding: 0px;\"><strong style=\"font-weight: bold;\">Fast Navigation for Conversion</strong><br>Our advanced product filter system will optimize your conversion by helping your customers navigate to the product they need within seconds.<br></p><p style=\"margin-bottom: 20px; padding: 0px;\"><strong style=\"font-weight: bold;\">Smart Search &amp; Suggestions</strong><br>Our smart search &amp; suggestions with spell-check and quick results will reduce your customers shopping time and boost your sales.<br></p><p style=\"margin-bottom: 20px; padding: 0px;\"><strong style=\"font-weight: bold;\">Easy To Use</strong><br>One-click install. Get up and running with ease. Customizable to fit your needs. Little effort, big impact.</p><br><p style=\"margin-bottom: 20px; padding: 0px;\"><a href=\"https://boostcommerce.net/\" rel=\"nofollow\" style=\"color: rgb(0, 132, 180); text-decoration: none;\"><img src=\"https://camo.envatousercontent.com/11a272593c83c45da1a3589b6026e4797e907572/687474703a2f2f7468656d65732e68616c6f7468656d65732e636f6d2f6d61726b6574706c6163652f6e65772d656c6c612d73686f706966792f31322d627574746f6e2e706e67\" alt=\"BoostCommerce\" style=\"border-style: none;\"></a></p><p style=\"margin-bottom: 20px; padding: 0px;\"><img src=\"https://camo.envatousercontent.com/8e9a0dffbc451f62a7d21be8e89ac7b8469c58df/687474703a2f2f7468656d65732e68616c6f7468656d65732e636f6d2f6d61726b6574706c6163652f6e65772d656c6c612d73686f706966792f6c696e652e676966\" alt=\"Line\" style=\"border-style: none;\"></p><p style=\"margin-bottom: 20px; padding: 0px;\"><a href=\"https://bit.ly/35CUGL5\" rel=\"nofollow\" style=\"color: rgb(0, 132, 180); text-decoration: none;\"></a></p><p style=\"margin-bottom: 20px; padding: 0px;\"><a href=\"http://www.pagef.ly/8xxf\" rel=\"nofollow\" style=\"color: rgb(0, 132, 180); text-decoration: none;\"></a></p><p style=\"margin-bottom: 20px; padding: 0px;\"><a href=\"https://apps.shopify.com/avada-email-marketing?utm_medium=banner&amp;utm_source=halothemes\" rel=\"nofollow\" style=\"color: rgb(0, 132, 180); text-decoration: none;\"></a></p><p style=\"margin-bottom: 20px; padding: 0px;\"><a href=\"https://loox.io/app/halothemes\" rel=\"nofollow\" style=\"color: rgb(0, 132, 180); text-decoration: none;\"></a></p><p style=\"margin-bottom: 20px; padding: 0px;\"><img src=\"https://camo.envatousercontent.com/a9ff4d6964077fb6b12a62e30adeb5ac40d52bfa/687474703a2f2f7468656d65732e68616c6f7468656d65732e636f6d2f6d61726b6574706c6163652f6e65772d656c6c612d73686f706966792f33342d66756c6c2d7468656d652d66656174757265732d692e706e67\" alt=\"Full Theme Features\" style=\"border-style: none;\"></p><ul style=\"list-style-type: disc; margin-bottom: 20px; padding-left: 35px;\"><li>Include&nbsp;Google Rich Product Snippets&nbsp;for Better SEO</li><li>Responsive Design, Mobile Optimized &amp; Incredible UI/UX</li><li>Built with CSS 3 + HTML 5, Bootstrap 4.X</li><li>Google Web Fonts Integration,&nbsp;<strong style=\"font-weight: bold;\">Support Shopifys Font Picker</strong></li><li><strong style=\"font-weight: bold;\">20+ Stunning Homepage Layouts.</strong>&nbsp;</li><li><strong style=\"font-weight: bold;\">06+ Layouts Options for Category Page</strong></li><li><strong style=\"font-weight: bold;\">09+ Layouts Options for Product Page</strong></li><li><strong style=\"font-weight: bold;\">07 Collection page layouts, 06 Blog page layouts</strong></li><li><strong style=\"font-weight: bold;\">Multiple Headers + Footers, Multiple Mobile headers</strong></li><li><strong style=\"font-weight: bold;\">New: Upsell Bundled Products (Offer Discount feature)</strong></li><li><strong style=\"font-weight: bold;\">Numerous Custom Pages:</strong>&nbsp;Lookbook, FAQs, Contact Us, Brands layout A-Z,&nbsp;<strong style=\"font-weight: bold;\">Portfolio, About us, 404</strong>, Shop Instagram…</li><li><strong style=\"font-weight: bold;\">08 Advanced Mega menu layouts</strong></li><li><strong style=\"font-weight: bold;\">Quick Shop</strong></li><li>Ajax Layered Navigation (by Tags)</li><li><strong style=\"font-weight: bold;\">Express Order Module</strong></li><li>Enhanced Instant Search (static data/manual edit)</li><li>Multiple Languages (Built-in feature)</li><li>Lazy Loading Image</li><li><strong style=\"font-weight: bold;\">One Click Checkout</strong></li><li>Advanced Size Chart (Different size chart for each of product)</li><li>Custom Product Tabs (Different content for each of product)</li><li>Ajax Popup For Login &amp; Registration</li><li>Ask An Expert Form</li><li>GDPR Cookie Popup</li><li><strong style=\"font-weight: bold;\">Sticky Add to Cart</strong></li><li>Lookbook Module</li><li>Automatic Image resize</li><li>Ajax Infinite Scroll module + Pagination/ Product Count</li><li>Builder Sections on Homepage</li><li>Product Image Swap/ Advanced Product Swatches</li><li><strong style=\"font-weight: bold;\">New Wishlists Module</strong></li><li>Instagram Gallery</li><li><strong style=\"font-weight: bold;\">Grouped Product/ Frequently Bought Together with Discount</strong></li><li>Brands Page by using Alphabet</li><li>Video Slider</li><li>Recent Sales Popup Notifications</li><li>Image Gallery with Video + Zoom Effect in Product Details Page</li><li><strong style=\"font-weight: bold;\">Ajax Cart popup/ Ajax Sidebar Cart, Quick Edit Cart, Quick Update Cart</strong></li><li>Custom logo, favicon upload easily</li><li>Newsletter Signup Popup</li><li>Upsell features</li><li>Product Labels</li><li>GRID &amp; LIST Mode</li><li><strong style=\"font-weight: bold;\">Multiple Currencies, Auto currency by GEO location</strong></li><li>Hover Effect for Product Images</li><li>Product Reviews (app)</li><li>Fixed Header</li></ul><p style=\"margin-bottom: 20px; padding: 0px;\"><img src=\"https://camo.envatousercontent.com/70afdb5daee0f5b519615dd61b922bd39e2ecd0b/687474703a2f2f7468656d65732e68616c6f7468656d65732e636f6d2f6d61726b6574706c6163652f7472756e6b2f656c6c612f6c696e652e706e67\" alt=\"Line\" style=\"border-style: none;\"><br></p><p style=\"margin-bottom: 20px; padding: 0px;\"><strong style=\"font-weight: bold;\">**&nbsp;<u>Please note:</u>&nbsp;Images used and included in this theme are for&nbsp;<u>demo purpose</u>&nbsp;only,&nbsp;<u>NON-COMMERCE PURPOSE</u>. They are not a part of the theme and are NOT included in the final purchase files.</strong></p><p style=\"margin-bottom: 20px; padding: 0px;\"><strong style=\"font-weight: bold;\"><u>COMMERCIAL USAGE FOR OUR TEMPLATE DATA ON YOUR WEBSITE IS NOT ALLOWED AND IS AT YOUR OWN RISK.</u></strong><br></p><p style=\"margin-bottom: 20px; padding: 0px;\"><strong style=\"font-weight: bold;\">Credit:<br></strong>+&nbsp;<a href=\"https://www.freepik.com/\" rel=\"nofollow\" style=\"color: rgb(0, 132, 180); text-decoration: none;\">https://www.freepik.com/</a><br>+&nbsp;<a href=\"https://www.unsplash.com/\" rel=\"nofollow\" style=\"color: rgb(0, 132, 180); text-decoration: none;\">https://www.unsplash.com/</a><br></p><br><p style=\"margin-bottom: 20px; padding: 0px;\"><img src=\"https://camo.envatousercontent.com/df3e4b35d93f745780e40ff2ec36213b54a9254c/687474703a2f2f7468656d65732e68616c6f7468656d65732e636f6d2f6d61726b6574706c6163652f6e65772d656c6c612d73686f706966792f33362d637573746f6d65722d737570706f72742d692e706e67\" alt=\"Customer Support\" style=\"border-style: none;\"></p><p style=\"margin-bottom: 20px; padding: 0px;\">Contact our support team, please submit a support ticket at here:&nbsp;<strong style=\"font-weight: bold;\"><a href=\"https://halosoft.ticksy.com/\" rel=\"nofollow\" style=\"color: rgb(0, 132, 180); text-decoration: none;\">https://halosoft.ticksy.com/</a></strong><br><br></p><p style=\"margin-bottom: 20px; padding: 0px;\"><strong style=\"font-weight: bold;\">We will try our best to reply to your emails as soon as possible. However, we will prioritize email regarding Theme features and issues.</strong><br>- We will reply to your email regarding Theme features and issues within 24 hours.<br>- Regarding emails about template customization, we will reply to you within 48 hours (but normally much sooner).<br></p><p style=\"margin-bottom: 20px; padding: 0px;\"><img src=\"https://camo.envatousercontent.com/9aa2d3659924850c9debba4054f7d365686b4faa/687474703a2f2f7468656d65732e68616c6f7468656d65732e636f6d2f6d61726b6574706c6163652f7472756e6b2f6176656e75652d73686f706966792f6c6f76652d6f75722d776f726b2e706e67\" alt=\"LOVE US\" style=\"border-style: none;\"><br>Your opinions is highly appreciated and help us built better products.<br>Thank you.<br><strong style=\"font-weight: bold;\"><a href=\"http://halothemes.com/\" rel=\"nofollow\" style=\"color: rgb(0, 132, 180); text-decoration: none;\">HaloThemes Team.</a><strong style=\"font-weight: bold;\"><br><br></strong></strong></p><p style=\"margin-bottom: 20px; padding: 0px;\"><img src=\"https://camo.envatousercontent.com/7cad4da89ebded08783c5cc693a841b1e2822974/687474703a2f2f7468656d65732e68616c6f7468656d65732e636f6d2f6d61726b6574706c6163652f6e65772d656c6c612d73686f706966792f33352d6368616e67656c6f672d692e706e67\" alt=\"Change Log\" style=\"border-style: none;\"></p></div></div></div></div>', 'Publish', 'Screenshot_1.jpg', 1680309849);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(255) NOT NULL,
  `pg_name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `btn1` varchar(255) NOT NULL,
  `btn2` varchar(255) NOT NULL,
  `link1` varchar(255) NOT NULL,
  `link2` varchar(255) NOT NULL,
  `file_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `pg_name`, `title`, `btn1`, `btn2`, `link1`, `link2`, `file_name`) VALUES
(1, 'index', 'Store Management Software 4999 TK Xstorebd.com', 'Web Design', 'Web Development', '#', '#', 'slide1.jpg'),
(2, 'index', 'Beat Policing Website Design FREE ORDER NOW', 'Web Design', 'Web Development', '#', '#', 'slide2.jpg'),
(3, 'index', 'Online Phonebook App And Website FREE SERVICE', 'Web Design', 'Web Development', '#', '#', 'slide3.jpg'),
(4, 'index', 'eCommerce Website and Apps 10000 BDT', 'Web Design', 'Web Development', '#', '#', 'slide4.jpg'),
(5, 'index', 'Beautifull Website Design 5000 BDT', 'Web Design', 'Web Development', '#', '#', 'slide5.jpg'),
(11, 'services', 'Store Management Software 4999 TK Xstorebd.com', 'Web Design', 'Web Development', '#', '#', 'slide1.jpg'),
(12, 'services', 'Beat Policing Website Design FREE ORDER NOW', 'Web Design', 'Web Development', '#', '#', 'slide2.jpg'),
(13, 'services', 'Online Phonebook App And Website FREE SERVICE', 'Web Design', 'Web Development', '#', '#', 'slide3.jpg'),
(14, 'services', 'eCommerce Website and Apps 10000 BDT', 'Web Design', 'Web Development', '#', '#', 'slide4.jpg'),
(15, 'services', 'Beautifull Website Design 5000 BDT', 'Web Design', 'Web Development', '#', '#', 'slide5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `whatsapp` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `summery` longtext NOT NULL,
  `content` longtext NOT NULL,
  `file` varchar(255) NOT NULL DEFAULT 'avatar.jpg',
  `status` varchar(255) NOT NULL,
  `time` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `qualification`, `facebook`, `whatsapp`, `linkedin`, `mail`, `summery`, `content`, `file`, `status`, `time`) VALUES
(22, 'Md Munna Hasan', 'PHP Developer', 'https://www.facebook.com/', '0123456789', 'https://www.linkedin.com/', 'admin@gmail.com', '<span style=\"font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\">standard dummy text ever since the 1500s, when an unknown printer took a galley of type a</span>', '<p><span style=\"font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\">standard dummy text ever since the 1500s, when an unknown printer took a galley of type a</span><span style=\"font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\">standard dummy text ever since the 1500s, when an unknown printer took a galley of type a</span><span style=\"font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\">standard dummy text ever since the 1500s, when an unknown printer took a galley of type a</span><br></p>', '633f4454a0e0b90ba9645ea6_FigDone-Cool-Square.png', 'Published', 1673258415),
(23, 'Md Munna Hasan', 'PHP Developer', 'https://www.facebook.com/', '0123456789', 'https://www.linkedin.com/', 'admin@gmail.com', '<span style=\"font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\">standard dummy text ever since the 1500s, when an unknown printer took a galley of type a</span>', '<p><span style=\"font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\">standard dummy text ever since the 1500s, when an unknown printer took a galley of type a</span><span style=\"font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\">standard dummy text ever since the 1500s, when an unknown printer took a galley of type a</span><span style=\"font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\">standard dummy text ever since the 1500s, when an unknown printer took a galley of type a</span><br></p>', '633f4454a0e0b90ba9645ea6_FigDone-Cool-Square.png', 'Published', 1673258415),
(24, 'Md Munna Hasan', 'PHP Developer', 'https://www.facebook.com/', '0123456789', 'https://www.linkedin.com/', 'admin@gmail.com', '<span style=\"font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\">standard dummy text ever since the 1500s, when an unknown printer took a galley of type a</span>', '<p><span style=\"font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\">standard dummy text ever since the 1500s, when an unknown printer took a galley of type a</span><span style=\"font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\">standard dummy text ever since the 1500s, when an unknown printer took a galley of type a</span><span style=\"font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\">standard dummy text ever since the 1500s, when an unknown printer took a galley of type a</span><br></p>', '633f4454a0e0b90ba9645ea6_FigDone-Cool-Square.png', 'Published', 1673258415);

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` int(255) NOT NULL,
  `ticket_id` int(255) NOT NULL,
  `uid` int(255) NOT NULL,
  `pid` int(255) NOT NULL,
  `item_id` int(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `message` longtext NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Pending',
  `notify` varchar(255) NOT NULL DEFAULT 'New',
  `time` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `website`
--

CREATE TABLE `website` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `admin_title` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `keyword` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `phone` varchar(300) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `footer_text` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `admin_file_name` varchar(255) NOT NULL,
  `footer_img` varchar(255) NOT NULL,
  `favicon_name` varchar(255) NOT NULL,
  `admin_favicon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `website`
--

INSERT INTO `website` (`id`, `title`, `admin_title`, `logo`, `description`, `keyword`, `url`, `phone`, `mail`, `address`, `footer_text`, `facebook`, `youtube`, `linkedin`, `file_name`, `admin_file_name`, `footer_img`, `favicon_name`, `admin_favicon`) VALUES
(1, 'Bangladeshi Software', 'Admin - Bangladeshi Software', 'Bangladeshi Software', 'Bangladeshi Software is the biggest Software Company In Bangladesh. We provide any Desktop & Android Software. We Provide 100 Percent Customer Satisfaction', 'bangladeshi software, bangladeshi apps, bangladesh it institute, bangladesh website company, bangladeshi developer', 'https://www.bangladeshisoftware.com/', '+880 1719-182586', 'shamimlem@yahoo.com', 'Dinajpur, Bangladesh', 'All Rights Reserved © Bangladeshi Software 2022 SHAMIMLEM.', 'https://www.facebook.com/bangladeshisoftware', 'https://www.youtube.com/@BangladeshiSoftware', 'linkedin', '1 final logos ss_vectorized.png', '1 final logos ss_vectorized.png', 'logo.png', 'favicon.ico', 'favicon.ico');

-- --------------------------------------------------------

--
-- Table structure for table `withdraw`
--

CREATE TABLE `withdraw` (
  `id` int(255) NOT NULL,
  `pid` int(255) NOT NULL,
  `method` varchar(255) NOT NULL,
  `pmn_address` varchar(255) NOT NULL,
  `amount` int(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Pending',
  `notify` varchar(255) NOT NULL DEFAULT 'New',
  `time` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `withdraw`
--

INSERT INTO `withdraw` (`id`, `pid`, `method`, `pmn_address`, `amount`, `status`, `notify`, `time`) VALUES
(19, 1, 'paypal@mail.com', '34343', 111, 'Success', 'Old', 1674123130),
(20, 1, 'Bkash', '45454', 2432, 'Success', 'Old', 1674123198),
(24, 1, 'Nogod', '4524552', 5000, 'Success', 'Old', 1685972839),
(25, 1, 'Nogod', 'sdfdsf', 3443, 'Pending', 'Old', 1685972935);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deposit`
--
ALTER TABLE `deposit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_1_2`
--
ALTER TABLE `footer_1_2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_3_4_5`
--
ALTER TABLE `footer_3_4_5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_setting`
--
ALTER TABLE `general_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `investor_docs`
--
ALTER TABLE `investor_docs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `limit_setting`
--
ALTER TABLE `limit_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mail`
--
ALTER TABLE `mail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pagination`
--
ALTER TABLE `pagination`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reseller_docs`
--
ALTER TABLE `reseller_docs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `screenshots`
--
ALTER TABLE `screenshots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `website`
--
ALTER TABLE `website`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `withdraw`
--
ALTER TABLE `withdraw`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=173;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=243;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- AUTO_INCREMENT for table `deposit`
--
ALTER TABLE `deposit`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `footer_1_2`
--
ALTER TABLE `footer_1_2`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `footer_3_4_5`
--
ALTER TABLE `footer_3_4_5`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `general_setting`
--
ALTER TABLE `general_setting`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `investor_docs`
--
ALTER TABLE `investor_docs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `limit_setting`
--
ALTER TABLE `limit_setting`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mail`
--
ALTER TABLE `mail`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `pagination`
--
ALTER TABLE `pagination`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `reseller_docs`
--
ALTER TABLE `reseller_docs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `screenshots`
--
ALTER TABLE `screenshots`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=176;

--
-- AUTO_INCREMENT for table `website`
--
ALTER TABLE `website`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `withdraw`
--
ALTER TABLE `withdraw`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
