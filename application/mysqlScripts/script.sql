CREATE DATABASE IF NOT EXISTS clinica;

USE clinica;

CREATE TABLE IF NOT EXISTS paciente(
	codigoPaciente INT NOT NULL AUTO_INCREMENT,
    dpi INT NOT NULL, 
    nombre VARCHAR(250) NOT NULL,
    sexo VARCHAR(1) NOT NULL,
    telefono INT,
    correo VARCHAR(100),
    estado INT NOT NULL,
    CONSTRAINT pk_paciente PRIMARY KEY(codigoPaciente),
    CONSTRAINT uk_dpi UNIQUE(dpi)
);

CREATE TABLE IF NOT EXISTS alergia(
	codigoAlergia INT NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(250) NOT NULL,
    codigoPaciente INT NOT NULL,
    estado INT NOT NULL,
    CONSTRAINT pk_alergia PRIMARY KEY(codigoAlergia),
    CONSTRAINT fk_alergia FOREIGN KEY(codigoPaciente) REFERENCES paciente(codigoPaciente)
);

CREATE TABLE IF NOT EXISTS referencia(
	codigoReferencia INT NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(250) NOT NULL,
    parentezco VARCHAR(250) NOT NULL,
    telefono INT NOT NULL,
    correo VARCHAR(100),
    codigoPaciente INT NOT NULL,
    estado INT NOT NULL,
    CONSTRAINT pk_referencia PRIMARY KEY(codigoReferencia),
    CONSTRAINT fk_referencia FOREIGN KEY(codigoPaciente) REFERENCES paciente(codigoPaciente)
);

CREATE TABLE IF NOT EXISTS visita(
	codigoVisita INT NOT NULL AUTO_INCREMENT,
    fecha VARCHAR(150) NOT NULL,
    motivo VARCHAR(250) NOT NULL,
    codigoPaciente INT NOT NULL,
    estado INT NOT NULL,
    CONSTRAINT pk_visita PRIMARY KEY(codigoVisita),
    CONSTRAINT fk_visita FOREIGN KEY(codigoPaciente) REFERENCES paciente(codigoPaciente)
);

CREATE TABLE IF NOT EXISTS examen(
	codigoExamen INT NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(250) NOT NULL,
    detalle VARCHAR(250) NOT NULL,
    codigoVisita INT NOT NULL,
    estado INT NOT NULL,
    CONSTRAINT pk_examen PRIMARY KEY(codigoExamen),
    CONSTRAINT fk_examen FOREIGN KEY(codigoVisita) REFERENCES visita(codigoVisita)
);

INSERT INTO paciente(dpi, nombre, sexo, telefono, correo, estado) VALUES(00001, 'pacienteA', 'M', '2345678', 'pacienteA@correo.com', 0);

SELECT * FROM paciente WHERE estado = 0;
SELECT * FROM paciente;

INSERT INTO alergia(nombre, codigoPaciente, estado) VALUES('alergia a las abejas', 1, 0);

SELECT * FROM alergia;

UPDATE alergia SET estado = 0 WHERE codigoAlergia > 0;

SELECT * FROM referencia;

INSERT INTO referencia(nombre, parentezco, telefono, correo, codigoPaciente, estado) 
VALUES('ref1', 'parentezcoA', 151226, 'abc@gmai.com', 1, 0);

UPDATE referencia SET estado = 0 WHERE codigoReferencia > 0;