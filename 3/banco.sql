create schema usuario;
use usuario;

create table tipo(
id int primary key,
tipousuario varchar(20) not null
);

create table users(
senha int primary key,
email varchar(100) not null,
foreign key (tipo)
references tipo(id)
);
