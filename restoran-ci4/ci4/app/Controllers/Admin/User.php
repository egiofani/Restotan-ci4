<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\User_M;

class User extends BaseController
{
    public function index()
    {
        return view('admin/user');

    }

    public function select()
    {
        $model = new User_M();
		//$user = $model ->findAll();
		
		$pager = \Config\Services::pager();

        $data =[
			//'pelanggan'=>$pelanggan,
			'user' => $model->paginate(5,'page'),
            'pager' => $model->pager
        ];
        
        
        echo view ('admin/user/select',$data);

    }

    public function create()
    {	
		
		$data=[
			'level' =>	['Admin' , 'Koki' , 'Kasir']
		];
        echo view ("admin/user/insert");

    }

    public function insert()
	{
		
	
		

		if(isset($_POST['password'])){
			
			$data = [
				'user' => $_POST['user'],
				'email' => $_POST['email'],
				'password' =>password_hash($_POST['password'], PASSWORD_DEFAULT),	
				'status' => 1,

			];

			$model = new User_M();

			if ($model -> insert($data)===false) {
				$error = $model->errors();
				session()->setFlashdata('info', $error);
				return redirect()->to(base_url()."/admin/user/create");
	
			}else {
				return redirect()->to(base_url()."/admin/user");
	
			}
		}

		

    }

	public function find($id=null)
	{
		$model = new User_M();
		$user = $model ->find($id);

		$data =[
			'judul' => 'UPDATE DATA',
			'user' => $user
		];

		echo view ("admin/user/update",$data);

    }
    
    public function update()
	{
		$model = new User_M();
		$model->save($_POST);
		return redirect()->to(base_url()."/admin/user");
		


	}

	public function status($id = null , $isi=0)
	{
		$model = new User_M(); 	

		if ($isi == 0) {

			$isi = 1;

		}else{

			$isi = 0;
		}

		$data = [
			'aktif' => $isi
		];

		$model->update($id,$data);
		return redirect()->to(base_url()."/admin/user");

	}

    public function delete($id=null)
	{


		$model = new User_M();
		$model -> delete($id);
		return redirect()->to(base_url()."/admin/user");


	}
	


    //--------------------------------------------------------------------

}