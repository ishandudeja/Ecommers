-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2018 at 10:33 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kiviyo`
--

-- --------------------------------------------------------

--
-- Table structure for table `checkoutproducts`
--

CREATE TABLE `checkoutproducts` (
  `checkOutId` int(11) NOT NULL,
  `userID` int(11) DEFAULT NULL,
  `productId` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `sale` double DEFAULT NULL,
  `SaleOn` date DEFAULT NULL,
  `Dipached` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `checkoutproducts`
--

INSERT INTO `checkoutproducts` (`checkOutId`, `userID`, `productId`, `quantity`, `sale`, `SaleOn`, `Dipached`) VALUES
(1, 1000, 14, 3, 33, '2018-11-08', 0),
(2, 1000, 15, 1, 11, '2018-11-08', 0),
(3, 1000, 15, 1, 11, '2018-11-08', 0),
(4, 1000, 23, 1, 11, '2018-11-08', 0),
(5, 1000, 15, 1, 11, '2018-11-08', 0),
(6, 1000, 23, 1, 11, '2018-11-08', 0),
(7, 1000, 15, 1, 11, '2018-11-08', 0),
(8, 1000, 23, 1, 11, '2018-11-08', 0),
(9, 1000, 14, 1, 11, '2018-11-08', 0),
(10, 1000, 16, 1, 11, '2018-11-08', 0);

-- --------------------------------------------------------

--
-- Stand-in structure for view `checkoutview`
-- (See below for the actual view)
--
CREATE TABLE `checkoutview` (
`checkOutId` int(11)
,`userID` int(11)
,`productId` int(11)
,`quantity` int(11)
,`sale` double
,`SaleOn` date
,`Dipached` tinyint(1)
,`firstName` varchar(60)
,`lastName` varchar(60)
,`address` varchar(30)
,`country` varchar(30)
,`state` varchar(30)
,`phone` varchar(25)
,`name` varchar(100)
,`description` varchar(500)
,`imageUrl` varchar(500)
);

-- --------------------------------------------------------

--
-- Table structure for table `colourtype`
--

CREATE TABLE `colourtype` (
  `colourTypeId` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `colourtype`
--

INSERT INTO `colourtype` (`colourTypeId`, `name`, `description`) VALUES
(1, 'WHITE', 'WHITE'),
(2, 'BLACK', 'BLACK'),
(3, 'GREEN', 'GREEN'),
(4, 'GRAY', 'GRAY'),
(5, 'YELLOW', 'YELLOW'),
(6, 'BLUE', 'BLUE'),
(7, 'PINK', 'PINK'),
(8, 'PURPLE', 'PURPLE'),
(9, 'RED', 'RED');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `inventoryId` int(11) NOT NULL,
  `productId` int(11) DEFAULT NULL,
  `categoryId` int(11) DEFAULT NULL,
  `stockCount` int(4) DEFAULT NULL,
  `statusID` int(11) DEFAULT NULL,
  `isActive` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`inventoryId`, `productId`, `categoryId`, `stockCount`, `statusID`, `isActive`) VALUES
(156, 14, 1, 1, 6, 1),
(157, 15, 1, 1, 6, 1),
(158, 16, 1, 4, 6, 1),
(159, 17, 1, 5, 6, 1),
(160, 18, 1, 5, 6, 1),
(161, 19, 1, 5, 6, 1),
(162, 20, 1, 5, 6, 1),
(163, 21, 1, 5, 6, 1),
(164, 22, 1, 5, 6, 1),
(165, 23, 3, 2, 6, 1),
(166, 24, 3, 5, 6, 1),
(167, 25, 3, 5, 6, 1),
(168, 26, 3, 5, 6, 1),
(169, 27, 3, 5, 6, 1),
(170, 28, 3, 5, 6, 1),
(171, 29, 3, 5, 6, 1),
(172, 30, 3, 5, 6, 1),
(173, 31, 3, 5, 6, 1),
(174, 32, 3, 5, 6, 1),
(175, 33, 3, 5, 6, 1),
(176, 34, 3, 5, 6, 1),
(177, 35, 3, 5, 6, 1),
(178, 36, 3, 5, 6, 1),
(179, 37, 2, 5, 6, 1),
(180, 38, 2, 5, 6, 1),
(181, 39, 2, 5, 6, 1),
(182, 40, 2, 5, 6, 1),
(183, 41, 2, 5, 6, 1),
(184, 42, 2, 5, 6, 1),
(185, 43, 2, 5, 6, 1),
(186, 45, 2, 5, 6, 1),
(187, 46, 4, 5, 6, 1),
(188, 47, 4, 5, 6, 1),
(189, 48, 4, 5, 6, 1),
(190, 49, 4, 5, 6, 1),
(191, 50, 4, 5, 6, 1),
(192, 51, 4, 5, 6, 1),
(193, 52, 4, 5, 6, 1),
(194, 53, 4, 5, 6, 1),
(195, 54, 4, 5, 6, 1),
(196, 55, 4, 5, 6, 1),
(197, 56, 4, 5, 6, 1),
(198, 57, 4, 5, 6, 1),
(199, 58, 4, 5, 6, 1),
(200, 59, 4, 5, 6, 1),
(201, 60, 4, 5, 6, 1),
(202, 61, 4, 5, 6, 1),
(203, 62, 4, 5, 6, 1),
(204, 63, 4, 5, 6, 1),
(205, 64, 4, 5, 6, 1),
(206, 65, 4, 5, 6, 1),
(207, 66, 4, 5, 6, 1),
(208, 67, 4, 5, 6, 1),
(209, 68, 4, 5, 6, 1),
(210, 69, 4, 5, 6, 1),
(211, 70, 4, 5, 6, 1),
(212, 71, 4, 5, 6, 1),
(213, 72, 4, 5, 6, 1),
(214, 73, 4, 5, 6, 1),
(215, 74, 4, 5, 6, 1),
(216, 75, 4, 5, 6, 1),
(217, 76, 4, 5, 6, 1),
(218, 77, 4, 5, 6, 1),
(219, 78, 4, 5, 6, 1),
(220, 79, 4, 5, 6, 1),
(221, 80, 4, 5, 6, 1),
(222, 81, 4, 5, 6, 1),
(223, 82, 4, 5, 6, 1),
(224, 83, 6, 5, 6, 1),
(225, 84, 6, 5, 6, 1),
(226, 85, 6, 5, 6, 1),
(227, 86, 6, 5, 6, 1),
(228, 87, 6, 5, 6, 1),
(229, 88, 6, 5, 6, 1),
(230, 89, 6, 5, 6, 1),
(231, 90, 6, 5, 6, 1),
(232, 91, 6, 5, 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `productcategory`
--

CREATE TABLE `productcategory` (
  `Id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `imageUrl` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productcategory`
--

INSERT INTO `productcategory` (`Id`, `name`, `description`, `imageUrl`) VALUES
(1, 'Kids Clothing', 'Clothing for kids of different size and brands', 'https://techcrunch.com/wp-content/uploads/2016/07/14_lifestyle_dbl_roa_038.jpg?w=730&crop=1'),
(2, 'Mens Clothing', 'Clothing for Mens of different size and brands', 'https://www.robertsonboulevard-shop.com/images/stores/Vince/Vince-04.jpg'),
(3, 'Womens Clothing', 'Clothing for Womens of different size and brands', 'https://fashionclothingtips.files.wordpress.com/2014/04/women-clothing-image-page1600-x-1202-197-kb-'),
(4, 'Electronic and Gadget', 'Electronic  gadgets and equipments Mobile and Radi', 'http://bigwhitestone.com/wp-content/uploads/2018/01/3428.png'),
(5, 'Watches', 'Watches for Mans and womens of differents brands', 'https://cdn.gearpatrol.com/wp-content/uploads/2018/01/best-watches-under-1k-gear-patrol-full-lead-cl'),
(6, 'shose', 'shose for Mans and womens of differents brands', 'https://www.sperry.com/on/demandware.static/-/Sites-sperry_us-Library/default/dw3847a954/content/sea');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productId` int(11) NOT NULL,
  `categoryId` int(11) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  `imageUrl` varchar(500) DEFAULT NULL,
  `statusID` int(11) DEFAULT NULL,
  `isActive` tinyint(1) DEFAULT NULL,
  `price` decimal(11,0) NOT NULL DEFAULT '10',
  `sizeId` int(11) DEFAULT NULL,
  `colourId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productId`, `categoryId`, `name`, `description`, `imageUrl`, `statusID`, `isActive`, `price`, `sizeId`, `colourId`) VALUES
