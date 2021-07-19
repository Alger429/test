/*
Navicat MySQL Data Transfer

Source Server         : Homestead
Source Server Version : 80025
Source Host           : 192.168.10.10:3306
Source Database       : alger

Target Server Type    : MYSQL
Target Server Version : 80025
File Encoding         : 65001

Date: 2021-07-17 08:02:08
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int NOT NULL,
  `userID` int DEFAULT NULL,
  `id1` int DEFAULT NULL,
  `id2` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `userID` (`userID`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of user
-- ----------------------------
