<?php
namespace App\Http\Controllers;
// use Illuminate\Auth\Middleware;
// use App\Http\Middleware;
use Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
// use App\Http\Controllers\Auth;

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


// Auth::routes();
Auth::routes();
Route::view('/', 'master');
Route::group(['middleware'=>'auth'],function () {
	Route::resource('/users',userslistController::class);
	Route::resource('/admins',AdminController::class);
	Route::view('/main', 'adminPanel');
});
Route::get('/home', [HomeController::class, 'index']);