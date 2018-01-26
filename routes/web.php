<?php

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
    return view('welcome');
});

Auth::routes();

Route::middleware(['globals'])->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/showOrders', 'HomeController@showOrdersForReachers');
    Route::get('/approval/{id}/{count}', 'HomeController@approval');
    Route::get('/refuse/{id}/{count}', 'HomeController@refuse');
    Route::get('/myProjects', 'HomeController@myProjects');
});



Route::get('/submit/{id}', 'QuestionController@index1');
Route::get('/accepted/{id}', 'QuestionController@store1');
Route::get('/sendedOrder/{id}', 'QuestionController@show');
Route::resource('question','QuestionController');
