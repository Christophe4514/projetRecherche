<?php

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ClientController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::group(['middleware' => ['auth']], function() {
    require_once('user_routes.php');
    Route::get('/admin',[App\Http\Controllers\AdminController::class,'dashboard']);
    });
Route::get('/',[ClientController::class, 'index']);
Route::get('/newRegister',[ClientController::class, 'create']);
Route::post('/newOrateur',[ClientController::class, 'store']);

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
