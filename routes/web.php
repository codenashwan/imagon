<?php

use Illuminate\Support\Facades\Route;
Route::group(['middleware' => ['throttle:100,1']],function(){

Route::get('/' , App\Http\Controllers\Welcome::class)->name('/');
Route::get('/doc' , App\Http\Controllers\Doc::class)->name('doc');

});