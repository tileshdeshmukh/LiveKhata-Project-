-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2021 at 07:37 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `retailer_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_trees`
--

CREATE TABLE `account_trees` (
  `id` int(20) UNSIGNED NOT NULL,
  `name` varchar(75) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_account` varchar(65) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address1` varchar(75) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(55) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Adhar_No` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pin` varchar(65) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cont_person` varchar(65) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel_no` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_no` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stateName` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stateCode` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Eligible_ITC` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invoice_type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GSTIN` varchar(55) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_type` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pan` varchar(35) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gst_party_type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acc_head_type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gst_reg_type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_branch` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_account_no` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ISFC_code` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `swift_code` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TCS` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `cmpUserId` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `account_trees`
--

INSERT INTO `account_trees` (`id`, `name`, `type_account`, `address1`, `city`, `Adhar_No`, `pin`, `cont_person`, `tel_no`, `mobile_no`, `email`, `stateName`, `stateCode`, `Eligible_ITC`, `invoice_type`, `GSTIN`, `business_type`, `pan`, `gst_party_type`, `acc_head_type`, `gst_reg_type`, `bank_name`, `bank_branch`, `bank_account_no`, `ISFC_code`, `swift_code`, `TCS`, `group_id`, `cmpUserId`, `created_at`, `updated_at`) VALUES
(11, 'Raju', 'Employee account', 'sdjklj', 'kljlk', 'kljkj', 'jhghj', 'h', 'hh', '78521553225', 'hjk', '5', '18', 'ghjg', 'Regular', 'hgv', 'B2C', 'hjg', 'InState', 'Goods', 'Regular', 'k', 'jhjh', 'jkj', 'khkj', 'hjkhkj', 'GST', 7, 2, '2020-11-10 04:27:37', '2020-12-24 00:58:17'),
(12, 'Prathmesh', 'Customer/Vendor account', 'Banglor', 'Banglor', 'jh', 'jkhjkhjkhjk', 'jkh', 'jj', '8007327049', 'jkh', '22', '27', 'ghjg', 'Regular', 'kjhk', 'B2C', 'ghjhj', 'OutState', 'Goods', 'Regular', 'jhg', 'hkjhjkhkhjk', 'hjk', 'jjk', 'jk', 'GST', 5, 1, '2020-11-10 04:29:59', '2021-03-15 00:13:29'),
(17, 'Ram', 'Customer/Vendor account', 'Jalna', 'jalna', NULL, NULL, NULL, NULL, '3214569870', NULL, '0', NULL, NULL, 'Regular', NULL, 'B2C', NULL, 'InState', 'Goods', 'Regular', NULL, NULL, NULL, NULL, NULL, 'GST', 2, 2, '2020-12-11 05:45:22', '2020-12-23 04:18:58'),
(18, 'Rishi', 'Customer/Vendor account', 'kalanagar Bandra East', 'Mumbai', 'jkj', 'khj', 'hjk', 'hjkh', '8446883665', 'jkhkj', 'Maharashtra', '27', 'jh', 'Regular', 'F54DG5DF5G4DF45G46DF46G4', 'B2C', 'hjkh', 'InState', 'Goods', 'Regular', 'kj', 'hjkj', 'hjkh', 'jkhjk', 'hjkhkj', 'GST', 5, 1, '2020-12-11 05:52:01', '2021-01-14 04:38:36'),
(20, 'Rahulll', 'Customer/Vendor account', NULL, NULL, NULL, NULL, NULL, NULL, '8007327049', NULL, '0', NULL, NULL, 'Regular', NULL, 'B2C', NULL, 'OutState', 'Goods', 'Regular', NULL, NULL, NULL, NULL, NULL, 'GST', 4, 2, '2020-12-11 06:12:49', '2021-01-06 06:38:47'),
(21, 'Lux', 'Customer/Vendor account', NULL, 'Africa', NULL, NULL, NULL, NULL, '9630125874', NULL, '0', NULL, NULL, 'Regular', NULL, 'B2C', NULL, 'InState', 'Goods', 'Regular', NULL, NULL, NULL, NULL, NULL, 'GST', 4, 1, '2020-12-14 05:45:22', '2021-01-06 05:40:12'),
(23, 'Hello', 'Customer/Vendor account', NULL, 'Aurangabad', NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, 'Regular', NULL, 'B2C', NULL, 'InState', 'Goods', 'Regular', NULL, NULL, NULL, NULL, NULL, 'GST', 3, 1, '2021-01-06 23:02:44', '2021-02-03 03:10:12'),
(25, 'a3', 'Customer/Vendor account', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Regular', NULL, 'B2C', NULL, 'InState', 'Goods', 'Regular', NULL, NULL, NULL, NULL, NULL, 'GST', 7, 1, '2021-01-07 00:55:13', '2021-01-07 00:55:13'),
(37, 'Yaser & Company', 'Customer/Vendor account', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, 'Regular', NULL, 'B2C', NULL, 'InState', 'Goods', 'Regular', NULL, NULL, NULL, NULL, NULL, 'GST', 4, 1, '2021-03-16 06:17:56', '2021-03-16 06:17:56'),
(26, 'hsbh', 'Customer/Vendor account', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Regular', NULL, 'B2C', NULL, 'InState', 'Goods', 'Regular', NULL, NULL, NULL, NULL, NULL, 'GST', 2, 2, '2021-01-15 05:41:59', '2021-01-15 05:41:59'),
(35, 'CASH', 'Cash/Petty cash account', 'TEST', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, 'Regular', NULL, 'B2C', NULL, 'InState', 'Goods', 'Regular', NULL, NULL, NULL, NULL, NULL, 'GST', 5, 1, '2021-03-09 00:13:58', '2021-03-09 00:13:58'),
(43, 'ESA', 'Customer/Vendor account', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Regular', NULL, 'B2C', NULL, 'InState', 'Goods', 'Regular', NULL, NULL, NULL, NULL, NULL, 'GST', 2, 1, '2021-03-25 23:41:48', '2021-03-25 23:41:48'),
(39, 'AAL', 'Customer/Vendor account', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Regular', NULL, 'B2C', NULL, 'InState', 'Goods', 'Regular', NULL, NULL, NULL, NULL, NULL, 'GST', 2, 1, '2021-03-25 23:20:31', '2021-03-25 23:20:31'),
(40, 'AC', 'Customer/Vendor account', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Regular', NULL, 'B2C', NULL, 'InState', 'Goods', 'Regular', NULL, NULL, NULL, NULL, NULL, 'GST', 2, 1, '2021-03-25 23:24:02', '2021-03-25 23:24:02'),
(41, 'OPS', 'Customer/Vendor account', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Regular', NULL, 'B2C', NULL, 'InState', 'Goods', 'Regular', NULL, NULL, NULL, NULL, NULL, 'GST', 8, 1, '2021-03-25 23:30:36', '2021-03-29 05:00:06'),
(42, 'SSA', 'Customer/Vendor account', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Regular', NULL, 'B2C', NULL, 'InState', 'Goods', 'Regular', NULL, NULL, NULL, NULL, NULL, 'GST', 8, 1, '2021-03-25 23:36:53', '2021-03-29 05:00:43'),
(33, 'DAS', 'Customer/Vendor account', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, 'Regular', NULL, 'B2C', NULL, 'InState', 'Goods', 'Regular', NULL, NULL, NULL, NULL, NULL, 'GST', 8, 1, '2021-03-05 00:59:10', '2021-03-29 05:04:22'),
(34, 'Ramesh & Company', 'Customer/Vendor account', 'test1', 'Aurangabad', '1254654654', '431003', 'Ramesh', '02402357562', '9881427786', 'yasersk.dms@gmail.com', '22', '27', NULL, 'Regular', '27sdasdd', 'B2C', '1154564', 'InState', 'Goods', 'Regular', 'OBC', 'Samarth Nagar', '2764656566565456', 'OCC1654564', '546546', 'Required', 4, 1, '2021-03-08 23:34:35', '2021-03-08 23:35:40'),
(38, 'AAA', 'Customer/Vendor account', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, 'Regular', NULL, 'B2C', NULL, 'InState', 'Goods', 'Regular', NULL, NULL, NULL, NULL, NULL, 'GST', 8, 1, '2021-03-25 23:09:35', '2021-03-29 05:00:24'),
(44, 'OSA1', 'Customer/Vendor account', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Regular', NULL, 'B2C', NULL, 'InState', 'Goods', 'Regular', NULL, NULL, NULL, NULL, NULL, 'GST', 2, 1, '2021-04-02 03:23:49', '2021-04-02 03:23:49'),
(52, 'Yaser outoff state', 'Customer/Vendor account', 'test', 'Aurangabad', '126477', '431001', 'Yaser', NULL, '9881427786', 'yasersk.dms@gmail.com', '22', '0', NULL, 'Regular', '13535', 'B2C', NULL, 'OutState', 'Goods', 'Regular', NULL, NULL, NULL, NULL, NULL, 'GST', 5, 1, '2021-06-25 08:07:53', '2021-06-25 08:07:53'),
(48, 'Tilesh Deshmukh', 'Bank account', '145 vikhe Nagar chitod road dhule', 'Dhule', NULL, 'dtilesh@gmail.com', NULL, NULL, '08308283380', NULL, '0', NULL, NULL, 'Regular', NULL, 'B2C', NULL, 'InState', 'Goods', 'Regular', NULL, NULL, NULL, NULL, NULL, 'GST', 10, 1, '2021-04-20 01:46:53', '2021-04-20 01:47:50'),
(50, 'my', 'Customer/Vendor account', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, 'Regular', NULL, 'B2C', NULL, 'InState', 'Goods', 'Regular', NULL, NULL, NULL, NULL, NULL, 'GST', 2, 1, '2021-04-22 22:39:08', '2021-04-22 22:39:08'),
(51, 'abc', 'TDS', '145 vikhe Nagar chitod road dhule', 'Dhule', NULL, 'dtilesh@gmail.com', NULL, NULL, '08308283380', NULL, '0', NULL, NULL, 'Regular', NULL, 'B2C', NULL, 'InState', 'Goods', 'Regular', NULL, NULL, NULL, NULL, NULL, 'GST', 12, 1, '2021-04-24 06:36:21', '2021-04-24 06:36:21');

-- --------------------------------------------------------

--
-- Table structure for table `account_treesgroup`
--

CREATE TABLE `account_treesgroup` (
  `id` int(11) NOT NULL,
  `groupname` varchar(65) NOT NULL,
  `cmp_id` int(20) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account_treesgroup`
--

INSERT INTO `account_treesgroup` (`id`, `groupname`, `cmp_id`, `updated_at`, `created_at`) VALUES
(2, 'Book', 1, '2021-03-16 08:35:10', '0000-00-00 00:00:00'),
(4, 'Sundry Debitors 2', 1, '2021-03-16 08:35:20', '2020-12-11 02:08:17'),
(5, 'Account', 1, '2021-03-16 08:35:17', '2020-12-11 05:34:06'),
(7, 'Abc', 2, '2021-03-16 08:35:24', '2020-12-23 04:19:43'),
(8, 'ATG', 1, '2021-03-29 04:59:50', '2021-03-29 04:59:50'),
(9, 'Sundry Creditors', 1, '2021-04-17 04:06:02', '2021-04-17 04:06:02'),
(10, 'text', 1, '2021-04-20 01:45:53', '2021-04-20 01:45:53'),
(12, 'grup', 1, '2021-04-24 06:35:39', '2021-04-24 06:35:39');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `brand_name` varchar(50) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `cmp_id` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `brand_name`, `product_id`, `cmp_id`, `updated_at`, `created_at`) VALUES
(1, 'Vikas', 12, 1, '2021-03-29 05:22:45', '2020-10-31 05:21:12'),
(2, 'HP', 11, 1, '2021-03-29 10:47:23', '0000-00-00 00:00:00'),
(3, 'fh', 12, 2, '2021-03-29 10:47:33', '0000-00-00 00:00:00'),
(8, 'Demo', NULL, 1, '2021-03-29 10:55:00', '2020-11-24 03:06:50'),
(6, 'skk', 11, 1, '2021-03-29 10:47:29', '2020-11-19 01:08:53'),
(9, 'AAAAAAAAA', NULL, 1, '2021-03-29 10:47:42', '2021-02-13 05:10:26'),
(12, 'Vikram', NULL, 1, '2021-04-17 03:41:31', '2021-04-17 03:41:31'),
(14, 'TITLI DUST', NULL, 1, '2021-04-17 03:41:56', '2021-04-17 03:41:56'),
(16, 'zero1', NULL, 1, '2021-04-22 22:40:34', '2021-04-22 22:40:16');

-- --------------------------------------------------------

--
-- Table structure for table `company_details`
--

