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

Route::get('test',function(){
    return 12345;
});

Route::get('commit_test',function(){
    return 78987678;
});


Route::get('tarou',function(){
    return 78987678;
});

Route::get('tarou2',function(){
    return 78987678;
});

Route::get('tarou3',function(){
    return 78987678;
});