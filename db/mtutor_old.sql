-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2016 at 05:24 AM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mtutor`
--

-- --------------------------------------------------------

--
-- Table structure for table `activ_log`
--

DROP TABLE IF EXISTS `activ_log`;
CREATE TABLE IF NOT EXISTS `activ_log` (
  `user_type` varchar(10) NOT NULL,
  `u_id` varchar(7) NOT NULL,
  `old_status` varchar(5) DEFAULT NULL,
  `new_status` varchar(5) NOT NULL,
  `action_taken_by` varchar(7) NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bu_master`
--

DROP TABLE IF EXISTS `bu_master`;
CREATE TABLE IF NOT EXISTS `bu_master` (
  `address` varchar(100) DEFAULT NULL,
  `bu_name` varchar(20) NOT NULL,
  `bu_id` varchar(5) NOT NULL,
  `bulogo_path` varchar(250) NOT NULL,
  `pincode` varchar(6) NOT NULL,
  PRIMARY KEY (`bu_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `class_sub_detail`
--

DROP TABLE IF EXISTS `class_sub_detail`;
CREATE TABLE IF NOT EXISTS `class_sub_detail` (
  `cl_id` varchar(4) NOT NULL,
  `sub_id_list` varchar(200) NOT NULL,
  `xmlfilepath` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`cl_id`,`sub_id_list`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `class_master`
--

DROP TABLE IF EXISTS `class_master`;
CREATE TABLE IF NOT EXISTS `class_master` (
  `class_name` varchar(20) NOT NULL,
  `cl_id` varchar(4) NOT NULL,
  PRIMARY KEY (`cl_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `connection`
--

DROP TABLE IF EXISTS `connection`;
CREATE TABLE IF NOT EXISTS `connection` (
  `qr_id` varchar(7) NOT NULL,
  `sid` varchar(5) NOT NULL,
  `tid` varchar(7) NOT NULL,
  `status` varchar(3) NOT NULL,
  `msg_filepath` varchar(255) NOT NULL,
  `mod_reqd` tinyint(1) NOT NULL,
  PRIMARY KEY (`qr_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lang_master`
--

DROP TABLE IF EXISTS `lang_master`;
CREATE TABLE IF NOT EXISTS `lang_master` (
  `lang_id` varchar(5) NOT NULL,
  `lang_name` varchar(10) NOT NULL,
  PRIMARY KEY (`lang_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `limits`
--

DROP TABLE IF EXISTS `limits`;
CREATE TABLE IF NOT EXISTS `limits` (
  `stud_req_limit` int(11) NOT NULL,
  `tutor_req_limit` int(11) NOT NULL,
  `activ_expire_url` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

DROP TABLE IF EXISTS `log`;
CREATE TABLE IF NOT EXISTS `log` (
  `date` date NOT NULL,
  `event` varchar(10) NOT NULL,
  `description` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `m_id` varchar(3) NOT NULL,
  `u_id` varchar(7) NOT NULL,
  `user_type` char(1) NOT NULL,
  `msg_seen` tinyint(1) NOT NULL,
  `msg_type` varchar(2) NOT NULL,
  `sent_date` date NOT NULL,
  `msg_content` varchar(160) NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `msg_templates`
--

DROP TABLE IF EXISTS `msg_templates`;
CREATE TABLE IF NOT EXISTS `msg_templates` (
  `msg_id` varchar(5) NOT NULL,
  `tid` varchar(7) NOT NULL,
  `cl_id` varchar(4) NOT NULL,
  `sub_id` varchar(5) NOT NULL,
  `msg_template` varchar(200) NOT NULL,
  PRIMARY KEY (`msg_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `moderator`
--

DROP TABLE IF EXISTS `moderator`;
CREATE TABLE IF NOT EXISTS `moderator` (
  `m_id` varchar(3) NOT NULL,
  `name` varchar(24) NOT NULL,
  PRIMARY KEY (`m_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pincode`
--

DROP TABLE IF EXISTS `pincode`;
CREATE TABLE IF NOT EXISTS `pincode` (
  `state` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `city` varchar(20) DEFAULT NULL,
  `area` varchar(20) NOT NULL,
  `area_no` varchar(10) NOT NULL,
  `pincode` varchar(6) NOT NULL,
  PRIMARY KEY (`pincode`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `qual_master`
--

DROP TABLE IF EXISTS `qual_master`;
CREATE TABLE IF NOT EXISTS `qual_master` (
  `qid` varchar(4) NOT NULL,
  `degree_name` varchar(20) NOT NULL,
  PRIMARY KEY (`qid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `query_table`
--

DROP TABLE IF EXISTS `query_table`;
CREATE TABLE IF NOT EXISTS `query_table` (
  `qr_id` varchar(7) NOT NULL,
  `cl_id` varchar(4) NOT NULL,
  `s_id` varchar(5) NOT NULL,
  `sub_id` varchar(5) NOT NULL,
  `lang_id` varchar(5) NOT NULL,
  `tuition_type` varchar(1) NOT NULL,
  `location_pref` varchar(20) DEFAULT NULL,
  `timeslot_code` varchar(32) NOT NULL,
  `bu_id` varchar(5) NOT NULL,
  `query_start_date` date NOT NULL,
  `query_expire_date` date NOT NULL,
  `status` varchar(3) NOT NULL,
  `limits` int(11) NOT NULL,
  PRIMARY KEY (`qr_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `query_word_master`
--

DROP TABLE IF EXISTS `query_word_master`;
CREATE TABLE IF NOT EXISTS `query_word_master` (
  `qw_id` varchar(4) NOT NULL,
  `display_word` varchar(10) NOT NULL,
  `cl_id` varchar(4) NOT NULL,
  `sub_id` varchar(5) NOT NULL,
  PRIMARY KEY (`qw_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

DROP TABLE IF EXISTS `registration`;
CREATE TABLE IF NOT EXISTS `registration` (
  `id` varchar(7) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `user_type` char(1) NOT NULL,
  `mob_number` varchar(13) NOT NULL,
  `ac_creation_date` date NOT NULL,
  `activation_url` varchar(100) NOT NULL,
  `active_expiry_date` date NOT NULL,
  `active_status` tinyint(1) NOT NULL,
  PRIMARY KEY (`email`,`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
CREATE TABLE IF NOT EXISTS `reviews` (
  `tid` varchar(7) NOT NULL,
  `sid` varchar(5) NOT NULL,
  `rating` int(1) NOT NULL,
  `comments` varchar(100) DEFAULT NULL,
  `mod_approved` tinyint(1) NOT NULL,
  `mod_update_date` date NOT NULL,
  PRIMARY KEY (`tid`,`sid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `sid` varchar(5) NOT NULL,
  `name` varchar(24) NOT NULL,
  `address` varchar(60) NOT NULL,
  `gender` char(1) NOT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `dob` date NOT NULL,
  `city` varchar(20) NOT NULL,
  `pincode` varchar(6) NOT NULL,
  `mob_number` varchar(13) NOT NULL,
  `landline_number` varchar(11) DEFAULT NULL,
  `mod_reqd` tinyint(1) NOT NULL,
  `last_updated` date NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stud_qual_detail`
--

DROP TABLE IF EXISTS `stud_qual_detail`;
CREATE TABLE IF NOT EXISTS `stud_qual_detail` (
  `sid` varchar(5) NOT NULL,
  `qid` varchar(4) NOT NULL,
  `xml_filepath` varchar(255) NOT NULL,
  PRIMARY KEY (`sid`,`qid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sub_master`
--

DROP TABLE IF EXISTS `sub_master`;
CREATE TABLE IF NOT EXISTS `sub_master` (
  `sub_id` varchar(5) NOT NULL,
  `sub_name` varchar(20) NOT NULL,
  PRIMARY KEY (`sub_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sub_preference`
--

DROP TABLE IF EXISTS `sub_preference`;
CREATE TABLE IF NOT EXISTS `sub_preference` (
  `tid` varchar(7) NOT NULL,
  `cl_id` varchar(4) NOT NULL,
  `sub_id` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tutor`
--

DROP TABLE IF EXISTS `tutor`;
CREATE TABLE IF NOT EXISTS `tutor` (
  `tid` varchar(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `address` int(11) NOT NULL,
  `city` int(11) NOT NULL,
  `pincode` int(11) NOT NULL,
  `about` varchar(160) DEFAULT NULL,
  `own_vehicle` tinyint(1) DEFAULT NULL,
  `rating` int(1) DEFAULT NULL,
  `qid` varchar(5) NOT NULL,
  `mob_number` varchar(13) NOT NULL,
  `land_number` varchar(11) NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `dob` date DEFAULT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tut_qual_detail`
--

DROP TABLE IF EXISTS `tut_qual_detail`;
CREATE TABLE IF NOT EXISTS `tut_qual_detail` (
  `tid` varchar(7) NOT NULL,
  `qid` varchar(3) NOT NULL,
  `xml_filepath` varchar(1024) DEFAULT NULL,
  PRIMARY KEY (`tid`),
  KEY `qid` (`qid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `email` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `user_type` char(1) NOT NULL,
  `mob_number` varchar(13) NOT NULL,
  `status` int(11) NOT NULL,
  `ac_creation_date` date NOT NULL,
  `last_logindate` date NOT NULL,
  `u_id` varchar(7) NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
