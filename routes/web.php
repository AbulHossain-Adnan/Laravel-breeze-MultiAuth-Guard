<?php

use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
    Route::namespace('Auth')->group(function(){
        Route::get('login','AdminLoginController@create')->name('login');
        Route::POST('login','AdminLoginController@store')->name('login_post');
        Route::POST('logout','AdminLoginController@destroy')->name('logout');
         Route::get('dashboard','HomeController@dashboard')->name('dashboard');
    });
    
});
    
  


