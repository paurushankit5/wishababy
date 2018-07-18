-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2018 at 11:41 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pride2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_user` text NOT NULL,
  `admin_pwd` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_user`, `admin_pwd`) VALUES
(1, 'admin', 'admin'),
(2, 'developer', 'developer');

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `ans_id` int(11) NOT NULL,
  `ans_clinic_id` int(11) NOT NULL,
  `ans_q_id` int(11) NOT NULL,
  `ans_name` text NOT NULL,
  `ans_edit_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ans_add_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `ap_id` int(11) NOT NULL,
  `ap_parent_id` int(11) NOT NULL,
  `ap_date` date NOT NULL,
  `ap_time` time NOT NULL,
  `ap_clinic_id` int(11) NOT NULL,
  `ap_edit_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ap_add_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ap_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`ap_id`, `ap_parent_id`, `ap_date`, `ap_time`, `ap_clinic_id`, `ap_edit_time`, `ap_add_time`, `ap_status`) VALUES
(53, 9, '2018-01-25', '10:00:00', 28, '2018-01-26 15:47:47', '2018-01-26 15:47:03', 1),
(54, 9, '2018-01-24', '10:00:00', 11, '2018-01-26 17:14:54', '2018-01-26 15:52:59', 1),
(55, 9, '2018-01-25', '10:00:00', 10, '2018-01-26 17:15:00', '2018-01-26 17:14:28', 1),
(56, 9, '2018-01-30', '10:00:00', 11, '2018-01-27 09:04:46', '2018-01-27 09:04:46', 0),
(57, 41, '2018-03-10', '10:00:00', 10, '2018-03-11 18:16:40', '2018-03-11 18:15:52', 0);

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL,
  `blog_name` varchar(255) NOT NULL,
  `blog_slug` varchar(255) NOT NULL,
  `blog_content` text NOT NULL,
  `blog_image` text NOT NULL,
  `blog_title` text NOT NULL,
  `blog_keyword` text NOT NULL,
  `blog_description` text NOT NULL,
  `blog_edit_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `blog_add_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `blog_name`, `blog_slug`, `blog_content`, `blog_image`, `blog_title`, `blog_keyword`, `blog_description`, `blog_edit_time`, `blog_add_time`) VALUES
