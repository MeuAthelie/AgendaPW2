create database Agenda;
use Agenda;

CREATE TABLE contatos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(200) NOT NULL
);

INSERT INTO contatos (nome) VALUES 
	("Paulo Prates"),
    ("Victor Oliveira"),
    ("Tio João");

SELECT * FROM contatos;
DROP TABLE contatos;