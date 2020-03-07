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

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('landing_page');
})->name('landing');

Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware(['verified','userType']);





Route::middleware(['verified', 'userType'])->group(function () {
    Route::get('/facultyhome', 'HomeController@facultyHome')->name('faculty.home');

Route::POST('/counseling/create', 'CounselingController@createCounseling' )->name('create.counseling');
Route::GET('/counseling/delete', 'CounselingController@deleteCounseling' )->name('counseling.delete');


Route::get('/profile', 'ProfileController@index')->name('profile.faculty');

Route::POST('/profile/create', 'FacultyProfileController@store')->name('profile.create');

});
Route::get('/facultyautocomplete', 'AutoComplete\AutoCompleteController@facultycomplete')->name('search');

Route::get('/getcounseling', 'CounselingController@getcounseling')->name('getcounseling');
