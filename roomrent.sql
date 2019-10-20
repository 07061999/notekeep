-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2019 at 09:48 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `roomrent`
--

-- --------------------------------------------------------

--
-- Table structure for table `pcpart`
--

CREATE TABLE `pcpart` (
  `pcPartID` int(11) NOT NULL,
  `partTitle` varchar(255) NOT NULL,
  `image` varchar(100) NOT NULL,
  `partKeyword` int(10) DEFAULT NULL,
  `partDesc` varchar(255) DEFAULT NULL,
  `qty` int(100) DEFAULT NULL,
  `price` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pcpart`
--

INSERT INTO `pcpart` (`pcPartID`, `partTitle`, `image`, `partKeyword`, `partDesc`, `qty`, `price`) VALUES
(11, 'Thermaltake V200 Tempered Glass RGB', 'uploadedimages/case.jpg', 1, 'Light up the system: 3 Pre installed 120 millimeter 12V motherboard Sync RGB fans (Sync with as US, Gigabyte, MSI, as rock, and BIOSTAR 12V header Mob) + 1 Black fan at back\r\nBuilt in dual mode 12V Sync controller: Control light via I/O port RGB Light but', 14, 1000),
(12, 'MUSETEX Phantom Black', 'uploadedimages/case1.jpg', 1, 'Specially designed for lighting', 25, 1500),
(19, 'Basic kids Keyboard', 'uploadedimages/p-1.jpg', 8, 'Basics kids keyboard', 28, 900),
(20, 'Ram', 'uploadedimages/p-3.jpg', 5, 'DDR3 ï¿½ 1333MHz ï¿½ PC3-10600 ï¿½ 240-Pin ï¿½ Unbuffered ï¿½ Non ECC ï¿½ 1.5V ï¿½ CL9 ï¿½ Dual Rank ï¿½ 2Rx8 based ï¿½ 512x8JEDEC standard 1.5V (1.425V ~1.575V) Power SupplyModule Size: 16GB Package: 2x8GB ï¿½ For Desktop Computer, Not for LaptopFor Sele', 29, 9000),
(21, 'USB3 DDR3 HDMI DVI USB 3.0 760G MicroATX Motherboard', 'uploadedimages/p-4.jpg', 3, 'AM3+ CPU Support Ready\r\nCore Unlocker- Unlock true Core performance intelligently\r\nAnti-Surge- Full-time Power Guardian-Make System Free From Risk', 20, 4000),
(22, 'Samsung LS24D330HSJ/ZA 24\" S24D330H 1920x1080 LED Monitor ', 'uploadedimages/p-5.jpg', 4, '24-inch desktop business monitor provides impressive picture quality and ultra-fast response time at an accessible price point; includes 3-year Warranty\r\nFull HD 1920 x 1080 resolution; low-glare TN panel delivers sharp images and vivid color even from of', 26, 30000),
(24, 'ASUS EX-A320M Gaming AMD Motherboard', 'uploadedimages/p-8.jpg', 3, 'Micro-ATX A320 feature with AURA sync,, USBGuard and Gold-plated x16 PCIe, LAN port, and 8-pin power connector\r\nAnti-moisture Coating\r\nNon-stop durability', 30, 3000),
(25, 'Intel Corporation Core i5 9400F 9th Generation Desktop ', 'uploadedimages/p-9.jpg', 2, 'Create, edit, and share 4K content with ease\r\nDurable Product\r\nDiscrete Graphic Card Needed for Display', 30, 15000),
(27, 'Red Gear Dragonwar Emera ELE-G11 3200 DPI Gaming Mouse (Dark Blue)', 'uploadedimages/p-11.jpg', 7, '8 programmable keys with LED lighting and scroll button\r\nDPI: 800/1600/2400/3200\r\nErgonomic design for professional gamers\r\nGold plated USB 2.0\r\n1.2m braided cable\r\nCompatible with Windows XP and linux', 50, 900),
(29, 'HP K2500 Wireless Keyboard', 'uploadedimages/p-12.jpg', 8, 'Hardware compatibility, Microsoft Windows XP/Vista/7/8. Compatible with Windows 7/8/10â€™\r\nFull-sized performance with a full-sized wireless keyboard - HPâ€™s Keyboard K2500. Includes a full number pad, Windows 8 compatibility, and dedicated function keys', 15, 980),
(33, 'INNOVA GRAPHICS CARD 3200', 'uploadedimages/p-13.jpg', 6, 'Geoforce RTX Gaming Graphics card> Bestest graphics card', 30, 34000),
(34, 'Seagate Backup Plus Slim 2TB External Hard Drive Portable HDD', 'uploadedimages/p-15.jpg', 9, 'Store and access 2TB of photos and files on the go with Backup Plus Slim, a portable external hard drive\r\nThis portable hard drive features a minimalist metal enclosure, and is a stylish USB drive', 21, 3000),
(35, 'LG 27 inch 4K-UHD (3840 x 2160) HDR', 'uploadedimages/p-19.jpg', 4, 'Screen Size: 27 inch (68.58 cm) 4K Ultra HD (3840 x 2160) HDR 10  IPS Display\r\nConnectivity Port: 2 HDMI Ports, 1 Display Port, 1 Audio-Out Port\r\nsRGB: 99%, Adobe RGB: 73%, DCI-P3: 75%', 30, 28000),
(36, 'Dell 19.5 inch (49.41 cm) LED Backlit Computer Monitor', 'uploadedimages/p-18.jpg', 4, 'Screen Size in cm should read 49.41cm\r\nNo display port. It should read \"Connectivity: 1 VGA Port\"\r\nBrightness (Typical) should be 200 cd/mÂ², Save energy with power-efficient features\r\nRefresh Rate: 60 Hz, Response Time: 5 ms', 27, 45000),
(37, 'Corsair Crystal 460X CC-9011101-WW RGB', 'uploadedimages/p-20.jpg', 1, 'Beautiful two-panel tempered glass: Immaculately display every component of your build\r\nClean, modern lines with an all steel exterior: Get rid of those plastic cases - the 460x has full steel front and top panels for extra durability and gorgeous good lo', 30, 12000),
(38, 'CHIPTRONEX Ghost GNX100 Mid Tower Gaming Cabinet ATX case', 'uploadedimages/p-21.jpg', 1, 'Mid Tower Gaming Cabinet\r\nATX case\r\nWithout SMPS', 29, 1000),
(39, 'GIGABYTE Z370 AORUS Ultra Gaming ', 'uploadedimages/p-22.jpg', 3, 'Supports 8th Generation Intel Core Processors\r\nUSB3.1 Gen2 with USB Type-C\r\nFront USB 3.1 Type-C header\r\nIntel Gigabit LAN', 29, 20000),
(40, 'MSI Performance Gaming AMD Ryzen 1st and 2nd Gen AM4 M.2 USB 3 DDR4 DVI HDMI', 'uploadedimages/p-23.jpg', 3, 'Support AMD Ryzen 1st and 2nd Generation / Ryzen with Radeon Vega Graphics Processors for Socket AM4\r\nSupports 64GB Dual Channel DDR4 Memory 1866/ 2133/ 2400/ 2667 MHz by JEDEC, and 2667/ 2800/ 2933/ 3000/ 3066/ 3200/ 3466 MHz by A-XMP OC MODE', 30, 10000),
(41, 'Intel Core 2 Duo E7500 Processor ', 'uploadedimages/p-24.jpg', 2, 'ntelÂ® Coreâ„¢2 Duo Processor E7500 (3M Cache, 2.93 GHz, 1066 MHz FSB) Product Specifications.', 22, 1000),
(42, 'Samsung Plutofit Memory 8GB Kit 2 x 4GB DDR3 PC3-12800 1600MHz RAM', 'uploadedimages/p-25.jpg', 5, 'Samsung 8GB kit\r\n4GB DDR3 1600Mhz kit (2x4Gb)\r\nLaptop Ram', 30, 3000),
(43, 'GoldenRAM Hynix 4 GB DDR RAM for Desktop', 'uploadedimages/p-26.jpg', 5, '240-pin\r\nDesktop RAM\r\n4GB DDR3 RAM', 28, 2000),
(44, 'ZOTAC GeForce GTX 1060 DirectX 12 6GB 192-Bit GDDR5X Graphics Card', 'uploadedimages/p-27.jpg', 6, 'The New GeForce super compact 1060 model takes advantage of the NVIDIA Pascal architecture to immerse you in incredible realism and brilliant performance in latest games.\r\nGTX 1060 comes with â€˜1280 CUDA coresâ€™ and operates across a 192-bit wide bus in', 30, 14000),
(45, 'Zotac Nvidia GT 1030 2GB GDDR5 64-Bit DVI-D HDMI Retail Graphic card ', 'uploadedimages/p-28.jpg', 6, 'CUDA Core : 384\r\nMemory Clock : 6.0 Ghz\r\nMemory Bus Width : 64-bit ; Memory Bandwidth :56 GB/s\r\nDirectX12.0 ;Vulkan1.0; OpenGL4.5 ;OpenCL1.2 ; Shader Model5.0', 30, 6000),
(46, 'Acer Nitro NP.MCE11.00G Wired Optical Gaming Mouse', 'uploadedimages/p-29.jpeg', 7, 'Wired\r\nFor Gaming\r\nInterface: USB 3.0, USB 2.0\r\nOptical Mouse\r\n7 functional buttons + 1 burst Fire on side thumb button\r\nAcceleration: 20 g Ergonomic design\r\nAdjustable 6 levels DPI lighting mode', 28, 1500),
(47, 'E - Royal Shop Rainbow LED Backlit USB Wired Multimedia Gaming Keyboard', 'uploadedimages/p-31.jpg', 8, 'Scroll Lock for turning LED on/off.\r\nSupport Windows 8, Windows 7, Windows Vista, Windows XP. PC Laptop Pad Google Android TV Box HTPC IPTV Smart TV Mac IOS Raspberry Pi all version\r\nStandard 104 Keys,Five-LED mixed color on the button,you can press the b', 29, 750),
(48, 'Lenovo Preferred Pro USB Keyboard (73P5220)', 'uploadedimages/p-32.jpg', 8, 'Lenovo Preferred Pro USB Keyboard .\r\nQuiet 104-key full-size layout (includes three Windows keys)\r\nCompatible with any computer that uses USB connection\r\nQuiet 104-key full-size layout (includes three Windows keys)\r\nCommon Windows shortcuts are highlighte', 10, 1000),
(49, 'WD SATA 1 TB Desktop Internal Hard Disk Drive (WD10EZRZ)', 'uploadedimages/p-33.jpeg', 9, 'Brand\r\nWD\r\nModel ID\r\nWD10EZRZ\r\nOS Compatibility\r\nWINDOWS7, WINDOWS8.1, WONDOWS10, LINUX', 0, 3500),
(50, 'Xmate Zorro 3200DPI LED Backlight 6 Button Wired USB Gaming Mouse', 'uploadedimages/p-30.jpg', 7, '4 DPI Levels - Four color RGB breathing light cycle replacement. 4-type DPI rating controlled by touching the DPI button: red 1200DPI, blue 1600DPI, green 1600DPI & purple 3200DPI.\r\nTough Built - Xmate Zorro wired USB gaming mouse is constructed of ABS pl', 1, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `isUsers` int(11) NOT NULL,
  `uidUsers` tinytext NOT NULL,
  `emailUsers` tinytext NOT NULL,
  `pwdUsers` longtext NOT NULL,
  `mobNumber` tinytext NOT NULL,
  `address` varchar(255) NOT NULL,
  `country` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `userImage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`isUsers`, `uidUsers`, `emailUsers`, `pwdUsers`, `mobNumber`, `address`, `country`, `state`, `userImage`) VALUES
