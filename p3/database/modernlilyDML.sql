/**
Authors: Daniel, Seth, Joselyne, Junior
Version: 4.18.2022
Title: Modern Lily DML script for webdev project 3.
*/
USE modernlilydb;

INSERT INTO Users VALUES(1, 'hassledw', 'Daniel', 'Hassler', 'hassledw@dukes.jmu.edu', 'password');
INSERT INTO Users VALUES(2, 'walter3sb', 'Seth', 'Walter', 'walter3sb@dukes.jmu.edu', 'password'); /* we will hash these */

INSERT INTO Foods VALUES(1, 'Water', 0.00);
INSERT INTO Foods VALUES(2, 'Mountain Dew', 2.00);

INSERT INTO Orders VALUES(1, 1);

INSERT INTO OrderItems VALUES(1, 1, 1);
INSERT INTO OrderItems VALUES(2, 1, 2);