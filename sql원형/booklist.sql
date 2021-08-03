USE `st18`;
DROP TABLE IF EXISTS `booklist`;
CREATE TABLE `booklist`(
	`book_num` tinyint(255) UNSIGNED NOT NULL,
	`book_name`	 varchar(50) NOT NULL,
	`book_writer`    varchar(30) NOT NULL,
	`book_publisher` varchar(30) NOT NULL,
	PRIMARY KEY(`book_num`)
);

INSERT INTO `booklist` VALUES('001','자바의 정석','남궁성','돋움');
INSERT INTO `booklist` VALUES('002','자바의 신','오렌지미디어','윤성우');
INSERT INTO `booklist` VALUES('003','java 언어로 배우는 디자인 패턴 입문','YUKI HIROSHI','영진닷컴');
INSERT INTO `booklist` VALUES('004','토비의 스프링 3.1 세트','신재호','정보문화사');
INSERT INTO `booklist` VALUES('005','쉽게 따라하는 자바 웹 개발','백기선','인사이트');
INSERT INTO `booklist` VALUES('006','JAVA 객체지향 언어로 배우는 디자인 패턴','신재호','정보문화사');
INSERT INTO `booklist` VALUES('007','HEAD FIRST JAVA','케이시 시에라','한빛미디어');
INSERT INTO `booklist` VALUES('008','난 정말 JAVA를 공부한 적이 없다구요','이상민','로드북');
