USE `st18`;
DROP TABLE IF EXISTS `login`;
CREATE TABLE `login`(
	`id` char(10) NOT NULL,
	`name` varchar(10) NOT NULL,
	`pw` varchar(500) NOT NULL,
	PRIMARY KEY(`id`)
);