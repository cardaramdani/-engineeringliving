-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2021 at 12:54 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `master_eng`
--

-- --------------------------------------------------------

--
-- Table structure for table `amrs`
--

CREATE TABLE `amrs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shift` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teknisi` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cosp` int(11) NOT NULL,
  `lwbp` int(11) NOT NULL,
  `wbp` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `kvarh` int(11) NOT NULL,
  `penalty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `amrs`
--

INSERT INTO `amrs` (`id`, `shift`, `teknisi`, `cosp`, `lwbp`, `wbp`, `total`, `kvarh`, `penalty`, `created_at`, `updated_at`) VALUES
(1, 'Siang', 'teknisi', 1, 1, 1, 2, 1, 1, '2021-03-20 16:13:18', '2021-03-20 16:13:18'),
(2, 'Pagi', 'carda', 4, 1, 2, 3, 3, 5, '2021-04-02 18:10:45', '2021-08-12 14:52:52'),
(3, 'Siang', 'teknisi', 2, 5, 4, 9, 3, 1, '2021-08-12 14:21:46', '2021-08-12 14:31:00'),
(7, 'Pagi', 'carda', 4, 1, 2, 3, 3, 5, '2021-08-20 08:07:59', '2021-08-20 08:08:13'),
(15, 'Pagi', 'carda', 1, 1, 1, 2, 1, 1, '2021-08-23 13:28:18', '2021-08-23 13:28:18'),
(17, 'Pagi', 'carda', 1, 1, 1, 2, 1, 1, '2021-08-23 13:30:53', '2021-08-23 13:30:53'),
(27, 'Pagi', 'carda', 1, 11, 1, 12, 1, 1, '2021-08-23 14:23:58', '2021-08-23 14:23:58'),
(29, 'Pagi', 'carda', 1, 1, 1, 2, 1, 1, '2021-08-24 03:44:07', '2021-08-24 03:44:07'),
(30, 'Siang', 'teknisi', 1, 1, 1, 2, 1, 1, '2021-08-24 04:06:07', '2021-08-24 04:06:07');

-- --------------------------------------------------------

--
-- Table structure for table `boosterpump`
--

CREATE TABLE `boosterpump` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `teknisi` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shift` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spv` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valvehisappompa1` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valvesuplypompa1` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selektorpompa1` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valvehisappompa2` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valvesuplypompa2` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selektorpompa2` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kondisi` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category_systems`
--

CREATE TABLE `category_systems` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wo_category_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_systems`
--

