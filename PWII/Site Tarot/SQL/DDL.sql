CREATE DATABASE tarot;
USE tarot;


CREATE TABLE usuarios (
	id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR  (100) NOT NULL,
    email VARCHAR (100) NOT NULL UNIQUE,
    telefone VARCHAR (255),
    senha VARCHAR (255)

);
