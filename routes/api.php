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
                Route::get('/user/{user}', 'UserController@show')->name('admin.user.show');
                Route::post('/user', 'UserController@store')->name('admin.user.store');
                Route::put('/user/{user}', 'UserController@update')->name('admin.user.update');

                //Profiling
                Route::get('/user/{user}/topics','UserController@topics')->name('admin.user.topics');
                Route::get('/user/{user}/tags','UserController@tags')->name('admin.user.tags');
                Route::post('/user/{user}/update/image','UserController@updateImage')->name('admin.user.update.image');

                //Tags
                Route::get('/tags', 'TagController@index')->name('admin.tags');
                Route::post('/tag', 'TagController@store')->name('admin.tag.store');
                Route::put('/tag/{tag}', 'TagController@update')->name('admin.tag.update');
                Route::delete('/tag/{tag}', 'TagController@destroy')->name('admin.tag.destroy');
                Route::get('/search/tag/{search}', 'TagController@search')->name('admin.tag.search');

                //Topics
                Route::get('/topics', 'TopicController@index')->name('admin.topics');
                Route::get('/topic/{topic}', 'TopicController@show')->name('admin.topic.get');
                Route::post('/topic', 'TopicController@store')->name('admin.topic.store');
                Route::post('/update/topic/{topic}', 'TopicController@update')->name('admin.topic.update');

                //Questions
                Route::get('/{topic}/questions', 'QuestionController@index')->name('admin.questions');
                Route::post('/{topic}/question', 'QuestionController@store')->name('admin.question.store');
                Route::post('/update/question/{question}', 'QuestionController@update')->name('admin.question.update');
                Route::delete('/question/{question}', 'QuestionController@destroy')->name('admin.question.destroy');

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
