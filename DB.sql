CREATE TABLE admins (
	username VARCHAR(30) PRIMARY KEY,
	password VARCHAR(100) NOT NULL
);

CREATE TABLE users (
	username VARCHAR(30) PRIMARY KEY,
	password VARCHAR(100) NOT NULL,
	full_name VARCHAR(30) NOT NULL,
	phone_num VARCHAR(20),
	facebook VARCHAR(100),
	balance FLOAT NOT NULL,
	verify BOOLEAN NOT NULL,
	mssv VARCHAR(60) NOT NULL,
	university VARCHAR(100) NOT NULL,
	hash VARCHAR(32) NOT NULL
);

CREATE TABLE trips (
	id_boss VARCHAR(30) PRIMARY KEY,
	_from VARCHAR(200) NOT NULL,
	_to VARCHAR(200) NOT NULL,
	occup BOOLEAN NOT NULL,
	timestart VARCHAR(20),	
	note VARCHAR(1000),
	price FLOAT NOT NULL,
	FOREIGN KEY (id_boss) references users(username)
);

CREATE TABLE matched (
	id_boss VARCHAR(30) PRIMARY KEY,
	id_guess VARCHAR(30),	
	FOREIGN KEY (id_boss) references users(username),
	FOREIGN KEY (id_guess) references users(username)
);

CREATE TABLE request (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	id_boss VARCHAR(30),
	id_guess VARCHAR(30),

	FOREIGN KEY (id_boss) references users(username),
	FOREIGN KEY (id_guess) references users(username)
);

CREATE TABLE history (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	id_boss VARCHAR(30),
	id_guess VARCHAR(30),	
	FOREIGN KEY (id_boss) references users(username),
	FOREIGN KEY (id_guess) references users(username)
);
