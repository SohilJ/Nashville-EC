-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2020 at 04:37 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `demographics`
--

CREATE TABLE `demographics` (
  `d_id` int(11) NOT NULL,
  `demographic` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `demographics`
--

INSERT INTO `demographics` (`d_id`, `demographic`, `created`) VALUES
(1, 'American Indian or Alaskan Native', '0000-00-00 00:00:00'),
(2, 'Asian', '2020-07-29 23:32:17'),
(3, 'Black or African American', '2020-07-29 23:32:17'),
(4, 'Hispanic or Latino', '2020-07-29 23:35:16'),
(5, 'Middle Eastern', '2020-07-29 23:35:16'),
(6, 'Multi-Racial', '2020-07-29 23:35:16'),
(7, 'Native Hawaiian or Pacific Islander', '2020-07-29 23:35:16'),
(8, 'White', '2020-07-29 23:35:16'),
(9, 'Other', '2020-07-29 23:35:16'),
(10, 'Rather not say', '2020-07-29 23:35:16');

-- --------------------------------------------------------

--
-- Table structure for table `genders`
--

CREATE TABLE `genders` (
  `g_id` int(7) NOT NULL,
  `gender` varchar(54) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `genders`
--

INSERT INTO `genders` (`g_id`, `gender`) VALUES
(1, 'female'),
(2, 'male'),
(3, 'other'),
(4, 'rather not say'),
(5, 'non binary');

-- --------------------------------------------------------

--
-- Table structure for table `industries`
--

CREATE TABLE `industries` (
  `i_id` int(7) NOT NULL,
  `indsutry` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `industries`
--

INSERT INTO `industries` (`i_id`, `indsutry`) VALUES
(1, 'arts'),
(2, 'biomedical'),
(3, 'consumer goods'),
(4, 'financial services'),
(5, 'food and beverage'),
(6, 'healthcare'),
(7, 'music and entertainment'),
(8, 'technology'),
(9, 'other');

-- --------------------------------------------------------

--
-- Table structure for table `navigations`
--

CREATE TABLE `navigations` (
  `n_id` int(11) NOT NULL,
  `navigation` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `navigations`
--

INSERT INTO `navigations` (`n_id`, `navigation`) VALUES
(1, 'mentorship'),
(2, 'co-working spaces'),
(3, 'startup curriculum'),
(4, 'educational workshops'),
(5, 'networking opportunities'),
(6, 'funding'),
(7, 'accelerator/incubator programs'),
(8, 'entrepreneurial events');

-- --------------------------------------------------------

--
-- Table structure for table `stage`
--

CREATE TABLE `stage` (
  `b_id` int(11) NOT NULL,
  `stage` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stage`
--

INSERT INTO `stage` (`b_id`, `stage`) VALUES
(1, 'just an idea'),
(2, 'pre-revenue'),
(3, 'revenue less than 25k'),
(4, 'revenue between 25k and 100k'),
(5, 'revenue between 100k and 250k'),
(6, 'revenue greater than 250k');

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `t_id` int(7) NOT NULL,
  `type` varchar(54) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`t_id`, `type`) VALUES
(1, 'for profit'),
(2, 'brick and mortar'),
(3, 'small business'),
(4, 'product'),
(5, 'nonprofit'),
(6, 'social enterprise'),
(7, 'service'),
(8, 'scalable organization'),
(9, 'technology'),
(10, 'student business');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `website`, `description`, `created`) VALUES
(1, 'Citizens kitchen', 'alan@citizenkitchens.com', 'https://citizenkitchens.com/', 'Citizen Kitchens is a food business incubator that provides access to all of the utilities and resources food entrepreneurs need to grow their businesses. For a monthly cost, you can get access to commercial kitchen space, storage, waste management, and c', '2018-05-01 17:07:24'),
(2, 'Conexión Américas', 'ryan@conexionamericas.org', 'https://www.conexionamericas.org/', 'At Conexión Américas, our mission is to build a welcoming community and create opportunities where Latino families can belong, contribute and succeed.', '2018-05-01 17:07:24'),
(3, 'Bunker Labs', 'sue.black@bunkerlabs.org', 'https://bunkerlabs.org/', 'Bunker Labs is a national network of veteran entrepreneurs dedicated to helping new veteran entrepreneurs start their own business.', '2018-05-01 17:07:24'),
(4, 'EO', 'sameera@eonashville.com', 'https://www.eonetwork.org/', 'EO enables entrepreneurs to learn and grow from each other, leading to greater business success and an enriched personal life. We educate, we transform, we inspire and we offer invaluable resources in the form of local, regional and global events, leaders', '2018-05-01 17:07:24'),
(5, 'H.O.M.E.', 'reed@helpingmusic.org', 'https://www.helpingmusic.org/', 'HOMEs mission is to provide a supportive community for artist development and music production. They connect people in the entertainment and music industry through the use of their co-working space, studio space, and events.', '2018-05-01 17:07:24'),
(6, 'Launch Tennessee', 'default@gmail.com', 'https://launchtn.org/', 'Launch Tennessee is a public-private partnership that supports entrepreneurs from ideation to exit. We’re guided by a vision of making Tennessee the most startup-friendly state in the nation.', '2018-05-01 17:07:24'),
(7, 'Nashville Technology Council', 'erin.whitaker@technologycouncil.com', 'https://technologycouncil.com/', 'NTC exists to be a catalyst for the growth and influence of Middle Tennessee’s technology industry. By connecting, uniting, developing, and promoting our community, we propel the Nashville area forward to become a national leader in technology-based innov', '2018-05-01 17:07:24'),
(8, 'Center for Nonprofit Management', 'chelsea@cnm.com', 'https://www.cnm.org/', 'Our mission at CNM is amplifying the impact of nonprofits and their partners, in order to achieve a connected community equipped to realize our greatest opportunities. At CNM, your mission is our mission. Our job is to help you strengthen your organizatio', '2018-05-01 17:07:24'),
(9, 'Pathway Lending', 'leslie.hayes@pathwaylending.org', 'https://www.pathwaylending.org/', 'Provides lending solutions and educational services that supports the development, growth, and preservation of underserved small businesses, affordable housing, and sustainable communities. We are financing businesses and strengthening communities.', '2018-05-01 17:07:24'),
(10, 'Arts & Business Council', 'jharwelldye@abcnashville', 'https://abcnashville.org/', 'The Arts & Business Council is a 501(c)(3) organization that leverages and unites the unique resources of the arts and business communities to create a thriving, sustainable creative culture in Nashville.We create mutually beneficial partnerships between ', '2018-05-01 17:07:24'),
(11, 'CET Life Sciences Center', 'default@gmail.com', 'https://default.org/', 'The CET Life Sciences Center is a business incubator facility that offers laboratory and office space, equipment and infrastructure to early-stage biomedical companies. We help life sciences entrepreneurs start and grow businesses to turn promising ideas ', '2018-05-01 17:07:24'),
(12, 'Pathway Women\'s Business Center', 'jarlecia@pathwaywbc.org ', 'https://www.pathwaywbc.org/', 'The mission of Pathway Women\'s Business Center is to provide a forum for training, education, and peer learning that supports and accelerates the growth of women owned business and strengthens their impact upon the economy.\r\nIn order to achieve this, they', '2020-08-04 15:21:20'),
(13, 'Nashville Business Incubation Center', 'ajones@nbiconline.com', 'https://nbiconline.com/', 'The Nashville Business Incubation Center', '2020-08-04 15:21:20'),
(14, 'Nashville Entrepreneur Center', 'jordan.sanders@ec.co', 'https://www.ec.co/', 'The Nashville Entrepreneur Center is a nonprofit with the mission to connect entrepreneurs with the critical resources they need to create, launch, or grow a business.', '2020-08-04 15:24:10'),
(15, 'Nashville Institute for Faith and Work ', 'sbradley@nifw.org', 'https://www.nifw.org/', 'The Nashville Institute for Faith and Work is dedicated to helping individuals and groups integrate their Christian faith into their day-to-day work in a way that brings about human and organizational flourishing in Nashville and beyond.', '2020-08-04 15:24:10'),
(16, 'SCORE', 'ialwayswantedtodance@gmail.com', 'https://nashville.score.org/', 'The Nashville SCORE chapter provides business mentoring services and educational workshops to entrepreneurs and business owners located in the 30 counties comprising middle Tennessee.', '2020-08-04 15:25:49'),
(17, 'Small Business Administration', 'latanya.channel@sba.gov ', 'https://www.sba.gov/offices/district/tn/nashville', 'The SBA functions as an independent agency of the federal government to aid, counsel, assist and protect the interests of small business concerns, preserve free competitive enterprise and to maintain and strengthen the overall economy of our nation.', '2020-08-04 15:25:49'),
(18, 'Social Enterprise Alliance', 'info@socialenterprise.us', 'http://nashvillesocialenterprise.org/', 'The Nashville Social Enterprise Alliance engages the resources, skills, and assets of SEA, our Nashville community partners and chapter members, including our network of investors, educators, mentors, philanthropists, non-profits, businesses, and policyma', '2020-08-04 16:16:25'),
(19, 'Pathway Veterans Outreach Center', 'reggie.ordonez@pathwaylending.org', 'https://www.pathwaylending.org/vboc/', 'The VBOC is designed to provide entrepreneurial development services such as business training, counseling and mentoring, and referrals for eligible veterans owning or considering starting a small business.', '2020-08-04 15:27:45'),
(20, 'The Wondr\'y', 'default@gmail.com', 'https://www.vanderbilt.edu/thewondry/', 'The Wond’ry is the epicenter for creativity, innovation, and entrepreneurship on Vanderbilt\'s campus. Students and faculty are encouraged to build, innovate, explore and care. The Wond’ry is the primary point of connection for students interested in innov', '2020-08-04 15:27:45'),
(21, 'TSBDC', 'gjones7@tnstate.edu', 'https://www.tsbdc.org/tsu/', 'We are here to help entrepreneurs help themselves. The Tennessee Small Business Development Center provides a myriad of services for entrepreneurs to take advantage of like free confidential counseling as well as training seminars, both public and private', '2020-08-04 15:30:05'),
(22, '\r\nCorner to Corner', 'shana@cornertocorner.org ', 'https://cornertocorner.org/', 'We believe Nashville should be a place where all neighbors flourish. We are compelled by the love of Christ to love our neighbors as ourselves. We seek creative ways to meet the needs of our community, believing Nashville can be a place where all neighbor', '2020-08-04 15:30:05');

-- --------------------------------------------------------

--
-- Table structure for table `users_industries`
--

CREATE TABLE `users_industries` (
  `user_id_FK` int(7) NOT NULL,
  `i_id_FK` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_industries`
--

INSERT INTO `users_industries` (`user_id_FK`, `i_id_FK`) VALUES
(1, 5),
(2, 1),
(2, 3),
(2, 4),
(2, 5),
(2, 6),
(2, 7),
(2, 8),
(2, 9),
(3, 1),
(3, 3),
(3, 4),
(3, 5),
(3, 6),
(3, 7),
(3, 8),
(3, 9),
(4, 1),
(4, 3),
(4, 4),
(4, 5),
(4, 6),
(4, 7),
(4, 8),
(4, 9),
(6, 1),
(6, 3),
(6, 4),
(6, 5),
(6, 6),
(6, 7),
(6, 8),
(6, 9),
(12, 1),
(12, 3),
(12, 4),
(12, 5),
(12, 6),
(12, 7),
(12, 8),
(12, 9),
(13, 1),
(13, 3),
(13, 4),
(13, 5),
(13, 6),
(13, 7),
(13, 8),
(13, 9),
(14, 3),
(14, 4),
(14, 5),
(14, 6),
(14, 7),
(14, 8),
(14, 9),
(15, 1),
(15, 3),
(15, 4),
(15, 5),
(15, 6),
(15, 7),
(15, 8),
(15, 9),
(16, 1),
(16, 3),
(16, 4),
(16, 5),
(16, 6),
(16, 7),
(16, 8),
(16, 9),
(17, 1),
(17, 3),
(17, 4),
(17, 5),
(17, 6),
(17, 7),
(17, 8),
(17, 9),
(18, 1),
(18, 3),
(18, 4),
(18, 5),
(18, 6),
(18, 7),
(18, 8),
(18, 9),
(19, 1),
(19, 3),
(19, 4),
(19, 5),
(19, 6),
(19, 7),
(19, 8),
(19, 9),
(20, 1),
(20, 3),
(20, 4),
(20, 5),
(20, 6),
(20, 7),
(20, 8),
(20, 9),
(21, 1),
(21, 3),
(21, 4),
(21, 5),
(21, 6),
(21, 7),
(21, 8),
(21, 9),
(22, 1),
(22, 3),
(22, 4),
(22, 5),
(22, 6),
(22, 7),
(22, 8),
(22, 9),
(5, 7),
(7, 8),
(10, 1),
(11, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users_types`
--

CREATE TABLE `users_types` (
  `user_id_FK` int(7) NOT NULL,
  `t_id_FK` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_demographics`
--

CREATE TABLE `user_demographics` (
  `id` int(11) NOT NULL,
  `user_id_FK` int(11) NOT NULL,
  `d_id_FK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_demographics`
--

INSERT INTO `user_demographics` (`id`, `user_id_FK`, `d_id_FK`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 1, 6),
(7, 1, 7),
(8, 1, 8),
(9, 1, 9),
(10, 1, 10),
(11, 2, 4),
(12, 2, 9),
(13, 3, 1),
(14, 3, 2),
(15, 3, 3),
(16, 3, 4),
(17, 3, 5),
(18, 3, 6),
(19, 3, 7),
(20, 3, 8),
(21, 3, 9),
(22, 3, 10),
(23, 4, 1),
(24, 4, 2),
(25, 4, 3),
(26, 4, 4),
(27, 4, 5),
(28, 4, 6),
(29, 4, 7),
(30, 4, 8),
(31, 4, 9),
(32, 4, 10),
(33, 5, 1),
(34, 5, 2),
(35, 5, 3),
(36, 5, 4),
(37, 5, 5),
(38, 5, 6),
(39, 5, 7),
(40, 5, 8),
(41, 5, 9),
(42, 5, 10),
(43, 6, 1),
(44, 6, 2),
(45, 6, 3),
(46, 6, 4),
(47, 6, 5),
(48, 6, 6),
(49, 6, 7),
(50, 6, 8),
(51, 6, 9),
(52, 6, 10),
(53, 7, 1),
(54, 7, 2),
(55, 7, 3),
(56, 7, 4),
(57, 7, 5),
(58, 7, 6),
(59, 7, 7),
(60, 7, 8),
(61, 7, 9),
(62, 7, 10),
(63, 8, 1),
(64, 8, 2),
(65, 8, 3),
(66, 8, 4),
(67, 8, 5),
(68, 8, 6),
(69, 8, 7),
(70, 8, 8),
(71, 8, 9),
(72, 8, 10),
(73, 9, 1),
(74, 9, 2),
(75, 9, 3),
(76, 9, 4),
(77, 9, 5),
(78, 9, 6),
(79, 9, 7),
(80, 9, 8),
(81, 9, 9),
(82, 9, 10),
(83, 10, 1),
(84, 10, 2),
(85, 10, 3),
(86, 10, 4),
(87, 10, 5),
(88, 10, 6),
(89, 10, 7),
(90, 10, 8),
(91, 10, 9),
(92, 10, 10),
(93, 11, 1),
(94, 11, 2),
(95, 11, 3),
(96, 11, 4),
(97, 11, 5),
(98, 11, 6),
(99, 11, 7),
(100, 11, 8),
(101, 11, 9),
(102, 11, 10),
(103, 12, 1),
(104, 12, 2),
(105, 12, 3),
(106, 12, 4),
(107, 12, 5),
(108, 12, 6),
(109, 12, 7),
(110, 12, 8),
(111, 12, 9),
(112, 12, 10),
(113, 13, 1),
(114, 13, 2),
(115, 13, 3),
(116, 13, 4),
(117, 13, 5),
(118, 13, 6),
(119, 13, 7),
(120, 13, 8),
(121, 13, 9),
(122, 13, 10),
(123, 14, 1),
(124, 14, 2),
(125, 14, 3),
(126, 14, 4),
(127, 14, 5),
(128, 14, 6),
(129, 14, 7),
(130, 14, 8),
(131, 14, 9),
(132, 14, 10),
(133, 15, 1),
(134, 15, 2),
(135, 15, 3),
(136, 15, 4),
(137, 15, 5),
(138, 15, 6),
(139, 15, 7),
(140, 15, 8),
(141, 15, 9),
(142, 15, 10),
(143, 16, 1),
(144, 16, 2),
(145, 16, 3),
(146, 16, 4),
(147, 16, 5),
(148, 16, 6),
(149, 16, 7),
(150, 16, 8),
(151, 16, 9),
(152, 16, 10),
(153, 17, 1),
(154, 17, 2),
(155, 17, 3),
(156, 17, 4),
(157, 17, 5),
(158, 17, 6),
(159, 17, 7),
(160, 17, 8),
(161, 17, 9),
(162, 17, 10),
(163, 18, 1),
(164, 18, 2),
(165, 18, 3),
(166, 18, 4),
(167, 18, 5),
(168, 18, 6),
(169, 18, 7),
(170, 18, 8),
(171, 18, 9),
(172, 18, 10),
(173, 19, 1),
(174, 1, 2),
(175, 19, 3),
(176, 19, 4),
(177, 19, 5),
(178, 19, 6),
(179, 19, 7),
(180, 19, 8),
(181, 19, 9),
(182, 19, 10),
(183, 20, 1),
(184, 20, 2),
(185, 20, 3),
(186, 20, 4),
(187, 20, 5),
(188, 20, 6),
(189, 20, 7),
(190, 20, 8),
(191, 20, 9),
(192, 20, 10),
(193, 21, 1),
(194, 21, 2),
(195, 21, 3),
(196, 21, 4),
(197, 21, 5),
(198, 21, 6),
(199, 21, 7),
(200, 21, 8),
(201, 21, 9),
(202, 21, 10),
(203, 22, 3),
(204, 22, 6),
(205, 22, 9);

-- --------------------------------------------------------

--
-- Table structure for table `user_genders`
--

CREATE TABLE `user_genders` (
  `user_id_FK` int(7) NOT NULL,
  `g_id_FK` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_genders`
--

INSERT INTO `user_genders` (`user_id_FK`, `g_id_FK`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(2, 1),
(2, 2),
(2, 3),
(2, 4),
(3, 1),
(3, 2),
(3, 3),
(3, 4),
(4, 1),
(4, 2),
(4, 3),
(4, 4),
(5, 1),
(5, 2),
(5, 3),
(5, 4),
(6, 1),
(6, 2),
(6, 3),
(6, 4),
(7, 1),
(7, 2),
(7, 3),
(7, 4),
(8, 1),
(8, 2),
(8, 3),
(8, 4),
(9, 1),
(9, 2),
(9, 3),
(9, 4),
(10, 1),
(10, 2),
(10, 3),
(10, 4),
(11, 1),
(11, 2),
(11, 3),
(11, 4),
(12, 1),
(12, 2),
(12, 3),
(12, 4),
(13, 1),
(13, 2),
(13, 3),
(13, 4),
(14, 1),
(14, 2),
(14, 3),
(14, 4),
(15, 1),
(15, 2),
(15, 3),
(15, 4),
(16, 1),
(16, 2),
(16, 3),
(16, 4),
(17, 1),
(17, 2),
(17, 3),
(17, 4),
(18, 1),
(18, 2),
(18, 3),
(18, 4),
(19, 1),
(19, 2),
(19, 3),
(19, 4),
(20, 1),
(20, 2),
(20, 3),
(20, 4),
(21, 1),
(21, 2),
(21, 3),
(21, 4),
(22, 1),
(22, 2),
(22, 3),
(22, 4);

-- --------------------------------------------------------

--
-- Table structure for table `user_navigations`
--

CREATE TABLE `user_navigations` (
  `user_id_FK` int(11) NOT NULL,
  `n_id_FK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_navigations`
--

INSERT INTO `user_navigations` (`user_id_FK`, `n_id_FK`) VALUES
(1, 5),
(1, 2),
(1, 1),
(2, 3),
(2, 1),
(2, 4),
(3, 5),
(3, 1),
(3, 2),
(4, 5),
(4, 6),
(5, 2),
(5, 5),
(6, 6),
(6, 4),
(6, 5),
(6, 1),
(6, 8),
(7, 4),
(7, 5),
(7, 1),
(8, 4),
(8, 5),
(9, 6),
(10, 1),
(10, 3),
(10, 5),
(11, 2),
(11, 5),
(12, 4),
(12, 5),
(12, 3),
(12, 1),
(13, 1),
(13, 2),
(13, 3),
(13, 4),
(13, 7),
(14, 2),
(14, 5),
(14, 3),
(14, 4),
(14, 1),
(14, 7),
(14, 8),
(14, 6),
(15, 4),
(15, 1),
(15, 5),
(16, 1),
(16, 4),
(17, 6),
(17, 4),
(18, 1),
(18, 4),
(19, 1),
(19, 5),
(20, 4),
(20, 2),
(20, 3),
(20, 1),
(21, 1),
(21, 4),
(22, 1),
(22, 3),
(22, 4);

-- --------------------------------------------------------

--
-- Table structure for table `user_stages`
--

CREATE TABLE `user_stages` (
  `user_id_FK` int(11) NOT NULL,
  `b_id_FK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_stages`
--

INSERT INTO `user_stages` (`user_id_FK`, `b_id_FK`) VALUES
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(2, 1),
(2, 2),
(2, 3),
(2, 4),
(2, 5),
(2, 6),
(3, 1),
(3, 2),
(3, 3),
(3, 4),
(3, 5),
(3, 6),
(4, 6),
(5, 1),
(5, 2),
(5, 3),
(5, 4),
(5, 5),
(5, 6),
(6, 1),
(6, 2),
(6, 3),
(6, 4),
(6, 5),
(6, 6),
(7, 1),
(7, 2),
(7, 3),
(7, 4),
(7, 5),
(7, 6),
(8, 2),
(8, 3),
(8, 4),
(8, 5),
(8, 6),
(9, 3),
(10, 1),
(10, 2),
(10, 3),
(10, 4),
(10, 5),
(10, 6),
(11, 1),
(11, 2),
(11, 3),
(12, 1),
(12, 2),
(12, 3),
(13, 1),
(13, 2),
(13, 3),
(13, 4),
(13, 5),
(13, 6),
(14, 1),
(14, 2),
(14, 3),
(14, 4),
(14, 5),
(14, 6),
(15, 2),
(15, 3),
(15, 4),
(15, 5),
(16, 1),
(16, 2),
(16, 3),
(16, 4),
(16, 5),
(16, 6),
(17, 1),
(17, 2),
(17, 3),
(17, 4),
(17, 5),
(17, 6),
(18, 1),
(18, 2),
(18, 3),
(18, 4),
(18, 5),
(18, 6),
(19, 1),
(19, 2),
(19, 3),
(19, 4),
(19, 5),
(19, 6),
(20, 1),
(20, 2),
(20, 3),
(21, 1),
(21, 2),
(21, 3),
(21, 4),
(21, 5),
(21, 6),
(22, 1),
(22, 2),
(22, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `demographics`
--
ALTER TABLE `demographics`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `genders`
--
ALTER TABLE `genders`
  ADD PRIMARY KEY (`g_id`);

--
-- Indexes for table `industries`
--
ALTER TABLE `industries`
  ADD PRIMARY KEY (`i_id`);

--
-- Indexes for table `navigations`
--
ALTER TABLE `navigations`
  ADD PRIMARY KEY (`n_id`);

--
-- Indexes for table `stage`
--
ALTER TABLE `stage`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_industries`
--
ALTER TABLE `users_industries`
  ADD KEY `user_id_FK` (`user_id_FK`),
  ADD KEY `i_id_FK` (`i_id_FK`);

--
-- Indexes for table `users_types`
--
ALTER TABLE `users_types`
  ADD KEY `user_id_FK` (`user_id_FK`),
  ADD KEY `t_id_FK` (`t_id_FK`);

--
-- Indexes for table `user_demographics`
--
ALTER TABLE `user_demographics`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id_FK` (`user_id_FK`) USING BTREE,
  ADD KEY `d_id_FK` (`d_id_FK`) USING BTREE;

--
-- Indexes for table `user_genders`
--
ALTER TABLE `user_genders`
  ADD KEY `user_id_FK` (`user_id_FK`),
  ADD KEY `g_id_FK` (`g_id_FK`);

--
-- Indexes for table `user_navigations`
--
ALTER TABLE `user_navigations`
  ADD KEY `user_id_FK` (`user_id_FK`),
  ADD KEY `n_id_FK` (`n_id_FK`);

--
-- Indexes for table `user_stages`
--
ALTER TABLE `user_stages`
  ADD KEY `user_id_FK` (`user_id_FK`),
  ADD KEY `b_id_FK` (`b_id_FK`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_industries`
--
ALTER TABLE `users_industries`
  ADD CONSTRAINT `users_industries_ibfk_1` FOREIGN KEY (`user_id_FK`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `users_industries_ibfk_2` FOREIGN KEY (`i_id_FK`) REFERENCES `industries` (`i_id`);

--
-- Constraints for table `users_types`
--
ALTER TABLE `users_types`
  ADD CONSTRAINT `users_types_ibfk_1` FOREIGN KEY (`user_id_FK`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `users_types_ibfk_2` FOREIGN KEY (`t_id_FK`) REFERENCES `types` (`t_id`);

--
-- Constraints for table `user_demographics`
--
ALTER TABLE `user_demographics`
  ADD CONSTRAINT `user_demographics_ibfk_1` FOREIGN KEY (`user_id_FK`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `user_demographics_ibfk_2` FOREIGN KEY (`d_id_FK`) REFERENCES `demographics` (`d_id`);

--
-- Constraints for table `user_genders`
--
ALTER TABLE `user_genders`
  ADD CONSTRAINT `user_genders_ibfk_1` FOREIGN KEY (`user_id_FK`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `user_genders_ibfk_2` FOREIGN KEY (`g_id_FK`) REFERENCES `genders` (`g_id`);

--
-- Constraints for table `user_navigations`
--
ALTER TABLE `user_navigations`
  ADD CONSTRAINT `user_navigations_ibfk_1` FOREIGN KEY (`user_id_FK`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `user_navigations_ibfk_2` FOREIGN KEY (`n_id_FK`) REFERENCES `navigations` (`n_id`);

--
-- Constraints for table `user_stages`
--
ALTER TABLE `user_stages`
  ADD CONSTRAINT `user_stages_ibfk_1` FOREIGN KEY (`user_id_FK`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `user_stages_ibfk_2` FOREIGN KEY (`b_id_FK`) REFERENCES `stage` (`b_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
