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

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard')->middleware('auth');

Route::get('/login', 'Auth\LoginController@index')->name('login');
Route::post('/login', 'Auth\LoginController@store');
Route::post('/logout', 'Auth\LogoutController@store')->name('logout');

Route::get('/register', 'Auth\RegisterController@index')->name('register');
Route::post('/register', 'Auth\RegisterController@store');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/personal', 'PersonalController@create')->name('personal.create');
    Route::post('/personal', 'PersonalController@store')->name('personal.store');
    Route::put('/personal/{personal}', 'PersonalController@update')->name('personal.update');
    Route::resource('/personal/dependents', 'DependentController');

    Route::get('/income', 'IncomeController@create')->name('income.create');
    Route::post('/income', 'IncomeController@store')->name('income.store');
    Route::put('/income/{income}', 'IncomeController@update')->name('income.update');
    Route::get('/income/unemployment-compensation', 'IncomeController@unemploymentCompensation')->name('income.unemployment');
    Route::get('/income/other-unemployment-compensation', 'IncomeController@otherUnemploymentCompensation')->name('income.other.unemployment');
    Route::get('/income/social-security-benefits', 'IncomeController@socialSecurityBenefits')->name('income.ssb');
    Route::get('/income/crypto', 'IncomeController@crypto')->name('income.crypto');

    Route::get('/income/w-2/{w_2}/clergy-wages', 'W2Controller@ministerClergyWages')->name('w-2.mcw.edit');
    Route::put('/income/w-2/{w_2}/clergy-wages', 'W2Controller@ministerClergyWagesUpdate')->name('w-2.mcw.update');
    Route::resource('/income/w-2', 'W2Controller');
    Route::get('/income/w-2/create/spouse', 'W2Controller@create')->name('spouse.w-2.create');
    Route::resource('/income/form1099-g', 'Form1099GController');


    Route::get('/deductions-credits/mortgage-interest/{mortgage_interest}/estate-taxes', 'MortgageInterestController@estateTaxes')->name('mortgage-interest.estate.edit');
    Route::put('/deductions-credits/mortgage-interest/{mortgage_interest}/estate-taxes', 'MortgageInterestController@estateTaxesUpdate')->name('mortgage-interest.estate.update');
    Route::resource('/deductions-credits/mortgage-interest', 'MortgageInterestController');

    Route::get('/deductions-credits/charities-donations', 'DeductionsCreditsController@charitiesDonationsCreate')->name('charities-donations.create');
    Route::post('/deductions-credits/charities-donations', 'DeductionsCreditsController@charitiesDonationsStore')->name('charities-donations.store');
    Route::put('/deductions-credits/{deductions_credit}/charities-donations', 'DeductionsCreditsController@charitiesDonationsUpdate')->name('charities-donations.update');

    Route::get('/deductions-credits/medical-expenses', 'DeductionsCreditsController@medicalExpensesCreate')->name('medical-expenses.create');
    Route::post('/deductions-credits/medical-expenses', 'DeductionsCreditsController@medicalExpensesStore')->name('medical-expenses.store');
    Route::put('/deductions-credits/{deductions_credit}/medical-expenses', 'DeductionsCreditsController@medicalExpensesUpdate')->name('medical-expenses.update');

    Route::get('/deductions-credits/taxes', 'DeductionsCreditsController@taxesCreate')->name('taxes.create');
    Route::post('/deductions-credits/taxes', 'DeductionsCreditsController@taxesStore')->name('taxes.store');
    Route::put('/deductions-credits/{deductions_credit}/taxes', 'DeductionsCreditsController@taxesUpdate')->name('taxes.update');
});
