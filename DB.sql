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
  
CREATE TABLE treffen(
    t_id int(5) NOT NULL AUTO_INCREMENT,
    datum DATE NOT NULL,
    PRIMARY KEY(t_id)
    );
    
    CREATE TABLE umfragen(
        u_id int(5) NOT NULL AUTO_INCREMENT,
        fragetext VARCHAR(40) NOT NULL,
        titel VARCHAR(20) NOT NULL,
        treffen int(5) NOT NULL,
        ja int(3) NOT NULL,
        nein int(3)NOT NULL,
        vielleicht int(3) NOT NULL,
        PRIMARY KEY(u_id),
        FOREIGN KEY(treffen) REFERENCES treffen(t_id)
        );
        
        CREATE TABLE anwesenheit(
            a_id int(5) NOT NULL AUTO_INCREMENT,
            treffen int(5) NOT NULL,
            teilnehmer int(5) NOT NULL,
            PRIMARY KEY(a_id),
            FOREIGN KEY(treffen) REFERENCES treffen(t_id),
            FOREIGN KEY(teilnehmer) REFERENCES benutzer(b_id)
            );
  
  INSERT INTO benutzer(rechte,name) VALUES("a","n");
INSERT INTO pw(b_id,pwd) VALUES(1,12345);
