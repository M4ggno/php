create schema teste;

use teste;

create table aluno(
    cod int PRIMARY key,
    email varchar(50) not null,
    nome varchar(50) not null
);