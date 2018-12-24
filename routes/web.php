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


Route::middleware( 'guest' )->group( function () {
	Route::get( '/', function () {
		return view( 'auth.login' );
	} );

} );


Route::prefix( 'user' )->group( function () {

	Route::middleware( 'auth' )->group( function () {

		Route::get( '/', function () {
			return view( 'user' );
		} );

		Route::get( '/', 'HomeController@index' )->name( 'home' );
		Route::get( '/dashboard', 'HomeController@index' )->name( 'home' );

	} );

} );

Route::get( '/logout', 'Auth\LoginController@logout' )->name( 'logout' );



Auth::routes();


