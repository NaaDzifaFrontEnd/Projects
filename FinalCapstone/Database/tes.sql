-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2021 at 07:45 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tes`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(10) NOT NULL,
  `eduname` text NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `eduname`, `comment`) VALUES
(1, 'Mr Sampah', ''),
(2, 'Freda Naa Ayorkor Otoo', ''),
(3, 'Isaac Ocran', 'He was awesome.'),
(4, 'Mr Sampah', 'He is good.'),
(5, 'Isaac Ocran', 'She is great');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(10) NOT NULL,
  `course_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `educators`
--

CREATE TABLE `educators` (
  `educator_id` int(11) NOT NULL,
  `educator_name` text NOT NULL,
  `category` text NOT NULL,
  `pos_course` text NOT NULL,
  `educator_email` text NOT NULL,
  `epassword` varchar(20) NOT NULL,
  `fun_fact` text NOT NULL,
  `ephoto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `educators`
--

INSERT INTO `educators` (`educator_id`, `educator_name`, `category`, `pos_course`, `educator_email`, `epassword`, `fun_fact`, `ephoto`) VALUES
(10560000, 'John Miller', 'Faculty', 'Chemistry', 'jmiller@ashesi.edu.gh', '23fc3b16fbe01ba54323', 'Scuba diver', 'john.jpg'),
(20940000, 'Mercy Jones', '', 'Accounting', 'mercyjones@ashesi.edu.gh', '2bfa498c6052d09e6248', 'Love swimming', 'mercy.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `evaluation`
--

CREATE TABLE `evaluation` (
  `eval_id` int(10) NOT NULL,
  `evaluator_name` text NOT NULL,
  `evaluator_id` int(13) NOT NULL,
  `known_period` varchar(20) NOT NULL,
  `evaluator_email` varchar(250) NOT NULL,
  `educator_name` text NOT NULL,
  `educator_position` text NOT NULL,
  `personalities` int(11) NOT NULL,
  `interaction` int(11) NOT NULL,
  `creativity` int(11) NOT NULL,
  `dependability` int(11) NOT NULL,
  `initiative` int(11) NOT NULL,
  `teamwork` int(11) NOT NULL,
  `org_skills` int(11) NOT NULL,
  `prob_solving` int(11) NOT NULL,
  `differenciation` text NOT NULL,
  `descriptions` text NOT NULL,
  `other` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `evaluation`
--

INSERT INTO `evaluation` (`eval_id`, `evaluator_name`, `evaluator_id`, `known_period`, `evaluator_email`, `educator_name`, `educator_position`, `personalities`, `interaction`, `creativity`, `dependability`, `initiative`, `teamwork`, `org_skills`, `prob_solving`, `differenciation`, `descriptions`, `other`) VALUES
(1, 'Freda Naa Ayorkor Otoo', 15742021, '1-3 years', 'freda.otoo@ashesi.edu.gh', 'EducatorName', '', 0, 0, 0, 0, 0, 0, 0, 0, 'He is nice', 'Professional', 'nope'),
(2, 'Freda Naa Ayorkor Otoo', 15742021, '1-3 years', 'freda.otoo@ashesi.edu.gh', 'EducatorName', '', 0, 0, 0, 0, 0, 0, 0, 0, 'He is nice', 'Professional', 'nope'),
(3, 'Freda Naa Ayorkor Otoo', 15742021, 'over 3 years', 'fredaotoo1@gmail.com', 'EducatorName', '', 0, 0, 0, 0, 0, 0, 0, 0, 'awesome', 'encouraging', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `faculty-course`
--

CREATE TABLE `faculty-course` (
  `faculty_id` int(10) NOT NULL,
  `course_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `star-rating`
--

CREATE TABLE `star-rating` (
  `rating_id` int(5) NOT NULL,
  `rating` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `star-rating`
--

INSERT INTO `star-rating` (`rating_id`, `rating`) VALUES
(0, 'N/A'),
(1, 'Poor'),
(2, 'Below Average'),
(3, 'Average'),
(4, ' Above Average'),
(5, 'Excellent');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(10) NOT NULL,
  `student_name` text NOT NULL,
  `student_major` text NOT NULL,
  `student_email` varchar(100) NOT NULL,
  `student_password` varchar(50) NOT NULL,
  `student_photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `student_name`, `student_major`, `student_email`, `student_password`, `student_photo`) VALUES
(67322023, 'Mercy Jones', 'EE', 'mercyjones@gmail.com', 'bf2ff2ed3c83c3c5ce510c4666f6fb0d', 'mercy.jpg'),
(98452021, 'Monica Day', 'EE', 'mday@gmail.com', '23c54a1e9d5b01f2e7d4f86dd0c85284', 'monica.jpg'),
(98762020, 'Paa Kwaku', 'CS', 'pk23@yahoo.com', '79bed72e8b80e5b238d7de3597e38335', 'org.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `student-course`
--

CREATE TABLE `student-course` (
  `student_id` int(10) NOT NULL,
  `course_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student-course-faculty`
--

CREATE TABLE `student-course-faculty` (
  `student_id` int(10) NOT NULL,
  `course_id` int(10) NOT NULL,
  `faculty_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student-faculty`
--

CREATE TABLE `student-faculty` (
  `student_id` int(10) NOT NULL,
  `faculty_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `educators`
--
ALTER TABLE `educators`
  ADD PRIMARY KEY (`educator_id`);

--
-- Indexes for table `evaluation`
--
ALTER TABLE `evaluation`
  ADD PRIMARY KEY (`eval_id`);

--
-- Indexes for table `star-rating`
--
ALTER TABLE `star-rating`
  ADD PRIMARY KEY (`rating_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `evaluation`
--
ALTER TABLE `evaluation`
  MODIFY `eval_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
