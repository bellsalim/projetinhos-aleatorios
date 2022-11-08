CREATE DATABASE teatro;
USE teatro;

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

CREATE TABLE eventos(
	codigo int(4) PRIMARY KEY NOT NULL AUTO_INCREMENT,
	nome varchar(40) NOT NULL,
	tipo_evento varchar(30) NOT NULL,
	duracao int(3) NOT NULL,
	valor_ingresso float(5,2) NOT NULL,
	em_cartaz set("S","N") NOT NULL
);

CREATE TABLE agendamento(
	codigo_companhia int(4) NOT NULL,
  codigo_evento int(4) NOT NULL,
  periodo varchar(20),
  ensaio varchar(20)
);
CREATE TABLE companhia_teatro(
	cnpj varchar(25) PRIMARY KEY NOT NULL,
  nome varchar(40) NOT NULL,
  email varchar(20),
  telefone varchar(15) 
);

CREATE TABLE eventos_em_cartaz(
	codigo_eventos int(4) NOT NULL,
	data_evento datetime NOT NULL,
	periodo varchar(20) NOT NULL
);

CREATE TABLE compra(
	codigo_evento int(4) NOT NULL,
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

INSERT INTO `eventos` (`nome`, `tipo_evento`, `duracao`, `valor_ingresso`, `em_cartaz`) VALUES
('Fantasma da Ópera', 'Peça de Teatro', 146, 380.00, 'S'),
('Lago dos Cisnes', 'Musical', 120, 250.00, 'S'),
('Tributo ao Led Zeppelin', 'Concerto', 78, 70.00, 'S'),
('Corcunda de Notre Dame', 'Peça de Teatro', 118, 289.00, 'N'),
('A Bela e a Fera', 'Peça de Teatro', 98, 176.00, 'N'),
('Filarmônica Jundiaí', 'Concerto', 90, 20.00, 'N');