-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2020 at 10:20 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `infinity`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookequipment`
--

CREATE TABLE `bookequipment` (
  `Booking_ID` int(11) NOT NULL COMMENT 'Booking id',
  `Book_Equipment_Name` varchar(100) NOT NULL COMMENT 'Equipment name',
  `Book_Equipment_Price` decimal(10,2) NOT NULL COMMENT 'Equipment price',
  `Comment` varchar(100) NOT NULL COMMENT 'Comment made by event organizer or customer'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookequipment`
--

INSERT INTO `bookequipment` (`Booking_ID`, `Book_Equipment_Name`, `Book_Equipment_Price`, `Comment`) VALUES
(4, 'Table(10)', '200.00', 'i will pick up by myself');

-- --------------------------------------------------------

--
-- Table structure for table `booking_detail`
--

CREATE TABLE `booking_detail` (
  `Booking_ID` int(11) NOT NULL COMMENT 'Booking Identity',
  `Book_Event_Name` varchar(50) NOT NULL COMMENT 'Book event name',
  `Book_Package_Name` varchar(50) NOT NULL COMMENT 'Book package name',
  `Book_Date` date NOT NULL COMMENT 'Book date',
  `Book_Venue` varchar(50) NOT NULL COMMENT 'Book venue',
  `Start_Time` time NOT NULL COMMENT 'Start time',
  `End_Time` time NOT NULL COMMENT 'End time',
  `Comment` varchar(100) NOT NULL COMMENT 'Comment'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking_detail`
--

INSERT INTO `booking_detail` (`Booking_ID`, `Book_Event_Name`, `Book_Package_Name`, `Book_Date`, `Book_Venue`, `Start_Time`, `End_Time`, `Comment`) VALUES
(2, 'Birthday', 'Package 3', '2020-08-09', 'barn', '18:00:00', '22:00:00', 'Order more food and drink.'),
(3, 'Meeting', 'Package 1', '2020-08-02', 'hall', '13:00:00', '17:00:00', 'No need decolation, just simple.'),
(13, 'Wedding', 'Package 3 ', '2020-07-10', 'barn', '17:10:00', '21:10:00', 'With more flower decolation.'),
(15, 'Birthday', 'Package 1', '2020-07-07', 'garden', '20:29:00', '23:29:00', 'asdas');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `Booking_ID` int(11) NOT NULL COMMENT 'Booking id',
  `Book_Event_Name` varchar(100) NOT NULL COMMENT 'Event name',
  `Book_Package_Name` varchar(100) NOT NULL COMMENT 'Event package',
  `Book_Date` date NOT NULL COMMENT 'Booking date',
  `Book_Venue` varchar(100) NOT NULL COMMENT 'Event venue',
  `Start_Time` time NOT NULL COMMENT 'Event start time',
  `End_Time` time NOT NULL COMMENT 'Event end time',
  `Package_Price` decimal(10,2) NOT NULL COMMENT 'Package Price',
  `Equipment_Name` varchar(100) NOT NULL COMMENT 'Equipment name',
  `Equipment_Quantity` int(11) NOT NULL COMMENT 'Equipment quantity',
  `Equipment_Price` decimal(10,2) NOT NULL COMMENT 'Equipment price',
  `Total_Price` decimal(10,2) NOT NULL COMMENT 'Total Price'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(11) NOT NULL,
  `testing` varchar(100) DEFAULT NULL,
  `datetesting` date DEFAULT NULL,
  `timetesting` varchar(100) DEFAULT NULL,
  `venue` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `testing`, `datetesting`, `timetesting`, `venue`) VALUES
(1, 'PA SYSTEM (SOUND CHECKING)', '2020-07-07', '10:00 AM - 12:00PM', 'Astaka Ump'),
(2, 'PA SYSTEM (LIGHTENING CHECKING)', '2020-07-07', '14:00PM - 16:00PM', 'KSU Ump');

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE `equipment` (
  `Equipment_ID` int(11) NOT NULL COMMENT 'Equipment id',
  `Equipment_Name` varchar(100) NOT NULL COMMENT 'Equipment name',
  `Equipment_Description` varchar(100) NOT NULL COMMENT 'Equipment description',
  `Equipment_Picture` varchar(100) NOT NULL COMMENT 'Equipment image',
  `Equipment_Price` decimal(10,2) NOT NULL COMMENT 'Equipment price',
  `Equipment_Stock` int(11) NOT NULL COMMENT 'Equipment stock'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`Equipment_ID`, `Equipment_Name`, `Equipment_Description`, `Equipment_Picture`, `Equipment_Price`, `Equipment_Stock`) VALUES
(6, 'Chair(100)', 'high quality', 'white plastic chair.jpg', '260.00', 2000),
(7, 'Table(10)', 'round plastic table', 'table.jpg', '200.00', 1200);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `Event_ID` int(11) NOT NULL COMMENT 'Event identity',
  `Event_Name` varchar(50) NOT NULL COMMENT 'Event name',
  `Event_Picture` varchar(100) NOT NULL COMMENT 'Event picture',
  `Event_Description` varchar(255) NOT NULL COMMENT 'Event description'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`Event_ID`, `Event_Name`, `Event_Picture`, `Event_Description`) VALUES
(1, 'Birthday', 'C:\\xampp\\htdocs\\InfinityCo\\libs\\img\\bg-img\\birthday.jpg', 'Whether an all-day or the ultimate extravaganza that lasts well into the hours, our Infinity Teams is here to make sure all your birthday party wishes come true so you can......'),
(2, 'Weeding', 'C:\\xampp\\htdocs\\InfinityCo\\libs\\img\\bg-img\\wedding.jpg', 'The most important day in a couple\'s life. Guaranteeing personalized solutions and flowless execution, our venues provide the perfect location for your special day.'),
(7, 'Fashion', 'C:\\xampp\\htdocs\\InfinityCo\\libs\\img\\bg-img\\fashion.jpg', 'Fast becoming to-go-to location for fashion event, PR gatherings  and product launches, venues provide you with choice and quality in premium locations for all your event.'),
(8, 'Meeting', 'C:\\xampp\\htdocs\\InfinityCo\\libs\\img\\bg-img\\meeting.jpg', 'Form formal, to not formal, our flevible event need spaces can cater to your every need for meetings and coferences large or small, and our dedicated event team can assist with all aspects of your....');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `feedbackid` int(11) NOT NULL,
  `feedback` varchar(100) DEFAULT NULL,
  `datefeedback` date DEFAULT NULL,
  `Comments` varchar(100) DEFAULT NULL,
  `Rate` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`feedbackid`, `feedback`, `datefeedback`, `Comments`, `Rate`) VALUES
(2, 'Event Organizer', '2020-07-07', '5 star', 'Very Satisfied'),
(3, 'Customer', '2020-07-07', '3 star', 'Natural');

-- --------------------------------------------------------

--
-- Table structure for table `manageequipmentquestions`
--

CREATE TABLE `manageequipmentquestions` (
  `Question_ID` int(11) NOT NULL COMMENT 'Question id',
  `Email` varchar(100) NOT NULL COMMENT 'Event organizer or customer''s email',
  `Subject` varchar(100) NOT NULL COMMENT 'Subject of then question',
  `Message` varchar(100) NOT NULL COMMENT 'Body text of the message'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manageequipmentquestions`
--

INSERT INTO `manageequipmentquestions` (`Question_ID`, `Email`, `Subject`, `Message`) VALUES
(1, 'aa@gmail.com', 'Ask for extra stock', 'Do you have extra stock for tent'),
(2, 'zz@gmail.com', 'Ask for color of chair', 'Do you have other color of  chairs?'),
(3, 'll@gmail.com', 'Ask for type of table', 'Do you provide long table?'),
(11, 'jj@gmail.com', 'Ask for type ofspeaker', 'Do you provide protable speaker and mic?'),
(12, 'yy@gmail.com', 'Ask for type of speaker', 'Do you provide protable speaker and mic?'),
(13, 'aa@gmail.com', 'Ask for type of table', 'Do you provide long table?');

-- --------------------------------------------------------

--
-- Table structure for table `manageeventquestions`
--

CREATE TABLE `manageeventquestions` (
  `Question_ID` int(11) NOT NULL COMMENT 'Question identity',
  `Question_Subject` varchar(50) NOT NULL COMMENT 'Question subject',
  `Question_Message` varchar(100) NOT NULL COMMENT 'Question message',
  `Customer_Name` varchar(50) NOT NULL COMMENT 'Customer identity',
  `Customer_Email` varchar(50) NOT NULL COMMENT 'Customer email'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manageeventquestions`
--

INSERT INTO `manageeventquestions` (`Question_ID`, `Question_Subject`, `Question_Message`, `Customer_Name`, `Customer_Email`) VALUES
(1, 'About Price', 'Can your sen me all the event lists and packages in detail to my email?', 'Ali', 'ali@gmail.com'),
(2, 'About Package', 'The Package 1 have inclided food and drink, if add-on food and drink, what the price?', 'Abu', 'abu@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `Package_ID` int(11) NOT NULL COMMENT 'Package Identity',
  `Package_Name` varchar(50) NOT NULL COMMENT 'Package Name',
  `Package_Type` varchar(50) NOT NULL COMMENT 'Package Type',
  `Package_Description` varchar(100) NOT NULL COMMENT 'Package Description',
  `Package_Price` decimal(10,2) NOT NULL COMMENT 'Package Price'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`Package_ID`, `Package_Name`, `Package_Type`, `Package_Description`, `Package_Price`) VALUES
(1, 'Package 1', 'Basic', '4 hours, flower decoration, with all seats.', '2800.00'),
(2, 'Package 2', 'Standard', '5 hours, standard decoration...', '3800.00'),
(10, 'Package 3 ', 'Premium', '7 hours, luxury decoration, free food and drink...', '5800.00');

-- --------------------------------------------------------

--
-- Table structure for table `paymenthistory`
--

CREATE TABLE `paymenthistory` (
  `Booking_ID` int(11) NOT NULL COMMENT 'Booking id',
  `Event_Name` varchar(100) NOT NULL COMMENT 'Event name',
  `Package` varchar(100) NOT NULL COMMENT 'Event package',
  `Payment_Date` date NOT NULL COMMENT 'Payment date',
  `Equipment_Name` varchar(100) NOT NULL COMMENT 'Equipment name',
  `Equipment_Quantity` varchar(100) NOT NULL COMMENT 'Equipment quantity',
  `Equipment_Price` decimal(10,2) NOT NULL COMMENT 'Equipment price',
  `Total_Price` decimal(10,2) NOT NULL COMMENT 'Total Price',
  `Receipt_Number` varchar(12) NOT NULL COMMENT 'Receipt Number'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `ICno` varchar(100) DEFAULT NULL,
  `Username` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `ContactNo` varchar(100) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Account_Type` varchar(100) DEFAULT NULL,
  `Company` varchar(100) DEFAULT NULL,
  `Gender` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`ICno`, `Username`, `Password`, `Name`, `Address`, `ContactNo`, `Email`, `Account_Type`, `Company`, `Gender`) VALUES
('961003136070', 'sup@', 'sup@', 'sup@', 'jalan gambang', '0196199131', 'sup@gmail.com', 'Supplier', 'University Malaysia Pahang', 'male'),
('961003136070', 'eo@', 'eo@', 'eo@', 'JLN BTU-TATAU', '0196199131', 'eo@gmail.com', 'EventOrganizer', 'University Malaysia Pahang', 'male'),
('961003136070', 'cus@', 'cus@', 'cus@', 'JLN HUSSEIN ONN', '0196199131', 'cus@gmail.com', 'Customer', NULL, 'female');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookequipment`
--
ALTER TABLE `bookequipment`
  ADD PRIMARY KEY (`Booking_ID`);

--
-- Indexes for table `booking_detail`
--
ALTER TABLE `booking_detail`
  ADD PRIMARY KEY (`Booking_ID`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`Booking_ID`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`Equipment_ID`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`Event_ID`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`feedbackid`);

--
-- Indexes for table `manageequipmentquestions`
--
ALTER TABLE `manageequipmentquestions`
  ADD PRIMARY KEY (`Question_ID`);

--
-- Indexes for table `manageeventquestions`
--
ALTER TABLE `manageeventquestions`
  ADD PRIMARY KEY (`Question_ID`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`Package_ID`);

--
-- Indexes for table `paymenthistory`
--
ALTER TABLE `paymenthistory`
  ADD PRIMARY KEY (`Booking_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookequipment`
--
ALTER TABLE `bookequipment`
  MODIFY `Booking_ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Booking id', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `booking_detail`
--
ALTER TABLE `booking_detail`
  MODIFY `Booking_ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Booking Identity', AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `equipment`
--
ALTER TABLE `equipment`
  MODIFY `Equipment_ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Equipment id', AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `Event_ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Event identity', AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `feedbackid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `manageequipmentquestions`
--
ALTER TABLE `manageequipmentquestions`
  MODIFY `Question_ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Question id', AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `manageeventquestions`
--
ALTER TABLE `manageeventquestions`
  MODIFY `Question_ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Question identity', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `Package_ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Package Identity', AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
