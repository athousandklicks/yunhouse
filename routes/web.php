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
Route::get('yunhouse-character', 'staticPagesController@getYunhouseCharacters');
Route::get('yunhouse-character/{id}', ['as' => 'character.single', 'uses' => 'staticPagesController@getSingle']);



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

Route::get('list-of-tales', 'YuntaleController@getTales');
Route::get('yuntale/{slug}', ['as' => 'yuntale.single', 'uses' => 'YuntaleController@getSingle'])->where('slug', '[\w\d\-\_]+');


Auth::routes();

Route::get('/', 'staticPagesController@getIndex')->name('index');





/*
|--------------------------------------------------------------------------
| Social Login Routes
|--------------------------------------------------------------------------

*/
Route::get('auth/{provider}', 'Auth\RegisterController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\RegisterController@handleProviderCallback');

/*
|--------------------------------------------------------------------------
| Resources Routes
|--------------------------------------------------------------------------
*/
Route::get('tales/totm/{id}', ['as'=>'tales.totm', 'uses' => 'TalesController@totm']);
Route::post('tales/update-totm/{id}', ['as'=>'tales.update-totm', 'uses' => 'TalesController@updateTotm']);

Route::resource('characters', 'CharactersController');
Route::resource('tales', 'TalesController');
Route::resource('admin', 'BackendIndexController');
/*
Route::resource('mother-africa', 'OneController');
Route::resource('welcome-to-yunhouse', 'TwoController');
Route::resource('africa-house', 'ThreeController');
Route::resource('a-picture-of-africa', 'FourController');
Route::resource('in-the-name-of-africa', 'FiveController');
Route::resource('whose-africa-is-it', 'SixController');
Route::resource('the-chips', 'SevenController');
Route::resource('onward-african-soldiers', 'EightController');
Route::resource('the-berliner-cult', 'NineController');
*/