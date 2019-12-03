-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2019 at 03:26 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `autofy`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `pk_cars` int(5) NOT NULL,
  `brand` varchar(128) NOT NULL,
  `model` varchar(128) NOT NULL,
  `caryear` int(4) NOT NULL,
  `bodysytle` varchar(128) NOT NULL,
  `fueltype` varchar(128) NOT NULL,
  `transmission` varchar(128) NOT NULL,
  `image` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`pk_cars`, `brand`, `model`, `caryear`, `bodysytle`, `fueltype`, `transmission`, `image`) VALUES
(1, 'Audi', 'A4', 2019, 'Sedan', 'Petrol', 'Manual', '<img src=\'/autofy/images/Audi_A4_2019_black_sedan.png\'>'),
(2, 'Audi', 'A3', 2018, 'Coupe', 'Petrol', 'Automatic', '<img src=\'/autofy/images/Audi_A3_2019_grey_coupe.png\'>'),
(3, 'Audi', 'A4', 2019, 'Sedan', 'Petrol', 'Automatic', '<img src=\'/autofy/images/Audi_A4_2019_black_sedan.png\'>'),
(4, 'Audi', 'A5', 2018, 'Coupe', 'Diesel', 'Automatic', '<img src=\'/autofy/images/Audi_A5_2019_grey_coupe.png\'>'),
(5, 'Audi', 'A6', 2019, 'Sedan', 'Petrol', 'Automatic', '<img src=\'/autofy/images/Audi_A6_2019_white_sedan.png\'>'),
(6, 'Audi', 'Q3', 2018, 'SUV', 'Petrol', 'Automatic', '<img src=\'/autofy/images/Audi_Q3_2019_grey_offroad.png\'>'),
(7, 'Audi', 'Q5', 2019, 'SUV', 'Diesel', 'Automatic', '<img src=\'/autofy/images/Audi_Q5_2019_grey_offroad.png\'>'),
(8, 'Audi', 'Q7', 2018, 'SUV', 'Diesel', 'Automatic', '<img src=\'/autofy/images/Audi_Q7_2019_grey_offroad.png\'>'),
(9, 'Audi', 'RS5', 2019, 'Crossover', 'Coupe', 'Automatic', '<img src=\'/autofy/images/Audi_RS5_2019_black_coupe.png\'>'),
(10, 'Audi', 'S4', 2018, 'Sedan', 'Diesel', 'Automatic', '<img src=\'/autofy/images/Audi_S4_2019_grey_sedan.png\'>'),
(11, 'Audi', 'TT', 2019, 'Coupe', 'Diesel', 'Automatic', '<img src=\'/autofy/images/Audi_TT_2019_grey_coupe.png\'>'),
(12, 'BMW', '230', 2018, 'Coupe', 'Diesel', 'Automatic', '<img src=\'/autofy/images/bmw_230_2019_grey_coupe.png\'>'),
(13, 'BMW', '330', 2019, 'Wagon', 'Petrol', 'Automatic', '<img src=\'/autofy/images/bmw_330_2019_white_wagon.png\'>'),
(14, 'BMW', '430', 2018, 'Coupe', 'Petrol', 'Manual', '<img src=\'/autofy/images/bmw_430_2019_blue_coupe.png\'>'),
(15, 'BMW', '540', 2019, 'Sedan', 'Petrol', 'Manual', '<img src=\'/autofy/images/bmw_540_2019_darkblue_sedan.png\'>'),
(16, 'BMW', '740', 2018, 'Sedan', 'Petrol', 'Automatic', '<img src=\'/autofy/images/bmw_740_2019_white_sedan.png\'>'),
(17, 'BMW', 'i3', 2019, 'Hatchback', '-', 'Automatic', '<img src=\'/autofy/images/bmw_i3_2019_red_hatchback.png\'>'),
(18, 'BMW', 'M5', 2018, 'Sedan', 'Petrol', 'Automatic', '<img src=\'/autofy/images/bmw_m5_2019_grey_sedan.png\'>'),
(19, 'BMW', 'X3', 2019, 'SUV', 'Petrol', 'Manual', '<img src=\'/autofy/images/bmw_x3_2019_black_offroad.png\'>'),
(20, 'BMW', 'X5', 2018, 'SUV', 'Petrol', 'Manual', '<img src=\'/autofy/images/bmw_x5_2019_blue_offroad.png\'>'),
(21, 'BMW', 'X7', 2019, 'SUV', 'Diesel', 'Automatic', '<img src=\'/autofy/images/bmw_x7_2019_black_offroad.png\'>'),
(22, 'Lexus', 'GS', 2018, 'Sedam', 'Petrol', 'Manual', '<img src=\'/autofy/images/Lexus_GS_2019_grey_sedan.png\'>'),
(23, 'Lexus', 'IS', 2019, 'Sedan', 'Diesel', 'Manual', '<img src=\'/autofy/images/Lexus_IS_2019_grey_sedan.png\'>'),
(24, 'Lexus', 'LS', 2018, 'Sedan', 'Petrol', 'Manual', '<img src=\'/autofy/images/Lexus_LS_2019_grey_sedan.png\'>'),
(25, 'Lexus', 'NX', 2019, 'SUV', 'Diesel', 'Manual', '<img src=\'/autofy/images/Lexus_NX_2019_white_offroad.png\'>'),
(26, 'Lexus', 'RX', 2018, 'SUV', 'Diesel', 'Automatic', '<img src=\'/autofy/images/Lexus_RX_2019_white_offroad.png\'>'),
(27, 'Mercedes-Benz', 'A-class', 2019, 'Sedan', 'Diesel', 'Automatic', '<img src=\'/autofy/images/Mercedes-Benz_A-Class_2019_black_sedan.png\'>'),
(28, 'Mercedes-Benz', 'AMG-GT', 2018, 'Coupe', 'Petrol', 'Manual', '<img src=\'/autofy/images/Mercedes-Benz_AMG-GT_2019_grey_coupe.png\'>'),
(29, 'Mercedes-Benz', 'C-Class', 2019, 'Coupe', 'Diesel', 'Automatic', '<img src=\'/autofy/images/Mercedes-Benz_C-Class_2019_beige_coupe.png\'>'),
(30, 'Mercedes-Benz', 'CLA', 2018, 'Sedan', 'Petrol', 'Manual', '<img src=\'/autofy/images/Mercedes-Benz_CLA_2019_blue_sedan.png\'>'),
(31, 'Mercedes-Benz', 'E-Class', 2019, 'Sedan', 'Petrol', 'Manual', '<img src=\'/autofy/images/Mercedes-Benz_E-Class_2019_white_sedan.png\'>'),
(32, 'Mercedes-Benz', 'G-Class', 2018, 'SUV', 'Diesel', 'Automatic', '<img src=\'/autofy/images/Mercedes-Benz_G-Class_2019_black_offroad.png\'>'),
(33, 'Mercedes-Benz', 'GLA-Class', 2019, 'SUV', 'Diesel', 'Automatic', '<img src=\'/autofy/images/Mercedes-Benz_GLA-Class_2019_grey_offroad.png\'>'),
(34, 'Mercedes-Benz', 'GLC-Class', 2018, 'SUV', 'Petrol', 'Manual', '<img src=\'/autofy/images/Mercedes-Benz_GLC-Class_2019_white_offroad.png\'>'),
(35, 'Mercedes-Benz', 'S-Class', 2019, 'Sedan', 'Petrol', 'Automatic', '<img src=\'/autofy/images/Mercedes-Benz_S-Class_2019_grey_sedan.png\'>'),
(36, 'Mercedes-Benz', 'SLC-Class', 2018, 'Coupe', 'Diesel', 'Automatic', '<img src=\'/autofy/images/Mercedes-Benz_SLC-Class_2019_grey_coupe.png\'>'),
(37, 'Volkswagen', 'Alltrack', 2019, 'Wagon', 'Diesel', 'Automatic', '<img src=\'/autofy/images/Volkswagen_Alltrack_2019_grey_wagon.png\'>'),
(38, 'Volkswagen', 'Atreon', 2018, 'Sedan', 'Diesel', 'Automatic', '<img src=\'/autofy/images/Volkswagen_Arteon_2019_black_sedan.png\'>'),
(39, 'Volkswagen', 'Atlas', 2019, 'SUV', 'Petrol', 'Manual', '<img src=\'/autofy/images/Volkswagen_Atlas_2019_blue_Offroad.png\'>'),
(40, 'Volkswagen', 'Bettle', 2018, 'Hatchback', 'Petrol', 'Manual', '<img src=\'/autofy/images/Volkswagen_Beetle_2019_blue_Hatchback.png\'>'),
(41, 'Volkswagen', 'E-Golf', 2019, 'Hatchback', '-', 'Automatic', '<img src=\'/autofy/images/Volkswagen_E-Golf_2019_blue_Hatchback.png\'>'),
(42, 'Volkswagen', 'Golf', 2018, 'Hatchback', 'Diesel', 'Manual', '<img src=\'/autofy/images/Volkswagen_Golf_2019_grey_Hatchback.png\'>'),
(43, 'Volkswagen', 'Golf GTI', 2019, 'Hatchback', 'Petrol', 'Manual', '<img src=\'/autofy/images/Volkswagen_GTI_2019_black_Hatchback.png\'>'),
(44, 'Volkswagen', 'Jetta', 2018, 'Sedan', 'Diesel', 'Automatic', '<img src=\'/autofy/images/Volkswagen_Jetta_2019_red_sedan.png\'>'),
(45, 'Volkswagen', 'Passat', 2019, 'Sedan', 'Diesel', 'Automatic', '<img src=\'/autofy/images/Volkswagen_Passat_2019_grey_sedan.png\'>'),
(46, 'Volkswagen', 'Tiguan', 2018, 'SUV', 'Diesel', 'Automatic', '<img src=\'/autofy/images/Volkswagen_Tiguan_2019_grey_Offroad.png\'>'),
(47, 'Toyota', 'Camry', 2019, 'Sedan', 'Petrol', 'Manual', '<img src=\'/autofy/images/Toyota_Camry_2019_grey_sedan.png\'>'),
(48, 'Toyota', 'Corolla', 2018, 'Sedan', 'Petrol', 'Automatic', '<img src=\'/autofy/images/Toyota_Corolla_2019_beige_sedan.png\'>'),
(49, 'Toyota', 'Land-Cruiser', 2019, 'SUV', 'Petrol', 'Automatic', '<img src=\'/autofy/images/Toyota_Land-Cruiser_2019_black_offroad.png\'>'),
(50, 'Toyota', 'RAV4', 2018, 'SUV', 'Diesel', 'Manual', '<img src=\'/autofy/images/Toyota_RAV4_2019_grey_offroad.png\'>'),
(51, 'Toyota', 'Sienna', 2019, 'Wagon', 'Diesel', 'Manual', '<img src=\'/autofy/images/Toyota_Sienna_2019_white_wagon.png\'>'),
(52, 'Volvo', 'S60', 2018, 'Sedan', 'Diesel', 'Automatic', '<img src=\'/autofy/images/Volvo_S60_2019_red_sedan.png\'>'),
(53, 'Volvo', 'S90', 2019, 'Sedan', 'Petrol', 'Manual', '<img src=\'/autofy/images/Volvo_S90_2019_white_sedan.png\'>'),
(54, 'Volvo', 'V60', 2018, 'Wagon', 'Petrol', 'Automatic', '<img src=\'/autofy/images/Volvo_V60_2019_grey_wagon.png\'>'),
(55, 'Volvo', 'XC60', 2019, 'SUV', 'Diesel', 'Manual', '<img src=\'/autofy/images/Volvo_XC60_2019_black_offroad.png\'>'),
(56, 'Volvo', 'XC90', 2018, 'SUV', 'Diesel', 'Automatic', '<img src=\'/autofy/images/Volvo_XC90_2019_white_offroad.png\'>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`pk_cars`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `pk_cars` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
