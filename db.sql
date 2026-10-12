CREATE DATABASE landing_page

use landing_page;



CREATE TABLE usuario(
id_usuario INT AUTO_INCREMENT PRIMARY KEY,
nombre VARCHAR(30),
apellidos VARCHAR(30),
email VARCHAR(50),
telefono INT(30),
modalidad ENUM('Presencial', 'A distancia', 'Desconocida') NOT NULL DEFAULT 'Presencial',
mensaje VARCHAR(500),
acepto_politica ENUM('Y', 'N') NOT NULL DEFAULT 'N'

);
