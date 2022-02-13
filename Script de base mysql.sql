create database mvc1 CHARACTER SET 'UTF8' COLLATE 'utf8_general_ci';

use mvc1;

CREATE TABLE persona (  
id int (11) AUTO_INCREMENT,  
name varchar (150) DEFAULT NULL,  
lastname varchar (500) DEFAULT NULL, 
age varchar (500) DEFAULT NULL,
phonenumber varchar (500) DEFAULT NULL, 
email varchar (500) DEFAULT NULL, 
PRIMARY KEY (id)
);

INSERT INTO persona (name, lastname, age, phonenumber, email) VALUES ('Luis', 'Cañas', '23', '7499-2373', 'luis@gmail.com');
INSERT INTO persona (name, lastname, age, phonenumber, email) VALUES ('Eduardo', 'Santos', '22', '2284-0125', 'eduardo@gmail.com');
INSERT INTO persona (name, lastname, age, phonenumber, email) VALUES ('Ernesto', 'Muñoz', '23', '2222-2222', 'ernesto@gmail.com');