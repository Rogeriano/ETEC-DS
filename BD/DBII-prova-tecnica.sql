CREATE DATABASE loja;
USE loja;


CREATE TABLE fornecedores (
    id_fornecedor INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(250) NOT NULL,
    cnpj VARCHAR(20) UNIQUE, 
    cpf VARCHAR(20) UNIQUE,
    telefone VARCHAR(20) NOT NULL
);

CREATE TABLE produtos (
    id_produto INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(250) NOT NULL,
    preco DECIMAL(10,2) NOT NULL,
    quant_estoque INT NOT NULL,
    id_fornecedor INT,
    FOREIGN KEY (id_fornecedor) REFERENCES fornecedores(id_fornecedor)
);

CREATE TABLE colaboradores (
    id_colaborador INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(250) NOT NULL,
    cargo VARCHAR(100) NOT NULL,
    salario DECIMAL(100) NOT NULL
);

CREATE TABLE pedidos (
    id_pedido INT AUTO_INCREMENT PRIMARY KEY,
    data_pedido DATE NOT NULL,
    quantidade INT NOT NULL,
    id_colaborador INT NOT NULL,
    id_produto INT NOT NULL,
    FOREIGN KEY (id_colaborador) REFERENCES colaboradores(id_colaborador),
    FOREIGN KEY (id_produto) REFERENCES produtos(id_produto)
);
