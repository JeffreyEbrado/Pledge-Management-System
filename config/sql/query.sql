-- Create a new database
CREATE DATABASE IF NOT EXISTS Pledge_Data;

-- Use the new database
USE Pledge_Data;

-- Create table `Students Pledge Record`
CREATE TABLE IF NOT EXISTS Students_Pledge_Record (
    id INT AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(100) NOT NULL,
    lastname VARCHAR(100) NOT NULL,
    cite_id VARCHAR(100) NOT NULL,
    status VARCHAR(100) NOT NULL,
    password VARCHAR(10) NOT NULL
);


-- Insert sample data into `Students Pledge Record`
INSERT INTO TB_STUDENTS (firstname, lastname, cite_id, status, password) VALUES
('Administrator', 'Account', 'admin', 'admin', 'password');
