-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2017 at 05:15 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.5.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `semicolon`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `Comment_ID` int(11) NOT NULL,
  `Text` text NOT NULL,
  `Cust_ID` int(11) NOT NULL,
  `Post_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customerprofile`
--

CREATE TABLE `customerprofile` (
  `Cust_ID` int(11) NOT NULL,
  `FullName` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `StreetAddress` varchar(30) NOT NULL,
  `Town` varchar(20) NOT NULL,
  `Province` varchar(20) NOT NULL,
  `ContactNo` int(11) NOT NULL,
  `Interests` text NOT NULL,
  `ProPicture` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customerprofile`
--

INSERT INTO `customerprofile` (`Cust_ID`, `FullName`, `Email`, `Password`, `StreetAddress`, `Town`, `Province`, `ContactNo`, `Interests`, `ProPicture`) VALUES
(1, 'Aaron Rapule', 'rnrapule@gmail.com', '123456', '2001 University road', 'johannesburg', 'gauteng', 736891956, 'web design,photography', 'default.jpg'),
(2, 'Musa Mkhabela', 'musa.General@gmail.com', '123456', '2078 auckland park', 'pretoria', 'gauteng', 601987458, 'Art,design', 'default.jpg'),
(3, 'Smith van der waat', 'Smith94@gmail.com', '654123', '3254 vilakazi', 'santon', 'gauteng', 860010188, 'gardening,decoration,drawing', 'default.jpg'),
(4, 'Josh Mathebula', 'JMath@gmail.com', 'MathJ', '130 Sunnyside', 'Santon', 'gauteng', 786467866, 'music,car', 'default.jpg'),
(5, 'Pinky Zuma', 'Pinky@yahoo.com', '321456', '125 mashiya street', 'Heneman', 'free state', 735687456, 'mathematics,physical science', 'default.jpg'),
(6, 'Blauw duplesis', 'BlauwBB@gmail.com', 'blauw123', '24 hampton street', 'melville', 'gauteng', 765658123, 'web design,electronic', 'default.jpg'),
(7, 'Mavee Muzengerere', 'Mavee.Info@gmail.com', 'MaveeMavee', '254 hlokwa street', 'mafikeng', 'North West', 612547896, 'electronic', 'default.jpg'),
(8, 'Jefrrey Smith', 'Jeffrey@yahoo.com', 'jeffreyatrey', '1531 chabedi street', 'Fochville', 'Mpumalanga', 788741235, 'Paiting,Buillding', 'default.jpg'),
(9, 'Nkosi Zuma', 'Msholozi@gmail.com', 'nkandla', '25 nkandla street', 'bisho', 'Western cape', 843658795, 'Painting', 'default.jpg'),
(10, 'Lilly Mzilikazi', 'LillyValley@gmail.com', 'ValleyLilly123', '1626 dladla street', 'bloemfontein', 'free state', 789564123, 'hair stylist', 'default.jpg'),
(11, 'Given Khoza', 'Khoza@gmail.com', 'Mkhozen123', '19 De beer street', 'Braamfontein', 'gauteng', 103654782, 'electronics', 'default.jpg'),
(12, 'Raymond Donavan', 'DonaDona@gmai.com', 'DonRaymond', '12 chakane street', 'Musina', 'Limpopo', 613257841, 'fashion,Clothing', 'default.jpg'),
(13, 'Beauty Nhlapo', 'beautifulies@yahoo.com', 'beautifulies1234', '12 madiba street', 'Parys', 'Free state', 786541785, 'Fashion,Design', 'default.jpg'),
(14, 'Trevor Dubula', 'Dubula@gmail.com', 'DubulaniT', '12 Helen street', 'De Arr', 'Northern Cape', 782541236, '', 'default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `freelancerprofile`
--

CREATE TABLE `freelancerprofile` (
  `Free_ID` int(100) NOT NULL,
  `FullName` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `StreetAddress` varchar(30) NOT NULL,
  `Town` varchar(20) NOT NULL,
  `Province` varchar(20) NOT NULL,
  `ContactNo` int(11) NOT NULL,
  `WorkType` varchar(30) NOT NULL,
  `Description` text NOT NULL,
  `VerifyStatus` tinyint(1) NOT NULL,
  `ProfilePic` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `freelancerprofile`
--

INSERT INTO `freelancerprofile` (`Free_ID`, `FullName`, `Email`, `Password`, `StreetAddress`, `Town`, `Province`, `ContactNo`, `WorkType`, `Description`, `VerifyStatus`, `ProfilePic`) VALUES
(1, 'Jeffrey Dimon', 'jeff@gmail.com', '1111', '428 Barnes Brixton', 'Johannesburg', 'Gauteng', 748897456, 'Chef', 'I love cooking and serving the best meals ever', 1, 'default.jpg'),
(2, 'Peter Brown', 'peter@yahoo.com', '2222', '74 Queens Street Diepkloof', 'Soweto', 'Gauteng', 746659632, 'Graphic Designer', 'Design is my favorite type of work and I give my all when designing', 1, 'default.jpg'),
(3, 'Zinhle Mbele', 'zee@gmail.com', '3333', '458 Fredo Street ', 'Newcastle', 'KwaZuluNatal', 825569874, 'Musician', 'I do different kinds of music and different kinds of performances for different audience', 1, 'default.jpg'),
(4, 'Tony Berg', 'tong656@gmail.com', '4444', '14 Milnerton Street ', 'CapeTown', 'Western Cape', 117456321, 'Fashion designer', 'I design different kinds of cloths for weddings, social gatherings, matric daaces and all occassions.\r\n', 1, 'default.jpg'),
(5, 'Watson Mashele', 'watty88@gmail.com', '5555', '123 Pirece Street', 'Port Elizebeth', 'Eastern Cape', 789635214, 'Plumber', 'I fix leaking pipes and assist with upgrading the house with piping.', 1, 'default.jpg'),
(6, 'Sipho Masombuka', 'siphoM@gmail.com', '6666', '765 Mabaso Street', 'Tzaneen', 'Limpopo', 748963217, 'Electrician', 'I can do all types of electricity related work, from installation to maintenance', 1, 'default.jpg'),
(7, 'Ndumiso Buthelezi', 'ndu90@gmail.com', '7777', '8547 Gwala Street', 'Bloemfontein', 'Free State', 625557412, 'Web developer', 'My company does a good job when it comes to developing websites and all this at reasonable prices', 1, 'default.jpg'),
(8, 'David Simpson', 'davesimpson@webmail.com', '8888', '234 Aquila Street', 'Pretoria', 'Gauteng', 789965214, 'Builder', 'I love building and I believe that my skills set me apart from all the designers.', 1, 'default.jpg'),
(9, 'Buyisiwe Sello', 'buyiSello@yahoo.com', '9999', '7456 Klopp Street', 'Kimberly', 'Northern Cape', 796351475, 'Shoemaker', 'I repair shoes and provide the best services to make sure that your shoes are up to date', 1, 'default.jpg'),
(10, 'Steven Frankil', 'stevieF@gmail.com', '1010', '9634 Shone Street', 'Witbank', 'Mpumalanga', 746632010, 'Photographer', 'I take pictures and provide frames for those pictures.If there is any event that requires pictures to be taken please contact me.', 1, 'default.jpg'),
(11, 'Lefa Bloomberg', 'lefa@gmail.com', '1111', '7456 Putney Street', 'Germiston', 'Gauteng', 846665231, 'Painting', 'There are many paintings that I have drawn and provide the best services if you ever need drawings in your house let me know', 1, 'default.jpg'),
(12, 'Lucky Mvelase', 'luckymv45@webmail.com', '1212', '635 Gwala Street', 'GreyTown', 'KwaZuluNatal', 825457893, 'Electrician', 'I fix all electrical appliances and at a much faster rate', 1, 'default.jpg'),
(13, 'Duncan Klopp', 'dunKloop@gmail.com', '1313', '7856 Jobs Road', 'Hilbrow', 'Gauteng', 635874122, 'Car Mechanic', 'I fix trucks, busses and cars for a living. I am one of the best in and around Johannesburg', 1, 'default.jpg'),
(14, 'Gugu Hlatswayo', 'gugza@gmail.com', '1414', '6585 Mali Street', 'Soweto', 'Gauteng', 746321478, 'HairStylist', 'I do different hair styles for different genders. Contact me and I will make you look great', 1, 'default.jpg'),
(15, 'Thabo Witkus', 'thaboW@webmail.com', '1515', '6547 Tlali Road', 'Giyani', 'Limpopo', 624478974, 'Plumber', 'I fix leaking water', 1, 'default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `postwork`
--

CREATE TABLE `postwork` (
  `Post_ID` int(11) NOT NULL,
  `Post_Text` text NOT NULL,
  `Post_File` varchar(50) NOT NULL,
  `likes` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `Free_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `postwork`
--

INSERT INTO `postwork` (`Post_ID`, `Post_Text`, `Post_File`, `likes`, `date`, `Free_ID`) VALUES
(1, 'Piano lessons that will change the way you hear music.', 'piano.jpg', 35, '2017-04-04 07:27:14', 1),
(2, 'Pimp your sneaker, personalise your sneaker.', 'shoe.jpg', 75, '2017-04-13 14:15:10', 2),
(3, 'Dj Musa, make your party LIT with the latest and hottest tracks.', 'music.jpg', 75, '2017-04-09 12:13:30', 3),
(4, 'Your iPhone screen as good as brand new, a screen repair that wont leave you dissapointed.', 'phone.jpg', 44, '2017-04-04 13:14:43', 4),
(5, 'Spray Paint your car, add a little you to your ride. #PimpMyRide', 'car.jpg', 65, '2017-04-01 14:27:13', 5);

-- --------------------------------------------------------

--
-- Table structure for table `requestmessage`
--

CREATE TABLE `requestmessage` (
  `Request_ID` int(11) NOT NULL,
  `Message` varchar(50) NOT NULL,
  `date` datetime NOT NULL,
  `time` datetime NOT NULL,
  `Cust_ID` int(11) NOT NULL,
  `Free_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`Comment_ID`);

--
-- Indexes for table `customerprofile`
--
ALTER TABLE `customerprofile`
  ADD PRIMARY KEY (`Cust_ID`);

--
-- Indexes for table `freelancerprofile`
--
ALTER TABLE `freelancerprofile`
  ADD PRIMARY KEY (`Free_ID`);

--
-- Indexes for table `postwork`
--
ALTER TABLE `postwork`
  ADD PRIMARY KEY (`Post_ID`);

--
-- Indexes for table `requestmessage`
--
ALTER TABLE `requestmessage`
  ADD PRIMARY KEY (`Request_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `Comment_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `customerprofile`
--
ALTER TABLE `customerprofile`
  MODIFY `Cust_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `freelancerprofile`
--
ALTER TABLE `freelancerprofile`
  MODIFY `Free_ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `postwork`
--
ALTER TABLE `postwork`
  MODIFY `Post_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `requestmessage`
--
ALTER TABLE `requestmessage`
  MODIFY `Request_ID` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
