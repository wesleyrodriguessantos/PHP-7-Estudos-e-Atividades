create database CRUDPDO;

USE CRUDPDO;

CREATE TABLE PESSOA  (
	id int auto_increment primary key,
    nome varchar(40),
    telefone varchar (15),
    email varchar(50)
) engine = InnoDB charset=utf8;

select * from pessoa;