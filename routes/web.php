<?php

use App\Http\Controllers\admin\IndexController;
use App\Http\Controllers\admin\ProjectsController;
use App\Http\Controllers\admin\StacksController;
use App\Http\Controllers\AuthController;
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

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth'], function () {
    Route::get('/', [IndexController::class, 'index'])->name('home.index');
    Route::resource('/project', ProjectsController::class);
    Route::resource('/stack', StacksController::class);
});
Route::get('/admin/login', [AuthController::class, 'index'])->name('login');
Route::post('/admin/login', [AuthController::class, 'login'])->name('login.post');

Route::get('/{page}', function () {
    return view('welcome');
})->where('page', '.*');
