CREATE DATABASE pokedex
GO
CREATE TABLE pokemon  ( 
	idPokemon      INT NOT NULL AUTO_INCREMENT COMMENT 'Clave primaria',
	nombre    	VARCHAR(50) NULL,
	tipo      	VARCHAR(50) NULL,
	hp        	INT(11) NULL,
	ataque    	INT(11) NULL,
	defensa   	INT(11) NULL,
	spAtaque  	INT(11) NULL,
	spDefensa 	INT(11) NULL,
	velocidad 	INT(11) NULL,
	habilidad1	VARCHAR(200) NULL,
	habilidad2	VARCHAR(200) NULL,
	imagen    	VARCHAR(300) NULL,
	estilo    	VARCHAR(50) NULL,
	PRIMARY KEY (idPokemon)
)
GO
CREATE USER 'bdcrud'@'localhost' IDENTIFIED BY ''
GO
GRANT ALL PRIVILEGES ON * . * TO 'bdcrud'@'localhost'
GO

INSERT INTO pokemon(idPokemon, nombre, tipo, hp, ataque, defensa, spAtaque, spDefensa, velocidad, habilidad1, habilidad2, imagen, estilo)
  VALUES(1, 'Eevee', 'normal', 55, 55, 50, 45, 65, 55, 'Run Away', 'Anticipation', 'Resources/img/1200px-133Eevee.png', 'card card--normal')
GO
INSERT INTO pokemon(idPokemon, nombre, tipo, hp, ataque, defensa, spAtaque, spDefensa, velocidad, habilidad1, habilidad2, imagen, estilo)
  VALUES(2, 'Vaporeon', 'water', 130, 65, 60, 110, 95, 65, 'Absorb', 'Hydration', 'Resources/img/1200px-134Vaporeon.png', 'card card--water')
GO
INSERT INTO pokemon(idPokemon, nombre, tipo, hp, ataque, defensa, spAtaque, spDefensa, velocidad, habilidad1, habilidad2, imagen, estilo)
  VALUES(3, 'Jolteon', 'electric', 65, 65, 60, 110, 95, 130, 'Volt Absorb', 'Quick Feet', 'Resources/img/1200px-135Jolteon.png', 'card card--electric')
GO
INSERT INTO pokemon(idPokemon, nombre, tipo, hp, ataque, defensa, spAtaque, spDefensa, velocidad, habilidad1, habilidad2, imagen, estilo)
  VALUES(4, 'Umbreon', 'dark', 95, 65, 110, 60, 130, 65, 'Synchronize', 'Inner Focus', 'Resources/img/600px-197Umbreon.png', 'card card--dark')
GO
INSERT INTO pokemon(idPokemon, nombre, tipo, hp, ataque, defensa, spAtaque, spDefensa, velocidad, habilidad1, habilidad2, imagen, estilo)
  VALUES(5, 'Leafeon', 'grass', 65, 110, 130, 60, 65, 95, 'Leaf Guard', 'Chlorophyll', 'Resources/img/600px-470Leafeon.png', 'card card--grass')
GO
INSERT INTO pokemon(idPokemon, nombre, tipo, hp, ataque, defensa, spAtaque, spDefensa, velocidad, habilidad1, habilidad2, imagen, estilo)
  VALUES(6, 'Glaceon', 'ice', 65, 60, 110, 130, 95, 65, 'Snow Cloak', 'Ice Body', 'Resources/img/600px-471Glaceon.png', 'card card--ice')
GO
INSERT INTO pokemon(idPokemon, nombre, tipo, hp, ataque, defensa, spAtaque, spDefensa, velocidad, habilidad1, habilidad2, imagen, estilo)
  VALUES(7, 'Espeon', 'psychic', 65, 65, 60, 130, 95, 110, 'Synchronize', 'Magic Bounce', 'Resources/img/1200px-196Espeon.png', 'card card--psychic')
GO
INSERT INTO pokemon(idPokemon, nombre, tipo, hp, ataque, defensa, spAtaque, spDefensa, velocidad, habilidad1, habilidad2, imagen, estilo)
  VALUES(8, 'Flareon', 'fire', 65, 130, 60, 95, 110, 65, 'Flash Fire', 'Guts', 'Resources/img/1200px-136Flareon.png', 'card card--fire')
GO
INSERT INTO pokemon(idPokemon, nombre, tipo, hp, ataque, defensa, spAtaque, spDefensa, velocidad, habilidad1, habilidad2, imagen, estilo)
  VALUES(9, 'Sylveon', 'fairy', 95, 65, 65, 110, 130, 60, 'Cute Charm', 'Pixilate', 'Resources/img/600px-700Sylveon.png', 'card card--fairy')
GO

