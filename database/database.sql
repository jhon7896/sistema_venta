-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-04-2021 a las 03:16:24
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

--
-- Base de datos: `novedadesmaritex`
--

DROP DATABASE IF EXISTS novedadesmaritex;

CREATE DATABASE novedadesmaritex;

USE novedadesmaritex;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla categories
--

DROP TABLE IF EXISTS categories;
CREATE TABLE categories
(
	cate_id              INTEGER AUTO_INCREMENT NOT NULL,
	cate_name			 VARCHAR(255) NOT NULL,
	cate_description     VARCHAR(255) NULL,
	cate_picture         VARCHAR(255) NULL,
	cate_state           CHAR(1) NOT NULL,
    created_at 			 timestamp NULL DEFAULT current_timestamp(),
    updated_at 			 timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
    PRIMARY KEY (cate_id)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla colors
--

DROP TABLE IF EXISTS colors;
CREATE TABLE colors (
  color_id 				int(11) NOT NULL,
  color_name 			varchar(255) NOT NULL,
  color_rgba 			varchar(255) NOT NULL,
  created_at 			timestamp NOT NULL DEFAULT current_timestamp(),
  updated_at 			timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (color_id)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla currencies
--

DROP TABLE IF EXISTS currencies;
CREATE TABLE currencies
(
	curr_id          	 INTEGER AUTO_INCREMENT NOT NULL,
	curr_iso			 VARCHAR(3) NOT NULL,
	curr_name        	 VARCHAR(255) NOT NULL,
	curr_money		 	 VARCHAR(255) NOT NULL,
	curr_symbol      	 CHAR(6) NOT NULL,
    created_at 			 timestamp NULL DEFAULT current_timestamp(),
    updated_at 			 timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
    PRIMARY KEY (curr_id)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla customers
--

DROP TABLE IF EXISTS customers;
CREATE TABLE customers
(
	cust_id			 	 int(11) AUTO_INCREMENT NOT NULL,
	cust_dni 			 char(8) DEFAULT NULL,
	cust_ruc 			 char(11) DEFAULT NULL,
	cust_last_name 	 	 varchar(255) DEFAULT NULL,
	cust_maiden_name 	 varchar(255) DEFAULT NULL,
	cust_first_name 	 varchar(255) DEFAULT NULL,
	cust_other_name 	 varchar(255) DEFAULT NULL,
	cust_cellphone	 	 varchar(9) NOT NULL,
	cust_sexo		 	 char(1) NOT NULL,
	cust_company_name    varchar(255) DEFAULT NULL,
	cust_contact_title   varchar(255) DEFAULT NULL,
	cust_contact_name    varchar(255) DEFAULT NULL,
	cust_contact_phone   char(9) DEFAULT NULL,
	cust_address 		 varchar(255) DEFAULT NULL,
	cust_city 		 	 varchar(255) DEFAULT NULL,
	cust_region 		 varchar(255) DEFAULT NULL,
	cust_country 		 varchar(255) DEFAULT NULL,
	cust_phone 		 	 char(9) DEFAULT NULL,
	cust_state 		 	 char(1) DEFAULT NULL,
    created_at 			 timestamp NULL DEFAULT current_timestamp(),
    updated_at 			 timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
    PRIMARY KEY (cust_id)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla employees
--

DROP TABLE IF EXISTS employees;
CREATE TABLE employees
(
	empl_id 			 int(11) AUTO_INCREMENT NOT NULL,
	empl_dni 			 char(11) NOT NULL,
	empl_ruc 			 char(11) DEFAULT NULL,
	empl_last_name 		 varchar(255) NOT NULL,
	empl_maiden_name 	 varchar(255) NOT NULL,
	empl_first_name		 varchar(255) DEFAULT NULL,
	empl_other_name 	 varchar(255) DEFAULT NULL,
	empl_sexo 			 char(1) NOT NULL,
	empl_title 			 varchar(255) DEFAULT NULL,
	empl_birthday 		 date NOT NULL,
	empl_hireday 		 date NOT NULL,
	empl_address 		 varchar(255) NOT NULL,
	empl_city 			 varchar(255) NOT NULL,
	empl_region 		 varchar(255) NOT NULL,
	empl_country 		 varchar(255) NOT NULL,
	empl_homephone 		 char(9) NOT NULL,
	empl_cellphone 		 char(9) NOT NULL,
	empl_state 			 char(1) NOT NULL,
	user_id 			 int(11) NOT NULL,
    created_at 			 timestamp NULL DEFAULT current_timestamp(),
    updated_at 			 timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
    PRIMARY KEY (empl_id)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla orders
--

DROP TABLE IF EXISTS orders;
CREATE TABLE orders
(
	order_id             INTEGER AUTO_INCREMENT NOT NULL,
	cust_id              INTEGER NOT NULL,
	ship_id              INTEGER NOT NULL,
	empl_id              INTEGER NOT NULL,
	curr_id              INTEGER NOT NULL,
	order_paymentdate    DATETIME NOT NULL,
	order_freight        VARCHAR(255) NOT NULL,
	order_address        VARCHAR(255) NOT NULL,
	order_city           VARCHAR(255) NOT NULL,
	order_region         VARCHAR(255) NOT NULL,
	order_country        VARCHAR(255) NOT NULL,
	order_state          CHAR(1) NOT NULL,
    created_at 			 timestamp NULL DEFAULT,
    updated_at 			 timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
    PRIMARY KEY (order_id)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla orders_details
--

DROP TABLE IF EXISTS orders_details;
CREATE TABLE orders_details
(
	prod_id              INTEGER NOT NULL,
	order_id             INTEGER NOT NULL,
	odet_unitprice       FLOAT NOT NULL,
	odet_quantity        INTEGER NOT NULL,
	odet_totalprice      FLOAT NOT NULL,
	odet_paystate        CHAR(1) NOT NULL,
    created_at 			 timestamp NULL DEFAULT current_timestamp(),
    updated_at 			 timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
    PRIMARY KEY (prod_id,order_id)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla permissions
--

DROP TABLE IF EXISTS permissions;
CREATE TABLE permissions
(
	perm_id              INTEGER AUTO_INCREMENT NOT NULL,
	perm_description     VARCHAR(255) NOT NULL,
    created_at 			 timestamp NULL DEFAULT current_timestamp(),
    updated_at 			 timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
    PRIMARY KEY (perm_id)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla products
--

DROP TABLE IF EXISTS products;
CREATE TABLE products
(
	prod_id              INTEGER AUTO_INCREMENT NOT NULL,
	prod_name            VARCHAR(255) NOT NULL,
	prod_description	 VARCHAR(255) NOT NULL,
	prod_image			 VARCHAR(255) NOT NULL,
	prod_purchase_price  FLOAT NOT NULL,
	prod_sale_price		 FLOAT NOT NULL,
	prod_stock           INTEGER NOT NULL,
	prod_state           CHAR(1) NULL,
	cate_id              INTEGER NOT NULL,
	supp_id              INTEGER NOT NULL,
    created_at 			 timestamp NULL DEFAULT current_timestamp(),
    updated_at  		 timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
    PRIMARY KEY (prod_id)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla product_colors
--

DROP TABLE IF EXISTS product_colors;
CREATE TABLE product_colors
(
  prod_id 				int(11) NOT NULL,
  color_id 				int(11) NOT NULL,
  pcol_name 			varchar(255) NOT NULL,
  pcol_rgb 				varchar(255) NOT NULL,
  pcol_stock 			int(11) DEFAULT NULL,
  created_at 			timestamp NOT NULL DEFAULT current_timestamp(),
  updated_at 			timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (prod_id, color_id)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla product_sizes
--

DROP TABLE IF EXISTS product_sizes;
CREATE TABLE product_sizes (
  prod_id 				int(11) NOT NULL,
  size_id 				int(11) NOT NULL,
  psiz_name 			varchar(255) NOT NULL,
  psiz_stock 			int(11) DEFAULT NULL,
  created_at 			timestamp NOT NULL DEFAULT current_timestamp(),
  updated_at 			timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (prod_id, size_id)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla proof_payment
--

DROP TABLE IF EXISTS proof_payment;
CREATE TABLE proof_payment
(
	ppay_id              INTEGER NOT NULL,
	ppay_custname        VARCHAR(255) NULL,
	ppay_serie           CHAR(7) NOT NULL,
	ppay_number          CHAR(3) NULL,
	ppay_ruc_emisor      CHAR(11) NULL,
	ppay_custaddress     VARCHAR(255) NULL,
	ppay_custdni         CHAR(8) NULL,
	ppay_date            DATETIME NOT NULL,
	ppay_denominacion    VARCHAR(255) NULL,
	sale_id              INTEGER NOT NULL,
	ppay_quantity        INTEGER NOT NULL,
	ppay_description     VARCHAR(255) NOT NULL,
	ppay_unitprice       FLOAT NOT NULL,
	ppay_totalprice      FLOAT NOT NULL,
	ppay_total           FLOAT NOT NULL,
	ppay_custruc         CHAR(11) NULL,
    created_at 			 timestamp NULL DEFAULT current_timestamp(),
    updated_at 			 timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
    PRIMARY KEY (ppay_id)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla roles
--

DROP TABLE IF EXISTS roles;
CREATE TABLE roles
(
	role_id              INTEGER AUTO_INCREMENT NOT NULL,
	role_name            VARCHAR(255) NOT NULL,
    created_at 			 timestamp NULL DEFAULT current_timestamp(),
    updated_at 			 timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
    PRIMARY KEY (role_id)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla role_permission
--

DROP TABLE IF EXISTS role_permission;
CREATE TABLE role_permission
(
	perm_id              INTEGER NOT NULL,
	role_id              INTEGER NOT NULL,
    created_at 			 timestamp NULL DEFAULT current_timestamp(),
    updated_at 			 timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
    PRIMARY KEY (perm_id,role_id)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla sales
--

DROP TABLE IF EXISTS sales;
CREATE TABLE sales
(
	sale_id              INTEGER AUTO_INCREMENT NOT NULL,
	cust_id              INTEGER NOT NULL,
	empl_id              INTEGER NOT NULL,
	curr_id              INTEGER NOT NULL,
	sale_paymentdate     DATETIME NULL,
	sale_state           CHAR(1) NULL,
    created_at 			 timestamp NULL DEFAULT current_timestamp(),
    updated_at 			 timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
    PRIMARY KEY (sale_id)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla sales_details
--

DROP TABLE IF EXISTS sales_details;
CREATE TABLE sales_details
(
	prod_id              INTEGER NOT NULL,
	sale_id              INTEGER NOT NULL,
	sdet_unitprice       FLOAT NOT NULL,
	sdet_quantity        FLOAT NOT NULL,
	sdet_totalprice      FLOAT NOT NULL,
	sdet_paystate        CHAR(1) NOT NULL,
    created_at 			 timestamp NULL DEFAULT current_timestamp(),
    updated_at 			 timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
    PRIMARY KEY (prod_id,sale_id)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla shippers
--

DROP TABLE IF EXISTS shippers;
CREATE TABLE shippers
(
	ship_id              INTEGER AUTO_INCREMENT NOT NULL,
	ship_companyname     VARCHAR(255) NULL,
	ship_phone           CHAR(9) NULL,
    created_at 			 timestamp NULL DEFAULT current_timestamp(),
    updated_at 			 timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
    PRIMARY KEY (ship_id)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla sizes
--

DROP TABLE IF EXISTS sizes;
CREATE TABLE sizes 
(
	size_id 				int(11) NOT NULL,
	size_name 			varchar(255) NOT NULL,
	created_at 			timestamp NOT NULL DEFAULT current_timestamp(),
	updated_at 			timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (size_id)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla suppliers
--

DROP TABLE IF EXISTS suppliers;
CREATE TABLE suppliers
(
	supp_id              INTEGER AUTO_INCREMENT NOT NULL,
	supp_companyname     VARCHAR(255) NOT NULL,
	supp_contact_name    VARCHAR(255) NOT NULL,
	supp_contact_title   VARCHAR(255) NULL,
	supp_dni 			 CHAR(8) NULL,
    supp_ruc 			 CHAR(11) NULL,
	supp_address         VARCHAR(255) NULL,
	supp_city            VARCHAR(255) NULL,
	supp_region          VARCHAR(255) NULL,
	supp_country         VARCHAR(255) NULL,
	supp_phone           VARCHAR(255) NOT NULL,
	supp_homepage        VARCHAR(255) NULL,
	supp_state           CHAR(1) NULL,
    created_at 			 timestamp NULL DEFAULT current_timestamp(),
    updated_at 			 timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
    PRIMARY KEY (supp_id)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla users
--

DROP TABLE IF EXISTS users;
CREATE TABLE users
(
	user_id              INTEGER AUTO_INCREMENT,
	email                VARCHAR(255) NOT NULL,
	user_name            VARCHAR(255) NOT NULL,
	password             VARCHAR(255) NOT NULL,
    user_image_route     varchar(255) NULL,
    user_image_name    	 varchar(255) NULL,
	role_id              INTEGER NOT NULL,
	user_state           CHAR(1) NULL,
	user_email_verified_at TIMESTAMP NULL,
    created_at           timestamp NULL DEFAULT current_timestamp(),
    updated_at           timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
    PRIMARY KEY (user_id)
);

--
-- Indices de la tabla role_permission
--

ALTER TABLE role_permission
ADD FOREIGN KEY R_1 (perm_id) REFERENCES permissions (perm_id);

ALTER TABLE role_permission
ADD FOREIGN KEY R_2 (role_id) REFERENCES roles (role_id);

--
-- Indices de la tabla users
--

ALTER TABLE users
ADD FOREIGN KEY R_3 (role_id) REFERENCES roles (role_id);

--
-- Indices de la tabla products
--

ALTER TABLE products
ADD FOREIGN KEY R_4 (cate_id) REFERENCES categories (cate_id);

ALTER TABLE products
ADD FOREIGN KEY R_5 (supp_id) REFERENCES suppliers (supp_id);

--
-- Indices de la tabla orders
--

ALTER TABLE orders
ADD FOREIGN KEY R_6 (cust_id) REFERENCES customers (cust_id);

ALTER TABLE orders
ADD FOREIGN KEY R_7 (ship_id) REFERENCES shippers (ship_id);

ALTER TABLE orders
ADD FOREIGN KEY R_8 (empl_id) REFERENCES employees (empl_id);

ALTER TABLE orders
ADD FOREIGN KEY R_9 (curr_id) REFERENCES currencies (curr_id);

--
-- Indices de la tabla orders_details
--

ALTER TABLE orders_details
ADD FOREIGN KEY R_10 (prod_id) REFERENCES products (prod_id);

ALTER TABLE orders_details
ADD FOREIGN KEY R_11 (order_id) REFERENCES orders (order_id);

--
-- Indices de la tabla sales
--

ALTER TABLE sales
ADD FOREIGN KEY R_12 (cust_id) REFERENCES customers (cust_id);

ALTER TABLE sales
ADD FOREIGN KEY R_13 (empl_id) REFERENCES employees (empl_id);

ALTER TABLE sales
ADD FOREIGN KEY R_14 (curr_id) REFERENCES currencies (curr_id);

--
-- Indices de la tabla sales_details
--

ALTER TABLE sales_details
ADD FOREIGN KEY R_15 (prod_id) REFERENCES products (prod_id);

ALTER TABLE sales_details
ADD FOREIGN KEY R_16 (sale_id) REFERENCES sales (sale_id);

--
-- Indices de la tabla employees
--

ALTER TABLE employees
ADD FOREIGN KEY R_16 (user_id) REFERENCES users (user_id);

--
-- Indices de la tabla proof_payment
--

ALTER TABLE proof_payment
ADD FOREIGN KEY R_17 (sale_id) REFERENCES sales (sale_id);

--
-- Indices de la tabla product_colors
--

ALTER TABLE product_colors
ADD CONSTRAINT R_19 FOREIGN KEY (prod_id) REFERENCES products (prod_id);

ALTER TABLE product_colors
ADD CONSTRAINT R_20 FOREIGN KEY (prod_id) REFERENCES products (prod_id);

ALTER TABLE product_colors
ADD CONSTRAINT R_21 FOREIGN KEY (color_id) REFERENCES colors (color_id);

--
-- Indices de la tabla product_sizes
--

ALTER TABLE product_sizes
ADD CONSTRAINT R_22 FOREIGN KEY (prod_id) REFERENCES products (prod_id),

ALTER TABLE product_sizes
ADD CONSTRAINT R_23 FOREIGN KEY (prod_id) REFERENCES products (prod_id),

ALTER TABLE product_sizes
ADD CONSTRAINT R_24 FOREIGN KEY (size_id) REFERENCES sizes (size_id);

--
-- Volcado de datos para la tabla categories
--

INSERT INTO `categories` (`cate_id`, `cate_name`, `cate_description`, `cate_picture`, `cate_state`, `created_at`, `updated_at`) VALUES
(1, 'Polo', 'Polos para damas, caballeros y niños', NULL, '1', '2021-04-13 05:42:35', '2021-04-13 05:42:35'),
(2, 'Casaca', 'Casacas para damas, caballeros y niños', NULL, '1', '2021-04-13 05:42:53', '2021-04-13 05:43:16');

--
-- Volcado de datos para la tabla colors
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

--
-- Volcado de datos para la tabla currencies
--

INSERT INTO `currencies` (`curr_id`, `curr_iso`, `curr_name`, `curr_money`, `curr_symbol`) VALUES
(1, 'AFN', 'Afghani', 'افغانۍ', '؋'),
(2, 'THB', 'Baht', 'บาทไทย', '฿'),
(3, 'PAB', 'Balboa', 'Balboa', 'B'),
(4, 'ETB', 'Birr Etiopía', 'Birr', 'B'),
(5, 'VEF', 'Bolivar Fuerte', 'Bolívar', 'B'),
(6, 'BOB', 'Boliviano', 'Boliviano', 'B'),
(7, 'BND', 'Brunei Dólar', 'Ringgit', 'B'),
(8, 'GHS', 'Cedi', 'Cedi', 'G'),
(9, 'CRC', 'Colón Costa Rican', 'Colón', '₡'),
(10, 'SVC', 'Colón Salvadoreño', 'Colón', '₡'),
(11, 'NIO', 'Cordoba Oro', 'Córdoba', 'C'),
(12, 'DKK', 'Corona Danesa', 'Corona', 'K'),
(13, 'ISK', 'Corona Islandia', 'Corona', 'k'),
(14, 'NOK', 'Corona Noruega', 'Corona', 'k'),
(15, 'SEK', 'Corona Suiza', 'Corona', 'k'),
(16, 'GMD', 'Dalasi', 'Dalasi', 'D'),
(17, 'MKD', 'Dinar', 'Денар', 'д'),
(18, 'DZD', 'Dinar Algeria', 'دينار', 'د'),
(19, 'BHD', 'Dinar Bahrainí', 'دينار', '.'),
(20, 'LYD', 'Dinar de Libia', 'دينار', 'ل'),
(21, 'RSD', 'Dinar de Serbian', 'Динар', 'д'),
(22, 'TND', 'Dinar de Tunisia', 'دينار', 'د'),
(23, 'IQD', 'Dinar Iraqi', 'دينار', 'ع'),
(24, 'JOD', 'Dinar Jordano', 'دينار', 'د'),
(25, 'KWD', 'Dinar Kuwaití', 'دينار', 'د'),
(26, 'MAD', 'Dirham de Moroco', 'درهم', 'د'),
(27, 'DJF', 'Djibouti Franco', 'الفرنك', 'F'),
(28, 'STD', 'Dobra', 'Dobra', 'D'),
(29, 'USD', 'Dólar Americano', 'Dólar', '$'),
(30, 'AUD', 'Dólar Australiano', 'Dólar', '$'),
(31, 'BSD', 'Dólar Bahamas', 'Dólar', 'B'),
(32, 'BBD', 'Dólar Barbados', 'Dólar', 'B'),
(33, 'BZD', 'Dólar Belize', 'Dólar', 'B'),
(34, 'BMD', 'Dólar Bremuda', 'Dólar', 'B'),
(35, 'CAD', 'Dólar Canadiense', 'Dólar', '$'),
(36, 'GYD', 'Dólar de Guyana', 'Dólar', 'G'),
(37, 'NAD', 'Dólar de Namibia', 'Dólar', 'N'),
(38, 'ZWL', 'Dólar de Zimbabwe', 'Dólar', '$'),
(39, 'XCD', 'Dólar del Este Caribeño', 'Dólar', 'E'),
(40, 'FJD', 'Dólar Fiji', 'Dólar', 'F'),
(41, 'HKD', 'Dólar Hong Kong', '香港圓', 'H'),
(42, 'KYD', 'Dólar Islas Caimán', 'Dólar', '$'),
(43, 'SBD', 'Dólar Islas Salomón', 'Dólar', 'S'),
(44, 'JMD', 'Dólar Jamaiquino', 'Dólar', '$'),
(45, 'LRD', 'Dólar Liberiano', 'Dólar', 'L'),
(46, 'NZD', 'Dólar Nueva Zelanda', 'Dólar', '$'),
(47, 'SGD', 'Dólar Singapur', '新加坡元', 'S'),
(48, 'SRD', 'Dólar Surinam', 'Dólar', '$'),
(49, 'TWD', 'Dólar Taiwanés', '新臺幣', '$'),
(50, 'TTD', 'Dólar Trinidad y Tobago', 'Dólar', '$'),
(51, 'VND', 'Dong', 'đồng', '₫'),
(52, 'AMD', 'Dram Armenio', 'Դրամ', 'դ'),
(53, 'CVE', 'Escudo Cabo Verde', 'Escudo', 'E'),
(54, 'EUR', 'Euro', 'Euro', '€'),
(55, 'HUF', 'Florín Húgaro', 'Forín', 'F'),
(56, 'XAF', 'Franco CFA', 'Franco', 'C'),
(57, 'XOF', 'Franco CFA', 'Franco', 'C'),
(58, 'XPF', 'Franco CFA', 'Franco', 'F'),
(59, 'CDF', 'Franco Congolés', 'Franco', 'F'),
(60, 'KMF', 'Franco de Comoro', 'Franco', 'F'),
(61, 'GNF', 'Franco de Guinea', 'Franco', 'F'),
(62, 'RWF', 'Franco Ruandés', 'Franco', 'R'),
(63, 'CHF', 'Franco Suizo', 'Franco', 'F'),
(64, 'BIF', 'Francoo de Burundi', 'Franco', 'F'),
(65, 'HTG', 'Gourde', 'Gourde', 'G'),
(66, 'PYG', 'Guarani', 'Guaraní', '₲'),
(67, 'ANG', 'Guilder Antillas Nerlandesas', 'Gulden', 'N'),
(68, 'AWG', 'Guilder de Aruba', 'Florijn', 'A'),
(69, 'UAH', 'Hryvnia', 'Гривня', '₴'),
(70, 'PGK', 'Kina', 'Kina', 'K'),
(71, 'LAK', 'Kip', 'ກີບ', '₭'),
(72, 'CZK', 'Koruna Checa', 'Koruna', 'K'),
(73, 'EEK', 'Kroon', 'Kroon', 'K'),
(74, 'HRK', 'Kuna Croatí', 'Kuna', 'k'),
(75, 'MWK', 'Kwacha', 'Kwacha', 'M'),
(76, 'ZMK', 'Kwacha de Zambia', 'Kwacha', 'Z'),
(77, 'AOA', 'Kwanza', 'Kwanza', 'K'),
(78, 'MMK', 'Kyat', 'Kyat', 'K'),
(79, 'GEL', 'Lari', 'ლარი', 'l'),
(80, 'LVL', 'Latvian Lats', 'Lats', 'L'),
(81, 'ALL', 'Lek', 'Leku', 'L'),
(82, 'HNL', 'Lempira', 'Lempira', 'L'),
(83, 'SLL', 'Leone', 'Leone', 'L'),
(84, 'MDL', 'Leu de Moldovia', 'Leu', 'l'),
(85, 'BGN', 'Lev Búlgaro', 'лев', 'л'),
(86, 'SHP', 'Libra de Santa Eelena', 'Libra', '£'),
(87, 'SDG', 'Libra de Sudán', 'جنيه', '£'),
(88, 'EGP', 'Libra Egipcia', 'الجنيه', '£'),
(90, 'GIP', 'Libra Gibraltar', 'Libra', '£'),
(91, 'FKP', 'Libra Islas Falkland', 'Libra', '£'),
(92, 'LBP', 'Libra Libanesa', 'ليرة,', 'ل'),
(93, 'SYP', 'Libra Siria', 'الليرة', 'S'),
(94, 'GBP', 'Libra Sterling', 'Libra', '£'),
(95, 'SZL', 'Lilangeni', 'Lilangeni', 'L'),
(96, 'TRY', 'Lira Turca', 'Lira', 'T'),
(97, 'LTL', 'Litas Lutianesa', 'Litas', 'L'),
(98, 'LSL', 'Loti', 'Loti', 'L'),
(99, 'MGA', 'Malagasy Ariary', 'Ariary', 'F'),
(100, 'TMT', 'Manat', 'Манат', 'm'),
(101, 'AZN', 'Manat Azerbaijanian', 'Manatı', 'м'),
(102, 'BAM', 'Marcos Convertibles', 'Marka', 'K'),
(103, 'MZN', 'Metical', 'Metical', 'M'),
(104, 'NGN', 'Naira', 'Naira', '₦'),
(105, 'ERN', 'Nakfa', 'Nakfa', 'N'),
(106, 'BTN', 'Ngultrum', 'དངུལ་ཀྲམ', 'N'),
(107, 'RON', 'Nuevo Leu', 'Leu', 'L'),
(108, 'PEN', 'Nuevo Sol', 'Sol', 'S/'),
(109, 'MRO', 'Ouguiya', 'أوقية', 'U'),
(110, 'TOP', 'Pa/anga', 'Pa/anga', 'T'),
(111, 'MOP', 'Pataca', '澳門圓', 'M'),
(112, 'ARS', 'Peso Argentino', 'Peso', '$'),
(113, 'CLP', 'Peso Chileno', 'Peso', '$'),
(114, 'COP', 'Peso Colombiano', 'Peso', 'C'),
(115, 'CUP', 'Peso Cubano', 'Peso', '$'),
(116, 'DOP', 'Peso Dominicano', 'Peso', 'R'),
(117, 'PHP', 'Peso Filipino', 'Piso', '₱'),
(118, 'GWP', 'Peso Guinea-Bissau', 'Peso', '$'),
(119, 'MXN', 'Peso Mexicano', 'Peso', '$'),
(120, 'UYU', 'Peso Uruguayo', 'Peso', '$'),
(121, 'BWP', 'Pula', 'Pula', 'P'),
(122, 'QAR', 'Qatari Rial', 'ريال', 'ر'),
(123, 'GTQ', 'Quetzal', 'Quetzal', 'Q'),
(124, 'ZAR', 'Rand', 'Rand', 'R'),
(125, 'BRL', 'Real Brasileño', 'Real', 'R'),
(126, 'IRR', 'Rial Iraní', '﷼', '﷼'),
(127, 'OMR', 'Rial Omani', 'ريال', 'ر'),
(128, 'YER', 'Rial Yemení', 'ريال', 'ر'),
(129, 'KHR', 'Riel', 'Riel', 'r'),
(130, 'MYR', 'Ringgit de Malasia', 'ريڠڬيت', 'R'),
(131, 'SAR', 'Riyal Saudí', 'ريال', 'ر'),
(132, 'BYR', 'Rublo Bieloruso', 'Рубель', 'B'),
(133, 'RUB', 'Rublo Ruso', 'Рубль', 'р'),
(134, 'MVR', 'Rufiyaa', 'Rufiyaa', 'R'),
(135, 'IDR', 'Rupia', 'Rupia', 'R'),
(136, 'SCR', 'Rupia de Seychelles', 'Rupia', 'S'),
(137, 'INR', 'Rupia Indú', 'Rupia', 'R'),
(138, 'MUR', 'Rupia Mauritius', 'Rupia', 'R'),
(139, 'NPR', 'Rupia Nepalesa', 'Rupia', 'N'),
(140, 'PKR', 'Rupia Pakistaní', 'Rupia', 'R'),
(141, 'LKR', 'Rupia Sri Lanka', 'Rupia', 'R'),
(142, 'ILS', 'Sheqel Israeli', 'שקל', '₪'),
(143, 'TZS', 'Shilling de Tanzania', 'Shilingi', '/'),
(144, 'UGX', 'Shilling de Uganda', 'Shilling', 'U'),
(145, 'KES', 'Shilling Kenya', 'Shilling', 'K'),
(146, 'SOS', 'Shilling Somalí', 'Shilin', 'S'),
(147, 'KGS', 'Som', 'сом', 'с'),
(148, 'TJS', 'Somoni', 'Сомонӣ', 'С'),
(149, 'UZS', 'Sum Uzbekistán', 'Сўм', 'с'),
(150, 'BDT', 'Taka', 'টাকা', '৳'),
(151, 'WST', 'Tala', 'Tālā', 'W'),
(152, 'KZT', 'Tenge', 'Теңгесі', '〒'),
(153, 'MNT', 'Tugrik', 'Төгрөг', '₮'),
(154, 'AED', 'UAE Dirham', 'درهم', 'د'),
(155, 'VUV', 'Vatu', 'Vatu', 'V'),
(156, 'KRW', 'Won', '원', '₩'),
(157, 'KPW', 'Won Nor-Coreano', '원', '₩'),
(158, 'JPY', 'Yen Japonés', '日本円', '¥'),
(159, 'CNY', 'Yuan Chino', '人民币', '¥'),
(160, 'PLN', 'Zloty Polaco', 'Złoty', 'z');

--
-- Volcado de datos para la tabla customers
--

INSERT INTO `customers` (`cust_id`, `cust_dni`, `cust_ruc`, `cust_last_name`, `cust_maiden_name`, `cust_first_name`, `cust_other_name`, `cust_cellphone`, `cust_sexo`, `cust_company_name`, `cust_contact_title`, `cust_contact_name`, `cust_contact_phone`, `cust_address`, `cust_city`, `cust_region`, `cust_country`, `cust_phone`, `cust_state`, `created_at`, `updated_at`) VALUES
(1, '-', '-', '-', ' ', 'Clientes', 'varios', '-', 'M', '-', NULL, '-', '-', '-', ' ', ' ', ' ', '-', '1', '2021-03-22 05:44:33', '2021-03-22 10:44:33'),
(2, '74935445', '10749354459', 'Livias', 'Cerquin', 'Jhon', 'Antony', '973835639', 'M', 'Big Zero Company', 'Ing.', 'Livias, Jhon', '973835639', 'Mz. A26 Lt. 41 Manuel Arevalo Etapa III, La esperanza', 'Trujillo', 'La Libertad', 'Perú', '044464760', '1', '2021-03-22 03:19:19', '2021-03-22 03:19:19');

--
-- Volcado de datos para la tabla employees
--

INSERT INTO `employees` (`empl_id`, `empl_dni`, `empl_ruc`, `empl_last_name`, `empl_maiden_name`, `empl_first_name`, `empl_other_name`, `empl_sexo`, `empl_title`, `empl_birthday`, `empl_hireday`, `empl_address`, `empl_city`, `empl_region`, `empl_country`, `empl_homephone`, `empl_cellphone`, `empl_state`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '18146819', '10181468195', 'Cerquin', 'Villanueva', 'Maria', 'Luisa', 'F', 'Jefe', '1974-05-11', '2021-04-12', 'Mz. A26 LT. 41 Etapa III Manuel Arevalo - La Esperanza', 'Trujillo', 'La Libertad', 'Peru', '044464760', '990638706', '1', 2, '2021-04-13 01:50:53', '2021-04-13 01:50:53');

--
-- Volcado de datos para la tabla permissions
--

INSERT INTO `permissions` (`perm_id`, `perm_description`, `created_at`, `updated_at`) VALUES
(1, 'Access Entity List', '2021-04-12 15:46:38', '2021-04-12 15:46:38'),
(2, 'Create Entity', '2021-04-12 15:46:38', '2021-04-12 15:46:38'),
(3, 'Edit Entity', '2021-04-12 15:46:38', '2021-04-12 15:46:38'),
(4, 'Delete Entity', '2021-04-12 15:46:38', '2021-04-12 15:46:38');

--
-- Volcado de datos para la tabla products
--

INSERT INTO `products` (`prod_id`, `prod_name`, `prod_description`, `prod_image`, `prod_purchase_price`, `prod_sale_price`, `prod_stock`, `prod_state`, `cate_id`, `supp_id`, `created_at`, `updated_at`) VALUES
(1, 'Polo Vizcosa Dama', 'Polo vizcosa nacional c/V para dama Colores: Crema, Blanco, Negro, Azul marino, Plomo, Acero, Verde petróleo Talla: Standar', '1617480617.jpg', 12, 30, 10, '1', 1, 1, '2021-04-13 05:48:01', '2021-04-13 06:38:37');

--
-- Volcado de datos para la tabla product_colors
--

INSERT INTO `product_colors` (`prod_id`, `color_id`, `pcol_name`, `pcol_rgb`, `pcol_stock`, `created_at`, `updated_at`) VALUES
(1, 1, 'Negro', 'rgb(0, 0, 0)', 2, '2021-04-13 05:51:14', '2021-04-13 06:55:32'),
(1, 2, 'Blanco', 'rgb(255, 255, 255)', 2, '2021-04-13 05:51:14', '2021-04-13 06:47:03'),
(1, 8, 'Plomo', 'rgb(128, 128, 128)', 2, '2021-04-13 05:51:14', '2021-04-13 06:47:03'),
(1, 17, 'Acero', 'rgb(70, 130, 180)', 2, '2021-04-13 05:51:14', '2021-04-13 06:47:03'),
(1, 20, 'Crema', 'rgb(248, 222, 129)', 2, '2021-04-13 05:51:14', '2021-04-13 06:47:03'),
(1, 26, 'Verde Petroleo', 'rgb(85, 107, 47)', 2, '2021-04-13 05:51:14', '2021-04-13 06:47:03'),
(1, 28, 'Azul Marino', 'rgb(0, 0, 128)', 2, '2021-04-13 05:51:14', '2021-04-13 06:47:03');

--
-- Volcado de datos para la tabla product_sizes
--

INSERT INTO `product_sizes` (`prod_id`, `size_id`, `psiz_name`, `psiz_stock`, `created_at`, `updated_at`) VALUES
(1, 16, 'STANDARD', 10, '2021-04-13 05:51:14', '2021-04-13 06:38:37');

--
-- Volcado de datos para la tabla roles
--

INSERT INTO `roles` (`role_id`, `role_name`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', '2021-03-16 05:55:02', '2021-03-16 10:55:02'),
(2, 'Editor', '2021-03-16 05:55:11', '2021-03-16 10:55:11'),
(3, 'Boss', '2021-03-15 10:47:11', NULL),
(4, 'Employee', '2021-03-15 10:47:11', NULL),
(5, 'Supplier', '2021-03-15 10:47:11', NULL),
(6, 'Shipper', '2021-03-17 02:52:58', '2021-03-17 07:52:58'),
(7, 'Root', '2021-03-16 08:46:23', '2021-03-16 08:46:23');

--
-- Volcado de datos para la tabla role_permission
--

INSERT INTO `role_permission` (`perm_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2021-04-12 15:46:38', '2021-04-12 15:46:38'),
(2, 1, '2021-04-12 15:46:38', '2021-04-12 15:46:38'),
(3, 1, '2021-04-12 15:46:38', '2021-04-12 15:46:38'),
(4, 1, '2021-04-12 15:46:38', '2021-04-12 15:46:38');

--
-- Volcado de datos para la tabla shippers
--

INSERT INTO `shippers` (`ship_id`, `ship_companyname`, `ship_phone`, `created_at`, `updated_at`) VALUES
(1, 'Trujillo Express', '044232714', '2021-03-22 02:47:32', '2021-03-22 07:47:32');

--
-- Volcado de datos para la tabla sizes
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

--
-- Volcado de datos para la tabla suppliers
--

INSERT INTO `suppliers` (`supp_id`, `supp_companyname`, `supp_contact_name`, `supp_contact_title`, `supp_dni`, `supp_ruc`, `supp_address`, `supp_city`, `supp_region`, `supp_country`, `supp_phone`, `supp_homepage`, `supp_state`, `created_at`, `updated_at`) VALUES
(1, 'Big Zero', 'Jhon Livias', 'Sr.', '74935445', '10749354459', 'Mz. A26 Lt.41 Etapa III, La Esperanza', 'Trujillo', 'La Libertad', 'Perú', '973835639', 'https://fleming.zerogroups.org/', '1', '2021-03-22 05:29:41', '2021-03-22 05:29:41');

--
-- Volcado de datos para la tabla users
--

INSERT INTO `users` (`user_id`, `email`, `user_name`, `password`, `user_image_route`, `user_image_name`, `role_id`, `user_state`, `user_email_verified_at`, `created_at`, `updated_at`) VALUES
(1, 'zero@mayorista.com', 'zero', '$2y$10$ceFoUSehQRjDq1jFiFtYP.NiZ7P3Ni3iS5eCYe0yalAVDKmJsKbRO', '/img/fotoperfil/', 'Administrator.jpg', 1, '1', NULL, '2021-04-13 01:48:07', '2021-04-13 06:29:00'),
(2, 'mariacerquin2@mayorista.com', 'mariacerquin', '$2y$10$UuO7/L9udoVFrGq7mKm0yOU3Td7JGhxkjeTGUYWZYr390aepBTSWO', '/img/fotoperfil/', 'Boss.jpg', 3, '1', NULL, '2021-04-13 01:50:52', '2021-04-13 01:50:52');