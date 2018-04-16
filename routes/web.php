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
/*
 * Index page route
 */
Route::get('/index',function (){
    return view('card/index');
});
/*
 * chart trending page route
 */
Route::get('/chart',function (){
    return view('card/chart');
});
/*
 * Table Trending page route
 */
Route::get('/table',function (){
    return view('card/table');
});
/*
 * naviagation  page route
 */
Route::get('/nav',function (){
    return view('card/nav');
});
/*
 * card page route
 */
Route::get('/card',function (){
    return view('card/card');
});
/*
 * login page route
 */
Route::get('/login',function (){
    return view('card/login');
});
/*
 * registration page route
 */
Route::get('/register',function (){
    return view('card/register');
});
/*
 * forget Password page route
 */
Route::get('/forgot-password',function (){
    return view('card/forgot-password');
});
