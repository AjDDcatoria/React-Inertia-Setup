<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/',function(){
    return Inertia::render('Home');
});

Route::get('/login',function(){
    return Inertia::render('Login');
})->name('login');

Route::post('/login',function(Request $request){
    dd($request->all());
});