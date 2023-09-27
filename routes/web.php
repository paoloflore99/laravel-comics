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

Route::get('/secondo', function () {
    return view('/partials.welcome');
}); //qui decido cosa far vedere 

Route::get('/', function () {
    return view('/layouts.public' );
}); //qui decido cosa far vedere  slide 52

Route::get('/privato', function () {
    return view('/layouts.privato');
}); //qui decido cosa far vedere  slide 52


Route::get('/prova', function () {
    return ('<h1>prova</h1>');
}); //senza la view 

Route::get('/miocontenuto', function () {
    return view('pages.miocontenuto');
});


//la view non si usa per le api