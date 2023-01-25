/*
SQLyog Community v13.2.0 (64 bit)
MySQL - 8.0.31 : Database - vehicle_booking_system
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `booking_data` */

CREATE TABLE `booking_data` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `vehicle_id` int DEFAULT NULL,
  `booking_type` enum('full-day','half-day') DEFAULT NULL,
  `booking_date` date DEFAULT NULL,
  `booking_shift` enum('morning','evening') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `booking_data` */

insert  into `booking_data`(`id`,`customer_name`,`email`,`phone`,`vehicle_id`,`booking_type`,`booking_date`,`booking_shift`) values 
(1,'tetw','asdfasf@asdd.com','+919725468144',2,'full-day','2023-01-26',NULL),
(2,'tetw','asdfasf@asdd.com','+919725468144',2,'half-day','2023-01-27','morning'),
(3,'test','dilip.v+0131@e2logy.com','+919725468144',1,'half-day','2023-01-27','evening'),
(4,'Dilip Vanol','dilip.v+0131@e2logy.com','+919725468144',1,'half-day','2023-01-28','morning');

/*Table structure for table `vehicle` */

CREATE TABLE `vehicle` (
  `id` int NOT NULL AUTO_INCREMENT,
  `vehicle_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `vehicle` */

insert  into `vehicle`(`id`,`vehicle_name`) values 
(1,'Car'),
(2,'Bike'),
(3,'Bus');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
