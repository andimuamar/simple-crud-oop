/*
 Navicat Premium Data Transfer

 Source Server         : MySQL 8.3
 Source Server Type    : MySQL
 Source Server Version : 80033 (8.0.33)
 Source Host           : localhost:3308
 Source Schema         : pemograman_berbasis_internet

 Target Server Type    : MySQL
 Target Server Version : 80033 (8.0.33)
 File Encoding         : 65001

 Date: 17/06/2025 19:54:54
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
BEGIN;
INSERT INTO `users` (`id`, `name`, `password`, `created_at`) VALUES (6, 'John', 'Doe', NULL);
INSERT INTO `users` (`id`, `name`, `password`, `created_at`) VALUES (7, 'John', 'Doe', NULL);
INSERT INTO `users` (`id`, `name`, `password`, `created_at`) VALUES (8, 'John', 'Doe', NULL);
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
