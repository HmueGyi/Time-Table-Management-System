-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2023 at 04:44 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ttms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `password`) VALUES
('admin', 'pass123');

-- --------------------------------------------------------

--
-- Table structure for table `classrooms`
--

CREATE TABLE `classrooms` (
  `name` varchar(30) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classrooms`
--

INSERT INTO `classrooms` (`name`, `status`) VALUES
('Room-202', 1),
('Room-204', 3);

-- --------------------------------------------------------

--
-- Table structure for table `semester1`
--

CREATE TABLE `semester1` (
  `day` varchar(100) NOT NULL,
  `period1` varchar(100) NOT NULL,
  `period2` varchar(100) NOT NULL,
  `period3` varchar(100) NOT NULL,
  `period4` varchar(100) NOT NULL,
  `period5` varchar(100) NOT NULL,
  `period6` varchar(100) NOT NULL,
  `period7` varchar(100) NOT NULL,
  `period8` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `semester1`
--

INSERT INTO `semester1` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`, `period7`, `period8`) VALUES
('Monday', 'Cst-1111<br>Daw Hla', 'CST-1121<br>Daw Yee', 'CST-1142<br>Daw Htet', 'M-1101<br>Daw Thanda', 'E-1101<br>Daw Su', 'P1101<br>DawNweOo', '-<br>-', '-<br>- '),
('Tuesday', 'CST-1142<br>Daw Htet', 'CST-1121<br>Daw Yee', 'M-1101<br>Daw Thanda', 'E-1101<br>Daw Su', 'P1101<br>DawNweOo', 'Cst-1111<br>Daw Hla', '-<br>-', '-<br>- '),
('Wednesday', 'CST-1121<br>Daw Yee', 'M-1101<br>Daw Thanda', 'E-1101<br>Daw Su', 'P1101<br>DawNweOo', 'Cst-1111<br>Daw Hla', 'CST-1142<br>Daw Htet', '-<br>-', '-<br>- '),
('Thursday', 'M-1101<br>Daw Thanda', 'E-1101<br>Daw Su', 'P1101<br>DawNweOo', 'Cst-1111<br>Daw Hla', 'CST-1142<br>Daw Htet', 'CST-1121<br>Daw Yee', '-<br>-', '-<br>- '),
('Friday', 'P1101<br>DawNweOo', 'Cst-1111<br>Daw Hla', 'CST-1121<br>Daw Yee', 'CST-1142<br>Daw Htet', 'M-1101<br>Daw Thanda', 'E-1101<br>Daw Su', '-<br>-', '-<br>- ');

-- --------------------------------------------------------

--
-- Table structure for table `semester3`
--

