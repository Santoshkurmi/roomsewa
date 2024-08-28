-- -- phpMyAdmin SQL Dump
-- -- version 5.2.1
-- -- https://www.phpmyadmin.net/
-- --
-- -- Host: 127.0.0.1
-- -- Generation Time: Aug 20, 2024 at 08:49 AM
-- -- Server version: 10.4.32-MariaDB
-- -- PHP Version: 8.2.12

-- SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
-- START TRANSACTION;
-- SET time_zone = "+00:00";
-- 

-- /*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
-- /*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
-- /*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
-- /*!40101 SET NAMES utf8mb4 */;

-- --
-- -- Database: `roomsewa`
-- --

-- -- --------------------------------------------------------

-- --
-- -- Table structure for table `add_property`
-- --

-- CREATE TABLE `add_property` (
--   `property_id` int(1) NOT NULL,
--   `country` varchar(50) NOT NULL,
--   `province` varchar(50) NOT NULL,
--   `zone` varchar(50) NOT NULL,
--   `district` varchar(50) NOT NULL,
--   `city` varchar(100) NOT NULL,
--   `vdc_municipality` varchar(50) NOT NULL,
--   `ward_no` int(10) NOT NULL,
--   `tole` varchar(100) NOT NULL,
--   `contact_no` bigint(10) NOT NULL,
--   `property_type` varchar(50) NOT NULL,
--   `estimated_price` bigint(10) NOT NULL,
--   `total_rooms` int(10) NOT NULL,
--   `bedroom` int(10) NOT NULL,
--   `living_room` int(10) NOT NULL,
--   `kitchen` int(10) NOT NULL,
--   `bathroom` int(10) NOT NULL,
--   `description` varchar(2000) NOT NULL,
--   `latitude` decimal(9,6) NOT NULL,
--   `longitude` decimal(9,6) NOT NULL,
--   `owner_id` int(10) NOT NULL,
--   `booked` varchar(10) DEFAULT 'No'
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --
-- -- Dumping data for table `add_property`
-- --

-- INSERT INTO `add_property` (`property_id`, `country`, `province`, `zone`, `district`, `city`, `vdc_municipality`, `ward_no`, `tole`, `contact_no`, `property_type`, `estimated_price`, `total_rooms`, `bedroom`, `living_room`, `kitchen`, `bathroom`, `description`, `latitude`, `longitude`, `owner_id`, `booked`) VALUES
-- (1, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Rupandehi', 'Butwal', 'Municipality', 11, 'Laxminagar', 9847030528, 'Flat Rent', 12000, 3, 1, 1, 1, 1, 'Near to the white Rose Academy', 27.700001, 83.466003, 4, 'No'),
-- (3, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Rupandehi', 'Butwal', 'Municipality', 4, 'Golpark', 9847030528, 'Room Rent', 5000, 2, 1, 0, 0, 1, 'contact me for detail', 27.700001, 83.466003, 3, 'No'),
-- (4, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Rupandehi', 'Butwal', 'Municipality', 4, 'Milanchowk', 9867419155, 'Flat Rent', 15000, 5, 2, 1, 1, 1, 'contact me for detail', 27.700001, 83.466003, 3, 'No'),
-- (5, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Rupandehi', 'Butwal', 'Municipality', 4, 'Golpark', 9847030528, 'Flat Rent', 10000, 3, 1, 1, 0, 1, 'contact me for detail', 27.700001, 83.466003, 3, 'No'),
-- (6, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Rupandehi', 'Butwal', 'Municipality', 4, 'Golpark', 9867419155, 'flat Rent', 5000, 3, 1, 1, 0, 1, 'contact me for detail', 27.700001, 83.466003, 3, 'No'),
-- (7, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Rupandehi', 'Butwal', 'Municipality', 4, 'kalikanagar', 9804400463, 'Flat Rent', 15000, 3, 1, 1, 0, 1, 'contact me for detail', 27.678549, 83.455625, 3, 'No'),
-- (8, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Rupandehi', 'Butwal', 'Municipality', 4, 'kalikanagar', 9804400463, 'Room Rent', 4500, 2, 1, 0, 0, 1, 'contact me for detail', 27.678549, 83.455625, 3, 'No'),
-- (9, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Rupandehi', 'Butwal', 'Municipality', 4, 'devinagar', 9847030528, 'flat Rent', 4000, 1, 0, 0, 0, 1, 'contact me for detail', 27.810911, 83.699358, 3, 'No'),
-- (10, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Rupandehi', 'Butwal', 'Municipality', 4, 'traffic chowk', 9847030528, 'Room Rent', 5500, 1, 0, 0, 0, 0, 'contact me for detail', 27.700001, 83.466003, 3, 'No'),
-- (11, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Rupandehi', 'Butwal', 'Municipality', 4, 'kalikanagar', 9847030528, 'Room Rent', 7000, 3, 1, 0, 0, 0, 'contact me for detail', 27.678549, 83.455625, 4, 'No'),
-- (12, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Rupandehi', 'Butwal', 'Municipality', 4, 'Golpark', 9847030528, 'Room Rent', 6000, 3, 1, 1, 0, 1, 'contact me for detail', 27.700001, 83.466003, 3, 'No'),
-- (13, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Rupandehi', 'Butwal', 'Municipality', 4, 'Golpark', 9847030528, 'Room Rent', 3000, 1, 0, 0, 0, 0, 'contact me for detail', 27.700001, 83.466003, 3, 'No'),
-- (14, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Palpa', 'Tansen', 'Municipality', 7, 'kailashnagar', 9867419155, 'House Rent', 17000, 7, 4, 1, 1, 1, 'contact me for detail', 27.522400, 83.321100, 3, 'No'),
-- (15, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Palpa', 'Tansen', 'Municipality', 7, 'kailashnagar', 9867419155, 'Room Rent', 7000, 3, 1, 1, 0, 1, 'contact me for detail', 27.522400, 83.321100, 3, 'No'),
-- (16, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Palpa', 'Tansen', 'Municipality', 7, 'kailashnagar', 9804400463, 'Flat  Rent', 10000, 5, 2, 1, 1, 1, 'contact me for detail', 27.522430, 83.321200, 3, 'No'),
-- (17, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Palpa', 'Tansen', 'Municipality', 10, 'Bus park', 9867419155, 'House Rent', 15000, 6, 3, 1, 1, 1, 'contact me for detail', 27.515200, 83.324800, 3, 'No'),
-- (18, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Palpa', 'Tansen', 'Municipality', 7, 'Bus park', 9867419155, 'Room Rent', 7000, 3, 1, 1, 0, 1, 'contact me for detail', 27.522400, 83.321100, 3, 'No'),
-- (19, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Palpa', 'Tansen', 'Municipality', 10, 'kailashnagar', 9804400463, 'Flat  Rent', 10000, 5, 2, 1, 1, 1, 'contact me for detail', 27.522430, 83.321200, 3, 'Yes'),
-- (20, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Palpa', 'Tansen', 'Municipality', 10, 'Pravash', 9867419155, 'Flat Rent', 14000, 5, 2, 1, 1, 1, 'contact me for detail', 27.503800, 83.324400, 3, 'No'),
-- (21, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Palpa', 'Tansen', 'Municipality', 10, 'Pravash', 9867419155, 'House Rent', 20000, 6, 3, 1, 1, 1, 'contact me for detail', 27.503800, 83.324400, 3, 'No'),
-- (22, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Palpa', 'Tansen', 'Municipality', 10, 'Pravash', 9867419155, 'Room Rent', 7000, 3, 1, 1, 0, 1, 'contact me for detail', 27.522400, 83.321100, 3, 'No'),
-- (23, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Gulmi', 'Resunga', 'Tamghas', 1, 'Udindhunga', 9847030528, 'Flat Rent', 12000, 3, 1, 1, 1, 1, 'Near to Resunga secondary school ', 28.067826, 83.211564, 4, 'No'),
-- (24, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Gulmi', 'Resunga', 'Tamghas', 1, 'Baghmare', 9847030528, 'Room Rent', 12000, 1, 0, 0, 0, 1, 'Near to Petrol pump ', 28.067826, 83.211564, 4, 'No'),
-- (25, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Gulmi', 'Resunga', 'Tamghas', 1, 'Chidichaur', 9847030528, 'Room Rent', 12000, 1, 0, 0, 0, 1, 'Near to Mahendra model secondary school ', 28.067826, 83.211564, 4, 'No'),
-- (26, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Gulmi', 'Resunga', 'Tamghas', 4, 'Deurali', 9847030528, 'House Rent', 25000, 6, 4, 1, 1, 2, 'Front to the police bit ', 28.067826, 83.211564, 4, 'No'),
-- (27, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Gulmi', 'Resunga', 'Tamghas', 1, 'Udindhunga', 9847030528, 'Flat Rent', 12000, 3, 1, 1, 1, 1, 'Near to Resunga secondary school ', 28.067826, 83.211564, 4, 'No'),
-- (28, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Gulmi', 'Resunga', 'Tamghas', 1, 'Baghmare', 9847030528, 'Room Rent', 12000, 1, 0, 0, 0, 1, 'Near to Petrol pump ', 28.067826, 83.211564, 4, 'No'),
-- (29, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Gulmi', 'Resunga', 'Tamghas', 1, 'Chidichaur', 9847030528, 'Room Rent', 12000, 1, 0, 0, 0, 1, 'Near to Mahendra model secondary school ', 28.067826, 83.211564, 4, 'No'),
-- (30, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Gulmi', 'Resunga', 'Tamghas', 4, 'Deurali', 9847030528, 'House Rent', 25000, 6, 4, 1, 1, 2, 'Front to the police bit ', 28.067826, 83.211564, 4, 'No'),
-- (31, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Gulmi', 'Resunga', 'Tamghas', 1, 'Chidichaur', 9847030528, 'Room Rent', 12000, 1, 0, 0, 0, 1, 'Near to Mahendra model secondary school ', 28.067826, 83.211564, 4, 'No'),
-- (32, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Gulmi', 'Resunga', 'Tamghas', 4, 'Deurali', 9847030528, 'House Rent', 25000, 6, 4, 1, 1, 2, 'Front to the police bit ', 28.067826, 83.211564, 4, 'No'),
-- (33, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Kathmandu', 'Kathmandu', 'Municipality', 4, 'Kalanki', 9847030528, 'Flat Rent', 15000, 3, 1, 1, 1, 1, 'Only for family of member less than5', 27.693181, 85.271917, 4, 'No'),
-- (34, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Kathmandu', 'Kathmandu', 'Municipality', 4, 'Kalanki', 9847030528, 'Flat Rent', 15000, 3, 1, 1, 1, 1, 'Only for family of member less than5', 27.693181, 85.271917, 4, 'No'),
-- (35, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Kathmandu', 'Kathmandu', 'Municipality', 4, 'Baudhha', 9847030528, 'Room Rent', 5000, 1, 0, 0, 0, 1, 'Available for the students', 27.723176, 85.349522, 4, 'No'),
-- (36, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Kathmandu', 'Kathmandu', 'Municipality', 4, 'Bauddha', 9847030528, 'Flat Rent', 15000, 3, 1, 1, 1, 1, 'Near chaitya', 27.723176, 85.349522, 4, 'No'),
-- (37, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Kathmandu', 'Kathmandu', 'Municipality', 4, 'Kalanki', 9847030528, 'Room Rent', 4500, 1, 0, 0, 0, 1, 'Available for the students', 27.693181, 85.271917, 4, 'No'),
-- (38, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Kathmandu', 'Kathmandu', 'Municipality', 4, 'Kalanki', 9847030528, 'Room Rent', 4500, 1, 0, 0, 0, 1, 'Available for the students', 27.693181, 85.271917, 4, 'No'),
-- (39, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Lalitpur', 'Lalitpur', 'Municipality', 4, 'Gwarko', 9847030528, 'House Rent', 120000, 12, 3, 7, 2, 4, 'Near to Gwarko Chok', 27.666497, 85.329770, 4, 'No'),
-- (40, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Lalitpur', 'Lalitpur', 'Municipality', 4, 'Gwarko', 9847030528, 'House Rent', 4500, 12, 3, 7, 2, 4, 'West from Gwarko chok', 27.666497, 85.329770, 4, 'No'),
-- (41, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Lalitpur', 'Lalitpur', 'Municipality', 4, 'Gwarko', 9847030528, 'Room Rent', 4500, 1, 0, 0, 0, 1, 'Available for the students', 27.666497, 85.329770, 4, 'No'),
-- (42, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Lalitpur', 'Lalitpur', 'Municipality', 4, 'Imadol', 9847030528, 'Room Rent', 4500, 1, 0, 0, 0, 1, 'Available for the students', 27.666497, 85.329770, 4, 'No'),
-- (43, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'Flat Rent', 15000, 3, 2, 1, 1, 1, 'At Lake Side ', 28.208606, 83.960066, 4, 'No'),
-- (44, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, 'Kalika Chok', 9847030528, 'Flat Rent', 15000, 3, 2, 1, 1, 1, 'At opposite of Kalika Mandir ', 28.259949, 83.593114, 4, 'No'),
-- (45, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, ' Maldhunga', 9847030528, 'Flat Rent', 15000, 3, 2, 1, 1, 1, 'Near to the Kalika Temple ', 28.259949, 83.593114, 4, 'No'),
-- (46, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, 'Kalika Chok', 9847030528, 'House Rent', 50000, 5, 4, 1, 1, 1, 'At opposite to kalika mandir ', 28.259949, 83.593114, 4, 'No'),
-- (47, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, 'Maldhung', 9847030528, 'House Rent', 50000, 5, 4, 1, 1, 1, 'At opposite to kalika mandir ', 28.259949, 83.593114, 4, 'No'),
-- (48, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, 'Kalika Chok', 9847030528, 'Room Rent', 5000, 2, 1, 0, 1, 1, 'At opposite of Kalika Mandir ', 28.259949, 83.593114, 4, 'No'),
-- (49, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, 'Maldhunga', 9847030528, 'Room Rent', 5000, 3, 2, 1, 1, 1, 'At opposite of Kalika Mandir ', 28.259949, 83.593114, 4, 'No'),
-- (50, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Flat Rent', 14000, 3, 1, 1, 1, 1, 'Near to Prithvi chok', 28.202995, 83.974005, 4, 'No'),
-- (51, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Flat Rent', 15000, 4, 2, 1, 1, 1, 'Near to Prithvi chok', 28.202995, 83.974005, 4, 'No'),
-- (52, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Room Rent', 4000, 1, 1, 0, 0, 1, 'Near to Prithvi chok ', 28.202995, 83.974005, 4, 'No'),
-- (53, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Flat Rent', 14000, 3, 1, 1, 1, 1, 'Near to Birendra chok ', 28.202995, 83.974005, 4, 'No'),
-- (54, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Room Rent', 5400, 1, 1, 0, 1, 1, 'Near to Birendra chok ', 28.202995, 83.974005, 4, 'No'),
-- (55, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'Room Rent', 5400, 1, 1, 0, 1, 1, 'At Lake side ', 28.208606, 83.960066, 4, 'No'),
-- (56, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'Room Rent', 4500, 1, 1, 0, 0, 1, 'At Lake Side ', 28.208606, 83.960066, 4, 'No'),
-- (57, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'House Rent', 75000, 7, 2, 6, 2, 1, 'At Lake Side ', 28.208606, 83.960066, 4, 'No'),
-- (58, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'House Rent', 75000, 7, 2, 6, 2, 1, 'At Lake Side ', 28.208606, 83.960066, 4, 'No'),
-- (59, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Flat Rent', 14000, 3, 1, 1, 1, 1, 'Near to Prithvi chok', 28.202995, 83.974005, 4, 'No'),
-- (60, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Flat Rent', 15000, 4, 2, 1, 1, 1, 'Near to Prithvi chok', 28.202995, 83.974005, 4, 'No'),
-- (61, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Room Rent', 4000, 1, 1, 0, 0, 1, 'Near to Prithvi chok ', 28.202995, 83.974005, 4, 'No'),
-- (62, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Flat Rent', 14000, 3, 1, 1, 1, 1, 'Near to Birendra chok ', 28.202995, 83.974005, 4, 'No'),
-- (63, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Room Rent', 5400, 1, 1, 0, 1, 1, 'Near to Birendra chok ', 28.202995, 83.974005, 4, 'No'),
-- (64, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'Room Rent', 5400, 1, 1, 0, 1, 1, 'At Lake side ', 28.208606, 83.960066, 4, 'No'),
-- (65, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'Room Rent', 4500, 1, 1, 0, 0, 1, 'At Lake Side ', 28.208606, 83.960066, 4, 'No'),
-- (66, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'House Rent', 75000, 7, 2, 6, 2, 1, 'At Lake Side ', 28.208606, 83.960066, 4, 'No'),
-- (67, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'House Rent', 75000, 7, 2, 6, 2, 1, 'At Lake Side ', 28.208606, 83.960066, 4, 'No'),
-- (68, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'Flat Rent', 15000, 3, 2, 1, 1, 1, 'At Lake Side ', 28.208606, 83.960066, 4, 'No'),
-- (69, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, 'Kalika Chok', 9847030528, 'Flat Rent', 15000, 3, 2, 1, 1, 1, 'At opposite of Kalika Mandir ', 28.259949, 83.593114, 4, 'No'),
-- (70, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, ' Maldhunga', 9847030528, 'Flat Rent', 15000, 3, 2, 1, 1, 1, 'Near to the Kalika Temple ', 28.259949, 83.593114, 4, 'No'),
-- (71, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, 'Kalika Chok', 9847030528, 'House Rent', 50000, 5, 4, 1, 1, 1, 'At opposite to kalika mandir ', 28.259949, 83.593114, 4, 'No'),
-- (72, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, 'Maldhung', 9847030528, 'House Rent', 50000, 5, 4, 1, 1, 1, 'At opposite to kalika mandir ', 28.259949, 83.593114, 4, 'No'),
-- (73, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, 'Kalika Chok', 9847030528, 'Room Rent', 5000, 2, 1, 0, 1, 1, 'At opposite of Kalika Mandir ', 28.259949, 83.593114, 4, 'No'),
-- (74, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, 'Maldhunga', 9847030528, 'Room Rent', 5000, 3, 2, 1, 1, 1, 'At opposite of Kalika Mandir ', 28.259949, 83.593114, 4, 'No'),
-- (75, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Lalitpur', 'Lalitpur', 'Municipality', 4, 'Gwarko', 9847030528, 'House Rent', 120000, 12, 3, 7, 2, 4, 'Near to Gwarko Chok', 27.666497, 85.329770, 4, 'No'),
-- (76, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Gulmi', 'Resunga', 'Tamghas', 4, 'Deurali', 9847030528, 'House Rent', 25000, 6, 4, 1, 1, 2, 'Front to the police bit ', 28.067826, 83.211564, 4, 'No'),
-- (77, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Gulmi', 'Resunga', 'Tamghas', 1, 'Udindhunga', 9847030528, 'Flat Rent', 12000, 3, 1, 1, 1, 1, 'Near to Resunga secondary school ', 28.067826, 83.211564, 4, 'No'),
-- (78, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Gulmi', 'Resunga', 'Tamghas', 1, 'Baghmare', 9847030528, 'Room Rent', 12000, 1, 0, 0, 0, 1, 'Near to Petrol pump ', 28.067826, 83.211564, 4, 'No'),
-- (79, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Gulmi', 'Resunga', 'Tamghas', 1, 'Chidichaur', 9847030528, 'Room Rent', 12000, 1, 0, 0, 0, 1, 'Near to Mahendra model secondary school ', 28.067826, 83.211564, 4, 'No'),
-- (80, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Gulmi', 'Resunga', 'Tamghas', 4, 'Deurali', 9847030528, 'House Rent', 25000, 6, 4, 1, 1, 2, 'Front to the police bit ', 28.067826, 83.211564, 4, 'No'),
-- (81, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Gulmi', 'Resunga', 'Tamghas', 1, 'Udindhunga', 9847030528, 'Flat Rent', 12000, 3, 1, 1, 1, 1, 'Near to Resunga secondary school ', 28.067826, 83.211564, 4, 'No'),
-- (82, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Gulmi', 'Resunga', 'Tamghas', 1, 'Baghmare', 9847030528, 'Room Rent', 12000, 1, 0, 0, 0, 1, 'Near to Petrol pump ', 28.067826, 83.211564, 4, 'No'),
-- (83, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Gulmi', 'Resunga', 'Tamghas', 1, 'Chidichaur', 9847030528, 'Room Rent', 12000, 1, 0, 0, 0, 1, 'Near to Mahendra model secondary school ', 28.067826, 83.211564, 4, 'No'),
-- (84, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Gulmi', 'Resunga', 'Tamghas', 4, 'Deurali', 9847030528, 'House Rent', 25000, 6, 4, 1, 1, 2, 'Front to the police bit ', 28.067826, 83.211564, 4, 'No'),
-- (85, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Gulmi', 'Resunga', 'Tamghas', 1, 'Chidichaur', 9847030528, 'Room Rent', 12000, 1, 0, 0, 0, 1, 'Near to Mahendra model secondary school ', 28.067826, 83.211564, 4, 'No'),
-- (86, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Kathmandu', 'Kathmandu', 'Municipality', 4, 'Kalanki', 9847030528, 'Flat Rent', 15000, 3, 1, 1, 1, 1, 'Only for family of member less than5', 27.693181, 85.271917, 4, 'No'),
-- (87, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Kathmandu', 'Kathmandu', 'Municipality', 4, 'Kalanki', 9847030528, 'Flat Rent', 15000, 3, 1, 1, 1, 1, 'Only for family of member less than5', 27.693181, 85.271917, 4, 'No'),
-- (88, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Kathmandu', 'Kathmandu', 'Municipality', 4, 'Baudhha', 9847030528, 'Room Rent', 5000, 1, 0, 0, 0, 1, 'Available for the students', 27.723176, 85.349522, 4, 'No'),
-- (89, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Kathmandu', 'Kathmandu', 'Municipality', 4, 'Bauddha', 9847030528, 'Flat Rent', 15000, 3, 1, 1, 1, 1, 'Near chaitya', 27.723176, 85.349522, 4, 'No'),
-- (90, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Kathmandu', 'Kathmandu', 'Municipality', 4, 'Kalanki', 9847030528, 'Room Rent', 4500, 1, 0, 0, 0, 1, 'Available for the students', 27.693181, 85.271917, 4, 'No'),
-- (91, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Kathmandu', 'Kathmandu', 'Municipality', 4, 'Kalanki', 9847030528, 'Room Rent', 4500, 1, 0, 0, 0, 1, 'Available for the students', 27.693181, 85.271917, 4, 'Yes'),
-- (92, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Lalitpur', 'Lalitpur', 'Municipality', 4, 'Gwarko', 9847030528, 'House Rent', 4500, 12, 3, 7, 2, 4, 'West from Gwarko chok', 27.666497, 85.329770, 4, 'No'),
-- (93, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Lalitpur', 'Lalitpur', 'Municipality', 4, 'Gwarko', 9847030528, 'Room Rent', 4500, 1, 0, 0, 0, 1, 'Available for the students', 27.666497, 85.329770, 4, 'No'),
-- (94, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Lalitpur', 'Lalitpur', 'Municipality', 4, 'Imadol', 9847030528, 'Room Rent', 4500, 1, 0, 0, 0, 1, 'Available for the students', 27.666497, 85.329770, 4, 'No'),
-- (95, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Lalitpur', 'Lalitpur', 'Municipality', 4, 'Gwarko', 9847030528, 'House Rent', 120000, 12, 3, 7, 2, 4, 'Near to Gwarko Chok', 27.666497, 85.329770, 4, 'No'),
-- (96, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Lalitpur', 'Lalitpur', 'Municipality', 4, 'Gwarko', 9847030528, 'House Rent', 4500, 12, 3, 7, 2, 4, 'West from Gwarko chok', 27.666497, 85.329770, 4, 'No'),
-- (97, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Lalitpur', 'Lalitpur', 'Municipality', 4, 'Gwarko', 9847030528, 'Room Rent', 4500, 1, 0, 0, 0, 1, 'Available for the students', 27.666497, 85.329770, 4, 'No'),
-- (98, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Kathmandu', 'Kathmandu', 'Municipality', 4, 'Kalanki', 9847030528, 'Flat Rent', 15000, 3, 1, 1, 1, 1, 'Only for family of member less than5', 27.693181, 85.271917, 4, 'No'),
-- (99, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Kathmandu', 'Kathmandu', 'Municipality', 4, 'Kalanki', 9847030528, 'Flat Rent', 15000, 3, 1, 1, 1, 1, 'Only for family of member less than5', 27.693181, 85.271917, 4, 'No'),
-- (100, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Kathmandu', 'Kathmandu', 'Municipality', 4, 'Baudhha', 9847030528, 'Room Rent', 5000, 1, 0, 0, 0, 1, 'Available for the students', 27.723176, 85.349522, 4, 'No'),
-- (101, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Kathmandu', 'Kathmandu', 'Municipality', 4, 'Bauddha', 9847030528, 'Flat Rent', 15000, 3, 1, 1, 1, 1, 'Near chaitya', 27.723176, 85.349522, 4, 'No'),
-- (102, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Kathmandu', 'Kathmandu', 'Municipality', 4, 'Kalanki', 9847030528, 'Room Rent', 4500, 1, 0, 0, 0, 1, 'Available for the students', 27.693181, 85.271917, 4, 'No'),
-- (103, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Kathmandu', 'Kathmandu', 'Municipality', 4, 'Kalanki', 9847030528, 'Room Rent', 4500, 1, 0, 0, 0, 1, 'Available for the students', 27.693181, 85.271917, 4, 'No'),
-- (104, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Lalitpur', 'Lalitpur', 'Municipality', 4, 'Imadol', 9847030528, 'Room Rent', 4500, 1, 0, 0, 0, 1, 'Available for the students', 27.666497, 85.329770, 4, 'No'),
-- (105, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Gulmi', 'Resunga', 'Tamghas', 1, 'Baghmare', 9847030528, 'Room Rent', 12000, 1, 0, 0, 0, 1, 'Near to Petrol pump ', 28.067826, 83.211564, 4, 'No'),
-- (106, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Gulmi', 'Resunga', 'Tamghas', 1, 'Chidichaur', 9847030528, 'Room Rent', 12000, 1, 0, 0, 0, 1, 'Near to Mahendra model secondary school ', 28.067826, 83.211564, 4, 'No'),
-- (107, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Gulmi', 'Resunga', 'Tamghas', 4, 'Deurali', 9847030528, 'House Rent', 25000, 6, 4, 1, 1, 2, 'Front to the police bit ', 28.067826, 83.211564, 4, 'No'),
-- (108, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Gulmi', 'Resunga', 'Tamghas', 1, 'Udindhunga', 9847030528, 'Flat Rent', 12000, 3, 1, 1, 1, 1, 'Near to Resunga secondary school ', 28.067826, 83.211564, 4, 'No'),
-- (109, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Gulmi', 'Resunga', 'Tamghas', 1, 'Baghmare', 9847030528, 'Room Rent', 12000, 1, 0, 0, 0, 1, 'Near to Petrol pump ', 28.067826, 83.211564, 4, 'No'),
-- (110, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Gulmi', 'Resunga', 'Tamghas', 1, 'Chidichaur', 9847030528, 'Room Rent', 12000, 1, 0, 0, 0, 1, 'Near to Mahendra model secondary school ', 28.067826, 83.211564, 4, 'No'),
-- (111, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Gulmi', 'Resunga', 'Tamghas', 4, 'Deurali', 9847030528, 'House Rent', 25000, 6, 4, 1, 1, 2, 'Front to the police bit ', 28.067826, 83.211564, 4, 'No'),
-- (112, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Gulmi', 'Resunga', 'Tamghas', 1, 'Chidichaur', 9847030528, 'Room Rent', 12000, 1, 0, 0, 0, 1, 'Near to Mahendra model secondary school ', 28.067826, 83.211564, 4, 'No'),
-- (113, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Gulmi', 'Resunga', 'Tamghas', 4, 'Deurali', 9847030528, 'House Rent', 25000, 6, 4, 1, 1, 2, 'Front to the police bit ', 28.067826, 83.211564, 4, 'No'),
-- (114, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'House Rent', 75000, 7, 2, 6, 2, 1, 'At Lake Side ', 28.208606, 83.960066, 4, 'No'),
-- (115, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'Flat Rent', 15000, 3, 2, 1, 1, 1, 'At Lake Side ', 28.208606, 83.960066, 4, 'No'),
-- (116, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, 'Kalika Chok', 9847030528, 'Flat Rent', 15000, 3, 2, 1, 1, 1, 'At opposite of Kalika Mandir ', 28.259949, 83.593114, 4, 'No'),
-- (117, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, ' Maldhunga', 9847030528, 'Flat Rent', 15000, 3, 2, 1, 1, 1, 'Near to the Kalika Temple ', 28.259949, 83.593114, 4, 'No'),
-- (118, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, 'Kalika Chok', 9847030528, 'House Rent', 50000, 5, 4, 1, 1, 1, 'At opposite to kalika mandir ', 28.259949, 83.593114, 4, 'No'),
-- (119, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, 'Maldhung', 9847030528, 'House Rent', 50000, 5, 4, 1, 1, 1, 'At opposite to kalika mandir ', 28.259949, 83.593114, 4, 'Yes'),
-- (120, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, 'Kalika Chok', 9847030528, 'Room Rent', 5000, 2, 1, 0, 1, 1, 'At opposite of Kalika Mandir ', 28.259949, 83.593114, 4, 'Yes'),
-- (121, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, 'Maldhunga', 9847030528, 'Room Rent', 5000, 3, 2, 1, 1, 1, 'At opposite of Kalika Mandir ', 28.259949, 83.593114, 4, 'No'),
-- (122, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Rupandehi', 'Butwal', 'Municipality', 4, 'Laxminagar', 9847030528, 'Flat Rent', 12000, 3, 1, 1, 1, 1, 'Near to the white Rose Academy', 27.700001, 83.466003, 4, 'No'),
-- (123, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Flat Rent', 14000, 3, 1, 1, 1, 1, 'Near to Prithvi chok', 28.202995, 83.974005, 4, 'No'),
-- (124, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Flat Rent', 15000, 4, 2, 1, 1, 1, 'Near to Prithvi chok', 28.202995, 83.974005, 4, 'No'),
-- (125, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Room Rent', 4000, 1, 1, 0, 0, 1, 'Near to Prithvi chok ', 28.202995, 83.974005, 4, 'No'),
-- (126, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Flat Rent', 14000, 3, 1, 1, 1, 1, 'Near to Birendra chok ', 28.202995, 83.974005, 4, 'No'),
-- (127, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Room Rent', 5400, 1, 1, 0, 1, 1, 'Near to Birendra chok ', 28.202995, 83.974005, 4, 'No'),
-- (128, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'Room Rent', 5400, 1, 1, 0, 1, 1, 'At Lake side ', 28.208606, 83.960066, 4, 'No'),
-- (129, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'Room Rent', 4500, 1, 1, 0, 0, 1, 'At Lake Side ', 28.208606, 83.960066, 4, 'No'),
-- (130, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'House Rent', 75000, 7, 2, 6, 2, 1, 'At Lake Side ', 28.208606, 83.960066, 4, 'No'),
-- (131, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'Flat Rent', 15000, 3, 2, 1, 1, 1, 'At Lake Side ', 28.208606, 83.960066, 4, 'No'),
-- (132, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, 'Kalika Chok', 9847030528, 'Flat Rent', 15000, 3, 2, 1, 1, 1, 'At opposite of Kalika Mandir ', 28.259949, 83.593114, 4, 'No'),
-- (133, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, ' Maldhunga', 9847030528, 'Flat Rent', 15000, 3, 2, 1, 1, 1, 'Near to the Kalika Temple ', 28.259949, 83.593114, 4, 'No'),
-- (134, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, 'Kalika Chok', 9847030528, 'House Rent', 50000, 5, 4, 1, 1, 1, 'At opposite to kalika mandir ', 28.259949, 83.593114, 4, 'No'),
-- (135, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, 'Maldhung', 9847030528, 'House Rent', 50000, 5, 4, 1, 1, 1, 'At opposite to kalika mandir ', 28.259949, 83.593114, 4, 'No'),
-- (136, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, 'Kalika Chok', 9847030528, 'Room Rent', 5000, 2, 1, 0, 1, 1, 'At opposite of Kalika Mandir ', 28.259949, 83.593114, 4, 'No'),
-- (137, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, 'Maldhunga', 9847030528, 'Room Rent', 5000, 3, 2, 1, 1, 1, 'At opposite of Kalika Mandir ', 28.259949, 83.593114, 4, 'No'),
-- (138, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Flat Rent', 14000, 3, 1, 1, 1, 1, 'Near to Prithvi chok', 28.202995, 83.974005, 4, 'No'),
-- (139, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Flat Rent', 15000, 4, 2, 1, 1, 1, 'Near to Prithvi chok', 28.202995, 83.974005, 4, 'No'),
-- (140, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Room Rent', 4000, 1, 1, 0, 0, 1, 'Near to Prithvi chok ', 28.202995, 83.974005, 4, 'No'),
-- (141, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Flat Rent', 14000, 3, 1, 1, 1, 1, 'Near to Birendra chok ', 28.202995, 83.974005, 4, 'No'),
-- (142, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Room Rent', 5400, 1, 1, 0, 1, 1, 'Near to Birendra chok ', 28.202995, 83.974005, 4, 'Yes'),
-- (143, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'Room Rent', 5400, 1, 1, 0, 1, 1, 'At Lake side ', 28.208606, 83.960066, 4, 'No'),
-- (144, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'Room Rent', 4500, 1, 1, 0, 0, 1, 'At Lake Side ', 28.208606, 83.960066, 4, 'No'),
-- (145, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'House Rent', 75000, 7, 2, 6, 2, 1, 'At Lake Side ', 28.208606, 83.960066, 4, 'No'),
-- (146, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'House Rent', 75000, 7, 2, 6, 2, 1, 'At Lake Side ', 28.208606, 83.960066, 4, 'No'),
-- (147, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Lalitpur', 'Lalitpur', 'Municipality', 4, 'Gwarko', 9847030528, 'House Rent', 120000, 12, 3, 7, 2, 4, 'Near to Gwarko Chok', 27.666497, 85.329770, 4, 'No'),
-- (148, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Lalitpur', 'Lalitpur', 'Municipality', 4, 'Gwarko', 9847030528, 'House Rent', 4500, 12, 3, 7, 2, 4, 'West from Gwarko chok', 27.666497, 85.329770, 4, 'No'),
-- (149, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Lalitpur', 'Lalitpur', 'Municipality', 4, 'Gwarko', 9847030528, 'Room Rent', 4500, 1, 0, 0, 0, 1, 'Available for the students', 27.666497, 85.329770, 4, 'No'),
-- (150, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Lalitpur', 'Lalitpur', 'Municipality', 4, 'Imadol', 9847030528, 'Room Rent', 4500, 1, 0, 0, 0, 1, 'Available for the students', 27.666497, 85.329770, 4, 'No'),
-- (151, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Flat Rent', 14000, 3, 1, 1, 1, 1, 'Near to Prithvi chok', 28.202995, 83.974005, 4, 'No'),
-- (152, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Flat Rent', 15000, 4, 2, 1, 1, 1, 'Near to Prithvi chok', 28.202995, 83.974005, 4, 'No'),
-- (153, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Room Rent', 4000, 1, 1, 0, 0, 1, 'Near to Prithvi chok ', 28.202995, 83.974005, 4, 'No'),
-- (154, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Flat Rent', 14000, 3, 1, 1, 1, 1, 'Near to Birendra chok ', 28.202995, 83.974005, 4, 'No'),
-- (155, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Room Rent', 5400, 1, 1, 0, 1, 1, 'Near to Birendra chok ', 28.202995, 83.974005, 4, 'No'),
-- (156, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'Room Rent', 5400, 1, 1, 0, 1, 1, 'At Lake side ', 28.208606, 83.960066, 4, 'No'),
-- (157, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'Room Rent', 4500, 1, 1, 0, 0, 1, 'At Lake Side ', 28.208606, 83.960066, 4, 'No'),
-- (158, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'House Rent', 75000, 7, 2, 6, 2, 1, 'At Lake Side ', 28.208606, 83.960066, 4, 'No'),
-- (159, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'House Rent', 75000, 7, 2, 6, 2, 1, 'At Lake Side ', 28.208606, 83.960066, 4, 'No'),
-- (160, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Lalitpur', 'Lalitpur', 'Municipality', 4, 'Gwarko', 9847030528, 'House Rent', 120000, 12, 3, 7, 2, 4, 'Near to Gwarko Chok', 27.666497, 85.329770, 4, 'No'),
-- (161, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Lalitpur', 'Lalitpur', 'Municipality', 4, 'Gwarko', 9847030528, 'House Rent', 4500, 12, 3, 7, 2, 4, 'West from Gwarko chok', 27.666497, 85.329770, 4, 'No'),
-- (162, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Lalitpur', 'Lalitpur', 'Municipality', 4, 'Gwarko', 9847030528, 'Room Rent', 4500, 1, 0, 0, 0, 1, 'Available for the students', 27.666497, 85.329770, 4, 'No'),
-- (163, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Kathmandu', 'Kathmandu', 'Municipality', 4, 'Kalanki', 9847030528, 'Flat Rent', 15000, 3, 1, 1, 1, 1, 'Only for family of member less than5', 27.693181, 85.271917, 4, 'No'),
-- (164, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Kathmandu', 'Kathmandu', 'Municipality', 4, 'Kalanki', 9847030528, 'Flat Rent', 15000, 3, 1, 1, 1, 1, 'Only for family of member less than5', 27.693181, 85.271917, 4, 'No'),
-- (165, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Kathmandu', 'Kathmandu', 'Municipality', 4, 'Baudhha', 9847030528, 'Room Rent', 5000, 1, 0, 0, 0, 1, 'Available for the students', 27.723176, 85.349522, 4, 'No'),
-- (166, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Kathmandu', 'Kathmandu', 'Municipality', 4, 'Bauddha', 9847030528, 'Flat Rent', 15000, 3, 1, 1, 1, 1, 'Near chaitya', 27.723176, 85.349522, 4, 'No'),
-- (167, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Kathmandu', 'Kathmandu', 'Municipality', 4, 'Kalanki', 9847030528, 'Room Rent', 4500, 1, 0, 0, 0, 1, 'Available for the students', 27.693181, 85.271917, 4, 'No'),
-- (168, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Kathmandu', 'Kathmandu', 'Municipality', 4, 'Kalanki', 9847030528, 'Room Rent', 4500, 1, 0, 0, 0, 1, 'Available for the students', 27.693181, 85.271917, 4, 'No'),
-- (169, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Lalitpur', 'Lalitpur', 'Municipality', 4, 'Imadol', 9847030528, 'Room Rent', 4500, 1, 0, 0, 0, 1, 'Available for the students', 27.666497, 85.329770, 4, 'No'),
-- (170, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'House Rent', 75000, 7, 2, 6, 2, 1, 'At Lake Side ', 28.208606, 83.960066, 4, 'No'),
-- (171, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'Flat Rent', 15000, 3, 2, 1, 1, 1, 'At Lake Side ', 28.208606, 83.960066, 4, 'No'),
-- (172, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, 'Kalika Chok', 9847030528, 'Flat Rent', 15000, 3, 2, 1, 1, 1, 'At opposite of Kalika Mandir ', 28.259949, 83.593114, 4, 'Yes'),
-- (173, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, ' Maldhunga', 9847030528, 'Flat Rent', 15000, 3, 2, 1, 1, 1, 'Near to the Kalika Temple ', 28.259949, 83.593114, 4, 'No'),
-- (174, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, 'Kalika Chok', 9847030528, 'House Rent', 50000, 5, 4, 1, 1, 1, 'At opposite to kalika mandir ', 28.259949, 83.593114, 4, 'No'),
-- (175, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, 'Maldhung', 9847030528, 'House Rent', 50000, 5, 4, 1, 1, 1, 'At opposite to kalika mandir ', 28.259949, 83.593114, 4, 'No'),
-- (176, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, 'Kalika Chok', 9847030528, 'Room Rent', 5000, 2, 1, 0, 1, 1, 'At opposite of Kalika Mandir ', 28.259949, 83.593114, 4, 'No'),
-- (177, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, 'Maldhunga', 9847030528, 'Room Rent', 5000, 3, 2, 1, 1, 1, 'At opposite of Kalika Mandir ', 28.259949, 83.593114, 4, 'No'),
-- (178, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Flat Rent', 14000, 3, 1, 1, 1, 1, 'Near to Prithvi chok', 28.202995, 83.974005, 4, 'Yes'),
-- (179, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Flat Rent', 15000, 4, 2, 1, 1, 1, 'Near to Prithvi chok', 28.202995, 83.974005, 4, 'No'),
-- (180, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Room Rent', 4000, 1, 1, 0, 0, 1, 'Near to Prithvi chok ', 28.202995, 83.974005, 4, 'No'),
-- (181, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Flat Rent', 14000, 3, 1, 1, 1, 1, 'Near to Birendra chok ', 28.202995, 83.974005, 4, 'No'),
-- (182, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Room Rent', 5400, 1, 1, 0, 1, 1, 'Near to Birendra chok ', 28.202995, 83.974005, 4, 'Yes'),
-- (183, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'Room Rent', 5400, 1, 1, 0, 1, 1, 'At Lake side ', 28.208606, 83.960066, 4, 'No'),
-- (184, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'Room Rent', 4500, 1, 1, 0, 0, 1, 'At Lake Side ', 28.208606, 83.960066, 4, 'No'),
-- (185, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'House Rent', 75000, 7, 2, 6, 2, 1, 'At Lake Side ', 28.208606, 83.960066, 4, 'No'),
-- (186, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'House Rent', 75000, 7, 2, 6, 2, 1, 'At Lake Side ', 28.208606, 83.960066, 4, 'No'),
-- (187, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Flat Rent', 14000, 3, 1, 1, 1, 1, 'Near to Prithvi chok', 28.202995, 83.974005, 4, 'No'),
-- (188, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Flat Rent', 15000, 4, 2, 1, 1, 1, 'Near to Prithvi chok', 28.202995, 83.974005, 4, 'No'),
-- (189, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Room Rent', 4000, 1, 1, 0, 0, 1, 'Near to Prithvi chok ', 28.202995, 83.974005, 4, 'No'),
-- (190, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Flat Rent', 14000, 3, 1, 1, 1, 1, 'Near to Birendra chok ', 28.202995, 83.974005, 4, 'No'),
-- (191, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Room Rent', 5400, 1, 1, 0, 1, 1, 'Near to Birendra chok ', 28.202995, 83.974005, 4, 'No'),
-- (192, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'Room Rent', 5400, 1, 1, 0, 1, 1, 'At Lake side ', 28.208606, 83.960066, 4, 'No'),
-- (193, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'Room Rent', 4500, 1, 1, 0, 0, 1, 'At Lake Side ', 28.208606, 83.960066, 4, 'No'),
-- (194, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'House Rent', 75000, 7, 2, 6, 2, 1, 'At Lake Side ', 28.208606, 83.960066, 4, 'No'),
-- (195, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'House Rent', 75000, 7, 2, 6, 2, 1, 'At Lake Side ', 28.208606, 83.960066, 4, 'No'),
-- (196, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Lalitpur', 'Lalitpur', 'Municipality', 4, 'Gwarko', 9847030528, 'House Rent', 120000, 12, 3, 7, 2, 4, 'Near to Gwarko Chok', 27.666497, 85.329770, 4, 'No'),
-- (197, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Lalitpur', 'Lalitpur', 'Municipality', 4, 'Gwarko', 9847030528, 'House Rent', 4500, 12, 3, 7, 2, 4, 'West from Gwarko chok', 27.666497, 85.329770, 4, 'No'),
-- (198, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Lalitpur', 'Lalitpur', 'Municipality', 4, 'Gwarko', 9867419155, 'Room Rent', 4500, 1, 0, 0, 0, 1, 'Available for the students', 27.666497, 85.329770, 4, 'No'),
-- (199, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Lalitpur', 'Lalitpur', 'Municipality', 4, 'Imadol', 9847030528, 'Room Rent', 4500, 1, 0, 0, 0, 1, 'Available for the students', 27.666497, 85.329770, 4, 'No'),
-- (200, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'Flat Rent', 15000, 3, 2, 1, 1, 1, 'At Lake Side ', 28.208606, 83.960066, 4, 'No'),
-- (201, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, 'Kalika Chok', 9847030528, 'Flat Rent', 15000, 3, 2, 1, 1, 1, 'At opposite of Kalika Mandir ', 28.259949, 83.593114, 4, 'No'),
-- (202, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, ' Maldhunga', 9867419155, 'Flat Rent', 15000, 3, 2, 1, 1, 1, 'Near to the Kalika Temple ', 28.259949, 83.593114, 3, 'No'),
-- (203, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, 'Kalika Chok', 9847030528, 'House Rent', 50000, 5, 4, 1, 1, 1, 'At opposite to kalika mandir ', 28.259949, 83.593114, 4, 'No'),
-- (204, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, 'Maldhung', 9847030528, 'House Rent', 50000, 5, 4, 1, 1, 1, 'At opposite to kalika mandir ', 28.259949, 83.593114, 3, 'No'),
-- (205, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, 'Kalika Chok', 9847030528, 'Room Rent', 5000, 2, 1, 0, 1, 1, 'At opposite of Kalika Mandir ', 28.259949, 83.593114, 3, 'No'),
-- (206, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, 'Maldhunga', 9847030528, 'Room Rent', 5000, 3, 2, 1, 1, 1, 'At opposite of Kalika Mandir ', 28.259949, 83.593114, 3, 'No');

-- -- --------------------------------------------------------

-- --
-- -- Table structure for table `admin`
-- --

-- CREATE TABLE `admin` (
--   `admin_id` int(10) NOT NULL,
--   `email` varchar(100) NOT NULL,
--   `password` varchar(100) NOT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --
-- -- Dumping data for table `admin`
-- --

-- INSERT INTO `admin` (`admin_id`, `email`, `password`) VALUES
-- (1, 'rameshbhattarai896@gmail.com', '12345');

-- -- --------------------------------------------------------

-- --
-- -- Table structure for table `booking`
-- --

-- CREATE TABLE `booking` (
--   `booking_id` int(10) NOT NULL,
--   `property_id` int(10) NOT NULL,
--   `tenant_id` int(10) NOT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --
-- -- Dumping data for table `booking`
-- --

-- INSERT INTO `booking` (`booking_id`, `property_id`, `tenant_id`) VALUES
-- (1, 120, 1),
-- (2, 172, 1),
-- (3, 172, 1),
-- (4, 19, 1),
-- (5, 178, 1),
-- (6, 142, 1),
-- (7, 119, 1),
-- (8, 182, 1),
-- (9, 91, 1),
-- (10, 91, 1);

-- -- --------------------------------------------------------

-- --
-- -- Table structure for table `chat`
-- --

-- CREATE TABLE `chat` (
--   `chatid` int(5) NOT NULL,
--   `owner_id` int(10) NOT NULL,
--   `tenant_id` int(10) NOT NULL,
--   `message` varchar(9999) NOT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
-- --
-- -------
-- INSERT INTO `chat` (`chat_id`, `owner_id`, `tenant_id` , 'message') VALUES
-- (1, 1 1,Hello),
-- (8, 10,17,Hello);



-- -- --------------------------------------------------------

-- --
-- -- Table structure for table `messages`
-- --

-- CREATE TABLE `messages` (
--   `sender_id` int(11) NOT NULL,
--   `receiver_id` int(11) NOT NULL,
--   `message_count` int(11) NOT NULL,
--   `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- -- --------------------------------------------------------

-- --
-- -- Table structure for table `owner`
-- --

-- CREATE TABLE `owner` (
--   `owner_id` int(10) NOT NULL,
--   `full_name` varchar(100) NOT NULL,
--   `email` varchar(100) NOT NULL,
--   `password` varchar(100) NOT NULL,
--   `phone_no` bigint(10) NOT NULL,
--   `address` varchar(200) NOT NULL,
--   `id_type` varchar(100) NOT NULL,
--   `id_photo` varchar(1000) NOT NULL,
--   `verification_code` text NOT NULL,
--   `otp_created_at` timestamp NOT NULL DEFAULT current_timestamp(),
--   `email_verified_at` datetime DEFAULT NULL,
--   `resetOtp` text DEFAULT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --
-- -- Dumping data for table `owner`
-- --

-- INSERT INTO `owner` (`owner_id`, `full_name`, `email`, `password`, `phone_no`, `address`, `id_type`, `id_photo`, `verification_code`, `otp_created_at`, `email_verified_at`, `resetOtp`) VALUES
-- (3, 'ramesh bhattarai', 'rameshbhattarai896@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 9867419155, 'butwal', 'Citizenship', '', '', '2024-01-08 17:27:42', '2024-01-08 23:13:04', NULL),
-- (4, 'keshab ghimire', 'keshabghimire351@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 9847030528, 'Butwal, Laxminagar', 'Driving Licence', '', '', '2024-01-09 15:20:53', '2024-01-09 21:06:11', NULL),
-- (6, 'Sunil Bhattarai', 'sunilbhattarai131@gmail.com', '$2y$12$WWPgXi7xSnjjJnv30AqMneSMbcXt7uA8Wr2vMNL19PX5PByFNjm2S', 9867543234, 'Butwal', 'Citizenship', 'owner-photo/4440932b-f894-453b-9235-577bee3d7b75-vmake-EDIT.jpg', '464151', '2024-08-19 14:12:13', '2024-08-18 19:59:19', NULL);

-- -- --------------------------------------------------------

-- --
-- -- Table structure for table `preferences`
-- --

-- CREATE TABLE `preferences` (
--   `preference_id` int(10) NOT NULL,
--   `location` varchar(100) NOT NULL,
--   `budget` int(15) DEFAULT NULL,
--   `property_type` varchar(20) NOT NULL,
--   `facility` varchar(1000) DEFAULT NULL,
--   `tenant_id` int(10) NOT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --
-- -- Dumping data for table `preferences`
-- --

-- INSERT INTO `preferences` (`preference_id`, `location`, `budget`, `property_type`, `facility`, `tenant_id`) VALUES
-- (3, 'golpark', 80000, 'room', 'wifi', 18),
-- (4, 'golpark', 300000, 'flat', 'wifi', 23);

-- -- --------------------------------------------------------

-- --
-- -- Table structure for table `property_photo`
-- --

-- CREATE TABLE `property_photo` (
--   `property_photo_id` int(1) NOT NULL,
--   `p_photo` varchar(500) NOT NULL,
--   `property_id` int(11) NOT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --
-- -- Dumping data for table `property_photo`
-- --

-- INSERT INTO `property_photo` (`property_photo_id`, `p_photo`, `property_id`) VALUES
-- (14, 'product-photo/1.jpg', 1),
-- (17, 'product-photo/112.jpg', 3),
-- (18, 'product-photo/84.jpg', 3),
-- (19, 'product-photo/12.jpg', 3),
-- (20, 'product-photo/84.jpg', 8),
-- (21, 'product-photo/102.jpg', 8),
-- (22, 'product-photo/112.jpg', 8),
-- (23, 'product-photo/12.jpg', 10),
-- (24, 'product-photo/12.jpg', 10),
-- (39, 'product-photo/80.jpg', 4),
-- (40, 'product-photo/115.jpg', 5),
-- (41, 'product-photo/118.jpg', 6),
-- (42, 'product-photo/112.jpg', 7),
-- (43, 'product-photo/123.jpg', 9),
-- (44, 'product-photo/115.jpg', 4),
-- (45, 'product-photo/123.jpg', 5),
-- (46, 'product-photo/84.jpg', 6),
-- (47, 'product-photo/84.jpg', 7),
-- (48, 'product-photo/80.jpg', 9),
-- (49, 'product-photo/123.jpg', 4),
-- (50, 'product-photo/115.jpg', 6),
-- (51, 'product-photo/118.jpg', 5),
-- (52, 'product-photo/80.jpg', 9),
-- (53, 'product-photo/38.jpg', 11),
-- (54, 'product-photo/22.jpg', 12),
-- (55, 'product-photo/120.jpg', 13),
-- (56, 'product-photo/123.jpg', 11),
-- (57, 'product-photo/44.jpg', 14),
-- (58, 'product-photo/46.jpg', 14),
-- (59, 'product-photo/120.jpg', 14),
-- (60, 'product-photo/123.jpg', 15),
-- (61, 'product-photo/38.jpg', 15),
-- (62, 'product-photo/22.jpg', 16),
-- (63, 'product-photo/120.jpg', 17),
-- (64, 'product-photo/123.jpg', 17),
-- (65, 'product-photo/42.jpg', 18),
-- (66, 'product-photo/23.jpg', 18),
-- (67, 'product-photo/27.jpg', 19),
-- (68, 'product-photo/27.jpg', 19),
-- (69, 'product-photo/38.jpg', 20),
-- (70, 'product-photo/27.jpg', 20),
-- (71, 'product-photo/27.jpg', 21),
-- (72, 'product-photo/36.jpg', 19),
-- (73, 'product-photo/38.jpg', 21),
-- (74, 'product-photo/29.jpg', 22),
-- (75, 'product-photo/120.jpg', 22),
-- (76, 'product-photo/123.jpg', 22),
-- (77, 'product-photo/38.jpg', 17),
-- (78, 'product-photo/22.jpg', 14),
-- (79, 'product-photo/120.jpg', 15),
-- (80, 'product-photo/123.jpg', 16),
-- (81, 'product-photo/115.jpg', 23),
-- (82, 'product-photo/118.jpg', 24),
-- (83, 'product-photo/112.jpg', 25),
-- (84, 'product-photo/102.jpg', 26),
-- (85, 'product-photo/103.jpg', 27),
-- (86, 'product-photo/120.jpg', 28),
-- (87, 'product-photo/80.jpg', 29),
-- (88, 'product-photo/104.jpg', 30),
-- (89, 'product-photo/123.jpg', 31),
-- (90, 'product-photo/105.jpg', 32),
-- (91, 'product-photo/112.jpg', 33),
-- (92, 'product-photo/123.jpg', 34),
-- (93, 'product-photo/120.jpg', 35),
-- (94, 'product-photo/80.jpg', 36),
-- (95, 'product-photo/84.jpg', 37),
-- (96, 'product-photo/38.jpg', 38),
-- (97, 'product-photo/106.jpg', 39),
-- (98, 'product-photo/107.jpg', 40),
-- (99, 'product-photo/22.jpg', 41),
-- (100, 'product-photo/118.jpg', 42),
-- (101, 'product-photo/115.jpg', 26),
-- (102, 'product-photo/108.jpg', 30),
-- (103, 'product-photo/109.jpg', 32),
-- (104, 'product-photo/115.jpg', 40),
-- (105, 'product-photo/137.jpg', 23),
-- (106, 'product-photo/138.jpg', 24),
-- (107, 'product-photo/139.jpg', 25),
-- (108, 'product-photo/140.jpg', 26),
-- (109, 'product-photo/143.jpg', 27),
-- (110, 'product-photo/144.jpg', 28),
-- (111, 'product-photo/145.jpg', 29),
-- (112, 'product-photo/146.jpg', 30),
-- (113, 'product-photo/147.jpg', 31),
-- (114, 'product-photo/148.jpg', 32),
-- (115, 'product-photo/149.jpg', 33),
-- (116, 'product-photo/150.jpg', 34),
-- (117, 'product-photo/151.jpg', 35),
-- (118, 'product-photo/152.jpg', 36),
-- (119, 'product-photo/153.jpg', 37),
-- (120, 'product-photo/154.jpg', 38),
-- (121, 'product-photo/156.jpg', 39),
-- (122, 'product-photo/157.jpg', 40),
-- (123, 'product-photo/158.jpg', 41),
-- (124, 'product-photo/159.jpg', 42),
-- (125, 'product-photo/160.jpg', 26),
-- (126, 'product-photo/151.jpg', 30),
-- (127, 'product-photo/152.jpg', 32),
-- (128, 'product-photo/143.jpg', 40),
-- (129, 'product-photo/154.jpg', 23),
-- (130, 'product-photo/125.jpg', 24),
-- (131, 'product-photo/116.jpg', 42),
-- (132, 'product-photo/127.jpg', 42),
-- (133, 'product-photo/88.jpg', 41),
-- (134, 'product-photo/129.jpg', 41),
-- (135, 'product-photo/115.jpg', 43),
-- (136, 'product-photo/118.jpg', 44),
-- (137, 'product-photo/112.jpg', 45),
-- (138, 'product-photo/1.jpg', 46),
-- (139, 'product-photo/12.jpg', 47),
-- (140, 'product-photo/157.jpg', 48),
-- (141, 'product-photo/80.jpg', 49),
-- (142, 'product-photo/17.jpg', 50),
-- (143, 'product-photo/123.jpg', 51),
-- (144, 'product-photo/18.jpg', 52),
-- (145, 'product-photo/145.jpg', 53),
-- (146, 'product-photo/144.jpg', 54),
-- (147, 'product-photo/120.jpg', 55),
-- (148, 'product-photo/80.jpg', 56),
-- (149, 'product-photo/84.jpg', 57),
-- (150, 'product-photo/38.jpg', 58),
-- (151, 'product-photo/115.jpg', 43),
-- (152, 'product-photo/144.jpg', 44),
-- (153, 'product-photo/145.jpg', 45),
-- (154, 'product-photo/18.jpg', 46),
-- (155, 'product-photo/146.jpg', 47),
-- (156, 'product-photo/147.jpg', 48),
-- (157, 'product-photo/148.jpg', 49),
-- (158, 'product-photo/149.jpg', 50),
-- (159, 'product-photo/153.jpg', 51),
-- (160, 'product-photo/158.jpg', 52),
-- (161, 'product-photo/144.jpg', 53),
-- (162, 'product-photo/149.jpg', 54),
-- (163, 'product-photo/152.jpg', 55),
-- (164, 'product-photo/19.jpg', 56),
-- (165, 'product-photo/84.jpg', 57),
-- (166, 'product-photo/137.jpg', 58),
-- (167, 'product-photo/115.jpg', 59),
-- (168, 'product-photo/38.jpg', 60),
-- (169, 'product-photo/42.jpg', 61),
-- (170, 'product-photo/73.jpg', 62),
-- (171, 'product-photo/63.jpg', 63),
-- (172, 'product-photo/121.jpg', 64),
-- (173, 'product-photo/8.jpg', 65),
-- (174, 'product-photo/5.jpg', 66),
-- (175, 'product-photo/123.jpg', 67),
-- (176, 'product-photo/28.jpg', 68),
-- (177, 'product-photo/112.jpg', 69),
-- (178, 'product-photo/123.jpg', 70),
-- (179, 'product-photo/120.jpg', 71),
-- (180, 'product-photo/80.jpg', 72),
-- (181, 'product-photo/84.jpg', 73),
-- (182, 'product-photo/38.jpg', 74),
-- (183, 'product-photo/37.jpg', 59),
-- (184, 'product-photo/138.jpg', 60),
-- (185, 'product-photo/139.jpg', 61),
-- (186, 'product-photo/140.jpg', 62),
-- (187, 'product-photo/142.jpg', 63),
-- (188, 'product-photo/144.jpg', 64),
-- (189, 'product-photo/80.jpg', 65),
-- (190, 'product-photo/25.jpg', 66),
-- (191, 'product-photo/145.jpg', 67),
-- (192, 'product-photo/146.jpg', 68),
-- (193, 'product-photo/157.jpg', 69),
-- (194, 'product-photo/158.jpg', 70),
-- (195, 'product-photo/160.jpg', 71),
-- (196, 'product-photo/138.jpg', 72),
-- (197, 'product-photo/155.jpg', 73),
-- (198, 'product-photo/138.jpg', 74),
-- (199, 'product-photo/45.jpg', 75),
-- (200, 'product-photo/38.jpg', 76),
-- (201, 'product-photo/42.jpg', 77),
-- (202, 'product-photo/73.jpg', 78),
-- (203, 'product-photo/63.jpg', 79),
-- (204, 'product-photo/55.jpg', 80),
-- (205, 'product-photo/9.jpg', 81),
-- (206, 'product-photo/11.jpg', 82),
-- (207, 'product-photo/19.jpg', 83),
-- (208, 'product-photo/28.jpg', 84),
-- (209, 'product-photo/100.jpg', 85),
-- (210, 'product-photo/99.jpg', 86),
-- (211, 'product-photo/98.jpg', 91),
-- (212, 'product-photo/88.jpg', 87),
-- (213, 'product-photo/86.jpg', 88),
-- (214, 'product-photo/68.jpg', 89),
-- (215, 'product-photo/75.jpg', 90),
-- (216, 'product-photo/77.jpg', 92),
-- (217, 'product-photo/74.jpg', 93),
-- (218, 'product-photo/14.jpg', 94),
-- (219, 'product-photo/139.jpg', 73),
-- (220, 'product-photo/147.jpg', 74),
-- (221, 'product-photo/158.jpg', 75),
-- (222, 'product-photo/145.jpg', 75),
-- (223, 'product-photo/138.jpg', 76),
-- (224, 'product-photo/142.jpg', 77),
-- (225, 'product-photo/143.jpg', 78),
-- (226, 'product-photo/142.jpg', 79),
-- (227, 'product-photo/155.jpg', 80),
-- (228, 'product-photo/109.jpg', 81),
-- (229, 'product-photo/111.jpg', 82),
-- (230, 'product-photo/145.jpg', 83),
-- (231, 'product-photo/139.jpg', 84),
-- (232, 'product-photo/154.jpg', 85),
-- (233, 'product-photo/136.jpg', 86),
-- (234, 'product-photo/138.jpg', 91),
-- (235, 'product-photo/139.jpg', 87),
-- (236, 'product-photo/143.jpg', 88),
-- (237, 'product-photo/144.jpg', 89),
-- (238, 'product-photo/160.jpg', 90),
-- (239, 'product-photo/143.jpg', 92),
-- (240, 'product-photo/142.jpg', 93),
-- (241, 'product-photo/147.jpg', 94),
-- (242, 'product-photo/136.jpg', 73),
-- (243, 'product-photo/153.jpg', 74),
-- (244, 'product-photo/155.jpg', 75),
-- (245, 'product-photo/1.jpg', 95),
-- (246, 'product-photo/2.jpg', 96),
-- (247, 'product-photo/3.jpg', 97),
-- (248, 'product-photo/4.jpg', 98),
-- (249, 'product-photo/5.jpg', 99),
-- (250, 'product-photo/6.jpg', 100),
-- (251, 'product-photo/7.jpg', 101),
-- (252, 'product-photo/8.jpg', 102),
-- (253, 'product-photo/9.jpg', 103),
-- (254, 'product-photo/10.jpg', 104),
-- (255, 'product-photo/11.jpg', 105),
-- (256, 'product-photo/12.jpg', 106),
-- (257, 'product-photo/13.jpg', 107),
-- (258, 'product-photo/14.jpg', 108),
-- (259, 'product-photo/15.jpg', 109),
-- (260, 'product-photo/16.jpg', 110),
-- (261, 'product-photo/17.jpg', 111),
-- (262, 'product-photo/18.jpg', 112),
-- (263, 'product-photo/19.jpg', 113),
-- (264, 'product-photo/20.jpg', 114),
-- (265, 'product-photo/21.jpg', 115),
-- (266, 'product-photo/22.jpg', 116),
-- (267, 'product-photo/23.jpg', 117),
-- (268, 'product-photo/24.jpg', 118),
-- (269, 'product-photo/25.jpg', 119),
-- (270, 'product-photo/26.jpg', 120),
-- (271, 'product-photo/27.jpg', 121),
-- (272, 'product-photo/28.jpg', 122),
-- (273, 'product-photo/29.jpg', 123),
-- (274, 'product-photo/30.jpg', 124),
-- (275, 'product-photo/31.jpg', 125),
-- (276, 'product-photo/32.jpg', 126),
-- (277, 'product-photo/33.jpg', 127),
-- (278, 'product-photo/34.jpg', 128),
-- (279, 'product-photo/35.jpg', 129),
-- (280, 'product-photo/36.jpg', 130),
-- (281, 'product-photo/137.jpg', 131),
-- (282, 'product-photo/138.jpg', 132),
-- (283, 'product-photo/139.jpg', 133),
-- (284, 'product-photo/140.jpg', 134),
-- (285, 'product-photo/141.jpg', 135),
-- (286, 'product-photo/38.jpg', 136),
-- (287, 'product-photo/39.jpg', 137),
-- (288, 'product-photo/40.jpg', 138),
-- (289, 'product-photo/41.jpg', 139),
-- (290, 'product-photo/42.jpg', 140),
-- (291, 'product-photo/43.jpg', 141),
-- (292, 'product-photo/44.jpg', 142),
-- (293, 'product-photo/45.jpg', 143),
-- (294, 'product-photo/46.jpg', 144),
-- (295, 'product-photo/47.jpg', 145),
-- (296, 'product-photo/48.jpg', 146),
-- (297, 'product-photo/49.jpg', 147),
-- (298, 'product-photo/50.jpg', 148),
-- (299, 'product-photo/51.jpg', 149),
-- (300, 'product-photo/52.jpg', 150),
-- (301, 'product-photo/53.jpg', 151),
-- (302, 'product-photo/54.jpg', 152),
-- (303, 'product-photo/55.jpg', 153),
-- (304, 'product-photo/55.jpg', 154),
-- (305, 'product-photo/56.jpg', 155),
-- (306, 'product-photo/57.jpg', 156),
-- (307, 'product-photo/58.jpg', 157),
-- (308, 'product-photo/59.jpg', 158),
-- (309, 'product-photo/60.jpg', 159),
-- (310, 'product-photo/61.jpg', 160),
-- (311, 'product-photo/62.jpg', 161),
-- (312, 'product-photo/63.jpg', 162),
-- (313, 'product-photo/64.jpg', 163),
-- (314, 'product-photo/65.jpg', 164),
-- (315, 'product-photo/66.jpg', 165),
-- (316, 'product-photo/67.jpg', 166),
-- (317, 'product-photo/68.jpg', 167),
-- (318, 'product-photo/69.jpg', 168),
-- (319, 'product-photo/70.jpg', 169),
-- (320, 'product-photo/71.jpg', 170),
-- (321, 'product-photo/72.jpg', 171),
-- (322, 'product-photo/73.jpg', 172),
-- (323, 'product-photo/74.jpg', 173),
-- (324, 'product-photo/75.jpg', 174),
-- (325, 'product-photo/76.jpg', 175),
-- (326, 'product-photo/137.jpg', 95),
-- (327, 'product-photo/143.jpg', 96),
-- (328, 'product-photo/135.jpg', 97),
-- (329, 'product-photo/144.jpg', 98),
-- (330, 'product-photo/167.jpg', 99),
-- (331, 'product-photo/159.jpg', 100),
-- (332, 'product-photo/148.jpg', 101),
-- (333, 'product-photo/135.jpg', 102),
-- (334, 'product-photo/138.jpg', 103),
-- (335, 'product-photo/145.jpg', 104),
-- (336, 'product-photo/151.jpg', 105),
-- (337, 'product-photo/155.jpg', 106),
-- (338, 'product-photo/136.jpg', 107),
-- (339, 'product-photo/147.jpg', 108),
-- (340, 'product-photo/154.jpg', 109),
-- (341, 'product-photo/160.jpg', 110),
-- (342, 'product-photo/145,jpg', 111),
-- (343, 'product-photo/148.jpg', 112),
-- (344, 'product-photo/139.jpg', 113),
-- (345, 'product-photo/120.jpg', 114),
-- (346, 'product-photo/121.jpg', 115),
-- (347, 'product-photo/142.jpg', 116),
-- (348, 'product-photo/143.jpg', 117),
-- (349, 'product-photo/144.jpg', 118),
-- (350, 'product-photo/125.jpg', 119),
-- (351, 'product-photo/136.jpg', 120),
-- (352, 'product-photo/157.jpg', 121),
-- (353, 'product-photo/158.jpg', 122),
-- (354, 'product-photo/159.jpg', 123),
-- (355, 'product-photo/130.jpg', 124),
-- (356, 'product-photo/144.jpg', 125),
-- (357, 'product-photo/147.jpg', 126),
-- (358, 'product-photo/148.jpg', 127),
-- (359, 'product-photo/149.jpg', 128),
-- (360, 'product-photo/146.jpg', 129),
-- (361, 'product-photo/160.jpg', 130),
-- (362, 'product-photo/137.jpg', 131),
-- (363, 'product-photo/138.jpg', 132),
-- (364, 'product-photo/139.jpg', 133),
-- (365, 'product-photo/140.jpg', 134),
-- (366, 'product-photo/141.jpg', 135),
-- (367, 'product-photo/138,jpg', 136),
-- (368, 'product-photo/139.jpg', 137),
-- (369, 'product-photo/140.jpg', 138),
-- (370, 'product-photo/141.jpg', 139),
-- (371, 'product-photo/142.jpg', 140),
-- (372, 'product-photo/143.jpg', 141),
-- (373, 'product-photo/144.jpg', 142),
-- (374, 'product-photo/145.jpg', 143),
-- (375, 'product-photo/146.jpg', 144),
-- (376, 'product-photo/147.jpg', 145),
-- (377, 'product-photo/148.jpg', 146),
-- (378, 'product-photo/149.jpg', 147),
-- (379, 'product-photo/150.jpg', 148),
-- (380, 'product-photo/151.jpg', 149),
-- (381, 'product-photo/152.jpg', 150),
-- (382, 'product-photo/153.jpg', 151),
-- (383, 'product-photo/154.jpg', 152),
-- (384, 'product-photo/155.jpg', 153),
-- (385, 'product-photo/155.jpg', 154),
-- (386, 'product-photo/156.jpg', 155),
-- (387, 'product-photo/157.jpg', 156),
-- (388, 'product-photo/158.jpg', 157),
-- (389, 'product-photo/159.jpg', 158),
-- (390, 'product-photo/160.jpg', 159),
-- (391, 'product-photo/137.jpg', 160),
-- (392, 'product-photo/138.jpg', 161),
-- (393, 'product-photo/133.jpg', 162),
-- (394, 'product-photo/144.jpg', 163),
-- (395, 'product-photo/145.jpg', 164),
-- (396, 'product-photo/136.jpg', 165),
-- (397, 'product-photo/137.jpg', 166),
-- (398, 'product-photo/138.jpg', 167),
-- (399, 'product-photo/139.jpg', 168),
-- (400, 'product-photo/140.jog', 169),
-- (401, 'product-photo/151.jpg', 170),
-- (402, 'product-photo/152.jpg', 171),
-- (403, 'product-photo/153.jpg', 172),
-- (404, 'product-photo/144.jpg', 173),
-- (405, 'product-photo/155.jpg', 174),
-- (406, 'product-photo/156.jpg', 175),
-- (407, 'product-photo/1.jpg', 95),
-- (408, 'product-photo/2.jpg', 96),
-- (409, 'product-photo/3.jpg', 97),
-- (410, 'product-photo/4.jpg', 98),
-- (411, 'product-photo/5.jpg', 99),
-- (412, 'product-photo/6.jpg', 100),
-- (413, 'product-photo/7.jpg', 101),
-- (414, 'product-photo/8.jpg', 102),
-- (415, 'product-photo/9.jpg', 103),
-- (416, 'product-photo/10.jpg', 104),
-- (417, 'product-photo/11.jpg', 105),
-- (418, 'product-photo/12.jpg', 106),
-- (419, 'product-photo/13.jpg', 107),
-- (420, 'product-photo/14.jpg', 108),
-- (421, 'product-photo/15.jpg', 109),
-- (422, 'product-photo/16.jpg', 110),
-- (423, 'product-photo/17,jpg', 111),
-- (424, 'product-photo/18.jpg', 112),
-- (425, 'product-photo/19.jpg', 113),
-- (426, 'product-photo/20.jpg', 114),
-- (427, 'product-photo/21.jpg', 115),
-- (428, 'product-photo/22.jpg', 116),
-- (429, 'product-photo/23.jpg', 117),
-- (430, 'product-photo/24.jpg', 118),
-- (431, 'product-photo/25.jpg', 119),
-- (432, 'product-photo/26.jpg', 120),
-- (433, 'product-photo/27.jpg', 121),
-- (434, 'product-photo/28.jpg', 122),
-- (435, 'product-photo/29.jpg', 123),
-- (436, 'product-photo/30.jpg', 124),
-- (437, 'product-photo/31.jog', 125),
-- (438, 'product-photo/32.jpg', 126),
-- (439, 'product-photo/33.jpg', 127),
-- (440, 'product-photo/34.jpg', 128),
-- (441, 'product-photo/35.jpg', 129),
-- (442, 'product-photo/36.jpg', 130),
-- (443, 'product-photo/137.jpg', 131),
-- (444, 'product-photo/138.jpg', 132),
-- (445, 'product-photo/139.jpg', 133),
-- (446, 'product-photo/140.jpg', 134),
-- (447, 'product-photo/141.jpg', 135),
-- (448, 'product-photo/38,jpg', 136),
-- (449, 'product-photo/39.jpg', 137),
-- (450, 'product-photo/40.jpg', 138),
-- (451, 'product-photo/41.jpg', 139),
-- (452, 'product-photo/42.jpg', 140),
-- (453, 'product-photo/43.jpg', 141),
-- (454, 'product-photo/44.jpg', 142),
-- (455, 'product-photo/45.jpg', 143),
-- (456, 'product-photo/46.jpg', 144),
-- (457, 'product-photo/47.jpg', 145),
-- (458, 'product-photo/48.jpg', 146),
-- (459, 'product-photo/49.jpg', 147),
-- (460, 'product-photo/50.jpg', 148),
-- (461, 'product-photo/51.jpg', 149),
-- (462, 'product-photo/52.jpg', 150),
-- (463, 'product-photo/53.jpg', 151),
-- (464, 'product-photo/54.jpg', 152),
-- (465, 'product-photo/55.jpg', 153),
-- (466, 'product-photo/55.jpg', 154),
-- (467, 'product-photo/56.jpg', 155),
-- (468, 'product-photo/57.jpg', 156),
-- (469, 'product-photo/58.jpg', 157),
-- (470, 'product-photo/59.jpg', 158),
-- (471, 'product-photo/60.jpg', 159),
-- (472, 'product-photo/61.jpg', 160),
-- (473, 'product-photo/62.jpg', 161),
-- (474, 'product-photo/63.jpg', 162),
-- (475, 'product-photo/64.jpg', 163),
-- (476, 'product-photo/65.jpg', 164),
-- (477, 'product-photo/66.jpg', 165),
-- (478, 'product-photo/67.jpg', 166),
-- (479, 'product-photo/68.jpg', 167),
-- (480, 'product-photo/69.jpg', 168),
-- (481, 'product-photo/70.jpg', 169),
-- (482, 'product-photo/71.jpg', 170),
-- (483, 'product-photo/72.jpg', 171),
-- (484, 'product-photo/73.jpg', 172),
-- (485, 'product-photo/74.jpg', 173),
-- (486, 'product-photo/75.jpg', 174),
-- (487, 'product-photo/76.jpg', 175),
-- (488, 'product-photo/137.jpg', 95),
-- (489, 'product-photo/143.jpg', 96),
-- (490, 'product-photo/135.jpg', 97),
-- (491, 'product-photo/144.jpg', 98),
-- (492, 'product-photo/167.jpg', 99),
-- (493, 'product-photo/159.jpg', 100),
-- (494, 'product-photo/148.jpg', 101),
-- (495, 'product-photo/135.jpg', 102),
-- (496, 'product-photo/138.jpg', 103),
-- (497, 'product-photo/145.jpg', 104),
-- (498, 'product-photo/151.jpg', 105),
-- (499, 'product-photo/155.jpg', 106),
-- (500, 'product-photo/136.jpg', 107),
-- (501, 'product-photo/147.jpg', 108),
-- (502, 'product-photo/154.jpg', 109),
-- (503, 'product-photo/160.jpg', 110),
-- (504, 'product-photo/145.jpg', 111),
-- (505, 'product-photo/148.jpg', 112),
-- (506, 'product-photo/139.jpg', 113),
-- (507, 'product-photo/120.jpg', 114),
-- (508, 'product-photo/121.jpg', 115),
-- (509, 'product-photo/142.jpg', 116),
-- (510, 'product-photo/143.jpg', 117),
-- (511, 'product-photo/144.jpg', 118),
-- (512, 'product-photo/125.jpg', 119),
-- (513, 'product-photo/136.jpg', 120),
-- (514, 'product-photo/157.jpg', 121),
-- (515, 'product-photo/158.jpg', 122),
-- (516, 'product-photo/159.jpg', 123),
-- (517, 'product-photo/130.jpg', 124),
-- (518, 'product-photo/144.jpg', 125),
-- (519, 'product-photo/147.jpg', 126),
-- (520, 'product-photo/148.jpg', 127),
-- (521, 'product-photo/149.jpg', 128),
-- (522, 'product-photo/146.jpg', 129),
-- (523, 'product-photo/160.jpg', 130),
-- (524, 'product-photo/137.jpg', 131),
-- (525, 'product-photo/138.jpg', 132),
-- (526, 'product-photo/139.jpg', 133),
-- (527, 'product-photo/140.jpg', 134),
-- (528, 'product-photo/141.jpg', 135),
-- (529, 'product-photo/138.jpg', 136),
-- (530, 'product-photo/139.jpg', 137),
-- (531, 'product-photo/140.jpg', 138),
-- (532, 'product-photo/141.jpg', 139),
-- (533, 'product-photo/142.jpg', 140),
-- (534, 'product-photo/143.jpg', 141),
-- (535, 'product-photo/144.jpg', 142),
-- (536, 'product-photo/145.jpg', 143),
-- (537, 'product-photo/146.jpg', 144),
-- (538, 'product-photo/147.jpg', 145),
-- (539, 'product-photo/148.jpg', 146),
-- (540, 'product-photo/149.jpg', 147),
-- (541, 'product-photo/150.jpg', 148),
-- (542, 'product-photo/151.jpg', 149),
-- (543, 'product-photo/152.jpg', 150),
-- (544, 'product-photo/153.jpg', 176),
-- (545, 'product-photo/154.jpg', 177),
-- (546, 'product-photo/155.jpg', 178),
-- (547, 'product-photo/155.jpg', 179),
-- (548, 'product-photo/156.jpg', 180),
-- (549, 'product-photo/157.jpg', 181),
-- (550, 'product-photo/158.jpg', 182),
-- (551, 'product-photo/159.jpg', 183),
-- (552, 'product-photo/160.jpg', 184),
-- (553, 'product-photo/137.jpg', 185),
-- (554, 'product-photo/138.jpg', 186),
-- (555, 'product-photo/133.jpg', 187),
-- (556, 'product-photo/144.jpg', 189),
-- (557, 'product-photo/145.jpg', 190),
-- (558, 'product-photo/136.jpg', 191),
-- (559, 'product-photo/137.jpg', 192),
-- (560, 'product-photo/138.jpg', 193),
-- (561, 'product-photo/139.jpg', 194),
-- (562, 'product-photo/140.jpg', 195),
-- (563, 'product-photo/151.jpg', 196),
-- (564, 'product-photo/152.jpg', 196),
-- (565, 'product-photo/153.jpg', 198),
-- (566, 'product-photo/144.jpg', 197),
-- (567, 'product-photo/155.jpg', 199),
-- (568, 'product-photo/156.jpg', 200),
-- (569, 'product-photo/7.jpg', 201),
-- (570, 'product-photo/8.jpg', 202),
-- (571, 'product-photo/9.jpg', 203),
-- (572, 'product-photo/10.jpg', 204),
-- (573, 'product-photo/11.jpg', 205),
-- (574, 'product-photo/12.jpg', 206),
-- (575, 'product-photo/12.jpg', 188);

-- -- --------------------------------------------------------

-- --
-- -- Table structure for table `review`
-- --

-- CREATE TABLE `review` (
--   `review_id` int(10) NOT NULL,
--   `comment` varchar(500) NOT NULL,
--   `rating` int(5) NOT NULL,
--   `property_id` int(11) NOT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --
-- -- Dumping data for table `review`
-- --

-- INSERT INTO `review` (`review_id`, `comment`, `rating`, `property_id`) VALUES
-- (10, 'excellent', 4, 160),
-- (11, 'excellent', 4, 160),
-- (12, 'excellent', 4, 160);

-- -- --------------------------------------------------------

-- --
-- -- Table structure for table `tenant`
-- --

-- CREATE TABLE `tenant` (
--   `tenant_id` int(10) NOT NULL,
--   `full_name` varchar(100) NOT NULL,
--   `email` varchar(100) NOT NULL,
--   `password` varchar(100) NOT NULL,
--   `phone_no` bigint(10) NOT NULL,
--   `address` varchar(200) NOT NULL,
--   `id_type` varchar(100) NOT NULL,
--   `id_photo` varchar(1000) NOT NULL,
--   `verification_code` text NOT NULL,
--   `otp_created_at` timestamp NOT NULL DEFAULT current_timestamp(),
--   `email_verified_at` datetime DEFAULT NULL,
--   `resetOtp` text DEFAULT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --
-- -- Dumping data for table `tenant`
-- --

-- INSERT INTO `tenant` (`tenant_id`, `full_name`, `email`, `password`, `phone_no`, `address`, `id_type`, `id_photo`, `verification_code`, `otp_created_at`, `email_verified_at`, `resetOtp`) VALUES
-- (1, 'ramesh bhattarai', 'rameshbhattarai896@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 9867419155, 'butwal', 'Citizenship', '', '343249', '2024-01-08 17:10:31', '2024-01-08 22:55:52', NULL),
-- (23, 'Sunil Bhattarai', 'sunilbhattarai131@gmail.com', '$2y$12$vDTavGJLczPuGWclNwNQF.mFxVgdsJXkFu/Y4Qxt5Scs4xMI2iJPa', 9867543234, 'Butwal', 'Citizenship', 'tenant-photo/Screenshot 2024-08-06 211002.png', '254441', '2024-08-18 17:37:54', '2024-08-18 23:23:06', NULL),
-- (25, 'Sunil Bhattarai', 'sunilbhattarai131@gmail.com', '$2y$12$xBXVcIAYXeX5KkFheLJE3us3Y/QD5lBhkadEq6ll0Uckl85tRtZ.2', 9867543234, 'Butwal', 'Citizenship', 'tenant-photo/4440932b-f894-453b-9235-577bee3d7b75-vmake-EDIT.jpg', '319011', '2024-08-19 14:03:04', '2024-08-19 12:01:50', NULL);

-- --
-- -- Indexes for dumped tables
-- --

-- --
-- -- Indexes for table `add_property`
-- --
-- ALTER TABLE `add_property`
--   ADD PRIMARY KEY (`property_id`),
--   ADD KEY `owner_id` (`owner_id`);

-- --
-- -- Indexes for table `admin`
-- --
-- ALTER TABLE `admin`
--   ADD PRIMARY KEY (`admin_id`);

-- --
-- -- Indexes for table `booking`
-- --
-- ALTER TABLE `booking`
--   ADD PRIMARY KEY (`booking_id`);

-- --
-- -- Indexes for table `chat`
-- --
-- ALTER TABLE `chat`
--   ADD PRIMARY KEY (`chatid`);

-- --
-- -- Indexes for table `owner`
-- --
-- ALTER TABLE `owner`
--   ADD PRIMARY KEY (`owner_id`);

-- --
-- -- Indexes for table `preferences`
-- --
-- ALTER TABLE `preferences`
--   ADD PRIMARY KEY (`preference_id`);

-- --
-- -- Indexes for table `property_photo`
-- --
-- ALTER TABLE `property_photo`
--   ADD PRIMARY KEY (`property_photo_id`),
--   ADD KEY `property_id` (`property_id`);

-- --
-- -- Indexes for table `review`
-- --
-- ALTER TABLE `review`
--   ADD PRIMARY KEY (`review_id`),
--   ADD KEY `property_id` (`property_id`);

-- --
-- -- Indexes for table `tenant`
-- --
-- ALTER TABLE `tenant`
--   ADD PRIMARY KEY (`tenant_id`);

-- --
-- -- AUTO_INCREMENT for dumped tables
-- --

-- --
-- -- AUTO_INCREMENT for table `add_property`
-- --
-- ALTER TABLE `add_property`
--   MODIFY `property_id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=207;

-- --
-- -- AUTO_INCREMENT for table `admin`
-- --
-- ALTER TABLE `admin`
--   MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

-- --
-- -- AUTO_INCREMENT for table `booking`
-- --
-- ALTER TABLE `booking`
--   MODIFY `booking_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

-- --
-- -- AUTO_INCREMENT for table `chat`
-- --
-- ALTER TABLE `chat`
--   MODIFY `chatid` int(5) NOT NULL AUTO_INCREMENT;

-- --
-- -- AUTO_INCREMENT for table `owner`
-- --
-- ALTER TABLE `owner`
--   MODIFY `owner_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

-- --
-- -- AUTO_INCREMENT for table `preferences`
-- --
-- ALTER TABLE `preferences`
--   MODIFY `preference_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

-- --
-- -- AUTO_INCREMENT for table `property_photo`
-- --
-- ALTER TABLE `property_photo`
--   MODIFY `property_photo_id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=576;

-- --
-- -- AUTO_INCREMENT for table `review`
-- --
-- ALTER TABLE `review`
--   MODIFY `review_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

-- --
-- -- AUTO_INCREMENT for table `tenant`
-- --
-- ALTER TABLE `tenant`
--   MODIFY `tenant_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
-- COMMIT;

-- /*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
-- /*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
-- /*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2024 at 12:15 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simplirentrps`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_property`
--

CREATE TABLE `add_property` (
  `property_id` int(1) NOT NULL,
  `country` varchar(50) NOT NULL,
  `province` varchar(50) NOT NULL,
  `zone` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `city` varchar(100) NOT NULL,
  `vdc_municipality` varchar(50) NOT NULL,
  `ward_no` int(10) NOT NULL,
  `tole` varchar(100) NOT NULL,
  `contact_no` bigint(10) NOT NULL,
  `property_type` varchar(50) NOT NULL,
  `estimated_price` bigint(10) NOT NULL,
  `total_rooms` int(10) NOT NULL,
  `bedroom` int(10) NOT NULL,
  `living_room` int(10) NOT NULL,
  `kitchen` int(10) NOT NULL,
  `bathroom` int(10) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `latitude` decimal(9,6) NOT NULL,
  `longitude` decimal(9,6) NOT NULL,
  `owner_id` int(10) NOT NULL,
  `booked` varchar(10) DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_property`
--

INSERT INTO `add_property` (`property_id`, `country`, `province`, `zone`, `district`, `city`, `vdc_municipality`, `ward_no`, `tole`, `contact_no`, `property_type`, `estimated_price`, `total_rooms`, `bedroom`, `living_room`, `kitchen`, `bathroom`, `description`, `latitude`, `longitude`, `owner_id`, `booked`) VALUES
(1, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Rupandehi', 'Butwal', 'Municipality', 11, 'Laxminagar', 9847030528, 'Flat Rent', 12000, 3, 1, 1, 1, 1, 'Near to the white Rose Academy', 27.700001, 83.466003, 4, 'No'),
(3, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Rupandehi', 'Butwal', 'Municipality', 4, 'Golpark', 9847030528, 'Room Rent', 5000, 2, 1, 0, 0, 1, 'contact me for detail', 27.700001, 83.466003, 3, 'No'),
(4, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Rupandehi', 'Butwal', 'Municipality', 4, 'Milanchowk', 9867419155, 'Flat Rent', 15000, 5, 2, 1, 1, 1, 'contact me for detail', 27.700001, 83.466003, 3, 'No'),
(5, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Rupandehi', 'Butwal', 'Municipality', 4, 'Golpark', 9847030528, 'Flat Rent', 10000, 3, 1, 1, 0, 1, 'contact me for detail', 27.700001, 83.466003, 3, 'No'),
(6, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Rupandehi', 'Butwal', 'Municipality', 4, 'Golpark', 9867419155, 'flat Rent', 5000, 3, 1, 1, 0, 1, 'contact me for detail', 27.700001, 83.466003, 3, 'No'),
(7, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Rupandehi', 'Butwal', 'Municipality', 4, 'kalikanagar', 9804400463, 'Flat Rent', 15000, 3, 1, 1, 0, 1, 'contact me for detail', 27.678549, 83.455625, 3, 'No'),
(8, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Rupandehi', 'Butwal', 'Municipality', 4, 'kalikanagar', 9804400463, 'Room Rent', 4500, 2, 1, 0, 0, 1, 'contact me for detail', 27.678549, 83.455625, 3, 'No'),
(9, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Rupandehi', 'Butwal', 'Municipality', 4, 'devinagar', 9847030528, 'flat Rent', 4000, 1, 0, 0, 0, 1, 'contact me for detail', 27.810911, 83.699358, 3, 'No'),
(10, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Rupandehi', 'Butwal', 'Municipality', 4, 'traffic chowk', 9847030528, 'Room Rent', 5500, 1, 0, 0, 0, 0, 'contact me for detail', 27.700001, 83.466003, 3, 'No'),
(11, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Rupandehi', 'Butwal', 'Municipality', 4, 'kalikanagar', 9847030528, 'Room Rent', 7000, 3, 1, 0, 0, 0, 'contact me for detail', 27.678549, 83.455625, 4, 'No'),
(12, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Rupandehi', 'Butwal', 'Municipality', 4, 'Golpark', 9847030528, 'Room Rent', 6000, 3, 1, 1, 0, 1, 'contact me for detail', 27.700001, 83.466003, 3, 'No'),
(13, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Rupandehi', 'Butwal', 'Municipality', 4, 'Golpark', 9847030528, 'Room Rent', 3000, 1, 0, 0, 0, 0, 'contact me for detail', 27.700001, 83.466003, 3, 'No'),
(14, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Palpa', 'Tansen', 'Municipality', 7, 'kailashnagar', 9867419155, 'House Rent', 17000, 7, 4, 1, 1, 1, 'contact me for detail', 27.522400, 83.321100, 3, 'No'),
(15, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Palpa', 'Tansen', 'Municipality', 7, 'kailashnagar', 9867419155, 'Room Rent', 7000, 3, 1, 1, 0, 1, 'contact me for detail', 27.522400, 83.321100, 3, 'No'),
(16, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Palpa', 'Tansen', 'Municipality', 7, 'kailashnagar', 9804400463, 'Flat  Rent', 10000, 5, 2, 1, 1, 1, 'contact me for detail', 27.522430, 83.321200, 3, 'No'),
(17, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Palpa', 'Tansen', 'Municipality', 10, 'Bus park', 9867419155, 'House Rent', 15000, 6, 3, 1, 1, 1, 'contact me for detail', 27.515200, 83.324800, 3, 'No'),
(18, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Palpa', 'Tansen', 'Municipality', 7, 'Bus park', 9867419155, 'Room Rent', 7000, 3, 1, 1, 0, 1, 'contact me for detail', 27.522400, 83.321100, 3, 'No'),
(19, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Palpa', 'Tansen', 'Municipality', 10, 'kailashnagar', 9804400463, 'Flat  Rent', 10000, 5, 2, 1, 1, 1, 'contact me for detail', 27.522430, 83.321200, 3, 'Yes'),
(20, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Palpa', 'Tansen', 'Municipality', 10, 'Pravash', 9867419155, 'Flat Rent', 14000, 5, 2, 1, 1, 1, 'contact me for detail', 27.503800, 83.324400, 3, 'No'),
(21, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Palpa', 'Tansen', 'Municipality', 10, 'Pravash', 9867419155, 'House Rent', 20000, 6, 3, 1, 1, 1, 'contact me for detail', 27.503800, 83.324400, 3, 'No'),
(22, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Palpa', 'Tansen', 'Municipality', 10, 'Pravash', 9867419155, 'Room Rent', 7000, 3, 1, 1, 0, 1, 'contact me for detail', 27.522400, 83.321100, 3, 'No'),
(23, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Gulmi', 'Resunga', 'Tamghas', 1, 'Udindhunga', 9847030528, 'Flat Rent', 12000, 3, 1, 1, 1, 1, 'Near to Resunga secondary school ', 28.067826, 83.211564, 4, 'No'),
(24, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Gulmi', 'Resunga', 'Tamghas', 1, 'Baghmare', 9847030528, 'Room Rent', 12000, 1, 0, 0, 0, 1, 'Near to Petrol pump ', 28.067826, 83.211564, 4, 'No'),
(25, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Gulmi', 'Resunga', 'Tamghas', 1, 'Chidichaur', 9847030528, 'Room Rent', 12000, 1, 0, 0, 0, 1, 'Near to Mahendra model secondary school ', 28.067826, 83.211564, 4, 'No'),
(26, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Gulmi', 'Resunga', 'Tamghas', 4, 'Deurali', 9847030528, 'House Rent', 25000, 6, 4, 1, 1, 2, 'Front to the police bit ', 28.067826, 83.211564, 4, 'No'),
(27, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Gulmi', 'Resunga', 'Tamghas', 1, 'Udindhunga', 9847030528, 'Flat Rent', 12000, 3, 1, 1, 1, 1, 'Near to Resunga secondary school ', 28.067826, 83.211564, 4, 'No'),
(28, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Gulmi', 'Resunga', 'Tamghas', 1, 'Baghmare', 9847030528, 'Room Rent', 12000, 1, 0, 0, 0, 1, 'Near to Petrol pump ', 28.067826, 83.211564, 4, 'No'),
(29, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Gulmi', 'Resunga', 'Tamghas', 1, 'Chidichaur', 9847030528, 'Room Rent', 12000, 1, 0, 0, 0, 1, 'Near to Mahendra model secondary school ', 28.067826, 83.211564, 4, 'No'),
(30, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Gulmi', 'Resunga', 'Tamghas', 4, 'Deurali', 9847030528, 'House Rent', 25000, 6, 4, 1, 1, 2, 'Front to the police bit ', 28.067826, 83.211564, 4, 'No'),
(31, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Gulmi', 'Resunga', 'Tamghas', 1, 'Chidichaur', 9847030528, 'Room Rent', 12000, 1, 0, 0, 0, 1, 'Near to Mahendra model secondary school ', 28.067826, 83.211564, 4, 'No'),
(32, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Gulmi', 'Resunga', 'Tamghas', 4, 'Deurali', 9847030528, 'House Rent', 25000, 6, 4, 1, 1, 2, 'Front to the police bit ', 28.067826, 83.211564, 4, 'No'),
(33, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Kathmandu', 'Kathmandu', 'Municipality', 4, 'Kalanki', 9847030528, 'Flat Rent', 15000, 3, 1, 1, 1, 1, 'Only for family of member less than5', 27.693181, 85.271917, 4, 'No'),
(34, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Kathmandu', 'Kathmandu', 'Municipality', 4, 'Kalanki', 9847030528, 'Flat Rent', 15000, 3, 1, 1, 1, 1, 'Only for family of member less than5', 27.693181, 85.271917, 4, 'No'),
(35, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Kathmandu', 'Kathmandu', 'Municipality', 4, 'Baudhha', 9847030528, 'Room Rent', 5000, 1, 0, 0, 0, 1, 'Available for the students', 27.723176, 85.349522, 4, 'No'),
(36, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Kathmandu', 'Kathmandu', 'Municipality', 4, 'Bauddha', 9847030528, 'Flat Rent', 15000, 3, 1, 1, 1, 1, 'Near chaitya', 27.723176, 85.349522, 4, 'No'),
(37, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Kathmandu', 'Kathmandu', 'Municipality', 4, 'Kalanki', 9847030528, 'Room Rent', 4500, 1, 0, 0, 0, 1, 'Available for the students', 27.693181, 85.271917, 4, 'No'),
(38, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Kathmandu', 'Kathmandu', 'Municipality', 4, 'Kalanki', 9847030528, 'Room Rent', 4500, 1, 0, 0, 0, 1, 'Available for the students', 27.693181, 85.271917, 4, 'No'),
(39, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Lalitpur', 'Lalitpur', 'Municipality', 4, 'Gwarko', 9847030528, 'House Rent', 120000, 12, 3, 7, 2, 4, 'Near to Gwarko Chok', 27.666497, 85.329770, 4, 'No'),
(40, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Lalitpur', 'Lalitpur', 'Municipality', 4, 'Gwarko', 9847030528, 'House Rent', 4500, 12, 3, 7, 2, 4, 'West from Gwarko chok', 27.666497, 85.329770, 4, 'No'),
(41, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Lalitpur', 'Lalitpur', 'Municipality', 4, 'Gwarko', 9847030528, 'Room Rent', 4500, 1, 0, 0, 0, 1, 'Available for the students', 27.666497, 85.329770, 4, 'No'),
(42, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Lalitpur', 'Lalitpur', 'Municipality', 4, 'Imadol', 9847030528, 'Room Rent', 4500, 1, 0, 0, 0, 1, 'Available for the students', 27.666497, 85.329770, 4, 'No'),
(43, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'Flat Rent', 15000, 3, 2, 1, 1, 1, 'At Lake Side ', 28.208606, 83.960066, 4, 'No'),
(44, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, 'Kalika Chok', 9847030528, 'Flat Rent', 15000, 3, 2, 1, 1, 1, 'At opposite of Kalika Mandir ', 28.259949, 83.593114, 4, 'No'),
(45, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, ' Maldhunga', 9847030528, 'Flat Rent', 15000, 3, 2, 1, 1, 1, 'Near to the Kalika Temple ', 28.259949, 83.593114, 4, 'No'),
(46, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, 'Kalika Chok', 9847030528, 'House Rent', 50000, 5, 4, 1, 1, 1, 'At opposite to kalika mandir ', 28.259949, 83.593114, 4, 'No'),
(47, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, 'Maldhung', 9847030528, 'House Rent', 50000, 5, 4, 1, 1, 1, 'At opposite to kalika mandir ', 28.259949, 83.593114, 4, 'No'),
(48, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, 'Kalika Chok', 9847030528, 'Room Rent', 5000, 2, 1, 0, 1, 1, 'At opposite of Kalika Mandir ', 28.259949, 83.593114, 4, 'No'),
(49, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, 'Maldhunga', 9847030528, 'Room Rent', 5000, 3, 2, 1, 1, 1, 'At opposite of Kalika Mandir ', 28.259949, 83.593114, 4, 'No'),
(50, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Flat Rent', 14000, 3, 1, 1, 1, 1, 'Near to Prithvi chok', 28.202995, 83.974005, 4, 'No'),
(51, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Flat Rent', 15000, 4, 2, 1, 1, 1, 'Near to Prithvi chok', 28.202995, 83.974005, 4, 'No'),
(52, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Room Rent', 4000, 1, 1, 0, 0, 1, 'Near to Prithvi chok ', 28.202995, 83.974005, 4, 'No'),
(53, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Flat Rent', 14000, 3, 1, 1, 1, 1, 'Near to Birendra chok ', 28.202995, 83.974005, 4, 'No'),
(54, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Room Rent', 5400, 1, 1, 0, 1, 1, 'Near to Birendra chok ', 28.202995, 83.974005, 4, 'No'),
(55, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'Room Rent', 5400, 1, 1, 0, 1, 1, 'At Lake side ', 28.208606, 83.960066, 4, 'No'),
(56, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'Room Rent', 4500, 1, 1, 0, 0, 1, 'At Lake Side ', 28.208606, 83.960066, 4, 'No'),
(57, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'House Rent', 75000, 7, 2, 6, 2, 1, 'At Lake Side ', 28.208606, 83.960066, 4, 'No'),
(58, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'House Rent', 75000, 7, 2, 6, 2, 1, 'At Lake Side ', 28.208606, 83.960066, 4, 'No'),
(59, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Flat Rent', 14000, 3, 1, 1, 1, 1, 'Near to Prithvi chok', 28.202995, 83.974005, 4, 'No'),
(60, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Flat Rent', 15000, 4, 2, 1, 1, 1, 'Near to Prithvi chok', 28.202995, 83.974005, 4, 'No'),
(61, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Room Rent', 4000, 1, 1, 0, 0, 1, 'Near to Prithvi chok ', 28.202995, 83.974005, 4, 'No'),
(62, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Flat Rent', 14000, 3, 1, 1, 1, 1, 'Near to Birendra chok ', 28.202995, 83.974005, 4, 'No'),
(63, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Room Rent', 5400, 1, 1, 0, 1, 1, 'Near to Birendra chok ', 28.202995, 83.974005, 4, 'No'),
(64, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'Room Rent', 5400, 1, 1, 0, 1, 1, 'At Lake side ', 28.208606, 83.960066, 4, 'No'),
(65, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'Room Rent', 4500, 1, 1, 0, 0, 1, 'At Lake Side ', 28.208606, 83.960066, 4, 'No'),
(66, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'House Rent', 75000, 7, 2, 6, 2, 1, 'At Lake Side ', 28.208606, 83.960066, 4, 'No'),
(67, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'House Rent', 75000, 7, 2, 6, 2, 1, 'At Lake Side ', 28.208606, 83.960066, 4, 'No'),
(68, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'Flat Rent', 15000, 3, 2, 1, 1, 1, 'At Lake Side ', 28.208606, 83.960066, 4, 'No'),
(69, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, 'Kalika Chok', 9847030528, 'Flat Rent', 15000, 3, 2, 1, 1, 1, 'At opposite of Kalika Mandir ', 28.259949, 83.593114, 4, 'No'),
(70, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, ' Maldhunga', 9847030528, 'Flat Rent', 15000, 3, 2, 1, 1, 1, 'Near to the Kalika Temple ', 28.259949, 83.593114, 4, 'No'),
(71, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, 'Kalika Chok', 9847030528, 'House Rent', 50000, 5, 4, 1, 1, 1, 'At opposite to kalika mandir ', 28.259949, 83.593114, 4, 'No'),
(72, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, 'Maldhung', 9847030528, 'House Rent', 50000, 5, 4, 1, 1, 1, 'At opposite to kalika mandir ', 28.259949, 83.593114, 4, 'No'),
(73, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, 'Kalika Chok', 9847030528, 'Room Rent', 5000, 2, 1, 0, 1, 1, 'At opposite of Kalika Mandir ', 28.259949, 83.593114, 4, 'No'),
(74, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, 'Maldhunga', 9847030528, 'Room Rent', 5000, 3, 2, 1, 1, 1, 'At opposite of Kalika Mandir ', 28.259949, 83.593114, 4, 'No'),
(75, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Lalitpur', 'Lalitpur', 'Municipality', 4, 'Gwarko', 9847030528, 'House Rent', 120000, 12, 3, 7, 2, 4, 'Near to Gwarko Chok', 27.666497, 85.329770, 4, 'No'),
(76, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Gulmi', 'Resunga', 'Tamghas', 4, 'Deurali', 9847030528, 'House Rent', 25000, 6, 4, 1, 1, 2, 'Front to the police bit ', 28.067826, 83.211564, 4, 'No'),
(77, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Gulmi', 'Resunga', 'Tamghas', 1, 'Udindhunga', 9847030528, 'Flat Rent', 12000, 3, 1, 1, 1, 1, 'Near to Resunga secondary school ', 28.067826, 83.211564, 4, 'No'),
(78, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Gulmi', 'Resunga', 'Tamghas', 1, 'Baghmare', 9847030528, 'Room Rent', 12000, 1, 0, 0, 0, 1, 'Near to Petrol pump ', 28.067826, 83.211564, 4, 'No'),
(79, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Gulmi', 'Resunga', 'Tamghas', 1, 'Chidichaur', 9847030528, 'Room Rent', 12000, 1, 0, 0, 0, 1, 'Near to Mahendra model secondary school ', 28.067826, 83.211564, 4, 'No'),
(80, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Gulmi', 'Resunga', 'Tamghas', 4, 'Deurali', 9847030528, 'House Rent', 25000, 6, 4, 1, 1, 2, 'Front to the police bit ', 28.067826, 83.211564, 4, 'No'),
(81, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Gulmi', 'Resunga', 'Tamghas', 1, 'Udindhunga', 9847030528, 'Flat Rent', 12000, 3, 1, 1, 1, 1, 'Near to Resunga secondary school ', 28.067826, 83.211564, 4, 'No'),
(82, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Gulmi', 'Resunga', 'Tamghas', 1, 'Baghmare', 9847030528, 'Room Rent', 12000, 1, 0, 0, 0, 1, 'Near to Petrol pump ', 28.067826, 83.211564, 4, 'No'),
(83, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Gulmi', 'Resunga', 'Tamghas', 1, 'Chidichaur', 9847030528, 'Room Rent', 12000, 1, 0, 0, 0, 1, 'Near to Mahendra model secondary school ', 28.067826, 83.211564, 4, 'No'),
(84, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Gulmi', 'Resunga', 'Tamghas', 4, 'Deurali', 9847030528, 'House Rent', 25000, 6, 4, 1, 1, 2, 'Front to the police bit ', 28.067826, 83.211564, 4, 'No'),
(85, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Gulmi', 'Resunga', 'Tamghas', 1, 'Chidichaur', 9847030528, 'Room Rent', 12000, 1, 0, 0, 0, 1, 'Near to Mahendra model secondary school ', 28.067826, 83.211564, 4, 'No'),
(86, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Kathmandu', 'Kathmandu', 'Municipality', 4, 'Kalanki', 9847030528, 'Flat Rent', 15000, 3, 1, 1, 1, 1, 'Only for family of member less than5', 27.693181, 85.271917, 4, 'No'),
(87, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Kathmandu', 'Kathmandu', 'Municipality', 4, 'Kalanki', 9847030528, 'Flat Rent', 15000, 3, 1, 1, 1, 1, 'Only for family of member less than5', 27.693181, 85.271917, 4, 'No'),
(88, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Kathmandu', 'Kathmandu', 'Municipality', 4, 'Baudhha', 9847030528, 'Room Rent', 5000, 1, 0, 0, 0, 1, 'Available for the students', 27.723176, 85.349522, 4, 'No'),
(89, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Kathmandu', 'Kathmandu', 'Municipality', 4, 'Bauddha', 9847030528, 'Flat Rent', 15000, 3, 1, 1, 1, 1, 'Near chaitya', 27.723176, 85.349522, 4, 'No'),
(90, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Kathmandu', 'Kathmandu', 'Municipality', 4, 'Kalanki', 9847030528, 'Room Rent', 4500, 1, 0, 0, 0, 1, 'Available for the students', 27.693181, 85.271917, 4, 'No'),
(91, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Kathmandu', 'Kathmandu', 'Municipality', 4, 'Kalanki', 9847030528, 'Room Rent', 4500, 1, 0, 0, 0, 1, 'Available for the students', 27.693181, 85.271917, 4, 'Yes'),
(92, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Lalitpur', 'Lalitpur', 'Municipality', 4, 'Gwarko', 9847030528, 'House Rent', 4500, 12, 3, 7, 2, 4, 'West from Gwarko chok', 27.666497, 85.329770, 4, 'No'),
(93, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Lalitpur', 'Lalitpur', 'Municipality', 4, 'Gwarko', 9847030528, 'Room Rent', 4500, 1, 0, 0, 0, 1, 'Available for the students', 27.666497, 85.329770, 4, 'No'),
(94, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Lalitpur', 'Lalitpur', 'Municipality', 4, 'Imadol', 9847030528, 'Room Rent', 4500, 1, 0, 0, 0, 1, 'Available for the students', 27.666497, 85.329770, 4, 'No'),
(95, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Lalitpur', 'Lalitpur', 'Municipality', 4, 'Gwarko', 9847030528, 'House Rent', 120000, 12, 3, 7, 2, 4, 'Near to Gwarko Chok', 27.666497, 85.329770, 4, 'No'),
(96, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Lalitpur', 'Lalitpur', 'Municipality', 4, 'Gwarko', 9847030528, 'House Rent', 4500, 12, 3, 7, 2, 4, 'West from Gwarko chok', 27.666497, 85.329770, 4, 'No'),
(97, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Lalitpur', 'Lalitpur', 'Municipality', 4, 'Gwarko', 9847030528, 'Room Rent', 4500, 1, 0, 0, 0, 1, 'Available for the students', 27.666497, 85.329770, 4, 'No'),
(98, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Kathmandu', 'Kathmandu', 'Municipality', 4, 'Kalanki', 9847030528, 'Flat Rent', 15000, 3, 1, 1, 1, 1, 'Only for family of member less than5', 27.693181, 85.271917, 4, 'No'),
(99, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Kathmandu', 'Kathmandu', 'Municipality', 4, 'Kalanki', 9847030528, 'Flat Rent', 15000, 3, 1, 1, 1, 1, 'Only for family of member less than5', 27.693181, 85.271917, 4, 'No'),
(100, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Kathmandu', 'Kathmandu', 'Municipality', 4, 'Baudhha', 9847030528, 'Room Rent', 5000, 1, 0, 0, 0, 1, 'Available for the students', 27.723176, 85.349522, 4, 'No'),
(101, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Kathmandu', 'Kathmandu', 'Municipality', 4, 'Bauddha', 9847030528, 'Flat Rent', 15000, 3, 1, 1, 1, 1, 'Near chaitya', 27.723176, 85.349522, 4, 'No'),
(102, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Kathmandu', 'Kathmandu', 'Municipality', 4, 'Kalanki', 9847030528, 'Room Rent', 4500, 1, 0, 0, 0, 1, 'Available for the students', 27.693181, 85.271917, 4, 'No'),
(103, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Kathmandu', 'Kathmandu', 'Municipality', 4, 'Kalanki', 9847030528, 'Room Rent', 4500, 1, 0, 0, 0, 1, 'Available for the students', 27.693181, 85.271917, 4, 'No'),
(104, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Lalitpur', 'Lalitpur', 'Municipality', 4, 'Imadol', 9847030528, 'Room Rent', 4500, 1, 0, 0, 0, 1, 'Available for the students', 27.666497, 85.329770, 4, 'No'),
(105, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Gulmi', 'Resunga', 'Tamghas', 1, 'Baghmare', 9847030528, 'Room Rent', 12000, 1, 0, 0, 0, 1, 'Near to Petrol pump ', 28.067826, 83.211564, 4, 'No'),
(106, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Gulmi', 'Resunga', 'Tamghas', 1, 'Chidichaur', 9847030528, 'Room Rent', 12000, 1, 0, 0, 0, 1, 'Near to Mahendra model secondary school ', 28.067826, 83.211564, 4, 'No'),
(107, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Gulmi', 'Resunga', 'Tamghas', 4, 'Deurali', 9847030528, 'House Rent', 25000, 6, 4, 1, 1, 2, 'Front to the police bit ', 28.067826, 83.211564, 4, 'No'),
(108, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Gulmi', 'Resunga', 'Tamghas', 1, 'Udindhunga', 9847030528, 'Flat Rent', 12000, 3, 1, 1, 1, 1, 'Near to Resunga secondary school ', 28.067826, 83.211564, 4, 'No'),
(109, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Gulmi', 'Resunga', 'Tamghas', 1, 'Baghmare', 9847030528, 'Room Rent', 12000, 1, 0, 0, 0, 1, 'Near to Petrol pump ', 28.067826, 83.211564, 4, 'No'),
(110, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Gulmi', 'Resunga', 'Tamghas', 1, 'Chidichaur', 9847030528, 'Room Rent', 12000, 1, 0, 0, 0, 1, 'Near to Mahendra model secondary school ', 28.067826, 83.211564, 4, 'No'),
(111, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Gulmi', 'Resunga', 'Tamghas', 4, 'Deurali', 9847030528, 'House Rent', 25000, 6, 4, 1, 1, 2, 'Front to the police bit ', 28.067826, 83.211564, 4, 'No'),
(112, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Gulmi', 'Resunga', 'Tamghas', 1, 'Chidichaur', 9847030528, 'Room Rent', 12000, 1, 0, 0, 0, 1, 'Near to Mahendra model secondary school ', 28.067826, 83.211564, 4, 'No'),
(113, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Gulmi', 'Resunga', 'Tamghas', 4, 'Deurali', 9847030528, 'House Rent', 25000, 6, 4, 1, 1, 2, 'Front to the police bit ', 28.067826, 83.211564, 4, 'No'),
(114, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'House Rent', 75000, 7, 2, 6, 2, 1, 'At Lake Side ', 28.208606, 83.960066, 4, 'No'),
(115, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'Flat Rent', 15000, 3, 2, 1, 1, 1, 'At Lake Side ', 28.208606, 83.960066, 4, 'No'),
(116, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, 'Kalika Chok', 9847030528, 'Flat Rent', 15000, 3, 2, 1, 1, 1, 'At opposite of Kalika Mandir ', 28.259949, 83.593114, 4, 'No'),
(117, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, ' Maldhunga', 9847030528, 'Flat Rent', 15000, 3, 2, 1, 1, 1, 'Near to the Kalika Temple ', 28.259949, 83.593114, 4, 'No'),
(118, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, 'Kalika Chok', 9847030528, 'House Rent', 50000, 5, 4, 1, 1, 1, 'At opposite to kalika mandir ', 28.259949, 83.593114, 4, 'No'),
(119, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, 'Maldhung', 9847030528, 'House Rent', 50000, 5, 4, 1, 1, 1, 'At opposite to kalika mandir ', 28.259949, 83.593114, 4, 'Yes'),
(120, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, 'Kalika Chok', 9847030528, 'Room Rent', 5000, 2, 1, 0, 1, 1, 'At opposite of Kalika Mandir ', 28.259949, 83.593114, 4, 'Yes'),
(121, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, 'Maldhunga', 9847030528, 'Room Rent', 5000, 3, 2, 1, 1, 1, 'At opposite of Kalika Mandir ', 28.259949, 83.593114, 4, 'No'),
(122, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Rupandehi', 'Butwal', 'Municipality', 4, 'Laxminagar', 9847030528, 'Flat Rent', 12000, 3, 1, 1, 1, 1, 'Near to the white Rose Academy', 27.700001, 83.466003, 4, 'No'),
(123, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Flat Rent', 14000, 3, 1, 1, 1, 1, 'Near to Prithvi chok', 28.202995, 83.974005, 4, 'No'),
(124, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Flat Rent', 15000, 4, 2, 1, 1, 1, 'Near to Prithvi chok', 28.202995, 83.974005, 4, 'No'),
(125, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Room Rent', 4000, 1, 1, 0, 0, 1, 'Near to Prithvi chok ', 28.202995, 83.974005, 4, 'No'),
(126, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Flat Rent', 14000, 3, 1, 1, 1, 1, 'Near to Birendra chok ', 28.202995, 83.974005, 4, 'No'),
(127, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Room Rent', 5400, 1, 1, 0, 1, 1, 'Near to Birendra chok ', 28.202995, 83.974005, 4, 'No'),
(128, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'Room Rent', 5400, 1, 1, 0, 1, 1, 'At Lake side ', 28.208606, 83.960066, 4, 'No'),
(129, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'Room Rent', 4500, 1, 1, 0, 0, 1, 'At Lake Side ', 28.208606, 83.960066, 4, 'No'),
(130, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'House Rent', 75000, 7, 2, 6, 2, 1, 'At Lake Side ', 28.208606, 83.960066, 4, 'No'),
(131, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'Flat Rent', 15000, 3, 2, 1, 1, 1, 'At Lake Side ', 28.208606, 83.960066, 4, 'No'),
(132, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, 'Kalika Chok', 9847030528, 'Flat Rent', 15000, 3, 2, 1, 1, 1, 'At opposite of Kalika Mandir ', 28.259949, 83.593114, 4, 'No'),
(133, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, ' Maldhunga', 9847030528, 'Flat Rent', 15000, 3, 2, 1, 1, 1, 'Near to the Kalika Temple ', 28.259949, 83.593114, 4, 'No'),
(134, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, 'Kalika Chok', 9847030528, 'House Rent', 50000, 5, 4, 1, 1, 1, 'At opposite to kalika mandir ', 28.259949, 83.593114, 4, 'No'),
(135, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, 'Maldhung', 9847030528, 'House Rent', 50000, 5, 4, 1, 1, 1, 'At opposite to kalika mandir ', 28.259949, 83.593114, 4, 'No'),
(136, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, 'Kalika Chok', 9847030528, 'Room Rent', 5000, 2, 1, 0, 1, 1, 'At opposite of Kalika Mandir ', 28.259949, 83.593114, 4, 'No'),
(137, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, 'Maldhunga', 9847030528, 'Room Rent', 5000, 3, 2, 1, 1, 1, 'At opposite of Kalika Mandir ', 28.259949, 83.593114, 4, 'No'),
(138, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Flat Rent', 14000, 3, 1, 1, 1, 1, 'Near to Prithvi chok', 28.202995, 83.974005, 4, 'No'),
(139, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Flat Rent', 15000, 4, 2, 1, 1, 1, 'Near to Prithvi chok', 28.202995, 83.974005, 4, 'No'),
(140, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Room Rent', 4000, 1, 1, 0, 0, 1, 'Near to Prithvi chok ', 28.202995, 83.974005, 4, 'No'),
(141, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Flat Rent', 14000, 3, 1, 1, 1, 1, 'Near to Birendra chok ', 28.202995, 83.974005, 4, 'No'),
(142, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Room Rent', 5400, 1, 1, 0, 1, 1, 'Near to Birendra chok ', 28.202995, 83.974005, 4, 'Yes'),
(143, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'Room Rent', 5400, 1, 1, 0, 1, 1, 'At Lake side ', 28.208606, 83.960066, 4, 'No'),
(144, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'Room Rent', 4500, 1, 1, 0, 0, 1, 'At Lake Side ', 28.208606, 83.960066, 4, 'No'),
(145, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'House Rent', 75000, 7, 2, 6, 2, 1, 'At Lake Side ', 28.208606, 83.960066, 4, 'No'),
(146, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'House Rent', 75000, 7, 2, 6, 2, 1, 'At Lake Side ', 28.208606, 83.960066, 4, 'No'),
(147, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Lalitpur', 'Lalitpur', 'Municipality', 4, 'Gwarko', 9847030528, 'House Rent', 120000, 12, 3, 7, 2, 4, 'Near to Gwarko Chok', 27.666497, 85.329770, 4, 'No'),
(148, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Lalitpur', 'Lalitpur', 'Municipality', 4, 'Gwarko', 9847030528, 'House Rent', 4500, 12, 3, 7, 2, 4, 'West from Gwarko chok', 27.666497, 85.329770, 4, 'No'),
(149, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Lalitpur', 'Lalitpur', 'Municipality', 4, 'Gwarko', 9847030528, 'Room Rent', 4500, 1, 0, 0, 0, 1, 'Available for the students', 27.666497, 85.329770, 4, 'No'),
(150, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Lalitpur', 'Lalitpur', 'Municipality', 4, 'Imadol', 9847030528, 'Room Rent', 4500, 1, 0, 0, 0, 1, 'Available for the students', 27.666497, 85.329770, 4, 'No'),
(151, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Flat Rent', 14000, 3, 1, 1, 1, 1, 'Near to Prithvi chok', 28.202995, 83.974005, 4, 'No'),
(152, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Flat Rent', 15000, 4, 2, 1, 1, 1, 'Near to Prithvi chok', 28.202995, 83.974005, 4, 'No'),
(153, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Room Rent', 4000, 1, 1, 0, 0, 1, 'Near to Prithvi chok ', 28.202995, 83.974005, 4, 'No'),
(154, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Flat Rent', 14000, 3, 1, 1, 1, 1, 'Near to Birendra chok ', 28.202995, 83.974005, 4, 'No'),
(155, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Room Rent', 5400, 1, 1, 0, 1, 1, 'Near to Birendra chok ', 28.202995, 83.974005, 4, 'No'),
(156, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'Room Rent', 5400, 1, 1, 0, 1, 1, 'At Lake side ', 28.208606, 83.960066, 4, 'No'),
(157, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'Room Rent', 4500, 1, 1, 0, 0, 1, 'At Lake Side ', 28.208606, 83.960066, 4, 'No'),
(158, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'House Rent', 75000, 7, 2, 6, 2, 1, 'At Lake Side ', 28.208606, 83.960066, 4, 'No'),
(159, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'House Rent', 75000, 7, 2, 6, 2, 1, 'At Lake Side ', 28.208606, 83.960066, 4, 'No'),
(160, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Lalitpur', 'Lalitpur', 'Municipality', 4, 'Gwarko', 9847030528, 'House Rent', 120000, 12, 3, 7, 2, 4, 'Near to Gwarko Chok', 27.666497, 85.329770, 4, 'No'),
(161, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Lalitpur', 'Lalitpur', 'Municipality', 4, 'Gwarko', 9847030528, 'House Rent', 4500, 12, 3, 7, 2, 4, 'West from Gwarko chok', 27.666497, 85.329770, 4, 'No'),
(162, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Lalitpur', 'Lalitpur', 'Municipality', 4, 'Gwarko', 9847030528, 'Room Rent', 4500, 1, 0, 0, 0, 1, 'Available for the students', 27.666497, 85.329770, 4, 'No'),
(163, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Kathmandu', 'Kathmandu', 'Municipality', 4, 'Kalanki', 9847030528, 'Flat Rent', 15000, 3, 1, 1, 1, 1, 'Only for family of member less than5', 27.693181, 85.271917, 4, 'No'),
(164, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Kathmandu', 'Kathmandu', 'Municipality', 4, 'Kalanki', 9847030528, 'Flat Rent', 15000, 3, 1, 1, 1, 1, 'Only for family of member less than5', 27.693181, 85.271917, 4, 'No'),
(165, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Kathmandu', 'Kathmandu', 'Municipality', 4, 'Baudhha', 9847030528, 'Room Rent', 5000, 1, 0, 0, 0, 1, 'Available for the students', 27.723176, 85.349522, 4, 'No'),
(166, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Kathmandu', 'Kathmandu', 'Municipality', 4, 'Bauddha', 9847030528, 'Flat Rent', 15000, 3, 1, 1, 1, 1, 'Near chaitya', 27.723176, 85.349522, 4, 'No'),
(167, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Kathmandu', 'Kathmandu', 'Municipality', 4, 'Kalanki', 9847030528, 'Room Rent', 4500, 1, 0, 0, 0, 1, 'Available for the students', 27.693181, 85.271917, 4, 'No'),
(168, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Kathmandu', 'Kathmandu', 'Municipality', 4, 'Kalanki', 9847030528, 'Room Rent', 4500, 1, 0, 0, 0, 1, 'Available for the students', 27.693181, 85.271917, 4, 'No'),
(169, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Lalitpur', 'Lalitpur', 'Municipality', 4, 'Imadol', 9847030528, 'Room Rent', 4500, 1, 0, 0, 0, 1, 'Available for the students', 27.666497, 85.329770, 4, 'No'),
(170, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'House Rent', 75000, 7, 2, 6, 2, 1, 'At Lake Side ', 28.208606, 83.960066, 4, 'No'),
(171, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'Flat Rent', 15000, 3, 2, 1, 1, 1, 'At Lake Side ', 28.208606, 83.960066, 4, 'No'),
(172, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, 'Kalika Chok', 9847030528, 'Flat Rent', 15000, 3, 2, 1, 1, 1, 'At opposite of Kalika Mandir ', 28.259949, 83.593114, 4, 'Yes'),
(173, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, ' Maldhunga', 9847030528, 'Flat Rent', 15000, 3, 2, 1, 1, 1, 'Near to the Kalika Temple ', 28.259949, 83.593114, 4, 'No'),
(174, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, 'Kalika Chok', 9847030528, 'House Rent', 50000, 5, 4, 1, 1, 1, 'At opposite to kalika mandir ', 28.259949, 83.593114, 4, 'No'),
(175, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, 'Maldhung', 9847030528, 'House Rent', 50000, 5, 4, 1, 1, 1, 'At opposite to kalika mandir ', 28.259949, 83.593114, 4, 'No'),
(176, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, 'Kalika Chok', 9847030528, 'Room Rent', 5000, 2, 1, 0, 1, 1, 'At opposite of Kalika Mandir ', 28.259949, 83.593114, 4, 'No'),
(177, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, 'Maldhunga', 9847030528, 'Room Rent', 5000, 3, 2, 1, 1, 1, 'At opposite of Kalika Mandir ', 28.259949, 83.593114, 4, 'No'),
(178, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Flat Rent', 14000, 3, 1, 1, 1, 1, 'Near to Prithvi chok', 28.202995, 83.974005, 4, 'Yes'),
(179, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Flat Rent', 15000, 4, 2, 1, 1, 1, 'Near to Prithvi chok', 28.202995, 83.974005, 4, 'No'),
(180, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Room Rent', 4000, 1, 1, 0, 0, 1, 'Near to Prithvi chok ', 28.202995, 83.974005, 4, 'No'),
(181, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Flat Rent', 14000, 3, 1, 1, 1, 1, 'Near to Birendra chok ', 28.202995, 83.974005, 4, 'No'),
(182, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Room Rent', 5400, 1, 1, 0, 1, 1, 'Near to Birendra chok ', 28.202995, 83.974005, 4, 'Yes'),
(183, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'Room Rent', 5400, 1, 1, 0, 1, 1, 'At Lake side ', 28.208606, 83.960066, 4, 'No'),
(184, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'Room Rent', 4500, 1, 1, 0, 0, 1, 'At Lake Side ', 28.208606, 83.960066, 4, 'No'),
(185, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'House Rent', 75000, 7, 2, 6, 2, 1, 'At Lake Side ', 28.208606, 83.960066, 4, 'No'),
(186, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'House Rent', 75000, 7, 2, 6, 2, 1, 'At Lake Side ', 28.208606, 83.960066, 4, 'No'),
(187, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Flat Rent', 14000, 3, 1, 1, 1, 1, 'Near to Prithvi chok', 28.202995, 83.974005, 4, 'No'),
(188, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Flat Rent', 15000, 4, 2, 1, 1, 1, 'Near to Prithvi chok', 28.202995, 83.974005, 4, 'No'),
(189, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Room Rent', 4000, 1, 1, 0, 0, 1, 'Near to Prithvi chok ', 28.202995, 83.974005, 4, 'No'),
(190, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Flat Rent', 14000, 3, 1, 1, 1, 1, 'Near to Birendra chok ', 28.202995, 83.974005, 4, 'No'),
(191, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Room Rent', 5400, 1, 1, 0, 1, 1, 'Near to Birendra chok ', 28.202995, 83.974005, 4, 'No'),
(192, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'Room Rent', 5400, 1, 1, 0, 1, 1, 'At Lake side ', 28.208606, 83.960066, 4, 'No'),
(193, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'Room Rent', 4500, 1, 1, 0, 0, 1, 'At Lake Side ', 28.208606, 83.960066, 4, 'No'),
(194, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'House Rent', 75000, 7, 2, 6, 2, 1, 'At Lake Side ', 28.208606, 83.960066, 4, 'No'),
(195, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'House Rent', 75000, 7, 2, 6, 2, 1, 'At Lake Side ', 28.208606, 83.960066, 4, 'No'),
(196, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Lalitpur', 'Lalitpur', 'Municipality', 4, 'Gwarko', 9847030528, 'House Rent', 120000, 12, 3, 7, 2, 4, 'Near to Gwarko Chok', 27.666497, 85.329770, 4, 'No'),
(197, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Lalitpur', 'Lalitpur', 'Municipality', 4, 'Gwarko', 9847030528, 'House Rent', 4500, 12, 3, 7, 2, 4, 'West from Gwarko chok', 27.666497, 85.329770, 4, 'No'),
(198, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Lalitpur', 'Lalitpur', 'Municipality', 4, 'Gwarko', 9867419155, 'Room Rent', 4500, 1, 0, 0, 0, 1, 'Available for the students', 27.666497, 85.329770, 4, 'No'),
(199, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Lalitpur', 'Lalitpur', 'Municipality', 4, 'Imadol', 9847030528, 'Room Rent', 4500, 1, 0, 0, 0, 1, 'Available for the students', 27.666497, 85.329770, 4, 'No'),
(200, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'Flat Rent', 15000, 3, 2, 1, 1, 1, 'At Lake Side ', 28.208606, 83.960066, 4, 'No'),
(201, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, 'Kalika Chok', 9847030528, 'Flat Rent', 15000, 3, 2, 1, 1, 1, 'At opposite of Kalika Mandir ', 28.259949, 83.593114, 4, 'No'),
(202, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, ' Maldhunga', 9867419155, 'Flat Rent', 15000, 3, 2, 1, 1, 1, 'Near to the Kalika Temple ', 28.259949, 83.593114, 3, 'No'),
(203, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, 'Kalika Chok', 9847030528, 'House Rent', 50000, 5, 4, 1, 1, 1, 'At opposite to kalika mandir ', 28.259949, 83.593114, 4, 'No'),
(204, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, 'Maldhung', 9847030528, 'House Rent', 50000, 5, 4, 1, 1, 1, 'At opposite to kalika mandir ', 28.259949, 83.593114, 3, 'No'),
(205, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, 'Kalika Chok', 9847030528, 'Room Rent', 5000, 2, 1, 0, 1, 1, 'At opposite of Kalika Mandir ', 28.259949, 83.593114, 3, 'No'),
(206, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, 'Maldhunga', 9847030528, 'Room Rent', 5000, 3, 2, 1, 1, 1, 'At opposite of Kalika Mandir ', 28.259949, 83.593114, 3, 'No');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `email`, `password`) VALUES
(1, 'rameshbhattarai896@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(10) NOT NULL,
  `property_id` int(10) NOT NULL,
  `tenant_id` int(10) NOT NULL,
  'owner_id' int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `property_id`, `tenant_id`) VALUES
(1, 120, 1),
(2, 172, 1),
(3, 172, 1),
(4, 19, 1),
(5, 178, 1),
(6, 142, 1),
(7, 119, 1),
(8, 182, 1),
(9, 91, 1),
(10, 91, 1);

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `chatid` int(5) NOT NULL,
  `owner_id` int(10) NOT NULL,
  `tenant_id` int(10) NOT NULL,
  `message` varchar(9999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `owner_id` int(10) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone_no` bigint(10) NOT NULL,
  `address` varchar(200) NOT NULL,
  `id_type` varchar(100) NOT NULL,
  `id_photo` varchar(1000) NOT NULL,
  `verification_code` text NOT NULL,
  `otp_created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `email_verified_at` datetime DEFAULT NULL,
  `resetOtp` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`owner_id`, `full_name`, `email`, `password`, `phone_no`, `address`, `id_type`, `id_photo`, `verification_code`, `otp_created_at`, `email_verified_at`, `resetOtp`) VALUES
(3, 'ramesh bhattarai', 'rameshbhattarai896@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 9867419155, 'butwal', 'Citizenship', '', '', '2024-01-08 17:27:42', '2024-01-08 23:13:04', NULL),
(4, 'keshab ghimire', 'keshabghimire351@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 9847030528, 'Butwal, Laxminagar', 'Driving Licence', '', '', '2024-01-09 15:20:53', '2024-01-09 21:06:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `preferences`
--

CREATE TABLE `preferences` (
  `preference_id` int(10) NOT NULL,
  `location` varchar(100) NOT NULL,
  `budget` int(15) DEFAULT NULL,
  `property_type` varchar(20) NOT NULL,
  `facility` varchar(1000) DEFAULT NULL,
  `tenant_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `preferences`
--

INSERT INTO `preferences` (`preference_id`, `location`, `budget`, `property_type`, `facility`, `tenant_id`) VALUES
(1, 'butwal', 5000, 'room', 'electricity, water', 1);

-- --------------------------------------------------------

--
-- Table structure for table `property_photo`
--

CREATE TABLE `property_photo` (
  `property_photo_id` int(1) NOT NULL,
  `p_photo` varchar(500) NOT NULL,
  `property_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `property_photo`
--

INSERT INTO `property_photo` (`property_photo_id`, `p_photo`, `property_id`) VALUES
(14, 'product-photo/1.jpg', 1),
(17, 'product-photo/112.jpg', 3),
(18, 'product-photo/84.jpg', 3),
(19, 'product-photo/12.jpg', 3),
(20, 'product-photo/84.jpg', 8),
(21, 'product-photo/102.jpg', 8),
(22, 'product-photo/112.jpg', 8),
(23, 'product-photo/12.jpg', 10),
(24, 'product-photo/12.jpg', 10),
(39, 'product-photo/80.jpg', 4),
(40, 'product-photo/115.jpg', 5),
(41, 'product-photo/118.jpg', 6),
(42, 'product-photo/112.jpg', 7),
(43, 'product-photo/123.jpg', 9),
(44, 'product-photo/115.jpg', 4),
(45, 'product-photo/123.jpg', 5),
(46, 'product-photo/84.jpg', 6),
(47, 'product-photo/84.jpg', 7),
(48, 'product-photo/80.jpg', 9),
(49, 'product-photo/123.jpg', 4),
(50, 'product-photo/115.jpg', 6),
(51, 'product-photo/118.jpg', 5),
(52, 'product-photo/80.jpg', 9),
(53, 'product-photo/38.jpg', 11),
(54, 'product-photo/22.jpg', 12),
(55, 'product-photo/120.jpg', 13),
(56, 'product-photo/123.jpg', 11),
(57, 'product-photo/44.jpg', 14),
(58, 'product-photo/46.jpg', 14),
(59, 'product-photo/120.jpg', 14),
(60, 'product-photo/123.jpg', 15),
(61, 'product-photo/38.jpg', 15),
(62, 'product-photo/22.jpg', 16),
(63, 'product-photo/120.jpg', 17),
(64, 'product-photo/123.jpg', 17),
(65, 'product-photo/42.jpg', 18),
(66, 'product-photo/23.jpg', 18),
(67, 'product-photo/27.jpg', 19),
(68, 'product-photo/27.jpg', 19),
(69, 'product-photo/38.jpg', 20),
(70, 'product-photo/27.jpg', 20),
(71, 'product-photo/27.jpg', 21),
(72, 'product-photo/36.jpg', 19),
(73, 'product-photo/38.jpg', 21),
(74, 'product-photo/29.jpg', 22),
(75, 'product-photo/120.jpg', 22),
(76, 'product-photo/123.jpg', 22),
(77, 'product-photo/38.jpg', 17),
(78, 'product-photo/22.jpg', 14),
(79, 'product-photo/120.jpg', 15),
(80, 'product-photo/123.jpg', 16),
(81, 'product-photo/115.jpg', 23),
(82, 'product-photo/118.jpg', 24),
(83, 'product-photo/112.jpg', 25),
(84, 'product-photo/102.jpg', 26),
(85, 'product-photo/103.jpg', 27),
(86, 'product-photo/120.jpg', 28),
(87, 'product-photo/80.jpg', 29),
(88, 'product-photo/104.jpg', 30),
(89, 'product-photo/123.jpg', 31),
(90, 'product-photo/105.jpg', 32),
(91, 'product-photo/112.jpg', 33),
(92, 'product-photo/123.jpg', 34),
(93, 'product-photo/120.jpg', 35),
(94, 'product-photo/80.jpg', 36),
(95, 'product-photo/84.jpg', 37),
(96, 'product-photo/38.jpg', 38),
(97, 'product-photo/106.jpg', 39),
(98, 'product-photo/107.jpg', 40),
(99, 'product-photo/22.jpg', 41),
(100, 'product-photo/118.jpg', 42),
(101, 'product-photo/115.jpg', 26),
(102, 'product-photo/108.jpg', 30),
(103, 'product-photo/109.jpg', 32),
(104, 'product-photo/115.jpg', 40),
(105, 'product-photo/137.jpg', 23),
(106, 'product-photo/138.jpg', 24),
(107, 'product-photo/139.jpg', 25),
(108, 'product-photo/140.jpg', 26),
(109, 'product-photo/143.jpg', 27),
(110, 'product-photo/144.jpg', 28),
(111, 'product-photo/145.jpg', 29),
(112, 'product-photo/146.jpg', 30),
(113, 'product-photo/147.jpg', 31),
(114, 'product-photo/148.jpg', 32),
(115, 'product-photo/149.jpg', 33),
(116, 'product-photo/150.jpg', 34),
(117, 'product-photo/151.jpg', 35),
(118, 'product-photo/152.jpg', 36),
(119, 'product-photo/153.jpg', 37),
(120, 'product-photo/154.jpg', 38),
(121, 'product-photo/156.jpg', 39),
(122, 'product-photo/157.jpg', 40),
(123, 'product-photo/158.jpg', 41),
(124, 'product-photo/159.jpg', 42),
(125, 'product-photo/160.jpg', 26),
(126, 'product-photo/151.jpg', 30),
(127, 'product-photo/152.jpg', 32),
(128, 'product-photo/143.jpg', 40),
(129, 'product-photo/154.jpg', 23),
(130, 'product-photo/125.jpg', 24),
(131, 'product-photo/116.jpg', 42),
(132, 'product-photo/127.jpg', 42),
(133, 'product-photo/88.jpg', 41),
(134, 'product-photo/129.jpg', 41),
(135, 'product-photo/115.jpg', 43),
(136, 'product-photo/118.jpg', 44),
(137, 'product-photo/112.jpg', 45),
(138, 'product-photo/1.jpg', 46),
(139, 'product-photo/12.jpg', 47),
(140, 'product-photo/157.jpg', 48),
(141, 'product-photo/80.jpg', 49),
(142, 'product-photo/17.jpg', 50),
(143, 'product-photo/123.jpg', 51),
(144, 'product-photo/18.jpg', 52),
(145, 'product-photo/145.jpg', 53),
(146, 'product-photo/144.jpg', 54),
(147, 'product-photo/120.jpg', 55),
(148, 'product-photo/80.jpg', 56),
(149, 'product-photo/84.jpg', 57),
(150, 'product-photo/38.jpg', 58),
(151, 'product-photo/115.jpg', 43),
(152, 'product-photo/144.jpg', 44),
(153, 'product-photo/145.jpg', 45),
(154, 'product-photo/18.jpg', 46),
(155, 'product-photo/146.jpg', 47),
(156, 'product-photo/147.jpg', 48),
(157, 'product-photo/148.jpg', 49),
(158, 'product-photo/149.jpg', 50),
(159, 'product-photo/153.jpg', 51),
(160, 'product-photo/158.jpg', 52),
(161, 'product-photo/144.jpg', 53),
(162, 'product-photo/149.jpg', 54),
(163, 'product-photo/152.jpg', 55),
(164, 'product-photo/19.jpg', 56),
(165, 'product-photo/84.jpg', 57),
(166, 'product-photo/137.jpg', 58),
(167, 'product-photo/115.jpg', 59),
(168, 'product-photo/38.jpg', 60),
(169, 'product-photo/42.jpg', 61),
(170, 'product-photo/73.jpg', 62),
(171, 'product-photo/63.jpg', 63),
(172, 'product-photo/121.jpg', 64),
(173, 'product-photo/8.jpg', 65),
(174, 'product-photo/5.jpg', 66),
(175, 'product-photo/123.jpg', 67),
(176, 'product-photo/28.jpg', 68),
(177, 'product-photo/112.jpg', 69),
(178, 'product-photo/123.jpg', 70),
(179, 'product-photo/120.jpg', 71),
(180, 'product-photo/80.jpg', 72),
(181, 'product-photo/84.jpg', 73),
(182, 'product-photo/38.jpg', 74),
(183, 'product-photo/37.jpg', 59),
(184, 'product-photo/138.jpg', 60),
(185, 'product-photo/139.jpg', 61),
(186, 'product-photo/140.jpg', 62),
(187, 'product-photo/142.jpg', 63),
(188, 'product-photo/144.jpg', 64),
(189, 'product-photo/80.jpg', 65),
(190, 'product-photo/25.jpg', 66),
(191, 'product-photo/145.jpg', 67),
(192, 'product-photo/146.jpg', 68),
(193, 'product-photo/157.jpg', 69),
(194, 'product-photo/158.jpg', 70),
(195, 'product-photo/160.jpg', 71),
(196, 'product-photo/138.jpg', 72),
(197, 'product-photo/155.jpg', 73),
(198, 'product-photo/138.jpg', 74),
(199, 'product-photo/45.jpg', 75),
(200, 'product-photo/38.jpg', 76),
(201, 'product-photo/42.jpg', 77),
(202, 'product-photo/73.jpg', 78),
(203, 'product-photo/63.jpg', 79),
(204, 'product-photo/55.jpg', 80),
(205, 'product-photo/9.jpg', 81),
(206, 'product-photo/11.jpg', 82),
(207, 'product-photo/19.jpg', 83),
(208, 'product-photo/28.jpg', 84),
(209, 'product-photo/100.jpg', 85),
(210, 'product-photo/99.jpg', 86),
(211, 'product-photo/98.jpg', 91),
(212, 'product-photo/88.jpg', 87),
(213, 'product-photo/86.jpg', 88),
(214, 'product-photo/68.jpg', 89),
(215, 'product-photo/75.jpg', 90),
(216, 'product-photo/77.jpg', 92),
(217, 'product-photo/74.jpg', 93),
(218, 'product-photo/14.jpg', 94),
(219, 'product-photo/139.jpg', 73),
(220, 'product-photo/147.jpg', 74),
(221, 'product-photo/158.jpg', 75),
(222, 'product-photo/145.jpg', 75),
(223, 'product-photo/138.jpg', 76),
(224, 'product-photo/142.jpg', 77),
(225, 'product-photo/143.jpg', 78),
(226, 'product-photo/142.jpg', 79),
(227, 'product-photo/155.jpg', 80),
(228, 'product-photo/109.jpg', 81),
(229, 'product-photo/111.jpg', 82),
(230, 'product-photo/145.jpg', 83),
(231, 'product-photo/139.jpg', 84),
(232, 'product-photo/154.jpg', 85),
(233, 'product-photo/136.jpg', 86),
(234, 'product-photo/138.jpg', 91),
(235, 'product-photo/139.jpg', 87),
(236, 'product-photo/143.jpg', 88),
(237, 'product-photo/144.jpg', 89),
(238, 'product-photo/160.jpg', 90),
(239, 'product-photo/143.jpg', 92),
(240, 'product-photo/142.jpg', 93),
(241, 'product-photo/147.jpg', 94),
(242, 'product-photo/136.jpg', 73),
(243, 'product-photo/153.jpg', 74),
(244, 'product-photo/155.jpg', 75),
(245, 'product-photo/1.jpg', 95),
(246, 'product-photo/2.jpg', 96),
(247, 'product-photo/3.jpg', 97),
(248, 'product-photo/4.jpg', 98),
(249, 'product-photo/5.jpg', 99),
(250, 'product-photo/6.jpg', 100),
(251, 'product-photo/7.jpg', 101),
(252, 'product-photo/8.jpg', 102),
(253, 'product-photo/9.jpg', 103),
(254, 'product-photo/10.jpg', 104),
(255, 'product-photo/11.jpg', 105),
(256, 'product-photo/12.jpg', 106),
(257, 'product-photo/13.jpg', 107),
(258, 'product-photo/14.jpg', 108),
(259, 'product-photo/15.jpg', 109),
(260, 'product-photo/16.jpg', 110),
(261, 'product-photo/17.jpg', 111),
(262, 'product-photo/18.jpg', 112),
(263, 'product-photo/19.jpg', 113),
(264, 'product-photo/20.jpg', 114),
(265, 'product-photo/21.jpg', 115),
(266, 'product-photo/22.jpg', 116),
(267, 'product-photo/23.jpg', 117),
(268, 'product-photo/24.jpg', 118),
(269, 'product-photo/25.jpg', 119),
(270, 'product-photo/26.jpg', 120),
(271, 'product-photo/27.jpg', 121),
(272, 'product-photo/28.jpg', 122),
(273, 'product-photo/29.jpg', 123),
(274, 'product-photo/30.jpg', 124),
(275, 'product-photo/31.jpg', 125),
(276, 'product-photo/32.jpg', 126),
(277, 'product-photo/33.jpg', 127),
(278, 'product-photo/34.jpg', 128),
(279, 'product-photo/35.jpg', 129),
(280, 'product-photo/36.jpg', 130),
(281, 'product-photo/137.jpg', 131),
(282, 'product-photo/138.jpg', 132),
(283, 'product-photo/139.jpg', 133),
(284, 'product-photo/140.jpg', 134),
(285, 'product-photo/141.jpg', 135),
(286, 'product-photo/38.jpg', 136),
(287, 'product-photo/39.jpg', 137),
(288, 'product-photo/40.jpg', 138),
(289, 'product-photo/41.jpg', 139),
(290, 'product-photo/42.jpg', 140),
(291, 'product-photo/43.jpg', 141),
(292, 'product-photo/44.jpg', 142),
(293, 'product-photo/45.jpg', 143),
(294, 'product-photo/46.jpg', 144),
(295, 'product-photo/47.jpg', 145),
(296, 'product-photo/48.jpg', 146),
(297, 'product-photo/49.jpg', 147),
(298, 'product-photo/50.jpg', 148),
(299, 'product-photo/51.jpg', 149),
(300, 'product-photo/52.jpg', 150),
(301, 'product-photo/53.jpg', 151),
(302, 'product-photo/54.jpg', 152),
(303, 'product-photo/55.jpg', 153),
(304, 'product-photo/55.jpg', 154),
(305, 'product-photo/56.jpg', 155),
(306, 'product-photo/57.jpg', 156),
(307, 'product-photo/58.jpg', 157),
(308, 'product-photo/59.jpg', 158),
(309, 'product-photo/60.jpg', 159),
(310, 'product-photo/61.jpg', 160),
(311, 'product-photo/62.jpg', 161),
(312, 'product-photo/63.jpg', 162),
(313, 'product-photo/64.jpg', 163),
(314, 'product-photo/65.jpg', 164),
(315, 'product-photo/66.jpg', 165),
(316, 'product-photo/67.jpg', 166),
(317, 'product-photo/68.jpg', 167),
(318, 'product-photo/69.jpg', 168),
(319, 'product-photo/70.jpg', 169),
(320, 'product-photo/71.jpg', 170),
(321, 'product-photo/72.jpg', 171),
(322, 'product-photo/73.jpg', 172),
(323, 'product-photo/74.jpg', 173),
(324, 'product-photo/75.jpg', 174),
(325, 'product-photo/76.jpg', 175),
(326, 'product-photo/137.jpg', 95),
(327, 'product-photo/143.jpg', 96),
(328, 'product-photo/135.jpg', 97),
(329, 'product-photo/144.jpg', 98),
(330, 'product-photo/167.jpg', 99),
(331, 'product-photo/159.jpg', 100),
(332, 'product-photo/148.jpg', 101),
(333, 'product-photo/135.jpg', 102),
(334, 'product-photo/138.jpg', 103),
(335, 'product-photo/145.jpg', 104),
(336, 'product-photo/151.jpg', 105),
(337, 'product-photo/155.jpg', 106),
(338, 'product-photo/136.jpg', 107),
(339, 'product-photo/147.jpg', 108),
(340, 'product-photo/154.jpg', 109),
(341, 'product-photo/160.jpg', 110),
(342, 'product-photo/145,jpg', 111),
(343, 'product-photo/148.jpg', 112),
(344, 'product-photo/139.jpg', 113),
(345, 'product-photo/120.jpg', 114),
(346, 'product-photo/121.jpg', 115),
(347, 'product-photo/142.jpg', 116),
(348, 'product-photo/143.jpg', 117),
(349, 'product-photo/144.jpg', 118),
(350, 'product-photo/125.jpg', 119),
(351, 'product-photo/136.jpg', 120),
(352, 'product-photo/157.jpg', 121),
(353, 'product-photo/158.jpg', 122),
(354, 'product-photo/159.jpg', 123),
(355, 'product-photo/130.jpg', 124),
(356, 'product-photo/144.jpg', 125),
(357, 'product-photo/147.jpg', 126),
(358, 'product-photo/148.jpg', 127),
(359, 'product-photo/149.jpg', 128),
(360, 'product-photo/146.jpg', 129),
(361, 'product-photo/160.jpg', 130),
(362, 'product-photo/137.jpg', 131),
(363, 'product-photo/138.jpg', 132),
(364, 'product-photo/139.jpg', 133),
(365, 'product-photo/140.jpg', 134),
(366, 'product-photo/141.jpg', 135),
(367, 'product-photo/138,jpg', 136),
(368, 'product-photo/139.jpg', 137),
(369, 'product-photo/140.jpg', 138),
(370, 'product-photo/141.jpg', 139),
(371, 'product-photo/142.jpg', 140),
(372, 'product-photo/143.jpg', 141),
(373, 'product-photo/144.jpg', 142),
(374, 'product-photo/145.jpg', 143),
(375, 'product-photo/146.jpg', 144),
(376, 'product-photo/147.jpg', 145),
(377, 'product-photo/148.jpg', 146),
(378, 'product-photo/149.jpg', 147),
(379, 'product-photo/150.jpg', 148),
(380, 'product-photo/151.jpg', 149),
(381, 'product-photo/152.jpg', 150),
(382, 'product-photo/153.jpg', 151),
(383, 'product-photo/154.jpg', 152),
(384, 'product-photo/155.jpg', 153),
(385, 'product-photo/155.jpg', 154),
(386, 'product-photo/156.jpg', 155),
(387, 'product-photo/157.jpg', 156),
(388, 'product-photo/158.jpg', 157),
(389, 'product-photo/159.jpg', 158),
(390, 'product-photo/160.jpg', 159),
(391, 'product-photo/137.jpg', 160),
(392, 'product-photo/138.jpg', 161),
(393, 'product-photo/133.jpg', 162),
(394, 'product-photo/144.jpg', 163),
(395, 'product-photo/145.jpg', 164),
(396, 'product-photo/136.jpg', 165),
(397, 'product-photo/137.jpg', 166),
(398, 'product-photo/138.jpg', 167),
(399, 'product-photo/139.jpg', 168),
(400, 'product-photo/140.jog', 169),
(401, 'product-photo/151.jpg', 170),
(402, 'product-photo/152.jpg', 171),
(403, 'product-photo/153.jpg', 172),
(404, 'product-photo/144.jpg', 173),
(405, 'product-photo/155.jpg', 174),
(406, 'product-photo/156.jpg', 175),
(407, 'product-photo/1.jpg', 95),
(408, 'product-photo/2.jpg', 96),
(409, 'product-photo/3.jpg', 97),
(410, 'product-photo/4.jpg', 98),
(411, 'product-photo/5.jpg', 99),
(412, 'product-photo/6.jpg', 100),
(413, 'product-photo/7.jpg', 101),
(414, 'product-photo/8.jpg', 102),
(415, 'product-photo/9.jpg', 103),
(416, 'product-photo/10.jpg', 104),
(417, 'product-photo/11.jpg', 105),
(418, 'product-photo/12.jpg', 106),
(419, 'product-photo/13.jpg', 107),
(420, 'product-photo/14.jpg', 108),
(421, 'product-photo/15.jpg', 109),
(422, 'product-photo/16.jpg', 110),
(423, 'product-photo/17,jpg', 111),
(424, 'product-photo/18.jpg', 112),
(425, 'product-photo/19.jpg', 113),
(426, 'product-photo/20.jpg', 114),
(427, 'product-photo/21.jpg', 115),
(428, 'product-photo/22.jpg', 116),
(429, 'product-photo/23.jpg', 117),
(430, 'product-photo/24.jpg', 118),
(431, 'product-photo/25.jpg', 119),
(432, 'product-photo/26.jpg', 120),
(433, 'product-photo/27.jpg', 121),
(434, 'product-photo/28.jpg', 122),
(435, 'product-photo/29.jpg', 123),
(436, 'product-photo/30.jpg', 124),
(437, 'product-photo/31.jog', 125),
(438, 'product-photo/32.jpg', 126),
(439, 'product-photo/33.jpg', 127),
(440, 'product-photo/34.jpg', 128),
(441, 'product-photo/35.jpg', 129),
(442, 'product-photo/36.jpg', 130),
(443, 'product-photo/137.jpg', 131),
(444, 'product-photo/138.jpg', 132),
(445, 'product-photo/139.jpg', 133),
(446, 'product-photo/140.jpg', 134),
(447, 'product-photo/141.jpg', 135),
(448, 'product-photo/38,jpg', 136),
(449, 'product-photo/39.jpg', 137),
(450, 'product-photo/40.jpg', 138),
(451, 'product-photo/41.jpg', 139),
(452, 'product-photo/42.jpg', 140),
(453, 'product-photo/43.jpg', 141),
(454, 'product-photo/44.jpg', 142),
(455, 'product-photo/45.jpg', 143),
(456, 'product-photo/46.jpg', 144),
(457, 'product-photo/47.jpg', 145),
(458, 'product-photo/48.jpg', 146),
(459, 'product-photo/49.jpg', 147),
(460, 'product-photo/50.jpg', 148),
(461, 'product-photo/51.jpg', 149),
(462, 'product-photo/52.jpg', 150),
(463, 'product-photo/53.jpg', 151),
(464, 'product-photo/54.jpg', 152),
(465, 'product-photo/55.jpg', 153),
(466, 'product-photo/55.jpg', 154),
(467, 'product-photo/56.jpg', 155),
(468, 'product-photo/57.jpg', 156),
(469, 'product-photo/58.jpg', 157),
(470, 'product-photo/59.jpg', 158),
(471, 'product-photo/60.jpg', 159),
(472, 'product-photo/61.jpg', 160),
(473, 'product-photo/62.jpg', 161),
(474, 'product-photo/63.jpg', 162),
(475, 'product-photo/64.jpg', 163),
(476, 'product-photo/65.jpg', 164),
(477, 'product-photo/66.jpg', 165),
(478, 'product-photo/67.jpg', 166),
(479, 'product-photo/68.jpg', 167),
(480, 'product-photo/69.jpg', 168),
(481, 'product-photo/70.jpg', 169),
(482, 'product-photo/71.jpg', 170),
(483, 'product-photo/72.jpg', 171),
(484, 'product-photo/73.jpg', 172),
(485, 'product-photo/74.jpg', 173),
(486, 'product-photo/75.jpg', 174),
(487, 'product-photo/76.jpg', 175),
(488, 'product-photo/137.jpg', 95),
(489, 'product-photo/143.jpg', 96),
(490, 'product-photo/135.jpg', 97),
(491, 'product-photo/144.jpg', 98),
(492, 'product-photo/167.jpg', 99),
(493, 'product-photo/159.jpg', 100),
(494, 'product-photo/148.jpg', 101),
(495, 'product-photo/135.jpg', 102),
(496, 'product-photo/138.jpg', 103),
(497, 'product-photo/145.jpg', 104),
(498, 'product-photo/151.jpg', 105),
(499, 'product-photo/155.jpg', 106),
(500, 'product-photo/136.jpg', 107),
(501, 'product-photo/147.jpg', 108),
(502, 'product-photo/154.jpg', 109),
(503, 'product-photo/160.jpg', 110),
(504, 'product-photo/145.jpg', 111),
(505, 'product-photo/148.jpg', 112),
(506, 'product-photo/139.jpg', 113),
(507, 'product-photo/120.jpg', 114),
(508, 'product-photo/121.jpg', 115),
(509, 'product-photo/142.jpg', 116),
(510, 'product-photo/143.jpg', 117),
(511, 'product-photo/144.jpg', 118),
(512, 'product-photo/125.jpg', 119),
(513, 'product-photo/136.jpg', 120),
(514, 'product-photo/157.jpg', 121),
(515, 'product-photo/158.jpg', 122),
(516, 'product-photo/159.jpg', 123),
(517, 'product-photo/130.jpg', 124),
(518, 'product-photo/144.jpg', 125),
(519, 'product-photo/147.jpg', 126),
(520, 'product-photo/148.jpg', 127),
(521, 'product-photo/149.jpg', 128),
(522, 'product-photo/146.jpg', 129),
(523, 'product-photo/160.jpg', 130),
(524, 'product-photo/137.jpg', 131),
(525, 'product-photo/138.jpg', 132),
(526, 'product-photo/139.jpg', 133),
(527, 'product-photo/140.jpg', 134),
(528, 'product-photo/141.jpg', 135),
(529, 'product-photo/138.jpg', 136),
(530, 'product-photo/139.jpg', 137),
(531, 'product-photo/140.jpg', 138),
(532, 'product-photo/141.jpg', 139),
(533, 'product-photo/142.jpg', 140),
(534, 'product-photo/143.jpg', 141),
(535, 'product-photo/144.jpg', 142),
(536, 'product-photo/145.jpg', 143),
(537, 'product-photo/146.jpg', 144),
(538, 'product-photo/147.jpg', 145),
(539, 'product-photo/148.jpg', 146),
(540, 'product-photo/149.jpg', 147),
(541, 'product-photo/150.jpg', 148),
(542, 'product-photo/151.jpg', 149),
(543, 'product-photo/152.jpg', 150),
(544, 'product-photo/153.jpg', 176),
(545, 'product-photo/154.jpg', 177),
(546, 'product-photo/155.jpg', 178),
(547, 'product-photo/155.jpg', 179),
(548, 'product-photo/156.jpg', 180),
(549, 'product-photo/157.jpg', 181),
(550, 'product-photo/158.jpg', 182),
(551, 'product-photo/159.jpg', 183),
(552, 'product-photo/160.jpg', 184),
(553, 'product-photo/137.jpg', 185),
(554, 'product-photo/138.jpg', 186),
(555, 'product-photo/133.jpg', 187),
(556, 'product-photo/144.jpg', 189),
(557, 'product-photo/145.jpg', 190),
(558, 'product-photo/136.jpg', 191),
(559, 'product-photo/137.jpg', 192),
(560, 'product-photo/138.jpg', 193),
(561, 'product-photo/139.jpg', 194),
(562, 'product-photo/140.jpg', 195),
(563, 'product-photo/151.jpg', 196),
(564, 'product-photo/152.jpg', 196),
(565, 'product-photo/153.jpg', 198),
(566, 'product-photo/144.jpg', 197),
(567, 'product-photo/155.jpg', 199),
(568, 'product-photo/156.jpg', 200),
(569, 'product-photo/7.jpg', 201),
(570, 'product-photo/8.jpg', 202),
(571, 'product-photo/9.jpg', 203),
(572, 'product-photo/10.jpg', 204),
(573, 'product-photo/11.jpg', 205),
(574, 'product-photo/12.jpg', 206),
(575, 'product-photo/12.jpg', 188);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_id` int(10) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `rating` int(5) NOT NULL,
  `property_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`review_id`, `comment`, `rating`, `property_id`) VALUES
(7, 'Loved that property. I will meet your place.', 5, 131),
(8, '', 0, 9),
(9, 'looks very good', 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tenant`
--

CREATE TABLE `tenant` (
  `tenant_id` int(10) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone_no` bigint(10) NOT NULL,
  `address` varchar(200) NOT NULL,
  `id_type` varchar(100) NOT NULL,
  `id_photo` varchar(1000) NOT NULL,
  `verification_code` text NOT NULL,
  `otp_created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `email_verified_at` datetime DEFAULT NULL,
  `resetOtp` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tenant`
--

INSERT INTO `tenant` (`tenant_id`, `full_name`, `email`, `password`, `phone_no`, `address`, `id_type`, `id_photo`, `verification_code`, `otp_created_at`, `email_verified_at`, `resetOtp`) VALUES
(1, 'ramesh bhattarai', 'rameshbhattarai896@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 9867419155, 'butwal', 'Citizenship', '', '343249', '2024-01-08 17:10:31', '2024-01-08 22:55:52', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_property`
--
ALTER TABLE `add_property`
  ADD PRIMARY KEY (`property_id`),
  ADD KEY `owner_id` (`owner_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`chatid`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`owner_id`);

--
-- Indexes for table `preferences`
--
ALTER TABLE `preferences`
  ADD PRIMARY KEY (`preference_id`);

--
-- Indexes for table `property_photo`
--
ALTER TABLE `property_photo`
  ADD PRIMARY KEY (`property_photo_id`),
  ADD KEY `property_id` (`property_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `property_id` (`property_id`);

--
-- Indexes for table `tenant`
--
ALTER TABLE `tenant`
  ADD PRIMARY KEY (`tenant_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_property`
--
ALTER TABLE `add_property`
  MODIFY `property_id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=207;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `chatid` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `owner_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `preferences`
--
ALTER TABLE `preferences`
  MODIFY `preference_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `property_photo`
--
ALTER TABLE `property_photo`
  MODIFY `property_photo_id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=576;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tenant`
--
ALTER TABLE `tenant`
  MODIFY `tenant_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
