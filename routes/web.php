<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FacebookController;

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

Route::get('/home', function () {
    return view('hellouser');;
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('auth/fb',[FacebookController::class,'redirectToFacebook'])->name('auth.fb');
Route::get('auth/fb/rd',[FacebookController::class,'handleFacebookCallback']);

Route::get('auth/git',[FacebookController::class,'redirectToGit'])->name('auth.git');
Route::get('auth/git/rd',[FacebookController::class,'handleGitCallback']);