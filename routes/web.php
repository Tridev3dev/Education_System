<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//WELCOME//
Route::get('/', function () {
    return view('welcome');
});

// INDEX//
Route::get('/', function () {
    return view('index');
});

// home//
Route::get('/home', function () {
    return view('home');
});

// about//
Route::get('/about', function () {
    return view('about');
});

// contact//
Route::get('/contact', function () {
    return view('contact');
});

// footer//
Route::get('/footer', function () {
    return view('footer');
});


//REGISTER//
Route::get('/register', function () {
    return view('register');
});

  //LOGIN//
Route::get('login', function () {
    return view('login');
}); 


//LOGIN//
Route::get('users',[UserController::class,'show']);

// Route::get('users', function () {
//     return view('users');
// });

  // REGISTER-SUBMIT//
 Route::post('/register-submit',[UserController::class,'customSignup']);

 // LOGIN-SUBMIT//
Route::post('/login-submit',[UserController::class,'createSignin']);

// USERHOME//
Route::get('/userhome', function () {
    return view('userhome');
});
Route::get('/logout', function () {
    return view('logout');
});

// Middleware//
 Route::group(['middleware'],function()
{


});

//PDF//
Route::get('pdf',[PdfController::class,'createPdf']);