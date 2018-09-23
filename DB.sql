CREATE TABLE admins (
	username VARCHAR(30) PRIMARY KEY,
	password VARCHAR(100) NOT NULL
);

CREATE TABLE users (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	username VARCHAR(30),
	password VARCHAR(100) NOT NULL,
	full_name VARCHAR(30) NOT NULL,
	phone_num VARCHAR(20),
	facebook VARCHAR(100),
	balance FLOAT
);

CREATE TABLE trips (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	_from VARCHAR(200) NOT NULL,
	_to VARCHAR(200) NOT NULL,
	_empty BOOLEAN,
	timestart VARCHAR(20),
	id_boss VARCHAR(30),
	note VARCHAR(1000)
);

CREATE TABLE matched (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	id_boss VARCHAR(30),
	id_guess VARCHAR(30),
	trip_id INT(6) UNSIGNED
);