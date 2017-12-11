-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2017 at 09:19 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `computerstores`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `street` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `zip` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `userId`, `street`, `city`, `state`, `zip`) VALUES
(1, 0, 'Langasse', 'Bern', 'Bern', 3001),
(2, 0, 'Langasse', 'Bern', 'Bern', 3001),
(3, 0, 'Langasse', 'Bern', 'Bern', 3001),
(4, 0, 'Langasse', 'Bern', 'Bern', 3001),
(5, 52, 'Langasse', 'Bern', 'Bern', 3001),
(6, 52, 'Langasse', 'Bern', 'Bern', 3001),
(7, 52, 'Langasse', 'Bern', 'Bern', 3001),
(8, 52, 'Langasse', 'Bern', 'Bern', 3001),
(9, 52, 'Langasse', 'Bern', 'Bern', 3001),
(10, 52, 'Langasse', 'Bern', 'Bern', 3001),
(11, 52, 'Langasse', 'Bern', 'Bern', 3001),
(12, 52, 'Langasse', 'Bern', 'Bern', 3001),
(13, 52, 'Langasse', 'Bern', 'Bern', 3001),
(14, 52, 'Langasse', 'Bern', 'Bern', 3001),
(15, 52, 'Langasse', 'Bern', 'Bern', 3001),
(16, 52, 'Langasse', 'Bern', 'Bern', 3001),
(17, 52, 'Langasse', 'Bern', 'Bern', 3001),
(18, 52, 'Langasse', 'Bern', 'Bern', 3001),
(19, 52, 'Langasse', 'Bern', 'Bern', 3001),
(20, 12, 'Langasse', 'Bern', 'Bern', 3001),
(21, 12, 'Langasse', 'Bern', 'Bern', 3001),
(22, 12, 'Langasse', 'Bern', 'Bern', 3001),
(23, 12, 'Langasse', 'Bern', 'Bern', 3001),
(24, 12, 'Langasse', 'Bern', 'Bern', 3001),
(25, 12, 'Langasse', 'Bern', 'Bern', 3001),
(26, 12, 'Langasse', 'Bern', 'Bern', 3001),
(27, 12, 'Langasse', 'Bern', 'Bern', 3001),
(28, 12, 'Langasse', 'Bern', 'Bern', 3001);

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`) VALUES
(1, 'Asus'),
(2, 'MSI'),
(3, 'Apple'),
(4, 'Enermax'),
(5, 'Lenovo'),
(6, 'HPE'),
(7, 'Dell'),
(9, 'Toshiba'),
(11, 'Hewlett-Packard'),
(13, 'Logitech'),
(14, 'Roccat'),
(15, 'Corsair'),
(16, 'Cyberlink'),
(17, 'Microsoft'),
(18, 'Adobe');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(4) NOT NULL,
  `totalCost` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `totalCost`) VALUES
(95, '22222.00'),
(96, '22222.00'),
(97, '22222.00'),
(98, '22222.00'),
(99, NULL),
(100, NULL),
(101, NULL),
(102, NULL),
(103, NULL),
(104, NULL),
(105, NULL),
(106, NULL),
(107, NULL),
(108, NULL),
(109, NULL),
(110, NULL),
(111, NULL),
(112, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cart_items`
--

