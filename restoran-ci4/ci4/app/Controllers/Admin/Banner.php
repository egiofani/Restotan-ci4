<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Banner_M;

class Banner extends BaseController
{
    public function select()
    {
        return view('admin/banner/select');

    }

    public function index()
    {
        $model = new banner_M();
        $banner = $model ->findAll();
        
        $data =[
			'judul' => 'DATA banner',
			'banner' => $banner,
        ];
        
        echo view ('admin/banner/select',$data);

    }

    public function create()
    {	
		

        echo view ("admin/banner/insert");

    }

    public function insert()
	{
		$model = new banner_M();

		$request = \Config\Services::request();
		$file =  $request -> getFile('gambar');
		$name = $file -> getName();

		$data=[
			'banner' => $request->getPost('banner'),
			'link' => $request->getPost('link'),
			'gambar' => $name

		];

		// if ($model -> insert($_POST)===false) {
		// 	$error = $model->errors();
		// 	session()->setFlashdata('info', $error['banner']);
		// 	return redirect()->to(base_url()."/admin/banner/create");

		// }else {
		// 	return redirect()->to(base_url()."/admin/banner");

		// }
		$model->insert($data);
		$file->move('./upload');
			return redirect()->to(base_url()."/admin/banner");

    }

    public function find($id=null)
	{
		$model = new banner_M();
		$banner = $model ->find($id);

		$data =[
			'judul' => 'UPDATE DATA',
			'banner' => $banner
		];

		echo view ("admin/banner/update",$data);

	}
    
    public function update()
	{
		$model = new banner_M();
		
		$request = \Config\Services::request();
		$file =  $request -> getFile('gambar');
		$name = $file -> getName();
		
		if (empty($name)) {
			$name = $this->request->getPost('gambar');
		}else {
			$file->move('./upload');
		}
		
		$id = $request->getPost('id');
		$data=[
			'banner' => $request->getPost('banner'),
			'link' => $request->getPost('link'),
			'gambar' => $name

		];
		$model->update($id,$data);

	
		return redirect()->to(base_url()."/admin/banner");

	}

    public function delete($id=null)
	{


		$model = new banner_M();
		$model -> delete($id);
		return redirect()->to(base_url()."/admin/banner");


    }

    //--------------------------------------------------------------------

}