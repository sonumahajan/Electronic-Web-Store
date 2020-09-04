-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 10, 2020 at 12:19 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `signup`
--

-- --------------------------------------------------------

--
-- Table structure for table `admintable`
--

CREATE TABLE IF NOT EXISTS `admintable` (
  `ad_id` int(11) NOT NULL AUTO_INCREMENT,
  `ad_user` varchar(255) NOT NULL,
  `ad_pass` varchar(255) NOT NULL,
  PRIMARY KEY (`ad_id`),
  UNIQUE KEY `ad_user` (`ad_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admintable`
--

INSERT INTO `admintable` (`ad_id`, `ad_user`, `ad_pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `c_user` varchar(255) NOT NULL,
  `c_id` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `c_user`, `c_id`) VALUES
(24, 'sample@gmail.com', '4'),
(25, 'sample@gmail.com', '64'),
(26, 'sample@gmail.com', '22'),
(27, 'sample@gmail.com', '89'),
(28, 'user1234', '43'),
(29, 'user1234', '8'),
(30, 'user1234', '88');

-- --------------------------------------------------------

--
-- Table structure for table `mobile`
--

CREATE TABLE IF NOT EXISTS `mobile` (
  `pro_id` int(100) NOT NULL AUTO_INCREMENT,
  `pro_name` varchar(255) NOT NULL,
  `pro_review` varchar(255) NOT NULL,
  `pro_rs` varchar(255) NOT NULL,
  `pro_mrp` varchar(255) NOT NULL,
  `pro_img` varchar(255) NOT NULL,
  `pro_li1` varchar(255) NOT NULL,
  `pro_li2` varchar(255) NOT NULL,
  `pro_li3` varchar(255) NOT NULL,
  `pro_li4` varchar(255) NOT NULL,
  `pro_li5` varchar(255) NOT NULL,
  PRIMARY KEY (`pro_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=101 ;

--
-- Dumping data for table `mobile`
--

INSERT INTO `mobile` (`pro_id`, `pro_name`, `pro_review`, `pro_rs`, `pro_mrp`, `pro_img`, `pro_li1`, `pro_li2`, `pro_li3`, `pro_li4`, `pro_li5`) VALUES
(1, 'Iphone X', '375', '54999', '58999', 'photo/apple1.jpeg', '6.1-inch Liquid Retina display (LCD)', 'IP67 water and dust resistant (maximum depth of 1 meter up to 30 minutes)', 'Face ID for secure authentication', 'Wireless charging—works with Qi chargers', 'A12 Bionic with next-generation Neural Engine'),
(2, 'Iphone 8A', '133', '19999', '23999', 'photo/apple2.jpeg', '5.5-inch Retina HD display', 'IP67 water and dust resistant (maximum depth of 1 meter up to 30 minutes)', '7MP FaceTime HD camera with Retina Flash', 'Touch ID for secure authentication', 'A11 Bionic with Neural Engine'),
(3, 'Iphone XS', '525', '59999', '89999', 'photo/apple3.jpeg', '6.1-inch Liquid Retina display (LCD)', 'IP67 water and dust resistant (maximum depth of 1 meter up to 30 minutes)', 'Face ID for secure authentication', 'Wireless charging—works with Qi chargers', 'A12 Bionic with next-generation Neural Engine'),
(4, 'Iphone 7', '43', '34999', '37900', 'photo/apple4.jpeg', '5.5-inch Retina HD display', 'IP67 water and dust resistant (maximum depth of 1 meter up to 30 minutes)', '7MP FaceTime HD camera with Retina Flash', 'Touch ID for secure authentication', 'A11 Bionic with Neural Engine'),
(5, 'Iphone 8', '37', '36999', '39999', 'photo/apple5.jpeg', '5.5-inch Retina HD display', 'IP67 water and dust resistant (maximum depth of 1 meter up to 30 minutes)', '7MP FaceTime HD camera with Retina Flash', 'Touch ID for secure authentication', 'A11 Bionic with Neural Engine'),
(6, 'Radmi Note 7', '343', '10999', '16999', 'photo/mi1.jpeg', '48MP AI Quad camera with portrait, ultra-wide lens, macro lens', 'LED flash, AI support, beautify support', '13MP front camera with AI portrait mode', 'Memory, Storage & SIM: 4GB RAM; 64GB internal memory', 'Android Pie v9 operating system'),
(7, 'Radmi Note 8', '979', '14259', '15999', 'photo/mi2.jpeg', '48MP AI Quad camera with portrait, ultra-wide lens, macro lens', 'LED flash, AI support, beautify support', '13MP front camera with AI portrait mode', 'Memory, Storage & SIM: 4GB RAM; 64GB internal', 'Android Pie v9 operating system'),
(8, 'Radmi 7S', '943', '11999', '13999', 'photo/mi3.jpeg', '12MP+2MP dual rear camera | 8MP front facing camera', '15.9004 centimeters (6.26-inch) with 1520 x 720 pixels', 'Memory, Storage and SIM: 3GB RAM | 32GB internal memory', 'LED flash, AI support, beautify support', 'Android Pie v9.0 operating system'),
(9, 'Radmi F2', '65', '11789', '18999', 'photo/mi4.jpeg', '12MP+5MP AI dual camera; 20MP front camera', 'LED flash, AI support, beautify support', 'Memory, Storage & SIM: 6GB RAM', '128 internal memory expandable up to 128GB', 'Dual SIM (nano+nano) dual-standby (4G+4G)'),
(10, 'Radmi GO', '463', '4299', '5999', 'photo/mi5.jpeg', '1 GB RAM | 16 GB ROM | Expandable Upto 128 GB', '12.7 cm (5 inch) HD Display', '8MP Rear Camera | 5MP Front Camera', 'LED flash, AI support, beautify support', '3000 mAh Li Polymer Battery'),
(11, 'Honor 7X', '375', '9999', '12999', 'photo/honor1.jpeg', '12MP+5MP AI dual camera; 20MP front camera', 'Memory, Storage & SIM: 6GB RAM', '128 internal memory expandable up to 128GB', 'Dual SIM (nano+nano) dual-standby (4G+4G)', 'LED flash, AI support, beautify support'),
(12, 'Honor 20i', '133', '10999', '16999', 'photo/honor2.jpeg', '12MP+2MP dual rear camera', 'LED flash, AI support, beautify support', '15.9004 centimeters (6.26-inch) with 1520 x 720 pixels', 'Memory, Storage and SIM: 3GB RAM | 32GB internal memory', 'Android Pie v9.0 operating system'),
(13, 'Honor 9N', '525', '10999', '13999', 'photo/honor3.jpeg', '12MP+2MP AI dual camera; 12MP front camera', 'LED flash, AI support, beautify support', 'Memory, Storage & SIM: 6GB RAM', '128 internal memory expandable up to 64GB', 'Dual SIM (nano+nano) dual-standby (3G+3G)'),
(14, 'Honor 7C', '39', '11999', '13999', 'photo/honor4.jpeg', '12MP+5MP AI dual camera; 20MP front camera', 'LED flash, AI support, beautify support', 'Memory, Storage & SIM: 6GB RAM', '128 internal memory expandable up to 128GB', 'Dual SIM (nano+nano) dual-standby (4G+4G)'),
(15, 'Honor 8 lite', '37', '8999', '11999', 'photo/honor5.jpeg', '12MP+2MP AI dual camera; 12MP front camera', 'Memory, Storage & SIM: 6GB RAM', '128 internal memory expandable up to 64GB', 'LED flash, AI support, beautify support', 'Dual SIM (nano+nano) dual-standby (3G+3G)'),
(16, 'Samsung e3', '343', '12999', '13999', 'photo/samsung1.jpeg', '12MP+6MP AI dual camera; 12MP front camera', 'Memory, Storage & SIM: 6GB RAM', '128 internal memory expandable up to 64GB', 'LED flash, AI support, beautify support', 'Dual SIM (nano+nano) dual-standby (4G+3G)'),
(17, 'Samsung Metro', '3761', '1997', '3000', 'photo/samsung2.jpeg', 'Poly Ringtone, Mini-SIM', '1.52-inch TFT screen with 128x128 pixels resolution', 'Samsung proprietary operating system', 'LED flash, beautify support', '800mAH battery providing talktime of 7 hours'),
(18, 'Samsung A71', '943', '11999', '13999', 'photo/samsung3.jpeg', '1 GB RAM | 16 GB ROM | Expandable Upto 128 GB', 'LED flash, AI support, beautify support', '12.7 cm (5 inch) HD Display', '8MP Rear Camera | 5MP Front Camera', '3000 mAh Li Polymer Battery'),
(19, 'Samsung J2', '65', '6789', '9999', 'photo/samsung4.jpeg', '12MP+5MP AI dual camera; 12MP front camera', 'Memory, Storage & SIM: 6GB RAM', 'LED flash, AI support, beautify support', '128 internal memory expandable up to 64GB', 'Dual SIM (nano+nano) dual-standby (4G+3G)'),
(20, 'Samsung Guru', '463', '1565', '5999', 'photo/samsung5.jpeg', 'Poly Ringtone, Mini-SIM', 'LED flash, beautify support', '1.52-inch TFT screen with 128x128 pixels resolution', 'Samsung proprietary operating system', '800mAH battery providing talktime of 7 hours'),
(21, 'Dell Vostro 3000 Core i3 8th Gen - (4 GB/1 TB HDD/Linux/Window/Dos) 3480 Laptop', '3343', '54999', '84999', 'photo/dell1.jpeg', '1.60GhzGHz Intel Core i5-8265U 8th Gen processor', '8GB DDR4 RAM', '1TB 5400rpm hard drive', '15.6-inch screen, 2GB AMD Radeon 520 Graphics', 'Window 10 operating system'),
(22, 'Dell Inspiron 13 5000 Series Core i3 7th Gen - (4 GB/1 TB HDD/Windows 10 Home) 5378 2 in 1 Laptop', '2169', '44999', '50999', 'photo/dell2.jpeg', 'Pre-installed Genuine Windows 10 OS', 'Preloaded MS Office Home and Student 2016', 'Light Laptop without Optical Disk Drive', '15.6 inch Full HD LED Backlit Anti-glare Display', 'Cash on Delivery'),
(23, 'Dell 14 3000 Core i3 7th Gen - (4 GB/1 TB HDD/Windows 10 Home/Dos) inspiron3481 Laptop', '2236', '37999', '44999', 'photo/dell3.jpeg', 'Processor: 8th Generation Intel(r) Core(tm) i3-8145U Processor ', ' Anti-Glare LED-Backlit Non-touch Display', '4GB DDR4 RAM with Intel HD Graphics', 'Storage: 1TB HDD', '4GB DDR4 RAM with Intel HD Graphics'),
(24, 'Dell XPS 15 Core i9 9th Gen - (32 GB/1 TB SSD/Windows 10 Home/4 GB Graphics) 7590 Laptop', '3966', '49999', '72999', 'photo/dell4.jpeg', 'Pre-installed Genuine Windows 10 OS', 'Preloaded MS Office Home and Student 2016', 'Light Laptop without Optical Disk Drive', '15.6 inch UHD LED Backlit Anti-glare IPS Display', 'Cash on Delivery'),
(25, 'Dell Inspiron 13 5000 Core i5 8th Gen - (8 GB/256 GB SSD/Windows 10 Home) 5370 Thin and Light Laptop', '3579', '44999', '64999', 'photo/dell5.jpeg', 'Thin and Light Laptop', '13 inch Full HD LED Backlit Anti-glare IPS Display', 'Platinum Silver 13 5000', 'Backup is 4.5 to 6 hours at normal', 'Cash on Delivery'),
(26, 'Lenovo Ideapad 130 APU Dual Core A6 - (4 GB/1 TB HDD/DOS/Windows 10) 130-15AST Laptop', '1234', '16990', '24999', 'photo/lenovo1.jpeg', 'Intel Celeron 3867U processor, 1.8 Ghz speed, 2 cores, 2 Mb Smart Cache', 'Pre-loaded Windows 10 Home with lifetime validity', '4 GB RAM | Storage 1 TB HDD', 'Design & battery: Laptop weight 2.2kg', ' USB 3.0 | 1 Type C (USB 3.0) | 1 HDMI 2.0 | 4-in-1 card reader (SD,SDHC,SDXC,MMC)'),
(27, 'Lenovo Core i7 8th Gen - (8 GB/1 TB HDD/Windows 10 Home/2 GB Graphics) L340-15IWL Laptop', '325', '52990', '64999', 'photo/lenovo2.jpeg', ' 8th Generation Intel(r) Core(tm) i3-8145U Processor', 'Pre-loaded Windows 10 with lifetime validity', '4GB DDR4 RAM with Intel HD Graphics ', 'Enabled with TPM 2.0', ' 3-Cell 42WHr Battery (Integrated))'),
(28, 'Lenovo Legion Y530 Core i5 8th Gen - (8 GB/512 GB SSD/Windows 10 Home/4 GB Graphics Geforce', '1728', '55990', '65999', 'photo/lenovo3.jpeg', '8th Generation Core Intel I5-8265U processor, 1.6 Ghz base', 'Pre-loaded Windows 10 Home with lifetime validity', '8 GB RAM | Storage 1 TB HDD + 128 GB SSD | 2GB', 'Battery Life: Upto 5.5 hours as per MobileMark', 'Pre-Installed Software: Microsoft Office Home and Student 2019'),
(29, 'Lenovo Ideapad S145 Ryzen 3 Dual Core - (4 GB/1 TB HDD/Windows 10 Home) S145-15API Thin and Light Lapt...', '3,246', '24990', '34999', 'photo/lenovo4.jpeg', 'AMD Ryzen 3 3200U processor, 2.6 Ghz base speed, 3.5 Ghz max speed', 'Pre-loaded Windows 10 Home with lifetime validity', '15.6-inch screen with (1920X1080) full HD display | Anti Glare technology', 'Thin and light Laptop| 180 Degree Hinge', ' 1 HDMI, 2 USB 3.0, USB 2.0 |4-in-1 card reader'),
(30, 'Lenovo Yoga 730 Core i7 8th Gen - (8 GB/512 GB SSD/Windows 10 Home) 730-13IKB Thin and Light Laptop ', '2,343', '79990', '84999', 'photo/lenovo5.jpeg', '8th Gen Intel Core i7-8550U processor, 1.8GHz base processor speed', '8GB DDR4 RAM with Integrated Intel Graphics | Storage: 512GB SSD', '13.3-inch Full HD (1920x1080) Laptop | Touchscreen | Bluetooth Active Pen 2', 'Pre-loaded Windows 10 Home with lifetime validity', '2-in-1 Convertible Laptop | Laptop weight 1.12 kg | 360-degree hinge '),
(31, 'Apple MacBook Air Core i5 8th Gen - (8 GB/256 GB SSD/Mac OS Mojave) A1932 ', '2,774', '109990', '111990', 'photo/ipad1.jpeg', '13.3-inch (diagonal) LED-backlit Retina display', '1.8GHz dual-core 5th-generation Intel Core i5 with Turbo Boost up to 2.9GHz', 'Up to 10 hours wireless web battery life', '128GB or 256GB SSD', 'Intel HD Graphics 6000'),
(32, 'Apple MacBook Air Core i5 5th Gen - (8 GB/128 GB SSD/Mac OS Sierra) A1466 ', '13674', '75990', '84,999', 'photo/ipad2.jpeg', 'Dual-core 5th-generation', 'Intel Core i5 processor', 'Intel HD Graphics 6000  ', 'SSD storage 8GB memory', 'Two USB 3 ports Thunderbolt 2 port'),
(33, 'Apple MacBook Air Core i5 8th Gen - (8 GB/256 GB SSD/Mac OS Mojave) MREF2HN', '682', '127990', '134999', 'photo/ipad3.jpeg', 'Stunning 13.3-inch Retina display ', 'Touch ID , Fast SSD storage , 8GB memory ', 'Dual-core 8th-generation Intel Core i5 processor with Intel UHD Graphics 617 ', 'Stereo speakers with wider stereo sound , Force Touch trackpad ', 'Two Thunderbolt 3 (USB-C) ports'),
(34, 'Dell Vostro 3000 Core i3 8th Gen - (4 GB/1 TB HDD/Linux) 3480 Laptop', '3,446', '54999', '84999', 'photo/ipad4.jpeg', '8th Gen Intel Core i5-8250U processor', 'Pre-loaded Windows 10 Home with lifetime validity', '14-inch HD (1366x768) display Memory & Storage: 4GB DDR4 RAM', ' This genuine Dell laptop comes with 1 year onsite domestic warranty', 'Pre-installed Software: MS Office Home & Student 2016'),
(35, 'Apple MacBook Pro Core i5 7th Gen - (8 GB/128 GB SSD/Mac OS Sierra) MPXQ2HN/A', '343', '127999', '134999', 'photo/ipad5.jpeg', 'Dual-core 5th-generation ', 'Intel Core i5 processor ', 'Intel HD Graphics 6000 SSD storage 8GB memory ', 'Two USB 3 ports ', 'Thunderbolt 2 port SDXC port'),
(36, 'HP 15q Core i3 7th Gen - (8 GB/1 TB HDD/DOS/Windows 10/Dos/Linux) 15q-ds0017TU Laptop', '6,445', '30990', '44999', 'photo/hp1.jpeg', 'Quad-core 8th-generation Intel Core i5 processor;', 'Touch Bar and Touch ID; Intel Iris Plus Graphics 645', 'Ultrafast SSD; Two Thunderbolt 3 (USB-C) ports', 'Latest Apple-designed keyboard', 'Up to 10 hours of battery life'),
(37, 'HP 15q Ryzen 3 Dual Core - (4 GB/1 TB HDD/Windows 10 Home/Linus/Dos) 15q-dy0004au Laptop', '475', '27990', '34999', 'photo/hp2.jpeg', ' AMD Ryzen 3 3200U processor, 2.6 GHz base processor', '15.6-inch Full HD (1920x1080) display, brightness: 220 nits', '4GB DDR4 RAM, with AMD Radeon Vega 3 Graphics', 'Laptop weight: 1.77 kg |maximum battery life = Up to', ' This genuine HP laptop comes with a 1-year domestic'),
(38, 'HP Pavilion 15-EC Ryzen 5 Quad Core - (8 GB/1 TB HDD/128 GB SSD/Windows 10 Home/3 GB Graphics', '2,346', '49999', '54999', 'photo/hp3.jpeg', 'AMD Ryzen 5-3550H Quad-core processor (2.1 GHz base clock speed, up to 3.7 GHz ', ' NVIDIA GeForce GTX 1650 (4 GB GDDR5 dedicated) Graphics', 'Pre-loaded Windows 10 Home with lifetime validity', '15.6-inch Full HD (1920 x 1080) anti-glare IPS display | 60Hz refresh rate | 250 Nits brightness', '1 TB 7200 rpm SATA HDD + 256 GB PCIe NVMe M.2 SSD'),
(39, 'HP Vostro 3000 Core i3 8th Gen - (4 GB/1 TB HDD/Linux/Windows 10) 3480 Laptop', '443', '54999', '84999', 'photo/hp4.jpeg', '8GB LPDDR3 RAM, Storage: 256GB PCIe NVMe M.2 SSD(Everything HP original)', 'Intel Quad-Core i5-8350U Vpro (4 Cores 8 Threads, up to 3.6Ghz, 6MB Cache)', '13" diagonal (3000 x 2000) IPS LED-backlit TOUCH SCREEN with Corning Gorilla Glass 4', '2x Type-C Thunderbolt and 1x Type-C, 5 MP (1080p) front and 8 MP', 'Windows 10 Pro 64-bit Ideal for Home, Professionals'),
(40, 'HP 15s Ryzen 3 Dual Core - (4 GB/256 GB SSD/Windows 10 Home) 15s-eq0007AU Thin and Light Laptop', '1943', '44999', '50999', 'photo/hp5.jpeg', 'AMD Ryzen 3 3200U processor, 2.6 GHz base processor speed, up to 3.5 GHz burst frequency, 2 cores', '15.6-inch Full HD (1920x1080) display, brightness: 220 nits, WLED backlit display', '4GB DDR4 RAM, with AMD Radeon Vega 3 Graphics, Storage: 512 GB SSD', 'Laptop weight: 1.77 kg |maximum battery life = Up to 13 hours, HP Fast Charge battery', 'This genuine HP laptop comes with a 1-year domestic warranty from HP covering '),
(41, 'AR Enterprises RC Jackman 1:18 Ferrari Style Racing Car with Rechargeable..', '3,343', '1126', '1999', 'photo/toy1.jpeg', 'Type: Cars & Bikes Material', 'Plastic Battery Operated', ' 2 Battteries Rechargeable Batteries', ' Width x Height: 6 inch x 3 inch', 'Best Build Quality'),
(42, 'Miss & Chief Waterproof Remote Controlled Rock Crawler ...', '2,169', '999', '1200', 'photo/toy2.jpeg', 'Saffire 2. 4GHz remote control rock crawler, arc monster truck 4wd', 'Amazing crawling technology and strong shocks makes it easy to use', 'Solid frame chassis, high strength composite plastic is impact resistant', 'Oversize tires makes it easy to use in mud, shallow water, grass, paving or off road', 'Battery Required - Yes (3x1.5V AA type battery required) Battery Included - No'),
(43, 'Kiyara Collection Exceed (LH-1803) 2 in 1 Helicopter Fully Function', '2,236', '745 ', '999', 'photo/toy3.jpeg', 'Saffire 2. 4GHz remote control rock crawler, arc monster truck 4wd', 'Amazing crawling technology and strong shocks makes it easy to use', 'Battery Required - Yes (3x1.5V AA type battery required) Battery Included - No', 'Oversize tires makes it easy to use in mud, shallow water, grass, paving or off road', 'Solid frame chassis, high strength composite plastic is impact resistant'),
(44, 'Kiyara Collection Exceed (LH-1803) 2 in 1 Helicopter Fully Function', '3,966', '984', '1123', 'photo/toy4.jpeg', 'Made of High Quality ABS Plastic', 'Full Functional Remote Control Toy; Functions: Movement in all 4', 'Brilliant and Flashing lightning effect.', 'directions from remote, Head Swing, Hand Movement, Lights, Sound', 'A11 Bionic with Neural Engine'),
(45, 'Charnalia Singing Dancing Naughty robot Rechargeable..', '3,579', '685', '754', 'photo/toy5.jpeg', 'Musical Dancing Robot with 3D Flashing Lights', 'Full Functional Remote Control Toy; Functions: Movement in all 4', 'directions from remote, Head Swing, Hand Movement, Lights, Sound', 'Made of High Quality ABS Plastic', 'Brilliant and Flashing lightning effect.'),
(46, 'KM ROYALS Wired Remote Control Battery Operated JCB Cra...', '1,234', '875', '900', 'photo/toy6.jpeg', 'Type: Remote Control Toys Accessories ', 'Material: Plastic ', 'Battery Operated, 2 Battteries ', 'Non-rechargeable Batteries', 'Width x Height: 13 cm x 12 cm'),
(47, 'Miss & Chief Waterproof Remote Controlled Rock Crawler ...', '325', '1283', '1999', 'photo/toy7.jpeg', 'Metal Alloy Car for Kids, Monster Truck , CrossRace 4WD Car ', 'Damping system ,Antiskid and Abrasion Proof Rubber', 'Ready to Run and no Assembly needed,Perfect Racing Series gifts ', 'Rubber Big Tire, Anti-skid, Strong Grip, Soft and Stretchy, More Stable', 'Four Metal Suspension Links And Springs, Strong Shockproof System'),
(48, 'Miss & Chief Waterproof Remote Controlled Rock Crawler ...', '1,728', '876', '900', 'photo/toy8.jpeg', 'Webby 2. 4GHz remote control rock crawler, arc monster truck 4wd', 'Amazing crawling technology and strong shocks makes it easy to use', 'Solid frame chassis, high strength composite plastic is impact resistant', 'Oversize tires makes it easy to use in mud, shallow water, grass, paving', 'Rechargeable Battery For The Car 3.6V Included Along With USB '),
(49, 'X ZINI HX750 Drone 2.6 Ghz 6 Channel Remote Control Qua Rechargeable..', '3,246', '826', '999', 'photo/toy9.jpeg', '360° Roll-Over: The simple flying of WSAD is too boring', '6 Channel Stable Remote-Control Quadcopter Drone,Very Fun To Fly', 'It Has Strong Stability, Easily Implement Various Flight Movements', 'Charging Time: 40 mnt Quadcopter Battery: 3.7V 300Mah The Drone', '360 Degree Spins and Flips: Forward, Backward,Turn Left, Turn Right'),
(50, 'Miss & Chief Bugatti Transformer Car with Rechargeable ...', '2,343', '837', '963', 'photo/toy10.jpeg', 'Material Type : Plastic, Car which converts in to Robot Car', 'Hight : 10cm , Width : 7.5cm , Length : 22cm. Weight : 322 Grams', 'With lights & music', 'Moves in 360 degrees', 'Battery Included: No , Type of Battery : AA , Rechargable'),
(51, 'Ben 10 Rechargeable Stunt Car Big Size 360 Degree Rotat.', '2,774', '873', '900', 'photo/toy11.jpeg', 'Rotating 360 degree , 3D projection light, dynamic music, all- around dancers', 'It is 360 degrees rotating front axle to help perform various stunts', 'Racing car is special because of his beautiful looking model car', 'Made of clean ABS plastic. Size of the car is 1:24 scale model', 'Approximate dimensions: h-6.1l-7.25 w-6 inches'),
(52, 'Miss & Chief 6 in 1 Double sided Stunt Car with Recharg', '13,674', '532', '700', 'photo/toy12.jpeg', '360 Degree Twister Stunt Car For Kids with Remote conrol', 'Amazing Super Turbo Summer Sault Racer Multifunctional Magic Aerobatic Stunt Car', 'Your Kids Love to play with this car', 'Approximate dimensions: h-6.1l-7.25 w-6 inches', 'Racing car is special because of his beautiful looking model car'),
(53, 'Miss & Chief 6 in 1 Double sided Stunt Car with Recharg', '682', '837', '999', 'photo/toy13.jpeg', 'Rotating 360 degree , 3D projection light, dynamic music, all- around dancers', 'It is 360 degrees rotating front axle to help perform various stunts', 'Racing car is special because of his beautiful looking model car', 'Approximate dimensions: h-6.1l-7.25 w-6 inches', 'Made of clean ABS plastic. Size of the car is 1:24 scale model'),
(54, 'Kanchan Toys Steering Remote Car For Kids Rechargeable', '3,446', '999', '1199', 'photo/toy14.jpeg', 'Easy to maneuver fast and full function remote control ', 'Factory assembled ready to roll the road 3 AA batteries required for car', 'Best gift toy for remote control car lovers to have great for toddlers', 'It will surely be a toy your little one will adore', 'Any Color will send as per Availability. Battery are Not Included'),
(55, 'Deep Remote Controlled Rock Crawler, RC Monster Truck Rechargeable', '343', '1271', '1343', 'photo/toy15.jpeg', '1:18 SCALE (27 X 16 X 13 CM) FRONT & REAR ARTICULATED', '4WD - 3 POWERFUL MOTORS, TWO FOR DRIVING & ONE FOR STEERING', 'SUPERB CLIMBING FORCE POWER CAN CLIMB FIELD SAND, SMALL ROCK', 'INCLUDES CAR, REMOTE, 4.8V 700 mAh RECHARGEABLE BATTERY ', 'A UNIQUE GUN SHAPED REMOTE & FINE TUNING ON THE TRUCK'),
(56, 'Miss & Chief Venneno Style RC Car With Fully Function Rechargeable', '6,445', '300', '463', 'photo/toy16.jpeg', 'INCLUDES CAR, REMOTE, 4.8V 700 mAh RECHARGEABLE BATTERY ', 'SUPERB CLIMBING FORCE POWER CAN CLIMB FIELD SAND, SMALL ROCK', 'INCLUDES CAR, REMOTE, 4.8V 700 mAh RECHARGEABLE BATTERY ', '1:18 SCALE (27 X 16 X 13 CM) FRONT & REAR ARTICULATED', '4WD - 3 POWERFUL MOTORS, TWO FOR DRIVING & ONE FOR STEERING'),
(57, 'Miss & Chief Ball Induction (Multicolor)#JustHere Rechargeable', '475', '845', '867', 'photo/toy17.jpeg', '1:18 SCALE (27 X 16 X 13 CM) FRONT & REAR ARTICULATED', '4WD - 3 POWERFUL MOTORS, TWO FOR DRIVING & ONE FOR STEERING', 'SUPERB CLIMBING FORCE POWER CAN CLIMB FIELD SAND, SMALL ROCK', 'INCLUDES CAR, REMOTE, 4.8V 700 mAh RECHARGEABLE BATTERY', 'A UNIQUE GUN SHAPED REMOTE & FINE TUNING ON THE TRUCK'),
(58, 'Zurie Toy Collection Off Road Monster Racing Car, Rechargeable', '2,346', '678', '890', 'photo/toy18.jpeg', 'A UNIQUE GUN SHAPED REMOTE & FINE TUNING ON THE TRUCK', 'INCLUDES CAR, REMOTE, 4.8V 700 mAh RECHARGEABLE BATTERY', 'SUPERB CLIMBING FORCE POWER CAN CLIMB FIELD SAND, SMALL ROCK', '4WD - 3 POWERFUL MOTORS, TWO FOR DRIVING & ONE FOR STEERING', '1:18 SCALE (27 X 16 X 13 CM) FRONT & REAR ARTICULATED'),
(59, 'CaraÃ¯bes Speed Helicopter with Gyroscope and LED Lights', '443', '673', '700', 'photo/toy19.jpeg', 'Saffire 2. 4GHz remote control rock crawler, arc monster truck 4wd', 'IP67 water and dust resistant (maximum depth of 1 meter up to 30 minutes)', 'It Has Strong Stability, Easily Implement Various Flight Movements', 'Charging Time: 40 mnt Quadcopter Battery: 3.7V 300Mah ', '360 Degree Spins and Flips: Forward, Backward,Turn Left, Turn Right'),
(60, 'Bonkerz Remote Control Stunt Car Vehicle 360Â°Rotating Rechargeable', '1,943', '493', '500', 'photo/toy20.jpeg', 'INCLUDES CAR, REMOTE, 4.8V 700 mAh RECHARGEABLE BATTERY', '4WD - 3 POWERFUL MOTORS, TWO FOR DRIVING & ONE FOR STEERING', '1:18 SCALE (27 X 16 X 13 CM) FRONT & REAR ARTICULATED', 'SUPERB CLIMBING FORCE POWER CAN CLIMB FIELD SAND, SMALL ROCK', 'A UNIQUE GUN SHAPED REMOTE & FINE TUNING ON THE TRUCK'),
(61, 'Nova Premium Silky Shine Hot And Cold Foldable NHP', '3,343', '1126', '1999', 'photo/bty1.jpeg', 'Blade Material: Titanium Coated', 'For Body Grooming, Beard & Moustach', '55 min battery run time', 'Trimming Range: 1 - 10 mm', '19 length settings'),
(62, 'Nova Premium Silky Shine Hot And Cold Foldable NHP 8202', '2,169', '999', '1200', 'photo/bty2.jpeg', 'Artistic Ergonomical Design & Professional Heating Uni', 'Three Heat Setting and Two Speed Setting; Cord Length: 2M', 'Special Rubber Cable protector for durable cable', 'Detachable Back Filter; Technology Used: Ionic Conditioning', 'Patented heat shielding technology - Cold Nozzle body even after long usage'),
(63, 'MoveOn Mhe-550- Shaver For Men (Multi Colour) Cordless', '2,236', '745', '999', 'photo/bty3.jpeg', 'Trimming Range: 1 - 10 mm', 'Blade Material: Titanium Coated', 'For Body Grooming, Beard & Moustach', '19 length settings', '55 min battery run time'),
(64, 'Braun 9-558 Cordless Epilator White, Blue', '3,966', '984', '1123', 'photo/bty4.jpeg', '55 min battery run time', 'Trimming Range: 1 - 10 mm', 'Blade Material: Titanium Coated', 'For Body Grooming, Beard & Moustach', '19 length settings'),
(65, 'Antique Buyer Women''s Painless Hair Remover Machine Cor', '3,579', '685', '754', 'photo/bty5.jpeg', 'Gentle hair removal and precise shaping', 'ideal for upper lip, side burns and eyebrows', 'Waterproof: Can be used in shower', 'Quick and Gentle: Easily remove any unwanted hair', 'Adjustable eyebrow head and dedicated accessories'),
(66, 'VEGA VHES-02 Cordless Epilator White, Green', '1,234', '875', '900', 'photo/bty6.jpeg', '55 min battery run time', 'For Body Grooming, Beard & Moustach', 'Trimming Range: 1 - 10 mm', 'Blade Material: Titanium Coated', '19 length settings'),
(67, 'shoppingdoor Eyebrow/Bikini/Face/Body Hair/Removal/Mach', '325', '1283', '1999', 'photo/bty7.jpeg', 'For Body Grooming, Beard & Moustach', '19 length settings', '55 min battery run time', 'Blade Material: Titanium Coated', 'Trimming Range: 1 - 10 mm'),
(68, 'BEAUTY FASHION Hair Straightener Hair Straightener Hair', '1728', '876', '900', 'photo/bty8.jpeg', 'This hair styler will make you look like a diva in minutes', 'Want a temporary change then bring home this 2 in 1 hair styler', 'With this hair styler you can get straight, sleek and fine hair', 'Please read the user manual provided before using the product', 'Easy to use ergonomically designed, this advanced hair straightener'),
(69, 'BEAUTY FASHION Hair Straightener Hair Straightener Hair', '3,246', '826', '999', 'photo/bty9.jpeg', 'Easy to use ergonomically designed, this advanced hair straightener', 'With this hair styler you can get straight, sleek and fine hair', 'Want a temporary change then bring home this 2 in 1 hair styler', 'Please read the user manual provided before using the product', 'This hair styler will make you look like a diva in minutes'),
(70, 'Nova Premium Silky Shine Hot And Cold Foldable NHP 8202', '2,343', '837', '963', 'photo/bty10.jpeg', 'This hair styler will make you look like a diva in minutes', 'Easy to use ergonomically designed, this advanced hair straightener', 'With this hair styler you can get straight, sleek and fine hair', 'Please read the user manual provided before using the product', 'Want a temporary change then bring home this 2 in 1 hair styler'),
(71, 'BEAUTY FASHION Hair Straightener Hair Straightener Hair', '2,774', '873', '900', 'photo/bty11.jpeg', 'With this hair styler you can get straight, sleek and fine hair', 'Please read the user manual provided before using the product', 'Easy to use ergonomically designed, this advanced hair straightener', 'Want a temporary change then bring home this 2 in 1 hair styler', 'This hair styler will make you look like a diva in minutes'),
(72, 'Nova Premium Silky Shine Hot And Cold Foldable NHP 8202', '13,674', '532', '700', 'photo/bty12.jpeg', 'Artistic Ergonomical Design & Professional Heating Uni', 'Special Rubber Cable protector for durable cable', 'Detachable Back Filter; Technology Used: Ionic Conditioning', 'Three Heat Setting and Two Speed Setting; Cord Length: 2M', 'Patented heat shielding technology - Cold Nozzle body even after long usage'),
(73, 'Nova Premium Silky Shine Hot And Cold Foldable NHP 8202', '682', '837', '999', 'photo/bty13.jpeg', 'Artistic Ergonomical Design & Professional Heating Uni', 'Special Rubber Cable protector for durable cable', 'Patented heat shielding technology - Cold Nozzle body even after long usage', 'Detachable Back Filter; Technology Used: Ionic Conditioning', 'Three Heat Setting and Two Speed Setting; Cord Length: 2M'),
(74, 'BEAUTY FASHION Hair Straightener Hair Straightener Hair', '3,446', '999', '1199', 'photo/bty14.jpeg', 'Easy to use ergonomically designed, this advanced hair straightener', 'This hair styler will make you look like a diva in minutes', 'Want a temporary change then bring home this 2 in 1 hair styler', 'With this hair styler you can get straight, sleek and fine hair', 'Please read the user manual provided before using the product'),
(75, 'Nova Premium Silky Shine Hot And Cold Foldable NHP 8202', '343', '1271', '1343', 'photo/bty15.jpeg', 'Artistic Ergonomical Design & Professional Heating Uni', 'Patented heat shielding technology - Cold Nozzle body even after long usage', 'Special Rubber Cable protector for durable cable', 'Detachable Back Filter; Technology Used: Ionic Conditioning', 'Three Heat Setting and Two Speed Setting; Cord Length: 2M'),
(76, 'BEAUTY FASHION Hair Straightener Hair Straightener Hair', '6,445', '300', '463', 'photo/bty16.jpeg', 'With this hair styler you can get straight, sleek and fine hair', 'Want a temporary change then bring home this 2 in 1 hair styler', 'This hair styler will make you look like a diva in minutes', 'Easy to use ergonomically designed, this advanced hair straightener', 'Please read the user manual provided before using the product'),
(77, 'Nova Premium Silky Shine Hot And Cold Foldable NHP 8202', '475', '845', '867', 'photo/bty17.jpeg', 'Artistic Ergonomical Design & Professional Heating Uni', 'Patented heat shielding technology - Cold Nozzle body even after long usage', 'Special Rubber Cable protector for durable cable', 'Detachable Back Filter; Technology Used: Ionic Conditioning', 'Three Heat Setting and Two Speed Setting; Cord Length: 2M'),
(78, 'BEAUTY FASHION Hair Straightener Hair Straightener Hair.', '2,346', '678', '890', 'photo/bty18.jpeg', 'Want a temporary change then bring home this 2 in 1 hair styler', 'With this hair styler you can get straight, sleek and fine hair', 'This hair styler will make you look like a diva in minutes', 'Easy to use ergonomically designed, this advanced hair straightener', 'Please read the user manual provided before using the product'),
(79, 'Sanchh Creations SANCHHSE03 Cordless Epilator', '443', '673', '700', 'photo/bty19.jpeg', 'For Body Grooming, Beard & Moustach', 'Trimming Range: 1 - 10 mm', '19 length settings', '55 min battery run time', 'Blade Material: Titanium Coated'),
(80, 'UniqueBuyer Maxtop Easy and Instant Facial Hair Removal', '1,943', '493', '500', 'photo/bty20.jpeg', 'ideal for upper lip, side burns and eyebrows', 'Quick and Gentle: Easily remove any unwanted hair', 'Gentle hair removal and precise shaping', 'Adjustable eyebrow head and dedicated accessories', 'Waterproof: Can be used in shower'),
(81, 'AR Enterprises RC Jackman 1:18 Ferrari Style Racing Car with Rechargeable', '3,343', '45', '50', 'photo/acc1.jpeg', 'Purpose Mobile Car Mount Holder Stand for 1.Windscreen', 'It has adjustable 360 degree rotation of the phone holder', 'SUPER STRONG GEL PAD Sticky Gel pad can hold the product', 'Easy one touch mounting system locks and releases the device', 'Made of environmental ABS rubber and plastic material'),
(82, 'Sauran Power Adaptor 12 Volt 2 Amp Fully Charger AC INPUT 100', '2,169', '250', '300', 'photo/acc2.jpeg', 'The ACK-E18 power supply charger for Canon EOS 750D', 'ACK-E18 AC Power Adapter Charger DR-E18 DC Coupler Kit ', ' Input:100~240Vac,1.5A max 50~60Hz, Output: DC 8V/3A', 'Put the DR-E18 Dummy battery DC Coupler into the Battery', '18 Months Warranty and Easy'),
(83, 'Kiyara Collection Exceed (LH-1803) 2 in 1 Helicopter Fully Function', '2,236', '35', '50', 'photo/acc3.jpeg', 'Purpose Mobile Car Mount Holder Stand for 1.Windscreen', 'SUPER STRONG GEL PAD Sticky Gel pad can hold the product', 'It has adjustable 360 degree rotation of the phone holder', 'Easy one touch mounting system locks and releases the device', 'Made of environmental ABS rubber and plastic material'),
(84, 'ROQ Smarty Universal Fully Flexible 360ÂÂ° Snake Style StandROQ Smarty Universal Fully Flexible 360ÂÂ° Snake Style Stand', '3,966', '84', '123', 'photo/acc4.jpeg', 'Standard USB interface, can mix and match digital devices', 'Fully adjustable with 360 rotation the adjustable/long arm', 'Bluetooth Audio Music Receiver Adapter For Playing Music Via Mobile', 'Universal Phone Holder: This is a 100% Brand new with excellent', 'Note: The color of the product may be Random'),
(85, 'PAC IEC 320 C14 Male Plug to Fully Universal Female Jack AC Black', '3,579', '85', '100', 'photo/acc5.jpeg', 'Pro IEC 320 PDU UPS C14 Plug to Generic Female Socket', 'Specifications: Material: Plastic , Color: Black', 'Rated: 10A 250V , Size: 45x36mm/1.77x1.42" (LxW)', 'Package Included: 1x Power Adapter', 'Socket Power Adapter Converter TB'),
(86, 'SmartBuy Edge To Edge Tempered Glass for emale Jack AC Lenov', '1,234', '35', '90', 'photo/acc6.jpeg', '9H Hardness,High Sensitive Touch,Anti-glare,Shock Proof', 'Ultra Clear,High Transparency', 'Bubble free application', 'Anti Scratch,Oleophobic Coating', 'delicate touch'),
(87, 'Zebronics ZEB-U725 UPS emale Jack AC 2356 Fully Fun', '325', '1283', '1999', 'photo/acc7.jpeg', '6 hours to 90 percent after complete', 'Capacity: 600VA; Input Voltage: 230VAC', 'Typics 4-8 ms transfer time', 'Modified sine wave; Battery Type: 12V/7Ah x 1', 'This UPS also comes with an LED indicator which signals'),
(88, 'TechGear Universal Magic Suction Stand Mobile Phone', '1,728', '26', '40', 'photo/acc8.jpeg', 'Standard USB interface, can mix and match digital devices', 'Fully adjustable with 360 rotation the adjustable/long arm', 'Bluetooth Audio Music Receiver Adapter For Playing Music Via Mobile', 'Universal Phone Holder: This is a 100% Brand new with excellent', 'Note: The color of the product may be Random'),
(89, 'WD Pouch 2.5 inch Case / Pouch emale Jack AC Fully Functiona', '3,246', '126', '399', 'photo/acc9.jpeg', 'Compatible with Western Digital, Seagate, Sony, Transcend', 'Water and shock resistant design', 'There will be no Scratch or track Left & do not hurt the screen coat', 'Separate mesh pocket for USB cables and flash drives', 'Best in its class products & made up of quality'),
(90, 'M Mod Con 2 in 1 Silicone Washable Gel Pad Mobile', '2,343', '150', '196', 'photo/acc10.jpeg', '9H Hardness,High Sensitive Touch,Anti-glare,Shock Proof', 'Ultra Clear,High Transparency', 'Bubble free application', 'delicate touch', 'Anti Scratch,Oleophobic Coating'),
(91, 'TESSCO LA-452 1.5 m AUX Cable Compatible with Mobile, Multicolor', '2,774', '73', '90', 'photo/acc11.jpeg', 'Low ripple and low interference', 'High quality commercial grade AC to DC', ' DC power adapter for manufacturer of all type', 'Offered for exceptionally low rates', 'This is a industry proven and a rugged products'),
(92, 'SmE 12V 1A Dual Pin Power Adapter, Input- 90V to 270V', '13,674', '232', '300', 'photo/acc12.jpeg', ' DC power adapter for manufacturer of all type', 'This is a industry proven and a rugged products', 'High quality commercial grade AC to DC', 'Offered for exceptionally low rates', 'Low ripple and low interference'),
(93, 'Action Pro ACP00140 Mobile Holder Compatible fully with Mobile', '682', '37', '59', 'photo/acc13.jpeg', 'Standard USB interface, can mix and match digital devices', 'Fully adjustable with 360 rotation the adjustable', 'Universal Phone Holder: This is a 100% Brand new with excellent quality', 'Note: The color of the product may be Random', 'Bluetooth Audio Music Receiver Adapter For Playing Music Via Mobile'),
(94, 'BUY SURETY Good Quality Lazy Compatible Bracket Mobile Holder Clip', '3,446', '99', '199', 'photo/acc14.jpeg', 'Fully adjustable with 360 rotation the adjustable', 'Standard USB interface, can mix and match digital devices', 'Note: The color of the product may be Random', 'Bluetooth Audio Music Receiver Adapter For Playing Music Via Mobile', 'Universal Phone Holder: This is a 100% Brand new with excellent quality'),
(95, 'ROQ Smarty Universal Flexible 360ÂÂ° Snake Compatible Style Stand', '343', '90', '134', 'photo/acc15.jpeg', 'Bluetooth Audio Music Receiver Adapter For Playing Music Via Mobile', 'Note: The color of the product may be Random', 'Fully adjustable with 360 rotation the adjustable', 'Universal Phone Holder: This is a 100% Brand new with excellent quality', 'Standard USB interface, can mix and match digital devices'),
(96, 'ELV Portable Aluminium Mobile Stand with Mobile With Conveni', '6,445', '30', '46', 'photo/acc16.jpeg', 'Shining silver aluminum stand,with lightweight', 'Cell phone stand perfect for desk or table to watch movies, read etc', ' The rubber protect the point of contact between the device', 'The height of hooks to bottom is moderate to charge your device', 'compatible with as majority of smartphones and tablets'),
(97, 'SmartBuy External Hard Disk Case 2.5 inch fully 5458 Hard', '475', '144', '200', 'photo/acc17.jpeg', 'Compatible with Western Digital, Seagate, Sony, Transcend, ADATA, Hitachi', 'An elastic band to securely fasten the HDD & Separate mesh pocket for USB cables', 'Strong Zippered closure that allows quick and convenient access and usage', 'No need to pull out while using HDD. Slim line design allows case to easily fit into any backpack', 'Your Headphones fit like a glove and will be perfectly protected'),
(98, 'SmartBuy Professional 6-in-1 Cleaning Kit with 53 fully', '2,346', '78', '89', 'photo/acc18.jpeg', 'Multipurpose cleaning kit for digital cameras, DSLR, camcorders, filters, lenses, binoculars', 'Powerful dust air blower, 10 cotton swabs, plush Micro-Fiber Cloth (160mm X 160 mm)', 'The 6-piece cleaning contains the essential items necessary for the proper maintenance', 'Every photographer knows the importance of keeping your camera in pristine condition', 'The cleaning kit is composed of carefully selected tools and materials to safely'),
(99, 'webster Adjustable Portable Lightweight Camera Stand', '443', '173', '200', 'photo/acc19.jpeg', 'Universal Phone Holder: This is a 100% Brand new with excellent quality', 'Bluetooth Audio Music Receiver Adapter For Playing Music Via Mobile', 'Note: The color of the product may be Random', 'Fully adjustable with 360 rotation the adjustable', 'Standard USB interface, can mix and match digital devices'),
(100, 'Bonkerz Remote Control Stunt Car Vehicle 360Â°Rotating Rechargeable', '1,943', '193', '250', 'photo/acc20.jpeg', 'Attach to windshield, dashboard or most smooth flat surfaces', 'Swivel ball head allows 360°free rotations to your desired viewing angle', 'Adjustable telescopic arm accommodates desired length up to 9.2 inches (23 cm)', 'Due to the flexible nature of the gel, some discoloration or residue may be left depending on the type of surface', 'If you have any questions, don''t hesitate to contact us');

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE IF NOT EXISTS `query` (
  `q_id` int(11) NOT NULL AUTO_INCREMENT,
  `q_user` varchar(255) NOT NULL,
  `q_query` varchar(255) NOT NULL,
  PRIMARY KEY (`q_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`q_id`, `q_user`, `q_query`) VALUES
(1, 'sample@gmail.com', 'hello how can you help you'),
(4, 'sample@gmail.com', 'hello'),
(6, 'user1234', 'how can i pay online for my product'),
(7, 'aman1234', 'this is testing of query section');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE IF NOT EXISTS `usertable` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(100) NOT NULL,
  `l_name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  PRIMARY KEY (`id`,`username`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`id`, `f_name`, `l_name`, `username`, `password`, `mobile`, `address`) VALUES
(1, 'sonu', 'kumar', 'sample@gmail.com', 'admin', '7986427419', 'hgliudgfliusdtgjhlj,dfgdj,fsidufgs'),
(22, 'user2', 'lastname', 'user1234', 'user2', '12345678908', 'bkjhiudhsknfk;jsgfo''isyfhsnfkjsv;gifuoihsbd;isygdukjb,dsdfsf,fdsdf'),
(23, 'aman', 'gupta', 'aman1234', 'amanabc', '1234432112', 'bkjhiudhsknfk;jsgfo''isyfhsnfkjsv;gifuoihsbd;isygdukjb,dsdfsf,fdsdf');
