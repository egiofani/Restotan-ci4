<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Kategori_M;

class Kategori extends BaseController
{
	public function index()
	{
		return view('admin/kategori');
	}

	//--------------------------------------------------------------------

	public function select()
	{
		$pager = \Config\Services::pager();
		$model = new Kategori_M();
//		$kategori = $model ->findAll();

		

		$data =[
			'judul' => 'DATA KATEGORI',
		///	'kategori' => $kategori,
			'kategori' => $model->paginate(5,'page'),
            'pager' => $model->pager
 
		];



		echo view ("admin/kategori/select",$data);


	}


	public function create()
	{
		

		echo view ("admin/kategori/Insert");


	}
	
	public function insert()
	{
		$model = new Kategori_M();

		if ($model -> insert($_POST)===false) {
			$error = $model->errors();
			session()->setFlashdata('info', $error['kategori']);
			return redirect()->to(base_url()."/admin/kategori/create");

		}else {
			return redirect()->to(base_url()."/admin/kategori");

		}
		
		

	}


	public function find($id=null)
	{
		$model = new Kategori_M();
		$kategori = $model ->find($id);

		$data =[
			'judul' => 'UPDATE DATA',
			'kategori' => $kategori
		];

		echo view ("admin/kategori/update",$data);



	}

	public function update()
	{
		$model = new Kategori_M();
		$model->save($_POST);
		return redirect()->to(base_url()."/admin/kategori");

	}

	public function delete($id=null)
	{


		$model = new Kategori_M();
		$model -> delete($id);
		return redirect()->to(base_url()."/admin/kategori");


	}
}
