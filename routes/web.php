<?php

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
})->middleware('guest');

Route::get('/session', function (){
    $faculties = \App\Faculty::all();
    return view('session', compact('faculties'));
})->middleware('guest');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('posts/create', 'PostController@store');
Route::post('posts/edit/{post}', 'PostController@update');
Route::post('posts/delete/{post}', 'PostController@destroy');

Route::get('posts/{post}/likes', 'LikeController@index');
Route::post('posts/{post}/likes', 'LikeController@store');
Route::post('posts/{post}/likes/unlike', 'LikeController@destroy');

Route::get('posts/{post}/comments', 'CommentController@index');
Route::post('posts/{post}/comments', 'CommentController@store');
Route::post('posts/{post}/comments/{comment}/edit', 'CommentController@update');
Route::post('posts/{post}/comments/{comment}/delete', 'CommentController@destroy');

Route::get('posts/comments/replies', 'ReplyController@index');
Route::post('posts/comments/replies', 'ReplyController@store');
Route::post('posts/comments/replies/{reply}/edit', 'ReplyController@update');
Route::post('posts/comments/replies/{reply}/delete', 'ReplyController@destroy');

Route::get('/{slug}', 'UserController@show');

Route::prefix('uclass')->group(function (){
    Route::get('/student', 'StudentController@index');
    Route::get('/courses', 'CourseController@index');
    Route::get('/courses/{course}', 'CourseController@show');
    Route::post('/courses/create', 'CourseController@store');

    Route::get('/lecturer/login', 'Auth\LecturerLoginController@showLoginForm')->name('lecturer.login');
    Route::post('/lecturer/login', 'Auth\LecturerLoginController@login')->name('lecturer.login.submit');
    Route::post('/lecturer/logout', 'Auth\LecturerLoginController@logout')->name('lecturer.logout');
    Route::get('/lecturer/register', 'Auth\LecturerRegisterController@showRegistrationForm')->name('lecturer.register');
    Route::post('/lecturer/register', 'Auth\LecturerRegisterController@register')->name('lecturer.register.submit');
    Route::get('/lecturer', 'LecturerController@index')->name('lecturer.dashboard');
});
