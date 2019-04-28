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
Route::get('/questions', 'pages\QuestionsPageController@index')->name('questions');
Route::get('/ask', 'pages\AskQuestionController@index')->name('ask');
Route::get('/buddies', 'pages\BuddiesController@index')->name('buddy');
Route::get('/lookswhatimade', 'pages\LooksWhatIMadeController@index')->name('lookswhatimade');