CREATE TABLE `semester3` (
  `day` varchar(100) NOT NULL,
  `period1` varchar(100) NOT NULL,
  `period2` varchar(100) NOT NULL,
  `period3` varchar(100) NOT NULL,
  `period4` varchar(100) NOT NULL,
  `period5` varchar(100) NOT NULL,
  `period6` varchar(100) NOT NULL,
  `period7` varchar(100) NOT NULL,
  `period8` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `semester3`
--

INSERT INTO `semester3` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`, `period7`, `period8`) VALUES
('Monday', 'eng1011<br>Daw Su', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>- '),
('Tuesday', 'eng1011<br>Daw Su', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>- '),
('Wednesday', 'eng1011<br>Daw Su', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>- '),
('Thursday', 'eng1011<br>Daw Su', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>- '),
('Friday', 'eng1011<br>Daw Su', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>- ');

-- --------------------------------------------------------

--
-- Table structure for table `semester5`
--

CREATE TABLE `semester5` (
  `day` varchar(100) NOT NULL,
  `period1` varchar(100) NOT NULL,
  `period2` varchar(100) NOT NULL,
  `period3` varchar(100) NOT NULL,
  `period4` varchar(100) NOT NULL,
  `period5` varchar(100) NOT NULL,
  `period6` varchar(100) NOT NULL,
  `period7` varchar(100) NOT NULL,
  `period8` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `semester5`
--

INSERT INTO `semester5` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`, `period7`, `period8`) VALUES
('Monday', 'CST-3157<br>Daw Thu Za', 'CST-3142<br>Daw Htet', 'CS-3156<br>Daw Khin', 'CST-3131<br>Daw Hla', 'CST-3113<br>Daw Mu', 'CS-3124<br>Daw Yee', 'CS-3125<br>Daw Tin Za', '-<br>- '),
('Tuesday', 'CS-3156<br>Daw Khin', 'CST-3131<br>Daw Hla', 'CST-3113<br>Daw Mu', 'CS-3124<br>Daw Yee', 'CS-3125<br>Daw Tin Za', 'CST-3157<br>Daw Thu Za', 'CST-3142<br>Daw Htet', '-<br>- '),
('Wednesday', 'CST-3113<br>Daw Mu', 'CS-3124<br>Daw Yee', 'CS-3125<br>Daw Tin Za', 'CST-3157<br>Daw Thu Za', 'CST-3142<br>Daw Htet', 'CS-3156<br>Daw Khin', 'CST-3131<br>Daw Hla', '-<br>- '),
('Thursday', 'CS-3124<br>Daw Yee', 'CS-3125<br>Daw Tin Za', 'CST-3157<br>Daw Thu Za', 'CST-3142<br>Daw Htet', 'CS-3156<br>Daw Khin', 'CST-3131<br>Daw Hla', 'CST-3113<br>Daw Mu', '-<br>- '),
('Friday', 'CS-3125<br>Daw Tin Za', 'CST-3157<br>Daw Thu Za', 'CST-3142<br>Daw Htet', 'CS-3156<br>Daw Khin', 'CST-3131<br>Daw Hla', 'CST-3113<br>Daw Mu', 'CS-3124<br>Daw Yee', '-<br>- ');

-- --------------------------------------------------------

--
-- Table structure for table `semester7`
--

CREATE TABLE `semester7` (
  `day` varchar(100) NOT NULL,
  `period1` varchar(100) NOT NULL,
  `period2` varchar(100) NOT NULL,
  `period3` varchar(100) NOT NULL,
  `period4` varchar(100) NOT NULL,
  `period5` varchar(100) NOT NULL,
  `period6` varchar(100) NOT NULL,
  `period7` varchar(100) NOT NULL,
  `period8` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `semester7`
--

INSERT INTO `semester7` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`, `period7`, `period8`) VALUES
('Monday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>- '),
('Tuesday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>- '),
('Wednesday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>- '),
('Thursday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>- '),
('Friday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>- ');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `subject_code` varchar(10) NOT NULL,
  `subject_name` varchar(50) NOT NULL,
  `course_type` varchar(15) NOT NULL,
  `semester` int(1) NOT NULL,
  `department` varchar(50) NOT NULL,
  `isAlloted` int(1) NOT NULL,
  `allotedto` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subject_code`, `subject_name`, `course_type`, `semester`, `department`, `isAlloted`, `allotedto`) VALUES
