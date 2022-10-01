-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2021 at 10:31 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lmgs`
--
CREATE DATABASE IF NOT EXISTS `lmgs` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `lmgs`;

-- --------------------------------------------------------

--
-- Table structure for table `letterdata`
--

CREATE TABLE `letterdata` (
  `ID` int(10) NOT NULL,
  `recieveDate` date NOT NULL,
  `referenceNo` varchar(100) NOT NULL,
  `receivedBy` varchar(100) NOT NULL,
  `collectedBy` varchar(100) NOT NULL,
  `letterDate` date NOT NULL,
  `forwardTo` varchar(100) NOT NULL,
  `reason` varchar(5000) NOT NULL,
  `action` varchar(5000) NOT NULL,
  `FileNo` varchar(50) NOT NULL,
  `actionStatus` varchar(15) NOT NULL,
  `actionForward` varchar(50) NOT NULL,
  `atDate` date NOT NULL,
  `dataInsertBy` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `letterdata`
--

INSERT INTO `letterdata` (`ID`, `recieveDate`, `referenceNo`, `receivedBy`, `collectedBy`, `letterDate`, `forwardTo`, `reason`, `action`, `FileNo`, `actionStatus`, `actionForward`, `atDate`, `dataInsertBy`) VALUES
(3805, '2020-06-24', '', 'Department of Treasury Operations', 'Kaushalya', '2020-06-23', 'Chamila', 'Advice of the Release of imprest', 'File', 'ASC/ACC/02', 'Final', '-', '2020-06-24', 'Charitha'),
(3806, '2020-06-24', '0112674649', 'Sri Lanka Telecom', 'Sanjitha', '2020-06-03', 'Wazeer', 'Invoice', 'Voucher sent to Accounts Branch', ' ASC/Adm/4', 'Final', 'Thanuja', '2020-06-25', 'Charitha'),
(3807, '2020-06-24', '0112674661', 'Sri Lanka Telecom', 'Sanjitha', '2020-06-03', 'Wazeer', 'Invoice', 'Voucher sent to Accounts Branch', ' ASC/Adm/4', 'Final', 'Thanuja', '2020-06-25', 'Charitha'),
(3808, '2020-06-24', '0112674658', 'Sri Lanka Telecom', 'Sanjitha', '2020-06-03', 'Wazeer', 'Invoice', 'Voucher sent to Accounts Branch', ' ASC/Adm/4', 'Final', 'Thanuja', '2020-06-25', 'Charitha'),
(3809, '2020-06-24', '0112674661', 'Sri Lanka Telecom', 'Sanjitha', '2020-06-03', 'Wazeer', 'Invoice', 'Voucher sent to Accounts Branch', ' ASC/Adm/4', 'Final', 'Thanuja', '2020-06-25', 'Charitha'),
(3810, '2020-06-24', '', '2017/2019 Batch Teacher Trainees', 'Sanjitha', '2020-06-04', 'Akila', 'Request to get the opportunity to fulfill the internship training period', 'Pending', '', 'Pending', '', '0000-00-00', 'Charitha'),
(3814, '2020-06-26', '', 'Department of Treasury Operations', 'Kelum', '2020-06-25', 'Chamila', 'Advice of the Release of imprest', 'File', 'ASC/ACC/02', 'Final', '-', '2020-06-26', 'Charitha'),
(3815, '2020-06-26', '', 'Associated Motorways', 'Kelum', '2020-06-24', 'Wazeer', 'Invoice', 'Voucher sent to Accounts Branch', 'ASC/Adm/4', 'Final', 'Thanuja', '2020-07-29', 'Charitha'),
(3816, '2020-06-26', '', 'E-w Information Systems Ltd', 'Kelum', '2020-06-03', 'Wazeer', 'Annual EWIS Service Package for Lexmark printers', 'Voucher sent to Accounts Branch', ' ASC/Adm/4', 'Final', 'Thanuja', '2020-07-13', 'Charitha'),
(3829, '2020-06-29', '', 'GOBA', 'Sanjitha', '2020-06-29', 'Thanuja', 'Statement of Abatement for month of 07/2020', 'work done', 'ASC/ACC/1', 'Final', '-', '2020-07-13', 'Charitha'),
(3830, '2020-06-29', '', 'Water mart Systems (Pvt) Ltd', 'Sanjitha', '2020-06-15', 'Kokilani', 'Invoice', 'work done', 'Asc/Adm/02', 'Final', '-', '2020-07-01', 'Charitha'),
(3831, '2020-06-29', '', 'Department of Treasury Operations', 'Sanjitha', '2020-02-07', 'Thanuja', 'cash receipt B/25 0272631', 'work done (attached voucher)', '-', 'Final', '-', '2020-07-03', 'Charitha'),
(3833, '2020-06-29', '', 'Department of Treasury Operations', 'Sanjitha', '2020-01-31', 'Thanuja', 'cash receipt X/24 0189693', 'work done (attached voucher - December summary)', '-', 'Final', '-', '2020-07-03', 'Charitha'),
(3835, '2020-06-29', 'GSM/NJ/HNCM', 'Ernst & Young', 'Sanduni', '2020-06-23', 'Akila', 'Audit of the financial Statement', 'Pending', '', 'Pending', '', '0000-00-00', 'Charitha'),
(3836, '2020-07-01', '', 'Nipuni Cleaning Service', 'Sanjitha', '2020-06-30', 'Wazeer', 'Invoice', 'Voucher sent to Accounts branch', 'ASC/Adm/4', 'Final', 'Thanuja', '2020-07-02', 'Charitha'),
(3837, '2020-07-01', '', 'Pioneer Security Service', 'Sanjitha', '2020-06-30', 'Wazeer', 'Invoice', 'Voucher sent to Accounts Branch', ' ASC/Adm/4/3', 'Final', 'Thanuja', '2020-07-02', 'Charitha'),
(3838, '2020-07-01', '', 'USAID', 'Sanjitha', '2020-06-29', 'Akila', 'USAID /Partnership for accelerating results in trade', 'Pending', '', 'Pending', '', '0000-00-00', 'Charitha'),
(3843, '2020-07-02', '', 'Supreme Court', 'Pasindu', '2020-06-26', 'Shashika', 'S.C.F.R.Application No.404/2018', 'Submitted for Commission for information', 'ASC/APD/02', 'Final', '-', '2020-07-02', 'Charitha'),
(3853, '2020-07-03', '', 'PSMPA', 'Sonali', '2020-07-03', 'Thanuja', 'Statement of Abatement for 07/2020', 'work done', 'ASC/ACC/1', 'Final', '-', '2020-07-13', 'Charitha'),
(3856, '2020-07-07', '', 'Ceylon Business appliances', 'Sanjitha', '2020-07-03', 'Wazeer', 'Maintenance Agreement Finger Print', 'Renewal Agreement payment voucher sent to Accounts Branch', 'ASC/Adm/4', 'Final', 'Thanuja', '2020-07-24', 'Charitha'),
(3857, '2020-07-07', '', 'Ceylon Business appliances', 'Sanjitha', '2020-06-27', 'Wazeer', 'Maintenance Agreement Jolimark Printer', 'Voucher sent to Accounts Branch', 'ASC/Adm/4', 'Final', 'Thanuja', '2020-07-13', 'Charitha'),
(3861, '2020-07-07', '', 'Water mart Systems (Pvt) Ltd', 'Pasindu', '2020-06-30', 'Kokilani', 'Invoice', 'work done', 'Asc/Adm/02', 'Final', '-', '2020-07-08', 'Charitha'),
(3862, '2020-07-08', '', 'Department of Treasury Operations', 'Kaushalya', '2020-07-06', 'Chamila', 'Advice of the Release of imprest', 'File', 'ASC/ACC/02', 'Final', '-', '2020-07-08', 'Charitha'),
(3865, '2020-07-08', '', 'BOC', 'Kaushalya', '2020-06-30', 'Shehan', 'Statement of accounts', 'Work done', 'ASC/ACC/03', 'Final', '-', '2020-07-09', 'Charitha'),
(3866, '2020-07-08', '0112680379', 'Sri Lanka Telecom', 'Sanjitha', '2020-07-03', 'Wazeer', 'Invoice', 'Voucher sent to Accounts Branch', ' ASC/Adm/4', 'Final', 'Thanuja', '2020-07-15', 'Charitha'),
(3869, '2020-07-09', 'AFS/EM/CTS', 'MILODA', 'Pasindu', '2020-07-09', 'Kokilani', 'Certificate in English for Employment Purposes', 'work done', 'Asc/Adm/02', 'Final', '-', '2020-07-20', 'Charitha'),
(3871, '2020-07-10', '0112674656', 'Sri Lanka Telecom', 'Sanjitha', '2020-07-03', 'Wazeer', 'Invoice', 'Voucher sent to Accounts Branch', ' ASC/Adm/4', 'Final', 'Thanuja', '2020-07-15', 'Charitha'),
(3872, '2020-07-10', '0112674660', 'Sri Lanka Telecom', 'Sanjitha', '2020-07-03', 'Wazeer', 'Invoice', 'Voucher sent to Accounts Branch', ' ASC/Adm/', 'Final', 'Thanuja', '2020-07-15', 'Charitha'),
(3873, '2020-07-10', '0112674662', 'Sri Lanka Telecom', 'Sanjitha', '2020-07-03', 'Wazeer', 'Invoice', 'Voucher sent to Accounts Branch', ' ASC/Adm/4', 'Final', 'Thanuja', '2020-07-15', 'Charitha'),
(3874, '2020-07-10', '0112674651', 'Sri Lanka Telecom', 'Sanjitha', '2020-07-03', 'Wazeer', 'Invoice', 'Voucher sent to Accounts Branch', ' ASC/Adm/2', 'Final', 'Thanuja', '2020-07-15', 'Charitha'),
(3880, '2020-07-13', '0112674659', 'Sri Lanka Telecom', 'Sanjitha', '2020-07-03', 'Wazeer', 'Invoice', 'Voucher sent to Accounts Branch', ' ASC/Adm/4', 'Final', 'Thanuja', '2020-07-15', 'Charitha'),
(3881, '2020-07-13', '0112674652', 'Sri Lanka Telecom', 'Sanjitha', '2020-07-03', 'Wazeer', 'Invoice', 'Voucher sent to Accounts Branch', ' ASC/Adm/4', 'Final', 'Thanuja', '2020-07-15', 'Charitha'),
(3882, '2020-07-13', '0112674661', 'Sri Lanka Telecom', 'Sanjitha', '2020-07-03', 'Wazeer', 'Invoice', 'Voucher sent to Accounts Branch', ' ASC/Adm/4', 'Final', 'Thanuja', '2020-07-15', 'Charitha'),
(3883, '2020-07-13', '0112674657', 'Sri Lanka Telecom', 'Sanjitha', '2020-07-03', 'Wazeer', 'Invoice', 'Voucher sent to Accounts Branch', ' ASC/Adm/42', 'Final', 'Thanuja', '2020-07-15', 'Charitha'),
(3884, '2020-07-13', '0112674658', 'Sri Lanka Telecom', 'Sanjitha', '2020-07-03', 'Wazeer', 'Invoice', 'Voucher sent to Accounts Branch', ' ASC/Adm/4', 'Final', 'Thanuja', '2020-07-15', 'Charitha'),
(3885, '2020-07-13', '0112674649', 'Sri Lanka Telecom', 'Sanjitha', '2020-07-03', 'Wazeer', 'Invoice', 'Voucher sent to Accounts Branch', ' ASC/Adm20', 'Final', 'Thanuja', '2020-07-15', 'Charitha'),
(3889, '2020-07-13', '1189', 'EDCS', 'Sanjitha', '2020-07-07', 'Thanuja', '2020-July Monthly Deduction Statement', 'work done', 'ASC/ACC/1', 'Final', '-', '2020-07-14', 'Charitha'),
(3895, '2020-07-15', '', 'The Associated News Papers', 'Kelum', '2020-07-06', 'Kokilani', 'Payment Receipt', 'filed', 'Asc/Adm/02', 'Final', '-', '2020-07-15', 'Charitha'),
(3897, '2020-07-16', '', 'Attorney Home Department', 'Kelum', '2020-07-13', 'Dilhara', 'Recruitment of Audit Examiners', 'Pending', '', 'Pending', '', '0000-00-00', 'Charitha'),
(3898, '2020-07-16', 'E/384/2019', 'ZDE office-Rathnapura', 'Kelum', '2020-07-14', 'Suranga', 'Fund Reimbursement', 'Pending', '', 'Pending', '', '0000-00-00', 'Charitha'),
(3900, '2020-07-16', '', 'AMW', 'Kelum', '2020-07-13', 'Wazeer', 'CAO-9638 car Estimate', 'Voucher sent to Accounts Branch', 'ASC/Adm/4/', 'Final', 'Thanuja', '2020-07-29', 'Charitha'),
(3902, '2020-07-17', 'CGO/ASM/Gen', 'Comptroller Generals office', 'Kelum', '2020-07-07', 'Thanuja', 'Appreciation compliance for Assets management circulars No.04/2019 and No 01/2017(I)', 'Pending', '', 'Pending', '', '0000-00-00', 'Charitha'),
(3905, '2020-07-17', '', 'S.M.D.C.D. Senaratne & Co.', 'Kelum', '2020-06-30', 'Wazeer', 'Month June 2020', 'Voucher sent to Accounts Branch', ' ASC/Adm/4/', 'Final', 'Thanuja', '2020-07-22', 'Charitha'),
(3906, '2020-07-20', '', 'Transparency International', 'Kelum', '2020-07-16', 'Amali', 'Requesting Permission to display posters of Integrity Icon SriLanka 2020', 'Pending', '', 'Pending', '', '0000-00-00', 'Charitha'),
(3910, '2020-07-21', '0806034904', 'CEB', 'Pasindu', '2020-07-21', 'Wazeer', 'Electricity Bill-4th floor', 'Voucher sent to Accounts Branch', ' ASC/Adm/4', 'Final', 'Thanuja', '2020-07-23', 'Charitha'),
(3911, '2020-07-21', '0806034807', 'CEB', 'Pasindu', '2020-07-21', 'Wazeer', 'Electricity Bill-3rd floor', 'Voucher sent to Accounts Branch', 'ASC/Adm/4/5', 'Final', 'Thanuja', '2020-07-23', 'Charitha'),
(3912, '2020-07-21', '0806035005', 'CEB', 'Pasindu', '2020-07-21', 'Wazeer', 'Electricity Bill-5th floor', 'Voucher sent to Accounts Branch', 'ASC/Adm/4', 'Final', 'Thanuja', '2020-07-23', 'Charitha'),
(3917, '2020-07-22', 'PV-791', 'Ceylon Business Appliances (Pvt) Ltd', 'Kelum', '2020-07-20', 'Dilhara', 'Annual Maintenance price Revision-Finger print-Scanner', 'Pending', '', 'Pending', '', '0000-00-00', 'Charitha'),
(3921, '2020-07-23', '', 'Department of Treasury Operations Ministry of Finance', 'Sonali', '2020-07-22', 'Chamila', 'Advice of the release of Imprest -Fund Transfer', 'File', 'ASC/ACC/02', 'Final', '-', '2020-07-23', 'Charitha'),
(3925, '2020-07-23', '', ' Department of Treasury Operations', 'Sonali', '2020-07-23', 'Chamila', 'Advice of the release of Imprest ', 'File', 'ASC/ACC/02', 'Final', '-', '2020-07-23', 'Charitha'),
(3928, '2020-07-24', '', 'NSB', 'Sonali', '2020-07-21', 'Thanuja', 'Particular Regarding Employement', 'Pending', '', 'Pending', '', '0000-00-00', 'Charitha'),
(3930, '2020-07-27', 'AFS/EM/CTS', 'Miloda', 'Sonali', '2020-07-27', 'Kokilani', 'Certificate in English for Employment Purposes (CEEP)', 'work done', 'Asc/Adm/02', 'Final', '-', '2020-08-16', 'Charitha'),
(3931, '2020-07-27', '', 'AMW', 'Pasindu', '2020-07-24', 'Wazeer', 'Invoice', 'Voucher Sent to Accounts Branch', 'ASC/Adm/4', 'Final', 'Thanuja', '2020-07-27', 'Charitha'),
(3932, '2020-07-27', '', 'Commercial Bank', 'Pasindu', '2020-07-27', 'Wazeer', 'Performance Bond: BORPERLKR-2006656', 'Agreement Signed ', 'ASC/Adm/4', 'Final', 'secretary ', '2020-07-28', 'Charitha'),
(3934, '2020-07-28', '', 'GOBA', 'Sanjitha', '2020-07-28', 'Thanuja', 'Statement of abatement 08 2020 ', 'Pending', '', 'Pending', '', '0000-00-00', 'Charitha'),
(3935, '2020-07-28', '', 'Department of Treasury Operations ', 'Sanjitha', '2020-07-27', 'Chamila', 'Advice of the release of Imprest ', 'File', 'ASC/ACC/02', 'Final', '-', '2020-07-28', 'Charitha'),
(3945, '2020-07-31', '', 'Department of Treasury Operations', 'Sonali', '2020-07-30', 'Chamila', 'Advice of the Release imprest', 'File', 'ASC/ACC/02', 'Final', '-', '2020-07-31', 'Charitha'),
(3952, '2020-08-04', '', 'Nipuni Cleaning Service', 'Sonali', '2020-07-31', 'Wazeer', 'Invoice', 'Voucher Sent to Accounts Branch', 'ASC/Adm/', 'Final', 'Thanuja', '2020-08-05', 'Charitha'),
(3954, '2020-08-06', '', 'Pioneer Security Service (Pvt) Ltd', 'Kaushalya', '2020-07-31', 'Wazeer', 'Invoice', 'Voucher Sent to Accounts Branch', ' ASC/Adm/4', 'Final', 'Thanuja', '2020-08-11', 'Charitha'),
(3955, '2020-08-06', '0112674656', 'Sri lanka Telecom', 'Kaushalya', '2020-08-03', 'Wazeer', 'Invoice', 'Voucher Sent to Accounts Branch', ' ASC/Adm/4', 'Final', 'Thanuja', '2020-08-14', 'Charitha'),
(3958, '2020-08-10', '0112674662', 'Sri lanka Telecom', 'Sanjitha', '2020-08-03', 'Wazeer', 'Invoice', 'Voucher sent to Accounts Branch', ' ASC/Adm/4', 'Final', 'Thanuja', '2020-08-14', 'Charitha'),
(3959, '2020-08-10', '0112674649', 'Sri lanka Telecom', 'Sanjitha', '2020-08-03', 'Wazeer', 'Invoice', 'Voucher Sent to Accounts Branch', ' ASC/Adm/4', 'Final', 'Thanuja', '2020-08-14', 'Charitha'),
(3960, '2020-08-10', '0112674658', 'Sri lanka Telecom', 'Sanjitha', '2020-08-03', 'Wazeer', 'Invoice', 'Voucher Sent to Accounts Branch', ' ASC/Adm/4', 'Final', 'Thanuja', '2020-08-14', 'Charitha'),
(3961, '2020-08-10', '0112674661', 'Sri lanka Telecom', 'Sanjitha', '2020-08-03', 'Wazeer', 'Invoice', 'Voucher Sent to Accounts Branch', ' ASC/Adm/4', 'Final', 'Thanuja', '2020-08-14', 'Charitha'),
(3962, '2020-08-10', '0112674659', 'Sri lanka Telecom', 'Sanjitha', '2020-08-03', 'Wazeer', 'Invoice', 'Voucher Sent to Accounts Branch', ' ASC/Adm/4', 'Final', 'Thanuja', '2020-08-14', 'Charitha'),
(3963, '2020-08-10', '0112674651', 'Sri lanka Telecom', 'Sanjitha', '2020-08-03', 'Wazeer', 'Invoice', 'Voucher Sent to Accounts Branch', ' ASC/Adm/4', 'Final', 'Thanuja', '2020-08-14', 'Charitha'),
(3964, '2020-08-10', '0112674657', 'Sri lanka Telecom', 'Sanjitha', '2020-08-03', 'Wazeer', 'Invoice', 'Voucher Sent to Accounts Branch', ' ASC/Adm4/2', 'Final', 'Thanuja', '2020-08-14', 'Charitha'),
(3965, '2020-08-10', '0112674652', 'Sri lanka Telecom', 'Sanjitha', '2020-08-03', 'Wazeer', 'Invoice', 'Voucher Sent to Accounts Branch', ' ASC/Adm/4', 'Final', 'Thanuja', '2020-08-14', 'Charitha'),
(3966, '2020-08-10', '0112680379', 'Sri lanka Telecom', 'Sanjitha', '2020-08-03', 'Wazeer', 'Invoice', 'Voucher Sent to Accounts Branch', ' ASC/Adm/4', 'Final', 'Thanuja', '2020-08-14', 'Charitha'),
(3967, '2020-08-10', '0112674660', 'Sri lanka Telecom', 'Sanjitha', '2020-08-03', 'Wazeer', 'Invoice', 'Voucher Sent to Accounts Branch', ' ASC/Adm/4', 'Final', 'Thanuja', '2020-08-14', 'Charitha'),
(3969, '2020-08-10', 'GSM/NJ/HNCM', 'Ernst & Young Charted Accountants', 'Sanjitha', '2020-08-07', 'Akila', 'Audit of the Financial Statements of the National Audit office', 'Pending', '', 'Pending', '', '0000-00-00', 'Charitha'),
(3972, '2020-08-11', '', 'KMPG', 'Sanjitha', '2020-08-11', 'Dilhara', 'Audit of National Audit office-2019', 'Pending', '', 'Pending', '', '0000-00-00', 'Charitha'),
(3973, '2020-08-12', '', 'KRESTON MHS & CO.', 'Sanjitha', '2020-08-11', 'Akila', 'Request for proposals', 'Pending', '', 'Pending', '', '0000-00-00', 'Charitha'),
(3974, '2020-08-12', '', 'BOC-Borella', 'Sanjitha', '2020-07-31', 'Shehan', 'Statement of Accounts', 'Pending', '', 'Pending', '', '0000-00-00', 'Charitha'),
(3976, '2020-08-12', '', 'PSMPA', 'Sanjitha', '2020-08-12', 'Thanuja', 'Statement -08-2020', 'Pending', '', 'Pending', '', '0000-00-00', 'Charitha'),
(3977, '2020-08-12', '', 'Department of Treasury Operations', 'Sanjitha', '2020-08-11', 'Chamila', 'Advice of the Release of Imprest', 'Pending', '', 'Pending', '', '0000-00-00', 'Charitha'),
(3978, '2020-08-13', '', 'Department of Railways', 'Sonali', '2020-08-13', 'Chamila', 'Debit Note', 'Pending', '', 'Pending', '', '0000-00-00', 'Charitha'),
(3987, '2020-08-19', '080604904', 'Ceylon Electricity Board', 'Sanjitha', '2020-08-19', 'Wazeer', '4th floor Electricity Bill', 'Voucher sent to Accounts Branch', 'ASC/Adm/4/5/2020', 'Final', 'Thanuja', '2020-08-21', 'Charitha'),
(3988, '2020-08-19', '0806034807', 'Ceylon Electricity Board', 'Sonali', '2020-08-19', 'Wazeer', 'Electricity Bill-3rd floor', 'Voucher sent to Accounts Branch', 'ASC/Adm/4/5/2020', 'Final', 'Thanuja', '2020-08-20', 'Charitha'),
(3989, '2020-08-19', '0806035005', 'Ceylon Electricity Board', 'Sonali', '2020-08-19', 'Wazeer', 'Electricity Bill-2nd floor', 'Voucher sent to Accounts Branch', 'ASC/Adm/4/5/2020', 'Final', 'Thanuja', '2020-08-20', 'Charitha'),
(3990, '2020-08-19', '', 'S.M.D.C.D. Senaratne & Co.', 'Sonali', '2020-07-31', 'Wazeer', '2020 July Fuel Bill', 'Voucher sent to Accounts Branch', ' ASC/Adm/4/10/2019', 'Final', 'Thanuja', '2020-08-21', 'Charitha'),
(3992, '2020-08-20', '', 'CBA', 'Sonali', '2020-08-07', 'Thanuja', 'Invoice', 'Pending', '', 'Pending', '', '0000-00-00', 'Charitha'),
(3995, '2020-08-20', '', 'Water Mart Systems', 'Sonali', '2020-07-31', 'Kokilani', 'Invoice', 'Work done', 'Asc/Adm/02/24/2019', 'Final', '-', '2020-08-21', 'Charitha'),
(3996, '2020-08-21', '', 'Metropolitan', 'Sanjitha', '2020-08-17', 'Chamila', 'Debtors Statement', 'Pending', '', 'Pending', '', '0000-00-00', 'Charitha'),
(3997, '2020-08-21', '', 'Department of Treasury Operations', 'Kaushalya', '2020-08-20', 'Chamila', 'Advice of the release of Imprest', 'Pending', '', 'Pending', '', '0000-00-00', 'Charitha'),
(3998, '2020-08-24', '', 'BDO Partners', 'Sanjitha', '2020-08-24', 'Akila', 'Submission of Proposal', 'sent to APD', 'DCS/456', 'Intermediate', 'Chaminda', '2021-04-23', 'Charitha'),
(3999, '2020-08-24', '', 'Department of Treasury Operations', 'Kaushalya', '2020-08-21', 'Chamila', 'Advice of the release of Imprest', 'Pending', '', 'Pending', '', '0000-00-00', 'Charitha'),
(4003, '2020-08-24', '', 'Baker Tilly Edirisinghe & Co.', 'Sanjitha', '2020-08-24', 'Akila', '.', 'Pending', '', 'Pending', '', '0000-00-00', 'Charitha'),
(4004, '2020-08-24', '', 'Ernst & Young Charted Accountants', 'Sonali', '2020-08-24', 'Akila', 'Audit of National Audit Office 2019', 'Pending', '', 'Pending', '', '0000-00-00', 'Charitha'),
(4005, '2020-08-24', '', 'S.Saththiya Rupini', 'Sonali', '2020-08-22', 'Dilhara', 'Regarding Documents', 'Pending', '', 'Pending', '', '0000-00-00', 'Charitha'),
(4009, '2020-08-26', '', 'Wijaya News Papers Ltd', 'Kelum', '2020-08-20', 'Kokilani', 'Invoice', 'Pending', '', 'Pending', '', '0000-00-00', 'Charitha'),
(4010, '2020-08-26', 'FS/EM/CTS', 'Miloda', 'Kelum', '2020-08-25', 'Kokilani', 'Diploma in English for Junior Executives', 'Pending', '', 'Pending', '', '0000-00-00', 'Charitha'),
(4011, '2020-08-27', 'Office', 'Government Officers Benefit Association', 'Kelum', '2020-08-27', 'Chamila', 'Statement of Abatement', 'Pending', '', 'Pending', '', '0000-00-00', 'Charitha'),
(4021, '2020-09-02', '', 'Nipuni Cleaning Service', 'Kelum', '2020-08-31', 'Wazeer', 'Invoice-2020-Aug', 'Pending', '', 'Pending', '', '0000-00-00', 'Charitha'),
(4022, '2020-09-02', 'Audits', 'Pioneer Security Service', 'Kelum', '2020-08-31', 'Wazeer', 'Invoice 2020 Aug', 'Pending', '', 'Pending', '', '0000-00-00', 'Charitha');

-- --------------------------------------------------------

--
-- Table structure for table `sysusers`
--

CREATE TABLE `sysusers` (
  `UserID` varchar(50) NOT NULL DEFAULT '',
  `FirstName` varchar(80) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `Password` varchar(64) DEFAULT NULL,
  `UserType` varchar(20) DEFAULT NULL,
  `UserGroup` varchar(50) NOT NULL,
  `userCreated` date NOT NULL,
  `Status` varchar(20) NOT NULL,
  `userCreatedBy` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sysusers`
