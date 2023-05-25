-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Waktu pembuatan: 25 Bulan Mei 2023 pada 07.09
-- Versi server: 5.7.34
-- Versi PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Test-Mysql`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `hobbies`
--

CREATE TABLE `hobbies` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `level` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `hobbies`
--

INSERT INTO `hobbies` (`id`, `name`, `level`) VALUES
(1, 'Running', 8),
(2, 'Skipping', 5),
(3, 'Push up', 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `map_user_hobby`
--

CREATE TABLE `map_user_hobby` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `hobby_id` int(11) DEFAULT NULL,
  `statuse` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `map_user_hobby`
--

INSERT INTO `map_user_hobby` (`id`, `user_id`, `hobby_id`, `statuse`) VALUES
(1, 1, 1, 'active'),
(2, 3, 1, 'active'),
(3, 8, 3, 'deleted'),
(4, 2, 2, 'active'),
(5, 4, 1, 'deleted'),
(6, 6, 2, 'active'),
(7, 5, 3, 'active'),
(8, 8, 1, 'active'),
(9, 7, 2, 'active'),
(10, 4, 2, 'active'),
(11, 9, 3, 'deleted'),
(12, 10, 2, 'deleted'),
(13, 3, 2, 'active'),
(14, 2, 3, 'active'),
(15, 10, 2, 'active'),
(16, 8, 2, 'active');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `gender`, `status`) VALUES
(1, 'frasch', 'F', 'active'),
(2, 'Garmuth', 'M', 'active'),
(3, 'Goliath', 'M', 'active'),
(4, 'Luna', 'F', 'active'),
(5, 'Zeus', 'M', 'active'),
(6, 'Aphrodite', 'F', 'active'),
(7, 'Ares', 'M', 'active'),
(8, 'Lina', 'F', 'active'),
(9, 'Lanaya', 'F', 'active'),
(10, 'Hades', 'M', 'active');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `hobbies`
--
ALTER TABLE `hobbies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index_hobbi` (`name`);

--
-- Indeks untuk tabel `map_user_hobby`
--
ALTER TABLE `map_user_hobby`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `hobby_id` (`hobby_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index_user` (`name`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `map_user_hobby`
--
ALTER TABLE `map_user_hobby`
  ADD CONSTRAINT `map_user_hobby_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `map_user_hobby_ibfk_2` FOREIGN KEY (`hobby_id`) REFERENCES `hobbies` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