INSERT INTO `category_systems` (`id`, `name`, `wo_category_id`, `created_at`, `updated_at`) VALUES
(1, 'Electrical', 1, NULL, NULL),
(2, 'HVAC', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category_wos`
--

CREATE TABLE `category_wos` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_wos`
--

INSERT INTO `category_wos` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Engineering', NULL, NULL),
(2, 'Security', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE `equipment` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wo_category_id` int(10) UNSIGNED NOT NULL,
  `category_system_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`id`, `name`, `wo_category_id`, `category_system_id`, `created_at`, `updated_at`) VALUES
(2, 'AC', 1, 2, NULL, NULL),
(3, 'Panel', 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `esps`
--

CREATE TABLE `esps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sensor` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value1` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value2` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value3` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fans`
--

CREATE TABLE `fans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `teknisi` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jadwalpm` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `planpm` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tower` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lantai` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_fan` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l1` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l2` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l3` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l4` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l5` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l6` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l7` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l8` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l9` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l10` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l11` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l12` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l13` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l14` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l1k1` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l2k2` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l3k3` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l4k4` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l5k5` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l6k6` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l7k7` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l8k8` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l9k9` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l10k10` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l11k11` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l12k12` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l13k13` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l14k14` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `firealarms`
--

CREATE TABLE `firealarms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `teknisi` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tower` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lantai` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jadwalpm` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `planpm` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l1` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l2` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l3` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l4` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l5` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l6` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l7` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l8` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l9` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l10` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l11` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l12` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l13` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l14` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l1k1` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l2k2` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l3k3` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l4k4` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l5k5` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l6k6` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l7k7` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l8k8` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l9k9` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l10k10` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l11k11` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l12k12` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l13k13` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l14k14` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `firepumps`
--

CREATE TABLE `firepumps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `teknisi` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shift` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spv` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `statusjockey` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selectorjockey` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valvejockey` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `onpressurejockey` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ofpressurejockey` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bodyjockey` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `statuselectric` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selectorelectric` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valveelectric` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `onpressureelectric` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ofpressureelectric` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bodyelectric` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `statusdiesel` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selectordiesel` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valvediesel` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `onpressurediesel` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ofpressurediesel` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batterycharger` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `leveloli` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `levelsolar` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `levelradiator` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aktualpressureheader` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `temuan` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `firepumps`
--

INSERT INTO `firepumps` (`id`, `teknisi`, `shift`, `spv`, `statusjockey`, `selectorjockey`, `valvejockey`, `onpressurejockey`, `ofpressurejockey`, `bodyjockey`, `statuselectric`, `selectorelectric`, `valveelectric`, `onpressureelectric`, `ofpressureelectric`, `bodyelectric`, `statusdiesel`, `selectordiesel`, `valvediesel`, `onpressurediesel`, `ofpressurediesel`, `batterycharger`, `leveloli`, `levelsolar`, `levelradiator`, `aktualpressureheader`, `temuan`, `created_at`, `updated_at`) VALUES
(1, 'ali', 'Pagi', 'Kosong', 'On', 'Manual', 'Buka', '11 Bar', '11 Bar', 'Kotor', 'On', 'Manual', 'Buka', '11 Bar', 'Manual', 'Bersih', 'On', 'Manual', 'Buka', '11 Bar', 'Manual', '23 Vdc', 'High', 'High', 'High', '11 Bar', 'Nihil', '2021-03-20 16:21:54', '2021-08-21 06:15:57'),
(2, 'dimas', 'Siang', 'Kosong', 'On', 'Manual', 'Buka', '11 Bar', '11 Bar', 'Kotor', 'On', 'Manual', 'Buka', '11 Bar', 'Manual', 'Bersih', 'On', 'Manual', 'Buka', '11 Bar', 'Manual', '23 Vdc', 'High', 'High', 'High', '11 Bar', 'sasak', '2021-04-03 02:36:24', '2021-04-03 02:41:30'),
(10, 'ilzam', 'Siang', 'carda', 'On', 'Manual', 'Buka', '11 Bar', '11 Bar', 'Kotor', 'Off', 'Off', 'Buka', '11 Bar', 'Manual', 'Bersih', 'Off', 'Off', 'Buka', '11 Bar', 'Manual', '23 Vdc', 'High', 'High', 'High', '11 Bar', 'Nihil', '2021-08-21 06:03:04', '2021-08-21 06:29:41'),
(15, 'carda', 'Pagi', 'carda', 'Off', 'Auto', 'Buka', '11 Bar', '11 Bar', 'Kotor', 'Off', 'Auto', 'Buka', '11 Bar', 'Manual', 'Bersih', 'Off', 'Auto', 'Buka', '11 Bar', 'Manual', '23 Vdc', 'High', 'High', 'High', '11 Bar', 'Nihil', '2021-08-21 06:17:17', '2021-08-21 06:28:37'),
(16, 'teknisi', 'Pagi', 'carda', 'On', 'Manual', 'Buka', '11 Bar', '11 Bar', 'Kotor', 'On', 'Manual', 'Buka', '11 Bar', 'Manual', 'Bersih', 'On', 'Manual', 'Buka', '11 Bar', 'Manual', '23 Vdc', 'High', 'High', 'High', '11 Bar', 'Nihil', '2021-08-23 01:18:35', '2021-08-23 01:18:35');

-- --------------------------------------------------------

--
-- Table structure for table `floor`
--

CREATE TABLE `floor` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tower_floor_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `floor`
--

INSERT INTO `floor` (`id`, `name`, `tower_floor_id`, `created_at`, `updated_at`) VALUES
(1, '2', 1, NULL, NULL),
(2, '3', 1, NULL, NULL),
(3, '5', 1, NULL, NULL),
(4, '6', 1, NULL, NULL),
(5, '7', 1, '2021-09-05 11:37:01', '2021-09-05 11:37:01'),
(6, '8', 1, '2021-09-05 11:37:17', '2021-09-05 11:37:17'),
(7, '9', 1, '2021-09-05 11:37:24', '2021-09-05 11:37:24'),
(8, '10', 1, '2021-09-05 11:37:39', '2021-09-05 11:37:39'),
(9, '11', 1, '2021-09-05 11:37:47', '2021-09-05 11:37:47'),
(10, '12', 1, '2021-09-05 11:37:55', '2021-09-05 11:37:55'),
(11, '15', 1, '2021-09-05 11:38:04', '2021-09-05 11:38:04'),
(12, '16', 1, '2021-09-05 11:38:13', '2021-09-05 11:38:13'),
(13, '17', 1, '2021-09-05 11:38:20', '2021-09-05 11:38:20'),
(14, 'roof', 1, '2021-09-05 11:38:31', '2021-09-05 11:38:31'),
(15, 'GF', 1, '2021-09-05 11:38:40', '2021-09-05 11:38:40'),
(16, 'SemiBasement', 1, '2021-09-05 11:38:51', '2021-09-05 11:38:51'),
(17, 'Basement', 4, '2021-09-05 11:47:50', '2021-09-05 11:47:50'),
(18, 'SemiBasement', 2, NULL, NULL),
(19, 'GF', 2, NULL, NULL),
(20, '2', 2, NULL, NULL),
(21, '3', 2, NULL, NULL),
(22, '5', 2, NULL, NULL),
(23, '6', 2, NULL, NULL),
(24, '7', 2, NULL, NULL),
(25, '8', 2, NULL, NULL),
(26, '9', 2, NULL, NULL),
(27, '10', 2, NULL, NULL),
(28, '11', 2, NULL, NULL),
(29, '13', 2, NULL, NULL),
(30, '15', 2, NULL, NULL),
(31, '16', 2, NULL, NULL),
(32, '17', 2, NULL, NULL),
(33, 'Roof', 2, NULL, NULL),
(34, 'Semibasement', 4, NULL, NULL),
(35, 'GF', 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gensets`
--

CREATE TABLE `gensets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `teknisi` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shift` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spv` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `leveloli` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modemodulpkg` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `levelradiator` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `odometer` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `airfilter` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pompasolar` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valvesolar` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `voltageaccu` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `voltagecharger` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amf` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emergencybutton` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bodygenset` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `catatan` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hydrantboxes`
--

CREATE TABLE `hydrantboxes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `teknisi` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jadwalpm` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `planpm` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tower` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lantai` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_no` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l1` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l2` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l3` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l4` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l5` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l6` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l7` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l8` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l9` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l10` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l11` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l12` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l1k1` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l2k2` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l3k3` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l4k4` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l5k5` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l6k6` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l7k7` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l8k8` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l9k9` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l10k10` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l11k11` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l12k12` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kwhcomersile`
--

CREATE TABLE `kwhcomersile` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Unit` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teknisi` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NoSeri` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Daya` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Faktor_kali` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `StandAwal_lwbp` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `StandAkhir_lwbp` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `StandAwal_wbp` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `StandAkhir_wbp` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `GambarAwal_lwbp` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `GambarAkhir_lwbp` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `GambarAwal_wbp` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `GambarAkhir_wbp` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TanggalBAST` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kwhmeterunits`
--

CREATE TABLE `kwhmeterunits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `teknisi` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Unit` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NoSeri` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Daya` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `StandAwal` int(11) NOT NULL,
  `GambarAwal` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `StandAkhir` int(11) NOT NULL,
  `GambarAkhir` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TotalPakai` int(11) NOT NULL,
  `TanggalBAST` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `logbooks`
--

CREATE TABLE `logbooks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shift` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teknisi` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(11, '2020_02_22_095816_create__amrs_table', 1),
(13, '2020_02_22_142640_create__powerhouses_table', 1),
(14, '2020_02_23_035636_create__transferpumps_table', 1),
(15, '2020_02_23_092743_create__firepumps_table', 1),
(35, '2021_03_10_170721_create__schedule_table', 1),
(37, '2021_03_19_141017_new__towers_table', 1),
(90, '2021_04_03_140735_create_equipment_table', 2),
(95, '2021_08_25_083521_create_equipment_ac_table', 6),
(125, '2020_08_30_224441_create_pmacs_table', 7),
(134, '2021_03_19_141017_new_towers_table', 7),
(138, '2021_04_12_140936_create_floors_table', 7),
(139, '2021_08_24_212955_create_wo_categories_table', 7),
(140, '2021_08_24_213751_create_sub_category_wo_table', 7),
(141, '2021_08_25_080738_create_equipments_table', 7),
(142, '2021_08_25_095507_create_equipment_ac_table', 7),
(143, '2021_08_25_114636_create_area_table', 8),
(145, '2021_08_25_143805_create_equipment_no_ac_table', 9),
(146, '2021_08_24_213751_create_category_system_table', 10),
(150, '2021_08_25_185746_create_equipments_tabel', 11),
(379, '2014_10_12_000000_create_users_table', 12),
(380, '2014_10_12_100000_create_password_resets_table', 12),
(381, '2016_06_01_000001_create_oauth_auth_codes_table', 12),
(382, '2016_06_01_000002_create_oauth_access_tokens_table', 12),
(383, '2016_06_01_000003_create_oauth_refresh_tokens_table', 12),
(384, '2016_06_01_000004_create_oauth_clients_table', 12),
(385, '2016_06_01_000005_create_oauth_personal_access_clients_table', 12),
(386, '2019_08_19_000000_create_failed_jobs_table', 12),
(387, '2020_02_22_061214_create_gensets_table', 12),
(388, '2020_02_22_081942_create_water_meter_units_table', 12),
(389, '2020_02_22_095816_create_amrs_table', 12),
(390, '2020_02_22_133810_create_kwhmeterunits_table', 12),
(391, '2020_02_22_142640_create_powerhouses_table', 12),
(392, '2020_02_23_035636_create_transferpumps_table', 12),
(393, '2020_02_23_092743_create_firepumps_table', 12),
(394, '2020_05_01_113517_create_sumpits_table', 12),
(395, '2020_05_12_153118_create_logbooks_table', 12),
(396, '2020_05_14_143818_create_boosterpump_table', 12),
(397, '2020_06_03_050610_create_stp_table', 12),
(398, '2020_07_16_052158_create_pmgenset_table', 12),
(399, '2020_07_24_072608_create_pmpanel_table', 12),
(400, '2020_08_12_052211_create_esps_table', 12),
(401, '2020_08_12_072323_add_api_token_users', 12),
(402, '2020_08_20_130052_create_pm_s_t_p_s_table', 12),
(403, '2020_08_20_134652_create_pmpompas_table', 12),
(404, '2020_08_23_171734_create_pm_firepumps_table', 12),
(405, '2020_08_26_231528_create_pmgondolas_table', 12),
(406, '2020_09_01_160011_create_firealarms_table', 12),
(407, '2020_09_02_122431_create_pmclean_water_tanks_table', 12),
(408, '2020_09_02_170242_create_rooftanks_table', 12),
(409, '2020_09_12_111636_create_hydrantboxes_table', 12),
(410, '2020_09_12_131359_create_toilets_table', 12),
(411, '2020_09_12_151412_create_fans_table', 12),
(412, '2021_03_10_170721_create_schedule_table', 12),
(413, '2021_03_12_231200_create_permission_tables', 12),
(414, '2021_03_19_150042_create_public-_areas_table', 12),
(415, '2021_03_20_111258_create_kwhcomersile_table', 12),
(416, '2021_03_20_112412_create_pdam_table', 12),
(417, '2021_08_25_235041_create_category_wos_table', 12),
(418, '2021_08_25_235519_create_category_systems_table', 12),
(419, '2021_08_25_235649_create_equipment_table', 12),
(420, '2021_08_28_112116_create_pmacs_table', 12),
(421, '2021_08_31_153446_create_towers_table', 12),
(422, '2021_08_31_153644_create_floor_table', 12),
(423, '2021_08_31_161509_create_type_fans_table', 12),
(424, '2021_09_05_101146_create_zone_hydrants_table', 12),
(425, '2021_09_05_182837_create_rooms_table', 13),
(426, '2021_09_05_202133_create_unit_ac_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 1),
(4, 'App\\User', 1),
(4, 'App\\User', 2);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pdam`
--

CREATE TABLE `pdam` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `teknisi` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shift` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stand` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'logsheet', 'web', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pmac`
--

CREATE TABLE `pmac` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `teknisi` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jadwalpm` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `planpm` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tower` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lantai` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi_unit` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_no` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l1` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l2` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l3` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l4` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l5` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l6` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l7` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l8` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l9` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l10` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l11` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l12` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l13` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l14` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l15` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l16` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l17` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l18` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l19` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l20` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l21` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l22` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l23` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l24` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l25` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l26` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l1k1` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l2k2` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l3k3` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l4k4` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l5k5` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l6k6` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l7k7` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l8k8` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l9k9` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l10k10` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l11k11` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l12k12` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l13k13` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l14k14` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l15k15` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l16k16` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l17k17` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l18k18` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l19k19` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l20k20` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l21k21` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l22k22` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l23k23` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l24k24` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l25k25` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l26k26` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pmac`
--

INSERT INTO `pmac` (`id`, `teknisi`, `jadwalpm`, `planpm`, `tower`, `lantai`, `lokasi_unit`, `item_no`, `l1`, `l2`, `l3`, `l4`, `l5`, `l6`, `l7`, `l8`, `l9`, `l10`, `l11`, `l12`, `l13`, `l14`, `l15`, `l16`, `l17`, `l18`, `l19`, `l20`, `l21`, `l22`, `l23`, `l24`, `l25`, `l26`, `l1k1`, `l2k2`, `l3k3`, `l4k4`, `l5k5`, `l6k6`, `l7k7`, `l8k8`, `l9k9`, `l10k10`, `l11k11`, `l12k12`, `l13k13`, `l14k14`, `l15k15`, `l16k16`, `l17k17`, `l18k18`, `l19k19`, `l20k20`, `l21k21`, `l22k22`, `l23k23`, `l24k24`, `l25k25`, `l26k26`, `created_at`, `updated_at`) VALUES
(1, 'carda', '3 Bulanan', '2021-09-05', 'Lotus', 'roof', 'Ruang Mesin Lift Service', '2', 'X', 'C', 'C', 'C', 'C', 'C', 'C', 'C', 'C', 'C', 'C', 'C', 'C', 'C', 'C', 'C', 'C', 'C', 'C', 'C', 'C', 'C', 'C', 'C', 'C', 'X', 'Nihil', 'Nihil', 'Nihil', 'Nihil', 'Nihil', 'Nihil', 'Nihil', 'Nihil', 'Nihil', 'Nihil', 'Nihil', 'Nihil', 'Nihil', 'Nihil', 'Nihil', 'Nihil', 'Nihil', 'Nihil', 'Nihil', 'Nihil', 'Nihil', 'Nihil', 'Nihil', 'Nihil', 'Nihil', 'Nihil', '2021-09-05 14:40:06', '2021-09-05 22:20:48'),
(2, 'carda', '3 Bulanan', '2021-09-15', 'Podium', 'Semibasement', 'Ruang BM', '1', 'C', 'C', 'C', 'C', 'C', 'B', 'C', 'C', 'C', 'C', 'C', 'C', 'C', 'C', 'C', 'C', 'C', 'C', 'C', 'C', 'C', 'C', 'C', 'C', 'C', 'X', 'Nihil', 'Nihil', 'Nihil', 'Nihil', 'Nihil', 'Nihil', 'Nihil', 'Nihil', 'Nihil', 'Nihil', 'Nihil', 'Nihil', 'Nihil', 'Nihil', 'Nihil', 'Nihil', 'Nihil', 'Nihil', 'Nihil', 'Nihil', 'Nihil', 'Nihil', 'Nihil', 'Nihil', 'Nihil', 'Nihil', '2021-09-06 22:26:27', '2021-09-06 22:27:07');

-- --------------------------------------------------------

--
-- Table structure for table `pmclean_water_tanks`
--

CREATE TABLE `pmclean_water_tanks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `teknisi` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jadwalpm` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `planpm` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l1` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l2` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l3` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l4` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l5` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l6` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l7` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l8` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l9` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l10` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l11` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l12` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l13` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l14` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l15` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l1k1` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l2k2` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l3k3` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l4k4` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l5k5` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l6k6` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l7k7` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l8k8` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l9k9` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l10k10` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l11k11` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l12k12` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l13k13` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l14k14` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l15k15` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pmgenset`
--

CREATE TABLE `pmgenset` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `teknisi` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jadwalpm` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `planpm` date NOT NULL,
  `l1` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l2` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l3` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l4` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l5` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l6` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l7` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l8` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l9` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l10` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l11` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l12` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l13` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l14` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l15` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vr` int(11) NOT NULL,
  `vs` int(11) NOT NULL,
  `vt` int(11) NOT NULL,
  `ampr` int(11) NOT NULL,
  `amps` int(11) NOT NULL,
  `ampt` int(11) NOT NULL,
  `l18` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l19` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l20` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l21` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l22` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l23` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l24` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l25` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l26` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l1k1` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l2k2` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l3k3` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l4k4` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l5k5` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l6k6` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l7k7` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l8k8` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l9k9` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l10k10` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l11k11` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l12k12` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l13k13` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l14k14` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l15k15` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l16k16` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l17k17` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l18k18` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l19k19` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l20k20` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l21k21` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l22k22` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l23k23` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l24k24` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l25k25` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l26k26` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pmgondolas`
--

CREATE TABLE `pmgondolas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `teknisi` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jadwalpm` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `planpm` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l1` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l2` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l3` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l4` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l5` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l6` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l7` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l8` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l9` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l10` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l11` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l12` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l13` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l14` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l15` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l16` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l17` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l18` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l1k1` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l2k2` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l3k3` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l4k4` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l5k5` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l6k6` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l7k7` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l8k8` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l9k9` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l10k10` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l11k11` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l12k12` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l13k13` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l14k14` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l15k15` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l16k16` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l17k17` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l18k18` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pmpanel`
--

CREATE TABLE `pmpanel` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `teknisi` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tower` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lantai` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_panel` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jadwalpm` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `planpm` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l1` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l2` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l3` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l4` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l5` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l6` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l7` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l8` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l9` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l10` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l11` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l12` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l13` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l14` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l15` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l16` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l17` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l18` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l19` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l20` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l1k1` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l2k2` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l3k3` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l4k4` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l5k5` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l6k6` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l7k7` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l8k8` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l9k9` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l10k10` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l11k11` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l12k12` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l13k13` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l14k14` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l15k15` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l16k16` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l17k17` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l18k18` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l19k19` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l20k20` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pmpompas`
--

CREATE TABLE `pmpompas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `teknisi` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jadwalpm` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `planpm` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi_unit` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pompa` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l1` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l2` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l3` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l4` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l5` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l6` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l7` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l8` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l9` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l10` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l11` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l12` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l13` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l14` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l15` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l16` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l17` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l18` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l19` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l20` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l21` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l22` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l1k1` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l2k2` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l3k3` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l4k4` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l5k5` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l6k6` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l7k7` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l8k8` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l9k9` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l10k10` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l11k11` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l12k12` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l13k13` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l14k14` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l15k15` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l16k16` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l17k17` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l18k18` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l19k19` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l20k20` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l21k21` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l22k22` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pm_firepumps`
--

CREATE TABLE `pm_firepumps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `teknisi` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jadwalpm` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `planpm` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l1` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l2` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l3` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l4` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l5` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l6` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l7` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l8` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l9` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l10` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l11` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l12` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l13` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l1k1` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l2k2` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l3k3` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l4k4` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l5k5` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l6k6` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l7k7` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l8k8` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l9k9` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l10k10` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l11k11` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l12k12` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l13k13` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pm_s_t_p_s`
--

CREATE TABLE `pm_s_t_p_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `teknisi` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jadwalpm` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `planpm` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l1` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l2` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l3` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l4` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l5` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l6` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l7` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l8` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l9` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l10` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l11` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l12` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l13` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l14` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l15` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l16` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l17` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l18` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l1k1` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l2k2` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l3k3` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l4k4` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l5k5` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l6k6` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l7k7` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l8k8` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l9k9` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l10k10` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l11k11` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l12k12` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l13k13` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l14k14` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l15k15` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l16k16` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l17k17` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l18k18` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `powerhouse`
--

CREATE TABLE `powerhouse` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `teknisi` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shift` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spv` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kwh1` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kwh2` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kva1` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kva2` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kvarh1` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kvarh2` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ampere1r` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ampere2r` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ampere1s` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ampere2s` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ampere1t` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ampere2t` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `v1rs` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `v2rs` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `v1st` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `v2st` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `v1tr` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `v2tr` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `v1rn` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `v2rn` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `v1sn` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `v2sn` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `v1tn` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `v2tn` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `freq1` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `freq2` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selektor1` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selektor2` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fan1` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fan2` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pf1` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pf2` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cap1` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cap2` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fancap1` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fancap2` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `levelolitrafo1` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `levelolitrafo2` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempcap1` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempcap2` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `temptrafo1` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `temptrafo2` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `temuan` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `powerhouses`
--

CREATE TABLE `powerhouses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `teknisi` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shift` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spv` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kwh1` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kwh2` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kva1` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kva2` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kvarh1` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kvarh2` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ampere1r` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ampere2r` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ampere1s` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ampere2s` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ampere1t` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ampere2t` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `v1rs` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `v2rs` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `v1st` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `v2st` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `v1tr` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `v2tr` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `v1rn` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `v2rn` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `v1sn` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `v2sn` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `v1tn` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `v2tn` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `freq1` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `freq2` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selektor1` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selektor2` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fan1` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fan2` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pf1` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pf2` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cap1` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cap2` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fancap1` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fancap2` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `levelolitrafo1` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `levelolitrafo2` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `temptrafo1` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `temptrafo2` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempcap1` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempcap2` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `temuan` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `powerhouses`
--

INSERT INTO `powerhouses` (`id`, `teknisi`, `shift`, `spv`, `kwh1`, `kwh2`, `kva1`, `kva2`, `kvarh1`, `kvarh2`, `ampere1r`, `ampere2r`, `ampere1s`, `ampere2s`, `ampere1t`, `ampere2t`, `v1rs`, `v2rs`, `v1st`, `v2st`, `v1tr`, `v2tr`, `v1rn`, `v2rn`, `v1sn`, `v2sn`, `v1tn`, `v2tn`, `freq1`, `freq2`, `selektor1`, `selektor2`, `fan1`, `fan2`, `pf1`, `pf2`, `cap1`, `cap2`, `fancap1`, `fancap2`, `levelolitrafo1`, `levelolitrafo2`, `temptrafo1`, `temptrafo2`, `tempcap1`, `tempcap2`, `temuan`, `created_at`, `updated_at`) VALUES
(1, 'teknisi', 'Pagi', 'Belum di cross cek', '-1', '-1', '-1', '-1', '-1', '-1', '-1', '-1', '-1', '-1', '-1', '-1', '-1', '-1', '-1', '-1', '-1', '-1', '-1', '-1', '-1', '-1', '-1', '-1', '50,5', '-1', 'Off', 'Off', 'Off', 'Off', '0,8', '0,9', '-1', '1', 'Off', 'On', 'High', 'Medium', '-1', '-1', 'Hot', 'Hot', 'Nihil', '2021-03-20 16:33:39', '2021-03-20 16:33:39'),
(2, 'carda', 'Siang', 'carda', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 'Manual', 'Manual', 'On', 'On', '1', '1', '1', '1', 'Off', 'On', 'High', 'High', '1', '1', 'Hot', 'Hot', 'saa', '2021-04-03 09:54:02', '2021-04-03 09:56:07');

-- --------------------------------------------------------

--
-- Table structure for table `public_area`
--

CREATE TABLE `public_area` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `public_area` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tower_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', NULL, NULL),
(4, 'User', 'web', '2021-09-05 11:24:20', '2021-09-05 11:24:20');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `rooftanks`
--

CREATE TABLE `rooftanks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `teknisi` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jadwalpm` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `planpm` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l1` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l2` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l3` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l4` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l5` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l6` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l7` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l8` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l9` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l10` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l11` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l12` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l1k1` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l2k2` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l3k3` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l4k4` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l5k5` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l6k6` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l7k7` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l8k8` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l9k9` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l10k10` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l11k11` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l12k12` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `equipment_id` int(10) UNSIGNED NOT NULL,
  `tower_id` int(10) UNSIGNED NOT NULL,
  `floor_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `name`, `equipment_id`, `tower_id`, `floor_id`, `created_at`, `updated_at`) VALUES
(1, 'Ruang Pompa', 3, 4, 17, NULL, NULL),
(2, 'Ruang STP', 3, 4, 17, NULL, NULL),
(3, 'Ruang Engineering', 2, 4, 16, NULL, NULL),
(4, 'Ruang BM', 2, 4, 16, NULL, NULL),
(5, 'Ruang Mesin Lift Service', 2, 1, 14, NULL, NULL),
(6, 'Ruang Mesin Lift pass', 2, 1, 14, NULL, NULL),
(7, 'Mushola pria', 2, 4, 16, NULL, NULL),
(8, 'Mushola wanita', 2, 4, 16, NULL, NULL),
(9, 'Lobby lift Pass', 2, 2, 16, NULL, NULL),
(10, 'Garbage', 2, 4, 16, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `file` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_bulan` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_tahun` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `file`, `nama_bulan`, `nama_tahun`, `created_at`, `updated_at`) VALUES
(1, '', 'ap', '2121', NULL, NULL),
(2, '1617376719_IM KADHATON.pdf', 'maret', '2021', '2021-04-02 15:18:39', '2021-04-02 15:18:39'),
(3, '1617377084_17. Pembayaran Deposit dan Biaya Administrasi untuk keperluan Project Show Unit Citra Living.pdf', 'April', '2021', '2021-04-02 15:24:44', '2021-04-02 15:24:44');

-- --------------------------------------------------------

--
-- Table structure for table `stp`
--

CREATE TABLE `stp` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `teknisi` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shift` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spv` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `basketscreen` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selektorblower` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `statusblower1` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pressureblower1` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `statusblower2` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pressureblower2` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kondisiblower1` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kondisiblower2` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selektorequalizing` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `statusequalizing1` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `statusequalizing2` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `levelequalizing` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kondisiequalizing` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selektoreffluent` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `statuseffluent1` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `statuseffluent2` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `leveleffluent` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kondisieffluent` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selektorfilter` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `statusfilter1` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `statusfilter2` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `intakefan` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exhaustfan` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `standmeter` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `temuan` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sumpits`
--

CREATE TABLE `sumpits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `teknisi` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shift` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spv` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `powerpit1` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `powerpit2` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `powerpit3` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `powerpit4` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `powerpit5` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `powerpit6` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `powerpit7` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `powerpit8` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `powerpit9` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `powerpit10` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selektorpit1` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selektorpit2` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selektorpit3` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selektorpit4` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selektorpit5` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selektorpit6` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selektorpit7` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selektorpit8` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selektorpit9` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selektorpit10` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wlcpit1` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wlcpit2` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wlcpit3` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wlcpit4` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wlcpit5` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wlcpit6` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wlcpit7` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wlcpit8` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wlcpit9` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wlcpit10` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kondisipit1` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kondisipit2` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kondisipit3` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kondisipit4` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kondisipit5` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kondisipit6` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kondisipit7` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kondisipit8` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kondisipit9` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kondisipit10` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `toilets`
--

CREATE TABLE `toilets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `teknisi` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jadwalpm` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `planpm` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tower` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lantai` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_toilet` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l1` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l2` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l3` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l4` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l5` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l6` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l7` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l8` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l9` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l10` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l11` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l12` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l13` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l1k1` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l2k2` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l3k3` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l4k4` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l5k5` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l6k6` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l7k7` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l8k8` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l9k9` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l10k10` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l11k11` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l12k12` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l13k13` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `towers`
--

CREATE TABLE `towers` (
  `id` int(10) UNSIGNED NOT NULL,
  `tower` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tower_type` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `towers`
--

INSERT INTO `towers` (`id`, `tower`, `tower_type`, `created_at`, `updated_at`) VALUES
(1, 'Lotus', 'Residensial', NULL, NULL),
(2, 'Orchard', 'Residensial', NULL, NULL),
(3, 'Lavender', 'Residensial', NULL, NULL),
(4, 'Podium', 'Residensial', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transferpumps`
--

CREATE TABLE `transferpumps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `valve_tfa` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_tfa` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valve_tfb` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_tfb` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valve_tfc` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_tfc` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valve_tfd` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_tfd` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kondisi` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teknisi` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shift` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spv` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transferpumps`
--

INSERT INTO `transferpumps` (`id`, `valve_tfa`, `status_tfa`, `valve_tfb`, `status_tfb`, `valve_tfc`, `status_tfc`, `valve_tfd`, `status_tfd`, `kondisi`, `teknisi`, `shift`, `spv`, `created_at`, `updated_at`) VALUES
(1, 'Buka', 'Manual', 'Buka', 'Manual', 'Buka', 'Manual', 'Buka', 'Manual', 'Bersih', 'teknisi', 'Pagi', 'kosong', '2021-03-20 16:38:16', '2021-03-20 16:38:16'),
(3, 'Buka', 'Manual', 'Buka', 'Manual', 'Buka', 'Manual', 'Buka', 'Manual', 'Bersih', 'teknisi', 'Pagi', 'kosong', '2021-08-22 16:37:33', '2021-08-22 16:37:33'),
(4, 'Buka', 'Manual', 'Buka', 'Manual', 'Buka', 'Manual', 'Buka', 'Manual', 'Bersih', 'carda', 'Pagi', 'carda', '2021-08-22 16:43:03', '2021-08-22 16:43:03'),
(5, 'Buka', 'Manual', 'Buka', 'Manual', 'Buka', 'Manual', 'Buka', 'Manual', 'Bersih', 'teknisi', 'Siang', 'kosong', '2021-08-22 16:53:32', '2021-08-22 16:54:44');

-- --------------------------------------------------------

--
-- Table structure for table `type_fans`
--

CREATE TABLE `type_fans` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `floor_type_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `unit_ac`
--

CREATE TABLE `unit_ac` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `unit_ac`
--

INSERT INTO `unit_ac` (`id`, `name`, `room_id`, `created_at`, `updated_at`) VALUES
(1, '1', 6, NULL, NULL),
(2, '2', 6, NULL, NULL),
(3, '1', 5, NULL, NULL),
(4, '2', 5, NULL, NULL),
(5, '1', 4, NULL, NULL),
(6, '2', 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `departement` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nohp` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `api_token` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `departement`, `jabatan`, `gambar`, `nohp`, `username`, `email`, `email_verified_at`, `password`, `api_token`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Engineering', 'teknisi', 'userbaru.jpeg', '09876768', 'carda', 'carda.ramdani@gmail.com', '2021-09-04 17:00:00', '$2y$10$vgUgNmLkakBShpFjkIwu5uRXn/j47vBohD52DfBhsJOVuW0lq4Ynq', '4GX4MyRyNtFzcfd4MD9DIaXpurdZwDrAR32BTHq8C8nH1ozuf4VwL8PkWNsLHfg7MhY4NNtM5lGp342R', NULL, '2021-09-05 11:03:47', '2021-09-05 11:03:47'),
(2, 'Engineering', 'teknisi', 'userbaru.jpeg', '0985467684', 'teknisi', 'jih@ad.com', '2021-09-04 17:00:00', '$2y$10$KrYVtkep31tJ8DdgUlr/8.O7uUjrtgzG.DDtCHj5C8G1yRHA9bRFS', 'kX6ByoXDECSjXBgDqfitdqQgEkfgk6q1gcGPHuHdUNJzSpTZF6WlJo58YwoSHNT3ysZtqCop2z5jT6BU', NULL, '2021-09-05 11:25:07', '2021-09-05 11:25:07');

-- --------------------------------------------------------

--
-- Table structure for table `water_meter_units`
--

CREATE TABLE `water_meter_units` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Unit` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NoSeri` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teknisi` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `StandAwal` int(11) NOT NULL,
  `StandAkhir` int(11) NOT NULL,
  `TotalPakai` int(11) NOT NULL,
  `GambarAwal` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `GambarAkhir` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TanggalBAST` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `zone_hydrants`
--

CREATE TABLE `zone_hydrants` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `floor_zone_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `_amrs`
--

CREATE TABLE `_amrs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shift` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teknisi` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cosp` int(11) NOT NULL,
  `lwbp` int(11) NOT NULL,
  `wbp` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `kvarh` int(11) NOT NULL,
  `penalty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `_firepumps`
--

CREATE TABLE `_firepumps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `teknisi` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shift` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spv` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `statusjockey` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selectorjockey` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valvejockey` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `onpressurejockey` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ofpressurejockey` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bodyjockey` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `statuselectric` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selectorelectric` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valveelectric` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `onpressureelectric` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ofpressureelectric` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bodyelectric` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `statusdiesel` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selectordiesel` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valvediesel` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `onpressurediesel` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ofpressurediesel` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batterycharger` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `leveloli` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `levelsolar` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `levelradiator` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aktualpressureheader` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `temuan` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `_schedule`
--

CREATE TABLE `_schedule` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_bulan` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_tahun` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `_transferpumps`
--

CREATE TABLE `_transferpumps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `valve_tfa` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_tfa` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valve_tfb` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_tfb` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valve_tfc` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_tfc` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valve_tfd` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_tfd` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kondisi` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teknisi` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shift` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spv` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `amrs`
--
ALTER TABLE `amrs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `boosterpump`
--
ALTER TABLE `boosterpump`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_systems`
--
ALTER TABLE `category_systems`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_systems_wo_category_id_foreign` (`wo_category_id`);

--
-- Indexes for table `category_wos`
--
ALTER TABLE `category_wos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `equipment_wo_category_id_foreign` (`wo_category_id`),
  ADD KEY `equipment_category_system_id_foreign` (`category_system_id`);

--
-- Indexes for table `esps`
--
ALTER TABLE `esps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fans`
--
ALTER TABLE `fans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `firealarms`
--
ALTER TABLE `firealarms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `firepumps`
--
ALTER TABLE `firepumps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `floor`
--
ALTER TABLE `floor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `floor_tower_floor_id_foreign` (`tower_floor_id`);

--
-- Indexes for table `gensets`
--
ALTER TABLE `gensets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hydrantboxes`
--
ALTER TABLE `hydrantboxes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kwhcomersile`
--
ALTER TABLE `kwhcomersile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kwhmeterunits`
--
ALTER TABLE `kwhmeterunits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logbooks`
--
ALTER TABLE `logbooks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pdam`
--
ALTER TABLE `pdam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `pmac`
--
ALTER TABLE `pmac`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pmclean_water_tanks`
--
ALTER TABLE `pmclean_water_tanks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pmgenset`
--
ALTER TABLE `pmgenset`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pmgondolas`
--
ALTER TABLE `pmgondolas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pmpanel`
--
ALTER TABLE `pmpanel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pmpompas`
--
ALTER TABLE `pmpompas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pm_firepumps`
--
ALTER TABLE `pm_firepumps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pm_s_t_p_s`
--
ALTER TABLE `pm_s_t_p_s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `powerhouse`
--
ALTER TABLE `powerhouse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `powerhouses`
--
ALTER TABLE `powerhouses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `public_area`
--
ALTER TABLE `public_area`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `rooftanks`
--
ALTER TABLE `rooftanks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rooms_equipment_id_foreign` (`equipment_id`),
  ADD KEY `rooms_tower_id_foreign` (`tower_id`),
  ADD KEY `rooms_floor_id_foreign` (`floor_id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stp`
--
ALTER TABLE `stp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sumpits`
--
ALTER TABLE `sumpits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `toilets`
--
ALTER TABLE `toilets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `towers`
--
ALTER TABLE `towers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transferpumps`
--
ALTER TABLE `transferpumps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type_fans`
--
ALTER TABLE `type_fans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type_fans_floor_type_id_foreign` (`floor_type_id`);

--
-- Indexes for table `unit_ac`
--
ALTER TABLE `unit_ac`
  ADD PRIMARY KEY (`id`),
  ADD KEY `unit_ac_room_id_foreign` (`room_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_nohp_unique` (`nohp`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_api_token_unique` (`api_token`);

--
-- Indexes for table `water_meter_units`
--
ALTER TABLE `water_meter_units`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zone_hydrants`
--
ALTER TABLE `zone_hydrants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `zone_hydrants_floor_zone_id_foreign` (`floor_zone_id`);

--
-- Indexes for table `_amrs`
--
ALTER TABLE `_amrs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `_firepumps`
--
ALTER TABLE `_firepumps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `_schedule`
--
ALTER TABLE `_schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `_transferpumps`
--
ALTER TABLE `_transferpumps`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `amrs`
--
ALTER TABLE `amrs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `boosterpump`
--
ALTER TABLE `boosterpump`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category_systems`
--
ALTER TABLE `category_systems`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category_wos`
--
ALTER TABLE `category_wos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `equipment`
--
ALTER TABLE `equipment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `esps`
--
ALTER TABLE `esps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fans`
--
ALTER TABLE `fans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `firealarms`
--
ALTER TABLE `firealarms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `firepumps`
--
ALTER TABLE `firepumps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `floor`
--
ALTER TABLE `floor`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `gensets`
--
ALTER TABLE `gensets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hydrantboxes`
--
ALTER TABLE `hydrantboxes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kwhcomersile`
--
ALTER TABLE `kwhcomersile`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kwhmeterunits`
--
ALTER TABLE `kwhmeterunits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logbooks`
--
ALTER TABLE `logbooks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=427;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pdam`
--
ALTER TABLE `pdam`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pmac`
--
ALTER TABLE `pmac`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pmclean_water_tanks`
--
ALTER TABLE `pmclean_water_tanks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pmgenset`
--
ALTER TABLE `pmgenset`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pmgondolas`
--
ALTER TABLE `pmgondolas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pmpanel`
--
ALTER TABLE `pmpanel`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pmpompas`
--
ALTER TABLE `pmpompas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pm_firepumps`
--
ALTER TABLE `pm_firepumps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pm_s_t_p_s`
--
ALTER TABLE `pm_s_t_p_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `powerhouse`
--
ALTER TABLE `powerhouse`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `powerhouses`
--
ALTER TABLE `powerhouses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `public_area`
--
ALTER TABLE `public_area`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rooftanks`
--
ALTER TABLE `rooftanks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `stp`
--
ALTER TABLE `stp`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sumpits`
--
ALTER TABLE `sumpits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `toilets`
--
ALTER TABLE `toilets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `towers`
--
ALTER TABLE `towers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `transferpumps`
--
ALTER TABLE `transferpumps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `type_fans`
--
ALTER TABLE `type_fans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `unit_ac`
--
ALTER TABLE `unit_ac`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `water_meter_units`
--
ALTER TABLE `water_meter_units`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `zone_hydrants`
--
ALTER TABLE `zone_hydrants`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `_amrs`
--
ALTER TABLE `_amrs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `_firepumps`
--
ALTER TABLE `_firepumps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `_schedule`
--
ALTER TABLE `_schedule`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `_transferpumps`
--
ALTER TABLE `_transferpumps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `category_systems`
--
ALTER TABLE `category_systems`
  ADD CONSTRAINT `category_systems_wo_category_id_foreign` FOREIGN KEY (`wo_category_id`) REFERENCES `category_wos` (`id`);

--
-- Constraints for table `equipment`
--
ALTER TABLE `equipment`
  ADD CONSTRAINT `equipment_category_system_id_foreign` FOREIGN KEY (`category_system_id`) REFERENCES `category_systems` (`id`),
  ADD CONSTRAINT `equipment_wo_category_id_foreign` FOREIGN KEY (`wo_category_id`) REFERENCES `category_wos` (`id`);

--
-- Constraints for table `floor`
--
ALTER TABLE `floor`
  ADD CONSTRAINT `floor_tower_floor_id_foreign` FOREIGN KEY (`tower_floor_id`) REFERENCES `towers` (`id`);

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `rooms`
--
ALTER TABLE `rooms`
  ADD CONSTRAINT `rooms_equipment_id_foreign` FOREIGN KEY (`equipment_id`) REFERENCES `equipment` (`id`),
  ADD CONSTRAINT `rooms_floor_id_foreign` FOREIGN KEY (`floor_id`) REFERENCES `floor` (`id`),
  ADD CONSTRAINT `rooms_tower_id_foreign` FOREIGN KEY (`tower_id`) REFERENCES `towers` (`id`);

--
-- Constraints for table `type_fans`
--
ALTER TABLE `type_fans`
  ADD CONSTRAINT `type_fans_floor_type_id_foreign` FOREIGN KEY (`floor_type_id`) REFERENCES `floor` (`id`);

--
-- Constraints for table `unit_ac`
--
ALTER TABLE `unit_ac`
  ADD CONSTRAINT `unit_ac_room_id_foreign` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`);

--
-- Constraints for table `zone_hydrants`
--
ALTER TABLE `zone_hydrants`
  ADD CONSTRAINT `zone_hydrants_floor_zone_id_foreign` FOREIGN KEY (`floor_zone_id`) REFERENCES `floor` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
