<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index',[
        "name" => "stymsaw",
        "password" => "newpassword"
    ]);
});


Route::get('/hello', function() {
    return "hello";
})->name('name');

Route::get('/hello/{name}',function($name){
    return "hello" . $name . "!";
});

Route::get('/hallo',function(){
    return redirect('/hello')->route('hello');
});

Route::fallback(function() {
    return "still got somewhere";
});