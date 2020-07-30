-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2020 at 07:13 AM
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
(11, 'CET Life Sciences Center', 'default@gmail.com', 'https://default.org/', 'The CET Life Sciences Center is a business incubator facility that offers laboratory and office space, equipment and infrastructure to early-stage biomedical companies. We help life sciences entrepreneurs start and grow businesses to turn promising ideas ', '2018-05-01 17:07:24');

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
(52, 6, 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `demographics`
--
ALTER TABLE `demographics`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_demographics`
--
ALTER TABLE `user_demographics`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id_FK` (`user_id_FK`) USING BTREE,
  ADD KEY `d_id_FK` (`d_id_FK`) USING BTREE;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_demographics`
--
ALTER TABLE `user_demographics`
  ADD CONSTRAINT `user_demographics_ibfk_1` FOREIGN KEY (`user_id_FK`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `user_demographics_ibfk_2` FOREIGN KEY (`d_id_FK`) REFERENCES `demographics` (`d_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
