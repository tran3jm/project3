/**
Authors: Daniel, Seth, Joselyne, Junior
Version: 4.18.2022
Title: Modern Lily DML script for webdev project 3.
*/
USE modernlilydb;

INSERT INTO Users VALUES(1, 'hassledw', 'Daniel', 'Hassler', 'hassledw@dukes.jmu.edu', '$2y$10$4y8dAqRoAgSyQY7beDARE.g/QjfGkyiRm3Pw/uCQgMD9fNHj6s/Zq');
INSERT INTO Users VALUES(2, 'walter3sb', 'Seth', 'Walter', 'walter3sb@dukes.jmu.edu', '$2y$10$4y8dAqRoAgSyQY7beDARE.g/QjfGkyiRm3Pw/uCQgMD9fNHj6s/Zq'); /* password is "password" */

/* drinks */
INSERT INTO Foods VALUES (1, 'Pepsi', 2.50, 1);
INSERT INTO Foods VALUES (2, 'Diet Pepsi', 2.50, 1);
INSERT INTO Foods VALUES (3, 'Sprite', 2.50, 1);
INSERT INTO Foods VALUES (4, 'Ramune', 3.00, 1);
INSERT INTO Foods VALUES (5, 'Calpico', 3.00, 1);
INSERT INTO Foods VALUES (6, 'Iced Tea', 2.50, 1);
INSERT INTO Foods VALUES (7, 'Hot Tea', 3.50, 1);
INSERT INTO Foods VALUES (8, 'Thai Tea', 3.75, 1);
INSERT INTO Foods VALUES (9, 'Vietnamese Coffee', 4.50, 1);
INSERT INTO Foods VALUES (10, 'Boba', 4.50, 1);

/* food items */
INSERT INTO Foods VALUES (11, 'Drunken Noodles', 12.50, 0);
INSERT INTO Foods VALUES (12, 'Dumplings', 8.50, 0);
INSERT INTO Foods VALUES (13, 'Crispy Pork Belly', 7.50, 0);
INSERT INTO Foods VALUES (14, 'Pho', 10.50, 0);
INSERT INTO Foods VALUES (15, 'Banh Mi', 9.35, 0);
INSERT INTO Foods VALUES (16, 'Fusion BiBamBop', 11.50, 0);
INSERT INTO Foods VALUES (17, 'Pork Buns', 8.50, 0);
INSERT INTO Foods VALUES (18, 'Fried Eggplant', 6.75, 0);
INSERT INTO Foods VALUES (19, 'Sour Cabbage Soup', 11.50, 0);
INSERT INTO Foods VALUES (20, 'Lotus Soup', 9.50, 0);

INSERT INTO Orders VALUES(1, 1);

INSERT INTO OrderItems VALUES(1, 1, 1);
INSERT INTO OrderItems VALUES(2, 1, 2);