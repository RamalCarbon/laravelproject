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

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');
Route::get('/createItem', 'PagesController@createItem');
Route::resource('posts','PostsController');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// Route::group(['middleware' => ['web', 'auth']], function(){
//     Route::get('/', function(){
//         return view('welcome');
//     });

//     Route::get('/home', function(){
//         if (Auth::user()->admin==0){
//             return view('home');
//         }else{
//         $users['users']= \App\Users::all();
//         return view('adminhome', $users);
//     }
//     });
// });