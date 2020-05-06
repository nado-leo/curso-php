<?php 

loadModel('user');

class Login extends Model {
	public function checkLogin(){
		$user = User::getOne(['email' => $this->email]);// esse $this->email vem do loadFromArray

		//verifica se user tem algum dado 
		if($user) {
			if ($user->end_date) {
				throw new AppException('Usuário está desligado da empresa.');
				
			}

			// verrica se a senha passada pelo usurio é a mesma senha do banco de dados
			if (password_verify($this->password, $user->password)) {

				return $user;
				
			}


		}
		throw new AppException('Usuario/Senha inválido.');
	}

}