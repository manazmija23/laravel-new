<?php

Auth::routes();

Route::resource('/', 'PostsController');
Route::get('/posts/{post}', 'PostsController@show');
Route::resource('/tags', 'TagController');


Route::get('/home', 'HomeController@index');
Route::get('logout', 'Auth\LoginController@logout');

Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::resource('/comments', 'CommentController');

});



Route::post('comments/{comments}', 'CommentController@store')->name('comments.store');
Route::get('admin/comments/{comment}', 'CommentController@store')->name('comments.destroy');


Route::resource('/admin', 'AdminController');













