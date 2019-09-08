-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2019 at 04:22 AM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_arima`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `jabatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `nama`, `jabatan`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin', 'Admin'),
('pemimpin', '8c0d069bd57dd91767a9df11e9a5a731', 'Pemimpin', 'Pemimpin');

-- --------------------------------------------------------

--
-- Table structure for table `penawaran`
--

CREATE TABLE IF NOT EXISTS `penawaran` (
  `as_of_date` date NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sales` varchar(500) NOT NULL,
  `project` varchar(500) NOT NULL,
  `nama_perusahaan` varchar(500) NOT NULL,
  `estimasi_kontrak` float NOT NULL,
  `pic_perusahaan` varchar(200) NOT NULL,
  `tlp_perusahaan` varchar(20) NOT NULL,
  `progress` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `penawaran`
--

INSERT INTO `penawaran` (`as_of_date`, `id`, `sales`, `project`, `nama_perusahaan`, `estimasi_kontrak`, `pic_perusahaan`, `tlp_perusahaan`, `progress`, `keterangan`) VALUES
('2019-08-29', 2, 'IRMA SUSANTI', 'Project B', 'PT Bersama', 50000000, 'Yendi', '02584874255', 'Proposal', 'masih proposal');

-- --------------------------------------------------------

--
-- Table structure for table `project_berjalan`
--

CREATE TABLE IF NOT EXISTS `project_berjalan` (
  `as_of_date` date NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sales` varchar(500) NOT NULL,
  `project` varchar(500) NOT NULL,
  `nama_perusahaan` varchar(500) NOT NULL,
  `tgl_kontrak` date NOT NULL,
  `nilai_kontrak` float NOT NULL,
  `hps` float NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_akhir` date NOT NULL,
  `status_project` varchar(100) NOT NULL,
  `pic_perusahaan` varchar(500) NOT NULL,
  `tlp_perusahaan` varchar(20) NOT NULL,
  `status_pembayaran` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `total_opr` float NOT NULL,
  `opr_keluar` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `project_berjalan`
--

INSERT INTO `project_berjalan` (`as_of_date`, `id`, `sales`, `project`, `nama_perusahaan`, `tgl_kontrak`, `nilai_kontrak`, `hps`, `tgl_mulai`, `tgl_akhir`, `status_project`, `pic_perusahaan`, `tlp_perusahaan`, `status_pembayaran`, `keterangan`, `total_opr`, `opr_keluar`) VALUES
('2019-08-29', 7, 'IRMA SUSANTI', 'Project', 'PT ABC Bersama', '2019-08-29', 20000000, 10000000, '2019-08-30', '2019-10-31', 'Sign Kontrak', 'Reza', '086765456', 'Belum Diproses', 'Belum di proses', 5000000, 3500000);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE IF NOT EXISTS `sales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(500) NOT NULL,
  `alamat` text NOT NULL,
  `no_tlp` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `nama`, `alamat`, `no_tlp`) VALUES
(9, 'IRMA SUSANTI', 'JAKARTA', '082246468683');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
