/*
 Navicat Premium Data Transfer

 Source Server         : local
 Source Server Type    : MySQL
 Source Server Version : 80030 (8.0.30)
 Source Host           : localhost:3306
 Source Schema         : myserviceapp

 Target Server Type    : MySQL
 Target Server Version : 80030 (8.0.30)
 File Encoding         : 65001

 Date: 15/05/2023 00:26:34
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for link
-- ----------------------------
DROP TABLE IF EXISTS `link`;
CREATE TABLE `link`  (
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `keterangan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `tipe` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `judul` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `id` bigint NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of link
-- ----------------------------
INSERT INTO `link` VALUES ('Google', 'Google', 'tab', 'Google', 'https://google.com', 1);
INSERT INTO `link` VALUES ('Menara Media Murakabi', 'Menara Media Murakabi window', 'window', 'Menara Media Murakabi', 'http://menaramediamurakabi.test/', 2);
INSERT INTO `link` VALUES ('Menara Media Murakabi', 'Menara Media Murakabi tab', 'tab', 'Menara Media Murakabi Tab', 'http://menaramediamurakabi.test/', 3);
INSERT INTO `link` VALUES ('Koltiva', 'PT Koltiva', 'tab', 'PT Koltiva Company Profile', 'https://koltiva.com', 4);
INSERT INTO `link` VALUES ('test', 'asdasd', 'tab', 'adsadw', NULL, 6);
INSERT INTO `link` VALUES ('update adsaw', 'update ket', 'tab', NULL, NULL, 7);

SET FOREIGN_KEY_CHECKS = 1;
