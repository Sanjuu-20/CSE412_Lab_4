CREATE DATABASE IF NOT EXISTS userDB;
USE userDB;

CREATE TABLE IF NOT EXISTS userInfo(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    email VARCHAR(100),
    phone VARCHAR(20),
    date_of_birth DATE,
    gender VARCHAR(10),
    country VARCHAR(20),
    city VARCHAR(20),
    password VARCHAR(10)
);