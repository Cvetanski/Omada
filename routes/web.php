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


Route::prefix('clients')->group(function () {
    Route::get('/', 'ClientController@index')->name('clients.index');
    Route::get('/create', 'ClientController@create')->name('clients.create');
    Route::post('/create', 'ClientController@store')->name('clients.store');
    Route::delete('delete', 'ClientController@destroy');
});

//ovie rabotat
Route::prefix('employees')->group(function () {
    Route::get('/', 'EmployeesController@index')->name('employees.index');
    Route::get('/create', 'EmployeesController@create')->name('employees.create');
    Route::post('/create', 'EmployeesController@store')->name('employees.store');
    Route::delete('/delete', 'EmployeesControler@destroy');
});

Route::prefix('vehicles')->group(function () {
    Route::get('/', 'VehicleController@index')->name('vehicles.index');
    Route::get('/create', 'VehicleController@create')->name('vehicles.create');
    Route::post('/create', 'VehicleController@store')->name('vehicles.store');
    Route::get('/update', 'VehicleController@update');
});

Route::prefix('sales')->group(function () {
    Route::get('/', 'SalesController@index')->name('sales.index');
    Route::get('/add', 'SalesController@addSale')->name('sales.add');
    Route::post('/store', 'SalesController@store')->name('sales.store');
    Route::delete('/delete', 'SalesController@destroy');
});