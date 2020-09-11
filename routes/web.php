<?php

use Illuminate\Support\Facades\Route;

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
    echo 'hello';
});

Route::post('/envoie', 'HomeController@envoie');

Auth::routes();

Route::get('/mglabs/home', 'HomeController@index')->name('home');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::view('/ui', 'ui.index');

Route::get('/wordpress', function(){
require('..\wordpress\wp-load.php');
return loginUser(Auth::user()->username);
});

Route::post('/wp-login', function( \calderawp\WPUser\JWTAuthenticator $authenticator, \Illuminate\Http\Request $request ){
	if( $request->has( 'username' ) && $request->has( 'password' ) ){
		if( $authenticator->login( $request->input( 'username'), $request->input( 'password' ) ) ){
			$user = \calderawp\WPUser\Model\Model::fromAuth( $authenticator );
		}

		//return an error;
	}
});
