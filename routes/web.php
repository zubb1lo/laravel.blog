<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AuthController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

//Route::get('/', 'MainController@index');
Route::get('/', [MainController::class, 'index'])
    ->name('indexRoute');

Route::get('/login', [AuthController::class, 'getAuthForm'])
    ->name('getAuthFormRoute');
Route::post('/login', [AuthController::class, 'postAuthForm'])
    ->name('postAuthFormRoute');

Route::get('/about/{id?}', 'MainController@about')
    ->where('id', '[0-9]+')
    ->name('aboutRoute');

Route::get('/main_blog/', 'MainController@blog')
    ->name('main_blogRoute');

Route::get('/firstTest', function () {
    return view('firstTest');})
    ->name('firstTestRoute');

/*Route::get('/404', function () {
    return view('404');
});*/

Route::view('/404', '404');
