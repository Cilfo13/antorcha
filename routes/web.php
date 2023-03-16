<?php

use Illuminate\Support\Facades\Route;


$controller_path = 'App\Http\Controllers';

// Main Page Route

// pages


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    $controller_path = 'App\Http\Controllers';

    Route::get('/', $controller_path . '\pages\HomePage@index')->name('pages-home');
    Route::get('/admin', $controller_path . '\pages\Admin@index')->name('pages-admin');
    Route::get('/ganar-añadir', $controller_path . '\pages\Ganar@añadir')->name('pages-ganar-añadir'); 
});
