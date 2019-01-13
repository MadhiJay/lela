create database lela;
	use lela;

	create table user(
		username varchar(100),
		email varchar(100) primary key,
		pword varchar(100),
		reword varchar(100)
		);

DELIMITER //
CREATE PROCEDURE NewUser(IN username VARCHAR(100),IN email VARCHAR(100),IN pword VARCHAR(100))
 BEGIN
 INSERT INTO user (username,email,pword) values(firstname,lastname,username,email_address,gender,pass,dob);
 END //
DELIMITER ;