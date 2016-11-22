<?php

/*
Route HomePages
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

/* 
Routes Navigation Novels
*/
		Route::get('/btth', function () {
		    return view('novels.btth.btth-sinopsis');
		});

		Route::get('/oso', function () {
		    return view('novels.oso.oso-sinopsis');
		});

		Route::get('/tdg', function () {
		    return view('novels.tdg.tdg-sinopsis');
		});

/*
Route Novel BTTH
	
		Route::get('/btth-1', function () {
		    return view('novels.btth.btth-1');
		});

		Route::get('/btth-2', function () {
		    return view('novels.btth.btth-2');
		});

		Route::get('/btth-3', function () {
		    return view('novels.btth.btth-3');
		});

*/

/*
Route Novel OSO
	
		Route::get('/oso-1', function () {
		    return view('novels.oso.oso-1');
		});

		Route::get('/oso-2', function () {
		    return view('novels.oso.oso-2');
		});

		Route::get('/oso-3', function () {
		    return view('novels.oso.oso-3');
		});

*/

/*
Route Novel tdg
	
		Route::get('/tdg-1', function () {
		    return view('novels.tdg.tdg-1');
		});

		Route::get('/tdg-2', function () {
		    return view('novels.tdg.tdg-2');
		});

		Route::get('/tdg-3', function () {
		    return view('novels.tdg.tdg-3');
		});

*/