('CST-3157', 'Financial management & Accounting', 'THEORY', 5, 'Information Technology Supporting and Mainenance', 1, 'T014'),
('CS-3156', 'Web Development PHP', 'THEORY', 5, 'Information Technology Supporting and Mainenance', 1, 'T013'),
('CST-3113', 'Artifical Intelligence', 'THEORY', 5, 'Computer Science', 1, 'T010'),
('CS-3124', 'System Analysis and Design', 'THEORY', 5, 'Information Science', 1, 'T011'),
('CS-3125', 'Database Management System', 'THEORY', 5, 'Information Science', 1, 'T012'),
('CST-3142', 'Differential Equation and Numerical Analysis', 'THEORY', 5, 'Computing', 1, 'T009'),
('CST-3131', 'Computer Architecture and Organization', 'THEORY', 5, 'Computer System and Technology', 1, 'T008'),
('eng1011', 'English', 'THEORY', 3, 'Language(English)', 1, 'T003'),
('M-1101', 'Myanmar', 'THEORY', 1, 'Language(Myanmar)', 1, 'T002'),
('P1101', 'College Physics', 'THEORY', 1, 'Natual Science(Physics)', 1, 'T005'),
('Cst-1111', 'PIT', 'THEORY', 1, 'Computer Science', 1, 'T008'),
('CST-1142', 'CalcusI', 'THEORY', 1, 'Computing', 1, 'T009'),
('CST-1121', 'SS', 'THEORY', 1, 'Computer Science', 1, 'T011'),
('E-1101', 'English', 'THEORY', 1, 'Language(English)', 1, 'T003');

-- --------------------------------------------------------

--
-- Table structure for table `t001`
--

CREATE TABLE `t001` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL,
  `period7` varchar(30) DEFAULT NULL,
  `period8` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t001`
--

INSERT INTO `t001` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`, `period7`, `period8`) VALUES
('friday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-'),
('monday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-'),
('thursday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-'),
('tuesday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-'),
('wednesday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-');

-- --------------------------------------------------------

--
-- Table structure for table `t0013`
--

CREATE TABLE `t0013` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL,
  `period7` varchar(30) DEFAULT NULL,
  `period8` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t0013`
--

INSERT INTO `t0013` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`, `period7`, `period8`) VALUES
('friday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-'),
('monday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-'),
('thursday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-'),
('tuesday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-'),
('wednesday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-');

-- --------------------------------------------------------

--
-- Table structure for table `t002`
--

