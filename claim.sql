-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2023 at 07:18 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `claim`
--

-- --------------------------------------------------------

--
-- Table structure for table `4m_analyze`
--

CREATE TABLE `4m_analyze` (
  `no_claim` int(10) NOT NULL,
  `emergency_action` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `4m_analyze`
--

INSERT INTO `4m_analyze` (`no_claim`, `emergency_action`, `gambar`) VALUES
(3, 'Pake Superglue', 'img/PHOTO PRIBADI.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id_akun` int(10) NOT NULL,
  `nama_akun` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `countermeasures1`
--

CREATE TABLE `countermeasures1` (
  `no_claim` int(10) NOT NULL,
  `why_make` varchar(100) NOT NULL,
  `counter` varchar(100) NOT NULL,
  `pic1` varchar(100) NOT NULL,
  `duedate1` date NOT NULL,
  `cresult1` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `countermeasures1`
--

INSERT INTO `countermeasures1` (`no_claim`, `why_make`, `counter`, `pic1`, `duedate1`, `cresult1`) VALUES
(3, 'Jatuh', 'Jatuh', 'QC', '2023-03-09', 'Good');

-- --------------------------------------------------------

--
-- Table structure for table `countermeasures2`
--

CREATE TABLE `countermeasures2` (
  `no_claim` int(10) NOT NULL,
  `why_loose` varchar(100) NOT NULL,
  `counter2` varchar(100) NOT NULL,
  `pic2` varchar(100) NOT NULL,
  `duedate2` date NOT NULL,
  `cresult2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `countermeasures2`
--

INSERT INTO `countermeasures2` (`no_claim`, `why_loose`, `counter2`, `pic2`, `duedate2`, `cresult2`) VALUES
(3, 'failing', 'good', 'staff', '2023-02-10', 'good');

-- --------------------------------------------------------

--
-- Table structure for table `data_claim`
--

CREATE TABLE `data_claim` (
  `no_claim` int(10) NOT NULL,
  `part_name` varchar(100) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `checked_by` varchar(100) NOT NULL,
  `approved_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_claim`
--

INSERT INTO `data_claim` (`no_claim`, `part_name`, `product_name`, `checked_by`, `approved_by`) VALUES
(1, 'rante', 'Gear', 'SPV', 'QC'),
(2, 'Kaca', 'Kaca Spion', 'QC', 'SPV'),
(3, 'Bagian Gagang', 'Gelas', 'SPV', 'Manager');

-- --------------------------------------------------------

--
-- Table structure for table `data_claims`
--

CREATE TABLE `data_claims` (
  `no_claim` int(10) DEFAULT NULL,
  `product_name` varchar(100) NOT NULL,
  `part_name` varchar(100) NOT NULL,
  `checked_by` varchar(100) NOT NULL,
  `approved_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_claims`
--

INSERT INTO `data_claims` (`no_claim`, `product_name`, `part_name`, `checked_by`, `approved_by`) VALUES
(1, 'Gear', 'rem', 'QC', 'Manager');

-- --------------------------------------------------------

--
-- Table structure for table `define`
--

CREATE TABLE `define` (
  `id_product` int(11) NOT NULL,
  `product` varchar(20) NOT NULL,
  `material_product` varchar(30) NOT NULL,
  `model` varchar(20) NOT NULL,
  `pro_date` date NOT NULL,
  `man_date` date NOT NULL,
  `ngqty` int(11) NOT NULL,
  `dimana` varchar(20) NOT NULL,
  `phenomenon` varchar(200) NOT NULL,
  `investigation` varchar(200) NOT NULL,
  `image` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `define_the_claim_situation`
--

CREATE TABLE `define_the_claim_situation` (
  `no_claim` int(10) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `manufacte_date` date NOT NULL,
  `material_code` varchar(50) NOT NULL,
  `ngqty` int(50) NOT NULL,
  `model` varchar(100) NOT NULL,
  `where1` varchar(100) NOT NULL,
  `pro_date` date NOT NULL,
  `phenomenom` varchar(200) NOT NULL,
  `emergency_action` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `define_the_claim_situation`
--

INSERT INTO `define_the_claim_situation` (`no_claim`, `product_name`, `manufacte_date`, `material_code`, `ngqty`, `model`, `where1`, `pro_date`, `phenomenom`, `emergency_action`) VALUES
(1, '1', '2023-02-18', '20K', 20, 'HONDA', 'RUANG SPARE PART', '2023-02-08', 'pecah', 'GANTI BARU'),
(2, 'Kaca Spion', '2023-02-08', 'YT32', 10, 'kayu2', 'RUANG SPARE PART', '2023-02-08', 'terjatuh', 'tambal'),
(3, 'Gelas', '2023-03-06', 'GLS4341', 12, 'Bening', 'Produksi', '2023-03-13', 'Pecah', 'Pake Superglue');

-- --------------------------------------------------------

--
-- Table structure for table `investigation_result`
--

CREATE TABLE `investigation_result` (
  `no_claim` int(10) NOT NULL,
  `id_gambar` int(50) DEFAULT NULL,
  `gambar` varchar(100) NOT NULL,
  `eia_case` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `list_claim`
--

CREATE TABLE `list_claim` (
  `no_claim` int(100) NOT NULL,
  `part_name` varchar(100) NOT NULL,
  `action` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ncc_list`
--

CREATE TABLE `ncc_list` (
  `branch_company` varchar(100) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `customer` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `phenomenon` varchar(100) NOT NULL,
  `root_cause` varchar(100) NOT NULL,
  `occurence` varchar(100) NOT NULL,
  `flow_out` varchar(100) NOT NULL,
  `fm_classify` int(100) NOT NULL,
  `customer_put` varchar(100) NOT NULL,
  `reoccur` varchar(100) NOT NULL,
  `etd` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `remark` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ncc_list`
--

INSERT INTO `ncc_list` (`branch_company`, `product_name`, `date`, `customer`, `model`, `phenomenon`, `root_cause`, `occurence`, `flow_out`, `fm_classify`, `customer_put`, `reoccur`, `etd`, `status`, `remark`) VALUES
('PT.  ANUGRAH', 'RODA', '2023-02-09', 'PT. SINAR JAYA', 'HONDA', 'RUSAK ', 'TERSENGGOL', 'QC', 'FLAT', 0, 'YES', 'YES', 'NO', 'DONE', '-'),
('PT.  JAYA', 'RODA', '2023-02-12', 'PT. SINAR AGUNG', 'kayu2', 'RUSAK ', 'TERSENGGOL', 'QC', 'FLAT', 0, 'YES', 'YES', 'NO', 'NO', 'NOT GOOD');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(50) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `pro_date` date NOT NULL,
  `stok` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `model`, `pro_date`, `stok`) VALUES
(1, 'Gear', 'SNI', '2023-01-26', 10),
(2, 'Kaca Spion', 'AHM ', '2023-02-03', 20),
(3, 'Gelas', 'Bening', '2023-03-06', 100);

-- --------------------------------------------------------

--
-- Table structure for table `root_cause`
--

CREATE TABLE `root_cause` (
  `no_claim` int(10) NOT NULL,
  `ng_product` varchar(100) NOT NULL,
  `procustion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `root_cause`
--

INSERT INTO `root_cause` (`no_claim`, `ng_product`, `procustion`) VALUES
(1, 'good', 'good'),
(3, 'Tidak Standar', 'Standar');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('Administrator','QC') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `nama`, `password`, `level`) VALUES
('admin', 'admin', '202cb962ac59075b964b07152d234b70', 'Administrator'),
('sandia', 'SANDHIKA', 'caf1a3dfb505ffed0d024130f58c5cfa', 'QC'),
('tiansetiaone', 'TIAN AHMAD SETIAWAN', '202cb962ac59075b964b07152d234b70', 'Administrator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `4m_analyze`
--
ALTER TABLE `4m_analyze`
  ADD PRIMARY KEY (`no_claim`);

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indexes for table `countermeasures1`
--
ALTER TABLE `countermeasures1`
  ADD PRIMARY KEY (`no_claim`);

--
-- Indexes for table `countermeasures2`
--
ALTER TABLE `countermeasures2`
  ADD PRIMARY KEY (`no_claim`);

--
-- Indexes for table `data_claim`
--
ALTER TABLE `data_claim`
  ADD PRIMARY KEY (`no_claim`),
  ADD UNIQUE KEY `no_claim_3` (`no_claim`),
  ADD KEY `id_product` (`no_claim`),
  ADD KEY `no_claim` (`no_claim`),
  ADD KEY `no_claim_2` (`no_claim`);

--
-- Indexes for table `define`
--
ALTER TABLE `define`
  ADD PRIMARY KEY (`id_product`),
  ADD UNIQUE KEY `product` (`product`);

--
-- Indexes for table `define_the_claim_situation`
--
ALTER TABLE `define_the_claim_situation`
  ADD PRIMARY KEY (`no_claim`,`product_name`),
  ADD KEY `product_name` (`product_name`);

--
-- Indexes for table `investigation_result`
--
ALTER TABLE `investigation_result`
  ADD PRIMARY KEY (`no_claim`);

--
-- Indexes for table `list_claim`
--
ALTER TABLE `list_claim`
  ADD PRIMARY KEY (`no_claim`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `root_cause`
--
ALTER TABLE `root_cause`
  ADD PRIMARY KEY (`no_claim`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `4m_analyze`
--
ALTER TABLE `4m_analyze`
  MODIFY `no_claim` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `countermeasures1`
--
ALTER TABLE `countermeasures1`
  MODIFY `no_claim` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `countermeasures2`
--
ALTER TABLE `countermeasures2`
  MODIFY `no_claim` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `data_claim`
--
ALTER TABLE `data_claim`
  MODIFY `no_claim` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `define`
--
ALTER TABLE `define`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `define_the_claim_situation`
--
ALTER TABLE `define_the_claim_situation`
  MODIFY `no_claim` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `investigation_result`
--
ALTER TABLE `investigation_result`
  MODIFY `no_claim` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `list_claim`
--
ALTER TABLE `list_claim`
  MODIFY `no_claim` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `root_cause`
--
ALTER TABLE `root_cause`
  MODIFY `no_claim` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
