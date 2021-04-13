CREATE DATABASE umfrage;
USE umfrage;
CREATE TABLE benutzer(
b_id int(5) NOT NULL AUTO_INCREMENT,
pwd int(5) NOT NULL,
rechte char(1) NOT NULL,
name VARCHAR(20) NOT NULL,
PRIMARY KEY(b_id)
);
