create database lela;
	use lela;

	create table user(
		username varchar(100),
		email varchar(100) primary key,
		pword varchar(100),
		logged_in varchar(10) default 'false'
		);

DELIMITER //
CREATE PROCEDURE NewUser(IN username VARCHAR(100),IN email VARCHAR(100),IN pword VARCHAR(100))
 BEGIN
 INSERT INTO user (username,email,pword) values(username,email,pword);
 END //
DELIMITER ;