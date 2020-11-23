CREATE DATABASE IF NOT EXISTS DAW218DBProyectoTema5;

USE DAW218DBProyectoTema5;

CREATE USER 'usuarioDAW218DBProyectoTema5'@'%' IDENTIFIED BY 'P@ssw0rd';

GRANT ALL PRIVILEGES ON 'DAW218DBProyectoTema5'.* TO 'usuarioDAW218DBProyectoTema5'@'%';

CREATE TABLE Departamento (
  CodDepartamento VARCHAR(3) PRIMARY KEY,
	DescDepartamento VARCHAR(255) NOT NULL,
	FechaBajaDepartamento DATE DEFAULT NULL, -- Valor por defecto null, ya que cuando lo creas no puede estar de baja logica
	FechaCreacionDepartamento DATE NOT NULL,
	VolumenNegocio FLOAT NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=LATIN1;

CREATE TABLE Usuario (
	CodUsuario VARCHAR(15) PRIMARY KEY,
	DescUsuario VARCHAR(250) NOT NULL,
	Password VARCHAR(64) NOT NULL,
	Perfil ENUM('administrador', 'usuario') DEFAULT 'usuario',
	FechaHoraUltimaConexion TIMESTAMP,
	ImagenUsuario MEDIUMBLOB 
    /*Los tipos BLOB se utilizan para almacenar datos binarios como pueden ser ficheros.
    MediumBlob es un texto con un máximo de 16.777.215 caracteres.
    */
)ENGINE=INNODB DEFAULT CHARSET=LATIN1;