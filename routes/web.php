<?php

/*
 * |--------------------------------------------------------------------------
 * | Web Routes
 * |--------------------------------------------------------------------------
 * |
 * | Here is where you can register web routes for your application. These
 * | routes are loaded by the RouteServiceProvider within a group which
 * | contains the "web" middleware group. Now create something great!
 * |
 */
Route::get('/laravel', function ()
{
    return view('welcome');
});

Route::get('/', function ()
{
    return view('home.home');
});

/**
 * ******************************* Login and Registration Routes START ********************************
 */

Route::get('/login', function ()
{
    return view('login&registration.login');
});

Route::get('/registration', function ()
{
    return view('login&registration.registration');
});

Route::post('/register', 'EntryController@onRegister');

Route::post('/signin', 'EntryController@onLogin');

/********************************* Login and Registration Routes END *********************************/

/********************************* About Page Routes START *********************************/

Route::get('/about', function()
{
   return view('about.about'); 
});

/********************************* About Page Routes END *********************************/

/********************************* Survey Routes START *********************************/

Route::get('/survey', function()
{
    return view('survey&phases.survey');
});

/********************************* Survey Routes END *********************************/
