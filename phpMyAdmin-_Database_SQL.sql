-- phpMyAdmin SQL Dump
-- version 4.0.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 26, 2016 at 10:24 AM
-- Server version: 5.5.47-0ubuntu0.12.04.1
-- PHP Version: 5.3.10-1ubuntu3.21

SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db1403469`
--
CREATE DATABASE IF NOT EXISTS `db1403469` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE db1403469;

-- --------------------------------------------------------

--
-- Table structure for table `Jobs`
--

DROP TABLE IF EXISTS `Jobs`;
CREATE TABLE IF NOT EXISTS "Jobs" (
  "Username" varchar(20) NOT NULL,
  "Previous_Job" varchar(30) NOT NULL,
  "Qualification" varchar(30) NOT NULL,
  "Key_Skill_One" varchar(20) NOT NULL,
  "Key_Skill_Two" varchar(20) DEFAULT NULL,
  "Key_Skill_Three" varchar(20) DEFAULT NULL,
  PRIMARY KEY ("Previous_Job","Qualification","Key_Skill_One")
);

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

DROP TABLE IF EXISTS `User`;
CREATE TABLE IF NOT EXISTS "User" (
  "Username" varchar(20) NOT NULL,
  "Email_Address" varchar(50) NOT NULL,
  "Password" varchar(20) NOT NULL,
  "Address" varchar(60) NOT NULL,
  "ID" int(20) NOT NULL,
  PRIMARY KEY ("Username","Email_Address","Password","Address","ID"),
  UNIQUE KEY "ID" ("ID")
) AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
