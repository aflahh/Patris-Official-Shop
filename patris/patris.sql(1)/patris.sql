-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2021 at 01:30 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `patris`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(25) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(8) NOT NULL,
  `admin_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `username`, `password`, `admin_address`) VALUES
(1, 'Mufinella Budik', 'mbudik4', '12epIniC', '5827 David Center'),
(2, 'Wynn Hadcock', 'whadcock6', '9rNA93t1', '1955 Ridge Oak Way'),
(3, 'Sapphire Gilbanks', 'sgilbanks7', '3kocZFGz', '304 Shopko Court');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'Sepatu'),
(2, 'Sandal'),
(3, 'Wedges'),
(4, 'Sepatusandal');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `chat_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `chat_date` date NOT NULL,
  `chat_desc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(25) NOT NULL,
  `customer_address` varchar(255) NOT NULL,
  `customer_sex` varchar(10) NOT NULL,
  `customer_email` varchar(25) NOT NULL,
  `customer_username` varchar(15) NOT NULL,
  `customer_password` varchar(8) NOT NULL,
  `customer_birth` date NOT NULL,
  `customer_telp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `customer_address`, `customer_sex`, `customer_email`, `customer_username`, `customer_password`, `customer_birth`, `customer_telp`) VALUES
(1, 'Viviene Brideaux', '50585 Delaware Road', 'Male', 'vbrideaux1x@ebay.co.uk', 'vbrideaux1x', 'lCxVEkPv', '2001-12-07', '+63 478 968 111'),
(2, 'Isaiah Rolance', '980 Walton Avenue', 'Female', 'irolance1y@salon.com', 'irolance1y', 'qKA7k3o9', '2001-12-08', '+351 539 682 45'),
(3, 'Gherardo Pechet', '4 Tony Place', 'Male', 'gpechet1z@1688.com', 'gpechet1z', 'MUl1vbij', '2001-12-04', '+62 236 363 379'),
(4, 'Brig Byrom', '2 Dawn Parkway', 'Female', 'bbyrom20@ning.com', 'bbyrom20', 'wApmzfjj', '2001-12-02', '+86 298 436 161'),
(5, 'Thekla Blatchford', '930 Brentwood Road', 'Female', 'tblatchford21@virginia.ed', 'tblatchf', 'yVEYgu10', '2001-12-04', '+55 916 303 348'),
(6, 'Jamie Blind', '32 Graceland Street', 'Male', 'jblind22@nymag.com', 'jblind22', 'JGaFtWWY', '2001-12-08', '+381 338 159 82'),
(7, 'Ceciley Kenward', '87324 Gulseth Alley', 'Male', 'ckenward23@howstuffworks.', 'ckenward', 'TPA4q8', '2001-12-11', '+351 789 739 51'),
(8, 'Yorgos Dugdale', '8406 Glacier Hill Avenue', 'Male', 'ydugdale24@ucoz.com', 'ydugdal', 'eaVmfzPs', '2001-12-04', '+62 400 946 602'),
(9, 'Pacorro Swatland', '745 Lighthouse Bay Plaza', 'Male', 'pswatland25@mail.ru', 'pswatla', 'i3Me42Pz', '2001-12-09', '+48 633 991 549');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `order_status` varchar(20) NOT NULL,
  `order_address` varchar(255) NOT NULL,
  `order_receiver` varchar(25) NOT NULL,
  `order_cost` varchar(10) NOT NULL,
  `order_sumproduct` varchar(10) NOT NULL,
  `order_city` varchar(25) NOT NULL,
  `order_province` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`order_id`, `customer_id`, `payment_id`, `order_date`, `order_status`, `order_address`, `order_receiver`, `order_cost`, `order_sumproduct`, `order_city`, `order_province`) VALUES
(1, 5, 1, '2021-10-01', 'Shipped', 'J. Mawar Melati No. 40', 'Lala', '99000', '1', 'Malang', 'Jawa Timur'),
(2, 2, 2, '2021-10-12', 'Shipped', '01 Riverside Hill', 'Caty Aers', '199000', '1', 'Solo', 'Jawa Tengah'),
(3, 6, 3, '2021-11-15', 'On Shipping', '2163 Lien Avenue', 'Trixy Gumley', '397000', '3', 'Banten', 'Jawa Barat'),
(4, 1, 4, '2021-11-15', 'On Shipping', '2163 Lien Avenue', 'Trixy Gumley', '297000', '3', 'Blitar', 'Jawa Timur');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`order_id`, `product_id`, `quantity`) VALUES
(1, 3, 0),
(2, 7, 0),
(3, 1, 0),
(3, 5, 0),
(3, 9, 0),
(4, 16, 0),
(4, 20, 0),
(4, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `payment_methode` varchar(15) NOT NULL,
  `payment_status` varchar(15) NOT NULL,
  `payment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `order_id`, `payment_methode`, `payment_status`, `payment_date`) VALUES
(1, 1, 'COD', 'Lunas', '2021-10-15'),
(2, 2, 'Bank Tranfer', 'Lunas', '2021-10-11'),
(3, 3, 'COD', 'Belum dibayar', '0000-00-00'),
(4, 4, 'Bank Tranfer', 'Lunas', '2021-11-15');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `review_rating` int(2) NOT NULL,
  `review_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`review_id`, `product_id`, `order_id`, `review_rating`, `review_desc`) VALUES
(1, 3, 1, 5, 'Sangat puas'),
(2, 7, 2, 4, 'Bagus sekali'),
(3, 16, 4, 4, 'Bagus sekali, cantik dipakai'),
(4, 20, 4, 5, 'Bagus sekali'),
(5, 1, 3, 5, 'Mantap, barang realpict'),
(6, 5, 3, 4, 'Barang sesuai harga');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`chat_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`,`customer_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `payment_id` (`payment_id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `order_id` (`order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`),
  ADD CONSTRAINT `order_ibfk_2` FOREIGN KEY (`payment_id`) REFERENCES `payment` (`payment_id`);

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order` (`order_id`),
  ADD CONSTRAINT `order_detail_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order` (`order_id`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`),
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `order` (`order_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
