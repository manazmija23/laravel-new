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
    Route::get('/comments/{comment}', 'CommentController@destroy')->name('comments.destroy');
    Route::post('/comments/toggle-approve', 'CommentController@approval');
});



Route::post('comments/{comments}', 'CommentController@store')->name('comments.store');



Route::resource('/admin', 'AdminController');













