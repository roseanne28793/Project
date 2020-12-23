-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2020 at 03:01 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ortech`
--

-- --------------------------------------------------------

--
-- Table structure for table `barangay`
--

CREATE TABLE `barangay` (
  `barangay_id` int(11) NOT NULL,
  `barangay_name` varchar(255) NOT NULL,
  `province_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barangay`
--

INSERT INTO `barangay` (`barangay_id`, `barangay_name`, `province_id`, `city_id`) VALUES
(1, 'Alima', 1, 55),
(2, 'Aniban I', 1, 55),
(3, 'Aniban II', 1, 55);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(255) NOT NULL,
  `province_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `city_name`, `province_id`) VALUES
(1, 'Bangued', 3),
(2, 'Bucay', 3),
(3, 'Daguioman', 3),
(4, 'Dolores', 3),
(5, 'Lacub', 3),
(6, 'Lagayan', 3),
(7, 'Licuan-Baay (Licuan)', 3),
(8, 'Malibcong', 3),
(9, 'Peñarrubia', 3),
(10, 'Pilar', 3),
(11, 'San Isidro', 3),
(12, 'San Quintin', 3),
(13, 'Tineg', 3),
(14, 'Villaviciosa', 3),
(15, 'Boliney', 3),
(16, 'Bucloc', 3),
(17, 'Danglas', 3),
(18, 'La Paz', 3),
(19, 'Lagangilang', 3),
(20, 'Langiden', 3),
(21, 'Luba', 3),
(22, 'Manabo', 3),
(23, 'Pidigan', 3),
(24, 'Sallapadan', 3),
(25, 'San Juan', 3),
(26, 'Tayum', 3),
(27, 'Tubo', 3),
(28, 'Buenavista', 73),
(29, 'Cabadbaran', 73),
(30, 'Jabonga', 73),
(31, 'Las Nieves', 73),
(32, 'Nasipit', 73),
(33, 'Santiago', 73),
(34, 'Butuan', 73),
(35, 'Carmen', 73),
(36, 'Kitcharao', 73),
(37, 'Magallanes', 73),
(38, 'Remedios T. Romualdez', 73),
(39, 'Tubay', 73),
(40, 'Bayugan', 74),
(41, 'Esperanza', 74),
(42, 'Loreto', 74),
(43, 'Rosario', 74),
(44, 'San Luis', 74),
(45, 'Sibagat', 74),
(46, 'Trento', 74),
(47, 'Bunawan', 74),
(48, 'La Paz', 74),
(49, 'Prosperidad', 74),
(50, 'San Francisco', 74),
(51, 'Santa Josefa', 74),
(52, 'Talacogon', 74),
(53, 'Veruela', 74),
(54, 'Alfonso', 1),
(55, 'Bacoor', 1),
(56, 'Cavite City', 1),
(57, 'General Emilio Aguinaldo', 1),
(58, 'General Trias', 1),
(59, 'Indang', 1),
(60, 'Magallanes', 1),
(61, 'Mendez (Mendez-Nuñez)', 1),
(62, 'Noveleta', 1),
(63, 'Silang', 1),
(64, 'Tanza', 1),
(65, 'Trece Martires', 1),
(66, 'Amadeo', 1),
(67, 'Carmona', 1),
(68, 'Dasmariñas', 1),
(69, 'General Mariano Alvarez', 1),
(70, 'Imus', 1),
(71, 'Kawit', 1),
(72, 'Maragondon', 1),
(73, 'Naic', 1),
(74, 'Rosario', 1),
(75, 'Tagaytay', 1),
(76, 'Ternate', 1);

-- --------------------------------------------------------

--
-- Table structure for table `province`
--

CREATE TABLE `province` (
  `province_id` int(11) NOT NULL,
  `province_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `province`
--

INSERT INTO `province` (`province_id`, `province_name`) VALUES
(1, 'Cavite'),
(2, 'Metro Manila'),
(3, 'Abra'),
(4, 'Apayao'),
(5, 'Benguet'),
(6, 'Ifugao'),
(7, 'Kalinga'),
(8, 'Mountain Province'),
(9, 'Ilocos Norte'),
(10, 'Ilocos Sur'),
(11, 'La Union'),
(12, 'Pangasinan'),
(13, 'Batanes'),
(14, 'Cagayan'),
(15, 'Isabela'),
(16, 'Nueva Vizcaya'),
(17, 'Quirino'),
(18, 'Aurora'),
(19, 'Bataan'),
(20, 'Bulacan'),
(21, 'Nueva Ecija'),
(22, 'Pampanga'),
(23, 'Tarlac'),
(24, 'Zambales'),
(25, 'Batangas'),
(26, 'Laguna'),
(27, 'Quezon'),
(28, 'Rizal'),
(29, 'Marinduque'),
(30, 'Occidental Mindoro'),
(31, 'Oriental Mindoro'),
(32, 'Palawan'),
(33, 'Romblon'),
(34, 'Albay'),
(35, 'Camarines Norte'),
(36, 'Camarines Sur'),
(37, 'Catanduanes'),
(38, 'Masbate'),
(39, 'Sorsogon'),
(40, 'Aklan'),
(41, 'Antique'),
(42, 'Capiz'),
(43, 'Guimaras'),
(44, 'Iloilo'),
(45, 'Negros Occidental'),
(46, 'Bohol'),
(47, 'Cebu'),
(48, 'Negros Oriental'),
(49, 'Siquijor'),
(50, 'Biliran'),
(51, 'Eastern Samar'),
(52, 'Leyte'),
(53, 'Northern Samar'),
(54, 'Samar'),
(55, 'Southern Leyte'),
(56, 'Zamboanga del Norte'),
(57, 'Zamboanga del Sur'),
(58, 'Zamboanga Sibugay'),
(59, 'Bukidnon'),
(60, 'Camiguin'),
(61, 'Lanao del Norte'),
(62, 'Misamis Occidental'),
(63, 'Misamis Oriental'),
(64, 'Davao de Oro'),
(65, 'Davao del Norte'),
(66, 'Davao del Sur'),
(67, 'Davao Occidental'),
(68, 'Davao Oriental'),
(69, 'Cotabato'),
(70, 'Sarangani'),
(71, 'South Cotabato'),
(72, 'Sultan Kudarat'),
(73, 'Agusan del Norte'),
(74, 'Agusan del Sur'),
(75, 'Dinagat Islands'),
(76, 'Surigao del Norte'),
(77, 'Surigao del Sur'),
(78, 'Basilan'),
(79, 'Lanao del Sur'),
(80, 'Maguindanao'),
(81, 'Sulu'),
(82, 'Tawi-Tawi'),
(87, 'Metro Manila');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `status` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `status`) VALUES
(1, 'Single'),
(2, 'Married'),
(3, 'Widowed'),
(4, 'Separated'),
(5, 'Divorced');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barangay`
--
ALTER TABLE `barangay`
  ADD PRIMARY KEY (`barangay_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `province`
--
ALTER TABLE `province`
  ADD PRIMARY KEY (`province_id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barangay`
--
ALTER TABLE `barangay`
  MODIFY `barangay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `province`
--
ALTER TABLE `province`
  MODIFY `province_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
