<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Login');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->add('/','Front\Home::index');
$routes->group('/',function($routes){
	$routes->add('logout','Auth::logout');
	$routes->add('login','Auth::viewlogin');
	$routes->add('keranjang','Front\Cart::index');
	$routes->add('authlogin','Auth::authlogin');
	$routes->add('register','Auth::viewregister');
	$routes->add('hapus/(:any)','Front\Cart::hapus/$1');
	$routes->add('authregister','Auth::authregister');
	$routes->add('keranjang/plus/(:any)/(:any)', 'Front\Cart::plus/$1/$2');
	$routes->add('keranjang/minus/(:any)/(:any)', 'Front\Cart::minus/$1/$2');
	$routes->add('tambah-ke-keranjang/(:any)','Front\Cart::tambah_ke_keranjang/$1');
});

$routes->group('/',['filter' => 'Auth2'],function($routes){
	$routes->add('checkout','Front\Checkout::index');
	$routes->add('bayar', 'Front\Cart::insertorder');
	$routes->add('success', 'Front\Checkout::sukses');
	$routes->add('historypembelian', 'Front\Historypembelian::index');
	$routes->add('statuspembayaran', 'Front\Statuspembayaran::index');
});

//$routes->get('kategori/(:any)', 'admin\kategori::selectWhere/$1');
$routes->get('/admin/login', 'Admin\Login::index');
$routes->add('login','Auth::viewlogin');


$routes->group('admin', ['filter' => 'Auth'],function($routes){
	$routes->add('/','Admin\adminpage::index');
	//kategori
	$routes->add('kategori','Admin\kategori::select');
	$routes->add('kategori/create','Admin\kategori::create');
	$routes->add('kategori/find','Admin\kategori::find');
	$routes->add('kategori/find/(:any)','Admin\kategori::find/$1');
	//pelanggan
	$routes->add('pelanggan','Admin\pelanggan::select');
	$routes->add('pelanggan/create','Admin\pelanggan::create');
	$routes->add('pelanggan/find','Admin\pelanggan::find');
	$routes->add('pelanggan/find/(:any)','Admin\pelanggan::find/$1');
	//Order
	$routes->add('order','Admin\order::select');
	$routes->add('order/create','Admin\order::create');
	$routes->add('order/find','Admin\order::find');
	$routes->add('order/find','Admin\order::pembayaran');
	$routes->add('order/find','Admin\order::cetak');
	$routes->add('order/find','Admin\order::print');
	$routes->add('order/find/(:any)','Admin\order::find/$1');
	//OrderDetail
	$routes->add('orderdetail','Admin\orderdetail::select');
	$routes->add('orderdetail/create','Admin\orderdetail::create');
	$routes->add('orderdetail/find','Admin\orderdetail::find');
	$routes->add('orderdetail/find/(:any)','Admin\orderdetail::find/$1');
	//user
	$routes->add('user','Admin\user::select');
	$routes->add('user/create','Admin\user::create');
	$routes->add('user/find','Admin\user::find');
	$routes->add('user/find/(:any)','Admin\user::find/$1');	
	//menu
	$routes->add('menu','Admin\menu::select');
	$routes->add('menu/create','Admin\menu::create');
	$routes->add('menu/find','Admin\menu::find');
	$routes->add('menu/find/(:any)','Admin\menu::find/$1');	

});


/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need to it be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
