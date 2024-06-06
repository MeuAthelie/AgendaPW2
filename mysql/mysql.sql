create database Agenda;
use Agenda;

CREATE TABLE contatos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(200) NOT NULL,
    email VARCHAR(150) NOT NULL,
    telefone VARCHAR(30) NOT NULL
);

INSERT INTO contatos (nome, email, telefone) VALUES 
	("Paulo Prates", "paulo@mail.com", "(11) 94002-8922"),
    ("Victor Oliveira", "victor@mail.com", "(11) 92345-5678");

DROP TABLE contatos;