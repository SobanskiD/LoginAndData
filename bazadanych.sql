-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Paź 12, 2023 at 10:43 AM
-- Wersja serwera: 10.4.28-MariaDB
-- Wersja PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bazadanych`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `UserID` int(11) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `UserType` varchar(50) NOT NULL,
  `AssignedToUserID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `FirstName`, `LastName`, `UserType`, `AssignedToUserID`) VALUES
(1, 'Jan', 'Kobuszewski', 'uczestnik', 19),
(2, 'Marek', 'Kondrat', 'uczestnik', 19),
(3, 'Katarzyna', 'Maciąg', 'uczestnik', 21),
(4, 'Robert', 'Rozmus', 'uczestnik', 20),
(5, 'Robert', 'Makłowicz', 'uczestnik', 20),
(6, 'Maciej', 'Kuroń', 'uczestnik', 20),
(7, 'Szymon', 'Majewski', 'uczestnik', 20),
(8, 'Anna', 'Dymna', 'uczestnik', 20),
(9, 'Adam', 'Mickiewicz', 'uczestnik', 22),
(10, 'Juliusz', 'Słowacki', 'uczestnik', 22),
(11, 'Zenon', 'Laskowik', 'uczestnik', 22),
(12, 'Bohdan', 'Smoleń', 'uczestnik', 22),
(13, 'Katarzyna', 'Groniec', 'uczestnik', 21),
(14, 'Magda', 'Umer', 'uczestnik', 21),
(15, 'Wojciech', 'Młynarski', 'uczestnik', 21),
(16, 'Ryszar', 'Rynkowski', 'uczestnik', 21),
(17, 'Krzysztof', 'Jaślar', 'uczestnik', 23),
(18, 'Janusz', 'Rewiński', 'uczestnik', 23),
(19, 'Grzegorz', 'Turnau', 'PH', 24),
(20, 'Andrzej', 'Sikorowski', 'PH', 24),
(21, 'Zbigniew', 'Wodecki', 'PH', 23),
(22, 'Grzegorz', 'Markowski', 'PH', 23),
(23, 'Piotr', 'Skrzynecki', 'Regio', NULL),
(24, 'Agnieszka', 'Osiecka', 'Regio', NULL);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`),
  ADD KEY `AssignedToUserID` (`AssignedToUserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`AssignedToUserID`) REFERENCES `users` (`UserID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
