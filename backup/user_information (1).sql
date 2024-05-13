-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2024 at 07:09 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_information`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrators_tb`
--

CREATE TABLE `administrators_tb` (
  `Customer_ID` int(100) NOT NULL,
  `Full_Name` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Password` varchar(260) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cart_tb`
--

CREATE TABLE `cart_tb` (
  `Customer_ID` int(20) DEFAULT NULL,
  `Cart_ID` int(20) NOT NULL,
  `Product_Name` varchar(50) DEFAULT NULL,
  `Price` int(20) DEFAULT NULL,
  `Product_Image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart_tb`
--

INSERT INTO `cart_tb` (`Customer_ID`, `Cart_ID`, `Product_Name`, `Price`, `Product_Image`) VALUES
(1, 6, 'Jeans', 899, '663fb831b9701_jeans 101.jpg '),
(1, 7, 'Long Sleeves', 799, '663fb5d423ca9_stripes21.jpg '),
(1, 8, 'Shoes', 2499, '663fb7bf9784b_3c359023ae590475f4a74fae7ed6c0d0.jpg '),
(1, 9, 'Polo Shirt', 949, '663fc01787667_blackk1.jpg '),
(1, 10, 'Long Sleeves', 799, '663fb5d423ca9_stripes21.jpg ');

-- --------------------------------------------------------

--
-- Table structure for table `customer_tb`
--

CREATE TABLE `customer_tb` (
  `Customer_ID` int(100) NOT NULL,
  `First_Name` varchar(20) NOT NULL,
  `Last_Name` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Registration_Date` date NOT NULL DEFAULT current_timestamp(),
  `Password` varchar(260) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_tb`
--

INSERT INTO `customer_tb` (`Customer_ID`, `First_Name`, `Last_Name`, `Email`, `Registration_Date`, `Password`) VALUES
(1, 'The', 'Goat', 'TheGoat123@gmail.com', '2024-05-13', '1234567890');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `Product_ID` int(20) NOT NULL,
  `Product_Name` varchar(50) DEFAULT NULL,
  `Product_Description` varchar(10000) DEFAULT NULL,
  `Category` varchar(20) DEFAULT NULL,
  `Stock` int(10) DEFAULT NULL,
  `Regular_Price` int(10) DEFAULT NULL,
  `Product_Image` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Product_ID`, `Product_Name`, `Product_Description`, `Category`, `Stock`, `Regular_Price`, `Product_Image`) VALUES
(37, 'Long Sleeves', 'Our long sleeves are a versatile and comfortable option for everyday wear. Made from soft and breathable materials, our long sleeves provide coverage for the arms while allowing freedom of movement.', 'Jacket', 102, 799, '663fb5d423ca9_stripes21.jpg '),
(38, 'Shoes', 'Our shoes are crafted with a perfect blend of style, comfort, and durability, making them the ideal choice for any occasion. From casual outings to formal events, our shoes are designed to complement any outfit and provide maximum comfort.', 'Shoes', 21, 2499, '663fb7bf9784b_3c359023ae590475f4a74fae7ed6c0d0.jpg '),
(39, 'Jeans', 'Our jeans are the ultimate combination of style and comfort. Made from high-quality denim that is soft and durable, our jeans are designed to keep you looking and feeling great all day long.', 'Pants', 56, 899, '663fb831b9701_jeans 101.jpg '),
(40, 'Colorful Vest', 'Our vests are the perfect way to add a touch of sophistication to any outfit. Made from high-quality materials such as wool, cotton, and cashmere, our vests are both stylish and comfortable.', 'Shirt', 43, 599, '663fb8b435663_V-Neck T-Shirt 31.jpg '),
(41, 'Hawaiian Shirt', 'Our Hawaiian shirts are a perfect blend of style and comfort. Made from high-quality materials, they are lightweight and breathable, making them ideal for any occasion.', 'Shirt', 73, 1599, '663fb95c5661c_design311.jpg '),
(42, 'Cap', 'Our caps are the perfect blend of style and functionality, designed to keep you looking and feeling great.', 'Hats', 180, 449, '663fba7ec1086_cap 51.jpg '),
(43, 'Bucket Hat', 'Featuring a classic bucket shape and a range of colors and patterns to choose from, our hats are the perfect accessory for any outfit.', 'Hats', 164, 749, '663fbb5b59076_Bucket Hat 71.jpg '),
(44, 'Skirt', 'Our skirts are the perfect combination of style and comfort, designed to flatter any body type and provide a comfortable fit all day long. ', 'Dress', 79, 299, '663fbbc0d11f9_4f4daad9ebdbf0f541d470de4655c6c7.jpg '),
(45, 'Men Short', 'Our shorts are designed to keep you cool and comfortable while looking stylish and on-trend. Crafted from high-quality materials such as cotton, polyester, and spandex blends, our shorts offer a perfect balance of comfort and durability.\r\n', 'Shorts', 65, 399, '663fbeaf89f43_Short 1.jpg '),
(46, 'Women Short', 'Our product is a pair of women shorts that are comfortable, stylish, and versatile. They are made of high-quality cotton fabric that is soft, breathable, and durable. They have an elastic waistband that adjusts to your body shape and a drawstring that allows you to tighten or loosen the fit. ', 'Shorts', 84, 399, '663fbefa86309_women short 91.jpg '),
(47, 'Jogging Pants', 'Our jogging pants are the ultimate combination of style and comfort. Made from soft and breathable materials, they are designed to keep you feeling comfortable and looking great all day long. Whether you are running errands or hitting the gym, our jogging pants are the perfect choice. With their relaxed fit and stylish design, they are a versatile addition to any wardrobe. ', 'Pants', 132, 999, '663fbf59bfaf6_Jogging Pants 2.jpg '),
(48, 'Women T-Shirt', 'Our women t-shirts are the perfect blend of style and comfort. Made from soft and breathable materials, they are designed to keep you comfortable all day long. With their flattering cut and feminine style, our t-shirts are a versatile addition to any wardrobe. Whether you are dressing up for a night out or keeping it casual, our t-shirts are the perfect choice. ', 'Shirt', 101, 1099, '663fbfb16c8a2_design11111.jpg '),
(49, 'Slacks', 'Our slacks are the perfect combination of comfort and style, made from high-quality materials such as cotton, polyester, and spandex. With a range of colors and styles to choose from, our collection of slacks is perfect for any occasion, from formal events to casual outings. Designed to fit well and look great, our slacks are a must-have in any wardrobe. ', 'Pants', 62, 1999, '663fc0798229f_slacks 71.jpg'),
(50, 'Polo Shirt', 'Our polo shirts are a perfect blend of comfort and style, designed to keep you looking sharp and feeling comfortable. Made from high-quality materials such as cotton and polyester, our polo shirts are soft, breathable, and durable. With a range of colors and styles to choose from, our collection of polo shirts is perfect for any occasion, from casual outings to formal events.', 'Shirt', 96, 949, '663fc01787667_blackk1.jpg '),
(51, 'Dress', 'Our dresses are the perfect combination of style and comfort. Made from high-quality fabrics that are soft and breathable, our dresses are designed to keep you looking and feeling great all day long. With a range of styles and colors to choose from, our collection of dresses is perfect for any occasion, from casual outings to formal events. ', 'Dress', 58, 1499, '663fc03996ede_8f7668093e2f2768dcbe44e39d8da056.jpg ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart_tb`
--
ALTER TABLE `cart_tb`
  ADD PRIMARY KEY (`Cart_ID`),
  ADD KEY `Customer_ID` (`Customer_ID`);

--
-- Indexes for table `customer_tb`
--
ALTER TABLE `customer_tb`
  ADD PRIMARY KEY (`Customer_ID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Product_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart_tb`
--
ALTER TABLE `cart_tb`
  MODIFY `Cart_ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `customer_tb`
--
ALTER TABLE `customer_tb`
  MODIFY `Customer_ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `Product_ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart_tb`
--
ALTER TABLE `cart_tb`
  ADD CONSTRAINT `cart_tb_ibfk_1` FOREIGN KEY (`Customer_ID`) REFERENCES `customer_tb` (`Customer_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
