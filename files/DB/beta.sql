
CREATE TABLE config_prelogin(
    id_config_prelogin INT NOT NULL AUTO_INCREMENT,
    codigo_barra INT NOT NULL,
    nombres VARCHAR(255) NOT NULL,
    apellidos VARCHAR(255) NOT NULL,
    telefono_encargado VARCHAR(255) NOT NULL,
    email_encargado VARCHAR(255) NOT NULL,
    id_bus_manana INT NOT NULL,
    id_bus_tarde INT NOT NULL,
    PRIMARY KEY(id_config_prelogin)
);


CREATE TABLE bus(
    id_bus INT NOT NULL AUTO_INCREMENT,
    nombre_bus VARCHAR(255) NOT NULL,
    PRIMARY KEY(id_bus)	
);

CREATE TABLE card(
	id_card INT NOT NULL AUTO_INCREMENT,
    codigo_barra INT NOT NULL,
    codigo_raspable VARCHAR(255) not null,
    PRIMARY KEY(id_card)
);

CREATE TABLE pagos(
	id_pagos INT NOT NULL AUTO_INCREMENT,
    id_mes INT NOT NULL,
    cantidad_mes INT NOT NULL,
    cantidad_mora INT NOT NULL,
    PRIMARY KEY(id_pagos)
 );
 
 
 CREATE TABLE mes(
 	id_mes INT NOT NULL AUTO_INCREMENT,
     nombre VARCHAR(255),
     PRIMARY KEY(id_mes)
 );
 
 ALTER TABLE pagos
 	ADD FOREIGN KEY(id_mes) REFERENCES mes(id_mes)

ALTER TABLE config_prelogin
	ADD FOREIGN KEY(id_bus_manana) REFERENCES bus(id_bus);
    
ALTER TABLE config_prelogin
	ADD FOREIGN KEY(id_bus_tarde) REFERENCES bus(id_bus); 
    