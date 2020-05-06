<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user/logout', 'Auth\LoginController@userLogout')->name('user.logout');

	Route::get('admin/login', [
		'uses'=>'Auth\AdminLoginController@showLoginForm',
		'as'=>'admin.login'
	]);
	Route::post('/admin/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
	
	Route::get('/admin/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
	

	Route::group(['prefix'=>'admin','middleware'=>'auth:admin'], function(){


		Route::get('product/create',[
		'uses'=> 'ProductsController@create',
		'as'=>'product.create'
		]);
		Route::post('product/create',[
		'uses'=>'ProductsController@createProduct',
		'as'=>'product.add'
		]);
		Route::get('product/get',[
		'uses'=>'ProductsController@index',
		'as'=>'admin.index'
		]);

		Route::get('/', [
		'uses'=>'AdminController@index',
		'as'=>'admin.dashboard'
		]);
		Route::get('/product/{id}/edit', [
		'uses'=>'ProductsController@edit',
		'as'=>'admin.edit'
		]);
		Route::post('/product/edit', [
		'uses'=>'ProductsController@edited',
		'as'=>'product.edited'
		]);
		Route::get('/product/delete/{id}', [
		'uses'=>'ProductsController@delete',
		'as'=>'product.delete'
		]);


});
	Route::group(['prefix'=>'user','middleware'=>'auth:web'], function(){


		Route::get('index',[
		'uses'=> 'UserController@index',
		'as'=>'user.index'
		]);
		Route::any('search',[
		'uses'=> 'ProductsController@search',
		'as'=>'user.search'
		]);
		Route::any('/product/{id}',[
		'uses'=> 'ProductsController@addToCart',
		'as'=>'user.addToCart'
		]);
		Route::get('/cart',[
		'uses'=> 'ProductsController@cart',
		'as'=>'user.cart'
		]);
		Route::get('/checkout',[
		'uses'=> 'ProductsController@checkout',
		'as'=>'user.checkout'
		]);
	

});
	Route::any('/search',[
		'uses'=> 'ProductsController@search',
		'as'=>'search'
		]);
	
	Route::get('/products',[
		'uses'=> 'ProductsController@searchPage',
		'as'=>'products'
		]);
		
	Route::get('/products/{id}',[
		'uses'=> 'ProductsController@single',
		'as'=>'single.product'
		]);
	