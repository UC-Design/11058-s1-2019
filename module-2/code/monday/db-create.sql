CREATE DATABASE ben_monday;

use ben_monday;

CREATE TABLE works (
    id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    artistname VARCHAR(30) NOT NULL,
    worktitle VARCHAR(30) NOT NULL,
    workdate VARCHAR(30),
    worktype VARCHAR(30),
    date TIMESTAMP    
);