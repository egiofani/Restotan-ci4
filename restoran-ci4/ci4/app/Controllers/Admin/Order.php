<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Order_M;
use App\Models\OrderDetail_M;
// use App\Models\Identitas_M;

class Order extends BaseController
{
    public function index()
    {
		return view('admin/order');


    }

    public function select()
    {		
		$db      = \Config\Database::connect();
		$pager   = \Config\Services::pager();

		$sql     = "SELECT * FROM vorder ";
		$result = $db -> query($sql);
		$order = $result->getResult('array');

		$sql     = "SELECT * FROM vorderdetail ORDER BY status ASC";
		$result = $db -> query($sql);
		$detail = $result->getResult('array');

		$total = count($order);
		$tampil= 3;

		if(isset($_GET['page'])){
			$page = $_GET['page'];
			$mulai = ($tampil * $page) - $tampil;
			$sql     = "SELECT * FROM vorder ORDER BY status ASC LIMIT $mulai, $tampil";
		}else {

			$sql     = "SELECT * FROM vorder ORDER BY status ASC LIMIT 0, $tampil";

		}
		$result = $db -> query($sql);
		$order = $result->getResult('array');

		$data = [
			'order' => $order,
			'detail' => $detail,
			'pager'  => $pager,
			'perPage' => $tampil,
			'total' => $total,
		];
        
        echo view ('admin/order/select',$data);

    }

    public function create()
    {
        echo view('admin/order/insert');
    }

    public function insert()
	{
		$model = new Order_M();

		if ($model -> insert($_POST)===false) {
			$error = $model->errors();
			session()->setFlashdata('info', $error['order']);
			return redirect()->to(base_url()."/admin/order/create");

		}else {
			return redirect()->to(base_url()."/admin/order");

		}
        
    }


    

    public function delete($id=null)
	{


		$model = new Order_M();
		$model -> delete($id);
		return redirect()->to(base_url()."/admin/order");


    }

    public function find($id=null)
	{
		$db      = \Config\Database::connect();
		$sql     = "SELECT * FROM vorder WHERE idorder=$id";

		$result = $db -> query($sql);
		$order = $result->getResult('array');

		// echo "<pre>";
		// print_r($row);
		// echo "<pre>";

		echo "<hr>";

		$db      = \Config\Database::connect();
		$sql     = "SELECT * FROM vorderdetail WHERE idorder=$id";

		$result = $db -> query($sql);
		$detail = $result->getResult('array');

		// echo "<pre>";
		// print_r($detail);
		// echo "<pre>";

		// $model = new Identitas_M();
        // $identitas = $model ->findAll();


		$data=[
			'order' => $order,
			'detail' => $detail,
			//'identitas' => $identitas,

		];

		echo view('admin/order/pembayaran',$data);

	}

	public function pembayaran($id=null)
	{
		$db      = \Config\Database::connect();
		$sql     = "SELECT * FROM vorder WHERE idorder=$id";

		$result = $db -> query($sql);
		$order = $result->getResult('array');

		// echo "<pre>";
		// print_r($row);
		// echo "<pre>";


		$db      = \Config\Database::connect();
		$sql     = "SELECT * FROM vorderdetail WHERE idorder=$id";

		$result = $db -> query($sql);
		$detail = $result->getResult('array');

		// echo "<pre>";
		// print_r($row);
		// echo "<pre>";

		// $db      = \Config\Database::connect();
		// $sql     = "SELECT * FROM tblidentitas WHERE ididentitas=$id";

		// $result = $db -> query($sql);
		// $identitas = $result->getResult('array');

		$data=[
			'order' => $order,
			'detail' => $detail,
			//'identitas' => $identitas,
		];

		echo view('admin/order/pembayaran',$data);

	}
	
    
    public function update()
	{
		$model = new Order_M();
		$model->save($_POST);
		return redirect()->to(base_url()."/admin/order");

	}

	public function bayar()
	{
		$idorder = $_POST['idorder'];
		$total = $_POST['total'];
		$bayar = $_POST['bayar'];
		$kembali = $bayar - $total;

		$data=[
			'idorder' => $idorder,
			'total' => $total,
			'bayar' => $bayar,
			'status' => 1,
			'kembali' => $kembali
		];

		if ($bayar < $total) {
			session()->setFlashdata('info', 'Maaf,Pembayaran Anda Kurang !');
			$this->find($idorder);
		}else {
			
			$db      = \Config\Database::connect();
			$builder = $db->table('tblorder');
			$builder->update($data,['idorder' => $idorder]);

			return redirect()->to(base_url()."/admin/order");

		}

	}

	public function cetak($id=null)
	{
		$db      = \Config\Database::connect();
		$sql     = "SELECT * FROM vorder WHERE idorder=$id";

		$result = $db -> query($sql);
		$order = $result->getResult('array');

		// echo "<pre>";
		// print_r($row);
		// echo "<pre>";

		echo "<hr>";

		$db      = \Config\Database::connect();
		$sql     = "SELECT * FROM vorderdetail WHERE idorder=$id";

		$result = $db -> query($sql);
		$detail = $result->getResult('array');

		// echo "<pre>";
		// print_r($detail);
		// echo "<pre>";

	


		$data=[
			'order' => $order,
			'detail' => $detail,
			//'identitas' => $identitas,

		];

		echo view('admin/order/cetak',$data);
	}

	public function print($id=null)
	{
		$db      = \Config\Database::connect();
		$sql     = "SELECT * FROM vorder WHERE idorder=$id";

		$result = $db -> query($sql);
		$order = $result->getResult('array');

		// echo "<pre>";
		// print_r($row);
		// echo "<pre>";

		echo "<hr>";

		$db      = \Config\Database::connect();
		$sql     = "SELECT * FROM vorderdetail WHERE idorder=$id";

		$result = $db -> query($sql);
		$detail = $result->getResult('array');

		// echo "<pre>";
		// print_r($detail);
		// echo "<pre>";

		// $model = new Identitas_M();
        // $identitas = $model ->findAll();


		$data=[
			'order' => $order,
			'detail' => $detail,
			//'identitas' => $identitas,

		];

		echo view('admin/order/print',$data);
		// return redirect()->to(base_url()."/admin/order/cetak/$id");
	}




	
	
	
    //--------------------------------------------------------------------

}