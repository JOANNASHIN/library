USE `st18`;
DROP TABLE IF EXISTS `borrow_book`;
CREATE TABLE `borrow_book`(
	`borrow_num` tinyint(255) UNSIGNED NOT NULL AUTO_INCREMENT,
	`book_num` tinyint(255) UNSIGNED NOT NULL,
	`user_name` varchar(20) NOT NULL,
	`user_id`   varchar(20) NOT NULL,
	`borrow_day` date NOT NULL,
	`return_day` date NOT NULL,
	PRIMARY KEY(`borrow_num`),
	UNIQUE KEY(`book_num`)
) AUTO_INCREMENT=1;