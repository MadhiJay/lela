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

create table Rent(
	id int not null AUTO_INCREMENT,
	email varchar(100),
	category varchar(100),
	place varchar(100),
	noOfRooms int,
	price varchar(5),
	descrpt varchar(500),
	contact varchar(100),
	img varchar(200),
	primary key(id),
	foreign key(email) references user(email));
