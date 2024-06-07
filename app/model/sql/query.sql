-- Create a new database
CREATE DATABASE IF NOT EXISTS Pledge_Data;

-- Use the new database
USE Pledge_Data;

-- Create table `Students Pledge Record`
CREATE TABLE IF NOT EXISTS `Students_Pledge_Record` (
    id INT AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(100) NOT NULL,
    lastname VARCHAR(100) NOT NULL,
    cite_id VARCHAR(100) NOT NULL,
    status VARCHAR(100) NOT NULL,
    pledge VARCHAR(100) NOT NULL,
    pledgetotal VARCHAR(100) NOT NULL
);

-- Create table `Registered Students`
CREATE TABLE IF NOT EXISTS `Registered_Students` (
    id INT AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(100) NOT NULL,
    lastname VARCHAR(100) NOT NULL,
    cite_id VARCHAR(100) NOT NULL,
    status VARCHAR(100) NOT NULL,
    password VARCHAR(100) NOT NULL
);

-- Insert sample data into `Students_Pledge_Record`
INSERT INTO `Students_Pledge_Record` (firstname, lastname, cite_id, status, pledge, pledgetotal) VALUES
('Administrator', 'Account', 'admin', 'admin', '5000', '280000');

-- Insert sample data into `Registered_Students`
INSERT INTO `Registered_Students` (firstname, lastname, cite_id, status, password) VALUES
('Administrator', 'Account', 'admin', 'admin', 'password');
