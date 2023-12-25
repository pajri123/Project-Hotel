-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2023 at 03:59 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kasushotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_nama` varchar(10) NOT NULL,
  `admin_username` varchar(50) NOT NULL,
  `admin_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_nama`, `admin_username`, `admin_password`) VALUES
(1, 'pajri', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'admin', 'admin', '0192023a7bbd73250516f069df18b500');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_nama` varchar(10) NOT NULL,
  `customer_alamat` text DEFAULT NULL,
  `customer_jk` varchar(20) NOT NULL,
  `customer_hp` varchar(20) NOT NULL,
  `customer_ktp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_nama`, `customer_alamat`, `customer_jk`, `customer_hp`, `customer_ktp`) VALUES
(1, 'Susan', 'Jl. Pahlawan No. 10, Jakarta', 'perempuan', '08123456789', '2345678904'),
(2, 'Budi', 'Jl. Veteran No. 20, Bandung', 'Laki-laki', '08567890123', '4234567890'),
(3, 'Citra', 'Jl. Diponegoro No. 30, Surabaya', 'Perempuan', '08901234567', '7654321098'),
(4, 'Dewi', 'Jl. Sisingamangaraja No.40,Yogyakarta', 'Perempuan', '08234567890', '2345678901'),
(5, 'Anton', 'Jl Siliwangi, Bekasi', 'Laki-Laki', '089342432343', '21332312134');

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `kamar_id` int(11) NOT NULL,
  `kamar_nomor` varchar(10) NOT NULL,
  `kamar_tipe` varchar(50) NOT NULL,
  `kamar_fasilitas` text NOT NULL,
  `kamar_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`kamar_id`, `kamar_nomor`, `kamar_tipe`, `kamar_fasilitas`, `kamar_status`) VALUES
(1, '101', 'Single', 'AC, TV, Kamar Mandi Dalam', 'Tersedia'),
(2, '102', 'Single', 'AC, TV, Kamar Mandi Dalam', 'Tersedia'),
(3, '201', 'Double', 'AC, TV, Kamar Mandi Dalam, Balkon', 'tersedia'),
(4, '202', 'Double', 'AC, TV, Kamar Mandi Dalam, Balkon', 'Tersedia'),
(5, '301', 'Suite', 'AC, TV, Kamar Mandi Dalam, Ruang Tamu, Balkon', 'Tidak Tersedia'),
(6, '302', 'Suite', 'AC, TV, Kamar Mandi Dalam, Ruang Tamu, Balkon', 'Tersedia'),
(7, '203', 'Single', 'AC, TV, Kamar Mandi Dalam, Balkon', 'Tidak Tersedia'),
(8, '204', 'Double', 'AC, TV, Kamar Mandi Dalam', 'tidak tersedia'),
(9, '303', 'Single', 'AC, TV, Kamar Mandi Dalam, Balkon', 'Tidak Tersedia'),
(11, '205', 'Suite', 'AC, TV, Kamar Mandi Dalam, Ruang Tamu, Balkon', 'Tersedia');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `pemesanan_id` int(11) NOT NULL,
  `pemesanan_nomor` int(11) NOT NULL,
  `pemesanan_customer` int(11) NOT NULL,
  `pemesanan_kamar` int(11) NOT NULL,
  `pemesanan_checkin` date NOT NULL,
  `pemesanan_checkout` date NOT NULL,
  `pemesanan_harga` int(20) NOT NULL,
  `pemesanan_status` varchar(20) NOT NULL,
  `pemesanan_tgl` date NOT NULL,
  `pemesanan_totalharga` int(30) NOT NULL,
  `hari` varchar(20) NOT NULL,
  `pembayaran` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`pemesanan_id`, `pemesanan_nomor`, `pemesanan_customer`, `pemesanan_kamar`, `pemesanan_checkin`, `pemesanan_checkout`, `pemesanan_harga`, `pemesanan_status`, `pemesanan_tgl`, `pemesanan_totalharga`, `hari`, `pembayaran`) VALUES
(1, 1001, 1, 1, '2023-06-01', '2023-06-03', 430000, '', '2023-06-01', 860000, '2', 0),
(2, 1002, 2, 3, '2023-06-02', '2023-06-05', 500000, '', '2023-06-02', 1000000, '3', 0),
(3, 1003, 3, 4, '2023-06-03', '2023-06-04', 250000, '', '2023-06-03', 250000, '1', 0),
(4, 1004, 4, 2, '2023-06-04', '2023-06-07', 400000, '1', '2023-06-04', 0, '', 0),
(5, 1005, 1, 6, '2023-06-05', '2023-06-08', 750000, '', '2023-06-05', 2250000, '3', 0),
(6, 1006, 2, 5, '2023-06-06', '2023-06-09', 600000, '', '2023-06-06', 1800000, '3', 0),
(8, 1, 2, 8, '2023-06-05', '2023-06-08', 200000, '1', '2023-06-04', 600000, '3', 600000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`kamar_id`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`pemesanan_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kamar`
--
ALTER TABLE `kamar`
  MODIFY `kamar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `pemesanan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