CREATE TABLE `t002` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL,
  `period7` varchar(30) DEFAULT NULL,
  `period8` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t002`
--

INSERT INTO `t002` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`, `period7`, `period8`) VALUES
('friday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', 'M-1101<br>Room-202', '-<br>-', '-<br>-', '-<br>-'),
('monday', '-<br>-', '-<br>-', '-<br>-', 'M-1101<br>Room-202', '-<br>-', '-<br>-', '-<br>-', '-<br>-'),
('thursday', 'M-1101<br>Room-202', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-'),
('tuesday', '-<br>-', '-<br>-', 'M-1101<br>Room-202', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-'),
('wednesday', '-<br>-', 'M-1101<br>Room-202', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-');

-- --------------------------------------------------------

--
-- Table structure for table `t003`
--

CREATE TABLE `t003` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL,
  `period7` varchar(30) DEFAULT NULL,
  `period8` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t003`
--

INSERT INTO `t003` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`, `period7`, `period8`) VALUES
('friday', 'eng1011<br>', '-<br>-', '-<br>-', '-<br>-', '-<br>-', 'E-1101<br>Room-202', '-<br>-', '-<br>-'),
('monday', 'eng1011<br>', '-<br>-', '-<br>-', '-<br>-', 'E-1101<br>Room-202', '-<br>-', '-<br>-', '-<br>-'),
('thursday', 'eng1011<br>', 'E-1101<br>Room-202', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-'),
('tuesday', 'eng1011<br>', '-<br>-', '-<br>-', 'E-1101<br>Room-202', '-<br>-', '-<br>-', '-<br>-', '-<br>-'),
('wednesday', 'eng1011<br>', '-<br>-', 'E-1101<br>Room-202', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-');

-- --------------------------------------------------------

--
-- Table structure for table `t004`
--

CREATE TABLE `t004` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL,
  `period7` varchar(30) DEFAULT NULL,
  `period8` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t004`
--

INSERT INTO `t004` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`, `period7`, `period8`) VALUES
('friday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-'),
('monday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-'),
('thursday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-'),
('tuesday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-'),
('wednesday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-');

-- --------------------------------------------------------

--
-- Table structure for table `t005`
--

CREATE TABLE `t005` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL,
  `period7` varchar(30) DEFAULT NULL,
  `period8` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t005`
--

INSERT INTO `t005` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`, `period7`, `period8`) VALUES
('friday', 'P1101<br>Room-202', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-'),
('monday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', 'P1101<br>Room-202', '-<br>-', '-<br>-'),
('thursday', '-<br>-', '-<br>-', 'P1101<br>Room-202', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-'),
('tuesday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', 'P1101<br>Room-202', '-<br>-', '-<br>-', '-<br>-'),
('wednesday', '-<br>-', '-<br>-', '-<br>-', 'P1101<br>Room-202', '-<br>-', '-<br>-', '-<br>-', '-<br>-');

-- --------------------------------------------------------

--
-- Table structure for table `t006`
--

CREATE TABLE `t006` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL,
  `period7` varchar(30) DEFAULT NULL,
  `period8` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t006`
--

INSERT INTO `t006` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`, `period7`, `period8`) VALUES
('friday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-'),
('monday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-'),
('thursday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-'),
('tuesday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-'),
('wednesday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-');

-- --------------------------------------------------------

--
-- Table structure for table `t007`
--

CREATE TABLE `t007` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL,
  `period7` varchar(30) DEFAULT NULL,
  `period8` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t007`
--

INSERT INTO `t007` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`, `period7`, `period8`) VALUES
('friday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-'),
('monday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-'),
('thursday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-'),
('tuesday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-'),
('wednesday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-');

-- --------------------------------------------------------

--
-- Table structure for table `t008`
--

CREATE TABLE `t008` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL,
  `period7` varchar(30) DEFAULT NULL,
  `period8` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t008`
--

INSERT INTO `t008` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`, `period7`, `period8`) VALUES
('friday', '-<br>-', 'Cst-1111<br>Room-202', '-<br>-', '-<br>-', 'CST-3131<br>Room-204', '-<br>-', '-<br>-', '-<br>-'),
('monday', 'Cst-1111<br>Room-202', '-<br>-', '-<br>-', 'CST-3131<br>Room-204', '-<br>-', '-<br>-', '-<br>-', '-<br>-'),
('thursday', '-<br>-', '-<br>-', '-<br>-', 'Cst-1111<br>Room-202', '-<br>-', 'CST-3131<br>Room-204', '-<br>-', '-<br>-'),
('tuesday', '-<br>-', 'CST-3131<br>Room-204', '-<br>-', '-<br>-', '-<br>-', 'Cst-1111<br>Room-202', '-<br>-', '-<br>-'),
('wednesday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', 'Cst-1111<br>Room-202', '-<br>-', 'CST-3131<br>Room-204', '-<br>-');

-- --------------------------------------------------------

--
-- Table structure for table `t009`
--

CREATE TABLE `t009` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL,
  `period7` varchar(30) DEFAULT NULL,
  `period8` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t009`
--

INSERT INTO `t009` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`, `period7`, `period8`) VALUES
('Monday', '-<br>-', 'CST-3142<br>Room-204', 'CST-1142<br>Room-202', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-'),
('tuesday', 'CST-1142<br>Room-202', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', 'CST-3142<br>Room-204', '-<br>-'),
('tuesday1', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', 'CST-3142<br>Room-204', '-<br>-', '-<br>-'),
('wednesday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', 'CST-3142<br>Room-204', 'CST-1142<br>Room-202', '-<br>-', '-<br>-'),
('wednesday1', '-<br>-', '-<br>-', 'CST-3142<br>Room-204', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-');

-- --------------------------------------------------------

--
-- Table structure for table `t010`
--

CREATE TABLE `t010` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL,
  `period7` varchar(30) DEFAULT NULL,
  `period8` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t010`
--

INSERT INTO `t010` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`, `period7`, `period8`) VALUES
('friday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', 'CST-3113<br>Room-204', '-<br>-', '-<br>-'),
('monday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', 'CST-3113<br>Room-204', '-<br>-', '-<br>-', '-<br>-'),
('thursday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', 'CST-3113<br>Room-204', '-<br>-'),
('tuesday', '-<br>-', '-<br>-', 'CST-3113<br>Room-204', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-'),
('wednesday', 'CST-3113<br>Room-204', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-');

-- --------------------------------------------------------

--
-- Table structure for table `t011`
--

CREATE TABLE `t011` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL,
  `period7` varchar(30) DEFAULT NULL,
  `period8` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t011`
--

INSERT INTO `t011` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`, `period7`, `period8`) VALUES
('friday', '-<br>-', '-<br>-', 'CST-1121<br>Room-202', '-<br>-', '-<br>-', '-<br>-', 'CS-3124<br>Room-204', '-<br>-'),
('monday', '-<br>-', 'CST-1121<br>Room-202', '-<br>-', '-<br>-', '-<br>-', 'CS-3124<br>Room-204', '-<br>-', '-<br>-'),
('thursday', 'CS-3124<br>Room-204', '-<br>-', '-<br>-', '-<br>-', '-<br>-', 'CST-1121<br>Room-202', '-<br>-', '-<br>-'),
('tuesday', '-<br>-', 'CST-1121<br>Room-202', '-<br>-', 'CS-3124<br>Room-204', '-<br>-', '-<br>-', '-<br>-', '-<br>-'),
('wednesday', 'CST-1121<br>Room-202', 'CS-3124<br>Room-204', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-');

-- --------------------------------------------------------

--
-- Table structure for table `t012`
--

CREATE TABLE `t012` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL,
  `period7` varchar(30) DEFAULT NULL,
  `period8` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t012`
--

INSERT INTO `t012` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`, `period7`, `period8`) VALUES
('friday', 'CS-3125<br>Room-204', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-'),
('monday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', 'CS-3125<br>Room-204', '-<br>-'),
('thursday', '-<br>-', 'CS-3125<br>Room-204', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-'),
('tuesday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', 'CS-3125<br>Room-204', '-<br>-', '-<br>-', '-<br>-'),
('wednesday', '-<br>-', '-<br>-', 'CS-3125<br>Room-204', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-');

-- --------------------------------------------------------

--
-- Table structure for table `t013`
--

CREATE TABLE `t013` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL,
  `period7` varchar(30) DEFAULT NULL,
  `period8` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t013`
--

INSERT INTO `t013` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`, `period7`, `period8`) VALUES
('friday', '-<br>-', '-<br>-', '-<br>-', 'CS-3156<br>Room-204', '-<br>-', '-<br>-', '-<br>-', '-<br>-'),
('monday', '-<br>-', '-<br>-', 'CS-3156<br>Room-204', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-'),
('thursday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', 'CS-3156<br>Room-204', '-<br>-', '-<br>-', '-<br>-'),
('tuesday', 'CS-3156<br>Room-204', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-'),
('wednesday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', 'CS-3156<br>Room-204', '-<br>-', '-<br>-');

-- --------------------------------------------------------

--
-- Table structure for table `t014`
--

CREATE TABLE `t014` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL,
  `period7` varchar(30) DEFAULT NULL,
  `period8` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t014`
--

INSERT INTO `t014` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`, `period7`, `period8`) VALUES
('friday', '-<br>-', 'CST-3157<br>Room-204', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-'),
('monday', 'CST-3157<br>Room-204', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-'),
('thursday', '-<br>-', '-<br>-', 'CST-3157<br>Room-204', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-'),
('tuesday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', 'CST-3157<br>Room-204', '-<br>-', '-<br>-'),
('wednesday', '-<br>-', '-<br>-', '-<br>-', 'CST-3157<br>Room-204', '-<br>-', '-<br>-', '-<br>-', '-<br>-');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `faculty_number` varchar(10) NOT NULL,
  `name` text NOT NULL,
  `alias` varchar(10) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `department` varchar(100) NOT NULL,
  `contact_number` varchar(100) NOT NULL,
  `emailid` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`faculty_number`, `name`, `alias`, `designation`, `department`, `contact_number`, `emailid`) VALUES
('T005', 'Daw Nwe Oo Khaing', 'DawNweOo', 'Associate Professor', 'Natural Science(Physics)', '09956477662', 'DawNweOo@gmail.com'),
('T004', 'Daw Thin Thin Htwe', 'Daw Thin', 'Associate Professor', 'Computing', '09935678765', 'DawThin@gmail.com'),
('T003', 'Daw Su Su Khaing', 'Daw Su', 'Associate Professor', 'Language(English)', '09435666765', 'DawSu@gmail.com'),
('T001', 'Dr. Thiri Kyaw', 'Dr. Thiri', 'Professor', 'Computer Science', '09407654345', 'Thiri@gmail.com'),
('T002', 'Daw Thandar Lin', 'Daw Thanda', 'Associate Professor', 'Language(Myanmar)', '09941396822', 'DawThandar@gmail.com'),
('T006', 'Daw Khin Lay Myint', 'Daw Khin', 'Associate Professor', 'Information Science', '09934857264', 'DawKhin@gmail.com'),
('T007', 'Daw Moe Thida Naing', 'Daw Moe Th', 'Associate Professor', 'Information Technology Supporting and Maintenance', '09956488662', 'dawmoethidar'),
('T008', 'Daw Hla Naing Win', 'Daw Hla', 'Associate Professor', 'Computer System and Technology', '09956982662', 'DawHla@gmail.com'),
('T009', 'Daw Htet Htet Shwe Yee', 'Daw Htet', 'Lecturer', 'Computing', '09956343355', 'DawHtet@gmail.com'),
('T010', 'Daw Mu Mu Aung', 'Daw Mu', 'Lecturer', 'Computer Science', '09945538662', 'DawMu@gmail.com'),
('T011', 'Daw Yee Mar Myint', 'Daw Yee', 'Assistant Professor', 'Information Science', '099858662', 'DawYee@gmail.com'),
('T012', 'Daw Tin Zar Lin', 'Daw Tin Za', 'Lecturer', 'Information Science', '097723872348', 'DawTinZar@gmail.com'),
('T013', 'Daw Khin Nwe Oo', 'Daw Khin', 'Lecturer', 'Information Technology Supporting and Maintenance', '0986723466543', 'DawKhin@gmail.com'),
('T014', 'Daw Thu Zar Aung', 'Daw Thu Za', 'Lecturer', 'Information Technology Supporting and Maintenance', '0977765387737', 'DawThuZar@gmail.com'),
('T0013', 'daw hla', 'hla', 'Lecturer', 'Information Technology Supporting and Maintenance', '09556488623', 'hla@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classrooms`
--
ALTER TABLE `classrooms`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`subject_code`);

--
-- Indexes for table `t001`
--
ALTER TABLE `t001`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `t0013`
--
ALTER TABLE `t0013`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `t002`
--
ALTER TABLE `t002`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `t003`
--
ALTER TABLE `t003`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `t004`
--
ALTER TABLE `t004`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `t005`
--
ALTER TABLE `t005`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `t006`
--
ALTER TABLE `t006`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `t007`
--
ALTER TABLE `t007`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `t008`
--
ALTER TABLE `t008`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `t009`
--
ALTER TABLE `t009`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `t010`
--
ALTER TABLE `t010`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `t011`
--
ALTER TABLE `t011`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `t012`
--
ALTER TABLE `t012`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `t013`
--
ALTER TABLE `t013`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `t014`
--
ALTER TABLE `t014`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`faculty_number`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
