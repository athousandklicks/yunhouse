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
Route::get('welcome-to-yunhouse', 'staticPagesController@getYunhouseWelcome');
Route::get('download', 'staticPagesController@getDownload');

Route::get('1884-gallery', 'palaverController@gallery1884');
Route::get('1884-debate', 'palaverController@debate1884');
Route::get('tale-of-the-month', 'palaverController@taleOfTheMonth');
Route::get('excerpt-of-the-week', 'palaverController@excerptOfTheWeek');
Route::get('authors-blog', 'palaverController@authorsBlog');
Route::get('palaver-quotes', 'palaverController@yunhouseQuotes');

Route::get('list-of-tales', 'YuntaleController@getTales');
Route::get('yuntale/{slug}', ['as' => 'yuntale.single', 'uses' => 'YuntaleController@getSingle'])->where('slug', '[\w\d\-\_]+');

Route::get('list-of-debates', 'FrontDebateController@getDebates');
Route::get('debate/{slug}', ['as' => 'frontdebate.single', 'uses' => 'FrontDebateController@getSingle'])->where('slug', '[\w\d\-\_]+');
Route::get('debate-index', 'FrontDebateController@index');


// Route::get('index', ['as' => 'frontdebate.index', 'uses' => 'FrontDebateController@currentDebate'])->where('active_debate', '1');


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


Route::get('comments/{slug}', ['uses' => 'CommentsController@index', 'as' => 'comments.index']);

Route::post('comments/{tale_id}', ['uses' => 'CommentsController@store', 'as' => 'comments.store']);

Route::get('list-of-downloads', 'staticPagesController@getDownloadList');
Route::get('download/{file}', ['as' => 'download.file', 'uses' => 'DownloadsController@getDownloadFile']);


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
Route::put('tales/update-totm/{id}', ['as'=>'tales.update-totm', 'uses' => 'TalesController@updateTotm']);

Route::resource('characters', 'CharactersController');
Route::resource('tales', 'TalesController');
Route::resource('debates', 'DebateController');
Route::resource('tags', 'TagController');
Route::resource('reviews', 'ReviewsController');
Route::resource('admins', 'AdminController');
Route::resource('downloads', 'DownloadsController');
Route::resource('articleimages', 'ArticleImagesController', ['except' => ['create']]);
Route::resource('comingsoon', 'ComingSoonController', ['except' => ['create']]);

Route::get('list-of-reviews', 'ReviewersController@getListOfReviews');
Route::get('reviewers-text/{slug}', ['as' => 'reviews.single', 'uses' => 'ReviewersController@getSingleReview'])->where('slug', '[\w\d\-\_]+');


/*
Admin Controller
*/


Route::prefix('admin')->group(function() {
  Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
  Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
  Route::get('/dashboard', 'AdminController@dashboard')->name('admin.dashboard');




  //Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

  // Password reset routes
  //Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
  //Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
  //Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
  //::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
});