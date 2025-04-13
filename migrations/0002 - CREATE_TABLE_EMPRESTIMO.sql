USE Biblioteca;

CREATE TABLE EMPRESTIMO (
    ID_Emprestimo INT PRIMARY KEY AUTO_INCREMENT,
    ID_Livro INT,
    Data_Emprestimo DATE NOT NULL,
    Data_Devolucao DATE,
    FOREIGN KEY (ID_Livro) REFERENCES LIVRO(ID_Livro)
);