(1, 'What is Lorem Ipsum?', 'what-is-lorem-ipsum-', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', 'Minor_Injury_Walk_In_Clinic1.JPG', 'Lorem Ipsum', 'Lorem Ipsum', '0', '2017-11-13 06:19:04', '2017-11-13 06:19:04'),
(3, 'Frequently Asked Questions', 'frequently-asked-questions', '<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>\r\n\r\n<h3>I have technical problem, who do I email?</h3>\r\n\r\n<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>\r\n\r\n<h3>How do I use Bato features?</h3>\r\n\r\n<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>\r\n\r\n<h3>What language are available?</h3>\r\n\r\n<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>\r\n\r\n<h3>Can I have a username that is already taken?</h3>\r\n\r\n<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>\r\n\r\n<h3>Is Union free?</h3>\r\n\r\n<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>\r\n', 'movie-world-cinemas-meerut-road-ghaziabad-s36u.jpg', 'Frequently Asked Questions', 'Frequently Asked Questions', 'Frequently Asked Questions', '2017-11-13 09:11:06', '2017-11-13 09:11:06'),
(4, 'Frequently Asked Materials', 'frequently-asked-materials', '<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>\r\n\r\n<h3>I have technical problem, who do I email?</h3>\r\n\r\n<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>\r\n\r\n<h3>How do I use Bato features?</h3>\r\n\r\n<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>\r\n\r\n<h3>What language are available?</h3>\r\n\r\n<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>\r\n\r\n<h3>Can I have a username that is already taken?</h3>\r\n\r\n<p>Far far away, behind the word mountains, far from the countries Vokalia and&nbsp;</p>\r\n', '', 'What language are available?', 'What language are available?', 'What language are available?', '2017-11-13 09:12:41', '2017-11-13 09:12:41'),
(5, 'Test Blog', 'test-blog', '<h2>Frequently Asked Materials</h2>\r\n\r\n<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>\r\n\r\n<h3>I have technical problem, who do I email?</h3>\r\n\r\n<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>\r\n\r\n<h3>How do I use Bato features?</h3>\r\n\r\n<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>\r\n\r\n<h3>What language are available?</h3>\r\n\r\n<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>\r\n\r\n<h3>Can I have a username that is already taken?</h3>\r\n\r\n<p>Far far away, behind the word mountains, far from the countries Vokalia and&nbsp;</p>\r\n', 'doctor-img2.png', 'hello', 'hello', 'hello', '2018-06-25 17:58:19', '2018-06-25 17:57:21');

-- --------------------------------------------------------

--
-- Table structure for table `callback`
--

CREATE TABLE `callback` (
  `call_id` int(11) NOT NULL,
  `call_name` varchar(255) NOT NULL,
  `call_mobile` varchar(20) NOT NULL,
  `call_body` text NOT NULL,
  `call_clinic_id` int(11) NOT NULL,
  `call_status` int(11) NOT NULL,
  `call_add_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `call_edit_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `callback`
--

INSERT INTO `callback` (`call_id`, `call_name`, `call_mobile`, `call_body`, `call_clinic_id`, `call_status`, `call_add_time`, `call_edit_time`) VALUES
(1, 'caacssacasc', 'casacssasa', '', 11, 1, '2017-11-09 19:14:58', '2017-11-09 18:25:16'),
(2, 'caacssacasc', 'casacssasa', '', 11, 1, '2017-11-09 19:12:36', '2017-11-09 18:25:20'),
(3, ' bdsndsn', '98654556789', '', 11, 1, '2017-11-09 19:14:44', '2017-11-09 18:27:39'),
(4, 'paurush', '987654678', '', 12, 0, '2017-11-09 18:28:25', '2017-11-09 18:28:25'),
(5, 'Paurush Anlit', '987654567', '', 28, 1, '2017-11-25 07:45:41', '2017-11-24 21:36:37'),
(6, 'Sheetal Sharma', '987654356', '', 28, 1, '2017-11-25 07:45:46', '2017-11-25 21:08:36'),
(7, 'snanjknjnjk', '987654678', 'bdsbjbdsjbd', 28, 0, '2017-12-04 06:52:58', '2017-11-25 21:17:32'),
(8, 'Paurush Ankit', '987654678', 'test body', 11, 0, '2017-12-04 20:21:25', '2017-12-04 20:21:25'),
(9, 'Paurush Ankit', '9876548976', 'njasnsan', 24, 0, '2017-12-21 07:24:05', '2017-12-21 07:24:05'),
(10, 'Paurush Ankit', '9876548976', 'hey there', 28, 0, '2017-12-21 07:51:35', '2017-12-21 07:51:35'),
(11, 'Paurush Ankit', '9876548976', '', 11, 0, '2017-12-26 04:21:16', '2017-12-26 04:21:16'),
(12, 'Ram singh', '7531855396', 'hello bro, call me please', 11, 0, '2018-01-03 09:20:49', '2018-01-03 09:20:49'),
(13, 'Ram Singhania', '987654310', '', 10, 0, '2018-01-03 09:21:17', '2018-01-03 09:21:17'),
(14, 'nkmlmlkmlk', '123457689i', '', 11, 0, '2018-01-04 17:49:24', '2018-01-04 17:49:24'),
(15, 'nlsnldlm', '1234123   ', '', 11, 0, '2018-01-04 17:50:08', '2018-01-04 17:50:08'),
(16, 'Ram', '9876890761', 'ms s ', 11, 0, '2018-01-05 09:04:15', '2018-01-05 09:04:15'),
(17, 'rama', '9876545678', 'mjhvgcx', 11, 0, '2018-01-05 09:12:31', '2018-01-05 09:12:31'),
(18, 'sdsd', '9876543567', 'scm \n', 12, 0, '2018-01-05 09:13:32', '2018-01-05 09:13:32'),
(19, 'call  me ', '9876543456', '', 10, 0, '2018-01-10 16:49:15', '2018-01-10 16:49:15'),
(20, 'call  me ', '9876543456', '', 10, 0, '2018-01-10 16:49:28', '2018-01-10 16:49:28'),
(21, 'call  me ', '9876543456', '', 10, 0, '2018-01-10 16:49:38', '2018-01-10 16:49:38'),
(22, 'test', '9876546789', '', 28, 0, '2018-01-10 16:50:34', '2018-01-10 16:50:34'),
(23, 'sjnjskdjn', '9876578908', 'l,ms,.,', 28, 0, '2018-01-10 16:54:07', '2018-01-10 16:54:07'),
(24, 'tetst', '8976578909', 'bn  ,m,m , ., ., .,', 28, 0, '2018-01-10 16:55:00', '2018-01-10 16:55:00'),
(25, 'oiuygfghjkn', '9876567098', '', 28, 0, '2018-01-10 16:59:03', '2018-01-10 16:59:03'),
(26, 'Paurush Ankit1', '9876548976', 'testa', 12, 0, '2018-01-10 17:03:05', '2018-01-10 17:03:05'),
(27, 'Paurush Ankit1', '9876548976', 'test mail', 28, 0, '2018-01-11 09:05:27', '2018-01-11 09:05:27'),
(28, 'Paurush Ankit1', '9876548976', 'test', 28, 0, '2018-01-11 09:08:59', '2018-01-11 09:08:59'),
(29, 'Paurush Ankit1', '9876548976', '', 28, 0, '2018-01-11 09:09:50', '2018-01-11 09:09:50'),
(30, 'Paurush Ankit1', '9876548976', '', 29, 0, '2018-01-11 09:11:14', '2018-01-11 09:11:14'),
(31, 'Paurush Ankit1', '9876548976', 'test', 11, 0, '2018-01-11 09:14:30', '2018-01-11 09:14:30'),
(32, 'Paurush Ankit1', '9876548976', 'test', 11, 0, '2018-01-11 09:15:30', '2018-01-11 09:15:30'),
(33, 'Paurush Ankit1', '9876548976', 'all test', 28, 0, '2018-01-26 15:23:22', '2018-01-26 15:23:22'),
(34, 'Paurush Ankit1', '9876548976', 'all test', 28, 0, '2018-01-26 15:23:32', '2018-01-26 15:23:32'),
(35, 'Paurush Ankit1', '9876548976', 'helo', 10, 0, '2018-01-26 17:16:29', '2018-01-26 17:16:29'),
(36, 'Paurush Ankit1', '9876548976', 'hello', 16, 0, '2018-01-27 09:04:20', '2018-01-27 09:04:20');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `cart_product_id` int(11) NOT NULL,
  `cart_user_id` int(11) NOT NULL,
  `cart_edit_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `cart_add_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `cart_unit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `cart_product_id`, `cart_user_id`, `cart_edit_time`, `cart_add_time`, `cart_unit`) VALUES
(1, 4, 9, '2018-01-26 10:18:05', '2018-01-26 05:47:45', 7);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` text NOT NULL,
  `cat_slug` text NOT NULL,
  `cat_image` text NOT NULL,
  `cat_details` text NOT NULL,
  `cat_add_time` datetime NOT NULL,
  `cat_title` text NOT NULL,
  `cat_keyword` text NOT NULL,
  `cat_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_slug`, `cat_image`, `cat_details`, `cat_add_time`, `cat_title`, `cat_keyword`, `cat_description`) VALUES
(1, 'Insemination Kits', 'insemination-kits', 'what-is-a-home-insemination-kit.png', 'Our insemination kit gives you a better chance of successful conception.', '2017-08-22 13:07:28', 'Insemination Kits', 'Our insemination kit gives you a better chance of successful conception.', 'Our insemination kit gives you a better chance of successful conception.'),
(2, 'STI Tests', 'sti-tests', 'STI test online 660.jpg', 'Self-test kits are available for a range of health concerns.', '2017-08-22 14:24:31', 'STI Tests', 'Self-test kits are available for a range of health concerns.', 'Self-test kits are available for a range of health concerns.'),
(3, 'Fertility Kits & Products', 'fertility-kits-products', 'FertilitySCORE[1].jpg', 'Before you try and conceive, check your fertility with our Male and Female Fertility Kits.', '2017-08-22 14:25:16', 'Fertility Kits & Products', 'Before you try and conceive, check your fertility with our Male and Female Fertility Kits.', 'Before you try and conceive, check your fertility with our Male and Female Fertility Kits.'),
(4, 'Ovulation & Pregnancy Tests', 'ovulation-pregnancy-tests', 'how-often-should-i-take-an-ovulation-test-strip.png', '', '2017-08-22 14:26:17', 'Ovulation & Pregnancy Tests', 'Ovulation & Pregnancy Tests', 'Ovulation & Pregnancy Tests'),
(5, 'Nutrition & Vitamins', 'nutrition-vitamins', '105014.jpg', 'Daily supplements for when you are trying to conceive and during pregnancy.', '2017-08-22 14:26:46', 'Nutrition & Vitamins', 'Daily supplements for when you are trying to conceive and during pregnancy.', 'Daily supplements for when you are trying to conceive and during pregnancy.'),
(6, 'Books & CDs', 'books-cds', 'Books-And-DVDs-85kb.jpg', 'A selection of recommended parenting books from Amazon', '2017-08-22 14:27:18', 'Books & CDs', 'A selection of recommended parenting books from Amazon', 'A selection of recommended parenting books from Amazon'),
(7, 'Gifts & Art', 'gifts-art', 'db26bb0505b300e51dadbd988b500243--art-ideas-cool-ideas.jpg', 'Find the perfect birth gift with creative memories Baby Art!', '2017-08-22 14:27:45', 'Gifts & Art', 'Find the perfect birth gift with creative memories Baby Art!', 'Find the perfect birth gift with creative memories Baby Art!');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` bigint(20) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `chatdate` datetime DEFAULT NULL,
  `msg` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(100) NOT NULL,
  `city_state` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`city_id`, `city_name`, `city_state`) VALUES
(1, 'Kolhapur', 'Maharashtra'),
(2, 'Port Blair', 'Andaman & Nicobar Islands'),
(3, 'Adilabad', 'Andhra Pradesh'),
(4, 'Adoni', 'Andhra Pradesh'),
(5, 'Amadalavalasa', 'Andhra Pradesh'),
(6, 'Amalapuram', 'Andhra Pradesh'),
(7, 'Anakapalle', 'Andhra Pradesh'),
(8, 'Anantapur', 'Andhra Pradesh'),
(9, 'Badepalle', 'Andhra Pradesh'),
(10, 'Banganapalle', 'Andhra Pradesh'),
(11, 'Bapatla', 'Andhra Pradesh'),
(12, 'Bellampalle', 'Andhra Pradesh'),
(13, 'Bethamcherla', 'Andhra Pradesh'),
(14, 'Bhadrachalam', 'Andhra Pradesh'),
(15, 'Bhainsa', 'Andhra Pradesh'),
(16, 'Bheemunipatnam', 'Andhra Pradesh'),
(17, 'Bhimavaram', 'Andhra Pradesh'),
(18, 'Bhongir', 'Andhra Pradesh'),
(19, 'Bobbili', 'Andhra Pradesh'),
(20, 'Bodhan', 'Andhra Pradesh'),
(21, 'Chilakaluripet', 'Andhra Pradesh'),
(22, 'Chirala', 'Andhra Pradesh'),
(23, 'Chittoor', 'Andhra Pradesh'),
(24, 'Cuddapah', 'Andhra Pradesh'),
(25, 'Devarakonda', 'Andhra Pradesh'),
(26, 'Dharmavaram', 'Andhra Pradesh'),
(27, 'Eluru', 'Andhra Pradesh'),
(28, 'Farooqnagar', 'Andhra Pradesh'),
(29, 'Gadwal', 'Andhra Pradesh'),
(30, 'Gooty', 'Andhra Pradesh'),
(31, 'Gudivada', 'Andhra Pradesh'),
(32, 'Gudur', 'Andhra Pradesh'),
(33, 'Guntakal', 'Andhra Pradesh'),
(34, 'Guntur', 'Andhra Pradesh'),
(35, 'Hanuman Junction', 'Andhra Pradesh'),
(36, 'Hindupur', 'Andhra Pradesh'),
(37, 'Hyderabad', 'Andhra Pradesh'),
(38, 'Ichchapuram', 'Andhra Pradesh'),
(39, 'Jaggaiahpet', 'Andhra Pradesh'),
(40, 'Jagtial', 'Andhra Pradesh'),
(41, 'Jammalamadugu', 'Andhra Pradesh'),
(42, 'Jangaon', 'Andhra Pradesh'),
(43, 'Kadapa', 'Andhra Pradesh'),
(44, 'Kadiri', 'Andhra Pradesh'),
(45, 'Kagaznagar', 'Andhra Pradesh'),
(46, 'Kakinada', 'Andhra Pradesh'),
(47, 'Kalyandurg', 'Andhra Pradesh'),
(48, 'Kamareddy', 'Andhra Pradesh'),
(49, 'Kandukur', 'Andhra Pradesh'),
(50, 'Karimnagar', 'Andhra Pradesh'),
(51, 'Kavali', 'Andhra Pradesh'),
(52, 'Khammam', 'Andhra Pradesh'),
(53, 'Koratla', 'Andhra Pradesh'),
(54, 'Kothagudem', 'Andhra Pradesh'),
(55, 'Kothapeta', 'Andhra Pradesh'),
(56, 'Kovvur', 'Andhra Pradesh'),
(57, 'Kurnool', 'Andhra Pradesh'),
(58, 'Kyathampalle', 'Andhra Pradesh'),
(59, 'Macherla', 'Andhra Pradesh'),
(60, 'Machilipatnam', 'Andhra Pradesh'),
(61, 'Madanapalle', 'Andhra Pradesh'),
(62, 'Mahbubnagar', 'Andhra Pradesh'),
(63, 'Mancherial', 'Andhra Pradesh'),
(64, 'Mandamarri', 'Andhra Pradesh'),
(65, 'Mandapeta', 'Andhra Pradesh'),
(66, 'Manuguru', 'Andhra Pradesh'),
(67, 'Markapur', 'Andhra Pradesh'),
(68, 'Medak', 'Andhra Pradesh'),
(69, 'Miryalaguda', 'Andhra Pradesh'),
(70, 'Mogalthur', 'Andhra Pradesh'),
(71, 'Nagari', 'Andhra Pradesh'),
(72, 'Nagarkurnool', 'Andhra Pradesh'),
(73, 'Nandyal', 'Andhra Pradesh'),
(74, 'Narasapur', 'Andhra Pradesh'),
(75, 'Narasaraopet', 'Andhra Pradesh'),
(76, 'Narayanpet', 'Andhra Pradesh'),
(77, 'Narsipatnam', 'Andhra Pradesh'),
(78, 'Nellore', 'Andhra Pradesh'),
(79, 'Nidadavole', 'Andhra Pradesh'),
(80, 'Nirmal', 'Andhra Pradesh'),
(81, 'Nizamabad', 'Andhra Pradesh'),
(82, 'Nuzvid', 'Andhra Pradesh'),
(83, 'Ongole', 'Andhra Pradesh'),
(84, 'Palacole', 'Andhra Pradesh'),
(85, 'Palasa Kasibugga', 'Andhra Pradesh'),
(86, 'Palwancha', 'Andhra Pradesh'),
(87, 'Parvathipuram', 'Andhra Pradesh'),
(88, 'Pedana', 'Andhra Pradesh'),
(89, 'Peddapuram', 'Andhra Pradesh'),
(90, 'Pithapuram', 'Andhra Pradesh'),
(91, 'Pondur', 'Andhra pradesh'),
(92, 'Ponnur', 'Andhra Pradesh'),
(93, 'Proddatur', 'Andhra Pradesh'),
(94, 'Punganur', 'Andhra Pradesh'),
(95, 'Puttur', 'Andhra Pradesh'),
(96, 'Rajahmundry', 'Andhra Pradesh'),
(97, 'Rajam', 'Andhra Pradesh'),
(98, 'Ramachandrapuram', 'Andhra Pradesh'),
(99, 'Ramagundam', 'Andhra Pradesh'),
(100, 'Rayachoti', 'Andhra Pradesh'),
(101, 'Rayadurg', 'Andhra Pradesh'),
(102, 'Renigunta', 'Andhra Pradesh'),
(103, 'Repalle', 'Andhra Pradesh'),
(104, 'Sadasivpet', 'Andhra Pradesh'),
(105, 'Salur', 'Andhra Pradesh'),
(106, 'Samalkot', 'Andhra Pradesh'),
(107, 'Sangareddy', 'Andhra Pradesh'),
(108, 'Sattenapalle', 'Andhra Pradesh'),
(109, 'Siddipet', 'Andhra Pradesh'),
(110, 'Singapur', 'Andhra Pradesh'),
(111, 'Sircilla', 'Andhra Pradesh'),
(112, 'Srikakulam', 'Andhra Pradesh'),
(113, 'Srikalahasti', 'Andhra Pradesh'),
(115, 'Suryapet', 'Andhra Pradesh'),
(116, 'Tadepalligudem', 'Andhra Pradesh'),
(117, 'Tadpatri', 'Andhra Pradesh'),
(118, 'Tandur', 'Andhra Pradesh'),
(119, 'Tanuku', 'Andhra Pradesh'),
(120, 'Tenali', 'Andhra Pradesh'),
(121, 'Tirupati', 'Andhra Pradesh'),
(122, 'Tuni', 'Andhra Pradesh'),
(123, 'Uravakonda', 'Andhra Pradesh'),
(124, 'Venkatagiri', 'Andhra Pradesh'),
(125, 'Vicarabad', 'Andhra Pradesh'),
(126, 'Vijayawada', 'Andhra Pradesh'),
(127, 'Vinukonda', 'Andhra Pradesh'),
(128, 'Visakhapatnam', 'Andhra Pradesh'),
(129, 'Vizianagaram', 'Andhra Pradesh'),
(130, 'Wanaparthy', 'Andhra Pradesh'),
(131, 'Warangal', 'Andhra Pradesh'),
(132, 'Yellandu', 'Andhra Pradesh'),
(133, 'Yemmiganur', 'Andhra Pradesh'),
(134, 'Yerraguntla', 'Andhra Pradesh'),
(135, 'Zahirabad', 'Andhra Pradesh'),
(136, 'Rajampet', 'Andhra Pradesh'),
(137, 'Along', 'Arunachal Pradesh'),
(138, 'Bomdila', 'Arunachal Pradesh'),
(139, 'Itanagar', 'Arunachal Pradesh'),
(140, 'Naharlagun', 'Arunachal Pradesh'),
(141, 'Pasighat', 'Arunachal Pradesh'),
(143, 'Amguri', 'Assam'),
(144, 'Anandnagaar', 'Assam'),
(145, 'Barpeta', 'Assam'),
(146, 'Barpeta Road', 'Assam'),
(147, 'Bilasipara', 'Assam'),
(148, 'Bongaigaon', 'Assam'),
(149, 'Dhekiajuli', 'Assam'),
(150, 'Dhubri', 'Assam'),
(151, 'Dibrugarh', 'Assam'),
(152, 'Digboi', 'Assam'),
(153, 'Diphu', 'Assam'),
(154, 'Dispur', 'Assam'),
(156, 'Gauripur', 'Assam'),
(157, 'Goalpara', 'Assam'),
(158, 'Golaghat', 'Assam'),
(159, 'Guwahati', 'Assam'),
(160, 'Haflong', 'Assam'),
(161, 'Hailakandi', 'Assam'),
(162, 'Hojai', 'Assam'),
(163, 'Jorhat', 'Assam'),
(164, 'Karimganj', 'Assam'),
(165, 'Kokrajhar', 'Assam'),
(166, 'Lanka', 'Assam'),
(167, 'Lumding', 'Assam'),
(168, 'Mangaldoi', 'Assam'),
(169, 'Mankachar', 'Assam'),
(170, 'Margherita', 'Assam'),
(171, 'Mariani', 'Assam'),
(172, 'Marigaon', 'Assam'),
(173, 'Nagaon', 'Assam'),
(174, 'Nalbari', 'Assam'),
(175, 'North Lakhimpur', 'Assam'),
(176, 'Rangia', 'Assam'),
(177, 'Sibsagar', 'Assam'),
(178, 'Silapathar', 'Assam'),
(179, 'Silchar', 'Assam'),
(180, 'Tezpur', 'Assam'),
(181, 'Tinsukia', 'Assam'),
(182, 'Amarpur', 'Bihar'),
(183, 'Araria', 'Bihar'),
(184, 'Areraj', 'Bihar'),
(185, 'Arrah', 'Bihar'),
(186, 'Asarganj', 'Bihar'),
(187, 'Aurangabad', 'Bihar'),
(188, 'Bagaha', 'Bihar'),
(189, 'Bahadurganj', 'Bihar'),
(190, 'Bairgania', 'Bihar'),
(191, 'Bakhtiarpur', 'Bihar'),
(192, 'Banka', 'Bihar'),
(193, 'Banmankhi Bazar', 'Bihar'),
(194, 'Barahiya', 'Bihar'),
(195, 'Barauli', 'Bihar'),
(196, 'Barbigha', 'Bihar'),
(197, 'Barh', 'Bihar'),
(198, 'Begusarai', 'Bihar'),
(199, 'Behea', 'Bihar'),
(200, 'Bettiah', 'Bihar'),
(201, 'Bhabua', 'Bihar'),
(202, 'Bhagalpur', 'Bihar'),
(203, 'Bihar Sharif', 'Bihar'),
(204, 'Bikramganj', 'Bihar'),
(205, 'Bodh Gaya', 'Bihar'),
(206, 'Buxar', 'Bihar'),
(207, 'Chandan Bara', 'Bihar'),
(208, 'Chanpatia', 'Bihar'),
(209, 'Chhapra', 'Bihar'),
(210, 'Colgong', 'Bihar'),
(211, 'Dalsinghsarai', 'Bihar'),
(212, 'Darbhanga', 'Bihar'),
(213, 'Daudnagar', 'Bihar'),
(214, 'Dehri-on-Sone', 'Bihar'),
(215, 'Dhaka', 'Bihar'),
(216, 'Dighwara', 'Bihar'),
(217, 'Dumraon', 'Bihar'),
(218, 'Fatwah', 'Bihar'),
(219, 'Forbesganj', 'Bihar'),
(220, 'Gaya', 'Bihar'),
(221, 'Gogri Jamalpur', 'Bihar'),
(222, 'Gopalganj', 'Bihar'),
(223, 'Hajipur', 'Bihar'),
(224, 'Hilsa', 'Bihar'),
(225, 'Hisua', 'Bihar'),
(226, 'Islampur', 'Bihar'),
(227, 'Jagdispur', 'Bihar'),
(228, 'Jamalpur', 'Bihar'),
(229, 'Jamui', 'Bihar'),
(230, 'Jehanabad', 'Bihar'),
(231, 'Jhajha', 'Bihar'),
(232, 'Jhanjharpur', 'Bihar'),
(233, 'Jogabani', 'Bihar'),
(234, 'Kanti', 'Bihar'),
(235, 'Katihar', 'Bihar'),
(236, 'Khagaria', 'Bihar'),
(237, 'Kharagpur', 'Bihar'),
(238, 'Kishanganj', 'Bihar'),
(239, 'Lakhisarai', 'Bihar'),
(240, 'Lalganj', 'Bihar'),
(241, 'Madhepura', 'Bihar'),
(242, 'Madhubani', 'Bihar'),
(243, 'Maharajganj', 'Bihar'),
(244, 'Mahnar Bazar', 'Bihar'),
(245, 'Makhdumpur', 'Bihar'),
(246, 'Maner', 'Bihar'),
(247, 'Manihari', 'Bihar'),
(248, 'Marhaura', 'Bihar'),
(249, 'Masaurhi', 'Bihar'),
(250, 'Mirganj', 'Bihar'),
(251, 'Mokameh', 'Bihar'),
(252, 'Motihari', 'Bihar'),
(253, 'Motipur', 'Bihar'),
(254, 'Munger', 'Bihar'),
(255, 'Murliganj', 'Bihar'),
(256, 'Muzaffarpur', 'Bihar'),
(257, 'Narkatiaganj', 'Bihar'),
(258, 'Naugachhia', 'Bihar'),
(259, 'Nawada', 'Bihar'),
(260, 'Nokha', 'Bihar'),
(261, 'Patna', 'Bihar'),
(262, 'Piro', 'Bihar'),
(263, 'Purnia', 'Bihar'),
(264, 'Rafiganj', 'Bihar'),
(265, 'Rajgir', 'Bihar'),
(266, 'Ramnagar', 'Bihar'),
(267, 'Raxaul Bazar', 'Bihar'),
(268, 'Revelganj', 'Bihar'),
(269, 'Rosera', 'Bihar'),
(270, 'Saharsa', 'Bihar'),
(271, 'Samastipur', 'Bihar'),
(272, 'Sasaram', 'Bihar'),
(273, 'Sheikhpura', 'Bihar'),
(274, 'Sheohar', 'Bihar'),
(275, 'Sherghati', 'Bihar'),
(276, 'Silao', 'Bihar'),
(277, 'Sitamarhi', 'Bihar'),
(278, 'Siwan', 'Bihar'),
(279, 'Sonepur', 'Bihar'),
(280, 'Sugauli', 'Bihar'),
(281, 'Sultanganj', 'Bihar'),
(282, 'Supaul', 'Bihar'),
(283, 'Warisaliganj', 'Bihar'),
(284, 'Ahiwara', 'Chhattisgarh'),
(285, 'Akaltara', 'Chhattisgarh'),
(286, 'Ambagarh Chowki', 'Chhattisgarh'),
(287, 'Ambikapur', 'Chhattisgarh'),
(288, 'Arang', 'Chhattisgarh'),
(289, 'Bade Bacheli', 'Chhattisgarh'),
(290, 'Balod', 'Chhattisgarh'),
(291, 'Baloda Bazar', 'Chhattisgarh'),
(292, 'Bemetra', 'Chhattisgarh'),
(293, 'Bhatapara', 'Chhattisgarh'),
(294, 'Bilaspur', 'Chhattisgarh'),
(295, 'Birgaon', 'Chhattisgarh'),
(296, 'Champa', 'Chhattisgarh'),
(297, 'Chirmiri', 'Chhattisgarh'),
(298, 'Dalli-Rajhara', 'Chhattisgarh'),
(299, 'Dhamtari', 'Chhattisgarh'),
(300, 'Dipka', 'Chhattisgarh'),
(301, 'Dongargarh', 'Chhattisgarh'),
(302, 'Durg-Bhilai Nagar', 'Chhattisgarh'),
(303, 'Gobranawapara', 'Chhattisgarh'),
(304, 'Jagdalpur', 'Chhattisgarh'),
(305, 'Janjgir', 'Chhattisgarh'),
(306, 'Jashpurnagar', 'Chhattisgarh'),
(307, 'Kanker', 'Chhattisgarh'),
(308, 'Kawardha', 'Chhattisgarh'),
(309, 'Kondagaon', 'Chhattisgarh'),
(310, 'Korba', 'Chhattisgarh'),
(311, 'Mahasamund', 'Chhattisgarh'),
(312, 'Mahendragarh', 'Chhattisgarh'),
(313, 'Mungeli', 'Chhattisgarh'),
(314, 'Naila Janjgir', 'Chhattisgarh'),
(315, 'Raigarh', 'Chhattisgarh'),
(316, 'Raipur', 'Chhattisgarh'),
(317, 'Rajnandgaon', 'Chhattisgarh'),
(318, 'Sakti', 'Chhattisgarh'),
(319, 'Tilda Newra', 'Chhattisgarh'),
(320, 'Amli', 'Dadra & Nagar Haveli'),
(321, 'Silvassa', 'Dadra & Nagar Haveli'),
(322, 'Daman and Diu', 'Daman & Diu'),
(323, 'Daman and Diu', 'Daman & Diu'),
(326, 'Aldona', 'Goa'),
(327, 'Curchorem Cacora', 'Goa'),
(328, 'Madgaon', 'Goa'),
(329, 'Mapusa', 'Goa'),
(330, 'Margao', 'Goa'),
(331, 'Marmagao', 'Goa'),
(332, 'Panaji', 'Goa'),
(333, 'Ahmedabad', 'Gujarat'),
(334, 'Amreli', 'Gujarat'),
(335, 'Anand', 'Gujarat'),
(336, 'Ankleshwar', 'Gujarat'),
(337, 'Bharuch', 'Gujarat'),
(338, 'Bhavnagar', 'Gujarat'),
(339, 'Bhuj', 'Gujarat'),
(340, 'Cambay', 'Gujarat'),
(341, 'Dahod', 'Gujarat'),
(342, 'Deesa', 'Gujarat'),
(344, 'Dholka', 'Gujarat'),
(345, 'Gandhinagar', 'Gujarat'),
(346, 'Godhra', 'Gujarat'),
(347, 'Himatnagar', 'Gujarat'),
(348, 'Idar', 'Gujarat'),
(349, 'Jamnagar', 'Gujarat'),
(350, 'Junagadh', 'Gujarat'),
(351, 'Kadi', 'Gujarat'),
(352, 'Kalavad', 'Gujarat'),
(353, 'Kalol', 'Gujarat'),
(354, 'Kapadvanj', 'Gujarat'),
(355, 'Karjan', 'Gujarat'),
(356, 'Keshod', 'Gujarat'),
(357, 'Khambhalia', 'Gujarat'),
(358, 'Khambhat', 'Gujarat'),
(359, 'Kheda', 'Gujarat'),
(360, 'Khedbrahma', 'Gujarat'),
(361, 'Kheralu', 'Gujarat'),
(362, 'Kodinar', 'Gujarat'),
(363, 'Lathi', 'Gujarat'),
(364, 'Limbdi', 'Gujarat'),
(365, 'Lunawada', 'Gujarat'),
(366, 'Mahesana', 'Gujarat'),
(367, 'Mahuva', 'Gujarat'),
(368, 'Manavadar', 'Gujarat'),
(369, 'Mandvi', 'Gujarat'),
(370, 'Mangrol', 'Gujarat'),
(371, 'Mansa', 'Gujarat'),
(372, 'Mehmedabad', 'Gujarat'),
(373, 'Modasa', 'Gujarat'),
(374, 'Morvi', 'Gujarat'),
(375, 'Nadiad', 'Gujarat'),
(376, 'Navsari', 'Gujarat'),
(377, 'Padra', 'Gujarat'),
(378, 'Palanpur', 'Gujarat'),
(379, 'Palitana', 'Gujarat'),
(380, 'Pardi', 'Gujarat'),
(381, 'Patan', 'Gujarat'),
(382, 'Petlad', 'Gujarat'),
(383, 'Porbandar', 'Gujarat'),
(384, 'Radhanpur', 'Gujarat'),
(385, 'Rajkot', 'Gujarat'),
(386, 'Rajpipla', 'Gujarat'),
(387, 'Rajula', 'Gujarat'),
(388, 'Ranavav', 'Gujarat'),
(389, 'Rapar', 'Gujarat'),
(390, 'Salaya', 'Gujarat'),
(391, 'Sanand', 'Gujarat'),
(392, 'Savarkundla', 'Gujarat'),
(393, 'Sidhpur', 'Gujarat'),
(394, 'Sihor', 'Gujarat'),
(395, 'Songadh', 'Gujarat'),
(396, 'Surat', 'Gujarat'),
(397, 'Talaja', 'Gujarat'),
(398, 'Thangadh', 'Gujarat'),
(399, 'Tharad', 'Gujarat'),
(400, 'Umbergaon', 'Gujarat'),
(401, 'Umreth', 'Gujarat'),
(402, 'Una', 'Gujarat'),
(403, 'Unjha', 'Gujarat'),
(404, 'Upleta', 'Gujarat'),
(405, 'Vadnagar', 'Gujarat'),
(406, 'Vadodara', 'Gujarat'),
(407, 'Valsad', 'Gujarat'),
(408, 'Vapi', 'Gujarat'),
(409, 'Vapi', 'Gujarat'),
(410, 'Veraval', 'Gujarat'),
(411, 'Vijapur', 'Gujarat'),
(412, 'Viramgam', 'Gujarat'),
(413, 'Visnagar', 'Gujarat'),
(414, 'Vyara', 'Gujarat'),
(415, 'Wadhwan', 'Gujarat'),
(416, 'Wankaner', 'Gujarat'),
(417, 'Adalaj', 'Gujarat'),
(418, 'Adityana', 'Gujarat'),
(419, 'Alang', 'Gujarat'),
(420, 'Ambaji', 'Gujarat'),
(421, 'Ambaliyasan', 'Gujarat'),
(422, 'Andada', 'Gujarat'),
(423, 'Anjar', 'Gujarat'),
(424, 'Anklav', 'Gujarat'),
(425, 'Antaliya', 'Gujarat'),
(426, 'Arambhada', 'Gujarat'),
(427, 'Atul', 'Gujarat'),
(428, 'Ballabhgarh', 'Haryana'),
(429, 'Ambala', 'Haryana'),
(430, 'Ambala', 'Haryana'),
(431, 'Asankhurd', 'Haryana'),
(432, 'Assandh', 'Haryana'),
(433, 'Ateli', 'Haryana'),
(434, 'Babiyal', 'Haryana'),
(435, 'Bahadurgarh', 'Haryana'),
(436, 'Barwala', 'Haryana'),
(437, 'Bhiwani', 'Haryana'),
(438, 'Charkhi Dadri', 'Haryana'),
(439, 'Cheeka', 'Haryana'),
(440, 'Ellenabad 2', 'Haryana'),
(441, 'Faridabad', 'Haryana'),
(442, 'Fatehabad', 'Haryana'),
(443, 'Ganaur', 'Haryana'),
(444, 'Gharaunda', 'Haryana'),
(445, 'Gohana', 'Haryana'),
(446, 'Gurgaon', 'Haryana'),
(447, 'Haibat(Yamuna Nagar)', 'Haryana'),
(448, 'Hansi', 'Haryana'),
(449, 'Hisar', 'Haryana'),
(450, 'Hodal', 'Haryana'),
(451, 'Jhajjar', 'Haryana'),
(452, 'Jind', 'Haryana'),
(453, 'Kaithal', 'Haryana'),
(454, 'Kalan Wali', 'Haryana'),
(455, 'Kalka', 'Haryana'),
(456, 'Karnal', 'Haryana'),
(457, 'Ladwa', 'Haryana'),
(458, 'Mahendragarh', 'Haryana'),
(459, 'Mandi Dabwali', 'Haryana'),
(460, 'Narnaul', 'Haryana'),
(461, 'Narwana', 'Haryana'),
(462, 'Palwal', 'Haryana'),
(463, 'Panchkula', 'Haryana'),
(464, 'Panipat', 'Haryana'),
(465, 'Pehowa', 'Haryana'),
(466, 'Pinjore', 'Haryana'),
(467, 'Rania', 'Haryana'),
(468, 'Ratia', 'Haryana'),
(469, 'Rewari', 'Haryana'),
(470, 'Rohtak', 'Haryana'),
(471, 'Safidon', 'Haryana'),
(472, 'Samalkha', 'Haryana'),
(473, 'Shahbad', 'Haryana'),
(474, 'Sirsa', 'Haryana'),
(475, 'Sohna', 'Haryana'),
(476, 'Sonipat', 'Haryana'),
(477, 'Taraori', 'Haryana'),
(478, 'Thanesar', 'Haryana'),
(479, 'Tohana', 'Haryana'),
(480, 'Yamunanagar', 'Haryana'),
(481, 'Arki', 'Himachal Pradesh'),
(482, 'Baddi', 'Himachal Pradesh'),
(483, 'Bilaspur', 'Himachal Pradesh'),
(484, 'Chamba', 'Himachal Pradesh'),
(485, 'Dalhousie', 'Himachal Pradesh'),
(486, 'Dharamsala', 'Himachal Pradesh'),
(487, 'Hamirpur', 'Himachal Pradesh'),
(488, 'Mandi', 'Himachal Pradesh'),
(489, 'Nahan', 'Himachal Pradesh'),
(490, 'Shimla', 'Himachal Pradesh'),
(491, 'Solan', 'Himachal Pradesh'),
(492, 'Sundarnagar', 'Himachal Pradesh'),
(493, 'Jammu', 'Jammu & Kashmir'),
(494, 'Achabbal', 'Jammu & Kashmir'),
(495, 'Akhnoor', 'Jammu & Kashmir'),
(496, 'Anantnag', 'Jammu & Kashmir'),
(497, 'Arnia', 'Jammu & Kashmir'),
(498, 'Awantipora', 'Jammu & Kashmir'),
(499, 'Bandipore', 'Jammu & Kashmir'),
(500, 'Baramula', 'Jammu & Kashmir'),
(501, 'Kathua', 'Jammu & Kashmir'),
(502, 'Leh', 'Jammu & Kashmir'),
(503, 'Punch', 'Jammu & Kashmir'),
(504, 'Rajauri', 'Jammu & Kashmir'),
(505, 'Sopore', 'Jammu & Kashmir'),
(506, 'Srinagar', 'Jammu & Kashmir'),
(507, 'Udhampur', 'Jammu & Kashmir'),
(508, 'Amlabad', 'Jharkhand'),
(509, 'Ara', 'Jharkhand'),
(510, 'Barughutu', 'Jharkhand'),
(511, 'Bokaro Steel City', 'Jharkhand'),
(512, 'Chaibasa', 'Jharkhand'),
(513, 'Chakradharpur', 'Jharkhand'),
(514, 'Chandrapura', 'Jharkhand'),
(515, 'Chatra', 'Jharkhand'),
(516, 'Chirkunda', 'Jharkhand'),
(517, 'Churi', 'Jharkhand'),
(518, 'Daltonganj', 'Jharkhand'),
(519, 'Deoghar', 'Jharkhand'),
(520, 'Dhanbad', 'Jharkhand'),
(521, 'Dumka', 'Jharkhand'),
(522, 'Garhwa', 'Jharkhand'),
(523, 'Ghatshila', 'Jharkhand'),
(524, 'Giridih', 'Jharkhand'),
(525, 'Godda', 'Jharkhand'),
(526, 'Gomoh', 'Jharkhand'),
(527, 'Gumia', 'Jharkhand'),
(528, 'Gumla', 'Jharkhand'),
(529, 'Hazaribag', 'Jharkhand'),
(530, 'Hussainabad', 'Jharkhand'),
(531, 'Jamshedpur', 'Jharkhand'),
(532, 'Jamtara', 'Jharkhand'),
(533, 'Jhumri Tilaiya', 'Jharkhand'),
(534, 'Khunti', 'Jharkhand'),
(535, 'Lohardaga', 'Jharkhand'),
(536, 'Madhupur', 'Jharkhand'),
(537, 'Mihijam', 'Jharkhand'),
(538, 'Musabani', 'Jharkhand'),
(539, 'Pakaur', 'Jharkhand'),
(540, 'Patratu', 'Jharkhand'),
(541, 'Phusro', 'Jharkhand'),
(542, 'Ramngarh', 'Jharkhand'),
(543, 'Ranchi', 'Jharkhand'),
(544, 'Sahibganj', 'Jharkhand'),
(545, 'Saunda', 'Jharkhand'),
(546, 'Simdega', 'Jharkhand'),
(547, 'Tenu Dam-cum- Kathhara', 'Jharkhand'),
(548, 'Arasikere', 'Karnataka'),
(549, 'Bangalore', 'Karnataka'),
(550, 'Belgaum', 'Karnataka'),
(551, 'Bellary', 'Karnataka'),
(552, 'Chamrajnagar', 'Karnataka'),
(553, 'Chikkaballapur', 'Karnataka'),
(554, 'Chintamani', 'Karnataka'),
(555, 'Chitradurga', 'Karnataka'),
(556, 'Gulbarga', 'Karnataka'),
(557, 'Gundlupet', 'Karnataka'),
(558, 'Hassan', 'Karnataka'),
(559, 'Hospet', 'Karnataka'),
(560, 'Hubli', 'Karnataka'),
(561, 'Karkala', 'Karnataka'),
(562, 'Karwar', 'Karnataka'),
(563, 'Kolar', 'Karnataka'),
(564, 'Kota', 'Karnataka'),
(565, 'Lakshmeshwar', 'Karnataka'),
(566, 'Lingsugur', 'Karnataka'),
(567, 'Maddur', 'Karnataka'),
(568, 'Madhugiri', 'Karnataka'),
(569, 'Madikeri', 'Karnataka'),
(570, 'Magadi', 'Karnataka'),
(571, 'Mahalingpur', 'Karnataka'),
(572, 'Malavalli', 'Karnataka'),
(573, 'Malur', 'Karnataka'),
(574, 'Mandya', 'Karnataka'),
(575, 'Mangalore', 'Karnataka'),
(576, 'Manvi', 'Karnataka'),
(577, 'Mudalgi', 'Karnataka'),
(578, 'Mudbidri', 'Karnataka'),
(579, 'Muddebihal', 'Karnataka'),
(580, 'Mudhol', 'Karnataka'),
(581, 'Mulbagal', 'Karnataka'),
(582, 'Mundargi', 'Karnataka'),
(583, 'Mysore', 'Karnataka'),
(584, 'Nanjangud', 'Karnataka'),
(585, 'Pavagada', 'Karnataka'),
(586, 'Puttur', 'Karnataka'),
(587, 'Rabkavi Banhatti', 'Karnataka'),
(588, 'Raichur', 'Karnataka'),
(589, 'Ramanagaram', 'Karnataka'),
(590, 'Ramdurg', 'Karnataka'),
(591, 'Ranibennur', 'Karnataka'),
(592, 'Robertson Pet', 'Karnataka'),
(593, 'Ron', 'Karnataka'),
(594, 'Sadalgi', 'Karnataka'),
(595, 'Sagar', 'Karnataka'),
(596, 'Sakleshpur', 'Karnataka'),
(597, 'Sandur', 'Karnataka'),
(598, 'Sankeshwar', 'Karnataka'),
(599, 'Saundatti-Yellamma', 'Karnataka'),
(600, 'Savanur', 'Karnataka'),
(601, 'Sedam', 'Karnataka'),
(602, 'Shahabad', 'Karnataka'),
(603, 'Shahpur', 'Karnataka'),
(604, 'Shiggaon', 'Karnataka'),
(605, 'Shikapur', 'Karnataka'),
(606, 'Shimoga', 'Karnataka'),
(607, 'Shorapur', 'Karnataka'),
(608, 'Shrirangapattana', 'Karnataka'),
(609, 'Sidlaghatta', 'Karnataka'),
(610, 'Sindgi', 'Karnataka'),
(611, 'Sindhnur', 'Karnataka'),
(612, 'Sira', 'Karnataka'),
(613, 'Sirsi', 'Karnataka'),
(614, 'Siruguppa', 'Karnataka'),
(615, 'Srinivaspur', 'Karnataka'),
(616, 'Talikota', 'Karnataka'),
(617, 'Tarikere', 'Karnataka'),
(618, 'Tekkalakota', 'Karnataka'),
(619, 'Terdal', 'Karnataka'),
(620, 'Tiptur', 'Karnataka'),
(621, 'Tumkur', 'Karnataka'),
(622, 'Udupi', 'Karnataka'),
(623, 'Vijayapura', 'Karnataka'),
(624, 'Wadi', 'Karnataka'),
(625, 'Yadgir', 'Karnataka'),
(626, 'Adoor', 'Kerala'),
(627, 'Akathiyoor', 'Kerala'),
(628, 'Alappuzha', 'Kerala'),
(629, 'Ancharakandy', 'Kerala'),
(630, 'Aroor', 'Kerala'),
(631, 'Ashtamichira', 'Kerala'),
(632, 'Attingal', 'Kerala'),
(633, 'Avinissery', 'Kerala'),
(634, 'Chalakudy', 'Kerala'),
(635, 'Changanassery', 'Kerala'),
(636, 'Chendamangalam', 'Kerala'),
(637, 'Chengannur', 'Kerala'),
(638, 'Cherthala', 'Kerala'),
(639, 'Cheruthazham', 'Kerala'),
(640, 'Chittur-Thathamangalam', 'Kerala'),
(641, 'Chockli', 'Kerala'),
(642, 'Erattupetta', 'Kerala'),
(643, 'Guruvayoor', 'Kerala'),
(644, 'Irinjalakuda', 'Kerala'),
(645, 'Kadirur', 'Kerala'),
(646, 'Kalliasseri', 'Kerala'),
(647, 'Kalpetta', 'Kerala'),
(648, 'Kanhangad', 'Kerala'),
(649, 'Kanjikkuzhi', 'Kerala'),
(650, 'Kannur', 'Kerala'),
(651, 'Kasaragod', 'Kerala'),
(652, 'Kayamkulam', 'Kerala'),
(653, 'Kochi', 'Kerala'),
(654, 'Kodungallur', 'Kerala'),
(655, 'Kollam', 'Kerala'),
(656, 'Koothuparamba', 'Kerala'),
(657, 'Kothamangalam', 'Kerala'),
(658, 'Kottayam', 'Kerala'),
(659, 'Kozhikode', 'Kerala'),
(660, 'Kunnamkulam', 'Kerala'),
(661, 'Malappuram', 'Kerala'),
(662, 'Mattannur', 'Kerala'),
(663, 'Mavelikkara', 'Kerala'),
(664, 'Mavoor', 'Kerala'),
(665, 'Muvattupuzha', 'Kerala'),
(666, 'Nedumangad', 'Kerala'),
(667, 'Neyyattinkara', 'Kerala'),
(668, 'Ottappalam', 'Kerala'),
(669, 'Palai', 'Kerala'),
(670, 'Palakkad', 'Kerala'),
(671, 'Panniyannur', 'Kerala'),
(672, 'Pappinisseri', 'Kerala'),
(673, 'Paravoor', 'Kerala'),
(674, 'Pathanamthitta', 'Kerala'),
(675, 'Payyannur', 'Kerala'),
(676, 'Peringathur', 'Kerala'),
(677, 'Perinthalmanna', 'Kerala'),
(678, 'Perumbavoor', 'Kerala'),
(679, 'Ponnani', 'Kerala'),
(680, 'Punalur', 'Kerala'),
(681, 'Quilandy', 'Kerala'),
(682, 'Shoranur', 'Kerala'),
(683, 'Taliparamba', 'Kerala'),
(684, 'Thiruvalla', 'Kerala'),
(685, 'Thiruvananthapuram', 'Kerala'),
(686, 'Thodupuzha', 'Kerala'),
(687, 'Thrissur', 'Kerala'),
(688, 'Tirur', 'Kerala'),
(689, 'Vadakara', 'Kerala'),
(690, 'Vaikom', 'Kerala'),
(691, 'Varkala', 'Kerala'),
(692, 'Kavaratti', 'Lakshadweep'),
(693, 'Ashok Nagar', 'Madhya Pradesh'),
(694, 'Balaghat', 'Madhya Pradesh'),
(695, 'Betul', 'Madhya Pradesh'),
(696, 'Bhopal', 'Madhya Pradesh'),
(697, 'Burhanpur', 'Madhya Pradesh'),
(698, 'Chhatarpur', 'Madhya Pradesh'),
(699, 'Dabra', 'Madhya Pradesh'),
(700, 'Datia', 'Madhya Pradesh'),
(701, 'Dewas', 'Madhya Pradesh'),
(702, 'Dhar', 'Madhya Pradesh'),
(703, 'Fatehabad', 'Madhya Pradesh'),
(704, 'Gwalior', 'Madhya Pradesh'),
(705, 'Indore', 'Madhya Pradesh'),
(706, 'Itarsi', 'Madhya Pradesh'),
(707, 'Jabalpur', 'Madhya Pradesh'),
(708, 'Katni', 'Madhya Pradesh'),
(709, 'Kotma', 'Madhya Pradesh'),
(710, 'Lahar', 'Madhya Pradesh'),
(711, 'Lundi', 'Madhya Pradesh'),
(712, 'Maharajpur', 'Madhya Pradesh'),
(713, 'Mahidpur', 'Madhya Pradesh'),
(714, 'Maihar', 'Madhya Pradesh'),
(715, 'Malajkhand', 'Madhya Pradesh'),
(716, 'Manasa', 'Madhya Pradesh'),
(717, 'Manawar', 'Madhya Pradesh'),
(718, 'Mandideep', 'Madhya Pradesh'),
(719, 'Mandla', 'Madhya Pradesh'),
(720, 'Mandsaur', 'Madhya Pradesh'),
(721, 'Mauganj', 'Madhya Pradesh'),
(722, 'Mhow Cantonment', 'Madhya Pradesh'),
(723, 'Mhowgaon', 'Madhya Pradesh'),
(724, 'Morena', 'Madhya Pradesh'),
(725, 'Multai', 'Madhya Pradesh'),
(726, 'Murwara', 'Madhya Pradesh'),
(727, 'Nagda', 'Madhya Pradesh'),
(728, 'Nainpur', 'Madhya Pradesh'),
(729, 'Narsinghgarh', 'Madhya Pradesh'),
(730, 'Narsinghgarh', 'Madhya Pradesh'),
(731, 'Neemuch', 'Madhya Pradesh'),
(732, 'Nepanagar', 'Madhya Pradesh'),
(733, 'Niwari', 'Madhya Pradesh'),
(734, 'Nowgong', 'Madhya Pradesh'),
(735, 'Nowrozabad', 'Madhya Pradesh'),
(736, 'Pachore', 'Madhya Pradesh'),
(737, 'Pali', 'Madhya Pradesh'),
(738, 'Panagar', 'Madhya Pradesh'),
(739, 'Pandhurna', 'Madhya Pradesh'),
(740, 'Panna', 'Madhya Pradesh'),
(741, 'Pasan', 'Madhya Pradesh'),
(742, 'Pipariya', 'Madhya Pradesh'),
(743, 'Pithampur', 'Madhya Pradesh'),
(744, 'Porsa', 'Madhya Pradesh'),
(745, 'Prithvipur', 'Madhya Pradesh'),
(746, 'Raghogarh-Vijaypur', 'Madhya Pradesh'),
(747, 'Rahatgarh', 'Madhya Pradesh'),
(748, 'Raisen', 'Madhya Pradesh'),
(749, 'Rajgarh', 'Madhya Pradesh'),
(750, 'Ratlam', 'Madhya Pradesh'),
(751, 'Rau', 'Madhya Pradesh'),
(752, 'Rehli', 'Madhya Pradesh'),
(753, 'Rewa', 'Madhya Pradesh'),
(754, 'Sabalgarh', 'Madhya Pradesh'),
(755, 'Sagar', 'Madhya Pradesh'),
(756, 'Sanawad', 'Madhya Pradesh'),
(757, 'Sarangpur', 'Madhya Pradesh'),
(758, 'Sarni', 'Madhya Pradesh'),
(759, 'Satna', 'Madhya Pradesh'),
(760, 'Sausar', 'Madhya Pradesh'),
(761, 'Sehore', 'Madhya Pradesh'),
(762, 'Sendhwa', 'Madhya Pradesh'),
(763, 'Seoni', 'Madhya Pradesh'),
(764, 'Seoni-Malwa', 'Madhya Pradesh'),
(765, 'Shahdol', 'Madhya Pradesh'),
(766, 'Shajapur', 'Madhya Pradesh'),
(767, 'Shamgarh', 'Madhya Pradesh'),
(768, 'Sheopur', 'Madhya Pradesh'),
(769, 'Shivpuri', 'Madhya Pradesh'),
(770, 'Shujalpur', 'Madhya Pradesh'),
(771, 'Sidhi', 'Madhya Pradesh'),
(772, 'Sihora', 'Madhya Pradesh'),
(773, 'Singrauli', 'Madhya Pradesh'),
(774, 'Sironj', 'Madhya Pradesh'),
(775, 'Sohagpur', 'Madhya Pradesh'),
(776, 'Tarana', 'Madhya Pradesh'),
(777, 'Tikamgarh', 'Madhya Pradesh'),
(778, 'Ujhani', 'Madhya Pradesh'),
(779, 'Ujjain', 'Madhya Pradesh'),
(780, 'Umaria', 'Madhya Pradesh'),
(781, 'Vidisha', 'Madhya Pradesh'),
(782, 'Wara Seoni', 'Madhya Pradesh'),
(783, 'Ahmednagar', 'Maharashtra'),
(784, 'Akola', 'Maharashtra'),
(785, 'Amravati', 'Maharashtra'),
(786, 'Aurangabad', 'Maharashtra'),
(787, 'Baramati', 'Maharashtra'),
(788, 'Chalisgaon', 'Maharashtra'),
(789, 'Chinchani', 'Maharashtra'),
(790, 'Devgarh', 'Maharashtra'),
(791, 'Dhule', 'Maharashtra'),
(792, 'Dombivli', 'Maharashtra'),
(793, 'Durgapur', 'Maharashtra'),
(794, 'Ichalkaranji', 'Maharashtra'),
(795, 'Jalna', 'Maharashtra'),
(796, 'Kalyan', 'Maharashtra'),
(797, 'Latur', 'Maharashtra'),
(798, 'Loha', 'Maharashtra'),
(799, 'Lonar', 'Maharashtra'),
(800, 'Lonavla', 'Maharashtra'),
(801, 'Mahad', 'Maharashtra'),
(802, 'Mahuli', 'Maharashtra'),
(803, 'Malegaon', 'Maharashtra'),
(804, 'Malkapur', 'Maharashtra'),
(805, 'Manchar', 'Maharashtra'),
(806, 'Mangalvedhe', 'Maharashtra'),
(807, 'Mangrulpir', 'Maharashtra'),
(808, 'Manjlegaon', 'Maharashtra'),
(809, 'Manmad', 'Maharashtra'),
(810, 'Manwath', 'Maharashtra'),
(811, 'Mehkar', 'Maharashtra'),
(812, 'Mhaswad', 'Maharashtra'),
(813, 'Miraj', 'Maharashtra'),
(814, 'Morshi', 'Maharashtra'),
(815, 'Mukhed', 'Maharashtra'),
(816, 'Mul', 'Maharashtra'),
(817, 'Mumbai', 'Maharashtra'),
(818, 'Murtijapur', 'Maharashtra'),
(819, 'Nagpur', 'Maharashtra'),
(820, 'Nalasopara', 'Maharashtra'),
(821, 'Nanded-Waghala', 'Maharashtra'),
(822, 'Nandgaon', 'Maharashtra'),
(823, 'Nandura', 'Maharashtra'),
(824, 'Nandurbar', 'Maharashtra'),
(825, 'Narkhed', 'Maharashtra'),
(826, 'Nashik', 'Maharashtra'),
(827, 'Navi Mumbai', 'Maharashtra'),
(828, 'Nawapur', 'Maharashtra'),
(829, 'Nilanga', 'Maharashtra'),
(830, 'Osmanabad', 'Maharashtra'),
(831, 'Ozar', 'Maharashtra'),
(832, 'Pachora', 'Maharashtra'),
(833, 'Paithan', 'Maharashtra'),
(834, 'Palghar', 'Maharashtra'),
(835, 'Pandharkaoda', 'Maharashtra'),
(836, 'Pandharpur', 'Maharashtra'),
(837, 'Panvel', 'Maharashtra'),
(838, 'Parbhani', 'Maharashtra'),
(839, 'Parli', 'Maharashtra'),
(840, 'Parola', 'Maharashtra'),
(841, 'Partur', 'Maharashtra'),
(842, 'Pathardi', 'Maharashtra'),
(843, 'Pathri', 'Maharashtra'),
(844, 'Patur', 'Maharashtra'),
(845, 'Pauni', 'Maharashtra'),
(846, 'Pen', 'Maharashtra'),
(847, 'Phaltan', 'Maharashtra'),
(848, 'Pulgaon', 'Maharashtra'),
(849, 'Pune', 'Maharashtra'),
(850, 'Purna', 'Maharashtra'),
(851, 'Pusad', 'Maharashtra'),
(852, 'Rahuri', 'Maharashtra'),
(853, 'Rajura', 'Maharashtra'),
(854, 'Ramtek', 'Maharashtra'),
(855, 'Ratnagiri', 'Maharashtra'),
(856, 'Raver', 'Maharashtra'),
(857, 'Risod', 'Maharashtra'),
(858, 'Sailu', 'Maharashtra'),
(859, 'Sangamner', 'Maharashtra'),
(860, 'Sangli', 'Maharashtra'),
(861, 'Sangole', 'Maharashtra'),
(862, 'Sasvad', 'Maharashtra'),
(863, 'Satana', 'Maharashtra'),
(864, 'Satara', 'Maharashtra'),
(865, 'Savner', 'Maharashtra'),
(866, 'Sawantwadi', 'Maharashtra'),
(867, 'Shahade', 'Maharashtra'),
(868, 'Shegaon', 'Maharashtra'),
(869, 'Shendurjana', 'Maharashtra'),
(870, 'Shirdi', 'Maharashtra'),
(871, 'Shirpur-Warwade', 'Maharashtra'),
(872, 'Shirur', 'Maharashtra'),
(873, 'Shrigonda', 'Maharashtra'),
(874, 'Shrirampur', 'Maharashtra'),
(875, 'Sillod', 'Maharashtra'),
(876, 'Sinnar', 'Maharashtra'),
(877, 'Solapur', 'Maharashtra'),
(878, 'Soyagaon', 'Maharashtra'),
(879, 'Talegaon Dabhade', 'Maharashtra'),
(880, 'Talode', 'Maharashtra'),
(881, 'Tasgaon', 'Maharashtra'),
(882, 'Tirora', 'Maharashtra'),
(883, 'Tuljapur', 'Maharashtra'),
(884, 'Tumsar', 'Maharashtra'),
(885, 'Uran', 'Maharashtra'),
(886, 'Uran Islampur', 'Maharashtra'),
(887, 'Wadgaon Road', 'Maharashtra'),
(888, 'Wai', 'Maharashtra'),
(889, 'Wani', 'Maharashtra'),
(890, 'Wardha', 'Maharashtra'),
(891, 'Warora', 'Maharashtra'),
(892, 'Warud', 'Maharashtra'),
(893, 'Washim', 'Maharashtra'),
(894, 'Yevla', 'Maharashtra'),
(895, 'Uchgaon', 'Maharashtra'),
(896, 'Udgir', 'Maharashtra'),
(897, 'Umarga', 'Maharashtra'),
(898, 'Umarkhed', 'Maharashtra'),
(899, 'Umred', 'Maharashtra'),
(900, 'Vadgaon Kasba', 'Maharashtra'),
(901, 'Vaijapur', 'Maharashtra'),
(902, 'Vasai', 'Maharashtra'),
(903, 'Virar', 'Maharashtra'),
(904, 'Vita', 'Maharashtra'),
(905, 'Yavatmal', 'Maharashtra'),
(906, 'Yawal', 'Maharashtra'),
(907, 'Imphal', 'Manipur'),
(908, 'Kakching', 'Manipur'),
(909, 'Lilong', 'Manipur'),
(910, 'Mayang Imphal', 'Manipur'),
(911, 'Thoubal', 'Manipur'),
(912, 'Jowai', 'Meghalaya'),
(913, 'Nongstoin', 'Meghalaya'),
(914, 'Shillong', 'Meghalaya'),
(915, 'Tura', 'Meghalaya'),
(916, 'Aizawl', 'Mizoram'),
(917, 'Champhai', 'Mizoram'),
(918, 'Lunglei', 'Mizoram'),
(919, 'Saiha', 'Mizoram'),
(920, 'Dimapur', 'Nagaland'),
(921, 'Kohima', 'Nagaland'),
(922, 'Mokokchung', 'Nagaland'),
(923, 'Tuensang', 'Nagaland'),
(924, 'Wokha', 'Nagaland'),
(925, 'Zunheboto', 'Nagaland'),
(950, 'Anandapur', 'Orissa'),
(951, 'Anugul', 'Orissa'),
(952, 'Asika', 'Orissa'),
(953, 'Balangir', 'Orissa'),
(954, 'Balasore', 'Orissa'),
(955, 'Baleshwar', 'Orissa'),
(956, 'Bamra', 'Orissa'),
(957, 'Barbil', 'Orissa'),
(958, 'Bargarh', 'Orissa'),
(959, 'Bargarh', 'Orissa'),
(960, 'Baripada', 'Orissa'),
(961, 'Basudebpur', 'Orissa'),
(962, 'Belpahar', 'Orissa'),
(963, 'Bhadrak', 'Orissa'),
(964, 'Bhawanipatna', 'Orissa'),
(965, 'Bhuban', 'Orissa'),
(966, 'Bhubaneswar', 'Orissa'),
(967, 'Biramitrapur', 'Orissa'),
(968, 'Brahmapur', 'Orissa'),
(969, 'Brajrajnagar', 'Orissa'),
(970, 'Byasanagar', 'Orissa'),
(971, 'Cuttack', 'Orissa'),
(972, 'Debagarh', 'Orissa'),
(973, 'Dhenkanal', 'Orissa'),
(974, 'Gunupur', 'Orissa'),
(975, 'Hinjilicut', 'Orissa'),
(976, 'Jagatsinghapur', 'Orissa'),
(977, 'Jajapur', 'Orissa'),
(978, 'Jaleswar', 'Orissa'),
(979, 'Jatani', 'Orissa'),
(980, 'Jeypur', 'Orissa'),
(981, 'Jharsuguda', 'Orissa'),
(982, 'Joda', 'Orissa'),
(983, 'Kantabanji', 'Orissa'),
(984, 'Karanjia', 'Orissa'),
(985, 'Kendrapara', 'Orissa'),
(986, 'Kendujhar', 'Orissa'),
(987, 'Khordha', 'Orissa'),
(988, 'Koraput', 'Orissa'),
(989, 'Malkangiri', 'Orissa'),
(990, 'Nabarangapur', 'Orissa'),
(991, 'Paradip', 'Orissa'),
(992, 'Parlakhemundi', 'Orissa'),
(993, 'Pattamundai', 'Orissa'),
(994, 'Phulabani', 'Orissa'),
(995, 'Puri', 'Orissa'),
(996, 'Rairangpur', 'Orissa'),
(997, 'Rajagangapur', 'Orissa'),
(998, 'Raurkela', 'Orissa'),
(999, 'Rayagada', 'Orissa'),
(1000, 'Sambalpur', 'Orissa'),
(1001, 'Soro', 'Orissa'),
(1002, 'Sunabeda', 'Orissa'),
(1003, 'Sundargarh', 'Orissa'),
(1004, 'Talcher', 'Orissa'),
(1005, 'Titlagarh', 'Orissa'),
(1006, 'Umarkote', 'Orissa'),
(1007, 'Karaikal', 'Pondicherry'),
(1008, 'Mahe', 'Pondicherry'),
(1009, 'Pondicherry', 'Pondicherry'),
(1010, 'Yanam', 'Pondicherry'),
(1011, 'Ahmedgarh', 'Punjab'),
(1012, 'Amritsar', 'Punjab'),
(1013, 'Barnala', 'Punjab'),
(1014, 'Batala', 'Punjab'),
(1015, 'Bathinda', 'Punjab'),
(1016, 'Bhagha Purana', 'Punjab'),
(1017, 'Budhlada', 'Punjab'),
(1018, 'Chandigarh', 'Punjab'),
(1019, 'Dasua', 'Punjab'),
(1020, 'Dhuri', 'Punjab'),
(1021, 'Dinanagar', 'Punjab'),
(1022, 'Faridkot', 'Punjab'),
(1023, 'Fazilka', 'Punjab'),
(1024, 'Firozpur', 'Punjab'),
(1025, 'Firozpur Cantt.', 'Punjab'),
(1026, 'Giddarbaha', 'Punjab'),
(1027, 'Gobindgarh', 'Punjab'),
(1028, 'Gurdaspur', 'Punjab'),
(1029, 'Hoshiarpur', 'Punjab'),
(1030, 'Jagraon', 'Punjab'),
(1031, 'Jaitu', 'Punjab'),
(1032, 'Jalalabad', 'Punjab'),
(1033, 'Jalandhar', 'Punjab'),
(1034, 'Jalandhar Cantt.', 'Punjab'),
(1035, 'Jandiala', 'Punjab'),
(1036, 'Kapurthala', 'Punjab'),
(1037, 'Karoran', 'Punjab'),
(1038, 'Kartarpur', 'Punjab'),
(1039, 'Khanna', 'Punjab'),
(1040, 'Kharar', 'Punjab'),
(1041, 'Kot Kapura', 'Punjab'),
(1042, 'Kurali', 'Punjab'),
(1043, 'Longowal', 'Punjab'),
(1044, 'Ludhiana', 'Punjab'),
(1045, 'Malerkotla', 'Punjab'),
(1046, 'Malout', 'Punjab'),
(1047, 'Mansa', 'Punjab'),
(1048, 'Maur', 'Punjab'),
(1049, 'Moga', 'Punjab'),
(1050, 'Mohali', 'Punjab'),
(1051, 'Morinda', 'Punjab'),
(1052, 'Mukerian', 'Punjab'),
(1053, 'Muktsar', 'Punjab'),
(1054, 'Nabha', 'Punjab'),
(1055, 'Nakodar', 'Punjab'),
(1056, 'Nangal', 'Punjab'),
(1057, 'Nawanshahr', 'Punjab'),
(1058, 'Pathankot', 'Punjab'),
(1059, 'Patiala', 'Punjab'),
(1060, 'Patran', 'Punjab'),
(1061, 'Patti', 'Punjab'),
(1062, 'Phagwara', 'Punjab'),
(1063, 'Phillaur', 'Punjab'),
(1064, 'Qadian', 'Punjab'),
(1065, 'Raikot', 'Punjab'),
(1066, 'Rajpura', 'Punjab'),
(1067, 'Rampura Phul', 'Punjab'),
(1068, 'Rupnagar', 'Punjab'),
(1069, 'Samana', 'Punjab'),
(1070, 'Sangrur', 'Punjab'),
(1071, 'Sirhind Fatehgarh Sahib', 'Punjab'),
(1072, 'Sujanpur', 'Punjab'),
(1073, 'Sunam', 'Punjab'),
(1074, 'Talwara', 'Punjab'),
(1075, 'Tarn Taran', 'Punjab'),
(1076, 'Urmar Tanda', 'Punjab'),
(1077, 'Zira', 'Punjab'),
(1078, 'Zirakpur', 'Punjab'),
(1079, 'Bali', 'Rajasthan'),
(1080, 'Banswara', 'Rajasthan'),
(1081, 'Ajmer', 'Rajasthan'),
(1082, 'Alwar', 'Rajasthan'),
(1083, 'Bandikui', 'Rajasthan'),
(1084, 'Baran', 'Rajasthan'),
(1085, 'Barmer', 'Rajasthan'),
(1086, 'Bikaner', 'Rajasthan'),
(1087, 'Fatehpur', 'Rajasthan'),
(1088, 'Jaipur', 'Rajasthan'),
(1089, 'Jaisalmer', 'Rajasthan'),
(1090, 'Jodhpur', 'Rajasthan'),
(1091, 'Kota', 'Rajasthan'),
(1092, 'Lachhmangarh', 'Rajasthan'),
(1093, 'Ladnu', 'Rajasthan'),
(1094, 'Lakheri', 'Rajasthan'),
(1095, 'Lalsot', 'Rajasthan'),
(1096, 'Losal', 'Rajasthan'),
(1097, 'Makrana', 'Rajasthan'),
(1098, 'Malpura', 'Rajasthan'),
(1099, 'Mandalgarh', 'Rajasthan'),
(1100, 'Mandawa', 'Rajasthan'),
(1101, 'Mangrol', 'Rajasthan'),
(1102, 'Merta City', 'Rajasthan'),
(1103, 'Mount Abu', 'Rajasthan'),
(1104, 'Nadbai', 'Rajasthan'),
(1105, 'Nagar', 'Rajasthan'),
(1106, 'Nagaur', 'Rajasthan'),
(1107, 'Nargund', 'Rajasthan'),
(1108, 'Nasirabad', 'Rajasthan'),
(1109, 'Nathdwara', 'Rajasthan'),
(1110, 'Navalgund', 'Rajasthan'),
(1111, 'Nawalgarh', 'Rajasthan'),
(1112, 'Neem-Ka-Thana', 'Rajasthan'),
(1113, 'Nelamangala', 'Rajasthan'),
(1114, 'Nimbahera', 'Rajasthan'),
(1115, 'Nipani', 'Rajasthan'),
(1116, 'Niwai', 'Rajasthan'),
(1117, 'Nohar', 'Rajasthan'),
(1118, 'Nokha', 'Rajasthan'),
(1119, 'Pali', 'Rajasthan'),
(1120, 'Phalodi', 'Rajasthan'),
(1121, 'Phulera', 'Rajasthan'),
(1122, 'Pilani', 'Rajasthan'),
(1123, 'Pilibanga', 'Rajasthan'),
(1124, 'Pindwara', 'Rajasthan'),
(1125, 'Pipar City', 'Rajasthan'),
(1126, 'Prantij', 'Rajasthan'),
(1127, 'Pratapgarh', 'Rajasthan'),
(1128, 'Raisinghnagar', 'Rajasthan'),
(1129, 'Rajakhera', 'Rajasthan'),
(1130, 'Rajaldesar', 'Rajasthan'),
(1131, 'Rajgarh (Alwar)', 'Rajasthan'),
(1132, 'Rajgarh (Churu', 'Rajasthan'),
(1133, 'Rajsamand', 'Rajasthan'),
(1134, 'Ramganj Mandi', 'Rajasthan'),
(1135, 'Ramngarh', 'Rajasthan'),
(1136, 'Ratangarh', 'Rajasthan'),
(1137, 'Rawatbhata', 'Rajasthan'),
(1138, 'Rawatsar', 'Rajasthan'),
(1139, 'Reengus', 'Rajasthan'),
(1140, 'Sadri', 'Rajasthan'),
(1141, 'Sadulshahar', 'Rajasthan'),
(1142, 'Sagwara', 'Rajasthan'),
(1143, 'Sambhar', 'Rajasthan'),
(1144, 'Sanchore', 'Rajasthan'),
(1145, 'Sangaria', 'Rajasthan'),
(1146, 'Sardarshahar', 'Rajasthan'),
(1147, 'Sawai Madhopur', 'Rajasthan'),
(1148, 'Shahpura', 'Rajasthan'),
(1149, 'Shahpura', 'Rajasthan'),
(1150, 'Sheoganj', 'Rajasthan'),
(1151, 'Sikar', 'Rajasthan'),
(1152, 'Sirohi', 'Rajasthan'),
(1153, 'Sojat', 'Rajasthan'),
(1154, 'Sri Madhopur', 'Rajasthan'),
(1155, 'Sujangarh', 'Rajasthan'),
(1156, 'Sumerpur', 'Rajasthan'),
(1157, 'Suratgarh', 'Rajasthan'),
(1158, 'Taranagar', 'Rajasthan'),
(1159, 'Todabhim', 'Rajasthan'),
(1160, 'Todaraisingh', 'Rajasthan'),
(1161, 'Tonk', 'Rajasthan'),
(1162, 'Udaipur', 'Rajasthan'),
(1163, 'Udaipurwati', 'Rajasthan'),
(1164, 'Vijainagar', 'Rajasthan'),
(1165, 'Gangtok', 'Sikkim'),
(1166, 'Calcutta', 'West Bengal'),
(1167, 'Arakkonam', 'Tamil Nadu'),
(1168, 'Arcot', 'Tamil Nadu'),
(1169, 'Aruppukkottai', 'Tamil Nadu'),
(1170, 'Bhavani', 'Tamil Nadu'),
(1171, 'Chengalpattu', 'Tamil Nadu'),
(1172, 'Chennai', 'Tamil Nadu'),
(1173, 'Chinna salem', 'Tamil nadu'),
(1174, 'Coimbatore', 'Tamil Nadu'),
(1175, 'Coonoor', 'Tamil Nadu'),
(1176, 'Cuddalore', 'Tamil Nadu'),
(1177, 'Dharmapuri', 'Tamil Nadu'),
(1178, 'Dindigul', 'Tamil Nadu'),
(1179, 'Erode', 'Tamil Nadu'),
(1180, 'Gudalur', 'Tamil Nadu'),
(1181, 'Gudalur', 'Tamil Nadu'),
(1182, 'Gudalur', 'Tamil Nadu'),
(1183, 'Kanchipuram', 'Tamil Nadu'),
(1184, 'Karaikudi', 'Tamil Nadu'),
(1185, 'Karungal', 'Tamil Nadu'),
(1186, 'Karur', 'Tamil Nadu'),
(1187, 'Kollankodu', 'Tamil Nadu'),
(1188, 'Lalgudi', 'Tamil Nadu'),
(1189, 'Madurai', 'Tamil Nadu'),
(1190, 'Nagapattinam', 'Tamil Nadu'),
(1191, 'Nagercoil', 'Tamil Nadu'),
(1192, 'Namagiripettai', 'Tamil Nadu'),
(1193, 'Namakkal', 'Tamil Nadu'),
(1194, 'Nandivaram-Guduvancheri', 'Tamil Nadu'),
(1195, 'Nanjikottai', 'Tamil Nadu'),
(1196, 'Natham', 'Tamil Nadu'),
(1197, 'Nellikuppam', 'Tamil Nadu'),
(1198, 'Neyveli', 'Tamil Nadu'),
(1199, 'O\' Valley', 'Tamil Nadu'),
(1200, 'Oddanchatram', 'Tamil Nadu'),
(1201, 'P.N.Patti', 'Tamil Nadu'),
(1202, 'Pacode', 'Tamil Nadu'),
(1203, 'Padmanabhapuram', 'Tamil Nadu'),
(1204, 'Palani', 'Tamil Nadu'),
(1205, 'Palladam', 'Tamil Nadu'),
(1206, 'Pallapatti', 'Tamil Nadu'),
(1207, 'Pallikonda', 'Tamil Nadu'),
(1208, 'Panagudi', 'Tamil Nadu'),
(1209, 'Panruti', 'Tamil Nadu'),
(1210, 'Paramakudi', 'Tamil Nadu'),
(1211, 'Parangipettai', 'Tamil Nadu'),
(1212, 'Pattukkottai', 'Tamil Nadu'),
(1213, 'Perambalur', 'Tamil Nadu'),
(1214, 'Peravurani', 'Tamil Nadu'),
(1215, 'Periyakulam', 'Tamil Nadu'),
(1216, 'Periyasemur', 'Tamil Nadu'),
(1217, 'Pernampattu', 'Tamil Nadu'),
(1218, 'Pollachi', 'Tamil Nadu'),
(1219, 'Polur', 'Tamil Nadu'),
(1220, 'Ponneri', 'Tamil Nadu'),
(1221, 'Pudukkottai', 'Tamil Nadu'),
(1222, 'Pudupattinam', 'Tamil Nadu'),
(1223, 'Puliyankudi', 'Tamil Nadu'),
(1224, 'Punjaipugalur', 'Tamil Nadu'),
(1225, 'Rajapalayam', 'Tamil Nadu'),
(1226, 'Ramanathapuram', 'Tamil Nadu'),
(1227, 'Rameshwaram', 'Tamil Nadu'),
(1228, 'Rasipuram', 'Tamil Nadu'),
(1229, 'Salem', 'Tamil Nadu'),
(1230, 'Sankarankoil', 'Tamil Nadu'),
(1231, 'Sankari', 'Tamil Nadu'),
(1232, 'Sathyamangalam', 'Tamil Nadu'),
(1233, 'Sattur', 'Tamil Nadu'),
(1234, 'Shenkottai', 'Tamil Nadu'),
(1235, 'Sholavandan', 'Tamil Nadu'),
(1236, 'Sholingur', 'Tamil Nadu'),
(1237, 'Sirkali', 'Tamil Nadu'),
(1238, 'Sivaganga', 'Tamil Nadu'),
(1239, 'Sivagiri', 'Tamil Nadu'),
(1240, 'Sivakasi', 'Tamil Nadu'),
(1241, 'Srivilliputhur', 'Tamil Nadu'),
(1242, 'Surandai', 'Tamil Nadu'),
(1243, 'Suriyampalayam', 'Tamil Nadu'),
(1244, 'Tenkasi', 'Tamil Nadu'),
(1245, 'Thammampatti', 'Tamil Nadu'),
(1246, 'Thanjavur', 'Tamil Nadu'),
(1247, 'Tharamangalam', 'Tamil Nadu'),
(1248, 'Tharangambadi', 'Tamil Nadu'),
(1249, 'Theni Allinagaram', 'Tamil Nadu'),
(1250, 'Thirumangalam', 'Tamil Nadu'),
(1251, 'Thirunindravur', 'Tamil Nadu'),
(1252, 'Thiruparappu', 'Tamil Nadu'),
(1253, 'Thirupuvanam', 'Tamil Nadu'),
(1254, 'Thiruthuraipoondi', 'Tamil Nadu'),
(1255, 'Thiruvallur', 'Tamil Nadu'),
(1256, 'Thiruvarur', 'Tamil Nadu'),
(1257, 'Thoothukudi', 'Tamil Nadu'),
(1258, 'Thuraiyur', 'Tamil Nadu'),
(1259, 'Tindivanam', 'Tamil Nadu'),
(1260, 'Tiruchendur', 'Tamil Nadu'),
(1261, 'Tiruchengode', 'Tamil Nadu'),
(1262, 'Tiruchirappalli', 'Tamil Nadu'),
(1263, 'Tirukalukundram', 'Tamil Nadu'),
(1264, 'Tirukkoyilur', 'Tamil Nadu'),
(1265, 'Tirunelveli', 'Tamil Nadu'),
(1266, 'Tirupathur', 'Tamil Nadu'),
(1267, 'Tirupathur', 'Tamil Nadu'),
(1268, 'Tiruppur', 'Tamil Nadu'),
(1269, 'Tiruttani', 'Tamil Nadu'),
(1270, 'Tiruvannamalai', 'Tamil Nadu'),
(1271, 'Tiruvethipuram', 'Tamil Nadu'),
(1272, 'Tittakudi', 'Tamil Nadu'),
(1273, 'Udhagamandalam', 'Tamil Nadu'),
(1274, 'Udumalaipettai', 'Tamil Nadu'),
(1275, 'Unnamalaikadai', 'Tamil Nadu'),
(1276, 'Usilampatti', 'Tamil Nadu'),
(1277, 'Uthamapalayam', 'Tamil Nadu'),
(1278, 'Uthiramerur', 'Tamil Nadu'),
(1279, 'Vadakkuvalliyur', 'Tamil Nadu'),
(1280, 'Vadalur', 'Tamil Nadu'),
(1281, 'Vadipatti', 'Tamil Nadu'),
(1282, 'Valparai', 'Tamil Nadu'),
(1283, 'Vandavasi', 'Tamil Nadu'),
(1284, 'Vaniyambadi', 'Tamil Nadu'),
(1285, 'Vedaranyam', 'Tamil Nadu'),
(1286, 'Vellakoil', 'Tamil Nadu'),
(1287, 'Vellore', 'Tamil Nadu'),
(1288, 'Vikramasingapuram', 'Tamil Nadu'),
(1289, 'Viluppuram', 'Tamil Nadu'),
(1290, 'Virudhachalam', 'Tamil Nadu'),
(1291, 'Virudhunagar', 'Tamil Nadu'),
(1292, 'Viswanatham', 'Tamil Nadu'),
(1293, 'Agartala', 'Tripura'),
(1294, 'Badharghat', 'Tripura'),
(1295, 'Dharmanagar', 'Tripura'),
(1296, 'Indranagar', 'Tripura'),
(1297, 'Jogendranagar', 'Tripura'),
(1298, 'Kailasahar', 'Tripura'),
(1299, 'Khowai', 'Tripura'),
(1300, 'Pratapgarh', 'Tripura'),
(1301, 'Udaipur', 'Tripura'),
(1302, 'Achhnera', 'Uttar Pradesh'),
(1303, 'Adari', 'Uttar Pradesh'),
(1304, 'Agra', 'Uttar Pradesh'),
(1305, 'Aligarh', 'Uttar Pradesh'),
(1306, 'Allahabad', 'Uttar Pradesh'),
(1307, 'Amroha', 'Uttar Pradesh'),
(1308, 'Azamgarh', 'Uttar Pradesh'),
(1309, 'Bahraich', 'Uttar Pradesh'),
(1310, 'Ballia', 'Uttar Pradesh'),
(1311, 'Balrampur', 'Uttar Pradesh'),
(1312, 'Banda', 'Uttar Pradesh'),
(1313, 'Bareilly', 'Uttar Pradesh'),
(1314, 'Chandausi', 'Uttar Pradesh'),
(1315, 'Dadri', 'Uttar Pradesh'),
(1316, 'Deoria', 'Uttar Pradesh'),
(1317, 'Etawah', 'Uttar Pradesh'),
(1318, 'Fatehabad', 'Uttar Pradesh'),
(1319, 'Fatehpur', 'Uttar Pradesh'),
(1320, 'Fatehpur', 'Uttar Pradesh'),
(1321, 'Greater Noida', 'Uttar Pradesh'),
(1322, 'Hamirpur', 'Uttar Pradesh'),
(1323, 'Hardoi', 'Uttar Pradesh'),
(1324, 'Jajmau', 'Uttar Pradesh'),
(1325, 'Jaunpur', 'Uttar Pradesh'),
(1326, 'Jhansi', 'Uttar Pradesh'),
(1327, 'Kalpi', 'Uttar Pradesh'),
(1328, 'Kanpur', 'Uttar Pradesh'),
(1329, 'Kota', 'Uttar Pradesh'),
(1330, 'Laharpur', 'Uttar Pradesh'),
(1331, 'Lakhimpur', 'Uttar Pradesh'),
(1332, 'Lal Gopalganj Nindaura', 'Uttar Pradesh'),
(1333, 'Lalganj', 'Uttar Pradesh'),
(1334, 'Lalitpur', 'Uttar Pradesh'),
(1335, 'Lar', 'Uttar Pradesh'),
(1336, 'Loni', 'Uttar Pradesh'),
(1337, 'Lucknow', 'Uttar Pradesh'),
(1338, 'Mathura', 'Uttar Pradesh'),
(1339, 'Meerut', 'Uttar Pradesh'),
(1340, 'Modinagar', 'Uttar Pradesh'),
(1341, 'Muradnagar', 'Uttar Pradesh'),
(1342, 'Nagina', 'Uttar Pradesh'),
(1343, 'Najibabad', 'Uttar Pradesh'),
(1344, 'Nakur', 'Uttar Pradesh'),
(1345, 'Nanpara', 'Uttar Pradesh'),
(1346, 'Naraura', 'Uttar Pradesh'),
(1347, 'Naugawan Sadat', 'Uttar Pradesh'),
(1348, 'Nautanwa', 'Uttar Pradesh'),
(1349, 'Nawabganj', 'Uttar Pradesh'),
(1350, 'Nehtaur', 'Uttar Pradesh'),
(1351, 'NOIDA', 'Uttar Pradesh'),
(1352, 'Noorpur', 'Uttar Pradesh'),
(1353, 'Obra', 'Uttar Pradesh'),
(1354, 'Orai', 'Uttar Pradesh'),
(1355, 'Padrauna', 'Uttar Pradesh'),
(1356, 'Palia Kalan', 'Uttar Pradesh'),
(1357, 'Parasi', 'Uttar Pradesh'),
(1358, 'Phulpur', 'Uttar Pradesh'),
(1359, 'Pihani', 'Uttar Pradesh'),
(1360, 'Pilibhit', 'Uttar Pradesh'),
(1361, 'Pilkhuwa', 'Uttar Pradesh'),
(1362, 'Powayan', 'Uttar Pradesh'),
(1363, 'Pukhrayan', 'Uttar Pradesh'),
(1364, 'Puranpur', 'Uttar Pradesh'),
(1365, 'Purquazi', 'Uttar Pradesh'),
(1366, 'Purwa', 'Uttar Pradesh'),
(1367, 'Rae Bareli', 'Uttar Pradesh'),
(1368, 'Rampur', 'Uttar Pradesh'),
(1369, 'Rampur Maniharan', 'Uttar Pradesh'),
(1370, 'Rasra', 'Uttar Pradesh'),
(1371, 'Rath', 'Uttar Pradesh'),
(1372, 'Renukoot', 'Uttar Pradesh'),
(1373, 'Reoti', 'Uttar Pradesh'),
(1374, 'Robertsganj', 'Uttar Pradesh'),
(1375, 'Rudauli', 'Uttar Pradesh'),
(1376, 'Rudrapur', 'Uttar Pradesh'),
(1377, 'Sadabad', 'Uttar Pradesh'),
(1378, 'Safipur', 'Uttar Pradesh'),
(1379, 'Saharanpur', 'Uttar Pradesh'),
(1380, 'Sahaspur', 'Uttar Pradesh'),
(1381, 'Sahaswan', 'Uttar Pradesh'),
(1382, 'Sahawar', 'Uttar Pradesh'),
(1383, 'Sahjanwa', 'Uttar Pradesh'),
(1385, 'Sambhal', 'Uttar Pradesh'),
(1386, 'Samdhan', 'Uttar Pradesh'),
(1387, 'Samthar', 'Uttar Pradesh'),
(1388, 'Sandi', 'Uttar Pradesh'),
(1389, 'Sandila', 'Uttar Pradesh'),
(1390, 'Sardhana', 'Uttar Pradesh'),
(1391, 'Seohara', 'Uttar Pradesh'),
(1394, 'Shahganj', 'Uttar Pradesh'),
(1395, 'Shahjahanpur', 'Uttar Pradesh'),
(1396, 'Shamli', 'Uttar Pradesh'),
(1399, 'Sherkot', 'Uttar Pradesh'),
(1401, 'Shikohabad', 'Uttar Pradesh'),
(1402, 'Shishgarh', 'Uttar Pradesh'),
(1403, 'Siana', 'Uttar Pradesh'),
(1404, 'Sikanderpur', 'Uttar Pradesh'),
(1405, 'Sikandra Rao', 'Uttar Pradesh'),
(1406, 'Sikandrabad', 'Uttar Pradesh'),
(1407, 'Sirsaganj', 'Uttar Pradesh'),
(1408, 'Sirsi', 'Uttar Pradesh'),
(1409, 'Sitapur', 'Uttar Pradesh'),
(1410, 'Soron', 'Uttar Pradesh'),
(1411, 'Suar', 'Uttar Pradesh'),
(1412, 'Sultanpur', 'Uttar Pradesh'),
(1413, 'Sumerpur', 'Uttar Pradesh'),
(1414, 'Tanda', 'Uttar Pradesh'),
(1415, 'Tanda', 'Uttar Pradesh'),
(1416, 'Tetri Bazar', 'Uttar Pradesh'),
(1417, 'Thakurdwara', 'Uttar Pradesh'),
(1418, 'Thana Bhawan', 'Uttar Pradesh'),
(1419, 'Tilhar', 'Uttar Pradesh'),
(1420, 'Tirwaganj', 'Uttar Pradesh'),
(1421, 'Tulsipur', 'Uttar Pradesh'),
(1422, 'Tundla', 'Uttar Pradesh'),
(1423, 'Unnao', 'Uttar Pradesh'),
(1424, 'Utraula', 'Uttar Pradesh'),
(1425, 'Varanasi', 'Uttar Pradesh'),
(1426, 'Vrindavan', 'Uttar Pradesh'),
(1427, 'Warhapur', 'Uttar Pradesh'),
(1428, 'Zaidpur', 'Uttar Pradesh'),
(1429, 'Zamania', 'Uttar Pradesh'),
(1430, 'Almora', 'Uttarakhand'),
(1431, 'Bazpur', 'Uttarakhand'),
(1432, 'Chamba', 'Uttarakhand'),
(1433, 'Dehradun', 'Uttarakhand'),
(1434, 'Haldwani', 'Uttarakhand'),
(1435, 'Haridwar', 'Uttarakhand'),
(1436, 'Jaspur', 'Uttarakhand'),
(1437, 'Kashipur', 'Uttarakhand'),
(1438, 'kichha', 'Uttarakhand'),
(1439, 'Kotdwara', 'Uttarakhand'),
(1440, 'Manglaur', 'Uttarakhand'),
(1441, 'Mussoorie', 'Uttarakhand'),
(1442, 'Nagla', 'Uttarakhand'),
(1443, 'Nainital', 'Uttarakhand'),
(1444, 'Pauri', 'Uttarakhand'),
(1445, 'Pithoragarh', 'Uttarakhand'),
(1446, 'Ramnagar', 'Uttarakhand'),
(1447, 'Rishikesh', 'Uttarakhand'),
(1448, 'Roorkee', 'Uttarakhand'),
(1449, 'Rudrapur', 'Uttarakhand'),
(1450, 'Sitarganj', 'Uttarakhand'),
(1451, 'Tehri', 'Uttarakhand'),
(1452, 'Muzaffarnagar', 'Uttar Pradesh'),
(1454, 'Alipurduar', 'West Bengal'),
(1455, 'Arambagh', 'West Bengal'),
(1456, 'Asansol', 'West Bengal'),
(1457, 'Baharampur', 'West Bengal'),
(1458, 'Bally', 'West Bengal'),
(1459, 'Balurghat', 'West Bengal'),
(1460, 'Bankura', 'West Bengal'),
(1461, 'Barakar', 'West Bengal'),
(1462, 'Barasat', 'West Bengal'),
(1463, 'Bardhaman', 'West Bengal'),
(1464, 'Bidhan Nagar', 'West Bengal'),
(1465, 'Chinsura', 'West Bengal'),
(1466, 'Contai', 'West Bengal'),
(1467, 'Cooch Behar', 'West Bengal'),
(1468, 'Darjeeling', 'West Bengal'),
(1469, 'Durgapur', 'West Bengal'),
(1470, 'Haldia', 'West Bengal'),
(1471, 'Howrah', 'West Bengal'),
(1472, 'Islampur', 'West Bengal'),
(1473, 'Jhargram', 'West Bengal'),
(1474, 'Kharagpur', 'West Bengal'),
(1475, 'Kolkata', 'West Bengal'),
(1476, 'Mainaguri', 'West Bengal'),
(1477, 'Mal', 'West Bengal'),
(1478, 'Mathabhanga', 'West Bengal'),
(1479, 'Medinipur', 'West Bengal'),
(1480, 'Memari', 'West Bengal'),
(1481, 'Monoharpur', 'West Bengal'),
(1482, 'Murshidabad', 'West Bengal'),
(1483, 'Nabadwip', 'West Bengal'),
(1484, 'Naihati', 'West Bengal'),
(1485, 'Panchla', 'West Bengal'),
(1486, 'Pandua', 'West Bengal'),
(1487, 'Paschim Punropara', 'West Bengal'),
(1488, 'Purulia', 'West Bengal'),
(1489, 'Raghunathpur', 'West Bengal'),
(1490, 'Raiganj', 'West Bengal'),
(1491, 'Rampurhat', 'West Bengal'),
(1492, 'Ranaghat', 'West Bengal'),
(1493, 'Sainthia', 'West Bengal'),
(1494, 'Santipur', 'West Bengal'),
(1495, 'Siliguri', 'West Bengal'),
(1496, 'Sonamukhi', 'West Bengal'),
(1497, 'Srirampore', 'West Bengal'),
(1498, 'Suri', 'West Bengal'),
(1499, 'Taki', 'West Bengal'),
(1500, 'Tamluk', 'West Bengal'),
(1501, 'Tarakeswar', 'West Bengal'),
(1502, 'Chikmagalur', 'Karnataka'),
(1503, 'Davanagere', 'Karnataka'),
(1504, 'Dharwad', 'Karnataka'),
(1505, 'Gadag', 'Karnataka'),
(1506, 'Chennai', 'Tamil Nadu'),
(1507, 'Coimbatore', 'Tamil Nadu'),
(1624, 'New Delhi', 'Delhi'),
(1625, 'North Delhi', 'Delhi'),
(1626, 'North West Delhi', 'Delhi'),
(1627, 'West Delhi', 'Delhi'),
(1628, 'South West Delhi', 'Delhi'),
(1629, 'South Delhi', 'Delhi'),
(1630, 'South East Delhi', 'Delhi'),
(1631, 'Central Delhi', 'Delhi'),
(1632, 'North East Delhi', 'Delhi'),
(1633, 'Shahdara', 'Delhi'),
(1634, 'East Delhi', 'Delhi'),
(1638, 'Hyderabad', 'Telangana');

-- --------------------------------------------------------

--
-- Table structure for table `clinic_service`
--

CREATE TABLE `clinic_service` (
  `service_id` int(11) NOT NULL,
  `service_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clinic_service`
--

INSERT INTO `clinic_service` (`service_id`, `service_name`) VALUES
(2, 'Fertility Clinics'),
(3, 'Sperm / Cryo Banks'),
(4, 'Fertility Support'),
(5, 'Natural Fertility'),
(6, 'Legal Services'),
(7, 'Parenting Options'),
(8, 'Health Screening'),
(9, 'Counselling & Support'),
(10, 'Complimentary / Holistic Therapy'),
(11, 'Fertility and Baby Products'),
(12, 'Baby and Breastfeeding Services'),
(13, 'Baby and Parenting Groups'),
(14, 'Childcare / Education');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `country_code` varchar(2) NOT NULL DEFAULT '',
  `country_name` varchar(100) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `country_code`, `country_name`) VALUES
(1, 'AF', 'Afghanistan'),
(2, 'AL', 'Albania'),
(3, 'DZ', 'Algeria'),
(4, 'DS', 'American Samoa'),
(5, 'AD', 'Andorra'),
(6, 'AO', 'Angola'),
(7, 'AI', 'Anguilla'),
(8, 'AQ', 'Antarctica'),
(9, 'AG', 'Antigua and Barbuda'),
(10, 'AR', 'Argentina'),
(11, 'AM', 'Armenia'),
(12, 'AW', 'Aruba'),
(13, 'AU', 'Australia'),
(14, 'AT', 'Austria'),
(15, 'AZ', 'Azerbaijan'),
(16, 'BS', 'Bahamas'),
(17, 'BH', 'Bahrain'),
(18, 'BD', 'Bangladesh'),
(19, 'BB', 'Barbados'),
(20, 'BY', 'Belarus'),
(21, 'BE', 'Belgium'),
(22, 'BZ', 'Belize'),
(23, 'BJ', 'Benin'),
(24, 'BM', 'Bermuda'),
(25, 'BT', 'Bhutan'),
(26, 'BO', 'Bolivia'),
(27, 'BA', 'Bosnia and Herzegovina'),
(28, 'BW', 'Botswana'),
(29, 'BV', 'Bouvet Island'),
(30, 'BR', 'Brazil'),
(31, 'IO', 'British Indian Ocean Territory'),
(32, 'BN', 'Brunei Darussalam'),
(33, 'BG', 'Bulgaria'),
(34, 'BF', 'Burkina Faso'),
(35, 'BI', 'Burundi'),
(36, 'KH', 'Cambodia'),
(37, 'CM', 'Cameroon'),
(38, 'CA', 'Canada'),
(39, 'CV', 'Cape Verde'),
(40, 'KY', 'Cayman Islands'),
(41, 'CF', 'Central African Republic'),
(42, 'TD', 'Chad'),
(43, 'CL', 'Chile'),
(44, 'CN', 'China'),
(45, 'CX', 'Christmas Island'),
(46, 'CC', 'Cocos (Keeling) Islands'),
(47, 'CO', 'Colombia'),
(48, 'KM', 'Comoros'),
(49, 'CG', 'Congo'),
(50, 'CK', 'Cook Islands'),
(51, 'CR', 'Costa Rica'),
(52, 'HR', 'Croatia (Hrvatska)'),
(53, 'CU', 'Cuba'),
(54, 'CY', 'Cyprus'),
(55, 'CZ', 'Czech Republic'),
(56, 'DK', 'Denmark'),
(57, 'DJ', 'Djibouti'),
(58, 'DM', 'Dominica'),
(59, 'DO', 'Dominican Republic'),
(60, 'TP', 'East Timor'),
(61, 'EC', 'Ecuador'),
(62, 'EG', 'Egypt'),
(63, 'SV', 'El Salvador'),
(64, 'GQ', 'Equatorial Guinea'),
(65, 'ER', 'Eritrea'),
(66, 'EE', 'Estonia'),
(67, 'ET', 'Ethiopia'),
(68, 'FK', 'Falkland Islands (Malvinas)'),
(69, 'FO', 'Faroe Islands'),
(70, 'FJ', 'Fiji'),
(71, 'FI', 'Finland'),
(72, 'FR', 'France'),
(73, 'FX', 'France, Metropolitan'),
(74, 'GF', 'French Guiana'),
(75, 'PF', 'French Polynesia'),
(76, 'TF', 'French Southern Territories'),
(77, 'GA', 'Gabon'),
(78, 'GM', 'Gambia'),
(79, 'GE', 'Georgia'),
(80, 'DE', 'Germany'),
(81, 'GH', 'Ghana'),
(82, 'GI', 'Gibraltar'),
(83, 'GK', 'Guernsey'),
(84, 'GR', 'Greece'),
(85, 'GL', 'Greenland'),
(86, 'GD', 'Grenada'),
(87, 'GP', 'Guadeloupe'),
(88, 'GU', 'Guam'),
(89, 'GT', 'Guatemala'),
(90, 'GN', 'Guinea'),
(91, 'GW', 'Guinea-Bissau'),
(92, 'GY', 'Guyana'),
(93, 'HT', 'Haiti'),
(94, 'HM', 'Heard and Mc Donald Islands'),
(95, 'HN', 'Honduras'),
(96, 'HK', 'Hong Kong'),
(97, 'HU', 'Hungary'),
(98, 'IS', 'Iceland'),
(99, 'IN', 'India'),
(100, 'IM', 'Isle of Man'),
(101, 'ID', 'Indonesia'),
(102, 'IR', 'Iran (Islamic Republic of)'),
(103, 'IQ', 'Iraq'),
(104, 'IE', 'Ireland'),
(105, 'IL', 'Israel'),
(106, 'IT', 'Italy'),
(107, 'CI', 'Ivory Coast'),
(108, 'JE', 'Jersey'),
(109, 'JM', 'Jamaica'),
(110, 'JP', 'Japan'),
(111, 'JO', 'Jordan'),
(112, 'KZ', 'Kazakhstan'),
(113, 'KE', 'Kenya'),
(114, 'KI', 'Kiribati'),
(115, 'KP', 'Korea, Democratic People\'s Republic of'),
(116, 'KR', 'Korea, Republic of'),
(117, 'XK', 'Kosovo'),
(118, 'KW', 'Kuwait'),
(119, 'KG', 'Kyrgyzstan'),
(120, 'LA', 'Lao People\'s Democratic Republic'),
(121, 'LV', 'Latvia'),
(122, 'LB', 'Lebanon'),
(123, 'LS', 'Lesotho'),
(124, 'LR', 'Liberia'),
(125, 'LY', 'Libyan Arab Jamahiriya'),
(126, 'LI', 'Liechtenstein'),
(127, 'LT', 'Lithuania'),
(128, 'LU', 'Luxembourg'),
(129, 'MO', 'Macau'),
(130, 'MK', 'Macedonia'),
(131, 'MG', 'Madagascar'),
(132, 'MW', 'Malawi'),
(133, 'MY', 'Malaysia'),
(134, 'MV', 'Maldives'),
(135, 'ML', 'Mali'),
(136, 'MT', 'Malta'),
(137, 'MH', 'Marshall Islands'),
(138, 'MQ', 'Martinique'),
(139, 'MR', 'Mauritania'),
(140, 'MU', 'Mauritius'),
(141, 'TY', 'Mayotte'),
(142, 'MX', 'Mexico'),
(143, 'FM', 'Micronesia, Federated States of'),
(144, 'MD', 'Moldova, Republic of'),
(145, 'MC', 'Monaco'),
(146, 'MN', 'Mongolia'),
(147, 'ME', 'Montenegro'),
(148, 'MS', 'Montserrat'),
(149, 'MA', 'Morocco'),
(150, 'MZ', 'Mozambique'),
(151, 'MM', 'Myanmar'),
(152, 'NA', 'Namibia'),
(153, 'NR', 'Nauru'),
(154, 'NP', 'Nepal'),
(155, 'NL', 'Netherlands'),
(156, 'AN', 'Netherlands Antilles'),
(157, 'NC', 'New Caledonia'),
(158, 'NZ', 'New Zealand'),
(159, 'NI', 'Nicaragua'),
(160, 'NE', 'Niger'),
(161, 'NG', 'Nigeria'),
(162, 'NU', 'Niue'),
(163, 'NF', 'Norfolk Island'),
(164, 'MP', 'Northern Mariana Islands'),
(165, 'NO', 'Norway'),
(166, 'OM', 'Oman'),
(167, 'PK', 'Pakistan'),
(168, 'PW', 'Palau'),
(169, 'PS', 'Palestine'),
(170, 'PA', 'Panama'),
(171, 'PG', 'Papua New Guinea'),
(172, 'PY', 'Paraguay'),
(173, 'PE', 'Peru'),
(174, 'PH', 'Philippines'),
(175, 'PN', 'Pitcairn'),
(176, 'PL', 'Poland'),
(177, 'PT', 'Portugal'),
(178, 'PR', 'Puerto Rico'),
(179, 'QA', 'Qatar'),
(180, 'RE', 'Reunion'),
(181, 'RO', 'Romania'),
(182, 'RU', 'Russian Federation'),
(183, 'RW', 'Rwanda'),
(184, 'KN', 'Saint Kitts and Nevis'),
(185, 'LC', 'Saint Lucia'),
(186, 'VC', 'Saint Vincent and the Grenadines'),
(187, 'WS', 'Samoa'),
(188, 'SM', 'San Marino'),
(189, 'ST', 'Sao Tome and Principe'),
(190, 'SA', 'Saudi Arabia'),
(191, 'SN', 'Senegal'),
(192, 'RS', 'Serbia'),
(193, 'SC', 'Seychelles'),
(194, 'SL', 'Sierra Leone'),
(195, 'SG', 'Singapore'),
(196, 'SK', 'Slovakia'),
(197, 'SI', 'Slovenia'),
(198, 'SB', 'Solomon Islands'),
(199, 'SO', 'Somalia'),
(200, 'ZA', 'South Africa'),
(201, 'GS', 'South Georgia South Sandwich Islands'),
(202, 'ES', 'Spain'),
(203, 'LK', 'Sri Lanka'),
(204, 'SH', 'St. Helena'),
(205, 'PM', 'St. Pierre and Miquelon'),
(206, 'SD', 'Sudan'),
(207, 'SR', 'Suriname'),
(208, 'SJ', 'Svalbard and Jan Mayen Islands'),
(209, 'SZ', 'Swaziland'),
(210, 'SE', 'Sweden'),
(211, 'CH', 'Switzerland'),
(212, 'SY', 'Syrian Arab Republic'),
(213, 'TW', 'Taiwan'),
(214, 'TJ', 'Tajikistan'),
(215, 'TZ', 'Tanzania, United Republic of'),
(216, 'TH', 'Thailand'),
(217, 'TG', 'Togo'),
(218, 'TK', 'Tokelau'),
(219, 'TO', 'Tonga'),
(220, 'TT', 'Trinidad and Tobago'),
(221, 'TN', 'Tunisia'),
(222, 'TR', 'Turkey'),
(223, 'TM', 'Turkmenistan'),
(224, 'TC', 'Turks and Caicos Islands'),
(225, 'TV', 'Tuvalu'),
(226, 'UG', 'Uganda'),
(227, 'UA', 'Ukraine'),
(228, 'AE', 'United Arab Emirates'),
(229, 'GB', 'United Kingdom'),
(230, 'US', 'United States'),
(231, 'UM', 'United States minor outlying islands'),
(232, 'UY', 'Uruguay'),
(233, 'UZ', 'Uzbekistan'),
(234, 'VU', 'Vanuatu'),
(235, 'VA', 'Vatican City State'),
(236, 'VE', 'Venezuela'),
(237, 'VN', 'Vietnam'),
(238, 'VG', 'Virgin Islands (British)'),
(239, 'VI', 'Virgin Islands (U.S.)'),
(240, 'WF', 'Wallis and Futuna Islands'),
(241, 'EH', 'Western Sahara'),
(242, 'YE', 'Yemen'),
(243, 'ZR', 'Zaire'),
(244, 'ZM', 'Zambia'),
(245, 'ZW', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `height`
--

CREATE TABLE `height` (
  `height_id` int(11) NOT NULL,
  `height_cm` varchar(20) NOT NULL,
  `height_inch` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `height`
--

INSERT INTO `height` (`height_id`, `height_cm`, `height_inch`) VALUES
(1, '<4\'6\"', '<138cm'),
(2, '4\'7\"', '140cm'),
(4, '4\'8\"', '142cm'),
(5, '4\'9\"', '144cm'),
(6, '4\'10\"', '147cm'),
(7, '4\'11\"', '150cm'),
(8, '5\'', '152cm'),
(9, '5\'1\"', '155cm'),
(10, '5\'2\"', '158cm'),
(11, '5\'3\"', '160cm'),
(12, '5\'4\"', '162cm'),
(13, '5\'5\"', '165cm'),
(14, '5\'6\"', '168cm'),
(15, '5\'7\"', '170cm'),
(16, '5\'8\"', '173cm'),
(17, '5\'9\"', '175cm'),
(18, '5\'10\"', '178cm'),
(19, '5\'11\"', '180cm'),
(20, '6\'', '183cm'),
(21, '6\'1\"', '186cm'),
(22, '6\'2\"', '188cm'),
(23, '6\'3\"', '191cm'),
(24, '6\'4\"', '193cm'),
(25, '6\'5\"', '196cm'),
(26, '6\'6\"', '198cm'),
(27, '6\'7\"', '201cm'),
(28, '>6\'8\"', '>203cm');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL,
  `menu_name` varchar(255) NOT NULL,
  `menu_slug` varchar(255) NOT NULL,
  `menu_content` text NOT NULL,
  `menu_title` text NOT NULL,
  `menu_keyword` text NOT NULL,
  `menu_description` text NOT NULL,
  `menu_order` int(11) NOT NULL,
  `menu_top` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_name`, `menu_slug`, `menu_content`, `menu_title`, `menu_keyword`, `menu_description`, `menu_order`, `menu_top`) VALUES
