<?php

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

Route::prefix('v1')->group(function () {
    Route::middleware('auth:sanctum')->group(function () {
        Route::get('/user', function () {
            return new \App\Http\Resources\UserProfileResource(\Illuminate\Support\Facades\Auth::user());
        });


        /*
         *-------------------
         * ADMIN ROUTES
         * ------------------
         */
        Route::namespace('v1\admin')
            ->prefix('admin')
            ->middleware('admin')
            ->group(function () {
                //User
                Route::get('/users','UserController@index')->name('admin.users');
                Route::post('/user','UserController@store')->name('admin.user.store');
                Route::put('/user/{user}','UserController@update')->name('admin.user.update');

                //Tags
                Route::get('/tags','TagController@index')->name('admin.tags');
                Route::post('/tag','TagController@store')->name('admin.tag.store');
                Route::put('/tag/{tag}','TagController@update')->name('admin.tag.update');
            });
    });
});
