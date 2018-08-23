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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');

Route::prefix('admin')->group(function() {
	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'Auth\AdminLoginController@Login')->name('admin.login.submit');
	Route::get('/', 'AdminController@index')->name('admin.dashboard');
	Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

	Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
	Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
	Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
	Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
});

Route::prefix('adviser')->group(function() {
	Route::get('/login', 'Auth\AdviserLoginController@showLoginForm')->name('adviser.login');
	Route::post('/login', 'Auth\AdviserLoginController@Login')->name('adviser.login.submit');
	Route::get('/', 'AdviserController@index')->name('adviser.dashboard');
	Route::get('/logout', 'Auth\AdviserLoginController@logout')->name('adviser.logout');

	Route::post('/password/email', 'Auth\AdviserForgotPasswordController@sendResetLinkEmail')->name('adviser.password.email');
	Route::get('/password/reset', 'Auth\AdviserForgotPasswordController@showLinkRequestForm')->name('adviser.password.request');
	Route::post('/password/reset', 'Auth\AdviserResetPasswordController@reset');
	Route::get('/password/reset/{token}', 'Auth\AdviserResetPasswordController@showResetForm')->name('adviser.password.reset');
});

Route::prefix('aposys')->group(function() {
	Route::get('/login', 'Auth\AposysLoginController@showLoginForm')->name('aposys.login');
	Route::post('/login', 'Auth\AposysLoginController@Login')->name('aposys.login.submit');
	Route::get('/', 'AposysController@index')->name('aposys.dashboard');
	Route::get('/logout', 'Auth\AposysLoginController@logout')->name('aposys.logout');

	Route::post('/password/email', 'Auth\AposysForgotPasswordController@sendResetLinkEmail')->name('aposys.password.email');
	Route::get('/password/reset', 'Auth\AposysForgotPasswordController@showLinkRequestForm')->name('aposys.password.request');
	Route::post('/password/reset', 'Auth\AposysResetPasswordController@reset');
	Route::get('/password/reset/{token}', 'Auth\AposysResetPasswordController@showResetForm')->name('aposys.password.reset');
});

Route::prefix('cashier')->group(function() {
	Route::get('/login', 'Auth\CashierLoginController@showLoginForm')->name('cashier.login');
	Route::post('/login', 'Auth\CashierLoginController@Login')->name('cashier.login.submit');
	Route::get('/', 'CashierController@index')->name('cashier.dashboard');
	Route::get('/logout', 'Auth\CashierLoginController@logout')->name('cashier.logout');

	Route::post('/password/email', 'Auth\CashierForgotPasswordController@sendResetLinkEmail')->name('cashier.password.email');
	Route::get('/password/reset', 'Auth\CashierForgotPasswordController@showLinkRequestForm')->name('cashier.password.request');
	Route::post('/password/reset', 'Auth\CashierResetPasswordController@reset');
	Route::get('/password/reset/{token}', 'Auth\CashierResetPasswordController@showResetForm')->name('cashier.password.reset');
});

Route::prefix('e2e_ojt')->group(function() {
	Route::get('/login', 'Auth\E2EOJTLoginController@showLoginForm')->name('e2e_ojt.login');
	Route::post('/login', 'Auth\E2EOJTLoginController@Login')->name('e2e_ojt.login.submit');
	Route::get('/', 'E2EOJTController@index')->name('e2e_ojt.dashboard');
	Route::get('/logout', 'Auth\E2EOJTLoginController@logout')->name('e2e_ojt.logout');

	Route::post('/password/email', 'Auth\E2EOJTForgotPasswordController@sendResetLinkEmail')->name('e2e_ojt.password.email');
	Route::get('/password/reset', 'Auth\E2EOJTForgotPasswordController@showLinkRequestForm')->name('e2e_ojt.password.request');
	Route::post('/password/reset', 'Auth\E2EOJTResetPasswordController@reset');
	Route::get('/password/reset/{token}', 'Auth\E2EOJTResetPasswordController@showResetForm')->name('e2e_ojt.password.reset');
});

Route::prefix('registrar')->group(function() {
	Route::get('/login', 'Auth\RegistrarLoginController@showLoginForm')->name('registrar.login');
	Route::post('/login', 'Auth\RegistrarLoginController@Login')->name('registrar.login.submit');
	Route::get('/', 'RegistrarController@index')->name('registrar.dashboard');
	Route::get('/logout', 'Auth\RegistrarLoginController@logout')->name('registrar.logout');

	Route::post('/password/email', 'Auth\RegistrarForgotPasswordController@sendResetLinkEmail')->name('registrar.password.email');
	Route::get('/password/reset', 'Auth\RegistrarForgotPasswordController@showLinkRequestForm')->name('registrar.password.request');
	Route::post('/password/reset', 'Auth\RegistrarResetPasswordController@reset');
	Route::get('/password/reset/{token}', 'Auth\RegistrarResetPasswordController@showResetForm')->name('registrar.password.reset');
});

Route::prefix('student_assistant')->group(function() {
	Route::get('/login', 'Auth\StudentAssistantLoginController@showLoginForm')->name('student_assistant.login');
	Route::post('/login', 'Auth\StudentAssistantLoginController@Login')->name('student_assistant.login.submit');
	Route::get('/', 'StudentAssistantController@index')->name('student_assistant.dashboard');
	Route::get('/logout', 'Auth\StudentAssistantLoginController@logout')->name('student_assistant.logout');

	Route::post('/password/email', 'Auth\StudentAssistantForgotPasswordController@sendResetLinkEmail')->name('student_assistant.password.email');
	Route::get('/password/reset', 'Auth\StudentAssistantForgotPasswordController@showLinkRequestForm')->name('student_assistant.password.request');
	Route::post('/password/reset', 'Auth\StudentAssistantResetPasswordController@reset');
	Route::get('/password/reset/{token}', 'Auth\StudentAssistantResetPasswordController@showResetForm')->name('student_assistant.password.reset');
});
