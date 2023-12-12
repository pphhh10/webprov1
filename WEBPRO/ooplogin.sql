-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2023 at 04:17 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;  

--
-- Database: `ooplogin`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(10) NOT NULL,
  `book_name` varchar(20) NOT NULL,
  `book_author` varchar(20) NOT NULL,
  `book_description` varchar(200) NOT NULL,
  `book_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `book_name`, `book_author`, `book_description`, `book_image`) VALUES
(1, 'Gospel of John', 'John', 'The Gospel of John is the fourth of the four canonical gospels. ', 'assets/john.jpg'),
(2, 'Gospel of Thomas', 'Thomas', 'The Gospel of Thomas is an extra-canonical sayings gospel.', 'assets/thomas.jpg'),
(3, 'Gospel of Matthew', 'Matthew', 'The Gospel of Matthew is the first book of the New Testament of the Bible and one of the three synop', 'assets/matthew.jpg'),
(4, 'Gospel of Luke', ' Luke', 'The Gospel of Luke tells of the origins, birth, ministry, death, resurrection, and ascension of Jesu', 'assets/luke.jpg'),
(5, 'King James Bible', 'King James', 'The King James Version, also the King James Bible and the Authorized Version is an Early Modern English.', 'assets/james.jpg'),
(6, 'gospel of barnabas', 'unknown', 'The Gospel of Barnabas is a non-canonical, pseudepigraphical gospel written in the Late Middle Ages and attributed to the early Christian disciple Barnabas', 'assets/barnabas.jpg'),
(7, 'Illustrion', 'jamil', 'illustjfisafsfsfsafsfsfsfsffsaffdsafffffffffffffff', 'assets/ilu.jpg'),
(8, 'kinglife', 'ali', 'fdsaiofjceocfvewgttwyrgytynjh', 'assets/kl.jpg'),
(9, 'sa', 'jamil', 'vasegyertgrftfwertg', 'assets/sa.jpg'),
(10, 'sa2', 'abu', 'safsdafsafsdfsdfsa', 'assets/sa2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `book_description`
--

CREATE TABLE `book_description` (
  `id` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `synopsis` text NOT NULL,
  `isbn` varchar(20) NOT NULL,
  `year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book_description`
--

INSERT INTO `book_description` (`id`, `author`, `synopsis`, `isbn`, `year`) VALUES
(1, 'John', 'The Gospel of John is the fourth of the four canonical gospels. It contains a highly schematic account of the ministry of Jesus, with seven \"signs\" culminating in the raising of Lazarus and seven \"I am\" discourses culminating in Thomas\' proclamation of the risen Jesus as \"my Lord and my God\"', '123456', 100),
(2, 'abang Thomas', 'The Gospel of Thomas is an extra-canonical sayings gospel. It was discovered near Nag Hammadi, Egypt, in December 1945 among a group of books known as the Nag Hammadi library. Scholars speculate that the works were buried in response to a letter from Bishop Athanasius declaring a strict canon of Christian scripture', '12312312', 100),
(3, 'pakcik Matthew', 'The Gospel of Matthew is the first book of the New Testament of the Bible and one of the three synoptic Gospels. It tells how Israel\'s Messiah, Jesus, comes to his people but is rejected by them and how, after his resurrection, he sends the disciples to the gentiles instead', '53452235', 232),
(4, 'Luke', 'The Gospel of Luke tells of the origins, birth, ministry, death, resurrection, and ascension of Jesus Christ. Together with the Acts of the Apostles, it makes up a two-volume work which scholars call Luke–Acts, accounting for 27.5% of the New Testament', '5434254', 432),
(5, 'King James', 'The King James Version, also the King James Bible and the Authorized Version is an Early Modern English translation of the Christian Bible for the Church of England, which was commissioned in 1604 and published in 1611, by sponsorship of King James VI and I.', '43231', 421424);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL,
  `users_uid` varchar(40) NOT NULL,
  `users_pwd` varchar(100) NOT NULL,
  `users_email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_id`, `users_uid`, `users_pwd`, `users_email`) VALUES
(1, 'naim', '$2y$10$YEZSgXOsxAu7xTE51YowZu5KnrCGEJAObvdKglQ5L67lNVoSPutJm', 'naimrzm17@gmail.com'),
(13, 'abu', '$2y$10$JP5J26Rn8ssCvExt..TehOa52BDPfU3ri20FWh0eNU8SKEU96/Uwu', 'redleo@gmail.com'),
(14, 'azmi', '$2y$10$jIk4vmweA39TvEOU.x6Q6O0Dj/V56ZyDM3fM6rSrV1GG9EsJx.UmS', 'afiqsalleh2607@gmail.com'),
(15, 'irfan', '$2y$10$WJc5jYVeElJoHv.TbbQvCOHAlAY1PACyzxq7z5q2WqNw..oS4UIrK', 'irfanangah2019@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_description`
--
ALTER TABLE `book_description`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book_description`
--
ALTER TABLE `book_description`
  ADD CONSTRAINT `book_description_ibfk_1` FOREIGN KEY (`id`) REFERENCES `book` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