CREATE TABLE `cart_items` (
  `id` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `cartId` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cart_items`
--

INSERT INTO `cart_items` (`id`, `productId`, `cartId`, `quantity`) VALUES
(38, 1, 95, 1),
(39, 4, 95, 1),
(40, 5, 95, 1),
(41, 5, 95, 1),
(42, 7, 96, 1),
(43, 8, 96, 1),
(44, 6, 96, 2),
(45, 6, 96, 1),
(46, 1, 97, 1),
(66, 1, 98, 1),
(67, 6, 98, 0),
(68, 4, 98, 0),
(69, 2, 98, 1),
(70, 5, 99, 0),
(71, 2, 99, 2),
(72, 4, 107, 0),
(73, 8, 107, 2),
(74, 1, 108, 2),
(75, 2, 108, 1),
(76, 1, 109, 1),
(77, 2, 110, 1),
(78, 2, 111, 1),
(79, 2, 112, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `nameEN` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nameDE` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nameFR` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parentId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `nameEN`, `nameDE`, `nameFR`, `parentId`) VALUES
(1, 'PC', 'Einzelplatzrechner', 'Ordinateur', 0),
(3, 'Server', 'Server', 'Serveur', 0),
(4, 'Peripherie', 'Peripherie', 'Périphérie', 0),
(5, 'Components', 'Komponente', 'Composante', 0),
(6, 'Software', 'Computerprogramme', 'Logiciel', 0),
(7, 'Notebooks', 'Laptops', 'Ordinateur portable ', 1),
(8, 'Workstation', 'Arbeitsstation', 'Workstation', 1);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `userId` int(11) NOT NULL,
  `cartId` int(11) NOT NULL,
  `paid` tinyint(1) NOT NULL DEFAULT '0',
  `gift` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `type`, `amount`, `userId`, `cartId`, `paid`, `gift`) VALUES
(24, NULL, 22222, 4, 95, 0, 0),
(25, NULL, 22222, 9, 96, 0, 0),
(26, NULL, 22222, 10, 97, 0, 0),
(27, NULL, 22222, 11, 98, 0, 0),
(28, 'by delivery', NULL, 12, 99, 1, 1),
(29, 'pay pal', NULL, 12, 107, 1, 1),
(30, '', NULL, 12, 108, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descrEN` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descrDE` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descrFR` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `brandId` int(11) NOT NULL,
  `categoryId` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `descrEN`, `descrDE`, `descrFR`, `price`, `brandId`, `categoryId`, `created`) VALUES
(1, 'HP Spectre', 'Business Notebook', 'Business Laptop', 'Business Ordinateur', '2500.00', 11, 7, '2017-01-06 21:16:34'),
(2, 'HP 650', 'Home Office Notebook', 'Home Office Laptop', 'Home Office Ordinateur', '999.00', 11, 7, '2017-01-06 21:16:34'),
(3, 'HP Workstation', 'Workstation', 'Workstation', 'Workstation', '4500.00', 11, 8, '2017-01-06 21:16:34'),
(4, 'Toshiba Sattelite', 'Business Notebook', 'Business Laptop', 'Business Ordinateur', '2999.00', 9, 7, '2017-01-06 21:16:34'),
(5, 'Toshiba Workstation', 'Workstation', 'Workstation', 'Workstation', '3999.00', 9, 8, '2017-01-06 21:16:34'),
(6, 'Lenovo Yoga', 'Business Notebook', 'Business Laptop', 'Business Ordinateur', '2670.00', 5, 7, '2017-01-06 21:16:34'),
(7, 'Lenovo ThinkPad', 'Home Office Notebook', 'Home Office Laptop', 'Home Office Ordinateur', '1300.00', 5, 7, '2017-01-06 21:16:34'),
(8, 'Apple MacBook PRO', 'Business Notebook', 'Business Laptop', 'Business Ordinateur', '3400.00', 3, 7, '2017-01-06 21:16:34'),
(9, 'Apple MacBook', 'Home Office Notebook', 'Home Office Laptop', 'Home Office Ordinateur', '1800.00', 3, 7, '2017-01-06 21:16:34'),
(10, 'Corsair STRAFE', 'Corsair Keyboard', 'Corsair Tastatur', 'Corsair Clavier', '139.00', 15, 4, '2017-12-11 19:48:41'),
(11, 'Roccat Suora FX RGB', 'Roccat Keyboard', 'Roccat Tastatur', 'Roccar Clavier', '149.00', 14, 4, '2017-12-11 19:52:01'),
(12, 'Logitech Craft', 'Logitech Keyboard', 'Logitech Tastatur', 'Logitech Clavier', '199.00', 13, 4, '2017-12-11 19:53:45'),
(13, 'Asus GeForce GTX 1080 Ti STRIX 11G', 'Asus Graphic Card', 'Asus Grafikkarte', 'Asus Cartes graphiques', '895.00', 1, 5, '2017-12-11 20:00:09'),
(14, 'MSI Z370 GODLIKE', 'MSI Motherboard', 'MSI Mainboard', 'MSI Cartes mères', '515.00', 2, 5, '2017-12-11 20:00:09'),
(15, 'Enermax Platimax 750W', 'Enermax PC Netzteil', 'Enermax Power supply', 'Enermax Alimentations PC', '175.00', 4, 5, '2017-12-11 20:04:10'),
(16, 'HPE ProLiant DL360 Gen9', 'HPE Server', 'HPE Server', 'HPE Serveur', '1715.00', 6, 3, '2017-12-11 20:08:29'),
(17, 'Dell PowerEdge R630', 'Dell Server', 'Dell Server', 'Dell Serveur', '1635.00', 7, 3, '2017-12-11 20:08:29'),
(18, 'Lenovo x3650 M5', 'Lenovo Server', 'Lenovo Server', 'Lenovo Serveur', '1899.00', 5, 3, '2017-12-11 20:09:17'),
(19, 'Cyberlink PowerDVD 17 Ultra', 'Cyberlink Multimedia', 'Cyberlink Multimedia', 'Cyberlink Multimédias', '87.00', 16, 6, '2017-12-11 20:15:28'),
(20, 'Microsoft Windows 10 PRO', 'Microsoft OS', 'Microsoft Betriebssystem', 'Microsoft Système d''exploitation', '149.00', 17, 6, '2017-12-11 20:15:28'),
(21, 'Adobe Acrobat Professional 2017', 'Adobe Office Application', 'Adobe Büroanwendung', 'Adobe Bureautique', '678.00', 18, 6, '2017-12-11 20:17:47');

