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

Route::get('/login/{userType}', 'App\Http\Controllers\LoginController@login')
    ->where('userType', config('constants.userType.QA.value') . '|' . config('constants.userType.RD.value'));

Route::group(['middleware' => ['auth'], 'prefix' => 'bug'], function () {
    Route::get('/', 'App\Http\Controllers\BugController@index')->name('home');
    Route::get('/add', 'App\Http\Controllers\BugController@add');
    Route::post('/', 'App\Http\Controllers\BugController@store');
});
