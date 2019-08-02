CREATE DATABASE pokedex
GO
CREATE TABLE IF NOT EXISTS pokemon(
    idPokemon INT NOT NULL AUTO_INCREMENT COMMENT 'Clave primaria',
    nombre VARCHAR(50),
    tipo VARCHAR(50),
    hp INT,
    ataque INT,
    defensa INT,
    spAtaque INT,
    spDefensa INT,
    velocidad INT,
    habilidad1 VARCHAR(200),
    habilidad2 VARCHAR(200),
    imagen VARCHAR(300),
    estilo VARCHAR(50),
    PRIMARY KEY (idPokemon)
)
GO
CREATE USER 'bdcrud'@'localhost' IDENTIFIED BY ''
GO
GRANT ALL PRIVILEGES ON * . * TO 'bdcrud'@'localhost'
Go

GO
SELECT * FROM pokedex.pokemon
