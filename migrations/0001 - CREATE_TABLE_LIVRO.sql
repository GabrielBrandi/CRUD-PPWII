CREATE DATABASE IF NOT EXISTS Biblioteca;
USE Biblioteca;

CREATE TABLE LIVRO (
    ID_Livro INT PRIMARY KEY AUTO_INCREMENT,
    Nome VARCHAR(150) NOT NULL,
    Paginas INT,
    Emprestado CHAR(1),
    Sinopse VARCHAR(150),
    Genero VARCHAR(50)
);