-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2025 at 12:10 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpdasar`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `hp` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `password2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `hp`, `email`, `password`, `password2`) VALUES
(3, 'Bayu', '0823574826', 'Bayu@gmail.com', '$2y$10$Nz5YdVgZ8CXbOnOYU0Vw8OvcVoT9lNFI3dxMsl7profgW4hnsPYrO', ''),
(4, 'Budi', '0823574674', 'mario@gmail.com', '$2y$10$gJMFlx7jl7Rm5oAdyAl0KuCGfM5h5YjaczLvNWivcXtITyeXCxR.m', '');

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE `grade` (
  `id` int(100) UNSIGNED NOT NULL,
  `student` varchar(10) NOT NULL,
  `teacher` varchar(10) NOT NULL,
  `score1` varchar(10) NOT NULL,
  `score2` varchar(10) NOT NULL,
  `score3` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `grade`
--

INSERT INTO `grade` (`id`, `student`, `teacher`, `score1`, `score2`, `score3`) VALUES
(1, 'Budi', 'Bayu', '95', '80', '70');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `Id` int(11) NOT NULL,
  `Nama` varchar(200) NOT NULL,
  `nrp` char(9) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Jurusan` varchar(100) NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `Jenis_Kelamin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`Id`, `Nama`, `nrp`, `Email`, `Jurusan`, `Alamat`, `Jenis_Kelamin`) VALUES
(1, 'Bayu Arnoldo', '159320539', 'Bayu@gmail.com', 'Teknik Informatika', 'Jl Bintaro Permai Raya 105, Dki Jakarta', 'Laki'),
(2, 'Mario Jono', '157435608', 'Mario@gmail.com', 'Teknik komputer', 'Jl Cemara 2/7 RT 001/02, Dki Jakarta', 'Laki'),
(16, 'Budi', '173612094', 'Budi@gmail,com', 'Teknik hukum', 'Jl Cileduk Raya 30, Dki Jakarta', 'Laki');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(100) UNSIGNED NOT NULL,
  `name` varchar(200) NOT NULL,
  `NRP` char(9) NOT NULL,
  `email` varchar(100) NOT NULL,
  `field_of_study` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `gender` enum('Male','Female','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `NRP`, `email`, `field_of_study`, `address`, `gender`) VALUES
(1, 'Budi', '923271054', 'budi@gmail.com', 'Computer Science', 'Kompl Reni Jaya Bl P-9/4, Dki Jakarta', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `NIM` char(9) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `NIM`, `email`, `jurusan`, `alamat`, `jenis_kelamin`, `password`) VALUES
(1, 'mario', '912765043', 'mario@gmail,com', 'Teknik komputer', 'Jl RA Kartini Kav 16, Jakarta', 'Laki', '$2y$10$TWYbcmYpiKY4nIOJaqtbxOz0cIrL2LLl753fb9yCbxAVR.IOXZLDC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nrp` (`NRP`),
  ADD UNIQUE KEY `NRP_2` (`NRP`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `grade`
--
ALTER TABLE `grade`
  MODIFY `id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
