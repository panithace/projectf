<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\WelcomeSessionsController;
use App\Http\Controllers\User;
use app\Notifications\WelcomeSession;
use App\Http\Controllers\CommentsController;
use App\Models\Post;
use App\Models\Profile;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\DB;


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



// Route::get('email', function(Request $request){
//     Mail::to('perspolis_2012@yahoo.com')->send(new WelcomeMail());
//    // dd($request->all());
//     return new WelcomeMail();
//});

Route::Resource('posts', PostsController::class);
Route::Resource('home', HomeController::class);
Route::Resource('profiles', ProfilesController::class);
Route::Resource('send-welcomesession', WelcomeSessionsController::class);
Route::Resource('comments', CommentsController::class);
// Route::get('/send-welcomesession', [WelcomeSessionsController::class, 'sendTestNotification']);
route::get('/test', function(Request $request){
    return 'Authenticated';

});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});