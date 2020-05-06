<?php 
require_once(realpath(MODEL_PATH . '/model.php'));

class User extends Model {

	/**
	 *  Os atributos $table e colunms sao herdados da classe model
	 *  na classe model eles sao declarado de forma generica
	 *  Aqui ja sao declarados de forma mais 
	 */
	protected static $tableName = 'users';
	protected static $colunms = [
							        'id',
							        'name',
							        'password',
							        'email',
							        'start_date',
							        'end_date',
							        'is_admin'

								];
}

