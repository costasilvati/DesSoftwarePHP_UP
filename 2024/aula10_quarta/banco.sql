CREATE TABLE login(
    id INTEGER AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(255),
    senha VARCHAR(255)
    );

CREATE TABLE carteira(
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(30) NOT NULL,
    descricao VARCHAR(255),
    limite DOUBLE DEFAULT 0.0
    );