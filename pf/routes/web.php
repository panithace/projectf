<?php

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
use Illuminate\Http\Request;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\DB;
use App\Models\Like;
use App\Models\Concerns\Likes;
use App\Contracts\Likeable;
use App\Http\Controllers\CaptchaValidationController;


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
Route::get('/home', [App\Http\Controllers\HomeController::class, 'home']);
Route::get('/home/index', [App\Http\Controllers\HomeController::class, 'index']);
//{return view ('index', [
//    'index' => Post::latest()->get()
//]);
//});

Auth::routes(['verify' => true]);


Route::get('/p/create', [App\Http\Controllers\PostsController::class, 'create']);

Route::post('/p', [App\Http\Controllers\PostsController::class, 'store']);

Route::get('/p/{post}', [App\Http\Controllers\PostsController::class, 'show']);

Route::post('/p/{post:id}', [CommentsController::class, 'store'])->name('p.show');;

Route::get('/profiles/{user}', [App\Http\Controllers\ProfilesController::class, 'index'])->name('profiles.show');

Route::get('/profiles/{user}/edit', [App\Http\Controllers\ProfilesController::class, 'edit'])->name('profiles.edit');

//Route::post('/profiles/{id}/skills', 'API\CafesController@postAddTags');

Route::patch('/profiles/{user}', [App\Http\Controllers\ProfilesController::class, 'update'])->name('profiles.update');
//Route::get('profiles/{user}', function () {})->middleware('verified');

// Route::get('/email', function(){
 //   Mail::to('perspolis_2012@yahoo.com')->send(new WelcomeMail());
//     return new WelcomeMail();
// });
Route::get('/send-welcomesession', [WelcomeSessionsController::class, 'sendTestNotification']);
//Route::get('skills', [App\Http\Controllers\SkillController::class]);
Route::middleware('auth')->group(function () {
    Route::post('like', LikeController::class, 'like')->name('like');
    Route::delete('like', LikeController::class, 'unlike')->name('unlike');
});
Route::get('contact-form-captcha', [CaptchaValidationController::class, 'index']);
Route::post('captcha-validation', [CaptchaValidationController::class, 'capthcaFormValidate']);
Route::get('reload-captcha', [CaptchaValidationController::class, 'reloadCaptcha']);