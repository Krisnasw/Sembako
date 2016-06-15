<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/', array(
	'uses' => 'HomeController@index',
	'as' => 'index'
	));

Route::get('/contact', function () {
	return view('contact-us');
});

Route::get('/blog', function () {
	return view('blog');
});

Route::get('/about', function () {
	return view('about');
});

Route::get('/produk', array(
	'uses' => 'HomeController@showProduk',
	'as' => 'shop'
	));

Route::get('/detail-prod', function () {
	return view('detail-produk');
});

Route::get('/detail-prod/{id}/{slug}', array(
	'uses' => 'LoginController@detailProd',
	'as' => 'detail-produk'
	));

Route::get('/login', function () {
	return view('login');
});

Route::post('/login', [
	'uses' => 'LoginController@postSignIn',
	'as' => 'login'
	]);

Route::get('logout', [
	'uses' => 'LoginController@Logout',
	'as' => 'login'
	]);

Route::get('/daftar', function () {
	return view('signup');
});

Route::post('/daftar', [
	'uses' => 'LoginController@Register',
	'as' => 'signup'
	]);


Route::get('/aksa-admin', function () {
	return view('/admin/login');
});

Route::post('/aksa-admin', [
	'uses' => 'AdminController@admLogin',
	'as' => 'admin/login'
	]);

Route::get('admLogout', [
	'uses' => 'AdminController@Logout',
	'as' => 'login'
	]);

Route::group(['middleware' => ['web', 'auth']], function () {

	Route::get('/akun', function () {
		return view('account');
	});

	Route::get('/akun', array(
		'uses' => 'HomeController@show', 'HomeController@store',
		'as' => 'account'
		));

	Route::get('/cart', array(
		'uses' => 'LoginController@showCart',
		'as' => 'cart'
	));

});

Route::group(['middleware' => ['web', 'auth', 'admin']], function () {

	Route::get('/aksa-admin/home', function () {
		return view('admin.index');
	});

	Route::get('/aksa-admin/home', 'AdminController@getCount');

	Route::get('/aksa-admin/user', function () {
		return view('admin.user.user');
	});

	Route::get('/aksa-admin/user', array(
		'uses' => 'UserController@index',
		'as' => 'admin.user.user'
		));

	Route::get('/aksa-admin/produk/tambah-produk', function () {
		return view('admin.produk.input-produk');
	});

	Route::post('/aksa-admin/produk/tambah-produk', [
		'uses' => 'ProdukController@store',
		'as' => 'admin.produk.input-produk'
		]);

	Route::get('/aksa-admin/produk', array(
		'uses' => 'ProdukController@index',
		'as' => 'admin.produk.produk'
		));

	Route::get('/aksa-admin/order', array(
		'uses' => 'CartController@index',
		'as' => 'admin.order.order'
		));

	Route::get('/aksa-admin/seo', function () {
		return view('admin.seo.seo');
	});


	Route::resource('aksa-admin/produk', 'ProdukController');
	Route::resource('aksa-admin/user', 'UserController');

});

Route::resource('home','HomeController');