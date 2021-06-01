-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2020 at 07:44 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.3.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `Id` int(11) NOT NULL,
  `Image` varchar(50) NOT NULL,
  `About` varchar(1000) NOT NULL,
  `ContactNo` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `aboutfooter` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`Id`, `Image`, `About`, `ContactNo`, `Email`, `Address`, `aboutfooter`) VALUES
(1, 'myimages/Tu2.png', 'SRC travel agency is the first and the biggest foreign investment Company with an advanced and organised transport system in Pakistan. It is the only transport company to have a nationwide network with various international trade links. Being a transport service provider the company owns a large fleet of buses, that provides the transportation facility to the customers based on their requirements. They provide different buses like Express, Luxury, and Volvo (Has two types A/C and Non A/C). The charges are different for different buses.The charges also depend on the distance the customer wants to travel and as well on the age of the customer. The charges also depends on the age, i.e., up to the age of 5 years there will not be any charges, in between 5 12 there will be half charges and for above twelve the charges will be full till the age of 50 and for the age above fifty they will get a discount of 30%.', 2147483647, 'src@hotmail.com', 'Src Center B12 Malir,Karachi ', 'SRC travel agency is the first and the biggest foreign investment Company with an advanced and organized transport system in Pakistan.');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `UserName` varchar(25) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `Image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `Name`, `UserName`, `Email`, `Password`, `Image`) VALUES
(1, 'Sameer Iqbal', 'sam123', 'sam12@gmail.com', 'admin', 'myimages/team-mem-thumb-4.png');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `Book_Id` int(25) NOT NULL,
  `Client_Id` int(25) NOT NULL,
  `Datee_Id` int(25) NOT NULL,
  `Booking_Seats` int(25) NOT NULL,
  `Booking_Price` int(25) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `AmountToRefund` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`Book_Id`, `Client_Id`, `Datee_Id`, `Booking_Seats`, `Booking_Price`, `Status`, `AmountToRefund`) VALUES
(7, 3, 3, 2, 7776, 'Cancelled', '3888');

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `Bus_Id` int(11) NOT NULL,
  `Seats` int(11) NOT NULL,
  `Plate` varchar(25) NOT NULL,
  `Purchase_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`Bus_Id`, `Seats`, `Plate`, `Purchase_Date`) VALUES
(1, 30, 'L8-101', '2020-06-05'),
(2, 40, 'lT-879', '2020-06-10'),
(4, 25, 'VN-855', '2020-06-13'),
(5, 25, 'VA-876', '2020-06-18'),
(7, 40, 'EX-270', '2020-06-19');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Id`, `Name`, `Email`, `Message`) VALUES
(1, 'Asad Ahmed Khan', 'asadjazzy@hotmail.com', 'hello'),
(2, 'Asad Ahmed Khan', 'asadjazzy@hotmail.com', 'hello'),
(3, 'ifrah', 'ifra22@hotmail.com', 'hi'),
(4, 'ifrah', 'ifra22@hotmail.com', 'hi'),
(6, 'shahzina', 'shaz@hotmail.com', 'hello ??'),
(7, 'ifrah', 'ifra22@hotmail.com', 'hey');

-- --------------------------------------------------------

--
-- Table structure for table `dateview`
--

CREATE TABLE `dateview` (
  `Date_Id` int(11) NOT NULL,
  `Stop_Id` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Available_Seats` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dateview`
--

INSERT INTO `dateview` (`Date_Id`, `Stop_Id`, `Date`, `Available_Seats`) VALUES
(3, 44, '2020-07-06', 40),
(4, 45, '2020-06-29', 40),
(5, 46, '2020-07-02', 40),
(6, 44, '2020-06-30', 40),
(7, 44, '2020-07-22', 40);

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `Id` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Contact` int(11) NOT NULL,
  `Customer_Id` int(11) NOT NULL,
  `Customer_Enquiry` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`Id`, `Name`, `Email`, `Contact`, `Customer_Id`, `Customer_Enquiry`) VALUES
