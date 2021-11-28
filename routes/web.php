<?php


use App\Http\Controllers\Auth\ChangePasswordController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/user/logout', [HomeController::class, 'logout'])->name('user.logout');
Route::get('/change-password', [ChangePasswordController::class, 'index'])->name('password.change');
Route::post('/change-password', [ChangePasswordController::class, 'update'])->name('password.change.update');

/////////// <-- ADMIN ROUTE LIST START --> ///////////
Route::group(['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
});
/////////// <-- ADMIN ROUTE LIST END --> ///////////

/////////// <-- AUTHOR ROUTE LIST START --> ///////////
Route::group(['as' => 'author.', 'prefix' => 'author', 'namespace' => 'author', 'middleware' => ['auth', 'author']], function () {
    Route::get('dashboard', [App\Http\Controllers\Author\DashboardController::class, 'index'])->name('dashboard');
});
/////////// <-- AUTHOR ROUTE LIST END --> ///////////
