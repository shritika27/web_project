-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2018 at 08:11 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `diagnostic_lab`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `ad_email` varchar(255) NOT NULL,
  `ad_pass` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `ad_email`, `ad_pass`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `appoinment`
--

CREATE TABLE IF NOT EXISTS `appoinment` (
  `id` int(255) NOT NULL,
  `doctor_id` varchar(255) NOT NULL,
  `doctor_app_date` varchar(255) NOT NULL,
  `doctor_app_mtime` varchar(255) NOT NULL,
  `doctor_app_etime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE IF NOT EXISTS `appointment` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `dia_id` varchar(255) NOT NULL,
  `dia_app_date` varchar(255) NOT NULL,
  `dia_app_mtime` varchar(255) NOT NULL,
  `dia_app_etime` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `contact_information`
--

CREATE TABLE IF NOT EXISTS `contact_information` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `message` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `site_fb` varchar(255) NOT NULL,
  `site_twitter` varchar(255) NOT NULL,
  `site_g+` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `contact_information`
--

INSERT INTO `contact_information` (`id`, `message`, `location`, `email`, `contact`, `site_fb`, `site_twitter`, `site_g+`) VALUES
(1, 'jghghjgjg', 'jjhgjhgjhgj', 'saurabh.infoseek@gmail.com', '2147483647', 'https://www.facebook.com/', 'https://twitter.com/login?lang=en', 'https://plus.google.com/discover');

-- --------------------------------------------------------

--
-- Table structure for table `daignostic_center`
--

CREATE TABLE IF NOT EXISTS `daignostic_center` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `dia_name` varchar(255) NOT NULL,
  `dia_contnum` varchar(255) NOT NULL,
  `dia_email` varchar(255) NOT NULL,
  `dia_pass` varchar(255) NOT NULL,
  `dia_loc` varchar(255) NOT NULL,
  `dia_secqus` varchar(255) NOT NULL,
  `dia_secans` varchar(255) NOT NULL,
  `dia_bookingprice` varchar(255) NOT NULL,
  `dia_pro` varchar(255) NOT NULL,
  `dia_govapprove` varchar(255) NOT NULL,
  `dia_dateapprove` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `dia_email` (`dia_email`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `daignostic_center`
--

INSERT INTO `daignostic_center` (`id`, `dia_name`, `dia_contnum`, `dia_email`, `dia_pass`, `dia_loc`, `dia_secqus`, `dia_secans`, `dia_bookingprice`, `dia_pro`, `dia_govapprove`, `dia_dateapprove`) VALUES
(1, 'CHARAK HOSPITAL AND RESEARCH CENTRE', '8756600566', 'charakhospital@gmail.com', '1234', '569/147ka, Bargawan, LdA Turn, Behind Balaji Complex, Kanpur Road, Lucknow-226012', 'your best friend name', 'saurabh', '200', '150720161155299711529498527.jpg', 'yes', '2014-09-10'),
(2, 'PANKAJ ENT HOSPITAL', '8756600577', 'pankaj@gmail.com', '1234', '56-C, Sringar Nagar, Alambagh, Lucknow', 'your best friend name', 'saurabh', '200', 'pankhos299.jpg', 'yes', '2010-09-10'),
(3, 'PRAKASH NETRA KENDRA', '8989783434', 'prakash@gmail.com', '1234', 'NH-2 , Vipul Khand-IV, Gomti Nagar, Lucknow-226010', 'your best friend name', 'saurabh', '250', 'prak_netra9498527.jpg', 'yes', '1991-09-10'),
(4, 'PRECISION UROLOGY HOSPITAL', '6767898756', 'hospital@gmail.com', '1234', '652 B/37, Pratap Nagar,Ring Road Near Crown Palace, Tedhi Pulia, LUcknow', 'your best friend name', 'saurabh', '200', 'PRECISION711529498527.jpg', 'yes', '2014-09-10'),
(5, 'VISION EYE CARE', '8789345665', 'vision_eye@gmail.com', '1234', 'I.I.M. Road, Mutakkipur, Near I.I.M. Chauraha, Sitapur Road, Lucknow', 'your best friend name', 'saurabh', '200', 'vision711529498527.jpg', 'yes', '2014-09-10'),
(6, 'SUN EYE HOSPITAL AND LASER CENTRE PVT. LTD', '8789345665', 'sun_eye@gmail.com', '1234', 'B, 57, Sringar Nagar Rd, Singar Nagar, Alambagh, Lucknow, 226005', 'your best friend name', 'saurabh', '200', 'suneye432d29498527.jpg', 'yes', '2014-09-10');

-- --------------------------------------------------------

--
-- Table structure for table `dia_report`
--

CREATE TABLE IF NOT EXISTS `dia_report` (
  `report_id` int(255) NOT NULL AUTO_INCREMENT,
  `dia_id` varchar(255) NOT NULL,
  `patient_id` varchar(255) NOT NULL,
  `patient_problem` varchar(255) NOT NULL,
  `patient_report` varchar(255) NOT NULL,
  PRIMARY KEY (`report_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `dia_report`
--

INSERT INTO `dia_report` (`report_id`, `dia_id`, `patient_id`, `patient_problem`, `patient_report`) VALUES
(1, '2', '2', 'headache', 'medicine name--bicosule'),
(2, '2', '2', 'headache', 'jhbhbjnk,'),
(3, '2', '2', 'headache', '<pre>vcbcvbcvb</pre>'),
(4, '2', '2', 'headache', '<pre>zczxczxm,ckhkcfds</pre>');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE IF NOT EXISTS `doctor` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `dr_name` varchar(255) NOT NULL,
  `dr_gender` varchar(255) NOT NULL,
  `dr_contactnumber` varchar(255) NOT NULL,
  `dr_email` varchar(255) NOT NULL,
  `dr_pass` varchar(255) NOT NULL,
  `dr_qualification` varchar(255) NOT NULL,
  `dr_specialization` varchar(255) NOT NULL,
  `dr_worklocation` varchar(255) NOT NULL,
  `dr_sec_question` varchar(255) NOT NULL,
  `dr_sec_answer` varchar(255) NOT NULL,
  `dr_bookingprice` varchar(255) NOT NULL,
  `dr_profile` varchar(255) NOT NULL,
  `dr_fb_link` varchar(255) NOT NULL,
  `dr_twitter_link` varchar(255) NOT NULL,
  `dr_google_link` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `dr_email` (`dr_email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `dr_name`, `dr_gender`, `dr_contactnumber`, `dr_email`, `dr_pass`, `dr_qualification`, `dr_specialization`, `dr_worklocation`, `dr_sec_question`, `dr_sec_answer`, `dr_bookingprice`, `dr_profile`, `dr_fb_link`, `dr_twitter_link`, `dr_google_link`) VALUES
(1, 'AANCHAL GARG', 'female', '9867567687', 'aanchal@gmail.com', '1234', 'MBBS', 'DNB', 'Lucknow', 'your best friend name', 'saurabh', '122', 'AANCHAL1529496766.jpg', 'https://www.facebook.com/', '', ''),
(2, 'SUNNY YADAV', 'male', '7867678876', 'sunny@gmail.com', '1234', 'MBBS', 'Eye Surgery', 'Lucknow', 'your best friend name', 'saurabh', '123', 'sunny1529496906.jpg', '', '', ''),
(3, 'ARTI ELHENCE', 'female', '8867767878', 'arti@gmail.com', '1234', 'MBBS', 'Bone & Joint Disorders (Orthopedics)', 'Lucknow', 'your best friend name', 'saurabh', '200', 'arti1529496906.jpg', '', '', ''),
(4, 'ANUPAM PURWAR', 'male', '8867764555', 'anupam@gmail.com', '1234', 'MBBS', 'Eye Surgery (Ophthalmology)', 'Lucknow', 'your best friend name', 'saurabh', '200', 'anupam1529496906.jpg', '', '', ''),
(5, 'RICHA SINGH', 'female', '8989677854', 'richa@gmail.com', '1234', 'MS', 'Eye Surgery (Ophthalmology)', 'Lucknow', 'your best friend name', 'saurabh', '100', 'richa9496906.jpg', '', '', ''),
(6, 'SUDHIR SRIVASTAVA', 'male', '8867764544', 'sudhir@gmail.com', '1234', 'MS (Ophthalmology), KGMU, Lucknow', 'Eye Surgery (Ophthalmology)', 'Lucknow', 'your best friend name', 'saurabh', '150', 'sudhir9496906.jpg', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `dr_appointment`
--

CREATE TABLE IF NOT EXISTS `dr_appointment` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `doctor_id` varchar(255) NOT NULL,
  `doctor_app_date` varchar(255) NOT NULL,
  `doctor_app_mtime` varchar(255) NOT NULL,
  `doctor_app_etime` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `dr_report`
--

CREATE TABLE IF NOT EXISTS `dr_report` (
  `report_id` int(255) NOT NULL AUTO_INCREMENT,
  `dr_id` varchar(255) NOT NULL,
  `patient_id` varchar(255) NOT NULL,
  `patient_problem` varchar(255) NOT NULL,
  `patient_report` varchar(255) NOT NULL,
  PRIMARY KEY (`report_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `dr_report`
--

INSERT INTO `dr_report` (`report_id`, `dr_id`, `patient_id`, `patient_problem`, `patient_report`) VALUES
(1, '1', '1', '1', '1'),
(8, '2', '2', 'headache', '<pre>ddddddddddddddddddddddd\r\nffffffffffffffffffffffffffffffffffff\r\nggggggggggggggggggg</pre>'),
(9, '2', '2', 'headache', '<pre>hjdggfhgdjfsdf</pre>');

-- --------------------------------------------------------

--
-- Table structure for table `get_in_touch`
--

CREATE TABLE IF NOT EXISTS `get_in_touch` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `status` varchar(23) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `get_in_touch`
--

INSERT INTO `get_in_touch` (`id`, `first_name`, `last_name`, `email`, `subject`, `message`, `status`) VALUES
(1, 'Testing', 'User', 'test@gmail.com', 'Test', 'Testing Comment', '0');

-- --------------------------------------------------------

--
-- Table structure for table `patient_registration`
--

CREATE TABLE IF NOT EXISTS `patient_registration` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `patient_name` varchar(255) NOT NULL,
  `patient_gender` varchar(255) NOT NULL,
  `patient_contactnumber` varchar(255) NOT NULL,
  `patient_email` varchar(255) NOT NULL,
  `patient_pass` varchar(255) NOT NULL,
  `patient_group` varchar(255) NOT NULL,
  `patient_problem` varchar(255) NOT NULL,
  `patient_location` varchar(255) NOT NULL,
  `patient_dateofbirth` varchar(255) NOT NULL,
  `patient_sec_ques` varchar(255) NOT NULL,
  `patient_sec_ans` varchar(255) NOT NULL,
  `patient_profile` varchar(255) NOT NULL,
  `patient_fb_link` varchar(255) NOT NULL,
  `patient_twitter_link` varchar(255) NOT NULL,
  `patient_google_link` varchar(255) NOT NULL,
  `patient_review` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `patient_registration`
--

INSERT INTO `patient_registration` (`id`, `patient_name`, `patient_gender`, `patient_contactnumber`, `patient_email`, `patient_pass`, `patient_group`, `patient_problem`, `patient_location`, `patient_dateofbirth`, `patient_sec_ques`, `patient_sec_ans`, `patient_profile`, `patient_fb_link`, `patient_twitter_link`, `patient_google_link`, `patient_review`) VALUES
(1, 'Saurabh Singh', 'male', '8756600566', 'saurabh240195@gmail.com', '12345', 'O+', 'Mental', 'Lucknow', '1995-01-24', 'your fav game', 'Car Racing', 'new_pic1529504543.jpg', '', '', '', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. '),
(2, 'Saubhagya Singh', 'male', '8756600566', 'saurabhsir111@gmail.com', '1234', 'O+', 'Mental', 'Lucknow', '1995-01-24', 'your fav game', 'Car Racing', 'new_pic1529504543.jpg', '', '', '', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. '),
(3, 'Sunny Singh', 'male', '8756600566', 'sunny@gmail.com', '1234', 'O+', 'Mental', 'Lucknow', '1995-01-24', 'your fav game', 'Car Racing', 'sunny29504543.jpg', '', '', '', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. ');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `patient_id` varchar(255) NOT NULL,
  `doctor_id` varchar(255) NOT NULL,
  `dia_id` varchar(255) NOT NULL,
  `payer_email` varchar(255) NOT NULL,
  `booking_date` varchar(255) NOT NULL,
  `business_email` varchar(255) NOT NULL,
  `payment_status` varchar(255) NOT NULL,
  `payment_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `security_question`
--

CREATE TABLE IF NOT EXISTS `security_question` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `sec_ques_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `security_question`
--

INSERT INTO `security_question` (`id`, `sec_ques_name`) VALUES
(2, 'your fav food'),
(3, 'your fav game'),
(4, 'your last school name'),
(5, 'your pet name'),
(6, 'your best friend name');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
