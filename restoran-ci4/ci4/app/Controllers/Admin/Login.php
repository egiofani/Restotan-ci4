<?php

namespace App\Controllers\Admin ;

use App\Controllers\BaseController;
use App\Models\User_M;


class Login extends BaseController
{
	public function index()
	{
		
		if ($this->request->getMethod() == 'post') {
			$email = $this->request->getPost('email');
			$password = $this->request->getPost('password');
			$password = password_verify($password,' ');
			
			$model = new User_M();
			$user = $model->where(['email'=>$email , 'password'=>$password , 'aktif' => 1])->first();
			
			if ($user) {
				$this->setSession($user);
				return redirect()->to(base_url("/admin"));	
			} else {
				$data['info']="User atau Password Salah !";
			}
			
		}
		 return view('admin/login');
	}

	



	public function setSession($user)
	{
		$data = [
			'user' => $user['user'],
			'email' => $user['email'],
			'loggedIn' => true
		];

		session()->set($data);
	}

	public function logout()
	{
		session()->destroy();
		return redirect()->to(base_url('/login'));
	}

	

	//--------------------------------------------------------------------

}

