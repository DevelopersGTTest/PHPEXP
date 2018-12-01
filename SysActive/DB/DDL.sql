CREATE TABLE usuarios(
	id_usuario INT NOT NULL AUTO_INCREMENT,
    nombres VARCHAR(255) NOT NULL,
    apellidos VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    pass VARCHAR(255),
	PRIMARY KEY(id_usuario)
);


CREATE TABLE categoria(
	id_categoria INT NOT NULL AUTO_INCREMENT,
    nombre_categoria VARCHAR(255) NOT NULL,
    PRIMARY KEY(id_categoria)
);


CREATE TABLE post(
	id_post INT NOT NULL AUTO_INCREMENT ,
    titulo VARCHAR(255) NOT NULL,
    descripcion VARCHAR(255) NOT NULL,
    id_categoria INT NOT NULL,
    id_usuario INT NOT NULL,  
    PRIMARY KEY(id_post),
    FOREIGN KEY(id_categoria) REFERENCES categoria(id_categoria),
    FOREIGN KEY(id_usuario) REFERENCES usuarios(id_usuario)
);