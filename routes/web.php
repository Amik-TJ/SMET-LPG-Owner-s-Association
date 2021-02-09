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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Common Routes
Route::get('/dashboard', [App\Http\Controllers\Common_Controllers\DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
Route::POST('/add_new_station', '\App\Http\Controllers\Common_Controllers\GasStationController@add_new_station')->middleware('auth');




// Station Owners
Route::get('/individual_station', '\App\Http\Controllers\Common_Controllers\GasStationController@individual_station')->middleware('auth');




// Admin


// Manage Users
Route::get('/view_unverified_station_owners', '\App\Http\Controllers\Admin\ManageStationOwnersController@view_unverified_station_owners')->middleware('auth');
Route::get('/view_verified_station_owners', '\App\Http\Controllers\Admin\ManageStationOwnersController@view_verified_station_owners')->middleware('auth');
Route::POST('/verify_station_owner', '\App\Http\Controllers\Admin\ManageStationOwnersController@verify_station_owner')->middleware('auth');
Route::POST('/delete_station_owner', '\App\Http\Controllers\Admin\ManageStationOwnersController@delete_station_owner')->middleware('auth');
Route::GET('/add_new_station_owner', '\App\Http\Controllers\Admin\ManageStationOwnersController@add_new_station_owner')->middleware('auth');  // Visit Page
Route::POST('/register_new_station_owner', '\App\Http\Controllers\Admin\ManageStationOwnersController@register_new_station_owner')->middleware('auth');




// Manage Stations
Route::get('/view_unverified_stations', '\App\Http\Controllers\Common_Controllers\GasStationController@view_unverified_stations')->middleware('auth');
Route::get('/view_verified_stations', '\App\Http\Controllers\Common_Controllers\GasStationController@view_verified_stations')->middleware('auth');
Route::post('/verify_station', '\App\Http\Controllers\Common_Controllers\GasStationController@verify_station')->middleware('auth');
Route::post('/view_station_documents', '\App\Http\Controllers\Common_Controllers\GasStationController@view_station_documents')->middleware('auth');
Route::post('/delete_station', '\App\Http\Controllers\Common_Controllers\GasStationController@delete_station')->middleware('auth');
