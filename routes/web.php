<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('pages.home');
    return view('customersupport');

});
Route::get('/1', function () {
    return view('customersupport');
});
    
Route::get('/2', function () {
    return view('customersupport2');
});
    