--

INSERT INTO `sysusers` (`UserID`, `FirstName`, `LastName`, `Password`, `UserType`, `UserGroup`, `userCreated`, `Status`, `userCreatedBy`) VALUES
('Achini', 'Achini', 'Dias', 'ce1bf45baad2cebf5d5d41fa1f8dbe66cd5a85ee96361bfe9f3643205a447616', 'User', 'ACC', '2020-01-31', 'Inactive', 'Admin'),
('Admin', 'Admin', 'Admin', 'e0db1c1ac3d28ad6f45e0e2683060bd88c630289d346005127de7670ed16d200', 'Administrator', 'Administrator', '2016-07-27', 'Active', 'Admin'),
('Akila', 'Akila', 'Vidanage', 'ce1bf45baad2cebf5d5d41fa1f8dbe66cd5a85ee96361bfe9f3643205a447616', 'User', 'APD', '2020-03-10', 'Active', 'Admin'),
('Amali', 'Amali', 'Liyanage', 'ce1bf45baad2cebf5d5d41fa1f8dbe66cd5a85ee96361bfe9f3643205a447616', 'User', 'Administrator', '2016-08-31', 'Active', 'Admin'),
('Chamila', 'Chamila', 'Gunasekara', 'ce1bf45baad2cebf5d5d41fa1f8dbe66cd5a85ee96361bfe9f3643205a447616', 'User', 'ACC', '2016-07-27', 'Active', 'Duresh'),
('Chaminda', 'Chaminda', 'J.W.', 'ce1bf45baad2cebf5d5d41fa1f8dbe66cd5a85ee96361bfe9f3643205a447616', 'User', 'ADM', '2019-04-03', 'Active', 'Admin'),
('Charitha', 'Charitha', 'Madushani', 'ce1bf45baad2cebf5d5d41fa1f8dbe66cd5a85ee96361bfe9f3643205a447616', 'User', 'Administrator', '2019-07-11', 'Active', 'Admin'),
('Danushka', 'Danushka', 'Pathirana', 'f0b83e10711ccb9991cc081699264e7593616899b02df353c67eb2cbee92e3e6', 'User', 'ADM', '2018-05-22', 'Inactive', 'Admin'),
('Dilanka', 'Dilanka', 'Dilanka', 'ce1bf45baad2cebf5d5d41fa1f8dbe66cd5a85ee96361bfe9f3643205a447616', 'User', 'ACC', '2019-02-11', 'Active', 'Admin'),
('Dilhara', 'Achini', 'Dilhara', 'ce1bf45baad2cebf5d5d41fa1f8dbe66cd5a85ee96361bfe9f3643205a447616', 'User', 'APD', '2018-11-09', 'Active', 'Admin'),
('Duresh', 'Duresh', 'Weerasekara', 'ce1bf45baad2cebf5d5d41fa1f8dbe66cd5a85ee96361bfe9f3643205a447616', 'User', 'IT', '2016-07-26', 'Active', 'admin'),
('Jayampathi', 'K.M.D.P', 'Jayampathi', 'ce1bf45baad2cebf5d5d41fa1f8dbe66cd5a85ee96361bfe9f3643205a447616', 'User', 'APD', '2019-01-07', 'Active', 'Admin'),
('Kanthi', 'Kanthi', 'Gunathilake', 'ce1bf45baad2cebf5d5d41fa1f8dbe66cd5a85ee96361bfe9f3643205a447616', 'User', 'Administrator', '2020-01-31', 'Inactive', 'Admin'),
('Kaushalya', 'Eranda', 'Kaushalya', 'ce1bf45baad2cebf5d5d41fa1f8dbe66cd5a85ee96361bfe9f3643205a447616', 'OES', 'OES', '2016-07-27', 'Active', 'Duresh'),
('Kelum', 'Kelum', 'Tharindu', 'ce1bf45baad2cebf5d5d41fa1f8dbe66cd5a85ee96361bfe9f3643205a447616', 'OES', 'OES', '2016-07-27', 'Active', 'Duresh'),
('Kokilani', 'G.L.', 'Kokilani', 'ce1bf45baad2cebf5d5d41fa1f8dbe66cd5a85ee96361bfe9f3643205a447616', 'User', 'ADM', '2018-05-22', 'Active', 'Admin'),
('Maduranga', 'Prabath', 'Maduranga', 'ce1bf45baad2cebf5d5d41fa1f8dbe66cd5a85ee96361bfe9f3643205a447616', 'User', 'ACC', '2020-01-31', 'Inactive', 'Admin'),
('Mahesha', 'Mahesha', 'Muthuhari', 'ce1bf45baad2cebf5d5d41fa1f8dbe66cd5a85ee96361bfe9f3643205a447616', 'User', 'ADM', '2016-07-27', 'Active', 'Duresh'),
('Mangala', 'Mangala', 'Dayarathne', '3183acf3be2e2cedcb7db3585e0ea431064472dc3bb5fd81ec9f526b34fa78f2', 'User', 'Administrator', '2020-01-21', 'Active', 'Admin'),
('Migara', 'Migara', 'Fernando', 'b54dd0bceb63786f3ab279d1fce7e5b75021cdccf17d6df269fd3138bf375643', 'Director', 'Administrator', '2021-04-23', 'Active', 'Admin'),
('Pasindu', 'Pasindu', 'Madushanka', 'ce1bf45baad2cebf5d5d41fa1f8dbe66cd5a85ee96361bfe9f3643205a447616', 'OES', 'OES', '2020-01-02', 'Active', 'Admin'),
('Pradeep', 'Ellawala Phalage', 'Pradeep', 'ce1bf45baad2cebf5d5d41fa1f8dbe66cd5a85ee96361bfe9f3643205a447616', 'OES', 'OES', '2016-07-27', 'Active', 'Duresh'),
('Priyangika', 'Priyangika', 'Senevirathna', 'ce1bf45baad2cebf5d5d41fa1f8dbe66cd5a85ee96361bfe9f3643205a447616', 'User', 'ADM', '2020-03-10', 'Active', 'Admin'),
('Priyantha', 'A.K.P.', 'Athapaththu', 'ce1bf45baad2cebf5d5d41fa1f8dbe66cd5a85ee96361bfe9f3643205a447616', 'User', 'ADM', '2020-01-31', 'Inactive', 'Admin'),
('Rajapaksha', 'P.W.', 'Rajapaksha', 'ce1bf45baad2cebf5d5d41fa1f8dbe66cd5a85ee96361bfe9f3643205a447616', 'User', 'Administrator', '2020-01-02', 'Active', 'Admin'),
('Renuka', 'Renuka', 'Block', 'ce1bf45baad2cebf5d5d41fa1f8dbe66cd5a85ee96361bfe9f3643205a447616', 'User', 'ACC', '2020-07-01', 'Active', 'Admin'),
('Samarakoon', 'Dhammika', 'Samarakoon', 'ce1bf45baad2cebf5d5d41fa1f8dbe66cd5a85ee96361bfe9f3643205a447616', 'User', 'ADM', '2020-01-31', 'Inactive', 'Admin'),
('Sampath', 'M.K.S.', 'Kumara', 'ce1bf45baad2cebf5d5d41fa1f8dbe66cd5a85ee96361bfe9f3643205a447616', 'User', 'ADM', '2018-11-09', 'Active', 'Admin'),
('Sanduni', 'Sanduni', 'Kanchana', '97e212b6df64be126bf082ad6e9925a1c12087a723580ba1048f7c881b4bbeaa', 'OES', 'OES', '2016-08-03', 'Active', 'Sanduni'),
('Sanjitha', 'Sumali', 'Sanjitha', 'ce1bf45baad2cebf5d5d41fa1f8dbe66cd5a85ee96361bfe9f3643205a447616', 'OES', 'OES', '2016-07-27', 'Active', 'Duresh'),
('Shashika', 'Shashika', 'Dilshani', 'ce1bf45baad2cebf5d5d41fa1f8dbe66cd5a85ee96361bfe9f3643205a447616', 'User', 'APD', '2018-11-09', 'Active', 'Admin'),
('Shehan', 'I.P.D', 'Shehan', 'ce1bf45baad2cebf5d5d41fa1f8dbe66cd5a85ee96361bfe9f3643205a447616', 'User', 'ACC', '2020-03-10', 'Active', 'Admin'),
('Shermila', 'R.A.S.A.', 'Ranasinghe', 'ce1bf45baad2cebf5d5d41fa1f8dbe66cd5a85ee96361bfe9f3643205a447616', 'User', 'APD', '2020-01-31', 'Inactive', 'Admin'),
('Sonali', 'Sonali', 'Athukorala', 'ce1bf45baad2cebf5d5d41fa1f8dbe66cd5a85ee96361bfe9f3643205a447616', 'OES', 'OES', '2020-01-02', 'Active', 'Admin'),
('Suranga', 'Suranga', 'Ranaweera', 'ce1bf45baad2cebf5d5d41fa1f8dbe66cd5a85ee96361bfe9f3643205a447616', 'User', 'ACC', '2020-03-10', 'Active', 'Admin'),
('Thanuja', 'Thanuja', 'Kanakanjalee', 'ce1bf45baad2cebf5d5d41fa1f8dbe66cd5a85ee96361bfe9f3643205a447616', 'User', 'ACC', '2016-07-27', 'Active', 'Duresh'),
('Thushara', 'S.A.D.U.', 'Thushara', 'ce1bf45baad2cebf5d5d41fa1f8dbe66cd5a85ee96361bfe9f3643205a447616', 'User', 'ACC', '2020-01-31', 'Inactive', 'Admin'),
('Udani', 'U.G.U.S.', 'Abesena', 'ce1bf45baad2cebf5d5d41fa1f8dbe66cd5a85ee96361bfe9f3643205a447616', 'User', 'ACC', '2020-01-31', 'Inactive', 'Admin'),
('Wazeer', 'Mohamed', 'Wazeer', 'ce1bf45baad2cebf5d5d41fa1f8dbe66cd5a85ee96361bfe9f3643205a447616', 'User', 'ADM', '2016-07-27', 'Active', 'Duresh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `letterdata`
--
ALTER TABLE `letterdata`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `sysusers`
--
ALTER TABLE `sysusers`
  ADD PRIMARY KEY (`UserID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
