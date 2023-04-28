DROP DATABASE IF EXISTS Car_Rental_Management;

CREATE DATABASE Car_Rental_Management;

USE Car_Rental_Management;

DROP TABLE IF  EXISTS Accounts;
DROP TABLE IF  EXISTS Contacts;
DROP TABLE IF  EXISTS Car_Details;

CREATE TABLE Accounts (
username VARCHAR(30),
password VARCHAR(30),
PRIMARY KEY (username));

CREATE TABLE Contacts (
name VARCHAR(30),
email VARCHAR(30),
number int(30),
message VARCHAR(30),
PRIMARY KEY (name));

CREATE TABLE CarDetails (
img VARCHAR(30),
name VARCHAR(30),
price VARCHAR(30),
transmission VARCHAR(30),
fuelType VARCHAR(30),
speed VARCHAR(30),
model VARCHAR(30),
PRIMARY KEY (id));


INSERT INTO Accounts VALUES ('usman@gmail.com', 'usman123');
INSERT INTO Accounts VALUES ('ayyan@gmail.com', 'ayyan123');

INSERT INTO Contacts VALUES ('usman', 'usman@gmail.com', '03369589172', 'Hi! my name is Usman');
INSERT INTO Contacts VALUES ('haris', 'haris@gmail.com', '03369581233', 'Hi! my name is haris');
INSERT INTO Contacts VALUES ('ayyan', 'ayyan@gmail.com', '03355435435', 'Hi! my name is ayyan');

INSERT INTO CarDetails VALUES ('.jpeg', 'honda', '$54000', 'Auto', 'Gas', '120mph', 'New');

commit;