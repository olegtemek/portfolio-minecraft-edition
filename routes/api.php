<?php

use App\Http\Controllers\api\ProjectsController;
use App\Http\Controllers\api\StacksController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/get-projects', [ProjectsController::class, 'index']);
Route::get('/get-stacks', [StacksController::class, 'index']);
