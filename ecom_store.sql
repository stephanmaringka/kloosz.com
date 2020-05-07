-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2020 at 11:44 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(10) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL,
  `admin_image` text NOT NULL,
  `admin_country` text NOT NULL,
  `admin_about` text NOT NULL,
  `admin_contact` varchar(255) NOT NULL,
  `admin_job` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`, `admin_image`, `admin_country`, `admin_about`, `admin_contact`, `admin_job`) VALUES
(1, 'Admin_Melisa', 'melisa@gmail.com', '00000000', 'meli5.jpg', 'Indonesia', ' This application is created by kloosz, if you willing to contact me, please click this link. <br/>\r\n                        <a href=\"#\"> Kloosz </a>\r\n                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat illo blanditiis explicabo laboriosam dolor repudiandae aut necessitatibus neque, earum eum dicta aliquid exercitationem culpa, in sit debitis porro rem minus.', '0811-1234-5678', 'Admin'),
(2, 'Melmel', 'melmel@gmail.com', '00000000', 'meli6.jpg', 'indonesia', 'paling cantik', '0812312938', 'Admin'),
(3, 'Melinda', 'melinda@kloosz.com', '00000000', 'meli6.jpg', 'Indonesia', 'asd', '12345678', 'Admin 2');

-- --------------------------------------------------------

--
-- Table structure for table `boxes_section`
--

CREATE TABLE `boxes_section` (
  `box_id` int(10) NOT NULL,
  `box_title` text NOT NULL,
  `box_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `boxes_section`
--

INSERT INTO `boxes_section` (`box_id`, `box_title`, `box_desc`) VALUES
(4, 'I LOVE YOU', 'Melmelmemlemasd kasjdkasjdkas jdas jdaskd jask djask djasod jaso dj'),
(5, 'WO AI NI', 'ASD JASD KASJD KAS JDASKL DASKD JASLK DJASKLD JASKLD JKL'),
(6, 'SARANGHANDA', 'ASKDJ ASKJD ASK JASKD JASK DJASKD JASKO');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL,
  `p_price` text NOT NULL,
  `size` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`p_id`, `ip_add`, `qty`, `p_price`, `size`) VALUES
(46, '::1', 2, '77000', 'Large');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(10) NOT NULL,
  `cat_title` text NOT NULL,
  `cat_top` text NOT NULL,
  `cat_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `cat_top`, `cat_image`) VALUES
(1, 'Pria', 'yes', 'Atasan Pria.jpg'),
(2, 'Wanita', 'yes', 'Outerwear Wanita.jpg'),
(3, 'Anak-Anak', 'no', 'Setelan Wanita.jpg'),
(4, ' Lain-lain ', 'no', 'Aksesoris Sepatu Wanita.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `coupon_id` int(100) NOT NULL,
  `product_id` int(100) NOT NULL,
  `coupon_title` varchar(255) NOT NULL,
  `coupon_price` varchar(255) NOT NULL,
  `coupon_code` varchar(255) NOT NULL,
  `coupon_limit` int(100) NOT NULL,
  `coupon_used` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`coupon_id`, `product_id`, `coupon_title`, `coupon_price`, `coupon_code`, `coupon_limit`, `coupon_used`) VALUES
(1, 46, 'Coupon Test 67', '20000', '12345678', 4, 3),
(2, 45, 'TesCe', '120000', '12345', 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(10) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_pass` varchar(255) NOT NULL,
  `customer_country` text NOT NULL,
  `customer_city` text NOT NULL,
  `customer_contact` varchar(255) NOT NULL,
  `customer_address` text NOT NULL,
  `customer_image` text NOT NULL,
  `customer_ip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_city`, `customer_contact`, `customer_address`, `customer_image`, `customer_ip`) VALUES
