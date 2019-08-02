<?php

	/*
	* @author Adrian 
	* https://github.com/AdrianLovo/
	*/
	
	class Pokemon{

		//Atributos
		private $idPokemon;
		private $nombre;
		private $tipo;
		private $hp;
		private $ataque;
		private $defensa;
		private $spAtaque;
		private $spDefensa;
		private $velocidad;
		private $habilidad1;
		private $habilidad2;
		private $imagen;
		private $estilo;

		//Constructor
		public function __construct($idPokemon, $nombre, $tipo, $hp, $ataque, $defensa, $spAtaque, $spDefensa, $velocidad, $habilidad1, $habilidad2, $imagen, $estilo){
			$this->idPokemon = $idPokemon;
			$this->nombre = $nombre;
			$this->tipo=$tipo;
			$this->hp=$hp;
			$this->ataque=$ataque;
			$this->defensa=$defensa;
			$this->spAtaque=$spAtaque;
			$this->spDefensa=$spDefensa;
			$this->velocidad=$velocidad;
			$this->habilidad1=$habilidad1;
			$this->habilidad2=$habilidad2;
			$this->imagen=$imagen;	
			$this->estilo=$estilo;	
		}

		
		//Metodos Get y Set
		public function getIdPokemon(){
		    return $this->idPokemon;
		}
		
		public function setIdPokemon($idPokemon){
		    $this->idPokemon = $idPokemon;
		    return $this;
		}

		public function getNombre(){
		    return $this->nombre;
		}
		
		public function setNombre($nombre){
		    $this->nombre = $nombre;
		    return $this;
		}

		public function getTipo(){
		    return $this->tipo;
		}
		
		public function setTipo($tipo){
		    $this->tipo = $tipo;
		    return $this;
		}

		public function getHp(){
		    return $this->hp;
		}
		
		public function setHp($hp){
		    $this->hp = $hp;
		    return $this;
		}

		public function getAtaque(){
		    return $this->ataque;
		}
		
		public function setAtaque($ataque){
		    $this->ataque = $ataque;
		    return $this;
		}

		public function getDefensa(){
		    return $this->defensa;
		}
		
		public function setDefensa($defensa){
		    $this->defensa = $defensa;
		    return $this;
		}

		public function getSpAtaque(){
		    return $this->spAtaque;
		}
		
		public function setSpAtaque($spAtaque){
		    $this->spAtaque = $spAtaque;
		    return $this;
		}

		public function getSpDefensa(){
		    return $this->spDefensa;
		}
		
		public function setSpDfensa($spDfensa){
		    $this->spDfensa = $spDfensa;
		    return $this;
		}
		
		public function getVelocidad(){
		    return $this->velocidad;
		}
		
		public function setVelocidad($velocidad){
		    $this->velocidad = $velocidad;
		    return $this;
		}

		public function getHabilidad1(){
		    return $this->habilidad1;
		}
		
		public function setHabilidad1($habilidad1){
		    $this->habilidad1 = $habilidad1;
		    return $this;
		}

		public function getHabilidad2(){
		    return $this->habilidad2;
		}
		
		public function setHabilidad2($habilidad2){
		    $this->habilidad2 = $habilidad2;
		    return $this;
		}

		public function getImagen(){
		    return $this->imagen;
		}
		
		public function setImagen($imagen){
		    $this->imagen = $imagen;
		    return $this;
		}

		public function getEstilo(){
		    return $this->estilo;
		}
		
		public function setEstilo($estilo){
		    $this->estilo = $estilo;
		    return $this;
		}

		//Metodo toString para mostrar campos de objeto
		public function toString(){
			echo(
				"idPokemon " . $this->idPokemon .
				"nombre " . $this->nombre .
				"tipo" . $this->tipo.
				"hp" . $this->hp.
				"ataque" . $this->ataque.
				"defensa" . $this->defensa.
				"spAtaque" . $this->spAtaque.
				"spDefensa" . $this->spDefensa.
				"velocidad" . $this->velocidad.
				"habilidad1" . $this->habilidad1.
				"habilidad2" . $this->habilidad2.
				"imagen" . $this->imagen.
				"estilo" . $this->estilo
			);
		}

		//Metodo para obtener los datos de los atributos en un array
		public function toArray(){
			$datos = array($this->idPokemon, $this->nombre, $this->tipo, $this->hp, $this->ataque, $this->defensa, $this->spAtaque, $this->spDefensa, $this->velocidad, $this->habilidad1, $this->habilidad2, $this->imagen, $this->estilo);
			return $datos;
		}

	}


?>