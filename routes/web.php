<?php

use App\Http\Controllers\EntryController;
use App\Http\Controllers\SurveyController;

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

/********************************* Home Route START *********************************/
Route::get('/', function ()
{
    return view('home.home');
});

Route::get('/home', function ()
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

Route::get('/logout', 'EntryController@onLogout');

/********************************* Login and Registration Routes END *********************************/

/********************************* About Page Routes START *********************************/

Route::get('/about', function()
{
   return view('about.about'); 
});

/********************************* About Page Routes END *********************************/

/********************************* Survey Routes START *********************************/

Route::post('/survey', 'SurveyController@onPullSurvey');

/********************************* Survey Routes END *********************************/

Route::post('/flowplan', 'SurveyController@onPullSurvey');

// Route::get('/resources', 'SurveyController@onViewResources');

Route::get('/resource-list', 'ResourceController@onViewResources');

Route::get('/church-list', 'ResourceController@onViewChurces');
