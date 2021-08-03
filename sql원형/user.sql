USE `st18`;
DROP TABLE IF EXISTS `user_book`;
CREATE TABLE `user_book`(
	`id`   char(20) NOT NULL,	
	`pw`   varchar(200) NOT NULL,
	`name` char(10) NOT NULL,
	`gender`   enum("male","female") NOT NULL,
	`birth` date NOT NULL,
	`contact`  char(13) NOT NULL,
	`email` varchar(100) NOT NULL,
	`address`  varchar(300) NOT NULL,	
	`joinday` datetime NOT NULL,
 	PRIMARY KEY(`id`)
);
