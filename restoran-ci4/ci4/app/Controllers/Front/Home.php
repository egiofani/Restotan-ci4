<?php namespace App\Controllers\Front;

use App\Controllers\BaseController;
use App\Models\Menu_M;
use App\Models\kategori_M;
use App\Models\Banner_M;

class Home extends BaseController
{
	public function index()
	{
		$model = new Kategori_M();
		$kategori = $model->findAll();
		$modelmenu = new Menu_M();
		$menu = $modelmenu->findAll();
		$modelbanner = new Banner_M();
		$banner = $modelbanner->findAll();
		$cart = \Config\Services::cart();
		

		$data = [
			'kategori' => $kategori,
			'menu'	=> $menu,
			'banner'	=> $banner,
			'cart' => $cart->contents(),
			'total' => $cart->total(),
			'judul'	=> "RESTORAN CI 4"
		];

		return view('Front/Home',$data);
	}



	//--------------------------------------------------------------------

}