(49, 'Jeniston', 'Jeni@gmail.com', '$2y$10$LsRrh6rYqerrqB5hDanmO.uW5paPc19g1wEY7XLrUcv.RrA2DvRyy', '9167877725', 'j', 'j', 'india', 'user/userimages/1.jpeg'),
(68, 'Mr.Useless', 'mr.useless404@gmail.com', '', '5954689489748', '97484ojidsjijuijuijui', 'oki[po0kpo0k[0poi', 'jujuiioki[o0ik[o0k', 'https://lh3.googleusercontent.com/a-/AAuE7mB-DfYkRpet5H4u-qxHiZm7RitdHxE9S2auDVF_'),
(69, 'Agnel', 'agnelselvan007@gmail.com', '$2y$10$sUEsC0jDUdVXDqj.joXG0.IB.53veANMJEkR50l.OGTck545ju46e', '9167877725', 'Taj', 'Maharashtra', 'india', 'user/userimages/agnel.jpeg'),
(70, 'hahah', 'haha@gmail.com', '$2y$10$t/CF7VuXfjcNjo/4h/lLhOJiKMBYS3jY3bDEd2qRc0A9VZGSSJOtG', '89383892932832898', 'uhhjkhkjh', 'jkjhjkj', 'india', 'user/userimages/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pcpart`
--
ALTER TABLE `pcpart`
  ADD PRIMARY KEY (`pcPartID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`isUsers`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pcpart`
--
ALTER TABLE `pcpart`
  MODIFY `pcPartID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `isUsers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
