-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2019 at 08:49 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medidove`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us_form`
--

CREATE TABLE `contact_us_form` (
  `customer_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile_number` varchar(20) NOT NULL,
  `subject` varchar(150) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us_form`
--

INSERT INTO `contact_us_form` (`customer_id`, `name`, `email`, `mobile_number`, `subject`, `message`) VALUES
(25, 'plumbing1', 'usama @gmail.com', '123456', 'complain', 'WEREgrWetndtrndtrn'),
(26, 'usama ', 'umair_6565@yahoo.com', '03000116565', 'exelent', 'xfykmxrfdsfsvdssvsdf');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `user_id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `werbpage` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`user_id`, `image`, `heading`, `werbpage`) VALUES
(11, '1552647692Untitled-1 (2).jpg', 'Body Surgery ', 'Lorem ipsum dolor sit amet, consectetur<br>  adipiscing elit.Maecenas tincidunt<br>  commodo turpis '),
(12, '1552647764Untitledaa-1.jpg', 'Dental Care', 'Lorem ipsum dolor sit amet, consectetur<br>  adipiscing elit.Maecenas tincidunt<br>  commodo turpis '),
(13, '1552647804eyes.jpg', 'Eye Care', 'Lorem ipsum dolor sit amet, consectetur<br>  adipiscing elit.Maecenas tincidunt<br>  commodo turpis '),
(14, '1552647844Untitled-1 (2).jpg', 'Body Surgery ', 'Lorem ipsum dolor sit amet, consectetur<br>  adipiscing elit.Maecenas tincidunt<br>  commodo turpis '),
(15, '1552647859Untitledaa-1.jpg', 'Dental Care', 'Lorem ipsum dolor sit amet, consectetur<br>  adipiscing elit.Maecenas tincidunt<br>  commodo turpis '),
(16, '1552647868eyes.jpg', 'Eye Care', 'Lorem ipsum dolor sit amet, consectetur<br>  adipiscing elit.Maecenas tincidunt<br>  commodo turpis ');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `id` int(10) NOT NULL,
  `imgpath` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`id`, `imgpath`) VALUES
(8, '1554197937logo1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(20) NOT NULL,
  `menu_name` varchar(20) NOT NULL,
  `menu_icon` varchar(30) NOT NULL,
  `menu_icon_last` varchar(50) NOT NULL,
  `menu_link` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_name`, `menu_icon`, `menu_icon_last`, `menu_link`) VALUES
(12, 'Home +', '', '', 'index.php'),
(14, 'Department +', '', '', 'index.php'),
(15, 'Doctor +', '', '', 'index.php'),
(16, 'News +', '', '', 'index.php'),
(17, 'contact +', '', '', 'contect_us.php'),
(18, 'pages +', '', '', 'index.php');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `user_id` int(10) NOT NULL,
  `image` varchar(100) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `werbpage` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`user_id`, `image`, `heading`, `werbpage`) VALUES
(9, '1552908793Untitlddddded-1.jpg', 'Lorem ipsum dolor sit amet<br>  adipiscing elit Maecenas.', '  Lorem ipsum dolor sit amet, consectetur<br>  adipiscing elit.Maecenas tincidunt<br>  commodo turpi'),
(10, '1552908876Untitlddddded-1.jpg', 'Lorem ipsum dolor sit amet<br>  adipiscing elit Maecenas.', ' Lorem ipsum dolor sit amet, consectetur<br>  adipiscing elit.Maecenas tincidunt<br>  commodo turpis'),
(11, '1552908992aaaxa1.jpg', 'Lorem ipsum dolor sit amet adipiscing elit Maecenas.', 'Lorem ipsum dolor sit amet, consectetur\r\nadipiscing elit.Maecenas tincidunt\r\ncommodo turpis'),
(12, '1552909056aaaxa1.jpg', 'Dental Care', 'asc'),
(13, '1552909108aaaxa1.jpg', 'Dental Care', 'asc');

-- --------------------------------------------------------

--
-- Table structure for table `news_sidebar`
--

CREATE TABLE `news_sidebar` (
  `user_id` int(10) NOT NULL,
  `heading` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news_sidebar`
--

INSERT INTO `news_sidebar` (`user_id`, `heading`) VALUES
(2, 'Lorem ipsum dolor sit <br> aaas  elit Maecenas.'),
(3, 'Lorem ipsum dolor sit <br>   elit Maecenas.'),
(4, 'Lorem ipsum dolor sit <br>   elit Maecenas.'),
(5, 'Lorem ipsum dolor sit <br>   elit Maecenas.');

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `page_id` int(20) NOT NULL,
  `page_name` varchar(50) NOT NULL,
  `page_heading` varchar(100) NOT NULL,
  `page_content` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`page_id`, `page_name`, `page_heading`, `page_content`) VALUES
