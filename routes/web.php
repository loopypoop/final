<?php

use Illuminate\Support\Facades\Route;


//Home Page
Route::get('/', 'HomeController@index')->name('home');

//===============================================================================================

//Shop Page
Route::get('/shop', 'ShopController@shop')->name('shop');
Route::get('/shop/{id}', 'ShopController@showOneProduct')->name('product-data-one');

//===============================================================================================

//Checkout page
Route::get('/order', 'CheckoutController@index')->name('order')->middleware('auth');

//make order
Route::post('/order/submit', 'CheckoutController@submit')->name('order-form')->middleware('auth');


//Contact page

		//Show contact page
Route::get('/contact', function () {
return view('contact');
})->name('contact');

//===============================================================================================

//About page
Route::get('/about', function () {
return view('about');
})->name('about');


//===============================================================================================
//Shopping cart

		//Show cart page
Route::get('/cart', 'CartController@cart')->name('cart');
Route::post('/add', 'CartController@add')->name('cart.store');
Route::post('/remove', 'CartController@remove')->name('cart.remove');
Route::post('/clear', 'CartController@clear')->name('cart.clear');
	
		//Sending message
Route::post('/contact/submit', 'ContactController@submit')->name('contact-form');
//===============================================================================================

//Login page
Route::get('/login', function () {
return view('login');
})->name('login');

//SignUp page
Route::get('/signup', function () {
return view('auth.signup');
})->name('signup');

//Logout
Route::get('/logout', function(){
   Auth::logout();
   return Redirect::to('login');
});

//===============================================================================================

// Admin Panel

//Orders

Route::get('/orderlist', 'CheckoutController@orderlist')->name('orderlist')
->middleware('is_admin', 'auth');

Route::get('/orderlist/{id}', 'UserController@showUser')->name('showuser')
->middleware('is_admin', 'auth');

//Contacts
Route::get('/admin', 'ContactController@AllMessages')->name('admin')
->middleware('is_admin', 'auth');
Route::get('/admin/{id}', 'ContactController@OneMessage')->name('admin-data-one')
->middleware('auth', 'is_admin');
Route::get('/admin/{id}/delete', 'ContactController@deleteContact')->name('contact-delete')
->middleware('auth', 'is_admin');

//Products
Route::get('/test', function () {
return view('Admin.test');
})->name('test')
->middleware('auth', 'is_admin');

Route::post('/addsubmit', 'ProductController@addProductSubmit')->name('add-product-image')->middleware('auth', 'is_admin');

Route::get('/add', 'ProductController@addProduct')->name('product-add')
->middleware('auth', 'is_admin');

Route::post('/store', 'ProductController@store')->name('store')
->middleware('auth', 'is_admin');

Route::get('/test/{id}', 'ProductController@showProduct')->name('product-form')
->middleware('auth', 'is_admin');

Route::get('/add', 'ProductController@addProduct')->name('product-add')
->middleware('auth', 'is_admin');

Route::get('/test/{id}/update', 'ProductController@updateProduct')->name('product-update')
->middleware('auth', 'is_admin');

Route::post('/test/{id}/update', 'ProductController@updateProductSubmit')->name('product-update-submit')
->middleware('auth', 'is_admin');

Route::get('/test/{id}/delete', 'ProductController@deleteProduct')->name('product-delete')
->middleware('auth', 'is_admin');

Route::get('/test/{id}/img', 'ProductController@ImageProduct')->name('add-img')
->middleware('auth', 'is_admin');

Auth::routes();
//===============================================================================================

//Profile

Route::get('/profile', 'ProfileController@ShowProfile')->name('profile')
->middleware('auth');

Route::get('/edit', 'UserController@edit')->name('edit')
->middleware('auth');

Route::post('/edit/{id}', 'UserController@editUser')->name('edituser')
->middleware('auth');