(7, 'Testm', 'kosongbarang@gmail.com', '0000000000', 'asd', 'asd', 'asd', 'asd', 'melissatanasal1.png', '::1'),
(8, 'adabarang', 'adabarang@gmail.com', '00000000', 'indonesia', 'A', 'A', 'A', 'meli8.jpg', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `customer_orders`
--

CREATE TABLE `customer_orders` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `due_amount` int(100) NOT NULL,
  `invoice_no` int(100) NOT NULL,
  `qty` int(10) NOT NULL,
  `size` text NOT NULL,
  `order_date` date NOT NULL,
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_orders`
--

INSERT INTO `customer_orders` (`order_id`, `customer_id`, `due_amount`, `invoice_no`, `qty`, `size`, `order_date`, `order_status`) VALUES
(56, 8, 490000, 488117236, 2, 'Small', '2020-01-27', 'pending'),
(57, 8, 78000, 488117236, 1, 'Small', '2020-01-27', 'pending'),
(58, 8, 79000, 362915364, 1, 'Medium', '2020-01-27', 'pending'),
(59, 8, 320000, 362915364, 1, 'Small', '2020-01-27', 'pending'),
(60, 8, 78000, 78967124, 1, 'Small', '2020-01-27', 'pending'),
(61, 8, 96000, 78967124, 1, 'Small', '2020-01-27', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `manufacturers`
--

CREATE TABLE `manufacturers` (
  `manufacturer_id` int(10) NOT NULL,
  `manufacturer_title` text NOT NULL,
  `manufacturer_top` text NOT NULL,
  `manufacturer_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manufacturers`
--

INSERT INTO `manufacturers` (`manufacturer_id`, `manufacturer_title`, `manufacturer_top`, `manufacturer_image`) VALUES
(2, 'Adidas', 'yes', 'adidas.png'),
(3, 'Charles & Keith', 'no', 'charleskeith.png'),
(4, 'Cotton On', 'no', 'cottonon.jpg'),
(8, 'Pull & Bear', 'yes', 'Pull-Bear.jpg'),
(9, 'Stradivarius', 'yes', 'stradivarius.png'),
(11, 'Nike', 'yes', 'nike.png');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(10) NOT NULL,
  `invoice_no` int(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `payment_mode` text COLLATE big5_chinese_nopad_ci NOT NULL,
  `ref_no` int(10) NOT NULL,
  `code` int(10) NOT NULL,
  `payment_date` text COLLATE big5_chinese_nopad_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=big5 COLLATE=big5_chinese_nopad_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pending_orders`
--

CREATE TABLE `pending_orders` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `invoice_no` int(10) NOT NULL,
  `product_id` text NOT NULL,
  `qty` int(10) NOT NULL,
  `size` text NOT NULL,
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pending_orders`
--

INSERT INTO `pending_orders` (`order_id`, `customer_id`, `invoice_no`, `product_id`, `qty`, `size`, `order_status`) VALUES
(53, 8, 488117236, '47', 2, 'Small', 'pending'),
(54, 8, 488117236, '53', 1, 'Small', 'pending'),
(55, 8, 362915364, '40', 1, 'Medium', 'pending'),
(56, 8, 362915364, '49', 1, 'Small', 'pending'),
(57, 8, 78967124, '53', 1, 'Small', 'pending'),
(58, 8, 78967124, '54', 1, 'Small', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `p_cat_id` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `manufacturer_id` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `product_title` text NOT NULL,
  `product_url` text NOT NULL,
  `product_img1` text NOT NULL,
  `product_img2` text NOT NULL,
  `product_img3` text NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_keywords` text NOT NULL,
  `product_desc` text NOT NULL,
  `product_label` text NOT NULL,
  `product_sale` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `p_cat_id`, `cat_id`, `manufacturer_id`, `date`, `product_title`, `product_url`, `product_img1`, `product_img2`, `product_img3`, `product_price`, `product_keywords`, `product_desc`, `product_label`, `product_sale`) VALUES
