CREATE DATABASE umfrage;
USE umfrage;
CREATE TABLE benutzer(
b_id int(5) NOT NULL AUTO_INCREMENT,
rechte char(1) NOT NULL,
name VARCHAR(20) NOT NULL,
PRIMARY KEY(b_id)
);

CREATE TABLE pw(
  b_id int(5) NOT NULL,
  pwd int(5) NOT NULL,
  PRIMARY KEY(b_id),
  FOREIGN KEY(b_id) REFERENCES benutzer(b_id)
  );
  
  INSERT INTO benutzer(rechte,name) VALUES("s","n");
INSERT INTO pw(b_id,pwd) VALUES(1,12345);
