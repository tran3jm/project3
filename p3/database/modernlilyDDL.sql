/**
Authors: Daniel, Seth, Joselyne, Junior
Version: 4.18.2022
Title: Modern Lily DDL script for webdev project 3.
*/
CREATE DATABASE modernlilydb;
USE modernlilydb;

DROP TABLE IF EXISTS Users;
DROP TABLE IF EXISTS Orders;
DROP TABLE IF EXISTS OrderItems;
DROP TABLE IF EXISTS Foods;

/**
* Users table
*/
CREATE TABLE Users (
    userID int NOT NULL AUTO_INCREMENT UNIQUE,
    userUsername varchar(255) NOT NULL UNIQUE,
    userFName varchar(255),
    userLName varchar(255),
    userEmail varchar(255) NOT NULL UNIQUE,
    userPassword varchar(255), /* storing encrypted password */
    PRIMARY KEY (userID)
);

/**
* Foods table
*/
CREATE TABLE Foods (
    foodID int NOT NULL AUTO_INCREMENT UNIQUE,
    foodName varchar(255), 
    foodCost decimal(6,2),
    beverage int(1),
    PRIMARY KEY (foodID),
    CONSTRAINT food_cost_constraint CHECK (foodCost > -1)
);

/**
* Orders table
*/
CREATE TABLE Orders (
    orderID int NOT NULL AUTO_INCREMENT UNIQUE,
    userID int, 
    PRIMARY KEY (orderID),
    FOREIGN KEY (userID) REFERENCES Users(userID)
);

/**
* OrderItems table
*/
CREATE TABLE OrderItems (
    orderItemsID int NOT NULL AUTO_INCREMENT UNIQUE,
    orderID int,
    foodID int, 
    PRIMARY KEY (orderItemsID),
    FOREIGN KEY (orderID) REFERENCES Orders(orderID),
    FOREIGN KEY (foodID) REFERENCES Foods(foodID)
);