CREATE TABLE `company_details` (
  `id` int(11) NOT NULL,
  `cmpname` varchar(55) DEFAULT NULL,
  `cmplogo` varchar(110) DEFAULT NULL,
  `cmpowner` varchar(55) DEFAULT NULL,
  `cmpaddress` text DEFAULT NULL,
  `cmpregistrationdetails` varchar(55) DEFAULT NULL,
  `cmpregistermobile` varchar(55) DEFAULT NULL,
  `bankname` varchar(55) DEFAULT NULL,
  `branchname` varchar(50) DEFAULT NULL,
  `bank_account_no` varchar(55) DEFAULT NULL,
  `IFSC` varchar(55) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company_details`
--

INSERT INTO `company_details` (`id`, `cmpname`, `cmplogo`, `cmpowner`, `cmpaddress`, `cmpregistrationdetails`, `cmpregistermobile`, `bankname`, `branchname`, `bank_account_no`, `IFSC`, `updated_at`, `created_at`) VALUES
(3, 'Rishi Cmp', 'large_ring.png', 'xyz', 'Beed', '45612379', '9876543210', 'ICICI', 'jalna road', '258258654456', '555', '2020-11-06 06:49:02', '2020-11-06 00:44:32'),
(4, 'Rishi Cmp', NULL, 'xyz', 'A-102, Meghmalhar Complex, Above Maratha Hotel Cannought, N 5, Cidco,Aurangabad, Maharashtra', '45612379', '9876543210', 'ICICI', 'jalna road', '258258654456', '555', '2020-12-17 01:06:10', '2020-12-17 01:06:10'),
(5, 'Rishi Cmp', NULL, 'xyz', 'A-102, Meghmalhar Complex, Above Maratha Hotel Cannought, N 5, Cidco,Aurangabad, Maharashtra', '45612379', '9876543210', 'ICICI', 'jalna road', '258258654456', '555', '2020-12-17 01:06:33', '2020-12-17 01:06:33');

-- --------------------------------------------------------

--
-- Table structure for table `composition_bill`
--

CREATE TABLE `composition_bill` (
  `id` int(10) NOT NULL,
  `cmp_id` int(11) NOT NULL,
  `Voucher_no` int(50) NOT NULL,
  `Sales_Account` varchar(50) NOT NULL,
  `Service_Acc` varchar(75) NOT NULL,
  `billCreatedDate` varchar(50) NOT NULL,
  `dueDate` varchar(45) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `bill_narration` varchar(75) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `totalBillQuantity` int(25) NOT NULL,
  `totalBillAmount` double NOT NULL,
  `addRound` double DEFAULT NULL,
  `hamali` double NOT NULL,
  `cashDisc` int(25) NOT NULL,
  `lastNetAmt` double NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `composition_bill`
--

INSERT INTO `composition_bill` (`id`, `cmp_id`, `Voucher_no`, `Sales_Account`, `Service_Acc`, `billCreatedDate`, `dueDate`, `customer_name`, `bill_narration`, `mobile`, `totalBillQuantity`, `totalBillAmount`, `addRound`, `hamali`, `cashDisc`, `lastNetAmt`, `updated_at`, `created_at`) VALUES
(1, 1, 1, 'Composition Sale', 'Composition Sale', '3-4-2021', '3/4/2021', 'Prathmesh', 'ss', '8007327049', 50, 1750, NULL, 50, 10, 1575, '2021-04-03 09:50:39', '2021-04-03 09:50:39'),
(2, 1, 2, 'Prathmesh', 'Composition Sale', '22-5-2021', '13/6/2021', 'Rishi', 'my', '8446883665', 43, 51600, NULL, 22, 11, 45924, '2021-05-22 11:06:31', '2021-05-22 11:06:31'),
(3, 1, 3, 'Prathmesh', 'Composition Sale', '3-6-2021', '6/6/2021', 'Rishi', 'me', '8446883665', 21, 25204.41, 0.41, 11, 0, 25204, '2021-06-03 09:35:57', '2021-06-03 09:35:57');

-- --------------------------------------------------------

--
-- Table structure for table `composition_bill_data`
--

CREATE TABLE `composition_bill_data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `composition_bill_id` int(11) NOT NULL,
  `cmp_id` int(11) NOT NULL,
  `item` varchar(55) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `itemId` int(11) NOT NULL,
  `description` varchar(65) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quntity` int(11) NOT NULL,
  `rate` float NOT NULL,
  `gross` float NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `composition_bill_data`
--

INSERT INTO `composition_bill_data` (`id`, `composition_bill_id`, `cmp_id`, `item`, `itemId`, `description`, `quntity`, `rate`, `gross`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'LUX', 13, 'ss', 50, 35, 1750, '2021-04-03 04:20:39', '2021-04-03 04:20:39'),
(2, 2, 1, 'Shooes', 11, 'mi', 43, 1200, 51600, '2021-05-22 05:36:31', '2021-05-22 05:36:31'),
(3, 3, 1, 'Shooes', 11, 'qq', 21, 1200.21, 25204.4, '2021-06-03 04:05:57', '2021-06-03 04:05:57');

-- --------------------------------------------------------

--
-- Table structure for table `credit_note`
--

CREATE TABLE `credit_note` (
  `id` int(10) NOT NULL,
  `cmp_id` int(11) NOT NULL,
  `Voucher_no` int(50) NOT NULL,
  `Sales_Account` varchar(50) NOT NULL,
  `Service_Acc` varchar(75) NOT NULL,
  `billCreatedDate` varchar(50) NOT NULL,
  `dueDate` varchar(45) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `bill_narration` varchar(75) DEFAULT NULL,
  `mobile` varchar(15) NOT NULL,
  `gstpartytype` varchar(25) NOT NULL,
  `totalBillQuantity` double NOT NULL,
  `totalTaxableAmount` float NOT NULL,
  `totalGSTAmount` float NOT NULL,
  `totalIGSTtxt` float NOT NULL,
  `totalRoundoffAmount` float NOT NULL,
  `addRound` double DEFAULT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `credit_note`
--

INSERT INTO `credit_note` (`id`, `cmp_id`, `Voucher_no`, `Sales_Account`, `Service_Acc`, `billCreatedDate`, `dueDate`, `customer_name`, `bill_narration`, `mobile`, `gstpartytype`, `totalBillQuantity`, `totalTaxableAmount`, `totalGSTAmount`, `totalIGSTtxt`, `totalRoundoffAmount`, `addRound`, `updated_at`, `created_at`) VALUES
(1, 1, 1, 'Service', 'Service', '15-3-2021', '15/3/2021', 'Rishi', 's', '8446883665', 'InState', 5, 5601, 672.12, 0, 6273.12, NULL, '2021-03-15 07:40:52', '2021-03-15 07:40:52'),
(2, 1, 2, 'Service', 'Service', '15-3-2021', '15/3/2021', 'Prathmesh', 's', '8007327049', 'OutState', 5, 5608, 0, 1109.27, 5608, NULL, '2021-03-15 07:37:51', '2021-03-15 07:37:51'),
(3, 1, 3, 'Service', 'Service', '15-3-2021', '15/3/2021', 'Rishi', 's', '8446883665', 'InState', 5, 5420, 650.4, 0, 6070.4, NULL, '2021-03-15 09:14:12', '2021-03-15 09:14:12'),
(4, 1, 4, 'Prathmesh', 'Credit Note', '25-5-2021', '19/6/2021', 'Rishi', 'n', '8446883665', 'InState', 11, 13200, 1584, 0, 14784, NULL, '2021-05-25 10:49:21', '2021-05-25 10:49:21'),
(5, 1, 5, 'Prathmesh', 'Credit Note', '3-6-2021', '6/6/2021', 'Rishi', 'qq', '8446883665', 'InState', 22, 26405, 3168.6, 0, 29573.6, NULL, '2021-06-03 11:13:25', '2021-06-03 11:13:25'),
(6, 1, 6, 'Prathmesh', 'Credit Note', '3-6-2021', '6/6/2021', 'Rishi', 'qq', '8446883665', 'InState', 11, 13202, 1584.24, 0, 14786.2, 0.24, '2021-06-03 11:16:30', '2021-06-03 11:16:30'),
(7, 1, 7, 'Credit Note', 'Credit Note', '26-6-2021', '16/7/2021', 'CASH', NULL, '9881427786', 'InState', 1, 2000, 240, 0, 2240, 0, '2021-06-26 10:44:51', '2021-06-26 10:44:51');

-- --------------------------------------------------------

--
-- Table structure for table `credit_note_data`
--

CREATE TABLE `credit_note_data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `credit_note_id` int(11) NOT NULL,
  `cmp_id` int(11) NOT NULL,
  `item` varchar(55) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GST` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(65) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quntity` int(11) NOT NULL,
  `rate` float NOT NULL,
  `itemId` int(11) NOT NULL,
  `gross` float NOT NULL,
  `Discount` float NOT NULL,
  `Tradedisc` float NOT NULL,
  `Addless` float NOT NULL,
  `Taxable` float NOT NULL,
  `CGST` float NOT NULL,
  `SGST` float NOT NULL,
  `IGST` float NOT NULL,
  `DiscountforUpdate` float NOT NULL,
  `TradediscforUpdate` float NOT NULL,
  `GSTforUpdate` float NOT NULL,
  `IGSTforUpdate` float NOT NULL,
  `singleItemDiscPrice` float NOT NULL,
  `singleItemTradeDiscPrice` float NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `credit_note_data`
--

INSERT INTO `credit_note_data` (`id`, `credit_note_id`, `cmp_id`, `item`, `GST`, `description`, `quntity`, `rate`, `itemId`, `gross`, `Discount`, `Tradedisc`, `Addless`, `Taxable`, `CGST`, `SGST`, `IGST`, `DiscountforUpdate`, `TradediscforUpdate`, `GSTforUpdate`, `IGSTforUpdate`, `singleItemDiscPrice`, `singleItemTradeDiscPrice`, `created_at`, `updated_at`) VALUES
(7, 1, 1, 'Shooes', 'GST 12%', 's', 5, 1200, 11, 6000, 2, 5, 15, 5601, 6, 6, 0, 5880, 5586, 336.06, 0, 120, 294, '2021-03-15 02:10:52', '2021-03-15 02:10:52'),
(8, 3, 1, 'Shooes', 'GST 12%', '5s', 5, 1200, 11, 6000, 5, 5, 5, 5420, 6, 6, 0, 5700, 5415, 325.2, 0, 300, 285, '2021-03-15 03:44:12', '2021-03-15 03:44:12'),
(6, 2, 1, 'Shooes', 'GST 12%', 'sx', 5, 1200, 11, 6000, 2, 5, 22, 5608, 0, 0, 9, 5880, 5586, 0, 504.72, 120, 294, '2021-03-15 02:07:51', '2021-03-15 02:07:51'),
(9, 4, 1, 'Shooes', 'GST 12%', 'q', 11, 1200, 11, 13200, 0, 0, 0, 13200, 6, 6, 0, 13200, 13200, 792, 0, 0, 0, '2021-05-25 05:19:21', '2021-05-25 05:19:21'),
(10, 5, 1, 'Shooes', 'GST 12%', 'qq', 22, 1200.23, 11, 26405.1, 0, 0, 0, 26405, 6, 6, 0, 26405, 26405, 1584.3, 0, 0, 0, '2021-06-03 05:43:25', '2021-06-03 05:43:25'),
(11, 6, 1, 'Shooes', 'GST 12%', 'qq', 11, 1200.22, 11, 13202.4, 0, 0, 0, 13202, 6, 6, 0, 13202, 13202, 792.12, 0, 0, 0, '2021-06-03 05:46:30', '2021-06-03 05:46:30'),
(12, 7, 1, 'HP', 'GST 12%', 'Description', 1, 2000, 30, 2000, 0, 0, 0, 2000, 6, 6, 0, 2000, 2000, 120, 0, 0, 0, '2021-06-26 05:14:51', '2021-06-26 05:14:51');

-- --------------------------------------------------------

--
-- Table structure for table `debit_note`
--

CREATE TABLE `debit_note` (
  `id` int(10) NOT NULL,
  `cmp_id` int(11) NOT NULL,
  `Voucher_no` int(50) NOT NULL,
  `Sales_Account` varchar(50) NOT NULL,
  `Service_Acc` varchar(75) NOT NULL,
  `billCreatedDate` varchar(50) NOT NULL,
  `dueDate` varchar(45) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `bill_narration` varchar(75) DEFAULT NULL,
  `mobile` varchar(15) NOT NULL,
  `gstpartytype` varchar(25) NOT NULL,
  `totalBillQuantity` double NOT NULL,
  `totalTaxableAmount` float NOT NULL,
  `totalGSTAmount` float NOT NULL,
  `totalIGSTtxt` float NOT NULL,
  `totalRoundoffAmount` float NOT NULL,
  `addRound` double DEFAULT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `debit_note`
--

INSERT INTO `debit_note` (`id`, `cmp_id`, `Voucher_no`, `Sales_Account`, `Service_Acc`, `billCreatedDate`, `dueDate`, `customer_name`, `bill_narration`, `mobile`, `gstpartytype`, `totalBillQuantity`, `totalTaxableAmount`, `totalGSTAmount`, `totalIGSTtxt`, `totalRoundoffAmount`, `addRound`, `updated_at`, `created_at`) VALUES
(1, 1, 1, 'Service', 'Service', '15-3-2021', '15/3/2021', 'Rishi', 's', '8446883665', 'InState', 5, 5601, 672.12, 0, 6273.12, NULL, '2021-03-15 07:40:52', '2021-03-15 07:40:52'),
(2, 1, 2, 'Service', 'Service', '15-3-2021', '15/3/2021', 'Prathmesh', 's', '8007327049', 'OutState', 5, 5608, 0, 1109.27, 5608, NULL, '2021-03-15 07:37:51', '2021-03-15 07:37:51'),
(3, 1, 3, 'Service', 'Service', '16-3-2021', '15/3/2021', 'Rishi', 's', '8446883665', 'InState', 6, 1665.63, 83.2815, 0, 1748.91, NULL, '2021-03-16 05:23:27', '2021-03-16 05:23:27'),
(4, 1, 4, 'Prathmesh', 'Debit Note', '25-5-2021', '19/6/2021', 'Rishi', 'n', '8446883665', 'InState', 11, 360800, 43296, 0, 404096, NULL, '2021-05-25 10:50:16', '2021-05-25 10:50:16'),
(5, 1, 5, 'Prathmesh', 'Debit Note', '3-6-2021', '6/6/2021', 'Rishi', 'qq', '8446883665', 'InState', 22, 26405, 3168.6, 0, 29573.6, NULL, '2021-06-03 11:24:00', '2021-06-03 11:24:00'),
(6, 1, 6, 'Prathmesh', 'Debit Note', '3-6-2021', '6/6/2021', 'Rishi', 'qq', '8446883665', 'InState', 22, 26405, 3168.6, 0, 29573.6, -0.4, '2021-06-03 11:26:16', '2021-06-03 11:26:16'),
(7, 1, 7, 'Debit Note', 'Debit Note', '26-6-2021', '16/7/2021', 'Prathmesh', NULL, '8007327049', 'OutState', 2, 21200, 0, 2544, 23744, 0, '2021-06-26 10:46:37', '2021-06-26 10:46:37');

-- --------------------------------------------------------

--
-- Table structure for table `debit_note_data`
--

CREATE TABLE `debit_note_data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `debit_note_id` int(11) NOT NULL,
  `cmp_id` int(11) NOT NULL,
  `item` varchar(55) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GST` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(65) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quntity` int(11) NOT NULL,
  `rate` float NOT NULL,
  `itemId` int(11) NOT NULL,
  `gross` float NOT NULL,
  `Discount` float NOT NULL,
  `Tradedisc` float NOT NULL,
  `Addless` float NOT NULL,
  `Taxable` float NOT NULL,
  `CGST` float NOT NULL,
  `SGST` float NOT NULL,
  `IGST` float NOT NULL,
  `DiscountforUpdate` float NOT NULL,
  `TradediscforUpdate` float NOT NULL,
  `GSTforUpdate` float NOT NULL,
  `IGSTforUpdate` float NOT NULL,
  `singleItemDiscPrice` float NOT NULL,
  `singleItemTradeDiscPrice` float NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `debit_note_data`
--

INSERT INTO `debit_note_data` (`id`, `debit_note_id`, `cmp_id`, `item`, `GST`, `description`, `quntity`, `rate`, `itemId`, `gross`, `Discount`, `Tradedisc`, `Addless`, `Taxable`, `CGST`, `SGST`, `IGST`, `DiscountforUpdate`, `TradediscforUpdate`, `GSTforUpdate`, `IGSTforUpdate`, `singleItemDiscPrice`, `singleItemTradeDiscPrice`, `created_at`, `updated_at`) VALUES
(7, 1, 1, 'Shooes', 'GST 12%', 's', 5, 1200, 11, 6000, 2, 5, 15, 5601, 6, 6, 0, 5880, 5586, 336.06, 0, 120, 294, '2021-03-15 02:10:52', '2021-03-15 02:10:52'),
(9, 3, 1, 'LUX', 'GST 5%', 'dfgvd', 5, 35, 13, 175, 2, 5, 0, 162.925, 2.5, 2.5, 0, 171.5, 162.925, 4.07312, 0, 3.5, 8.575, '2021-03-15 23:53:27', '2021-03-15 23:53:27'),
(6, 2, 1, 'Shooes', 'GST 12%', 'sx', 5, 1200, 11, 6000, 2, 5, 22, 5608, 0, 0, 9, 5880, 5586, 0, 504.72, 120, 294, '2021-03-15 02:07:51', '2021-03-15 02:07:51'),
(10, 3, 1, 'Service', 'GST 5%', 's', 1, 1555, 15, 1555, 2, 5, 55, 1502.7, 2.5, 2.5, 0, 1523.9, 1447.7, 37.5676, 0, 31.1, 76.195, '2021-03-15 23:53:27', '2021-03-15 23:53:27'),
(11, 4, 1, 'Service', 'GST 5%', 'gg', 5, 1555, 15, 7775, 5, 2, 50, 7288.52, 2.5, 2.5, 0, 7386.25, 7238.52, 182.213, 0, 388.75, 147.725, '2021-04-01 06:53:37', '2021-04-01 06:53:37'),
(12, 4, 1, 'HP', 'GST 12%', 'q', 11, 32800, 30, 360800, 0, 0, 0, 360800, 6, 6, 0, 360800, 360800, 21648, 0, 0, 0, '2021-05-25 05:20:16', '2021-05-25 05:20:16'),
(13, 5, 1, 'Shooes', 'GST 12%', 'qq', 22, 1200.22, 11, 26404.8, 0, 0, 0, 26405, 6, 6, 0, 26405, 26405, 1584.3, 0, 0, 0, '2021-06-03 05:54:00', '2021-06-03 05:54:00'),
(14, 6, 1, 'Shooes', 'GST 12%', 'q', 22, 1200.22, 11, 26404.8, 0, 0, 0, 26405, 6, 6, 0, 26405, 26405, 1584.3, 0, 0, 0, '2021-06-03 05:56:16', '2021-06-03 05:56:16'),
(15, 7, 1, 'Shooes', 'GST 12%', 'Description', 1, 1200, 11, 1200, 0, 0, 0, 1200, 0, 0, 12, 1200, 1200, 0, 144, 0, 0, '2021-06-26 05:16:37', '2021-06-26 05:16:37'),
(16, 7, 1, 'HP', 'GST 12%', 'Description', 1, 20000, 30, 20000, 0, 0, 0, 20000, 0, 0, 12, 20000, 20000, 0, 2400, 0, 0, '2021-06-26 05:16:37', '2021-06-26 05:16:37');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `department_name` varchar(50) NOT NULL,
  `department_code` varchar(50) NOT NULL,
  `cmp_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `department_name`, `department_code`, `cmp_id`, `created_at`, `updated_at`) VALUES
(1, 'Seed', '54', 1, '2021-03-29 11:16:32', '2020-11-19 03:11:06'),
(2, 'kj', '5454', 1, '2021-03-29 11:16:27', '2020-11-19 03:10:52'),
(5, 'CVV', '112', 1, '2021-03-29 11:19:05', '2020-11-24 01:25:04'),
(4, 'AaA', '5S5S', 0, '2020-11-19 03:11:23', '2020-11-19 03:11:23'),
(6, 'v2v2', 'v2v2v', 1, '2021-03-29 05:49:20', '2021-03-29 05:49:20'),
(7, 'TEA', '0', 1, '2021-04-17 03:35:25', '2021-04-17 03:35:25');

-- --------------------------------------------------------

--
-- Table structure for table `excess_stock`
--

CREATE TABLE `excess_stock` (
  `id` int(10) NOT NULL,
  `cmp_id` int(11) NOT NULL,
  `Voucher_no` int(50) NOT NULL,
  `Sales_Account` varchar(50) NOT NULL,
  `Service_Acc` varchar(75) NOT NULL,
  `billCreatedDate` varchar(50) NOT NULL,
  `dueDate` varchar(45) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `bill_narration` varchar(75) DEFAULT NULL,
  `mobile` varchar(15) NOT NULL,
  `totalBillQuantity` double NOT NULL,
  `totalBillAmount` double NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `excess_stock`
--

INSERT INTO `excess_stock` (`id`, `cmp_id`, `Voucher_no`, `Sales_Account`, `Service_Acc`, `billCreatedDate`, `dueDate`, `customer_name`, `bill_narration`, `mobile`, `totalBillQuantity`, `totalBillAmount`, `updated_at`, `created_at`) VALUES
(1, 1, 1, 'Service', 'Service', '5-3-2021', '7/3/2021', 'Rishi', 'sxdc', '8446883665', 11, 12610, '2021-03-05 11:52:38', '2021-03-05 11:52:38'),
(2, 1, 2, 'Excess Stock', 'Excess Stock', '26-6-2021', '12/7/2021', 'Hello', 'test', '0830828338', 10, 328000, '2021-06-26 10:56:49', '2021-06-26 10:56:49'),
(3, 1, 3, 'Prathmesh', 'Excess Stock', '30-6-2021', '30/7/2021', 'Rishi', NULL, '8446883665', 1, 1200, '2021-06-30 07:48:51', '2021-06-30 07:48:51');

-- --------------------------------------------------------

--
-- Table structure for table `excess_stock_data`
--

CREATE TABLE `excess_stock_data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `excess_stock_id` int(11) NOT NULL,
  `cmp_id` int(11) NOT NULL,
  `item` varchar(55) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(65) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quntity` int(11) NOT NULL,
  `rate` float NOT NULL,
  `gross` float NOT NULL,
  `itemId` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `excess_stock_data`
--

INSERT INTO `excess_stock_data` (`id`, `excess_stock_id`, `cmp_id`, `item`, `description`, `quntity`, `rate`, `gross`, `itemId`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Abc', 'sxdc', 5, 2480, 12400, 14, '2021-03-05 06:22:38', '2021-03-05 06:22:38'),
(2, 1, 1, 'LUX', 'sxd', 6, 35, 210, 13, '2021-03-05 06:22:38', '2021-03-05 06:22:38'),
(3, 2, 1, 'HP', 'Description', 10, 1000, 10000, 30, '2021-06-26 05:26:31', '2021-06-26 05:26:31'),
(4, 2, 1, 'HP', 'Description', 10, 32800, 328000, 30, '2021-06-26 05:26:49', '2021-06-26 05:26:49'),
(5, 3, 1, 'Shooes', 'Description', 1, 1200, 1200, 11, '2021-06-30 02:18:07', '2021-06-30 02:18:07'),
(6, 3, 1, 'Shooes', 'Description', 1, 1200, 1200, 11, '2021-06-30 02:18:51', '2021-06-30 02:18:51');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `general_entry`
--

CREATE TABLE `general_entry` (
  `id` int(10) NOT NULL,
  `cmp_id` int(100) NOT NULL,
  `voucher_no` int(100) NOT NULL,
  `billcreatedDate` varchar(50) NOT NULL,
  `dueDate` varchar(50) DEFAULT NULL,
  `debitTotal` double NOT NULL,
  `creditTotal` double NOT NULL,
  `created_at` datetime(6) NOT NULL,
  `updated_at` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `general_entry`
--

INSERT INTO `general_entry` (`id`, `cmp_id`, `voucher_no`, `billcreatedDate`, `dueDate`, `debitTotal`, `creditTotal`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '30-6-2021', '30/7/2021', 111, 111, '2021-06-30 11:21:50.000000', '2021-06-30 11:21:50.000000');

-- --------------------------------------------------------

--
-- Table structure for table `general_entry_data`
--

CREATE TABLE `general_entry_data` (
  `id` bigint(50) NOT NULL,
  `general_entry_id` int(50) NOT NULL,
  `cmp_id` int(50) NOT NULL,
  `account_name` varchar(50) NOT NULL,
  `debit` double NOT NULL,
  `credit` double NOT NULL,
  `DueDate` varchar(50) DEFAULT NULL,
  `created_at` datetime(6) NOT NULL,
  `updated_at` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `general_entry_data`
--

INSERT INTO `general_entry_data` (`id`, `general_entry_id`, `cmp_id`, `account_name`, `debit`, `credit`, `DueDate`, `created_at`, `updated_at`) VALUES
(4, 1, 1, 'Prathmesh', 111, 111, 'no', '2021-06-30 11:21:50.000000', '2021-06-30 11:21:50.000000');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(105) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_10_13_094914_create_account_trees_table', 1),
(5, '2014_10_12_000001_create_users_table', 2),
(6, '2021_01_22_100803_create_service_bill_data_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `opening_balance`
--

CREATE TABLE `opening_balance` (
  `id` int(10) NOT NULL,
  `cmp_id` int(50) NOT NULL,
  `Voucher_no` int(50) NOT NULL,
  `billCreatedDate` varchar(50) NOT NULL,
  `dueDate` varchar(50) DEFAULT NULL,
  `debitTotal` float NOT NULL,
  `creditTotal` float NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `opening_balance`
--

INSERT INTO `opening_balance` (`id`, `cmp_id`, `Voucher_no`, `billCreatedDate`, `dueDate`, `debitTotal`, `creditTotal`, `updated_at`, `created_at`) VALUES
(1, 1, 1, '24-3-2021', '24/3/2021', 500, 500, '2021-03-24 12:01:23', '2021-03-24 12:01:23'),
(2, 1, 2, '25-3-2021', '30/3/2021', 300, 300, '2021-03-25 11:24:32', '2021-03-25 11:24:32'),
(3, 1, 3, '26-6-2021', '12/7/2021', 500, 1000, '2021-06-26 10:54:29', '2021-06-26 10:54:29'),
(4, 1, 4, '30-6-2021', '30/7/2021', 30, 30, '2021-06-30 07:25:01', '2021-06-30 07:25:01'),
(5, 1, 5, '30-6-2021', NULL, 122, 122, '2021-06-30 07:32:10', '2021-06-30 07:32:10'),
(6, 1, 1, '30-6-2021', NULL, 11, 11, '2021-06-30 10:51:20', '2021-06-30 10:51:20');

-- --------------------------------------------------------

--
-- Table structure for table `opening_balance_data`
--

CREATE TABLE `opening_balance_data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `opening_balance_id` int(11) NOT NULL,
  `cmp_id` int(11) NOT NULL,
  `account_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `debit` float NOT NULL,
  `credit` float NOT NULL,
  `DueDate` varchar(35) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `opening_balance_data`
--

INSERT INTO `opening_balance_data` (`id`, `opening_balance_id`, `cmp_id`, `account_name`, `debit`, `credit`, `DueDate`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Raju', 500, 0, '28/03/2021', '2021-03-24 06:31:23', '2021-03-24 06:31:23'),
(2, 1, 1, 'Prathmesh', 0, 500, '29/03/2021', '2021-03-24 06:31:23', '2021-03-24 06:31:23'),
(9, 2, 1, 'Prathmesh', 100, 0, '30-04-2021', '2021-03-25 05:54:32', '2021-03-25 05:54:32'),
(8, 2, 1, 'Prathmesh', 100, 0, '30-04-2021', '2021-03-25 05:54:32', '2021-03-25 05:54:32'),
(7, 2, 1, 'Prathmesh', 100, 0, '30-04-2021', '2021-03-25 05:54:32', '2021-03-25 05:54:32'),
(10, 2, 1, 'Ram', 0, 100, '30-04-2021', '2021-03-25 05:54:32', '2021-03-25 05:54:32'),
(11, 3, 1, 'Rishi', 500, 0, '01-04-2021', '2021-06-26 05:24:29', '2021-06-26 05:24:29'),
(12, 3, 1, 'Prathmesh', 0, 1000, '01-04-2021', '2021-06-26 05:24:29', '2021-06-26 05:24:29'),
(13, 4, 1, 'Rishi', 10, 10, '30-6-2021', '2021-06-30 01:55:01', '2021-06-30 01:55:01'),
(14, 4, 1, 'Lux', 20, 20, '20-6-2021', '2021-06-30 01:55:01', '2021-06-30 01:55:01'),
(15, 5, 1, 'Prathmesh', 111, 111, '30/6/2021', '2021-06-30 02:01:16', '2021-06-30 02:01:16'),
(16, 5, 1, 'Prathmesh', 111, 111, '30/6/2021', '2021-06-30 02:02:10', '2021-06-30 02:02:10'),
(17, 5, 1, 'Rishi', 11, 11, '30/7/2021', '2021-06-30 02:02:10', '2021-06-30 02:02:10'),
(18, 1, 1, 'Rishi', 11, 11, 'no', '2021-06-30 05:21:20', '2021-06-30 05:21:20');

-- --------------------------------------------------------

--
-- Table structure for table `opening_stock`
--

CREATE TABLE `opening_stock` (
  `id` int(10) NOT NULL,
  `cmp_id` int(11) NOT NULL,
  `Voucher_no` int(50) NOT NULL,
  `Sales_Account` varchar(50) NOT NULL,
  `Service_Acc` varchar(75) NOT NULL,
  `billCreatedDate` varchar(50) NOT NULL,
  `dueDate` varchar(45) DEFAULT NULL,
  `customer_name` varchar(50) NOT NULL,
  `bill_narration` varchar(75) DEFAULT NULL,
  `mobile` varchar(15) NOT NULL,
  `totalBillQuantity` int(25) NOT NULL,
  `totalBillAmount` int(25) NOT NULL,
  `addRound` double DEFAULT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `opening_stock`
--

INSERT INTO `opening_stock` (`id`, `cmp_id`, `Voucher_no`, `Sales_Account`, `Service_Acc`, `billCreatedDate`, `dueDate`, `customer_name`, `bill_narration`, `mobile`, `totalBillQuantity`, `totalBillAmount`, `addRound`, `updated_at`, `created_at`) VALUES
(1, 1, 1, 'Service', 'Service', '5-3-2021', '10/3/2021', 'Rishi', 'fcv', '8446883665', 54, 92960, NULL, '2021-03-05 11:11:10', '2021-03-05 11:11:10'),
(2, 1, 2, 'Prathmesh', 'Opening Stock', '3-6-2021', '6/6/2021', 'Rishi', 'qq', '8446883665', 11, 13201, NULL, '2021-06-03 11:54:48', '2021-06-03 11:54:48'),
(3, 1, 3, 'Prathmesh', 'Opening Stock', '3-6-2021', '6/6/2021', 'Rishi', 'qq', '8446883665', 11, 13202, 0.42, '2021-06-03 11:59:48', '2021-06-03 11:59:48'),
(4, 1, 4, 'Opening Stock', 'Opening Stock', '26-6-2021', '12/7/2021', 'Lux', NULL, '9630125874', 5, 164000, 0, '2021-06-26 10:53:04', '2021-06-26 10:53:04');

-- --------------------------------------------------------

--
-- Table structure for table `opening_stock_data`
--

CREATE TABLE `opening_stock_data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `opening_stock_id` int(11) NOT NULL,
  `cmp_id` int(11) NOT NULL,
  `item` varchar(55) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(65) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quntity` int(11) NOT NULL,
  `rate` float NOT NULL,
  `gross` float NOT NULL,
  `itemId` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `opening_stock_data`
--

INSERT INTO `opening_stock_data` (`id`, `opening_stock_id`, `cmp_id`, `item`, `description`, `quntity`, `rate`, `gross`, `itemId`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Shooes', '51s5', 32, 1200, 38400, 11, '2021-03-05 05:41:10', '2021-03-05 05:41:10'),
(2, 1, 1, 'Abc', 's', 22, 2480, 54560, 14, '2021-03-05 05:41:10', '2021-03-05 05:41:10'),
(3, 2, 1, 'Shooes', 'qq', 11, 1200.11, 13201.2, 11, '2021-06-03 06:24:48', '2021-06-03 06:24:48'),
(4, 3, 1, 'Shooes', 'qq', 11, 1200.22, 13202.4, 11, '2021-06-03 06:29:48', '2021-06-03 06:29:48'),
(5, 4, 1, 'HP', 'Description', 5, 20000, 100000, 30, '2021-06-26 05:21:56', '2021-06-26 05:21:56'),
(6, 4, 1, 'HP', 'Description', 5, 32800, 164000, 30, '2021-06-26 05:22:22', '2021-06-26 05:22:22'),
(7, 4, 1, 'HP', 'Description', 5, 32800, 164000, 30, '2021-06-26 05:23:04', '2021-06-26 05:23:04');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(65) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('gadkarrushikesh906@gmail.com', '$2y$10$/J0PdWlTL.l8CZv6n0mHS.Wpi.TamlQQYdKs.XISwXtpRYRmp0EEG', '2021-02-11 03:36:20'),
('info@ewebdigital.com', '$2y$10$mGpB7yGg91RknLzqJbADde7xb41KEZ/AJgEEoyWVw5I0n1C0KY3hy', '2021-04-17 02:49:12'),
('sappi.cd@gmail.com', '$2y$10$3NYegaOtrhOSy5DWwTD6NucH0WzgVMlipluU3UbX0wniAzzMe47/O', '2021-04-17 02:50:26');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(10) NOT NULL,
  `cmp_id` int(50) NOT NULL,
  `Voucher_no` int(50) NOT NULL,
  `Account` varchar(55) NOT NULL,
  `billCreatedDate` varchar(50) NOT NULL,
  `cheque_no` varchar(70) NOT NULL,
  `bill_narration` varchar(50) NOT NULL,
  `total` float NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `cmp_id`, `Voucher_no`, `Account`, `billCreatedDate`, `cheque_no`, `bill_narration`, `total`, `updated_at`, `created_at`) VALUES
(1, 1, 1, 'Cash/Bank', '15-4-2021', '1234', '0', 9173, '2021-04-15 12:34:30', '2021-04-15 12:34:30');

-- --------------------------------------------------------

--
-- Table structure for table `payments_data`
--

CREATE TABLE `payments_data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `payments_id` int(11) NOT NULL,
  `cmp_id` int(11) NOT NULL,
  `account_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` float NOT NULL,
  `remarks` varchar(55) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments_data`
--

INSERT INTO `payments_data` (`id`, `payments_id`, `cmp_id`, `account_name`, `amount`, `remarks`, `created_at`, `updated_at`) VALUES
(10, 1, 1, 'Prathmesh', 123, 'o', '2021-04-15 07:04:30', '2021-04-15 07:04:30'),
(9, 1, 1, 'Yaser & Company', 500, 'kk', '2021-04-15 07:04:30', '2021-04-15 07:04:30'),
(11, 1, 1, 'Hello', 8450, 'o', '2021-04-15 07:04:30', '2021-04-15 07:04:30'),
(12, 1, 1, 'Lux', 100, 'test', '2021-04-15 07:04:30', '2021-04-15 07:04:30');

-- --------------------------------------------------------

--
-- Table structure for table `pettycash`
--

CREATE TABLE `pettycash` (
  `id` int(10) NOT NULL,
  `cmp_id` int(50) NOT NULL,
  `Voucher_no` int(50) NOT NULL,
  `Account` varchar(55) NOT NULL,
  `billCreatedDate` varchar(50) NOT NULL,
  `cheque_no` varchar(70) NOT NULL,
  `bill_narration` varchar(50) NOT NULL,
  `paidTo` varchar(75) NOT NULL,
  `total` float NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pettycash`
--

INSERT INTO `pettycash` (`id`, `cmp_id`, `Voucher_no`, `Account`, `billCreatedDate`, `cheque_no`, `bill_narration`, `paidTo`, `total`, `updated_at`, `created_at`) VALUES
(1, 1, 1, 'Cash/Bank', '24-3-2021', 'F4F45F155D8D555', 'ABC', 'XYX', 800, '2021-03-24 04:15:40', '2021-03-24 04:15:40');

-- --------------------------------------------------------

--
-- Table structure for table `pettycash_data`
--

CREATE TABLE `pettycash_data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pettyCash_id` int(11) NOT NULL,
  `cmp_id` int(11) NOT NULL,
  `account_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` float NOT NULL,
  `remarks` varchar(65) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pettycash_data`
--

INSERT INTO `pettycash_data` (`id`, `pettyCash_id`, `cmp_id`, `account_name`, `amount`, `remarks`, `created_at`, `updated_at`) VALUES
(11, 1, 1, 'Rishi', 550, 'D', '2021-03-23 22:45:40', '2021-03-23 22:45:40'),
(10, 1, 1, 'Ram', 250, 'MM', '2021-03-23 22:45:40', '2021-03-23 22:45:40');

-- --------------------------------------------------------

--
-- Table structure for table `product_trees`
--

CREATE TABLE `product_trees` (
  `id` int(11) NOT NULL,
  `itemname` varchar(55) DEFAULT NULL,
  `itemcode` varchar(55) DEFAULT NULL,
  `description` varchar(55) DEFAULT NULL,
  `unit` varchar(55) DEFAULT NULL,
  `hsn_sac` varchar(55) DEFAULT NULL,
  `Selling_Rate` varchar(50) DEFAULT NULL,
  `Buying_Rate` varchar(50) DEFAULT NULL,
  `item_type` varchar(50) NOT NULL,
  `product_category` varchar(55) DEFAULT NULL,
  `gst_unit` varchar(55) DEFAULT NULL,
  `Taxes` varchar(50) DEFAULT NULL,
  `INCL` varchar(50) DEFAULT NULL,
  `Brand_Name` varchar(50) DEFAULT NULL,
  `Size` varchar(50) DEFAULT NULL,
  `itemDivision` varchar(30) DEFAULT NULL,
  `Types` varchar(30) DEFAULT NULL,
  `group_id` int(20) DEFAULT NULL,
  `cmpUserId` int(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_trees`
--

INSERT INTO `product_trees` (`id`, `itemname`, `itemcode`, `description`, `unit`, `hsn_sac`, `Selling_Rate`, `Buying_Rate`, `item_type`, `product_category`, `gst_unit`, `Taxes`, `INCL`, `Brand_Name`, `Size`, `itemDivision`, `Types`, `group_id`, `cmpUserId`, `created_at`, `updated_at`) VALUES
(12, 'Santoor', '55DO7', 'lksjdf', '2500', 'klj', '20', '225', 'Branded', 'Non-GST', '12%', 'GST 5%', '1.05', 'NoN', 'NoN', NULL, NULL, 2, 0, '2021-01-04 06:21:12', '2021-01-04 00:51:12'),
(11, 'Shooes', '44a52d5', 'hjgjjkjh', '11BB', 'NIKE-001', '1200', 'vn', 'Imported', 'Normal', 'hjvbvhj', 'GST 12%', '1.12', 'Vikas Milk', 'ldsk', NULL, NULL, 3, 1, '2021-01-04 04:58:35', '2021-03-16 05:22:22'),
(48, 'product T', 'sds32435', 'thi is LLL Product', '2', 'aa', NULL, NULL, 'Imported', 'Normal', NULL, 'NoN', 'NoN', 'NoN', 'NoN', NULL, NULL, 5, 1, '2021-04-20 03:48:49', '2021-04-20 03:48:49'),
(14, 'Abc', 'VKGFJF', 'BNVNGH', 'GHJG', 'HJHJ', '2480', 'HJ', 'Imported', 'Normal', 'GHG', 'GST 12%', 'NoN', 'HP', 'jsdd', NULL, NULL, 2, 0, '2021-01-01 09:19:23', '2020-12-15 01:22:36'),
(15, 'Service', 'efs', 'sdfs', 'Nos', '1655', '1555', '100', 'Imported', 'Normal', 'sdfsdf', 'GST 5%', '1.05', 'NoN', 'NoN', NULL, NULL, 3, 1, '2021-01-02 04:26:48', '2021-02-03 03:14:01'),
(16, 'Item1', 'jhghj', 'ghjg', 'hjghj', 'ghj', '454', '54', 'Imported', 'Normal', '5', 'NoN', 'NoN', 'NoN', 'NoN', NULL, NULL, 0, 1, '2021-01-07 05:44:20', '2021-01-07 00:14:19'),
(19, 'job1', NULL, NULL, NULL, NULL, NULL, NULL, 'Imported', 'Normal', NULL, 'GST 12%', 'NoN', 'NoN', 'NoN', NULL, NULL, 3, 1, '2021-01-07 01:53:47', '2021-02-03 23:08:39'),
(20, 'aaA', NULL, NULL, NULL, NULL, NULL, NULL, 'Imported', 'Normal', NULL, 'NoN', 'NoN', 'NoN', 'NoN', NULL, NULL, 0, 0, '2021-01-07 06:14:01', '2021-01-07 06:14:01'),
(21, 'ddj', NULL, NULL, NULL, NULL, NULL, NULL, 'Imported', 'Normal', NULL, 'NoN', 'NoN', 'NoN', 'NoN', NULL, NULL, 0, 0, '2021-01-27 05:26:15', '2021-01-27 05:26:15'),
(22, 'AAAa', NULL, NULL, NULL, NULL, NULL, NULL, 'Imported', 'Normal', NULL, 'NoN', 'NoN', 'NoN', 'NoN', NULL, NULL, NULL, 1, '2021-02-02 23:32:49', '2021-02-02 23:32:49'),
(23, 'gvgvg', NULL, NULL, NULL, 'SD45F4SD45F', NULL, NULL, 'Imported', 'Normal', NULL, 'GST 12%', 'NoN', 'NoN', 'NoN', NULL, NULL, 3, 1, '2021-02-03 01:34:28', '2021-02-03 03:37:50'),
(25, 'test555', NULL, 'vhg', NULL, '1355', NULL, NULL, 'Imported', 'Normal', NULL, 'NoN', 'NoN', 'NoN', 'NoN', NULL, NULL, 3, 1, '2021-02-06 06:42:15', '2021-04-23 00:27:29'),
(26, 'test12', '10', '100', NULL, NULL, '120', '100', 'Imported', 'Normal', NULL, 'GST 5%', 'NoN', 'NoN', 'NoN', NULL, NULL, 2, 1, '2021-03-04 00:29:18', '2021-06-30 01:40:33'),
(27, 'test', '12', NULL, NULL, NULL, '200', '100', 'Imported', 'Normal', NULL, 'GST 12%', 'NoN', 'NoN', 'NoN', NULL, NULL, 2, 1, '2021-03-04 00:34:12', '2021-03-04 00:34:12'),
(28, 'Seed', NULL, NULL, 'dsa', '54s545', '500', '750', 'Imported', 'Normal', NULL, 'GST 12%', 'NoN', 'NoN', 'NoN', NULL, NULL, 2, 2, '2021-03-05 23:31:57', '2021-03-05 23:31:57'),
(29, 'Focus', NULL, NULL, NULL, '155', NULL, NULL, 'Imported', 'Normal', NULL, 'GST 5%', 'NoN', 'NoN', 'NoN', NULL, NULL, 4, 1, '2021-03-08 23:41:38', '2021-03-29 05:08:44'),
(30, 'HP', NULL, NULL, NULL, 'HP-550', '32800', '32800', 'Imported', 'Normal', NULL, 'GST 12%', '1.12', 'HP', 'NoN', NULL, NULL, 2, 1, '2021-03-22 01:46:26', '2021-03-22 01:46:26'),
(31, 'LLL', 'sds32435', 'thi is LLL Product', NULL, NULL, NULL, NULL, 'Branded', 'Non-GST', NULL, 'NoN', 'NoN', 'NoN', 'NoN', NULL, NULL, 3, 1, '2021-03-25 22:48:42', '2021-04-20 02:25:54'),
(32, 'CA', NULL, NULL, NULL, NULL, NULL, NULL, 'Imported', 'Normal', NULL, 'NoN', 'NoN', 'NoN', 'NoN', NULL, NULL, 2, 1, '2021-03-25 23:26:58', '2021-03-25 23:26:58'),
(33, 'OPI', NULL, NULL, NULL, NULL, NULL, NULL, 'Imported', 'Normal', NULL, 'NoN', 'NoN', 'NoN', 'NoN', NULL, NULL, 2, 1, '2021-03-25 23:32:31', '2021-03-25 23:32:31'),
(34, 'SSI', NULL, NULL, NULL, NULL, NULL, NULL, 'Imported', 'Normal', NULL, 'NoN', 'NoN', 'NoN', 'NoN', NULL, NULL, 2, 1, '2021-03-25 23:38:48', '2021-03-25 23:38:48'),
(37, 'new Item', NULL, NULL, NULL, NULL, NULL, NULL, 'Imported', 'Normal', NULL, NULL, NULL, 'NoN', 'NoN', 'Production 1', 'Seed', 2, 1, '2021-04-15 03:27:45', '2021-04-15 03:27:45'),
(38, '28TEST ITEM', '0', '0', '0', '234535', '1200', NULL, 'Imported', 'Normal', NULL, 'GST 28%', '1.28', 'NoN', 'NoN', NULL, NULL, 2, 1, '2021-04-15 07:37:47', '2021-04-15 07:37:47'),
(39, 'TITLI RS.20', NULL, NULL, 'Nos', '0902', NULL, NULL, 'Imported', 'Nil', NULL, '5%GST', '1.05', 'NoN', 'NoN', 'NoN', 'NoN', 5, 1, '2021-04-17 03:29:21', '2021-04-17 04:25:57'),
(40, 'TITLI DUST - RS 10', NULL, NULL, 'Nos', '0902', NULL, NULL, 'Imported', 'Normal', NULL, '5%GST', '1.05', 'NoN', 'NoN', 'NoN', 'NoN', 5, 1, '2021-04-17 03:30:54', '2021-04-17 04:26:18'),
(41, 'TITLI DUST - RS 5', NULL, NULL, 'Nos', '0902', NULL, NULL, 'Imported', 'Normal', NULL, '5%GST', '1.05', 'NoN', 'NoN', 'NoN', 'NoN', 5, 1, '2021-04-17 03:31:54', '2021-04-17 04:26:39'),
(42, 'TITLI DUST - 25 GMS', NULL, NULL, 'Gms', '0202', NULL, NULL, 'Imported', 'Normal', NULL, '5%GST', '1.05', 'NoN', 'NoN', 'TEA', 'TEA', 5, 1, '2021-04-17 03:40:33', '2021-04-17 04:26:59'),
(43, 'TITLI DUST - 50 GMS', NULL, NULL, 'Gms', '0190', NULL, NULL, 'Imported', 'Normal', NULL, '5%GST', '1.05', 'TITLI DUST', 'NoN', 'TEA', 'TEA', 5, 1, '2021-04-17 03:48:14', '2021-04-17 04:27:22'),
(44, 'TITLI DUST - 200 GMS', NULL, NULL, 'Gms', '0902', '200', NULL, 'Imported', 'Normal', NULL, '5%GST', '1.05', 'TITLI DUST', 'NoN', 'TEA', 'TEA', 5, 1, '2021-04-17 03:52:10', '2021-04-17 03:52:10'),
(49, 'product T', 'sds32435', 'thi is LLL Product', '2', 'aa', NULL, NULL, 'Imported', 'Normal', NULL, 'NoN', 'NoN', 'NoN', 'NoN', NULL, NULL, 5, 1, '2021-04-20 03:49:23', '2021-04-20 03:49:23'),
(46, 'TITLI DUST - 250 GMS', NULL, NULL, 'Gms', '0902', '250', NULL, 'Imported', 'Normal', NULL, '5%GST', '1.05', 'TITLI DUST', 'NoN', 'TEA', 'NoN', 5, 1, '2021-04-17 04:01:49', '2021-04-17 04:01:49'),
(50, 'product T', 'sds32435', 'thi is LLL Product', '2', 'aa', NULL, NULL, 'Imported', 'Normal', NULL, NULL, NULL, 'NoN', 'NoN', 'NoN', 'NoN', 3, 1, '2021-04-24 06:37:56', '2021-04-24 06:37:56'),
(51, 'product T', 'sds32435', 'thi is LLL Product', '2', 'aa', NULL, NULL, 'Imported', 'Normal', NULL, NULL, NULL, 'NoN', 'NoN', 'NoN', 'NoN', 3, 1, '2021-04-24 06:37:58', '2021-04-24 06:37:58'),
(52, NULL, NULL, 'Description', NULL, NULL, '100', '99', 'Imported', 'CapitalGoods', '10', '12%GST', '1.12', 'HP', 'ldsk', 'Production', 'Seed', 2, 1, '2021-06-16 23:13:21', '2021-06-16 23:13:21');

-- --------------------------------------------------------

--
-- Table structure for table `product_treesgroup`
--

CREATE TABLE `product_treesgroup` (
  `id` int(11) NOT NULL,
  `groupname` varchar(35) NOT NULL,
  `cmp_id` int(20) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_treesgroup`
--

INSERT INTO `product_treesgroup` (`id`, `groupname`, `cmp_id`, `updated_at`, `created_at`) VALUES
(2, 's', 1, '2021-03-16 09:57:39', '2021-02-03 01:27:24'),
(3, 'abab', 1, '2021-03-16 09:57:44', '2021-02-03 01:56:15'),
(4, 'PMG', 1, '2021-03-29 05:08:35', '2021-03-29 05:08:35'),
(5, 'TITLI DUST', 1, '2021-04-17 03:25:14', '2021-04-17 03:25:14');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_return`
--

CREATE TABLE `purchase_return` (
  `id` int(10) NOT NULL,
  `cmp_id` int(11) NOT NULL,
  `Voucher_no` int(50) NOT NULL,
  `Sales_Account` varchar(50) NOT NULL,
  `Service_Acc` varchar(75) NOT NULL,
  `billCreatedDate` varchar(50) NOT NULL,
  `dueDate` varchar(45) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `bill_narration` varchar(75) DEFAULT NULL,
  `mobile` varchar(15) NOT NULL,
  `gstpartytype` varchar(25) NOT NULL,
  `totalBillQuantity` double NOT NULL,
  `totalTaxableAmount` float NOT NULL,
  `totalGSTAmount` float NOT NULL,
  `totalIGSTtxt` float NOT NULL,
  `totalRoundoffAmount` float NOT NULL,
  `addRound` double DEFAULT NULL,
  `hamali` int(11) NOT NULL,
  `cashDisc` int(11) NOT NULL,
  `lastNetAmt` float NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchase_return`
--

INSERT INTO `purchase_return` (`id`, `cmp_id`, `Voucher_no`, `Sales_Account`, `Service_Acc`, `billCreatedDate`, `dueDate`, `customer_name`, `bill_narration`, `mobile`, `gstpartytype`, `totalBillQuantity`, `totalTaxableAmount`, `totalGSTAmount`, `totalIGSTtxt`, `totalRoundoffAmount`, `addRound`, `hamali`, `cashDisc`, `lastNetAmt`, `updated_at`, `created_at`) VALUES
(1, 1, 1, 'Service', 'Service', '16-3-2021', '15/3/2021', 'Prathmesh', 'sdx', '8007327049', 'OutState', 10, 12533.6, 0, 1128.03, 12533.6, NULL, 0, 0, 0, '2021-03-16 04:07:43', '2021-03-16 04:07:43'),
(5, 1, 2, 'Purchase Return', 'Purchase Return', '5-4-2021', '5/4/2021', 'Rishi', 'DD', '8446883665', 'InState', 5, 7775, 388.75, 0, 8180.75, NULL, 17, 0, 8180.75, '2021-04-05 10:44:25', '2021-04-05 10:44:25'),
(6, 1, 3, 'Purchase Return', 'Purchase Return', '6-4-2021', '6/4/2021', 'Rishi', 's', '8446883665', 'InState', 55, 1925, 96.25, 0, 2041.25, NULL, 20, 0, 2041.25, '2021-04-06 10:32:56', '2021-04-06 10:32:56'),
(7, 1, 4, 'Purchase Return', 'Purchase Return', '8-4-2021', '8/4/2021', 'Rishi', 'd', '8446883665', 'InState', 55, 1925, 96.25, 0, 2041.25, NULL, 20, 0, 2041.25, '2021-04-08 05:32:12', '2021-04-08 05:32:12'),
(8, 1, 5, 'Purchase Return', 'Purchase Return', '10-4-2021', '10/4/2021', 'Rishi', 'sd', '8446883665', 'InState', 6, 7200, 864, 0, 7679.8, NULL, 20, 5, 7679.8, '2021-04-10 07:59:54', '2021-04-10 07:59:54'),
(9, 1, 6, 'Prathmesh', 'Purchase Return', '3-6-2021', '7/6/2021', 'Rishi', 'q', '8446883665', 'InState', 22, 721605, 86592.6, 0, 808208, -0.4, 11, 1, 808208, '2021-06-03 05:48:26', '2021-06-03 05:48:26');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_return_data`
--

CREATE TABLE `purchase_return_data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `purchase_return_id` int(11) NOT NULL,
  `cmp_id` int(11) NOT NULL,
  `item` varchar(55) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GST` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(65) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quntity` int(11) NOT NULL,
  `rate` float NOT NULL,
  `itemId` int(11) NOT NULL,
  `gross` float NOT NULL,
  `Discount` float NOT NULL,
  `Tradedisc` float NOT NULL,
  `Addless` float NOT NULL,
  `Taxable` float NOT NULL,
  `hamali` int(11) DEFAULT NULL,
  `CGST` float NOT NULL,
  `SGST` float NOT NULL,
  `IGST` float NOT NULL,
  `DiscountforUpdate` float NOT NULL,
  `TradediscforUpdate` float NOT NULL,
  `GSTforUpdate` float NOT NULL,
  `IGSTforUpdate` float NOT NULL,
  `singleItemDiscPrice` float NOT NULL,
  `singleItemTradeDiscPrice` float NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `purchase_return_data`
--

INSERT INTO `purchase_return_data` (`id`, `purchase_return_id`, `cmp_id`, `item`, `GST`, `description`, `quntity`, `rate`, `itemId`, `gross`, `Discount`, `Tradedisc`, `Addless`, `Taxable`, `hamali`, `CGST`, `SGST`, `IGST`, `DiscountforUpdate`, `TradediscforUpdate`, `GSTforUpdate`, `IGSTforUpdate`, `singleItemDiscPrice`, `singleItemTradeDiscPrice`, `created_at`, `updated_at`) VALUES
(7, 1, 1, 'Shooes', 'GST 12%', 's', 5, 1200, 11, 6000, 2, 5, 15, 5601, NULL, 6, 6, 0, 5880, 5586, 336.06, 0, 120, 294, '2021-03-15 02:10:52', '2021-03-15 02:10:52'),
(8, 3, 1, 'Shooes', 'GST 12%', '5s', 5, 1200, 11, 6000, 5, 5, 5, 5420, NULL, 6, 6, 0, 5700, 5415, 325.2, 0, 300, 285, '2021-03-15 03:44:12', '2021-03-15 03:44:12'),
(6, 2, 1, 'Shooes', 'GST 12%', 'sx', 5, 1200, 11, 6000, 2, 5, 22, 5608, NULL, 0, 0, 9, 5880, 5586, 0, 504.72, 120, 294, '2021-03-15 02:07:51', '2021-03-15 02:07:51'),
(9, 2, 1, 'Service', 'GST 5%', 'SDD', 5, 1555, 15, 7775, 0, 0, 0, 7775, NULL, 2.5, 2.5, 0, 7775, 7775, 194.375, 0, 0, 0, '2021-04-05 05:14:25', '2021-04-05 05:14:25'),
(10, 3, 1, 'LUX', 'GST 5%', 'sxc', 55, 35, 13, 1925, 0, 0, 0, 1925, NULL, 2.5, 2.5, 0, 1925, 1925, 48.125, 0, 0, 0, '2021-04-06 05:02:56', '2021-04-06 05:02:56'),
(11, 4, 1, 'LUX', 'GST 5%', 'd', 55, 35, 13, 1925, 0, 0, 0, 1925, NULL, 2.5, 2.5, 0, 1925, 1925, 48.125, 0, 0, 0, '2021-04-08 00:02:12', '2021-04-08 00:02:12'),
(12, 5, 1, 'Shooes', 'GST 12%', 'ss', 6, 1200, 11, 7200, 0, 0, 0, 7200, NULL, 6, 6, 0, 7200, 7200, 432, 0, 0, 0, '2021-04-10 02:29:54', '2021-04-10 02:29:54'),
(13, 6, 1, 'HP', 'GST 12%', 'qq', 11, 32800.1, 30, 360801, 0, 0, 0, 360801, NULL, 6, 6, 0, 360801, 360801, 21648.1, 0, 0, 0, '2021-06-03 00:16:30', '2021-06-03 00:16:30'),
(14, 6, 1, 'HP', 'GST 12%', 'q', 22, 32800.2, 30, 721605, 0, 0, 0, 721605, NULL, 6, 6, 0, 721605, 721605, 43296.3, 0, 0, 0, '2021-06-03 00:18:26', '2021-06-03 00:18:26');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_voucher`
--

CREATE TABLE `purchase_voucher` (
  `id` int(10) NOT NULL,
  `cmp_id` int(11) NOT NULL,
  `Voucher_no` int(50) NOT NULL,
  `Sales_Account` varchar(50) NOT NULL,
  `Service_Acc` varchar(75) NOT NULL,
  `billCreatedDate` varchar(50) NOT NULL,
  `dueDate` varchar(45) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `bill_narration` varchar(75) DEFAULT NULL,
  `mobile` varchar(15) NOT NULL,
  `gstpartytype` varchar(25) NOT NULL,
  `totalBillQuantity` double NOT NULL,
  `totalTaxableAmount` float NOT NULL,
  `totalGSTAmount` float NOT NULL,
  `totalIGSTtxt` float NOT NULL,
  `totalRoundoffAmount` float NOT NULL,
  `addRound` double DEFAULT NULL,
  `hamali` int(11) DEFAULT NULL,
  `cashDisc` int(11) DEFAULT NULL,
  `lastNetAmt` float DEFAULT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchase_voucher`
--

INSERT INTO `purchase_voucher` (`id`, `cmp_id`, `Voucher_no`, `Sales_Account`, `Service_Acc`, `billCreatedDate`, `dueDate`, `customer_name`, `bill_narration`, `mobile`, `gstpartytype`, `totalBillQuantity`, `totalTaxableAmount`, `totalGSTAmount`, `totalIGSTtxt`, `totalRoundoffAmount`, `addRound`, `hamali`, `cashDisc`, `lastNetAmt`, `updated_at`, `created_at`) VALUES
(1, 1, 1, 'Service', 'Service', '15-3-2021', '15/3/2021', 'Rishi', 's', '8446883665', 'InState', 5, 5601, 672.12, 0, 6273.12, NULL, 0, 0, 0, '2021-03-15 07:40:52', '2021-03-15 07:40:52'),
(2, 1, 2, 'Service', 'Service', '15-3-2021', '15/3/2021', 'Prathmesh', 's', '8007327049', 'OutState', 5, 5608, 0, 1109.27, 5608, NULL, 0, 0, 0, '2021-03-15 07:37:51', '2021-03-15 07:37:51'),
(3, 1, 3, 'Prathmesh', 'Purchace', '22-5-2021', '13/6/2021', 'Rishi', 'n', '8446883665', 'InState', 5, 6000, 720, 0, 6810, NULL, 10, NULL, NULL, '2021-05-22 07:59:49', '2021-05-22 07:59:49'),
(4, 1, 4, 'Purchace', 'Purchace', '24-5-2021', '13/6/2021', 'Rishi', 'n', '8446883665', 'InState', 22, 721600, 86592, 0, 808170, NULL, 11, 22, 808170, '2021-05-24 10:46:25', '2021-05-24 10:46:25'),
(11, 1, 5, 'Purchace', 'Purchace', '31-5-2021', '10/6/2021', 'VIKRAM TEA PROCESSOR PVT.LTD.', 'test', '9881427786', 'InState', 1, 3000.5, 150.025, 0, 3151, NULL, 0, 0, 3151, '2021-05-31 06:28:51', '2021-05-31 06:28:51'),
(12, 1, 6, 'Prathmesh', 'Purchace', '3-6-2021', '7/6/2021', 'Rishi', 'qq', '8446883665', 'InState', 13, 78802, 9456.24, 0, 88269, 0.24, 11, 0, 88269, '2021-06-03 04:54:05', '2021-06-03 04:54:05'),
(13, 1, 7, 'Prathmesh', 'Purchace', '4-6-2021', '8/6/2021', 'Rishi', NULL, '8446883665', 'InState', 11, 13201, 1584.12, 0, 14785, 0.12, 0, 0, 14785, '2021-06-04 05:59:55', '2021-06-04 05:59:55'),
(14, 1, 8, 'Prathmesh', 'Purchace', '4-6-2021', '8/6/2021', 'Rishi', NULL, '8446883665', 'InState', 11, 13200, 1584, 0, 14784, 0, 0, 0, 14784, '2021-06-04 06:08:11', '2021-06-04 06:08:11');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_voucher_data`
--

CREATE TABLE `purchase_voucher_data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `purchase_voucher_id` int(11) NOT NULL,
  `cmp_id` int(11) NOT NULL,
  `item` varchar(55) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GST` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(65) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quntity` int(11) NOT NULL,
  `rate` float NOT NULL,
  `itemId` int(11) NOT NULL,
  `gross` float NOT NULL,
  `Discount` float NOT NULL,
  `Tradedisc` float NOT NULL,
  `Addless` float NOT NULL,
  `Taxable` float NOT NULL,
  `hamali` int(11) DEFAULT NULL,
  `CGST` float NOT NULL,
  `SGST` float NOT NULL,
  `IGST` float NOT NULL,
  `DiscountforUpdate` float NOT NULL,
  `TradediscforUpdate` float NOT NULL,
  `GSTforUpdate` float NOT NULL,
  `IGSTforUpdate` float NOT NULL,
  `singleItemDiscPrice` float NOT NULL,
  `singleItemTradeDiscPrice` float NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `purchase_voucher_data`
--

INSERT INTO `purchase_voucher_data` (`id`, `purchase_voucher_id`, `cmp_id`, `item`, `GST`, `description`, `quntity`, `rate`, `itemId`, `gross`, `Discount`, `Tradedisc`, `Addless`, `Taxable`, `hamali`, `CGST`, `SGST`, `IGST`, `DiscountforUpdate`, `TradediscforUpdate`, `GSTforUpdate`, `IGSTforUpdate`, `singleItemDiscPrice`, `singleItemTradeDiscPrice`, `created_at`, `updated_at`) VALUES
(7, 1, 1, 'Shooes', 'GST 12%', 's', 5, 1200, 11, 6000, 2, 5, 15, 5601, 0, 6, 6, 0, 5880, 5586, 336.06, 0, 120, 294, '2021-03-15 02:10:52', '2021-03-15 02:10:52'),
(39, 3, 1, 'Shooes', 'GST 12%', 'q', 5, 1200, 11, 6000, 0, 0, 0, 6000, NULL, 6, 6, 0, 6000, 6000, 360, 0, 0, 0, '2021-05-22 02:29:49', '2021-05-22 02:29:49'),
(6, 2, 1, 'Shooes', 'GST 12%', 'sx', 5, 1200, 11, 6000, 2, 5, 22, 5608, 0, 0, 0, 9, 5880, 5586, 0, 504.72, 120, 294, '2021-03-15 02:07:51', '2021-03-15 02:07:51'),
(55, 4, 1, 'HP', 'GST 12%', 'q', 22, 32800, 30, 721600, 0, 0, 0, 721600, NULL, 6, 6, 0, 721600, 721600, 43296, 0, 0, 0, '2021-05-24 05:16:25', '2021-05-24 05:16:25'),
(53, 5, 1, 'Shooes', 'GST 12%', 'a', 22, 1200, 11, 26400, 0, 0, 0, 26400, NULL, 6, 6, 0, 26400, 26400, 1584, 0, 0, 0, '2021-05-24 05:14:53', '2021-05-24 05:14:53'),
(56, 5, 1, 'Focus', 'GST 5%', 'tet', 1, 3000.5, 29, 3000.5, 0, 0, 0, 3000.5, NULL, 2.5, 2.5, 0, 3000.5, 3000.5, 75.0125, 0, 0, 0, '2021-05-31 00:58:51', '2021-05-31 00:58:51'),
(57, 6, 1, 'Shooes', 'GST 12%', 'q', 11, 1200.22, 11, 13202.4, 0, 0, 0, 13202, NULL, 6, 6, 0, 13202, 13202, 792.12, 0, 0, 0, '2021-06-02 23:24:05', '2021-06-02 23:24:05'),
(50, 7, 1, 'Shooes', 'GST 12%', 'qq', 2, 1200, 11, 2400, 0, 0, 0, 2400, NULL, 6, 6, 0, 2400, 2400, 144, 0, 0, 0, '2021-05-24 01:13:14', '2021-05-24 01:13:14'),
(51, 7, 1, 'Shooes', 'GST 12%', 'qq', 22, 1200, 11, 26400, 0, 0, 0, 26400, NULL, 6, 6, 0, 26400, 26400, 1584, 0, 0, 0, '2021-05-24 01:13:14', '2021-05-24 01:13:14'),
(49, 7, 1, 'HP', 'GST 12%', 'qq', 11, 32800, 30, 360800, 0, 0, 0, 360800, NULL, 6, 6, 0, 360800, 360800, 21648, 0, 0, 0, '2021-05-24 01:13:14', '2021-05-24 01:13:14'),
(58, 6, 1, 'HP', 'GST 12%', 'no', 2, 32800, 30, 65600, 0, 0, 0, 65600, NULL, 6, 6, 0, 65600, 65600, 3936, 0, 0, 0, '2021-06-02 23:24:05', '2021-06-02 23:24:05'),
(59, 7, 1, 'Shooes', 'GST 12%', 'qq', 11, 1200.11, 11, 13201.2, 0, 0, 0, 13201, NULL, 6, 6, 0, 13201, 13201, 792.06, 0, 0, 0, '2021-06-04 00:29:55', '2021-06-04 00:29:55'),
(60, 8, 1, 'Shooes', 'GST 12%', 'Description', 11, 1200, 11, 13200, 0, 0, 0, 13200, NULL, 6, 6, 0, 13200, 13200, 792, 0, 0, 0, '2021-06-04 00:38:11', '2021-06-04 00:38:11');

-- --------------------------------------------------------

--
-- Table structure for table `receipts`
--

CREATE TABLE `receipts` (
  `id` int(10) NOT NULL,
  `cmp_id` int(50) NOT NULL,
  `Voucher_no` int(50) NOT NULL,
  `Account` varchar(55) NOT NULL,
  `billCreatedDate` varchar(50) NOT NULL,
  `cheque_no` varchar(70) NOT NULL,
  `bill_narration` varchar(50) DEFAULT NULL,
  `total` float NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `receipts`
--

INSERT INTO `receipts` (`id`, `cmp_id`, `Voucher_no`, `Account`, `billCreatedDate`, `cheque_no`, `bill_narration`, `total`, `updated_at`, `created_at`) VALUES
(1, 1, 1, 'Cash/Bank', '23-3-2021', 'X5X45S5A2A5AAHGNM', 'abcvv', 600, '2021-04-15 12:00:43', '2021-04-15 12:00:43'),
(2, 1, 2, 'Cash/Bank', '25-3-2021', '0', 'hhg', 5056, '2021-05-26 05:43:25', '2021-05-26 05:43:25'),
(3, 1, 3, 'Prathmesh', '5-6-2021', '1212', NULL, 112, '2021-06-05 06:12:00', '2021-06-05 06:12:00'),
(4, 1, 4, 'Cash/Bank', '26-6-2021', '123', NULL, 122, '2021-06-30 08:32:26', '2021-06-30 08:32:26');

-- --------------------------------------------------------

--
-- Table structure for table `receipts_data`
--

CREATE TABLE `receipts_data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `receipts_id` int(11) NOT NULL,
  `cmp_id` int(11) NOT NULL,
  `account_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` float NOT NULL,
  `remarks` varchar(65) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `receipts_data`
--

INSERT INTO `receipts_data` (`id`, `receipts_id`, `cmp_id`, `account_name`, `amount`, `remarks`, `created_at`, `updated_at`) VALUES
(12, 1, 1, 'Rishi', 500, 'payment done', '2021-04-15 06:30:43', '2021-04-15 06:30:43'),
(15, 2, 1, 'Prathmesh', 5056, 'qq', '2021-05-26 00:13:25', '2021-05-26 00:13:25'),
(13, 1, 1, 'Rahulll', 100, 'll', '2021-04-15 06:30:43', '2021-04-15 06:30:43'),
(16, 3, 1, 'Rishi', 112, 'no', '2021-06-05 00:42:00', '2021-06-05 00:42:00'),
(22, 4, 1, 'OPS', 11, 'no', '2021-06-30 03:02:26', '2021-06-30 03:02:26'),
(21, 4, 1, 'Prathmesh', 111, 'no', '2021-06-30 03:02:26', '2021-06-30 03:02:26');

-- --------------------------------------------------------

--
-- Table structure for table `retail_sales_invoice`
--

CREATE TABLE `retail_sales_invoice` (
  `id` int(10) NOT NULL,
  `cmp_id` int(11) NOT NULL,
  `Voucher_no` int(50) NOT NULL,
  `Sales_Account` varchar(50) NOT NULL,
  `Service_Acc` varchar(75) NOT NULL,
  `billCreatedDate` varchar(50) NOT NULL,
  `dueDate` varchar(45) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `bill_narration` varchar(75) DEFAULT NULL,
  `mobile` varchar(15) NOT NULL,
  `gstpartytype` varchar(25) NOT NULL,
  `totalBillQuantity` double NOT NULL,
  `totalTaxableAmount` float NOT NULL,
  `totalGSTAmount` float NOT NULL,
  `totalIGSTtxt` float NOT NULL,
  `totalRoundoffAmount` float NOT NULL,
  `addRound` double DEFAULT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `retail_sales_invoice`
--

INSERT INTO `retail_sales_invoice` (`id`, `cmp_id`, `Voucher_no`, `Sales_Account`, `Service_Acc`, `billCreatedDate`, `dueDate`, `customer_name`, `bill_narration`, `mobile`, `gstpartytype`, `totalBillQuantity`, `totalTaxableAmount`, `totalGSTAmount`, `totalIGSTtxt`, `totalRoundoffAmount`, `addRound`, `updated_at`, `created_at`) VALUES
(1, 1, 1, 'Service', 'Service', '15-3-2021', '15/3/2021', 'Rishi', 's', '8446883665', 'InState', 5, 5601, 672.12, 0, 6273.12, NULL, '2021-03-15 07:40:52', '2021-03-15 07:40:52'),
(2, 1, 2, 'Service', 'Service', '15-3-2021', '15/3/2021', 'Prathmesh', 's', '8007327049', 'OutState', 5, 5608, 0, 1109.27, 5608, NULL, '2021-03-15 07:37:51', '2021-03-15 07:37:51'),
(3, 1, 3, 'Service', 'Service', '15-3-2021', '15/3/2021', 'Rishi', 's', '8446883665', 'InState', 5, 5420, 650.4, 0, 6070.4, NULL, '2021-03-15 09:14:12', '2021-03-15 09:14:12'),
(4, 1, 4, 'Tax Invoice', 'Tax Invoice', '22-3-2021', '22/3/2021', 'Rishi', 'd', '8446883665', 'InState', 5, 4987.51, 598.501, 0, 5586.01, NULL, '2021-03-22 10:15:53', '2021-03-22 10:15:53'),
(5, 1, 5, 'Tax Invoice', 'Tax Invoice', '15-4-2021', '15/4/2021', 'Rishi', 'dd', '8446883665', 'InState', 5, 166.65, 8.3325, 0, 174.982, NULL, '2021-04-15 12:27:38', '2021-04-15 12:27:38'),
(7, 1, 6, 'Prathmesh', 'Counter Sales', '3-6-2021', 'Demo', 'Rishi', 'a', '8446883665', 'InState', 22, 23575.9, 2829.1, 0, 26405, 0.04, '2021-06-03 07:10:57', '2021-06-03 07:10:57');

-- --------------------------------------------------------

--
-- Table structure for table `retail_sales_invoice_data`
--

CREATE TABLE `retail_sales_invoice_data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `retail_sales_invoice_id` int(11) NOT NULL,
  `cmp_id` int(11) NOT NULL,
  `item` varchar(55) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GST` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(65) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quntity` int(11) NOT NULL,
  `rate` float NOT NULL,
  `incl_rate` double NOT NULL,
  `itemId` int(11) NOT NULL,
  `gross` float NOT NULL,
  `Discount` float NOT NULL,
  `Tradedisc` float NOT NULL,
  `Addless` float NOT NULL,
  `Taxable` float NOT NULL,
  `CGST` float NOT NULL,
  `SGST` float NOT NULL,
  `IGST` float NOT NULL,
  `DiscountforUpdate` float NOT NULL,
  `TradediscforUpdate` float NOT NULL,
  `GSTforUpdate` float NOT NULL,
  `IGSTforUpdate` float NOT NULL,
  `singleItemDiscPrice` float NOT NULL,
  `singleItemTradeDiscPrice` float NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `retail_sales_invoice_data`
--

INSERT INTO `retail_sales_invoice_data` (`id`, `retail_sales_invoice_id`, `cmp_id`, `item`, `GST`, `description`, `quntity`, `rate`, `incl_rate`, `itemId`, `gross`, `Discount`, `Tradedisc`, `Addless`, `Taxable`, `CGST`, `SGST`, `IGST`, `DiscountforUpdate`, `TradediscforUpdate`, `GSTforUpdate`, `IGSTforUpdate`, `singleItemDiscPrice`, `singleItemTradeDiscPrice`, `created_at`, `updated_at`) VALUES
(7, 1, 1, 'Shooes', 'GST 12%', 's', 5, 1200, 0, 11, 6000, 2, 5, 15, 5601, 6, 6, 0, 5880, 5586, 336.06, 0, 120, 294, '2021-03-15 02:10:52', '2021-03-15 02:10:52'),
(8, 3, 1, 'Shooes', 'GST 12%', '5s', 5, 1200, 0, 11, 6000, 5, 5, 5, 5420, 6, 6, 0, 5700, 5415, 325.2, 0, 300, 285, '2021-03-15 03:44:12', '2021-03-15 03:44:12'),
(6, 2, 1, 'Shooes', 'GST 12%', 'sx', 5, 1200, 0, 11, 6000, 2, 5, 22, 5608, 0, 0, 9, 5880, 5586, 0, 504.72, 120, 294, '2021-03-15 02:07:51', '2021-03-15 02:07:51'),
(9, 4, 1, 'Shooes', 'GST 12%', 's', 5, 1071.43, 1.12, 11, 5357.15, 2, 5, 0, 4987.51, 6, 6, 0, 5250.01, 4987.51, 299.25, 0, 107.143, 262.5, '2021-03-22 04:45:53', '2021-03-22 04:45:53'),
(11, 5, 1, 'LUX', 'GST 5%', 'sdd', 5, 66.67, 70, 13, 166.65, 0, 0, 0, 166.65, 2.5, 2.5, 0, 166.65, 166.65, 4.16625, 0, 0, 0, '2021-04-15 06:57:38', '2021-04-15 06:57:38'),
(19, 6, 1, 'Shooes', 'GST 12%', 'aa', 22, 1071.63, 1200.22, 11, 23575.9, 0, 0, 0, 23575.9, 6, 6, 0, 23575.9, 23575.9, 1414.55, 0, 0, 0, '2021-06-03 01:40:57', '2021-06-03 01:40:57'),
(22, 7, 1, 'HP', 'GST 12%', 'qqrtee', 12, 29286, 32800.33, 30, 351432, 0, 0, 0, 351432, 6, 6, 0, 351432, 351432, 21085.9, 0, 0, 0, '2021-06-26 06:16:46', '2021-06-26 06:16:46'),
(21, 8, 1, 'HP', 'GST 12%', 'Description', 1, 17857.1, 20000, 30, 17857.1, 2, 2, 0, 17150, 6, 6, 0, 17500, 17150, 1029, 0, 357.143, 350, '2021-06-25 08:27:40', '2021-06-25 08:27:40');

-- --------------------------------------------------------

--
-- Table structure for table `salesman`
--

CREATE TABLE `salesman` (
  `id` int(11) NOT NULL,
  `salesman_name` varchar(50) NOT NULL,
  `salesman_code` varchar(50) NOT NULL,
  `cmp_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `salesman`
--

INSERT INTO `salesman` (`id`, `salesman_name`, `salesman_code`, `cmp_id`, `created_at`, `updated_at`) VALUES
(1, 'jhgj', '1333021kk', 0, '2020-11-10 05:57:48', '2020-11-19 01:40:26'),
(6, 'Demo', '112', 1, '2020-11-24 01:50:38', '2020-11-24 01:50:38'),
(7, 'AAAA', '1234AA', 1, '2020-11-27 23:38:09', '2020-11-27 23:38:09'),
(8, 'cvv', '112', 1, '2021-04-18 22:30:17', '2021-04-18 22:30:17');

-- --------------------------------------------------------

--
-- Table structure for table `sales_invoice`
--

CREATE TABLE `sales_invoice` (
  `id` int(11) NOT NULL,
  `sales_account` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `customer` varchar(60) NOT NULL,
  `narration` int(65) NOT NULL,
  `loading_No` int(10) NOT NULL,
  `Taxes` varchar(50) NOT NULL,
  `Item` varchar(50) NOT NULL,
  `Description` varchar(65) NOT NULL,
  `Quantity` int(30) NOT NULL,
  `MRP` int(30) NOT NULL,
  `Gross` int(45) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sales_order`
--

CREATE TABLE `sales_order` (
  `id` int(10) NOT NULL,
  `cmp_id` int(11) NOT NULL,
  `Voucher_no` int(50) NOT NULL,
  `Sales_Account` varchar(50) NOT NULL,
  `Service_Acc` varchar(75) NOT NULL,
  `billCreatedDate` varchar(50) NOT NULL,
  `dueDate` varchar(45) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `bill_narration` varchar(75) DEFAULT NULL,
  `mobile` varchar(15) NOT NULL,
  `totalBillQuantity` int(25) NOT NULL,
  `totalBillAmount` double NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales_order`
--

INSERT INTO `sales_order` (`id`, `cmp_id`, `Voucher_no`, `Sales_Account`, `Service_Acc`, `billCreatedDate`, `dueDate`, `customer_name`, `bill_narration`, `mobile`, `totalBillQuantity`, `totalBillAmount`, `updated_at`, `created_at`) VALUES
(1, 1, 1, 'Service', 'Service', '5-3-2021', '7/3/2021', 'Rishi', 'dsxc', '8446883665', 7, 3285, '2021-03-05 12:07:07', '2021-03-05 12:07:07');

-- --------------------------------------------------------

--
-- Table structure for table `sales_order_data`
--

CREATE TABLE `sales_order_data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sales_order_id` int(11) NOT NULL,
  `cmp_id` int(11) NOT NULL,
  `item` varchar(55) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(65) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quntity` int(11) NOT NULL,
  `rate` float NOT NULL,
  `gross` float NOT NULL,
  `itemId` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sales_order_data`
--

INSERT INTO `sales_order_data` (`id`, `sales_order_id`, `cmp_id`, `item`, `description`, `quntity`, `rate`, `gross`, `itemId`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Service', 'dx', 2, 1555, 3110, 15, '2021-03-05 06:37:07', '2021-03-05 06:37:07'),
(2, 1, 1, 'LUX', 'dcv', 5, 35, 175, 13, '2021-03-05 06:37:07', '2021-03-05 06:37:07');

-- --------------------------------------------------------

--
-- Table structure for table `sales_return`
--

CREATE TABLE `sales_return` (
  `id` int(10) NOT NULL,
  `cmp_id` int(11) NOT NULL,
  `Voucher_no` int(50) NOT NULL,
  `Sales_Account` varchar(50) NOT NULL,
  `Service_Acc` varchar(75) NOT NULL,
  `billCreatedDate` varchar(50) NOT NULL,
  `dueDate` varchar(45) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `bill_narration` varchar(75) DEFAULT NULL,
  `mobile` varchar(15) NOT NULL,
  `gstpartytype` varchar(25) NOT NULL,
  `totalBillQuantity` double NOT NULL,
  `totalTaxableAmount` float NOT NULL,
  `totalGSTAmount` float NOT NULL,
  `totalIGSTtxt` float NOT NULL,
  `totalRoundoffAmount` float NOT NULL,
  `addRound` double DEFAULT NULL,
  `hamali` int(26) NOT NULL,
  `cashDisc` int(26) NOT NULL,
  `lastNetAmt` float NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales_return`
--

INSERT INTO `sales_return` (`id`, `cmp_id`, `Voucher_no`, `Sales_Account`, `Service_Acc`, `billCreatedDate`, `dueDate`, `customer_name`, `bill_narration`, `mobile`, `gstpartytype`, `totalBillQuantity`, `totalTaxableAmount`, `totalGSTAmount`, `totalIGSTtxt`, `totalRoundoffAmount`, `addRound`, `hamali`, `cashDisc`, `lastNetAmt`, `updated_at`, `created_at`) VALUES
(1, 1, 1, 'Service', 'Service', '15-3-2021', '15/3/2021', 'Rishi', 'd', '8446883665', 'InState', 7, 7857, 942.84, 0, 8799.84, NULL, 0, 0, 0, '2021-03-15 09:57:35', '2021-03-15 09:57:35'),
(2, 1, 2, 'Sales Return', 'Sales Return', '5-4-2021', '5/4/2021', 'Rishi', 's5s', '8446883665', 'InState', 6, 5210, 260.5, 0, 5500.5, NULL, 30, 0, 5500.5, '2021-04-05 10:36:33', '2021-04-05 10:36:33'),
(5, 1, 3, 'Prathmesh', 'Sales Return', '3-6-2021', '7/6/2021', 'Rishi', 'qq', '8446883665', 'InState', 22, 26402, 3168.24, 0, 29570, NULL, 0, 0, 29570, '2021-06-03 10:20:50', '2021-06-03 10:20:50'),
(6, 1, 4, 'Prathmesh', 'Sales Return', '3-6-2021', '8/6/2021', 'Rishi', 'qq', '8446883665', 'InState', 12, 46001, 5520.12, 0, 51531, 0.12, 11, 1, 51521, '2021-06-03 10:32:14', '2021-06-03 10:32:14');

-- --------------------------------------------------------

--
-- Table structure for table `sales_return_data`
--

CREATE TABLE `sales_return_data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sales_return_id` int(11) NOT NULL,
  `cmp_id` int(11) NOT NULL,
  `item` varchar(55) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GST` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(65) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quntity` int(11) NOT NULL,
  `rate` float NOT NULL,
  `itemId` int(11) NOT NULL,
  `gross` float NOT NULL,
  `Discount` float NOT NULL,
  `Tradedisc` float NOT NULL,
  `Addless` float NOT NULL,
  `Taxable` float NOT NULL,
  `addRound` double DEFAULT NULL,
  `hamali` int(11) DEFAULT NULL,
  `CGST` float NOT NULL,
  `SGST` float NOT NULL,
  `IGST` float NOT NULL,
  `DiscountforUpdate` float NOT NULL,
  `TradediscforUpdate` float NOT NULL,
  `GSTforUpdate` float NOT NULL,
  `IGSTforUpdate` float NOT NULL,
  `singleItemDiscPrice` float NOT NULL,
  `singleItemTradeDiscPrice` float NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sales_return_data`
--

INSERT INTO `sales_return_data` (`id`, `sales_return_id`, `cmp_id`, `item`, `GST`, `description`, `quntity`, `rate`, `itemId`, `gross`, `Discount`, `Tradedisc`, `Addless`, `Taxable`, `addRound`, `hamali`, `CGST`, `SGST`, `IGST`, `DiscountforUpdate`, `TradediscforUpdate`, `GSTforUpdate`, `IGSTforUpdate`, `singleItemDiscPrice`, `singleItemTradeDiscPrice`, `created_at`, `updated_at`) VALUES
(2, 1, 1, 'Shooes', 'GST 12%', 's', 5, 1200, 11, 6000, 2, 5, 50, 5636, NULL, 0, 6, 6, 0, 5880, 5586, 338.16, 0, 120, 294, '2021-03-15 04:27:35', '2021-03-15 04:27:35'),
(3, 1, 1, 'Shooes', 'GST 12%', 's', 2, 1200, 11, 2400, 5, 5, 55, 2221, NULL, 0, 6, 6, 0, 2280, 2166, 133.26, 0, 120, 114, '2021-03-15 04:27:35', '2021-03-15 04:27:35'),
(14, 2, 1, 'LUX', 'GST 5%', 's', 6, 35, 13, 210, 0, 0, 5000, 5210, NULL, 0, 2.5, 2.5, 0, 210, 210, 130.25, 0, 0, 0, '2021-04-05 05:06:33', '2021-04-05 05:06:33'),
(15, 3, 1, 'Shooes', 'GST 12%', 'qq', 22, 1200.11, 11, 26402.4, 0, 0, 0, 26402, NULL, NULL, 6, 6, 0, 26402, 26402, 1584.12, 0, 0, 0, '2021-06-03 04:50:50', '2021-06-03 04:50:50'),
(16, 4, 1, 'Shooes', 'GST 12%', 'qq', 11, 1200.12, 11, 13201.3, 0, 0, 0, 13201, NULL, NULL, 6, 6, 0, 13201, 13201, 792.06, 0, 0, 0, '2021-06-03 05:02:14', '2021-06-03 05:02:14'),
(17, 4, 1, 'HP', 'GST 12%', '2', 1, 32800, 30, 32800, 0, 0, 0, 32800, NULL, NULL, 6, 6, 0, 32800, 32800, 1968, 0, 0, 0, '2021-06-03 05:02:14', '2021-06-03 05:02:14');

-- --------------------------------------------------------

--
-- Table structure for table `service_bill`
--

CREATE TABLE `service_bill` (
  `id` int(10) NOT NULL,
  `cmp_id` int(11) NOT NULL,
  `Voucher_no` int(50) NOT NULL,
  `Sales_Account` varchar(50) NOT NULL,
  `Service_Acc` varchar(75) NOT NULL,
  `billCreatedDate` varchar(50) NOT NULL,
  `dueDate` varchar(45) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `bill_narration` varchar(75) DEFAULT NULL,
  `mobile` varchar(15) NOT NULL,
  `totalBillQuantity` double NOT NULL,
  `totalBillAmount` float NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_bill`
--

INSERT INTO `service_bill` (`id`, `cmp_id`, `Voucher_no`, `Sales_Account`, `Service_Acc`, `billCreatedDate`, `dueDate`, `customer_name`, `bill_narration`, `mobile`, `totalBillQuantity`, `totalBillAmount`, `updated_at`, `created_at`) VALUES
(4, 1, 1, 'Service', 'Service', '22-3-2021', '22/3/2021', 'Rishi', 'sxd', '8446883665', 10, 13775, '2021-03-22 11:12:24', '2021-03-22 11:12:24'),
(2, 1, 2, 'Service', 'Service', '24-4-2021', '7/5/2021', 'VIKRAM TEA PROCESSOR PVT.LTD.', 'test', '9860046277', 4410, 1233300, '2021-04-24 13:01:40', '2021-04-24 13:01:40'),
(6, 1, 3, 'Prathmesh', 'Service', '3-6-2021', '6/6/2021', 'Rishi', 'q', '8446883665', 111, 133212, '2021-06-03 10:43:25', '2021-06-03 10:43:25');

-- --------------------------------------------------------

--
-- Table structure for table `service_bill_data`
--

CREATE TABLE `service_bill_data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_bill_id` int(11) NOT NULL,
  `cmp_id` int(11) NOT NULL,
  `item` varchar(55) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(65) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quntity` int(11) NOT NULL,
  `rate` float NOT NULL,
  `itemId` int(11) NOT NULL,
  `gross` float NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_bill_data`
--

INSERT INTO `service_bill_data` (`id`, `service_bill_id`, `cmp_id`, `item`, `description`, `quntity`, `rate`, `itemId`, `gross`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Shooes', 'dxc', 5, 1200, 11, 6000, '2021-03-22 05:42:24', '2021-03-22 05:42:24'),
(2, 1, 1, 'Service', 'ss', 5, 1555, 15, 7775, '2021-03-22 05:42:24', '2021-03-22 05:42:24'),
(67, 2, 1, 'TITLI DUST - 50 GMS', 't', 200, 338.08, 43, 67616, '2021-04-24 07:31:40', '2021-04-24 07:31:40'),
(66, 2, 1, 'TITLI DUST - 200 GMS', 'tg', 800, 169, 44, 135200, '2021-04-24 07:31:40', '2021-04-24 07:31:40'),
(65, 2, 1, 'TITLI DUST - 25 GMS', 'test', 1500, 354.56, 42, 531840, '2021-04-24 07:31:40', '2021-04-24 07:31:40'),
(62, 2, 1, 'TITLI DUST - 200 GMS', 'tefg', 200, 242.91, 44, 48582, '2021-04-24 07:31:40', '2021-04-24 07:31:40'),
(64, 2, 1, 'TITLI DUST - 50 GMS', 'te', 1000, 220, 43, 220000, '2021-04-24 07:31:40', '2021-04-24 07:31:40'),
(63, 2, 1, 'TITLI DUST - RS 5', 'test', 400, 352.79, 41, 141116, '2021-04-24 07:31:40', '2021-04-24 07:31:40'),
(61, 2, 1, 'TITLI DUST - RS 5', 'tse', 100, 500, 41, 50000, '2021-04-24 07:31:40', '2021-04-24 07:31:40'),
(60, 2, 1, 'TITLI DUST - 250 GMS', 'te', 200, 10, 46, 2000, '2021-04-24 07:31:40', '2021-04-24 07:31:40'),
(68, 2, 1, 'Service', 'yf', 10, 1555, 15, 15550, '2021-04-24 07:31:40', '2021-04-24 07:31:40'),
(69, 3, 1, 'Shooes', 'qq', 111, 1200.11, 11, 133212, '2021-06-03 05:13:25', '2021-06-03 05:13:25');

-- --------------------------------------------------------

--
-- Table structure for table `shortage_stock`
--

CREATE TABLE `shortage_stock` (
  `id` int(10) NOT NULL,
  `cmp_id` int(11) NOT NULL,
  `Voucher_no` int(50) NOT NULL,
  `Sales_Account` varchar(50) NOT NULL,
  `Service_Acc` varchar(75) NOT NULL,
  `billCreatedDate` varchar(50) NOT NULL,
  `dueDate` varchar(45) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `bill_narration` varchar(75) DEFAULT NULL,
  `mobile` varchar(15) NOT NULL,
  `totalBillQuantity` double NOT NULL,
  `totalBillAmount` double NOT NULL,
  `addRound` double DEFAULT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shortage_stock`
--

INSERT INTO `shortage_stock` (`id`, `cmp_id`, `Voucher_no`, `Sales_Account`, `Service_Acc`, `billCreatedDate`, `dueDate`, `customer_name`, `bill_narration`, `mobile`, `totalBillQuantity`, `totalBillAmount`, `addRound`, `updated_at`, `created_at`) VALUES
(1, 1, 1, 'Prathmesh', 'Less Stock', '3-6-2021', '6/6/2021', 'Rishi', 'ww', '8446883665', 22, 26402.42, NULL, '2021-06-03 11:37:13', '2021-06-03 11:37:13'),
(2, 1, 2, 'Prathmesh', 'Less Stock', '3-6-2021', '6/6/2021', 'Rishi', 'ww', '8446883665', 22, 26405, -0.16, '2021-06-03 12:09:02', '2021-06-03 12:09:02'),
(3, 1, 3, 'Less Stock', 'Less Stock', '26-6-2021', '16/7/2021', 'Prathmesh', 'i', '8007327049', 1, 10000, 0, '2021-06-26 10:55:53', '2021-06-26 10:55:53');

-- --------------------------------------------------------

--
-- Table structure for table `shortage_stock_data`
--

CREATE TABLE `shortage_stock_data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shortage_stock_id` int(11) NOT NULL,
  `cmp_id` int(11) NOT NULL,
  `item` varchar(55) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(65) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quntity` int(11) NOT NULL,
  `rate` float NOT NULL,
  `gross` float NOT NULL,
  `itemId` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shortage_stock_data`
--

INSERT INTO `shortage_stock_data` (`id`, `shortage_stock_id`, `cmp_id`, `item`, `description`, `quntity`, `rate`, `gross`, `itemId`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Shooes', 'qq', 22, 1200.11, 26402.4, 11, '2021-06-03 06:07:13', '2021-06-03 06:07:13'),
(2, 2, 1, 'Shooes', 'qq', 22, 1200.22, 26404.8, 11, '2021-06-03 06:39:02', '2021-06-03 06:39:02'),
(3, 3, 1, 'HP', 'Description', 1, 10000, 10000, 30, '2021-06-26 05:25:53', '2021-06-26 05:25:53');

-- --------------------------------------------------------

--
-- Table structure for table `shortcut`
--

CREATE TABLE `shortcut` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `url` varchar(45) NOT NULL,
  `cmp_id` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shortcut`
--

INSERT INTO `shortcut` (`id`, `name`, `url`, `cmp_id`, `updated_at`, `created_at`) VALUES
(63, 'Service Bill', 'serviceBill', 1, '2021-04-26 00:48:04', '2021-04-26 00:48:04'),
(58, 'Product Master', 'productTree', 1, '2021-04-26 00:31:03', '2021-04-26 00:31:03'),
(59, 'Receipt', 'receipt', 1, '2021-04-26 00:47:32', '2021-04-26 00:47:32'),
(60, 'Payment', 'payment', 1, '2021-04-26 00:47:35', '2021-04-26 00:47:35'),
(61, 'Petty Cash', 'pettyCash', 1, '2021-04-26 00:47:43', '2021-04-26 00:47:43'),
(55, 'Warehouse', 'warehouse', 1, '2021-04-26 00:29:31', '2021-04-26 00:29:31'),
(56, 'Department', 'department', 1, '2021-04-26 00:29:35', '2021-04-26 00:29:35'),
(62, 'Purchace Voucher', 'purchaceVoucher', 1, '2021-04-26 00:47:48', '2021-04-26 00:47:48'),
(53, 'Size', 'size', 1, '2021-04-26 00:29:20', '2021-04-26 00:29:20'),
(54, 'Sales Man', 'salesman', 1, '2021-04-26 00:29:27', '2021-04-26 00:29:27'),
(51, 'Brand', 'brand', 1, '2021-04-26 00:28:26', '2021-04-26 00:28:26'),
(57, 'Account Master', 'accountTree', 1, '2021-04-26 00:30:15', '2021-04-26 00:30:15'),
(69, 'Taxes', 'taxes', 1, '2021-04-26 06:55:47', '2021-04-26 06:55:47');

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

CREATE TABLE `size` (
  `id` int(11) NOT NULL,
  `size_name` varchar(50) NOT NULL,
  `cmp_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `size`
--

INSERT INTO `size` (`id`, `size_name`, `cmp_id`, `created_at`, `updated_at`) VALUES
(1, 'jsdd', 0, '2020-11-19 07:08:51', '2020-11-19 01:38:51'),
(3, 'ldsk', 1, '2021-03-29 10:59:40', '2020-11-19 23:28:27'),
(4, 'klmfk', 1, '2021-03-29 10:59:57', '2020-11-19 23:28:38'),
(5, 'XXX', 1, '2021-03-29 10:59:52', '2020-11-24 00:52:37'),
(6, 'XL', 0, '2020-11-24 00:53:21', '2020-11-24 00:53:21'),
(7, 'CVV', 1, '2021-03-29 11:00:02', '2020-11-24 00:55:22'),
(8, 'dklsj', 0, '2020-12-11 01:52:27', '2020-12-11 01:52:27'),
(9, 'aa2', 1, '2021-03-29 05:32:29', '2021-03-29 05:32:29');

-- --------------------------------------------------------

--
-- Table structure for table `taxes`
--

CREATE TABLE `taxes` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `CGST` varchar(30) NOT NULL,
  `SGST` varchar(30) NOT NULL,
  `IGST` varchar(30) NOT NULL,
  `Cess` varchar(30) NOT NULL,
  `GST` varchar(30) NOT NULL,
  `incl_rate` varchar(30) NOT NULL,
  `cmp_id` int(20) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `taxes`
--

INSERT INTO `taxes` (`id`, `name`, `CGST`, `SGST`, `IGST`, `Cess`, `GST`, `incl_rate`, `cmp_id`, `updated_at`, `created_at`) VALUES
(2, '12%GST', '6', '6', '12', '0', '0', '1.12', 1, '2021-04-16 22:46:43', '2020-10-31 04:36:43'),
(8, '17%GST', '9', '9', '18', '0', '18', '1.18', 1, '2021-04-25 23:44:49', '2021-04-15 07:33:40'),
(9, '28%GST', '14', '14', '28', '0', '28', '1.28', 1, '2021-04-16 22:47:34', '2021-04-15 07:34:41'),
(10, '0% GST', '0', '0', '0', '0', '0', '0', 1, '2021-04-15 07:35:24', '2021-04-15 07:35:24'),
(13, '5% GST', '2.5', '2.5', '5', '0', '5', '1.05', 1, '2021-06-26 06:25:26', '2021-06-26 06:25:26');

-- --------------------------------------------------------

--
-- Table structure for table `tax_invoice`
--

CREATE TABLE `tax_invoice` (
  `id` int(10) NOT NULL,
  `cmp_id` int(11) NOT NULL,
  `Voucher_no` int(50) NOT NULL,
  `Sales_Account` varchar(50) NOT NULL,
  `Service_Acc` varchar(75) NOT NULL,
  `billCreatedDate` varchar(50) NOT NULL,
  `dueDate` varchar(45) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `bill_narration` varchar(75) DEFAULT NULL,
  `mobile` varchar(15) NOT NULL,
  `gstpartytype` varchar(25) NOT NULL,
  `totalBillQuantity` double NOT NULL,
  `totalTaxableAmount` float NOT NULL,
  `totalGSTAmount` float NOT NULL,
  `totalIGSTtxt` float NOT NULL,
  `totalRoundoffAmount` float NOT NULL,
  `totalTCStxt` double NOT NULL,
  `addRound` double DEFAULT NULL,
  `hamali` int(26) NOT NULL,
  `cashDisc` int(26) NOT NULL,
  `lastNetAmt` float NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tax_invoice`
--

INSERT INTO `tax_invoice` (`id`, `cmp_id`, `Voucher_no`, `Sales_Account`, `Service_Acc`, `billCreatedDate`, `dueDate`, `customer_name`, `bill_narration`, `mobile`, `gstpartytype`, `totalBillQuantity`, `totalTaxableAmount`, `totalGSTAmount`, `totalIGSTtxt`, `totalRoundoffAmount`, `totalTCStxt`, `addRound`, `hamali`, `cashDisc`, `lastNetAmt`, `updated_at`, `created_at`) VALUES
(1, 1, 1, 'Tax Invoice', 'Tax Invoice', '25-5-2021', 'Salesman', 'Rishi', 'n', '8446883665', 'InState', 77, 92400, 11088, 0, 103500, 103488, NULL, 12, 12, 103500, '2021-05-25 04:20:02', '2021-05-25 04:20:02'),
(2, 1, 2, 'Prathmesh', 'Tax Invoice', '3-6-2021', 'Demo', 'Rishi', 'q', '8446883665', 'InState', 11, 13201.2, 1584.15, 0, 14795, 14785.355199999998, 0.36, 11, 1, 14795, '2021-06-03 05:58:03', '2021-06-03 05:58:03'),
(3, 1, 3, 'Tax Invoice', 'Tax Invoice', '25-6-2021', 'Salesman', 'Rishi', NULL, '8446883665', 'InState', 23, 754402, 90528.4, 0, 404098, 844931.0912, NULL, 1, 0, 404098, '2021-06-25 13:48:14', '2021-06-25 13:48:14'),
(4, 1, 4, 'Tax Invoice', 'Tax Invoice', '25-6-2021', 'Salesman', 'CASH', NULL, '9881427786', 'InState', 2, 38416, 4609.92, 0, 43200, 43025.92, NULL, 200, 26, 43200, '2021-06-25 13:31:09', '2021-06-25 13:31:09'),
(5, 1, 5, 'Prathmesh', 'Tax Invoice', '30-6-2021', 'Salesman', 'Rishi', 'no', '8446883665', 'InState', 23, 754402, 90528.3, 0, 844931, 844930.5759999999, 0.42, 10, 10, 844931, '2021-06-30 11:46:16', '2021-06-30 11:46:16');

-- --------------------------------------------------------

--
-- Table structure for table `tax_invoice_data`
--

CREATE TABLE `tax_invoice_data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tax_invoice_id` int(11) NOT NULL,
  `cmp_id` int(11) NOT NULL,
  `item` varchar(55) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GST` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(65) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quntity` int(11) NOT NULL,
  `rate` float NOT NULL,
  `itemId` int(11) NOT NULL,
  `gross` float NOT NULL,
  `Discount` float NOT NULL,
  `Tradedisc` float NOT NULL,
  `Addless` float NOT NULL,
  `Taxable` float NOT NULL,
  `CGST` float NOT NULL,
  `SGST` float NOT NULL,
  `IGST` float NOT NULL,
  `DiscountforUpdate` float NOT NULL,
  `TradediscforUpdate` float NOT NULL,
  `GSTforUpdate` float NOT NULL,
  `IGSTforUpdate` float NOT NULL,
  `singleItemDiscPrice` float NOT NULL,
  `singleItemTradeDiscPrice` float NOT NULL,
  `singleItemGSTPrice` float NOT NULL,
  `IGST2forUpdate` double NOT NULL,
  `OTHER` double NOT NULL,
  `OTHER1` double NOT NULL,
  `TCS` double NOT NULL,
  `TCS1` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tax_invoice_data`
--

INSERT INTO `tax_invoice_data` (`id`, `tax_invoice_id`, `cmp_id`, `item`, `GST`, `description`, `quntity`, `rate`, `itemId`, `gross`, `Discount`, `Tradedisc`, `Addless`, `Taxable`, `CGST`, `SGST`, `IGST`, `DiscountforUpdate`, `TradediscforUpdate`, `GSTforUpdate`, `IGSTforUpdate`, `singleItemDiscPrice`, `singleItemTradeDiscPrice`, `singleItemGSTPrice`, `IGST2forUpdate`, `OTHER`, `OTHER1`, `TCS`, `TCS1`, `created_at`, `updated_at`) VALUES
(14, 1, 1, 'Shooes', 'GST 12%', 'q', 22, 1200, 11, 26400, 0, 0, 0, 26400, 6, 6, 0, 26400, 26400, 1584, 0, 0, 0, 29568, 0, 0, 29568, 0, 29568, '2021-05-24 22:50:02', '2021-05-24 22:50:02'),
(13, 1, 1, 'Shooes', 'GST 12%', 'q', 55, 1200, 11, 66000, 0, 0, 0, 66000, 6, 6, 0, 66000, 66000, 3960, 0, 0, 0, 73920, 0, 0, 73920, 0, 73920, '2021-05-24 22:50:02', '2021-05-24 22:50:02'),
(15, 2, 1, 'Shooes', 'GST 12%', 'q', 11, 1200.11, 11, 13201.2, 0, 0, 0, 13201.2, 6, 6, 0, 13201.2, 13201.2, 792.073, 0, 0, 0, 14785.4, 0, 0, 14785.355199999998, 0, 14785.355199999998, '2021-06-03 00:28:02', '2021-06-03 00:28:02'),
(23, 3, 1, 'HP', 'GST 12%', 'Description', 11, 32800.1, 30, 360801, 0, 0, 0, 360801, 6, 6, 0, 360801, 360801, 21648.1, 0, 0, 0, 404097, 0, 0, 404097.4784, 0, 404097.4784, '2021-06-25 08:18:14', '2021-06-25 08:18:14'),
(22, 3, 1, 'HP', 'GST 12%', 'qqtt', 12, 32800.1, 30, 393601, 0, 0, 0, 393601, 6, 6, 0, 393601, 393601, 23616.1, 0, 0, 0, 440834, 0, 0, 440833.6128, 0, 440833.6128, '2021-06-25 08:18:14', '2021-06-25 08:18:14'),
(21, 4, 1, 'HP', 'GST 12%', 'Description', 1, 20000, 30, 20000, 2, 2, 0, 19208, 6, 6, 0, 19600, 19208, 1152.48, 0, 400, 392, 21513, 0, 0, 21512.96, 0, 21512.96, '2021-06-25 08:01:09', '2021-06-25 08:01:09'),
(20, 4, 1, 'HP', 'GST 12%', 'Description', 1, 20000, 30, 20000, 2, 2, 0, 19208, 6, 6, 0, 19600, 19208, 1152.48, 0, 400, 392, 21513, 0, 0, 21512.96, 0, 21512.96, '2021-06-25 08:01:09', '2021-06-25 08:01:09'),
(24, 5, 1, 'HP', 'GST 12%', 'Description', 11, 32800.1, 30, 360801, 0, 0, 0, 360801, 6, 6, 0, 360801, 360801, 21648.1, 0, 0, 0, 404097, 0, 0, 404097.23199999996, 0, 404097.23199999996, '2021-06-30 06:16:16', '2021-06-30 06:16:16'),
(25, 5, 1, 'HP', 'GST 12%', 'Description', 12, 32800.1, 30, 393601, 0, 0, 0, 393601, 6, 6, 0, 393601, 393601, 23616.1, 0, 0, 0, 440833, 0, 0, 440833.3439999999, 0, 440833.3439999999, '2021-06-30 06:16:16', '2021-06-30 06:16:16');

-- --------------------------------------------------------

--
-- Table structure for table `tax_invoice_service`
--

CREATE TABLE `tax_invoice_service` (
  `id` int(10) NOT NULL,
  `cmp_id` int(11) NOT NULL,
  `Voucher_no` int(50) NOT NULL,
  `Sales_Account` varchar(50) NOT NULL,
  `Service_Acc` varchar(75) NOT NULL,
  `billCreatedDate` varchar(50) NOT NULL,
  `dueDate` varchar(45) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `bill_narration` varchar(75) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `gstpartytype` varchar(25) NOT NULL,
  `totalBillQuantity` double NOT NULL,
  `totalTaxableAmount` float NOT NULL,
  `totalGSTAmount` float NOT NULL,
  `totalIGSTtxt` float NOT NULL,
  `totalRoundoffAmount` float NOT NULL,
  `addRound` double DEFAULT NULL,
  `hamali` int(20) NOT NULL,
  `cashDisc` int(20) NOT NULL,
  `lastNetAmt` float NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tax_invoice_service`
--

INSERT INTO `tax_invoice_service` (`id`, `cmp_id`, `Voucher_no`, `Sales_Account`, `Service_Acc`, `billCreatedDate`, `dueDate`, `customer_name`, `bill_narration`, `mobile`, `gstpartytype`, `totalBillQuantity`, `totalTaxableAmount`, `totalGSTAmount`, `totalIGSTtxt`, `totalRoundoffAmount`, `addRound`, `hamali`, `cashDisc`, `lastNetAmt`, `updated_at`, `created_at`) VALUES
(1, 1, 1, 'Service Tax Invoice', 'Service Tax Invoice', '3-4-2021', '3/4/2021', 'Rishi', 'ds', '8446883665', 'InState', 6, 7200, 864, 0, 8064, NULL, 10, 0, 8074, '2021-04-03 12:00:12', '2021-04-03 12:00:12'),
(2, 1, 2, 'Service Tax Invoice', 'Service Tax Invoice', '3-4-2021', '3/4/2021', 'Rishi', 'dfds', '8446883665', 'InState', 50, 1750, 87.5, 0, 1837.5, NULL, 50, 5, 1793.12, '2021-04-03 12:02:20', '2021-04-03 12:02:20'),
(3, 1, 3, 'Service Tax Invoice', 'Service Tax Invoice', '3-4-2021', '3/4/2021', 'Rishi', 'dd', '8446883665', 'InState', 6, 7200, 864, 0, 8080, NULL, 16, 0, 8080, '2021-04-03 12:15:07', '2021-04-03 12:15:07'),
(8, 1, 4, 'Prathmesh', 'Service Tax Invoice', '3-6-2021', '6/6/2021', 'Rishi', 'aa', '8446883665', 'InState', 22, 721603, 86592.4, 0, 808205, 0.36, 11, 1, 808205, '2021-06-03 11:06:55', '2021-06-03 11:06:55');

-- --------------------------------------------------------

--
-- Table structure for table `tax_invoice_service_data`
--

CREATE TABLE `tax_invoice_service_data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tax_invoice_service_id` int(11) NOT NULL,
  `cmp_id` int(11) NOT NULL,
  `item` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GST` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quntity` int(11) NOT NULL,
  `rate` float NOT NULL,
  `itemId` int(11) NOT NULL,
  `gross` float NOT NULL,
  `Discount` float NOT NULL,
  `Tradedisc` float NOT NULL,
  `Addless` float NOT NULL,
  `Taxable` float NOT NULL,
  `CGST` float NOT NULL,
  `SGST` float NOT NULL,
  `IGST` float NOT NULL,
  `DiscountforUpdate` float NOT NULL,
  `TradediscforUpdate` float NOT NULL,
  `GSTforUpdate` float NOT NULL,
  `IGSTforUpdate` float NOT NULL,
  `singleItemDiscPrice` float NOT NULL,
  `singleItemTradeDiscPrice` float NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tax_invoice_service_data`
--

INSERT INTO `tax_invoice_service_data` (`id`, `tax_invoice_service_id`, `cmp_id`, `item`, `GST`, `description`, `quntity`, `rate`, `itemId`, `gross`, `Discount`, `Tradedisc`, `Addless`, `Taxable`, `CGST`, `SGST`, `IGST`, `DiscountforUpdate`, `TradediscforUpdate`, `GSTforUpdate`, `IGSTforUpdate`, `singleItemDiscPrice`, `singleItemTradeDiscPrice`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Shooes', 'GST 12%', 'dd', 6, 1200, 11, 7200, 0, 0, 0, 7200, 6, 6, 0, 7200, 7200, 432, 0, 0, 0, '2021-04-03 06:30:11', '2021-04-03 06:30:11'),
(2, 2, 1, 'LUX', 'GST 5%', 'dd', 50, 35, 13, 1750, 0, 0, 0, 1750, 2.5, 2.5, 0, 1750, 1750, 43.75, 0, 0, 0, '2021-04-03 06:32:20', '2021-04-03 06:32:20'),
(3, 3, 1, 'Shooes', 'GST 12%', 'ff', 6, 1200, 11, 7200, 0, 0, 0, 7200, 6, 6, 0, 7200, 7200, 432, 0, 0, 0, '2021-04-03 06:45:07', '2021-04-03 06:45:07'),
(20, 4, 1, 'Shooes', 'GST 12%', 'no', 5, 1200, 11, 6000, 0, 0, 0, 6000, 6, 6, 0, 6000, 6000, 360, 0, 0, 0, '2021-05-14 06:57:49', '2021-05-14 06:57:49'),
(21, 4, 1, 'HP', 'GST 12%', 'no', 5, 32800, 30, 164000, 0, 0, 0, 164000, 6, 6, 0, 164000, 164000, 9840, 0, 0, 0, '2021-05-14 06:57:49', '2021-05-14 06:57:49'),
(22, 4, 1, 'HP', 'GST 12%', 'qq', 22, 32800.1, 30, 721603, 0, 0, 0, 721603, 6, 6, 0, 721603, 721603, 43296.2, 0, 0, 0, '2021-06-03 05:36:55', '2021-06-03 05:36:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cmpname` varchar(75) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cmplogo` varchar(70) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cmpowner` varchar(70) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cmpaddress` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cmpregistrationdetails` varchar(70) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cmpregistermobile` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ownerpan` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cmpgstn` varchar(95) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cmpauthlic` varchar(75) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bankname` varchar(70) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `branchname` varchar(70) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_account_no` varchar(70) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `IFSC` varchar(70) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `cmpname`, `email`, `email_verified_at`, `password`, `cmplogo`, `cmpowner`, `cmpaddress`, `cmpregistrationdetails`, `cmpregistermobile`, `ownerpan`, `cmpgstn`, `cmpauthlic`, `bankname`, `branchname`, `bank_account_no`, `IFSC`, `subject`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'e Web Digital', 'info@ewebdigital.com', NULL, '$2y$10$kUZrkJVeJ951XcA6tiiuUOVyAG9NUxWvBG.Is4RQfae8d3o9d0DIi', NULL, 'Rushikesh Gadkar', 'A-102, Meghmalhar Complex, Above Maratha Hotel Cannought, Cidco, Aurangabad, Maharashtra 431003', 'ABC112', '8446883665', '45325S4S4DSDF4X5S', 'SCF54ZX5CCS5DA4CAS', 'DF4G55DSF1SD2', 'SBI', 'CIDCO', '12121122121212121', 'SBI2A2S555', 'Subject to Aurangabad Jurisdiction only', 'vg4mRg2nUY4GXOk9x1YdTI1iILE0176wCjRtc97byGIoQ4OKmh0OAa0KKwHQ', NULL, '2021-03-08 23:56:14'),
(2, 'Demo Company', 'e@gmail.com', NULL, '$2y$10$kUZrkJVeJ951XcA6tiiuUOVyAG9NUxWvBG.Is4RQfae8d3o9d0DIi', NULL, 'me', 'Aurangabad', 'abc', '1234567890', 'wqd2wd', 'sd2edwd32es', 'dqwdq', 'pnb', 'hjadsnm', '45574257425454', 's54dfsd4', 'uhksdjnm', NULL, '2021-01-15 03:21:19', '2021-04-23 02:48:04'),
(3, 'Tilesh', 'dtilesh@gmail.com', NULL, '$2y$10$qqhGGzVzAMArZeI0i31Wc.iAM6kHDYqdM6W.1vS0F9b5xDcetHTjy', NULL, 'me', '145 vikhe Nagar chitod road dhule', 'abc', '08308283380', '1fr51chg', 'we34rtg', 'ytgf6hg', 'PNB', 'Dhule', '1234567890', '1234', 'No subject', NULL, '2021-04-23 03:08:10', '2021-04-23 03:09:23');

-- --------------------------------------------------------

--
-- Table structure for table `warehouse`
--

CREATE TABLE `warehouse` (
  `id` int(11) NOT NULL,
  `warehouse_name` varchar(50) NOT NULL,
  `warehouse_code` varchar(50) NOT NULL,
  `cmp_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `warehouse`
--

INSERT INTO `warehouse` (`id`, `warehouse_name`, `warehouse_code`, `cmp_id`, `created_at`, `updated_at`) VALUES
(1, 'Production', '11210', 1, '2021-03-29 11:13:13', '2020-11-19 02:53:59'),
(3, 'Production 1', '45d555d', 1, '2021-03-29 11:13:07', '2020-11-19 02:54:26'),
(4, 'kjsdfh', 'jhgh', 0, '2020-11-23 00:32:03', '2020-11-23 00:32:03'),
(5, 'CVV', '112', 0, '2020-11-24 01:35:23', '2020-11-24 01:35:23'),
(6, 'CVV', '112', 1, '2021-03-29 11:13:03', '2020-11-24 01:35:56'),
(7, 'hgfghghj', '5454', 0, '2020-11-25 00:56:30', '2020-11-25 00:56:30'),
(8, 'Production22', '5xc', 1, '2021-03-29 05:45:42', '2021-03-29 05:45:42'),
(9, 'TEA', '0', 1, '2021-04-17 03:35:53', '2021-04-17 03:35:53'),
(11, 'SEEDS', '1', 1, '2021-04-17 03:37:07', '2021-04-17 03:37:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_trees`
--
ALTER TABLE `account_trees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `account_treesgroup`
--
ALTER TABLE `account_treesgroup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`),
  ADD KEY `updated_at` (`updated_at`);

--
-- Indexes for table `company_details`
--
ALTER TABLE `company_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `composition_bill`
--
ALTER TABLE `composition_bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `composition_bill_data`
--
ALTER TABLE `composition_bill_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `credit_note`
--
ALTER TABLE `credit_note`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `credit_note_data`
--
ALTER TABLE `credit_note_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `debit_note`
--
ALTER TABLE `debit_note`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `debit_note_data`
--
ALTER TABLE `debit_note_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `excess_stock`
--
ALTER TABLE `excess_stock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `excess_stock_data`
--
ALTER TABLE `excess_stock_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `general_entry`
--
ALTER TABLE `general_entry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_entry_data`
--
ALTER TABLE `general_entry_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `opening_balance`
--
ALTER TABLE `opening_balance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `opening_balance_data`
--
ALTER TABLE `opening_balance_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `opening_stock`
--
ALTER TABLE `opening_stock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `opening_stock_data`
--
ALTER TABLE `opening_stock_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments_data`
--
ALTER TABLE `payments_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pettycash`
--
ALTER TABLE `pettycash`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pettycash_data`
--
ALTER TABLE `pettycash_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_trees`
--
ALTER TABLE `product_trees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_treesgroup`
--
ALTER TABLE `product_treesgroup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_return`
--
ALTER TABLE `purchase_return`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_return_data`
--
ALTER TABLE `purchase_return_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_voucher`
--
ALTER TABLE `purchase_voucher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_voucher_data`
--
ALTER TABLE `purchase_voucher_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receipts`
--
ALTER TABLE `receipts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receipts_data`
--
ALTER TABLE `receipts_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `retail_sales_invoice`
--
ALTER TABLE `retail_sales_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `retail_sales_invoice_data`
--
ALTER TABLE `retail_sales_invoice_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salesman`
--
ALTER TABLE `salesman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales_invoice`
--
ALTER TABLE `sales_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales_order`
--
ALTER TABLE `sales_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales_order_data`
--
ALTER TABLE `sales_order_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales_return`
--
ALTER TABLE `sales_return`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales_return_data`
--
ALTER TABLE `sales_return_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_bill`
--
ALTER TABLE `service_bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_bill_data`
--
ALTER TABLE `service_bill_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shortage_stock`
--
ALTER TABLE `shortage_stock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shortage_stock_data`
--
ALTER TABLE `shortage_stock_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shortcut`
--
ALTER TABLE `shortcut`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taxes`
--
ALTER TABLE `taxes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tax_invoice`
--
ALTER TABLE `tax_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tax_invoice_data`
--
ALTER TABLE `tax_invoice_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tax_invoice_service`
--
ALTER TABLE `tax_invoice_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tax_invoice_service_data`
--
ALTER TABLE `tax_invoice_service_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cmpregistermobile` (`cmpregistermobile`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `warehouse`
--
ALTER TABLE `warehouse`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_trees`
--
ALTER TABLE `account_trees`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `account_treesgroup`
--
ALTER TABLE `account_treesgroup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `company_details`
--
ALTER TABLE `company_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `composition_bill`
--
ALTER TABLE `composition_bill`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `composition_bill_data`
--
ALTER TABLE `composition_bill_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `credit_note`
--
ALTER TABLE `credit_note`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `credit_note_data`
--
ALTER TABLE `credit_note_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `debit_note`
--
ALTER TABLE `debit_note`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `debit_note_data`
--
ALTER TABLE `debit_note_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `excess_stock`
--
ALTER TABLE `excess_stock`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `excess_stock_data`
--
ALTER TABLE `excess_stock_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `general_entry`
--
ALTER TABLE `general_entry`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `general_entry_data`
--
ALTER TABLE `general_entry_data`
  MODIFY `id` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `opening_balance`
--
ALTER TABLE `opening_balance`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `opening_balance_data`
--
ALTER TABLE `opening_balance_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `opening_stock`
--
ALTER TABLE `opening_stock`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `opening_stock_data`
--
ALTER TABLE `opening_stock_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payments_data`
--
ALTER TABLE `payments_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pettycash`
--
ALTER TABLE `pettycash`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pettycash_data`
--
ALTER TABLE `pettycash_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product_trees`
--
ALTER TABLE `product_trees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `product_treesgroup`
--
ALTER TABLE `product_treesgroup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `purchase_return`
--
ALTER TABLE `purchase_return`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `purchase_return_data`
--
ALTER TABLE `purchase_return_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `purchase_voucher`
--
ALTER TABLE `purchase_voucher`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `purchase_voucher_data`
--
ALTER TABLE `purchase_voucher_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `receipts`
--
ALTER TABLE `receipts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `receipts_data`
--
ALTER TABLE `receipts_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `retail_sales_invoice`
--
ALTER TABLE `retail_sales_invoice`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `retail_sales_invoice_data`
--
ALTER TABLE `retail_sales_invoice_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `salesman`
--
ALTER TABLE `salesman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sales_invoice`
--
ALTER TABLE `sales_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sales_order`
--
ALTER TABLE `sales_order`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sales_order_data`
--
ALTER TABLE `sales_order_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sales_return`
--
ALTER TABLE `sales_return`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sales_return_data`
--
ALTER TABLE `sales_return_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `service_bill`
--
ALTER TABLE `service_bill`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `service_bill_data`
--
ALTER TABLE `service_bill_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `shortage_stock`
--
ALTER TABLE `shortage_stock`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `shortage_stock_data`
--
ALTER TABLE `shortage_stock_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `shortcut`
--
ALTER TABLE `shortcut`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `size`
--
ALTER TABLE `size`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `taxes`
--
ALTER TABLE `taxes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tax_invoice`
--
ALTER TABLE `tax_invoice`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tax_invoice_data`
--
ALTER TABLE `tax_invoice_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tax_invoice_service`
--
ALTER TABLE `tax_invoice_service`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tax_invoice_service_data`
--
ALTER TABLE `tax_invoice_service_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `warehouse`
--
ALTER TABLE `warehouse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
