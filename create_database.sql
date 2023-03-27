CREATE TABLE users (
  id INT(11) NOT NULL AUTO_INCREMENT,
  username VARCHAR(50) NOT NULL,
  password VARCHAR(255) NOT NULL,
  email VARCHAR(100) NOT NULL,
  role ENUM('user', 'admin') NOT NULL DEFAULT 'user',
  PRIMARY KEY (id),
  UNIQUE KEY unique_username (username),
  UNIQUE KEY unique_email (email)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE employees (
  id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  position VARCHAR(255) NOT NULL,
  description TEXT,
  image_url VARCHAR(255)
);

CREATE TABLE services (
  id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  description TEXT,
  price DECIMAL(10, 2) NOT NULL
);

CREATE TABLE gallery (
  id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255),
  description TEXT,
  image_url VARCHAR(255) NOT NULL
);

CREATE TABLE working_hours (
  id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  day_of_week VARCHAR(255) NOT NULL,
  opening_time TIME NOT NULL,
  closing_time TIME NOT NULL
);

CREATE TABLE reviews (
    id INT AUTO_INCREMENT PRIMARY KEY,
    author VARCHAR(255) NOT NULL,
    date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    text TEXT NOT NULL
);


CREATE TABLE useful_information (
  id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255) NOT NULL,
  description TEXT,
  image_url VARCHAR(255)
);

CREATE TABLE articles (
  id int(11) NOT NULL AUTO_INCREMENT,
  title varchar(255) NOT NULL,
  content text NOT NULL,
  created_at datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id)
);

CREATE TABLE news (
  id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255) NOT NULL,
  content TEXT,
  image_url VARCHAR(255),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE contacts (
  id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  address TEXT NOT NULL,
  phone VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL
);

CREATE TABLE staff (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    position VARCHAR(255) NOT NULL,
    photo VARCHAR(255),
    bio TEXT
);

