-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2018 at 11:23 AM
-- Server version: 5.7.14
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newrent`
--

-- --------------------------------------------------------

--
-- Table structure for table `cmps`
--

CREATE TABLE `cmps` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `cmp` varchar(200) DEFAULT NULL,
  `username` varchar(200) DEFAULT NULL,
  `fullname` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cmps`
--

INSERT INTO `cmps` (`id`, `name`, `cmp`, `username`, `fullname`) VALUES
(1, 'f', 'f', 'admin', 'Loise Mumo');

-- --------------------------------------------------------

--
-- Table structure for table `room_rental_registrations`
--

-- --------------------------------------------------------

--
-- Table structure for table `house_registrations`
--

CREATE TABLE `house_registrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `fullname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apartment_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number_of_bedrooms` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number_of_bathrooms` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apartment_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vacant` int(1) NOT NULL DEFAULT '1',
  `user_id` int(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `house_registrations`
--

INSERT INTO `house_registrations` (`id`, `fullname`, `mobile`, `email`, `place`,  `price`, `apartment_name`, `number_of_bedrooms`, `number_of_bathrooms`, `apartment_type`,  `image`, `vacant`, `user_id`) VALUES
(3, 'Isaac Muwo', '0712345678', 'isaacmuwo@gmail.com', 'Juja', '13000', 'Jacaranda', '1', '1', '1 bedroom', 'uploads/apart1.jpg', 1, 1),
(4, 'Dominic Kulya', '0723456789', 'domkulya4@gmail.com', 'Juja', '8000', 'Royal Mews', '1', '1', 'bedsitter', 'uploads/apart2.jpg', 1, 1),
(5, 'Dominic Kulya', '0734567890', 'domkulya4@gmail.com', 'Juja', '12000', 'Royal Mews', '1', '1', '1 bedroom', 'uploads/apart3.jpg', 1, 3),
(6, 'Peter Wafula', '0745678901', 'wafulap065@gmail.com', 'Juja', '6000', 'Pravin', '1', '1', 'bedsitter', 'uploads/apart4.jpg', 1, 3),
(8, 'Elizabeth Makio', '0756789012', 'makioelizabeth@gmail.com', 'Juja', '18000', 'Sliver Peace', '2', '1', '2 bedroom', 'uploads/apart5.jpg', 1, 1),
(9, 'Destiny Namvula', '0767890123', 'destinynamvula@gmail.com', 'Juja', '10000', 'Shalom', '1', '1', '1 bedroom', 'uploads/apart6.jpg', 1, 2),
(10, 'Destiny Namvula', '0767890128', 'destinynamvula@gmail.com', 'Juja', '7000', 'Shalom', '1', '1', 'bedsitter', 'uploads/apart7.jpg', 1, 1),
(11, 'Fatma Mahmed', '0789012345', 'fatma1968@gmail.com', 'Kahawa', '6000', 'Pink House', '1', '1', 'bedsitter', 'uploads/apart8.jpg', 1, 3),
(12, 'Maimuna Said', '0790123456', 'saidmaimuna3375@gmail.com', 'Kahawa', '5000', 'Oasis', '1', '1', 'bedsitter', 'uploads/apart9.jpg', 1, 1),
(13, 'Sheila Kipkemoi', '0701234567', 'sheilakip@gmail.com', 'Kahawa', '18000', 'Heritage', '2', '1', '2 bedroom', 'uploads/apart10.jpg', 1, 1),
(14, 'Olail  Eiyo', '0724345678', 'olaileyo73@gmail.com', 'Kahawa', '22000', 'Elohim', '2', '2', '2 bedroom', 'uploads/apart11.jpg', 1, 2),
(15, 'Mukangala Musumba', '0725345678', 'mukangalabtw@gmail.com', 'Kahawa', '15000', 'Joy', '1', '1', '1 bedroom', 'uploads/apart12.jpg', 1,2 ),
(16, 'Ahmed Shukra', '0726345678', 'shukraahmed@gmail.com', 'Kenyatta Road', '13000', 'Railside view', '1', '1', '1 bedroom', 'uploads/apart13.jpg', 1, 1),
(17, 'Hamisi Natembeya', '0727345678', 'hamisinat467@gmail.com', 'Kenyatta Road', '27000', 'Pals', '2', '2', '2 bedroom', 'uploads/apart14.jpg', 1, 4),
(18, 'Mary Wairimu', '0728345678', 'marywairimu@gmail.com', 'Kenyatta Road', '8500', 'Minna', '1', '1', 'bedsitter', 'uploads/apart15.jpg', 1, 2),
(19, 'Adhiambo Otis', '0729345678', 'aotis54@gmail.com', 'Kenyatta Road', '15000', 'Humming Bird', '1', '1', '1 bedroom', 'uploads/apart16.jpg', 1, 1),
(20, 'Adhiambo Otis', '0740145678', 'aotis54@gmail.com', 'Kenyatta Road', '21500', 'Humming Bird', '2', '1', '2 bedroom', 'uploads/apart17.jpg', 1, 3),
(21, 'Petronilla Kanini', '0740245678', 'pkanini98@gmail.com', 'Kenyatta Road', '12000', 'Daniels', '1', '1', '1 bedroom', 'uploads/apart18.jpg', 1, 1),
(22, 'Jimmy Pat', '0740345678', 'jimjimmy@gmail.com', 'Thika', '25000', 'Mag 212', '2', '2', '2 bedroom', 'uploads/apart19.jpg', 1, 2),
(23, 'Paul Juma', '0740445678', 'pauljuma23@gmail.com', 'Thika', '16000', 'Digs', '1', '1', '1 bedroom', 'uploads/apart20.jpg', 1, 1),
(24, 'Patel Singh', '0740545678', 'singhpatel@gmail.com', 'Thika', '13500', 'Oliana', '1', '1', '1 bedroom', 'uploads/apart21.jpg', 1, 1),
(25, 'Patel Singh', '0740645678', 'singhpatel@gmail.com', 'Thika', '19000', 'Oliana', '2', '1', '2 bedroom', 'uploads/apart22.jpg', 1, 1),
(26, 'Khadija Ismael', '0740745678', 'khadijaismael@gmail.com', 'Thika', '6000', 'Hope', '1', '1', 'bedsitter', 'uploads/apart23.jpg', 1, 3),
(27, 'Peter Khayemba', '0740845678', 'peterky67@gmail.com', 'Thika', '7000', 'Fine Breeze', '1', '1', 'bedsitter', 'uploads/apart24.jpg', 1, 2),
(28, 'Mercy Wanjiku', '0740945678', 'wmercy4@gmail.com', 'Waitethie', '9000', 'Sparkz', '1', '1', 'bedsitter', 'uploads/apart25.jpg', 1, 1),
(29, 'William Kamenjo', '0741045678', 'williamk78@gmail.com', 'Waitethie', '14000', 'Blue', '1', '1', '1 bedroom', 'uploads/apart26.jpg', 1, 2),
(30, 'Brian Mustaf', '0741145678', 'brianmustaf@gmail.com', 'Waitethie', '17500', 'Royal Hacienda', '2', '1', '2 bedroom', 'uploads/apart27.jpg', 1, 1),
(1, 'Flavian Chepruto', '0741245678', 'fruto@gmail.com', 'Waitethie', '16000', 'Happy Apartments', '2', '1', '2 bedroom', 'uploads/apart28.jpg', 1, 2),
(2, 'Lilian Ngomi', '0741345678', 'lilian12@gmail.com', 'Waitethie', '11000', 'Sunrise', '1', '1', '1 bedroom', 'uploads/apart29.jpg', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `fullname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `role` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT 'user',
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `mobile`, `username`, `email`, `password`, `created_at`, `updated_at`, `role`, `status`) VALUES
(1, 'Loise Mumo', '0790962245', 'admin', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3', NULL, NULL, 'admin', 1),
(2, 'Emmanuel Msonga', '56456565', 'manu', 'mant1@gmail.com', '9aee390f19345028f03bb16c588550e1', '2018-02-08 06:53:53', '2018-02-08 06:53:53', 'user', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cmps`
--
ALTER TABLE `cmps`
  ADD PRIMARY KEY (`id`);

--


--
-- Indexes for table `house_registrations`
--
ALTER TABLE `house_registrations`
  ADD PRIMARY KEY (`id`);
  ADD UNIQUE KEY `house_registrations_mobile_unique` (`mobile`),
  ADD UNIQUE KEY `house_registrations_email_unique` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_mobile_unique` (`mobile`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cmps`
--
ALTER TABLE `cmps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--

--
-- AUTO_INCREMENT for table `house_registrations`
--
ALTER TABLE `house_registrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
