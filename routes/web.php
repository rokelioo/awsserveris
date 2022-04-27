<?php

use App\Http\Controllers\ElderController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
});

Route::get('/logout', function () {
    Session::flush();
    Auth::logout();
    return redirect('login');
});

Route::get('/checklogin', [UserController::class, 'checklogin']);
Route::get('/checkRegistration', [UserController::class, 'checkRegistration']);

Route::get('/user-list', [UserController::class, 'getUserList']);
Route::get('/elder-list', [ElderController::class, 'index']);
Route::get('/edit-profiles', [ElderController::class, 'edit']);
Route::get('/add-new', function () {
    return view('addNewPerson');
});
Route::get('/emergency-call', [ElderController::class, 'emergencyCall']);