(2, 'Asad Ahmed Khan', 'engr.asadak16@hotmail.com', 315111146, 1, 'how to cancel my ticket'),
(3, 'Shahzina khan', 'shahzina.kay@gmail.com', 34216799, 2, 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `refund`
--

CREATE TABLE `refund` (
  `Id` int(11) NOT NULL,
  `Booking_Id` int(25) NOT NULL,
  `Amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE `route` (
  `Id` int(25) NOT NULL,
  `Starting_Point` int(25) NOT NULL,
  `Ending_Point` int(25) NOT NULL,
  `Route_Name` varchar(60) NOT NULL,
  `Service` int(25) NOT NULL,
  `Bus` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`Id`, `Starting_Point`, `Ending_Point`, `Route_Name`, `Service`, `Bus`) VALUES
(4, 1, 3, 'Khi - Lhr (E)', 1, 2),
(6, 3, 8, 'Lhr - Isb (E)', 1, 2),
(7, 8, 10, 'Isb - Pwh (E)', 1, 2),
(8, 10, 8, 'Pwh -Isb (E)', 1, 2),
(9, 8, 3, 'Isb - Lhr (E)', 1, 2),
(10, 3, 1, 'Lhr - Khi (E)', 1, 2),
(11, 1, 3, 'Khi - Lhr (L)', 2, 1),
(12, 1, 3, 'Khi - Lhr (VN-AC)', 3, 4),
(13, 1, 3, 'Khi - Lhr (V-AC)', 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `routecities`
--

CREATE TABLE `routecities` (
  `RC_Id` int(11) NOT NULL,
  `Routes_Id` int(11) NOT NULL,
  `Cities` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `routecities`
--

INSERT INTO `routecities` (`RC_Id`, `Routes_Id`, `Cities`) VALUES
(5, 4, 3),
(6, 4, 4),
(7, 4, 5),
(8, 4, 1),
(10, 6, 6),
(11, 6, 7),
(12, 6, 8),
(13, 6, 3),
(14, 7, 9),
(15, 7, 11),
(16, 7, 8),
(17, 7, 10),
(18, 8, 10),
(19, 8, 11),
(20, 8, 9),
(21, 8, 8),
(22, 9, 8),
(23, 9, 7),
(24, 9, 6),
(25, 9, 3),
(26, 10, 3),
(27, 10, 5),
(28, 10, 4),
(29, 10, 1),
(30, 11, 4),
(31, 11, 5),
(32, 11, 1),
(33, 11, 3);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `Service_Id` int(11) NOT NULL,
  `Service` varchar(50) NOT NULL,
  `Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`Service_Id`, `Service`, `Price`) VALUES
(1, 'EXPRESS', 9),
(2, 'LUXURY', 14),
(3, 'VOLVO NonAC', 16),
(5, 'VOLVO AC', 19);

-- --------------------------------------------------------

--
-- Table structure for table `stops`
--

CREATE TABLE `stops` (
  `Stops_Id` int(11) NOT NULL,
  `Route_Id` int(11) NOT NULL,
  `Price_Per_KM` int(11) NOT NULL,
  `Come_From` int(11) NOT NULL,
  `Departure` int(11) NOT NULL,
  `Time` varchar(11) NOT NULL,
  `Distance` int(11) NOT NULL,
  `Total_Price` int(11) NOT NULL,
  `Stops_Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stops`
--

INSERT INTO `stops` (`Stops_Id`, `Route_Id`, `Price_Per_KM`, `Come_From`, `Departure`, `Time`, `Distance`, `Total_Price`, `Stops_Name`) VALUES
(44, 4, 9, 8, 7, '12:00', 402, 3618, 'Khi - Multan'),
(45, 4, 9, 8, 6, '9:00', 192, 1728, 'Khi - Sukkar'),
(46, 4, 9, 8, 5, '18:00', 1100, 9900, 'khi -Lhr');

-- --------------------------------------------------------

--
-- Table structure for table `terminal`
--

CREATE TABLE `terminal` (
  `Terminal_Id` int(11) NOT NULL,
  `Image` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Contact` int(20) NOT NULL,
  `Address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `terminal`
--

INSERT INTO `terminal` (`Terminal_Id`, `Image`, `City`, `Contact`, `Address`) VALUES
(1, 'myimages/khi.jpg', 'Karachi', 2147483647, 'Gulshan-E-Iqbal, karachi'),
(3, 'myimages/lhr.jpg', 'Lahore', 214584310, 'Ferozpura Road, Lahore '),
(4, 'myimages/skr-2.jpg', 'Sukkur', 2147483647, 'Kalar Goth, Sukkar '),
(5, 'myimages/multan.jpg', 'Multan', 2147483647, 'Clock Chowk, Multan '),
(6, 'myimages/ujj images.jpg', 'Gujranwala', 542100063, 'Rahwali Chowk, Gujranwala'),
(7, 'myimages/rawal.jpg', 'Rawalpindi', 655200031, 'Old Town City, Rawalpindi '),
(8, 'myimages/iiiiiiii.jpg', 'IsIamabad', 755668481, 'D-13 Blue Area , Islamabad'),
(9, 'myimages/attock .jpg', 'Attock', 884587112, 'Kamra Base, Attock'),
(10, 'myimages/Peshawar.jpg', 'Peshawar', 45638217, 'kohat Road, Peshawar'),
(11, 'myimages/Nowhera .jpg', ' Nowshera', 889665451, 'Charsadda Road, Nowshera'),
(12, 'myimages/faisal.jpg', 'Faisalabad', 2147483647, 'City Tower, Faisalabad'),
(13, 'myimages/hyd.jpg', 'Hyderabad', 225360001, 'Old City Campus, Hyderabad');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Email` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `Name`, `UserName`, `Password`, `Email`) VALUES
(3, 'Asad Khan', 'asad16', '12312', 'engr.asadak16@hotmail.com'),
(4, 'shahzina', 'shaz12', '12345', 'shahzina.kay@gmail.com'),
(5, 'ifrah', 'ifrah22', 'abc123', 'ifra22@hotmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `UserName` (`UserName`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`Book_Id`),
  ADD KEY `Book_Id` (`Book_Id`),
  ADD KEY `Client_Id` (`Client_Id`),
  ADD KEY `Stop_Id` (`Datee_Id`);

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`Bus_Id`),
  ADD UNIQUE KEY `Plate` (`Plate`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `dateview`
--
ALTER TABLE `dateview`
  ADD PRIMARY KEY (`Date_Id`),
  ADD KEY `Stop_Id` (`Stop_Id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Booking_Id` (`Customer_Id`);

--
-- Indexes for table `refund`
--
ALTER TABLE `refund`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Booking_Id` (`Booking_Id`);

--
-- Indexes for table `route`
--
ALTER TABLE `route`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id` (`Id`),
  ADD KEY `Service` (`Service`),
  ADD KEY `Bus` (`Bus`),
  ADD KEY `Starting_Point` (`Starting_Point`,`Ending_Point`),
  ADD KEY `Ending_Point` (`Ending_Point`);

--
-- Indexes for table `routecities`
--
ALTER TABLE `routecities`
  ADD PRIMARY KEY (`RC_Id`),
  ADD KEY `routecities_ibfk_1` (`Routes_Id`),
  ADD KEY `Cities` (`Cities`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`Service_Id`),
  ADD UNIQUE KEY `Service_Name` (`Service`),
  ADD UNIQUE KEY `Name` (`Service`),
  ADD KEY `Id` (`Service_Id`);

--
-- Indexes for table `stops`
--
ALTER TABLE `stops`
  ADD PRIMARY KEY (`Stops_Id`),
  ADD KEY `Id` (`Stops_Id`,`Route_Id`),
  ADD KEY `Route_Id` (`Route_Id`),
  ADD KEY `Come_From` (`Come_From`,`Departure`),
  ADD KEY `Derparture` (`Departure`),
  ADD KEY `Price_Per_KM` (`Price_Per_KM`);

--
-- Indexes for table `terminal`
--
ALTER TABLE `terminal`
  ADD PRIMARY KEY (`Terminal_Id`),
  ADD UNIQUE KEY `City` (`City`,`Contact`,`Address`),
  ADD KEY `Id` (`Terminal_Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `Book_Id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `bus`
--
ALTER TABLE `bus`
  MODIFY `Bus_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `dateview`
--
ALTER TABLE `dateview`
  MODIFY `Date_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `refund`
--
ALTER TABLE `refund`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `route`
--
ALTER TABLE `route`
  MODIFY `Id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `routecities`
--
ALTER TABLE `routecities`
  MODIFY `RC_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `Service_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `stops`
--
ALTER TABLE `stops`
  MODIFY `Stops_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `terminal`
--
ALTER TABLE `terminal`
  MODIFY `Terminal_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`Client_Id`) REFERENCES `user` (`Id`),
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`Datee_Id`) REFERENCES `dateview` (`Date_Id`);

--
-- Constraints for table `dateview`
--
ALTER TABLE `dateview`
  ADD CONSTRAINT `dateview_ibfk_1` FOREIGN KEY (`Stop_Id`) REFERENCES `stops` (`Stops_Id`);

--
-- Constraints for table `route`
--
ALTER TABLE `route`
  ADD CONSTRAINT `route_ibfk_1` FOREIGN KEY (`Bus`) REFERENCES `bus` (`Bus_Id`),
  ADD CONSTRAINT `route_ibfk_2` FOREIGN KEY (`Starting_Point`) REFERENCES `terminal` (`Terminal_Id`),
  ADD CONSTRAINT `route_ibfk_3` FOREIGN KEY (`Ending_Point`) REFERENCES `terminal` (`Terminal_Id`),
  ADD CONSTRAINT `route_ibfk_4` FOREIGN KEY (`Service`) REFERENCES `services` (`Service_Id`);

--
-- Constraints for table `routecities`
--
ALTER TABLE `routecities`
  ADD CONSTRAINT `routecities_ibfk_1` FOREIGN KEY (`Routes_Id`) REFERENCES `route` (`Id`),
  ADD CONSTRAINT `routecities_ibfk_2` FOREIGN KEY (`Cities`) REFERENCES `terminal` (`Terminal_Id`);

--
-- Constraints for table `stops`
--
ALTER TABLE `stops`
  ADD CONSTRAINT `stops_ibfk_1` FOREIGN KEY (`Route_Id`) REFERENCES `route` (`Id`),
  ADD CONSTRAINT `stops_ibfk_2` FOREIGN KEY (`Come_From`) REFERENCES `routecities` (`RC_Id`),
  ADD CONSTRAINT `stops_ibfk_3` FOREIGN KEY (`Departure`) REFERENCES `routecities` (`RC_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
