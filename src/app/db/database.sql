CREATE DATABASE constructoras;
use constructoras;

CREATE TABLE users(
    id_users INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(75) not null,
    telefono VARCHAR(255) not null,
    email VARCHAR(75) not null,
    codigo VARCHAR(10) not null,
    data_create timestamp default current_timestamp
);

select * from users;

INSERT INTO users(nombre,telefono,email,codigo) values
('wilson.valencia','3042258679','wilson.evs@hotmail.com','as123'),
('wilson.saldarriaga','3042258679','wilson.saldarriaga@hotmail.com','as124'),
('johana.valencia','3042258679','johana.evs@hotmail.com','as125'),
('johana.saldarriaga','3042258679','johana.saldarriaga@hotmail.com','as1236'),
('liz.alegre','3042258679','liz.alegre@hotmail.com','as127'),
('liz.gutierrez','3042258679','liz.gutierrez@hotmail.com','as128'),
('wilson.valencia','3042258679','wilson.evs@hotmail.com','as129'),
('wilson.saldarriaga','3042258679','wilson.saldarriaga@hotmail.com','as130'),
('johana.valencia','3042258679','johana.evs@hotmail.com','as131'),
('johana.saldarriaga','3042258679','johana.saldarriaga@hotmail.com','as1232'),
('liz.alegre','3042258679','liz.alegre@hotmail.com','as133'),
('liz.gutierrez','3042258679','liz.gutierrez@hotmail.com','as134'),
('wilson.valencia','3042258679','wilson.evs@hotmail.com','as123'),
('wilson.saldarriaga','3042258679','wilson.saldarriaga@hotmail.com','as124'),
('johana.valencia','3042258679','johana.evs@hotmail.com','as125'),
('johana.saldarriaga','3042258679','johana.saldarriaga@hotmail.com','as1236'),
('liz.alegre','3042258679','liz.alegre@hotmail.com','as127'),
('liz.gutierrez','3042258679','liz.gutierrez@hotmail.com','as128'),
('wilson.valencia','3042258679','wilson.evs@hotmail.com','as129'),
('wilson.saldarriaga','3042258679','wilson.saldarriaga@hotmail.com','as130'),
('johana.valencia','3042258679','johana.evs@hotmail.com','as131'),
('johana.saldarriaga','3042258679','johana.saldarriaga@hotmail.com','as1232'),
('liz.alegre','3042258679','liz.alegre@hotmail.com','as133'),
('liz.gutierrez','3042258679','liz.gutierrez@hotmail.com','as134');

CREATE TABLE proyectos(
   codigo_proyectos INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(75) not null,
    direccion VARCHAR(75) not null,
    constructora VARCHAR(75) not null,
    contacto VARCHAR(255) not null,
    data_create timestamp default current_timestamp
);

select * from proyectos;

INSERT INTO proyectos(nombre,direccion,constructora,contacto) values
('wilson.valencia','calle 22 #54-23','as123','3042258679'),
('wilson.saldarriaga','calle 22 #54-23','as124','3042258679'),
('johana.valencia','calle 22 #54-23','as125','3042258679'),
('johana.saldarriaga','calle 22 #54-23','as1236','3042258679'),
('liz.alegre','calle 22 #54-23','as127','3042258679'),
('liz.gutierrez','liz.gutierrez@hotmail.com','as128','3042258679'),
('wilson.valencia','calle 22 #54-23','as129','3042258679'),
('wilson.saldarriaga','calle 22 #54-23','as130','3042258679'),
('johana.valencia','calle 22 #54-23','as131','3042258679'),
('johana.saldarriaga','calle 22 #54-23','as1232','3042258679'),
('liz.alegre','calle 22 #54-23','as133','3042258679'),
('liz.gutierrez','liz.gutierrez@hotmail.com','as134','3042258679'),
('wilson.valencia','calle 22 #54-23','as123','3042258679'),
('wilson.saldarriaga','calle 22 #54-23','as124','3042258679'),
('johana.valencia','calle 22 #54-23','as125','3042258679'),
('johana.saldarriaga','calle 22 #54-23','as1236','3042258679'),
('liz.alegre','calle 22 #54-23','as127','3042258679'),
('liz.gutierrez','liz.gutierrez@hotmail.com','as128','3042258679'),
('wilson.valencia','calle 22 #54-23','as129','3042258679'),
('wilson.saldarriaga','calle 22 #54-23','as130','3042258679'),
('johana.valencia','calle 22 #54-23','as131','3042258679'),
('johana.saldarriaga','calle 22 #54-23','as1232','3042258679'),
('liz.alegre','calle 22 #54-23','as133','3042258679'),
('liz.gutierrez','calle 22 #54-23','as134','3042258679');