-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2022 at 10:41 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `CR10-Islam Saleh-BigLibrary`
--
CREATE DATABASE IF NOT EXISTS `CR10-Islam Saleh-BigLibrary` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `CR10-Islam Saleh-BigLibrary`;

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `photo` varchar(30) NOT NULL,
  `isbnean` int(15) NOT NULL,
  `type` varchar(30) NOT NULL,
  `autor_first_name` varchar(30) NOT NULL,
  `autor_last_name` varchar(30) NOT NULL,
  `publisher_name` varchar(30) NOT NULL,
  `publisher_addres` varchar(30) NOT NULL,
  `publisher_date` int(11) NOT NULL,
  `availability` varchar(30) NOT NULL,
  `short_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`id`, `title`, `photo`, `isbnean`, `type`, `autor_first_name`, `autor_last_name`, `publisher_name`, `publisher_addres`, `publisher_date`, `availability`, `short_description`) VALUES
(1, 'Moby Dick', 'mobydick.jpg', 647466575, 'book', 'Herman', 'Melville', 'Richard Bentley', 'UK', 1851, 'available', 'The book is the sailor Ishmael narrative of the obsessive quest of Ahab, captain of the whaling ship pequod, for revenge against Moby Dick, the giant white sperm whale that on the ships previous voyage bit off Ahabs leg at the knee.'),
(2, 'The Da Vinci Code', 'davinci.jpg', 547475477, 'book', 'Dan', 'Brown', 'Doubleday', 'US', 2003, 'avaliable', 'The Da Vinci Code follows symbologist Robert Langdon and cryptologist Sophie Neveu after a murder in the Louvre Museum in Paris causes them to become involved in a battle between the Priory of Sion and Opus Dei.'),
(3, 'The Lost Symbol', 'symbol.jpg', 9786747, 'book', 'Dan', 'Brown', 'Transworld', 'UK', 2009, 'reserved', 'When his beloved mentor, Peter Solomon–a prominent Mason and philanthropist–is brutally kidnapped, Langdon realizes his only hope of saving Peter is to accept this mystical invitation and follow wherever it leads him.'),
(4, 'Fingerprints of the Gods', 'fingerprints.jpg', 5363464, 'book', 'Graham ', 'Hancock', 'Crown Publishing Group', 'US', 1995, 'reserved', 'Hancock embarks on a worldwide quest to put together all the pieces of the vast and fascinating jigsaw of mankinds hidden past.'),
(5, 'I Am Legend', 'imlegend.jpg', 42354235, 'dvd', 'Richard ', 'Matheson', ' Gold Medal Books', 'UK', 1954, 'available', 'I Am Legend is a 2007 American post-apocalyptic action thriller film loosely based on the 1954 novel of the same name by Richard Matheson.'),
(6, 'Men In Black', 'mib.jpg', 5474546, 'dvd', 'Barry', 'Sonnenfeld', 'Columbia Pictures; ', 'US', 1997, 'available', 'K and J, (the men in black) are the scum-fighting super-agents; their latest mission is to save the world from a total intergalactic disaster.'),
(7, 'Braveheart', 'braveheart.jpg', 346654, 'dvd', 'Mel ', 'Gibson', ' 20th Century Studios', 'US', 1995, 'reserved', 'William Wallace, a Scottish rebel, along with his clan, sets out to battle King Edward I of England, who killed his bride a day after their marriage.'),
(8, 'Top Gun', 'topgun.jpg', 56356346, 'dvd', 'Tony ', 'Scott', 'Paramount Pictures Studio Stor', 'USA', 1986, 'avaliable', 'After losing his friend, top pilot Maverick is given a second chance to redeem himself. He struggles to be at his best and also gets romantically involved with his civilian instructor Charlie.'),
(9, 'Schindlers List', 'schindler.jpg', 5243523, 'dvd', 'Steven ', 'Spielberg', 'Universal Pictures', 'Austria', 1994, 'available', 'Oskar Schindler, a German industrialist and member of the Nazi party, tries to save his Jewish employees after witnessing the persecution of Jews in Poland.'),
(10, 'Imagine Dragons Believer', 'imagine.jpg', 436536, 'cd', 'Daniel Coulter ', 'Reynolds', 'Imagine Dragons', 'USA', 2017, 'available', 'Imagine Dragons is an American pop rock band from Las Vegas, Nevada, consisting of lead singer Dan Reynolds, guitarist Wayne Sermon, bassist Ben McKee and drummer Daniel Platzman.'),
(11, 'Guns N Roses', 'guns.jpg', 54235, 'cd', 'Axl ', 'Rose', 'Guns N Roses', 'USA', 1985, 'reserved', 'Guns N Roses is an American hard rock band from Los Angeles, California, formed in 1985. When they signed to Geffen Records in 1986, the band comprised vocalist Axl Rose, lead guitarist Slash, rhythm guitarist Izzy Stradlin, bassist Duff McKagan, and drummer Steven Adler.'),
(12, 'ZZ Top', 'zztop.jpg', 647457, 'cd', 'Billy Gibbons', 'Coppola', 'ZZ Top', 'USA', 1969, 'available', 'ZZ Top is an American rock band formed in 1969 in Houston, Texas. For 51 years, the band comprised vocalist-guitarist Billy Gibbons, drummer Frank Beard and vocalist-bassist Dusty Hill,.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `library`
--
ALTER TABLE `library`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
