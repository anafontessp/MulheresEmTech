CREATE DATABASE mulheresemtech30; 

USE mulheresemtech30;

CREATE TABLE tbCadastro(
    idUsuario INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    nome VARCHAR(250) NOT NULL,
    email VARCHAR(250) NOT NULL,
    senha VARCHAR(250) NOT NULL,
    progresso INT NOT NULL
);
