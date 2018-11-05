
CREATE TABLE config_prelogin(
    id_config_prelogin INT NOT NULL AUTO_INCREMENT,
    codigo_barra INT NOT NULL,
    nombres VARCHAR(255) NOT NULL,
    apellidos VARCHAR(255) NOT NULL,
    id_bus_manana INT NOT NULL,
    id_bus_tarde INT NOT NULL,
    PRIMARY KEY(id_config_prelogin)
);


CREATE TABLE bus(
    id_bus INT NOT NULL AUTO_INCREMENT,
    nombre_bus VARCHAR(255) NOT NULL,
    PRIMARY KEY(id_bus)	
);

ALTER TABLE config_prelogin
	ADD FOREIGN KEY(id_bus_manana) REFERENCES bus(id_bus);
    
ALTER TABLE config_prelogin
	ADD FOREIGN KEY(id_bus_tarde) REFERENCES bus(id_bus); 
    