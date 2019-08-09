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



	//-------------------------------------------------INSTANCIA DE OBJETO-------------------------------------------------//
	//Validar Existencia de variables POST
	$Funcion = isset($_GET['funcion']) ? $_GET['funcion'] : null;

	switch ($Funcion) {
		case 1: Listar();
			break;		
	}


	function Listar(){
		$datosTodos = array();
		$daoPokemon = new DAOPokemon();

		foreach ($daoPokemon->listar() as $pokemon) {
			$temp = $pokemon->toArray();
			$datos = array(
				'idpokemon' => $temp[0],
            	'name' 		=> $temp[1], 
				'type' 		=> $temp[2],
				'hp' 		=> $temp[3],
				'attack' 	=> $temp[4],
				'defense' 	=> $temp[5],
				'spattack' 	=> $temp[6],
				'spdefense' => $temp[7],	
				'speed' 	=> $temp[8],	
				'ability1' 	=> $temp[9],	
				'ability2' 	=> $temp[10],	
				'imagen'	=> $temp[11],           	
				'estilo'	=> $temp[12], 
			);
			$datosTodos[] = $datos;	
		}
		echo json_encode($datosTodos);	
	}	



?>