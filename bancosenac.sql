CREATE DATABASE projetoloja ;
use projetoloja;

CREATE TABLE funcionarios (
id_funcionario INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
nome_funcionario VARCHAR(50) NOT NULL,
telefone BIGINT
);

INSERT INTO funcionarios VALUES (1, "Rayane Nascimento", 21987654321);

SELECT * FROM funcionarios;