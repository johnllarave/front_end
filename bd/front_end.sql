/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 100411
Source Host           : localhost:3306
Source Database       : front_end

Target Server Type    : MYSQL
Target Server Version : 100411
File Encoding         : 65001

Date: 2020-10-09 23:03:54
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for curso
-- ----------------------------
DROP TABLE IF EXISTS `curso`;
CREATE TABLE `curso` (
  `cu_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cu_nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cu_area` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `cu_fecha` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `cu_hora` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `cu_fecha_crea` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `cu_fecha_edita` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `cu_estado` tinyint(1) NOT NULL DEFAULT 1,
  `us_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`cu_id`),
  KEY `curso_usuario` (`us_id`),
  CONSTRAINT `curso_usuario` FOREIGN KEY (`us_id`) REFERENCES `usuario` (`us_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of curso
-- ----------------------------

-- ----------------------------
-- Table structure for inscripcion
-- ----------------------------
DROP TABLE IF EXISTS `inscripcion`;
CREATE TABLE `inscripcion` (
  `ins_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ins_nombre` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `ins_apellido` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `ins_correo` varchar(170) COLLATE utf8_unicode_ci NOT NULL,
  `ins_telefono` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `ins_ciudad` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `ins_terminos` tinyint(1) NOT NULL,
  `ins_fecha_inscripcion` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `cu_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`ins_id`),
  KEY `inscripcion_curso` (`cu_id`),
  CONSTRAINT `inscripcion_curso` FOREIGN KEY (`cu_id`) REFERENCES `curso` (`cu_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of inscripcion
-- ----------------------------

-- ----------------------------
-- Table structure for rol
-- ----------------------------
DROP TABLE IF EXISTS `rol`;
CREATE TABLE `rol` (
  `ro_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ro_nombre` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `ro_estado` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`ro_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of rol
-- ----------------------------
INSERT INTO `rol` VALUES ('1', 'Admin', '1');
INSERT INTO `rol` VALUES ('2', 'Reportes', '1');

-- ----------------------------
-- Table structure for usuario
-- ----------------------------
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `us_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `us_nombre` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `us_apellido` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `us_correo` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `us_telefono` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `us_user` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `us_pass` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `us_estado` tinyint(1) NOT NULL DEFAULT 1,
  `ro_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`us_id`),
  KEY `usuario_rol` (`ro_id`),
  CONSTRAINT `usuario_rol` FOREIGN KEY (`ro_id`) REFERENCES `rol` (`ro_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of usuario
-- ----------------------------
INSERT INTO `usuario` VALUES ('1', 'John Alexander', 'Llarave Herrán', 'jollarave@poligran.edu.co', '3211234567', 'jollarave', '128351137a9c47206c4507dcf2e6fbeeca3a9079', '1', '1');
INSERT INTO `usuario` VALUES ('2', 'Juan Camilo', 'Arias Moque', 'juancamilo@poligran.edu.co', '1234567890', 'juanarias', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '1', '1');
SET FOREIGN_KEY_CHECKS=1;
