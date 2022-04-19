/**
Authors: Daniel, Seth, Joselyne, Junior
Version: 4.18.2022
Title: Modern Lily DML script for webdev project 3.
*/
USE modernlilydb;

INSERT INTO Users VALUES(1, 'hassledw', 'Daniel', 'Hassler', 'hassledw@dukes.jmu.edu', '$2y$10$4y8dAqRoAgSyQY7beDARE.g/QjfGkyiRm3Pw/uCQgMD9fNHj6s/Zq');
INSERT INTO Users VALUES(2, 'walter3sb', 'Seth', 'Walter', 'walter3sb@dukes.jmu.edu', '$2y$10$4y8dAqRoAgSyQY7beDARE.g/QjfGkyiRm3Pw/uCQgMD9fNHj6s/Zq'); /* password is "password" */

INSERT INTO Foods VALUES(1, 'Water', 0.00);
INSERT INTO Foods VALUES(2, 'Mountain Dew', 2.00);

INSERT INTO Orders VALUES(1, 1);

INSERT INTO OrderItems VALUES(1, 1, 1);
INSERT INTO OrderItems VALUES(2, 1, 2);