-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 23, 2010 at 11:44 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `isvonline`
--

-- --------------------------------------------------------

--
-- Table structure for table `addons`
--

DROP TABLE IF EXISTS `addons`;
CREATE TABLE IF NOT EXISTS `addons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `description` mediumtext NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `addon_combinations`
--

DROP TABLE IF EXISTS `addon_combinations`;
CREATE TABLE IF NOT EXISTS `addon_combinations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `base_combination_id` int(11) NOT NULL,
  `addon_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `base_combination_id` (`base_combination_id`),
  KEY `addon_id` (`addon_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `base_combinations`
--

DROP TABLE IF EXISTS `base_combinations`;
CREATE TABLE IF NOT EXISTS `base_combinations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `destination_id` int(11) NOT NULL,
  `program_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `destination_id` (`destination_id`),
  KEY `program_id` (`program_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

DROP TABLE IF EXISTS `bookings`;
CREATE TABLE IF NOT EXISTS `bookings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `volunteer_id` int(11) NOT NULL,
  `accepted` tinyint(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `payment_id` int(11) NOT NULL,
  `paid` tinyint(1) NOT NULL DEFAULT '0',
  `cancelled` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `volunteer_id` (`volunteer_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='The package booked for a volunteer' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `destinations`
--

DROP TABLE IF EXISTS `destinations`;
CREATE TABLE IF NOT EXISTS `destinations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `name` mediumtext NOT NULL,
  `description` mediumtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

DROP TABLE IF EXISTS `documents`;
CREATE TABLE IF NOT EXISTS `documents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(100) NOT NULL,
  `volunteer_id` int(11) NOT NULL,
  `description` mediumtext NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `checked` tinyint(1) NOT NULL,
  `attachment_file_name` varchar(255) NOT NULL,
  `attachment_file_size` int(11) NOT NULL,
  `attachment_meta_type` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `volunteer_id` (`volunteer_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

DROP TABLE IF EXISTS `donations`;
CREATE TABLE IF NOT EXISTS `donations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `description` mediumtext NOT NULL,
  `amount` decimal(8,2) NOT NULL,
  `reason` mediumtext NOT NULL,
  `volunteer_name` varchar(150) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `payment_id` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `volunteer_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `booking_id` (`booking_id`),
  KEY `volunteer_id` (`volunteer_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ecuador_profiles`
--

DROP TABLE IF EXISTS `ecuador_profiles`;
CREATE TABLE IF NOT EXISTS `ecuador_profiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `volunteer_id` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `volunteer_id` (`volunteer_id`),
  KEY `booking_id` (`booking_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
CREATE TABLE IF NOT EXISTS `employees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `office_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(150) NOT NULL,
  `department` varchar(100) NOT NULL,
  `disabled` tinyint(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `office_id` (`office_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Level 0 (recruiters), Level 1, Level 2, Level 3, Level 4, Le' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

DROP TABLE IF EXISTS `fees`;
CREATE TABLE IF NOT EXISTS `fees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `description` mediumtext NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `line_items`
--

DROP TABLE IF EXISTS `line_items`;
CREATE TABLE IF NOT EXISTS `line_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `booking_id` int(11) NOT NULL,
  `price_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `booking_id` (`booking_id`),
  KEY `price_id` (`price_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

DROP TABLE IF EXISTS `locations`;
CREATE TABLE IF NOT EXISTS `locations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `currency_code` varchar(4) NOT NULL,
  `name` varchar(150) NOT NULL,
  `short_code` varchar(100) NOT NULL,
  `office_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `office_id` (`office_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

DROP TABLE IF EXISTS `menus`;
CREATE TABLE IF NOT EXISTS `menus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `page_id` int(11) NOT NULL,
  `lft` int(11) NOT NULL,
  `rght` int(11) NOT NULL,
  `path` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `parent_id` (`parent_id`),
  KEY `page_id` (`page_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `offices`
--

DROP TABLE IF EXISTS `offices`;
CREATE TABLE IF NOT EXISTS `offices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `location` mediumtext NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='United States, Australia, United Kingdom' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `price_id` int(11) NOT NULL,
  `short_title` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `contents` mediumtext NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `meta_description` int(11) NOT NULL,
  `meta_keywords` int(11) NOT NULL,
  `location_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `price_id` (`price_id`),
  KEY `location_id` (`location_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `prices`
--

DROP TABLE IF EXISTS `prices`;
CREATE TABLE IF NOT EXISTS `prices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `foreign_id` int(11) NOT NULL,
  `foreign_model` varchar(10) NOT NULL,
  `location_id` int(11) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `hidden` tinyint(1) DEFAULT '0',
  `active` tinyint(1) DEFAULT NULL,
  `expires` date NOT NULL,
  `activates` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `foreign_id` (`foreign_id`),
  KEY `location_id` (`location_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

DROP TABLE IF EXISTS `programs`;
CREATE TABLE IF NOT EXISTS `programs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `description` mediumtext NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `promos`
--

DROP TABLE IF EXISTS `promos`;
CREATE TABLE IF NOT EXISTS `promos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `description` mediumtext NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `expires` date NOT NULL,
  `activates` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `recruiter_meetings`
--

DROP TABLE IF EXISTS `recruiter_meetings`;
CREATE TABLE IF NOT EXISTS `recruiter_meetings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `time` datetime NOT NULL,
  `location` mediumtext NOT NULL,
  `school_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `school_id` (`school_id`),
  KEY `employee_id` (`employee_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `description` mediumtext NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

DROP TABLE IF EXISTS `schools`;
CREATE TABLE IF NOT EXISTS `schools` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `location` mediumtext NOT NULL,
  `office_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `office_id` (`office_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `signups`
--

DROP TABLE IF EXISTS `signups`;
CREATE TABLE IF NOT EXISTS `signups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `volunteer_id` int(11) NOT NULL,
  `school_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `volunteer_id` (`volunteer_id`),
  KEY `school_id` (`school_id`),
  KEY `employee_id` (`employee_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `spanish_profiles`
--

DROP TABLE IF EXISTS `spanish_profiles`;
CREATE TABLE IF NOT EXISTS `spanish_profiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `proficiency_level` varchar(255) NOT NULL,
  `homestay` tinyint(1) NOT NULL,
  `volunteer_id` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `volunteer_id` (`volunteer_id`),
  KEY `booking_id` (`booking_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(140) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(150) NOT NULL,
  `role_id` int(11) NOT NULL,
  `location_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `role_id` (`role_id`),
  KEY `location_id` (`location_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `volunteers`
--

DROP TABLE IF EXISTS `volunteers`;
CREATE TABLE IF NOT EXISTS `volunteers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `last_name` varchar(150) NOT NULL,
  `first_name` varchar(150) NOT NULL,
  `middle_name` varchar(150) NOT NULL,
  `nickname` varchar(150) NOT NULL,
  `current_address` varchar(150) NOT NULL,
  `current_city` varchar(150) NOT NULL,
  `current_state` varchar(150) NOT NULL,
  `current_zip` varchar(9) NOT NULL,
  `current_country` varchar(150) NOT NULL,
  `permanent_address` varchar(150) NOT NULL,
  `permanent_city` varchar(150) NOT NULL,
  `permanent_state` varchar(50) NOT NULL,
  `permanent_zip` varchar(9) NOT NULL,
  `permanent_country` varchar(150) NOT NULL,
  `passport` varchar(150) NOT NULL,
  `passport_country` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `last_login` datetime NOT NULL,
  `referral` mediumtext NOT NULL,
  `phone` varchar(15) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` int(11) NOT NULL,
  `mobile_phone` varchar(10) NOT NULL,
  `university` varchar(150) NOT NULL,
  `university_major` varchar(150) NOT NULL,
  `country_of_birth` varchar(150) NOT NULL,
  `country_of_residence` varchar(150) NOT NULL,
  `citizenship` varchar(150) NOT NULL,
  `alternate_email` varchar(150) NOT NULL,
  `primary_emergency_contact` varchar(150) NOT NULL,
  `primary_emergency_relationship` varchar(150) NOT NULL,
  `primary_emergency_phone` varchar(15) NOT NULL,
  `primary_emergency_email` varchar(150) NOT NULL,
  `secondary_emergency_contact` varchar(150) NOT NULL,
  `secondary_emergency_relationship` varchar(150) NOT NULL,
  `secondary_emergency_phone` varchar(15) NOT NULL,
  `secondary_emergency_email` varchar(150) NOT NULL,
  `grade_level` varchar(150) NOT NULL,
  `medical_conditions` varchar(150) NOT NULL,
  `medical_condition_comments` mediumtext NOT NULL,
  `allergies` varchar(150) NOT NULL,
  `allergies_comments` mediumtext NOT NULL,
  `hospitalization` varchar(100) NOT NULL,
  `hospitalization_comments` mediumtext NOT NULL,
  `prescription_medication` varchar(150) NOT NULL,
  `prescription_medication_comments` mediumtext NOT NULL,
  `diet` varchar(150) NOT NULL,
  `diet_comments` mediumtext NOT NULL,
  `shirt_size` varchar(50) NOT NULL,
  `date_summer` date NOT NULL,
  `date_fall` date NOT NULL,
  `hobbies` mediumtext NOT NULL,
  `project_preference` varchar(200) NOT NULL,
  `interests` varchar(150) NOT NULL,
  `location_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `location_id` (`location_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
