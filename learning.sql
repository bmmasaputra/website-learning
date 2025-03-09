-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Mar 2025 pada 06.05
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `learning`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `login_users`
--

CREATE TABLE `login_users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `login_users`
--

INSERT INTO `login_users` (`id`, `username`, `email`, `password`, `created_at`) VALUES
(1, 'Fatiya', 'fatiya@gmail.com', 'fatiya123', '2025-03-05 03:15:28'),
(2, 'nina', 'nina@example.com', 'nina123', '2025-03-05 03:35:23'),
(3, 'Alya', 'alya@example.com', 'alya123', '2025-03-05 04:23:40'),
(4, 'Dewi', 'dewi@example.com', 'dewi123', '2025-03-05 04:25:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `usia` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `usia`, `email`) VALUES
(1, 'Budi', 3, 'budi@example.com'),
(2, 'Siti', 4, 'siti@example.com'),
(3, 'Rina', 2, 'rina@example.com'),
(4, 'Alya', 2, 'alya@example.com'),
(5, 'Nina', 3, 'nina@example.com'),
(7, 'Dewi', 4, 'dewi@example.com'),
(8, 'Eko', 2, 'eko@example.com'),
(9, 'Farhan', 3, 'farhan@example.com'),
(11, 'Hadi', 4, 'hadi@example.com'),
(12, 'Indra', 2, 'indra@example.com'),
(13, 'Joko', 3, 'joko@example.com'),
(15, 'Lina', 4, 'lina@example.com'),
(16, 'Mira', 2, 'mira@example.com'),
(17, 'Nanda', 3, 'nanda@example.com'),
(19, 'Putri', 4, 'putri@example.com'),
(20, 'Qori', 2, 'qori@example.com'),
(21, 'Rian', 3, 'rian@example.com'),
(23, 'Tono', 4, 'tono@example.com'),
(24, 'Umar', 2, 'umar@example.com'),
(25, 'Vina', 3, 'vina@example.com'),
(27, 'Xena', 4, 'xena@example.com'),
(28, 'Yusuf', 2, 'yusuf@example.com'),
(29, 'Zahra', 3, 'zahra@example.com'),
(31, 'Bella', 4, 'bella@example.com'),
(32, 'Cindy', 2, 'cindy@example.com'),
(33, 'Dani', 3, 'dani@example.com'),
(34, 'tribbie', 3, 'triannon@gmail.com'),
(36, 'ghea', 4, 'ghea@example.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sessions`
--

CREATE TABLE `user_sessions` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `login_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `ip_address` varchar(45) DEFAULT NULL,
  `browser_info` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `login_users`
--
ALTER TABLE `login_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sessions`
--
ALTER TABLE `user_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `login_users`
--
ALTER TABLE `login_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `user_sessions`
--
ALTER TABLE `user_sessions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `user_sessions`
--
ALTER TABLE `user_sessions`
  ADD CONSTRAINT `user_sessions_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
