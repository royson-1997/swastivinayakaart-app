-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 05, 2022 at 09:05 AM
-- Server version: 5.7.37-cll-lve
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `swastivinayakaart_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_data`
--

CREATE TABLE `contact_data` (
  `contact_id` int(11) NOT NULL,
  `contact_title` varchar(200) NOT NULL,
  `contact_address` text NOT NULL,
  `contact_email` text NOT NULL,
  `contact_no` text NOT NULL,
  `contact_type` int(11) NOT NULL,
  `create_date` varchar(100) NOT NULL,
  `modify_date` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_data`
--

INSERT INTO `contact_data` (`contact_id`, `contact_title`, `contact_address`, `contact_email`, `contact_no`, `contact_type`, `create_date`, `modify_date`, `status`) VALUES
(1, 'Mr. Chandrakant Kangne <br>\r\nMr. Shantaram Shinde', 'SWASTI VINAYAKA ART AND <br>\r\n HERITAGE CORPORATION LTD. <br>\r\n303, Tantia Jogani Industrial Estate, <br>\r\nOpp. Lodha Bellissimo, J.R.Boricha Marg, <br>\r\nLower Parel, Mumbai – 400 011.', 'E-MAIL: svartinvestors@svgcl.com', 'Tel.No.: +91 022 43443555', 1, '23-12-2021 02:03:12am', '07-01-2022 11:40:39am', 1),
(2, 'Mr. Bhawandas', 'Bigshare Services Pvt. Ltd., <br>\r\n1st Floor, Bharat Tin Works Building, Opp. Vasant Oasis, <br>\r\nMakwana Road, Marol, Andheri (East), Mumbai 400 059.', 'E-MAIL: bhawan@bigshareonline.com', 'Direct No.: +91 - 22 - 6263 8295 <br>\r\nBoard. No.: +91 - 22 - 6263 8200', 2, '23-12-2021 03:21:36am', '05-01-2022 09:35:51am', 1);

-- --------------------------------------------------------

--
-- Table structure for table `document_type_data`
--

CREATE TABLE `document_type_data` (
  `document_type_id` int(11) NOT NULL,
  `document_type` varchar(200) NOT NULL,
  `document_type_no` int(10) NOT NULL,
  `create_date` varchar(100) NOT NULL,
  `modify_date` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `document_type_data`
--

INSERT INTO `document_type_data` (`document_type_id`, `document_type`, `document_type_no`, `create_date`, `modify_date`, `status`) VALUES
(1, 'Annual Report / Annual Return', 1, '28-12-2021 10:06:15am', '02-06-2022 01:00:32pm', 1),
(2, 'Financial Results', 1, '28-12-2021 10:06:24am', '31-12-2021 12:44:48pm', 1),
(3, 'Shareholding Pattern', 1, '28-12-2021 10:06:30am', '28-12-2021 10:06:30am', 1),
(4, 'Unclaimed Dividend Transfer to Investor Education and Protection Fund (IEPF)', 1, '28-12-2021 10:06:37am', '31-12-2021 12:45:04pm', 1),
(5, 'Declaration of e_voting Results ', 1, '28-12-2021 10:06:42am', '28-12-2021 10:06:42am', 1),
(6, 'BOARD OF DIRECTORS', 2, '31-12-2021 01:51:38pm', '31-12-2021 01:51:38pm', 1),
(7, 'KEY MANAGERIAL PERSONNEL', 2, '31-12-2021 01:51:45pm', '31-12-2021 01:51:45pm', 1),
(8, 'AUDIT COMMITTEE', 2, '31-12-2021 01:51:51pm', '31-12-2021 01:51:51pm', 1),
(9, 'STAKEHOLDERS RELATIONSHIP COMMITTEE', 2, '31-12-2021 01:51:56pm', '31-12-2021 01:51:56pm', 1),
(10, 'NOMINATION AND REMUNERATION COMMITTEE', 2, '31-12-2021 01:52:03pm', '31-12-2021 01:52:03pm', 1),
(11, 'Internal Complaints Committee as per POSH', 2, '31-12-2021 01:52:15pm', '31-12-2021 01:52:15pm', 1),
(12, 'Board Meeting', 3, '31-12-2021 01:52:28pm', '31-12-2021 01:52:28pm', 1),
(13, 'Book Closure Notice', 3, '31-12-2021 01:52:34pm', '31-12-2021 01:52:34pm', 1),
(14, 'Unclaimed Shares Transfer to Investor Education and Protection Fund (IEPF)', 1, '31-12-2021 01:53:25pm', '31-12-2021 01:53:25pm', 1);

-- --------------------------------------------------------

--
-- Table structure for table `document_upload_data`
--

CREATE TABLE `document_upload_data` (
  `document_upload_id` int(11) NOT NULL,
  `document_upload_title` varchar(200) NOT NULL,
  `document_upload_description` varchar(200) NOT NULL,
  `document_upload_link` varchar(200) NOT NULL,
  `document_upload_type` int(11) NOT NULL,
  `document_upload_type_no` int(11) NOT NULL,
  `document_upload_year` int(11) DEFAULT NULL,
  `create_date` varchar(100) NOT NULL,
  `modify_date` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `document_upload_data`
--

INSERT INTO `document_upload_data` (`document_upload_id`, `document_upload_title`, `document_upload_description`, `document_upload_link`, `document_upload_type`, `document_upload_type_no`, `document_upload_year`, `create_date`, `modify_date`, `status`) VALUES
(1, 'ANNUAL REPORT 2013-14', '2013-14', 'uploads/1/1/ANNUAL REPORT-2013-14.pdf', 1, 1, 4, '05-01-2022 07:27:11am', '05-01-2022 07:27:11am', 1),
(2, 'ANNUAL REPORT 2014-15', '2014-15', 'uploads/1/1/ANNUAL REPORT-2014-15.pdf', 1, 1, 5, '05-01-2022 07:28:15am', '05-01-2022 07:28:15am', 1),
(3, 'ANNUAL REPORT 2015-16', '2015-16', 'uploads/1/1/ANNUAL REPORT-2015-16.pdf', 1, 1, 6, '05-01-2022 07:28:15am', '05-01-2022 07:46:55am', 1),
(4, 'ANNUAL REPORT 2016-17', '2016-17', 'uploads/1/1/ANNUAL REPORT-2016-17.pdf', 1, 1, 7, '05-01-2022 07:47:52am', '05-01-2022 07:47:52am', 1),
(5, 'ANNUAL REPORT 2017-18', '2017-18', 'uploads/1/1/ANNUAL REPORT-2017-18.pdf', 1, 1, 8, '05-01-2022 07:48:43am', '05-01-2022 07:48:43am', 1),
(6, 'ANNUAL REPORT 2018-19', '2018-19', 'uploads/1/1/ANNUAL REPORT-2018-19.pdf', 1, 1, 9, '05-01-2022 07:49:10am', '05-01-2022 07:49:10am', 1),
(7, 'ANNUAL REPORT 2019-20', '2019-20', 'uploads/1/1/ANNUAL REPORT-2019-20.pdf', 1, 1, 10, '05-01-2022 07:50:39am', '05-01-2022 07:50:39am', 1),
(8, 'ANNUAL REPORT 2020-21', '2020-21', 'uploads/1/1/ANNUAL REPOPT-2020-21.pdf', 1, 1, 11, '05-01-2022 07:51:34am', '05-01-2022 07:51:34am', 1),
(9, 'REQUEST FOR REGISTERING PAN, KYC DETAILS OR CHANGES / UPDATION THEREOF', 'KYC', 'uploads/5/1/Form_ISR-1_REQUEST_FOR_REGISTERING_PAN__KYC_DETAILS_OR_CHANGES__UPDATION.PDF', 1, 5, NULL, '05-01-2022 09:22:16am', '05-01-2022 09:22:16am', 1),
(10, 'FORM ISR-3', 'Declaration Form for Opting-out of Nomination by holders of physical securities in Listed Companies', 'uploads/5/1/Form_ISR-3.pdf', 1, 5, NULL, '05-01-2022 09:23:26am', '05-01-2022 09:23:42am', 1),
(11, 'FORM NO. SH-13 & SH-14 (Nomination)', 'Nomination Form', 'uploads/5/1/Form No. SH-13 Nomination Form.pdf', 1, 5, NULL, '05-01-2022 09:24:34am', '17-02-2022 01:15:49pm', 1),
(12, 'FORM NO. SH-14', 'Cancellation or Variation of Nomination', 'uploads/5/1/Form No. SH-14  Cancellation or Variation of Nomination Form.pdf', 1, 5, NULL, '05-01-2022 09:25:11am', '10-01-2022 09:52:32am', 1),
(13, 'FORM ISR-2', 'Confirmation of Signature of securities holder by the Banker', 'uploads/5/1/Form_ISR-2.pdf', 1, 5, NULL, '05-01-2022 09:26:37am', '05-01-2022 09:26:37am', 1),
(14, 'Shareholder Letter', 'Furnishing of PAN, KYC details and Nomination by holders of physical securities', 'uploads/5/1/Shareholder_Letter_Forms.pdf', 1, 5, NULL, '05-01-2022 09:28:37am', '05-01-2022 09:28:37am', 1),
(15, 'UN-AUDITED FINANCIAL RESULTS FOR THE QUARTER ENDED JUNE 2013', 'QUARTER ENDED JUNE 2013', 'uploads/1/2/UFR 30-06-2013.pdf', 2, 1, 4, '07-01-2022 09:40:35am', '08-03-2022 10:28:01am', 1),
(16, 'UN-AUDITED FINANCIAL RESULTS FOR THE QUARTER ENDED SEPTEMBER 2013', 'QUARTER ENDED SEPTEMBER 2013', 'uploads/1/2/UFR 30-09-2013.pdf', 2, 1, 4, '07-01-2022 09:41:52am', '08-03-2022 10:28:28am', 1),
(17, 'UN-AUDITED FINANCIAL RESULTS FOR THE QUARTER ENDED DECEMBER 2013', 'QUARTER ENDED DECEMBER 2013', 'uploads/1/2/UFR 31-12-2013.pdf', 2, 1, 4, '07-01-2022 09:42:53am', '08-03-2022 10:29:02am', 1),
(18, 'AUDITED FINANCIAL RESULTS FOR THE QUARTER AND YEAR ENDED MARCH 2014', 'QUARTER AND YEAR ENDED MARCH 2014', 'uploads/1/2/AFR 31-03-2014.pdf', 2, 1, 4, '07-01-2022 09:43:56am', '08-03-2022 10:29:27am', 1),
(19, 'UN-AUDITED FINANCIAL RESULTS FOR THE QUARTER ENDED JUNE 2014', 'QUARTER ENDED JUNE 2014', 'uploads/1/2/UFR 30-06-2014.pdf', 2, 1, 5, '07-01-2022 09:45:13am', '08-03-2022 10:30:43am', 1),
(20, 'UN-AUDITED FINANCIAL RESULTS FOR THE QUARTER ENDED SEPTEMBER 2014', 'QUARTER ENDED SEPTEMBER 2014', 'uploads/1/2/UFR 30-09-2014.pdf', 2, 1, 5, '07-01-2022 09:45:52am', '08-03-2022 10:31:14am', 1),
(21, 'SHAREHOLDING PATTERN AS ON JUNE 2013', 'SHAREHOLDING PATTERN AS ON JUNE 2013', 'uploads/1/3/30.06.2013.pdf', 3, 1, 4, '07-01-2022 09:52:49am', '08-03-2022 11:13:10am', 1),
(22, 'SHAREHOLDING PATTERN AS ON SEPTEMBER 2013', 'SHAREHOLDING PATTERN AS ON SEPTEMBER 2013', 'uploads/1/3/30.09.2013.pdf', 3, 1, 4, '07-01-2022 09:53:16am', '08-03-2022 11:09:59am', 1),
(23, 'SHAREHOLDING PATTERN AS ON DECEMBER 2013', 'SHAREHOLDING PATTERN AS ON DECEMBER 2013', 'uploads/1/3/31.12.2013.pdf', 3, 1, 4, '07-01-2022 09:54:20am', '08-03-2022 11:13:38am', 1),
(24, 'SHAREHOLDING PATTERN AS ON MARCH 2014', 'SHAREHOLDING PATTERN AS ON MARCH 2014', 'uploads/1/3/31.03.2014.pdf', 3, 1, 4, '07-01-2022 09:55:29am', '08-03-2022 11:14:04am', 1),
(25, 'SHAREHOLDING PATTERN AS ON JUNE 2014', 'SHAREHOLDING PATTERN AS ON JUNE 2014', 'uploads/1/3/30.06.2014.pdf', 3, 1, 5, '07-01-2022 09:58:51am', '08-03-2022 11:17:02am', 1),
(26, 'SHAREHOLDING PATTERN AS ON SEPTEMBER 2014', 'SHAREHOLDING PATTERN AS ON SEPTEMBER 2014', 'uploads/1/3/30.09.2014.pdf', 3, 1, 5, '07-01-2022 10:00:19am', '08-03-2022 11:18:02am', 1),
(27, 'UNCLAIMED DIVIDEND 2008 TRANSFER TO IEPF', 'F.Y. 2008 UNCLAIMED DIVIDEND TRANSFER TO IEPF', 'uploads/1/4/SVART Form_IEPF-1_2008.pdf', 4, 1, 0, '07-01-2022 10:08:05am', '07-01-2022 10:08:05am', 1),
(28, 'UNCLAIMED DIVIDEND 2009-10 TRANSFER TO IEPF', 'UNCLAIMED DIVIDEND 2009-10 TRANSFER TO IEPF', 'uploads/1/4/SVART Form_IEPF-1_2009-10.pdf', 4, 1, 0, '07-01-2022 10:08:55am', '07-01-2022 10:08:55am', 1),
(29, 'UNCLAIMED DIVIDEND 2010-11 TRANSFER TO IEPF', 'UNCLAIMED DIVIDEND 2010-11 TRANSFER TO IEPF', 'uploads/1/4/SVART Form_IEPF-1_2010-11.pdf', 4, 1, 0, '07-01-2022 10:09:49am', '07-01-2022 10:09:49am', 1),
(30, 'UNCLAIMED INTERIM DIVIDEND 2011-12 TRANSFER TO IEPF', 'UNCLAIMED INTERIM DIVIDEND 2011-12 TRANSFER TO IEPF', 'uploads/1/4/SVART Form_IEPF-1_2011-12.pdf', 4, 1, 0, '07-01-2022 10:10:32am', '07-01-2022 10:10:32am', 1),
(31, 'UNCLAIMED FINAL DIVIDEND 2011-12 TRANSFER TO IEPF', 'UNCLAIMED FINAL DIVIDEND 2011-12 TRANSFER TO IEPF', 'uploads/1/4/SVART Form_IEPF-1_2011-12_Final.pdf', 4, 1, 0, '07-01-2022 10:11:01am', '07-01-2022 10:11:01am', 1),
(32, 'UNCLAIMED FINAL DIVIDEND 2012-13 TRANSFER TO IEPF', 'UNCLAIMED FINAL DIVIDEND 2012-13 TRANSFER TO IEPF', 'uploads/1/4/SVART Form_IEPF-1_2012-13.pdf', 4, 1, 0, '07-01-2022 10:11:25am', '07-01-2022 10:11:25am', 1),
(33, 'UNCLAIMED FINAL DIVIDEND 2013-14 TRANSFER TO IEPF', 'UNCLAIMED FINAL DIVIDEND 2013-14 TRANSFER TO IEPF', 'uploads/1/4/SVART Form_IEPF-1_2013-14.pdf', 4, 1, 0, '07-01-2022 10:11:55am', '07-01-2022 10:11:55am', 1),
(34, 'UNCLAIMED SHARES TRANSFER TO IEPF (2018)', 'UNCLAIMED SHARES TRANSFER TO IEPF - LOT - 1', 'uploads/1/14/SVART Form IEPF-4 2018.pdf', 14, 1, 0, '07-01-2022 10:15:03am', '07-01-2022 10:15:03am', 1),
(35, 'UNCLAIMED SHARES TRANSFER TO IEPF (2019-20)', 'UNCLAIMED SHARES TRANSFER TO IEPF - LOT - 2', 'uploads/1/14/SVART Form IEPF-4 2020.pdf', 14, 1, 0, '07-01-2022 10:16:05am', '07-01-2022 10:16:05am', 1),
(36, 'UNCLAIMED SHARES TRANSFER TO IEPF (2021)', 'UNCLAIMED SHARES TRANSFER TO IEPF - LOT - 3', 'uploads/1/14/SVART Form IEPF-4 2021.pdf', 14, 1, 0, '07-01-2022 10:16:47am', '07-01-2022 10:16:47am', 1),
(37, 'Whistle Blower Policy', 'Policy', 'uploads/4/1/Whistle_Blower_Policy.pdf', 1, 4, NULL, '07-01-2022 10:22:29am', '07-01-2022 10:22:29am', 1),
(38, 'Stake Holders relationship Committee', 'Policy', 'uploads/4/1/Stake_Holders_relationship_Commitee.pdf', 1, 4, NULL, '07-01-2022 10:23:25am', '07-01-2022 10:23:25am', 1),
(39, 'Risk Management Policy', 'Policy', 'uploads/4/1/Risk_Mangement_Policy_SVART.pdf', 1, 4, NULL, '07-01-2022 10:24:12am', '07-01-2022 10:24:12am', 0),
(40, 'Related party transaction', 'Policy', 'uploads/4/1/Related_party_transaction.pdf', 1, 4, NULL, '07-01-2022 10:24:45am', '07-01-2022 10:24:45am', 1),
(41, 'Prevention of insider trading Policy', 'Policy', 'uploads/4/1/Prevention_of_insider_trading_Policy.pdf', 1, 4, NULL, '07-01-2022 10:25:15am', '07-01-2022 10:25:15am', 1),
(42, 'Policy on Preservation of Documents', 'Policy', 'uploads/4/1/Policy_on_Preservation_of_Documents.pdf', 1, 4, NULL, '07-01-2022 10:26:10am', '07-01-2022 10:26:10am', 1),
(43, 'Policy on Determination of Materiality of Events or Information', 'Policy', 'uploads/4/1/Policy_on_Determination_of_Materiality_of_Events_or_Information.pdf', 1, 4, NULL, '07-01-2022 10:26:53am', '07-01-2022 10:26:53am', 1),
(44, 'Nomination And Remuneration Policy', 'Policy', 'uploads/4/1/NRC_POLICY_SVART_Updated_12.11.2021 (1).pdf', 1, 4, NULL, '07-01-2022 10:28:07am', '15-02-2022 11:37:17am', 1),
(45, 'Induction Programme policy', 'Policy', 'uploads/4/1/Induction_Programme_policy.pdf', 1, 4, NULL, '07-01-2022 10:29:21am', '07-01-2022 10:29:21am', 1),
(46, 'Fair Disclosure Policy', 'Policy', 'uploads/4/1/Fair_Disclosure_Policy.pdf', 1, 4, NULL, '07-01-2022 10:30:19am', '07-01-2022 10:30:19am', 1),
(47, 'Code Practices Procedures Fair Disclosure UPSI Effect 1st April 2019', 'Policy', 'uploads/4/1/Code Practices_Procedures Fair Disclosure_UPSI_Effect_1st April 2019.pdf', 1, 4, NULL, '07-01-2022 10:30:51am', '07-01-2022 10:30:51am', 1),
(48, 'Authorised Person for Determination of Materiality Events or Information', 'Policy', 'uploads/4/1/Authorised_Person_for_Determination_of_Materiality_Events_or_Information.pdf', 1, 4, NULL, '07-01-2022 10:32:09am', '07-01-2022 10:32:09am', 1),
(49, 'Archival Policy', 'Policy', 'uploads/4/1/Archival_Policy.pdf', 1, 4, NULL, '07-01-2022 10:32:39am', '07-01-2022 10:32:39am', 1),
(50, 'Scrutinizers Report', 'Scrutinizers Report', 'uploads/1/5/Scrutinizer_s_Report_SVART.pdf', 5, 1, 11, '10-01-2022 10:58:57am', '10-01-2022 10:58:57am', 1),
(51, 'Book closure Notice for the purpose of 29th AGM & Dividend 2014-15', 'Book closure Notice for the purpose of 29th AGM & Dividend', 'uploads/3/13/Book closure Notice for the purpose of 29th AGM & Dividend.pdf', 13, 3, 0, '10-01-2022 12:02:36pm', '08-03-2022 11:03:17am', 1),
(52, 'Book closure Notice for the purpose of 30th AGM & Dividend 2015-16', 'Book closure Notice for the purpose of 30th AGM & Dividend', 'uploads/3/13/Book closure Notice for the purpose of 30th AGM & Dividend.PDF', 13, 3, 0, '10-01-2022 12:02:54pm', '08-03-2022 11:04:10am', 1),
(53, 'Book closure Notice for the purpose of 31st AGM & Dividend 2016-17', 'Book closure Notice for the purpose of 31st AGM & Dividend', 'uploads/3/13/Book closure Notice for the purpose of 31st AGM & Dividend.PDF', 13, 3, 0, '10-01-2022 12:03:10pm', '08-03-2022 11:04:42am', 1),
(54, 'Book closure Notice for the purpose of 32nd AGM & Dividend 2017-18', 'Book closure Notice for the purpose of 32nd AGM & Dividend', 'uploads/3/13/Book closure Notice for the purpose of 32nd AGM & Dividend.PDF', 13, 3, 0, '10-01-2022 12:03:28pm', '08-03-2022 11:04:56am', 1),
(55, 'Book closure Notice for the purpose of 33rd AGM & Dividend 2018-19', 'Book closure Notice for the purpose of 33rd AGM & Dividend', 'uploads/3/13/Book closure Notice for the purpose of 33rd AGM & Dividend.pdf', 13, 3, 0, '10-01-2022 12:03:50pm', '08-03-2022 11:05:08am', 1),
(56, 'Book closure Notice for the purpose of 34th AGM 2019-20', 'Book closure Notice for the purpose of 34th AGM', 'uploads/3/13/Book closure Notice for the purpose of 34th AGM.pdf', 13, 3, 0, '10-01-2022 12:04:09pm', '08-03-2022 11:05:32am', 1),
(57, 'Book closure Notice for the purpose of 35th AGM 2020-21', 'Book closure Notice for the purpose of 35th AGM', 'uploads/3/13/Book closure Notice for the purpose of 35th AGM.pdf', 13, 3, 0, '10-01-2022 12:04:25pm', '08-03-2022 11:05:57am', 1),
(58, 'Board Meeting Quarter ended June, 2015', 'Board Meeting Quarter ended June, 2015', 'uploads/3/12/june 2015.pdf', 12, 3, 6, '10-01-2022 12:08:04pm', '10-01-2022 12:08:04pm', 1),
(59, 'Board Meeting Quarter ended September 2015', 'Board Meeting Quarter ended September 2015', 'uploads/3/12/sep 2015.pdf', 12, 3, 6, '10-01-2022 12:08:47pm', '10-01-2022 12:08:47pm', 1),
(60, 'Board Meeting Quarter ended December, 2015', 'Board Meeting Quarter ended December, 2015', 'uploads/3/12/dec 2015.pdf', 12, 3, 6, '10-01-2022 12:09:24pm', '10-01-2022 12:09:24pm', 1),
(61, ' Board Meeting Quarter & Year ended March 2016', ' Board Meeting Quarter & Year ended March 2016', 'uploads/3/12/mar 2016.pdf', 12, 3, 6, '10-01-2022 12:10:32pm', '10-01-2022 12:10:32pm', 1),
(62, 'Board Meeting Quarter ended June, 2016', 'Board Meeting Quarter ended June, 2016', 'uploads/3/12/jun 2016.PDF', 12, 3, 7, '10-01-2022 12:11:27pm', '10-01-2022 12:11:27pm', 1),
(63, 'Board Meeting Quarter ended September, 2016', 'Board Meeting Quarter ended September, 2016', 'uploads/3/12/sep 2016.pdf', 12, 3, 7, '10-01-2022 12:12:44pm', '10-01-2022 12:12:44pm', 1),
(64, 'Board Meeting Quarter ended December, 2016', 'Board Meeting Quarter ended December, 2016', 'uploads/3/12/dec 2016.pdf', 12, 3, 7, '10-01-2022 12:13:08pm', '10-01-2022 12:13:08pm', 1),
(65, 'Board Meeting Quarter and Year ended March, 2017', 'Board Meeting Quarter and Year ended March, 2017', 'uploads/3/12/mar 2017.PDF', 12, 3, 7, '10-01-2022 12:14:24pm', '10-01-2022 12:14:24pm', 1),
(66, 'Board Meeting Quarter ended June, 2017', 'Board Meeting Quarter ended June, 2017', 'uploads/3/12/jun 2017.PDF', 12, 3, 8, '10-01-2022 12:15:23pm', '10-01-2022 12:15:23pm', 1),
(67, ' Board Meeting Quarter ended September, 2017', ' Board Meeting Quarter ended September, 2017', 'uploads/3/12/sep 2017.PDF', 12, 3, 8, '10-01-2022 12:16:07pm', '10-01-2022 12:16:07pm', 1),
(68, 'Board Meeting Quarter ended December, 2017', 'Board Meeting Quarter ended December, 2017', 'uploads/3/12/dec 2017.PDF', 12, 3, 8, '10-01-2022 12:16:53pm', '10-01-2022 12:16:53pm', 1),
(69, 'Board Meeting Quarter & Year ended March, 2018', 'Board Meeting Quarter & Year ended March, 2018', 'uploads/3/12/SVART BSE BM - 25052018.PDF', 12, 3, 8, '10-01-2022 12:17:59pm', '10-01-2022 12:17:59pm', 1),
(70, ' Board Meeting Quarter ended June, 2018', ' Board Meeting Quarter ended June, 2018', 'uploads/3/12/jun 2018.pdf', 12, 3, 9, '10-01-2022 12:18:46pm', '10-01-2022 12:18:46pm', 1),
(71, 'Board Meeting Quarter ended September, 2018', 'Board Meeting Quarter ended September, 2018', 'uploads/3/12/sep 2018.pdf', 12, 3, 9, '10-01-2022 12:19:16pm', '10-01-2022 12:19:16pm', 1),
(72, 'Board Meeting Quarter ended December, 2018', 'Board Meeting Quarter ended December, 2018', 'uploads/3/12/dec 2018.pdf', 12, 3, 9, '10-01-2022 12:19:36pm', '10-01-2022 12:19:36pm', 1),
(73, ' Board Meeting Quarter and Year ended March, 2019', ' Board Meeting Quarter and Year ended March, 2019', 'uploads/3/12/mar 2019.pdf', 12, 3, 9, '10-01-2022 12:20:06pm', '10-01-2022 12:20:06pm', 1),
(74, ' Board Meeting Quarter ended June, 2019', ' Board Meeting Quarter ended June, 2019', 'uploads/3/12/jun 2019.pdf', 12, 3, 10, '10-01-2022 12:20:34pm', '10-01-2022 12:20:34pm', 1),
(75, 'Board Meeting Quarter ended September, 2019', 'Board Meeting Quarter ended September, 2019', 'uploads/3/12/sep 2019.pdf', 12, 3, 10, '10-01-2022 12:20:59pm', '10-01-2022 12:20:59pm', 1),
(76, 'Board Meeting Quarter ended December, 2019', 'Board Meeting Quarter ended December, 2019', 'uploads/3/12/dec 2019.pdf', 12, 3, 10, '10-01-2022 12:21:22pm', '10-01-2022 12:21:22pm', 1),
(77, 'Board Meeting Quarter and Year ended March, 2020', 'Board Meeting Quarter and Year ended March, 2020', 'uploads/3/12/mar 2020.pdf', 12, 3, 10, '10-01-2022 12:22:29pm', '10-01-2022 12:22:29pm', 1),
(78, 'Board Meeting Quarter ended June, 2020', 'Board Meeting Quarter ended June, 2020', 'uploads/3/12/june 2020.pdf', 12, 3, 11, '10-01-2022 12:23:02pm', '10-01-2022 12:23:02pm', 1),
(79, 'Board Meeting Quarter ended September, 2020', 'Board Meeting Quarter ended September, 2020', 'uploads/3/12/sep 2020.pdf', 12, 3, 11, '10-01-2022 12:23:23pm', '10-01-2022 12:23:23pm', 1),
(80, 'Board Meeting Quarter ended December, 2020', 'Board Meeting Quarter ended December, 2020', 'uploads/3/12/dec 2020.pdf', 12, 3, 11, '10-01-2022 12:23:51pm', '10-01-2022 12:23:51pm', 1),
(81, 'Board Meeting Quarter and Year ended March, 2021', 'Board Meeting Quarter and Year ended March, 2021', 'uploads/3/12/mar 2021.pdf', 12, 3, 11, '10-01-2022 12:24:22pm', '10-01-2022 12:24:22pm', 1),
(82, 'Board Meeting Quarter ended June, 2021', 'Board Meeting Quarter ended June, 2021', 'uploads/3/12/june 2021.pdf', 12, 3, 12, '10-01-2022 12:24:59pm', '10-01-2022 12:24:59pm', 1),
(83, 'Board Meeting Quarter ended September, 2021', 'Board Meeting Quarter ended September, 2021', 'uploads/3/12/sep 2021.pdf', 12, 3, 12, '10-01-2022 12:25:22pm', '10-01-2022 12:25:22pm', 1),
(84, 'Board Meeting Quarter ended December, 2021', 'Board Meeting Quarter ended December, 2021', 'uploads/3/12/dec 2021.PDF', 12, 3, 12, '10-01-2022 12:25:43pm', '10-01-2022 12:25:43pm', 1),
(85, 'Annual Return 2019-20', 'Annual Return 2019-20  MGT -7 ', 'uploads/1/1/SVART_Annual_Return_19-20.pdf', 1, 1, 10, '11-01-2022 06:28:55am', '11-01-2022 06:47:50am', 1),
(86, 'Annual Return 2020-21', 'Annual Return 2020-21 MGT -7 ', 'uploads/1/1/SVART_Annual_Return_20-21.pdf', 1, 1, 11, '11-01-2022 06:29:12am', '11-01-2022 06:48:02am', 1),
(87, 'UN-AUDITED FINANCIAL RESULTS FOR THE QUARTER ENDED DECEMBER 2014', 'QUARTER ENDED DECEMBER 2014', 'uploads/1/2/UFR 31-12-2014.pdf', 2, 1, 5, '14-01-2022 12:11:02pm', '08-03-2022 10:31:58am', 1),
(88, 'SHAREHOLDING PATTERN AS ON DECEMBER 2014', 'SHAREHOLDING PATTERN AS ON DECEMBER 2014', 'uploads/1/3/31.12.2014.pdf', 3, 1, 5, '18-01-2022 08:06:06am', '08-03-2022 11:21:14am', 1),
(89, 'Form ISR-4', 'Request for issue of Duplicate Certificate and other Service Requests', 'uploads/5/1/Form ISR-4.pdf', 1, 5, NULL, '15-02-2022 11:08:24am', '15-02-2022 11:08:24am', 1),
(90, 'UNCLAIMED SHARES TRANSFER TO IEPF (2022)', 'UNCLAIMED SHARES TRANSFER TO IEPF - LOT - 4', 'uploads/1/14/SWASTI_VINAYAKA_ART_AND_HERITAGE_CORPORATION_LTD_Form_IEPF-4_2022_24022022.pdf', 14, 1, 0, '24-02-2022 12:03:40pm', '24-02-2022 12:03:40pm', 1),
(91, 'AUDITED FINANCIAL RESULTS FOR THE QUARTER AND YEAR ENDED MARCH 2015', 'QUARTER AND YEAR ENDED MARCH 2015', 'uploads/1/2/AFR 31-03-2015.pdf', 2, 1, 5, '08-03-2022 10:32:51am', '08-03-2022 10:32:51am', 1),
(92, ' UN-AUDITED FINANCIAL RESULTS FOR THE QUARTER ENDED JUNE 2015', 'QUARTER ENDED JUNE 2015', 'uploads/1/2/UFR 30-06-2015.pdf', 2, 1, 6, '08-03-2022 10:33:49am', '08-03-2022 10:33:49am', 1),
(93, ' UN-AUDITED FINANCIAL RESULTS FOR THE QUARTER ENDED SEPTEMBER 2015', 'QUARTER ENDED SEPTEMBER 2015', 'uploads/1/2/UFR 30-09-2015.pdf', 2, 1, 6, '08-03-2022 10:34:35am', '08-03-2022 10:34:35am', 1),
(94, ' UN-AUDITED FINANCIAL RESULTS FOR THE QUARTER ENDED DECEMBER 2015', 'QUARTER ENDED DECEMBER 2015', 'uploads/1/2/UFR 31-12-2015.pdf', 2, 1, 6, '08-03-2022 10:34:35am', '08-03-2022 10:35:40am', 1),
(95, ' AUDITED FINANCIAL RESULTS FOR THE QUARTER AND YEAR ENDED MARCH 2016', 'QUARTER AND YEAR ENDED MARCH 2016', 'uploads/1/2/AFR 31-03-2016.pdf', 2, 1, 6, '08-03-2022 10:36:25am', '08-03-2022 10:36:25am', 1),
(96, 'UN-AUDITED FINANCIAL RESULTS FOR THE QUARTER ENDED JUNE 2016', 'QUARTER ENDED JUNE 2016', 'uploads/1/2/UFR 30-06-2016.pdf', 2, 1, 7, '08-03-2022 10:37:16am', '08-03-2022 10:37:16am', 1),
(97, 'UN-AUDITED FINANCIAL RESULTS FOR THE QUARTER ENDED SEPTEMBER 2016', 'QUARTER ENDED SEPTEMBER 2016', 'uploads/1/2/UFR 30-09-2016.pdf', 2, 1, 7, '08-03-2022 10:37:45am', '08-03-2022 10:37:45am', 1),
(98, 'UN-AUDITED FINANCIAL RESULTS FOR THE QUARTER ENDED DECEMBER 2016', 'QUARTER ENDED DECEMBER 2016', 'uploads/1/2/UFR 31-12-2016.pdf', 2, 1, 7, '08-03-2022 10:38:12am', '08-03-2022 10:38:12am', 1),
(99, 'AUDITED FINANCIAL RESULTS FOR THE QUARTER AND YEAR ENDED MARCH 2017', 'QUARTER AND YEAR ENDED MARCH 2017', 'uploads/1/2/AFR 31-03-2017.pdf', 2, 1, 7, '08-03-2022 10:38:42am', '08-03-2022 10:38:42am', 1),
(100, 'UN-AUDITED FINANCIAL RESULTS FOR THE QUARTER ENDED JUNE 2017', 'QUARTER ENDED JUNE 2017', 'uploads/1/2/UFR 30-06-2017.pdf', 2, 1, 8, '08-03-2022 10:41:35am', '08-03-2022 10:41:35am', 1),
(101, 'UN-AUDITED FINANCIAL RESULTS FOR THE QUARTER ENDED SEPTEMBER 2017', 'QUARTER ENDED SEPTEMBER 2017', 'uploads/1/2/UFR 30-09-2017.pdf', 2, 1, 8, '08-03-2022 10:44:10am', '08-03-2022 10:44:10am', 1),
(102, 'UN-AUDITED FINANCIAL RESULTS FOR THE QUARTER ENDED DECEMBER 2017', 'QUARTER ENDED DECEMBER 2017', 'uploads/1/2/UFR 31-12-2017.pdf', 2, 1, 8, '08-03-2022 10:45:08am', '08-03-2022 10:45:08am', 1),
(103, 'AUDITED FINANCIAL RESULTS FOR THE QUARTER AND YEAR ENDED MARCH 2018', 'QUARTER AND YEAR ENDED MARCH 2018', 'uploads/1/2/AFR 31-03-2018.pdf', 2, 1, 8, '08-03-2022 10:45:40am', '08-03-2022 10:45:40am', 1),
(104, 'UN-AUDITED FINANCIAL RESULTS FOR THE QUARTER ENDED JUNE 2018', 'QUARTER ENDED JUNE 2018', 'uploads/1/2/UFR 30-06-2018.pdf', 2, 1, 9, '08-03-2022 10:46:26am', '08-03-2022 10:46:41am', 1),
(105, 'UN-AUDITED FINANCIAL RESULTS FOR THE QUARTER ENDED SEPTEMBER 2018', 'QUARTER ENDED SEPTEMBER 2018', 'uploads/1/2/UFR 30-09-2018.pdf', 2, 1, 9, '08-03-2022 10:47:08am', '08-03-2022 10:47:08am', 1),
(106, 'UN-AUDITED FINANCIAL RESULTS FOR THE QUARTER ENDED DECEMBER 2018', 'QUARTER ENDED DECEMBER 2018', 'uploads/1/2/UFR 31-12-2018.pdf', 2, 1, 9, '08-03-2022 10:47:43am', '08-03-2022 10:47:43am', 1),
(107, ' AUDITED FINANCIAL RESULTS FOR THE QUARTER AND YEAR ENDED MARCH 2019', 'QUARTER AND YEAR ENDED MARCH 2019', 'uploads/1/2/AFR 31-03-2019.pdf', 2, 1, 9, '08-03-2022 10:48:09am', '08-03-2022 10:48:09am', 1),
(108, 'UN-AUDITED FINANCIAL RESULTS FOR THE QUARTER ENDED JUNE 2019', 'QUARTER ENDED JUNE 2019', 'uploads/1/2/UFR 30-06-2019.pdf', 2, 1, 10, '08-03-2022 10:49:14am', '08-03-2022 10:49:14am', 1),
(109, 'UN-AUDITED FINANCIAL RESULTS FOR THE QUARTER ENDED SEPTEMBER 2019', 'QUARTER ENDED SEPTEMBER 2019', 'uploads/1/2/UFR 30-09-2019.pdf', 2, 1, 10, '08-03-2022 10:49:39am', '08-03-2022 10:49:39am', 1),
(110, 'UN-AUDITED FINANCIAL RESULTS FOR THE QUARTER ENDED DECEMBER 2019', 'QUARTER ENDED DECEMBER 2019', 'uploads/1/2/UFR 31-12-2019.pdf', 2, 1, 10, '08-03-2022 10:50:03am', '08-03-2022 10:50:03am', 1),
(111, 'AUDITED FINANCIAL RESULTS FOR THE QUARTER AND YEAR ENDED MARCH 2020', 'QUARTER AND YEAR ENDED MARCH 2020', 'uploads/1/2/AFR 31-03-2020.pdf', 2, 1, 10, '08-03-2022 10:50:29am', '08-03-2022 10:50:29am', 1),
(112, ' UN-AUDITED FINANCIAL RESULTS FOR THE QUARTER ENDED JUNE 2020', 'QUARTER ENDED JUNE 2020', 'uploads/1/2/UFR 30-06-2020.pdf', 2, 1, 11, '08-03-2022 10:51:50am', '08-03-2022 10:51:50am', 1),
(113, 'UN-AUDITED FINANCIAL RESULTS FOR THE QUARTER ENDED SEPTEMBER 2020', 'QUARTER ENDED SEPTEMBER 2020', 'uploads/1/2/UFR 30-09-2020.pdf', 2, 1, 11, '08-03-2022 10:52:19am', '08-03-2022 10:52:19am', 1),
(114, ' UN-AUDITED FINANCIAL RESULTS FOR THE QUARTER ENDED DECEMBER 2020', 'QUARTER ENDED DECEMBER 2020', 'uploads/1/2/UFR 31-12-2020.pdf', 2, 1, 11, '08-03-2022 10:52:49am', '08-03-2022 10:52:49am', 1),
(115, 'AUDITED FINANCIAL RESULTS FOR THE QUARTER AND YEAR ENDED MARCH 2021', 'QUARTER AND YEAR ENDED MARCH 2021', 'uploads/1/2/AFR 31-03-2021.pdf', 2, 1, 11, '08-03-2022 10:53:15am', '08-03-2022 10:53:15am', 1),
(116, 'UN-AUDITED FINANCIAL RESULTS FOR THE QUARTER ENDED JUNE 2021', 'QUARTER ENDED JUNE 2021', 'uploads/1/2/UFR - 30-06-2021.PDF', 2, 1, 12, '08-03-2022 10:54:14am', '08-03-2022 10:54:14am', 1),
(117, 'UN-AUDITED FINANCIAL RESULTS FOR THE QUARTER ENDED SEPTEMBER 2021', 'QUARTER ENDED SEPTEMBER 2021', 'uploads/1/2/UFR - 30-09-2021.PDF', 2, 1, 12, '08-03-2022 10:54:38am', '08-03-2022 10:54:38am', 1),
(118, 'UN-AUDITED FINANCIAL RESULTS FOR THE QUARTER ENDED DECEMBER 2021', 'QUARTER ENDED DECEMBER 2021', 'uploads/1/2/UFR - 31-12-2021.PDF', 2, 1, 12, '08-03-2022 10:55:03am', '08-03-2022 10:55:03am', 1),
(119, 'SHAREHOLDING PATTERN AS ON MARCH 2015', 'SHAREHOLDING PATTERN AS ON MARCH 2015', 'uploads/1/3/31.03.2015.pdf', 3, 1, 5, '08-03-2022 11:22:09am', '08-03-2022 11:22:09am', 1),
(120, 'SHAREHOLDING PATTERN AS ON JUNE 2015', 'SHAREHOLDING PATTERN AS ON JUNE 2015', 'uploads/1/3/30.06.2015.pdf', 3, 1, 6, '08-03-2022 11:23:14am', '08-03-2022 11:23:14am', 1),
(121, 'SHAREHOLDING PATTERN AS ON SEPTEMBER 2015', 'SHAREHOLDING PATTERN AS ON SEPTEMBER 2015', 'uploads/1/3/30.09.2015.pdf', 3, 1, 6, '08-03-2022 11:23:39am', '08-03-2022 11:23:39am', 1),
(122, 'SHAREHOLDING PATTERN AS ON DECEMBER 2015', 'SHAREHOLDING PATTERN AS ON DECEMBER 2015', 'uploads/1/3/31.12.2015.pdf', 3, 1, 6, '08-03-2022 11:24:00am', '08-03-2022 11:24:00am', 1),
(123, 'SHAREHOLDING PATTERN AS ON MARCH 2016', 'SHAREHOLDING PATTERN AS ON MARCH 2016', 'uploads/1/3/31.03.2016.pdf', 3, 1, 6, '08-03-2022 11:24:23am', '08-03-2022 11:24:23am', 1),
(124, 'SHAREHOLDING PATTERN AS ON JUNE 2016', 'SHAREHOLDING PATTERN AS ON JUNE 2016', 'uploads/1/3/30.06.2016.pdf', 3, 1, 7, '08-03-2022 11:25:03am', '08-03-2022 11:25:03am', 1),
(125, 'SHAREHOLDING PATTERN AS ON SEPTEMBER 2016', 'SHAREHOLDING PATTERN AS ON SEPTEMBER 2016', 'uploads/1/3/30.09.2016.pdf', 3, 1, 7, '08-03-2022 11:25:31am', '08-03-2022 11:25:31am', 1),
(126, 'SHAREHOLDING PATTERN AS ON DECEMBER 2016', 'SHAREHOLDING PATTERN AS ON DECEMBER 2016', 'uploads/1/3/31.12.2016.pdf', 3, 1, 7, '08-03-2022 11:25:56am', '08-03-2022 11:25:56am', 1),
(127, 'SHAREHOLDING PATTERN AS ON MARCH 2017', 'SHAREHOLDING PATTERN AS ON MARCH 2017', 'uploads/1/3/31.03.2017.pdf', 3, 1, 7, '08-03-2022 11:26:20am', '08-03-2022 11:26:20am', 1),
(128, 'SHAREHOLDING PATTERN AS ON JUNE 2017', 'SHAREHOLDING PATTERN AS ON JUNE 2017', 'uploads/1/3/30.06.2017.pdf', 3, 1, 8, '08-03-2022 11:27:13am', '08-03-2022 11:28:57am', 1),
(129, 'SHAREHOLDING PATTERN AS ON SEPTEMBER 2017', 'SHAREHOLDING PATTERN AS ON SEPTEMBER 2017', 'uploads/1/3/30.09.2017.pdf', 3, 1, 8, '08-03-2022 11:27:42am', '08-03-2022 11:27:42am', 1),
(130, 'SHAREHOLDING PATTERN AS ON DECEMBER 2017', 'SHAREHOLDING PATTERN AS ON DECEMBER 2017', 'uploads/1/3/31.12.2017.pdf', 3, 1, 8, '08-03-2022 11:28:04am', '08-03-2022 11:28:04am', 1),
(131, 'SHAREHOLDING PATTERN AS ON MARCH 2018', 'SHAREHOLDING PATTERN AS ON MARCH 2018', 'uploads/1/3/31.03.2018.pdf', 3, 1, 8, '08-03-2022 11:28:28am', '08-03-2022 11:28:28am', 1),
(132, 'SHAREHOLDING PATTERN AS ON JUNE 2018', 'SHAREHOLDING PATTERN AS ON JUNE 2018', 'uploads/1/3/30.06.2018.pdf', 3, 1, 9, '08-03-2022 11:30:51am', '08-03-2022 11:30:51am', 1),
(133, 'SHAREHOLDING PATTERN AS ON SEPTEMBER 2018', 'SHAREHOLDING PATTERN AS ON SEPTEMBER 2018', 'uploads/1/3/30.09.2018.pdf', 3, 1, 9, '08-03-2022 11:31:17am', '08-03-2022 11:31:17am', 1),
(134, 'SHAREHOLDING PATTERN AS ON DECEMBER 2018', 'SHAREHOLDING PATTERN AS ON DECEMBER 2018', 'uploads/1/3/31.12.2018.pdf', 3, 1, 9, '08-03-2022 11:31:42am', '08-03-2022 11:31:42am', 1),
(135, 'SHAREHOLDING PATTERN AS ON MARCH 2019', 'SHAREHOLDING PATTERN AS ON MARCH 2019', 'uploads/1/3/31.03.2019.pdf', 3, 1, 9, '08-03-2022 11:32:10am', '08-03-2022 11:32:10am', 1),
(136, 'SHAREHOLDING PATTERN AS ON JUNE 2019', 'SHAREHOLDING PATTERN AS ON JUNE 2019', 'uploads/1/3/30.06.2019.pdf', 3, 1, 10, '08-03-2022 11:34:21am', '08-03-2022 11:34:21am', 1),
(137, 'SHAREHOLDING PATTERN AS ON SEPTEMBER 2019', 'SHAREHOLDING PATTERN AS ON SEPTEMBER 2019', 'uploads/1/3/30.09.2019.pdf', 3, 1, 10, '08-03-2022 11:34:48am', '08-03-2022 11:34:48am', 1),
(138, 'SHAREHOLDING PATTERN AS ON DECEMBER 2019', 'SHAREHOLDING PATTERN AS ON DECEMBER 2019', 'uploads/1/3/31.12.2019.pdf', 3, 1, 10, '08-03-2022 11:35:25am', '08-03-2022 11:35:25am', 1),
(139, 'SHAREHOLDING PATTERN AS ON MARCH 2020', 'SHAREHOLDING PATTERN AS ON MARCH 2020', 'uploads/1/3/31.03.2020.pdf', 3, 1, 10, '08-03-2022 11:35:53am', '08-03-2022 11:35:53am', 1),
(140, 'SHAREHOLDING PATTERN AS ON JUNE 2020', 'SHAREHOLDING PATTERN AS ON JUNE 2020', 'uploads/1/3/30.06.2020.pdf', 3, 1, 11, '08-03-2022 11:36:56am', '08-03-2022 11:36:56am', 1),
(141, 'SHAREHOLDING PATTERN AS ON SEPTEMBER 2020', 'SHAREHOLDING PATTERN AS ON SEPTEMBER 2020', 'uploads/1/3/30.09.2020.pdf', 3, 1, 11, '08-03-2022 11:37:22am', '08-03-2022 11:37:22am', 1),
(142, 'SHAREHOLDING PATTERN AS ON DECEMBER 2020', 'SHAREHOLDING PATTERN AS ON DECEMBER 2020', 'uploads/1/3/31.12.2020.pdf', 3, 1, 11, '08-03-2022 11:37:48am', '08-03-2022 11:37:48am', 1),
(143, 'SHAREHOLDING PATTERN AS ON MARCH 2021', 'SHAREHOLDING PATTERN AS ON MARCH 2021', 'uploads/1/3/31.03.2021.pdf', 3, 1, 11, '08-03-2022 11:38:32am', '08-03-2022 11:38:32am', 1),
(144, 'SHAREHOLDING PATTERN AS ON JUNE 2021', 'SHAREHOLDING PATTERN AS ON JUNE 2021', 'uploads/1/3/30.06.2021.pdf', 3, 1, 12, '08-03-2022 11:40:39am', '08-03-2022 11:40:39am', 1),
(145, 'SHAREHOLDING PATTERN AS ON SEPTEMBER 2021', 'SHAREHOLDING PATTERN AS ON SEPTEMBER 2021', 'uploads/1/3/30.09.2021.pdf', 3, 1, 12, '08-03-2022 11:41:39am', '08-03-2022 11:41:39am', 1),
(146, 'SHAREHOLDING PATTERN AS ON DECEMBER 2021', 'SHAREHOLDING PATTERN AS ON DECEMBER 2021', 'uploads/1/3/Shareholding Pattern 31122021 (1).pdf', 3, 1, 12, '08-03-2022 11:42:04am', '08-03-2022 11:42:04am', 1),
(147, 'SHAREHOLDING PATTERN AS ON MARCH 2022', 'SHAREHOLDING PATTERN AS ON MARCH 2022', 'uploads/1/3/SWAST_20220331_SHP.pdf', 3, 1, 12, '11-04-2022 09:50:49am', '11-04-2022 09:50:49am', 1),
(148, 'AUDITED FINANCIAL RESULTS FOR THE QUARTER AND YEAR ENDED MARCH 2022', 'QUARTER AND YEAR ENDED MARCH 2022', 'uploads/1/2/SVART_AUDITED FINANCIAL RESULTS.PDF', 2, 1, 12, '30-05-2022 12:04:44pm', '30-05-2022 12:04:44pm', 1),
(149, 'ANNUAL REPORT 2021-22', '2021-22', 'uploads/1/1/SVART_AR_21-22.pdf', 1, 1, 12, '02-06-2022 11:21:42am', '02-06-2022 11:21:42am', 1),
(150, 'Annual Return 2021-22', 'Annual Return 2021-22', 'uploads/1/1/Form_MGT_7_21-22_SVART.pdf', 1, 1, 12, '02-06-2022 01:01:22pm', '02-06-2022 01:01:22pm', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_items`
--

CREATE TABLE `tbl_items` (
  `itemId` int(11) NOT NULL,
  `itemHeader` varchar(512) NOT NULL COMMENT 'Heading',
  `itemSub` varchar(1021) NOT NULL COMMENT 'sub heading',
  `itemDesc` text COMMENT 'content or description',
  `itemImage` varchar(80) DEFAULT NULL,
  `isDeleted` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDtm` datetime NOT NULL,
  `updatedDtm` datetime DEFAULT NULL,
  `updatedBy` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_items`
--

INSERT INTO `tbl_items` (`itemId`, `itemHeader`, `itemSub`, `itemDesc`, `itemImage`, `isDeleted`, `createdBy`, `createdDtm`, `updatedDtm`, `updatedBy`) VALUES
(1, 'jquery.validation.js', 'Contribution towards jquery.validation.js', 'jquery.validation.js is the client side javascript validation library authored by Jörn Zaefferer hosted on github for us and we are trying to contribute to it. Working on localization now', 'validation.png', 0, 1, '2015-09-02 00:00:00', NULL, NULL),
(2, 'CodeIgniter User Management', 'Demo for user management system', 'This the demo of User Management System (Admin Panel) using CodeIgniter PHP MVC Framework and AdminLTE bootstrap theme. You can download the code from the repository or forked it to contribute. Usage and installation instructions are provided in ReadMe.MD', 'cias.png', 0, 1, '2015-09-02 00:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reset_password`
--

CREATE TABLE `tbl_reset_password` (
  `id` bigint(20) NOT NULL,
  `email` varchar(128) NOT NULL,
  `activation_id` varchar(32) NOT NULL,
  `agent` varchar(512) NOT NULL,
  `client_ip` varchar(32) NOT NULL,
  `isDeleted` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` bigint(20) NOT NULL DEFAULT '1',
  `createdDtm` datetime NOT NULL,
  `updatedBy` bigint(20) DEFAULT NULL,
  `updatedDtm` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_roles`
--

CREATE TABLE `tbl_roles` (
  `roleId` tinyint(4) NOT NULL COMMENT 'role id',
  `role` varchar(50) NOT NULL COMMENT 'role text'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_roles`
--

INSERT INTO `tbl_roles` (`roleId`, `role`) VALUES
(1, 'System Administrator'),
(2, 'Manager'),
(3, 'Employee');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `userId` int(11) NOT NULL,
  `email` varchar(128) NOT NULL COMMENT 'login email',
  `password` varchar(128) NOT NULL COMMENT 'hashed login password',
  `name` varchar(128) DEFAULT NULL COMMENT 'full name of user',
  `mobile` varchar(20) DEFAULT NULL,
  `roleId` tinyint(4) NOT NULL,
  `isDeleted` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDtm` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDtm` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`userId`, `email`, `password`, `name`, `mobile`, `roleId`, `isDeleted`, `createdBy`, `createdDtm`, `updatedBy`, `updatedDtm`) VALUES
(1, 'admin@swastivinayakaart.co.in', '$2y$10$SAvFim22ptA9gHVORtIaru1dn9rhgerJlJCPxRNA02MjQaJnkxawq', 'System Administrator', '9890098900', 1, 0, 0, '2015-07-01 18:56:49', 1, '2017-06-19 09:22:53'),
(2, 'manager@bewithdhanu.in', '$2y$10$Gkl9ILEdGNoTIV9w/xpf3.mSKs0LB1jkvvPKK7K0PSYDsQY7GE9JK', 'Manager', '9890098900', 2, 0, 1, '2016-12-09 17:49:56', 1, '2017-06-19 09:22:29'),
(3, 'employee@bewithdhanu.in', '$2y$10$MB5NIu8i28XtMCnuExyFB.Ao1OXSteNpCiZSiaMSRPQx1F1WLRId2', 'Employee', '9890098900', 3, 0, 1, '2016-12-09 17:50:22', 1, '2017-06-19 09:23:21');

-- --------------------------------------------------------

--
-- Table structure for table `team_data`
--

CREATE TABLE `team_data` (
  `team_id` int(11) NOT NULL,
  `team_director_name` varchar(200) NOT NULL,
  `team_director_designation` varchar(200) NOT NULL,
  `team_document_type` int(11) NOT NULL,
  `team_document_no` int(11) NOT NULL,
  `create_date` varchar(100) NOT NULL,
  `modify_date` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team_data`
--

INSERT INTO `team_data` (`team_id`, `team_director_name`, `team_director_designation`, `team_document_type`, `team_document_no`, `create_date`, `modify_date`, `status`) VALUES
(1, 'MR. MADHUSUDAN LOHIA ', 'INDEPENDENT DIRECTOR ', 6, 2, '05-01-2022 09:07:27am', '05-01-2022 09:07:52am', 1),
(2, 'MR. SANJIV VISHWANATH RUNGTA', 'INDEPENDENT DIRECTOR', 6, 2, '05-01-2022 09:08:31am', '05-01-2022 09:08:31am', 1),
(3, 'MR. RAKESH KUMAR GARODIA ', 'INDEPENDENT DIRECTOR', 6, 2, '05-01-2022 09:08:51am', '05-01-2022 09:08:51am', 1),
(4, 'MS. RHEA DINESH PODDAR', 'WHOLE TIME DIRECTOR ', 6, 2, '05-01-2022 09:09:23am', '06-04-2022 09:39:20am', 1),
(5, 'MR. ARYAN RAJESH PODDAR ', 'DIRECTOR', 6, 2, '05-01-2022 09:09:51am', '05-01-2022 09:09:51am', 1),
(6, 'MRS. SHILPA DINESH PODDAR', 'WHOLE TIME DIRECTOR', 6, 2, '05-01-2022 09:10:20am', '06-04-2022 09:39:30am', 1),
(7, 'MR. RAJESH RAMPRASAD PODDAR ', 'JOINT MANAGING DIRECTOR', 6, 2, '05-01-2022 09:10:36am', '06-04-2022 09:40:06am', 1),
(8, 'MR. DINESH RAMPRASAD PODDAR', 'CHAIRMAN AND MANAGING DIRECTOR ', 6, 2, '05-01-2022 09:11:02am', '05-01-2022 09:11:02am', 1),
(9, 'MR. SHANTARAM SITARAM SHINDE', 'CHIEF FINANCIAL OFFICER ', 7, 2, '05-01-2022 09:12:02am', '05-01-2022 09:12:02am', 1),
(10, 'MS. RIDDHI NITIN VAITY ', 'COMPANY SECRETARY CUM COMPLIANCE OFFICER', 7, 2, '05-01-2022 09:12:27am', '05-01-2022 09:12:27am', 1),
(11, 'MR. RAJESH RAMPRASAD PODDAR ', 'MEMBER - JOINT MANAGING DIRECTOR', 8, 2, '05-01-2022 09:13:29am', '06-04-2022 09:41:20am', 1),
(12, 'MR. MADHUSUDAN LOHIA ', 'MEMBER - INDEPENDENT DIRECTOR', 8, 2, '05-01-2022 09:14:01am', '05-01-2022 09:14:01am', 1),
(13, 'MR. SANJIV VISHWANATH RUNGTA ', 'CHAIRPERSON - INDEPENDENT DIRECTOR', 8, 2, '05-01-2022 09:14:23am', '05-01-2022 09:14:23am', 1),
(14, 'MR. ARYAN RAJESH PODDAR ', 'MEMBER - NON EXECUTIVE NON INDEPENDENT DIRECTOR ', 10, 2, '05-01-2022 09:15:23am', '06-04-2022 09:46:40am', 1),
(15, 'MR. SANJIV VISHWANATH RUNGTA', 'MEMBER - INDEPENDENT DIRECTOR ', 10, 2, '05-01-2022 09:15:43am', '06-04-2022 09:43:56am', 1),
(16, 'MR. MADHUSUDAN LOHIA', 'CHAIRPERSON - INDEPENDENT DIRECTOR ', 10, 2, '05-01-2022 09:16:12am', '06-04-2022 09:43:17am', 1),
(17, 'MR. DINESH RAMPRASAD PODDAR ', 'MEMBER - EXECUTIVE DIRECTOR (CHAIRMAN & MD)', 9, 2, '05-01-2022 09:16:12am', '05-01-2022 09:18:36am', 1),
(18, 'MR. RAJESH RAMPRASAD PODDAR', 'MEMBER - JOINT MANAGING DIRECTOR', 9, 2, '05-01-2022 09:19:05am', '06-04-2022 09:49:32am', 1),
(19, 'MR. RAKESH KUMAR GARODIA', 'CHAIRPERSON - INDEPENDENT DIRECTOR', 9, 2, '05-01-2022 09:19:42am', '06-04-2022 09:48:45am', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_data`
--
ALTER TABLE `contact_data`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `document_type_data`
--
ALTER TABLE `document_type_data`
  ADD PRIMARY KEY (`document_type_id`);

--
-- Indexes for table `document_upload_data`
--
ALTER TABLE `document_upload_data`
  ADD PRIMARY KEY (`document_upload_id`);

--
-- Indexes for table `tbl_items`
--
ALTER TABLE `tbl_items`
  ADD PRIMARY KEY (`itemId`);

--
-- Indexes for table `tbl_reset_password`
--
ALTER TABLE `tbl_reset_password`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  ADD PRIMARY KEY (`roleId`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `team_data`
--
ALTER TABLE `team_data`
  ADD PRIMARY KEY (`team_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_data`
--
ALTER TABLE `contact_data`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `document_type_data`
--
ALTER TABLE `document_type_data`
  MODIFY `document_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `document_upload_data`
--
ALTER TABLE `document_upload_data`
  MODIFY `document_upload_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT for table `tbl_items`
--
ALTER TABLE `tbl_items`
  MODIFY `itemId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_reset_password`
--
ALTER TABLE `tbl_reset_password`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  MODIFY `roleId` tinyint(4) NOT NULL AUTO_INCREMENT COMMENT 'role id', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `team_data`
--
ALTER TABLE `team_data`
  MODIFY `team_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
