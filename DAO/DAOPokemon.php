<?php

	/*
	* @author Adrian 
	* https://github.com/AdrianLovo/
	*/
	
	require_once("DAO.php");
	require_once("../Modelos/Pokemon.php");

	class DAOPokemon extends Sql{
	
		public function queryListar(){
			$query = "SELECT * FROM pokedex.pokemon";
			return $query;
		}

		public function metodoListar($resultSet){
			$arrayDeObjetos = array();
			if(!empty($resultSet)){
				foreach($resultSet as $fila){
					$a = new Pokemon($fila[0], $fila[1], $fila[2], $fila[3], $fila[4], $fila[5], $fila[6], $fila[7], $fila[8], $fila[9], $fila[10], $fila[11], $fila[12]);
					array_push($arrayDeObjetos, $a);
				}	
			}	
			return $arrayDeObjetos;
		}
				
	}


?>