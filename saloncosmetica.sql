-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2017 at 05:24 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saloncosmetica`
--

-- --------------------------------------------------------

--
-- Table structure for table `angajati`
--

CREATE TABLE `angajati` (
  `IDAngajat` int(11) NOT NULL,
  `Nume` varchar(20) NOT NULL,
  `Prenume` varchar(20) NOT NULL,
  `Salariu` int(6) NOT NULL,
  `DataAngajarii` date NOT NULL,
  `NumarOreSapt` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `angajati`
--

INSERT INTO `angajati` (`IDAngajat`, `Nume`, `Prenume`, `Salariu`, `DataAngajarii`, `NumarOreSapt`) VALUES
(2, 'Flori', 'Mari', 1000, '2017-01-02', 20);

-- --------------------------------------------------------

--
-- Table structure for table `clienti`
--

CREATE TABLE `clienti` (
  `IDClient` int(11) NOT NULL,
  `Nume` varchar(20) NOT NULL,
  `Prenume` varchar(20) NOT NULL,
  `NrTelefon` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clienti`
--

INSERT INTO `clienti` (`IDClient`, `Nume`, `Prenume`, `NrTelefon`) VALUES
(1, 'a', 'b', 123456789),
(2, 'Gigi', 'Becali', 123456789);

-- --------------------------------------------------------

--
-- Table structure for table `clienticucupoane`
--

CREATE TABLE `clienticucupoane` (
  `IDClient` int(11) NOT NULL,
  `IDCupon` int(11) NOT NULL,
  `Data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clienticucupoane`
--

INSERT INTO `clienticucupoane` (`IDClient`, `IDCupon`, `Data`) VALUES
(2, 1, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `cupoane`
--

CREATE TABLE `cupoane` (
  `IDCupon` int(11) NOT NULL,
  `Reducere` int(11) NOT NULL,
  `Cod` varchar(6) NOT NULL,
  `Valabil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cupoane`
--

INSERT INTO `cupoane` (`IDCupon`, `Reducere`, `Cod`, `Valabil`) VALUES
(1, 100, 'ABCDEF', 0);

-- --------------------------------------------------------

--
-- Table structure for table `programari`
--

CREATE TABLE `programari` (
  `IDClient` int(11) NOT NULL,
  `Data` date NOT NULL,
  `Ora` int(3) NOT NULL,
  `IDServiciu` int(11) NOT NULL,
  `IDAngajat` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `servicii`
--

CREATE TABLE `servicii` (
  `IDServiciu` int(11) NOT NULL,
  `Denumire` varchar(30) NOT NULL,
  `Pret` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `servicii`
--

INSERT INTO `servicii` (`IDServiciu`, `Denumire`, `Pret`) VALUES
(1, 'Manichiura', 10),
(2, 'Pedichiura', 15);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `angajati`
--
ALTER TABLE `angajati`
  ADD PRIMARY KEY (`IDAngajat`);

--
-- Indexes for table `clienti`
--
ALTER TABLE `clienti`
  ADD PRIMARY KEY (`IDClient`);

--
-- Indexes for table `clienticucupoane`
--
ALTER TABLE `clienticucupoane`
  ADD PRIMARY KEY (`IDClient`,`IDCupon`),
  ADD KEY `IDCupon` (`IDCupon`);

--
-- Indexes for table `cupoane`
--
ALTER TABLE `cupoane`
  ADD PRIMARY KEY (`IDCupon`);

--
-- Indexes for table `programari`
--
ALTER TABLE `programari`
  ADD PRIMARY KEY (`IDClient`,`Data`,`Ora`,`IDServiciu`),
  ADD KEY `IDServiciu` (`IDServiciu`),
  ADD KEY `fk_grade_id` (`IDAngajat`);

--
-- Indexes for table `servicii`
--
ALTER TABLE `servicii`
  ADD PRIMARY KEY (`IDServiciu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `angajati`
--
ALTER TABLE `angajati`
  MODIFY `IDAngajat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `clienti`
--
ALTER TABLE `clienti`
  MODIFY `IDClient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `cupoane`
--
ALTER TABLE `cupoane`
  MODIFY `IDCupon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `servicii`
--
ALTER TABLE `servicii`
  MODIFY `IDServiciu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `clienticucupoane`
--
ALTER TABLE `clienticucupoane`
  ADD CONSTRAINT `clienticucupoane_ibfk_1` FOREIGN KEY (`IDClient`) REFERENCES `clienti` (`IDClient`),
  ADD CONSTRAINT `clienticucupoane_ibfk_2` FOREIGN KEY (`IDCupon`) REFERENCES `cupoane` (`IDCupon`);

--
-- Constraints for table `programari`
--
ALTER TABLE `programari`
  ADD CONSTRAINT `fk_grade_id` FOREIGN KEY (`IDAngajat`) REFERENCES `angajati` (`IDAngajat`) ON DELETE SET NULL,
  ADD CONSTRAINT `programari_ibfk_1` FOREIGN KEY (`IDClient`) REFERENCES `clienti` (`IDClient`),
  ADD CONSTRAINT `programari_ibfk_2` FOREIGN KEY (`IDServiciu`) REFERENCES `servicii` (`IDServiciu`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
