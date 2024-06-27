create schema seila;

use seila;

create table professor(
    mat int primary key,
    nome varchar (50) not null,
    email varchar (50) not null,
    tel real not null,
    endereco varchar (100) null
);