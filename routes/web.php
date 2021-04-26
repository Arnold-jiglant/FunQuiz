<?php

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
Route::get('/home', function () {
    if (Auth::user()->role_id == \App\Role::ADMIN) {
        return redirect()->route('admin');
    }

    return "<h1>Under Maintenance</h1>";
})->name('home')->middleware('auth');

Route::get('testing', function () {
    return $tag = \App\Tag::create(['name'=>'Testing','user_id'=>1]);
});


Route::name('admin')->middleware('auth')->get('/admin/{vue_capture?}', function () {
    return view('admin.index');
})->where('vue_capture', '[\/\w\.-]*');


Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Auth::routes([
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);
