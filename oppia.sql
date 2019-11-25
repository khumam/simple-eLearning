-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 26, 2019 at 12:20 AM
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
-- Database: `oppia`
--

-- --------------------------------------------------------

--
-- Table structure for table `badge`
--

CREATE TABLE `badge` (
  `id` int(15) NOT NULL,
  `badge_name` varchar(255) NOT NULL,
  `badge_desc` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `del` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `badgeto`
--

CREATE TABLE `badgeto` (
  `id` int(15) NOT NULL,
  `from_id` int(15) NOT NULL,
  `for_id` int(15) NOT NULL,
  `id_badge` int(15) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `del` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(15) NOT NULL,
  `from_id` int(15) NOT NULL,
  `to_id` int(15) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `del` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` int(15) NOT NULL,
  `user_id` int(15) NOT NULL,
  `class_name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `cover` varchar(250) NOT NULL,
  `level` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `del` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `user_id`, `class_name`, `description`, `cover`, `level`, `created_at`, `del`) VALUES
(4, 1, 'Web Programming', 'Di dalam kelas ini kita akan belajar semua hal tentang web programming. Disertai dengan penjelasan yang mudah, dan memiliki materi yang terstruktur.', '', 'ekstra', '2019-11-19 02:03:20', 1),
(9, 1, 'Biologi Dasar', 'Semua  tentang Biologi', '', 'smp', '2019-11-12 02:00:32', 1),
(10, 1, 'Matematika', 'Semua tentang matematika. Matematika itu seru loh.', '', 'sd', '2019-11-12 02:00:31', 1),
(11, 3, 'Komputer Jaringan', 'Komputer itu menyenangkan.', '', 'sd', '2019-11-12 02:00:30', 1),
(12, 1, 'Photoshop', 'Di kelas ini kamu akan belajar Photoshop', '', 'Pemula', '2019-11-19 01:46:39', 1),
(13, 1, 'Belajar Potoshop', 'Belajar', '0', 'Pemula', '2019-11-19 01:46:38', 1),
(14, 1, 'Komputer', 'Komputer', '0', 'Pemula', '2019-11-19 01:46:36', 1),
(15, 1, 'Photoshop', 'Belajar photoshop', '', 'Pemula', '2019-11-19 01:52:17', 1),
(16, 1, 'Belajar Photoshop', 'Di kelas ini kamu akan belajar tentang photoshop', 'Screenshot_from_2019-11-07_15-48-21.png', 'Pemula', '2019-11-19 02:02:02', 0);

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(15) NOT NULL,
  `subyek_id` int(15) NOT NULL,
  `file` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `del` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE `materi` (
  `id` int(15) NOT NULL,
  `class_id` int(15) NOT NULL,
  `subyek_name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `content` text NOT NULL,
  `url_video` varchar(250) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `del` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materi`
--

INSERT INTO `materi` (`id`, `class_id`, `subyek_name`, `description`, `content`, `url_video`, `created_at`, `del`) VALUES
(1, 11, 'Mikrotik dasar', 'Berisi tentang pelajaran mikrotik', '<p><b>Pendahuluan</b></p><p>Hello World</p>', '', '2019-11-05 01:38:37', 0),
(2, 4, 'Ini Materi', 'Ini deskripsi', '<p>Kontennnnnnn</p>', 'https://www.youtube.com/watch?v=7f11bDxZSP0', '2019-11-19 01:24:04', 0),
(3, 16, 'Bagian 1 Pengenalan', 'Di bagian ini, kita akan belajar photoshop bagian pengenalan.', '<p>Ini adalah konten ya</p>', 'https://www.youtube.com/watch?v=pFyOznL9UvA', '2019-11-19 02:14:55', 0);

-- --------------------------------------------------------

--
-- Table structure for table `myclass`
--

CREATE TABLE `myclass` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_class` int(11) NOT NULL,
  `del` tinyint(1) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `myclass`
--

INSERT INTO `myclass` (`id`, `id_user`, `id_class`, `del`, `date`) VALUES
(1, 4, 4, 1, '2019-11-19 02:03:20'),
(2, 4, 10, 1, '2019-11-12 02:00:31'),
(3, 4, 9, 1, '2019-11-12 02:00:32'),
(4, 4, 11, 1, '2019-11-12 02:00:30'),
(5, 4, 16, 0, '2019-11-19 02:11:00');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `id` int(15) NOT NULL,
  `subyek_id` int(15) NOT NULL,
  `quiz_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `quiz_file` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `del` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(15) NOT NULL,
  `student_id` int(15) NOT NULL,
  `subyek_id` int(15) NOT NULL,
  `nilai` int(15) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `del` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `fullname` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `role` varchar(250) NOT NULL,
  `is_delete` tinyint(1) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `fullname`, `email`, `password`, `role`, `is_delete`, `date`) VALUES
(1, 'Khoerul Umam', 'notectus@gmail.com', '$2y$10$7jT71porPGu594/zzTs8oeYldM2sux5fiQ8BizOuCC3/7reARkG5m', 'admin', 0, '2019-11-12 00:35:10'),
(2, 'Khoerul Umam', 'khoerul27@gmail.com', '$2y$10$MMA248hxGLQUZ8H9ELXezuOzZLrm88aOY5o6JGYplOS1mwsfT9oD6', 'user', 0, '2019-11-12 00:35:23'),
(3, 'Khoerul Umam', 'khoerulimut@gmail.com', '$2y$10$aQBlRlSQna2l3rMStQ.Mg.2f3c05kKM40lfnflLqQQ/YB5LlhCUHS', 'admin', 0, '2019-11-12 00:35:19'),
(4, 'Notectus Robert', 'notectus2@gmail.com', '$2y$10$XBeP11LvJR.y7HAEWch4fOfLhbGbqbGaYDdiO0T6M4nfurG1xPgEa', 'user', 0, '2019-11-12 01:07:14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(15) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(1) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `del` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `badge`
--
ALTER TABLE `badge`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `badgeto`
--
ALTER TABLE `badgeto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_badge` (`id_badge`),
  ADD KEY `from_id` (`from_id`,`for_id`),
  ADD KEY `for_id` (`for_id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `from_id` (`from_id`,`to_id`),
  ADD KEY `to_id` (`to_id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subyek_id` (`subyek_id`);

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `class_id` (`class_id`);

--
-- Indexes for table `myclass`
--
ALTER TABLE `myclass`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subyek_id` (`subyek_id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`,`subyek_id`),
  ADD KEY `subyek_id` (`subyek_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `badge`
--
ALTER TABLE `badge`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `badgeto`
--
ALTER TABLE `badgeto`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `materi`
--
ALTER TABLE `materi`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `myclass`
--
ALTER TABLE `myclass`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `badgeto`
--
ALTER TABLE `badgeto`
  ADD CONSTRAINT `badgeto_ibfk_1` FOREIGN KEY (`from_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `badgeto_ibfk_2` FOREIGN KEY (`for_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `badgeto_ibfk_3` FOREIGN KEY (`id_badge`) REFERENCES `badge` (`id`);

--
-- Constraints for table `chat`
--
ALTER TABLE `chat`
  ADD CONSTRAINT `chat_ibfk_1` FOREIGN KEY (`from_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `chat_ibfk_2` FOREIGN KEY (`to_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `files`
--
ALTER TABLE `files`
  ADD CONSTRAINT `files_ibfk_1` FOREIGN KEY (`subyek_id`) REFERENCES `materi` (`id`);

--
-- Constraints for table `materi`
--
ALTER TABLE `materi`
  ADD CONSTRAINT `materi_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `class` (`id`);

--
-- Constraints for table `quiz`
--
ALTER TABLE `quiz`
  ADD CONSTRAINT `quiz_ibfk_1` FOREIGN KEY (`subyek_id`) REFERENCES `materi` (`id`);

--
-- Constraints for table `result`
--
ALTER TABLE `result`
  ADD CONSTRAINT `result_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `result_ibfk_2` FOREIGN KEY (`subyek_id`) REFERENCES `materi` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
