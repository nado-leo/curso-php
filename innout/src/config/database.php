<?php  

class Database {
	public static function getConnection(){
		
		/* Pega o caminho do arquivo de configuração env.ini */
		$envPath = realpath(dirname(__FILE__). '/../env.ini'); 
		
		/* Pega as informações no arquivo env.ini */
		$env = parse_ini_file($envPath);

		/* Cria um objeto da conexao */
		$conn = new mysqli($env['host'],$env['username'],$env['password'],$env['database']);

		/* testa a conexao  caso mau sucedida retorna um erro*/
		if($conn->connect_error){
			die("Erro:" . $conn->connect_error);
		}

		return $conn;
	}

	public static function getResultFromQuery($sql){

		/* chama o metodo getConnection para ultilizar a conexao neste metodo
			Observação que por ser um metodo static foi usado o self:: */
		$conn = self::getConnection();

		
		$result = $conn->query($sql);

		return $result;



	}
}
