CREATE DATABASE guiaturisticogrb;
USE guiaturisticogrb;

CREATE TABLE rotas (id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,nome VARCHAR(50) NOT NULL, origemlat INT NOT NULL, origemlongi INT NOT NULL,
 destinolat INT NOT NULL, destinolongi INT NOT NULL, descricao VARCHAR(250));
CREATE TABLE markers(id INT NOT NULL PRIMARY KEY,nome VARCHAR(50) NOT NULL, lat INT NOT NULL, longi INT NOT NULL, categoria INT NOT NULL, descricao VARCHAR(250));