(49, 'page1', 'its 2nd heading ', '<p><span style=\"color: #ff0000;\">&nbsp;<a title=\"Computer science\" href=\"https://en.wikipedia.org/wiki/Computer_science\">computer science</a>, a&nbsp;<strong>rough set</strong>, first described by&nbsp;<a title=\"Poles\" href=\"https://en.wikipedia.org/wiki/Poles\">Polish</a>&nbsp;computer scientist&nbsp;<a class=\"mw-redirect\" title=\"Zdzislaw Pawlak\" href=\"https://en.wikipedia.org/wiki/Zdzislaw_Pawlak\">ZdzisÅ‚aw I. Pawlak</a>, is a formal approximation of a&nbsp;<a class=\"mw-redirect\" title=\"Crisp set\" href=\"https://en.wikipedia.org/wiki/Crisp_set\">crisp set</a>&nbsp;(i.e., conventional set) in terms of a pair of sets which give the&nbsp;<em>lower</em>and the&nbsp;<em>upper</em>&nbsp;approximation of the original set. In the standard version of rough set theory (Pawlak 1991), the lower- and upper-approximation sets are crisp sets, but in other variations, the approximating sets may be&nbsp;<a class=\"mw-redirect\" title=\"Fuzzy sets\" href=\"https://en.wikipedia.org/wiki/Fuzzy_sets\">fuzzy sets&'),
(50, 'page2', 'its 3333 heading', '<p><span style=\"background-color: #993366;\">&nbsp;<a title=\"Computer science\" href=\"https://en.wikipedia.org/wiki/Computer_science\">computer science</a>, a&nbsp;<strong>rough set</strong>, first described by&nbsp;<a title=\"Poles\" href=\"https://en.wikipedia.org/wiki/Poles\">Polish</a>&nbsp;computer scientist&nbsp;<a class=\"mw-redirect\" title=\"Zdzislaw Pawlak\" href=\"https://en.wikipedia.org/wiki/Zdzislaw_Pawlak\">ZdzisÅ‚aw I. Pawlak</a>, is a formal approximation of a&nbsp;<a class=\"mw-redirect\" title=\"Crisp set\" href=\"https://en.wikipedia.org/wiki/Crisp_set\">crisp set</a>&nbsp;(i.e., conventional set) in terms of a pair of sets which give the&nbsp;<em>lower</em>and the&nbsp;<em>upper</em>&nbsp;approximation of the original set. In the standard version of rough set theory (Pawlak 1991), the lower- and upper-approximation sets are crisp sets, but in other variations, the approximating sets may be&nbsp; </span></p>'),
(51, 'page3', 'its first heading', '<ol>\r\n<li><span style=\"color: #00ff00;\">The following section contains an overview of the basic framework of rough set theory, as originally proposed by&nbsp;<a class=\"mw-redirect\" title=\"Zdzislaw Pawlak\" href=\"https://en.wikipedia.org/wiki/Zdzislaw_Pawlak\">ZdzisÅ‚aw I. Pawlak</a>, along with some of the key definitions. More formal properties and boundaries of rough sets can be found in Pawlak (1991) and cited references. The initial and basic theory of rough sets is sometimes referred to as&nbsp;<em>\"Pawlak Rough Sets\"</em>&nbsp;or&nbsp;<em>\"classical rough sets\"</em>, as a means to distinguish from more recent extensions and generalizations.</span></li>\r\n<li><span style=\"color: #ff9900;\">The following section contains an overview of the basic framework of rough set theory, as originally proposed by&nbsp;<a class=\"mw-redirect\" title=\"Zdzislaw Pawlak\" href=\"https://en.wikipedia.org/wiki/Zdzislaw_Pawlak\">ZdzisÅ‚aw I. Pawlak</a>, along with some of the key definitions. More formal prope'),
(52, 'page4', 'its 4th heading', '<p><span style=\"background-color: #993300;\">The following section contains an overview of the basic framework of rough set theory, as originally proposed by&nbsp;<a class=\"mw-redirect\" title=\"Zdzislaw Pawlak\" href=\"https://en.wikipedia.org/wiki/Zdzislaw_Pawlak\">ZdzisÅ‚aw I. Pawlak</a>, along with some of the key definitions. More formal properties and boundaries of rough sets can be found in Pawlak (1991) and cited references. The initial and basic theory of rough sets is sometimes referred to as&nbsp;<em>\"Pawlak Rough Sets\"</em>&nbsp;or&nbsp;<em>\"classical rough sets\"</em>, as a means to distinguish from more recent extensions and generalizations.</span></p>\r\n<p>&nbsp;</p>\r\n<p style=\"text-align: center;\"><span style=\"background-color: #993300;\"><img src=\"DSC_0161.jpg\" alt=\"aaa\" /></span></p>'),
(53, 'page5', 'logo page', '<p><img src=\"logo1.jpg\" alt=\"\" width=\"329\" height=\"114\" /></p>'),
(59, 'page5', 'dsvdefvdfvdsfvd', '<p>sadssssssssssssssssssssss<span style=\"background-color: #cc99ff;\">sssssssssssssssssssssssssssss</span></p>'),
(60, 'IMAGE', 'IMAGE PAGE', '<p>THIS IMAGE IS IMPORTANT FOR ME<img src=\"Untitleaxdd-1.jpg\" alt=\"AAAAAAAAAAAAAA\" width=\"161\" height=\"243\" /></p>');

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `user_id` int(10) NOT NULL,
  `image` varchar(100) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `werbpage` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`user_id`, `image`, `heading`, `werbpage`) VALUES
