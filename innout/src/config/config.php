<?php 
/* Este arquivo vai conter todas as configuraççoes da aplicaçao,
	Tais como : contantes pre definidas de diretorios, inicializaçao do banco de dados
*/
/* seta o fuso horário */
date_default_timezone_set('America/Sao_Paulo');	

setlocale(LC_TIME,'pt_BR','pt_BR.utf-8','portuguese');

/* Constantes Pastas */
define('MODEL_PATH',realpath(dirname(__FILE__). '/../models'));
define('VIEW_PATH',realpath(dirname(__FILE__). '/../views'));
define('VIEW_TEMPLATE_PATH',realpath(dirname(__FILE__). '/../views/templates'));

define('CONTROLLER_PATH',realpath(dirname(__FILE__). '/../controllers'));
define('EXCEPTION_PATH',realpath(dirname(__FILE__).'/../exceptions'));


/* Carrega a conexao do banco de dados */
require_once(realpath(dirname(__FILE__) . '/database.php'));
require_once(MODEL_PATH . '/model.php');
require_once(realpath(dirname(__FILE__). '/loader.php'));
require_once(EXCEPTION_PATH . '/appException.php');