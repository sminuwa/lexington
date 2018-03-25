-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2018 at 09:18 PM
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
  `content_size` varchar(50) DEFAULT NULL,
  `content_date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `content_date_modified` datetime NOT NULL,
  `content_created_by` int(50) NOT NULL,
  `content_modified_by` int(50) NOT NULL,
  `course_id` int(50) NOT NULL,
  `content_category_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lib_contents`
--

INSERT INTO `lib_contents` (`content_id`, `content_type_id`, `content_name`, `content_size`, `content_date_created`, `content_date_modified`, `content_created_by`, `content_modified_by`, `course_id`, `content_category_id`) VALUES
(1, 2, 'content1', '23kb', '2018-03-25 09:17:32', '2018-03-27 00:00:00', 1, 1, 1, 1),
(2, 1, 'content2', '54kb', '2018-03-25 09:17:32', '2018-03-27 00:00:00', 1, 1, 1, 2),
(3, 3, 'content3', '54kb', '2018-03-25 09:17:32', '2018-03-27 00:00:00', 1, 1, 1, 2),
(4, 1, 'content4', '54kb', '2018-03-25 09:17:32', '2018-03-27 00:00:00', 1, 1, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `lib_contents_category`
--

CREATE TABLE `lib_contents_category` (
  `content_category_id` int(50) NOT NULL,
  `content_category_name` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lib_contents_category`
--

INSERT INTO `lib_contents_category` (`content_category_id`, `content_category_name`) VALUES
(1, 'Handout'),
(2, 'Book'),
(3, 'Past Question Paper'),
(4, 'Marking Scheme'),
(5, 'Journal');

-- --------------------------------------------------------

--
-- Table structure for table `lib_contents_type`
--

