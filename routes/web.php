<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\PersonalController;
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
Route::get('/', function(){
    return view('home');
})->name('home');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard')->middleware('auth');

Route::get('/login', 'Auth\LoginController@index')->name('login');
Route::post('/login', 'Auth\LoginController@store');
Route::post('/logout', 'Auth\LogoutController@store')->name('logout');

Route::get('/register', 'Auth\RegisterController@index')->name('register');
Route::post('/register', 'Auth\RegisterController@store');

Route::group(['middleware' => ['auth']], function () {
    Route::get('personal', 'PersonalController@create')->name('personal.create');
    Route::post('personal', 'PersonalController@store')->name('personal.store');
    Route::put('/personal/{personal}', 'PersonalController@update')->name('personal.update');

    Route::resource('/personal/dependents', 'DependentController');

    Route::get('income', 'IncomeController@create')->name('income.create');
    Route::post('income', 'IncomeController@store')->name('income.store');
    Route::put('/income/{income}', 'IncomeController@update')->name('income.update');
});