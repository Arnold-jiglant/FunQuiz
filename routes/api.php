<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
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
                Route::get('/users', 'UserController@index')->name('admin.users');
                Route::post('/user', 'UserController@store')->name('admin.user.store');
                Route::put('/user/{user}', 'UserController@update')->name('admin.user.update');

                //Tags
                Route::get('/tags', 'TagController@index')->name('admin.tags');
                Route::post('/tag', 'TagController@store')->name('admin.tag.store');
                Route::put('/tag/{tag}', 'TagController@update')->name('admin.tag.update');
                Route::get('/search/tag/{search}', 'TagController@search')->name('admin.tag.search');

                //Topics
                Route::get('/topics', 'TopicController@index')->name('admin.topics');
                Route::post('/topic', 'TopicController@store')->name('admin.topic.store');
                Route::put('/topic/{topic}', 'TopicController@update')->name('admin.topic.update');
            });
    });
});


Route::get('image/{image}', function ($image) {

    $image = \App\Image::find($image);
    if ($image != null) {
        $path = storage_path('app/') . $image->path;
        if (File::exists($path)) {
            $file = File::get($path);
            $mime = File::mimeType($path);
            return response($file, 200)->header('content-Type', $mime);
        }
    }


    //Not found
    $path = public_path('assets/img/notfound.png');
    $file = File::get($path);
    $mime = File::mimeType($path);
    return response($file, 200)->header('content-Type', $mime);
})->name('image');
