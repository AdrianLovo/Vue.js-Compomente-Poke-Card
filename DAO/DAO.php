<?php
	
	/*
	* @author Adrian 
	* https://github.com/AdrianLovo/
	*/
	
	require_once("Conexion.php");	
	require_once("../Logs/LogError.php");
	require_once("../Logs/logWarning.php");

	abstract class Sql extends Conexion{

		abstract function queryListar();
		abstract function metodoListar($resultSet);
		
		/*
		* Metodo para listar todos los elementos de tabla 
 		* @access: public
 		* @return: array() de objetos  
 		*/
		public function listar() {
			$arrayDeObjetos = array();
			$pdo = $this->conectar();
			try {
				$resultSet = $pdo->query($this->queryListar());
				$arrayDeObjetos = $this->metodoListar($resultSet);
				$this->desconectar();
				return $arrayDeObjetos;
			} catch (Exception $e) {
				LogErro::guardarLog("Sql.log", $e->getMessage(), $e->getCode(), $e->getFile(), $e->getLine());
			}finally{
				$this->desconectar();
			}
		}		

	}