CREATE TABLE `lib_contents_type` (
  `content_type_id` int(50) NOT NULL,
  `content_type_name` varchar(100) CHARACTER SET latin1 NOT NULL,
  `content_type_picture` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lib_contents_type`
--

INSERT INTO `lib_contents_type` (`content_type_id`, `content_type_name`, `content_type_picture`) VALUES
(1, 'pdf', ''),
(2, 'word', ''),
(3, 'excel', ''),
(4, 'image', ''),
(5, 'video', ''),
(6, 'audio', '');

-- --------------------------------------------------------

--
-- Table structure for table `lib_courses`
--

CREATE TABLE `lib_courses` (
  `course_id` int(50) NOT NULL,
  `course_code` varchar(50) CHARACTER SET latin1 NOT NULL,
  `course_title` varchar(255) CHARACTER SET latin1 NOT NULL,
  `course_rating` int(50) NOT NULL,
  `programme_id` int(50) NOT NULL,
  `course_unit` int(50) NOT NULL,
  `course_level` int(50) NOT NULL,
  `course_semester` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lib_courses`
--

INSERT INTO `lib_courses` (`course_id`, `course_code`, `course_title`, `course_rating`, `programme_id`, `course_unit`, `course_level`, `course_semester`) VALUES
(1, 'DPA101', 'Computer and Information Processing', 4, 1, 2, 100, 'First Semester'),
(2, 'DPA102', 'Network and the Internet', 3, 1, 1, 100, 'Second Semester'),
(3, 'DPA103', 'Object Oriented Analysis and Design', 4, 1, 3, 200, 'First Semester'),
(4, 'DPA104', 'Network and the Internet', 4, 1, 3, 100, 'First Semester'),
(5, 'DPA105', 'Object Oriented Analysis Design', 4, 1, 3, 200, 'First Semester'),
(6, 'DPA105', 'Java Programming', 4, 1, 3, 300, 'Second Semester');

-- --------------------------------------------------------

--
-- Table structure for table `lib_departments`
--

CREATE TABLE `lib_departments` (
  `department_id` int(50) NOT NULL,
  `department_name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `department_rating` int(50) NOT NULL,
  `faculty_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lib_departments`
--

INSERT INTO `lib_departments` (`department_id`, `department_name`, `department_rating`, `faculty_id`) VALUES
(1, 'Mathematics Department', 5, 1),
(2, 'DEPARTMENT OF HISTORY & DIPLOMATIC STUDIES', 5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `lib_faculties`
--

CREATE TABLE `lib_faculties` (
  `faculty_id` int(50) NOT NULL,
  `faculty_name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `faculty_rating` int(50) NOT NULL,
  `school_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lib_faculties`
--

INSERT INTO `lib_faculties` (`faculty_id`, `faculty_name`, `faculty_rating`, `school_id`) VALUES
(1, 'Faculty of Science', 5, 1),
(2, 'Faculty of Education', 3, 1),
(3, 'Faculty of Humanities', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `lib_pins`
--

CREATE TABLE `lib_pins` (
  `pin_id` int(50) NOT NULL,
  `pin_code` varchar(100) CHARACTER SET latin1 NOT NULL,
  `pin_date_generated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(50) NOT NULL,
  `validity` int(50) NOT NULL,
  `school_id` int(50) NOT NULL,
  `user_type_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lib_pins`
--

INSERT INTO `lib_pins` (`pin_id`, `pin_code`, `pin_date_generated`, `status`, `validity`, `school_id`, `user_type_id`) VALUES
(1, 'LIB001', '2018-03-20 06:55:21', 1, 1, 1, 1),
(2, 'LIB002', '2018-03-20 06:55:21', 1, 1, 1, 1),
(3, 'LIB003', '2018-03-20 06:55:21', 1, 1, 1, 1),
(4, 'LIB004', '2018-03-20 06:55:21', 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `lib_programmes`
--

CREATE TABLE `lib_programmes` (
  `programme_id` int(50) NOT NULL,
  `programme_name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `programme_rating` int(50) NOT NULL,
  `department_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lib_programmes`
--

INSERT INTO `lib_programmes` (`programme_id`, `programme_name`, `programme_rating`, `department_id`) VALUES
(1, 'Mathematics Education', 4, 1),
(2, 'Mass Communication', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `lib_schools`
--

CREATE TABLE `lib_schools` (
  `school_id` int(50) NOT NULL,
  `school_name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `school_rating` int(50) NOT NULL,
  `school_type_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lib_schools`
--

INSERT INTO `lib_schools` (`school_id`, `school_name`, `school_rating`, `school_type_id`) VALUES
(1, 'Abubakar Tafawa Balewa University', 1, 1),
(2, 'Ahmadu Bello University, Zaria', 1, 1),
(3, 'Bayero University, Kano', 1, 1),
(4, 'Federal University of Petroleum Resources, Effurun, Delta State', 1, 1),
(5, 'Federal University of Technology Yola', 1, 1),
(6, 'Federal University of Technology, Akure', 1, 1),
(7, 'Federal University of Technology, Minna', 1, 1),
(8, 'Federal University of Technology, Owerri', 1, 1),
(9, 'Federal University, Dutse, Jigawa State', 1, 1),
(10, 'Federal University, Dutsin-Ma, Katsina', 1, 1),
(11, 'Federal University, Keshere, Gombe State', 1, 1),
(12, 'Federal University, Lafia, Nasarawa State', 1, 1),
(13, 'Federal University, Lokoja, Kogi State', 1, 1),
(14, 'Federal University, Ndufu-Alike, Ebonyi State', 1, 1),
(15, 'Federal University, Otuoke, Bayelsa', 1, 1),
(16, 'Federal University, Oye-Ekiti, Ekiti State', 1, 1),
(17, 'Federal University, Wukari, Taraba State', 1, 1),
(18, 'Michael Okpara Uni. of Agric., Umudike', 1, 1),
(19, 'National Open University of Nigeria, Lagos', 1, 1),
(20, 'Nigerian Defence Academy,Kaduna', 1, 1),
(21, 'Nnamdi Azikiwe University, Awka', 1, 1),
(22, 'Obafemi Awolowo University,Ile-Ife', 1, 1),
(23, 'University of Abuja, Gwagwalada', 1, 1),
(24, 'University of Agriculture, Abeokuta', 1, 1),
(25, 'University of Agriculture, Makurdi', 1, 1),
(26, 'University of Benin', 1, 1),
(27, 'University of Calabar', 1, 1),
(28, 'University of Ibadan', 1, 1),
(29, 'University of Ilorin', 1, 1),
(30, 'University of Jos', 1, 1),
(31, 'University of Lagos', 1, 1),
(32, 'University of Maiduguri', 1, 1),
(33, 'University of Nigeria, Nsukka', 1, 1),
(34, 'University of Port-Harcourt', 1, 1),
(35, 'University of Uyo', 1, 1),
(36, 'Usuman Danfodiyo University', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `lib_schools_type`
--

CREATE TABLE `lib_schools_type` (
  `school_type_id` int(50) NOT NULL,
  `school_type_name` varchar(100) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lib_schools_type`
--

INSERT INTO `lib_schools_type` (`school_type_id`, `school_type_name`) VALUES
(1, 'College'),
(2, 'Polytechnic'),
(3, 'University');

-- --------------------------------------------------------

--
-- Table structure for table `lib_users`
--

CREATE TABLE `lib_users` (
  `user_id` int(50) NOT NULL,
  `user_name` varchar(100) CHARACTER SET latin1 NOT NULL,
  `user_pass` varchar(100) CHARACTER SET latin1 NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_init` int(50) DEFAULT NULL,
  `pin_id` int(50) NOT NULL,
  `user_type_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lib_users`
--

INSERT INTO `lib_users` (`user_id`, `user_name`, `user_pass`, `user_email`, `user_init`, `pin_id`, `user_type_id`) VALUES
(5, 'elson734', '463cde9a6c5f164f9b50684353bdfc75', 'elson734@yahoo.com', 0, 1, 1),
(6, 'Musa', 'e10adc3949ba59abbe56e057f20f883e', 'musaaliyu@lmclf@org', 0, 3, 1),
(7, 'madoggs', '2e45c57efa132ed1dd257af074717264', 'madoggs2012@gmail.com', 1, 4, 1),
(11, 'sminuwa', '81dc9bdb52d04dc20036dbd8313ed055', 'sminuwa@yahoo.com', 1, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `lib_users_privileges`
--

CREATE TABLE `lib_users_privileges` (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `lib_users_profile`
--

CREATE TABLE `lib_users_profile` (
  `user_id` int(50) NOT NULL,
  `fullname` varchar(100) CHARACTER SET latin1 NOT NULL,
  `registration_no` varchar(100) CHARACTER SET latin1 NOT NULL,
  `gender` varchar(100) CHARACTER SET latin1 NOT NULL,
  `faculty_id` int(50) NOT NULL,
  `department_id` int(50) NOT NULL,
  `programme_id` int(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `picture` varchar(100) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lib_users_profile`
--

INSERT INTO `lib_users_profile` (`user_id`, `fullname`, `registration_no`, `gender`, `faculty_id`, `department_id`, `programme_id`, `dob`, `picture`) VALUES
(5, 'sam', 'adah', 'i.', 1, 1, 2, '03/24/2018', 'profile_picture.png'),
(7, 'Abdulrahman', 'Madugu', 'Ibrahim', 1, 1, 1, '03/24/2018', 'profile_picture.png'),
(11, 'Sunusi Mohd Inuwa', '230810030059', 'Female', 1, 1, 1, '03/25/2018', 'profile_picture.png');

-- --------------------------------------------------------

--
-- Table structure for table `lib_users_roles`
--

CREATE TABLE `lib_users_roles` (
  `user_id` int(11) NOT NULL,
  `user_role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `lib_users_type`
--

CREATE TABLE `lib_users_type` (
  `user_type_id` int(50) NOT NULL,
  `user_type_name` varchar(100) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lib_users_type`
--

INSERT INTO `lib_users_type` (`user_type_id`, `user_type_name`) VALUES
(1, 'Student'),
(2, 'Lecturer'),
(3, 'Administrator'),
(4, 'Dean');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lib_contents`
--
ALTER TABLE `lib_contents`
  ADD PRIMARY KEY (`content_id`);

--
-- Indexes for table `lib_contents_category`
--
ALTER TABLE `lib_contents_category`
  ADD PRIMARY KEY (`content_category_id`);

--
-- Indexes for table `lib_contents_type`
--
ALTER TABLE `lib_contents_type`
  ADD PRIMARY KEY (`content_type_id`);

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
-- Indexes for table `lib_schools`
--
ALTER TABLE `lib_schools`
  ADD PRIMARY KEY (`school_id`);

--
-- Indexes for table `lib_schools_type`
--
ALTER TABLE `lib_schools_type`
  ADD PRIMARY KEY (`school_type_id`);

--
-- Indexes for table `lib_users`
--
ALTER TABLE `lib_users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `lib_users_profile`
--
ALTER TABLE `lib_users_profile`
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `lib_users_type`
--
ALTER TABLE `lib_users_type`
  ADD PRIMARY KEY (`user_type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lib_contents`
--
ALTER TABLE `lib_contents`
  MODIFY `content_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `lib_contents_category`
--
ALTER TABLE `lib_contents_category`
  MODIFY `content_category_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `lib_contents_type`
--
ALTER TABLE `lib_contents_type`
  MODIFY `content_type_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `lib_courses`
--
ALTER TABLE `lib_courses`
  MODIFY `course_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `lib_departments`
--
ALTER TABLE `lib_departments`
  MODIFY `department_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `lib_faculties`
--
ALTER TABLE `lib_faculties`
  MODIFY `faculty_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `lib_pins`
--
ALTER TABLE `lib_pins`
  MODIFY `pin_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `lib_programmes`
--
ALTER TABLE `lib_programmes`
  MODIFY `programme_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `lib_schools`
--
ALTER TABLE `lib_schools`
  MODIFY `school_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `lib_schools_type`
--
ALTER TABLE `lib_schools_type`
  MODIFY `school_type_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `lib_users`
--
ALTER TABLE `lib_users`
  MODIFY `user_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `lib_users_type`
--
ALTER TABLE `lib_users_type`
  MODIFY `user_type_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `lib_pins`
--
ALTER TABLE `lib_pins`
  ADD CONSTRAINT `lib_pins_ibfk_1` FOREIGN KEY (`pin_id`) REFERENCES `lib_schools` (`school_id`) ON DELETE CASCADE;

--
-- Constraints for table `lib_users_profile`
--
ALTER TABLE `lib_users_profile`
  ADD CONSTRAINT `lib_users_profile_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `lib_users` (`user_id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
