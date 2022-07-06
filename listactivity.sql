-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2019 at 05:36 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `listactivity`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabelkegiatan`
--

CREATE TABLE `tabelkegiatan` (
  `id` int(10) NOT NULL,
  `job_desk` varchar(100) NOT NULL,
  `jam_mulai` varchar(13) NOT NULL,
  `jam_akhir` varchar(13) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah_order` int(10) NOT NULL,
  `keterangan` text NOT NULL,
  `username` varchar(10) NOT NULL,
  `nama_karyawan` varchar(30) NOT NULL,
  `status` varchar(10) NOT NULL,
  `progress` int(50) NOT NULL,
  `unit` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabelkegiatan`
--

INSERT INTO `tabelkegiatan` (`id`, `job_desk`, `jam_mulai`, `jam_akhir`, `tanggal`, `jumlah_order`, `keterangan`, `username`, `nama_karyawan`, `status`, `progress`, `unit`) VALUES
(1, 'Website', '08.00', '16.30', '2018-12-31', 10, 'Not Clear', '940205', 'Ramanda Sugraha', 'Open Job', 50, '');

-- --------------------------------------------------------

--
-- Table structure for table `usertelkom`
--

CREATE TABLE `usertelkom` (
  `No` int(13) NOT NULL,
  `username` varchar(13) NOT NULL,
  `password` varchar(15) NOT NULL,
  `nama_karyawan` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `loker` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertelkom`
--

