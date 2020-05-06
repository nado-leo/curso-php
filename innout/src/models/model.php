<?php 
ini_set('display',1);
class Model {
	/* Esta é uma classe generica ,pois as mais especificas vao herdar desta classe 
		$table defifine de forma generia a tabela do banco de dados
		$colunms defifine	 de  forma generia a colunas do banco de dados

	*/

	protected static $tableName = '';
	protected static $colunms = [];
	protected $values = [];


	/* metodo contrutor que recebe um array ao invocar a classe Model */
	function __construct($arr){
		$this->loadFromArray($arr);

	}

	/**
	 * 
	 */
	public function loadFromArray($arr){
		
		/**
		 * Verifica se o array esta setado 
		 */
		if ($arr) {
			foreach($arr as $key => $value){
				$this->$key = $value;

			}	
		}
	}

	public function __get($key){
		/**
		 * Retorna o valor de $values
		 */
		return $this->values[$key];


	}

	public function __set($key , $value){
		/* Atribue uma chave valor ao atributo $values */
		$this->values[$key] = $value ;
	}


	/* pega apanas um unico registro */
	public static function getOne($filters = [] ,  $columns = '*' ){
		$class = get_called_class();
		$result = static::getResultSetFromSelect($filters, $columns = '*');
		return $result ? new $class($result->fetch_assoc()) : null ;
	}	
	

	public static function get($filters = [] ,  $columns = '*' ){
		$object = [];
		$result = static::getResultSetFromSelect($filters, $columns = '*');
		if($result){
			$class = get_called_class();

			while($row = $result->fetch_assoc()){
				array_push($object, new $class($row));
			}
		}
		return $object;
	}

	

	/**
	 * $columns : paramentros das colunas 	
	 * $filters : filtros da clausula where
	 */
	public static function getResultSetFromSelect($filters = [], $columns = '*'){
		$sql = "SELECT  ${columns} FROM " . static::$tableName . static::getFilter($filters);
		$result = Database::getResultFromQuery($sql);
		if($result->num_rows === 0){
			return null;
		}else {
			return $result;
		}
	}

	/**
	 *  parte da clausula where
	 */
	public static function getFilter($filters){
		$sql = "";
		if (count($filters) > 0) {
			$sql .= " WHERE 1 = 1 ";
			foreach($filters as $colunm => $value){
				$sql .= " AND ${colunm} = " . static::getFormatedValue($value);
			}

		}
		return $sql;
	}

	public static function getFormatedValue($value){
		
		if(is_null($value)){
			return "null";
		}elseif(gettype($value) === 'string'){
			return "'${value}'";
		}else {
			return $value;
		}
	}
}

