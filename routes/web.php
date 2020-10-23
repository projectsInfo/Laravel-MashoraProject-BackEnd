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

//Route::get('/', function () {
//    return view('/index');
//});

Route::get('/', 'indexController@index')->name('index');


Route::get('success_consulting', 'adminController@indexSuccess')->name('success_consulting');
Route::get('ignored_consulting', 'adminController@indexIgnored')->name('ignored_consulting');
Route::get('waiting_consulting', 'adminController@indexWaiting')->name('waiting_consulting');


Route::get('/lawyerRegister', 'userrrlaw@view')->name('lawyerRegister');
// Route::get('/user_search', 'userSearchController@view')->name('user_search_page');
Route::match(['get','post'],'/user_search', 'userrrlaw@lawyerSearch')->name('user_search');
//Route::get('/userSearch', 'userrrlaw@show')->name('userSearch');
// Route::get('/user_search', 'userrrlaw@lawyerSearch');
Route::get('/lawyer_profile/{id}', 'lawyerProfileController@edit')->name('lawyer_profile_edit');
//Route::post('/lawyer_profile/{id}', 'lawyerProfileController@view')->name('lawyer_profile_update');
Route::get('/admin_page', 'adminPageController@view');
//Route::resource('/admin_consulting', 'consultingAdminController@view');
Route::get('/payment_method', 'paymentMethodController@view');
Route::get('/userRegister', 'userRegisterTow@view')->name('userRegister');
Route::get('/lawyerOffice', 'userRegisterTow@view')->name('lawyerOffice');
//Route::get('/reservation', 'reservationController@view');
Route::get('/reservation/{id}', 'reservationController@edit')->name('edit');
Route::post('/reservation/{id}', 'reservationController@update')->name('update');
Route::post('/lawyerSearch/', 'userrrlaw@searchLawyer')->name('lawyerSearch');
//Route::match(['get','post'],'/user_search-filter', 'userrrlaw@filter');
//Route::post('/reservation/{id}', 'reservationController@updatePaxxxxxxx   ssword')->name('updatePassword');


//---------------------Send Mail-----------------------//
Route::post('/sendMail', 'mailController@sendMessage')->name('sendMail');
//---------------Social_Login------------------------------------//
// facebook
Route::get('login/facebook', 'Auth\LoginController@redirectToProvider')->name('facebook.login');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');
// google
Route::get('login/google', 'Auth\LoginGoogleController@redirectToProvider')->name('google.login');
Route::get('auth/google/callback', 'Auth\LoginGoogleController@handleProviderCallback');
//---------------Social_Login------------------------------------//

Auth::routes();
//--------------------Start_Chats----------------------------------------------//
Route::get('/chat', 'HomeController@index')->name('chat');
Route::get('userlist', 'MessageController@user_list')->name('user.list');
Route::get('usermessage/{id}', 'MessageController@user_message')->name('user.message');
Route::post('senemessage', 'MessageController@send_message')->name('user.message.send');
Route::get('deletesinglemessage/{id}', 'MessageController@delete_single_message')->name('user.message.delete.single');
Route::get('deleteallmessage/{id}', 'MessageController@delete_all_message')->name('user.message.delete.all');
//--------------------End_Chats----------------------------------------------//






