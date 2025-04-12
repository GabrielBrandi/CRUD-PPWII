USE Biblioteca;

CREATE TABLE EMPRESTIMO (
    ID_Emprestimo INT PRIMARY KEY AUTO_INCREMENT,
    ID_Cliente INT,
    ID_Livro INT,
    Data_Inicio DATE NOT NULL,
    Data_Fim DATE,
    FOREIGN KEY (ID_Cliente) REFERENCES CLIENTE(ID_Cliente),
    FOREIGN KEY (ID_Livro) REFERENCES LIVRO(ID_Livro)
);