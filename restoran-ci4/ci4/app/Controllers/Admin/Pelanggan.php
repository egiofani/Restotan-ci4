<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Pelanggan_M;

class Pelanggan extends BaseController
{
    public function index()
    {
        return view('admin/pelanggan');

    }

    public function select()
    {
        $model = new Pelanggan_M();
		//$pelanggan = $model ->findAll();
		$pager = \Config\Services::pager();

        $data =[
			//'pelanggan'=>$pelanggan,
			'pelanggan' => $model->paginate(5,'page'),
            'pager' => $model->pager
        ];
        
        echo view ('admin/pelanggan/select',$data);

    }

    public function create()
    {
        echo view('admin/pelanggan/insert');
    }

    public function insert()
	{
		$model = new Pelanggan_M();

		if ($model -> insert($_POST)===false) {
			$error = $model->errors();
			session()->setFlashdata('info', $error['pelanggan']);
			return redirect()->to(base_url()."/admin/pelanggan/create");

		}else {
			return redirect()->to(base_url()."/admin/pelanggan");

		}
        
    }


    

    public function delete($id=null)
	{


		$model = new Pelanggan_M();
		$model -> delete($id);
		return redirect()->to(base_url()."/admin/pelanggan");


    }

    public function find($id=null)
	{
		$model = new Pelanggan_M();
		$pelanggan = $model ->find($id);

		$data =[
			'judul' => 'UPDATE DATA',
			'pelanggan' => $pelanggan
		];

		echo view ("admin/pelanggan/update",$data);

    }
    
    public function update()
	{
		$model = new Pelanggan_M();
		$model->save($_POST);
		return redirect()->to(base_url()."/admin/pelanggan");

	}
    //--------------------------------------------------------------------

}