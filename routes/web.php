<?php
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
Route::get('/', array('as' => 'home', 'uses' => 'HomeController@welcome'));


// Route::post('/entrada', 'HomeController@get_data_intro');
Route::post('/entrada', array('as' => 'entrada', 'uses' => 'HomeController@get_data_intro'));

// Route::resource('estacionamientos', 'EstacionamientosController');

// Route::get('estacionamientos/{id}/delete', [
//     'as' => 'estacionamientos.delete',
//     'uses' => 'EstacionamientosController@destroy',
// ]);

Route::get('/vehiculos', 'VehiclesController@show')->name('show_vehicle');

Route::post('/vehiculo/{placa}', 'VehiclesController@exit_vehicle')->name('exit_vehicle');

Route::post('/vehiculo/{placa}', 'VehiclesController@entry')->name('entry_vehicle')->middleware('auth');
Auth::routes();

Route::get('/type/{type_vehicle}', 'VehiclesController@show_by_type')->name('show_by_type');

Route::get('/administration', 'HomeController@administration')->name('administration');
