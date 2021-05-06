-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-04-2021 a las 03:16:24
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `novedadesmaritex`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `cate_id` int(11) NOT NULL,
  `cate_name` varchar(255) NOT NULL,
  `cate_description` varchar(255) DEFAULT NULL,
  `cate_picture` varchar(255) DEFAULT NULL,
  `cate_state` char(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`cate_id`, `cate_name`, `cate_description`, `cate_picture`, `cate_state`, `created_at`, `updated_at`) VALUES
(1, 'Polo', 'Polos para damas, caballeros y niños', NULL, '1', '2021-04-13 05:42:35', '2021-04-13 05:42:35'),
(2, 'Casaca', 'Casacas para damas, caballeros y niños', NULL, '1', '2021-04-13 05:42:53', '2021-04-13 05:43:16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colors`
--

CREATE TABLE `colors` (
  `color_id` int(11) NOT NULL,
  `color_name` varchar(255) NOT NULL,
  `color_rgba` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `colors`
--

INSERT INTO `colors` (`color_id`, `color_name`, `color_rgba`, `created_at`, `updated_at`) VALUES
(1, 'Negro', 'rgb(0, 0, 0)', '2021-04-13 02:22:13', '2021-04-13 02:22:13'),
(2, 'Blanco', 'rgb(255, 255, 255)', '2021-04-13 02:22:13', '2021-04-13 02:22:13'),
(3, 'Amarillo', 'rgb(255, 255, 0)', '2021-04-13 02:22:13', '2021-04-13 02:22:13'),
(4, 'Azul', 'rgb(0, 0, 255)', '2021-04-13 02:22:13', '2021-04-13 02:22:13'),
(5, 'Beige', 'rgb(245, 245, 220)', '2021-04-13 02:22:59', '2021-04-13 02:22:59'),
(6, 'Coral', 'rgb(255, 127, 80)', '2021-04-13 02:23:51', '2021-04-13 02:23:51'),
(7, 'Verde', 'rgb(0, 128, 0)', '2021-04-13 02:23:51', '2021-04-13 02:23:51'),
(8, 'Plomo', 'rgb(128, 128, 128)', '2021-04-13 04:45:41', '2021-04-13 04:45:41'),
(9, 'Celeste', 'rgb(173, 216, 230)', '2021-04-13 04:45:41', '2021-04-13 04:45:41'),
(10, 'Marrón', 'rgb(165, 42, 42)', '2021-04-13 05:02:21', '2021-04-13 05:02:21'),
(11, 'Fucsia', 'rgb(255, 0, 255)', '2021-04-13 05:02:21', '2021-04-13 05:02:21'),
(12, 'Turquesa', 'rgb(64, 224, 208)', '2021-04-13 05:02:21', '2021-04-13 05:02:21'),
(13, 'Violeta', 'rgb(238, 130, 238)', '2021-04-13 05:11:14', '2021-04-13 05:11:14'),
(14, 'Plomo Rata', 'rgb(100, 107, 99)', '2021-04-13 05:11:14', '2021-04-13 05:11:14'),
(15, 'Plomo', 'rgb(118, 136, 143)', '2021-04-13 05:14:06', '2021-04-13 05:14:06'),
(16, 'Morado', 'rgb(128, 0, 128)', '2021-04-13 05:14:06', '2021-04-13 05:14:06'),
(17, 'Acero', 'rgb(70, 130, 180)', '2021-04-13 05:21:27', '2021-04-13 05:21:27'),
(18, 'Vino', 'rgb(86, 7, 12)', '2021-04-13 05:21:27', '2021-04-13 05:21:27'),
(19, 'Mostaza', 'rgb(255, 219, 88)', '2021-04-13 05:21:27', '2021-04-13 05:21:27'),
(20, 'Crema', 'rgb(248, 222, 129)', '2021-04-13 05:21:27', '2021-04-13 05:21:27'),
(21, 'Naranja', 'rgb(255, 165, 0)', '2021-04-13 05:21:27', '2021-04-13 05:21:27'),
(22, 'Cristal', 'rgb(167, 216, 222)', '2021-04-13 05:27:47', '2021-04-13 05:27:47'),
(23, 'Rosado', 'rgb(255, 192, 203)', '2021-04-13 05:27:47', '2021-04-13 05:27:47'),
(24, 'Plomo Claro', 'rgb(211, 211, 211)', '2021-04-13 05:28:49', '2021-04-13 05:28:49'),
(25, 'Palo Rosa', 'rgb(255, 182, 193)', '2021-04-13 05:31:59', '2021-04-13 05:31:59'),
(26, 'Verde Petroleo', 'rgb(85, 107, 47)', '2021-04-13 05:31:59', '2021-04-13 05:31:59'),
(27, 'Militar', 'rgb(120, 134, 107)', '2021-04-13 05:34:52', '2021-04-13 05:34:52'),
(28, 'Azul Marino', 'rgb(0, 0, 128)', '2021-04-13 05:34:52', '2021-04-13 05:34:52');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `currencies`
--

CREATE TABLE `currencies` (
  `curr_id` int(11) NOT NULL,
  `curr_iso` varchar(3) NOT NULL,
  `curr_name` varchar(255) NOT NULL,
  `curr_money` varchar(255) NOT NULL,
  `curr_symbol` char(6) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `currencies`
--

INSERT INTO `currencies` (`curr_id`, `curr_iso`, `curr_name`, `curr_money`, `curr_symbol`, `created_at`, `updated_at`) VALUES
(1, 'AFN', 'Afghani', 'افغانۍ', '؋', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(2, 'THB', 'Baht', 'บาทไทย', '฿', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(3, 'PAB', 'Balboa', 'Balboa', 'B', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(4, 'ETB', 'Birr Etiopía', 'Birr', 'B', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(5, 'VEF', 'Bolivar Fuerte', 'Bolívar', 'B', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(6, 'BOB', 'Boliviano', 'Boliviano', 'B', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(7, 'BND', 'Brunei Dólar', 'Ringgit', 'B', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(8, 'GHS', 'Cedi', 'Cedi', 'G', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(9, 'CRC', 'Colón Costa Rican', 'Colón', '₡', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(10, 'SVC', 'Colón Salvadoreño', 'Colón', '₡', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(11, 'NIO', 'Cordoba Oro', 'Córdoba', 'C', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(12, 'DKK', 'Corona Danesa', 'Corona', 'K', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(13, 'ISK', 'Corona Islandia', 'Corona', 'k', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(14, 'NOK', 'Corona Noruega', 'Corona', 'k', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(15, 'SEK', 'Corona Suiza', 'Corona', 'k', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(16, 'GMD', 'Dalasi', 'Dalasi', 'D', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(17, 'MKD', 'Dinar', 'Денар', 'д', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(18, 'DZD', 'Dinar Algeria', 'دينار', 'د', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(19, 'BHD', 'Dinar Bahrainí', 'دينار', '.', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(20, 'LYD', 'Dinar de Libia', 'دينار', 'ل', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(21, 'RSD', 'Dinar de Serbian', 'Динар', 'д', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(22, 'TND', 'Dinar de Tunisia', 'دينار', 'د', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(23, 'IQD', 'Dinar Iraqi', 'دينار', 'ع', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(24, 'JOD', 'Dinar Jordano', 'دينار', 'د', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(25, 'KWD', 'Dinar Kuwaití', 'دينار', 'د', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(26, 'MAD', 'Dirham de Moroco', 'درهم', 'د', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(27, 'DJF', 'Djibouti Franco', 'الفرنك', 'F', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(28, 'STD', 'Dobra', 'Dobra', 'D', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(29, 'USD', 'Dólar Americano', 'Dólar', '$', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(30, 'AUD', 'Dólar Australiano', 'Dólar', '$', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(31, 'BSD', 'Dólar Bahamas', 'Dólar', 'B', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(32, 'BBD', 'Dólar Barbados', 'Dólar', 'B', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(33, 'BZD', 'Dólar Belize', 'Dólar', 'B', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(34, 'BMD', 'Dólar Bremuda', 'Dólar', 'B', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(35, 'CAD', 'Dólar Canadiense', 'Dólar', '$', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(36, 'GYD', 'Dólar de Guyana', 'Dólar', 'G', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(37, 'NAD', 'Dólar de Namibia', 'Dólar', 'N', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(38, 'ZWL', 'Dólar de Zimbabwe', 'Dólar', '$', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(39, 'XCD', 'Dólar del Este Caribeño', 'Dólar', 'E', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(40, 'FJD', 'Dólar Fiji', 'Dólar', 'F', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(41, 'HKD', 'Dólar Hong Kong', '香港圓', 'H', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(42, 'KYD', 'Dólar Islas Caimán', 'Dólar', '$', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(43, 'SBD', 'Dólar Islas Salomón', 'Dólar', 'S', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(44, 'JMD', 'Dólar Jamaiquino', 'Dólar', '$', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(45, 'LRD', 'Dólar Liberiano', 'Dólar', 'L', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(46, 'NZD', 'Dólar Nueva Zelanda', 'Dólar', '$', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(47, 'SGD', 'Dólar Singapur', '新加坡元', 'S', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(48, 'SRD', 'Dólar Surinam', 'Dólar', '$', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(49, 'TWD', 'Dólar Taiwanés', '新臺幣', '$', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(50, 'TTD', 'Dólar Trinidad y Tobago', 'Dólar', '$', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(51, 'VND', 'Dong', 'đồng', '₫', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(52, 'AMD', 'Dram Armenio', 'Դրամ', 'դ', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(53, 'CVE', 'Escudo Cabo Verde', 'Escudo', 'E', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(54, 'EUR', 'Euro', 'Euro', '€', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(55, 'HUF', 'Florín Húgaro', 'Forín', 'F', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(56, 'XAF', 'Franco CFA', 'Franco', 'C', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(57, 'XOF', 'Franco CFA', 'Franco', 'C', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(58, 'XPF', 'Franco CFA', 'Franco', 'F', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(59, 'CDF', 'Franco Congolés', 'Franco', 'F', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(60, 'KMF', 'Franco de Comoro', 'Franco', 'F', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(61, 'GNF', 'Franco de Guinea', 'Franco', 'F', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(62, 'RWF', 'Franco Ruandés', 'Franco', 'R', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(63, 'CHF', 'Franco Suizo', 'Franco', 'F', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(64, 'BIF', 'Francoo de Burundi', 'Franco', 'F', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(65, 'HTG', 'Gourde', 'Gourde', 'G', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(66, 'PYG', 'Guarani', 'Guaraní', '₲', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(67, 'ANG', 'Guilder Antillas Nerlandesas', 'Gulden', 'N', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(68, 'AWG', 'Guilder de Aruba', 'Florijn', 'A', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(69, 'UAH', 'Hryvnia', 'Гривня', '₴', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(70, 'PGK', 'Kina', 'Kina', 'K', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(71, 'LAK', 'Kip', 'ກີບ', '₭', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(72, 'CZK', 'Koruna Checa', 'Koruna', 'K', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(73, 'EEK', 'Kroon', 'Kroon', 'K', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(74, 'HRK', 'Kuna Croatí', 'Kuna', 'k', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(75, 'MWK', 'Kwacha', 'Kwacha', 'M', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(76, 'ZMK', 'Kwacha de Zambia', 'Kwacha', 'Z', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(77, 'AOA', 'Kwanza', 'Kwanza', 'K', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(78, 'MMK', 'Kyat', 'Kyat', 'K', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(79, 'GEL', 'Lari', 'ლარი', 'l', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(80, 'LVL', 'Latvian Lats', 'Lats', 'L', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(81, 'ALL', 'Lek', 'Leku', 'L', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(82, 'HNL', 'Lempira', 'Lempira', 'L', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(83, 'SLL', 'Leone', 'Leone', 'L', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(84, 'MDL', 'Leu de Moldovia', 'Leu', 'l', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(85, 'BGN', 'Lev Búlgaro', 'лев', 'л', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(86, 'SHP', 'Libra de Santa Eelena', 'Libra', '£', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(87, 'SDG', 'Libra de Sudán', 'جنيه', '£', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(88, 'EGP', 'Libra Egipcia', 'الجنيه', '£', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(90, 'GIP', 'Libra Gibraltar', 'Libra', '£', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(91, 'FKP', 'Libra Islas Falkland', 'Libra', '£', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(92, 'LBP', 'Libra Libanesa', 'ليرة,', 'ل', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(93, 'SYP', 'Libra Siria', 'الليرة', 'S', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(94, 'GBP', 'Libra Sterling', 'Libra', '£', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(95, 'SZL', 'Lilangeni', 'Lilangeni', 'L', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(96, 'TRY', 'Lira Turca', 'Lira', 'T', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(97, 'LTL', 'Litas Lutianesa', 'Litas', 'L', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(98, 'LSL', 'Loti', 'Loti', 'L', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(99, 'MGA', 'Malagasy Ariary', 'Ariary', 'F', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(100, 'TMT', 'Manat', 'Манат', 'm', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(101, 'AZN', 'Manat Azerbaijanian', 'Manatı', 'м', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(102, 'BAM', 'Marcos Convertibles', 'Marka', 'K', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(103, 'MZN', 'Metical', 'Metical', 'M', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(104, 'NGN', 'Naira', 'Naira', '₦', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(105, 'ERN', 'Nakfa', 'Nakfa', 'N', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(106, 'BTN', 'Ngultrum', 'དངུལ་ཀྲམ', 'N', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(107, 'RON', 'Nuevo Leu', 'Leu', 'L', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(108, 'PEN', 'Nuevo Sol', 'Sol', 'S/', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(109, 'MRO', 'Ouguiya', 'أوقية', 'U', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(110, 'TOP', 'Pa/anga', 'Pa/anga', 'T', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(111, 'MOP', 'Pataca', '澳門圓', 'M', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(112, 'ARS', 'Peso Argentino', 'Peso', '$', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(113, 'CLP', 'Peso Chileno', 'Peso', '$', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(114, 'COP', 'Peso Colombiano', 'Peso', 'C', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(115, 'CUP', 'Peso Cubano', 'Peso', '$', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(116, 'DOP', 'Peso Dominicano', 'Peso', 'R', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(117, 'PHP', 'Peso Filipino', 'Piso', '₱', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(118, 'GWP', 'Peso Guinea-Bissau', 'Peso', '$', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(119, 'MXN', 'Peso Mexicano', 'Peso', '$', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(120, 'UYU', 'Peso Uruguayo', 'Peso', '$', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(121, 'BWP', 'Pula', 'Pula', 'P', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(122, 'QAR', 'Qatari Rial', 'ريال', 'ر', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(123, 'GTQ', 'Quetzal', 'Quetzal', 'Q', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(124, 'ZAR', 'Rand', 'Rand', 'R', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(125, 'BRL', 'Real Brasileño', 'Real', 'R', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(126, 'IRR', 'Rial Iraní', '﷼', '﷼', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(127, 'OMR', 'Rial Omani', 'ريال', 'ر', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(128, 'YER', 'Rial Yemení', 'ريال', 'ر', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(129, 'KHR', 'Riel', 'Riel', 'r', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(130, 'MYR', 'Ringgit de Malasia', 'ريڠڬيت', 'R', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(131, 'SAR', 'Riyal Saudí', 'ريال', 'ر', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(132, 'BYR', 'Rublo Bieloruso', 'Рубель', 'B', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(133, 'RUB', 'Rublo Ruso', 'Рубль', 'р', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(134, 'MVR', 'Rufiyaa', 'Rufiyaa', 'R', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(135, 'IDR', 'Rupia', 'Rupia', 'R', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(136, 'SCR', 'Rupia de Seychelles', 'Rupia', 'S', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(137, 'INR', 'Rupia Indú', 'Rupia', 'R', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(138, 'MUR', 'Rupia Mauritius', 'Rupia', 'R', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(139, 'NPR', 'Rupia Nepalesa', 'Rupia', 'N', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(140, 'PKR', 'Rupia Pakistaní', 'Rupia', 'R', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(141, 'LKR', 'Rupia Sri Lanka', 'Rupia', 'R', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(142, 'ILS', 'Sheqel Israeli', 'שקל', '₪', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(143, 'TZS', 'Shilling de Tanzania', 'Shilingi', '/', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(144, 'UGX', 'Shilling de Uganda', 'Shilling', 'U', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(145, 'KES', 'Shilling Kenya', 'Shilling', 'K', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(146, 'SOS', 'Shilling Somalí', 'Shilin', 'S', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(147, 'KGS', 'Som', 'сом', 'с', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(148, 'TJS', 'Somoni', 'Сомонӣ', 'С', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(149, 'UZS', 'Sum Uzbekistán', 'Сўм', 'с', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(150, 'BDT', 'Taka', 'টাকা', '৳', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(151, 'WST', 'Tala', 'Tālā', 'W', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(152, 'KZT', 'Tenge', 'Теңгесі', '〒', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(153, 'MNT', 'Tugrik', 'Төгрөг', '₮', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(154, 'AED', 'UAE Dirham', 'درهم', 'د', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(155, 'VUV', 'Vatu', 'Vatu', 'V', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(156, 'KRW', 'Won', '원', '₩', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(157, 'KPW', 'Won Nor-Coreano', '원', '₩', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(158, 'JPY', 'Yen Japonés', '日本円', '¥', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(159, 'CNY', 'Yuan Chino', '人民币', '¥', '2021-04-12 15:46:39', '2021-04-12 15:46:39'),
(160, 'PLN', 'Zloty Polaco', 'Złoty', 'z', '2021-04-12 15:46:39', '2021-04-12 15:46:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `customers`
--

CREATE TABLE `customers` (
  `cust_id` int(11) NOT NULL,
  `cust_dni` char(8) DEFAULT NULL,
  `cust_ruc` char(11) DEFAULT NULL,
  `cust_last_name` varchar(255) DEFAULT NULL,
  `cust_maiden_name` varchar(255) DEFAULT NULL,
  `cust_first_name` varchar(255) DEFAULT NULL,
  `cust_other_name` varchar(255) DEFAULT NULL,
  `cust_cellphone` varchar(9) NOT NULL,
  `cust_sexo` char(1) NOT NULL,
  `cust_company_name` varchar(255) DEFAULT NULL,
  `cust_contact_title` varchar(255) DEFAULT NULL,
  `cust_contact_name` varchar(255) DEFAULT NULL,
  `cust_contact_phone` char(9) DEFAULT NULL,
  `cust_address` varchar(255) DEFAULT NULL,
  `cust_city` varchar(255) DEFAULT NULL,
  `cust_region` varchar(255) DEFAULT NULL,
  `cust_country` varchar(255) DEFAULT NULL,
  `cust_phone` char(9) DEFAULT NULL,
  `cust_state` char(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `customers`
--

INSERT INTO `customers` (`cust_id`, `cust_dni`, `cust_ruc`, `cust_last_name`, `cust_maiden_name`, `cust_first_name`, `cust_other_name`, `cust_cellphone`, `cust_sexo`, `cust_company_name`, `cust_contact_title`, `cust_contact_name`, `cust_contact_phone`, `cust_address`, `cust_city`, `cust_region`, `cust_country`, `cust_phone`, `cust_state`, `created_at`, `updated_at`) VALUES
(1, '-', '-', '-', ' ', 'Clientes', 'varios', '-', 'M', '-', NULL, '-', '-', '-', ' ', ' ', ' ', '-', '1', '2021-03-22 10:44:33', '2021-03-22 15:44:33'),
(2, '74935445', '10749354459', 'Livias', 'Cerquin', 'Jhon', 'Antony', '973835639', 'M', 'Big Zero Company', 'Ing.', 'Livias, Jhon', '973835639', 'Mz. A26 Lt. 41 Manuel Arevalo Etapa III, La esperanza', 'Trujillo', 'La Libertad', 'Perú', '044464760', '1', '2021-03-22 08:19:19', '2021-03-22 08:19:19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `employees`
--

CREATE TABLE `employees` (
  `empl_id` int(11) NOT NULL,
  `empl_dni` char(11) NOT NULL,
  `empl_ruc` char(11) DEFAULT NULL,
  `empl_last_name` varchar(255) NOT NULL,
  `empl_maiden_name` varchar(255) NOT NULL,
  `empl_first_name` varchar(255) DEFAULT NULL,
  `empl_other_name` varchar(255) DEFAULT NULL,
  `empl_sexo` char(1) NOT NULL,
  `empl_title` varchar(255) DEFAULT NULL,
  `empl_birthday` date NOT NULL,
  `empl_hireday` date NOT NULL,
  `empl_address` varchar(255) NOT NULL,
  `empl_city` varchar(255) NOT NULL,
  `empl_region` varchar(255) NOT NULL,
  `empl_country` varchar(255) NOT NULL,
  `empl_homephone` char(9) NOT NULL,
  `empl_cellphone` char(9) NOT NULL,
  `empl_state` char(1) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `employees`
--

INSERT INTO `employees` (`empl_id`, `empl_dni`, `empl_ruc`, `empl_last_name`, `empl_maiden_name`, `empl_first_name`, `empl_other_name`, `empl_sexo`, `empl_title`, `empl_birthday`, `empl_hireday`, `empl_address`, `empl_city`, `empl_region`, `empl_country`, `empl_homephone`, `empl_cellphone`, `empl_state`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '18146819', '10181468195', 'Cerquin', 'Villanueva', 'Maria', 'Luisa', 'F', 'Jefe', '1974-05-11', '2021-04-12', 'Mz. A26 LT. 41 Etapa III Manuel Arevalo - La Esperanza', 'Trujillo', 'La Libertad', 'Peru', '044464760', '990638706', '1', 2, '2021-04-13 01:50:53', '2021-04-13 01:50:53');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `ship_id` int(11) NOT NULL,
  `empl_id` int(11) NOT NULL,
  `order_paymentdate` datetime NOT NULL,
  `order_freight` varchar(255) NOT NULL,
  `order_address` varchar(255) NOT NULL,
  `order_city` varchar(255) NOT NULL,
  `order_region` varchar(255) NOT NULL,
  `order_country` varchar(255) NOT NULL,
  `order_state` char(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orders_details`
--

CREATE TABLE `orders_details` (
  `prod_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `odet_unitprice` float NOT NULL,
  `odet_quantity` int(11) NOT NULL,
  `odet_totalprice` float NOT NULL,
  `odet_paystate` char(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE `permissions` (
  `perm_id` int(11) NOT NULL,
  `perm_description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `permissions`
--

INSERT INTO `permissions` (`perm_id`, `perm_description`, `created_at`, `updated_at`) VALUES
(1, 'Access Entity List', '2021-04-12 15:46:38', '2021-04-12 15:46:38'),
(2, 'Create Entity', '2021-04-12 15:46:38', '2021-04-12 15:46:38'),
(3, 'Edit Entity', '2021-04-12 15:46:38', '2021-04-12 15:46:38'),
(4, 'Delete Entity', '2021-04-12 15:46:38', '2021-04-12 15:46:38');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `prod_id` int(11) NOT NULL,
  `prod_name` varchar(255) NOT NULL,
  `prod_description` varchar(255) NOT NULL,
  `prod_image` varchar(255) NOT NULL,
  `prod_purchase_price` float NOT NULL,
  `prod_sale_price` float NOT NULL,
  `prod_stock` int(11) NOT NULL,
  `prod_state` char(1) DEFAULT NULL,
  `cate_id` int(11) NOT NULL,
  `supp_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`prod_id`, `prod_name`, `prod_description`, `prod_image`, `prod_purchase_price`, `prod_sale_price`, `prod_stock`, `prod_state`, `cate_id`, `supp_id`, `created_at`, `updated_at`) VALUES
(1, 'Polo Vizcosa Dama', 'Polo vizcosa nacional c/V para dama Colores: Crema, Blanco, Negro, Azul marino, Plomo, Acero, Verde petróleo Talla: Standar', '1617480617.jpg', 12, 30, 10, '1', 1, 1, '2021-04-13 05:48:01', '2021-04-13 06:38:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product_colors`
--

CREATE TABLE `product_colors` (
  `prod_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL,
  `pcol_name` varchar(255) NOT NULL,
  `pcol_rgb` varchar(255) NOT NULL,
  `pcol_stock` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `product_colors`
--

INSERT INTO `product_colors` (`prod_id`, `color_id`, `pcol_name`, `pcol_rgb`, `pcol_stock`, `created_at`, `updated_at`) VALUES
(1, 1, 'Negro', 'rgb(0, 0, 0)', 2, '2021-04-13 05:51:14', '2021-04-13 06:55:32'),
(1, 2, 'Blanco', 'rgb(255, 255, 255)', 2, '2021-04-13 05:51:14', '2021-04-13 06:47:03'),
(1, 8, 'Plomo', 'rgb(128, 128, 128)', 2, '2021-04-13 05:51:14', '2021-04-13 06:47:03'),
(1, 17, 'Acero', 'rgb(70, 130, 180)', 2, '2021-04-13 05:51:14', '2021-04-13 06:47:03'),
(1, 20, 'Crema', 'rgb(248, 222, 129)', 2, '2021-04-13 05:51:14', '2021-04-13 06:47:03'),
(1, 26, 'Verde Petroleo', 'rgb(85, 107, 47)', 2, '2021-04-13 05:51:14', '2021-04-13 06:47:03'),
(1, 28, 'Azul Marino', 'rgb(0, 0, 128)', 2, '2021-04-13 05:51:14', '2021-04-13 06:47:03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product_sizes`
--

CREATE TABLE `product_sizes` (
  `prod_id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  `psiz_name` varchar(255) NOT NULL,
  `psiz_stock` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `product_sizes`
--

INSERT INTO `product_sizes` (`prod_id`, `size_id`, `psiz_name`, `psiz_stock`, `created_at`, `updated_at`) VALUES
(1, 16, 'STANDARD', 10, '2021-04-13 05:51:14', '2021-04-13 06:38:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proof_payment`
--

CREATE TABLE `proof_payment` (
  `ppay_id` int(11) NOT NULL,
  `ppay_custname` varchar(255) DEFAULT NULL,
  `ppay_serie` char(7) NOT NULL,
  `ppay_number` char(3) DEFAULT NULL,
  `ppay_ruc_emisor` char(11) DEFAULT NULL,
  `ppay_custaddress` varchar(255) DEFAULT NULL,
  `ppay_custdni` char(8) DEFAULT NULL,
  `ppay_date` datetime NOT NULL,
  `ppay_denominacion` varchar(255) DEFAULT NULL,
  `sale_id` int(11) NOT NULL,
  `ppay_quantity` int(11) NOT NULL,
  `ppay_description` varchar(255) NOT NULL,
  `ppay_unitprice` float NOT NULL,
  `ppay_totalprice` float NOT NULL,
  `ppay_total` float NOT NULL,
  `ppay_custruc` char(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`role_id`, `role_name`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', '2021-03-16 05:55:02', '2021-03-16 10:55:02'),
(2, 'Editor', '2021-03-16 05:55:11', '2021-03-16 10:55:11'),
(3, 'Boss', '2021-03-15 10:47:11', NULL),
(4, 'Employee', '2021-03-15 10:47:11', NULL),
(5, 'Supplier', '2021-03-15 10:47:11', NULL),
(6, 'Shipper', '2021-03-17 02:52:58', '2021-03-17 07:52:58'),
(7, 'Root', '2021-03-16 08:46:23', '2021-03-16 08:46:23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_permission`
--

CREATE TABLE `role_permission` (
  `perm_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `role_permission`
--

INSERT INTO `role_permission` (`perm_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2021-04-12 15:46:38', '2021-04-12 15:46:38'),
(2, 1, '2021-04-12 15:46:38', '2021-04-12 15:46:38'),
(3, 1, '2021-04-12 15:46:38', '2021-04-12 15:46:38'),
(4, 1, '2021-04-12 15:46:38', '2021-04-12 15:46:38');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sales`
--

CREATE TABLE `sales` (
  `sale_id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `empl_id` int(11) NOT NULL,
  `sale_paymentdate` datetime DEFAULT NULL,
  `sale_state` char(1) DEFAULT NULL,
  `curr_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sales_details`
--

CREATE TABLE `sales_details` (
  `prod_id` int(11) NOT NULL,
  `sale_id` int(11) NOT NULL,
  `sdet_unitprice` float NOT NULL,
  `sdet_quantity` float NOT NULL,
  `sdet_totalprice` float NOT NULL,
  `sdet_paystate` char(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `shippers`
--

CREATE TABLE `shippers` (
  `ship_id` int(11) NOT NULL,
  `ship_companyname` varchar(255) DEFAULT NULL,
  `ship_phone` char(9) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `shippers`
--

INSERT INTO `shippers` (`ship_id`, `ship_companyname`, `ship_phone`, `created_at`, `updated_at`) VALUES
(1, 'Trujillo Express', '044232714', '2021-03-22 07:47:32', '2021-03-22 12:47:32');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sizes`
--

CREATE TABLE `sizes` (
  `size_id` int(11) NOT NULL,
  `size_name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sizes`
--

INSERT INTO `sizes` (`size_id`, `size_name`, `created_at`, `updated_at`) VALUES
(1, '0', '2021-04-13 02:04:12', '2021-04-13 02:04:12'),
(2, '2', '2021-04-13 02:04:19', '2021-04-13 02:04:19'),
(3, '4', '2021-04-13 02:04:21', '2021-04-13 02:04:21'),
(4, '8', '2021-04-13 02:04:25', '2021-04-13 02:04:25'),
(5, '10', '2021-04-13 02:04:32', '2021-04-13 02:04:32'),
(6, '12', '2021-04-13 02:07:47', '2021-04-13 02:07:47'),
(7, '14', '2021-04-13 02:07:50', '2021-04-13 02:07:50'),
(8, '16', '2021-04-13 02:07:54', '2021-04-13 02:07:54'),
(9, 'S', '2021-04-13 02:08:20', '2021-04-13 02:08:20'),
(10, 'M', '2021-04-13 02:08:24', '2021-04-13 02:08:24'),
(11, 'L', '2021-04-13 02:08:28', '2021-04-13 02:08:28'),
(12, 'XL', '2021-04-13 02:08:33', '2021-04-13 02:08:33'),
(13, 'XXL', '2021-04-13 02:08:38', '2021-04-13 02:08:38'),
(14, 'XXXL', '2021-04-13 02:08:43', '2021-04-13 02:08:43'),
(15, 'XXXXL', '2021-04-13 02:08:49', '2021-04-13 02:08:49'),
(16, 'STANDARD', '2021-04-13 02:09:21', '2021-04-13 02:09:21'),
(17, '26', '2021-04-13 02:09:50', '2021-04-13 02:09:50'),
(18, '28', '2021-04-13 02:09:53', '2021-04-13 02:09:53'),
(19, '30', '2021-04-13 02:09:58', '2021-04-13 02:09:58'),
(20, '32', '2021-04-13 02:10:01', '2021-04-13 02:10:01'),
(21, '34', '2021-04-13 02:10:04', '2021-04-13 02:10:04'),
(22, '36', '2021-04-13 02:10:07', '2021-04-13 02:10:07'),
(23, '38', '2021-04-13 02:10:10', '2021-04-13 02:10:10'),
(24, '40', '2021-04-13 02:10:19', '2021-04-13 02:10:19'),
(25, '42', '2021-04-13 02:10:31', '2021-04-13 02:10:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suppliers`
--

CREATE TABLE `suppliers` (
  `supp_id` int(11) NOT NULL,
  `supp_companyname` varchar(255) NOT NULL,
  `supp_contact_name` varchar(255) NOT NULL,
  `supp_contact_title` varchar(255) DEFAULT NULL,
  `supp_dni` char(8) DEFAULT NULL,
  `supp_ruc` char(11) DEFAULT NULL,
  `supp_address` varchar(255) DEFAULT NULL,
  `supp_city` varchar(255) DEFAULT NULL,
  `supp_region` varchar(255) DEFAULT NULL,
  `supp_country` varchar(255) DEFAULT NULL,
  `supp_phone` varchar(255) NOT NULL,
  `supp_homepage` varchar(255) DEFAULT NULL,
  `supp_state` char(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `suppliers`
--

INSERT INTO `suppliers` (`supp_id`, `supp_companyname`, `supp_contact_name`, `supp_contact_title`, `supp_dni`, `supp_ruc`, `supp_address`, `supp_city`, `supp_region`, `supp_country`, `supp_phone`, `supp_homepage`, `supp_state`, `created_at`, `updated_at`) VALUES
(1, 'Big Zero', 'Jhon Livias', 'Sr.', '74935445', '10749354459', 'Mz. A26 Lt.41 Etapa III, La Esperanza', 'Trujillo', 'La Libertad', 'Perú', '973835639', 'https://fleming.zerogroups.org/', '1', '2021-03-22 10:29:41', '2021-03-22 10:29:41');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_image_route` varchar(255) DEFAULT NULL,
  `user_image_name` varchar(255) DEFAULT NULL,
  `role_id` int(11) NOT NULL,
  `user_state` char(1) DEFAULT NULL,
  `user_email_verified_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`user_id`, `email`, `user_name`, `password`, `user_image_route`, `user_image_name`, `role_id`, `user_state`, `user_email_verified_at`, `created_at`, `updated_at`) VALUES
(1, 'zero@mayorista.com', 'zero', '$2y$10$ceFoUSehQRjDq1jFiFtYP.NiZ7P3Ni3iS5eCYe0yalAVDKmJsKbRO', '/img/fotoperfil/', 'Administrator.jpg', 1, '1', NULL, '2021-04-13 01:48:07', '2021-04-13 06:29:00'),
(2, 'mariacerquin2@mayorista.com', 'mariacerquin', '$2y$10$UuO7/L9udoVFrGq7mKm0yOU3Td7JGhxkjeTGUYWZYr390aepBTSWO', '/img/fotoperfil/', 'Boss.jpg', 3, '1', NULL, '2021-04-13 01:50:52', '2021-04-13 01:50:52');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cate_id`);

--
-- Indices de la tabla `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`color_id`);

--
-- Indices de la tabla `currencies`
--
ALTER TABLE `currencies`
  ADD PRIMARY KEY (`curr_id`);

--
-- Indices de la tabla `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indices de la tabla `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`empl_id`),
  ADD KEY `R_14` (`user_id`);

--
-- Indices de la tabla `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `R_5` (`ship_id`),
  ADD KEY `R_6` (`empl_id`);

--
-- Indices de la tabla `orders_details`
--
ALTER TABLE `orders_details`
  ADD PRIMARY KEY (`prod_id`,`order_id`),
  ADD KEY `R_8` (`order_id`);

--
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`perm_id`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`prod_id`),
  ADD KEY `R_4` (`cate_id`);

--
-- Indices de la tabla `product_colors`
--
ALTER TABLE `product_colors`
  ADD PRIMARY KEY (`prod_id`,`color_id`),
  ADD KEY `R_21` (`color_id`);

--
-- Indices de la tabla `product_sizes`
--
ALTER TABLE `product_sizes`
  ADD PRIMARY KEY (`prod_id`,`size_id`),
  ADD KEY `R_23` (`size_id`);

--
-- Indices de la tabla `proof_payment`
--
ALTER TABLE `proof_payment`
  ADD PRIMARY KEY (`ppay_id`),
  ADD KEY `R_15` (`sale_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indices de la tabla `role_permission`
--
ALTER TABLE `role_permission`
  ADD PRIMARY KEY (`perm_id`,`role_id`),
  ADD KEY `R_2` (`role_id`);

--
-- Indices de la tabla `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`sale_id`),
  ADD KEY `R_9` (`cust_id`),
  ADD KEY `R_10` (`empl_id`),
  ADD KEY `R_12` (`curr_id`);

--
-- Indices de la tabla `sales_details`
--
ALTER TABLE `sales_details`
  ADD PRIMARY KEY (`prod_id`,`sale_id`),
  ADD KEY `R_13` (`sale_id`);

--
-- Indices de la tabla `shippers`
--
ALTER TABLE `shippers`
  ADD PRIMARY KEY (`ship_id`);

--
-- Indices de la tabla `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`size_id`);

--
-- Indices de la tabla `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`supp_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `R_3` (`role_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `cate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `colors`
--
ALTER TABLE `colors`
  MODIFY `color_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `currencies`
--
ALTER TABLE `currencies`
  MODIFY `curr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;

--
-- AUTO_INCREMENT de la tabla `customers`
--
ALTER TABLE `customers`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `employees`
--
ALTER TABLE `employees`
  MODIFY `empl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
  MODIFY `perm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `sales`
--
ALTER TABLE `sales`
  MODIFY `sale_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `shippers`
--
ALTER TABLE `shippers`
  MODIFY `ship_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `sizes`
--
ALTER TABLE `sizes`
  MODIFY `size_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `supp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `R_14` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Filtros para la tabla `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `R_5` FOREIGN KEY (`ship_id`) REFERENCES `shippers` (`ship_id`),
  ADD CONSTRAINT `R_6` FOREIGN KEY (`empl_id`) REFERENCES `employees` (`empl_id`);

--
-- Filtros para la tabla `orders_details`
--
ALTER TABLE `orders_details`
  ADD CONSTRAINT `R_7` FOREIGN KEY (`prod_id`) REFERENCES `products` (`prod_id`),
  ADD CONSTRAINT `R_8` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`);

--
-- Filtros para la tabla `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `R_4` FOREIGN KEY (`cate_id`) REFERENCES `categories` (`cate_id`);

--
-- Filtros para la tabla `product_colors`
--
ALTER TABLE `product_colors`
  ADD CONSTRAINT `R_16` FOREIGN KEY (`prod_id`) REFERENCES `products` (`prod_id`),
  ADD CONSTRAINT `R_20` FOREIGN KEY (`prod_id`) REFERENCES `products` (`prod_id`),
  ADD CONSTRAINT `R_21` FOREIGN KEY (`color_id`) REFERENCES `colors` (`color_id`);

--
-- Filtros para la tabla `product_sizes`
--
ALTER TABLE `product_sizes`
  ADD CONSTRAINT `R_17` FOREIGN KEY (`prod_id`) REFERENCES `products` (`prod_id`),
  ADD CONSTRAINT `R_22` FOREIGN KEY (`prod_id`) REFERENCES `products` (`prod_id`),
  ADD CONSTRAINT `R_23` FOREIGN KEY (`size_id`) REFERENCES `sizes` (`size_id`);

--
-- Filtros para la tabla `proof_payment`
--
ALTER TABLE `proof_payment`
  ADD CONSTRAINT `R_15` FOREIGN KEY (`sale_id`) REFERENCES `sales` (`sale_id`);

--
-- Filtros para la tabla `role_permission`
--
ALTER TABLE `role_permission`
  ADD CONSTRAINT `R_1` FOREIGN KEY (`perm_id`) REFERENCES `permissions` (`perm_id`),
  ADD CONSTRAINT `R_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`role_id`);

--
-- Filtros para la tabla `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `R_10` FOREIGN KEY (`empl_id`) REFERENCES `employees` (`empl_id`),
  ADD CONSTRAINT `R_12` FOREIGN KEY (`curr_id`) REFERENCES `currencies` (`curr_id`),
  ADD CONSTRAINT `R_9` FOREIGN KEY (`cust_id`) REFERENCES `customers` (`cust_id`);

--
-- Filtros para la tabla `sales_details`
--
ALTER TABLE `sales_details`
  ADD CONSTRAINT `R_11` FOREIGN KEY (`prod_id`) REFERENCES `products` (`prod_id`),
  ADD CONSTRAINT `R_13` FOREIGN KEY (`sale_id`) REFERENCES `sales` (`sale_id`);

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `R_3` FOREIGN KEY (`role_id`) REFERENCES `roles` (`role_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
