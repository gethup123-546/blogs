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
##################start post
Route::get('/home','PostController@home')->name('home');

Route::get('/create_post','PostController@create_post')->name('create_post');
Route::post('/create_post_stor','PostController@create_post_stor')->name('create_post_stor');

Route::get('/edit_post/{id}','PostController@edit_post')->name('edit_post');
Route::PUT('/edit_post_stor/{id}','PostController@edit_post_stor')->name('edit_post_stor');

Route::delete('/delete/{id}','PostController@delete')->name('delete');

Route::get('/show/{id}','PostController@show')->name('show');

//comments
Route::post('/comment_stor','PostController@comment_stor')->name('comment_stor');
Route::get('/comment_update/{id}','PostController@comment_update')->name('comment_update');
Route::PUT('/comment_update_stor/{id}','PostController@comment_update_stor')->name('comment_update_stor');
Route::delete('/comment_delete/{id}','PostController@comment_delete')->name('comment_delete');


################end post
################start user
Route::get('/profile/{id}','UserController@profile')->name('profile');
Route::get('/edit_profile/{id}','UserController@edit_profile')->name('edit_profile');
Route::PUT('/edit_profile_stor/{id}','UserController@edit_profile_stor')->name('edit_profile_stor');
Route::get('/dashbord','UserController@dashbord')->name('dashbord');

################end user


//logout
Route::get('/logout',function(){
    Auth::logout();
    return redirect('/login')->with('message','you now a logout !!');
});

Auth::routes();//جيا من عمل authemtication
