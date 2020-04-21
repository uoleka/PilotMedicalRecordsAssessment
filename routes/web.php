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

Auth::routes(['verify' => true]);
Route::get('/', function () {
    return view('auth/login');
});
Route::get('/home', 'HomeController@index')->name('home');


Route::middleware(['verified'])->group(function () {
Route::resource('applicant','ApplicantController');
Route::resource('appldec','appldecController');
Route::resource('ameapproval','ameapprovalController');
Route::resource('applconvic','applconvicController');
Route::resource('applhistoryb','applhistorybController');
Route::resource('applhistory','applhistoryController');
Route::resource('appllicense','appllicenseController');
Route::resource('applname','applnameController');
Route::resource('medexam','MedexamController');
Route::resource('amereg','ameregController');
Route::resource('ameaddappl','ameaddapplController');
Route::resource('amareg','AmaregController');
Route::resource('soda','SodaController');
Route::resource('eyerep','EyerepController');
Route::resource('ophtharep','OphtharepController');
Route::resource('medcert','MedcertController');
Route::resource('demedcert','DemedcertController');
Route::resource('nav','navContoller');
Route::resource('instructions','instructionController');
Route::resource('caareg','caaregController');

Route::get('amelist', function () {
    return view('amelist');
});
Route::get('ameapproved', function () {
    return view('ameapproved');
});

Route::resource('role','roleController');

Route::get('prisoda', function () {
    return view('prisoda');
});

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