-- --------------------------------------------------------

--
-- Table structure for table `product_properties`
--

CREATE TABLE `product_properties` (
  `prodId` int(11) NOT NULL,
  `propId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` int(11) NOT NULL,
  `nameEN` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nameDE` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nameFR` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `unitID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` int(11) NOT NULL,
  `nameEN` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nameDE` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nameFR` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `firstName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `roleId` int(11) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `firstName`, `lastName`, `password`, `email`, `roleId`) VALUES
(1, 'merhleen', 'Karol', 'Ugorcak', 'tst123', 'karol.ugorcak@gmail.com', 2),
(2, 'bunnywrote', 'Denis', 'Schevchenko', '', 'deniz@gmail.com', 2),
(3, 'Suddi', 'Christoph', 'Sutter', 'dukommsthiernedrein', 'suddi@yahoo.com', 2),
(4, 'denis', 'denis', 'denis', 'e0d1679621df81166b768ba0336d1833', 'denis@denis.ch', 2),
(5, 'Karol', 'Karol', 'Ugorcak', '1613de534d8c0f5930958f69f7f28512', 'karol@karol.ch', 2),
(6, 'testUser', 'testName', 'testSurname', 'c56783a4b57bb246a99aa23a6dc3e954', 'test@test.ch', 2),
(7, 'testUser', 'testName', 'testSurname', 'c56783a4b57bb246a99aa23a6dc3e954', 'test2@test.ch', 2),
(8, 'testUser', 'testName', 'testSurname', 'c56783a4b57bb246a99aa23a6dc3e954', 'test3@test.ch', 2),
(9, 'denis', 'Denis', 'Shev', 'e0d1679621df81166b768ba0336d1833', 'denis@google.com', 2),
(10, 'testUser', 'test', 'user', 'b1e629c88419ba4595b40a8259b80b88', 'testuser@login.com', 2),
(11, 'tester', 'testName', 'testSurname', '62bef8e9a6fdcc3a65f4ef423cbcea6a', 'tester@test.com', 2),
(12, 'admin', 'admin', 'admin', '4b1fe94169de623188ceab9ab03bbc34', 'admin@admin.com', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_address`
--

CREATE TABLE `user_address` (
  `custId` int(11) NOT NULL,
  `addressId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_sessions`
--

CREATE TABLE `user_sessions` (
  `id` int(11) NOT NULL,
  `sessId` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `userId` int(11) NOT NULL,
  `lang` varchar(2) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'en',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_sessions`
--

INSERT INTO `user_sessions` (`id`, `sessId`, `userId`, `lang`, `created`) VALUES
(1, '63z105vp8k7tjq6qn3g1gf0u7nm8gsao', 0, 'en', '2016-12-03 19:44:12'),
(2, 'q0f3aimyd78cxvt8r21o4ksz7qnaqu95', 0, 'en', '2016-12-03 19:44:12'),
(3, 'qhsdpuv01c8rwiuf1tzg3hzfr5viezbc', 5, 'en', '2016-12-03 19:44:12'),
(4, 'dwwdz6ty9zpxhoo1f7es8t3g5z9yanid', 5, 'en', '2016-12-03 19:44:12'),
(5, '8u6kux686lylml4z5knqxtrbfas8mvfq', 5, 'en', '2016-12-03 19:44:12'),
(6, 'h6s71lj69mvgjr6sz7whq5cmkwxycfmx', 5, 'en', '2016-12-03 19:44:12'),
(7, '8nm0vmdereo9d3bu36jxa7gcqo6kjo7r', 5, 'en', '2016-12-03 19:44:12'),
(8, '3kszf6rtrvu1o78uuypt0mhlzo39uk3v', 5, 'en', '2016-12-03 19:44:12'),
(9, 'clcih90j2qk5tux4mkpdsxcf5eu13fi0', 5, 'en', '2016-12-03 19:44:12'),
(10, 'fssmmy5lw5wail4yu433gp59f4ouubqt', 5, 'en', '2016-12-03 19:44:12'),
(11, 'ygarneb7l549ayb4e56cswf39dx4o0jr', 5, 'en', '2016-12-03 19:44:12'),
(12, 'uha9spqhe940k6kjcwvqye9zmd2vqef8', 5, 'en', '2016-12-03 19:44:12'),
(13, 'om26s90y1s52dh4subfwfdsg1ws7rjyi', 5, 'en', '2016-12-03 19:44:12'),
(14, 'wxfswe54sxtvghp67cb8e19e0syinjsm', 5, 'en', '2016-12-03 19:44:12'),
(15, 'ueb3ls52d6t1xg5dyf70hzomwrpbr2ht', 5, 'en', '2016-12-03 19:44:12'),
(16, 'lcqw7uwwkcy3tmh1qg0067s2k5lpl8ia', 5, 'en', '2016-12-03 19:44:12'),
(17, '1pge9houxoq04vh7x6ya8sni66tomqj8', 5, 'en', '2016-12-03 19:44:12'),
(18, '4jh6if9bk02ldtj3uvomeocw4ub8y9g8', 5, 'en', '2016-12-03 19:44:12'),
(19, 'ehgc1tqq0a8u7ljxq2mpgqnvlkvsjwke', 5, 'en', '2016-12-03 19:44:12'),
(20, '14lmsqpc7ixdr3wkk6sgsfz1nh8y5ns3', 5, 'en', '2016-12-03 19:44:12'),
(21, 'ifeaxlm7q2x8rhqbdxhgawqnec7pq4fv', 4, 'en', '2016-12-03 19:44:12'),
(22, 'cs645qrxldype29xvn0wgrr22l3snw3p', 4, 'en', '2016-12-03 19:44:12'),
(23, 'r9bz89iblbxco3m9h2sgrtamipyxtn8c', 4, 'en', '2016-12-03 19:44:12'),
(24, 'h4zi0dx9xo33n2tfsghr6d6a0n5junxv', 4, 'en', '2016-12-03 19:44:12'),
(25, '2wtc7148f8xxbaxrnjdgl714oxsy9e7t', 4, 'en', '2016-12-03 19:44:12'),
(26, 'm7jg9mu2x4ommgcrincut4tfzzln0r9s', 4, 'en', '2016-12-03 19:44:12'),
(27, 'goenei018dw3za01p88367kegvldn22t', 4, 'en', '2016-12-03 19:44:12'),
(28, 'sfjnawglh8n1p453qcqw2uckunqfas0h', 5, 'en', '2016-12-03 19:44:12'),
(29, 'xmv3u0th08ideis8f6a612zwpk8ywm2p', 4, 'en', '2016-12-03 19:44:12'),
(30, '2n79du1a5o7eshtlg6d5vg1hb7c296yz', 5, 'en', '2016-12-03 19:44:12'),
(31, '6av2q5ncjacwmp7fwpry0asg58qm35ls', 5, 'en', '0000-00-00 00:00:00'),
(32, 'fboummw36lyvhxjj2i5ky952pn0u2tq1', 5, 'en', '2016-12-03 19:51:42'),
(33, '13hznfsie3ry4cqqt497s527lu98zet4', 4, 'en', '2016-12-03 20:39:45'),
(34, 'fky897r2c1meyyutip1c608z3p4u6ehx', 4, 'en', '2016-12-03 20:40:52'),
(35, 'md41lm6zlt3yeunsqg29kdqif4tsj2b5', 8, 'en', '2016-12-03 21:02:18'),
(36, 'zmiqdh9pwqtbcxso0l022oyrk086p4tv', 8, 'en', '2016-12-03 21:04:09'),
(37, 'eul5yki2q9q2a9wq6rxag0r47f0w9yjz', 4, 'fr', '2016-12-03 21:24:41'),
(38, 'fb444yus2bhv7oh0s10sgk1b6jy5g3kc', 8, 'de', '2016-12-03 21:33:00'),
(39, 'p3ndgfftx04g5e2ncrmtcr7jkw819w85', 5, 'de', '2016-12-03 21:45:49'),
(40, 'stisp81asdbv3y217c2afyby4xhsde46', 4, 'de', '2016-12-03 23:24:04'),
(41, '9szg7izn16z00us83fsqymb5vc61e2m4', 4, 'fr', '2016-12-09 23:08:19'),
(42, 'vvzto8svah73c54wq9st2sdbroi246qh', 4, 'fr', '2016-12-10 01:50:12'),
(43, 'sw26r4k1we2mth3gl83qhq5bkilaiyam', 4, 'fr', '2016-12-10 02:36:32'),
(44, 'ekfms2tb87lwy4hyqvskds5apco4vk8c', 4, 'en', '2016-12-10 03:03:05'),
(45, 'orj5b22ls301xi8qpg7n65kbgnehxjp9', 9, 'fr', '2017-01-11 19:45:37'),
(46, '2pr41bdswsx2n6p0y11ikaufzaqdem88', 9, 'fr', '2017-01-11 22:05:57'),
(47, '7lk00we7b1oyps5pstz7o7eifjjnd59k', 10, 'fr', '2017-01-14 23:55:23'),
(48, 'njou8tba9rp3b0ho04dcry2pfqw23fvq', 11, 'en', '2017-01-15 14:27:42'),
(49, 'mol4zdrex0ad8hpciqc05nag1ls93bu4', 11, 'de', '2017-01-18 22:17:59'),
(50, 'kkex0saruqi57gi8z76mcseexr306r4d', 11, 'en', '2017-01-20 00:18:54'),
(51, '2vzhsr1if9jry3bdg4bfmqk7xog5hf52', 11, 'en', '2017-01-20 13:51:23'),
(52, 'a2h0dqlwk6xw51seh1nc376yprc70jxf', 12, 'en', '2017-01-20 15:54:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `user_sessions`
--
ALTER TABLE `user_sessions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;
--
-- AUTO_INCREMENT for table `cart_items`
--
ALTER TABLE `cart_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `user_sessions`
--
ALTER TABLE `user_sessions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
