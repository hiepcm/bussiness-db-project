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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('test', function () {
//     //return DB::table('configuration')->where('id',1)->get();
//     return DB::table('configuration')->get();
// });

Route::get('memberRegister', function () {
	return view('registerMembers');
})->name('memberRegister');

Route::post('store', 'MemberController@store')->name('registerMember');