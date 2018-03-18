-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2018 at 02:23 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lexington`
--

-- --------------------------------------------------------

--
-- Table structure for table `lib_contents`
--

CREATE TABLE `lib_contents` (
  `content_id` int(50) NOT NULL,
  `content_type_id` int(50) NOT NULL,
  `content_name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `content_size` int(50) DEFAULT NULL,
  `content_date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `content_date_modified` datetime NOT NULL,
  `content_created_by` int(50) NOT NULL,
  `content_modified_by` int(50) NOT NULL,
  `programme_id` int(50) NOT NULL,
  `programme_rating` int(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `lib_courses`
--

CREATE TABLE `lib_courses` (
  `course_id` int(50) NOT NULL,
  `course_code` varchar(50) CHARACTER SET latin1 NOT NULL,
  `course_name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `course_rating` int(50) NOT NULL,
  `programme_id` int(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `lib_departments`
--

CREATE TABLE `lib_departments` (
  `department_id` int(50) NOT NULL,
  `department_name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `department_rating` int(50) NOT NULL,
  `faculty_id` int(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `lib_faculties`
--

CREATE TABLE `lib_faculties` (
  `faculty_id` int(50) NOT NULL,
  `faculty_name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `faculty_rating` int(50) NOT NULL,
  `university_id` int(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `lib_pins`
--

CREATE TABLE `lib_pins` (
  `pin_id` int(50) NOT NULL,
  `pin_code` varchar(100) NOT NULL,
  `pin_date_generated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lib_programmes`
--

CREATE TABLE `lib_programmes` (
  `programme_id` int(50) NOT NULL,
  `programme_name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `programme_rating` int(50) NOT NULL,
  `department_id` int(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `lib_universities`
--

CREATE TABLE `lib_universities` (
  `university_id` int(50) NOT NULL,
  `university_name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `university_rating` int(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `lib_universities_type`
--

CREATE TABLE `lib_universities_type` (
  `type_id` int(50) NOT NULL,
  `type_name` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lib_user`
--

CREATE TABLE `lib_user` (
  `user_id` int(50) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_pass` varchar(100) NOT NULL,
  `user_pin` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lib_user_privileges`
--

CREATE TABLE `lib_user_privileges` (
  `user_id` int(50) NOT NULL,
  `add_books` int(2) NOT NULL,
  `update_books` int(2) NOT NULL,
  `delete_books` int(2) NOT NULL,
  `view_books` int(2) NOT NULL,
  `add_journals` int(2) NOT NULL,
  `update_journals` int(2) NOT NULL,
  `delete_journals` int(2) NOT NULL,
  `view_journals` int(2) NOT NULL,
  `add_modules` int(2) NOT NULL,
  `update_modules` int(2) NOT NULL,
  `delete_modules` int(2) NOT NULL,
  `view_modules` int(2) NOT NULL,
  `add_projects` int(2) NOT NULL,
  `update_projects` int(2) NOT NULL,
  `delete_projects` int(2) NOT NULL,
  `view_projects` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lib_user_profile`
--

CREATE TABLE `lib_user_profile` (
  `user_id` int(50) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `othername` varchar(100) NOT NULL,
  `picture` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lib_user_roles`
--

CREATE TABLE `lib_user_roles` (
  `user_id` int(11) NOT NULL,
  `user_role` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lib_contents`
--
ALTER TABLE `lib_contents`
  ADD PRIMARY KEY (`content_id`);

--
-- Indexes for table `lib_courses`
--
ALTER TABLE `lib_courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `lib_departments`
--
ALTER TABLE `lib_departments`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `lib_faculties`
--
ALTER TABLE `lib_faculties`
  ADD PRIMARY KEY (`faculty_id`);

--
-- Indexes for table `lib_pins`
--
ALTER TABLE `lib_pins`
  ADD PRIMARY KEY (`pin_id`);

--
-- Indexes for table `lib_programmes`
--
ALTER TABLE `lib_programmes`
  ADD PRIMARY KEY (`programme_id`);

--
-- Indexes for table `lib_universities`
--
ALTER TABLE `lib_universities`
  ADD PRIMARY KEY (`university_id`);

--
-- Indexes for table `lib_universities_type`
--
ALTER TABLE `lib_universities_type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `lib_user`
--
ALTER TABLE `lib_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `lib_user_profile`
--
ALTER TABLE `lib_user_profile`
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lib_contents`
--
ALTER TABLE `lib_contents`
  MODIFY `content_id` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lib_courses`
--
ALTER TABLE `lib_courses`
  MODIFY `course_id` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lib_departments`
--
ALTER TABLE `lib_departments`
  MODIFY `department_id` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lib_faculties`
--
ALTER TABLE `lib_faculties`
  MODIFY `faculty_id` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lib_pins`
--
ALTER TABLE `lib_pins`
  MODIFY `pin_id` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lib_programmes`
--
ALTER TABLE `lib_programmes`
  MODIFY `programme_id` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lib_universities`
--
ALTER TABLE `lib_universities`
  MODIFY `university_id` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lib_universities_type`
--
ALTER TABLE `lib_universities_type`
  MODIFY `type_id` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lib_user`
--
ALTER TABLE `lib_user`
  MODIFY `user_id` int(50) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
