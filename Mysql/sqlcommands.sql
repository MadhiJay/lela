create database lela;
	use lela;

	create table signup(
		email varchar(100) primary key,
		password varchar(100),
		repassword varchar(100)
		);