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


//  Person
Route::get('/people', 'PersonController@index');
Route::get('/people/create', 'PersonController@create');
Route::post('/people', 'PersonController@store');
Route::get('/people/{person}', 'PersonController@show');
Route::get('/people/{person}/edit', 'PersonController@edit');
Route::put('/people/{person}', 'PersonController@update');
Route::delete('/people/{person}', 'PersonController@destroy');

//  Pet
Route::get('/pets', 'PetController@index');
Route::get('/pets/create', 'PetController@create');
Route::post('/pets', 'PetController@store');
Route::get('/pets/{pet}', 'PetController@show');
Route::get('/pets/{pet}/edit', 'PetController@edit');
Route::put('/pets/{pet}', 'PetController@update');
Route::delete('/pets/{pet}', 'PetController@destroy');

// Address
Route::get('/addresses', 'AddressController@index');
Route::get('/addresses/create', 'AddressController@create');
Route::post('/addresses', 'AddressController@store');
Route::get('/addresses/{address}', 'AddressController@show');
Route::get('/addresses/{address}/edit', 'AddressController@edit');
Route::put('/addresses/{address}', 'AddressController@update');
Route::delete('/addresses/{address}', 'AddressController@destroy');