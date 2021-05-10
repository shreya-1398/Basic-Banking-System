-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2021 at 07:01 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banking system`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `S no.` int(4) NOT NULL,
  `Sender` text NOT NULL,
  `Receiver` text NOT NULL,
  `Balance` int(6) NOT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`S no.`, `Sender`, `Receiver`, `Balance`, `Date`) VALUES
(1, 'Shreya', 'Pranjal', 50, '2021-05-08 15:29:16'),
(2, 'Shreya', 'John', 20, '2021-05-10 17:23:18'),
(3, 'Aakash', 'Shreya', 10000, '2021-05-10 17:27:16'),
(4, 'Henry', 'Angela', 50, '2021-05-10 17:34:08'),
(5, 'Henry', 'Aakash', 500, '2021-05-10 17:38:23'),
(6, 'Hannah', 'Aakash', 10000, '2021-05-10 18:36:24'),
(7, 'Smith', 'Pranjal', 75, '2021-05-10 18:36:53'),
(8, 'John', 'khushi', 25, '2021-05-10 18:37:12');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Balance` int(6) NOT NULL,
  `Email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `Name`, `Balance`, `Email`) VALUES
(1, 'Shreya', 19980, 'shreya@gmail.com'),
(2, 'Pranjal', 20075, 'pranjal@gmail.com'),
(3, 'khushi', 22025, 'khushi@gmail.com'),
(4, 'Aakash', 15500, 'aakash@gmail.com'),
(5, 'John', 24995, 'john@gmail.com'),
(6, 'Smith', 27925, 'smith@gmail.com'),
(7, 'Peter', 24500, 'peter@gmail.com'),
(8, 'Kevin', 5000, 'kevin@gmail.com'),
(9, 'Henry', 34450, 'henry@gmail.com'),
(10, 'Angela', 50050, 'angela@gmail.com'),
(11, 'Hannah', 22000, 'hannah@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`S no.`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `S no.` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