(34, 15, 2, 8, '2020-01-28 09:16:52', 'tes=tes', 'tes=tes', 'atasan1a.jpg', 'atasan1b.jpg', 'atasan1c.jpg', 22000, 'Atasan', '\r\n                              \r\n                              asdas asd asd asd as                              \r\n                                                        \r\n                          ', '', 19000),
(35, 15, 1, 11, '2020-01-28 06:26:07', 'Test 56', 'product-1', 'Atasan2a.jpg', 'atasan2b.jpg', 'atasan2c.jpg', 90000, 'Atasan', 'asdas asd asd asd asd ', 'new', 0),
(36, 17, 2, 2, '2020-01-28 06:26:13', 'Test 57', 'product-2', 'batik1a.jpg', 'batik1b.jpg', 'batik1c.jpg', 120000, 'Batik', 'asd asd as dasd asd ', 'new', 0),
(37, 19, 2, 4, '2020-01-28 06:26:16', 'Test 58', 'product-3', 'bawahan1a.jpg', 'bawahan1b.jpg', '', 199000, 'Bawahan', 'asdasd asd asd asd ', 'new', 0),
(38, 0, 0, 3, '2020-01-28 06:26:19', 'Test 59', 'product-4', 'dress1a.jpg', 'dress1b.jpg', 'dress1c.jpg', 87000, 'Dress', 'asdasd asd asd asd ', 'new', 0),
(39, 23, 2, 3, '2020-01-28 06:26:22', 'Test 60', 'product-5', 'dress2a.jpg', 'dress2b.jpg', 'dress2c.jpg', 87000, 'Dress', 'asdasd asd asd asd as', 'new', 0),
(40, 22, 1, 2, '2020-01-28 06:27:06', 'Test 61', 'product-16', 'jaket1.jpg', 'jaket2.jpg', 'jaket3.jpg', 79000, 'Jaket', '                              \r\n                              asdas asd asdasd                               \r\n                          ', 'sale', 69000),
(41, 22, 2, 9, '2020-01-28 06:26:54', 'Test 62', 'product-12', 'jaket4a.jpg', 'jaket4b.jpg', 'jaket4c.jpg', 139000, 'Jaket', 'ASd asd asd asd asd a', 'sale', 121000),
(42, 22, 2, 11, '2020-01-28 06:26:25', 'Test 63', 'product-6', 'jaket5a.jpg', 'jaket5b.jpg', 'jaket5c.jpg', 56000, 'Jaket', 'asdas asd asd ', 'new', 0),
(43, 20, 1, 11, '2020-01-28 06:26:57', 'Test 64', 'product-13', 'jas1a.jpg', 'jas1b.jpg', 'jas1c.jpg', 580000, 'Jas', 'asdas asd asd asd ', 'sale', 437000),
(44, 20, 1, 3, '2020-01-28 06:26:59', 'Test 65', 'product-14', 'jas2a.jpg', 'jas2b.jpg', 'jas2c.jpg', 620000, 'Jas', 'asdas asd as das', 'sale', 470000),
(45, 25, 1, 3, '2020-01-28 06:26:42', 'Test 66', 'product-7', 'others1a.png', 'others1b.png', 'others1c.png', 89000, 'Tas', 'asdasdasdas', 'new', 0),
(46, 18, 2, 2, '2020-01-28 06:26:37', 'Test 67', 'product-8', 'piyama2b.jpg', 'piyama2a.jpg', 'piyama2c.jpg', 77000, 'Piyama', 'asdasd asd asd as', 'new', 0),
(47, 24, 1, 4, '2020-01-28 06:26:45', 'Test 68', 'product-9', 'sepatu1a.jpg', 'sepatu1b.jpg', '', 245000, 'Sepatu', 'asdas asd asd asd ', 'new', 0),
(48, 22, 1, 2, '2020-01-28 06:27:02', 'Test 69', 'product-15', 'Outerwear2a.jpg', 'Outerwear2b.jpg', 'Outerwear3c.jpg', 90000, 'Jaket', 'asdasdasd', 'sale', 78000),
(49, 25, 1, 3, '2020-01-28 06:26:48', 'Test 70', 'product-10', 'tas2a.jpg', 'tas2b.jpg', 'tas2c.jpg', 320000, 'Tas', 'asdasdasdas', 'new', 0),
(53, 19, 1, 9, '2020-01-28 06:27:08', 'Test 83', 'product-17', 'jas1c.jpg', 'jaket5c.jpg', 'batik1b.jpg', 78000, 'Bawahan', 'teas s a as as tas tas tas tas as tastast', 'new', 0),
(54, 22, 1, 9, '2020-01-28 06:27:19', 'Test 84', 'product-21', 'Outerwear3c.jpg', 'Outerwear2a.jpg', 'Outerwear2b.jpg', 96000, 'Outerwear', '                              \r\n                                                            \r\n                              asd adasdasd as                              \r\n                                                        \r\n                          ', 'sale', 80000),
(55, 17, 2, 2, '2020-01-28 06:50:56', 'Test 90', 'product-18', 'product_7.jpg', 'product_1.jpg', 'product_1c.jpg', 80000, 'Batik, Kaos, Atasan', '                              \r\n                              asdas asd asd as                              \r\n                          ', 'sale', 70000),
(56, 18, 2, 3, '2020-01-28 06:50:36', 'Test 91', 'product-19', 'Piyama1a.png', 'piyama2a.jpg', 'piyama2c.jpg', 80000, 'Piyama', '                              \r\n                                                            \r\n                              asdas asd as dasd sad                              \r\n                                                        \r\n                          ', 'new', 0),
(57, 23, 2, 8, '2020-01-28 06:50:25', 'Test 92', 'product-20', 'dress1a.jpg', 'dress1b.jpg', 'dress1c.jpg', 83000, 'Dress', '                              \r\n                                                            \r\n                              asdas asd as asd as das das das                              \r\n                                                        \r\n                          ', 'sale', 56000),
(58, 15, 1, 2, '2020-01-28 06:58:45', 'Test 99', 'new-adidas-man', 'Atasan2a.jpg', 'atasan2c.jpg', 'atasan2b.jpg', 88000, 'Atasan, Blouse', 'asd as asd as das dasd ', 'sale', 77000),
(59, 20, 1, 3, '2020-01-28 08:54:53', 'Test 98', 'jaket-cowok', 'jas2b.jpg', 'jas1b.jpg', 'jas1c.jpg', 800000, 'Atasan, Jaket, Jackets, Outerwear', '\r\n                              asd as das dsad asd as                              \r\n                          ', 'sale', 680000);

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `p_cat_id` int(10) NOT NULL,
  `p_cat_title` text NOT NULL,
  `p_cat_top` text NOT NULL,
  `p_cat_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`p_cat_id`, `p_cat_title`, `p_cat_top`, `p_cat_image`) VALUES
(15, 'Atasan', 'yes', 'Setelan Wanita.jpg'),
(17, 'Batik', 'yes', 'Batik Wanita.jpg'),
(18, 'Piyama', 'no', 'Baju Tidur Wanita.jpg'),
(19, 'Bawahan', 'yes', 'Bawahan Wanita.jpg'),
(20, 'Blazer & Jas', 'yes', 'Blazer & Jas Pria.jpg'),
(21, 'Couple', 'no', 'Fashion Couple.jpg'),
(22, 'Outerwear', 'yes', 'Outerwear Wanita.jpg'),
(23, 'Dress', 'no', 'Dress.jpg'),
(24, 'Sepatu', 'no', 'Sepatu Pria.jpg'),
(25, 'Tas Ransel  ', 'no', 'Tas Pria.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slide_id` int(11) NOT NULL,
  `slide_name` varchar(255) NOT NULL,
  `slide_image` text NOT NULL,
  `slide_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slide_id`, `slide_name`, `slide_image`, `slide_url`) VALUES
