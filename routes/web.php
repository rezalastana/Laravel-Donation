<?php

use App\Http\Controllers\AdminController;
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

/*
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
*/

//rouote group untuk admin
Route::group([
    'middleware' => ['auth','role:admin'] //kondisinya berarti harus login, dan role sebagai admin //pemanggilan role:admin ini harus disetting pada kernel (buat 'role') //tambahkan juga pada User Model => function Role
], function() {
    Route::get('/dashboard', function(){
        return view('layouts.main');
    })->name('dashboard');
    Route::get('/adminaja', [AdminController::class, 'index']);
});


//route group untuk donatur
Route::group([
    'middleware' => ['auth','role:donatur']
], function() {
    // Route::get('/dashboard', function(){
    //     // return 'Welcome Donatur';
    //     return view('dashboard');})
    //     ->name('dashboard');
});
