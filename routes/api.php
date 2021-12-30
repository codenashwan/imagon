<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['throttle:100,1']],function(){


    Route::post('upload' , [\App\Http\Controllers\Api\api::class , 'upload']);


    
});