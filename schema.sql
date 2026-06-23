CREATE DATABASE watnidea;

USE watnidea;

CREATE TABLE contacts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fname VARCHAR(100) NOT NULL,
    lname VARCHAR(100),
    phone VARCHAR(15) NOT NULL,
    email VARCHAR(150) NOT NULL,
    message TEXT,
    ip_address VARCHAR(45),
    user_agent TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);