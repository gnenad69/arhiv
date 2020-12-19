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
Route::resource('fondovi', 'FondoviController');
Route::get('/search', 'FondoviController@search');

Auth::routes();

Route::get('/', 'WebsiteController@index')->name('index');
Route::get('category/{slug}', 'WebsiteController@category')->name('category');
Route::get('post/{slug}', 'WebsiteController@post')->name('post');
Route::get('page/{slug}', 'WebsiteController@page')->name('page');
Route::get('contact', 'WebsiteController@showContactForm')->name('contact.show');
Route::post('contact', 'WebsiteController@submitContactForm')->name('contact.submit');

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
  Route::resource('categories', 'CategoryController');
  Route::resource('posts', 'PostController');
  Route::resource('pages', 'PageController');
  Route::resource('galleries', 'GalleryController');
});

/*
|--------------------------------------------------------------------------
| ROUTES za upravljanje korisnicima
|--------------------------------------------------------------------------

*/

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
  Route::resource('/users', 'UsersController', ['escept'=>['show', 'create', 'store']]);

});

/*
|--------------------------------------------------------------------------
| ROUTES za LISTU KATEGORIJA
|--------------------------------------------------------------------------

*/


    Route::get('liste/create', 'ListaController@listaCreate')->name('listaCreate');
    Route::post('liste/store', 'ListaController@listaStore')->name('listaStore');
    Route::get('liste/show/{id}', 'ListaController@listaShow')->name('listaShow');
    Route::get('liste/edit/{id}', 'ListaController@listaEdit')->name('listaEdit');
    Route::get('liste/delete/{id}', 'ListaController@listaDelete')->name('listaDelete');
    Route::post('liste/update/{id}', 'ListaController@listaUpdate')->name('listaUpdate');

    // Podaci Route

    Route::get('/search', 'ListaController@search');

    Route::get('liste/podaci/create/{id}', 'ListaController@podaciCreate')->name('podaciCreate');
    Route::post('liste/podaci/store', 'ListaController@podaciStore')->name('podaciStore');
    Route::get('liste/podaci/show/{id}', 'ListaController@podaciShow')->name('podaciShow');
    Route::get('liste/podaci/edit/{id}', 'ListaController@podaciEdit')->name('podaciEdit');
    Route::post('liste/podaci/update/{id}', 'ListaController@podaciUpdate')->name('podaciUpdate');
    Route::get('liste/podaci/delete/{id}', 'ListaController@podaciDelete')->name('podaciDelete');

    Route::get('/homee', 'HomeController@druga')->name('homee');