INSERT INTO `usertelkom` (`No`, `username`, `password`, `nama_karyawan`, `jabatan`, `loker`) VALUES
(1, '620687', 'telkom', 'SAUDI ', 'ASMAN FULFILLMENT', 'FULFILLMENT'),
(2, '622168', 'telkom', 'RUSLI KADIR ', 'MGR HR & CDC', 'HR & CDC'),
(3, '622145', 'telkom', 'AMIR MULYADI ', 'KAKANDATEL BELITUNG', 'KANDATEL BELITUNG'),
(4, '621839', 'telkom', 'HUSNI IDRIS ', 'ASMAN WITEL OPERATION CENTER', 'WITEL OPERATION CENTER'),
(5, '621654', 'telkom', 'JEMSON NAIBAHO ', 'ASMAN FINANCE', 'FINANCE'),
(6, '623086', 'telkom', 'YOSEPH MUCHTAR, IR. ', 'MGR LOGISTIK & GENERAL SUPPORT', 'LOGISTIK & GENERAL SUPPORT'),
(7, '623054', 'telkom', 'BUDI PRIHADI,IR ', 'MGR BUSINESS, GOVT & ENTERPRISE SERVICE', 'BUSINESS, GOVT & ENTERPRISE SERVICE'),
(8, '631046', 'telkom', 'ERNAWATI ', 'OFF 1 HR DEVELOPMENT', 'HR & CDC'),
(9, '630483', 'telkom', 'SADIMAN ', 'MGR CCAN & WAN', 'CCAN & WAN'),
(10, '631337', 'telkom', 'SYAHRIAL ', 'ASMAN SALES & CUSTOMER CARE', 'SALES & CUSTOMER CARE'),
(11, '631325', 'telkom', 'ROZALI ', 'MGR ACCESS OPTIMA & MAINTENANCE', 'ACCESS OPTIMA & MAINTENANCE'),
(12, '631326', 'telkom', 'SYAMSUARDI ', 'ASMAN BGES SALES ENGINEER, BIDDING & PM', 'BGES SALES ENGINEER, BIDDING & PM'),
(13, '631331', 'telkom', 'HARYUNI ', 'ASMAN COMMUNICATION, SECRETARIATE & SAS', 'COMMUNICATION, SECRETARIATE & SAS'),
(14, '632327', 'telkom', 'ZAINAL BAHRI ', 'ASMAN ASSURANCE', 'ASSURANCE'),
(15, '633402', 'telkom', 'ANJAR GUNADI ', 'SPV PLASA Mentok', 'PLASA MENTOK'),
(16, '632584', 'telkom', 'ISKANDAR ', 'ASMAN ACCESS MAINTENANCE & QE', 'ACCESS MAINTENANCE & QE'),
(17, '640041', 'telkom', 'EDY SUSWANTO ', 'ASMAN HOME SERVICE', 'HOME SERVICE'),
(18, '640449', 'telkom', 'HASAN BASRI ', 'ASMAN WIFI FULFILLMENT & ASSURANCE', 'WIFI FULFILLMENT & ASSURANCE'),
(19, '640446', 'telkom', 'HASAPAWI ', 'ASMAN GES TERITORY SALES', 'GES TERITORY SALES'),
(20, '640411', 'telkom', 'RA. MERI AMINAH ', 'ASMAN LOGISTIK & LEGAL', 'LOGISTIK & LEGAL'),
(21, '640263', 'telkom', 'SITI USMINI ', 'ASMAN DIGITAL SERVICE & WIFI', 'DIGITAL SERVICE & WIFI'),
(22, '641825', 'telkom', 'SUKIRMAN ', 'ASMAN NETWORK PERF, QM & ADMIN', 'NETWORK PERF, QM & ADMIN'),
(23, '641818', 'telkom', 'RIAWATI SIREGAR ', 'ASMAN ACCESS DATA MANAGEMENT', 'ACCESS DATA MANAGEMENT'),
(24, '641854', 'telkom', 'SUHENDRA GUSTIN ', 'JM CUSTOMER CARE', 'CUSTOMER CARE'),
(25, '641840', 'telkom', 'HASBIARTO ', 'SPV PLASA SUNGAI LIAT', 'PLASA SUNGAI LIAT'),
(26, '650119', 'telkom', 'SURYADARMA ', 'ASMAN SUPPORT', 'SUPPORT'),
(27, '642513', 'telkom', 'DARWIN, S.T. ', 'ASMAN DATA CENTER & CME', 'DATA CENTER & CME'),
(28, '651357', 'telkom', 'SUKARMAN ', 'ASMAN OPERATION & MAINTENANCE', 'OPERATION & MAINTENANCE'),
(29, '651056', 'telkom', 'ABDUL FIRMAN, ST ', 'MGR NETWORK AREA & IS OPERATION', 'NETWORK AREA & IS OPERATION'),
(30, '650612', 'telkom', 'MAIZAL ', 'MGR FINANCE & PAYMENT COLLECTION', 'FINANCE & PAYMENT COLLECTION'),
(31, '651550', 'telkom', 'EDY SURYONO ', 'ASMAN IS OPERATION SUPPORT', 'NETWORK AREA & IS OPERATION'),
(32, '651558', 'telkom', 'SUGIMAN', 'OFF 1 PKBL', 'HR & CDC'),
(33, '651341', 'telkom', 'JOVINUS ERIXON TAMBUNAN ', 'MGR ACCESS SERVICE OPERATION', 'ACCESS SERVICE OPERATION'),
(34, '680100', 'telkom', 'SARWAN ', 'ASMAN CCAN FULFILLMENT & ASSURANCE', 'CCAN FULFILLMENT & ASSURANCE'),
(35, '690023', 'telkom', 'SURI AGUS, S.T ', 'MGR CONSUMER SERVICE', 'CONSUMER SERVICE'),
(36, '710519', 'telkom', 'MUHAMMAD ZAIDAN JAUHARI ', 'GM WITEL BABEL', 'WITEL BABEL'),
(37, '730431', 'telkom', 'LEONARD LOLO SUTARDODO PARAPAT, MS. ', 'MGR WAR ROOM', 'WAR ROOM'),
(38, '850029', 'telkom', 'SATRIA SITORUS ', 'ASMAN DEPLOYMENT & CAPEX MGT', 'DEPLOYMENT & CAPEX MGT'),
(39, '920254', 'telkom', 'BAMBANG EKO SURYA ', 'JUNIOR ACCOUNT MANAGER 2', 'BUSINESS, GOVT & ENTERPRISE SERVICE'),
(40, '930338', 'telkom', 'RYAN IRFANDI ', 'SENIOR ACCESS NETWORK SUPERVISORY', 'OPERATION & MAINTENANCE'),
(41, '930174', 'telkom', 'SATRIA SEVENTINO SIMAMORA ', 'OFF 3 OM IP NETWORK', 'OM IP NETWORK'),
(42, '930322', 'telkom', 'MUHAMMAD SAGIF SHAHAB ', 'OFF 3 ADVALJAR OPERATION', 'ACCESS DATA MANAGEMENT'),
(43, '940139', 'telkom', 'PRIO GALIH RAGA PRAKOSO ', 'OFF 3 MICRO DEMAND', 'HOME SERVICE'),
(44, '950007', 'telkom', 'FREDDY HASIHOLAN SITORUS ', 'OFF 3 DIGITAL & WIFI SUPPORT', 'DIGITAL SERVICE & WIFI'),
(45, '940205', 'telkom', 'Ramanda Sugraha', 'OFF 3 PROMOTION & SALES SUPPORT', 'HOME SERVICE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabelkegiatan`
--
ALTER TABLE `tabelkegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usertelkom`
--
ALTER TABLE `usertelkom`
  ADD PRIMARY KEY (`No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabelkegiatan`
--
ALTER TABLE `tabelkegiatan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `usertelkom`
--
ALTER TABLE `usertelkom`
  MODIFY `No` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
