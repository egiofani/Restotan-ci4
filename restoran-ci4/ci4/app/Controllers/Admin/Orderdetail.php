<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\OrderDetail_M;

class Orderdetail extends BaseController
{
    public function index()
    {
        return view('admin/orderdetail');

    }

    public function select()
    {
        $model = new OrderDetail_M();
        $orderdetail = $model ->findAll();
        $data =[
            'orderdetail'=>$orderdetail,
        ];
        
        echo view ('admin/orderdetail/select',$data);

    }

    public function create()
    {
        echo view('admin/orderdetail/insert');
    }

    public function insert()
	{
		$model = new OrderDetail_M();

		if ($model -> insert($_POST)===false) {
			$error = $model->errors();
			session()->setFlashdata('info', $error['orderdetail']);
			return redirect()->to(base_url()."/admin/orderdetail/create");

		}else {
			return redirect()->to(base_url()."/admin/orderdetail");

		}
        
    }


    

    public function delete($id=null)
	{


		$model = new OrderDetail_M();
		$model -> delete($id);
		return redirect()->to(base_url()."/admin/orderdetail");


    }

    public function find($id=null)
	{
		$model = new OrderDetail_M();
		$orderdetail = $model ->find($id);

		$data =[
			'judul' => 'UPDATE DATA',
			'orderdetail' => $orderdetail
		];

		echo view ("admin/orderdetail/update",$data);

    }
    
    public function update()
	{
		$model = new OrderDetail_M();
		$model->save($_POST);
		return redirect()->to(base_url()."/admin/orderdetail");

	}
    //--------------------------------------------------------------------

}