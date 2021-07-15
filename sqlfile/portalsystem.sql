/*
Navicat MySQL Data Transfer

Source Server         : ajoy
Source Server Version : 50612
Source Host           : localhost:3306
Source Database       : portalsystem

Target Server Type    : MYSQL
Target Server Version : 50612
File Encoding         : 65001

Date: 2018-04-10 16:56:09
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `comment`
-- ----------------------------
DROP TABLE IF EXISTS `comment`;
CREATE TABLE `comment` (
  `cid` varchar(255) NOT NULL,
  `topicid` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `postby` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of comment
-- ----------------------------

-- ----------------------------
-- Table structure for `dept`
-- ----------------------------
DROP TABLE IF EXISTS `dept`;
CREATE TABLE `dept` (
  `did` varchar(255) NOT NULL,
  `dname` varchar(255) NOT NULL,
  `sem` varchar(255) NOT NULL,
  PRIMARY KEY (`did`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of dept
-- ----------------------------

-- ----------------------------
-- Table structure for `login`
-- ----------------------------
DROP TABLE IF EXISTS `login`;
CREATE TABLE `login` (
  `username` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of login
-- ----------------------------

-- ----------------------------
-- Table structure for `student`
-- ----------------------------
DROP TABLE IF EXISTS `student`;
CREATE TABLE `student` (
  `sid` int(255) NOT NULL AUTO_INCREMENT,
  `sname` varchar(255) NOT NULL,
  `rollno` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `sem` varchar(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phnno` bigint(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dob` datetime NOT NULL,
  `school` varchar(255) NOT NULL,
  `college` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of student
-- ----------------------------

-- ----------------------------
-- Table structure for `teacher`
-- ----------------------------
DROP TABLE IF EXISTS `teacher`;
CREATE TABLE `teacher` (
  `tid` int(255) NOT NULL AUTO_INCREMENT,
  `tname` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `sub` varchar(255) NOT NULL,
  `phnno` bigint(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `add` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of teacher
-- ----------------------------

-- ----------------------------
-- Table structure for `wall`
-- ----------------------------
DROP TABLE IF EXISTS `wall`;
CREATE TABLE `wall` (
  `wid` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `postby` varchar(255) NOT NULL,
  `post` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `like` int(11) NOT NULL,
  `comment` int(11) NOT NULL,
  PRIMARY KEY (`wid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of wall
-- ----------------------------
