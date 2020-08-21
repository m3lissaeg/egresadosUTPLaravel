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
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/contacto', 'ContactController@contacto')->name('contacto');
Route::get('/nouser', 'HomeController@nouser')->name('nouser');

Route::get('/chats', 'ChatController@index');
Route::get('/messages', 'ChatController@fetchAllMessages');
Route::post('/messages', 'ChatController@sendMessage');

Auth::routes();


// Conjunto de Rutas a las que accede superadmin
Route::namespace('SuperAdmin')->prefix('superadmin')->name('superadmin.')->middleware('can:manageAdmins')->group(function(){
    Route::resource('/admins', 'AdminController');
    Route::resource('/profile', 'ProfileController', ['except' =>['create', 'destroy', 'store', 'show']]);
});

// Conjunto de Rutas a las que accede admin
Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manageEgresados')->group(function(){
    Route::resource('/egresados', 'EgresadosController', ['except' =>['create', 'store', 'update', 'edit']]);
    Route::resource('/profile', 'ProfileController', ['except' =>['create', 'destroy','index', 'store']]);
    Route::resource('/news', 'NewsController');
});

// Conjunto de Rutas a las que accede egresado
Route::namespace('Egresado')->prefix('egresado')->name('egresado.')->middleware('can:egresado')->group(function(){
    Route::resource('/friends', 'FriendsController', ['except' =>['create', 'update','edit']]);
    Route::resource('/profile', 'ProfileController', ['except' =>['create', 'destroy','index', 'store']]);
    Route::resource('/news', 'NewsController', ['only'=>['show']]);
    Route::resource('/interest', 'InterestController', ['only'=>['edit', 'update']]);
    Route::get('/chat/{vue_capture?}', function () {
        return view('chat.index');
       })->where('vue_capture', '[\/\w\.-]*')->name('chat');
    //Route::resource('/chat', 'ChatController', ['only'=>['edit']]);
});