(14, 1, 'MOTHERCARE', 'Kids Envelope Neck Printed Pants and Top - Pack Of 2', 'https://sslimages.shoppersstop.com/B8AC9759D45547D9AEF177F0DE13B7C8/img/33BED312325840F5B34B118282BEA410/203741131_9212_33BED312325840F5B34B118282BEA410.jpg', 6, 1, '11', 1, 1),
(15, 1, 'MOTHERCARE', 'Kids Envelope Neck Printed Pants and Top - Pack Of 2', 'https://sslimages.shoppersstop.com/B8AC9759D45547D9AEF177F0DE13B7C8/img/33BED312325840F5B34B118282BEA410/203741131_9212_33BED312325840F5B34B118282BEA410.jpg', 6, 1, '11', 1, 1),
(16, 1, 'Kids Round Neck Printed Romper', 'Mothercare: Kids Round Neck Printed Romper', 'https://sslimages.shoppersstop.com/B8AC9759D45547D9AEF177F0DE13B7C8/img/8045E927C5024362A173CD9FB571015F/203741208_9324_8045E927C5024362A173CD9FB571015F.jpg', 6, 1, '11', 1, 1),
(17, 1, 'Kids Round Neck Printed Romper', 'Mothercare: Kids Round Neck Printed Romper', 'https://sslimages.shoppersstop.com/B8AC9759D45547D9AEF177F0DE13B7C8/img/8045E927C5024362A173CD9FB571015F/203741208_9324_8045E927C5024362A173CD9FB571015F.jpg', 6, 1, '11', 1, 1),
(18, 1, 'Kids Round Neck Printed Babysuit', 'Mothercare: Kids Round Neck Printed Babysuit', 'https://sslimages.shoppersstop.com/B8AC9759D45547D9AEF177F0DE13B7C8/img/A26F8497A18D4443A6ED6EB203B4B63A/203830095_9100_A26F8497A18D4443A6ED6EB203B4B63A.jpg', 6, 1, '11', 1, 1),
(19, 1, 'Kids Round Neck Printed Babysuit', 'Mothercare: Kids Round Neck Printed Babysuit', 'https://sslimages.shoppersstop.com/B8AC9759D45547D9AEF177F0DE13B7C8/img/A26F8497A18D4443A6ED6EB203B4B63A/203830095_9100_A26F8497A18D4443A6ED6EB203B4B63A.jpg', 6, 1, '11', 1, 1),
(20, 1, 'Kids Round Neck Printed Babysuit', 'Mothercare: Kids Round Neck Printed Babysuit', 'https://sslimages.shoppersstop.com/B8AC9759D45547D9AEF177F0DE13B7C8/img/C938A9A6B64A455A908018997284659D/203741237_7084_C938A9A6B64A455A908018997284659D.jpg', 6, 1, '11', 1, 1),
(21, 1, 'Kids Round Neck Printed Babysuit', 'Mothercare: Kids Round Neck Printed Babysuit', 'https://sslimages.shoppersstop.com/B8AC9759D45547D9AEF177F0DE13B7C8/img/C938A9A6B64A455A908018997284659D/203741237_7084_C938A9A6B64A455A908018997284659D.jpg', 6, 1, '11', 1, 1),
(22, 1, 'Kids Round Neck Printed Top and Printed Leggings', 'Mothercare: Kids Round Neck Printed Top and Printed Leggings', 'https://sslimages.shoppersstop.com/B8AC9759D45547D9AEF177F0DE13B7C8/img/B6439F136BCA4E258A85A3BFDA9A66D2/204128234_7082_B6439F136BCA4E258A85A3BFDA9A66D2.jpg', 6, 1, '11', 1, 1),
(23, 3, 'Womens Square Neck Solid Top', 'RANGRITI : Womens Square Neck Solid Top', 'https://sslimages.shoppersstop.com/B8AC9759D45547D9AEF177F0DE13B7C8/img/9D1CA21ACC9140B5B9AA5BE0E1699C77/204288621_9508_9D1CA21ACC9140B5B9AA5BE0E1699C77.jpg', 6, 1, '11', 1, 7),
(24, 3, 'Womens Square Neck Solid Top', 'RANGRITI : Womens Square Neck Solid Top', 'https://sslimages.shoppersstop.com/B8AC9759D45547D9AEF177F0DE13B7C8/img/9D1CA21ACC9140B5B9AA5BE0E1699C77/204288621_9508_9D1CA21ACC9140B5B9AA5BE0E1699C77.jpg', 6, 1, '11', 1, 7),
(25, 3, 'Womens Round Neck Embroidered Top', 'COVER STORY :Womens Round Neck Embroidered Top', 'https://sslimages.shoppersstop.com/B8AC9759D45547D9AEF177F0DE13B7C8/img/4C0F320419254FCAB6F729BF03C4FD93/204534549_9212_4C0F320419254FCAB6F729BF03C4FD93.jpg', 6, 1, '11', 3, 7),
(26, 3, 'Womens Round Neck Embroidered Top', 'COVER STORY :Womens Round Neck Embroidered Top', 'https://sslimages.shoppersstop.com/B8AC9759D45547D9AEF177F0DE13B7C8/img/4C0F320419254FCAB6F729BF03C4FD93/204534549_9212_4C0F320419254FCAB6F729BF03C4FD93.jpg', 6, 1, '11', 3, 7),
(27, 3, 'Womens Round Neck Solid Top', 'ANS: Womens Round Neck Solid Top', 'https://sslimages.shoppersstop.com/B8AC9759D45547D9AEF177F0DE13B7C8/img/B8F262D1281B43A9AC63B4D1B2802A22/204087296_9212_B8F262D1281B43A9AC63B4D1B2802A22.jpg', 6, 1, '11', 3, 9),
(28, 3, 'Womens Round Neck Solid Top', 'ANS: Womens Round Neck Solid Top', 'https://sslimages.shoppersstop.com/B8AC9759D45547D9AEF177F0DE13B7C8/img/B8F262D1281B43A9AC63B4D1B2802A22/204087296_9212_B8F262D1281B43A9AC63B4D1B2802A22.jpg', 6, 1, '11', 3, 9),
(29, 3, 'Womens Band Neck Solid Top', 'ANS:Womens Band Neck Solid Top', 'https://sslimages.shoppersstop.com/B8AC9759D45547D9AEF177F0DE13B7C8/img/8AD26FB4EC4F4CEF926142736F90E6D9/204210192_9557_8AD26FB4EC4F4CEF926142736F90E6D9.jpg', 6, 1, '11', 3, 9),
(30, 3, 'Womens Band Neck Solid Top', 'ANS:Womens Band Neck Solid Top', 'https://sslimages.shoppersstop.com/B8AC9759D45547D9AEF177F0DE13B7C8/img/8AD26FB4EC4F4CEF926142736F90E6D9/204210192_9557_8AD26FB4EC4F4CEF926142736F90E6D9.jpg', 6, 1, '11', 3, 9),
(31, 3, 'Womens V Neck Slub Top', 'ALLEN SOLLY :Womens V Neck Slub Top', 'https://sslimages.shoppersstop.com/B8AC9759D45547D9AEF177F0DE13B7C8/img/CCB7651C425F4FBF98D3563E97DBB1B9/204297931_9407_CCB7651C425F4FBF98D3563E97DBB1B9.jpg', 6, 1, '11', 3, 9),
(32, 3, 'Womens V Neck Slub Top', 'ALLEN SOLLY :Womens V Neck Slub Top', 'https://sslimages.shoppersstop.com/B8AC9759D45547D9AEF177F0DE13B7C8/img/CCB7651C425F4FBF98D3563E97DBB1B9/204297931_9407_CCB7651C425F4FBF98D3563E97DBB1B9.jpg', 6, 1, '11', 3, 9),
(33, 3, 'Womens High Neck Solid Top', 'ALLEN SOLLY :Womens High Neck Solid Top', 'https://sslimages.shoppersstop.com/B8AC9759D45547D9AEF177F0DE13B7C8/img/7C5C9AF6201346A590AE639E48C29616/203540353_9900_7C5C9AF6201346A590AE639E48C29616.jpg', 6, 1, '11', 3, 7),
(34, 3, 'Womens High Neck Solid Top', 'ALLEN SOLLY :Womens High Neck Solid Top', 'https://sslimages.shoppersstop.com/B8AC9759D45547D9AEF177F0DE13B7C8/img/7C5C9AF6201346A590AE639E48C29616/203540353_9900_7C5C9AF6201346A590AE639E48C29616.jpg', 6, 1, '11', 3, 7),
(35, 3, 'Womens Round Neck Solid Top', 'ALLEN SOLLY :Womens Round Neck Solid Top', 'https://sslimages.shoppersstop.com/B8AC9759D45547D9AEF177F0DE13B7C8/img/287C26B59E864185A548B176E55AA130/204453244_9407_287C26B59E864185A548B176E55AA130.jpg', 6, 1, '11', 3, 5),
(36, 3, 'Womens Printed Polo T-Shirt', 'ALLEN SOLLY :Womens Printed Polo T-Shirt', 'https://sslimages.shoppersstop.com/B8AC9759D45547D9AEF177F0DE13B7C8/img/C56CF2F88C7B4B26841C4015C4016C55/204250177_9407_C56CF2F88C7B4B26841C4015C4016C55.jpg', 6, 1, '11', 3, 5),
(37, 2, 'Mens Skinny Fit Heavy Wash Jeans', 'KILLER:Mens Skinny Fit Heavy Wash Jeans', 'https://sslimages.shoppersstop.com/B8AC9759D45547D9AEF177F0DE13B7C8/img/32C2660C8C77453DA404BD466D851359/202873406_9517_32C2660C8C77453DA404BD466D851359.jpg', 6, 1, '11', 2, 6),
(38, 2, 'Mens 5 Pocket Whiskered Effect Jeans', 'KILLER:Mens 5 Pocket Whiskered Effect Jeans', 'https://sslimages.shoppersstop.com/B8AC9759D45547D9AEF177F0DE13B7C8/img/36C916E3C4A240BCB1C26652ECDC85F2/204225507_9308_36C916E3C4A240BCB1C26652ECDC85F2.jpg', 6, 1, '11', 2, 6),
(39, 2, 'Mens 4 Pocket Camouflage Cargos', 'KILLER:Mens 4 Pocket Camouflage Cargos', 'https://sslimages.shoppersstop.com/B8AC9759D45547D9AEF177F0DE13B7C8/img/66819A456E924EBC81EDF109D329EF94/204732482_9113_66819A456E924EBC81EDF109D329EF94.jpg', 6, 1, '11', 2, 2),
(40, 2, 'Mens Checked Casual Shirt', 'KILLER:Mens Checked Casual Shirt', 'https://sslimages.shoppersstop.com/B8AC9759D45547D9AEF177F0DE13B7C8/img/C8D993D1FEA34E22BCE5110EC1FC4D6E/204225474_9328_C8D993D1FEA34E22BCE5110EC1FC4D6E.jpg', 6, 1, '11', 2, 6),
(41, 2, 'Mens Slim Collar Check Shirt', 'KILLER:Mens Slim Collar Check Shirt', 'https://sslimages.shoppersstop.com/B8AC9759D45547D9AEF177F0DE13B7C8/img/5BB0D80B829F4F1A9734F4C3F71EF981/204225493_9212_5BB0D80B829F4F1A9734F4C3F71EF981.jpg', 6, 1, '11', 2, 6),
(42, 2, 'Mens 4 Pocket Slub Trousers', 'LOUIS PHILIPPE SPORTS:Mens 4 Pocket Slub Trousers', 'https://sslimages.shoppersstop.com/B8AC9759D45547D9AEF177F0DE13B7C8/img/3D8EAD134E36416381E141886F0C626A/204426036_9308_3D8EAD134E36416381E141886F0C626A.jpg', 6, 1, '11', 2, 6),
(43, 2, 'Mens Dot Pattern Formal Shirt', 'LOUIS PHILIPPE SPORTS:Mens Dot Pattern Formal Shirt', 'https://sslimages.shoppersstop.com/B8AC9759D45547D9AEF177F0DE13B7C8/img/EF16F59400134A0D90EBC35AFEA8543F/204370217_9557__EF16F59400134A0D90EBC35AFEA8543F.jpg', 6, 1, '11', 2, 1),
(44, 2, 'Mens Notched Lapel Slub Blazer', 'LOUIS PHILIPPE SPORTS:Mens Notched Lapel Slub Blazer', 'https://sslimages.shoppersstop.com/B8AC9759D45547D9AEF177F0DE13B7C8/img/B3255DA98F1447F08CAFBDAC53B971ED/204409220_9308_B3255DA98F1447F08CAFBDAC53B971ED.jpg', 6, 1, '11', 2, 6),
(45, 2, 'Mens Round Neck Striped T-Shirt', 'LOUIS PHILIPPE SPORTS:Mens Round Neck Striped T-Shirt', 'https://sslimages.shoppersstop.com/B8AC9759D45547D9AEF177F0DE13B7C8/img/2440D3A8B88C45E7BF39219EBF7D33AF/204403208_9100_2440D3A8B88C45E7BF39219EBF7D33AF.jpg', 6, 1, '11', 2, 1),
(46, 4, 'Microvave Oven 1701 MT 17L/700W', 'BAJAJ:Microvave Oven 1701 MT 17L/700W', 'https://sslimages.shoppersstop.com/B8AC9759D45547D9AEF177F0DE13B7C8/img/2E9FED7B9B5342008CB4874F6AFF4250/204434259_9900_2E9FED7B9B5342008CB4874F6AFF4250.jpg', 6, 1, '11', 2, 1),
(47, 4, '5 in 1 Multi Styler Hair Curler', 'PHILIPS: 5 in 1 Multi Styler Hair Curler', 'https://sslimages.shoppersstop.com/B8AC9759D45547D9AEF177F0DE13B7C8/img/0C58B2589B6743DEBFF72D42B30C19FA/203392190_9999_0C58B2589B6743DEBFF72D42B30C19FA.jpg', 6, 1, '51', 2, 1),
(48, 4, 'Perfectcare Powerlife No Burn Steam Iron', 'PHILIPS:Perfectcare Powerlife No Burn Steam Iron', 'https://sslimages.shoppersstop.com/B8AC9759D45547D9AEF177F0DE13B7C8/img/1FD1BF477C4545DC8C258C0A9FCBE77F/204089779_9999_1FD1BF477C4545DC8C258C0A9FCBE77F.jpg', 6, 1, '51', 2, 6),
(49, 4, 'Cook Top Induction Cookers- 1400 watts', 'PHILIPS:Cook Top Induction Cookers- 1400 watts', 'https://sslimages.shoppersstop.com/B8AC9759D45547D9AEF177F0DE13B7C8/img/66C6F8853BE646AD9EAB7A0D6202038C/204434300_9212_66C6F8853BE646AD9EAB7A0D6202038C.jpg', 6, 1, '21', 2, 2),
(50, 4, 'Blender and Grinder with Long and Short Jar with Lid', 'WONDERCHEF:Blender and Grinder with Long and Short Jar with Lid', 'https://sslimages.shoppersstop.com/B8AC9759D45547D9AEF177F0DE13B7C8/img/66C6F8853BE646AD9EAB7A0D6202038C/204434300_9212_66C6F8853BE646AD9EAB7A0D6202038C.jpg', 6, 1, '21', 2, 2),
(51, 4, 'Majesty Water Heater 3L/3 Kw', 'BAJAJ:Majesty Water Heater 3L/3 Kw', 'https://sslimages.shoppersstop.com/B8AC9759D45547D9AEF177F0DE13B7C8/img/B3B7FE9337CD4457A84A61100E6B644F/204434252_9900_B3B7FE9337CD4457A84A61100E6B644F.jpg', 6, 1, '21', 2, 1),
(52, 4, 'Amazon Echo Spot White - B074BL3R67', 'ECHO:Amazon Echo Spot White - B074BL3R67', 'https://sslimages.shoppersstop.com/B8AC9759D45547D9AEF177F0DE13B7C8/img/6F8A7A7121774FCB9AD3CFDA53D68BCA/204130570_9999_6F8A7A7121774FCB9AD3CFDA53D68BCA.jpg', 6, 1, '21', 2, 1),
(53, 4, 'Amazon Echo (Black) - B0725W7Q38', 'ECHO:Amazon Echo (Black) - B0725W7Q38', 'https://sslimages.shoppersstop.com/B8AC9759D45547D9AEF177F0DE13B7C8/img/F1D0D4FBEB454E86AED3091B904CB9AB/204130565_9999_F1D0D4FBEB454E86AED3091B904CB9AB.jpg', 6, 1, '21', 2, 2),
(54, 4, 'Microvave Oven 1701 MT 17L/700W', 'BAJAJ:Microvave Oven 1701 MT 17L/700W', 'https://sslimages.shoppersstop.com/B8AC9759D45547D9AEF177F0DE13B7C8/img/2E9FED7B9B5342008CB4874F6AFF4250/204434259_9900_2E9FED7B9B5342008CB4874F6AFF4250.jpg', 6, 1, '11', 2, 1),
(55, 4, '5 in 1 Multi Styler Hair Curler', 'PHILIPS: 5 in 1 Multi Styler Hair Curler', 'https://sslimages.shoppersstop.com/B8AC9759D45547D9AEF177F0DE13B7C8/img/0C58B2589B6743DEBFF72D42B30C19FA/203392190_9999_0C58B2589B6743DEBFF72D42B30C19FA.jpg', 6, 1, '51', 2, 1),
(56, 4, 'Perfectcare Powerlife No Burn Steam Iron', 'PHILIPS:Perfectcare Powerlife No Burn Steam Iron', 'https://sslimages.shoppersstop.com/B8AC9759D45547D9AEF177F0DE13B7C8/img/1FD1BF477C4545DC8C258C0A9FCBE77F/204089779_9999_1FD1BF477C4545DC8C258C0A9FCBE77F.jpg', 6, 1, '51', 2, 6),
(57, 4, 'Cook Top Induction Cookers- 1400 watts', 'PHILIPS:Cook Top Induction Cookers- 1400 watts', 'https://sslimages.shoppersstop.com/B8AC9759D45547D9AEF177F0DE13B7C8/img/66C6F8853BE646AD9EAB7A0D6202038C/204434300_9212_66C6F8853BE646AD9EAB7A0D6202038C.jpg', 6, 1, '21', 2, 2),
(58, 4, 'Blender and Grinder with Long and Short Jar with Lid', 'WONDERCHEF:Blender and Grinder with Long and Short Jar with Lid', 'https://sslimages.shoppersstop.com/B8AC9759D45547D9AEF177F0DE13B7C8/img/66C6F8853BE646AD9EAB7A0D6202038C/204434300_9212_66C6F8853BE646AD9EAB7A0D6202038C.jpg', 6, 1, '21', 2, 2),
(59, 4, 'Majesty Water Heater 3L/3 Kw', 'BAJAJ:Majesty Water Heater 3L/3 Kw', 'https://sslimages.shoppersstop.com/B8AC9759D45547D9AEF177F0DE13B7C8/img/B3B7FE9337CD4457A84A61100E6B644F/204434252_9900_B3B7FE9337CD4457A84A61100E6B644F.jpg', 6, 1, '21', 2, 1),
(60, 4, 'Amazon Echo Spot White - B074BL3R67', 'ECHO:Amazon Echo Spot White - B074BL3R67', 'https://sslimages.shoppersstop.com/B8AC9759D45547D9AEF177F0DE13B7C8/img/6F8A7A7121774FCB9AD3CFDA53D68BCA/204130570_9999_6F8A7A7121774FCB9AD3CFDA53D68BCA.jpg', 6, 1, '21', 2, 1),
(61, 4, 'Amazon Echo (Black) - B0725W7Q38', 'ECHO:Amazon Echo (Black) - B0725W7Q38', 'https://sslimages.shoppersstop.com/B8AC9759D45547D9AEF177F0DE13B7C8/img/F1D0D4FBEB454E86AED3091B904CB9AB/204130565_9999_F1D0D4FBEB454E86AED3091B904CB9AB.jpg', 6, 1, '21', 2, 2),
(62, 4, 'Microvave Oven 1701 MT 17L/700W', 'BAJAJ:Microvave Oven 1701 MT 17L/700W', 'https://sslimages.shoppersstop.com/B8AC9759D45547D9AEF177F0DE13B7C8/img/2E9FED7B9B5342008CB4874F6AFF4250/204434259_9900_2E9FED7B9B5342008CB4874F6AFF4250.jpg', 6, 1, '11', 2, 1),
(63, 4, '5 in 1 Multi Styler Hair Curler', 'PHILIPS: 5 in 1 Multi Styler Hair Curler', 'https://sslimages.shoppersstop.com/B8AC9759D45547D9AEF177F0DE13B7C8/img/0C58B2589B6743DEBFF72D42B30C19FA/203392190_9999_0C58B2589B6743DEBFF72D42B30C19FA.jpg', 6, 1, '51', 2, 1),
(64, 4, 'Perfectcare Powerlife No Burn Steam Iron', 'PHILIPS:Perfectcare Powerlife No Burn Steam Iron', 'https://sslimages.shoppersstop.com/B8AC9759D45547D9AEF177F0DE13B7C8/img/1FD1BF477C4545DC8C258C0A9FCBE77F/204089779_9999_1FD1BF477C4545DC8C258C0A9FCBE77F.jpg', 6, 1, '51', 2, 6),
(65, 4, 'Cook Top Induction Cookers- 1400 watts', 'PHILIPS:Cook Top Induction Cookers- 1400 watts', 'https://sslimages.shoppersstop.com/B8AC9759D45547D9AEF177F0DE13B7C8/img/66C6F8853BE646AD9EAB7A0D6202038C/204434300_9212_66C6F8853BE646AD9EAB7A0D6202038C.jpg', 6, 1, '21', 2, 2),
(66, 4, 'Blender and Grinder with Long and Short Jar with Lid', 'WONDERCHEF:Blender and Grinder with Long and Short Jar with Lid', 'https://sslimages.shoppersstop.com/B8AC9759D45547D9AEF177F0DE13B7C8/img/66C6F8853BE646AD9EAB7A0D6202038C/204434300_9212_66C6F8853BE646AD9EAB7A0D6202038C.jpg', 6, 1, '21', 2, 2),
(67, 4, 'Majesty Water Heater 3L/3 Kw', 'BAJAJ:Majesty Water Heater 3L/3 Kw', 'https://sslimages.shoppersstop.com/B8AC9759D45547D9AEF177F0DE13B7C8/img/B3B7FE9337CD4457A84A61100E6B644F/204434252_9900_B3B7FE9337CD4457A84A61100E6B644F.jpg', 6, 1, '21', 2, 1),
(68, 4, 'Amazon Echo Spot White - B074BL3R67', 'ECHO:Amazon Echo Spot White - B074BL3R67', 'https://sslimages.shoppersstop.com/B8AC9759D45547D9AEF177F0DE13B7C8/img/6F8A7A7121774FCB9AD3CFDA53D68BCA/204130570_9999_6F8A7A7121774FCB9AD3CFDA53D68BCA.jpg', 6, 1, '21', 2, 1),
(69, 4, 'Amazon Echo (Black) - B0725W7Q38', 'ECHO:Amazon Echo (Black) - B0725W7Q38', 'https://sslimages.shoppersstop.com/B8AC9759D45547D9AEF177F0DE13B7C8/img/F1D0D4FBEB454E86AED3091B904CB9AB/204130565_9999_F1D0D4FBEB454E86AED3091B904CB9AB.jpg', 6, 1, '21', 2, 2),
(70, 4, 'Drift Blue Unisex Watch', 'WAVE LONDON:Drift Blue Unisex Watch', 'https://sslimages.shoppersstop.com/sys-master/images/hae/ha7/8934424313886/9494312_9999.png_1088Wx1632H', 6, 1, '11', 2, 6),
(71, 4, 'Microvave Oven 1701 MT 17L/700W', 'BAJAJ:Microvave Oven 1701 MT 17L/700W', 'https://sslimages.shoppersstop.com/B8AC9759D45547D9AEF177F0DE13B7C8/img/2E9FED7B9B5342008CB4874F6AFF4250/204434259_9900_2E9FED7B9B5342008CB4874F6AFF4250.jpg', 6, 1, '11', 2, 1),
(72, 4, '5 in 1 Multi Styler Hair Curler', 'PHILIPS: 5 in 1 Multi Styler Hair Curler', 'https://sslimages.shoppersstop.com/B8AC9759D45547D9AEF177F0DE13B7C8/img/0C58B2589B6743DEBFF72D42B30C19FA/203392190_9999_0C58B2589B6743DEBFF72D42B30C19FA.jpg', 6, 1, '51', 2, 1),
(73, 4, 'Perfectcare Powerlife No Burn Steam Iron', 'PHILIPS:Perfectcare Powerlife No Burn Steam Iron', 'https://sslimages.shoppersstop.com/B8AC9759D45547D9AEF177F0DE13B7C8/img/1FD1BF477C4545DC8C258C0A9FCBE77F/204089779_9999_1FD1BF477C4545DC8C258C0A9FCBE77F.jpg', 6, 1, '51', 2, 6),
(74, 4, 'Cook Top Induction Cookers- 1400 watts', 'PHILIPS:Cook Top Induction Cookers- 1400 watts', 'https://sslimages.shoppersstop.com/B8AC9759D45547D9AEF177F0DE13B7C8/img/66C6F8853BE646AD9EAB7A0D6202038C/204434300_9212_66C6F8853BE646AD9EAB7A0D6202038C.jpg', 6, 1, '21', 2, 2),
(75, 4, 'Blender and Grinder with Long and Short Jar with Lid', 'WONDERCHEF:Blender and Grinder with Long and Short Jar with Lid', 'https://sslimages.shoppersstop.com/B8AC9759D45547D9AEF177F0DE13B7C8/img/66C6F8853BE646AD9EAB7A0D6202038C/204434300_9212_66C6F8853BE646AD9EAB7A0D6202038C.jpg', 6, 1, '21', 2, 2),
(76, 4, 'Majesty Water Heater 3L/3 Kw', 'BAJAJ:Majesty Water Heater 3L/3 Kw', 'https://sslimages.shoppersstop.com/B8AC9759D45547D9AEF177F0DE13B7C8/img/B3B7FE9337CD4457A84A61100E6B644F/204434252_9900_B3B7FE9337CD4457A84A61100E6B644F.jpg', 6, 1, '21', 2, 1),
(77, 4, 'Amazon Echo Spot White - B074BL3R67', 'ECHO:Amazon Echo Spot White - B074BL3R67', 'https://sslimages.shoppersstop.com/B8AC9759D45547D9AEF177F0DE13B7C8/img/6F8A7A7121774FCB9AD3CFDA53D68BCA/204130570_9999_6F8A7A7121774FCB9AD3CFDA53D68BCA.jpg', 6, 1, '21', 2, 1),
(78, 4, 'Amazon Echo (Black) - B0725W7Q38', 'ECHO:Amazon Echo (Black) - B0725W7Q38', 'https://sslimages.shoppersstop.com/B8AC9759D45547D9AEF177F0DE13B7C8/img/F1D0D4FBEB454E86AED3091B904CB9AB/204130565_9999_F1D0D4FBEB454E86AED3091B904CB9AB.jpg', 6, 1, '21', 2, 2),
(79, 4, 'Drift Blue Unisex Watch', 'WAVE LONDON:Drift Blue Unisex Watch', 'https://sslimages.shoppersstop.com/sys-master/images/hae/ha7/8934424313886/9494312_9999.png_1088Wx1632H', 6, 1, '11', 2, 6),
(80, 4, 'Mens Black Dial Watch Dz4309', 'DIESEL:Mens Black Dial Watch Dz4309', 'https://sslimages.shoppersstop.com/sys-master/images/h1a/h50/8918211559454/8433435_9999.png_1088Wx1632H', 6, 1, '11', 2, 2),
(81, 4, 'Womens BGA-151EF-1BDR (B165) Baby-G Analog-Digital Watch', 'CASIO:Womens BGA-151EF-1BDR (B165) Baby-G Analog-Digital Watch', 'https://sslimages.shoppersstop.com/sys-master/images/h7f/hed/9902977941534/201637859_9999.jpg_1088Wx1632H', 6, 1, '11', 2, 2),
(82, 4, 'Mens Black Dial Watch NE9431KL01', 'XYLYS:Mens Black Dial Watch NE9431KL01', 'https://sslimages.shoppersstop.com/sys-master/images/h4c/h3a/8930474393630/8885201_9999.png_1088Wx1632H', 6, 1, '11', 2, 2),
(83, 6, 'Boys Mesh Lace Up Sports Shoes', 'KITTENS:Boys Mesh Lace Up Sports Shoes', 'https://sslimages.shoppersstop.com/sys-master/images/h4c/h3a/8930474393630/8885201_9999.png_1088Wx1632H', 6, 1, '11', 2, 3),
(84, 6, 'Boys Mesh Lace Up Sports Shoes', 'ADIDAS:Boys Mesh Lace Up Sports Shoes', 'https://sslimages.shoppersstop.com/B8AC9759D45547D9AEF177F0DE13B7C8/img/8351167419EC4B1BB9A06775C39CBB1E/204011764_9212_8351167419EC4B1BB9A06775C39CBB1E.jpg', 6, 1, '11', 2, 2),
(85, 6, 'Womens Mesh Lace Up Sports Shoes', 'ADIDAS:Womens Mesh Lace Up Sports Shoes', 'https://sslimages.shoppersstop.com/B8AC9759D45547D9AEF177F0DE13B7C8/img/D9694A0574194979937D153D4A2F1619/204404139_9204_D9694A0574194979937D153D4A2F1619.jpg', 6, 1, '11', 2, 2),
(86, 6, 'Boys Mesh Lace Up Sports Shoes', 'ADIDAS:Boys Mesh Lace Up Sports Shoes', 'https://sslimages.shoppersstop.com/B8AC9759D45547D9AEF177F0DE13B7C8/img/809E3B1068334998BD054C4B7BC52068/203128306_9324_809E3B1068334998BD054C4B7BC52068.jpg', 6, 1, '11', 2, 2),
(87, 6, 'Unisex Leather Lace Up Sports Shoes', 'ADIDAS:Unisex Leather Lace Up Sports Shoes', 'https://sslimages.shoppersstop.com/B8AC9759D45547D9AEF177F0DE13B7C8/img/C42817EE37134560A751D094E6584E6B/204011748_9100_C42817EE37134560A751D094E6584E6B.jpg', 6, 1, '11', 2, 2),
(88, 6, 'Womens Mesh Lace Up Sports Shoes', 'ADIDAS:Womens Mesh Lace Up Sports Shoes', 'https://sslimages.shoppersstop.com/B8AC9759D45547D9AEF177F0DE13B7C8/img/CCFA2E39064C47098F7D3B22AEE976C6/203611768_9200_CCFA2E39064C47098F7D3B22AEE976C6.jpg', 6, 1, '11', 2, 2),
(89, 6, 'Womens Lace Up Sports Shoes', 'SKECHERS:Womens Lace Up Sports Shoes', 'https://sslimages.shoppersstop.com/B8AC9759D45547D9AEF177F0DE13B7C8/img/3127CCA466AE473DB9CC8DF5447A9230/202947681_9324_3127CCA466AE473DB9CC8DF5447A9230.jpg', 6, 1, '11', 2, 6),
(90, 6, 'Womens Lace Up Sports Shoes', 'TRUFFLE COLLECTION:Womens Lace Up Sports Shoes', 'https://sslimages.shoppersstop.com/B8AC9759D45547D9AEF177F0DE13B7C8/img/372C3484E64E4CF1B902D50DFB30BA91/204615358_9204_372C3484E64E4CF1B902D50DFB30BA91.jpg', 6, 1, '11', 2, 4),
(91, 6, 'Womens Mesh Lace Up Sports Shoes', 'ADIDAS:Womens Mesh Lace Up Sports Shoes', 'https://sslimages.shoppersstop.com/B8AC9759D45547D9AEF177F0DE13B7C8/img/1BB8A76CF9924E10943D7E17DCBEC4D2/203611834_9308_1BB8A76CF9924E10943D7E17DCBEC4D2.jpg', 6, 1, '11', 2, 4),
(92, 3, 'Womens Hooded Solid Sweatshirt', 'Womens Hooded Solid Sweatshirt', 'https://sslimages.shoppersstop.com/B8AC9759D45547D9AEF177F0DE13B7C8/img/F7C8F52AD3434B5CBCB884C1CBED3DC4/204674154_9557_F7C8F52AD3434B5CBCB884C1CBED3DC4.jpg', 0, 1, '10', 1, 9);

