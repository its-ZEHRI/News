<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin_auth;

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
    return view('login');
});

Route::post('/login',[Admin_auth::class,'login']);

// Route::get('/login', function () {
//     return view('home');
// });

Route::get('/logout', function () {
	session()->forget('Admin_logged_in');
    return redirect('/');
});

Route::group(['middleware'=>['admin_auth']],function(){
	Route::view('/home','home');
	// Route::get('/home', function () {
 //    	return view('home');
	// });
	Route::get('/addNews', function () {
	    return view('addNews');
	});

	Route::get('/table',function(){
		return view('table');
	});
});







