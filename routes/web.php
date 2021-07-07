<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/quiz/{id}/{question}', function () {
    return view('quiz');
});

Route::get('/results', function () {
    return view('results');
});

Route::post('/create_quiz', 'quizController@create');
