CREATE DATABASE ben_test;

use ben_test;

CREATE TABLE works (
	id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	artistname VARCHAR(30) NOT NULL,
	worktitle VARCHAR(50) NOT NULL,
	workdate VARCHAR(30),
    worktype VARCHAR(30),
	date TIMESTAMP
);