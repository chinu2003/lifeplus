-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2024 at 07:20 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lifeplus`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `appointment_date` date NOT NULL,
  `appointment_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `customer_name`, `customer_email`, `appointment_date`, `appointment_time`) VALUES
(1, 'Chinmay', 'chinmaymondkar2003@gmail.com', '2024-12-16', '12:21:00'),
(2, 'akshay', 'akshaybhand@gmail', '2024-12-16', '10:10:00'),
(3, 'Rohit', 'rohitnadavkar@gmail.com', '2024-04-10', '06:00:00'),
(4, 'akshay', 'abc@gmail.com', '2024-04-15', '10:32:00'),
(5, 'chinmay', 'chinmaymondkar2003@gmail.com', '2024-04-17', '11:50:00'),
(6, 'chiku', 'chiku2003@gmail.com', '2024-04-01', '10:56:00');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `mobile_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `specialization` varchar(255) NOT NULL,
  `years_of_experience` int(11) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `full_name`, `mobile_number`, `email`, `specialization`, `years_of_experience`, `state`, `city`, `password`) VALUES
(1, 'Rohit Rajendra Nandgavkar', '5687159645', 'cn45@gmail.com', 'mbbs', 0, 'Maharashtra', 'Mumbai', 'e7b5f31246e8cb9f6cb24f51055b7633'),
(2, 'akshay', '9156904351', 'ad@gmail.com', 'mbbs', 5, 'Maharashtra', 'Mumbai', '8e6f09d78db003c669ef595a022c5f86'),
(3, 'chiku', '9623922598', 'chiku2002@gmail.com', 'mbbs', 5, 'Maharashtra', 'Mumbai', 'd2203752ec83920dd21b236ebe40c19b'),
(4, 'Chinmay Harishchandra Mondkar', '8532654789', 'Chinmaymondkar2003@gmail.com', 'mbbs', 1, 'Maharashtra', 'Mumbai', '6e5e4d1b1805aa7866c99c63a26b4886'),
(5, 'Sahil', '8546128465', 'sahilpakhare@gmail.com', 'mbbs', 5, 'Maharashtra', 'Mumbai', '6e5e4d1b1805aa7866c99c63a26b4886');

-- --------------------------------------------------------

--
-- Table structure for table `medical_store`
--

CREATE TABLE `medical_store` (
  `id` int(11) NOT NULL,
  `admin_full_name` varchar(255) NOT NULL,
  `medical_store_name` varchar(255) NOT NULL,
  `medical_license_no` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `state` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `medical_store`
--

INSERT INTO `medical_store` (`id`, `admin_full_name`, `medical_store_name`, `medical_license_no`, `email`, `state`, `city`, `password`) VALUES
(1, 'Sahil', 'morya', '12345678', 'sahilpakhare@gmail.com', 'Maharashtra', 'mumbai', '6e5e4d1b1805aa7866c99c63a26b4886'),
(2, 'Akshay Desai', 'Sakshi Medical', '45652578', 'akshaybhand2@gmail.com', 'Maharashtra', 'Ratnagiri', '6e5e4d1b1805aa7866c99c63a26b4886'),
(3, 'Chinmay Mondkar', 'morya', '89634575', 'chinmaymondkar2003@gmail.com', 'Maharashtra', 'Kasarde', '6e5e4d1b1805aa7866c99c63a26b4886');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `patient_name` varchar(255) NOT NULL,
  `patient_sex` varchar(10) NOT NULL,
  `patient_dob` date NOT NULL,
  `patient_phone` varchar(20) NOT NULL,
  `patient_email` varchar(255) NOT NULL,
  `patient_address` varchar(255) NOT NULL,
  `patient_city` varchar(100) NOT NULL,
  `patient_state` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `patient_name`, `patient_sex`, `patient_dob`, `patient_phone`, `patient_email`, `patient_address`, `patient_city`, `patient_state`, `password`) VALUES
(1, 'chiku', 'Female', '2003-05-11', '9623922598', 'chiku2002@gmail.com', 'Mumbai', 'Mumbai', 'Maharashtra', '6e5e4d1b1805aa7866c99c63a26b4886'),
(2, 'Sahil Sunil Pakhare', 'Male', '2003-12-16', '9623922598', 'sahilpakhare17@gmail.com', 'ratnagiri', 'ratnagiri', 'Maharashtra', '6e5e4d1b1805aa7866c99c63a26b4886'),
(3, 'chinmay', 'Male', '2005-05-01', '9623922598', 'chinmaymondkar2003@gmail.com', 'Kasarde', 'AT post kasarde tal-kankavli dist-Sindhudurg', 'Maharashtra', '6e5e4d1b1805aa7866c99c63a26b4886');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medical_store`
--
ALTER TABLE `medical_store`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `medical_store`
--
ALTER TABLE `medical_store`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
