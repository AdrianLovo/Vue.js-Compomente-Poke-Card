<?php

	/*
	* @author Adrian 
	* https://github.com/AdrianLovo/
	*/
	
	require_once("../DAO/DAOPokemon.php");
	require_once("../Modelos/Pokemon.php");

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