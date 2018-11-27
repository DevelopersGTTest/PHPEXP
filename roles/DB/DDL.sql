CREATE TABLE rol(
	id_rol INT NOT NULL AUTO_INCREMENT ,
    nombre VARCHAR(255) NOT NULL,
    PRIMARY KEY(id_rol)
);


CREATE TABLE usuarios(
	id_usuario INT NOT NULL AUTO_INCREMENT,
    nick VARCHAR(255) NOT NULL,
    pass VARCHAR(255) NOT NULL,
    id_rol INT NOT NULL,
    PRIMARY KEY(id_usuario),
    FOREIGN KEY(id_rol) REFERENCES rol(id_rol)
);
