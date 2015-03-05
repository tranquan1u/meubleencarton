<?php 

class UsersController extends AppController {

public function login()
	{
		$this->layout = 'blank';

		//$this->User->create();
		//$this->User->save(array('username' =>'root', 'password' => $this->Auth->password('toor'), 'access' => 1));
		
		if(!empty($this->data)){
			if($this->Auth->login()){
				$this->Session->setFlash('<strong>Félicitation</strong> Vous vous etes Identifié avec succes', 'flash_success');
				$this->redirect('/');
			} else {
				$this->redirect('/users/login');
			}
		}
		
	}

public function logout() {
    return $this->redirect($this->Auth->logout());
}

}