(1, 'Slide number 1', 'slide1.png', 'http://localhost/melisan/index.php'),
(2, 'Slide number 2', 'slide2.png', 'http://localhost/melisan/shop.php'),
(3, 'Slide number 3', 'slide3.png', 'http://localhost/melisan/contact.php'),
(5, 'slide number 4', 'slide4.png', 'http://localhost/melisan/customer_register.php');

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE `terms` (
  `term_id` int(10) NOT NULL,
  `term_title` varchar(100) NOT NULL,
  `term_link` varchar(100) NOT NULL,
  `term_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `terms`
--

INSERT INTO `terms` (`term_id`, `term_title`, `term_link`, `term_desc`) VALUES
(2, 'Refund Policy', 'refundLink', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae tempore quibusdam quod atque at, libero aut id debitis modi ipsum asperiores voluptatibus reiciendis est alias vitae hic dolore tenetur eius.'),
(3, 'Promo & Other Term Conditions', 'promoTermConditions', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae tempore quibusdam quod atque at, libero aut id debitis modi ipsum asperiores voluptatibus reiciendis est alias vitae hic dolore tenetur eius.'),
(8, 'Melmel', 'Adsdsasd', '<p>I just wanna love you till the end</p>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `boxes_section`
--
ALTER TABLE `boxes_section`
  ADD PRIMARY KEY (`box_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`coupon_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customer_orders`
--
ALTER TABLE `customer_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `manufacturers`
--
ALTER TABLE `manufacturers`
  ADD PRIMARY KEY (`manufacturer_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `pending_orders`
--
ALTER TABLE `pending_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`p_cat_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slide_id`);

--
-- Indexes for table `terms`
--
ALTER TABLE `terms`
  ADD PRIMARY KEY (`term_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `boxes_section`
--
ALTER TABLE `boxes_section`
  MODIFY `box_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `coupon_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `customer_orders`
--
ALTER TABLE `customer_orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `manufacturers`
--
ALTER TABLE `manufacturers`
  MODIFY `manufacturer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pending_orders`
--
ALTER TABLE `pending_orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `p_cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slide_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `terms`
--
ALTER TABLE `terms`
  MODIFY `term_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
