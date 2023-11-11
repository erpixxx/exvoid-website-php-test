-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 11 Lis 2023, 01:01
-- Wersja serwera: 10.4.27-MariaDB
-- Wersja PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `exvoid_web`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `announcements`
--

CREATE TABLE `announcements` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` varchar(1000) NOT NULL DEFAULT '',
  `author_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Zrzut danych tabeli `announcements`
--

INSERT INTO `announcements` (`id`, `title`, `content`, `author_id`) VALUES
(1, 'Test title', 'Aaaaaaaaaa bleeeh!!!', 1),
(2, 'NEW EVENT!!!!!!', 'Bleehhh event starts!! \r\n\r\nYou shall bleeehhhh now!', 1),
(3, 'Temst', 'aaaaaaaaaaa', 1),
(4, 'Tutorial: How to use this epic website', 'Helo fellow visitor.\r\nMy name is bleehhh\r\n\r\nPasswords: \r\nErPiX: FunkyPassword\r\nMatou0014: SussyPassword\r\n\r\nhave a great evening/day/night/noon', 2);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'ErPiX', '$2y$10$spBY4FzdgyZhVIhK0bUZw.LgFq3xAwsm/fv2dHn.mFci.QmdLvld6'),
(2, 'Matou0014', '$2a$12$jA0Mj9lbQeMM8LcUFon9Lum.u25tol7JG.PQFkarBLCFA4ptbmsA2');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
