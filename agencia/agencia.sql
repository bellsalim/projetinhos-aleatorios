CREATE DATABASE Agencia;
USE Agencia;

CREATE TABLE adm(
	codigo int PRIMARY KEY NOT NULL,
	nome varchar(40) NOT NULL,
	senha varchar(20) NOT NULL,
	email varchar(20),
	telefone varchar(15)
);

CREATE TABLE gerenciamento(
	codigo_adm int(4),
  cod_eventos int(4)
);

CREATE TABLE viagens(
	codigo int(4) PRIMARY KEY NOT NULL AUTO_INCREMENT,
	nome varchar(40) NOT NULL,
	duracao int(3) NOT NULL,
	valor float(7,2) NOT NULL,
	disponivel set("S","N") NOT NULL
);

CREATE TABLE agendamento(
	codigo_companhia int(4) NOT NULL,
  codigo_viagens int(4) NOT NULL,
  periodo varchar(20),
  ensaio varchar(20)
);
CREATE TABLE companhia_agencia(
	cnpj varchar(25) PRIMARY KEY NOT NULL,
  nome varchar(40) NOT NULL,
  email varchar(20),
  telefone varchar(15) 
);



CREATE TABLE compra(
	  codigo_cliente int(4) NOT NULL,
	data_compra datetime NOT NULL, 
  poltrona varchar(4) NOT NULL
);


CREATE TABLE clientes(
	CPF varchar(11) PRIMARY KEY NOT NULL,
  nome varchar(50) NOT NULL,
  n_cartão varchar(16) NOT NULL,
  cvc varchar(3) NOT NULL
);

INSERT INTO `viagens` (`nome`, `duracao`, `valor_passagem`, `disponivel`) VALUES
('Pacote Hotel Akmani Legian', 4, 1500.00, 'S'),
('Pacote The Grace Hotel', 3, 1250.00, 'S'),
('Pacote Hotel Milat Cave', 7, 1680.00, 'S'),