(3, 'About WishABaby', 'about-wishababy', '<p>Lorem ipsum dolor sit amet, ne legendos assueverit has, graecis complectitur ne vel. At pri partiendo vituperata. Ius deserunt signiferumque no, pri vitae accusata in. Incorrupte scripserit vel eu, modus simul legimus usu ut,<img alt=\"\" src=\"/pride/ckeditor/kcfinder/upload/images/banner.jpg\" style=\"height:67px; width:100px\" /> has an omnes cotidieque.</p>\r\n\r\n<p>Harum tantas perpetua te usu, est eu novum pertinax. At sea eirmod iuvaret. Usu eu dolorem suscipit, et sit everti maiestatis comprehensam, mucius partiendo has eu. Ut nostrud nonumes consulatu eam, ei atqui patrioque sea. Nisl case tollit in vel, soleat tritani salutandi per in.</p>\r\n\r\n<p>Sea dolor debitis detracto an, qui accusata qualisque ut, ludus insolens et mel. Eu est sale magna facete, mei in fabellas intellegat, vis an illum nostrud sensibus. Commodo tamquam ex sea, no mel errem quodsi assueverit. Vix solet possim ne, ne vix probo labitur qualisque.</p>\r\n\r\n<p>Pri eu voluptua officiis antiopam, nulla diceret percipitur vim cu. Summo electram ut usu, duo elitr complectitur an. Dicant melius facilisi ius ei, in sit nominavi inciderint. An summo ancillae fastidii mea, ex interesset repudiandae eum. Mel nostrud contentiones signiferumque et, quot dolores et sea. Per explicari necessitatibus et, facete meliore recusabo sed eu.</p>\r\n\r\n<p>Vim fugit clita insolens ad, has te aeterno adipisci adolescens. Ea sit everti electram, no vero mutat possim mel. Sed no audiam reprehendunt, at mea quem esse, an vidit quidam sit. Ad mel probatus inciderint deterruisset, accumsan splendide voluptatum mei ad.</p>\r\n', 'Why wish a baby ', 'Why wish a baby Why wish a baby Why wish a baby Why wish a baby ', 'Why wish a baby Why wish a baby Why wish a baby Why wish a baby Why wish a baby ', 1, 1),
(6, 'Information Desk', 'information-desk', '<p>Lorem ipsum dolor sit amet, ne legendos assueverit has, graecis complectitur ne vel. At pri partiendo vituperata. Ius deserunt signiferumque no, p<img alt=\"\" src=\"/pride/ckeditor/kcfinder/upload/images/banner.jpg\" style=\"height:200px; width:300px\" />ri vitae accusata in.</p>\r\n\r\n<p>Incorrupte scripserit vel eu, modus simul legimus usu ut, has an omnes cotidieque.</p>\r\n\r\n<p>Harum tantas perpetua te usu, est eu novum pertinax. At sea eirmod iuvaret. Usu eu dolorem suscipit, et sit everti maiestatis comprehensam, mucius partiendo has eu. Ut nostrud nonumes consulatu eam, ei atqui patrioque sea. Nisl case tollit in vel, soleat tritani salutandi per in.</p>\r\n\r\n<p>Sea dolor debitis detracto an, qui accusata qualisque ut, ludus insolens et mel. Eu est sale magna facete, mei in fabellas intellegat, vis an illum nostrud sensibus. Commodo tamquam ex sea, no mel errem quodsi assueverit. Vix solet possim ne, ne vix probo labitur qualisque.</p>\r\n\r\n<p>Pri eu voluptua officiis antiopam, nulla diceret percipitur vim cu. Summo electram ut usu, duo elitr complectitur an. Dicant melius facilisi ius ei, in sit nominavi inciderint. An summo ancillae fastidii mea, ex interesset repudiandae eum. Mel nostrud contentiones signiferumque et, quot dolores et sea. Per explicari necessitatibus et, facete meliore recusabo sed eu.</p>\r\n\r\n<p>Vim fugit clita insolens ad, has te aeterno adipisci adolescens. Ea sit everti electram, no vero mutat possim mel. Sed no audiam reprehendunt, at mea quem esse, an vidit quidam sit. Ad mel probatus inciderint deterruisset, accumsan splendide voluptatum mei ad.</p>\r\n', 'Why wish a baby ', 'Why wish a baby Why wish a baby Why wish a baby Why wish a baby ', 'Why wish a baby Why wish a baby Why wish a baby Why wish a baby Why wish a baby ', 3, 1),
(9, 'Patient Wellness', 'patient-wellness-1', '<p><strong>Patient Wellness</strong></p>\r\n', 'Patient Wellness', 'Patient Wellness', 'Patient Wellness', 2, 1),
(10, 'Clinics and Services', 'clinics-and-services', '<p><strong>Fertility Clinics</strong></p>\r\n', 'Fertility Clinics', 'Fertility Clinics', 'Fertility Clinics', 3, 0),
(11, 'Pregnancy', 'pregnancy', '<p><strong>Pregnancy</strong></p>\r\n', 'Pregnancy', 'Pregnancy', 'Pregnancy', 1, 0),
(12, 'Parenting', 'parenting', '<p><strong>Life Post Delivery</strong></p>\r\n', 'Life Post Delivery', 'Life Post Delivery', 'Life Post Delivery', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `message_id` int(11) NOT NULL,
  `message_body` text NOT NULL,
  `message_sender_id` int(11) NOT NULL,
  `message_rx_id` int(11) NOT NULL,
  `message_seen` int(11) NOT NULL,
  `message_inbox_del` int(11) NOT NULL,
  `message_outbox_del` int(11) NOT NULL,
  `message_add_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`message_id`, `message_body`, `message_sender_id`, `message_rx_id`, `message_seen`, `message_inbox_del`, `message_outbox_del`, `message_add_time`) VALUES
(1, 'hey howz u?\r\n can we talk', 7, 6, 0, 0, 0, '2017-09-28 20:44:10'),
(2, 'hey howz u?\r\n can we talk', 7, 6, 0, 0, 0, '2017-09-28 20:44:13'),
(3, 'hello brother', 7, 6, 0, 0, 0, '2017-10-01 17:18:24'),
(4, 'hello brother', 6, 7, 0, 0, 0, '2017-10-01 17:29:16'),
(5, 'hello brother', 6, 7, 0, 0, 0, '2017-10-01 17:17:17');

-- --------------------------------------------------------

--
-- Table structure for table `nestedmenu`
--

CREATE TABLE `nestedmenu` (
  `nest_id` int(11) NOT NULL,
  `nest_name` text NOT NULL,
  `nest_slug` text NOT NULL,
  `nest_submenu_id` int(11) NOT NULL,
  `nest_content` text NOT NULL,
  `nest_title` varchar(255) NOT NULL,
  `nest_keyword` text NOT NULL,
  `nest_description` text NOT NULL,
  `nest_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nestedmenu`
--

INSERT INTO `nestedmenu` (`nest_id`, `nest_name`, `nest_slug`, `nest_submenu_id`, `nest_content`, `nest_title`, `nest_keyword`, `nest_description`, `nest_order`) VALUES
(1, 'The Connection between Natural Health & Fertility', 'the-connection-between-natural-health-fertility', 69, '<p dir=\"ltr\" style=\"text-align:center\"><strong><span style=\"font-size:36px\">The Connection between Natural Health &amp; Fertility</span></strong><br />\r\n&nbsp;</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">Whenever it comes to healthy pregnancy, natural health spontaneously takes the prime role. Whatever be your choice of the method to conceive a baby, whether natural or through IVF, it is important that your own body is in a fit state to happily and healthily bear the load in the womb. Moreover, the chances of conceiving are always higher when you are perfectly hale and hearty.</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">A few steps to consider, and you can very well be on the right track to natural health, and hopefully natural conception.</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-size:20px\"><strong>Take Good Care of Your Health</strong></span></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">The foremost task towards getting any fertility procedure get going is to ensure good health, at least in the 4 months prior to getting pregnant. Why so? As during these four months, whatever you eat, you do, will eventually add up to your body cells and fluids, which will nurture your egg/sperms, as well as prepare your womb to be strong enough to hold a baby for 9 months.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">Hence, do take good care of your diet and nutrition, and make sure that whatever you eat does provide the much needed strength to your digestive system. For this, besides focusing on healthy diet, you should also consider including the below in your daily grub:</p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><strong>Folic Acid</strong>: This is the first thing you should start taking up as soon as you finalize your decision to conceive. You should ideally begin with folic acid supplements in your planning phase itself and should continue with the same during the entire pregnancy period. But yes, do consult a registered medical practitioner for the proper dosage before starting off with anything.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\">Include <strong>Probiotics </strong>as an important component of your daily diet. You&rsquo;ll easily find many good ones in the market these days. They help improve digestion, build your intestinal health, and serve to boost the immunity of your body to a fairly good level.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\">Absorb a lot of sunlight as well, and take a minimum dose of 5000 IU of <strong>Vitamin D</strong>. It is important for bone health, serves many key roles in our biological system, and works towards improving the general overall health, and thereby fertility.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\">Add up on <strong>Protein and Calcium</strong> rich foods. Do include dairy products, juices, and whole fruits to get the daily dose of<strong> Vitamin C, Antioxidants, and Beta Carotene</strong>.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">Remember, fertility treatment can only be successful on a healthy body. So try and stay fit from your end, and you may naturally restore your fertility without needing any external treatment at all.</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:20px\"><strong>Avoid the Bad</strong></span></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">Make it a point to avoid or at least limit the consumption of the following if you really care about the natural health and fertility of your body:</p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\">Junk food</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\">Smoking and Drinking</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\">Caffeine (Should be consumed within limits, while do say a complete NO to black coffee)</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\">Exposure to harmful chemicals, allergic products, intense pollution or other such toxic chemicals.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-size:20px\"><strong>Check and Get Treated for Health Issues</strong></span></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">Keep an eye on below health concerns, and in case you find yourself engulfed by any of them, it&rsquo;s time to get yourself treated.</p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\">Constipation</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\">Excessive Wind Passage</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\">Diarrhoea</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\">Bloating</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\">Weak Digestion</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\">Bowel Disorders</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\">Gastrointestinal Problems</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\">Any kind of Abdominal Pain</p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">A weak digestive system is clearly indicative of weak health, which is primarily because of poor absorption of nutrients from the diet that you take. Here, even if you eat the most nutritious food, your body won&rsquo;t gain anything. Hence, the best way out is to strike off these conditions with the help of a medical expert and work towards optimising your digestive health. Only then will your body be counted healthy and will be all set to conceive a healthy baby.</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-size:20px\"><strong>Watch Your Weight</strong></span></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">Pregnancy is almost always associated with body weight. For a healthy pregnancy, it is important that you are neither overweight, nor underweight. While being overweight during pregnancy poses you to the risks of acquiring Diabetes and Hypertension, being underweight elevates the risk of Pre-term Delivery. Right weight is what you need to let the baby grow to a healthy size and also to keep yourself, as well as the baby, free from any health concerns.</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">The standard recommendation for the weight gain during the entire period of pregnancy is 25 &ndash; 35 pounds, where 1-4 pounds should be the total weight gain in the first trimester, while 2-4 pounds should be the ideal weight gain each month from the fourth month until delivery.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n', 'The Connection between Natural Health & Fertility', 'The Connection between Natural Health & Fertility', 'The Connection between Natural Health & Fertility', 0),
(2, 'Boost Fertility Naturally', 'boost-fertility-naturally', 69, '<p dir=\"ltr\" style=\"text-align:center\"><strong><span style=\"font-size:36px\">How to Boost Fertility Naturally?</span></strong></p>  <p dir=\"ltr\" style=\"text-align:justify\">Yes! Boosting fertility naturally is absolutely possible. And no, we are not boasting about it; science has proven it already. Except for some critical cases like sperm disorders or blocked Fallopian tubes, people have succeeded conceiving naturally in the healthiest possible way by simply introducing some diet and lifestyle changes.</p>  <p dir=\"ltr\" style=\"text-align:justify\">Hence, if you have been trying to conceive for quite a while now, and aren&rsquo;t yet able to attain success, it&rsquo;s time you bring changes to your daily regime and see the magic happening.</p>  <ul> 	<li dir=\"ltr\"> 	<p dir=\"ltr\" style=\"text-align:justify\"><strong>Balanced Diet is the Key</strong>: A nutritious diet, sans junk food, eaten on time is the topmost thing. Only a healthy body can conceive a healthy baby. Consult our network of experts who will help you plan a diet chart as per your Body Mass Index (BMI). A good diet goes a long way in helping you be a parent. Studies show that having an unhealthy meal due to the stressful work lifestyle tend to stoop couples from being parents. So why not just change the eating habits a bit, if that is all it takes to move you closer to the biggest joy of your life? Think about it and act wisely!</p> 	</li> 	<li dir=\"ltr\"> 	<p dir=\"ltr\" style=\"text-align:justify\"><strong>Quit Smoking</strong>: While smoking is among the top reasons for an early menopause and distrusted menstrual cycle in women, it has been also recognized as the prime cause for unhealthy sperms and falling of the sperm count in men. It also reduces the chances of successful fertility treatments. Don&rsquo;t you think it&rsquo;s better to do away with smoking, rather than suffocating yourself for not being able to have a baby?</p> 	</li> 	<li dir=\"ltr\"> 	<p dir=\"ltr\" style=\"text-align:justify\"><strong>Stop Binge Drinking</strong>: Women trying to conceive must not take alcohol at all. Men should only hold a single unit per day with sips to oblige the boss at a meeting if really need be. But as your well-wishers and also as guided by the fertility experts, we are totally against Smoking and Drinking if you are really looking forward to having a healthy baby.</p>  	<ul> 		<li> 		<p dir=\"ltr\" style=\"text-align:justify\"><strong>Exercise Regularly:</strong> Devote just 30 minutes for moderate exercise and your body will surely thank you! Couples with obesity face a lot of problems in getting pregnant. For them, weight reduction, healthy food, and regular exercise are a must. Obesity is even known to hamper fertility treatments. Why take the risk then? It&rsquo;s better to shred the extra pounds instead.</p> 		</li> 	</ul> 	</li> 	<li style=\"text-align: justify;\"><strong>Stress Management</strong>: Remember the golden rule: You are here to live a life, neither to win a race nor hail war victory! So give yourself the much needed time to relax mentally and physically. Take life as it comes. Excessive stress at times does not let you conceive even if your health screening results show everything fine.</li> </ul>', 'Boost Fertility Naturally', 'Boost Fertility Naturally', 'Boost Fertility Naturally', 0),
(3, 'Detox & Fertility', 'detox-fertility', 69, '<p dir=\"ltr\" style=\"text-align:center\"><span style=\"font-size:36px\"><strong>Detox &amp; Fertility</strong></span></p>  <p dir=\"ltr\" style=\"text-align:justify\">The first and foremost thing that plays an active role in improving your chances of conception is a Healthy Body. A natural way to keep your body healthy, which is, in fact, been relied upon and followed by Japanese, Americans, and Egyptians for thousands of years, and is swiftly gaining recognition in India, is Detoxification.</p>  <p dir=\"ltr\" style=\"text-align:justify\">Detox in the simplest possible terms means clearing the body off toxins. And no, by toxins we do not mean any poisons in particular, but it means excessive stress, extra fat, extra minerals, or simply the faecal matter, which if in any form happen to stay in the body, not only harms your well-being but also leads to infertility and even miscarriages.</p>  <p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-size:20px\"><strong>Is There Really A Need to Detoxify?</strong></span></p>  <p dir=\"ltr\" style=\"text-align:justify\">YES! In the modern world, we can&#39;t confine ourselves to a place free of toxins. Even if you stay away from any mental stress, or stick to only healthy food, you can&rsquo;t help but breathe the air that is full of pollutants. Besides, our daily life exposes us to so much of chemicals and stress that finding ourselves engulfed with one or the other health issues above must not be surprising. As such, what becomes important to restore the natural health is to regularly detox our body, which should be given due consideration before the body becomes impaired and loses its efficiency.</p>  <p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-size:20px\"><strong>Who Ideally Needs to Detox?</strong></span></p>  <p dir=\"ltr\" style=\"text-align:justify\">Detox is a good thing to adopt. There is no harm in detoxifying your body. And, hence, ideally, detox should be for everyone who looks forward to good health and good life. However, it is especially important for those who suffer from any of the following:</p>  <p dir=\"ltr\" style=\"text-align:justify\">- Infertility Issues</p>  <p dir=\"ltr\" style=\"text-align:justify\">- Irregular Menstruation</p>  <p dir=\"ltr\" style=\"text-align:justify\">- Premenstrual Syndrome/Polycystic Ovaries Syndrome (PCOs)</p>  <p dir=\"ltr\" style=\"text-align:justify\">- Endometriosis</p>  <p dir=\"ltr\" style=\"text-align:justify\">- Digestion Problems</p>  <p dir=\"ltr\" style=\"text-align:justify\">- Depression/Stress</p>  <p dir=\"ltr\" style=\"text-align:justify\">- Headaches/Migraines/Lethargy</p>  <p dir=\"ltr\" style=\"text-align:justify\">- Dermal Issues</p>  <p dir=\"ltr\" style=\"text-align:justify\">- Allergies</p>  <p dir=\"ltr\" style=\"text-align:justify\">The list may go even longer. But, if you see, in a nutshell, regular detoxification is beneficial for everyone. And, the best part is that you need not follow any exhausting diet chart or tiring exercise regimen to detoxify. You can detox your body with something as simple as lemon water, a few specific herbs, dry brushing, or massage.</p>  <p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-size:20px\"><strong>IVF &amp; Detox</strong></span></p>  <p dir=\"ltr\" style=\"text-align:justify\">Detox has been proven to be helpful in improving the chances of conception. Hence, if you are planning to conceive or even have plans to undergo IVF treatment, it is advisable that you start with detoxification of your body from at least 2 months before. It will help optimise your health and will further enhance your chances of successful conception. It will also prepare your body to hold the baby for the long period of nine months. Not only this but detoxifying your body, prior to conceiving, also ensures that your baby will be free of birth defects that may arise owing to the toxins and excessive hormones present in the body.</p>  <p dir=\"ltr\" style=\"text-align:justify\">However, do remember to avoid detoxification of your body if you are already pregnant or are breastfeeding. The reason is to keep your baby away from your body&rsquo;s toxins, which do circulate in the body before they are removed out of the body.</p>', 'Detox & Fertility', 'Detox & Fertility', 'Detox & Fertility', 0),
(4, 'Diet Nutrition Guidelines', 'diet-nutrition-guidelines', 30, '<p style=\"margin-left:0in; margin-right:0in; text-align:center\"><span style=\"font-size:26px\"><strong><span style=\"font-family:&quot;Calibri Light&quot;,sans-serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\">Diet Nutrition Guidelines</span></span></strong></span></p>\r\n\r\n<ul>\r\n	<li style=\"margin-left: 0in; margin-right: 0in; text-align: justify;\"><strong><span style=\"font-size:16px\"><span style=\"font-family:&quot;Calibri Light&quot;,sans-serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"color:black\">Drink Lots of Clean Water</span></span></span></span></span></span></strong></li>\r\n</ul>\r\n\r\n<p style=\"margin-left:40px; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"color:black\">See to it that you drink a lot of filtered/ RO-purified water, which must be at least half your body weight in ounces. Avoid consuming bottled water as some plastics contribute to body toxins. Do not worry about excessive urination which is an early sign of pregnancy. Remember urine flushes out body toxins with it. Thus, water is as essential as other nutrients for the body.</span></span></span></span></p>\r\n\r\n<ul>\r\n	<li style=\"text-align: justify;\"><span style=\"font-size:16px\"><strong><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"color:black\">Increase your Intake ofHigh Fibre Foods</span></span></span></strong></span></li>\r\n</ul>\r\n\r\n<p style=\"margin-left:40px; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"color:black\">Consume a lot of Fruits, vegetables, dark leafy greens and beans that have the right amount of fibre to strike a perfect hormonal balance in your body. Consume them along with each meal.</span></span></span></span></p>\r\n\r\n<ul>\r\n	<li style=\"text-align: justify;\"><span style=\"font-size:16px\"><strong><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"color:black\">Shun Refined SugarsandFruit Juices</span></span></span></strong></span></li>\r\n</ul>\r\n\r\n<p style=\"margin-left:40px; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"color:black\">Refined sugar and packed fruit juices are a clear NO, NO. Whether before or during pregnancy, go for freshly churned out juices that are preservatives free. Also, replace white sugar in your kitchen with Jaggery or Honey.</span></span></span></span></p>\r\n\r\n<ul>\r\n	<li style=\"text-align: justify;\"><span style=\"font-size:16px\"><strong><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"color:black\">Consume Organic Vegetables and Fruits</span></span></span></strong></span></li>\r\n</ul>\r\n\r\n<p style=\"margin-left:40px; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"color:black\">Organic vegetables and fruitsare unarguably a healthier option and have more nutritional value in comparison to the conventional produce which contains harmful herbicides and pesticides. And these chemicals are medically proven to have a negative effect on both male and female fertility.</span></span></span></span></p>\r\n\r\n<ul>\r\n	<li style=\"text-align: justify;\"><span style=\"font-size:16px\"><strong><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"color:black\">Prefer Grass-fed, Whole fat, Raw Dairy Products</span></span></span></strong></span></li>\r\n</ul>\r\n\r\n<p style=\"margin-left:40px; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"color:black\">Organic, grass-fed, whole fat, raw dairy is the best choice of dairy sources since there are less chances of harmful products coming into your body via the food chain.</span></span></span></span></p>\r\n\r\n<ul>\r\n	<li style=\"text-align: justify;\"><span style=\"font-size:16px\"><strong><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"color:black\">Prefer Eating Cold Water Fish</span></span></span></strong></span></li>\r\n</ul>\r\n\r\n<p style=\"margin-left:40px; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"color:black\">Fish contains essential fatty acids (omega 3) that promote hormonal production, reduce inflammation in the body during any infection, as well as help regulate the menstrual cycle. Cold water fish is also a great source of Vitamin A and proteins.</span></span></span></span></p>\r\n\r\n<ul>\r\n	<li style=\"text-align: justify;\"><span style=\"font-size:16px\"><strong><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"color:black\">Consume Whole Grains as far as Possible</span></span></span></strong></span></li>\r\n</ul>\r\n\r\n<p style=\"margin-left:40px; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"color:black\">Whole grains are full of natural fibre and important vitamins that are essential to boost the immune system. These also help the body shun excessive hormones and maintain the right amount of bloodsugar. Avoid products like white bread, pastas, and white rice. Your platter instead can have whole wheat bread/pasta, sprouts, brown rice, etc.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\">&nbsp;</p>\r\n', 'Diet Nutrition Guidelines', 'Diet Nutrition Guidelines', 'Diet Nutrition Guidelines', 0),
(5, 'Important Nutrients for Male & Female Fertility', 'important-nutrients-for-male-female-fertility', 30, '<p style=\"margin-left:0in; margin-right:0in; text-align:center\"><span style=\"font-size:26px\"><strong><span style=\"font-family:&quot;Calibri Light&quot;,sans-serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\">Important Nutrients for Male &amp; Female Fertility</span></span></strong></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"color:black\">There are some nutrients that have that have a direct impact on fertility. Below is a list of of foods where you can find them. But at WISH A BABY we suggest you follow this diet chart under an expert guidance after getting your physiological parameters assessed by a gynaecologist. Popping food that you may not need is as harmful as popping pills without expert guidance.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:20px\"><strong><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"color:black\">Micronutrients or Antioxidants, Vitamins &amp; Minerals</span></span></span></strong></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"color:black\">1. <strong>Vitamin D</strong>: Helps create the sex hormones in the body which regulate ovulation and sperm production thorough striking a hormonal balance.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"color:black\"><strong>Food sources</strong>: Eggs, fatty fish, dairy, and cod liver oil. But Sunlight is the best source; simply sitting in Sun for 15 to 20 minutes daily will replenish the need.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"color:black\">2. <strong>Vitamin E</strong> or &lsquo;Tocopherol&rsquo;</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"color:black\">The name means &quot;to bear the young&quot;. Vitamin E is responsible for sperm health and motility since it is an important antioxidant for sperm protection from external body factors especially after it enters the female....as well as to ensure its egg DNA integrity.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"color:black\"><strong>Food sources</strong>: Sunflower seeds, almonds, olives, spinach, papaya, dark leafy greens.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"color:black\">3. <strong>CoQ10</strong>: This micronutrient is a must for energy production. It is a must for keeping the ovum (egg) and sperm in robust health health. CoQ10 is an antioxidant the protects cells from free radical damage thereby protecting the DNA against damage or unwanted mutation.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"color:black\"><strong>Food sources</strong>: Seafood and organic diet. Since these two are not easily available at all places thus doctors recommend CoQ10 Ubiquinol Supplements.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"color:black\">4. <strong>Vitamin C</strong>: It not only improves hormone levels in a female body but also is found to increase fertility in women facing luteal phase defect. Vitamin C in men improves the sperm quality as well as protects it from DNA damage. It also helps reduce chances of miscarriage &amp; chromosomal mutational issues.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"color:black\"><strong>Food sources</strong>: Citrus Fruits, red peppers, cabbage, potatoes, tomatoes,&nbsp; broccoli, and cranberries. But with women having Thyorid issues, consult your dietician before consuming members of the cauliflower and mustard family.&nbsp; </span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"color:black\">5. <strong>Lipoic Acid</strong>: Very important antioxidant which acts as immune shield towards female reproductive organs. In men it improves sperm quality and motility.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"color:black\"><strong>Food sources</strong>: Found in potatoes, spinach and red meat in small amounts. Doctors suggest supplements mostly.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"color:black\">6. <strong>Vitamin B6</strong>: Helps regulate blood sugar levels and alleviates PMS. known to relieve symptoms of morning sickness. B6 is a great help in women with Luteal Phase Defect.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"color:black\"><strong>Food sources</strong>: Tuna, banana, turkey, liver, salmon, cod, cauliflower, mustard greens, celery, cabbage, asparagus, broccoli, kale, Brussels sprouts, chard, spinach, bell peppers, and turnip greens, collard greens and garlic.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"color:black\">7. <strong>Vitamin B12</strong>: Boosts the endometrium lining during egg fertilization thereby reducing the chances of a miscarriage. Deficiency may even stop ovulation altogether.&nbsp; Also improves sperm quality and production. Deficiency also causes muscular cramps, which if occur in Uetrus may cause a premature delivery or miscarriage.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"color:black\"><strong>Food sources</strong>: Clams, oysters, mussels,&nbsp; fish, crab, lobster, beef, lamb, cheese, eggs, liver, caviar (fish eggs).</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"color:black\">8. <strong>Folic Acid/Folate</strong>: This is basically a healthy cell generator in simps words. Prevents formation of deformed parts of the body like&nbsp; congenital heart defects, cleft lips, limb defects, and urinary tract anomalies in a maturing foetus. Deficiency in folic acid&nbsp; may even cause mental retardation and low birth weight in the baby. Deficiency also is found to increase homocysteine levels in the blood, in many cases. And this risen level is the major cause of abortion and other related complications.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"color:black\"><strong>Food sources of folate</strong>: Liver, lentils, pinto beans, navy beans, kidney beans, collard greens,garbanzo beans, asparagus, spinach, black beans.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"color:black\">9. <strong>Iron</strong>: The right intake will reduce cases of anovulation (lack of ovulation) and poor egg health.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"color:black\"><strong>Food sources</strong>: Lentils, spinach, sesame seeds, navy beans, molasses, beef, kidney beans, pumpkin seeds (raw), venison, garbanzo beans.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"color:black\">10. <strong>Selenium</strong>: Essential to prevent miscarriages and birth defects. Low Selenium means low sperm count, since it is an essential micronutrient that is responsible for sperm creation.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"color:black\"><strong>Food sources:</strong> Liver, snapper, cod, Brazil nuts (just one nut contains nearly 100% of the RDA for selenium), halibut, tuna, salmon, sardines, shrimp, crimini mushrooms, turkey.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"color:black\">11. <strong>Zinc</strong>: Works with more than 300 different enzymes in the body to ensure its proper functioning as one unit. In men, the right amount to Zinc boosts sperm levels by improving the form, function and quality.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"color:black\"><strong>Food sources</strong>: Calf liver, oysters, beef, lamb, venison, sesame seeds, pumpkin seeds, yogurt, turkey, green peas, shrimp. Zinc can be damaged by excessive cooking so some foods are better consumed in their raw form. Consult your dietician over these.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"color:black\">12. <strong>Essential Fatty Acids</strong>: Omega-3 acids are must to regulate hormones in the body, increase cervical mucous, promote ovulation and overall improve overall quality and strength of the uterus to carry the baby for nine-months.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"color:black\"><strong>Food sources</strong>: Flax seeds, walnuts, scallops, chia seeds, salmon, sardines, halibut, shrimp, snapper.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:20px\"><strong><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"color:black\">Macronutrients</span></span></span></strong></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><strong><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"color:black\">Fats</span></span></span></span></strong></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"color:black\">Good Cholesterol is the starting point of all the hormone production.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"color:black\"><strong>Source</strong>: Olive oil, coconut oil, grass-fed meats, fish, nuts. Avoid consuming hydrogenated oils and vegetable oils cooked at high heat since they generate bad cholesterol that is linked with blood-vessels&#39; blockage.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><strong><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"color:black\">Proteins</span></span></span></span></strong></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"color:black\">Protein are an essential source of amino acids which are the building blocks for body cells. Your diet must be a mix of both animal as well as vegetable protein...daily.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"color:black\"><strong>Eggs </strong>&ndash; Vitamin D, B12, Protein</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"color:black\">Ensure to consume farm fresh eggs as far as you can. A deep yellow yolk is the sign of being a farm fresh produce. Prefer to buy these from your local farmer&rsquo;s market or a health food store. Don&#39;t go for marts and places selling multiple food items, since they stock up food which may be weeks old.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><strong><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"color:black\">Nuts and Seeds</span></span></span></span></strong></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"color:black\">These are rich source of Omega 3, Zinc, Vitamin E as well as essential Protein. Do not cook them since it kills their nutritional quotient. Store them in cool, dry place only.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"color:black\">The best seeds and nuts for omega 3 are:</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"color:black\">Walnuts &ndash; 1/4cup = 2,270mg</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"color:black\">Flax seeds &ndash; 2 Tbs = 3,510mg</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"color:black\">Hemp seeds &ndash; 3Tbs = 3,000mg</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"color:black\">Chia seeds &ndash; 1Tbs = 2,300mg</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"color:black\">The best seeds and nuts for zinc are:</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"color:black\">Pumpkin &ndash; 1/4cup = 2.7mg</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"color:black\">Sesame &ndash; 1/4cup =2.8mg</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"color:black\">The best seeds and nuts for vitamin E are:</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"color:black\">Sunflower Seeds &ndash; 1/4cup = 18.10mg</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"color:black\">Almonds &ndash; 1/4cup = 8.97mg</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"color:black\">The best seeds and nuts for iron are:</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"color:black\">Pumpkin seeds &ndash; 1/4cup = 5.16mg</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"color:black\">Sesame seeds &ndash; 1/4cup = 5.24mg</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\">&nbsp;</p>\r\n', 'Important Nutrients for Male & Female Fertility', 'Important Nutrients for Male & Female Fertility', 'Important Nutrients for Male & Female Fertility', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` text NOT NULL,
  `product_slug` text NOT NULL,
  `product_cat_id` text NOT NULL,
  `product_img1` text NOT NULL,
  `product_img2` text NOT NULL,
  `product_img3` text NOT NULL,
  `product_img4` text NOT NULL,
  `product_img5` text NOT NULL,
  `product_img6` text NOT NULL,
  `product_details` text NOT NULL,
  `product_price` float NOT NULL,
  `product_add_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `product_ref_no` varchar(100) NOT NULL,
  `product_title` text NOT NULL,
  `product_keyword` text NOT NULL,
  `product_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_slug`, `product_cat_id`, `product_img1`, `product_img2`, `product_img3`, `product_img4`, `product_img5`, `product_img6`, `product_details`, `product_price`, `product_add_time`, `product_ref_no`, `product_title`, `product_keyword`, `product_description`) VALUES
(1, 'Conceive Plus 3 pre-filled applicators', 'conceive-plus-3-pre-filled-applicators', '3', 'Tulips.jpg', 'Penguins.jpg', 'Lighthouse.jpg', 'conceive-plus.jpg', 'conceive-plus.jpg', 'conceive-plus.jpg', '<p>\r\n\r\n</p><p><strong>Product Reference Number:</strong>&nbsp;CPSO</p><p><strong>1 x Conceive Plus - 3 x Applicators (4gms each)</strong></p><ul><li>The personal lubricant that is \"safe for couples trying to conceive\"</li><li>Gynecologist / Doctor Recommended and sold in more than 60 countries</li><li>Supports fertility naturally, Contains calcium and magnesium ions essential for the process of fertilization</li><li>Cleared by FDA as gamete, fertilization and embryo compatible</li><li>Formulated for positive results - Supporting fertility naturally!</li></ul><p></p>', 8.5, '2017-12-28 12:36:29', 'CPSO', 'Conceive Plus 3 pre-filled applicators', 'Conceive Plus 3 pre-filled applicators', 'Conceive Plus 3 pre-filled applicators'),
(2, 'Fertilcount Male Fertility Tests', 'fertilcount-male-fertility-tests', '3', 'fertilcount.jpg', 'IMG_1536.JPG', 'IMG_1587.JPG', '', '', '', '<p>\r\n\r\n</p><p>This male fertility test is a simple sperm-count test that can be performed in the comfort of the home. Fertility problems on men contribute at least 40% of all infertility problems and many men resist being tested out of embarrassment. Just collect a fresh sample of semen and perform a simple home test. A note about lifestyle: if you have taken body building drugs, excessive alcohol, smoke heaviliy, sit for long periods of time, or work with certain chemicals we recommend undertaking a male fertility test.</p><p>Fertilcount Male Sperm count test - 2 tests</p><ul><li>Fast &amp; easy home use</li><li>97% Accuracy &nbsp;</li><li>Results in 15 mins</li></ul>\r\n\r\n<br><p></p>', 4000, '2017-09-17 20:38:42', 'FMFT', 'Fertilcount Male Fertility Tests', 'Fertilcount Male Fertility Tests', 'Fertilcount Male Fertility Tests'),
(3, 'Male Fertility Kit', 'male-fertility-kit', '3', 'IMG_1577.JPG', 'fertilcount.jpg', '', '', '', '', '<p>\r\n\r\n</p><p><strong>Male Fertility Kit </strong><br>contains:<br><br><strong>Fertilcount Male Sperm Count -two tests RRP £22.00</strong></p><ul><li>Fast &amp; easy home use</li><li>97% Accuracy &nbsp;</li><li>Results in 15 mins</li></ul><p><strong>Marilyn Glenville Fertility support for men, preconception vitamins for men RRP £32.77</strong><br><br>Fertility Support for Men (90 veg capsules)</p><p><strong>Trying to Conceive?</strong></p><p>Fertility Plus for Men and Fertility Plus for Women – two essential supplements to greatly help increase your chances of conception either naturally or by IVF.</p><p>Fertility Plus For Men is a special multivitamin and mineral specifically formulated for men to help maintain good sperm health and increase fertility.</p><p>One in six couples now find it difficult to conceive and a quarter of all pregnancies end in miscarriage.</p><p>Scientific research has shown that certain vitamins and minerals can increase your chances of getting and staying pregnant.</p><p>Fertility Plus For Men contains the highest quality and most important vitamins and minerals scientifically known to help with conception and increase fertility.</p><p>Each ingredient is at the highest effective dose to help achieve the best results.</p><p>Formulated by Dr Marilyn Glenville PhD - the UK\'s leading nutritionist and authority on increasing fertility naturally - in association with the Natural Health practice</p><div>Please note: Our kit components are subject to change and may vary from the image displayed.</div>\r\n\r\n<br><p></p>', 278, '2017-09-17 20:37:14', 'MFT', 'Male Fertility Kit', 'Male Fertility Kit', 'Male Fertility Kit'),
(4, 'Basic Insemination Kits', 'basic-insemination-kit', '1', 'Minor_Injury_Walk_In_Clinic1.JPG', 'clearblue.jpg', '', '', '', '', '<p>\r\n\r\n</p><ul><li>2 x FSH female fertility tests</li><li>4 x Ovulation tests</li><li>2 x Pregnancy tests</li><li>4 x 10ml syringes</li><li>4 x Semen sample containers</li><li>2 x Urine collection containers</li><li>Insemination instructions</li></ul><p>See our <a target=\"_blank\" rel=\"nofollow\" href=\"http://prideangel.users.ds57098.dedicated.interdns.co.uk/Information-Centre/Fertility-Tests/Artificial-Insemintion-Kits.aspx\">artificial insemination</a> section for further information and frequently asked questions.</p><p>Please note: Our kit components are subject to change and may vary from the image displayed.</p>\r\n\r\n??<br><p></p>', 1100, '2018-01-10 16:44:36', 'BIK', 'hello', 'hello', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `q_id` int(11) NOT NULL,
  `q_name` text NOT NULL,
  `q_sub` text NOT NULL,
  `q_edit_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `q_add_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `q_status` int(11) NOT NULL,
  `q_user_name` text NOT NULL,
  `q_email` text NOT NULL,
  `q_mobile` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`q_id`, `q_name`, `q_sub`, `q_edit_time`, `q_add_time`, `q_status`, `q_user_name`, `q_email`, `q_mobile`) VALUES
(1, 'hello', 'test doctor', '2018-02-11 05:15:15', '2018-02-11 05:15:15', 0, 'paurush ankit', 'paurush.ankit@gmail.com', '7531855396'),
(2, ' gheloo testing', 'test mail', '2018-02-11 05:22:57', '2018-02-11 05:22:57', 0, 'paurush ankit', 'paurush.ankit@gmail.com', '7531855396'),
(3, 'hello again', 'hello ', '2018-02-11 05:24:04', '2018-02-11 05:24:04', 0, 'paurush ankit', 'paurush.ankit@gmail.com', '7531855396'),
(4, 'test mail', 'test mail', '2018-02-11 05:24:44', '2018-02-11 05:24:44', 0, 'paurush ankit', 'paurush.ankit@gmail.com', '7531855396');

-- --------------------------------------------------------

--
-- Table structure for table `quote`
--

CREATE TABLE `quote` (
  `quote_id` int(11) NOT NULL,
  `quote_name` varchar(255) NOT NULL,
  `quote_email` varchar(255) NOT NULL,
  `quote_mobile` varchar(20) NOT NULL,
  `quote_message` text NOT NULL,
  `quote_edit_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `quote_add_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `quote_status` int(11) NOT NULL,
  `quote_mail` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quote`
--

INSERT INTO `quote` (`quote_id`, `quote_name`, `quote_email`, `quote_mobile`, `quote_message`, `quote_edit_time`, `quote_add_time`, `quote_status`, `quote_mail`) VALUES
(1, 'paurush ankit', 'paurushankit5@gmail.com', '7531855396', 'texxt me when you see me', '2018-01-28 11:59:27', '2018-01-28 11:03:28', 0, 1),
(2, 'paurush', ' paurushankit2gmail.com', '7531855396', 'this is my requirement', '2018-01-28 12:00:22', '2018-01-28 11:07:38', 0, 1),
(3, 'bsjjs', 'njnsnjk', 'njsndjn', 'helo', '2018-01-28 12:20:00', '2018-01-28 11:10:51', 2, 1),
(4, 'paurush ankit', 'paurush.ankit@gmail.com', '7531855396', 'hello brother', '2018-02-11 05:26:06', '2018-02-11 05:26:06', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `clinic_id` int(11) NOT NULL,
  `ratings` float NOT NULL,
  `comment` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `seo`
--

CREATE TABLE `seo` (
  `seo_id` int(11) NOT NULL,
  `seo_title` text NOT NULL,
  `seo_keyword` text NOT NULL,
  `seo_description` text NOT NULL,
  `seo_page_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seo`
--

INSERT INTO `seo` (`seo_id`, `seo_title`, `seo_keyword`, `seo_description`, `seo_page_name`) VALUES
(1, 'WishABaby home', 'WishABaby home', 'WishABaby home', 'Home'),
(2, 'WAB Store', 'WAB Store', 'WAB Store', 'Store'),
(3, 'Register with Us', 'Register with Us', 'Register with Us', 'Register'),
(4, 'WAB Findexpert', 'WAB Findexpert', 'WAB Findexpert', 'Findexpert'),
(5, 'WAB Findaclinic', 'WAB Findaclinic', 'WAB Findaclinic', 'Findaclinic'),
(6, 'WAB Ask a free question', 'WAB Ask a free question', 'WAB Ask a free question', 'Askaquestion'),
(7, 'WAB Blogs', 'WAB Blogs', 'WAB Blogs', 'Blogs'),
(8, 'WAB ViewQuestions', 'WAB ViewQuestions', 'WAB ViewQuestions', 'ViewQuestions'),
(9, 'contactus', 'contactus', 'contactus', 'contactus');

-- --------------------------------------------------------

--
-- Table structure for table `submenu`
--

CREATE TABLE `submenu` (
  `submenu_id` int(11) NOT NULL,
  `submenu_name` text NOT NULL,
  `submenu_slug` text NOT NULL,
  `submenu_menu_id` int(11) NOT NULL,
  `submenu_content` text NOT NULL,
  `submenu_title` text NOT NULL,
  `submenu_keyword` text NOT NULL,
  `submenu_description` text NOT NULL,
  `submenu_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `submenu`
--

INSERT INTO `submenu` (`submenu_id`, `submenu_name`, `submenu_slug`, `submenu_menu_id`, `submenu_content`, `submenu_title`, `submenu_keyword`, `submenu_description`, `submenu_order`) VALUES
(4, 'FAQs', 'faqs', 6, '<p dir=\"ltr\" style=\"text-align:center\"><span style=\"font-size:24px\"><strong>Frequently Asked Questions</strong></span></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:center\"><span style=\"font-size:24px\"><strong>(FAQs)</strong></span></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\">What is WishABaby?</span></strong></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\">WishABaby is a connecting platform where we help the childless couples and single individuals to connect with the best ofIVF clinics and experts across the county to bring them rays of hope to embrace a new life. We maintain a directory of fertility clinics and experts to provide you with timely health screening and quality infertility treatments as per the Indian fertility laws. In short, we are your scientific, healthy, legal and ethical way to happiness as per your individual biology.</span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\">What is different about WishABaby?</span></strong></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\">We strive to be your companion in your journey to parenthood. There are multiple biological and scientific factors that contribute to your health and success in this process. We bring these essential elements under one roof and integrate them into an approach which is individually tailored to meet your needs as perfectly as possible. And this is done with utmost care and compassion.</span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\">How can I register on WishABaby?</span></strong></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\">You can easily register yourself on WishABaby as individuals/couples, a clinic, or an expert by filling up a small registration form that you can find on the homepage of our website.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\">Do I need to pay anything for registering on WishABaby?</span></strong></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\">Registering on WishABaby is absolutely free of cost. You can be our member, explore and search for the best of IVF experts across the nation, book an appointment with them, and access our entire information resource without paying even a single penny to WishABaby. </span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\">What will be the cost of treatment?</span></strong></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\">The costs of treatment will ideally vary depending upon the medical processes and otherprocedures that will constitute a part of your treatment. This will be again payable to the IVF clinic/expert and not to WishABaby.</span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"color:null\"><strong><span style=\"font-size:12.0pt\">How can I find a fertility clinic in my area?</span></strong></span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:12.0pt\">You can use our clinic directoryto search for the clinics in your city. You can also apply filters to list out the clinics based on the services you are looking for.</span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\">I have successfully created a profile on WishABaby, but haven&rsquo;t received any activation mail. What should I do?</span></strong></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\">Wait for two-four (2-4) hours after registering with us through a valid e-mail ID. Once your registration is complete, we will send you a verification mail for confirming your e-mail account. Do check the &#39;Spam&#39; folder as well, as occasionally emails from unknown sources are directed there. Once you get a verification mail, verify the credentials as directed in it. And here you are done! In case, you do not receive an activation/verification mail even after four (4) hours of registration, there is a possibility that you misspelled your email id.</span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\">What are the steps to reset the password to my profile on WishABaby?</span></strong></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\">Just click the &#39;Forgot Password&#39; link on the Login page. It will ask for your e-mail ID where a link will be sent to reset your password. Click on this link, and you&rsquo;ll be redirected to a page where you will have to enter the new password that you would want to set for your profile. Click on &lsquo;Confirm&rsquo; and you are done.</span></span></span></p>\r\n', 'FAQs', 'FAQs', 'FAQs', 12),
(5, 'Fertility Laws in India', 'fertility-law', 6, '<p><strong>Fertility Laws in India</strong></p>\r\n', 'Fertility Laws in India', 'Fertility Laws in India', 'Fertility Laws in India', 2),
(6, 'Our Beliefs', 'our-beliefs', 3, '<p><strong>WISH A BABY: OUR BELIEFS</strong></p>\r\n\r\n<p><strong>&quot;Helping You To Be A Parent Is A Joy, Not Business&quot;</strong></p>\r\n\r\n<p><strong>We, at WishABaby, made it our mission to turn the hopes of an individual longing for parenthood into reality and make sure that the whole journey from hopes to reality becomes a thoroughly memorable and enjoyable experience.</strong></p>\r\n\r\n<p><strong>But how do we do it? We do it through our beliefs, which we practice to the core:</strong></p>\r\n\r\n<p><strong>Infertility is not a Taboo or Shame!</strong></p>\r\n\r\n<p><strong>We live in a world where people are comfortable talking about divorce, drug addiction, and even marital rape, but not infertility. &ldquo;What will the society think?&rdquo; Well, the society has already made up its mind seeing no child was born to you within a year of marriage! So please relax, and give yourself a break. </strong></p>\r\n\r\n<p><strong>We, at WishABaby, encourage an individual to read about infertility, talk about it, and seek help from our experts, since in most cases it is TREATABLE. Yes, you heard it right!</strong></p>\r\n\r\n<p><strong>World Health Organization (WHO) defines it as a &ldquo;failure to achieve a clinical pregnancy after a year or more of regular unprotected sexual intercourse.&rdquo;</strong></p>\r\n\r\n<p><strong>Infertility is not a curse, it is just a biological condition, And, we at WishABaby, can help you overcome the situation to fill your life up with those little sparkles of giggling happiness.</strong></p>\r\n\r\n<p><strong>Today, there is a fast stride in IVF treatments across the country, and couples/individuals who forever wished to have a baby can now pin their hopes on conceiving through IVF treatments and donor based conception. Thus, INFERTILITY IS NOT A TABOO&mdash;We at WishABaby believe in this and are, every minute, taking couples/ individuals a step closer to their dream of parenthood. </strong></p>\r\n\r\n<p><strong>Shun the Myths</strong></p>\r\n\r\n<p><strong>We at WISH A BABY, backed by science, are here to prove the following myths wrong:</strong></p>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>Infertility is incurable: Shun the Myth!</strong></p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Infertility in only a woman&#39;s problem: Shun the Myth!</strong></p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Infertility is found only in older couples: Shun the Myth!</strong></p>\r\n	</li>\r\n</ul>\r\n\r\n<p><strong>New-Age/ Digital-Age Families are Different</strong></p>\r\n\r\n<p><strong>Times have changed. Today, instead of being a parent by the age of 20-25, people prefer conceiving at around 30-35. Call it the need of the hour or the demand of your career, but the fact is that the infertility rate is on a rise in India. Studies reveal that at least 10% of the general population of India suffer from some form of infertility, and the figures are consistently surging up. </strong></p>\r\n\r\n<p><strong>We at WishABaby do not encourage defying your biological clock, but we do discourage you getting into depression if your body has given up on the ability to give birth. Accepting the reality is one thing and not doing anything about is another. This is the time when mankind is finding most answers in making the improbable, possible .Finding a safe alternate process that is overseen by experts with an eye to every minute detail that can reduce all associated risks to a minimalistic proportion is what we are trying to harness. Come to us, we want to help you get the best path in fulfilling your long cherished dream!</strong></p>\r\n\r\n<p><strong>Arm Yourself with Knowledge</strong></p>\r\n\r\n<p><strong>Having bits and pieces of information, rather than complete knowledge, can do no good for anyone. And hence, we believe that just Wish-ingABaby through us is not enough. You should dive deeper into attaining complete knowledge about the concept, and we are here to help you with that. We not only connect you to infertility-treatment experts or the egg/sperm donors or help in surrogacy, but also fill the gaps by providing needed fertility solutions like &ndash; health screening, legal advice, counselling, and over and above all, the much needed emotional support, which is immensely required in such trying times.</strong></p>\r\n\r\n<p><strong>LGBT or Single, You can be a Parent!!</strong></p>\r\n\r\n<p><strong>We believe in changing with the modern times. We do not discriminate. Whether an LGBT or an individual who is willing to be a parent through surrogacy &ndash; WishABaby will fulfil your dream to raise a family and experience parenthood equally. Many celebrities in the country have had recently opted to be a single parent and are enjoying their magical moments with their little ones. Well, if a celebrity has the legal right to have a surrogate child, so do you, and we are here to partner you through this life changing decision of yours.</strong></p>\r\n\r\n<p><strong>So, come over, write to us at _______ or dial ______ and let&rsquo;s get a step closer to turning your wishes into wonders!</strong></p>\r\n', 'Our Beliefs', 'Our Beliefs', 'Our Beliefs', 1),
(7, 'Our Core Values', 'our-core-values', 3, '<p style=\"text-align:center\"><span style=\"font-size:26px\"><strong>Our Core Values</strong></span></p>\r\n\r\n<p style=\"text-align:justify\">If you&rsquo;ve been trying to have a baby without success, know it that you aren&rsquo;t alone! Approximately One in Eight couples has difficulty conceiving. And since our goal is to make you one happy family, our values need to go hand-in-hand with our goals. Thus, we would want you to know that...</p>\r\n\r\n<ul>\r\n	<li style=\"text-align: justify;\">We value YOU, your body, your happiness</li>\r\n	<li style=\"text-align: justify;\">We value YOUR SMILE; connecting you with best medical experts is a joy, not business</li>\r\n	<li style=\"text-align: justify;\">We value YOUR HEALTH, hence provide you with essential guidelines to maintain good health</li>\r\n	<li style=\"text-align: justify;\">We value YOUR TRUST, and so, never settle for anything less than the best for you</li>\r\n	<li style=\"text-align: justify;\">We value YOUR LIFE, and hence take utmost care in all the procedures</li>\r\n	<li style=\"text-align: justify;\">We value and practice ETHICS &amp; LEGALITY in all our procedures</li>\r\n	<li style=\"text-align: justify;\">We value INNOVATION to embrace change, so that you can embrace a child</li>\r\n	<li style=\"text-align: justify;\">We value YOUR PRIVACY, thus utmost confidentiality is maintained at our end</li>\r\n	<li style=\"text-align: justify;\">We value YOUR FAITH in us, and hence foster a transparent relationship&nbsp;</li>\r\n	<li style=\"text-align: justify;\">We value YOUR BOND WITH US, and assure you of always maintaining the same<br />\r\n	&nbsp;</li>\r\n</ul>\r\n', 'Core Values', 'Core Values', 'Core Values', 2),
(22, 'Counselling', 'counselling', 9, '<p>Counselling</p>\r\n', 'Counselling', 'Counselling', 'Counselling', 1),
(24, 'All about Fertility', 'fertility', 6, '<p><strong>All about Fertility</strong></p>\r\n', 'All about Fertility', 'All about Fertility', 'All about Fertility', 1),
(27, 'Parenting', 'parenting', 6, '<p>Parenting</p>\r\n', 'Parenting', 'Parenting', 'Parenting', 10),
(30, 'Nutrition', 'nutrition', 9, '<p>Nutrition</p>\r\n', 'Nutrition', 'Nutrition', 'Nutrition', 2),
(33, 'How to Choose a Clinic', 'how-to-choose-a-clinic', 10, '<p style=\"text-align:center\"><span style=\"font-size:26px\"><strong>How to Choose the Best Fertility Clinic for Yourself</strong></span></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">We understand that getting pregnant and having a family is of utmost importance for you at the moment. But what is most important for us at WishABaby is that you choose the right fertility clinic to start off your journey on just the right note. &nbsp;Hence, our job is not only to ensure that you get to experience the bliss of parenthood by connecting you to the fertility clinics but also that you are in safe hands.</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">While we take utmost care and follow stringent processes to bring to you a directory of only the best fertility clinics around you, we would like to share with you some major cautions that you should take while selecting a fertility clinic for yourself:</p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-size:16px\"><strong>Understand the Working of the Clinic</strong></span></p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:40px; text-align:justify\">Try and understand the various processes of fertility treatment, the background of the experts involved, and also, how and by whom the clinic is run. In simple words, you should be aware of, as well as, should be confident of the clinic, the doctors, and the other staff involved in your treatment. Only when confidence replaces anxiety and fear, can pleasures be enjoyed to the fullest.</p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-size:16px\"><strong>Analyse Success Rates</strong></span></p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:40px; text-align:justify\">Though peeping into the success rates of the clinic is a good way to gauge its efficiency, it is always better to take a slightly deeper insight into the success rates. Ideally, the clinic should list both IUI and IVF success rates, broken down by the number of embryos transferred, mother&#39;s age, and other aspects. If this all is out in open on their website, keep it in your list of the initially shortlisted clinics.</p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-size:16px\"><strong>Check for the Technology and Equipment</strong></span></p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:40px; text-align:justify\">It is important to know if the clinic is furnished with necessary technologies, equipment, and everything else required to ensure quality and safety in the procedure. This is important to stay away from any money-making clinic who may though charge you a bomb for the treatment but lack even the most basic of equipment.</p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-size:16px\"><strong>A Certified Clinic is a Must</strong></span></p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:40px; text-align:justify\">An IVF clinic certified by the medical board is the safest option. Make sure you are being treated by certified experts and are not in the hands of the quacks.</p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-size:16px\"><strong>Critically Analyse Your Consultation</strong></span></p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:40px; text-align:justify\">Do take clarity from the clinic on below aspects with valid proofs for the same:</p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:80px; text-align:justify\">- What all diagnostic tests they plan to perform?</p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:80px; text-align:justify\">- How many embryos do they recommend transferring?</p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:80px; text-align:justify\">- What is the success rate in your case as assessed by the doctor?</p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-size:16px\"><strong>Check if it covered under your insurance scheme</strong></span></p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:40px; text-align:justify\">This will help save you money as well as time. Employ your due diligence to find this out, but make sure that cost is only one of the many other factors that must govern your choice and not the only one.</p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-size:16px\"><strong>Demand a Sense-of-Urgency</strong></span></p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:40px; text-align:justify\">It is as simple as getting pregnant without wasting time. If you already have diagnostic tests done before elsewhere from a certified place, but the IVF clinic you picked is asking for them again, then drop the clinic. Also if the doctor treating you seems to have no sense of urgency simply transfer to another clinic after taking the results from this clinic, if any tests were done here.</p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-size:16px\"><strong>Look for an Empathetic Clinic</strong></span></p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:40px; text-align:justify\">Look for a place that smiles and cries with you and not the one which is too professional to care for human emotions. While we, at WishABaby, totally understand how emotional the process of getting pregnant is when it is not happening through the normal means of intercourse, we would also want the clinic involved in your treatment to be equally compassionate yet practical with you. So, do ensure that instead of treating you like just another case file, the clinic does show right empathy towards you.</p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-size:16px\"><strong>Be Ready With Your Questions</strong></span></p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:40px; text-align:justify\">It is ok to question a procedure or doctor or medicine. After all, it is the matter of your life. Do take copious notes at each appointment, and come prepared with a set of questions in the next appointment. Remember, there is nothing like a &quot;dumb question&quot;. You&rsquo;re paying for each service, so it is your legal right to question the particle, the procedure, the practitioner, as well the medicine. Don&#39;t be afraid of taking clarity on your doubts. Getting detailed clarity on every single thing would, in fact, help build trust and confidence on the clinic as well as on the procedure.</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">Carefully weigh the pros and cons of the clinics that you shortlist for the treatment, and see to it that you select the best one that is aligned with your needs.</p>\r\n', 'How to Choose a Clinic', 'How to Choose a ClinicChoosing a Fertility Clinic', 'How to Choose a ClinicChoosing a Fertility Clinic', 2),
(38, 'Terms Of Use', 'terms-of-use', 3, '<p><strong>Terms of Use - WishABaby</strong></p>\r\n\r\n<p>Welcome to WishABaby! We hope you understand the ultimate purpose of this website and how it intends to help singles and/or couples enter parenthood through IVF treatment, sperm/egg donation, surrogacy or co-parenting.&nbsp;<br />\r\n&lsquo;WishABaby&rsquo; or hereinafter, the &ldquo;Company&rdquo; puts forth the following terms and conditions as a means to disclose that all of the services provided to the concerned members are subject to the terms of use as mentioned below.&nbsp;<br />\r\nSo, once you decide to become a part of our community, we suggest you to thoroughly read the Terms and Conditions of the company and comply with them accordingly before commencing the use of the services on our website. By using our site, you indicate your acceptance of these terms and conditions unconditionally.<br />\r\nIn these Terms of Service, we constitute an electronic contract between you and the &lsquo;WishABaby&rsquo; team. So, please make sure to review these terms and conditions along with the linked Privacy Policy that is incorporated as a part of these Terms.<br />\r\nWe strongly advise that after accessing and reading all the information, if you do not agree on binding to these Terms and Conditions or our Privacy Policy, you may desist using the site in any way, irrespective of your registration or your membership.&nbsp;<br />\r\nTerms of Use<br />\r\nWishABaby is a community resource that provides a platform for donors and recipients to interact with one another.&nbsp;<br />\r\n1.&nbsp;&nbsp; &nbsp;Membership Eligibility<br />\r\na.&nbsp;&nbsp; &nbsp;All members must have completed 18 years of age or above.&nbsp;<br />\r\nb.&nbsp;&nbsp; &nbsp;This site is solely for singles or couples who are interested in donating or receiving eggs, sperms, and embryos only. You are prohibited from using the site for dating or casual sex purposes.&nbsp;<br />\r\nc.&nbsp;&nbsp; &nbsp;Members who have previously been suspended or removed from WishABaby site are not eligible to be registered again. You should not be convicted of a felony.&nbsp;<br />\r\nd.&nbsp;&nbsp; &nbsp;You are not allowed to have more than one active membership account. Users are not allowed to sell, trade or transfer their membership account to another party or sharing accounts with others.&nbsp;</p>\r\n\r\n<p>2.&nbsp;&nbsp; &nbsp;Membership Accounts<br />\r\na.&nbsp;&nbsp; &nbsp;Members are allowed to have only one profile. &nbsp;Using multiple profiles for any reason is strictly prohibited and such members will be removed immediately from the site.&nbsp;<br />\r\nb.&nbsp;&nbsp; &nbsp;If a member is removed from the registry, for any reasons, he/she will not be allowed to join again by using any other different alias.&nbsp;<br />\r\nc.&nbsp;&nbsp; &nbsp;WishABaby reserves the right to terminate or suspend accounts, refuse service, or edit profile content in its sole discretion.&nbsp;<br />\r\nd.&nbsp;&nbsp; &nbsp;Members should not violate any copyright laws in their profile and gallery image. The profile information should not be misleading or misrepresenting. Not all profile specifics are to be entered, but whatever specifics are entered, they must be strictly accurate.<br />\r\ne.&nbsp;&nbsp; &nbsp;Members can use their own image or non-human images, but images of someone else other than the member is not allowed. Images of minor children or babies may not be posted, unless a prior written consent of the other party is obtained, as it is a violation of privacy of the child. Images portraying nudity or violence are strictly prohibited.<br />\r\nf.&nbsp;&nbsp; &nbsp;Profiles containing adult content, illegal activity, violence, or exhibiting links to such sites will be removed and deleted immediately. Messages, e-mails, or profiles, suggesting illegal activity will result in a ban of the account.&nbsp;<br />\r\ng.&nbsp;&nbsp; &nbsp;WishABaby reserves the right to remove or suspend any accounts or content of any user at any time for any reason, including but not limited to breach of these Terms of Use, or as required by any state legal authority. Once violated, account can neither be subsequently setup,nor can a new registration/profile be created.</p>\r\n\r\n<p>3.&nbsp;&nbsp; &nbsp;The company/WishABaby rely on user-submitted information and is not responsible for the accuracy of membership profiles or the content presented by the members during communication and interactions with other members. We do not carry out background checks or verify each and every information provided by the registered members.</p>\r\n\r\n<p>4.&nbsp;&nbsp; &nbsp;All interactions between other users within the community are subject to the sole discretion of the individuals. The company does not hold any responsibility for the personal and financial safety of users.</p>\r\n\r\n<p>5.&nbsp;&nbsp; &nbsp;Members are not supposed to contact another member for any reason other than the private embryo, sperm, or egg donation, unless otherwise invited by the other party. Such purposes include (but are not limited to) advertising, solicitation for products or services, and dating or sexual approaches.</p>\r\n\r\n<p>6.&nbsp;&nbsp; &nbsp;Users are not supposed to post or communicate with other members any defamatory or libel content. This includes inaccurate, abusive, profane, offensive, threatening, obscene or illegal material of any sort that violates the reputation and rights of the other party. The company has the right to remove any content, if a written request is received from the other party about a defamatory statementthat damages their reputation. Such request must be received under the legal name of the person/company. However, we will not remove opinions or contents that complies with our Terms of Use.</p>\r\n\r\n<p>7.&nbsp;&nbsp; &nbsp; Members are not allowed to advertise other sites or promote any of their products or services in the community without proper written permission from the company&rsquo;s admin team prior to posting information/advertisement.</p>\r\n\r\n<p>8.&nbsp;&nbsp; &nbsp;The site&rsquo;s admin has the permission to remove any members who are existing administrators or moderators of other sperm donation sites for the best interest of the community.</p>\r\n\r\n<p>9.&nbsp;&nbsp; &nbsp;All the site graphics, screenshots and content of any kind may not be reproduced without written consent from the administrator. Permission has to be requested through the Contact Us form.</p>\r\n\r\n<p>10.&nbsp;&nbsp; &nbsp;Any violation of the law should be reported immediately to the appropriate authorities and not to the site.</p>\r\n\r\n<p>11.&nbsp;&nbsp; &nbsp;All members are individually and solely responsible to comply with the laws applicable to the country and region where they reside.&nbsp;<br />\r\n<strong>Code of Conduct for Members</strong><br />\r\n1.&nbsp;&nbsp; &nbsp;All Members should respect the &lsquo;WishABaby&rsquo; Terms of Use and follow the mentioned code of conduct.</p>\r\n\r\n<p>2.&nbsp;&nbsp; &nbsp;Members should not indulge in any activity via private messages, emails, forum threads and posts that do not bound by these terms. Members posting such content will immediately be moderated and/or banned.</p>\r\n\r\n<p>3.&nbsp;&nbsp; &nbsp;Members should respect the moderators and admin team of WishABaby and must respectfully respond to any moderation or concerns from the administration. You are expected to present your questions, suggestions or concerns in a constructive manner. When requests could not be resolved, members are requested to accept it and maintain positive discourse through their posts in public forums.</p>\r\n\r\n<p>4.&nbsp;&nbsp; &nbsp;Members are expected to respect each other and be considerate in their dealings with each other. Using foul or sexually provocative language or any other offensive behavior targeting the other party will not be tolerated.&nbsp;<br />\r\n5.&nbsp;&nbsp; &nbsp;Talking about politics and religion should be limited and must not hurt the feelings of other members. Discussions revolving around political issues related to sperm donation and conception may be kept to the limited scope. While everyone has the right to opinionate their political or religious views, yet such topics can bring in serious problems and so will be monitored heavily in the forums. Members can exercise their freedom of speech in other venue forums appropriate for such topics.</p>\r\n\r\n<p>6.&nbsp;&nbsp; &nbsp;Members must not collect information about or from the website or related to any users of this website without prior written consent from the company. Users are not allowed to modify, render (or re-render), truncate, filter or change any information or content contained in the Website, without the company&rsquo;s written consent.</p>\r\n\r\n<p>7.&nbsp;&nbsp; &nbsp;Cyber-crimes are strictly prohibited. Using any page-scrape, deep-link, robots, crawlers, index, spiders, click spams or macro programs and automated algorithms to generate impressions, input information, generate searches or monitor the website or any portion of it will not be tolerated. Distributing malware, viruses or other harmful computer codes into the site pages is illegal and prohibited by the Terms of Use.&nbsp;<br />\r\nTerms for Donors &amp; Recipients</p>\r\n\r\n<p><strong>Donors and Recipients agreeing to use the site for Artificial insemination should accept to these Terms and Conditions mentioned.&nbsp;</strong><br />\r\n1.&nbsp;&nbsp; &nbsp;Donors and recipients must not indulge in illegal drugs consumption and should be free of known sexually transmitted diseases (STDs) and infections. Members identified with positive HIV status are allowed to use the site, unless otherwise they declare it in the specifics provided on their member profile.</p>\r\n\r\n<p>2.&nbsp;&nbsp; &nbsp;Donors are requested to take necessary precautions such as STD tests and health screening prior to donating sperms/eggs on request by the recipient. Members may not knowingly expose the other members or recipients to sexually transmitted diseases (STDs) or viable infections.</p>\r\n\r\n<p>3.&nbsp;&nbsp; &nbsp;We recommend recipients to ensure that their donors provide authentic proof of identification, health information, and up-to-date screening test results, which includes STIs and genetic testing. Upon request you may have to undertake rigorous health screening checks before entering into an agreement.</p>\r\n\r\n<p>4.&nbsp;&nbsp; &nbsp;Users are not allowed to request money or any form of compensation for egg/sperm or embryo donations, except for the medial tests. Members who are found contravening this term will be reported and banned from the site to the appropriate authorities.</p>\r\n\r\n<p>5.&nbsp;&nbsp; &nbsp;Recipients may cover the cost of any health information screening and STD testing for themselves as well as the donor, along with the travel expenses associated with the donation or arrange reimbursement for the same. Receipts for all the screening tests and travel expenses are to be provided to the recipient upon request, or as per the agreement written between the donor and the recipient.</p>\r\n\r\n<p>6.&nbsp;&nbsp; &nbsp;Both donors and recipients are responsible for the preferred method of donation. Donors have to respect at all times the preferences of the recipients, regarding the method of egg/sperm donation.</p>\r\n\r\n<p>7.&nbsp;&nbsp; &nbsp;Members are not permitted to advertise for natural insemination or imply that NI or PI is more effective conceptive method than AI. It is not scientifically proven so and spreading such false facts in the forums is to manipulate someone into sexual act and it is strictly not tolerated.</p>\r\n\r\n<p>8.&nbsp;&nbsp; &nbsp;We recommend artificial insemination as the safest method of conception when done at an authorized clinic. Home insemination kits, though available, can carry the risk of contracting infections or STDs. Furthermore getting pregnant with donor sperm outside of clinic in an unauthorized way enables the donor to gain legal paternal rights.</p>\r\n\r\n<p>9.&nbsp;&nbsp; &nbsp;Recipients are strongly recommended to insist on preparing a specific and detailed written contracts defining the nature of the paternal nights of the donor with the donor-conceived child as well as the future relationship between the recipients.<br />\r\n<strong>Disclaimer:&nbsp;</strong><br />\r\n1.&nbsp;&nbsp; &nbsp;WishABaby does not take the responsibility for the user-submitted content or the conduct of any member of the site. All liability for unauthorized users is disclaimed.</p>\r\n\r\n<p>2.&nbsp;&nbsp; &nbsp;We are not responsible for any technical defects, errors, deletion, delays, or thefts or destruction of information or content provided by users.</p>\r\n\r\n<p>3.&nbsp;&nbsp; &nbsp; We are not liable for any loss or damage, by any means, arising out of or related to any user content or act by users or any third party programming or equipment utilized by the company.</p>\r\n\r\n<p>4.&nbsp;&nbsp; &nbsp;Any content published or submitted to the site by users or affiliates belongs solely to them and does not necessarily reflect our opinions or site policies.</p>\r\n\r\n<p>5.&nbsp;&nbsp; &nbsp;If you run into a dispute with one or more users of the Website, you are deemed to release WishABaby from any claims or demands of any kind, either actual or consequential, and of any nature, known or unknown, arising out of or in any way associated with such dispute.</p>\r\n\r\n<p>6.&nbsp;&nbsp; &nbsp;WishABaby holds the right to alter, suspend, or discontinue the Site in whole or in part, for any reason and at any time, without any prior notice or cost and shall not be liable to any user or third party concern for the same.<br />\r\n<strong>To the Media/Journalists:</strong><br />\r\n1.&nbsp;&nbsp; &nbsp;Journalists indulging in forum discussions at WishABaby website must disclose their position stating them as a member of the media.</p>\r\n\r\n<p>2.&nbsp;&nbsp; &nbsp;The status of a journalist or media group registering on the website must clearly define it in their profile along with their intention of joining the site and how they intend to use the site and its user information.</p>\r\n\r\n<p>3.&nbsp;&nbsp; &nbsp;Upon joining the site, the media member is requested to submit a detailed Casting Call through the Directory immediately regarding their premise for the participation on the site.</p>\r\n\r\n<p>4.&nbsp;&nbsp; &nbsp;All the contact information and user information gathered from our site are not to be used in any way without prior permission of the user.&nbsp;<br />\r\nWe hope these Terms and Conditions will help nurturecooperative and truthful civil interaction with one another. However, WishABaby reserves the right, in sole discretion, to revise or update these Terms and Conditions and Code of Conduct anytime, based on constructive feedback and experience. It is the members&#39; responsibility to check this page regularly for new updates and keep themselves aware of the changes.</p>\r\n\r\n<p>Last Updated: 14 September 2017</p>\r\n', 'Terms Of Use', 'Terms Of Use', 'Terms Of Use', 4),
(39, 'Why Us?', 'why-choose-us', 3, '<p>&ldquo;<strong>WishABaby</strong>&rdquo; isn&rsquo;t just something we promote as our LOGO. It is a promise we keep! We want to be your companion in a journey to be a happy parent via world-class medical treatment through utmost care and compassion. Thus, you are not simply case files and statistics for us; you are individuals, each with unique circumstances who require personalised treatment plans.</p>\r\n\r\n<p>Only when relaxation replaces anxiety and trust replaces fear, your body comes in a perfect state to successfully conceive a pregnancy and deliver a healthy baby. Thus, choose us because we are:</p>\r\n\r\n<p><strong>Upright and Upfront</strong></p>\r\n\r\n<p>We are realistic with you about the chances of your treatment working. And, we are transparent about how much it costs, right from the very beginning.</p>\r\n\r\n<p><strong>A New Era of Treatment</strong></p>\r\n\r\n<p>Every doctor or technology that is employed to work on your case will be the best in the system. It means every penny you spend will be worth it. We are dedicated to staying on the leading edge of technology. We, hence, always see to it that our experts remain involved in continuing education to hone up their skills with the latest techniques and innovations in the world of assisted reproductive technology.</p>\r\n\r\n<p><strong>A Promise of Personal Care</strong></p>\r\n\r\n<p>Your bond with your physician begins the very day when you first meet him/her. Your WishABaby physician will customise a fertility treatment plan that suits your biology, carefully monitor your progress, and always be available for your queries. We always ensure that you are embraced and heard throughout your journey with us.</p>\r\n\r\n<p><strong>A Commitment to Excellence</strong></p>\r\n\r\n<p>We are here to give you the best possible treatment that perfectly meets YOUR needs &ndash; not ours.</p>\r\n\r\n<p><strong>An Ever Expanding Global Network</strong></p>\r\n\r\n<p>We are a leading platform in India that will not only connect you with sperm and egg donors from the world over, but also with recognised practitioners and researchers in the field. Our experts not only give clinical advice in person, but online as well to those who cannot reach us in person.</p>\r\n\r\n<p><strong>Fact Based Treatment, Not Experiment-Based</strong></p>\r\n\r\n<p>Our experts clearly work only and only on the facts based on your biology and not just science and technology. And thus, we thrive to keep you informed at every single step so that you can take timely decisions about your reproductive health. Why? Because this maximises your chances of conceiving and having a healthy baby.</p>\r\n\r\n<p><strong>Your Happiness is Our Success (Success Rate)</strong></p>\r\n\r\n<p>We take pride in building as well as maintaining a bond with our patients whom we help realise their dream of parenthood. We believe your happiness is our success, and that is what we always strive to achieve. A steadily rising list of happy faces is our biggest achievement.</p>\r\n\r\n<p><strong>Practitioners of Ethics, Laws &amp; Gender Equality</strong></p>\r\n\r\n<p>Medical ethics and related laws are of utmost importance to us in every service we provide, be it IVF, surrogacy, or egg/sperm donation, etc. And, equally important for us is your privacy. Thus, stay assured, you won&rsquo;t be our testimonial to success till you offer to be.</p>\r\n\r\n<p>Likewise, pink might be for a girl and blue for a boy in the eyes of society. But for us, a child is a pure spectrum of joy. We are miles away from gender bias, ethically as well as legally.</p>\r\n\r\n<p><strong>Worth Investing</strong></p>\r\n\r\n<p>We offer the most up to date investigations as well as treatments. But as you may know, no two individuals are same, and hence no two would-be mothers. Every biology is different. As, one size does not fit all, similarly your fertility treatment will be strictly and specifically tailored to your needs so as to minimise the unnecessary expenditure and maximize the chances of success.</p>\r\n\r\n<p><strong>Don&#39;t Make Tall Claims</strong></p>\r\n\r\n<p>We believe in science, but remember we aren&#39;t magicians. We believe in results and strive hard to turn your hopes into happiness with our reliable services and up to date treatment methodologies.</p>\r\n', 'Why Us?', 'Why Us?', 'Why Us?', 3);
INSERT INTO `submenu` (`submenu_id`, `submenu_name`, `submenu_slug`, `submenu_menu_id`, `submenu_content`, `submenu_title`, `submenu_keyword`, `submenu_description`, `submenu_order`) VALUES
(40, 'Privacy Policy', 'privacy-policy---wishababy', 3, '<p><strong>Privacy Policy - WishABaby</strong></p>\r\n\r\n<p>WishABaby is committed to delivering quality services, while protecting the privacy of all its members and users. In this Privacy Policy, WishABaby compiles its company policies that are incorporated for safeguarding the privacy of its users.</p>\r\n\r\n<p>In order to provide our services to you, it is necessary for us to collect certain information from you. This includes, but is not limited to, personal details, contact information, and health reports, that are required for delivery of appropriate services by us, and to enable other members and WishABaby team to contact you, if and when required. There is also generalized aggregate information or the Anonymous Information about users of our services, apart from their Personal Information shared with us, collected for various purposes by websites, advertisers, and others.</p>\r\n\r\n<p>WishABaby does not disclose any information to third parties without proper consent from you, or as required by law.</p>\r\n\r\n<p>In the collection and use of all the information, we respect to safeguard user privacy as set forth in this Privacy Policy, which is incorporated as a part of the User Terms of Service.</p>\r\n\r\n<p><strong>What information do we collect?</strong></p>\r\n\r\n<p>&bull; &nbsp;&nbsp;&nbsp;We collect the information that the users provide while registering on our website or while filling out a form. Information such as name, e-mail address, and other personal details related to the user profile is collected. Users submit certain information voluntarily through our site when setting up their account and editing user profile. Users provide the date of birth, gender, sexual orientation, and other personal preferences, related to our services.</p>\r\n\r\n<p>&bull; &nbsp;&nbsp;&nbsp;Users share information in the course of their interaction with other members or the website forum by means of comments, postings, images, reviews, ratings, and questions.</p>\r\n\r\n<p>&bull; &nbsp;&nbsp;&nbsp;If ever users choose to link any of their social networks with their profile, we may collect information about the users and their friends available on that network.</p>\r\n\r\n<p>&bull; &nbsp;&nbsp;&nbsp;On purchase of services, products, or subscription through WishABaby, users will be submitting payment related information such as credit card or account details, in order to facilitate payment. We may track their past purchases and orders in order to provide the personalized user experience.</p>\r\n\r\n<p>&bull; &nbsp;&nbsp;&nbsp;We do not solicit individually identifiable health information unless the user intends to provide so. Such information, however, will be immediately removed once brought to our attention.</p>\r\n\r\n<p>&bull; &nbsp;&nbsp;&nbsp;Once you log into the site, your information about the IP address from which you logged in, will be stored.</p>\r\n\r\n<p>&bull; &nbsp;&nbsp;&nbsp;As a third party vendor, Google may use some cookies to gather information to serve personalized ads on the site based on user visit.</p>\r\n\r\n<p>&bull; &nbsp;&nbsp;&nbsp;The website may gather some information of individual visits technically by assigning temporary &ldquo;session&rdquo; cookies that track information entered during site navigation. Cookies are actually pieces of data assigned to users by website servers to uniquely identify a computer and enhance your user experience with the site. Both temporary and &lsquo;persistent&rsquo; cookies are assigned to aid using the website effectively and remember when a user visits again. While users can use the browser option to delete or block cookies at any time, if you prefer doing so, it may not be possible for you to use or access certain site features and functions.</p>\r\n\r\n<p><strong>How the information collected will be used?</strong></p>\r\n\r\n<p>WishABaby may use any of the information collected from the users in one of the following ways.</p>\r\n\r\n<p>1. &nbsp;&nbsp;&nbsp;To provide services: WishABaby uses personal information of users to provide services effectively. Collected information helps us personalize the experience of our users. Cookies collected allow the website to respond better to the individual needs and serve them in a personalized way.</p>\r\n\r\n<p>2. &nbsp;&nbsp;&nbsp;To improve our services: WishABaby strives to continually improve its service offerings based on the user information and feedback received. We also use the information to respond to our customer requests and support needs.</p>\r\n\r\n<p>3. &nbsp;&nbsp;&nbsp;To process transactions: We will use the collected payment information for processing user membership/registration or subscription.</p>\r\n\r\n<p>4. &nbsp;&nbsp;&nbsp;For customer service: We do use user data for promotions of our products and services, and conduct surveys or other promotional activities.</p>\r\n\r\n<p>5. &nbsp;&nbsp;&nbsp;To send periodic emails: WishABaby may send confirmation emails, newsletters, and other service-related messages to the email address provided during registration. We also use email ids to send across confirmation emails, to respond to inquiries, requests or queries, and/or other messages concerning members&rsquo; relationship with us.</p>\r\n\r\n<p>6. &nbsp;&nbsp;&nbsp;To provide customized user-experience: We may use your IP addresses or other personal data obtained via browser cookies to recognize your site visits to show ads or other content tailored to individual user preferences, demographic and usage patterns. Tracking IP address also helps prevent any type of information misuse, and aids to detect frauds or abuses.</p>\r\n\r\n<p>7. &nbsp;&nbsp;&nbsp;For legal matters: We may monitor, access, remove, alter, save or use any personal data if we find that you have or might have breached our terms,as a precaution to protect other members, to enforce rights, and if we are asked to do so by law or appropriate authorities.</p>\r\n\r\n<p><strong>How do we protect your information?</strong></p>\r\n\r\n<p>&bull; &nbsp;&nbsp;&nbsp;To ensure the privacy of our users, we have implemented several security measures that help maintain and safeguard users&rsquo; personal information from being accessed.</p>\r\n\r\n<p>&bull; &nbsp;&nbsp;&nbsp;All information, whether private or public, will not be sold, transferred, traded, or otherwise given to third parties or companies for any reason whatsoever, without the user consent. However, we do give access to trusted third parties who are part of our services, website operations, or business, as long as they agree to keep that user information confidential.</p>\r\n\r\n<p>&bull; &nbsp;&nbsp;&nbsp;Information that is not personally identifiable may be provided to other companies and third parties for advertising, marketing, or other uses.</p>\r\n\r\n<p>&bull; &nbsp;&nbsp;When third party products and services are offered through our website, we are not responsible or liable for the content or activities of these sites as they have independent privacy policies. Nonetheless, we try to protect our integrity and welcome any constructive feedback on such issues.</p>\r\n\r\n<p>By using WishABaby website, you give your consent to our aforementioned privacy policy. We, at our own discretion, may decide to change or update our privacy policy occasionally and will post those changes on this page. The modifications will be clearly reflected in the date mentioned below. Users are, hence, requested to keep checking the policy for any updates once in a while.</p>\r\n\r\n<p>This policy was last modified on September 16, 2017</p>\r\n', 'Privacy Policy - WishABaby', 'Privacy Policy - WishABaby', 'Privacy Policy - WishABaby', 5),
(41, 'Lifestyle and Fertility', 'lifestyle-and-fertility', 9, '<p><strong>Lifestyle and Fertility</strong></p>\r\n', 'Lifestyle and Fertility', 'Lifestyle and Fertility', 'Lifestyle and Fertility', 3),
(42, 'Recipes for Health', 'recipes-for-health', 9, '<p><strong>Recipes for Health</strong></p>\r\n', 'Recipes for Health', 'Recipes for Health', 'Recipes for Health', 4),
(43, 'Role of IVF Centers/Fertility Clinics', 'role-of-ivf-centers-fertility-clinics', 10, '<p>Role of IVF Centers/Fertility Clinics</p>\r\n', 'Role of IVF Centers/Fertility Clinics', 'Role of IVF Centers/Fertility Clinics', 'Role of IVF Centers/Fertility Clinics', 1),
(45, 'Get Your Clinic Listed Here', 'get-your-clinic-listed-here', 10, '<p><strong>Get Your Clinic Listed Here</strong></p>\r\n', 'Get Your Clinic Listed Here', 'Get Your Clinic Listed Here', 'Get Your Clinic Listed Here', 4),
(46, 'Infertility', 'infertility', 6, '<p><strong>Infertility</strong></p>\r\n', 'Infertility', 'Infertility', 'Infertility', 4),
(47, 'Fertility Testing', 'fertility-testing', 6, '<p><strong>Fertility Testing</strong></p>\r\n', 'Fertility Testing', 'Fertility Testing', 'Fertility Testing', 5),
(48, 'Effecting Factors', 'effecting-factors', 6, '<p><strong>Effecting Factors</strong></p>\r\n', 'Effecting Factors', 'Effecting Factors', 'Effecting Factors', 7),
(49, 'Infertility Causes and Treatment', 'infertility-causes-and-treatment', 6, '<p><strong>Infertility Causes and Treatment</strong></p>\r\n', 'Infertility Causes and Treatment', 'Infertility Causes and Treatment', 'Infertility Causes and Treatment', 8),
(50, 'Alternative Therapies', 'alternative-therapies', 6, '<p><strong>Alternative Therapies</strong></p>\r\n', 'Alternative Therapies', 'Alternative Therapies', 'Alternative Therapies', 9),
(51, 'Glossary of Common Terms', 'glossary-of-common-terms', 6, '<p><strong>Glossary of Common Terms</strong></p>\r\n', 'Glossary of Common Terms', 'Glossary of Common Terms', 'Glossary of Common Terms', 11),
(52, 'Pregnancy – Important Aspects', 'pregnancy-important-aspects', 11, '<p><strong>Pregnancy &ndash; Important Aspects</strong></p>\r\n', 'Pregnancy – Important Aspects', 'Pregnancy – Important Aspects', 'Pregnancy – Important Aspects', 1),
(53, 'Signs and Symptoms of Pregnancy', 'signs-and-symptoms-of-pregnancy', 11, '<p dir=\"ltr\" style=\"text-align:center\"><span style=\"font-size:26px\"><strong>Signs &amp; Symptoms of Pregnancy</strong></span></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">At WishABaby, we are committed to not only ensuring that you have a healthy family but also a happy one. And the first sign towards beginning a family is getting pregnant! So let us tell you a few signs and symptoms, which may though vary from person to person, are most commonly associated with being pregnant.</p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-size:16px\"><strong>A Missed Period</strong></span></p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:40px; text-align:justify\">If you&#39;re in your childbearing years and more than a week has passed since the expected onset of your menstrual cycle, then you might be pregnant. But, this symptom can be a misleading one if your menstrual cycle has been an irregular one in the past.</p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-size:16px\"><strong>Nausea (with or without vomiting)</strong></span></p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:40px; text-align:justify\">Usually termed the morning sickness, such nausea can strike at any time of the day. It usually sets in after 30 days of conceiving the child. Pregnancy hormones likely play a role in this regular nausea during this 9 months of period.</p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-size:16px\"><strong>Increased Urination</strong></span></p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:40px; text-align:justify\">You may find yourself urinating more often than usual every day. Do not worry, just learn that the body-blood increases during pregnancy which causes the kidneys to process extra fluid. And this extra fluid ends up in the bladder to be expelled as urine.</p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-size:16px\"><strong>Tender &amp; Swollen Breasts</strong></span></p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:40px; text-align:justify\">The first trimester usually starts with preparing the breasts towards lactation and might make your breasts sensitive and sore due to hormonal changes in the body. This discomfort will tone-down with time once the body accommodates itself to growing hormonal changes to accommodate the baby inside you.</p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-size:16px\"><strong>Fatigue</strong></span></p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:40px; text-align:justify\">Uneasiness and loss of strength are among the few early symptoms of pregnancy. During early pregnancy, progesterone levels soar, which mostly make the women feel sleepy. Nothing to worry about, consult your gynecologist if you find yourself with a lot of fatigue and uneasiness.</p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-size:16px\"><strong>Light Bleeding or Spotting</strong></span></p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:40px; text-align:justify\">The last thing a woman who is attempting to get pregnant would like to see is spots of blood on her undergarment. But if you notice just light spotting around the time your period is due, don&#39;t panic. It could be implantation bleeding. About 1 in 4 women experience spotting during the first trimester, thus there is absolutely nothing to worry about. But if it is beyond spotting and is accompanied by pain, then you must see your doctor immediately.</p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-size:16px\"><strong>Cramps</strong></span></p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:40px; text-align:justify\">Similar to sore breasts, occurrence of cramps is among the early signs of pregnancy. But if cramping is more and is severe, do consult your doctor. And this becomes all the more a case of immediate action if cramps are accompanied by bleeding outside of your menstrual period scheduled dates.</p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><strong><span style=\"font-size:16px\">High Basal Body Temperature</span></strong></p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:40px; text-align:justify\">If you are planning a pregnancy, it is always advisable to chart your body temperature. A slight high is indicative of pregnancy. The basal (or waking) temperature peaks when you ovulate, then gradually falls down during the latter part of your menstrual cycle till the time your period begins. But if you get pregnant during the cycle, your basal temperature will stay high.</p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-size:16px\"><strong>Food Cravings And Aversions</strong></span></p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:40px; text-align:justify\">While some women take to eating finger-licking spicy stuff, other develop a repulsion from certain food items and even their smell. For example, some develop repulsion to the smell of eggs, which are full of vital nutrients for the baby. Common aversions during the first trimester include meat, onions, and eggs. But as every individual is different, these aversions may go beyond the items mentioned here.</p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-size:16px\"><strong>Bloating</strong></span></p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:40px; text-align:justify\">Abdominal pain or tightening of the upper abdomen, resulting in bloating, belching, and passing out gas, may indicate an early pregnancy. Though it may continue for the entire nine months depending on the physiology of the woman as well as the diet components. Bloating is caused scientifically by the boost in progesterone and estrogen, causing a women&#39;s belly to swell up during early pregnancy. Yoga and light exercise can help get rid of this. Do not pop-antacids or anti-flatulence drugs without consulting a doctor.</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">Aforementioned are the most common symptoms that are observed in women upon conception. However, occurrence of signs and symptoms may differ from women to women. While a few may get all the symptoms listed above and even more than what is mentioned here, a few others may not experience much of them at all. Hence, it is always better to confirm pregnancy using home-based pregnancy kits and finally through your doctor.</p>\r\n', 'Signs and Symptoms of Pregnancy', '', '', 2),
(54, 'Home-based Pregnancy Tests', 'home-based-pregnancy-tests', 11, '<p><strong>Home-based Pregnancy Tests</strong></p>\r\n', 'Home-based Pregnancy Tests', 'Home-based Pregnancy Tests', 'Home-based Pregnancy Tests', 3),
(55, 'Pregnancy Health', 'pregnancy-health', 11, '<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'Pregnancy Health', 'Pregnancy Health', 'Pregnancy Health', 4),
(57, 'Induced Lactation', 'induced-lactation', 11, '<p style=\"margin-left:0in; margin-right:0in; text-align:center\"><span style=\"font-size:26px\"><span style=\"font-family:&quot;Calibri Light&quot;,sans-serif\"><strong><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\">Induced Lactation</span></strong></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\">It is evident that child birth induces natural lactation in women. But what if a woman doesn&rsquo;t give birth to a child and instead opts for adoption or surrogacy due to medical or any other issues? Do such children remain devoid of the nutritious breastmilk, which is otherwise, owing to its goodness, advised as the only diet for infants up to six months of age? This is where induced lactation gains significance.</span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\">Induced lactation is the term used when a mother opts to breastfeed a child that is biologically not born out of her. This generally happens in the case of either an adoption or surrogacy, wherethe woman is induced to feed the child upon stimulating lactation in her breasts.&nbsp; </span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\">Induced lactation is also the term for a lactating mother who might not be currently breastfeeding but will go on to adopt a child and nurse an infant not born out of her. When such mothers wish to breastfeed the child, which, in fact, also serves to develop a special bond between the child and the mother, they opt for induced lactation. </span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\">You will learn about how this adoptive breastfeeding happens on this page below.</span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><span style=\"font-size:16.0pt\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\">How to Induce Lactation?</span></span></strong></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\">Frequent and effective breast stimulation is the first and foremost way to induce lactation. And following this step, milk removal, once it begins to flow, is the next most important step. There are additional methods that canalso be employed to stimulate breasts,such as Galactagogues, Hormonal Stimulation, etc. But these too will work effectively to induce lactation only if an effective breast stimulation has been done prior or side-by-side to these. Otherwise, these will be a futile effort and wastage of time and energy of the lactating mother.</span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><span style=\"font-size:16.0pt\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\">What can be done to Induce Milk Supply?</span></span></strong></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\">1. Stimulating both the breasts either together or one by one is a must to induce lactation. This needs to be done for over 100 minutes every single day. More is the frequency of great stimulation, quicker is the milk flow to build up. A newborn, on an average, needs milk every 2 hours, which ideally amounts to a feeding-need of 10-12 times per day. So mothers have to work out the breast-stimulation accordingly. Not compulsory to stimulate both breasts at one go, but it surely saves time.</span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\">2. The milk production and ejection reflex can be trained upon the mothers. Yes, at WishABaby, we suggest you to keep positive thoughts, listen to some soothing music, read good literature, build a close bond with your child, and get involved in activities that help reduce your stress levels. Stress or depression can obstructthe development of hormones that are involved in milk ejection. Thus, try to stay happy and healthy, and this will help you a long way through.</span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\">3. While feeding the child, and even beyond that, build a skin-to-skin bond with your baby. This not only helps release more milk but also helps you connect better with the child who has not born out of your own body. Mothers&#39; touch is the best bond and helps maximise a mother&rsquo;s breastfeeding hormones.</span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\">4. Pharmacological and/or herbal galactagogues while breastfeeding also stimulate breastmilk supply. But before you go on to take any of these,simply on the basis of what your friends/family told you, we would advise you to consult your doctor about whatis safe for you, since no two bodies are the same physiologically. Besides, oatmeal is also known to increase milk supply, but if your weight is below the BMI, it would be better to consult your doctor.</span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\">5. Alternative therapies like acupuncture and acupressure are also known to increase a mother&rsquo;s milk supply. But this needs to be done under proper guidanceand should be taken into account only when all other procedures have failed. Rather go for meditation and Yoga, which is so far considered to be the safest.</span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\">6. Along with all the above factors, comes the precious support of family and friends. Yes, this one important factor is a must to keep you stress-free. Adoptive breastfeeding has a lot of challenges and stress which can only be relieved with the help of family and friends who can help you tone up your thoughts and stay positive towards your child.</span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><span style=\"font-size:16.0pt\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\">How to Prepare Your Body for Induced Lactation?</span></span></strong></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\">If you have some time on hand (a few weeks or months) before getting the baby, as in case of surrogacy or adoption, you can prepare your body for the breastfeeding needs of the baby. This can be done with the help of a few medications,like oral birth control pillsthat contain estrogen and progesteroneand serve to mimic pregnancy hormones in your body. Taking these pills each month under the advice and supervision of a medical practitioner can help ease out the path to lactation ahead.&nbsp; </span></span></span></p>\r\n\r\n<p style=\"margin-left:0in; margin-right:0in; text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\">One thing that should be always kept in mind is that medical science is not a game, and hence any kind of experimentation with the body should be strictly avoided. Yes, equipping yourself with necessary knowledge certainly helps, but if you really wish to win the battle, you do need a consultation with a medical expert. Only your doctor can guide you in the best manner and can ensure that your hopes work.</span></span></span></p>\r\n', 'Induced Lactation', 'Induced Lactation', 'Induced Lactation', 6),
(58, 'Milk Banks', 'milk-banks', 11, '<p><strong>Milk Banks</strong></p>\r\n', 'Milk Banks', 'Milk Banks', 'Milk Banks', 7),
(59, 'The Initial phase as New Parents', 'the-initial-phase-as-new-parents', 12, '<p style=\"text-align:center\"><span style=\"font-size:26px\"><strong>The Initial Phase as New Parents</strong></span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">Are you a brand new parent? Well, many congratulations from the entire team at WishABaby! May your little bundle of joy brings to you the biggest pleasures in life!!</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">So how are you finding this initial phase of parenthood? Tiring? We understand! But don&rsquo;t sweat over it. We are here to help you out with some major tips and know-how that will make the phase really easy for you, mentally as well as physically.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-size:16px\"><strong>Handle the Baby Correctly</strong></span></p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:40px; text-align:justify\">How you handle your baby is very important, especially during the initial weeks of life. This is the time when your baby is extremely feeble and any mishandling can lead to major health issues. Hence, whenever you pick your child up, make sure that you support your baby&#39;s head and neck with your arms. Don&#39;t shake the baby or throw in the air; it can have a serious impact on your baby&rsquo;s health, and can be life threatening at times as well.</p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-size:16px\"><strong>Things to be Kept Handy</strong></span></p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:40px; text-align:justify\">Always keep handy an extra set of clothes, diapers, wet tissues, a few newspapers, a water bottle, and a sanitizer in the baby&rsquo;s bag. You never know when the need arises. Ensure that you keep a box of good quality wet tissues at your home as well as in your vehicle. Helps keep the baby clean as and when required since babies, till they are six-month old and even after that, tend to poop, spill, or throw-up milk, a lot.</p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-size:16px\"><strong>Do Not Over Do Hygiene</strong></span></p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:40px; text-align:justify\">Do not keep your babies wrapped in baby-bags all the time. Let them be free. Let them explore the new world around them, let them crawl, let them play. Don&#39;t keep sterilising everything around them, instead let them accept the nature as it is. But yes do ensure they don&#39;t get dirt or anything dirty into the mouth. This play-amid-nature helps boost the kid&#39;s immune system which can only happen when they counter common germs. Remember your own carefree childhood? Your kid needs the same.</p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-size:16px\"><strong>Avoid Exposure to Loud Sound</strong></span></p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:40px; text-align:justify\">Some parents are adventurous enough to tag along the child wherever they go, even to music festivals and cinema halls. Please avoid this if your baby is just a few days or hardly a few months old. Your child needs at least six months after birth to develop a strong hearing system. Till then, any loud sound will be harmful to his/her ear-drums. So be adventurous but with caution. Take him/her to the garden, to parks, to travel amid nature. Expose the baby to the natural sounds of birds, wind etc. rather than noise.</p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-size:16px\"><strong>Let the Baby Cry Out</strong></span></p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:40px; text-align:justify\">It is not always a solid diaper or something else that baby is bugged about that is making him/her cry. Crying is the way babies communicate. You&rsquo;ll notice that your crying baby will suddenly turn into a smiling and blushing angel the moment you pick him/her up in your lap or start to sing a lullaby. That&rsquo;s because your baby was trying to tell you to do so. But no, it doesn&#39;t mean that cuddling will always console them. If you notice the cry is constant and nothing works, then do consult a doctor.</p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-size:16px\"><strong>Snuggle Your Baby a Lot</strong></span></p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:40px; text-align:justify\">Nothing can help make a better bond between you and your child than the touch-therapy. Hence, do make it a point to snuggle a lot with your baby. It will help strengthen your relationship with your baby and will help you understand his/her needs and requirements better. Don&#39;t worry about creating bad habits. A sung or cuddle is different from carrying your baby the whole day in your arms.</p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-size:16px\"><strong>Stay Away from Mommy Wars</strong></span></p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:40px; text-align:justify\">No two children are the same and so are no two mothers. Hence assess your work and home environment and feasibility of time and resources, and accordingly plan what is best for your child. Neither try to be a supermom, nor a robot. Don&rsquo;t compare yourself and your baby with others. Go by what the doctor says and not by what your neighbours or friends suggest. True, the experience of others does count, but can&#39;t always be right in your case.</p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-size:16px\"><strong>Let Breastfeeding be Natural</strong></span></p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:40px; text-align:justify\">Ideally, the baby should be fed every 2 hours. But that doesn&rsquo;t mean waking up the baby middle-of-the-night to stick to the 2-hour feeding cycle. While it is good that you do take complete care of your baby&rsquo;s diet requirements, let the demand-supply be made naturally habitual. It is a natural cycle for the baby to demand food by crying out or making gestures. Let that happen on its own. This will help you in the long run as well. Also, remember to never force-feed your child. It may harm the body&#39;s digestive system.</p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-size:16px\"><strong>A Warm Body is Not Always Fever</strong></span></p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:40px; text-align:justify\">Yes, don&#39;t panic if you find your little baby a bit more on the warmer side than you. A baby&#39;s body is usually warmer than that of the adult. But if the warmth rises above 100 degrees Fahrenheit and persists for more than half an hour, then surely consult a doctor.</p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-size:16px\"><strong>Dress Up Your Child in Comfortable Clothing</strong></span></p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:40px; text-align:justify\">When it is about your babies, do not go by fashion and trends. Choose the clothing that is comfortable for them. Prefer buying clothes that are soft in texture, neither too tight nor too frilly or loose. Dress your child in the clothes that let him/her feel free, breathe free, and play carefree. Even in winters, the innermost clothes must have enough breathing space for the lungs as well as the skin. Otherwise, despite everything done, your child will feel the discomfort and keep on crying.</p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-size:16px\"><strong>Have an Adjustable Car-seat</strong></span></p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:40px; text-align:justify\">This is especially important for those parents who have to drive alone with the child. Don&#39;t plonk your child in the car like a teddy-bear. Ensure you have an adjustable car seat and have a safety seatbelt attached.</p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-size:16px\"><strong>Use Diapers Only When Required</strong></span></p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:40px; text-align:justify\">Keeping the baby in diapers all the time can cause rashes on your baby&rsquo;s soft skin. Hence, try and limit the use of diapers to only when you are travelling or may be at nights to ensure a sound sleep for the baby. Let the baby&rsquo;s skin breathe freely. It is also important for healthy growth of the genitals.</p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-size:16px\"><strong>Learn to be Flexible</strong></span></p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:40px; text-align:justify\">It&rsquo;s a good idea to learn to be a little flexible with your schedule. Now since you are proud parents of a little baby, a lot will revolve around the baby&#39;s needs, rather than your own. So better prepare to accept a bit of flexibility in your time scheduling, your eating habits, your living standard, as well as many other such factors that you will come upfront with passing time.</p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-size:16px\"><strong>Say NO to Pre-Packaged Food</strong></span></p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:40px; text-align:justify\">Packed juices and food items have a lot of preservatives which though an adult body can adapt with time, but in case of children, they can cause harm to the developing digestive organs. Some children are even found to be allergic to certain preservatives. It is hence always better to avoid giving any kind of packaged food to your little ones. Ensure that the child is only and only breastfed until the age of six months, after which you should give fresh home-made food to the child. You can also consider deep freezing fresh stuff and using it later, but this should also be kept limited for emergency cases only.</p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-size:16px\"><strong>Don&#39;t Forget Yourself</strong></span></p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:40px; text-align:justify\">You as a parent, are as important as the baby. Never neglect yourself, or your health concerns for that matter, because anything that affects you is ultimately going to affect your baby and your entire family. So do take good care of yourself if you really wish to take good care of the baby and the family. Make sure you go for timely vaccinations and regular health checks. Since the baby stays closest to you, highest are the chances of the baby catching-up an infection from the parents than outsiders. So keep the focus on staying healthy, to keep your child healthy and off the secondary infections. And in case you do catch an infection, especially viral, try maintaining a safe distance from the baby as far as possible.</p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-size:16px\"><strong>Give Time to Each Other</strong></span></p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:40px; text-align:justify\">Remember that before being parents, you were a cool, loving, doting couple. Don&#39;t let over-devotion to the child create a distance between you two. You can still date with each other or simply cuddle over a good movie or food or any other common interest.</p>\r\n', 'The initial phase as new parents', 'The initial phase as new parents', 'The initial phase as new parents', 1),
(60, 'Your Body Post Childbirth', 'your-body-post-childbirth', 12, '<p style=\"text-align:center\"><span style=\"font-size:26px\"><strong>YOUR BODY POST CHILDBIRTH</strong></span><br />\r\n&nbsp;</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">Pregnancy is the most beautiful change a woman&#39;s body goes through. And this process of body-transformation does not stop here. It continues even after child-birth.</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">But do you know this particular phase, called the post-partum phase, is the time when your body needs almost equal care as it needed during the nine months of pregnancy? Yes, that&rsquo;s right! And, this is because your body undergoes a lot of changes after you give birth to your baby, and as such, it becomes extremely important for a woman, as well as the people around her, to know and understand about these changes well in time. This will not only help you to stay prepared for the changes that are about to come post pregnancy but will also save you from getting into depression or panic mode.</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">Listed here are a couple of changes that a woman&rsquo;s body generally goes through upon child-birth:</p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><strong>LOSS OF HAIR</strong></p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:40px; text-align:justify\">An average person loses about 100 strands of hair per day! But due to raging hormones, a pregnant woman faces more hair loss, which further goes up after childbirth. No point wasting time in worrying, give time to yourself, take a healthy diet and your body will on its own make up for the lost hair.</p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><strong>SKIN DISCOLOURATION</strong></p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:40px; text-align:justify\">This is also called the &quot;Mask of Pregnancy&quot; in common language, which is nothing but usually the tanning around your eyes that you get during your pregnancy phase. Once the child is born, you will notice this tan to fade away. Even the acne that you were facing during pregnancy, will stop erupting within weeks of your child being born.</p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><strong>FLUSHED, SWOLLEN BREASTS</strong></p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:40px; text-align:justify\">It is but natural since your body is now ready to feed the child. Besides, the baby-suckling will also add up to it. Once natural breastfeeding comes to an end, the breasts will sag due to the stretched skin. Do not worry about this or even for some sort of milk leakage for a few weeks, even if you don&#39;t breastfeed. This is a natural process. Lactation takes time to stop. Let it be natural, do not pop pills.</p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><strong>STOMACH CHANGES</strong></p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:40px; text-align:justify\">You will light in the abdomen area with the baby already out. Also, that mysterious brown line which is usually seen down the center of the lower abdomen will shortly vanish. But, what will stay longer are those stretch marks. They may change color with time, but they are not going anywhere in near future. We at WishABaby call them &#39;beauty-marks&#39; since not all women get the pleasure of carrying a baby so beautifully. Let them take time to blend with your skin. And till then, do some Yoga and Eat Healthy to get back in healthy shape as before!</p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><strong>BACK-ACHE</strong></p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:40px; text-align:justify\">The stretched-abdomen muscles that underwent a lot of strain during pregnancy will take time to get back to their original place and shape. And thus, the back-pain will take a few weeks to go. All you need to do is some light exercise/ Yoga under supervision. Plus, do focus on maintaining the right body posture. Generally, the backache pushes off within six weeks of giving birth. But if it still persists, we would suggest you to visit a medical practitioner.</p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><strong>INCONTINENCE OR DIFFICULTY IN URINATION</strong></p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:40px; text-align:justify\">Urination goes up and is more frequent with the baby inside you pushing the urethra, thus pushing out urine. And this pressure will kind-of vanish post childbirth. Two things happen due to this:</p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:40px; text-align:justify\">One - Pressure on the urethra during delivery at times makes urination quite difficult postpartum.</p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:40px; text-align:justify\">Two - Incontinence or a urinary tract infection is common post child birth which is symptomatic with urination.</p>\r\n\r\n<p style=\"margin-left:40px; text-align:justify\">Do not worry, your doctor will suggest the right remedy. Avoid popping pills on your own.</p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><strong>CONSTIPATION</strong></p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:40px; text-align:justify\">Constipation is a common feature prevalent during pregnancy, and it will take a two to three weeks&rsquo; time to get back to normal bowel movement post childbirth. Remember, since pregnancy is not magic, so is child-birth. Your body needs time to get back to normalcy.</p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:40px; text-align:justify\">Piles or hemorrhoids are very common after childbirth, but they tend to disappear completely within a few days. Take plenty of fibrous foods with milk, water, and juices to regulate bowel movement. Again, do not take any medications at will, thinking now the baby is out, so you can attempt self-medication. Remember, you are still feeding the child. Try to treat the issues naturally.</p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><strong>VAGINAL DISCHARGE</strong></p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:40px; text-align:justify\">Shortly after delivery, there will be some vaginal discharge, which is mostly blood left out from the uterine lining that held your baby during pregnancy. Do not worry, this is termed LOCHIA and may last for three to four weeks. But if it is tremendous with uncontrolled pain, immediately consult a doctor.</p>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:40px; text-align:justify\">Do not go for an inter-course in this situation. Also if you are breast-feeding, your normal menstrual cycle may not start at a normal time. So consider it to be absolutely normal if your menstrual cycle starts two or three months later.</p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><strong>EXCESSIVE SWEATING</strong></p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:40px; text-align:justify\">Your body accumulated extra fluids during pregnancy to nurture the baby and to keep him hydrated. You may thus start experiencing excessive sweating especially during the night after childbirth.</p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><strong>FLUSH OF RAISED ENERGY LEVELS</strong></p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:40px; text-align:justify\">Pregnancy generally brings in lethargy as the growing fetus consumes all your energy to develop. Hence, once you give birth to your child, you will suddenly experience a flush of hormones that will boost energy levels. But then taking care of the child is very exhaustive, so this will only be temporary! Utilise it well, since some women do complain of getting moody after this flush-of-energy is over. Blame the hormones and not the doctor. Take a healthy diet.</p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><strong>MOODY-MOM SITUATION</strong></p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:40px; text-align:justify\">While some women get very irritable after childbirth, others tend to weep a lot. For most women, this situation subsides within 10 days of the delivery, for others it may last longer. However, in case you feel over depressed or too moody for quite an extended period of time, do visit your doctor and get the things checked.</p>\r\n', 'Your body after birth', 'Your body after birth', 'Your body after birth', 2);
INSERT INTO `submenu` (`submenu_id`, `submenu_name`, `submenu_slug`, `submenu_menu_id`, `submenu_content`, `submenu_title`, `submenu_keyword`, `submenu_description`, `submenu_order`) VALUES
(61, 'Post Delivery Nutrition', 'post-delivery-nutrition', 12, '<p style=\"text-align:center\"><span style=\"font-size:26px\"><strong>Post Delivery Nutrition</strong></span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">We at WishABaby care about you, not just to ensure you have a child, but also how to take care of yourself once the childbirth has happened. WishABaby is not just about the baby, but you, since the baby&#39;s health depends on your health, directly as well as indirectly.</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">So what all necessary precautions, steps, and diet you must take post-delivery? Here is a comprehensive list for your help:</p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-size:16px\"><strong>Eat Smaller, Frequent Meals</strong></span></p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:80px; text-align:justify\">Smaller meals and frequent meals are necessary for a new mother since lack of sleep and other exhaustion take a lot of energy away. Frequent balanced diet help maintain the blood sugar level to a safer side. If your sugar level dips, acute fatigue may set in. Ensure it doesn&rsquo;t happen. Hard-boiled eggs, boiled-slightly-salted vegetables and celery, or cheese and fruits&#39; slices are quick and healthy snacks that can be consumed frequently during the day.</p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-size:16px\"><strong>Take Lots of Fluids</strong></span></p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:80px; text-align:justify\">Drink plenty of juices and water. It will helps the body get rid-off toxins as well as regulate necessary nutrition already taken into the bloodstream via food.</p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-size:16px\"><strong>Avoid Empty Calories</strong></span></p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:80px; text-align:justify\">Empty calories are the carbohydrate-based foods and drinks like muffins, cakes and even sugary drinks like the sodas. A new mother due to her postpartum exhaustion may get a quick-energy boost by consuming such items, but this will ultimately do more harm than help. Yes, these foods wreak havoc on the body&#39;s insulin levels and in short-term contribute to obesity and nothing else. Go for long-filling foods instead, like low-fat yogurt, fruits, hardboiled eggs, granola bars, bananas, raisins, nuts, etc. which might not give you instant energy but will fulfil your full-day energy demand.</p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-size:16px\"><strong>Say No to Alcohol</strong></span></p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:80px; text-align:justify\">You might think what harm will one drink do? We agree, nothing. But since new mothers are already exhausted, thus even a small glass of wine can make them feel even more tired post dinner. Also, it actually has a negative effect on sleep. Thus, rather than helping the new mother to relax, the already sleep-deprived human will end up ruining her health. Rather to relax, look for advice from your doctor, especially if you have a strong craving for alcohol or if you have been a heavy drinker in the past.</p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-size:16px\"><strong>Must Haves in Daily Diet</strong></span></p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:80px; text-align:justify\">See to it that you do include the below listed items in your daily diet:</p>\r\n\r\n<ul style=\"margin-left:80px\">\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\">6 1/2 ounces protein</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\">2 cups fruit</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\">3 cups vegetables</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\">3 cups milk (low-fat or fat-free)</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\">8 ounces whole grains which can either be cooked or soaked and used.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">Also, we are listing below a few dietary components a new mother must not avoid:</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-size:16px\"><strong>A) Protein-Rich Foods</strong></span></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">Minimum Daily Servings: 3 if breastfeeding and 1 if bottle-feeding)</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">One Serving is: 1 oz. fish or other seafood / 1 oz. mutton or chicken + 1 boiled egg + 1/2 cup cooked beans (lentils or kidney bean) + 1/4 cup of dry fruits like Almonds, Dry Grapes, Walnuts, Pistachio, etc.</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-size:16px\"><strong>B) Milk Products (calcium-rich)</strong></span></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">Minimum Daily Servings: 3 for both breastfeeding and bottle-feeding</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">One Serving is: 8 oz. milk or yogurt + 2 cups cottage cheese + ice-cream to change your mood!</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-size:16px\"><strong>C) Breads, Cereals, and Grains (at least four as whole grain)</strong></span></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">Minimum Daily Servings: 6 if breastfeeding and 4 if bottle-feeding</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">One serving is: 1 Slice Brown Bread/ 1 Chapati + 1/2 Cup Flour Pasta/Noodles or Rice + 1/2 cup any other cooked cereals + 1 small pancake or waffle</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-size:16px\"><strong>D) Vitamin C-Rich Fruits &amp; Vegetables</strong></span></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">Minimum Daily Servings: 2-3 for both breastfeeding and bottle-feeding</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">One serving is: One Whole Orange / Tomato / Lemon</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">You can consume these by adding to juices or soups made with other fruits or vegetables since new moms have a tendency to get bored with daily dose of the same food.</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-size:16px\"><strong>E) Vitamin A-Rich Fruits and Vegetables</strong></span></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">Minimum Daily Servings: 1 for both breastfeeding and bottle-feeding</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">One serving is: One Whole Big Carrot/ 3 Fresh Apricots/ 1/2 Cup cooked green leafy vegetables/ One Mango</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-size:16px\"><strong>F) Unsaturated + Saturated Fats</strong></span></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">Minimum Daily Servings: 3 for both breastfeeding and bottle-feeding</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">One serving must include 1 tsp of a vegetable oil (canola, safflower, corn, olive). If not available, you can go for 1 tsp. salad dressing which can be mayonnaise-based. 1 tsp of White butter must be consumed morning and evening daily. Among fruits, Avocado is the only one that can provide a good amount of fat to your body. Other sources are nuts like Almonds, Walnuts, etc.</p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-size:16px\"><strong>Take Ample Rest</strong></span></p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:40px; text-align:justify\">Over and above all, ample rest is the prime requirement for a new mother. Childbirth is not only about excitement and joy, but exhaustion as well. So the new mother has to be careful not to burn her energy out by regulating sleep hours and new responsibilities.</p>\r\n\r\n<ul style=\"margin-left:40px\">\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\">Try to nap when your baby naps.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\">Stay flexible in your routine so that you can even eat at odd hours and sleep as well when your body needs rest.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\">Don&#39;t shy to seek physical help from a family member or a helper.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\">Plan an outing when need be; mental exhaustion takes a toll on the body in a stronger way than physical. So, ensure you get a change.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\">Remind yourself &quot;I am equally important since I am the one who has to take care of the baby, at the end of the day&quot;</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n', 'Post-delivery nutrition', 'Post-delivery nutrition', 'Post-delivery nutrition', 3),
(62, 'Healthy weight loss post child birth', 'healthy-weight-loss-post-child-birth', 12, '<p style=\"text-align:center\"><span style=\"font-size:26px\"><strong>Healthy Weight Loss Post Childbirth</strong></span></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">If you are here on this page, this means that you have gone through the out of the world experience of childbirth. Dear ladies, you deserve to take a bow for demonstrating some outstanding strength for not only bearing the baby within yourself for 9 long months but also to take the exceptional pain to introduce the baby to the world outside. No one else but only females can portray this much strength and courage, and we, at WishABaby, really salute that!</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">Coming to one of the major concerns of the new mothers, be it the working ones or the home-managers, which is about losing weight post childbirth. We understand your concerns and issues, and since we care for you, we would want you to make sure that you do lose weight but in a healthy way, since a sudden weight loss will be as harmful for you, as for your child.</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">Given below are a few easy steps that can help you stay fit and healthy. Go through each of them carefully and try adopting the same as a routine in your lifestyle for some healthy weight loss post childbirth.</p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-size:16px\"><strong>Do Not Skip Meals</strong></span></p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:40px; text-align:justify\">Crash dieting or even suddenly cutting down on what you eat can have adverse effects on your body. It will do more harm than any good. You probably feel that cutting down on your eating will help you lose the weight faster, but unfortunately, it leads to the opposite result. It is hence always better to plan a diet chart with your dietician. It is OK to eat a large scoop of a dessert at times, but see to it that you balance it with fruits and vegetables.</p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-size:16px\"><strong>Have Frequent Small Meals</strong></span></p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:40px; text-align:justify\">Instead of, say, three big meals a day, spread these out to five or six. You will not feel lazy and heavy at once. Moreover, the small portions will release energy through the day to keep you stay fit to meet the baby&#39;s needs like running around and even breastfeeding.</p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-size:16px\"><strong>Go for Balanced Calories</strong></span></p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:40px; text-align:justify\">A new mother needs a lot of calories, especially if she is breastfeeding. Thus balance out. Cut down at-once-intake of high-calorie food even if you are tired. It helps avoid displacing the insulin levels of the body. Balance out a dessert with eggs, fish, fruits, and vegetables.</p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-size:16px\"><strong>Stay Hydrated</strong></span></p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:40px; text-align:justify\">2-3 litres of water not only keeps you hydrated enough even when you are breastfeeding but also helps to flush off the toxins from your body. Hydration boosts metabolism, which is the most effective factor in reducing weight. Include various types of liquids in your daily diet beyond water, such as fresh juices, milkshakes, smoothies, soups, etc. They will keep you nourished as well as hydrated. &nbsp;Also, make sure to have water before each meal and avoid taking any for half an hour post having your meal.</p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-size:16px\"><strong>Exercise Moderately</strong></span></p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:40px; text-align:justify\">Yoga and meditation under the supervision of a trained professional is the best form of moderate exercise to take on post childbirth. Besides that, walking, slow jogging, swimming under supervision, and even aerobics to some extent, help out in losing body weight in a controlled and healthy way.</p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-size:16px\"><strong>Get Enough Sleep</strong></span></p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:40px; text-align:justify\">Lack of sleep leads to reduced metabolism and also in the disposition of the calories consumed. So make sure to take time for your sleep whenever the baby sleeps. If you need help from your partner or others in the family, don&rsquo;t shy away from asking for it.</p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-size:16px\"><strong>Watch Your Snacks</strong></span></p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:40px; text-align:justify\">Junk food, in the form of a filling snack, is one of the major causes of sudden weight gain, whether you are a new mother or a normal human being. The snacks thus should be healthy like nuts, chopped fruits, boiled vegetables with a dash of light masala and lemon to taste, roasted whole grains, boiled sweet corn, yogurt mixes etc. should be preferred and consumed.</p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-size:16px\"><strong>Dance-Off Your Weight</strong></span></p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:40px; text-align:justify\">Put on some music and sweat it out! Music is a great healer and it will help reduce the stress as well. But please be careful, you should consider this option only if you have passed the risk-period post childbirth.</p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-size:16px\"><strong>Cut Out Fat Wherever You Can</strong></span></p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:40px; text-align:justify\">A cheat diet is ok but only once in a while, say once a week. But to compensate, start cutting off the fattening and unhealthy items from your meals by replacing them with smart options. For instance, Potato Fries can be easily made in the oven, so why fry? Similarly, make dips of Yoghurt and not mayonnaise.</p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-size:16px\"><strong>Timely Eating is the Key</strong></span></p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:40px; text-align:justify\">An early morning breakfast, a noon lunch, and an evening dinner go a long way to boost your metabolism and help you lose weight in the most effective manner.</p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-size:16px\"><strong>Avoid Caffeine &amp; Alcoho</strong></span>l</p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:40px; text-align:justify\">One of the most effective ways to not only lose weight but to stay healthy is to avoid caffeine and alcohol as much as possible. If you are tired, rejuvenate yourself with a steaming cup of green tea rather than a hot cup of coffee or a pint of whiskey.</p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-size:16px\"><strong>Prefer to Have Home-Made Meals</strong></span></p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\" style=\"margin-left:40px; text-align:justify\">This is the best way to keep a watch on what you eat. Plus, the added benefit is that you intake a fresh meal every time and don&rsquo;t resort to frozen or packaged food items.</p>\r\n', 'Healthy weight loss post child birth', 'Healthy weight loss post child birth', 'Healthy weight loss post child birth', 4),
(63, 'Health Screening', 'health-screening', 6, '<p dir=\"ltr\" style=\"text-align:center\"><span style=\"font-size:72px\"><strong>Health Screening</strong></span></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:center\"><span style=\"font-size:26px\"><strong>An Inevitable Aspect of Conception</strong></span><br />\r\n&nbsp;</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">We, at WishABaby, believe that the true bliss of parenthood can only be experienced when the baby, as well as the parents, are completely healthy and in the pink. And, to ensure the same, health screening becomes a priority and an essential aspect. Health Screening is all the more important in case of IVF treatments as good health is directly proportional to the success rate of conception.</p>\r\n\r\n<p dir=\"ltr\">Hence, whether you are going ahead for the IVF treatment with sperms/eggs from your spouse or that of a donor, proper health screening of everyone involved should be given due consideration. Certain aspects of health screening that should be ideally covered, especially when you are going ahead with donor based conception, are:</p>\r\n\r\n<p dir=\"ltr\"><strong>Family Health History</strong></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">In case you have opted to walk down the pregnancy aisle with a donated egg/sperm, it becomes important to make sure with your IVF expert that besides passing the health-tests, the donor also has a clean family health history. Some major health problems, if any, in the family tree, must be known to you, even if it was in the grandparents.</p>\r\n\r\n<p dir=\"ltr\">The family health scan is necessary to be known to rule out the probability of any of the following running in the family tree:</p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><strong>Diabetes</strong>: Type 1 Diabetes, unfortunately, can&rsquo;t be prevented since it is genetic, but Type 2 can, with a healthy diet and apt physical exercise.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><strong>Glaucoma</strong>: Glaucoma may have a genetic link as well, and hence it is always better to know in case the donor has a history of glaucoma. Though glaucoma can&rsquo;t be completely prevented, it is better to know if it runs in the family tree so that it can be detected early and treated in time.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><strong>Malignant Melanoma</strong>: This is the most common and most critical form of skin cancer, which is known to run in the family tree. It is, hence always advised to check and ensure that the donor does not has any history of malignant melanoma in the family so that any odds can be strikeout right in the beginning.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><strong>Alzheimer&rsquo;s</strong>: There always lies a higher risk of developing Alzheimer&rsquo;s if it runs in the family. Thus, do confirm for the screen out of the same with your IVF expert before finalizing and accepting the sperm donation.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><strong>Allergy and Asthma</strong>: Asthma and certain allergies are also known to run in families. Hence, to ensure good health of the baby, it is always better to keep a check on any such issues with the donor.</p>\r\n	</li>\r\n	<li style=\"text-align:justify\"><strong>Depression</strong>: Though depression is often considered to be related to stress, it may be genetic as well, and thus it is always better to cross out any possibility of passing off of the same to the baby.</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\"><strong>General Health Screening&nbsp;</strong></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">The general screening basically comprises of physical examination, blood tests (including the ones to check out any existing genetic disorder, diabetes, hormonal disorders, etc.), Urine and Kidney Function Test, Complete Blood Count, Blood Pressure, as well as sexual health screening (infection testing).</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><strong>Infection Screening&nbsp;</strong></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">It is necessary to rule out any sexually transmitted infections, such as HIV, Hepatitis, Gonorrhoea, and Chlamydia.</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><strong>Genetic Screening&nbsp;</strong></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">Genetic screening forms one of the most important aspects of health check before proceeding for IVF treatment. We are sure you would agree that it would be the best to rule out a bad gene right from the beginning. It is hence recommended to ask for a screen-out for carriage of the Cystic Fibrosis gene and other such genetic disorders for the donor before taking any further steps towards the treatment.</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><strong>Semen Analysis</strong></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">This involves testing of the semen from the male partner to check for the sperm count, motility, and morphology, which serves as an important aspect impacting the probability of successful conception.</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">&nbsp;</p>\r\n', 'Health Screening', 'Health Screening', 'Health Screening', 0),
(67, 'Pregnancy Myths and Misconceptions', 'pregnancy-myths-and-misconceptions', 11, '<p dir=\"ltr\" style=\"text-align:center\"><span style=\"font-size:36px\"><strong>Pregnancy Myths and Misconceptions</strong></span></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">Cutting-edge fetal research and the advances in IVF technology are openly challenging some of the conventional myths prevalent in the society about pregnancy, and have resulted in producing certain findings that may surprise you.</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">We at WishABaby present here 20 myths that you must throw out of your lives as a preparation towards conceiving a healthy baby. Myths are nothing else but clutter in the brain, and only when this clutter is cleared off, that you can experience the joy of carrying a new life inside you.</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-size:20px\"><strong>Myth 1: Pregnant woman should be eating for two</strong></span></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><strong>REALITY</strong>: No scientific research has proved this so far. You need to eat a balanced diet rather than being a glutton. You can explore on the other pages on WishABaby to understand what is called a &lsquo;Healthy Diet&rsquo; and what kind of diet is ideal for an expecting mother.</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-size:20px\"><strong>Myth 2: Backaches are common during Pregnancy</strong></span></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><strong>REALITY</strong>: No! It is not so. Do some simple changes and you can avoid a lot of painful time. Firstly, pay attention on how you sit or stand. Don&rsquo;t arch your body. Avoid wearing high-heeled shoes since they force you to arch your back which puts a lot of pressure on the lower body. Also, go for pelvic rocking to give your back a breather. Do some Yoga under expert guidance and you are done!</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-size:20px\"><strong>Myth 3: Pregnant females should avoid physical exercise</strong></span></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><strong>REALITY</strong>: Actually, when a pregnant woman exercises, especially when she does Yoga, her fetus gets a beneficial workout that goes a long way in building healthy body cells. Fetuses of physically active pregnant women have better heart rates than those of less-active mothers. This is the best sign of the good cardiovascular health of the baby. Also, exercising mothers give birth to just the right-weight or at time lower weight babies but whose brains are bigger, leading to an intelligent adult at a later stage in life.</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-size:20px\"><strong>Myth 4: One should stay away from seafood during pregnancy</strong></span></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><strong>REALITY</strong>: It depends from woman to woman, since some are Allergic to sea-food and some aren&#39;t. But the fact is that eating lots of fish during pregnancy produces smarter and healthier babies. Fish is high in omega-3 fatty acids and low in mercury. And consuming these during pregnancy produces babies that have a high verbal IQ, better social &amp;communication skills, and superior motor skills. This has been quite much published already in various research journals across the globe.</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-size:20px\"><strong>Myth 5: Slow heart-rate means a boy and vice versa means a girl</strong></span></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><strong>REALITY</strong>: A developing baby&#39;s heart rate differs from day to day. It purely depends on the age of the fetus and the acidity level of the mother as well as that of the fetus on that particular day when it was monitored. Moreover, stress-related changes in the mother also affect the heart rate and blood pressure of her developing fetus.</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><strong>Myth 6: Conception is equal to a nine-month wait</strong></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><strong>REALITY</strong>: Pregnancy is not just a 9 months of wait but a crucial period. It is nothing less than a scientific wonder. It is the time when the baby is being developed inside the body. Not only that, but it is the base that serves to develop the baby&rsquo;s immunity to fight diseases ahead in life. No wonder it is the subject of an exploding number of science journals and medical conferences taking place regularly across the globe.</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-size:20px\"><strong>Myth 7: Focus on things that can go wrong during pregnancy</strong></span></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><strong>REALITY</strong>: There are no set parameters to predict what and when can go wrong. Studies are being conducted on this topic, and it has been so far found that it is actually the conditions in the womb that impact a lot of things. The prenatal period is the one where health-spring erupt both for the mother as well as the child, which also go a long way in determining the well-being of both after the childbirth. A lot of research is already taking place around the globe on the things that can be done to make these nine months the best possible time for a woman.</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-size:20px\"><strong>Myth 8: It is OK to drink once in a while</strong></span></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><strong>REALITY</strong>: A few sips during a champagne toast or abstaining from alcohol completely, is ultimately a personal decision. But, yes numerous studies have linked drinking during pregnancy with an increased risk of fetal alcohol spectrum disorders (FASDs). Medical experts backed by ample research say that pregnant woman should completely avoid alcohol during pregnancy. So if you are drinking or have been a heavy consumer of alcohol, then stay in constant touch with your gynecologist.</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-size:20px\"><strong>Myth 9: Indulge in enrichment activities like playing music</strong></span></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><strong>REALITY</strong>: The nine-month-long process is a crucial phase in preparing the baby to enter the outside world. As such, what is more important for the baby is to absorb the right kind of nutrients, emotions, and health hormones. Music and other such things come later to relax you and thus relax the child. Nutrition is primary, and so, the focus should be on your eating habits first.</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-size:20px\"><strong>Myth 10: Overweight babies are owing to family history or genetics</strong></span></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><strong>REALITY</strong>: Pregnant women should keep a check on their weight during pregnancy. Women who gain more weight than suggested, have four times the risk of having an overweight child. And this condition will persist during offspring&#39;s adolescence. So eat healthy, stay active, and stay fit during the nine months of pregnancy if you wish to have a fit and active child.</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:20px\"><strong>Myth 11: Stress during pregnancy is always bad for the fetus and the mother</strong></span></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><strong>REALITY</strong>: New research shows that a moderate level of stress is actually good for the fetus. It not only serves to tone the nervous system of the fetus but also accelerates its development. Women who experienced moderate stress during pregnancy, for instance, those who work in office till the last month, have been reported to have two-week-old infants with brains that work faster than infants of mothers without the same moderate stress.</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-size:20px\"><strong>Myth 12: Pregnancy must last nine months</strong></span></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><strong>REALITY</strong>: This depends from body to body and a woman&#39;s physical health. There are multiple factors that decide childbirth and not just the expected due date given by the doctor.</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:20px\"><strong>Myth 13: Intercourse during pregnancy risks the baby</strong></span></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><strong>REALITY</strong>: Go by the guidance of your doctor. You need not consider everything you hear from others as a rule. Each body is different and is unique.</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-size:20px\"><strong>Myth 14: Pregnant women must stay away from sweets</strong></span></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><strong>REALITY</strong>: Chocolate is a big exception to this rule. Many renowned international researchers have revealed that pregnant women who eat chocolate every day have babies who show less fear and comparative tend to panic less in life when confronted with tricky situations in life. What more? The chocolate-babies, as some doctors call them, are generally found to smile and laugh more often than others.</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:20px\"><strong>Myth 15: Women must strive for an ideal or perfect pregnancy</strong></span></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">REALITY: Nothing is perfect in life driven by science. An ideal pregnancy is a myth. Instead, aspire to experience the joy rather than a medal. It is, hence, always better to fully enjoy the personal experience of carrying a new life inside you, instead of staying worried for what is right and what is not.</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:20px\"><strong>Myth 16: All women must feel happy during pregnancy</strong></span></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><strong>REALITY</strong>: Studies show that pregnant women are just as likely to suffer mood disorders and even depression for no particular reason at times, as any other women. Psychiatrists estimate that about 20 percent of pregnant women experience anxiety or depression. So if you are pregnant, first of all, stop comparing yourself to any other pregnant woman around you, whether friends or family. And though mild stress at times is alright, in case you feel over depressed or too anxious, consult your doctor immediately. Therapy, Yoga, Meditation or even an antidepressant medication can help, whichever your doctor suggests. But do not pop pills at will; it will harm your baby.</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-size:20px\"><strong>Myth 17: Certain food leads to abortion</strong></span></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">REALITY: &nbsp;Common belief is that consuming papaya, pineapples, and eggs can induce abortion. It is, however, not so. As long as ripe fruits are consumed, there is no risk. Unless you are allergic to certain food items, you can include them in your diet in a healthy form. Eggs are a rich source of proteins and must be included in your diet unless you have a diagnosed allergy. However, in case you have any doubts regarding consumption of any particular food, it is always advised to consult with your doctor.</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-size:20px\"><strong>Myth 18: You need to prepare your nipples for breastfeeding</strong></span></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><strong>REALITY</strong>: No research supports this belief. &nbsp;Both mother and baby adapt to suckling with time. No classes or toughening of nipples by external suckling devices can teach you to be a feeding mother. But, yes, breast-stimulation surely induces better milk supply. You can read more about the same on our &quot;Induced Lactation&quot; page under &lsquo;Pregnancy&rsquo; tab.</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><span style=\"font-size:20px\"><strong>Myth 19: Baby-weight vanishes after delivery</strong></span></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><strong>REALITY</strong>: It happens only in movies or with the women belonging to glamour world who follow a rigorous workout. The fact is you will lose only 10-15 pounds in a month from delivery. And this is, in fact, the right way. A sudden fall in weight will harm you in the long run. So, eat healthy, think calm, and exercise as per your stamina. There is no need to body-shame yourself.</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:20px\"><strong>Myth 20: Stay away from pets during pregnancy</strong></span></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><strong>REALITY</strong>: Well, there is no need to give away your pets when you become pregnant. Yes, there is a disease called toxoplasmosis that does spread through cats and can be harmful if caught during pregnancy. But this happens only if you get into activities like removal of its feces without using gloves and mask. But, then that applies to gardening as well if you don&rsquo;t wear gloves and use a mask. In short, stay away from germs as far as possible but not your pets. Rather exchange a lot of love during pregnancy which would help you immensely to stay stress-free and happy.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n', 'Pregnancy Myths and Misconceptions', 'Pregnancy Myths and Misconceptions', 'Pregnancy Myths and Misconceptions', 0),
(69, 'Natural Fertility', 'natural-fertility', 6, '<p dir=\"ltr\" style=\"text-align:center\"><span style=\"font-size:36px\"><strong>Restoring Your Natural Fertility</strong></span></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">As you know, we, at WishABaby, are on a mission to help you experience the beautiful feeling of parenthood, and hence are here to connect you with the best of IVF experts and clinics near you who can help fill your laps with a sweet, little bundle of joy.</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">However, before you resort to opting for IVF treatments, donor-based conception, or surrogacy to, we would first of all advice you to ascertain if something can be done to restore the natural fertility of your body.</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">Yes, nature-care is the foremost thing you must try, and hence we would suggest you to give due consideration to the following before jumping off to the treatment and other procedures:</p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><strong>Healthy Lifestyle</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><strong>Detox Diet</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><strong>Self Fertility Massage</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><strong>Appropriate Nutrition and Diet</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><strong>Herbal Medicines</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><strong>Supplementation</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><strong>Acupuncture</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\" style=\"text-align:justify\"><strong>Mind and Body Therapies</strong></p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">And so on and so forth; whichever you pick, WishABaby will help you guide through it or connect you to the best one.</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">Many credible studies have proved the aforementioned aspects to have positively affected and boosted the natural fertility of the body. Reports have even revealed that using one or more of the above therapies can help double the pregnancy success rates from approximately 20% to almost 40%. Some studies have in fact reported up to 60% success rates in infertile females upon consumption of fertility boosting natural foods and supplements.</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">We, at WishABaby, do believe in miracles, and when miracles are backed by science and validated reports, they are always worth giving a try!</p>\r\n', 'Natural Fertility', 'Natural Fertility', 'Natural Fertility', 0);

-- --------------------------------------------------------

--
-- Table structure for table `subscriber`
--

CREATE TABLE `subscriber` (
  `s_id` int(11) NOT NULL,
  `s_email` varchar(255) NOT NULL,
  `s_name` varchar(255) NOT NULL,
  `s_dob` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscriber`
--

INSERT INTO `subscriber` (`s_id`, `s_email`, `s_name`, `s_dob`) VALUES
(1, 'paurush.ankit@gmail.com', 'paurush ankit', '0000-00-00'),
(2, 'paurush.ankit@gmail.com1', 'paurush ankit', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_fname` varchar(100) NOT NULL,
  `user_sname` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_pwd` varchar(255) NOT NULL,
  `user_pwd_request` tinyint(1) NOT NULL,
  `user_status` int(11) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `user_gender` varchar(15) NOT NULL,
  `user_dob` date NOT NULL,
  `user_country` varchar(100) NOT NULL,
  `user_application` varchar(100) NOT NULL,
  `user_clinic_name` text NOT NULL,
  `user_clinic_website` text NOT NULL,
  `user_image` text NOT NULL,
  `user_service` text NOT NULL,
  `user_expert_qualification` text NOT NULL,
  `user_expert_job` text NOT NULL,
  `user_expert_specality` text NOT NULL,
  `user_add_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_profile_status` int(11) NOT NULL,
  `user_about` text NOT NULL,
  `user_education` varchar(255) NOT NULL,
  `user_profession` varchar(255) NOT NULL,
  `user_adl1` text NOT NULL,
  `user_adl2` text NOT NULL,
  `user_city` varchar(100) NOT NULL,
  `user_state` varchar(100) NOT NULL,
  `user_pin` varchar(10) NOT NULL,
  `user_mobile` varchar(15) NOT NULL,
  `user_tel` varchar(15) NOT NULL,
  `user_religion` varchar(200) NOT NULL,
  `user_relationship` varchar(255) NOT NULL,
  `user_sexuality` varchar(255) NOT NULL,
  `user_fertiity_treatments` text NOT NULL,
  `user_infertility_investigation` text NOT NULL,
  `user_storage` text NOT NULL,
  `user_interest` text NOT NULL,
  `user_rating` int(11) NOT NULL,
  `user_count_rated` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_fname`, `user_sname`, `user_email`, `user_pwd`, `user_pwd_request`, `user_status`, `user_type`, `user_gender`, `user_dob`, `user_country`, `user_application`, `user_clinic_name`, `user_clinic_website`, `user_image`, `user_service`, `user_expert_qualification`, `user_expert_job`, `user_expert_specality`, `user_add_time`, `user_profile_status`, `user_about`, `user_education`, `user_profession`, `user_adl1`, `user_adl2`, `user_city`, `user_state`, `user_pin`, `user_mobile`, `user_tel`, `user_religion`, `user_relationship`, `user_sexuality`, `user_fertiity_treatments`, `user_infertility_investigation`, `user_storage`, `user_interest`, `user_rating`, `user_count_rated`) VALUES
(9, 'Paurush', 'Ankit1', 'paurushankit@gmail.com', '21feb1993', 0, 1, '1', 'Female', '1994-07-21', 'India', 'Single', '', '', 'Penguins.jpg', '', '', '', '', '2018-02-06 06:38:45', 0, 'everything u know', 'High School', 'Others', 'bbdit college, near drizzling land', 'duhai', 'Aurangabad', 'Bihar', '888888', '9876548976', '8765432323', 'Sikhism', 'Cohabitation', 'Transgender', '', '', '', 'N/A', 0, 0),
(10, 'paurush', 'ankit', 'clinic@gmail.com', '21feb1993', 0, 1, '3', '', '0000-00-00', 'India', '', '', '', '', 'Fertility Support', '', '', '', '2018-02-06 18:05:39', 0, '', '', '', '', '', 'Belgaum', 'Karnataka', '987654', '8976543876', '', '', '', '', '', '', '', '', 5, 1),
(11, 'Test Clinic', 'test', 'paurushankit5@gmail.com', '21feb1993', 0, 1, '2', '', '0000-00-00', 'India', '', 'Vijaya Clinic', 'http://wishababy.com/pride2/', 'Penguins.jpg', 'Fertility Clinics,Sperm / Cryo Banks,Fertility Support,Natural Fertility,Legal Services,Parenting Options,Counselling & Support,Complimentary / Holistic Therapy,Fertility and Baby Products,Baby and Breastfeeding Services,Baby and Parenting Groups', '', '', '', '2018-01-26 15:53:59', 0, 'Lorem ipsum dolor sit amet, legere suscipit ne nec, ut duo verear propriae vituperata, atqui assum et usu. Voluptua prodesset vel et, ne per elitr dignissim rationibus. Cum id possit quaerendum, cu usu alienum imperdiet consequat. Ea choro clita dicunt sit, novum antiopam ea vim, eum cu cibo nemore.  Ei purto doming pri, oblique apeirian ne sit. Legere audire nam ad, paulo graeci detraxit an vis. Ad nostrum mediocritatem vim, te ponderum sapientem torquatos mei. Ius at errem forensibus, cu quo quot euismod vivendo, corpora posidonium sadipscing no vis. Vel idque tibique eligendi cu, sed te nibh oporteat, cu vix iriure invidunt.  Duo ne simul constituto ullamcorper. Everti timeam incorrupte ne eum, affert minimum commune qui ex. Noster possit abhorreant cu sit, modo vide deseruisse in eos. Alii oblique nostrud duo eu. Id vis natum aliquam, usu no liber audiam voluptatibus.  Vix an soleat percipit. Et aeque mediocrem sea, an eos nusquam docendi. Et est placerat dignissim definitionem. Nostrud admodum his ut, nam te libris accumsan, vim nullam percipit ad.  Causae omittantur quo at. Nam agam perfecto praesent eu, at justo pertinax duo, corpora iudicabit dissentiet ne vis. Id vel tale brute perpetua, nam meis noluisse appellantur in. Pri ne odio possim quaerendum, no per facer integre perpetua, ei nec veritus salutatus constituam. Percipit consulatu deterruisset nam ne, est tollit percipitur ex.', '', '', '324567544', '324567544', 'Aurangabad', 'Bihar', '876543', '7877778787', '9876545678', '', '', '', 'Fertility Treatments:', 'Infertility investigation', 'Storage of sperms and eggs', '', 5, 1),
(12, 'Rajeev', 'shukla', 'surya@gmail.com', '21feb1993', 0, 1, '2', '', '0000-00-00', 'India', '', 'Surya Clinic', 'http://localhost/pride2/register', '19401947_1791582240869018_8880079957703657306_o.jpg', 'Natural Fertility', '', '', '', '2017-11-06 16:24:54', 0, 'Lorem ipsum dolor sit amet, legere suscipit ne nec, ut duo verear propriae vituperata, atqui assum et usu. Voluptua prodesset vel et, ne per elitr dignissim rationibus. Cum id possit quaerendum, cu usu alienum imperdiet consequat. Ea choro clita dicunt sit, novum antiopam ea vim, eum cu cibo nemore.Ei purto doming pri, oblique apeirian ne sit. Legere audire nam ad, paulo graeci detraxit an vis. Ad nostrum mediocritatem vim, te ponderum sapientem torquatos mei. Ius at errem forensibus, cu quo quot euismod vivendo, corpora posidonium sadipscing no vis. Vel idque tibique eligendi cu, sed te nibh oporteat, cu vix iriure invidunt.Duo ne simul constituto ullamcorper. Everti timeam incorrupte ne eum, affert minimum commune qui ex. Noster possit abhorreant cu sit, modo vide deseruisse in eos. Alii oblique nostrud duo eu. Id vis natum aliquam, usu no liber audiam voluptatibus.Vix an soleat percipit. Et aeque mediocrem sea, an eos nusquam docendi. Et est placerat dignissim definitionem. Nostrud admodum his ut, nam te libris accumsan, vim nullam percipit ad.Causae omittantur quo at. Nam agam perfecto praesent eu, at justo pertinax duo, corpora iudicabit dissentiet ne vis. Id vel tale brute perpetua, nam meis noluisse appellantur in. Pri ne odio possim quaerendum, no per facer integre perpetua, ei nec veritus salutatus constituam. Percipit consulatu deterruisset nam ne, est tollit percipitur ex.', '', '', 'bbdit college, near drizzling land', 'duhai', 'Aurangabad', 'Uttar Pradesh', '201206', '876543456', '8976543456', '', '', '', 'Lorem ipsum dolor sit amet, legere suscipit ne nec, ut duo verear propriae vituperata, atqui assum et usu. Voluptua prodesset vel et, ne per elitr dignissim rationibus. Cum id possit quaerendum, cu usu alienum imperdiet consequat. Ea choro clita dicunt sit, novum antiopam ea vim, eum cu cibo nemore.\r\n\r\nEi purto doming pri, oblique apeirian ne sit. Legere audire nam ad, paulo graeci detraxit an vis. Ad nostrum mediocritatem vim, te ponderum sapientem torquatos mei. Ius at errem forensibus, cu quo quot euismod vivendo, corpora posidonium sadipscing no vis. Vel idque tibique eligendi cu, sed te nibh oporteat, cu vix iriure invidunt.\r\n\r\nDuo ne simul constituto ullamcorper. Everti timeam incorrupte ne eum, affert minimum commune qui ex. Noster possit abhorreant cu sit, modo vide deseruisse in eos. Alii oblique nostrud duo eu. Id vis natum aliquam, usu no liber audiam voluptatibus.\r\n\r\nVix an soleat percipit. Et aeque mediocrem sea, an eos nusquam docendi. Et est placerat dignissim definitionem. Nostrud admodum his ut, nam te libris accumsan, vim nullam percipit ad.\r\n\r\nCausae omittantur quo at. Nam agam perfecto praesent eu, at justo pertinax duo, corpora iudicabit dissentiet ne vis. Id vel tale brute perpetua, nam meis noluisse appellantur in. Pri ne odio possim quaerendum, no per facer integre perpetua, ei nec veritus salutatus constituam. Percipit consulatu deterruisset nam ne, est tollit percipitur ex.', 'Lorem ipsum dolor sit amet, legere suscipit ne nec, ut duo verear propriae vituperata, atqui assum et usu. Voluptua prodesset vel et, ne per elitr dignissim rationibus. Cum id possit quaerendum, cu usu alienum imperdiet consequat. Ea choro clita dicunt sit, novum antiopam ea vim, eum cu cibo nemore.\r\n\r\nEi purto doming pri, oblique apeirian ne sit. Legere audire nam ad, paulo graeci detraxit an vis. Ad nostrum mediocritatem vim, te ponderum sapientem torquatos mei. Ius at errem forensibus, cu quo quot euismod vivendo, corpora posidonium sadipscing no vis. Vel idque tibique eligendi cu, sed te nibh oporteat, cu vix iriure invidunt.\r\n\r\nDuo ne simul constituto ullamcorper. Everti timeam incorrupte ne eum, affert minimum commune qui ex. Noster possit abhorreant cu sit, modo vide deseruisse in eos. Alii oblique nostrud duo eu. Id vis natum aliquam, usu no liber audiam voluptatibus.\r\n\r\nVix an soleat percipit. Et aeque mediocrem sea, an eos nusquam docendi. Et est placerat dignissim definitionem. Nostrud admodum his ut, nam te libris accumsan, vim nullam percipit ad.\r\n\r\nCausae omittantur quo at. Nam agam perfecto praesent eu, at justo pertinax duo, corpora iudicabit dissentiet ne vis. Id vel tale brute perpetua, nam meis noluisse appellantur in. Pri ne odio possim quaerendum, no per facer integre perpetua, ei nec veritus salutatus constituam. Percipit consulatu deterruisset nam ne, est tollit percipitur ex.', 'Lorem ipsum dolor sit amet, legere suscipit ne nec, ut duo verear propriae vituperata, atqui assum et usu. Voluptua prodesset vel et, ne per elitr dignissim rationibus. Cum id possit quaerendum, cu usu alienum imperdiet consequat. Ea choro clita dicunt sit, novum antiopam ea vim, eum cu cibo nemore.\r\n\r\nEi purto doming pri, oblique apeirian ne sit. Legere audire nam ad, paulo graeci detraxit an vis. Ad nostrum mediocritatem vim, te ponderum sapientem torquatos mei. Ius at errem forensibus, cu quo quot euismod vivendo, corpora posidonium sadipscing no vis. Vel idque tibique eligendi cu, sed te nibh oporteat, cu vix iriure invidunt.\r\n\r\nDuo ne simul constituto ullamcorper. Everti timeam incorrupte ne eum, affert minimum commune qui ex. Noster possit abhorreant cu sit, modo vide deseruisse in eos. Alii oblique nostrud duo eu. Id vis natum aliquam, usu no liber audiam voluptatibus.\r\n\r\nVix an soleat percipit. Et aeque mediocrem sea, an eos nusquam docendi. Et est placerat dignissim definitionem. Nostrud admodum his ut, nam te libris accumsan, vim nullam percipit ad.\r\n\r\nCausae omittantur quo at. Nam agam perfecto praesent eu, at justo pertinax duo, corpora iudicabit dissentiet ne vis. Id vel tale brute perpetua, nam meis noluisse appellantur in. Pri ne odio possim quaerendum, no per facer integre perpetua, ei nec veritus salutatus constituam. Percipit consulatu deterruisset nam ne, est tollit percipitur ex.', '', 0, 0),
(13, 'm dsm ,m ds,m', 'ms dm, dsm s,', 'mdsmdsm', '21feb1993', 0, 1, '2', '', '0000-00-00', '', '', 'Demo Clinic', '', '', 'Natural Fertility', '', '', '', '2017-11-09 07:19:13', 0, 'Lorem ipsum dolor sit amet, legere suscipit ne nec, ut duo verear propriae vituperata, atqui assum et usu. Voluptua prodesset vel et, ne per elitr dignissim rationibus. Cum id possit quaerendum, cu usu alienum imperdiet consequat. Ea choro clita dicunt sit, novum antiopam ea vim, eum cu cibo nemore.Ei purto doming pri, oblique apeirian ne sit. Legere audire nam ad, paulo graeci detraxit an vis. Ad nostrum mediocritatem vim, te ponderum sapientem torquatos mei. Ius at errem forensibus, cu quo quot euismod vivendo, corpora posidonium sadipscing no vis. Vel idque tibique eligendi cu, sed te nibh oporteat, cu vix iriure invidunt.Duo ne simul constituto ullamcorper. Everti timeam incorrupte ne eum, affert minimum commune qui ex. Noster possit abhorreant cu sit, modo vide deseruisse in eos. Alii oblique nostrud duo eu. Id vis natum aliquam, usu no liber audiam voluptatibus.Vix an soleat percipit. Et aeque mediocrem sea, an eos nusquam docendi. Et est placerat dignissim definitionem. Nostrud admodum his ut, nam te libris accumsan, vim nullam percipit ad.Causae omittantur quo at. Nam agam perfecto praesent eu, at justo pertinax duo, corpora iudicabit dissentiet ne vis. Id vel tale brute perpetua, nam meis noluisse appellantur in. Pri ne odio possim quaerendum, no per facer integre perpetua, ei nec veritus salutatus constituam. Percipit consulatu deterruisset nam ne, est tollit percipitur ex.', '', '', '', '', 'Aurangabad', 'Bihar', '', '', '', '', '', '', '', '', '', '', 0, 0),
(14, 'vfvbbq', 'jbnnnn', 'bhbhbbh', '21feb1993', 0, 1, '2', '', '0000-00-00', '', '', 'Parents PAradise', '', '', 'Natural Fertility', '', '', '', '2017-11-09 07:19:22', 0, 'Lorem ipsum dolor sit amet, legere suscipit ne nec, ut duo verear propriae vituperata, atqui assum et usu. Voluptua prodesset vel et, ne per elitr dignissim rationibus. Cum id possit quaerendum, cu usu alienum imperdiet consequat. Ea choro clita dicunt sit, novum antiopam ea vim, eum cu cibo nemore.Ei purto doming pri, oblique apeirian ne sit. Legere audire nam ad, paulo graeci detraxit an vis. Ad nostrum mediocritatem vim, te ponderum sapientem torquatos mei. Ius at errem forensibus, cu quo quot euismod vivendo, corpora posidonium sadipscing no vis. Vel idque tibique eligendi cu, sed te nibh oporteat, cu vix iriure invidunt.Duo ne simul constituto ullamcorper. Everti timeam incorrupte ne eum, affert minimum commune qui ex. Noster possit abhorreant cu sit, modo vide deseruisse in eos. Alii oblique nostrud duo eu. Id vis natum aliquam, usu no liber audiam voluptatibus.Vix an soleat percipit. Et aeque mediocrem sea, an eos nusquam docendi. Et est placerat dignissim definitionem. Nostrud admodum his ut, nam te libris accumsan, vim nullam percipit ad.Causae omittantur quo at. Nam agam perfecto praesent eu, at justo pertinax duo, corpora iudicabit dissentiet ne vis. Id vel tale brute perpetua, nam meis noluisse appellantur in. Pri ne odio possim quaerendum, no per facer integre perpetua, ei nec veritus salutatus constituam. Percipit consulatu deterruisset nam ne, est tollit percipitur ex.', '', '', '', '', 'Aurangabad', 'Bihar', '', '', '', '', '', '', '', '', '', '', 0, 0),
(15, 'paurush', 'ankit', 'paurushankit@gmail.com', '21feb1993', 0, 1, '2', '', '0000-00-00', '', '', 'Wish A Baby', '', '', 'Natural Fertility', '', '', '', '2017-11-09 07:19:39', 0, 'Lorem ipsum dolor sit amet, legere suscipit ne nec, ut duo verear propriae vituperata, atqui assum et usu. Voluptua prodesset vel et, ne per elitr dignissim rationibus. Cum id possit quaerendum, cu usu alienum imperdiet consequat. Ea choro clita dicunt sit, novum antiopam ea vim, eum cu cibo nemore.Ei purto doming pri, oblique apeirian ne sit. Legere audire nam ad, paulo graeci detraxit an vis. Ad nostrum mediocritatem vim, te ponderum sapientem torquatos mei. Ius at errem forensibus, cu quo quot euismod vivendo, corpora posidonium sadipscing no vis. Vel idque tibique eligendi cu, sed te nibh oporteat, cu vix iriure invidunt.Duo ne simul constituto ullamcorper. Everti timeam incorrupte ne eum, affert minimum commune qui ex. Noster possit abhorreant cu sit, modo vide deseruisse in eos. Alii oblique nostrud duo eu. Id vis natum aliquam, usu no liber audiam voluptatibus.Vix an soleat percipit. Et aeque mediocrem sea, an eos nusquam docendi. Et est placerat dignissim definitionem. Nostrud admodum his ut, nam te libris accumsan, vim nullam percipit ad.Causae omittantur quo at. Nam agam perfecto praesent eu, at justo pertinax duo, corpora iudicabit dissentiet ne vis. Id vel tale brute perpetua, nam meis noluisse appellantur in. Pri ne odio possim quaerendum, no per facer integre perpetua, ei nec veritus salutatus constituam. Percipit consulatu deterruisset nam ne, est tollit percipitur ex.', '', '', '', '', 'Aurangabad', 'Bihar', '', '', '', '', '', '', '', '', '', '', 0, 0),
(16, 'Vijaya', 'Clinic', 'paurushankit5@gmail.com', '21feb1993', 0, 1, '2', '', '0000-00-00', '', '', 'Vijaya Clinic', 'http://localhost/phpmyadmin/#PMAURL-0:index.php?db=&table=&server=1&target=&token=ef199d25b42eb7d6cdcc5f5964dd0b65', '', 'Natural Fertility', '', '', '', '2018-01-04 19:06:22', 0, 'Lorem ipsum dolor sit amet, legere suscipit ne nec, ut duo verear propriae vituperata, atqui assum et usu. Voluptua prodesset vel et, ne per elitr dignissim rationibus. Cum id possit quaerendum, cu usu alienum imperdiet consequat. Ea choro clita dicunt sit, novum antiopam ea vim, eum cu cibo nemore.Ei purto doming pri, oblique apeirian ne sit. Legere audire nam ad, paulo graeci detraxit an vis. Ad nostrum mediocritatem vim, te ponderum sapientem torquatos mei. Ius at errem forensibus, cu quo quot euismod vivendo, corpora posidonium sadipscing no vis. Vel idque tibique eligendi cu, sed te nibh oporteat, cu vix iriure invidunt.Duo ne simul constituto ullamcorper. Everti timeam incorrupte ne eum, affert minimum commune qui ex. Noster possit abhorreant cu sit, modo vide deseruisse in eos. Alii oblique nostrud duo eu. Id vis natum aliquam, usu no liber audiam voluptatibus.Vix an soleat percipit. Et aeque mediocrem sea, an eos nusquam docendi. Et est placerat dignissim definitionem. Nostrud admodum his ut, nam te libris accumsan, vim nullam percipit ad.Causae omittantur quo at. Nam agam perfecto praesent eu, at justo pertinax duo, corpora iudicabit dissentiet ne vis. Id vel tale brute perpetua, nam meis noluisse appellantur in. Pri ne odio possim quaerendum, no per facer integre perpetua, ei nec veritus salutatus constituam. Percipit consulatu deterruisset nam ne, est tollit percipitur ex.', '', '', '', '', 'Aurangabad', 'Bihar', '', '', '', '', '', '', '', '', '', '', 0, 0),
(17, 'Shyama', 'Clinic', 'shyamaclinic@gmail.com', '21feb1993', 0, 1, '2', '', '0000-00-00', '', '', 'Shyama Clinic', 'http://localhost/phpmyadmin/#PMAURL-0:index.php?db=&table=&server=1&target=&token=ef199d25b42eb7d6cdcc5f5964dd0b65', '', 'Natural Fertility', '', '', '', '2017-11-06 16:25:32', 0, 'Lorem ipsum dolor sit amet, legere suscipit ne nec, ut duo verear propriae vituperata, atqui assum et usu. Voluptua prodesset vel et, ne per elitr dignissim rationibus. Cum id possit quaerendum, cu usu alienum imperdiet consequat. Ea choro clita dicunt sit, novum antiopam ea vim, eum cu cibo nemore.Ei purto doming pri, oblique apeirian ne sit. Legere audire nam ad, paulo graeci detraxit an vis. Ad nostrum mediocritatem vim, te ponderum sapientem torquatos mei. Ius at errem forensibus, cu quo quot euismod vivendo, corpora posidonium sadipscing no vis. Vel idque tibique eligendi cu, sed te nibh oporteat, cu vix iriure invidunt.Duo ne simul constituto ullamcorper. Everti timeam incorrupte ne eum, affert minimum commune qui ex. Noster possit abhorreant cu sit, modo vide deseruisse in eos. Alii oblique nostrud duo eu. Id vis natum aliquam, usu no liber audiam voluptatibus.Vix an soleat percipit. Et aeque mediocrem sea, an eos nusquam docendi. Et est placerat dignissim definitionem. Nostrud admodum his ut, nam te libris accumsan, vim nullam percipit ad.Causae omittantur quo at. Nam agam perfecto praesent eu, at justo pertinax duo, corpora iudicabit dissentiet ne vis. Id vel tale brute perpetua, nam meis noluisse appellantur in. Pri ne odio possim quaerendum, no per facer integre perpetua, ei nec veritus salutatus constituam. Percipit consulatu deterruisset nam ne, est tollit percipitur ex.', '', '', '', '', 'Aurangabad', 'Bihar', '', '', '', '', '', '', '', '', '', '', 0, 0),
(18, 'raja', 'Clinic', 'rajaclinic@gmail.com', '21feb1993', 0, 1, '2', '', '0000-00-00', '', '', 'Raja Clinic', 'http://localhost/pride2/register', '', 'Sperm / cryo Banks', '', '', '', '2017-11-06 16:25:34', 0, 'Lorem ipsum dolor sit amet, legere suscipit ne nec, ut duo verear propriae vituperata, atqui assum et usu. Voluptua prodesset vel et, ne per elitr dignissim rationibus. Cum id possit quaerendum, cu usu alienum imperdiet consequat. Ea choro clita dicunt sit, novum antiopam ea vim, eum cu cibo nemore.Ei purto doming pri, oblique apeirian ne sit. Legere audire nam ad, paulo graeci detraxit an vis. Ad nostrum mediocritatem vim, te ponderum sapientem torquatos mei. Ius at errem forensibus, cu quo quot euismod vivendo, corpora posidonium sadipscing no vis. Vel idque tibique eligendi cu, sed te nibh oporteat, cu vix iriure invidunt.Duo ne simul constituto ullamcorper. Everti timeam incorrupte ne eum, affert minimum commune qui ex. Noster possit abhorreant cu sit, modo vide deseruisse in eos. Alii oblique nostrud duo eu. Id vis natum aliquam, usu no liber audiam voluptatibus.Vix an soleat percipit. Et aeque mediocrem sea, an eos nusquam docendi. Et est placerat dignissim definitionem. Nostrud admodum his ut, nam te libris accumsan, vim nullam percipit ad.Causae omittantur quo at. Nam agam perfecto praesent eu, at justo pertinax duo, corpora iudicabit dissentiet ne vis. Id vel tale brute perpetua, nam meis noluisse appellantur in. Pri ne odio possim quaerendum, no per facer integre perpetua, ei nec veritus salutatus constituam. Percipit consulatu deterruisset nam ne, est tollit percipitur ex.', '', '', '', '', 'Aurangabad', 'Bihar', '', '', '', '', '', '', '', '', '', '', 0, 0),
(19, 'Appolo', 'Clinic', 'appolo@gmail.com', '21feb1993', 0, 1, '2', '', '0000-00-00', '', '', 'Apollo Clinic', 'http://localhost/pride2/register', '', 'Natural Fertility', '', '', '', '2017-11-06 16:25:36', 0, 'Lorem ipsum dolor sit amet, legere suscipit ne nec, ut duo verear propriae vituperata, atqui assum et usu. Voluptua prodesset vel et, ne per elitr dignissim rationibus. Cum id possit quaerendum, cu usu alienum imperdiet consequat. Ea choro clita dicunt sit, novum antiopam ea vim, eum cu cibo nemore.Ei purto doming pri, oblique apeirian ne sit. Legere audire nam ad, paulo graeci detraxit an vis. Ad nostrum mediocritatem vim, te ponderum sapientem torquatos mei. Ius at errem forensibus, cu quo quot euismod vivendo, corpora posidonium sadipscing no vis. Vel idque tibique eligendi cu, sed te nibh oporteat, cu vix iriure invidunt.Duo ne simul constituto ullamcorper. Everti timeam incorrupte ne eum, affert minimum commune qui ex. Noster possit abhorreant cu sit, modo vide deseruisse in eos. Alii oblique nostrud duo eu. Id vis natum aliquam, usu no liber audiam voluptatibus.Vix an soleat percipit. Et aeque mediocrem sea, an eos nusquam docendi. Et est placerat dignissim definitionem. Nostrud admodum his ut, nam te libris accumsan, vim nullam percipit ad.Causae omittantur quo at. Nam agam perfecto praesent eu, at justo pertinax duo, corpora iudicabit dissentiet ne vis. Id vel tale brute perpetua, nam meis noluisse appellantur in. Pri ne odio possim quaerendum, no per facer integre perpetua, ei nec veritus salutatus constituam. Percipit consulatu deterruisset nam ne, est tollit percipitur ex.', '', '', '', '', 'Aurangabad', 'Bihar', '', '', '', '', '', '', '', '', '', '', 0, 0),
(20, 'Apollo', 'Clinic', 'apolloclinic1@gmail.com', '21feb1993', 0, 1, '2', '', '0000-00-00', '', '', 'Apollo Clinic', 'http://localhost/pride2/register', '', 'Natural Fertility', '', '', '', '2017-11-06 16:25:38', 0, 'Lorem ipsum dolor sit amet, legere suscipit ne nec, ut duo verear propriae vituperata, atqui assum et usu. Voluptua prodesset vel et, ne per elitr dignissim rationibus. Cum id possit quaerendum, cu usu alienum imperdiet consequat. Ea choro clita dicunt sit, novum antiopam ea vim, eum cu cibo nemore.Ei purto doming pri, oblique apeirian ne sit. Legere audire nam ad, paulo graeci detraxit an vis. Ad nostrum mediocritatem vim, te ponderum sapientem torquatos mei. Ius at errem forensibus, cu quo quot euismod vivendo, corpora posidonium sadipscing no vis. Vel idque tibique eligendi cu, sed te nibh oporteat, cu vix iriure invidunt.Duo ne simul constituto ullamcorper. Everti timeam incorrupte ne eum, affert minimum commune qui ex. Noster possit abhorreant cu sit, modo vide deseruisse in eos. Alii oblique nostrud duo eu. Id vis natum aliquam, usu no liber audiam voluptatibus.Vix an soleat percipit. Et aeque mediocrem sea, an eos nusquam docendi. Et est placerat dignissim definitionem. Nostrud admodum his ut, nam te libris accumsan, vim nullam percipit ad.Causae omittantur quo at. Nam agam perfecto praesent eu, at justo pertinax duo, corpora iudicabit dissentiet ne vis. Id vel tale brute perpetua, nam meis noluisse appellantur in. Pri ne odio possim quaerendum, no per facer integre perpetua, ei nec veritus salutatus constituam. Percipit consulatu deterruisset nam ne, est tollit percipitur ex.', '', '', '', '', 'Aurangabad', 'Bihar', '', '', '', '', '', '', '', '', '', '', 0, 0),
(21, 'Apollo', 'Clinic', 'apolloclinic2@gmail.com', '21feb1993', 0, 1, '2', '', '0000-00-00', '', '', 'Apollo Clinic', 'http://localhost/pride2/register', '', 'Natural Fertility', '', '', '', '2017-11-06 16:25:40', 0, 'Lorem ipsum dolor sit amet, legere suscipit ne nec, ut duo verear propriae vituperata, atqui assum et usu. Voluptua prodesset vel et, ne per elitr dignissim rationibus. Cum id possit quaerendum, cu usu alienum imperdiet consequat. Ea choro clita dicunt sit, novum antiopam ea vim, eum cu cibo nemore.Ei purto doming pri, oblique apeirian ne sit. Legere audire nam ad, paulo graeci detraxit an vis. Ad nostrum mediocritatem vim, te ponderum sapientem torquatos mei. Ius at errem forensibus, cu quo quot euismod vivendo, corpora posidonium sadipscing no vis. Vel idque tibique eligendi cu, sed te nibh oporteat, cu vix iriure invidunt.Duo ne simul constituto ullamcorper. Everti timeam incorrupte ne eum, affert minimum commune qui ex. Noster possit abhorreant cu sit, modo vide deseruisse in eos. Alii oblique nostrud duo eu. Id vis natum aliquam, usu no liber audiam voluptatibus.Vix an soleat percipit. Et aeque mediocrem sea, an eos nusquam docendi. Et est placerat dignissim definitionem. Nostrud admodum his ut, nam te libris accumsan, vim nullam percipit ad.Causae omittantur quo at. Nam agam perfecto praesent eu, at justo pertinax duo, corpora iudicabit dissentiet ne vis. Id vel tale brute perpetua, nam meis noluisse appellantur in. Pri ne odio possim quaerendum, no per facer integre perpetua, ei nec veritus salutatus constituam. Percipit consulatu deterruisset nam ne, est tollit percipitur ex.', '', '', '', '', 'Aurangabad', 'Bihar', '', '', '', '', '', '', '', '', '', '', 0, 0),
(22, 'Apollo', 'Clinic', 'apolloclinic3@gmail.com', '21feb1993', 0, 1, '2', '', '0000-00-00', '', '', 'Apollo Clinic', 'http://localhost/pride2/register', '', 'Natural Fertility', '', '', '', '2017-11-06 16:25:42', 0, 'Lorem ipsum dolor sit amet, legere suscipit ne nec, ut duo verear propriae vituperata, atqui assum et usu. Voluptua prodesset vel et, ne per elitr dignissim rationibus. Cum id possit quaerendum, cu usu alienum imperdiet consequat. Ea choro clita dicunt sit, novum antiopam ea vim, eum cu cibo nemore.Ei purto doming pri, oblique apeirian ne sit. Legere audire nam ad, paulo graeci detraxit an vis. Ad nostrum mediocritatem vim, te ponderum sapientem torquatos mei. Ius at errem forensibus, cu quo quot euismod vivendo, corpora posidonium sadipscing no vis. Vel idque tibique eligendi cu, sed te nibh oporteat, cu vix iriure invidunt.Duo ne simul constituto ullamcorper. Everti timeam incorrupte ne eum, affert minimum commune qui ex. Noster possit abhorreant cu sit, modo vide deseruisse in eos. Alii oblique nostrud duo eu. Id vis natum aliquam, usu no liber audiam voluptatibus.Vix an soleat percipit. Et aeque mediocrem sea, an eos nusquam docendi. Et est placerat dignissim definitionem. Nostrud admodum his ut, nam te libris accumsan, vim nullam percipit ad.Causae omittantur quo at. Nam agam perfecto praesent eu, at justo pertinax duo, corpora iudicabit dissentiet ne vis. Id vel tale brute perpetua, nam meis noluisse appellantur in. Pri ne odio possim quaerendum, no per facer integre perpetua, ei nec veritus salutatus constituam. Percipit consulatu deterruisset nam ne, est tollit percipitur ex.', '', '', '', '', 'Aurangabad', 'Bihar', '', '', '', '', '', '', '', '', '', '', 0, 0),
(23, 'Apollo', 'Clinic', 'apollocinic4@gmail.com', '21feb1993', 0, 1, '2', '', '0000-00-00', '', '', 'Apollo Clinic', 'http://localhost/pride2/register', '', 'Natural Fertility', '', '', '', '2017-11-06 16:25:44', 0, 'Lorem ipsum dolor sit amet, legere suscipit ne nec, ut duo verear propriae vituperata, atqui assum et usu. Voluptua prodesset vel et, ne per elitr dignissim rationibus. Cum id possit quaerendum, cu usu alienum imperdiet consequat. Ea choro clita dicunt sit, novum antiopam ea vim, eum cu cibo nemore.Ei purto doming pri, oblique apeirian ne sit. Legere audire nam ad, paulo graeci detraxit an vis. Ad nostrum mediocritatem vim, te ponderum sapientem torquatos mei. Ius at errem forensibus, cu quo quot euismod vivendo, corpora posidonium sadipscing no vis. Vel idque tibique eligendi cu, sed te nibh oporteat, cu vix iriure invidunt.Duo ne simul constituto ullamcorper. Everti timeam incorrupte ne eum, affert minimum commune qui ex. Noster possit abhorreant cu sit, modo vide deseruisse in eos. Alii oblique nostrud duo eu. Id vis natum aliquam, usu no liber audiam voluptatibus.Vix an soleat percipit. Et aeque mediocrem sea, an eos nusquam docendi. Et est placerat dignissim definitionem. Nostrud admodum his ut, nam te libris accumsan, vim nullam percipit ad.Causae omittantur quo at. Nam agam perfecto praesent eu, at justo pertinax duo, corpora iudicabit dissentiet ne vis. Id vel tale brute perpetua, nam meis noluisse appellantur in. Pri ne odio possim quaerendum, no per facer integre perpetua, ei nec veritus salutatus constituam. Percipit consulatu deterruisset nam ne, est tollit percipitur ex.', '', '', '', '', 'Aurangabad', 'Bihar', '', '', '', '', '', '', '', '', '', '', 0, 0),
(24, 'Apollo', 'Clinic', 'apolloclinic4@gmail.com', '21feb1993', 0, 1, '2', '', '0000-00-00', '', '', 'Apollo Clinic', 'http://localhost/pride2/register', '', 'Natural Fertility', '', '', '', '2017-11-06 16:25:47', 0, 'Lorem ipsum dolor sit amet, legere suscipit ne nec, ut duo verear propriae vituperata, atqui assum et usu. Voluptua prodesset vel et, ne per elitr dignissim rationibus. Cum id possit quaerendum, cu usu alienum imperdiet consequat. Ea choro clita dicunt sit, novum antiopam ea vim, eum cu cibo nemore.Ei purto doming pri, oblique apeirian ne sit. Legere audire nam ad, paulo graeci detraxit an vis. Ad nostrum mediocritatem vim, te ponderum sapientem torquatos mei. Ius at errem forensibus, cu quo quot euismod vivendo, corpora posidonium sadipscing no vis. Vel idque tibique eligendi cu, sed te nibh oporteat, cu vix iriure invidunt.Duo ne simul constituto ullamcorper. Everti timeam incorrupte ne eum, affert minimum commune qui ex. Noster possit abhorreant cu sit, modo vide deseruisse in eos. Alii oblique nostrud duo eu. Id vis natum aliquam, usu no liber audiam voluptatibus.Vix an soleat percipit. Et aeque mediocrem sea, an eos nusquam docendi. Et est placerat dignissim definitionem. Nostrud admodum his ut, nam te libris accumsan, vim nullam percipit ad.Causae omittantur quo at. Nam agam perfecto praesent eu, at justo pertinax duo, corpora iudicabit dissentiet ne vis. Id vel tale brute perpetua, nam meis noluisse appellantur in. Pri ne odio possim quaerendum, no per facer integre perpetua, ei nec veritus salutatus constituam. Percipit consulatu deterruisset nam ne, est tollit percipitur ex.', '', '', '', '', 'Aurangabad', 'Bihar', '', '', '', '', '', '', '', '', '', '', 0, 0),
(25, 'Anoop', 'Mundhra', 'anoop.mundhra@edelytics.com', 'sayesha', 0, 1, '1', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '2017-11-15 13:56:17', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0),
(26, 'Vaidehi', 'Desai', 'vaidehidesai44@gmail.com', '123456', 0, 1, '1', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '2017-11-18 10:56:39', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0),
(27, 'Abir', 'Mukherjee', 'abirmukherjee1706@gmail.com', 'abir2306', 0, 1, '1', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '2017-11-19 13:11:00', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0),
(28, 'Ramesh', 'Singh', 'ankit@gmail.com', '21feb1993', 0, 1, '3', '', '0000-00-00', 'India', '', '', 'http://localhost/pride2/expert/profile', 'Penguins.jpg', 'Fertility Clinics,Sperm / Cryo Banks,Fertility Support,Natural Fertility,Legal Services,Parenting Options,Health Screening,Counselling & Support,Complimentary / Holistic Therapy,Fertility and Baby Products,Baby and Breastfeeding Services,Baby and Parenting Groups,Childcare / Education', 'Clinical Social Worker, Couple and Family Therapist, Owner of FamART - books for family buildingExpert Qualification', 'Expert IVF Consultant', 'Natural Fertility', '2018-01-26 15:52:14', 0, 'I have been working as a fertility counsellor for over 20 years. I am owner of the publishing company FamART, for books for family building: www.famart.de/en/\r\nCounselling for homosexual, heterosexual couples and individuals in Germany, also via Skype and telephone.I have been working as a fertility counsellor for over 20 years. I am owner of the publishing company FamART, for books for family building: www.famart.de/en/\r\nCounselling for homosexual, heterosexual couples and individuals in Germany, also via Skype and telephone.\r\n', '', '', 'test address', 'duhai', 'Belgaum', 'Karnataka', '560100', '9123404017', '7531855399', '', '', '', '', '', '', '', 4, 1),
(29, 'Shyam', 'Singh', 'expert2@gmail.com', '21feb1993', 0, 1, '3', '', '0000-00-00', 'India', '', '', '', '', 'Natural Fertility', 'Expert Qualification', 'Expert IVF Consultant', 'Natural Fertility', '2017-11-24 07:46:18', 0, '', '', '', '', '', 'Belgaum', 'Karnataka', '', '8976543567', '67546789', '', '', '', '', '', '', '', 0, 0),
(30, 'Rakesh', 'Kumar', 'expert3@gmail.com', '21feb1993', 0, 1, '3', '', '0000-00-00', 'India', '', '', '', '', 'Natural Fertility', 'Expert Qualification', 'Expert IVF Consultant', 'Natural Fertility', '2017-11-24 07:49:13', 0, '', '', '', '', '', 'Belgaum', 'Karnataka', '', '987654356789', '', '', '', '', '', '', '', '', 0, 0),
(31, 'Megha', 'Thakur', 'expert4@gmail.com', '21feb1993', 0, 1, '3', '', '0000-00-00', 'India', '', '', '', '', 'Fertility Support', 'Expert Qualification', 'Expert IVF Consultant', 'Fertility Support', '2017-12-19 20:18:44', 0, '', '', '', '', '', 'Belgaum', 'Karnataka', '', '7777777777', '', '', '', '', '', '', '', '', 0, 0),
(33, 'jkhghjnk', 'jiuhjygfhjlk', 'jdsbbsnd@gmail.com', '21feb1993', 0, 1, '1', 'Male', '1992-12-12', '', '', '', '', '', '', '', '', '', '2017-12-15 10:18:50', 0, '', '', '', 'nbvcvjhl', 'njhvghjbkn', 'Bethamcherla', 'Arunachal Pradesh', '', '', '', '', '', '', '', '', '', '', 0, 0),
(34, 'shiva', 'Nayak', 'shiva@gmail.com', '21feb1993', 0, 1, '1', 'Male', '1994-07-21', '', '', '', '', '', '', '', '', '', '2018-02-05 12:42:32', 0, '', '', '', 'Tyagi Hostel', 'Duhai, Ghaziabad', 'Greater Noida', 'Uttar Pradesh', '', '', '', '', '', '', '', '', '', '', 0, 0),
(35, 'shiva', 'Nayalk', 'shiv1a@gmail.com', '21feb1993', 0, 1, '1', 'Male', '1994-07-21', '', '', '', '', '', '', '', '', '', '2018-02-05 12:44:22', 0, '', '', '', 'Tyagi Hostel', 'Duhai, Ghaziabad', 'Greater Noida', 'Uttar Pradesh', '', '', '', '', '', '', '', '', '', '', 0, 0),
(36, 'Shiva ', 'Nayak', 'shiva2@gmail.com', '21feb1993', 0, 1, '1', 'Male', '1994-07-21', '', '', '', '', '', '', '', '', '', '2018-02-05 12:48:07', 0, '', '', '', 'Tyagi Hostel', 'Duhai, Ghaziabad', 'Greater Noida', 'Uttar Pradesh', '', '', '', '', '', '', '', '', '', '', 0, 0),
(37, 'Shiva', 'Nayak', 'shiva3@gmail.com', '21feb1993', 0, 1, '1', 'Male', '1994-07-21', '', '', '', '', '', '', '', '', '', '2018-02-05 12:51:56', 0, '', '', '', 'Tyagi Hostel', 'Duhai, Ghaziabad', 'Greater Noida', 'Uttar Pradesh', '', '', '', '', '', '', '', '', '', '', 0, 0),
(38, 'Shiba', 'Nayak', 'shiva4@gmail.com', '21feb1993', 0, 1, '1', 'Male', '1994-07-21', '', '', '', '', '', '', '', '', '', '2018-02-05 12:54:20', 0, '', '', '', 'Tyagi Hostel', 'Duhai, Ghaziabad', 'Greater Noida', 'Uttar Pradesh', '', '', '', '', '', '', '', '', '', '', 0, 0),
(39, 'Shiva', 'NAyak', 'shiva5@gmail.com', '21feb1993', 0, 1, '1', 'Male', '1994-07-21', '', '', '', '', '', '', '', '', '', '2018-02-05 12:55:50', 0, '', '', '', 'Tyagi Hostel', 'Duhai, Ghaziabad', 'Greater Noida', 'Uttar Pradesh', '', '', '', '', '', '', '', '', '', '', 0, 0),
(40, 'Shanti', 'Kumari', 'shanti@gmail.com', '21feb1993', 0, 1, '1', 'Male', '0994-02-07', '', '', '', '', '', '', '', '', '', '2018-02-06 06:34:01', 0, '', '', '', 't', 'g', 'Greater Noida', 'Uttar Pradesh', '', '', '', '', '', '', '', '', '', '', 0, 0),
(41, 'paurush', 'ankit', 'paurush.ankit@gmail.com', '21feb1993', 0, 1, '1', 'Male', '1994-07-21', '', '', '', '', '', '', '', '', '', '2018-02-06 06:39:11', 0, '', '', '', 't', 'g', 'Greater Noida', 'Uttar Pradesh', '', '', '', '', '', '', '', '', '', '', 0, 0),
(42, 'test', 'singh', 'test1@gmail.com', 'admin', 0, 1, '1', 'Male', '1994-07-21', '', '', '', '', '', '', '', '', '', '2018-02-06 08:59:44', 0, '', '', '', 't', 'g', 'Greater Noida', 'Uttar Pradesh', '', '', '', '', '', '', '', '', '', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `weight`
--

CREATE TABLE `weight` (
  `weight_id` int(11) NOT NULL,
  `weight_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`ans_id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`ap_id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`),
  ADD UNIQUE KEY `blog_slug` (`blog_slug`);

--
-- Indexes for table `callback`
--
ALTER TABLE `callback`
  ADD PRIMARY KEY (`call_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `clinic_service`
--
ALTER TABLE `clinic_service`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `height`
--
ALTER TABLE `height`
  ADD PRIMARY KEY (`height_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `nestedmenu`
--
ALTER TABLE `nestedmenu`
  ADD PRIMARY KEY (`nest_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `quote`
--
ALTER TABLE `quote`
  ADD PRIMARY KEY (`quote_id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo`
--
ALTER TABLE `seo`
  ADD PRIMARY KEY (`seo_id`);

--
-- Indexes for table `submenu`
--
ALTER TABLE `submenu`
  ADD PRIMARY KEY (`submenu_id`);

--
-- Indexes for table `subscriber`
--
ALTER TABLE `subscriber`
  ADD PRIMARY KEY (`s_id`),
  ADD UNIQUE KEY `s_email` (`s_email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `ans_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `ap_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `callback`
--
ALTER TABLE `callback`
  MODIFY `call_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1639;

--
-- AUTO_INCREMENT for table `clinic_service`
--
ALTER TABLE `clinic_service`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=246;

--
-- AUTO_INCREMENT for table `height`
--
ALTER TABLE `height`
  MODIFY `height_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `nestedmenu`
--
ALTER TABLE `nestedmenu`
  MODIFY `nest_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `quote`
--
ALTER TABLE `quote`
  MODIFY `quote_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seo`
--
ALTER TABLE `seo`
  MODIFY `seo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `submenu`
--
ALTER TABLE `submenu`
  MODIFY `submenu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `subscriber`
--
ALTER TABLE `subscriber`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
