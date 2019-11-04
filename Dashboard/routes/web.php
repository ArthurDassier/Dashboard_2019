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

Route::get('/users', 'WelcomeController@getInfos');
Route::post('/users', 'WelcomeController@postInfos');

Route::get('/got', 'ListController@show');

// Route::get('/1', function()
// {
//     return view('vue1');
// });
// Route::get('article/{n}', function($n) {
//     return view('article')->with('numero', $n);
// })->where('n', '[0-9]+');

// Route::get('facture/{n}', function($n) {
//     return view('facture')->withNumero($n);
// })->where('n', '[0-9]+');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
