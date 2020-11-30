<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Menu_M;
use App\Models\kategori_M;

class Menu extends BaseController
{
    public function index()
    {
        return view('admin/menu');

    }

    public function select()
    {
        $model = new Menu_M();
		//$pelanggan = $model ->findAll();
		$pager = \Config\Services::pager();

        $data =[
			//'pelanggan'=>$pelanggan,
			'menu' => $model->paginate(5,'page'),
            'pager' => $model->pager
        ];
        
        
        echo view ('admin/menu/select',$data);

    }

    public function create()
    {	
		$model = new Kategori_M();
		$kategori = $model -> findALl();

		$data =[
			'kategori' => $kategori
		];

        echo view ("admin/menu/insert",$data);

    }

    public function insert()
	{
		$modelmenu = new menu_M();
        $model = new Kategori_M();

		$request = \Config\Services::request();
		$file =  $request -> getFile('gambar');
		$name = $file -> getName();

		

		$data = [
			'menu' => $request->getPost('menu'),
			'idkategori' => $request->getPost('idkategori'),
			'harga' => $request->getPost('harga'),
			'idkategori' => $request->getPost('idkategori'),
			'gambar' => $name
		];


		// if ($model -> insert($data)===false) {
		// 	$error = $model->errors();
		// 	session()->setFlashdata('info', $error['menu']);
		// 	return redirect()->to(base_url()."/admin/menu/create");

		// }else {
		$modelmenu->insert($data);
		$file->move('./upload');
			return redirect()->to(base_url()."/admin/menu");

    }

    public function find($id=null)
	{
		$model = new menu_M();
		$menu = $model ->find($id);
		$ktg = new Kategori_M();
		$kategori = $ktg -> findALl();

		$data =[
			'judul' => 'UPDATE DATA',
			'menu' => $menu,
			'kategori' => $kategori
		];

		echo view ("admin/menu/update",$data);

	}
    
    public function update()
	{
		$modelmenu = new menu_M();
		$model = new Kategori_M();
		
		$request = \Config\Services::request();
		$file =  $request -> getFile('gambar');
		$name = $file -> getName();
		
		if (empty($name)) {
			$name = $this->request->getPost('gambar');
		}else {
			$file->move('./upload');
		}
		
		$id = $request->getPost('idmenu');
		$data=[
			'menu' => $request->getPost('menu'),
			'kategori' => $request->getPost('kategori'),
			'harga' => $request->getPost('harga'),
			'gambar' => $name,
			

		];
		$modelmenu->update($id,$data);

	
		return redirect()->to(base_url()."/admin/menu");

	}

    public function delete($id=null)
	{


		$model = new menu_M();
		$model -> delete($id);
		return redirect()->to(base_url()."/admin/menu");


    }

    //--------------------------------------------------------------------

}