CREATE DATABASE IF NOT EXISTS biblioteca;

USE biblioteca;

CREATE TABLE IF NOT EXISTS categoria (
    id_categoria INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL UNIQUE,
    descricao TEXT
);

CREATE TABLE IF NOT EXISTS livro (
    id_livro INT PRIMARY KEY AUTO_INCREMENT,
    titulo VARCHAR(255) NOT NULL,
    ano_pub VARCHAR(4),
    autor VARCHAR(255),
    resumo TEXT,
    capa VARCHAR(255),
    id_categoria INT,
    FOREIGN KEY (id_categoria) REFERENCES categoria (id_categoria)
);

CREATE TABLE IF NOT EXISTS usuario (
    id_usuario INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,
    foto VARCHAR(255),
    nivel_acesso INT NOT NULL DEFAULT 1
);

-- seeds
INSERT INTO categoria (nome) VALUES 
("Romance"), 
("Terror"), 
("Fantasia");

INSERT INTO livro (titulo, ano_pub, autor, resumo, id_categoria) VALUES 
("Orgulho e Preconceito", "1813", "Jane Austen", "Orgulho e Preconceito, de Jane Austen, conta a história de Elizabeth Bennet, uma jovem inteligente e determinada que vive com sua família na Inglaterra do século XIX. Ao conhecer o orgulhoso e reservado Sr. Darcy, Elizabeth cria uma primeira impressão negativa sobre ele, dando início a uma relação marcada por desentendimentos, julgamentos e diferenças sociais. Com o passar do tempo, ambos precisam superar seus preconceitos e reconhecer os próprios erros para compreender seus verdadeiros sentimentos. A obra aborda temas como amor, orgulho, preconceito, casamento e desigualdade social, mostrando a importância de não julgar as pessoas pelas aparências.", 1), 
("It: A Coisa", "1986", "Stephen King", "It: A Coisa, de Stephen King, conta a história de um grupo de amigos que vive na cidade de Derry, onde crianças começam a desaparecer misteriosamente. Unidos pela amizade, eles descobrem a existência de uma criatura assustadora que assume diferentes formas, principalmente a de um palhaço chamado Pennywise, e se alimenta do medo de suas vítimas. Ao enfrentarem esse ser sobrenatural, os amigos precisam superar seus maiores medos e unir forças para tentar derrotá-lo. A obra aborda temas como amizade, coragem, traumas e a importância de enfrentar os próprios medos diante de situações aterrorizantes.", 2), 
("Harry Potter e a Pedra Filosofal", "1997", "J.K. Rowling", "Harry Potter e a Pedra Filosofal, de J. K. Rowling, conta a história de Harry Potter, um menino órfão que vive com seus tios e descobre, ao completar onze anos, que é um bruxo. Ele é convidado a estudar na Escola de Magia e Bruxaria de Hogwarts, onde faz amizade com Rony Weasley e Hermione Granger e começa a conhecer seu passado misterioso. Durante o ano letivo, os três descobrem a existência da Pedra Filosofal, um objeto mágico muito poderoso, e tentam impedir que ela caia nas mãos erradas. A obra aborda temas como amizade, coragem, lealdade e a luta entre o bem e o mal.", 3);