(1, '1552716600Untitleaxdd-1.jpg', 'Professional', '      Lorem ipsum dolor sit amet, consectetur<br>  adipiscing elit.Maecenas tincidunt<br>  commodo t'),
(2, '1552716637Untitledaaaaax-1.jpg', 'Advanced', 'Lorem ipsum dolor sit amet, consectetur<br>  adipiscing elit.Maecenas tincidunt<br>  commodo turpis '),
(3, 'Untitleaaxcd-1.jpg', 'Advantage', '  Lorem ipsum dolor sit amet, consectetur<br>  adipiscing elit.Maecenas tincidunt<br>  commodo turpi'),
(5, '1553235696e1693c76d599d479a617f43744bc37d7.jpg', 'fmgnzfgn gzff', ' n zgfc fzgcn\r\ndcccscsdcszdds ');

-- --------------------------------------------------------

--
-- Table structure for table `sub_menu`
--

CREATE TABLE `sub_menu` (
  `sub_menu_id` int(10) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `page_id` int(15) NOT NULL,
  `sub_menu_name` varchar(30) NOT NULL,
  `sub_menu_link` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_menu`
--

INSERT INTO `sub_menu` (`sub_menu_id`, `menu_id`, `page_id`, `sub_menu_name`, `sub_menu_link`) VALUES
(31, 12, 49, '1', ''),
(32, 12, 50, '2', ''),
(33, 12, 49, '', ''),
(34, 12, 51, '3', ''),
(35, 14, 52, '4', ''),
(36, 14, 53, '5', ''),
(37, 16, 49, 'a', ''),
(38, 16, 53, '', '6'),
(39, 17, 59, 'e', ''),
(40, 18, 60, 'aaaa', ''),
(41, 12, 60, 'aaa', ''),
(42, 17, 53, 'aaaaaaaaaaaaaaaaaaaa', ''),
(43, 17, 59, 'bbbbbbbbbb', '');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `user_id` int(20) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`user_id`, `heading`, `image`) VALUES
(1, 'Rosalina D.Willisonama  2', '1552650387images.jpg'),
(2, 'Diconda Plarn Will', '1552650408oscar-actors-14.jpg'),
(3, 'Hulk M. Kenbon', '155265043022chaiseKrouford.jpg'),
(4, 'Haliam D. Dicolaz', '1552650447emma-cover-jpg.jpg'),
(5, 'Nicolas D. Case', '1552650457famous-hollywood-actors-from-australia-12.jpg'),
(6, 'Phumdon H.Normon', '1552650468hqdefault.jpg'),
(7, 'Phumdon H.Normon', '1552654897hqdefault.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `userEmail` varchar(60) NOT NULL,
  `userPass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userName`, `userEmail`, `userPass`) VALUES
(1, 'ali', 'ali@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92'),
(2, 'umair latif', 'umair109109@gmail.com', '6297664bc2451adaa477350e376d87c3ed82d79fbf6b0e981569af2c73c987a5'),
(3, 'm umair', 'umair@gmail.com', '5f6121bc06e18e209920d57d2f16b17cc82dfc2ade1d375d6951b99c65d1b89d');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us_form`
--
ALTER TABLE `contact_us_form`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `news_sidebar`
--
ALTER TABLE `news_sidebar`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `sub_menu`
--
ALTER TABLE `sub_menu`
  ADD PRIMARY KEY (`sub_menu_id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `userEmail` (`userEmail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us_form`
--
ALTER TABLE `contact_us_form`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `news_sidebar`
--
ALTER TABLE `news_sidebar`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `page_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sub_menu`
--
ALTER TABLE `sub_menu`
  MODIFY `sub_menu_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
