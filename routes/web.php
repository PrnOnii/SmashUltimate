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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/planning', 'PlanningController@index')->name('planning');
Route::get('/VODs', 'VODController@index')->name('VOD');
Route::get('/ranking', 'RankingController@index')->name('ranking');
Route::get('/worldmap', 'WorldmapController@index')->name('worldmap');
Route::get('/contact', 'ContactController@index')->name('contact');
