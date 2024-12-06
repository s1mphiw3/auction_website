-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2023 at 07:02 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `auction_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `auction_items`
--

CREATE TABLE `auction_items` (
  `Product_ID` varchar(8) NOT NULL,
  `Bid_ID` int(11) NOT NULL,
  `Bidder_ID` varchar(20) NOT NULL,
  `Bid_Price` float NOT NULL,
  `Bid_Time` varchar(50) NOT NULL,
  `Status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `auction_items`
--

INSERT INTO `auction_items` (`Product_ID`, `Bid_ID`, `Bidder_ID`, `Bid_Price`, `Bid_Time`, `Status`) VALUES
('Audi Kha', 7, '89765', 400000, '25/11/2022 11:52:52', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `Product_ID` varchar(8) NOT NULL,
  `Price` float NOT NULL,
  `User_ID` varchar(20) NOT NULL,
  `Product_Name` varchar(20) NOT NULL,
  `Product_Description` varchar(200) NOT NULL,
  `Category` varchar(50) NOT NULL,
  `Location` varchar(100) NOT NULL,
  `Status` varchar(20) NOT NULL,
  `Pictures` varchar(20) NOT NULL,
  `Phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Product_ID`, `Price`, `User_ID`, `Product_Name`, `Product_Description`, `Category`, `Location`, `Status`, `Pictures`, `Phone`) VALUES
('Audi Kha', 300000, '937635', 'Audi A8', 'Great condition, 2 year old \r\n\r\n						\r\n						', 'Automotive', 'Mbabane', 'Available', 'uploads/Audi Kha/', 78534212),
('audikab', 18000, '89765', 'audi', '4 years in use					\r\n						', 'Automotive', 'Manzini', 'Available', 'uploads/audikab/', 78534212),
('CougaTha', 1800, '653425432', 'Cougar Gaming Chair', 'adjustable gaming chair, that is easily dislocated for easier transportation purposes						\r\n						', 'Furniture', 'Manzini', 'Available', 'uploads/CougaTha/', 76354211),
('DoublTha', 400000, '653425432', 'Double Storey', 'Apartment for sale, with 2 bedroom, Open space living room, 2 bathrooms,	 kitchen and study room		\r\n						', 'Land and Houses', 'Tubungu', 'Available', 'uploads/DoublTha/', 76354211),
('Ford Man', 300000, '64735372', 'Ford Ranger(2021)', 'Ranger continues with three engines: 2.2 turbodiesel (160 hp and 385 Nm), 2.5 gasoline (166 hp and 225 Nm, suitable for CNG) and 3.2 turbodiesel (200 hp and 470 Nm). Five-speed manual gearbox (only wi', 'Automotive', 'Siteki', 'Available', 'uploads/Ford Man/', 78524313),
('ForklKha', 130000, '937635', 'Forklift', 'Motor-driven industrial truck used for lifting and moving goods on a pallet within the premises of a warehouse, storage facilities and distribution centre. I good conditions, has been in use for 7 mon', 'Heavy Machinery', 'Matsapha', 'Available', 'uploads/ForklKha/', 78534212),
('FresiMan', 18000, '64735372', 'Fresian', 'Good for milking. 2 year old cattle 						\r\n						', 'Livestock', 'Nsangwini', 'Available', 'uploads/FresiMan/', 78524313),
('HuaweTha', 5600, '653425432', 'Huawei P40', 'The dimension of the device is 148.9 x 71.1 x 8.5 mm and it weighs 175 grams. The smartphone is packed with 8 GB RAM with the internal storage is 128 GB . It has non-removable Li-Po 3800 mAh battery +', 'Electronics', 'Manzini', 'Available', 'uploads/HuaweTha/', 76354211),
('Land Man', 999999, '64735372', 'Land ', 'there 15 acres of Freehold Land\r\nWalking distance to Piggs Peak. Excellent mountain view from the location						\r\n						', 'Land and Houses', 'Piggs Peak', 'Available', 'uploads/Land Man/', 78524313),
('LandiMan', 80000, '64735372', 'Landini Tractor', 'Late model tractor, are in like new condition and only used on 450 acres. 						\r\n						', 'Heavy Machinery', 'Luyengo', 'Available', 'uploads/LandiMan/', 78524313),
('LenovKha', 15000, '937635', 'Lenovo Ideapad Slim', 'The IdeaPad 5i (15) Intel boasts an enticing list of included and optional features, making it a powerful combination of performance, connectivity, and entertainment with 11th Gen Intel® Core™ i5 proc', 'Electronics', 'Mbabane', 'Available', 'uploads/LenovKha/', 78534212),
('OfficTha', 2500, '653425432', 'Office study table', 'Wooden table having 3 study drawers  						\r\n						', 'Furniture', 'Nhlangano', 'Available', 'uploads/OfficTha/', 76354211),
('Ps4 SMan', 3500, '64735372', 'Ps4 Slim', 'Gaming just got even better with the Sony PlayStation 4 Slim Console. The lighter and slimmer PlayStation® 4 console has a 1TB hard drive to store all your games, apps, recorded footage, and more. 3 M', 'Electronics', 'Matsapha', 'Available', 'uploads/Ps4 SMan/', 78524313),
('ScissTha', 180000, '653425432', 'Scissor Lift', 'provide temporary access for people and equipment to elevated and inaccessible areas. The device achieves vertical movement through the use of linked folding supports arranged in a crisscross or sciss', 'Heavy Machinery', 'Matsapha', 'Available', 'uploads/ScissTha/', 76354211);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_num` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone_num` int(11) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `password` varchar(8) NOT NULL,
  `security_q` varchar(100) NOT NULL,
  `response` varchar(100) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `user_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_num`, `fname`, `lname`, `email`, `phone_num`, `user_id`, `gender`, `password`, `security_q`, `response`, `picture`, `user_type`) VALUES
(89765, 'Ncamiso', 'Mkhabel', 'ncakhabza@gmail.com', 78534212, 'kabza', 'Male', '1234', 'In what city were you born?', 'Mbabane', 'uploads/5.jpg', 'Normal'),
(937635, 'Ncamiso ', 'Mkhabel', 'ncakhabza@gmail.com', 78534212, 'Khabza', 'Male', '1234', 'What is the name of your first school?', 'duze', 'uploads/42b6ec9969b12b57b6c04905e297f693.jpg', 'Normal'),
(64735372, 'Gcinmuzi', 'Manyatsi', 'gcimanyatsi90@gmail.com', 78524313, 'Manyatsi', 'Male', '007', 'What is the name of your favorite pet?', 'Soccer', 'uploads/483921.jpg', 'Normal'),
(653425432, 'Thando', 'Simelane', 'simelanethando@gmail.com', 76354211, 'Thando', 'Male', '9999', 'In what city were you born?', 'Mbabane', 'uploads/5.jpg', 'Normal'),
(2147483647, 'Simphiwe', 'Dlamini', 'dfghj@fff.nm', 79762522, 'Mapiss', 'Male', '1234', 'What is the name of your favorite pet?', 'Piggs Peak', 'uploads/5bd3be5847a32-wallpaper-preview.jpg', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auction_items`
--
ALTER TABLE `auction_items`
  ADD PRIMARY KEY (`Bid_ID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Product_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_num`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auction_items`
--
ALTER TABLE `auction_items`
  MODIFY `Bid_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
