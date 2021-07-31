<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::middleware('web')->group(base_path('routes/portal.php'));
Route::get('/', 'HomeController@index')->name('home');
Route::post('/lang','HomeController@setLang')->name('lang');
Auth::routes();
// Route::get('/', function () {
//     return view('welcome');
// });






Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles','RoleController');
    Route::resource('users','UserController');
    Route::resource('permissions','PermissionController');

    Route::get('/',  'HomeController@index')->name('portal.dashboard');
});