-- --------------------------------------------------------

--
-- Stand-in structure for view `productsview`
-- (See below for the actual view)
--
CREATE TABLE `productsview` (
`productId` int(11)
,`categoryId` int(11)
,`productCategory` varchar(50)
,`productName` varchar(100)
,`description` varchar(500)
,`imageUrl` varchar(500)
,`statusID` int(11)
,`isActive` tinyint(1)
,`price` decimal(11,0)
,`sizeId` int(11)
,`productSize` varchar(50)
,`colourId` int(11)
,`productColour` varchar(20)
);

-- --------------------------------------------------------

--
-- Table structure for table `sizetype`
--

CREATE TABLE `sizetype` (
  `sizeId` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sizetype`
--

INSERT INTO `sizetype` (`sizeId`, `name`, `description`) VALUES
(1, 'SX', 'EXTRA SMALL'),
(2, 'S', 'SMALL'),
(3, 'M', 'MEDIUM'),
(4, 'L', 'LARGE'),
(5, 'XL', 'EXTRA LARGE');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `statusId` int(11) NOT NULL,
  `statusCode` char(2) DEFAULT NULL,
  `statusDesc` varchar(20) DEFAULT NULL,
  `tableRef` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`statusId`, `statusCode`, `statusDesc`, `tableRef`) VALUES
(1, 'E', 'Enabled', NULL),
(2, 'D', 'Disabled', NULL),
(3, 'I', 'In progress', 'USER'),
(4, 'L', 'Locked', 'USER'),
(5, 'L', 'Locked', 'USERLOGON'),
(6, 'IS', 'In Stock', NULL),
(7, 'OS', 'out of Stock', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `userlogon`
--

CREATE TABLE `userlogon` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) DEFAULT NULL,
  `userID` int(11) DEFAULT NULL,
  `userType` int(2) DEFAULT NULL,
  `statusId` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlogon`
--

INSERT INTO `userlogon` (`username`, `password`, `userID`, `userType`, `statusId`) VALUES
('bobjones', 'testuser', 1002, 4, 1),
('ishandudeja', '1234', 1000, 4, 1),
('samdud', '1234', 1003, 5, 1),
('suebeale', 'testuser', 1001, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `lastName` varchar(60) DEFAULT NULL,
  `firstName` varchar(60) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `phone` varchar(25) DEFAULT NULL,
  `statusCode` int(2) DEFAULT NULL,
  `country` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `zip` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `lastName`, `firstName`, `email`, `phone`, `statusCode`, `country`, `state`, `zip`, `address`) VALUES
(1000, 'dudeja', 'ishan', 'ishandudeja@gmail.com', '9899988995', NULL, 'New Zealand', 'Waikato', '3210', 'hamilton'),
(1001, 'Beale', 'Sue', 'Sue.Beale@bodycafe.co.nz', '1234567890', NULL, 'New Zealand', 'Waikato', '1234', 'Hamilton'),
(1002, 'Jones', 'Bob', 'Bob.Jones@bodycafe.co.nz', '1234567890', NULL, 'New Zealand', 'Waikato', '12345', 'Hamilton'),
(1003, 'dudeja', 'sam', 'samdud@gmail.com', '98999889978', NULL, 'New Zealand', 'Waikato', '1234', 'hamilton');

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

CREATE TABLE `usertype` (
  `userType` int(2) NOT NULL,
  `typeDesc` varchar(60) DEFAULT NULL,
  `statusCode` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertype`
--

INSERT INTO `usertype` (`userType`, `typeDesc`, `statusCode`) VALUES
(3, 'Staff', 1),
(4, 'Client', 1),
(5, 'Administrator', 1);

-- --------------------------------------------------------

--
-- Structure for view `checkoutview`
--
DROP TABLE IF EXISTS `checkoutview`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `checkoutview`  AS  select `c`.`checkOutId` AS `checkOutId`,`c`.`userID` AS `userID`,`c`.`productId` AS `productId`,`c`.`quantity` AS `quantity`,`c`.`sale` AS `sale`,`c`.`SaleOn` AS `SaleOn`,`c`.`Dipached` AS `Dipached`,`u`.`firstName` AS `firstName`,`u`.`lastName` AS `lastName`,`u`.`address` AS `address`,`u`.`country` AS `country`,`u`.`state` AS `state`,`u`.`phone` AS `phone`,`p`.`name` AS `name`,`p`.`description` AS `description`,`p`.`imageUrl` AS `imageUrl` from ((`checkoutproducts` `c` join `products` `p` on((`p`.`productId` = `c`.`productId`))) join `users` `u` on((`u`.`userID` = `c`.`userID`))) ;

-- --------------------------------------------------------

--
-- Structure for view `productsview`
--
DROP TABLE IF EXISTS `productsview`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `productsview`  AS  select `p`.`productId` AS `productId`,`p`.`categoryId` AS `categoryId`,`pc`.`name` AS `productCategory`,`p`.`name` AS `productName`,`p`.`description` AS `description`,`p`.`imageUrl` AS `imageUrl`,`p`.`statusID` AS `statusID`,`p`.`isActive` AS `isActive`,`p`.`price` AS `price`,`p`.`sizeId` AS `sizeId`,`s`.`name` AS `productSize`,`p`.`colourId` AS `colourId`,`c`.`name` AS `productColour` from (((`products` `p` join `sizetype` `s` on((`p`.`sizeId` = `s`.`sizeId`))) join `colourtype` `c` on((`c`.`colourTypeId` = `p`.`colourId`))) join `productcategory` `pc` on((`pc`.`Id` = `p`.`categoryId`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `checkoutproducts`
--
ALTER TABLE `checkoutproducts`
  ADD PRIMARY KEY (`checkOutId`);

--
-- Indexes for table `colourtype`
--
ALTER TABLE `colourtype`
  ADD PRIMARY KEY (`colourTypeId`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`inventoryId`);

--
-- Indexes for table `productcategory`
--
ALTER TABLE `productcategory`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productId`);

--
-- Indexes for table `sizetype`
--
ALTER TABLE `sizetype`
  ADD PRIMARY KEY (`sizeId`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`statusId`);

--
-- Indexes for table `userlogon`
--
ALTER TABLE `userlogon`
  ADD PRIMARY KEY (`username`),
  ADD KEY `logon_UserTypes_FK_invalid` (`userType`),
  ADD KEY `logon_User_FK_invalid` (`userID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`),
  ADD KEY `users_status_statusNo` (`statusCode`);

--
-- Indexes for table `usertype`
--
ALTER TABLE `usertype`
  ADD PRIMARY KEY (`userType`),
  ADD KEY `status_userType_statusCode` (`statusCode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `checkoutproducts`
--
ALTER TABLE `checkoutproducts`
  MODIFY `checkOutId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `colourtype`
--
ALTER TABLE `colourtype`
  MODIFY `colourTypeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `inventoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=233;

--
-- AUTO_INCREMENT for table `productcategory`
--
ALTER TABLE `productcategory`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `sizetype`
--
ALTER TABLE `sizetype`
  MODIFY `sizeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `statusId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1004;

--
-- AUTO_INCREMENT for table `usertype`
--
ALTER TABLE `usertype`
  MODIFY `userType` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `userlogon`
--
ALTER TABLE `userlogon`
  ADD CONSTRAINT `logon_UserTypes_FK_invalid` FOREIGN KEY (`userType`) REFERENCES `usertype` (`userType`),
  ADD CONSTRAINT `logon_User_FK_invalid` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_status_statusNo` FOREIGN KEY (`statusCode`) REFERENCES `status` (`statusId`);

--
-- Constraints for table `usertype`
--
ALTER TABLE `usertype`
  ADD CONSTRAINT `status_userType_statusCode` FOREIGN KEY (`statusCode`) REFERENCES `status` (`statusId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
