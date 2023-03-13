-- Adminer 4.8.1 MySQL 8.0.32 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `Account`;
CREATE TABLE `Account` (
  `acc_id` int unsigned NOT NULL AUTO_INCREMENT,
  `acc_username` varchar(20) NOT NULL,
  `acc_password` varchar(50) NOT NULL,
  `role_name` varchar(20) NOT NULL,
  PRIMARY KEY (`acc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


DROP TABLE IF EXISTS `Customer`;
CREATE TABLE `Customer` (
  `cus_id` int unsigned NOT NULL AUTO_INCREMENT,
  `cus_fname` varchar(30) NOT NULL,
  `cus_lname` varchar(30) NOT NULL,
  `cus_birthday` datetime NOT NULL,
  `cus_gender` varchar(10) NOT NULL,
  `cus_phone` varchar(10) NOT NULL,
  `cus_email` varchar(30) DEFAULT NULL,
  `cus_address` varchar(50) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `acc_id` int unsigned DEFAULT NULL,
  PRIMARY KEY (`cus_id`),
  KEY `acc_id` (`acc_id`),
  CONSTRAINT `Customer_ibfk_1` FOREIGN KEY (`acc_id`) REFERENCES `Account` (`acc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


DROP TABLE IF EXISTS `Employee`;
CREATE TABLE `Employee` (
  `em_id` int unsigned NOT NULL AUTO_INCREMENT,
  `em_fname` varchar(30) NOT NULL,
  `em_lname` varchar(30) NOT NULL,
  `em_birthday` datetime NOT NULL,
  `em_gender` varchar(10) NOT NULL,
  `em_phone` varchar(10) NOT NULL,
  `em_email` varchar(30) DEFAULT NULL,
  `em_address` varchar(50) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `acc_id` int unsigned NOT NULL,
  PRIMARY KEY (`em_id`),
  KEY `acc_id` (`acc_id`),
  CONSTRAINT `Employee_ibfk_1` FOREIGN KEY (`acc_id`) REFERENCES `Account` (`acc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


DROP TABLE IF EXISTS `Reservation`;
CREATE TABLE `Reservation` (
  `re_id` int unsigned NOT NULL AUTO_INCREMENT,
  `re_date_in` datetime NOT NULL,
  `re_date_out` datetime NOT NULL,
  `re_child_num` int NOT NULL,
  `re_adult_num` int NOT NULL,
  `create_date` datetime NOT NULL,
  `status` int DEFAULT '0',
  `cus_id` int unsigned DEFAULT NULL,
  `checkIn` tinyint(1) DEFAULT '0',
  `deposited` decimal(13,0) DEFAULT '0',
  `isPaid` tinyint(1) DEFAULT '0',
  `isConfirmed` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`re_id`),
  KEY `cus_id` (`cus_id`),
  CONSTRAINT `Reservation_ibfk_1` FOREIGN KEY (`cus_id`) REFERENCES `Customer` (`cus_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


DROP TABLE IF EXISTS `Reservation_Room`;
CREATE TABLE `Reservation_Room` (
  `re_id` int unsigned NOT NULL,
  `room_id` int unsigned NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  KEY `re_id` (`re_id`),
  KEY `room_id` (`room_id`),
  CONSTRAINT `Reservation_Room_ibfk_1` FOREIGN KEY (`re_id`) REFERENCES `Reservation` (`re_id`),
  CONSTRAINT `Reservation_Room_ibfk_2` FOREIGN KEY (`room_id`) REFERENCES `Room` (`room_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


DROP TABLE IF EXISTS `Reservation_Service`;
CREATE TABLE `Reservation_Service` (
  `re_id` int unsigned NOT NULL,
  `service_id` int unsigned NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  KEY `re_id` (`re_id`),
  KEY `service_id` (`service_id`),
  CONSTRAINT `Reservation_Service_ibfk_1` FOREIGN KEY (`re_id`) REFERENCES `Reservation` (`re_id`),
  CONSTRAINT `Reservation_Service_ibfk_2` FOREIGN KEY (`service_id`) REFERENCES `Service` (`service_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


DROP TABLE IF EXISTS `Room`;
CREATE TABLE `Room` (
  `room_id` int unsigned NOT NULL AUTO_INCREMENT,
  `room_name` varchar(30) DEFAULT NULL,
  `room_description` varchar(50) DEFAULT NULL,
  `room_child_num` int DEFAULT NULL,
  `room_adult_num` int NOT NULL,
  `room_price` decimal(13,2) DEFAULT NULL,
  `room_class_image` varchar(50) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `room_class_id` int unsigned DEFAULT NULL,
  PRIMARY KEY (`room_id`),
  KEY `room_class_id` (`room_class_id`),
  CONSTRAINT `Room_ibfk_1` FOREIGN KEY (`room_class_id`) REFERENCES `Room_Class` (`room_class_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


DROP TABLE IF EXISTS `Room_Class`;
CREATE TABLE `Room_Class` (
  `room_class_id` int unsigned NOT NULL AUTO_INCREMENT,
  `room_class_name` varchar(30) DEFAULT NULL,
  `room_class_description` varchar(50) DEFAULT NULL,
  `room_class_image` varchar(50) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`room_class_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


DROP TABLE IF EXISTS `Service`;
CREATE TABLE `Service` (
  `service_id` int unsigned NOT NULL AUTO_INCREMENT,
  `service_name` varchar(30) DEFAULT NULL,
  `room_description` varchar(50) DEFAULT NULL,
  `service_price` decimal(13,2) DEFAULT NULL,
  `service_image` varchar(50) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`service_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


DROP TABLE IF EXISTS `Transaction`;
CREATE TABLE `Transaction` (
  `trans_id` int unsigned NOT NULL AUTO_INCREMENT,
  `trans_name` varchar(30) DEFAULT NULL,
  `trans_date` datetime NOT NULL,
  `trans_room_amount` decimal(13,2) DEFAULT '0.00',
  `trans_service_amount` decimal(13,2) DEFAULT '0.00',
  `trans_discount` decimal(13,2) DEFAULT '0.00',
  `trans_deposite` decimal(13,2) DEFAULT '0.00',
  `trans_surcharge` decimal(13,2) DEFAULT '0.00',
  `trans_tax` decimal(13,2) DEFAULT '0.00',
  `trans_total_amount` decimal(13,2) DEFAULT '0.00',
  `trans_change` decimal(13,2) DEFAULT '0.00',
  `trans_description` varchar(50) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  `em_id` int unsigned DEFAULT NULL,
  `re_id` int unsigned DEFAULT NULL,
  PRIMARY KEY (`trans_id`),
  KEY `em_id` (`em_id`),
  KEY `re_id` (`re_id`),
  CONSTRAINT `Transaction_ibfk_1` FOREIGN KEY (`em_id`) REFERENCES `Employee` (`em_id`),
  CONSTRAINT `Transaction_ibfk_2` FOREIGN KEY (`re_id`) REFERENCES `Reservation` (`re_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


-- 2023-03-13 07:11:22
