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

Route::get('/', 'staticPagesController@getIndex')->name('static_pages.index');
Route::get('about-author', 'staticPagesController@getAboutAuthor');
Route::get('dreaming-yunhouse', 'staticPagesController@getDreamingYunhouse');	
Route::get('yunhouse-in-brief', 'staticPagesController@getYunhouseInBrief');


				Route::get('cy', 'characterController@getCy');
				Route::get('africa-freedom', 'characterController@getAfricaFreedom');
				Route::get('africa-picture', 'characterController@getAfricaPicture');
				Route::get('african-adventurers', 'characterController@getAfricanAdventurers');
				Route::get('afrinc', 'characterController@getAfrinc');
				Route::get('alphonsus', 'characterController@getAlphonsus');
				Route::get('berliner-cult', 'characterController@getBerlinerCult');
				Route::get('beryl-fairbanks', 'characterController@getBerylFairbank');
				Route::get('gafla', 'characterController@getGafla');
				Route::get('lekwot', 'characterController@getLekwot');
				Route::get('mnama', 'characterController@getMnama');
				Route::get('nkungolo', 'characterController@getNkungolo');
				Route::get('ogesayi', 'characterController@getOgesayi');
				Route::get('palavar', 'characterController@getPalavar');

