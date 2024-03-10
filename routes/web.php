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


    Route::get('/income/unemployment-compensation', 'UnemploymentController@unemploymentCompensationCreate')->name('income.unemployment.create');
    Route::post('/income/unemployment-compensation', 'UnemploymentController@unemploymentCompensationStore')->name('income.unemployment.store');
    Route::put('/income/{unemployment_compensation}/unemployment-compensation', 'UnemploymentController@unemploymentCompensationUpdate')->name('income.unemployment.update');

    Route::get('/income/other-unemployment-compensation', 'UnemploymentController@otherUnemploymentCompensationCreate')->name('income.other.unemployment.create');
    Route::post('/income/other-unemployment-compensation', 'UnemploymentController@otherUnemploymentCompensationStore')->name('income.other.unemployment.store');
    Route::put('/income/{unemployment_compensation}/other-unemployment-compensation', 'UnemploymentController@otherUnemploymentCompensationUpdate')->name('income.other.unemployment.update');

    Route::get('/income/social-security-benefits', 'UnemploymentController@socialSecurityBenefitsCreate')->name('income.ssb.create');
    Route::post('/income/social-security-benefits', 'UnemploymentController@socialSecurityBenefitsStore')->name('income.ssb.store');
    Route::put('/income/{ssb}/social-security-benefits', 'UnemploymentController@socialSecurityBenefitsUpdate')->name('income.ssb.update');

    Route::get('/income/crypto', 'UnemploymentController@crypto')->name('income.crypto.create');
    Route::post('/income/crypto', 'UnemploymentController@crypto')->name('income.crypto.store');
    Route::put('/income/{crypto}/crypto', 'UnemploymentController@crypto')->name('income.crypto.update');


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
