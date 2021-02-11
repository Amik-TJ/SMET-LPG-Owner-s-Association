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


Route::POST('/contact_us_send_message','\App\Http\Controllers\Landing_Controllers\ContactUsController@contact_us_send_message');
Route::GET('/landing_view_members','\App\Http\Controllers\Landing_Controllers\landing_view_members@landing_view_members');
Route::GET('/view_gallery','\App\Http\Controllers\Landing_Controllers\GalleryController@view_gallery');
Route::GET('/view_central_committee','\App\Http\Controllers\Landing_Controllers\ManageCommittee@view_central_committee');
Route::GET('/view_zonal_committee','\App\Http\Controllers\Landing_Controllers\ManageCommittee@view_zonal_committee');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Common Routes
Route::get('/dashboard', [App\Http\Controllers\Common_Controllers\DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
Route::POST('/add_new_station', '\App\Http\Controllers\Common_Controllers\GasStationController@add_new_station')->middleware('auth');


// Edit Profile

Route::GET('/edit_profile','\App\Http\Controllers\Common_Controllers\EditProfileController@index')->middleware('auth');
Route::POST('/change_password','\App\Http\Controllers\Common_Controllers\EditProfileController@change_password')->middleware('auth');
Route::POST('/change_profile_picture','\App\Http\Controllers\Common_Controllers\EditProfileController@change_profile_picture')->middleware('auth');







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



// Contact Us
Route::get('/view_contact_us_messages','\App\Http\Controllers\Landing_Controllers\ContactUsController@view_contact_us_messages')->middleware('auth');
Route::POST('/view_individual_message','\App\Http\Controllers\Landing_Controllers\ContactUsController@view_individual_message')->middleware('auth');




// Banners
Route::get('/view_banners', '\App\Http\Controllers\Admin\BannerController@index')->middleware('auth');  // View banner
Route::POST('/delete_banner', '\App\Http\Controllers\Admin\BannerController@delete_banner')->middleware('auth'); // Delete Banner
Route::POST('/create_new_banner', '\App\Http\Controllers\Admin\BannerController@create_new_banner')->middleware('auth'); // Create Banner
