<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;
use App\Models\Article;
use App\Models\Notification;
use Carbon\Carbon;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin\ArticleController;
use Illuminate\Http\Requests;

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

Route::get('/', [HomeController::class, 'home']); 
Route::get('/about',  [HomeController::class, 'about']);

Route::prefix('admin')->namespace('Admin')->group(function() {
Route::get('/article' , [ArticleController::class, 'index']);  
Route::get('/article/create', function(Request $request) {
    dd($request()->all());
});
Route::post('/article/create', [ArticleController::class, 'store']);
Route::get('/article/{article}/edit' , [ArticleController::class, 'edit']);
Route::put('/article/{article}/edit' , [ArticleController::class, 'update']);
Route::delete('/article/{article}' , [ArticleController::class, 'delete']);
});